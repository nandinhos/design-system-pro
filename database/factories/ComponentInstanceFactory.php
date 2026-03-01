<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\ComponentInstance;
use App\Models\DesignSystem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<ComponentInstance>
 */
class ComponentInstanceFactory extends Factory
{
    protected $model = ComponentInstance::class;

    public function definition(): array
    {
        return [
            'design_system_id' => DesignSystem::factory(),
            'component_id' => Component::factory(),
            'identifier' => Str::uuid()->toString(),
            'config_json' => [],
            'is_active' => true,
        ];
    }

    public function inactive(): static
    {
        return $this->state(['is_active' => false]);
    }
}
