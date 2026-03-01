# Sprint 1.3 - Versionamento Base (CONCLUÍDA)

**Concluída em**: 2026-03-01
**Commit**: e366c3e

## Meta
Sistema de versionamento semântico para Design Systems

## Entregues

- [x] **1.3.1** `VersioningService::bumpVersion()` — incrementa major/minor/patch, valida tipo, persiste versão, atualiza `current_version_id`
- [x] **1.3.2** `VersioningService::generateSnapshot()` — serializa tokens, themes e component instances no momento da chamada
- [x] **1.3.3** `VersioningService::diff()` — detecta tokens adicionados, removidos e alterados entre duas versões

## Localização dos arquivos

- `app/Application/Services/VersioningService.php`
- `tests/Feature/Services/VersioningServiceTest.php`

## Cobertura

18 testes (36 assertions) cobrindo:
- Bump patch/minor/major a partir do zero
- Bump incremental com reset correto de dígitos
- Atualização de `current_version_id`
- Geração de snapshot com tokens/themes/components
- Changelog opcional
- Exceção para tipo inválido
- Diff: added, removed, changed, idêntico
