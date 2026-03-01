
## ✅ FASE 1 — Core Foundation

✔ Migrations
✔ Models
✔ Base de versionamento

# 🚀 Laravel Design System Studio

## Master Execution Blueprint

---

# 1️⃣ Blueprint Completo das Migrations

Já iniciamos a base. Agora segue a versão **Enterprise-Ready Completa**.

## 🔹 Core

### design_systems

* id (uuid)
* name
* slug
* description
* current_version_id
* is_active
* created_by
* timestamps

### design_system_versions

* id (uuid)
* design_system_id
* version
* changelog
* snapshot (jsonb)
* is_published
* timestamps

---

## 🔹 Component Engine

### components (catálogo global)

* id
* name
* slug
* category
* description
* base_schema (jsonb)
* preview_template
* blade_path
* version
* is_core
* timestamps

### component_variants

* id
* component_id
* name
* schema (jsonb)
* timestamps

### component_instances (usados dentro do DS)

* id
* design_system_id
* component_id
* identifier (ui.button.primary.v1)
* config_json
* is_active
* timestamps

---

## 🔹 Design Tokens

### tokens

* id
* design_system_id
* category
* path (ex: color.primary.500)
* value
* type (color, size, shadow, font)
* timestamps

### themes

* id
* design_system_id
* name
* config_json
* is_default
* timestamps

---

## 🔹 Export & Audit

### exports

* id
* design_system_id
* version_id
* type (markdown, json, prd)
* content (longtext)
* timestamps

### audit_logs

* id
* design_system_id
* action
* payload (jsonb)
* created_by
* timestamps

---

# 2️⃣ Estrutura Inicial de Código (Arquitetura Modular)

Estrutura definitiva:

```
app/

Domain/
    DesignSystem/
        Models/
        ValueObjects/
        Aggregates/
    Component/
        Registry/
        Compiler/
    Token/
        Compiler/
    Theme/

Application/
    Services/
    Actions/
    DTOs/

Infrastructure/
    Persistence/
    Export/
    Snapshot/
    Tailwind/

Livewire/
    Studio/
    ComponentLibrary/
    TokenManager/
    ThemeBuilder/
    Sandbox/
    ExportCenter/
```

Separação clara:

* Domain → regras puras
* Application → orquestração
* Infrastructure → exportadores, compiladores
* Livewire → interface

Arquitetura limpa e sustentável.

---

# 3️⃣ Arquitetura de Serviços

## 🔹 DesignSystemService

Criação
Clonagem
Versionamento
Publicação

## 🔹 ComponentRegistryService

Registrar componentes
Listar por categoria
Gerar identificadores LLM

## 🔹 TokenCompilerService

Converter tokens → Tailwind config
Converter tokens → CSS layer

## 🔹 ThemeCompilerService

Aplicar tema sobre tokens
Gerar override dinâmico

## 🔹 SnapshotService

Gerar snapshot completo
Comparar versões
Gerar diff

## 🔹 ExportService

Gerar:

* Markdown estruturado
* JSON técnico
* Documento PRD formatado

---

# 4️⃣ Modelo de Exportador LLM-Ready (Nível Profissional)

Export estruturado em blocos previsíveis.

Formato:

```
# DESIGN SYSTEM SPECIFICATION

## METADATA
Name:
Version:
Generated At:

## DESIGN TOKENS
Category:
Path:
Value:

## COMPONENT INDEX
Identifier:
Category:
Variants:
Properties:
Tokens Used:

## TAILWIND CONFIG
Generated tailwind.config.js

## CSS LAYER
Generated app.css

## JS BEHAVIORS
Alpine + interactions

## CHANGELOG
...
```

Regra fundamental:

Formato sempre determinístico.
Sem variação textual.
Sem ruído.

Isso é o que permite LLM consumir corretamente.

---
 ##############################################################################################################################################

# 🚀 FASE 2 — Component Registry Engine

**Status: IMPLEMENTAÇÃO COMPLETA**

Objetivo:

Criar o motor central que:

* Registra componentes globais
* Organiza por categoria
* Define variantes
* Gera identificadores LLM-ready
* Permite instanciar componentes dentro de um Design System
* Prepara base para preview
* Permite seed massivo (120+ componentes)

---

# 🧠 Arquitetura da FASE 2

Camadas envolvidas:

* Domain → Component Model + Variant
* Application → ComponentRegistryService
* Infrastructure → IdentifierGenerator
* Database → components + component_variants
* Seeder → catálogo inicial

---

