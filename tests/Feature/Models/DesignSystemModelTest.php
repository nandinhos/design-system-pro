<?php

namespace Tests\Feature\Models;

use App\Models\AuditLog;
use App\Models\ComponentInstance;
use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use App\Models\Theme;
use App\Models\Token;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DesignSystemModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_uuid_primary_key(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $this->assertIsString($designSystem->id);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $designSystem->id
        );
    }

    public function test_fillable_attributes(): void
    {
        $designSystem = DesignSystem::factory()->create([
            'name' => 'My Design System',
            'slug' => 'my-design-system',
            'description' => 'A test design system',
            'is_active' => true,
        ]);

        $this->assertSame('My Design System', $designSystem->name);
        $this->assertSame('my-design-system', $designSystem->slug);
        $this->assertSame('A test design system', $designSystem->description);
        $this->assertTrue($designSystem->is_active);
    }

    public function test_has_many_versions(): void
    {
        $designSystem = DesignSystem::factory()->create();
        DesignSystemVersion::factory()->count(3)->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $designSystem->versions());
        $this->assertCount(3, $designSystem->versions);
    }

    public function test_belongs_to_current_version(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $version = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
        ]);
        $designSystem->update(['current_version_id' => $version->id]);

        $this->assertInstanceOf(BelongsTo::class, $designSystem->currentVersion());
        $this->assertSame($version->id, $designSystem->currentVersion->id);
    }

    public function test_has_many_tokens(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Token::factory()->count(5)->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $designSystem->tokens());
        $this->assertCount(5, $designSystem->tokens);
    }

    public function test_has_many_themes(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Theme::factory()->count(2)->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $designSystem->themes());
        $this->assertCount(2, $designSystem->themes);
    }

    public function test_has_many_component_instances(): void
    {
        $designSystem = DesignSystem::factory()->create();
        ComponentInstance::factory()->count(4)->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $designSystem->componentInstances());
        $this->assertCount(4, $designSystem->componentInstances);
    }

    public function test_has_many_audit_logs(): void
    {
        $designSystem = DesignSystem::factory()->create();
        AuditLog::factory()->count(3)->create([
            'design_system_id' => $designSystem->id,
        ]);

        $this->assertInstanceOf(HasMany::class, $designSystem->auditLogs());
        $this->assertCount(3, $designSystem->auditLogs);
    }

    public function test_is_active_is_cast_to_boolean(): void
    {
        $designSystem = DesignSystem::factory()->create(['is_active' => true]);

        $this->assertIsBool($designSystem->is_active);
    }

    public function test_scope_active_filters_correctly(): void
    {
        DesignSystem::factory()->create(['is_active' => true]);
        DesignSystem::factory()->create(['is_active' => true]);
        DesignSystem::factory()->create(['is_active' => false]);

        $this->assertCount(2, DesignSystem::query()->active()->get());
    }
}
