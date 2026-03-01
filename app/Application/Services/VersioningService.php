<?php

namespace App\Application\Services;

use App\Models\DesignSystem;
use App\Models\DesignSystemVersion;
use InvalidArgumentException;

class VersioningService
{
    private const VALID_BUMP_TYPES = ['major', 'minor', 'patch'];

    /**
     * Cria uma nova versão com incremento semântico e snapshot do estado atual.
     */
    public function bumpVersion(
        DesignSystem $designSystem,
        string $bumpType,
        ?string $changelog = null
    ): DesignSystemVersion {
        if (! in_array($bumpType, self::VALID_BUMP_TYPES, true)) {
            throw new InvalidArgumentException(
                "Tipo de bump inválido: '{$bumpType}'. Use: major, minor ou patch."
            );
        }

        $nextVersion = $this->resolveNextVersion($designSystem, $bumpType);
        $snapshot = $this->generateSnapshot($designSystem);

        $version = DesignSystemVersion::create([
            'design_system_id' => $designSystem->id,
            'version' => $nextVersion,
            'changelog' => $changelog,
            'snapshot' => $snapshot,
            'is_published' => false,
        ]);

        $designSystem->update(['current_version_id' => $version->id]);

        return $version;
    }

    /**
     * Gera um snapshot completo do estado atual do Design System.
     *
     * @return array{
     *     design_system_id: string,
     *     generated_at: string,
     *     tokens: array<int, array<string, mixed>>,
     *     themes: array<int, array<string, mixed>>,
     *     components: array<int, array<string, mixed>>
     * }
     */
    public function generateSnapshot(DesignSystem $designSystem): array
    {
        $designSystem->loadMissing(['tokens', 'themes', 'componentInstances.component']);

        return [
            'design_system_id' => $designSystem->id,
            'generated_at' => now()->toIso8601String(),
            'tokens' => $designSystem->tokens->map(fn ($token) => [
                'path' => $token->path,
                'value' => $token->value,
                'category' => $token->category,
                'type' => $token->type,
                'is_global' => $token->is_global,
            ])->values()->all(),
            'themes' => $designSystem->themes->map(fn ($theme) => [
                'name' => $theme->name,
                'config_json' => $theme->config_json,
                'is_default' => $theme->is_default,
            ])->values()->all(),
            'components' => $designSystem->componentInstances->map(fn ($instance) => [
                'identifier' => $instance->identifier,
                'component_slug' => $instance->component?->slug,
                'config_json' => $instance->config_json,
                'is_active' => $instance->is_active,
            ])->values()->all(),
        ];
    }

    /**
     * Calcula as diferenças de tokens entre duas versões.
     *
     * @return array{
     *     tokens: array{
     *         added: array<int, array<string, mixed>>,
     *         removed: array<int, array<string, mixed>>,
     *         changed: array<int, array{from: array<string, mixed>, to: array<string, mixed>}>
     *     }
     * }
     */
    public function diff(DesignSystemVersion $from, DesignSystemVersion $to): array
    {
        $tokensFrom = $this->indexByPath($from->snapshot['tokens'] ?? []);
        $tokensTo = $this->indexByPath($to->snapshot['tokens'] ?? []);

        $added = [];
        $removed = [];
        $changed = [];

        foreach ($tokensTo as $path => $tokenTo) {
            if (! isset($tokensFrom[$path])) {
                $added[] = $tokenTo;
            } elseif ($tokensFrom[$path] !== $tokenTo) {
                $changed[] = ['from' => $tokensFrom[$path], 'to' => $tokenTo];
            }
        }

        foreach ($tokensFrom as $path => $tokenFrom) {
            if (! isset($tokensTo[$path])) {
                $removed[] = $tokenFrom;
            }
        }

        return [
            'tokens' => [
                'added' => $added,
                'removed' => $removed,
                'changed' => $changed,
            ],
        ];
    }

    private function resolveNextVersion(DesignSystem $designSystem, string $bumpType): string
    {
        $currentVersion = $designSystem->currentVersion?->version ?? '0.0.0';

        [$major, $minor, $patch] = array_map('intval', explode('.', $currentVersion));

        return match ($bumpType) {
            'major' => ($major + 1).'.0.0',
            'minor' => $major.'.'.($minor + 1).'.0',
            'patch' => $major.'.'.$minor.'.'.($patch + 1),
        };
    }

    /**
     * @param  array<int, array<string, mixed>>  $tokens
     * @return array<string, array<string, mixed>>
     */
    private function indexByPath(array $tokens): array
    {
        $indexed = [];
        foreach ($tokens as $token) {
            $indexed[$token['path']] = $token;
        }

        return $indexed;
    }
}
