<?php

namespace Database\Factories;

use App\Models\DesignSystem;
use App\Models\Token;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Token>
 */
class TokenFactory extends Factory
{
    protected $model = Token::class;

    public function definition(): array
    {
        $categories = ['color', 'spacing', 'typography', 'shadow', 'border'];
        $category = $this->faker->randomElement($categories);

        return [
            'design_system_id' => DesignSystem::factory(),
            'category' => $category,
            'path' => $category.'.'.$this->faker->word().'.'.$this->faker->word(),
            'value' => $this->faker->hexColor(),
            'type' => $category,
            'is_global' => false,
        ];
    }

    public function global(): static
    {
        return $this->state(['is_global' => true]);
    }

    public function color(): static
    {
        return $this->state([
            'category' => 'color',
            'type' => 'color',
            'value' => $this->faker->hexColor(),
        ]);
    }
}
