# Backlog de Funcionalidades - Laravel Design System Studio

## Visão Geral do Projeto

Plataforma completa para criação, gerenciamento e exportação de Design Systems empresariais com suporte a multi-tenant, monetização SaaS e integração com IA.

---

## Fase 1: Core Foundation (Fundação do Sistema)

### 1.1 Migrations e Estrutura de Banco de Dados

- [x] **1.1.1** Criar migration para tabela `design_systems` com campos: id (uuid), name, slug, description, current_version_id, is_active, created_by, timestamps
- [x] **1.1.2** Criar migration para tabela `design_system_versions` com campos: id (uuid), design_system_id, version, changelog, snapshot (jsonb), is_published, timestamps
- [x] **1.1.3** Criar migration para tabela `components` (catálogo global) com campos: id, name, slug, category, description, base_schema (jsonb), preview_template, blade_path, version, is_core, timestamps
- [x] **1.1.4** Criar migration para tabela `component_variants` com campos: id, component_id, name, schema (jsonb), timestamps
- [x] **1.1.5** Criar migration para tabela `component_instances` com campos: id, design_system_id, component_id, identifier, config_json, is_active, timestamps
- [x] **1.1.6** Criar migration para tabela `tokens` com campos: id, design_system_id, category, path, value, type, is_global, timestamps
- [x] **1.1.7** Criar migration para tabela `themes` com campos: id, design_system_id, name, config_json, is_default, timestamps
- [x] **1.1.8** Criar migration para tabela `exports` com campos: id, design_system_id, version_id, type, content (longtext), timestamps
- [x] **1.1.9** Criar migration para tabela `audit_logs` com campos: id, design_system_id, action, payload (jsonb), created_by, timestamps

### 1.2 Models de Domínio

- [ ] **1.2.1** Criar model `DesignSystem` em `app/Domain/DesignSystem/Models/DesignSystem.php` com relacionamentos e uuid
- [ ] **1.2.2** Criar model `DesignSystemVersion` em `app/Domain/DesignSystem/Models/DesignSystemVersion.php`
- [ ] **1.2.3** Configurar relacionamentos entre DesignSystem e suas versões
- [ ] **1.2.4** Implementar uuid em todos os models usando trait HasUuids

### 1.3 Versionamento Base

- [ ] **1.3.1** Implementar sistema de versionamento semântico para Design Systems
- [ ] **1.3.2** Criar método para gerar snapshot completo do Design System
- [ ] **1.3.3** Implementar diff entre versões

---

## Fase 2: Component Registry Engine (Motor de Registro de Componentes)

### 2.1 Modelos de Componentes

- [ ] **2.1.1** Criar model `Component` em `app/Domain/Component/Models/Component.php` com campos: name, slug, category, description, base_schema, preview_template, blade_path, version, is_core
- [ ] **2.1.2** Criar model `ComponentVariant` em `app/Domain/Component/Models/ComponentVariant.php`
- [ ] **2.1.3** Criar model `ComponentInstance` em `app/Domain/DesignSystem/Models/ComponentInstance.php`
- [ ] **2.1.4** Configurar relacionamentos: Component tem muitas ComponentVariants e ComponentInstances

### 2.2 Identifier Generator (LLM-Ready)

- [ ] **2.2.1** Criar `IdentifierGenerator` em `app/Infrastructure/Component/IdentifierGenerator.php`
- [ ] **2.2.2** Implementar geração de identificadores no formato: ui.{categoria}.{componente}.{variante}.v{versao}
- [ ] **2.2.3** Garantir identificadores determinísticos para consumo por LLMs

### 2.3 ComponentRegistryService

- [ ] **2.3.1** Criar `ComponentRegistryService` em `app/Application/Services/ComponentRegistryService.php`
- [ ] **2.3.2** Implementar método `registerComponent(array $data): Component`
- [ ] **2.3.3** Implementar método `addVariant(Component $component, string $name, array $schema): ComponentVariant`
- [ ] **2.3.4** Implementar método `instantiateComponent()` para criar instâncias em Design Systems
- [ ] **2.3.5** Implementar método `listByCategory(string $category)` com eager loading
- [ ] **2.3.6** Implementar método `all()` com relacionamentos

### 2.4 Seeder do Catálogo de Componentes