# 1️⃣ Migration: component_variants

```php
// database/migrations/xxxx_create_component_variants_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('component_variants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('component_id');
            $table->string('name');
            $table->jsonb('schema');
            $table->timestamps();

            $table->foreign('component_id')
                ->references('id')
                ->on('components')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('component_variants');
    }
};
```

---

# 2️⃣ Modelos de Domínio

## Component Model

```php
// app/Domain/Component/Models/Component.php

namespace App\Domain\Component\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Component extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'base_schema',
        'preview_template',
        'blade_path',
        'version',
        'is_core',
    ];

    protected $casts = [
        'base_schema' => 'array',
        'is_core' => 'boolean',
    ];

    public function variants()
    {
        return $this->hasMany(ComponentVariant::class);
    }
}
```

---

## ComponentVariant Model

```php
// app/Domain/Component/Models/ComponentVariant.php

namespace App\Domain\Component\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ComponentVariant extends Model
{
    use HasUuids;

    protected $fillable = [
        'component_id',
        'name',
        'schema',
    ];

    protected $casts = [
        'schema' => 'array',
    ];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}
```

---

# 3️⃣ Identifier Generator (LLM-Ready)

```php
// app/Infrastructure/Component/IdentifierGenerator.php

namespace App\Infrastructure\Component;

use Illuminate\Support\Str;

class IdentifierGenerator
{
    public function generate(
        string $category,
        string $componentSlug,
        string $variant,
        int $version = 1
    ): string {
        return sprintf(
            'ui.%s.%s.%s.v%d',
            Str::slug($category),
            Str::slug($componentSlug),
            Str::slug($variant),
            $version
        );
    }
}
```

Exemplo de saída:

```
ui.buttons.button.primary.v1
ui.data-display.card.analytics.v2
```

Determinístico. LLM-friendly.

---

# 4️⃣ ComponentRegistryService

```php
// app/Application/Services/ComponentRegistryService.php

namespace App\Application\Services;

use App\Domain\Component\Models\Component;
use App\Domain\Component\Models\ComponentVariant;
use App\Domain\DesignSystem\Models\ComponentInstance;
use App\Infrastructure\Component\IdentifierGenerator;
use Illuminate\Support\Str;

class ComponentRegistryService
{
    public function __construct(
        protected IdentifierGenerator $identifierGenerator
    ) {}

    public function registerComponent(array $data): Component
    {
        return Component::create([
            'id' => Str::uuid(),
            ...$data
        ]);
    }

    public function addVariant(Component $component, string $name, array $schema): ComponentVariant
    {
        return $component->variants()->create([
            'id' => Str::uuid(),
            'name' => $name,
            'schema' => $schema,
        ]);
    }

    public function instantiateComponent(
        string $designSystemId,
        Component $component,
        ComponentVariant $variant,
        array $configuration
    ): ComponentInstance {

        $identifier = $this->identifierGenerator->generate(
            $component->category,
            $component->slug,
            $variant->name,
            1
        );

        return ComponentInstance::create([
            'id' => Str::uuid(),
            'design_system_id' => $designSystemId,
            'component_id' => $component->id,
            'identifier' => $identifier,
            'configuration' => $configuration,
        ]);
    }

    public function listByCategory(string $category)
    {
        return Component::where('category', $category)->with('variants')->get();
    }

    public function all()
    {
        return Component::with('variants')->get();
    }
}
```

---

# 5️⃣ Seeder Inicial (Catálogo Base)

```php
// database/seeders/ComponentCatalogSeeder.php

use Illuminate\Database\Seeder;
use App\Application\Services\ComponentRegistryService;

class ComponentCatalogSeeder extends Seeder
{
    public function run(ComponentRegistryService $registry): void
    {
        $button = $registry->registerComponent([
            'name' => 'Button',
            'slug' => 'button',
            'category' => 'buttons',
            'description' => 'Base interactive button component',
            'base_schema' => [
                'props' => [
                    'size' => ['sm','md','lg'],
                    'disabled' => 'boolean',
                ]
            ],
            'preview_template' => '<x-ui.button />',
            'blade_path' => 'components.ui.button',
            'version' => '1.0.0',
            'is_core' => true,
        ]);

        $registry->addVariant($button, 'primary', [
            'color' => 'primary',
            'shadow' => 'sm',
        ]);

        $registry->addVariant($button, 'secondary', [
            'color' => 'secondary',
        ]);
    }
}
```

Você pode expandir isso para os 120+ componentes usando arrays estruturados.

---

