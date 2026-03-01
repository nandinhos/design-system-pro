#!/bin/bash
set -e

echo "==> Verificando instalação do Laravel..."
if [ ! -f "/var/www/artisan" ]; then
    echo "==> Instalando Laravel 12..."
    composer create-project laravel/laravel /tmp/laravel --prefer-dist

    echo "==> Copiando arquivos Laravel para o diretório do projeto..."
    cp -rn /tmp/laravel/. /var/www/
    rm -rf /tmp/laravel
    echo "==> Laravel instalado com sucesso!"
else
    echo "==> Laravel já está instalado, pulando..."
fi

echo "==> Configurando .env..."
if [ ! -f "/var/www/.env" ]; then
    cp /var/www/.env.example /var/www/.env
fi

echo "==> Configurando conexão PostgreSQL no .env..."
php -r "
\$env = file_get_contents('/var/www/.env');
\$replacements = [
    '/DB_CONNECTION=.*/'   => 'DB_CONNECTION=pgsql',
    '/# DB_HOST=.*/'       => 'DB_HOST=postgres',
    '/# DB_PORT=.*/'       => 'DB_PORT=5432',
    '/# DB_DATABASE=.*/'   => 'DB_DATABASE=design_system',
    '/# DB_USERNAME=.*/'   => 'DB_USERNAME=laravel',
    '/# DB_PASSWORD=.*/'   => 'DB_PASSWORD=secret',
];
foreach (\$replacements as \$pattern => \$replacement) {
    \$env = preg_replace(\$pattern, \$replacement, \$env);
}
file_put_contents('/var/www/.env', \$env);
echo 'Banco de dados configurado.' . PHP_EOL;
"

echo "==> Gerando chave da aplicação..."
php /var/www/artisan key:generate

echo "==> Instalando Livewire 4..."
cd /var/www && composer require livewire/livewire

echo "==> Ajustando permissões..."
chmod -R 777 /var/www/storage /var/www/bootstrap/cache

echo "==> Criando link de storage público..."
php /var/www/artisan storage:link

echo ""
echo "==> Setup concluído!"
echo "    Acesse: http://localhost:8080"
echo "    Execute 'make migrate' para criar as tabelas"