- [ ] **2.4.1** Criar `ComponentCatalogSeeder` em `database/seeders/ComponentCatalogSeeder.php`
- [ ] **2.4.2** Implementar seed para componentes core (Button, Card, Input, etc.)
- [ ] **2.4.3** Preparar estrutura para 120+ componentes

---

## Fase 3: Design Token Engine + Tailwind Compiler

### 3.1 Modelos de Tokens

- [ ] **3.1.1** Atualizar migration de tokens com campos: path, type, is_global
- [ ] **3.1.2** Criar model `Token` em `app/Domain/Token/Models/Token.php`
- [ ] **3.1.3** Criar model `Theme` em `app/Domain/Theme/Models/Theme.php`

### 3.2 TokenService

- [ ] **3.2.1** Criar `TokenService` em `app/Application/Services/TokenService.php`
- [ ] **3.2.2** Implementar método `create()` para novos tokens
- [ ] **3.2.3** Implementar método `update()` para editar tokens
- [ ] **3.2.4** Implementar método `listByDesignSystem()` com filtros

### 3.3 TokenCompiler (Infraestrutura)

- [ ] **3.3.1** Criar `TokenCompiler` em `app/Infrastructure/Token/TokenCompiler.php`
- [ ] **3.3.2** Implementar método `compileToTailwind(Collection $tokens): array`
- [ ] **3.3.3** Implementar helper `arraySet()` para conversão de paths hierárquicos

### 3.4 TailwindConfigGenerator

- [ ] **3.4.1** Criar `TailwindConfigGenerator` em `app/Infrastructure/Tailwind/TailwindConfigGenerator.php`
- [ ] **3.4.2** Implementar geração de `tailwind.config.js` dinamicamente
- [ ] **3.4.3** Suporte a dark mode e extensões de tema

### 3.5 ThemeCompiler

- [ ] **3.5.1** Criar `ThemeCompiler` em `app/Infrastructure/Theme/ThemeCompiler.php`
- [ ] **3.5.2** Implementar método `apply(array $baseTokens, array $themeOverrides): array`
- [ ] **3.5.3** Suporte a múltiplos temas por Design System

### 3.6 Estrutura de Tokens Profissional

- [ ] **3.6.1** Definir padrão de tokens: color.primary.50 a color.primary.900
- [ ] **3.6.2** Definir tokens de spacing, shadow, font
- [ ] **3.6.3** Criar seeders de tokens default

---

## Fase 4: Live Studio (Interface Visual)

### 4.1 Estrutura de Diretórios Livewire

- [ ] **4.1.1** Criar diretório `app/Livewire/Studio/`
- [ ] **4.1.2** Configurar namespace de componentes Livewire

### 4.2 Dashboard Principal

- [ ] **4.2.1** Criar `Dashboard.php` em `app/Livewire/Studio/Dashboard.php`
- [ ] **4.2.2** Implementar carregamento de Design System ativo
- [ ] **4.2.3** Criar view `resources/views/livewire/studio/dashboard.blade.php`
- [ ] **4.2.4** Integrar componentes filhos: TokenManager, ComponentBrowser, PreviewSandbox

### 4.3 TokenManager (Edição em Tempo Real)

- [ ] **4.3.1** Criar `TokenManager.php` em `app/Livewire/Studio/TokenManager.php`
- [ ] **4.3.2** Implementar listagem de tokens por Design System
- [ ] **4.3.3** Implementar edição inline de valores de tokens
- [ ] **4.3.4** Implementar recompilação automática do Tailwind
- [ ] **4.3.5** Criar view `resources/views/livewire/studio/token-manager.blade.php`

### 4.4 ComponentBrowser

- [ ] **4.4.1** Criar `ComponentBrowser.php` em `app/Livewire/Studio/ComponentBrowser.php`
- [ ] **4.4.2** Listar componentes por categoria com variantes
- [ ] **4.4.3** Implementar busca e filtros
- [ ] **4.4.4** Criar view `resources/views/livewire/studio/component-browser.blade.php`

### 4.5 PreviewSandbox

- [ ] **4.5.1** Criar `PreviewSandbox.php` em `app/Livewire/Studio/PreviewSandbox.php`
- [ ] **4.5.2** Renderizar componente selecionado em tempo real
- [ ] **4.5.3** Suporte a edição de props em tempo real
- [ ] **4.5.4** Criar view `resources/views/livewire/studio/preview-sandbox.blade.php`

