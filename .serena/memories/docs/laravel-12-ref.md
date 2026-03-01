# Referências Rápidas: Laravel 12
Resumo de comandos e funcionalidades chave baseados no arquivo `docs/laravel-12.md`.

## Comandos Artisan Úteis:
- `php artisan test --parallel --processes=4`: Execução de testes em paralelo.
- `php artisan test --stop-on-failure`: Feedback rápido em testes.
- `php artisan make:model Flight -crR`: Cria Model, Controller (Resource) e Form Requests.
- `php artisan reverb:install`: Instalação do Laravel Reverb (WebSocket).
- `php artisan test --coverage`: Relatório de cobertura (requer Xdebug/PCOV).

## Funcionalidades Chave:
- **Laravel Prompts**: Novos métodos como `password()` com suporte a `placeholder` e `hint`.
- **Laravel Octane**: Suporte a reload automático com `--watch`.
- **Eloquent**: Suporte a Global Scopes anônimos via closures.
- **Process**: API para execução de processos assíncronos (`Process::start()`).