# 6️⃣ ComponentInstance Model

```php
// app/Domain/DesignSystem/Models/ComponentInstance.php

namespace App\Domain\DesignSystem\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ComponentInstance extends Model
{
    use HasUuids;

    protected $fillable = [
        'design_system_id',
        'component_id',
        'identifier',
        'configuration',
        'is_active',
    ];

    protected $casts = [
        'configuration' => 'array',
        'is_active' => 'boolean',
    ];
}
```

---

# 🏗 Resultado da FASE 2

Agora temos:

✔ Catálogo global de componentes
✔ Variantes estruturadas
✔ Instanciação por Design System
✔ Identificador determinístico LLM-ready
✔ Estrutura pronta para preview
✔ Base para exportação
✔ Estrutura para 120+ componentes


 ##############################################################################################################################################
 
 Perfeito.

Agora entramos na parte que transforma isso em **motor real de Design System**.

Se a Fase 2 criou o catálogo…
a **FASE 3 cria o cérebro visual da plataforma**.

---

# 🚀 FASE 3 — DESIGN TOKEN ENGINE + TAILWIND COMPILER

Objetivo:

* Criar sistema profissional de Design Tokens
* Permitir edição dinâmica
* Compilar automaticamente para Tailwind
* Gerar CSS layer dinâmico
* Suportar múltiplos temas
* Preparar base para export LLM-ready

---

# 🧠 Arquitetura da FASE 3

Camadas envolvidas:

* Domain → Token + Theme
* Application → TokenService + ThemeService
* Infrastructure → TokenCompiler + TailwindConfigGenerator
* Livewire (próxima fase consumirá)
* PostgreSQL (jsonb estruturado)

---

# 1️⃣ Atualização Estrutural das Tabelas

Vamos evoluir a tabela `tokens`.

## 🔹 Atualização tokens

```php
// migration update

Schema::table('tokens', function (Blueprint $table) {
    $table->string('path'); // ex: color.primary.500
    $table->string('type'); // color, spacing, font, shadow, motion
    $table->boolean('is_global')->default(false);
});
```

---

# 2️⃣ Token Model

```php
// app/Domain/Token/Models/Token.php

namespace App\Domain\Token\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Token extends Model
{
    use HasUuids;

    protected $fillable = [
        'design_system_id',
        'category',
        'path',
        'value',
        'type',
        'is_global',
    ];
}
```

---

# 3️⃣ TokenService (Application Layer)

```php
// app/Application/Services/TokenService.php

namespace App\Application\Services;

use App\Domain\Token\Models\Token;
use Illuminate\Support\Str;

class TokenService
{
    public function create(
        string $designSystemId,
        string $category,
        string $path,
        string $value,
        string $type
    ): Token {
        return Token::create([
            'id' => Str::uuid(),
            'design_system_id' => $designSystemId,
            'category' => $category,
            'path' => $path,
            'value' => $value,
            'type' => $type,
        ]);
    }

    public function update(Token $token, string $value): void
    {
        $token->update(['value' => $value]);
    }

    public function listByDesignSystem(string $designSystemId)
    {
        return Token::where('design_system_id', $designSystemId)->get();
    }
}
```

---

# 4️⃣ TokenCompiler (Infraestrutura)

Agora começa a parte importante.

Transformar tokens em estrutura compatível com Tailwind.

```php
// app/Infrastructure/Token/TokenCompiler.php

namespace App\Infrastructure\Token;

use Illuminate\Support\Collection;

class TokenCompiler
{
    public function compileToTailwind(Collection $tokens): array
    {
        $output = [];

        foreach ($tokens as $token) {
            $segments = explode('.', $token->path);

            $this->arraySet(
                $output,
                $segments,
                $token->value
            );
        }

        return $output;
    }

    protected function arraySet(array &$array, array $keys, $value): void
    {
        $key = array_shift($keys);

        if (count($keys) === 0) {
            $array[$key] = $value;
            return;
        }

        if (!isset($array[$key])) {
            $array[$key] = [];
        }

        $this->arraySet($array[$key], $keys, $value);
    }
}
```

---

# 5️⃣ TailwindConfigGenerator

Agora convertemos para `tailwind.config.js`.

```php
// app/Infrastructure/Tailwind/TailwindConfigGenerator.php

namespace App\Infrastructure\Tailwind;

class TailwindConfigGenerator
{
    public function generate(array $compiledTokens): string
    {
        $json = json_encode($compiledTokens, JSON_PRETTY_PRINT);

        return <<<JS
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    darkMode: 'class',
    theme: {
        extend: {$json}
    },
    plugins: [],
};
JS;
    }
}
```

