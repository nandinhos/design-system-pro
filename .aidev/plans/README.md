# 📁 Planejamento - design-sytem-pro

> Estrutura de planejamento e desenvolvimento organizada

---

## 🧭 Navegação Rápida

| Pasta | Conteúdo | Status |
|-------|----------|--------|
| [📋 Backlog](backlog/) | Ideias futuras | Não priorizadas |
| [🚀 Features](features/) | Planejados com sprint | Prontos para execução |
| [🏃 Current](current/) | Em execução AGORA | Sprint ativa |
| [✅ History](history/) | Concluídos | Arquivado por data |
| [📚 Archive](archive/) | Documentação | Referências |
| [🗺️ ROADMAP](ROADMAP.md) | Visão estratégica | Direção geral |

---

## 🔄 Fluxo de Trabalho

```
backlog/ (ideia) 
    ↓ priorizada
features/ (planejada)
    ↓ sprint definida
current/ (executando)
    ↓ concluída
history/YYYY-MM/ (arquivado)
```

### Regras:
1. **Backlog**: Ideias sem sprint definida
2. **Features**: Planejamento completo, sprint atribuída
3. **Current**: Máximo 1 sprint ativa por vez
4. **History**: Arquivado cronologicamente (YYYY-MM)
5. **Archive**: Documentação, templates, referências

### Protocolo de transição (OBRIGATÓRIO — usar `mv`, nunca `cp`):
- `features/ → current/`: `mv .aidev/plans/features/ARQUIVO.md .aidev/plans/current/`
- `current/ → history/YYYY-MM/`: `mv .aidev/plans/current/ARQUIVO.md .aidev/plans/history/YYYY-MM/sprint-N-descricao-completed.md`
- Arquivo deve existir **em apenas uma pasta por vez**

---

## 📊 Status Atual

- **Backlog**: 0 ideia(s)
- **Features**: 0 planejada(s)
- **Current**: 0 em execução
- **History**: 0 concluída(s)

---

## 📝 Convenções de Nomenclatura

- **Ideias**: `nome-da-ideia.md`
- **Features**: `nome-da-feature.md`
- **Sprints**: `sprint-N-descricao-completed.md`
- **Templates**: `nome-template.md`

---

*Estrutura  - Organização de Planejamento*