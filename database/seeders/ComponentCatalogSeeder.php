<?php

namespace Database\Seeders;

use App\Application\Services\ComponentRegistryService;
use App\Models\Component;
use Illuminate\Database\Seeder;

class ComponentCatalogSeeder extends Seeder
{
    public function __construct(
        private readonly ComponentRegistryService $registry = new ComponentRegistryService()
    ) {}

    public function run(): void
    {
        $catalog = $this->getCatalog();

        foreach ($catalog as $item) {
            $existing = Component::query()
                ->where('slug', $item['slug'])
                ->where('category', $item['category'])
                ->first();

            if ($existing !== null) {
                continue;
            }

            $component = $this->registry->registerComponent([
                'name' => $item['name'],
                'category' => $item['category'],
                'version' => $item['version'],
                'description' => $item['description'],
                'is_core' => true,
            ]);

            foreach ($item['variants'] as $variantName => $schema) {
                $this->registry->addVariant($component, $variantName, $schema);
            }
        }
    }

    /**
     * @return array<int, array{name: string, slug: string, category: string, version: string, description: string, variants: array<string, array<string, mixed>>}>
     */
    private function getCatalog(): array
    {
        return [
            [
                'name' => 'Button',
                'slug' => 'button',
                'category' => 'form',
                'version' => '1.0.0',
                'description' => 'Componente de botão interativo para ações do usuário.',
                'variants' => [
                    'primary' => ['color' => 'brand', 'weight' => 'filled'],
                    'secondary' => ['color' => 'neutral', 'weight' => 'outlined'],
                    'ghost' => ['color' => 'neutral', 'weight' => 'ghost'],
                    'danger' => ['color' => 'error', 'weight' => 'filled'],
                ],
            ],
            [
                'name' => 'Input',
                'slug' => 'input',
                'category' => 'form',
                'version' => '1.0.0',
                'description' => 'Campo de entrada de texto para formulários.',
                'variants' => [
                    'text' => ['type' => 'text'],
                    'password' => ['type' => 'password'],
                    'email' => ['type' => 'email'],
                ],
            ],
            [
                'name' => 'Card',
                'slug' => 'card',
                'category' => 'layout',
                'version' => '1.0.0',
                'description' => 'Contêiner visual para agrupar conteúdo relacionado.',
                'variants' => [
                    'default' => ['elevation' => 'none'],
                    'elevated' => ['elevation' => 'md'],
                    'outlined' => ['elevation' => 'none', 'border' => true],
                ],
            ],
            [
                'name' => 'Modal',
                'slug' => 'modal',
                'category' => 'feedback',
                'version' => '1.0.0',
                'description' => 'Diálogo modal para interações focadas.',
                'variants' => [
                    'default' => ['size' => 'md'],
                    'confirmation' => ['size' => 'sm', 'has_actions' => true],
                ],
            ],
            [
                'name' => 'Badge',
                'slug' => 'badge',
                'category' => 'data-display',
                'version' => '1.0.0',
                'description' => 'Indicador visual de status ou contagem.',
                'variants' => [
                    'success' => ['color' => 'success'],
                    'warning' => ['color' => 'warning'],
                    'error' => ['color' => 'error'],
                    'info' => ['color' => 'info'],
                ],
            ],
            [
                'name' => 'Avatar',
                'slug' => 'avatar',
                'category' => 'data-display',
                'version' => '1.0.0',
                'description' => 'Representação visual de um usuário ou entidade.',
                'variants' => [
                    'default' => ['size' => 'md'],
                    'sm' => ['size' => 'sm'],
                    'lg' => ['size' => 'lg'],
                ],
            ],
            [
                'name' => 'Navbar',
                'slug' => 'navbar',
                'category' => 'navigation',
                'version' => '1.0.0',
                'description' => 'Barra de navegação principal da aplicação.',
                'variants' => [
                    'default' => ['position' => 'top', 'sticky' => false],
                ],
            ],
            [
                'name' => 'Sidebar',
                'slug' => 'sidebar',
                'category' => 'navigation',
                'version' => '1.0.0',
                'description' => 'Menu lateral de navegação.',
                'variants' => [
                    'default' => ['position' => 'left', 'collapsible' => true],
                ],
            ],
        ];
    }
}
