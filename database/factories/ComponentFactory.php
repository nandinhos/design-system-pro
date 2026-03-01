<?php

namespace Database\Factories;

use App\Models\Component;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Component>
 */
class ComponentFactory extends Factory
{
    protected $model = Component::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word();
        $categories = ['form', 'layout', 'feedback', 'navigation', 'data-display'];

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'category' => $this->faker->randomElement($categories),
            'description' => $this->faker->optional()->sentence(),
            'base_schema' => ['type' => 'object', 'properties' => []],
            'preview_template' => null,
            'blade_path' => null,
            'version' => '1.0.0',
            'is_core' => false,
        ];
    }

    public function core(): static
    {
        return $this->state(['is_core' => true]);
    }
}
