# Referências Rápidas: Livewire 4
Resumo de funcionalidades e padrões baseados no arquivo `docs/livewire-4.md`.

## Funcionalidades Livewire v4:
- **Directiva @island**: Criação de regiões isoladas que atualizam independentemente para performance.
- **Volt Components**: Suporte a componentes de arquivo único (Single File Components) com sintaxe funcional ou baseada em classe.
- **Atributo #[Computed]**: Propriedades computadas que são cacheadas durante a requisição.
- **Custom Synths**: Mecanismo para hidratar/desidratar tipos de dados customizados (ex: DTOs).

## Comandos e Testes:
- `php artisan make:livewire post.create --test`: Cria componente com arquivo de teste.
- `Livewire::test('component')->call('method')->assertStatus(200)`: Padrão de teste fluente.
- `Volt::test('counter')->call('increment')->assertSee('1')`: Teste para componentes Volt.
