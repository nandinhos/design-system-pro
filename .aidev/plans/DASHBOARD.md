# Dashboard do Projeto - Laravel Design System Studio

## Visão Geral

| Métrica | Valor |
|---------|-------|
| **Status** | Planejamento |
| **Fase Atual** | Foundation |
| **Total Features** | 106 |
| **Concluídas** | 0 |
| **Em Progresso** | 0 |
| ** backlog** | 106 |

---

## Estrutura de Diretórios

```
├── docs/                    # Documentação técnica
│   ├── PRD.md               # Requisitos do produto
│   ├── laravel-12.md       # Referências Laravel 12
│   └── livewire-4.md       # Referências Livewire 4
│
├── .aidev/
│   ├── plans/
│   │   ├── backlog/        # Features pendentes
│   │   │   ├── FEATURES.md # Lista completa
│   │   │   └── ROADMAP.md  # Roadmap de implementação
│   │   │
│   │   ├── features/       # Features planejadas
│   │   │
│   │   ├── current/        # Sprint atual
│   │   │
│   │   └── history/        # Features concluídas
│   │
│   └── state/
│       ├── session.json    # Estado da sessão
│       └── lessons/        # Lições aprendidas
│           └── 001-planejamento-inicial.md
```

---

## Próximos Passos Imediatos

1. ✅ Planejar estrutura de banco (migrations)
2. ✅ Definir arquitetura de models
3. ⏳ Criar primeira migration
4. ⏳ Implementar primeiro model com testes

---

## Quick Reference

### Comandos Úteis

```bash
# Rodar testes
composer test
php artisan test

# Criar migration
php artisan make:migration create_{table}_table

# Criar model com tudo
php artisan make:model DesignSystem -a

# Criar Livewire component
php artisan make:livewire Studio/Dashboard

# Criar service
php artisan make:service TokenService
```

### Convenções

- **Models**: `app/Domain/{Module}/Models/{Name}.php`
- **Services**: `app/Application/Services/{Name}Service.php`
- **Livewire**: `app/Livewire/{Module}/{Name}.php`
- **Views**: `resources/views/livewire/{module}/{name}.blade.php`
- **Migrations**: `database/migrations/YYYY_MM_DD_HHMMSS_create_{table}_table.php`

---

## Contato do Orquestrador

- Agente: orchestrator
- Skill: brainstorming, writing-plans, tdd
- Próxima ação requerida: Iniciar implementação da Fase 1

---

*Atualizado: 2026-02-28*
