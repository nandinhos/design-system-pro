<?php

namespace Database\Factories;

use App\Models\DesignSystem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<DesignSystem>
 */
class DesignSystemFactory extends Factory
{
    protected $model = DesignSystem::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);

        return [
            'name' => ucwords($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->optional()->sentence(),
            'current_version_id' => null,
            'is_active' => true,
            'created_by' => null,
        ];
    }

    public function inactive(): static
    {
        return $this->state(['is_active' => false]);
    }
}
