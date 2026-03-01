<?php

namespace Tests\Feature\Models;

use App\Models\Component;
use App\Models\ComponentInstance;
use App\Models\ComponentVariant;
use App\Models\DesignSystem;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComponentModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_uuid_primary_key(): void
    {
        $component = Component::factory()->create();

        $this->assertIsString($component->id);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $component->id
        );
    }

    public function test_fillable_attributes(): void
    {
        $component = Component::factory()->create([
            'name' => 'Button',
            'slug' => 'button',
            'category' => 'form',
            'version' => '1.0.0',
            'is_core' => true,
        ]);

        $this->assertSame('Button', $component->name);
        $this->assertSame('button', $component->slug);
        $this->assertSame('form', $component->category);
        $this->assertSame('1.0.0', $component->version);
        $this->assertTrue($component->is_core);
    }

    public function test_base_schema_is_cast_to_array(): void
    {
        $component = Component::factory()->create([
            'base_schema' => ['type' => 'object', 'properties' => []],
        ]);

        $this->assertIsArray($component->base_schema);
    }

    public function test_has_many_variants(): void
    {
        $component = Component::factory()->create();
        ComponentVariant::factory()->count(3)->create([
            'component_id' => $component->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $component->variants());
        $this->assertCount(3, $component->variants);
    }

    public function test_has_many_instances(): void
    {
        $component = Component::factory()->create();
        $designSystem = DesignSystem::factory()->create();
        ComponentInstance::factory()->count(2)->create([
            'component_id' => $component->id,
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $component->instances());
        $this->assertCount(2, $component->instances);
    }

    public function test_scope_core_filters_correctly(): void
    {
        Component::factory()->create(['is_core' => true]);
        Component::factory()->create(['is_core' => true]);
        Component::factory()->create(['is_core' => false]);

        $this->assertCount(2, Component::query()->core()->get());
    }
}
