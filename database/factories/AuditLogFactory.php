<?php

namespace Database\Factories;

use App\Models\AuditLog;
use App\Models\DesignSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AuditLog>
 */
class AuditLogFactory extends Factory
{
    protected $model = AuditLog::class;

    public function definition(): array
    {
        $actions = ['created', 'updated', 'published', 'token_added', 'theme_changed'];

        return [
            'design_system_id' => DesignSystem::factory(),
            'action' => $this->faker->randomElement($actions),
            'payload' => ['before' => null, 'after' => []],
            'created_by' => null,
        ];
    }
}
