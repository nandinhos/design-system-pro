<?php

namespace Database\Factories;

use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use App\Models\Export;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Export>
 */
class ExportFactory extends Factory
{
    protected $model = Export::class;

    public function definition(): array
    {
        $types = ['css', 'json', 'scss', 'figma-tokens'];

        return [
            'design_system_id' => DesignSystem::factory(),
            'version_id' => null,
            'type' => $this->faker->randomElement($types),
            'content' => $this->faker->paragraph(),
        ];
    }
}