### 4.6 Alternância de Tema

- [ ] **4.6.1** Implementar toggle dark/light mode com Alpine.js
- [ ] **4.6.2** Suporte a preview de tema em tempo real
- [ ] **4.6.3** Persistência de preferência do usuário

---

## Fase 5: Exportador LLM-Ready + SDK CLI

### 5.1 LLMExportService

- [ ] **5.1.1** Criar `LLMExportService` em `app/Application/Services/LLMExportService.php`
- [ ] **5.1.2** Implementar método `export(DesignSystem $designSystem): array`
- [ ] **5.1.3** Gerar estrutura: meta, tokens, components, themes
- [ ] **5.1.4** Implementar método `exportCompact()` para versão flattenada

### 5.2 Controladores de Exportação

- [ ] **5.2.1** Criar `ExportController` em `app/Http/Controllers/ExportController.php`
- [ ] **5.2.2** Implementar endpoint `GET /api/design-system/{id}/export`
- [ ] **5.2.3** Implementar endpoint `GET /api/design-system/{id}/export/compact`
- [ ] **5.2.4** Configurar headers para download de arquivo

### 5.3 Package Builder

- [ ] **5.3.1** Criar `PackageBuilder` em `app/Application/Services/PackageBuilder.php`
- [ ] **5.3.2** Gerar diretório temporário com estrutura: tokens.json, components/, tailwind.config.js, README.md
- [ ] **5.3.3** Implementar compactação ZipArchive

### 5.4 CLI Artisan

- [ ] **5.4.1** Criar comando `ExportDesignSystem` em `app/Console/Commands/ExportDesignSystem.php`
- [ ] **5.4.2** Assinatura: `ds:export {id}`
- [ ] **5.4.3** Gerar arquivo JSON no diretório base

### 5.5 OpenAPI e Segurança

- [ ] **5.5.1** Configurar rate limiting para endpoints de export
- [ ] **5.5.2** Implementar API tokens por workspace
- [ ] **5.5.3** Adicionar autenticação por Bearer token

---

## Fase 6: Monetização SaaS + Multi-Tenant + Billing

### 6.1 Arquitetura Multi-Tenant

- [ ] **6.1.1** Criar migration para tabela `tenants` com: id (uuid), name, slug, timestamps
- [ ] **6.1.2** Adicionar campo tenant_id em design_systems, users e tabelas principais
- [ ] **6.1.3** Criar middleware `ResolveTenant` em `app/Http/Middleware/ResolveTenant.php`
- [ ] **6.1.4** Criar trait `BelongsToTenant` em `app/Domain/Concerns/BelongsToTenant.php`
- [ ] **6.1.5** Aplicar global scope em todos os models principais

### 6.2 Planos SaaS

- [ ] **6.2.1** Criar migration para tabela `plans` com: name, max_design_systems, max_components, llm_export, price
- [ ] **6.2.2** Definir planos: Free (1 DS, 20 componentes), Pro (5 DS, 200 componentes), Team (ilimitado)
- [ ] **6.2.3** Criar seeders para planos padrão

### 6.3 PlanLimitService

- [ ] **6.3.1** Criar `PlanLimitService` em `app/Application/Services/PlanLimitService.php`
- [ ] **6.3.2** Implementar verificação `canCreateDesignSystem($tenant)`
- [ ] **6.3.3** Implementar verificação `canExportLLM($tenant)`
- [ ] **6.3.4** Integrar em todos os controllers relevantes

### 6.4 Stripe + Cashier

- [ ] **6.4.1** Instalar e configurar Laravel Cashier
- [ ] **6.4.2** Adicionar trait Billable ao model Tenant
- [ ] **6.4.3** Implementar webhooks para atualização de plano
- [ ] **6.4.4** Criar fluxos de subscription (criar, cancelar, upgrade, downgrade)

### 6.5 Feature Gating

- [ ] **6.5.1** Implementar sistema de feature flags
- [ ] **6.5.2** Criar middleware para verificação de features
- [ ] **6.5.3** Aplicar em endpoints de export LLM, etc.

### 6.6 API Tokens

- [ ] **6.6.1** Criar migration para tabela `api_tokens` com: id (uuid), tenant_id, name, token, timestamps
- [ ] **6.6.2** Implementar autenticação via Bearer token
- [ ] **6.6.3** Criar UI para gerenciamento de tokens

