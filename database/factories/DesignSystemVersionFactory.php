<?php

namespace Database\Factories;

use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DesignSystemVersion>
 */
class DesignSystemVersionFactory extends Factory
{
    protected $model = DesignSystemVersion::class;

    public function definition(): array
    {
        return [
            'design_system_id' => DesignSystem::factory(),
            'version' => $this->faker->semver(),
            'changelog' => $this->faker->optional()->paragraph(),
            'snapshot' => ['tokens' => [], 'components' => [], 'themes' => []],
            'is_published' => false,
        ];
    }

    public function published(): static
    {
        return $this->state(['is_published' => true]);
    }
}
