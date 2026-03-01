<?php

namespace Tests\Feature\Services;

use App\Application\Services\VersioningService;
use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use App\Models\Theme;
use App\Models\Token;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VersioningServiceTest extends TestCase
{
    use RefreshDatabase;

    private VersioningService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new VersioningService();
    }

    // --- bumpVersion ---

    public function test_bump_patch_version_from_initial(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $version = $this->service->bumpVersion($designSystem, 'patch');

        $this->assertInstanceOf(DesignSystemVersion::class, $version);
        $this->assertSame('0.0.1', $version->version);
        $this->assertSame($designSystem->id, $version->design_system_id);
    }

    public function test_bump_minor_version_from_initial(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $version = $this->service->bumpVersion($designSystem, 'minor');

        $this->assertSame('0.1.0', $version->version);
    }

    public function test_bump_major_version_from_initial(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $version = $this->service->bumpVersion($designSystem, 'major');

        $this->assertSame('1.0.0', $version->version);
    }

    public function test_bump_patch_increments_from_current_version(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $existing = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'version' => '1.2.3',
        ]);
        $designSystem->update(['current_version_id' => $existing->id]);

        $version = $this->service->bumpVersion($designSystem->fresh(), 'patch');

        $this->assertSame('1.2.4', $version->version);
    }

    public function test_bump_minor_resets_patch(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $existing = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'version' => '1.2.3',
        ]);
        $designSystem->update(['current_version_id' => $existing->id]);

        $version = $this->service->bumpVersion($designSystem->fresh(), 'minor');

        $this->assertSame('1.3.0', $version->version);
    }

    public function test_bump_major_resets_minor_and_patch(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $existing = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'version' => '1.2.3',
        ]);
        $designSystem->update(['current_version_id' => $existing->id]);

        $version = $this->service->bumpVersion($designSystem->fresh(), 'major');

        $this->assertSame('2.0.0', $version->version);
    }

    public function test_bump_version_updates_current_version_on_design_system(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $version = $this->service->bumpVersion($designSystem, 'patch');

        $this->assertSame($version->id, $designSystem->fresh()->current_version_id);
    }

    public function test_bump_version_generates_snapshot(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Token::factory()->count(2)->create(['design_system_id' => $designSystem->id]);
        Theme::factory()->create(['design_system_id' => $designSystem->id]);

        $version = $this->service->bumpVersion($designSystem, 'patch');

        $this->assertIsArray($version->snapshot);
        $this->assertArrayHasKey('tokens', $version->snapshot);
        $this->assertArrayHasKey('themes', $version->snapshot);
        $this->assertArrayHasKey('components', $version->snapshot);
    }

    public function test_bump_version_with_changelog(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $version = $this->service->bumpVersion($designSystem, 'patch', 'Added new button tokens');

        $this->assertSame('Added new button tokens', $version->changelog);
    }

    public function test_bump_version_with_invalid_type_throws_exception(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $this->expectException(\InvalidArgumentException::class);

        $this->service->bumpVersion($designSystem, 'invalid');
    }

    // --- generateSnapshot ---

    public function test_generate_snapshot_contains_tokens(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Token::factory()->count(3)->create(['design_system_id' => $designSystem->id]);

        $snapshot = $this->service->generateSnapshot($designSystem);

        $this->assertArrayHasKey('tokens', $snapshot);
        $this->assertCount(3, $snapshot['tokens']);
    }

    public function test_generate_snapshot_contains_themes(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Theme::factory()->count(2)->create(['design_system_id' => $designSystem->id]);

        $snapshot = $this->service->generateSnapshot($designSystem);

        $this->assertArrayHasKey('themes', $snapshot);
        $this->assertCount(2, $snapshot['themes']);
    }

    public function test_generate_snapshot_contains_components(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $snapshot = $this->service->generateSnapshot($designSystem);

        $this->assertArrayHasKey('components', $snapshot);
        $this->assertIsArray($snapshot['components']);
    }

    public function test_generate_snapshot_includes_metadata(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $snapshot = $this->service->generateSnapshot($designSystem);

        $this->assertArrayHasKey('generated_at', $snapshot);
        $this->assertArrayHasKey('design_system_id', $snapshot);
        $this->assertSame($designSystem->id, $snapshot['design_system_id']);
    }

    // --- diff ---

    public function test_diff_detects_added_tokens(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $versionA = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $versionB = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [
                    ['path' => 'color.primary', 'value' => '#FF0000', 'category' => 'color', 'type' => 'color'],
                ],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $diff = $this->service->diff($versionA, $versionB);

        $this->assertArrayHasKey('tokens', $diff);
        $this->assertArrayHasKey('added', $diff['tokens']);
        $this->assertCount(1, $diff['tokens']['added']);
    }

    public function test_diff_detects_removed_tokens(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $versionA = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [
                    ['path' => 'color.primary', 'value' => '#FF0000', 'category' => 'color', 'type' => 'color'],
                ],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $versionB = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $diff = $this->service->diff($versionA, $versionB);

        $this->assertArrayHasKey('removed', $diff['tokens']);
        $this->assertCount(1, $diff['tokens']['removed']);
    }

    public function test_diff_detects_changed_tokens(): void
    {
        $designSystem = DesignSystem::factory()->create();

        $versionA = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [
                    ['path' => 'color.primary', 'value' => '#FF0000', 'category' => 'color', 'type' => 'color'],
                ],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $versionB = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => [
                'tokens' => [
                    ['path' => 'color.primary', 'value' => '#0000FF', 'category' => 'color', 'type' => 'color'],
                ],
                'themes' => [],
                'components' => [],
                'generated_at' => now()->toIso8601String(),
                'design_system_id' => $designSystem->id,
            ],
        ]);

        $diff = $this->service->diff($versionA, $versionB);

        $this->assertArrayHasKey('changed', $diff['tokens']);
        $this->assertCount(1, $diff['tokens']['changed']);
        $this->assertSame('#FF0000', $diff['tokens']['changed'][0]['from']['value']);
        $this->assertSame('#0000FF', $diff['tokens']['changed'][0]['to']['value']);
    }

    public function test_diff_returns_empty_when_identical(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $snapshot = [
            'tokens' => [
                ['path' => 'color.primary', 'value' => '#FF0000', 'category' => 'color', 'type' => 'color'],
            ],
            'themes' => [],
            'components' => [],
            'generated_at' => now()->toIso8601String(),
            'design_system_id' => $designSystem->id,
        ];

        $versionA = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => $snapshot,
        ]);
        $versionB = DesignSystemVersion::factory()->create([
            'design_system_id' => $designSystem->id,
            'snapshot' => $snapshot,
        ]);

        $diff = $this->service->diff($versionA, $versionB);

        $this->assertEmpty($diff['tokens']['added']);
        $this->assertEmpty($diff['tokens']['removed']);
        $this->assertEmpty($diff['tokens']['changed']);
    }
}