### 6.7 Rate Limiting

- [ ] **6.7.1** Configurar rate limiting por tenant no RouteServiceProvider
- [ ] **6.7.2** Implementar limites baseados no plano

---

## Fase 7: Docker + CI/CD (Infraestrutura)

### 7.1 Docker - Estrutura

- [ ] **7.1.1** Criar Dockerfile em `infra/docker/php/Dockerfile` (PHP 8.4-FPM Alpine)
- [ ] **7.1.2** Criar configuração Nginx em `infra/docker/nginx/default.conf`
- [ ] **7.1.3** Criar configuração Supervisor em `infra/docker/supervisor/supervisor.conf`
- [ ] **7.1.4** Criar docker-compose.yml com serviços: app, nginx, postgres, redis

### 7.2 Multi-Stage Build

- [ ] **7.2.1** Implementar multi-stage build para produção
- [ ] **7.2.2** Otimizar camadas Docker para cache
- [ ] **7.2.3** Configurar variáveis de ambiente

### 7.3 GitHub Actions CI/CD

- [ ] **7.3.1** Criar workflow `ci.yml` para testes automatizados
- [ ] **7.3.2** Criar workflow `deploy.yml` para deploy em staging
- [ ] **7.3.3** Configurar análise estática (PHPStan, Pint)
- [ ] **7.3.4** Configurar verificação de segurança (Composer audit, npm audit)

---

## Fase 8: Funcionalidades Adicionais e Melhorias

### 8.1 Autenticação e Autorização

- [ ] **8.1.1** Configurar Laravel Fortify
- [ ] **8.1.2** Implementar políticas de acesso (Policies) para Design Systems
- [ ] **8.1.3** Criar sistema de convites para membros de workspace

### 8.2 Interface de Administração

- [ ] **8.2.1** Criar páginas de gerenciamento de tenants
- [ ] **8.2.2** Criar dashboard administrativo com métricas
- [ ] **8.2.3** Implementar gerenciamento de usuários por tenant

### 8.3 Otimizações de Performance

- [ ] **8.3.1** Implementar caching de tokens compilados
- [ ] **8.3.2** Otimizar queries com eager loading
- [ ] **8.3.3** Implementar fila para exports grandes
- [ ] **8.3.4** Configurar Laravel Octane

### 8.4 Monitoramento e Logs

- [ ] **8.4.1** Configurar Laravel Telescope
- [ ] **8.4.2** Integrar Sentry para tracking de erros
- [ ] **8.4.3** Configurar logs estruturados

### 8.5 Documentação

- [ ] **8.5.1** Gerar documentação API com Swagger/OpenAPI
- [ ] **8.5.2** Criar documentação para desenvolvedores
- [ ] **8.5.3** Criar guide de uso para usuários finais

---

## Funcionalidades Futuras (Icebox)

- Marketplace de componentes
- Colaboração em tempo real
- Integração com Figma
- Templates pré-definidos
- AI Assistant para sugestões de design
- Webhooks para automações
- SSO/SAML authentication
- Audit logs avançados

---

## Dependências Externas

- **Laravel 12.x** - Framework principal
- **Livewire 4.x** - Componentes reativos
- **Tailwind CSS** - Estilização
- **Alpine.js** - Interatividade client-side
- **PostgreSQL** - Banco de dados principal
- **Redis** - Cache e filas
- **Stripe** - Pagamentos (via Cashier)
- **Laravel Octane** - Servidor de alto desempenho

---

## Notas de Implementação

1. Todos os models devem usar UUIDs para IDs
2. Aplicar TDD em todas as funcionalidades principais
3. Manter arquitetura modular: Domain/Application/Infrastructure/Livewire
4. Implementar testes antes de código (TDD)
5. Usar DTOs para transferência de dados entre camadas
6. Implementar logging de todas as operações sensíveis
7. Garantir compatibilidade com Laravel 12 e Livewire 4

---

## Critérios de Aceitação

- [ ] Todas as migrations executadas com sucesso
- [ ] Todos os models com testes unitários
- [ ] Cobertura de testes acima de 70%
- [ ] CI/CD configurado e funcionando
- [ ] Documentação API completa
- [ ] Interface responsiva e funcional
- [ ] Rate limiting funcionando por plano
- [ ] Multi-tenant isolado e seguro
