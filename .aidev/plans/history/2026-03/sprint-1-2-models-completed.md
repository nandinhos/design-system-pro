# Sprint 1.2 - Models de Domínio (CONCLUÍDA)

**Concluída em**: 2026-03-01
**Commit**: 2721240

## Meta
Models de domínio com UUID, relacionamentos e factories

## Entregues

- [x] **1.2.1** Model `DesignSystem` — HasUuids, fillable, casts, scopes (active)
- [x] **1.2.2** Model `DesignSystemVersion` — HasUuids, snapshot cast array, scope (published)
- [x] **1.2.3** Model `Component` — HasUuids, base_schema cast array, scope (core)
- [x] **1.2.4** Model `ComponentVariant` — HasUuids, schema cast array
- [x] **1.2.5** Model `ComponentInstance` — HasUuids, config_json cast array, scope (active)
- [x] **1.2.6** Model `Token` — HasUuids, scopes (byCategory, global)
- [x] **1.2.7** Model `Theme` — HasUuids, config_json cast array, scope (default)
- [x] **1.2.8** Model `AuditLog` — HasUuids, payload cast array
- [x] **1.2.9** Model `Export` — HasUuids
- [x] Factories com states para todos os models
- [x] 30 testes de model (60 assertions)

## Localização dos arquivos

- `app/Models/` — todos os models
- `database/factories/` — todas as factories
- `tests/Feature/Models/` — todos os testes

## Observação técnica

Laravel 12 usa UUID v7 por padrão via `HasUuids`. Regex de validação deve usar `[0-9a-f]{4}` no terceiro grupo (não `4[0-9a-f]{3}`).