Isso gera dinamicamente o arquivo final.

---

# 6️⃣ Theme Model

```php
// app/Domain/Theme/Models/Theme.php

namespace App\Domain\Theme\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Theme extends Model
{
    use HasUuids;

    protected $fillable = [
        'design_system_id',
        'name',
        'config_json',
        'is_default',
    ];

    protected $casts = [
        'config_json' => 'array',
        'is_default' => 'boolean',
    ];
}
```

---

# 7️⃣ ThemeCompiler

Permite aplicar override de tema sobre tokens.

```php
// app/Infrastructure/Theme/ThemeCompiler.php

namespace App\Infrastructure\Theme;

class ThemeCompiler
{
    public function apply(array $baseTokens, array $themeOverrides): array
    {
        return array_replace_recursive($baseTokens, $themeOverrides);
    }
}
```

---

# 8️⃣ Fluxo Completo da Engine

1. Tokens são criados
2. TokenCompiler compila
3. ThemeCompiler aplica override
4. TailwindConfigGenerator gera config final
5. Arquivo é salvo dinamicamente
6. Vite recompila

Isso permite:

* troca de tema em tempo real
* geração de múltiplos design systems
* export estruturado

---

# 9️⃣ Estrutura de Tokens Profissional (Padrão Enterprise)

Exemplo salvo no banco:

```
color.primary.50 → #eef2ff
color.primary.500 → #6366f1
color.primary.900 → #312e81

spacing.sm → 0.5rem
spacing.md → 1rem

shadow.glass → 0 4px 30px rgba(0,0,0,0.1)

font.family.base → Inter
font.size.lg → 1.125rem
```

Isso vira automaticamente:

```js
theme: {
  extend: {
    colors: { ... },
    spacing: { ... },
    fontSize: { ... }
  }
}
```

---

# 🔥 O que essa Fase desbloqueia

✔ Sistema de tokens real
✔ Compilação dinâmica
✔ Preparado para live preview
✔ Preparado para export LLM
✔ Base para theme switching
✔ Escalável

---

 ##############################################################################################################################################
 
Perfeito.

Agora entramos na parte que transforma o sistema em **produto utilizável**.

A Fase 3 criou o motor.
A **FASE 4 cria o Studio visual**.

---

# 🚀 FASE 4 — LIVE STUDIO (Dashboard + Token Manager + Component Browser + Preview Sandbox)

Objetivo:

* Interface visual para edição de tokens
* Preview em tempo real
* Gerenciamento de componentes
* Alternância de temas
* Base SaaS pronta para usuários finais

Stack assumida:

* Laravel 11
* Livewire 3
* Alpine
* Tailwind
* PostgreSQL

Arquitetura mantida:

* Domain
* Application
* Infrastructure
* UI (Livewire)

---

# 1️⃣ Estrutura de Diretórios UI

```
app/
 └── Livewire/
      ├── Studio/
      │    ├── Dashboard.php
      │    ├── TokenManager.php
      │    ├── ComponentBrowser.php
      │    └── PreviewSandbox.php
```

---

# 2️⃣ Dashboard Principal

Responsável por carregar Design System ativo.

```php
// app/Livewire/Studio/Dashboard.php

namespace App\Livewire\Studio;

use Livewire\Component;
use App\Domain\DesignSystem\Models\DesignSystem;

class Dashboard extends Component
{
    public DesignSystem $designSystem;

    public function mount(string $id)
    {
        $this->designSystem = DesignSystem::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.studio.dashboard');
    }
}
```

---

### Blade

```blade
<div class="flex h-screen">

    <div class="w-72 border-r p-4">
        <livewire:studio.token-manager :designSystem="$designSystem" />
        <livewire:studio.component-browser :designSystem="$designSystem" />
    </div>

    <div class="flex-1 p-6">
        <livewire:studio.preview-sandbox :designSystem="$designSystem" />
    </div>

</div>
```

---

# 3️⃣ TokenManager (Edição em Tempo Real)

