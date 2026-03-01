<?php

namespace Tests\Feature\Models;

use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DesignSystemVersionModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_uuid_primary_key(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $version = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertIsString($version->id);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $version->id
        );
    }

    public function test_belongs_to_design_system(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $version = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(BelongsTo::class, $version->designSystem());
        $this->assertSame($designSystem->id, $version->designSystem->id);
    }

    public function test_snapshot_is_cast_to_array(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $version = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => ['tokens' => [], 'components' => []],
        ]);

        $this->assertIsArray($version->snapshot);
    }

    public function test_fillable_attributes(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $version = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'version' => '1.0.0',
            'changelog' => 'Initial release',
            'is_published' => true,
        ]);

        $this->assertSame('1.0.0', $version->version);
        $this->assertSame('Initial release', $version->changelog);
        $this->assertTrue($version->is_published);
    }

    public function test_scope_published_filters_correctly(): void
    {
        $designSystem = DesignSystem::factory()->create();
        DesignSystemVersion::factory()->count(2)->create([
            'design_system_id' => $designSystem->id,
            'is_published' => true,
        ]);
        DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'is_published' => false,
        ]);

        $this->assertCount(2, DesignSystemVersion::query()->published()->get());
    }
}
