<?php

namespace Tests\Feature\Services;

use App\Application\Services\ComponentRegistryService;
use App\Models\Component;
use App\Models\ComponentInstance;
use App\Models\ComponentVariant;
use App\Models\DesignSystem;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComponentRegistryServiceTest extends TestCase
{
    use RefreshDatabase;

    private ComponentRegistryService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new ComponentRegistryService();
    }

    // --- registerComponent ---

    public function test_register_component_creates_record(): void
    {
        $component = $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $this->assertInstanceOf(Component::class, $component);
        $this->assertDatabaseHas('components', ['name' => 'Button', 'category' => 'form']);
    }

    public function test_register_component_generates_slug(): void
    {
        $component = $this->service->registerComponent([
            'name' => 'My Button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $this->assertSame('my-button', $component->slug);
    }

    public function test_register_component_sets_default_base_schema(): void
    {
        $component = $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $this->assertIsArray($component->base_schema);
    }

    public function test_register_component_rejects_duplicate_slug_in_same_category(): void
    {
        $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $this->expectException(UniqueConstraintViolationException::class);

        $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'form',
            'version' => '2.0.0',
        ]);
    }

    public function test_register_component_allows_same_slug_in_different_category(): void
    {
        $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $component = $this->service->registerComponent([
            'name' => 'Button',
            'category' => 'layout',
            'version' => '1.0.0',
        ]);

        $this->assertDatabaseCount('components', 2);
        $this->assertSame('layout', $component->category);
    }

    // --- addVariant ---

    public function test_add_variant_creates_record(): void
    {
        $component = Component::factory()->create();

        $variant = $this->service->addVariant($component, 'primary', ['color' => 'blue']);

        $this->assertInstanceOf(ComponentVariant::class, $variant);
        $this->assertDatabaseHas('component_variants', [
            'component_id' => $component->id,
            'name' => 'primary',
        ]);
    }

    public function test_add_variant_stores_schema(): void
    {
        $component = Component::factory()->create();
        $schema = ['color' => 'blue', 'size' => 'md'];

        $variant = $this->service->addVariant($component, 'primary', $schema);

        $this->assertSame($schema, $variant->schema);
    }

    // --- instantiateComponent ---

    public function test_instantiate_component_creates_record(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $component = Component::factory()->create([
            'slug' => 'button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $instance = $this->service->instantiateComponent($designSystem, $component, []);

        $this->assertInstanceOf(ComponentInstance::class, $instance);
        $this->assertDatabaseHas('component_instances', [
            'design_system_id' => $designSystem->id,
            'component_id' => $component->id,
        ]);
    }

    public function test_instantiate_component_generates_identifier(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $component = Component::factory()->create([
            'slug' => 'button',
            'category' => 'form',
            'version' => '1.0.0',
        ]);

        $instance = $this->service->instantiateComponent($designSystem, $component, []);

        $this->assertStringStartsWith('ui.', $instance->identifier);
    }

    public function test_instantiate_component_stores_config(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $component = Component::factory()->create();
        $config = ['variant' => 'primary', 'size' => 'lg'];

        $instance = $this->service->instantiateComponent($designSystem, $component, $config);

        $this->assertSame($config, $instance->config_json);
    }

    // --- listByCategory ---

    public function test_list_by_category_returns_only_matching(): void
    {
        Component::factory()->count(3)->create(['category' => 'form']);
        Component::factory()->count(2)->create(['category' => 'layout']);

        $results = $this->service->listByCategory('form');

        $this->assertCount(3, $results);
        $results->each(fn ($c) => $this->assertSame('form', $c->category));
    }

    public function test_list_by_category_eager_loads_variants(): void
    {
        $component = Component::factory()->create(['category' => 'form']);
        ComponentVariant::factory()->count(2)->create(['component_id' => $component->id]);

        $results = $this->service->listByCategory('form');

        $this->assertTrue($results->first()->relationLoaded('variants'));
        $this->assertCount(2, $results->first()->variants);
    }

    // --- all ---

    public function test_all_returns_all_components(): void
    {
        Component::factory()->count(5)->create();

        $results = $this->service->all();

        $this->assertCount(5, $results);
    }

    public function test_all_eager_loads_variants(): void
    {
        $component = Component::factory()->create();
        ComponentVariant::factory()->count(3)->create(['component_id' => $component->id]);

        $results = $this->service->all();

        $this->assertTrue($results->first()->relationLoaded('variants'));
    }
}
