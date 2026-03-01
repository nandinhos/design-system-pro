<?php

namespace App\Infrastructure\Component;

class IdentifierGenerator
{
    /**
     * Gera um identificador determinístico LLM-ready para um componente.
     *
     * Formato: ui.{category}.{component}.{variant}.v{version}
     * Exemplo: ui.form.button.primary.v1_0_0
     */
    public function generate(
        string $category,
        string $component,
        string $variant,
        string $version
    ): string {
        return implode('.', [
            'ui',
            $this->slugify($category),
            $this->slugify($component),
            $this->slugify($variant),
            'v'.$this->normalizeVersion($version),
        ]);
    }

    private function slugify(string $value): string
    {
        $value = strtolower($value);
        $value = preg_replace('/[^a-z0-9\s-]/', '', $value);
        $value = preg_replace('/[\s]+/', '-', trim($value));
        $value = preg_replace('/-+/', '-', $value);

        return trim($value, '-');
    }

    private function normalizeVersion(string $version): string
    {
        return str_replace('.', '_', $version);
    }
}
