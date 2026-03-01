# Guia de Economia de Tokens (Contexto Serena)
Para interações eficientes neste projeto:
1. **Use Memórias**: Sempre consulte as memórias em `.serena/memories/` antes de ler arquivos grandes.
2. **Leitura Simbólica**: Prefira `find_symbol` ou `get_symbols_overview` em vez de `read_file` completo em arquivos PHP.
3. **Regex Inteligente**: No `replace_content`, use `.*?` para omitir blocos de código irrelevantes no `needle`.
4. **Context7**: Use o MCP `context7` para documentação externa em vez de colar grandes blocos de docs no chat.
5. **Sumários de Docs**: As referências em `docs/laravel-12-ref.md` e `docs/livewire-4-ref.md` devem ser o primeiro ponto de parada para dúvidas sobre a stack.