```php
// app/Livewire/Studio/TokenManager.php

namespace App\Livewire\Studio;

use Livewire\Component;
use App\Application\Services\TokenService;
use App\Infrastructure\Token\TokenCompiler;
use App\Infrastructure\Tailwind\TailwindConfigGenerator;

class TokenManager extends Component
{
    public $designSystem;
    public $tokens;

    protected TokenService $service;

    public function boot(TokenService $service)
    {
        $this->service = $service;
    }

    public function mount($designSystem)
    {
        $this->designSystem = $designSystem;
        $this->loadTokens();
    }

    public function loadTokens()
    {
        $this->tokens = $this->service
            ->listByDesignSystem($this->designSystem->id)
            ->toArray();
    }

    public function updateToken($tokenId, $value)
    {
        $token = \App\Domain\Token\Models\Token::findOrFail($tokenId);
        $this->service->update($token, $value);

        $this->recompile();
    }

    protected function recompile()
    {
        $tokens = collect($this->tokens);
        $compiler = new TokenCompiler();
        $compiled = $compiler->compileToTailwind($tokens);

        $generator = new TailwindConfigGenerator();
        $config = $generator->generate($compiled);

        file_put_contents(base_path('tailwind.config.js'), $config);
    }

    public function render()
    {
        return view('livewire.studio.token-manager');
    }
}
```

---

### Blade Simplificado

```blade
<div>
    <h3 class="font-bold mb-4">Tokens</h3>

    @foreach($tokens as $token)
        <div class="mb-2">
            <label class="text-xs text-gray-500">
                {{ $token['path'] }}
            </label>

            <input
                type="text"
                value="{{ $token['value'] }}"
                wire:change="updateToken('{{ $token['id'] }}', $event.target.value)"
                class="w-full border rounded px-2 py-1"
            />
        </div>
    @endforeach
</div>
```

---

# 4️⃣ ComponentBrowser

Lista componentes cadastrados.

```php
// app/Livewire/Studio/ComponentBrowser.php

namespace App\Livewire\Studio;

use Livewire\Component;
use App\Domain\Component\Models\Component as DSComponent;

class ComponentBrowser extends Component
{
    public $designSystem;
    public $components;

    public function mount($designSystem)
    {
        $this->designSystem = $designSystem;

        $this->components = DSComponent::where(
            'design_system_id',
            $designSystem->id
        )->get();
    }

    public function render()
    {
        return view('livewire.studio.component-browser');
    }
}
```

---

# 5️⃣ PreviewSandbox

Renderiza componente selecionado.

```php
// app/Livewire/Studio/PreviewSandbox.php

namespace App\Livewire\Studio;

use Livewire\Component;

class PreviewSandbox extends Component
{
    public $designSystem;
    public $componentMarkup;

    protected $listeners = ['previewComponent'];

    public function previewComponent($markup)
    {
        $this->componentMarkup = $markup;
    }

    public function render()
    {
        return view('livewire.studio.preview-sandbox');
    }
}
```

---

### Blade

```blade
<div class="bg-gray-50 min-h-full p-8 rounded">

    @if($componentMarkup)
        {!! $componentMarkup !!}
    @else
        <div class="text-gray-400">
            Selecione um componente
        </div>
    @endif

</div>
```

---

# 6️⃣ Alternância de Tema

No layout principal:

```blade
<html x-data="{ dark: false }" :class="dark ? 'dark' : ''">
```

Toggle:

```blade
<button @click="dark = !dark">
    Toggle Theme
</button>
```

---

# 7️⃣ O que a FASE 4 entrega

✔ Interface real
✔ Edição dinâmica
✔ Preview instantâneo
✔ Base para SaaS multi-tenant
✔ Studio utilizável

Agora o projeto deixa de ser backend engine
e vira ferramenta visual.

---

 ##############################################################################################################################################


# 🚀 FASE 5 — EXPORTADOR LLM-READY + SDK CLI

Objetivo:

* Exportar Design System estruturado
* Gerar JSON otimizado para IA
* Gerar pacote instalável
* Criar CLI para consumo externo
* Preparar integração com agentes

---

# 1️⃣ Conceito de Exportação LLM-Ready

Um LLM não entende Blade.

Ele entende estrutura.

Precisamos exportar:

* tokens estruturados
* componentes normalizados
* variantes
* slots
* props
* dependências
* guidelines
* exemplos

Formato final:

```json
{
  "meta": {...},
  "tokens": {...},
  "components": [...],
  "themes": [...]
}
```

---

# 2️⃣ LLMExportService (Application Layer)

