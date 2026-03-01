<?php

namespace Database\Factories;

use App\Models\DesignSystem;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Theme>
 */
class ThemeFactory extends Factory
{
    protected $model = Theme::class;

    public function definition(): array
    {
        return [
            'design_system_id' => DesignSystem::factory(),
            'name' => $this->faker->word(),
            'config_json' => ['colors' => [], 'spacing' => []],
            'is_default' => false,
        ];
    }

    public function default(): static
    {
        return $this->state(['is_default' => true]);
    }
}
