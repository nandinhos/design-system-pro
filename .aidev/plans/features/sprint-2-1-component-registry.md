# Sprint 2.1 - Component Registry Engine

**Sprint**: 2.1
**Fase**: 2 — Component Registry Engine
**Status**: Planejada → Em execução
**Criada em**: 2026-03-01

---

## Meta

Motor de registro de componentes com identificadores LLM-ready, CRUD completo via service e seeder do catálogo inicial.

---

## Contexto

Os models `Component`, `ComponentVariant` e `ComponentInstance` já existem em `app/Models/` (criados na Sprint 1.2). A Sprint 2.1 constrói a camada de aplicação e infraestrutura sobre eles.

---

## Tasks

### 2.2 — IdentifierGenerator (Infraestrutura)

| ID | Descrição | Arquivo | Status |
|----|-----------|---------|--------|
| 2.2.1 | Criar classe `IdentifierGenerator` | `app/Infrastructure/Component/IdentifierGenerator.php` | [ ] |
| 2.2.2 | Implementar `generate(category, component, variant, version)` → `ui.{categoria}.{componente}.{variante}.v{versao}` | idem | [ ] |
| 2.2.3 | Garantir identificadores determinísticos (mesma entrada = mesma saída) | idem | [ ] |

**Formato do identificador**: `ui.{category}.{slug}.{variant_slug}.v{version}`
**Exemplo**: `ui.form.button.primary.v1`
**Regras**:
- Tudo lowercase, separado por `.`
- Slugify de cada segmento (sem espaços, sem caracteres especiais)
- Version sem dots: `1.0.0` → `v1_0_0`

### 2.3 — ComponentRegistryService (Aplicação)

| ID | Descrição | Método | Status |
|----|-----------|--------|--------|
| 2.3.1 | Criar `ComponentRegistryService` | — | [ ] |
| 2.3.2 | Registrar componente | `registerComponent(array $data): Component` | [ ] |
| 2.3.3 | Adicionar variante | `addVariant(Component $component, string $name, array $schema): ComponentVariant` | [ ] |
| 2.3.4 | Instanciar em Design System | `instantiateComponent(DesignSystem $ds, Component $component, array $config): ComponentInstance` | [ ] |
| 2.3.5 | Listar por categoria | `listByCategory(string $category): Collection` com eager loading de variants | [ ] |
| 2.3.6 | Listar todos | `all(): Collection` com eager loading de variants | [ ] |

**Regras do service**:
- `registerComponent` usa `IdentifierGenerator` internamente para gerar o `slug` e validar unicidade
- `instantiateComponent` usa `IdentifierGenerator` para gerar o `identifier` da instância
- `listByCategory` e `all` fazem eager loading para evitar N+1

### 2.4 — ComponentCatalogSeeder (Dados Iniciais)

| ID | Descrição | Arquivo | Status |
|----|-----------|---------|--------|
| 2.4.1 | Criar `ComponentCatalogSeeder` | `database/seeders/ComponentCatalogSeeder.php` | [ ] |
| 2.4.2 | Seed de componentes core (mínimo 8) | idem | [ ] |
| 2.4.3 | Registrar seeder no `DatabaseSeeder` | `database/seeders/DatabaseSeeder.php` | [ ] |

**Componentes core iniciais**:
- `Button` (form) — variantes: primary, secondary, ghost, danger
- `Input` (form) — variantes: text, password, email
- `Card` (layout) — variantes: default, elevated, outlined
- `Modal` (feedback) — variantes: default, confirmation
- `Badge` (data-display) — variantes: success, warning, error, info
- `Avatar` (data-display) — variantes: default, sm, lg
- `Navbar` (navigation) — variantes: default
- `Sidebar` (navigation) — variantes: default

---

## Arquitetura

```
app/
├── Infrastructure/
│   └── Component/
│       └── IdentifierGenerator.php   ← novo
├── Application/
│   └── Services/
│       └── ComponentRegistryService.php  ← novo
database/
└── seeders/
    └── ComponentCatalogSeeder.php    ← novo
tests/
└── Feature/
    ├── Infrastructure/
    │   └── IdentifierGeneratorTest.php   ← novo
    └── Services/
        └── ComponentRegistryServiceTest.php  ← novo
```

---

## Critérios de Aceite

- [ ] `IdentifierGenerator::generate()` é determinístico (100% dos casos)
- [ ] `registerComponent()` valida slug único por categoria
- [ ] `instantiateComponent()` gera identifier via `IdentifierGenerator`
- [ ] `listByCategory()` sem N+1 queries (verificado via query count)
- [ ] Seeder roda sem erros (`php artisan db:seed --class=ComponentCatalogSeeder`)
- [ ] Todos os testes passando (GREEN)
- [ ] Pint sem erros de formatação

---

## Dependências

- Sprint 1.2 (Models) ✅
- Sprint 1.3 (VersioningService) ✅

---

*Próxima Sprint: 2.2 — Catálogo Completo (120+ componentes)*
