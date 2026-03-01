<?php

namespace App\Application\Services;

use App\Infrastructure\Component\IdentifierGenerator;
use App\Models\Component;
use App\Models\ComponentInstance;
use App\Models\ComponentVariant;
use App\Models\DesignSystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ComponentRegistryService
{
    public function __construct(
        private readonly IdentifierGenerator $identifierGenerator = new IdentifierGenerator()
    ) {}

    /**
     * Registra um novo componente no catálogo global.
     *
     * @param  array{name: string, category: string, version: string, description?: string, base_schema?: array<string, mixed>, preview_template?: string, blade_path?: string, is_core?: bool}  $data
     */
    public function registerComponent(array $data): Component
    {
        return Component::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'category' => $data['category'],
            'description' => $data['description'] ?? null,
            'base_schema' => $data['base_schema'] ?? ['type' => 'object', 'properties' => []],
            'preview_template' => $data['preview_template'] ?? null,
            'blade_path' => $data['blade_path'] ?? null,
            'version' => $data['version'],
            'is_core' => $data['is_core'] ?? false,
        ]);
    }

    /**
     * Adiciona uma variante a um componente existente.
     *
     * @param  array<string, mixed>  $schema
     */
    public function addVariant(Component $component, string $name, array $schema): ComponentVariant
    {
        return $component->variants()->create([
            'name' => $name,
            'schema' => $schema,
        ]);
    }

    /**
     * Cria uma instância de um componente dentro de um Design System.
     *
     * @param  array<string, mixed>  $config
     */
    public function instantiateComponent(
        DesignSystem $designSystem,
        Component $component,
        array $config
    ): ComponentInstance {
        $identifier = $this->identifierGenerator->generate(
            category: $component->category,
            component: $component->slug,
            variant: $config['variant'] ?? 'default',
            version: $component->version
        );

        return $designSystem->componentInstances()->create([
            'component_id' => $component->id,
            'identifier' => $identifier,
            'config_json' => $config,
            'is_active' => true,
        ]);
    }

    /**
     * Lista componentes de uma categoria com eager loading de variantes.
     *
     * @return Collection<int, Component>
     */
    public function listByCategory(string $category): Collection
    {
        return Component::query()
            ->where('category', $category)
            ->with('variants')
            ->get();
    }

    /**
     * Lista todos os componentes com eager loading de variantes.
     *
     * @return Collection<int, Component>
     */
    public function all(): Collection
    {
        return Component::query()
            ->with('variants')
            ->get();
    }
}
