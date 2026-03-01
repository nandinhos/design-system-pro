# Pós-Conclusão de Tarefas
Sempre que uma tarefa for finalizada, os seguintes passos devem ser seguidos:
1. **Verificação de Testes**: Garantir que todos os testes (TDD) estão passando.
2. **Linting e Formatação**: Rodar ferramentas de análise estática se disponíveis.
3. **Snapshot**: Gerar um novo snapshot com `aidev snapshot` para sincronizar o estado.
4. **Handoff**: Se a sessão for encerrada, usar `/handoff` para preparar o contexto para a próxima.
