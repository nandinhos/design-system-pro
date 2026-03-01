# Sprint 1.1 - Tarefas Detalhadas

## Meta
Ambiente configurado e migrations executadas

---

## Tarefa 1.1.1: Migration design_systems

**Descrição**: Criar tabela principal de Design Systems

**Arquivo**: `database/migrations/2026_02_28_000001_create_design_systems_table.php`

**Campos**:
- id (uuid, primary key)
- name (string, 255)
- slug (string, 255, unique)
- description (text, nullable)
- current_version_id (uuid, nullable)
- is_active (boolean, default true)
- created_by (uuid, nullable)
- timestamps (created_at, updated_at)

**Testes**:
- [ ] Criar migration
- [ ] Executar migration
- [ ] Reverter migration
- [ ] Testar criação de registro
- [ ] Testar validações

---

## Tarefa 1.1.2: Migration design_system_versions

**Descrição**: Tabela de versionamento de Design Systems

**Arquivo**: `database/migrations/2026_02_28_000002_create_design_system_versions_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, foreign key)
- version (string, 50)
- changelog (text, nullable)
- snapshot (jsonb)
- is_published (boolean, default false)
- timestamps

**Relacionamentos**:
- belongsTo DesignSystem

---

## Tarefa 1.1.3: Migration components

**Descrição**: Catálogo global de componentes

**Arquivo**: `database/migrations/2026_02_28_000003_create_components_table.php`

**Campos**:
- id (uuid, primary key)
- name (string, 255)
- slug (string, 255)
- category (string, 100)
- description (text, nullable)
- base_schema (jsonb)
- preview_template (text, nullable)
- blade_path (string, 255, nullable)
- version (string, 50)
- is_core (boolean, default false)
- timestamps

**Índices**:
- unique: slug + category
- index: category

---

## Tarefa 1.1.4: Migration component_variants

**Descrição**: Variantes de componentes

**Arquivo**: `database/migrations/2026_02_28_000004_create_component_variants_table.php`

**Campos**:
- id (uuid, primary key)
- component_id (uuid, foreign key)
- name (string, 255)
- schema (jsonb)
- timestamps

**Relacionamentos**:
- belongsTo Component

---

## Tarefa 1.1.5: Migration component_instances

**Descrição**: Instâncias de componentes em Design Systems

**Arquivo**: `database/migrations/2026_02_28_000005_create_component_instances_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, foreign key)
- component_id (uuid, foreign key)
- identifier (string, 255)
- config_json (jsonb)
- is_active (boolean, default true)
- timestamps

**Índices**:
- unique: identifier
- index: design_system_id
- index: component_id

---

## Tarefa 1.1.6: Migration tokens

**Descrição**: Design Tokens do sistema

**Arquivo**: `database/migrations/2026_02_28_000006_create_tokens_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, foreign key)
- category (string, 100)
- path (string, 255) - ex: color.primary.500
- value (text)
- type (string, 50) - color, spacing, font, shadow, motion
- is_global (boolean, default false)
- timestamps

**Índices**:
- index: design_system_id
- index: category
- index: path

---

## Tarefa 1.1.7: Migration themes

**Descrição**: Temas customizáveis

**Arquivo**: `database/migrations/2026_02_28_000007_create_themes_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, foreign key)
- name (string, 255)
- config_json (jsonb)
- is_default (boolean, default false)
- timestamps

**Índices**:
- index: design_system_id

---

## Tarefa 1.1.8: Migration exports

**Descrição**: Histórico de exports

**Arquivo**: `database/migrations/2026_02_28_000008_create_exports_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, foreign key)
- version_id (uuid, nullable)
- type (string, 50) - markdown, json, prd
- content (longtext)
- timestamps

---

## Tarefa 1.1.9: Migration audit_logs

**Descrição**: Logs de auditoria

**Arquivo**: `database/migrations/2026_02_28_000009_create_audit_logs_table.php`

**Campos**:
- id (uuid, primary key)
- design_system_id (uuid, nullable)
- action (string, 255)
- payload (jsonb)
- created_by (uuid, nullable)
- timestamps

**Índices**:
- index: design_system_id
- index: created_by
- index: created_at

---

## Checklist de Qualidade

- [ ] Todas as migrations usam bigIncrements para compatibilidade com UUID
- [ ] Todos os campos created_at e updated_at presentes
- [ ] Foreign keys com cascadeOnDelete onde apropriado
- [ ] Índices criados para campos de busca frequente
- [ ] Testes de migration passando
- [ ] Code style verificado (Pint)
- [ ] Análise estática passando (PHPStan)

---

## Dependencies

- PostgreSQL 16+ (required for jsonb)
- Laravel 12.x

---

*Próxima Sprint: 1.2 - Models e Versionamento*