```php
// app/Application/Services/LLMExportService.php

namespace App\Application\Services;

use App\Domain\DesignSystem\Models\DesignSystem;
use App\Domain\Component\Models\Component;
use App\Domain\Token\Models\Token;

class LLMExportService
{
    public function export(DesignSystem $designSystem): array
    {
        return [
            'meta' => $this->meta($designSystem),
            'tokens' => $this->tokens($designSystem),
            'components' => $this->components($designSystem),
            'themes' => $this->themes($designSystem),
        ];
    }

    protected function meta(DesignSystem $ds): array
    {
        return [
            'name' => $ds->name,
            'version' => $ds->version,
            'exported_at' => now()->toIso8601String(),
        ];
    }

    protected function tokens(DesignSystem $ds): array
    {
        return Token::where('design_system_id', $ds->id)
            ->get()
            ->map(fn ($t) => [
                'path' => $t->path,
                'value' => $t->value,
                'type' => $t->type,
            ])
            ->toArray();
    }

    protected function components(DesignSystem $ds): array
    {
        return Component::where('design_system_id', $ds->id)
            ->get()
            ->map(fn ($c) => [
                'name' => $c->name,
                'category' => $c->category,
                'props' => $c->props_json,
                'slots' => $c->slots_json,
                'variants' => $c->variants_json,
                'markup' => $c->blade_markup,
            ])
            ->toArray();
    }

    protected function themes(DesignSystem $ds): array
    {
        return $ds->themes()->get()->toArray();
    }
}
```

---

# 3️⃣ ExportController (Download JSON)

```php
// app/Http/Controllers/ExportController.php

namespace App\Http\Controllers;

use App\Application\Services\LLMExportService;
use App\Domain\DesignSystem\Models\DesignSystem;

class ExportController extends Controller
{
    public function llm(string $id, LLMExportService $service)
    {
        $ds = DesignSystem::findOrFail($id);

        $data = $service->export($ds);

        return response()->json(
            $data,
            200,
            [
                'Content-Disposition' =>
                    'attachment; filename="design-system-llm.json"'
            ]
        );
    }
}
```

---

# 4️⃣ Versão Otimizada para IA (Flattened)

Opcionalmente criamos export simplificado:

```php
public function exportCompact(DesignSystem $ds): array
{
    return [
        'tokens' => collect($this->tokens($ds))
            ->pluck('value', 'path'),

        'components' => collect($this->components($ds))
            ->map(fn ($c) => [
                'name' => $c['name'],
                'markup' => $c['markup']
            ])
    ];
}
```

Ideal para alimentar agentes.

---

# 5️⃣ Geração de Package Instalável

Criamos pacote zip com:

```plaintext
design-system/
 ├── tokens.json
 ├── components/
 │    ├── Button.blade.php
 │    └── Card.blade.php
 ├── tailwind.config.js
 └── README.md
```

Service:

```php
// app/Application/Services/PackageBuilder.php
```

(gera diretório temporário + ZipArchive)

---

# 6️⃣ CLI Oficial

Criamos comando Artisan:

```php
// app/Console/Commands/ExportDesignSystem.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Application\Services\LLMExportService;
use App\Domain\DesignSystem\Models\DesignSystem;

class ExportDesignSystem extends Command
{
    protected $signature = 'ds:export {id}';
    protected $description = 'Export Design System LLM-ready';

    public function handle(LLMExportService $service)
    {
        $ds = DesignSystem::findOrFail($this->argument('id'));

        $data = $service->export($ds);

        file_put_contents(
            base_path('design-system-export.json'),
            json_encode($data, JSON_PRETTY_PRINT)
        );

        $this->info('Export completed.');
    }
}
```

Uso:

```bash
php artisan ds:export 123
```

---

# 7️⃣ SDK Externo (NPM / PHP)

Você pode gerar:

* SDK JS para consumir export
* SDK PHP para importar
* CLI Node para instalar componentes

Isso vira diferencial comercial.

---

# 8️⃣ OpenAPI Endpoint

Expose:

```
GET /api/design-system/{id}/export
GET /api/design-system/{id}/export/compact
```

Isso permite:

* IA consumir
* GitHub Actions puxar
* Integração CI/CD
* Versionamento automático

---

# 9️⃣ Segurança

* Rate limiting
* Token de API por workspace
* Assinatura de export
* Controle por plano SaaS

---

# 🔥 O que essa Fase desbloqueia

✔ Compatível com IA
✔ Produto vendável
✔ Export padrão enterprise
✔ Base para marketplace
✔ Integração CI
✔ White-label

---

 ##############################################################################################################################################
 
 
 Agora fechamos o ciclo.

A Fase 6 transforma o projeto em **SaaS enterprise multi-tenant monetizável**.

Sem isso é ferramenta.
Com isso vira produto.

---

