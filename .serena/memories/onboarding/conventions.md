# Convenções e Estilo
- **TDD (Test-Driven Development)**: Fluxo obrigatório RED -> GREEN -> REFACTOR.
- **Padronização PHP**: Segue PSR-12 e convenções do Laravel.
- **Identificadores Determinísticos**: Componentes seguem o padrão `ui.{categoria}.{componente}.{variante}.v{versão}` para facilitar o consumo por LLMs.
- **Economia de Tokens**: Seguir as lições de aprendizado para otimizar o uso de tokens em interações com o assistente.
- **Docker**: Operações de shell devem ser priorizadas dentro dos containers (via Laravel Sail ou comando correspondente).
