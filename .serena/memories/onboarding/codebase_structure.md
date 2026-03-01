# Estrutura do Código
A arquitetura proposta segue os princípios de **Clean Architecture** e **Domain-Driven Design (DDD)**:

## Camadas do Blueprint:
- `app/Domain`: Regras de negócio puras (Models, Value Objects, Aggregates).
- `app/Application`: Orquestração (Services, Actions, DTOs).
- `app/Infrastructure`: Implementações técnicas (Compiladores, Exportadores, Persistência).
- `app/Livewire`: Interface administrativa e Sandbox.

## Governança IA:
- `.aidev/`: Configurações, regras, agentes e estado dos sprints da IA.
- `.agent/`: Workflows operacionais para o assistente.
- `docs/`: Documentação técnica (PRD, Blueprint, Guias de Stack).
