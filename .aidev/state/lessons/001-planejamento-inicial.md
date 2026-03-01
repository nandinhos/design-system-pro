# Lições Aprendidas - Planejamento

## Sessão: 2026-02-28

### Contexto
Início do planejamento do Laravel Design System Studio - uma plataforma SaaS para criação e gerenciamento de Design Systems empresariais.

### Decisões Técnicas

1. **Arquitetura Modular**
   - Decisão: Usar estrutura Domain/Application/Infrastructure/Livewire
   - Motivação: Separação clara de responsabilidades, manutenibilidade
   - Referência: PRD.md - Seção 2

2. **UUID para IDs**
   - Decisão: Todos os models usarão UUIDs
   - Motivação: Segurança, distribuição, evitar enumeration attacks
   - Implementação: Trait HasUuids do Laravel

3. **Stack: Laravel 12 + Livewire 4**
   - Decisão: Usar versões mais recentes conforme docs/
   - Motivação: Novos recursos, performance, suporte a longo prazo

### Padrões Estabelecidos

- **TDD**: Red -> Green -> Refactor em todas as features
- **YAGNI**: Implementar apenas o necessário
- **DRY**: Extrair quando repetir 3+ vezes
- **Commits**: Português, sem emojis, formato: tipo(escopo): descrição

### Estrutura de Diretórios

```
app/
├── Domain/           # Regras de negócio puras
├── Application/     # Serviços e ações
├── Infrastructure/  # Implementações externas
└── Livewire/        # Interface reativa
```

### Lições para Execução

1. **Começar pela fundação**: Migrations e models antes de qualquer coisa
2. **Testes primeiro**: Sem código sem teste (TDD)
3. **Atomicidade**: Commits pequenos e frequentes
4. **Documentar decisões**: Este arquivo deve ser atualizado em cada conclusão de feature

---

*Adicione novas lições conforme o desenvolvimento progride*