# 🚀 FASE 6 — MONETIZAÇÃO SaaS + MULTI-TENANT + BILLING

Objetivo:

* Multi-tenant real
* Controle por plano
* Billing recorrente
* Controle de limites
* Infra preparada para escala
* Base para valuation

Stack recomendada:

* Laravel 11
* PostgreSQL
* Stripe
* Laravel Cashier
* Policies + Gates
* Rate limiting por tenant

---

# 1️⃣ Arquitetura Multi-Tenant

Modelo recomendado:

👉 Single database + tenant_id em todas as tabelas principais.

Atualização estrutural:

```php
Schema::table('design_systems', function (Blueprint $table) {
    $table->uuid('tenant_id')->index();
});
```

Criação de tenants:

```php
Schema::create('tenants', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->string('name');
    $table->string('slug')->unique();
    $table->timestamps();
});
```

User pertence a tenant:

```php
Schema::table('users', function (Blueprint $table) {
    $table->uuid('tenant_id')->index();
});
```

---

# 2️⃣ Tenant Middleware

```php
// app/Http/Middleware/ResolveTenant.php

namespace App\Http\Middleware;

use Closure;

class ResolveTenant
{
    public function handle($request, Closure $next)
    {
        $tenant = auth()->user()?->tenant;

        if (!$tenant) {
            abort(403);
        }

        app()->instance('tenant', $tenant);

        return $next($request);
    }
}
```

Registrar no Kernel.

---

# 3️⃣ Escopos Globais por Tenant

Evita vazamento de dados.

```php
// app/Domain/Concerns/BelongsToTenant.php

namespace App\Domain\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant()
    {
        static::creating(function ($model) {
            $model->tenant_id = auth()->user()->tenant_id;
        });

        static::addGlobalScope('tenant', function (Builder $builder) {
            if (auth()->check()) {
                $builder->where(
                    'tenant_id',
                    auth()->user()->tenant_id
                );
            }
        });
    }
}
```

Aplicar no DesignSystem, Token, Component etc.

---

# 4️⃣ Planos SaaS

Tabela:

```php
Schema::create('plans', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('max_design_systems');
    $table->integer('max_components');
    $table->boolean('llm_export');
    $table->decimal('price', 8, 2);
    $table->timestamps();
});
```

Exemplo de planos:

| Plano | DS | Componentes | LLM Export |
| ----- | -- | ----------- | ---------- |
| Free  | 1  | 20          | ❌          |
| Pro   | 5  | 200         | ✔          |
| Team  | ∞  | ∞           | ✔          |

---

# 5️⃣ Enforcement de Limites

Service:

```php
// app/Application/Services/PlanLimitService.php

namespace App\Application\Services;

class PlanLimitService
{
    public function canCreateDesignSystem($tenant): bool
    {
        return $tenant->designSystems()->count()
            < $tenant->plan->max_design_systems;
    }

    public function canExportLLM($tenant): bool
    {
        return $tenant->plan->llm_export;
    }
}
```

Uso em Controller:

```php
if (! $limitService->canExportLLM($tenant)) {
    abort(403, 'Upgrade required.');
}
```

---

# 6️⃣ Stripe + Cashier

Instalar:

```bash
composer require laravel/cashier
```

Migration:

```bash
php artisan cashier:table
```

No model Tenant:

```php
use Laravel\Cashier\Billable;

class Tenant extends Model
{
    use Billable;
}
```

Criar assinatura:

```php
$tenant->newSubscription('default', $priceId)
       ->create($paymentMethodId);
```

Webhook Stripe → atualizar plano.

---

# 7️⃣ Controle de Features

Feature gating simples:

```php
if (! feature('llm_export')) {
    abort(403);
}
```

Ou usando enum + policy.

---

# 8️⃣ API Tokens por Workspace

Tabela:

```php
Schema::create('api_tokens', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->uuid('tenant_id')->index();
    $table->string('name');
    $table->string('token')->unique();
    $table->timestamps();
});
```

Permite:

* Integração CI
* GitHub Actions
* CLI externa

---

# 9️⃣ Rate Limiting por Tenant

No RouteServiceProvider:

```php
RateLimiter::for('tenant', function ($request) {
    return Limit::perMinute(
        optional(auth()->user()?->tenant?->plan)->rate_limit ?? 60
    );
});
```

---

# 🔟 Métricas (Base para Investidor)

Você passa a ter:

* MRR
* ARPU
* Churn
* Growth rate
* Retention por tenant
* LTV

Sem multi-tenant e billing você não tem valuation real.

