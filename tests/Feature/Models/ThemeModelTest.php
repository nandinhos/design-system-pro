<?php

namespace Tests\Feature\Models;

use App\Models\DesignSystem;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThemeModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_uuid_primary_key(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $theme = Theme::factory()->create(['design_system_id' => $designSystem->id]);

        $this->assertIsString($theme->id);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $theme->id
        );
    }

    public function test_belongs_to_design_system(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $theme = Theme::factory()->create(['design_system_id' => $designSystem->id]);

        $this->assertInstanceOf(BelongsTo::class, $theme->designSystem());
        $this->assertSame($designSystem->id, $theme->designSystem->id);
    }

    public function test_config_json_is_cast_to_array(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $theme = Theme::factory()->create([
            'design_system_id' => $designSystem->id,
            'config_json' => ['colors' => ['primary' => '#FF0000']],
        ]);

        $this->assertIsArray($theme->config_json);
        $this->assertSame('#FF0000', $theme->config_json['colors']['primary']);
    }

    public function test_scope_default_filters_correctly(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Theme::factory()->create([
            'design_system_id' => $designSystem->id,
            'is_default' => true,
        ]);
        Theme::factory()->count(2)->create([
            'design_system_id' => $designSystem->id,
            'is_default' => false,
        ]);

        $this->assertCount(1, Theme::query()->default()->get());
    }
}
