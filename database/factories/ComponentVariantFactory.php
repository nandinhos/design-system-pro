<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\ComponentVariant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ComponentVariant>
 */
class ComponentVariantFactory extends Factory
{
    protected $model = ComponentVariant::class;

    public function definition(): array
    {
        return [
            'component_id' => Component::factory(),
            'name' => $this->faker->word(),
            'schema' => ['properties' => []],
        ];
    }
}