---

# 🔥 O que a FASE 6 entrega

✔ Multi-tenant isolado
✔ Billing recorrente
✔ Controle de plano
✔ Feature gating
✔ Rate limit
✔ Base para escalar

---

 
  ##############################################################################################################################################
  
  Perfeito.

Agora vamos estruturar **Docker + CI/CD enterprise-ready**, focando em:

* Ambiente reprodutível
* Build otimizado
* Pipeline automatizado
* Deploy seguro
* Escalável horizontalmente

Stack alvo:

* Laravel 11
* PHP 8.4
* PostgreSQL
* Redis
* Nginx
* Vite
* GitHub Actions

---

# 🚀 DOCKER — ESTRUTURA PROFISSIONAL

Arquitetura:

```
infra/
 ├── docker/
 │    ├── php/
 │    │    └── Dockerfile
 │    ├── nginx/
 │    │    └── default.conf
 │    └── supervisor/
 │         └── supervisor.conf
 ├── docker-compose.yml
 └── .env.docker
```

---

# 1️⃣ Dockerfile (PHP-FPM otimizado)

`infra/docker/php/Dockerfile`

```dockerfile
FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    bash \
    git \
    curl \
    icu-dev \
    libzip-dev \
    oniguruma-dev \
    postgresql-dev \
    nodejs \
    npm \
    supervisor

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    intl \
    zip \
    opcache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN chown -R www-data:www-data /var/www

CMD ["php-fpm"]
```

---

# 2️⃣ Nginx Config

`infra/docker/nginx/default.conf`

```nginx
server {
    listen 80;
    server_name _;

    root /var/www/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass app:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

---

# 3️⃣ docker-compose.yml

```yaml
version: '3.9'

services:

  app:
    build:
      context: .
      dockerfile: infra/docker/php/Dockerfile
    container_name: ds_app
    restart: unless-stopped
    env_file:
      - .env
    volumes:
      - .:/var/www
    depends_on:
      - postgres
      - redis

  nginx:
    image: nginx:alpine
    container_name: ds_nginx
    restart: unless-stopped
    ports:
      - "8080:80"
    volumes:
      - .:/var/www
      - ./infra/docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - app

  postgres:
    image: postgres:16
    container_name: ds_postgres
    restart: unless-stopped
    environment:
      POSTGRES_DB: design_system
      POSTGRES_USER: postgres
      POSTGRES_PASSWORD: secret
    ports:
      - "5432:5432"
    volumes:
      - postgres_data:/var/lib/postgresql/data

  redis:
    image: redis:7
    container_name: ds_redis
    restart: unless-stopped
    ports:
      - "6379:6379"

volumes:
  postgres_data:
```

---

# 4️⃣ Multi-Stage Build (Produção Ideal)

Para produção real, recomendo:

* Stage 1 → build assets
* Stage 2 → runtime limpo
* Sem node/npm na imagem final

Se quiser posso te passar versão hardened para produção cloud.

---

# 🚀 CI/CD — GitHub Actions

Estrutura:

```
.github/workflows/deploy.yml
```

---

# 5️⃣ Pipeline Completo

```yaml
name: Deploy SaaS

on:
  push:
    branches: [ main ]

jobs:

  build:

    runs-on: ubuntu-latest

    steps:

      - name: Checkout
        uses: actions/checkout@v4

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.4

      - name: Install Dependencies
        run: composer install --no-interaction --prefer-dist

      - name: Run Tests
        run: php artisan test

      - name: Build Frontend
        run: |
          npm install
          npm run build

      - name: Build Docker Image
        run: docker build -t ds-app .

      - name: Login Docker Hub
        run: echo "${{ secrets.DOCKER_PASSWORD }}" | docker login -u "${{ secrets.DOCKER_USER }}" --password-stdin

      - name: Push Image
        run: |
          docker tag ds-app user/ds-app:latest
          docker push user/ds-app:latest

      - name: Deploy via SSH
        uses: appleboy/ssh-action@v1
        with:
          host: ${{ secrets.SERVER_HOST }}
          username: ${{ secrets.SERVER_USER }}
          key: ${{ secrets.SERVER_SSH_KEY }}
          script: |
            docker pull user/ds-app:latest
            docker compose down
            docker compose up -d
```

---

# 🔐 Secrets Necessários

No GitHub → Settings → Secrets:

* DOCKER_USER
* DOCKER_PASSWORD
* SERVER_HOST
* SERVER_USER
* SERVER_SSH_KEY

---

