<?php

namespace Tests\Feature\Models;

use App\Models\DesignSystem;
use App\Models\Token;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TokenModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_uuid_primary_key(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $token = Token::factory()->create(['design_system_id' => $designSystem->id]);

        $this->assertIsString($token->id);
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $token->id
        );
    }

    public function test_belongs_to_design_system(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $token = Token::factory()->create(['design_system_id' => $designSystem->id]);

        $this->assertInstanceOf(BelongsTo::class, $token->designSystem());
        $this->assertSame($designSystem->id, $token->designSystem->id);
    }

    public function test_fillable_attributes(): void
    {
        $designSystem = DesignSystem::factory()->create();
        $token = Token::factory()->create([
            'design_system_id' => $designSystem->id,
            'category' => 'color',
            'path' => 'brand.primary',
            'value' => '#FF6600',
            'type' => 'color',
            'is_global' => true,
        ]);

        $this->assertSame('color', $token->category);
        $this->assertSame('brand.primary', $token->path);
        $this->assertSame('#FF6600', $token->value);
        $this->assertSame('color', $token->type);
        $this->assertTrue($token->is_global);
    }

    public function test_scope_by_category_filters_correctly(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Token::factory()->count(3)->create([
            'design_system_id' => $designSystem->id,
            'category' => 'color',
        ]);
        Token::factory()->count(2)->create([
            'design_system_id' => $designSystem->id,
            'category' => 'spacing',
        ]);

        $this->assertCount(3, Token::query()->byCategory('color')->get());
    }

    public function test_scope_global_filters_correctly(): void
    {
        $designSystem = DesignSystem::factory()->create();
        Token::factory()->count(2)->create([
            'design_system_id' => $designSystem->id,
            'is_global' => true,
        ]);
        Token::factory()->create([
            'design_system_id' => $designSystem->id,
            'is_global' => false,
        ]);

        $this->assertCount(2, Token::query()->global()->get());
    }
}
