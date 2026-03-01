### Install Dependencies and Start Development Server

Source: https://laravel.com/docs/12.x/starter-kits

Install frontend dependencies via NPM, build assets, and start the Laravel development server. After completion, the application is accessible at http://localhost:8000.

```shell
cd my-app
npm install && npm run build
composer run dev
```

--------------------------------

### Start Laravel Development Server and Build Frontend Assets

Source: https://laravel.com/docs/12.x/index

These commands navigate into the new application directory, install Node.js dependencies, build frontend assets, and then start Laravel's local development server, queue worker, and Vite development server. This makes the application accessible in your web browser at http://localhost:8000.

```bash
cd example-app
npm install && npm run build
composer run dev
```

--------------------------------

### Generate Model with Resource Controller and Form Requests

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with a resource controller and form request classes using the --controller --resource --requests options. This generates a complete RESTful setup with validation.

```shell
php artisan make:model Flight --controller --resource --requests
php artisan make:model Flight -crR
```

--------------------------------

### Run Tests with Artisan Options

Source: https://laravel.com/docs/12.x/testing

Execute tests with additional options passed to the Artisan test command. This example runs only Feature tests and stops execution on the first failure for faster feedback.

```shell
php artisan test --testsuite=Feature --stop-on-failure
```

--------------------------------

### Generate Model with Multiple Related Classes

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with migration, factory, seeder, and controller classes using combined options. This generates a complete model setup with all common related classes.

```shell
php artisan make:model Flight -mfsc
```

--------------------------------

### Generate Model with Policy

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with an authorization policy class using the --policy option. Policies define authorization logic for model actions.

```shell
php artisan make:model Flight --policy
```

--------------------------------

### Install and Run Tests in Parallel with Laravel

Source: https://laravel.com/docs/12.x/testing

Install the brianium/paratest Composer package and execute tests simultaneously across multiple CPU cores using the --parallel flag. By default, Laravel creates one process per available CPU core, but this can be customized with the --processes option.

```shell
composer require brianium/paratest --dev

php artisan test --parallel
```

```shell
php artisan test --parallel --processes=4
```

--------------------------------

### Start Laravel Octane with File Change Watching

Source: https://laravel.com/docs/12.x/octane

Artisan command to start the Octane server with automatic restart capability on file changes. Requires Node.js and the Chokidar file-watching library to be installed in the project.

```shell
php artisan octane:start --watch
```

--------------------------------

### Example Database Connection URL Format

Source: https://laravel.com/docs/12.x/database

This snippet shows a typical database connection URL, which encapsulates all connection parameters like driver, username, password, host, and database into a single string. Laravel can parse these URLs for database configuration.

```html
mysql://root:password@127.0.0.1/forge?charset=UTF-8
```

--------------------------------

### Generate Model with Controller

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with a corresponding controller class using the --controller or -c option. This generates a controller for handling HTTP requests related to the model.

```shell
php artisan make:model Flight --controller
php artisan make:model Flight -c
```

--------------------------------

### Configure `password` prompt with placeholder and hint

Source: https://laravel.com/docs/12.x/prompts

This example demonstrates how to add a `placeholder` and an informational `hint` to a `password` prompt. These options guide the user on the expected input format and requirements without revealing the actual password.

```php
$password = password(
    label: 'What is your password?',
    placeholder: 'password',
    hint: 'Minimum 8 characters.'
);
```

--------------------------------

### Generate Model with Database Migration

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model along with a corresponding database migration file using the --migration or -m option. This is useful for setting up both the model and its database table structure simultaneously.

```shell
php artisan make:model Flight --migration
```

--------------------------------

### Initialize Laravel Dusk with Artisan Command

Source: https://laravel.com/docs/12.x/dusk

Execute the dusk:install Artisan command to set up Dusk in your Laravel project. This creates the tests/Browser directory, generates an example test file, and installs the ChromeDriver binary for your operating system.

```shell
php artisan dusk:install
```

--------------------------------

### Example SQL query generated by an Eloquent Global Scope

Source: https://laravel.com/docs/12.x/eloquent

This SQL snippet shows the resulting database query after a global scope has been applied to an Eloquent model. It demonstrates how the `where` clause defined in the `AncientScope` is translated into the underlying SQL, filtering records based on the `created_at` column.

```sql
select * from `users` where `created_at` < 0021-02-18 00:00:00
```

--------------------------------

### Install PHP, Composer, and Laravel Installer on various operating systems

Source: https://laravel.com/docs/12.x/installation

These commands provide a convenient way to install PHP 8.4, Composer, and the Laravel installer on macOS, Windows, or Linux. They fetch and execute an installation script tailored for each operating system, setting up the necessary environment for Laravel development. A terminal restart is recommended after execution.

```shell
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

```powershell
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

```shell
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

--------------------------------

### Write Basic Test with PHPUnit Framework

Source: https://laravel.com/docs/12.x/testing

Define a test case using PHPUnit's class-based approach. This example demonstrates a basic assertion using PHPUnit's assertTrue method within a test class extending TestCase.

```php
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_basic_test(): void
    {
        $this->assertTrue(true);
    }
}
```

--------------------------------

### Create a New Laravel Application

Source: https://laravel.com/docs/12.x/index

This command uses the Laravel installer to create a new Laravel project named 'example-app'. It will prompt you to select a testing framework, database, and starter kit. This is the first step to setting up a new Laravel project.

```bash
laravel new example-app
```

--------------------------------

### Write Basic Test with Pest Framework

Source: https://laravel.com/docs/12.x/testing

Define a simple test case using Pest's expressive syntax. This example demonstrates a basic assertion that expects a boolean value to be true, showcasing Pest's fluent API.

```php
<?php

test('basic', function () {
    expect(true)->toBeTrue();
});
```

--------------------------------

### Create New Laravel Application with Starter Kit

Source: https://laravel.com/docs/12.x/starter-kits

Create a new Laravel application using the Laravel installer CLI. The installer will prompt you to select your preferred starter kit (React, Vue, or Livewire) during the creation process.

```shell
laravel new my-app
```

--------------------------------

### Configure `number` prompt with placeholder, default, and hint

Source: https://laravel.com/docs/12.x/prompts

This example shows how to enhance the `number` prompt by providing a `placeholder` value, a `default` initial value, and an informative `hint`. These options improve the user experience by guiding input and providing context.

```php
$name = number(
    label: 'How many copies would you like?',
    placeholder: '5',
    default: 1,
    hint: 'This will be determine how many copies to create.'
);
```

--------------------------------

### Insert New Model Records with save() Method

Source: https://laravel.com/docs/12.x/eloquent

Instantiate a new model, set attributes from request data, and call save() to persist to database. The created_at and updated_at timestamps are automatically set. Requires proper controller setup with model imports and request validation.

```php
<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Store a new flight in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $flight = new Flight;

        $flight->name = $request->name;

        $flight->save();

        return redirect('/flights');
    }
}
```

--------------------------------

### Run Laravel Boost Interactive Installer

Source: https://laravel.com/docs/12.x/index

After installing Laravel Boost as a development dependency, this command runs its interactive installer. The installer automatically detects your IDE and AI agents, allowing for customized feature opt-in. It respects existing project conventions and avoids enforcing opinionated style rules by default.

```bash
php artisan boost:install
```

--------------------------------

### Configure Laravel Reverb After Manual Installation

Source: https://laravel.com/docs/12.x/broadcasting

After manually installing the `laravel/reverb` Composer package, this Artisan command publishes Reverb's configuration, adds necessary environment variables, and enables event broadcasting in the application. It completes the manual setup process for Reverb.

```shell
php artisan reverb:install
```

--------------------------------

### Define an anonymous Eloquent Global Scope using a closure

Source: https://laravel.com/docs/12.x/eloquent

This PHP example demonstrates how to define a global scope directly within the model's `booted` method using a closure. This approach is suitable for simpler scopes that don't require a dedicated class, providing a concise way to apply query constraints with a custom name.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('ancient', function (Builder $builder) {
            $builder->where('created_at', '<', now()->minus(years: 2000));
        });
    }
}
```

--------------------------------

### Install shadcn UI Component with npx

Source: https://laravel.com/docs/12.x/starter-kits

Installs shadcn/ui or shadcn-vue components into the project using npx command. This command downloads and configures the specified component (e.g., Switch) into the appropriate UI components directory for use across pages.

```shell
npx shadcn@latest add switch
```

```shell
npx shadcn-vue@latest add switch
```

--------------------------------

### Generate Test Coverage Report in Laravel

Source: https://laravel.com/docs/12.x/testing

Use the --coverage option to generate test coverage reports for your application. This feature requires Xdebug or PCOV to be installed and enabled, and provides insights into which application code is covered by tests.

```shell
php artisan test --coverage
```

--------------------------------

### Install and Configure Laravel Valet Services

Source: https://laravel.com/docs/12.x/valet

This command executes the Valet installation process. It configures Valet and DnsMasq, and sets up the necessary daemons to launch automatically when your system boots, enabling local site serving and domain resolution.

```shell
valet install
```

--------------------------------

### Swap Subscription Price and Immediately End Trial Period

Source: https://laravel.com/docs/12.x/billing

This PHP example shows how to swap a subscription to a new price while simultaneously ending any active trial period. The `skipTrial` method is chained before the `swap` method to achieve this behavior.

```php
$user->subscription('default')
    ->skipTrial()
    ->swap('price_yearly');
```

--------------------------------

### Create New Laravel Application with Community Starter Kit

Source: https://laravel.com/docs/12.x/starter-kits

This shell command demonstrates how to initialize a new Laravel application using a community-maintained starter kit from Packagist. By appending `--using=example/starter-kit` to the `laravel new` command, developers can easily integrate custom starter kits into their projects.

```shell
laravel new my-app --using=example/starter-kit
```

--------------------------------

### Configure Parallel Testing Hooks in Laravel ServiceProvider

Source: https://laravel.com/docs/12.x/testing

Use the ParallelTesting facade to register setUp and tearDown callbacks for processes and test cases. These hooks receive the process token and test case instance, allowing resource preparation and cleanup across multiple parallel test processes.

```php
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\TestCase;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ParallelTesting::setUpProcess(function (int $token) {
            // ...
        });

        ParallelTesting::setUpTestCase(function (int $token, TestCase $testCase) {
            // ...
        });

        // Executed when a test database is created...
        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            Artisan::call('db:seed');
        });

        ParallelTesting::tearDownTestCase(function (int $token, TestCase $testCase) {
            // ...
        });

        ParallelTesting::tearDownProcess(function (int $token) {
            // ...
        });
    }
}

```

--------------------------------

### Install PHP, Composer, and Laravel Installer on Windows

Source: https://laravel.com/docs/12.x/index

This PowerShell command installs PHP 8.4, Composer, and the Laravel installer on a Windows system. It bypasses execution policy and downloads an installation script. Run this command as an administrator in PowerShell to set up the necessary development environment.

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

--------------------------------

### Run Laravel Boost Installation Artisan Command

Source: https://laravel.com/docs/12.x/boost

After installing the Composer package, this Artisan command sets up the MCP server and generates initial agent guideline and skill files. It prepares your project for AI-assisted development by configuring Boost's core components.

```shell
php artisan boost:install
```

--------------------------------

### Explore Livewire Starter Kit Frontend Directory Structure

Source: https://laravel.com/docs/12.x/starter-kits

This snippet provides an overview of the frontend directory structure for the Livewire starter kit, built with Livewire 4, Tailwind, and Flux UI. It highlights key directories like 'components', 'flux', 'layouts', 'pages', and 'partials' where customization can be performed.

```text
resources/views
├── components            # Reusable components
├── flux                  # Customized Flux components
├── layouts               # Application layouts
├── pages                 # Livewire pages
├── partials              # Reusable Blade partials
├── dashboard.blade.php   # Authenticated user dashboard
├── welcome.blade.php     # Guest user welcome page
```

--------------------------------

### Configure Nginx for Laravel Application Deployment

Source: https://laravel.com/docs/12.x/deployment

This Nginx configuration serves as a starting point for deploying a Laravel application. It directs all requests to the `public/index.php` file, ensuring proper application bootstrapping and preventing direct access to sensitive files. Customization may be required based on your specific server setup and domain.

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name example.com;
    root /srv/example.com/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ ^/index\.php(/|$) {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

--------------------------------

### Asynchronous Process Route with Laravel Process

Source: https://laravel.com/docs/12.x/processes

Example route that starts an asynchronous bash process and logs its output while running. Demonstrates the basic pattern of using Process::start() to invoke asynchronous processes and checking the running() method in a loop.

```php
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/import', function () {
    $process = Process::start('bash import.sh');

    while ($process->running()) {
        Log::info($process->latestOutput());
        Log::info($process->latestErrorOutput());
    }

    return 'Done';
});
```

--------------------------------

### Configure Laravel Read/Write Database Connections (PHP)

Source: https://laravel.com/docs/12.x/database

This PHP configuration snippet demonstrates how to set up separate database connections for read and write operations in Laravel. It specifies different hosts for `read` and `write` arrays, allowing for load balancing or master-replica setups, while sharing other connection parameters from the main configuration. The `sticky` option ensures immediate data consistency within a request cycle.

```php
'mysql' => [
    'driver' => 'mysql',
    
    'read' => [
        'host' => [
            '192.168.1.1',
            '196.168.1.2',
        ],
    ],
    'write' => [
        'host' => [
            '192.168.1.3',
        ],
    ],
    'sticky' => true,
    
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'laravel'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => env('DB_CHARSET', 'utf8mb4'),
    'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
    'options' => extension_loaded('pdo_mysql') ? array_filter([
        (PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
    ]) : [],
],
```

--------------------------------

### Publish Fortify Resources with Artisan

Source: https://laravel.com/docs/12.x/fortify

Publish Fortify's resources including actions, service provider, configuration file, and database migrations to your application using the fortify:install Artisan command.

```shell
php artisan fortify:install
```

--------------------------------

### Initiate a subscription with an upfront payment method and trial (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

Sets up a new subscription for a user, where a trial period is defined in the Paddle dashboard for the chosen price. The checkout process is initiated, and billing will commence after the trial expires if the subscription is not canceled.

```php
use Illuminate\Http\Request;

Route::get('/user/subscribe', function (Request $request) {
    $checkout = $request->user()
        ->subscribe('pri_monthly')
        ->returnTo(route('home'));

    return view('billing', ['checkout' => $checkout]);
});
```

--------------------------------

### Generate Model with Seeder

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with a seeder class using the --seed or -s option. Seeders are used to populate database tables with initial data.

```shell
php artisan make:model Flight --seed
php artisan make:model Flight -s
```

--------------------------------

### Artisan Commands - Passport Client Setup

Source: https://laravel.com/docs/12.x/passport

Command-line interface for creating and configuring Passport clients for different authentication grant types including client credentials and personal access tokens.

```APIDOC
## Artisan Commands

### Create Client Credentials Grant Client
```shell
php artisan passport:client --client
```

**Description**: Creates a new client credentials grant client for machine-to-machine authentication.

**Output**: Returns client ID and client secret for use in /oauth/token requests.

---

### Create Personal Access Client
```shell
php artisan passport:client --personal
```

**Description**: Creates a personal access client for issuing personal access tokens to users.

**Prerequisites**: Run `php artisan passport:install` first if not already executed.

**Note**: Only needs to be run once per application.

---

### Create Personal Access Client with Custom Provider
```shell
php artisan passport:client --personal --provider=provider_name
```

**Description**: Creates a personal access client for a specific authentication user provider.

**Parameters**:
- **--provider** (string) - Optional - Name of the user provider defined in config/auth.php

**Use Case**: When your application uses multiple authentication providers and you need to restrict personal access tokens to specific providers.

---

### Install Passport
```shell
php artisan passport:install
```

**Description**: Installs Passport by creating encryption keys and default clients.

**Note**: Run this command once during initial setup before creating other clients.
```

--------------------------------

### Creating and Running Database Queue Table Migration (Shell)

Source: https://laravel.com/docs/12.x/queues

These shell commands are used to prepare the database for the 'database' queue driver. The first command generates a migration file to create the necessary jobs table, and the second command executes all pending migrations, including the one for the jobs table.

```shell
php artisan make:queue-table

php artisan migrate
```

--------------------------------

### Generate Model with Factory

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with an associated factory class using the --factory or -f option. Factories are useful for generating test data and seeding databases.

```shell
php artisan make:model Flight --factory
php artisan make:model Flight -f
```

--------------------------------

### Launch Homestead Virtual Machine with Vagrant

Source: https://laravel.com/docs/12.x/homestead

This command, executed from your Homestead directory, boots the virtual machine and automatically configures shared folders and Nginx sites based on your `Homestead.yaml`.

```shell
vagrant up
```

--------------------------------

### GET /orders - Protected Route with Client Credentials Middleware

Source: https://laravel.com/docs/12.x/passport

Example of a protected route that requires valid client credentials authentication. The route uses the EnsureClientIsResourceOwner middleware to verify the access token and client authorization.

```APIDOC
## GET /orders

### Description
Retrieve orders for an authenticated client. This route is protected by the EnsureClientIsResourceOwner middleware, which validates that the access token is valid and the client is the resource owner.

### Method
GET

### Endpoint
/orders

### Authentication
- **Authorization Header** (string) - Required - Bearer token obtained from /oauth/token endpoint
  - Format: `Authorization: Bearer {access_token}`

### Middleware Protection
- **EnsureClientIsResourceOwner** - Validates client credentials and resource ownership
- **Optional Scopes** - Can require specific scopes: "servers:read", "servers:create"

### Route Implementation
```php
use Laravel\Passport\Http\Middleware\EnsureClientIsResourceOwner;

Route::get('/orders', function (Request $request) {
    // Access token is valid and the client is resource owner...
})->middleware(EnsureClientIsResourceOwner::class);

// With scope restrictions
Route::get('/orders', function (Request $request) {
    // Access token is valid, the client is resource owner, and has both scopes...
})->middleware(EnsureClientIsResourceOwner::using('servers:read', 'servers:create'));
```

### Response
#### Success Response (200)
- **orders** (array) - List of orders for the authenticated client

#### Error Response (401)
- **message** (string) - "Unauthenticated" - Invalid or missing access token

#### Error Response (403)
- **message** (string) - "Forbidden" - Client lacks required scopes or is not resource owner
```

--------------------------------

### Get Laravel Database Table Overview with Artisan `db:table` command

Source: https://laravel.com/docs/12.x/database

The `db:table` Artisan command provides a detailed overview of an individual table within your database. This includes information about its columns, their types, attributes, keys, and indexes, offering a comprehensive look at the table's structure.

```shell
php artisan db:table users
```

--------------------------------

### Define a setup block for pre-task PHP execution (PHP)

Source: https://laravel.com/docs/12.x/envoy

Demonstrates using the `@setup` directive to execute arbitrary PHP code before any Envoy tasks run. This is useful for initializing variables or performing setup logic.

```php
@setup
    $now = new DateTime;
@endsetup
```

--------------------------------

### Install Packages in Homestead with Configuration Preservation

Source: https://laravel.com/docs/12.x/homestead

Shell command for installing packages in Homestead while preserving existing configuration files. Uses dpkg options to prevent interactive prompts and maintain configurations previously set by Homestead.

```shell
sudo apt-get -y \
    -o Dpkg::Options::="--force-confdef" \
    -o Dpkg::Options::="--force-confold" \
    install package-name
```

--------------------------------

### Using Eloquent Subquery `select` for Related Data in PHP

Source: https://laravel.com/docs/12.x/eloquent

Eloquent's `addSelect` method supports subqueries, allowing you to pull specific information from related tables directly into your main query's results. This example retrieves the name of the most recently arrived flight for each destination in a single query.

```php
use App\Models\Destination;
use App\Models\Flight;

return Destination::addSelect(['last_flight' => Flight::select('name')
    ->whereColumn('destination_id', 'destinations.id')
    ->orderByDesc('arrived_at')
    ->limit(1)
])->get();
```

--------------------------------

### Configure SQLite Database Connection

Source: https://laravel.com/docs/12.x/database

Set up SQLite database configuration using environment variables. Specifies the database connection type and absolute path to the SQLite database file. Includes optional foreign key constraint configuration.

```ini
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

--------------------------------

### Compare Eloquent Models Using is and isNot Methods

Source: https://laravel.com/docs/12.x/eloquent

Shows how to use the is and isNot methods to compare two Eloquent model instances by verifying they have the same primary key, table, and database connection. These methods are also available on relationships like belongsTo, hasOne, morphTo, and morphOne.

```php
if ($post->is($anotherPost)) {
    // ...
}

if ($post->isNot($anotherPost)) {
    // ...
}
```

```php
if ($post->author()->is($user)) {
    // ...
}
```

--------------------------------

### Create New Laravel Application with Herd on Windows

Source: https://laravel.com/docs/12.x/index

This snippet demonstrates how to quickly create a new Laravel application on Windows using the Laravel CLI, which is bundled with Herd. It guides the user through navigating to the Herd directory, initializing a new Laravel project, and opening it via the `herd open` command. This process leverages Herd's automatic `.test` domain serving for parked directories.

```powershell
cd ~\Herd
laravel new my-app
cd my-app
herd open
```

--------------------------------

### Install PHP, Composer, and Laravel Installer on Linux

Source: https://laravel.com/docs/12.x/index

This command installs PHP 8.4, Composer, and the Laravel installer on a Linux system. It uses a curl script to automate the installation process. Run this command in your terminal to set up the necessary development environment.

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

--------------------------------

### Cache Laravel Configuration in Tests using WithCachedConfig Trait

Source: https://laravel.com/docs/12.x/testing

The `WithCachedConfig` trait allows you to cache your application's configuration during test runs, significantly improving performance by preventing Laravel from reloading configuration files for each individual test method. This trait can be applied in both Pest and PHPUnit test setups.

```php
<?php

use Illuminate\Foundation\Testing\WithCachedConfig;

pest()->use(WithCachedConfig::class);

// ...
```

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithCachedConfig;
use Tests\TestCase;

class ConfigTest extends TestCase
{
    use WithCachedConfig;

    // ...
}
```

--------------------------------

### Generate Model with All Related Classes

Source: https://laravel.com/docs/12.x/eloquent

Create an Eloquent model with all related classes including migration, factory, seeder, policy, controller, and form requests using the --all or -a option. This is a shortcut for comprehensive model generation.

```shell
php artisan make:model Flight --all
php artisan make:model Flight -a
```

--------------------------------

### Initialize Homestead Configuration File

Source: https://laravel.com/docs/12.x/homestead

Execute the appropriate initialization script ('bash init.sh' for macOS/Linux or 'init.bat' for Windows) from within the Homestead directory. This action creates the essential 'Homestead.yaml' configuration file, which is where all your environment settings will be defined.

```shell
# macOS / Linux...
bash init.sh

# Windows...
init.bat
```

--------------------------------

### Generate a new Eloquent Global Scope using Artisan

Source: https://laravel.com/docs/12.x/eloquent

This command-line instruction demonstrates how to create a new class-based global scope file within your Laravel application. The generated file will be placed in the `app/Models/Scopes` directory, providing a starting point for defining query constraints.

```shell
php artisan make:scope AncientScope
```

--------------------------------

### Create Setup Intent in Laravel Controller

Source: https://laravel.com/docs/12.x/billing

Creates a new Stripe Setup Intent using Cashier's Billable trait method. This intent is passed to the view to securely gather customer payment method details. The Setup Intent indicates to Stripe the intention to charge a customer's payment method for future subscription use.

```php
return view('update-payment-method', [
    'intent' => $user->createSetupIntent()
]);
```

--------------------------------

### Create and Open New Laravel Application using Herd CLI

Source: https://laravel.com/docs/12.x/index

This sequence of commands demonstrates how to quickly set up a new Laravel application within a Herd-managed directory. It navigates to the Herd directory, creates a new project using the Laravel CLI, and then opens the application in your browser using the `herd open` command.

```bash
cd ~/Herd
laravel new my-app
cd my-app
herd open
```

--------------------------------

### Install PHP, Composer, and Laravel Installer on macOS

Source: https://laravel.com/docs/12.x/index

This command installs PHP 8.4, Composer, and the Laravel installer on a macOS system. It uses a curl script to automate the installation process. Run this command in your terminal to set up the necessary development environment.

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

--------------------------------

### Retrieve Price Previews with Discount using Laravel Cashier Paddle (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP example illustrates how to fetch price previews after applying a specific discount. By providing a `discount_id` in the options array, the `previewPrices` method calculates and returns the discounted prices.

```php
use Laravel\Paddle\Cashier;

$prices = Cashier::previewPrices(['pri_123', 'pri_456'], [
    'discount_id' => 'dsc_123'
]);
```

--------------------------------

### Update Laravel Installer CLI Tool

Source: https://laravel.com/docs/12.x/upgrade

This snippet provides commands to update the Laravel installer CLI tool to ensure compatibility with Laravel 12.x and its new starter kits. It covers updates via Composer global require, php.new installation scripts for macOS, Windows PowerShell, and Linux, and mentions updating Laravel Herd.

```shell
composer global update laravel/installer
```

```shell
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

```shell
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

--------------------------------

### Switch Livewire Application Layout

Source: https://laravel.com/docs/12.x/starter-kits

This example shows how to change the primary application layout in the Livewire starter kit from the default sidebar to a header layout. This involves modifying 'resources/views/layouts/app.blade.php' to use the header layout and adding a 'container' attribute to the main Flux component.

```blade
<x-layouts::app.header>
    <flux:main container>
        {{ $slot }}
    </flux:main>
</x-layouts::app.header>
```

--------------------------------

### Generate Eloquent Model with Artisan

Source: https://laravel.com/docs/12.x/eloquent

Create a new Eloquent model class using the make:model Artisan command. This generates a basic model file in the app/Models directory that extends the Illuminate\Database\Eloquent\Model class.

```shell
php artisan make:model Flight
```

--------------------------------

### Run Tests with PHPUnit Command

Source: https://laravel.com/docs/12.x/testing

Execute all tests in your Laravel application using the PHPUnit test runner. This command processes tests configured in the phpunit.xml file.

```shell
./vendor/bin/phpunit
```

--------------------------------

### Iterate over Eloquent Collection with foreach

Source: https://laravel.com/docs/12.x/eloquent

Loop through an Eloquent collection as if it were a standard PHP array. Collections implement PHP's iterable interfaces, allowing direct iteration over model instances.

```php
foreach ($flights as $flight) {
    echo $flight->name;
}
```

--------------------------------

### Install Laravel Installer Globally via Composer

Source: https://laravel.com/docs/12.x/index

If PHP and Composer are already installed, this command installs the Laravel installer globally using Composer. This allows you to use the 'laravel' command-line tool to create new Laravel applications. Ensure Composer's global bin directory is in your system's PATH.

```bash
composer global require laravel/installer
```

--------------------------------

### Configure Laravel Boost in GitHub Copilot (VS Code)

Source: https://laravel.com/docs/12.x/boost

These instructions detail how to manually start the `laravel-boost` MCP server within GitHub Copilot in VS Code. This ensures Copilot can access Boost's tools and guidelines for improved code generation.

```text
1. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)
2. Press `enter` on "MCP: List Servers"
3. Arrow to `laravel-boost` and press `enter`
4. Choose "Start server"
```

--------------------------------

### Get a slice of a Laravel Collection from a starting index using `slice()`

Source: https://laravel.com/docs/12.x/collections

The `slice` method extracts a portion of the collection, starting from a specified index. It returns a new collection containing the sliced elements, preserving original keys by default.

```php
$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

$slice = $collection->slice(4);

$slice->all();

// [5, 6, 7, 8, 9, 10]
```

--------------------------------

### Specify Database Connection for Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Set the $connection property on a model to specify a non-default database connection for all interactions with that model. Enables multi-database support for different models.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
}
```

--------------------------------

### Test Real-Time Facade Usage with Mocking (PHP)

Source: https://laravel.com/docs/12.x/facades

These PHP examples demonstrate how to test a method that uses a real-time facade, specifically mocking the `Publisher` facade. Both Pest and PHPUnit frameworks are shown, utilizing Laravel's `shouldReceive` helper to assert method calls on the real-time facade.

```php
<?php

use App\Models\Podcast;
use Facades\App\Contracts\Publisher;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('podcast can be published', function () {
    $podcast = Podcast::factory()->create();

    Publisher::shouldReceive('publish')->once()->with($podcast);

    $podcast->publish();
});
```

```php
<?php

namespace Tests\Feature;

use App\Models\Podcast;
use Facades\App\Contracts\Publisher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PodcastTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test example.
     */
    public function test_podcast_can_be_published(): void
    {
        $podcast = Podcast::factory()->create();

        Publisher::shouldReceive('publish')->once()->with($podcast);

        $podcast->publish();
    }
}
```

--------------------------------

### Implement Custom Cast with CastsAttributes Interface

Source: https://laravel.com/docs/12.x/eloquent-mutators

Create a custom cast class implementing CastsAttributes interface with get and set methods. The get method transforms raw database values into cast values, while the set method prepares values for storage. This example re-implements the built-in json cast type.

```php
<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class AsJson implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    public function get(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): array {
        return json_decode($value, true);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): string {
        return json_encode($value);
    }
}
```

--------------------------------

### Run Tests with Pest Command

Source: https://laravel.com/docs/12.x/testing

Execute all tests in your Laravel application using the Pest test runner. This command runs tests defined in both Feature and Unit directories.

```shell
./vendor/bin/pest
```

--------------------------------

### Inspect Laravel Database Overview with Artisan `db:show` command

Source: https://laravel.com/docs/12.x/database

The `db:show` command provides a high-level overview of your database, including its size, type, number of open connections, and a summary of its tables. You can specify a database connection and include table row counts and view details, though these can be slow on large databases.

```shell
php artisan db:show
```

```shell
php artisan db:show --database=pgsql
```

```shell
php artisan db:show --counts --views
```

--------------------------------

### Configure Fortify Features in PHP

Source: https://laravel.com/docs/12.x/fortify

Define which backend authentication features Fortify should expose by configuring the features array in the fortify configuration file. This example enables registration, password reset, and email verification features.

```php
'features' => [
    Features::registration(),
    Features::resetPasswords(),
    Features::emailVerification(),
],
```

--------------------------------

### Activate Subscription Immediately (Laravel Cashier)

Source: https://laravel.com/docs/12.x/cashier-paddle

Shows how to immediately end a subscription's trial period and activate the subscription. This is done by calling the 'activate' method on the subscription instance.

```php
$user->subscription()->activate();
```

--------------------------------

### Install Pusher Channels Broadcasting Driver via Artisan

Source: https://laravel.com/docs/12.x/broadcasting

This Artisan command quickly sets up Laravel's broadcasting features using Pusher Channels. It prompts for Pusher credentials, installs the Pusher PHP and JavaScript SDKs, and updates the application's `.env` file with the required variables.

```shell
php artisan install:broadcasting --pusher
```

--------------------------------

### Generate Pivot Model

Source: https://laravel.com/docs/12.x/eloquent

Create a pivot model for many-to-many relationships using the --pivot or -p option. Pivot models represent the intermediate table in many-to-many relationships.

```shell
php artisan make:model Member --pivot
php artisan make:model Member -p
```

--------------------------------

### Inspect Model Attributes and Relations

Source: https://laravel.com/docs/12.x/eloquent

Display all available attributes and relationships of an Eloquent model using the model:show Artisan command. This provides a convenient overview without manually inspecting the model code.

```shell
php artisan model:show Flight
```

--------------------------------

### Execute General Database Statement in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates using the statement method for database operations that do not return any value, such as DDL statements. Useful for operations like creating or dropping tables.

```php
DB::statement('drop table users');
```

--------------------------------

### Search with Placeholder and Hint Text

Source: https://laravel.com/docs/12.x/prompts

Adds user-friendly UI elements to the search prompt including placeholder text showing example input and a hint providing additional context about the action.

```php
$id = search(
    label: 'Search for the user that should receive the mail',
    placeholder: 'E.g. Taylor Otwell',
    options: fn (string $value) => strlen($value) > 0
        ? User::whereLike('name', "%{$value}%")->pluck('name', 'id')->all()
        : [],
    hint: 'The user will receive an email immediately.'
);
```

--------------------------------

### Apply Basic RateLimited Middleware to a Laravel Job in PHP

Source: https://laravel.com/docs/12.x/queues

This PHP example demonstrates how to attach the `RateLimited` middleware to a job. It uses the 'backups' rate limiter defined previously. If the job exceeds the limit, it will be released back to the queue with an appropriate delay.

```php
use IlluminateQueueMiddlewareRateLimited;

/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [new RateLimited('backups')];
}
```

--------------------------------

### Implement Subscription Status Middleware (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP middleware example, `EnsureUserIsSubscribed`, restricts access to routes based on a user's subscription status. If a user is not subscribed, they are redirected to a billing page, ensuring only paying customers can access certain application sections.

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && ! $request->user()->subscribed()) {
            // This user is not a paying customer...
            return redirect('/billing');
        }

        return $next($request);
    }
}
```

--------------------------------

### Start Supervisor and Laravel Queue Workers

Source: https://laravel.com/docs/12.x/queues

Initialize Supervisor configuration and start Laravel queue worker processes. These shell commands reload the Supervisor configuration, apply updates, and start all instances of the laravel-worker process group.

```shell
sudo supervisorctl reread

sudo supervisorctl update

sudo supervisorctl start "laravel-worker:*"
```

--------------------------------

### Start Laravel Reverb Server with Default Host and Port

Source: https://laravel.com/docs/12.x/reverb

This command initiates the Laravel Reverb WebSocket server. By default, it binds to '0.0.0.0:8080', making it accessible across all network interfaces. This is the simplest way to get the Reverb server running for development or basic use.

```shell
php artisan reverb:start
```

--------------------------------

### Define Basic Eloquent Model Class

Source: https://laravel.com/docs/12.x/eloquent

Create a basic Eloquent model class that extends Illuminate\Database\Eloquent\Model. Models are placed in the app/Models directory and serve as the primary interface for database table interactions.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    // ...
}
```

--------------------------------

### Supervisor Configuration for Production Octane Deployment

Source: https://laravel.com/docs/12.x/octane

This INI configuration provides a sample Supervisor setup to ensure the Octane server remains running reliably in a production environment. It defines the command to start Octane, enables auto-start and auto-restart, specifies a user, and configures logging for the process's standard output and error streams.

```ini
[program:octane]
process_name=%(program_name)s_%(process_num)02d
command=php /home/forge/example.com/artisan octane:start --server=frankenphp --host=127.0.0.1 --port=8000
autostart=true
autorestart=true
user=forge
redirect_stderr=true
stdout_logfile=/home/forge/example.com/storage/logs/octane.log
stopwaitsecs=3600
```

--------------------------------

### Define Third-Party Package Skills in Markdown for Laravel Boost

Source: https://laravel.com/docs/12.x/boost

This snippet illustrates the structure for defining third-party package skills within Laravel Boost. It details the required `SKILL.md` file format, including YAML frontmatter for `name` and `description`, and provides an example of how to outline features and their usage. Users can install these skills via `php artisan boost:install`.

```markdown
---
name: package-name-development
description: Build and work with PackageName features, including components and workflows.
---

# Package Name Development

## When to use this skill
Use this skill when working with PackageName features...

## Features

- Feature 1: [clear & short description].
- Feature 2: [clear & short description]. Example usage:

$result = PackageName::featureTwo($param1, $param2);
```

--------------------------------

### Create Third-Party Package AI Guidelines in PHP

Source: https://laravel.com/docs/12.x/boost

Add AI guidelines to a third-party package by creating a resources/boost/guidelines/core.blade.php file. This file should provide a brief package overview, outline required file structure and conventions, and explain main features with example commands or code snippets. The guidelines are automatically loaded when users run php artisan boost:install.

```php
## Package Name

This package provides [brief description of functionality].

### Features

- Feature 1: [clear & short description].
- Feature 2: [clear & short description]. Example usage:

@verbatim
<code-snippet name="How to use Feature 2" lang="php">
$result = PackageName::featureTwo($param1, $param2);
</code-snippet>
@endverbatim
```

--------------------------------

### Get Configuration Values with config() Helper

Source: https://laravel.com/docs/12.x/helpers

The config() function retrieves configuration variable values using dot notation syntax. It supports optional default values and allows setting configuration values at runtime for the current request only.

```php
$value = config('app.timezone');

$value = config('app.timezone', $default);

config(['app.debug' => true]);
```

--------------------------------

### Retrieve Only Soft Deleted Eloquent Models in PHP

Source: https://laravel.com/docs/12.x/eloquent

To retrieve only the soft-deleted models, use the `onlyTrashed()` method on your Eloquent query builder. This will filter out all active models and return only those that have been soft deleted.

```php
$flights = Flight::onlyTrashed()
    ->where('airline_id', 1)
    ->get();
```

--------------------------------

### Provide Dynamic Instructions for AI Audio Generation in Laravel

Source: https://laravel.com/docs/12.x/ai-sdk

Shows how to dynamically coach the AI model on the desired sound of the generated audio using the `instructions()` method. This allows for more nuanced control over the audio's tone, style, or delivery, such as 'Said like a pirate'.

```php
$audio = Audio::of('I love coding with Laravel.')
    ->female()
    ->instructions('Said like a pirate')
    ->generate();
```

--------------------------------

### Force Delete Soft Deleted Models in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Use the forceDestroy method to permanently delete soft-deleted models from the database. This bypasses the soft delete mechanism and removes the record entirely.

```php
Flight::forceDestroy(1);
```

--------------------------------

### Create Stripe Payment Intent with Specific Methods (PHP)

Source: https://laravel.com/docs/12.x/billing

This example shows how to create a payment intent while explicitly specifying an array of allowed payment methods using the `payWith` method. The payment amount should be provided in the lowest currency denominator. This allows for fine-grained control over the payment options presented to the user.

```php
use Illuminate\Http\Request;

Route::post('/pay', function (Request $request) {
    $payment = $request->user()->payWith(
        $request->get('amount'), ['card', 'bancontact']
    );

    return $payment->client_secret;
});
```

--------------------------------

### Create Model Records with create() Method

Source: https://laravel.com/docs/12.x/eloquent

Use the create() method to insert a new model in a single statement, returning the persisted model instance. Requires fillable or guarded properties on the model to protect against mass assignment vulnerabilities.

```php
use App\Models\Flight;

$flight = Flight::create([
    'name' => 'London to Paris',
]);
```

--------------------------------

### Get Changed and Previous Eloquent Model Attributes (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet showcases the `getChanges()` and `getPrevious()` methods in Laravel Eloquent. `getChanges()` returns an array of attributes that were modified during the last save operation, while `getPrevious()` returns the original values of those attributes before the last save. These methods are valuable for auditing or implementing logic based on specific attribute modifications.

```php
$user = User::find(1);

$user->name; // John
$user->email; // john@example.com

$user->update([
    'name' => 'Jack',
    'email' => 'jack@example.com',
]);

$user->getChanges();

/*
    [
        'name' => 'Jack',
        'email' => 'jack@example.com',
    ]
*/

$user->getPrevious();

/*
    [
        'name' => 'John',
        'email' => 'john@example.com',
    ]
*/
```

--------------------------------

### Destroy and Rebuild Homestead Virtual Machine

Source: https://laravel.com/docs/12.x/homestead

If provisioning issues occur, this command sequence completely destroys the existing Homestead virtual machine and then rebuilds it from scratch, ensuring a clean setup.

```shell
vagrant destroy && vagrant up
```

--------------------------------

### Start Queue Workers for Failover Connections

Source: https://laravel.com/docs/12.x/queues

Start individual queue workers for each connection in the failover list using the queue:work Artisan command. Each worker processes jobs from its respective queue connection.

```bash
php artisan queue:work redis
php artisan queue:work database
```

--------------------------------

### Standard Database URL Schema Convention

Source: https://laravel.com/docs/12.x/database

This snippet illustrates the general schema for database connection URLs, detailing the components like driver, authentication credentials, host, port, database name, and additional options. This convention allows for concise database configuration.

```html
driver://username:password@host:port/database?options
```

--------------------------------

### Create User with Generic Trial (Laravel Cashier)

Source: https://laravel.com/docs/12.x/cashier-paddle

Demonstrates how to create a new user and assign a generic trial period without requiring payment information upfront. This is achieved by setting the 'trial_ends_at' column on the customer record using the 'createAsCustomer' method.

```php
use App\Models\User;

$user = User::create([
    // ...
]);

$user->createAsCustomer([
    'trial_ends_at' => now()->plus(days: 10)
]);
```

--------------------------------

### Trap multiple operating system signals in a PHP Artisan command

Source: https://laravel.com/docs/12.x/artisan

This example demonstrates how to listen for and handle multiple operating system signals simultaneously within a PHP Artisan command. By passing an array of signals to the `trap` method, you can react to different termination or interruption signals.

```php
$this->trap([SIGTERM, SIGQUIT], function (int $signal) {
    $this->shouldKeepRunning = false;

    dump($signal); // SIGTERM / SIGQUIT
});
```

--------------------------------

### Map Multiple Shared Folders in Homestead Configuration

Source: https://laravel.com/docs/12.x/homestead

This YAML example illustrates how to configure multiple shared folders within your 'Homestead.yaml' file. Each 'map' and 'to' entry creates a separate synced directory, allowing you to manage several distinct application projects within the same Homestead virtual environment.

```yaml
folders:
    - map: ~/code/project1
      to: /home/vagrant/project1
    - map: ~/code/project2
      to: /home/vagrant/project2
```

--------------------------------

### Retrieve attributes whose keys start with a string (Blade)

Source: https://laravel.com/docs/12.x/blade

Shows how to use the `whereStartsWith` method to get attributes whose keys begin with a specified string, useful for filtering based on prefixes like 'wire:model'.

```blade
{{ $attributes->whereStartsWith('wire:model') }}
```

--------------------------------

### Execute DELETE Statement in Laravel

Source: https://laravel.com/docs/12.x/database

Shows how to delete records from the database using the delete method. Like the update method, it returns the number of rows affected by the DELETE statement.

```php
use Illuminate\Support\Facades\DB;

$deleted = DB::delete('delete from users');
```

--------------------------------

### Create a subscription with multiple products and custom quantities in Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

This example shows how to subscribe a user to multiple products, allowing for specific quantities to be defined for individual prices. It uses an associative array where the price ID is the key and the desired quantity is the value, while other prices are listed without explicit quantities.

```php
$user = User::find(1);

$checkout = $user->subscribe('default', ['price_monthly', 'price_chat' => 5]);
```

--------------------------------

### Delete a Single Model Instance in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Call the delete method on a model instance to remove it from the database. This approach retrieves the model first, ensuring that deleting and deleted events are properly dispatched.

```php
use App\Models\Flight;

$flight = Flight::find(1);

$flight->delete();
```

--------------------------------

### Register Observer in AppServiceProvider Boot Method

Source: https://laravel.com/docs/12.x/eloquent

Manually register an observer by calling the observe method on a model within the boot method of AppServiceProvider. This approach allows centralized observer registration and is useful when observers are defined in service providers.

```php
use App\Models\User;
use App\Observers\UserObserver;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    User::observe(UserObserver::class);
}
```

--------------------------------

### Configure Paddle API Keys in .env

Source: https://laravel.com/docs/12.x/cashier-paddle

Set up your Paddle API credentials in the application's .env file. This includes the client-side token, API key, optional Retain key, webhook secret, and the PADDLE_SANDBOX flag, which should be 'true' for development and 'false' for production.

```ini
PADDLE_CLIENT_SIDE_TOKEN=your-paddle-client-side-token
PADDLE_API_KEY=your-paddle-api-key
PADDLE_RETAIN_KEY=your-paddle-retain-key
PADDLE_WEBHOOK_SECRET="your-paddle-webhook-secret"
PADDLE_SANDBOX=true
```

--------------------------------

### Disable Automatic Timestamps in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Set the $timestamps property to false to prevent Eloquent from automatically managing created_at and updated_at columns. Useful for models that don't require timestamp tracking.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
```

--------------------------------

### Execute Laravel Envoy binary via PHP

Source: https://laravel.com/docs/12.x/envoy

Shows how to run the Envoy command-line tool after installation. The binary is located in the `vendor/bin` directory.

```shell
php vendor/bin/envoy
```

--------------------------------

### Handle Deadlocks in Laravel Transactions

Source: https://laravel.com/docs/12.x/database

Pass an attempts parameter to the transaction method to automatically retry the transaction when a deadlock occurs. After exhausting the specified number of attempts, an exception is thrown.

```php
use Illuminate\Support\Facades\DB;

DB::transaction(function () {
    DB::update('update users set votes = 1');

    DB::delete('delete from posts');
}, attempts: 5);
```

--------------------------------

### Install Laravel Fortify via Composer

Source: https://laravel.com/docs/12.x/fortify

Install the Laravel Fortify package using Composer package manager. This is the first step in setting up Fortify for your Laravel application.

```shell
composer require laravel/fortify
```

--------------------------------

### Register Laravel Boost MCP Server Command and Configuration

Source: https://laravel.com/docs/12.x/boost

This snippet provides the command-line arguments to manually register the Laravel Boost MCP (Multi-Codebase Project) server and an example JSON configuration for integrating it into an editor or development environment. The `php artisan boost:mcp` command is used to start the server, and the JSON illustrates how to define its execution parameters within a configuration file.

```bash
php artisan boost:mcp
```

```json
{
    "mcpServers": {
        "laravel-boost": {
            "command": "php",
            "args": ["artisan", "boost:mcp"]
        }
    }
}
```

--------------------------------

### Start FrankenPHP with Custom Caddyfile

Source: https://laravel.com/docs/12.x/octane

Command to start Laravel Octane with FrankenPHP server using a custom Caddyfile configuration. Allows customization of FrankenPHP settings including middleware, routing, and custom directives beyond default configuration.

```shell
php artisan octane:start --server=frankenphp --caddyfile=/path/to/your/Caddyfile
```

--------------------------------

### Query Relationship with Constraints in Laravel

Source: https://laravel.com/docs/12.x/eloquent-relationships

Demonstrates querying a relationship and adding additional constraints using query builder methods. This example retrieves only active posts for a user by chaining `where()` and `get()` methods on the relationship query.

```php
use App\Models\User;

$user = User::find(1);

$user->posts()->where('active', 1)->get();
```

--------------------------------

### Customizing User Creation and Password Reset

Source: https://laravel.com/docs/12.x/starter-kits

Customize user creation and password reset logic by editing action classes in the `app/Actions/Fortify` directory.

```APIDOC
## Customizing User Creation and Password Reset

When a user registers or resets their password, Fortify invokes action classes located in your application's `app/Actions/Fortify` directory:

| File                          | Description                           |
| ----------------------------- | ------------------------------------- |
| `CreateNewUser.php`           | Validates and creates new users       |
| `ResetUserPassword.php`       | Validates and updates user passwords  |
| `PasswordValidationRules.php` | Defines password validation rules     |

For example, to customize your application's registration logic, you should edit the `CreateNewUser` action:

```php
public function create(array $input): User
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:20'], // [tl! add]
        'password' => $this->passwordRules(),
    ])->validate();

    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'], // [tl! add]
        'password' => Hash::make($input['password']),
    ]);
}
```
```

--------------------------------

### Profile and Identify Slowest Tests in Laravel

Source: https://laravel.com/docs/12.x/testing

Execute the test command with the --profile option to display the ten slowest tests in your application. This helps identify performance bottlenecks and optimize test execution time.

```shell
php artisan test --profile
```

--------------------------------

### Capture Real-time Output from Asynchronous Process with Callback in Laravel (PHP)

Source: https://laravel.com/docs/12.x/processes

This example shows how to capture output from an asynchronous process in real-time using a callback closure. The closure is passed as the second argument to the `start` method and receives the output type (`stdout` or `stderr`) and the output string. This allows for immediate processing or display of output as it occurs.

```php
$process = Process::start('bash import.sh', function (string $type, string $output) {
    echo $output;
});

$result = $process->wait();
```

--------------------------------

### Permanently Delete an Eloquent Model in PHP

Source: https://laravel.com/docs/12.x/eloquent

To truly remove a soft-deleted model from the database, use the `forceDelete()` method. This bypasses the soft delete mechanism and performs a permanent deletion, removing the record entirely.

```php
$flight->forceDelete();
```

--------------------------------

### Manually Control Database Transactions in Laravel

Source: https://laravel.com/docs/12.x/database

Use beginTransaction, rollBack, and commit methods for manual transaction control. This approach provides complete control over transaction boundaries and is useful for complex transaction logic.

```php
use Illuminate\Support\Facades\DB;

DB::beginTransaction();
```

```php
DB::rollBack();
```

```php
DB::commit();
```

--------------------------------

### Dispatch a Batch of Laravel Jobs with Callbacks (PHP)

Source: https://laravel.com/docs/12.x/queues

This example demonstrates how to dispatch a batch of Laravel jobs using the `Bus::batch()` method. It shows how to define various lifecycle callbacks (`before`, `progress`, `then`, `catch`, `finally`) that execute at different stages of the batch's processing. The method returns a batch ID, which can be used to query the batch's status later.

```php
use AppJobsImportCsv;
use IlluminateBusBatch;
use IlluminateSupportFacadesBus;
use Throwable;

$batch = Bus::batch([
    new ImportCsv(1, 100),
    new ImportCsv(101, 200),
    new ImportCsv(201, 300),
    new ImportCsv(301, 400),
    new ImportCsv(401, 500),
])->before(function (Batch $batch) {
    // The batch has been created but no jobs have been added...
})->progress(function (Batch $batch) {
    // A single job has completed successfully...
})->then(function (Batch $batch) {
    // All jobs completed successfully...
})->catch(function (Batch $batch, Throwable $e) {
    // Batch job failure detected...
})->finally(function (Batch $batch) {
    // The batch has finished executing...
})->dispatch();

return $batch->id;
```

--------------------------------

### Delete All Models in a Table in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Execute a query without conditions to delete all models in a table. This mass delete operation does not dispatch deleting and deleted model events since models are never retrieved.

```php
$deleted = Flight::query()->delete();
```

--------------------------------

### Implement Authorization Logic in Laravel Channel Class Join Method

Source: https://laravel.com/docs/12.x/broadcasting

This example illustrates the structure of a channel class, specifically the `join` method, where the authorization logic for a broadcast channel is implemented. It demonstrates how to use model binding and authenticate a user's access to a specific channel based on their ID and the order's user ID.

```php
<?php

namespace App\Broadcasting;

use App\Models\Order;
use App\Models\User;

class OrderChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct() {}

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user, Order $order): array|bool
    {
        return $user->id === $order->user_id;
    }
}
```

--------------------------------

### GET /register

Source: https://laravel.com/docs/12.x/fortify

Display the user registration form. This endpoint returns the registration view configured in the FortifyServiceProvider.

```APIDOC
## GET /register

### Description
Display the registration form view for new user account creation.

### Method
GET

### Endpoint
/register

### Response
#### Success Response (200)
Returns the registration view as configured in FortifyServiceProvider via `Fortify::registerView()`.

### Configuration
Customize the registration view by calling in `App\Providers\FortifyServiceProvider`:

```php
use Laravel\Fortify\Fortify;

public function boot(): void
{
    Fortify::registerView(function () {
        return view('auth.register');
    });
}
```
```

--------------------------------

### Authentication Routes

Source: https://laravel.com/docs/12.x/starter-kits

This section details the available authentication routes provided by Laravel Fortify, including their HTTP methods, endpoints, and descriptions.

```APIDOC
## Authentication Routes

Laravel Fortify automatically registers the following authentication routes based on enabled features:

### GET /login
**Description**: Display login form.
**Method**: GET
**Endpoint**: /login

### POST /login
**Description**: Authenticate user.
**Method**: POST
**Endpoint**: /login

### POST /logout
**Description**: Log user out.
**Method**: POST
**Endpoint**: /logout

### GET /register
**Description**: Display registration form.
**Method**: GET
**Endpoint**: /register

### POST /register
**Description**: Create new user.
**Method**: POST
**Endpoint**: /register

### GET /forgot-password
**Description**: Display password reset request form.
**Method**: GET
**Endpoint**: /forgot-password

### POST /forgot-password
**Description**: Send password reset link.
**Method**: POST
**Endpoint**: /forgot-password

### GET /reset-password/{token}
**Description**: Display password reset form.
**Method**: GET
**Endpoint**: /reset-password/{token}

### POST /reset-password
**Description**: Update password.
**Method**: POST
**Endpoint**: /reset-password

### GET /email/verify
**Description**: Display email verification notice.
**Method**: GET
**Endpoint**: /email/verify

### GET /email/verify/{id}/{hash}
**Description**: Verify email address.
**Method**: GET
**Endpoint**: /email/verify/{id}/{hash}

### POST /email/verification-notification
**Description**: Resend verification email.
**Method**: POST
**Endpoint**: /email/verification-notification

### GET /user/confirm-password
**Description**: Display password confirmation form.
**Method**: GET
**Endpoint**: /user/confirm-password

### POST /user/confirm-password
**Description**: Confirm password.
**Method**: POST
**Endpoint**: /user/confirm-password

### GET /two-factor-challenge
**Description**: Display 2FA challenge form.
**Method**: GET
**Endpoint**: /two-factor-challenge

### POST /two-factor-challenge
**Description**: Verify 2FA code.
**Method**: POST
**Endpoint**: /two-factor-challenge
```

--------------------------------

### Disable Auto-Incrementing Primary Key in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Configure a non-incrementing primary key by setting the public $incrementing property to false. This is useful when your primary key is not an auto-incrementing integer, such as UUID or ULID values.

```php
<?php

class Flight extends Model
{
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
```

--------------------------------

### Check Node.js and NPM Installation

Source: https://laravel.com/docs/12.x/vite

Verify that Node.js (16+) and NPM are installed on your system before using Vite. These commands display the installed versions of both tools.

```shell
node -v
npm -v
```

--------------------------------

### Install Supervisor on Ubuntu

Source: https://laravel.com/docs/12.x/queues

Installs Supervisor process monitor on Ubuntu systems. Supervisor automatically restarts queue:work processes if they fail and is commonly used in Linux production environments for managing Laravel queue workers.

```shell
sudo apt-get install supervisor
```

--------------------------------

### Start a New Conversation with a Laravel AI Agent

Source: https://laravel.com/docs/12.x/ai-sdk

This example shows how to initiate a new conversation with a Laravel AI agent for a specific user. By calling the `forUser` method before prompting, a new conversation context is established, and a `conversationId` is returned, which can be used to continue the conversation later.

```php
$response = (new SalesCoach)->forUser($user)->prompt('Hello!');

$conversationId = $response->conversationId;
```

--------------------------------

### Configure Valet Site Sharing Tool

Source: https://laravel.com/docs/12.x/valet

Before sharing a site, use `valet share-tool` to specify your preferred sharing service (e.g., `ngrok`, `expose`, or `cloudflared`). Valet will assist with installation if the tool is not found.

```shell
valet share-tool ngrok
```

--------------------------------

### Multi-search with Placeholder and Hint

Source: https://laravel.com/docs/12.x/prompts

Adds user-friendly UI elements to the multi-search prompt including placeholder text and informational hint to guide users through multiple selection.

```php
$ids = multisearch(
    label: 'Search for the users that should receive the mail',
    placeholder: 'E.g. Taylor Otwell',
    options: fn (string $value) => strlen($value) > 0
        ? User::whereLike('name', "%{$value}%")->pluck('name', 'id')->all()
        : [],
    hint: 'The user will receive an email immediately.'
);
```

--------------------------------

### Start Laravel Octane Server via Artisan Command

Source: https://laravel.com/docs/12.x/octane

This shell command initiates the Octane server using the `artisan octane:start` command. By default, it will utilize the server specified in your application's `octane` configuration file and typically starts on port 8000, making your application accessible via `http://localhost:8000`.

```shell
php artisan octane:start
```

--------------------------------

### Install Flysystem Path Prefixing Package with Composer

Source: https://laravel.com/docs/12.x/filesystem

This Composer command installs the `league/flysystem-path-prefixing` package, which is necessary for creating scoped filesystem disks in Laravel. This package enables the functionality to automatically prefix all paths for a given disk.

```shell
composer require league/flysystem-path-prefixing "^3.0"
```

--------------------------------

### Manage a Pool of Concurrent Asynchronous Processes in Laravel (PHP)

Source: https://laravel.com/docs/12.x/processes

This example shows how to create and manage a pool of multiple concurrent asynchronous processes using Laravel's `Process::pool` method. It defines several commands within the pool, starts them, and then waits for all processes to complete. The `running()` method allows monitoring active processes within the pool.

```php
use Illuminate\Process\Pool;
use Illuminate\Support\Facades\Process;

$pool = Process::pool(function (Pool $pool) {
    $pool->path(__DIR__)->command('bash import-1.sh');
    $pool->path(__DIR__)->command('bash import-2.sh');
    $pool->path(__DIR__)->command('bash import-3.sh');
})->start(function (string $type, string $output, int $key) {
    // ...
});

while ($pool->running()->isNotEmpty()) {
    // ...
}

$results = $pool->wait();
```

--------------------------------

### Ensure String Starts with Given Value (PHP)

Source: https://laravel.com/docs/12.x/strings

The `start` method adds a single instance of a given value to the beginning of a string if it doesn't already start with that value. This ensures a consistent prefix without duplication.

```php
use Illuminate\Support\Str;

$adjusted = Str::of('this/string')->start('/');

// /this/string

$adjusted = Str::of('/this/string')->start('/');

// /this/string
```

--------------------------------

### Define Observer Class with Event Handlers

Source: https://laravel.com/docs/12.x/eloquent

Create an observer class with methods corresponding to Eloquent events. Each method receives the affected model as its only argument. Methods include created, updated, deleted, restored, and forceDeleted for handling different model lifecycle events.

```php
<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // ...
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        // ...
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        // ...
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        // ...
    }

    /**
     * Handle the User "forceDeleted" event.
     */
    public function forceDeleted(User $user): void
    {
        // ...
    }
}
```

--------------------------------

### Customize Timestamp Column Names in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Define CREATED_AT and UPDATED_AT constants on the model to customize the column names used for storing timestamps. Allows mapping to non-standard timestamp column names in the database.

```php
<?php

class Flight extends Model
{
    /**
     * The name of the "created at" column.
     *
     * @var string|null
     */
    public const CREATED_AT = 'creation_date';

    /**
     * The name of the "updated at" column.
     *
     * @var string|null
     */
    public const UPDATED_AT = 'updated_date';
}
```

--------------------------------

### Create Observer Class with Artisan Command

Source: https://laravel.com/docs/12.x/eloquent

Generate a new observer class using the make:observer Artisan command. This creates a class in the app/Observers directory with method stubs for handling Eloquent model events like created, updated, deleted, restored, and forceDeleted.

```shell
php artisan make:observer UserObserver --model=User
```

--------------------------------

### Test Laravel Facade Interaction Using Pest and PHPUnit

Source: https://laravel.com/docs/12.x/facades

These examples illustrate how to test interactions with Laravel facades, specifically mocking the `Cache` facade's `get` method. They show how to assert that a specific method was called with expected arguments and return a predefined value during testing, demonstrating the testability of facades despite their static appearance.

```php
use Illuminate\Support\Facades\Cache;

test('basic example', function () {
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
});
```

```php
use Illuminate\Support\Facades\Cache;

/**
 * A basic functional test example.
 */
public function test_basic_example(): void
{
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
}
```

--------------------------------

### Retrieve Original Eloquent Model Attribute Values (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet demonstrates the `getOriginal()` method in Laravel Eloquent, which retrieves the original values of a model's attributes as they were when the model was first retrieved from the database. It shows how to get the original value of a specific attribute or all original attributes, even after the model's attributes have been modified. This is useful for comparing current and previous states.

```php
$user = User::find(1);

$user->name; // John
$user->email; // john@example.com

$user->name = 'Jack';
$user->name; // Jack

$user->getOriginal('name'); // John
$user->getOriginal(); // Array of original attributes...
```

--------------------------------

### Configure File Search Tool for Multiple Vector Stores (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This example demonstrates how to configure the `FileSearch` tool to search across multiple vector stores. By providing an array of store IDs, the agent can access and retrieve information from a broader collection of documents, enhancing its knowledge base.

```php
new FileSearch(stores: ['store_1', 'store_2']);
```

--------------------------------

### Utilize and Chain Local Scopes in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent

Shows how to call and chain multiple local scopes when querying Eloquent models. Demonstrates basic chaining, combining scopes with OR operators using closures, and using the higher-order orWhere method for fluent chaining without closures.

```php
use App\Models\User;

$users = User::popular()->active()->orderBy('created_at')->get();
```

```php
$users = User::popular()->orWhere(function (Builder $query) {
    $query->active();
})->get();
```

```php
$users = User::popular()->orWhere->active()->get();
```

--------------------------------

### Include Soft Deleted Models in Eloquent Queries in PHP

Source: https://laravel.com/docs/12.x/eloquent

By default, soft-deleted models are excluded from query results. To include them, call the `withTrashed()` method on your Eloquent query builder. This will retrieve both active and soft-deleted records.

```php
use App\Models\Flight;

$flights = Flight::withTrashed()
    ->where('account_id', 1)
    ->get();
```

--------------------------------

### Register Observer Using ObservedBy Attribute

Source: https://laravel.com/docs/12.x/eloquent

Register an observer on a model using the ObservedBy attribute. This approach uses PHP attributes to declaratively attach observer classes to models, making the relationship explicit in the model definition.

```php
use App\Observers\UserObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([UserObserver::class])]
class User extends Authenticatable
{
    //
}
```

--------------------------------

### Create Feature Test with Artisan Command

Source: https://laravel.com/docs/12.x/testing

Generate a new feature test file in the tests/Feature directory using the make:test Artisan command. This creates a test case template ready for test method definitions.

```shell
php artisan make:test UserTest
```

--------------------------------

### Manually Control Progress Bar Advancement with Laravel Prompts (PHP)

Source: https://laravel.com/docs/12.x/prompts

This example illustrates how to gain manual control over a progress bar. It initializes the `progress` function with a total number of steps, then explicitly calls `start()`, `advance()` within a loop, and `finish()` to manage the progress display. This is useful when the iteration logic is more complex or not directly tied to an iterable collection.

```php
$progress = progress(label: 'Updating users', steps: 10);

$users = User::all();

$progress->start();

foreach ($users as $user) {
    $this->performTask($user);

    $progress->advance();
}

$progress->finish();
```

--------------------------------

### Permanently Delete Related Eloquent Models in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `forceDelete()` method can also be applied to Eloquent relationship queries to permanently remove related models from the database. This is useful for cascading permanent deletions for associated records.

```php
$flight->history()->forceDelete();
```

--------------------------------

### Execute Unprepared SQL Statement in Laravel

Source: https://laravel.com/docs/12.x/database

Shows how to execute an SQL statement without parameter binding using the unprepared method. WARNING: Unprepared statements are vulnerable to SQL injection and should never be used with user-controlled values.

```php
DB::unprepared('update users set votes = 100 where name = "Dries"');
```

--------------------------------

### Create Personal Access Client - Artisan Command

Source: https://laravel.com/docs/12.x/passport

Creates a personal access client using the Artisan command with the --personal option. This client is required before your application can issue personal access tokens to users. Not needed if passport:install has already been executed.

```shell
php artisan passport:client --personal
```

--------------------------------

### Install Laravel Reverb Broadcasting Driver via Artisan

Source: https://laravel.com/docs/12.x/broadcasting

This Artisan command quickly enables Laravel's broadcasting features using Reverb. It installs required Composer and NPM packages for Reverb and updates the application's `.env` file with appropriate configuration variables.

```shell
php artisan install:broadcasting --reverb
```

--------------------------------

### Configure Vue Authentication Page Layout

Source: https://laravel.com/docs/12.x/starter-kits

This code illustrates how to switch between different authentication page layouts (simple, card, or split) for the Vue starter kit. The change is made by importing a different layout component at the top of your 'resources/js/layouts/AuthLayout.vue' file.

```js
import AuthLayout from '@/layouts/auth/AuthSimpleLayout.vue'; // [tl! remove]
import AuthLayout from '@/layouts/auth/AuthSplitLayout.vue'; // [tl! add]
```

--------------------------------

### Delete Models Using Query Conditions in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Build an Eloquent query with where conditions to delete multiple models matching specific criteria. Mass deletes do not dispatch model events, and models are not retrieved individually during execution.

```php
$deleted = Flight::where('active', 0)->delete();
```

--------------------------------

### Customize Timestamp Date Format in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Set the $dateFormat property to customize how date attributes are stored in the database and formatted when serialized to arrays or JSON. Accepts standard PHP date format strings.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';
}
```

--------------------------------

### Registering Optimize Commands for Laravel Packages

Source: https://laravel.com/docs/12.x/packages

This PHP example shows how to register package-specific Artisan commands that should be executed when Laravel's `optimize` or `optimize:clear` commands are run. The `optimizes` method allows you to define custom commands for these optimization processes, typically within a service provider's `boot` method.

```php
/**
 * Bootstrap any package services.
 */
public function boot(): void
{
    if ($this->app->runningInConsole()) {
        $this->optimizes(
            optimize: 'package:optimize',
            clear: 'package:clear-optimizations',
        );
    }
}
```

--------------------------------

### Navigate to Homestead Directory and Checkout Release Branch

Source: https://laravel.com/docs/12.x/homestead

After cloning the repository, navigate into the newly created 'Homestead' directory. The 'git checkout release' command then switches to the 'release' branch, ensuring you are using the latest stable version of Homestead for a reliable development environment.

```shell
cd ~/Homestead

git checkout release
```

--------------------------------

### Install PHP UV Extension for Event Loop

Source: https://laravel.com/docs/12.x/reverb

Install the ext-uv PHP extension via PECL to enable a more efficient event loop for Reverb that supports more than 1,024 concurrent connections. This extension removes the file descriptor limitations of the default stream_select loop.

```shell
pecl install uv
```

--------------------------------

### Execute INSERT Statement in Laravel

Source: https://laravel.com/docs/12.x/database

Shows how to execute an INSERT statement using the DB facade's insert method. The first argument is the SQL INSERT query, and the second argument contains the parameter bindings for the values being inserted.

```php
use Illuminate\Support\Facades\DB;

DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
```

--------------------------------

### Defining Pre/Post Truncation Hooks in Laravel Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Provides examples of `beforeTruncatingDatabase` and `afterTruncatingDatabase` methods for executing custom code before or after the database truncation process. These hooks allow for setup or teardown logic specific to truncation.

```php
/**
 * Perform any work that should take place before the database has started truncating.
 */
protected function beforeTruncatingDatabase(): void
{
    //
}

/**
 * Perform any work that should take place after the database has finished truncating.
 */
protected function afterTruncatingDatabase(): void
{
    //
}

```

--------------------------------

### Share Homestead Site via Command Line

Source: https://laravel.com/docs/12.x/homestead

Execute the share command in Homestead to expose a configured site publicly via Ngrok. This generates publicly accessible URLs for sharing with coworkers or clients. Supports custom region, subdomain, and other Ngrok runtime options.

```shell
share homestead.test
```

```shell
share homestead.test -region=eu -subdomain=laravel
```

--------------------------------

### Inspect Laravel Database Schema using `Schema` facade methods

Source: https://laravel.com/docs/12.x/database

This PHP code demonstrates how to programmatically retrieve detailed information about database structures using the `Schema` facade. It allows fetching lists of tables, views, columns, indexes, and foreign keys for a specified table, and can target non-default database connections.

```php
use Illuminate\Support\Facades\Schema;

$tables = Schema::getTables();
$views = Schema::getViews();
$columns = Schema::getColumns('users');
$indexes = Schema::getIndexes('users');
$foreignKeys = Schema::getForeignKeys('users');
```

```php
$columns = Schema::connection('sqlite')->getColumns('users');
```

--------------------------------

### Replicate Model Instance with `replicate()` and `fill()` in PHP

Source: https://laravel.com/docs/12.x/eloquent

Create an unsaved copy of an existing model instance using the `replicate()` method. This is useful for models with similar attributes. After replicating, use `fill()` to modify specific attributes and then `save()` the new instance to the database.

```php
use App\Models\Address;

$shipping = Address::create([
    'type' => 'shipping',
    'line_1' => '123 Example Street',
    'city' => 'Victorville',
    'state' => 'CA',
    'postcode' => '90001',
]);

$billing = $shipping->replicate()->fill([
    'type' => 'billing'
]);

$billing->save();
```

--------------------------------

### Connect to Laravel Database CLI using Artisan `db` command

Source: https://laravel.com/docs/12.x/database

This command allows developers to connect to the database's command-line interface directly from the terminal. It can connect to the default database or a specified connection name, providing quick access for database operations.

```shell
php artisan db
```

```shell
php artisan db mysql
```

--------------------------------

### Install Laravel Telescope for Local Development Only

Source: https://laravel.com/docs/12.x/telescope

Install Telescope as a development dependency using the --dev flag, then manually register the service provider in AppServiceProvider to ensure it only loads in the local environment.

```shell
composer require laravel/telescope --dev

php artisan telescope:install

php artisan migrate
```

--------------------------------

### Define Dynamic Scopes with Parameters in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent

Illustrates how to create scopes that accept additional parameters beyond the query builder. Parameters are added to the scope method signature after the $query parameter and are passed when calling the scope method.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Scope a query to only include users of a given type.
     */
    #[Scope]
    protected function ofType(Builder $query, string $type): void
    {
        $query->where('type', $type);
    }
}
```

```php
$users = User::ofType('admin')->get();
```

--------------------------------

### Install Laravel Passport via Artisan Command

Source: https://laravel.com/docs/12.x/passport

This command installs Laravel Passport, publishes and runs necessary database migrations for OAuth2 clients and access tokens, and generates encryption keys required for secure access tokens.

```shell
php artisan install:api --passport
```

--------------------------------

### Handling No Results with Eloquent `findOr` and `firstOr` in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `findOr` and `firstOr` methods allow you to define a fallback action using a closure if no model is found. If the model is not found, the closure is executed, and its return value becomes the result of the method.

```php
$flight = Flight::findOr(1, function () {
    // ...
});

$flight = Flight::where('legs', '>', 3)->firstOr(function () {
    // ...
});
```

--------------------------------

### Replicate Model Excluding Specific Attributes in PHP

Source: https://laravel.com/docs/12.x/eloquent

When replicating a model, you can exclude certain attributes from being copied to the new instance by passing an array of attribute names to the `replicate()` method. This ensures that sensitive or unique fields are not duplicated.

```php
$flight = Flight::create([
    'destination' => 'LAX',
    'origin' => 'LHR',
    'last_flown' => '2020-03-04 11:00:00',
    'last_pilot_id' => 747,
]);

$flight = $flight->replicate([
    'last_flown',
    'last_pilot_id'
]);
```

--------------------------------

### Demonstrating Zero-Configuration Dependency Resolution in Laravel Routes

Source: https://laravel.com/docs/12.x/container

This PHP example illustrates Laravel's zero-configuration dependency resolution. It shows how a concrete `Service` class can be automatically resolved and injected into a route's closure without requiring explicit binding, simplifying dependency management for classes that have no complex dependencies.

```php
<?php

class Service
{
    // ...
}

Route::get('/', function (Service $service) {
    dd($service::class);
});
```

--------------------------------

### Check if an Eloquent Model is Soft Deleted in PHP

Source: https://laravel.com/docs/12.x/eloquent

To determine if a specific Eloquent model instance has been soft deleted, you can use the `trashed()` method. This method returns a boolean indicating whether the `deleted_at` attribute is set on the model.

```php
if ($flight->trashed()) {
    // ...
}
```

--------------------------------

### Render a Laravel View using the `View` Facade

Source: https://laravel.com/docs/12.x/views

This PHP example demonstrates an alternative method to return a view using the `Illuminate\Support\Facades\View` facade's `make` method. It achieves the same result as the `view` helper, passing data as an associative array.

```php
use Illuminate\Support\Facades\View;

return View::make('greeting', ['name' => 'James']);
```

--------------------------------

### Registering Laravel Service Providers in Configuration File (PHP)

Source: https://laravel.com/docs/12.x/providers

These snippets demonstrate how Laravel service providers are registered in the `bootstrap/providers.php` configuration file. The first example shows the initial setup with a default provider, while the second illustrates how to manually add a new service provider to the array for the framework to load.

```php
<?php

return [
    App\Providers\AppServiceProvider::class,
];
```

```php
<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\ComposerServiceProvider::class, // [tl! add]
];
```

--------------------------------

### Starting Vite Development Server in Laravel

Source: https://laravel.com/docs/12.x/vite

This command initiates the Vite development server alongside the Laravel development server. It's used to serve your application's assets during development, allowing for hot module replacement and other Vite features. This is typically used when working with stylesheets or JavaScript entry points.

```shell
composer run dev
```

--------------------------------

### Chaining Laravel Jobs with Closures

Source: https://laravel.com/docs/12.x/queues

This example demonstrates chaining Laravel jobs, including a closure as one of the steps in the sequence. This allows for simple, inline operations to be performed within a job chain alongside dedicated job classes.

```php
Bus::chain([
    new ProcessPodcast,
    new OptimizePodcast,
    function () {
        Podcast::update(/* ... */);
    },
])->dispatch();
```

--------------------------------

### Create Unit Test with Artisan Command

Source: https://laravel.com/docs/12.x/testing

Generate a new unit test file in the tests/Unit directory using the make:test Artisan command with the --unit flag. Unit tests focus on isolated code portions without booting the Laravel application.

```shell
php artisan make:test UserTest --unit
```

--------------------------------

### Describe Fake Process with Output and Iterations

Source: https://laravel.com/docs/12.x/processes

Uses Process::describe() to configure a fake process with multiple output lines, error output, exit code, and iteration count. This allows testing asynchronous processes by specifying how many times the running() method should return true and what output should be returned sequentially.

```php
Process::fake([
    'bash import.sh' => Process::describe()
        ->output('First line of standard output')
        ->errorOutput('First line of error output')
        ->output('Second line of standard output')
        ->exitCode(0)
        ->iterations(3),
]);
```

--------------------------------

### Start Laravel Development Server with Inertia SSR

Source: https://laravel.com/docs/12.x/starter-kits

This Composer shell command facilitates local development and testing of Inertia SSR-enabled Laravel applications. It first builds an SSR compatible bundle and then simultaneously starts both the Laravel development server and the Inertia SSR server, providing a complete local testing environment.

```shell
composer dev:ssr
```

--------------------------------

### Customize UUID Generation and Target Columns

Source: https://laravel.com/docs/12.x/eloquent

Override the UUID generation process by defining a newUniqueId method and specify which columns should receive UUIDs using the uniqueIds method. This allows custom UUID algorithms and multi-column UUID assignment.

```php
use Ramsey\Uuid\Uuid;

/**
 * Generate a new UUID for the model.
 */
public function newUniqueId(): string
{
    return (string) Uuid::uuid4();
}

/**
 * Get the columns that should receive a unique identifier.
 *
 * @return array<int, string>
 */
public function uniqueIds(): array
{
    return ['id', 'discount_code'];
}
```

--------------------------------

### Disable SQLite Foreign Key Constraints

Source: https://laravel.com/docs/12.x/database

Configure environment variable to disable foreign key constraints for SQLite database connections. Set the DB_FOREIGN_KEYS variable to false when foreign key constraints are not required.

```ini
DB_FOREIGN_KEYS=false
```

--------------------------------

### Remove All Existing Orderings with `reorder` in Laravel

Source: https://laravel.com/docs/12.x/queries

The `reorder` method clears all previously applied 'order by' clauses from a query. This example demonstrates how to take an already ordered query (by 'name') and remove its ordering to get unordered results.

```php
$query = DB::table('users')->orderBy('name');

$unorderedUsers = $query->reorder()->get();
```

--------------------------------

### Resize the browser window to specific dimensions with Dusk

Source: https://laravel.com/docs/12.x/dusk

Demonstrates how to use the `resize` method to set the browser window's width and height to specific pixel values. This is useful for testing responsive layouts or ensuring consistent screenshot sizes.

```php
$browser->resize(1920, 1080);
```

--------------------------------

### Create and use a single browser instance for Dusk tests

Source: https://laravel.com/docs/12.x/dusk

Demonstrates how to create a single browser instance using the `browse` method to perform a login test. It navigates to the login page, types credentials, presses the login button, and asserts the path. This functionality is shown for both Pest and PHPUnit testing frameworks. Requires `App\Models\User` and `Laravel\Dusk\Browser`.

```php
<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;

pest()->use(DatabaseMigrations::class);

test('basic example', function () {
    $user = User::factory()->create([
        'email' => 'taylor@laravel.com',
    ]);

    $this->browse(function (Browser $browser) use ($user) {
        $browser->visit('/login')
            ->type('email', $user->email)
            ->type('password', 'password')
            ->press('Login')
            ->assertPathIs('/home');
    });
});
```

```php
<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     */
    public function test_basic_example(): void
    {
        $user = User::factory()->create([
            'email' => 'taylor@laravel.com',
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
```

--------------------------------

### Test Laravel Helper Function Interaction Using PHPUnit

Source: https://laravel.com/docs/12.x/facades

This example illustrates how to test interactions with Laravel helper functions, specifically mocking the underlying `Cache` facade's `get` method even when the `cache()` helper is used. It demonstrates that helper functions are testable by interacting with their underlying facade implementations, ensuring consistent testing methodology.

```php
use Illuminate\Support\Facades\Cache;

/**
 * A basic functional test example.
 */
public function test_basic_example(): void
{
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
}
```

--------------------------------

### Execute UPDATE Statement in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates using the update method to modify existing database records. The method returns the number of rows affected by the UPDATE statement, allowing you to verify the operation's success.

```php
use Illuminate\Support\Facades\DB;

$affected = DB::update(
    'update users set votes = 100 where name = ?',
    ['Anita']
);
```

--------------------------------

### Define `pruning()` Callback for Pre-Deletion Logic in PHP

Source: https://laravel.com/docs/12.x/eloquent

Optionally, define a `pruning()` method on your model when using the `Prunable` trait. This method executes before the model is deleted, allowing you to clean up associated resources like files or related database entries.

```php
/**
 * Prepare the model for pruning.
 */
protected function pruning(): void
{
    // ...
}
```

--------------------------------

### Execute SELECT Query with Named Parameter Bindings in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates using named bindings instead of positional placeholders (?) for parameter binding in SELECT queries. Named bindings improve code readability and make queries easier to maintain.

```php
$results = DB::select('select * from users where id = :id', ['id' => 1]);
```

--------------------------------

### Provide Payment Confirmation Options for SEPA and Other Methods

Source: https://laravel.com/docs/12.x/billing

Shows how to use the withPaymentConfirmationOptions method to provide additional data required by certain payment methods like SEPA, which need mandate data. This method chains with subscription operations like swap to include confirmation options during payment processing.

```php
$subscription->withPaymentConfirmationOptions([
    'mandate_data' => '...',
])->swap('price_xxx');
```

--------------------------------

### Execute SELECT Query with DB Facade in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates how to run a basic SELECT query using the DB facade's select method. The first argument is the SQL query string, and the second argument contains parameter bindings for WHERE clause constraints, providing SQL injection protection. Results are returned as an array of stdClass objects.

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }
}
```

--------------------------------

### Observer Handling Events After Database Commit

Source: https://laravel.com/docs/12.x/eloquent

Implement the ShouldHandleEventsAfterCommit interface on an observer to defer event handler execution until after a database transaction commits. If no transaction is active, handlers execute immediately. Useful for ensuring data consistency in transactional contexts.

```php
<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class UserObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // ...
    }
}
```

--------------------------------

### Restore a Single Soft Deleted Eloquent Model in PHP

Source: https://laravel.com/docs/12.x/eloquent

To 'un-delete' a soft deleted model, call the `restore()` method on the model instance. This action sets the model's `deleted_at` column back to `null`, making it active again in queries.

```php
$flight->restore();
```

--------------------------------

### Resize browser window to fit content using Dusk's fitContent method

Source: https://laravel.com/docs/12.x/dusk

Shows how to use the `fitContent` method to automatically adjust the browser window size to match the dimensions of its content. This can be helpful for capturing precise screenshots without excess whitespace.

```php
$browser->fitContent();
```

--------------------------------

### Manually register a class-based Eloquent Global Scope in the booted method

Source: https://laravel.com/docs/12.x/eloquent

This PHP code illustrates an alternative method for applying a global scope to an Eloquent model. By overriding the `booted` method and calling `static::addGlobalScope`, the `AncientScope` is registered, ensuring its constraints are applied to all subsequent queries for the `User` model.

```php
<?php

namespace App\Models;

use App\Models\Scopes\AncientScope;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new AncientScope);
    }
}
```

--------------------------------

### Configure Minio S3 Buckets in Homestead.yaml

Source: https://laravel.com/docs/12.x/homestead

Define S3 buckets to be provisioned with Minio. Supports policy values: none, download, upload, and public. Execute vagrant reload --provision after defining buckets to apply changes.

```yaml
buckets:
    - name: your-bucket
      policy: public
    - name: your-private-bucket
      policy: none
```

--------------------------------

### Enable Soft Deletes on an Eloquent Model in PHP

Source: https://laravel.com/docs/12.x/eloquent

To enable soft deleting for an Eloquent model, add the `Illuminate\Database\Eloquent\SoftDeletes` trait to your model class. This trait automatically handles setting and casting the `deleted_at` attribute when a model is soft deleted.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;
}
```

--------------------------------

### Install FTP Flysystem Package with Composer

Source: https://laravel.com/docs/12.x/filesystem

This Composer command installs the `league/flysystem-ftp` package, which is required to enable FTP filesystem integration within a Laravel application. It allows Laravel to interact with FTP servers using the Flysystem abstraction.

```shell
composer require league/flysystem-ftp "^3.0"
```

--------------------------------

### Configure Web Fetch Tool with Max Fetches and Allowed Domains (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This example demonstrates how to configure the `WebFetch` tool to limit the number of web pages an agent can fetch using `max()` and restrict fetching to specific domains using `allow()`. This helps manage resource usage and ensures agents only access approved web content.

```php
(new WebFetch)->max(3)->allow(['docs.laravel.com']),
```

--------------------------------

### Install Frontend Dependencies with NPM

Source: https://laravel.com/docs/12.x/vite

Install all frontend dependencies defined in package.json, including Vite and the Laravel plugin, to set up the development environment.

```shell
npm install
```

--------------------------------

### Build Inertia SSR Bundle for Laravel React/Vue Starter Kits

Source: https://laravel.com/docs/12.x/starter-kits

This shell command is used to compile an Inertia server-side rendering (SSR) compatible bundle for Laravel applications utilizing React or Vue starter kits. Running `npm run build:ssr` prepares your application to leverage Inertia's SSR capabilities for improved performance and SEO.

```shell
npm run build:ssr
```

--------------------------------

### Retrieve or Create Models with firstOrCreate and firstOrNew

Source: https://laravel.com/docs/12.x/eloquent

firstOrCreate() locates a database record by column/value pairs and inserts it if not found, merging optional attributes. firstOrNew() returns a new unsaved model instance if not found. Both methods accept attribute arrays for matching and optional attribute merging.

```php
use App\Models\Flight;

// Retrieve flight by name or create it if it doesn't exist...
$flight = Flight::firstOrCreate([
    'name' => 'London to Paris'
]);

// Retrieve flight by name or create it with the name, delayed, and arrival_time attributes...
$flight = Flight::firstOrCreate(
    ['name' => 'London to Paris'],
    ['delayed' => 1, 'arrival_time' => '11:30']
);

// Retrieve flight by name or instantiate a new Flight instance...
$flight = Flight::firstOrNew([
    'name' => 'London to Paris'
]);

// Retrieve flight by name or instantiate with the name, delayed, and arrival_time attributes...
$flight = Flight::firstOrNew(
    ['name' => 'Tokyo to Sydney'],
    ['delayed' => 1, 'arrival_time' => '11:30']
);
```

--------------------------------

### Chunk with logical grouping and multiple conditions

Source: https://laravel.com/docs/12.x/eloquent

Combine logical grouping with chunkById to apply complex WHERE conditions while processing large datasets. Wrapping conditions in a closure ensures proper query construction when using chunkById with multiple filter criteria.

```php
Flight::where(function ($query) {
    $query->where('delayed', true)->orWhere('cancelled', true);
})->chunkById(200, function (Collection $flights) {
    $flights->each->update([
        'departed' => false,
        'cancelled' => true
    ]);
}, column: 'id');
```

--------------------------------

### Update an existing Eloquent model in Laravel

Source: https://laravel.com/docs/12.x/eloquent

This snippet demonstrates how to update an existing Eloquent model. It retrieves a model by its primary key, modifies an attribute, and then persists the changes to the database using the `save` method. The `updated_at` timestamp is automatically managed.

```php
use App\Models\Flight;

$flight = Flight::find(1);

$flight->name = 'Paris to London';

$flight->save();
```

--------------------------------

### Execute Database Transactions in Laravel

Source: https://laravel.com/docs/12.x/database

Use the transaction method to run multiple database operations within a transaction. The method automatically commits on success and rolls back on exception, eliminating the need for manual transaction management.

```php
use Illuminate\Support\Facades\DB;

DB::transaction(function () {
    DB::update('update users set votes = 1');

    DB::delete('delete from posts');
});
```

--------------------------------

### Enforce Minimum Test Coverage Threshold in Laravel

Source: https://laravel.com/docs/12.x/testing

Use the --min option to define a minimum coverage percentage threshold. The test suite will fail if the coverage falls below the specified threshold, ensuring code quality standards are maintained.

```shell
php artisan test --coverage --min=80.3
```

--------------------------------

### Iterate Through SELECT Query Results in Laravel

Source: https://laravel.com/docs/12.x/database

Shows how to iterate through the array of results returned by a SELECT query. Each result is a PHP stdClass object representing a database record, allowing access to columns as object properties.

```php
use Illuminate\Support\Facades\DB;

$users = DB::select('select * from users');

foreach ($users as $user) {
    echo $user->name;
}
```

--------------------------------

### Manually Install Laravel Reverb Composer Package

Source: https://laravel.com/docs/12.x/broadcasting

This Composer command manually installs the Laravel Reverb package into the application. It is an alternative to using the `install:broadcasting --reverb` command for adding Reverb as a broadcasting driver.

```shell
composer require laravel/reverb
```

--------------------------------

### Implement a class-based Eloquent Global Scope

Source: https://laravel.com/docs/12.x/eloquent

This PHP code defines a class that implements the `Illuminate\Database\Eloquent\Scope` interface. The `apply` method within this class is responsible for adding `where` constraints or other query clauses to the Eloquent builder, enforcing specific conditions on model queries.

```php
<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class AncientScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('created_at', '<', now()->minus(years: 2000));
    }
}
```

--------------------------------

### Install Laravel Prompts via Composer

Source: https://laravel.com/docs/12.x/prompts

Install the Laravel Prompts package using Composer package manager. This command adds the laravel/prompts package to your project dependencies.

```shell
composer require laravel/prompts
```

--------------------------------

### Mute All Model Events with withoutEvents

Source: https://laravel.com/docs/12.x/eloquent

Temporarily suppress all events fired by a model using the withoutEvents method. This method accepts a closure and executes code within it without dispatching model events. The return value of the closure is returned by withoutEvents.

```php
use App\Models\User;

$user = User::withoutEvents(function () {
    User::findOrFail(1)->delete();

    return User::find(2);
});
```

--------------------------------

### List Available Artisan Make Commands

Source: https://laravel.com/docs/12.x/structure

Displays all available Artisan make commands that can be used to generate classes in the app directory. This helps developers discover which classes can be auto-generated for their application.

```bash
php artisan list make
```

--------------------------------

### Install Flysystem Dropbox Adapter via Composer

Source: https://laravel.com/docs/12.x/filesystem

Install the Spatie Flysystem Dropbox adapter package as a project dependency. This community-maintained adapter provides Dropbox storage integration for Laravel applications.

```shell
composer require spatie/flysystem-dropbox
```

--------------------------------

### Install SFTP Flysystem Package with Composer

Source: https://laravel.com/docs/12.x/filesystem

This Composer command installs the `league/flysystem-sftp-v3` package, which is essential for integrating SFTP filesystem capabilities into a Laravel application. It enables secure file transfers over SSH using the Flysystem abstraction.

```shell
composer require league/flysystem-sftp-v3 "^3.0"
```

--------------------------------

### Create Multi-Product Subscription in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

This example shows how to create a new subscription that includes multiple products. An array of price IDs is passed as the second argument to the `newSubscription` method, allowing multiple billing items under one subscription.

```php
use Illuminate\Http\Request;

Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription('default', [
        'price_monthly',
        'price_chat',
    ])->create($request->paymentMethodId);

    // ...
});
```

--------------------------------

### Install Laravel Folio via Composer

Source: https://laravel.com/docs/12.x/folio

Install the Laravel Folio package using Composer and run the folio:install Artisan command to register the service provider and configure the pages directory.

```shell
composer require laravel/folio
```

```shell
php artisan folio:install
```

--------------------------------

### Enable Laravel Event Broadcasting with Artisan Command

Source: https://laravel.com/docs/12.x/broadcasting

This command initiates the event broadcasting setup in a Laravel application. It prompts the user to select a broadcasting service, creates `config/broadcasting.php` and `routes/channels.php`, and sets up the necessary files for event authorization.

```shell
php artisan install:broadcasting
```

--------------------------------

### Get File MIME Type using Laravel Storage (PHP)

Source: https://laravel.com/docs/12.x/filesystem

This example shows how to determine the MIME type of a given file using the `mimeType` method. It helps in identifying the content type of a file, which can be useful for serving files with correct headers or for validation.

```php
$mime = Storage::mimeType('file.jpg');
```

--------------------------------

### Listen for Query Events in Laravel Service Provider

Source: https://laravel.com/docs/12.x/database

Register a query listener closure in a service provider's boot method to monitor all SQL queries executed by the application. Access query details including SQL, bindings, execution time, and raw SQL through the QueryExecuted event object.

```php
<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::listen(function (QueryExecuted $query) {
            // $query->sql;
            // $query->bindings;
            // $query->time;
            // $query->toRawSql();
        });
    }
}
```

--------------------------------

### Restore Soft Deleted Related Models in Eloquent in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `restore()` method can also be used when working with Eloquent relationships to restore soft-deleted related models. This allows you to restore all soft-deleted models associated with a parent model through a defined relationship.

```php
$flight->history()->restore();
```

--------------------------------

### Test Model Pruning with `--pretend` Option in Shell

Source: https://laravel.com/docs/12.x/eloquent

Before actually running the pruning command, you can test your `prunable` query using the `--pretend` option. This shell command will report how many records would be pruned without performing any actual deletions, allowing for safe verification.

```shell
php artisan model:prune --pretend
```

--------------------------------

### Query Aggregate Methods for Scalar Results

Source: https://laravel.com/docs/12.x/eloquent

Use Eloquent aggregate methods like count(), sum(), and max() to retrieve scalar values instead of model instances. These methods are provided by the Laravel query builder and work with Eloquent model queries.

```php
$count = Flight::where('active', 1)->count();

$max = Flight::where('active', 1)->max('price');
```

--------------------------------

### Access Parallel Testing Token in Laravel Tests

Source: https://laravel.com/docs/12.x/testing

Retrieve the unique process token for the current parallel test process using the ParallelTesting::token() method. This token can be used to segment resources and identify which parallel process is executing the test.

```php
$token = ParallelTesting::token();
```

--------------------------------

### Retrieve specific context values using Laravel Context facade

Source: https://laravel.com/docs/12.x/context

These examples demonstrate how to fetch specific data from the application's context. The `get` method retrieves a single value by key, while `only` and `except` allow fetching a subset of context data based on an array of keys.

```php
use Illuminate\Support\Facades\Context;

$value = Context::get('key');
```

```php
$data = Context::only(['first_key', 'second_key']);

$data = Context::except(['first_key']);
```

--------------------------------

### Schedule `model:prune` Artisan Command Daily in Laravel

Source: https://laravel.com/docs/12.x/eloquent

After configuring prunable models, schedule the `model:prune` Artisan command in your `routes/console.php` file. This command automatically detects and prunes models marked with the `Prunable` trait at the specified interval, such as daily.

```php
use Illuminate\Support\Facades\Schedule;

Schedule::command('model:prune')->daily();
```

--------------------------------

### Filtering Eloquent `cursor` Results with Lazy Collections in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `cursor` method returns an `Illuminate\Support\LazyCollection` instance, enabling the use of many standard collection methods. This allows for filtering or transforming data efficiently without loading all models into memory simultaneously.

```php
use App\Models\User;

$users = User::cursor()->filter(function (User $user) {
    return $user->id > 500;
});

foreach ($users as $user) {
    echo $user->id;
}
```

--------------------------------

### Perform Model Operations Without Updating Timestamps

Source: https://laravel.com/docs/12.x/eloquent

Use the withoutTimestamps method to execute model operations within a closure without triggering updated_at timestamp modifications. Useful for bulk updates or operations that shouldn't record modification time.

```php
Model::withoutTimestamps(fn () => $post->increment('reads'));
```

--------------------------------

### Serve Laravel Application with FrankenPHP

Source: https://laravel.com/docs/12.x/deployment

This command demonstrates how to use FrankenPHP, a modern PHP application server, to serve a Laravel application. By specifying the `public/` directory, FrankenPHP correctly routes requests to your application's entry point. For advanced features like Octane integration or HTTP/3, refer to FrankenPHP's dedicated Laravel documentation.

```shell
frankenphp php-server -r public/
```

--------------------------------

### Join Presence Channels and Handle Events with Echo (JavaScript)

Source: https://laravel.com/docs/12.x/broadcasting

This JavaScript snippet demonstrates how to join a presence channel using `Echo.join` and subscribe to various presence-related events. It handles `here` (initial users), `joining` (new user), `leaving` (user departs), and `error` events to manage and react to the real-time presence of users in a channel. This is crucial for building collaborative features like chat rooms or user presence indicators.

```js
Echo.join(`chat.${roomId}`)
    .here((users) => {
        // ...
    })
    .joining((user) => {
        console.log(user.name);
    })
    .leaving((user) => {
        console.log(user.name);
    })
    .error((error) => {
        console.error(error);
    });
```

--------------------------------

### Handle Not Found Exceptions with findOrFail and firstOrFail

Source: https://laravel.com/docs/12.x/eloquent

Use findOrFail() and firstOrFail() methods to retrieve model instances and automatically throw ModelNotFoundException if no results are found. When uncaught, this exception triggers a 404 HTTP response. Useful in routes and controllers for automatic error handling.

```php
$flight = Flight::findOrFail(1);

$flight = Flight::where('legs', '>', 3)->firstOrFail();
```

```php
use App\Models\Flight;

Route::get('/api/flights/{id}', function (string $id) {
    return Flight::findOrFail($id);
});
```

--------------------------------

### Retrieving Single Eloquent Models by Primary Key or Conditions in PHP

Source: https://laravel.com/docs/12.x/eloquent

Eloquent provides methods like `find`, `first`, and `firstWhere` to retrieve a single model instance rather than a collection. `find` fetches by primary key, while `first` and `firstWhere` retrieve the first model matching specified query constraints.

```php
use App\Models\Flight;

// Retrieve a model by its primary key...
$flight = Flight::find(1);

// Retrieve the first model matching the query constraints...
$flight = Flight::where('active', 1)->first();

// Alternative to retrieving the first model matching the query constraints...
$flight = Flight::firstWhere('active', 1);
```

--------------------------------

### Start Reverb Server with SSL and Custom Hostname

Source: https://laravel.com/docs/12.x/reverb

Start the Reverb WebSocket server with SSL support using a custom hostname. This command configures the server to listen on a specific host and port with secure WebSocket protocol (wss).

```shell
php artisan reverb:start --host="0.0.0.0" --port=8080 --hostname="laravel.test"
```

--------------------------------

### Move the browser window to a specific screen position with Dusk

Source: https://laravel.com/docs/12.x/dusk

Demonstrates how to use the `move` method to reposition the browser window on the screen using X and Y coordinates. This allows for precise placement of the browser window during testing.

```php
$browser->move($x = 100, $y = 100);
```

--------------------------------

### Process results as lazy collection stream

Source: https://laravel.com/docs/12.x/eloquent

Retrieve and iterate over large result sets using the lazy method, which returns a flattened LazyCollection. Unlike chunk, lazy executes queries in the background while allowing interaction with results as a single continuous stream.

```php
use App\Models\Flight;

foreach (Flight::lazy() as $flight) {
    // ...
}
```

--------------------------------

### Install Laravel Echo and Pusher JS packages

Source: https://laravel.com/docs/12.x/broadcasting

Install the required npm packages for Laravel Echo and Pusher protocol support. The pusher-js package is required since Reverb utilizes the Pusher protocol for WebSocket subscriptions, channels, and messages.

```shell
npm install --save-dev laravel-echo pusher-js
```

--------------------------------

### Register multiple Laravel service container bindings using properties

Source: https://laravel.com/docs/12.x/providers

This example demonstrates how to simplify service provider registration by using the `$bindings` and `$singletons` properties. These arrays allow for declarative registration of multiple class-to-implementation bindings and singleton bindings, respectively, reducing boilerplate code within the `register` method.

```php
<?php

namespace AppProviders;

use AppContractsDowntimeNotifier;
use AppContractsServerProvider;
use AppServicesDigitalOceanServerProvider;
use AppServicesPingdomDowntimeNotifier;
use AppServicesServerToolsProvider;
use IlluminateSupportServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        ServerProvider::class => DigitalOceanServerProvider::class,
    ];

    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        DowntimeNotifier::class => PingdomDowntimeNotifier::class,
        ServerProvider::class => ServerToolsProvider::class,
    ];
}
```

--------------------------------

### Install Laravel Stream React/Vue Packages

Source: https://laravel.com/docs/12.x/responses

These commands install the necessary `@laravel/stream-react` or `@laravel/stream-vue` npm packages. These packages provide a convenient API for interacting with Laravel response and event streams in your frontend application, enabling real-time data consumption.

```shell
npm install @laravel/stream-react
```

```shell
npm install @laravel/stream-vue
```

--------------------------------

### Register Model Events Using Closures in Booted Method

Source: https://laravel.com/docs/12.x/eloquent

Register event listeners as closures within the booted method of an Eloquent model. This approach provides inline event handling without requiring separate event classes. The closure receives the model instance as a parameter when the event is dispatched.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function (User $user) {
            // ...
        });
    }
}
```

--------------------------------

### Install Laravel Homestead as a Project Dependency

Source: https://laravel.com/docs/12.x/homestead

This Composer command installs Laravel Homestead as a development dependency for your current project, allowing for a project-specific Homestead instance.

```shell
composer require laravel/homestead --dev
```

--------------------------------

### Filter Eloquent Collection with reject method

Source: https://laravel.com/docs/12.x/eloquent

Remove models from an Eloquent collection based on closure conditions. The reject method iterates through the collection and filters out models where the closure returns true. Useful for post-query filtering without additional database calls.

```php
$flights = Flight::where('destination', 'Paris')->get();

$flights = $flights->reject(function (Flight $flight) {
    return $flight->cancelled;
});
```

--------------------------------

### Install Typesense PHP SDK via Composer

Source: https://laravel.com/docs/12.x/scout

Installs the Typesense PHP SDK package required for Laravel Scout integration with Typesense search engine.

```shell
composer require typesense/typesense-php
```

--------------------------------

### Monitor Cumulative Query Time in Laravel

Source: https://laravel.com/docs/12.x/database

Use the whenQueryingForLongerThan method to invoke a callback when database queries exceed a specified time threshold (in milliseconds) during a single request. This helps identify performance bottlenecks and trigger notifications to the development team.

```php
<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Events\QueryExecuted;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::whenQueryingForLongerThan(500, function (Connection $connection, QueryExecuted $event) {
            // Notify development team...
        });
    }
}
```

--------------------------------

### Install Laravel Telescope via Composer

Source: https://laravel.com/docs/12.x/telescope

Install the Laravel Telescope package using Composer package manager and publish its assets and migrations. This creates the necessary database tables to store Telescope's monitoring data.

```shell
composer require laravel/telescope

php artisan telescope:install

php artisan migrate
```

--------------------------------

### Remove a specific anonymous Eloquent Global Scope by name

Source: https://laravel.com/docs/12.x/eloquent

This PHP code demonstrates how to remove an anonymous global scope from an Eloquent query. When an anonymous scope is defined with a string name, that name can be passed to `withoutGlobalScope` to prevent its application for a specific query.

```php
User::withoutGlobalScope('ancient')->get();
```

--------------------------------

### Preview Subscription Invoice with Single Price Change (PHP)

Source: https://laravel.com/docs/12.x/billing

This code demonstrates how to preview what an invoice will look like after a single price change for a specific subscription. The `previewInvoice` method accepts a new price ID, allowing you to show customers the impact of a plan upgrade or downgrade before applying it.

```php
$invoice = $user->subscription('default')->previewInvoice('price_yearly');
```

--------------------------------

### Recreate Test Databases for Parallel Testing in Laravel

Source: https://laravel.com/docs/12.x/testing

Use the --recreate-databases option to regenerate test databases for each parallel process. By default, test databases persist between test invocations and are suffixed with unique process tokens (e.g., your_db_test_1, your_db_test_2).

```shell
php artisan test --parallel --recreate-databases
```

--------------------------------

### Retrieve Multiple Result Sets from Stored Procedure in Laravel

Source: https://laravel.com/docs/12.x/database

Shows how to use the selectResultSets method to retrieve multiple result sets returned by a stored procedure. Useful when calling database procedures that return more than one result set.

```php
[$options, $notifications] = DB::selectResultSets(
    "CALL get_user_options_and_notifications(?)", $request->user()->id
);
```

--------------------------------

### Apply a class-based Eloquent Global Scope using an attribute

Source: https://laravel.com/docs/12.x/eloquent

This PHP code demonstrates how to associate a global scope with an Eloquent model using the `#[ScopedBy]` attribute. By placing this attribute on the model, the specified `AncientScope` will automatically be applied to all queries involving the `User` model.

```php
<?php

namespace App\Models;

use App\Models\Scopes\AncientScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy([AncientScope::class])]
class User extends Model
{
    //
}
```

--------------------------------

### Access Multiple Database Connections in Laravel

Source: https://laravel.com/docs/12.x/database

Use the DB facade's connection method to access different database connections defined in config/database.php. This allows you to execute queries against specific database connections and retrieve the underlying PDO instance for advanced operations.

```php
use Illuminate\Support\Facades\DB;

$users = DB::connection('sqlite')->select(/* ... */);
```

```php
$pdo = DB::connection()->getPdo();
```

--------------------------------

### Enable Database Backups in Homestead.yaml

Source: https://laravel.com/docs/12.x/homestead

Configure automatic database backups for MySQL and PostgreSQL when destroying the Homestead virtual machine. Requires Vagrant 2.1.0 or greater, or the vagrant-triggers plugin for older versions. Backups are exported to .backup/mysql_backup and .backup/postgres_backup directories.

```yaml
backup: true
```

--------------------------------

### Perform Model Operations Without Events

Source: https://laravel.com/docs/12.x/eloquent

Execute delete, force delete, restore, and other model operations without dispatching events using quiet methods. These methods (deleteQuietly, forceDeleteQuietly, restoreQuietly) allow silent model modifications without triggering observers.

```php
$user->deleteQuietly();
$user->forceDeleteQuietly();
$user->restoreQuietly();
```

--------------------------------

### Prevent Silent Discarding of Unfillable Attributes in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Invoke the preventSilentlyDiscardingAttributes method in the AppServiceProvider boot method to throw exceptions when attempting to fill unfillable attributes. This helps catch configuration issues during local development where attributes silently fail to update.

```php
use Illuminate\Database\Eloquent\Model;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Model::preventSilentlyDiscardingAttributes($this->app->isLocal());
}
```

--------------------------------

### Execute Unprepared DDL Statement with Implicit Commits in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates executing an unprepared DDL statement like CREATE TABLE. When used within transactions, such statements cause implicit commits that may leave Laravel unaware of the transaction state. Use with caution in transactional contexts.

```php
DB::unprepared('create table a (col varchar(1) null)');
```

--------------------------------

### Start Laravel Horizon (Shell)

Source: https://laravel.com/docs/12.x/horizon

This command starts all configured Laravel Horizon worker processes for the current environment. It initiates the Horizon daemon, which then manages the queue workers according to the `config/horizon.php` settings. This is the primary way to launch Horizon.

```shell
php artisan horizon
```

--------------------------------

### Install Laravel Sanctum Package via Artisan Command

Source: https://laravel.com/docs/12.x/sanctum

This shell command executes the `install:api` Artisan command, which is the primary method to install and set up Laravel Sanctum. It publishes necessary configuration files and migrations, preparing the application for API and SPA authentication.

```shell
php artisan install:api
```

--------------------------------

### Install Laravel Precognition Alpine Frontend Package

Source: https://laravel.com/docs/12.x/precognition

This shell command installs the `laravel-precognition-alpine` package via npm. This package provides the necessary frontend helpers for integrating Laravel Precognition with Alpine.js applications.

```shell
npm install laravel-precognition-alpine
```

--------------------------------

### Generate Homestead Vagrantfile and Configuration

Source: https://laravel.com/docs/12.x/homestead

These commands invoke Homestead's `make` utility to generate the `Vagrantfile` and `Homestead.yaml` files in your project's root, automatically configuring sites and folders.

```shell
# macOS / Linux...
php vendor/bin/homestead make
```

```shell
# Windows...
vendor\\bin\\homestead make
```

--------------------------------

### Unguard All Attributes for Mass Assignment in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Set the $guarded property to an empty array to make all attributes mass assignable. This requires careful handling when passing arrays to Eloquent's fill, create, and update methods to prevent security vulnerabilities.

```php
/**
 * The attributes that aren't mass assignable.
 *
 * @var array<string>|bool
 */
protected $guarded = [];
```

--------------------------------

### Install AWS SDK for DynamoDB Integration

Source: https://laravel.com/docs/12.x/queues

Install the AWS SDK PHP package required for Laravel to communicate with Amazon DynamoDB. This is a prerequisite for storing job batch metadata in DynamoDB instead of a relational database.

```shell
composer require aws/aws-sdk-php
```

--------------------------------

### Install Supervisor process monitor on Ubuntu

Source: https://laravel.com/docs/12.x/horizon

This command installs the Supervisor process monitoring system on Ubuntu-based Linux distributions. Supervisor is used to automatically manage and restart long-running processes like Laravel Horizon, ensuring their continuous operation in production environments.

```shell
sudo apt-get install supervisor
```

--------------------------------

### List All Linked Valet Sites

Source: https://laravel.com/docs/12.x/valet

Execute this command to display a comprehensive list of all directories currently linked to Valet. This provides a quick overview of all active local development sites.

```shell
valet links
```

--------------------------------

### Register Queueable Anonymous Event Listeners for Models

Source: https://laravel.com/docs/12.x/eloquent

Use the queueable helper function to register model event listeners that execute asynchronously in the background queue. This improves performance by deferring event handling to the application's queue system instead of executing synchronously.

```php
use function Illuminate\Events\queueable;

static::created(queueable(function (User $user) {
    // ...
}));
```

--------------------------------

### Customize Homestead Services in Homestead.yaml

Source: https://laravel.com/docs/12.x/homestead

This YAML configuration snippet demonstrates how to enable or disable specific services within your Homestead environment. Services listed under `enabled` will be started, while those under `disabled` will be stopped during provisioning.

```yaml
services:
    - enabled:
        - "postgresql"
    - disabled:
        - "mysql"
```

--------------------------------

### Retrieve Data from Redis Using Facade

Source: https://laravel.com/docs/12.x/redis

Use Laravel's Redis facade to execute Redis commands dynamically. The facade supports magic methods that map to Redis commands. In this example, the GET command retrieves a user profile from cache using a key pattern.

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => Redis::get('user:profile:'.$id)
        ]);
    }
}
```

--------------------------------

### Create a subscription with multiple products in Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

This snippet demonstrates how to initiate a new subscription for a user that includes multiple products. It accepts an array of price IDs, which will be charged on their respective billing intervals, and returns a checkout object for the billing view.

```php
use Illuminate\Http\Request;

Route::post('/user/subscribe', function (Request $request) {
    $checkout = $request->user()->subscribe([
        'price_monthly',
        'price_chat',
    ]);

    return view('billing', ['checkout' => $checkout]);
});
```

--------------------------------

### Implement ULID Primary Keys in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Use the HasUlids trait to generate ULID primary keys for Eloquent models. ULIDs are 26-character identifiers that are lexicographically sortable like ordered UUIDs but more compact, providing efficient database indexing.

```php
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasUlids;

    // ...
}

$article = Article::create(['title' => 'Traveling to Asia']);

$article->id; // "01gd4d3tgrrfqeda94gdbtdk5c"
```

--------------------------------

### Text Prompt - With Options

Source: https://laravel.com/docs/12.x/prompts

Create a text prompt with placeholder text, default value, and informational hint. Provides enhanced user experience with visual guidance and pre-filled values.

```php
$name = text(
    label: 'What is your name?',
    placeholder: 'E.g. Taylor Otwell',
    default: $user?->name,
    hint: 'This will be displayed on your profile.'
);
```

--------------------------------

### Handle API Response for Task Creation in JavaScript

Source: https://laravel.com/docs/12.x/broadcasting

This JavaScript example uses Axios to send a POST request and handle the successful response. It demonstrates a common client-side pattern where the UI is updated directly after an API call, which can lead to duplicate entries if the same event is also broadcast and listened for without using the `toOthers` method.

```js
axios.post('/task', task)
    .then((response) => {
        this.tasks.push(response.data);
    });
```

--------------------------------

### GET /oauth/authorize - Authorization Request Redirect

Source: https://laravel.com/docs/12.x/passport

Initiates the PKCE authorization flow by redirecting the user to the authorization endpoint with code challenge and other required parameters.

```APIDOC
## GET /oauth/authorize

### Description
Redirects the user to the authorization endpoint to request permission to access their data. This is the first step in the Authorization Code Grant with PKCE flow.

### Method
GET

### Endpoint
`/oauth/authorize`

### Query Parameters
- **client_id** (string) - Required - The public client ID created with `--public` option
- **redirect_uri** (string) - Required - The URI to redirect to after authorization
- **response_type** (string) - Required - Must be `code`
- **scope** (string) - Required - Space-separated list of requested scopes (e.g., `user:read orders:create`)
- **state** (string) - Required - Random string to prevent CSRF attacks
- **code_challenge** (string) - Required - Base64 URL-encoded SHA256 hash of code verifier
- **code_challenge_method** (string) - Required - Must be `S256` (SHA256)
- **prompt** (string) - Optional - Can be `none`, `consent`, or `login`

### Code Verifier and Code Challenge Generation
```php
// Generate code verifier (43-128 characters)
$codeVerifier = Str::random(128);

// Generate code challenge
$encoded = base64_encode(hash('sha256', $codeVerifier, true));
$codeChallenge = strtr(rtrim($encoded, '='), '+/', '-_');
```

### Request Example
```php
use Illuminate\Http\Request;
use Illuminate\Support\Str;

Route::get('/redirect', function (Request $request) {
    $request->session()->put('state', $state = Str::random(40));
    $request->session()->put('code_verifier', $codeVerifier = Str::random(128));

    $codeChallenge = strtr(rtrim(
        base64_encode(hash('sha256', $codeVerifier, true))
    , '='), '+/', '-_');

    $query = http_build_query([
        'client_id' => 'your-client-id',
        'redirect_uri' => 'https://third-party-app.com/callback',
        'response_type' => 'code',
        'scope' => 'user:read orders:create',
        'state' => $state,
        'code_challenge' => $codeChallenge,
        'code_challenge_method' => 'S256',
    ]);

    return redirect('https://passport-app.test/oauth/authorize?'.$query);
});
```

### Response
- User is redirected to authorization page
- After user approval, redirected to `redirect_uri` with `code` and `state` parameters

### Security Notes
- Always store `state` and `code_verifier` in session before redirecting
- Verify `state` parameter matches on callback
- Code verifier must be kept secret and not transmitted
```

--------------------------------

### Implement `Prunable` Trait for Model Pruning in PHP

Source: https://laravel.com/docs/12.x/eloquent

To enable periodic deletion of unneeded models, add the `Illuminate\Database\Eloquent\Prunable` trait to your model. Implement the `prunable()` method to return an Eloquent query builder defining which models should be deleted based on specific criteria, such as age.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Flight extends Model
{
    use Prunable;

    /**
     * Get the prunable model query.
     */
    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->minus(months: 1));
    }
}
```

--------------------------------

### Using Laravel Prompts Suggest for Autocompletion (PHP)

Source: https://laravel.com/docs/12.x/prompts

This code demonstrates the basic usage of the `suggest` function to provide auto-completion hints to the user. It takes a label and an array of possible options, allowing the user to type and receive suggestions while still being able to enter any value. This enhances the user experience by guiding input.

```php
use function Laravel\Prompts\suggest;

$name = suggest('What is your name?', ['Taylor', 'Dayle']);
```

--------------------------------

### POST /register

Source: https://laravel.com/docs/12.x/fortify

Register a new user account. This endpoint creates a new user with the provided credentials and automatically logs them in upon successful registration.

```APIDOC
## POST /register

### Description
Register a new user account with the application. Validates user input and creates a new user record. On successful registration, the user is authenticated and redirected.

### Method
POST

### Endpoint
/register

### Request Body
- **name** (string) - Required - The user's full name
- **email** (string) - Required - The user's email address or username (field name matches fortify config)
- **password** (string) - Required - The user's password
- **password_confirmation** (string) - Required - Confirmation of the password

### Request Example
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123"
}

### Response
#### Success Response (201 - XHR Request)
User account created successfully. Returns 201 status code.

#### Success Response (Redirect - Standard Request)
User is redirected to the URI configured via the `home` configuration option.

#### Error Response (422)
- **errors** (object) - Validation errors for invalid input

#### Error Response Example
{
  "errors": {
    "email": ["The email has already been taken."],
    "password": ["The password must be at least 8 characters."]
  }
}
```

--------------------------------

### Add Custom Description to Similarity Search Tool (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This example illustrates how to provide a custom, human-readable description for the `SimilaritySearch` tool using the `withDescription` method. A clear description helps the AI agent understand the tool's purpose and when to use it effectively, improving agent decision-making.

```php
SimilaritySearch::usingModel(Document::class, 'embedding')
    ->withDescription('Search the knowledge base for relevant articles.'),
```

--------------------------------

### Apply Redis-Optimized Rate Limiting Middleware to Laravel Jobs in PHP

Source: https://laravel.com/docs/12.x/queues

This PHP example shows how to use the `RateLimitedWithRedis` middleware for job rate limiting. This middleware is optimized for Redis and offers better performance. It is more efficient than the basic `RateLimited` middleware when Redis is used as the queue driver.

```php
use IlluminateQueueMiddlewareRateLimitedWithRedis;

public function middleware(): array
{
    return [new RateLimitedWithRedis('backups')];
}
```

--------------------------------

### Retrieve Price Previews for Specific Country with Laravel Cashier Paddle (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP example shows how to fetch price previews for given price IDs, explicitly specifying a country code and postal code. This allows for accurate price calculation based on a particular geographic location, overriding the default IP-based detection.

```php
use Laravel\Paddle\Cashier;

$prices = Cashier::previewPrices(['pri_123', 'pri_456'], ['address' => [
    'country_code' => 'BE',
    'postal_code' => '1234',
]]);
```

--------------------------------

### Access Process IDs from a Laravel Concurrent Process Pool (PHP)

Source: https://laravel.com/docs/12.x/processes

This example demonstrates how to retrieve the underlying operating system process IDs (PIDs) for all running processes within a Laravel process pool. It uses the `running()` method to get a collection of processes and then `each->id()` to extract their PIDs.

```php
$processIds = $pool->running()->each->id();
```

--------------------------------

### Retrieve Original Uploaded File Name and Extension in Laravel (Unsafe)

Source: https://laravel.com/docs/12.x/filesystem

This example shows how to get the original filename and extension of an uploaded file using `getClientOriginalName()` and `getClientOriginalExtension()`. It's important to note that these methods are considered unsafe as the client-provided values can be tampered with by malicious users.

```php
$file = $request->file('avatar');

$name = $file->getClientOriginalName();
$extension = $file->getClientOriginalExtension();
```

--------------------------------

### Restore Multiple Soft Deleted Eloquent Models via Query in PHP

Source: https://laravel.com/docs/12.x/eloquent

You can restore multiple soft deleted models by chaining the `restore()` method onto an Eloquent query. Use `withTrashed()` to include soft-deleted records in the query before applying conditions and restoring them.

```php
Flight::withTrashed()
    ->where('airline_id', 1)
    ->restore();
```

--------------------------------

### Check User Subscription Status (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

These examples demonstrate how to verify if a user has an active subscription using the `subscribed` method. It can check for any active subscription or a specific subscription type, returning `true` even if the user is in a trial period.

```php
if ($user->subscribed()) {
    // ...
}
```

```php
if ($user->subscribed('default')) {
    // ...
}
```

--------------------------------

### Start Queue Worker with Verbose Output - Laravel Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue worker with verbose output enabled. Includes processed job IDs, connection names, and queue names in the command output for better visibility into worker operations.

```shell
php artisan queue:work -v
```

--------------------------------

### Running Laravel Queue Worker with Priority (Shell)

Source: https://laravel.com/docs/12.x/queues

This shell command shows how to start a Laravel queue worker that processes jobs from specific queues in a prioritized order. Jobs from the 'high' queue will be processed before jobs from the 'default' queue.

```shell
php artisan queue:work --queue=high,default
```

--------------------------------

### Configure Laravel Horizon with Multiple Supervisors for Queue-Specific Simple Balancing (PHP)

Source: https://laravel.com/docs/12.x/horizon

This example demonstrates how to use multiple supervisors to achieve fine-grained control over process allocation for individual queues. Each supervisor can be configured with its own set of queues and a specific number of processes. This allows for dedicated process pools for different queue priorities or workloads.

```php
'environments' => [
    'production' => [
        'supervisor-1' => [
            // ...
            'queue' => ['default'],
            'balance' => 'simple',
            'processes' => 10,
        ],
        'supervisor-notifications' => [
            // ...
            'queue' => ['notifications'],
            'balance' => 'simple',
            'processes' => 2,
        ],
    ],
],
```

--------------------------------

### Display Invoice Information in Blade Template (Blade)

Source: https://laravel.com/docs/12.x/billing

This Blade template example demonstrates how to iterate through a collection of invoices and display relevant information in a table format. It shows how to access invoice date, total, and generate a download link using invoice properties.

```blade
<table>
    @foreach ($invoices as $invoice)
        <tr>
            <td>{{ $invoice->date()->toFormattedDateString() }}</td>
            <td>{{ $invoice->total() }}</td>
            <td><a href="/user/invoice/{{ $invoice->id }}">Download</a></td>
        </tr>
    @endforeach
</table>
```

--------------------------------

### Start Queue Listener - Laravel Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue listener that automatically reloads code changes without manual restart. Less efficient than queue:work but useful during development when code changes frequently.

```shell
php artisan queue:listen
```

--------------------------------

### Enable Laravel Dusk WebDriver Feature

Source: https://laravel.com/docs/12.x/homestead

Enable browser testing with Laravel Dusk by activating the webdriver feature in Homestead configuration. Execute vagrant reload --provision after enabling to install and configure the WebDriver.

```yaml
features:
    - webdriver: true
```

--------------------------------

### Get a limited slice of a Laravel Collection using `slice(offset, length)`

Source: https://laravel.com/docs/12.x/collections

The `slice` method can also extract a portion of the collection with a specified starting index and a maximum length. It returns a new collection containing the limited slice, preserving original keys.

```php
$slice = $collection->slice(4, 2);

$slice->all();

// [5, 6]
```

--------------------------------

### Prompt Agent with Direct Instantiation and Make Method

Source: https://laravel.com/docs/12.x/ai-sdk

Prompt an agent using either direct instantiation or the make method for dependency injection. The make method resolves the agent from the container automatically.

```php
$response = (new SalesCoach)
    ->prompt('Analyze this sales transcript...');

$response = SalesCoach::make()
    ->prompt('Analyze this sales transcript...');

return (string) $response;
```

--------------------------------

### whenStartsWith - Conditional Transformation on Prefix Match

Source: https://laravel.com/docs/12.x/strings

Invokes a closure if the string starts with a given sub-string. The closure receives the fluent string instance for conditional transformation. Useful for prefix-based string manipulation.

```php
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

$string = Str::of('disney world')->whenStartsWith('disney', function (Stringable $string) {
    return $string->title();
});

// 'Disney World'
```

--------------------------------

### Monitor Laravel Database Connections with Artisan `db:monitor` command

Source: https://laravel.com/docs/12.x/database

The `db:monitor` command allows Laravel to dispatch a `DatabaseBusy` event if the number of open database connections exceeds a specified threshold. This command should be scheduled to run periodically and can monitor multiple database connections, enabling proactive alerts for high connection usage.

```shell
php artisan db:monitor --databases=mysql,pgsql --max=100
```

--------------------------------

### GET /photos/create

Source: https://laravel.com/docs/12.x/controllers

Display the form for creating a new photo resource. This is the create action that returns the creation form view.

```APIDOC
## GET /photos/create

### Description
Display the form for creating a new photo resource.

### Method
GET

### Endpoint
/photos/create

### Route Name
photos.create

### Controller Action
PhotoController@create

### Response
#### Success Response (200)
- **view** (html) - Creation form view
```

--------------------------------

### Execute Laravel Job Batches Sequentially within a Job Chain

Source: https://laravel.com/docs/12.x/queues

Illustrates how to integrate job batches into a sequential job chain, allowing for complex multi-step workflows. This example shows flushing a cache, then processing a batch of podcast releases, followed by a batch of notification sends.

```php
use App\Jobs\FlushPodcastCache;
use App\Jobs\ReleasePodcast;
use App\Jobs\SendPodcastReleaseNotification;
use Illuminate\Support\Facades\Bus;

Bus::chain([
    new FlushPodcastCache,
    Bus::batch([
        new ReleasePodcast(1),
        new ReleasePodcast(2),
    ]),
    Bus::batch([
        new SendPodcastReleaseNotification(1),
        new SendPodcastReleaseNotification(2),
    ]),
])->dispatch();
```

--------------------------------

### Install Laravel Envoy using Composer

Source: https://laravel.com/docs/12.x/envoy

Instructions to install the Laravel Envoy package as a development dependency using Composer. This makes the Envoy binary available in the `vendor/bin` directory.

```shell
composer require laravel/envoy --dev
```

--------------------------------

### Create Subscription with Trial Until DateTime

Source: https://laravel.com/docs/12.x/billing

Creates a subscription with a trial period ending at a specific DateTime instance. The trialUntil method accepts a Carbon date instance to specify the exact trial end date, providing more precise control over trial periods compared to trialDays.

```php
use Illuminate\Support\Carbon;

$user->newSubscription('default', 'price_monthly')
    ->trialUntil(Carbon::now()->plus(days: 10))
    ->create($paymentMethod);
```

--------------------------------

### Save Model Without Dispatching Events

Source: https://laravel.com/docs/12.x/eloquent

Save a model without triggering events using the saveQuietly method. This method performs the save operation silently without dispatching any model events, useful when you need to persist changes without triggering observers.

```php
$user = User::findOrFail(1);

$user->name = 'Victoria Faith';

$user->saveQuietly();
```

--------------------------------

### Configure Xdebug Autostart in Homestead

Source: https://laravel.com/docs/12.x/homestead

Modify the Xdebug configuration file to automatically start debugging for functional tests without requiring custom headers or cookies. This configuration sets the client host, debug mode, and autostart behavior for PHP-FPM in Homestead.

```ini
; If Homestead.yaml contains a different subnet for the IP address, this address may be different...
xdebug.client_host = 192.168.10.1
xdebug.mode = debug
xdebug.start_with_request = yes
```

--------------------------------

### Create Livewire Counter Component in PHP

Source: https://laravel.com/docs/12.x/frontend

Demonstrates a basic Livewire component that manages a counter state with an increment method. The component renders a button with wire:click directive to trigger backend methods and displays the current count using Blade expressions. This example shows how Livewire bridges frontend interactions with backend PHP logic.

```php
<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
};
?>

<div>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
```

--------------------------------

### Run and Wait for Concurrent Processes Immediately in Laravel (PHP)

Source: https://laravel.com/docs/12.x/processes

This example uses the `concurrently` method to simplify the execution and immediate waiting for a pool of asynchronous processes. It provides a more expressive syntax, especially when combined with PHP's array destructuring, to directly assign the results of each process to variables.

```php
[$first, $second, $third] = Process::concurrently(function (Pool $pool) {
    $pool->path(__DIR__)->command('ls -la');
    $pool->path(app_path())->command('ls -la');
    $pool->path(storage_path())->command('ls -la');
});

echo $first->output();
```

--------------------------------

### Install Dompdf Library via Composer

Source: https://laravel.com/docs/12.x/billing

Install the Dompdf library using Composer, which is the default invoice renderer for Laravel Cashier. This is a prerequisite for generating invoice PDFs.

```shell
composer require dompdf/dompdf
```

--------------------------------

### Specify Specific Models for Pruning with Artisan Command in Laravel

Source: https://laravel.com/docs/12.x/eloquent

If your prunable models are not in the default `app/Models` directory or you want to prune specific models, use the `--model` option with the `model:prune` Artisan command. Provide an array of model class names to target them explicitly.

```php
Schedule::command('model:prune', [
    '--model' => [Address::class, Flight::class],
])->daily();
```

--------------------------------

### Install PHP via Homebrew on macOS

Source: https://laravel.com/docs/12.x/valet

This command uses Homebrew to install PHP on your macOS system. PHP is a fundamental prerequisite for Laravel Valet and most web development projects built with PHP frameworks.

```shell
brew install php
```

--------------------------------

### Update and start Supervisor managed processes

Source: https://laravel.com/docs/12.x/horizon

These commands are used to apply new Supervisor configurations and start the monitored processes. `reread` detects changes, `update` applies them, and `start horizon` specifically initiates the Horizon process as defined in its Supervisor configuration.

```shell
sudo supervisorctl reread

sudo supervisorctl update

sudo supervisorctl start horizon
```

--------------------------------

### Install Meilisearch PHP SDK via Composer

Source: https://laravel.com/docs/12.x/scout

Installs the Meilisearch PHP SDK and HTTP factory package required for Laravel Scout integration. This command adds the necessary dependencies to your project's composer.json file.

```shell
composer require meilisearch/meilisearch-php http-interop/http-factory-guzzle
```

--------------------------------

### Configure Shared Folder with Rsync Options in Homestead

Source: https://laravel.com/docs/12.x/homestead

This YAML configuration shows how to use 'rsync' as the synced folder type and pass specific options for advanced control. The 'options' key allows you to define 'rsync__args' for custom command-line arguments and 'rsync__exclude' for patterns to ignore during synchronization, enhancing flexibility and performance.

```yaml
folders:
    - map: ~/code/project1
      to: /home/vagrant/project1
      type: "rsync"
      options:
          rsync__args: ["--verbose", "--archive", "--delete", "-zz"]
          rsync__exclude: ["node_modules"]
```

--------------------------------

### Configure Optional Features in Homestead.yaml

Source: https://laravel.com/docs/12.x/homestead

This YAML configuration block demonstrates how to enable various optional software features within your Homestead virtual machine. Features like Blackfire, Elasticsearch, and EventStore can be configured with specific parameters, while others are enabled with a simple boolean 'true' value. This file is central to customizing your Homestead environment.

```yaml
features:
    - blackfire:
        server_id: "server_id"
        server_token: "server_value"
        client_id: "client_id"
        client_token: "client_value"
    - cassandra: true
    - chronograf: true
    - couchdb: true
    - crystal: true
    - dragonflydb: true
    - elasticsearch:
        version: 7.9.0
    - eventstore: true
        version: 21.2.0
    - flyway: true
    - gearman: true
    - golang: true
    - grafana: true
    - influxdb: true
    - logstash: true
    - mariadb: true
    - meilisearch: true
    - minio: true
    - mongodb: true
    - neo4j: true
    - ohmyzsh: true
    - openresty: true
    - pm2: true
    - python: true
    - r-base: true
    - rabbitmq: true
    - rustc: true
    - rvm: true
    - solr: true
    - timescaledb: true
    - trader: true
    - webdriver: true
```

--------------------------------

### Map Eloquent Model Events to Event Classes

Source: https://laravel.com/docs/12.x/eloquent

Define a $dispatchesEvents property on an Eloquent model to map lifecycle events to custom event classes. Each event class receives the affected model instance via its constructor. This approach allows centralized event handling for model operations like saving and deletion.

```php
<?php

namespace App\Models;

use App\Events\UserDeleted;
use App\Events\UserSaved;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The event map for the model.
     *
     * @var array<string, string>
     */
    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
    ];
}
```

--------------------------------

### View help screen for a specific Artisan command (Shell)

Source: https://laravel.com/docs/12.x/artisan

This command shows detailed information about a particular Artisan command, including its arguments, options, and a brief description of its functionality. Replace `migrate` with the desired command name to get specific help.

```shell
php artisan help migrate
```

--------------------------------

### Include Soft Deleted Models in Eloquent Relationship Queries in PHP

Source: https://laravel.com/docs/12.x/eloquent

When querying related models, you can also use `withTrashed()` to include soft-deleted related records in the results. This ensures that your relationship queries retrieve all associated models, regardless of their soft delete status.

```php
$flight->history()->withTrashed()->get();
```

--------------------------------

### Compare Laravel Facade and Helper Function for View Rendering

Source: https://laravel.com/docs/12.x/facades

This snippet demonstrates the functional equivalence between using a Laravel facade (`Illuminate\Support\Facades\View::make`) and its corresponding helper function (`view()`) to render a view. It highlights that both achieve the same outcome for common tasks, offering developers a choice based on preference.

```php
return Illuminate\Support\Facades\View::make('profile');

return view('profile');
```

--------------------------------

### Lazy load and update by ID with lazyById method

Source: https://laravel.com/docs/12.x/eloquent

Process large datasets with lazy loading while updating records by ID. The lazyById method retrieves models with ID greater than the last model in the previous chunk, preventing inconsistent results when filtering and updating simultaneously.

```php
Flight::where('departed', true)
    ->lazyById(200, column: 'id')
    ->each->update(['departed' => false]);
```

--------------------------------

### Implement Custom Cache Store Contract in PHP

Source: https://laravel.com/docs/12.x/cache

Creates a custom cache driver by implementing the Illuminate\Contracts\Cache\Store contract. This example shows a MongoDB cache implementation with all required methods: get, many, put, putMany, increment, decrement, forever, forget, flush, and getPrefix. Each method must be implemented to interact with your chosen storage backend.

```php
<?php

namespace App\Extensions;

use Illuminate\Contracts\Cache\Store;

class MongoStore implements Store
{
    public function get($key) {}
    public function many(array $keys) {}
    public function put($key, $value, $seconds) {}
    public function putMany(array $values, $seconds) {}
    public function increment($key, $value = 1) {}
    public function decrement($key, $value = 1) {}
    public function forever($key, $value) {}
    public function forget($key) {}
    public function flush() {}
    public function getPrefix() {}
}
```

--------------------------------

### Install Laravel AI SDK via Composer

Source: https://laravel.com/docs/12.x/ai-sdk

Install the Laravel AI SDK package using Composer package manager. This is the first step to integrate AI capabilities into your Laravel application.

```shell
composer require laravel/ai
```

--------------------------------

### Install Laravel Pail for Log Tailing

Source: https://laravel.com/docs/12.x/logging

Install the Laravel Pail package using Composer. Pail is a development dependency that allows real-time tailing of application logs from the command line, supporting various log drivers.

```shell
composer require --dev laravel/pail
```

--------------------------------

### Create Laravel Uri instances from strings, routes, or actions

Source: https://laravel.com/docs/12.x/helpers

This snippet demonstrates how to initialize `Uri` objects using static methods. You can create instances from a simple string, named routes, signed routes, temporary signed routes, controller actions, or directly from the current request's URL.

```php
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvokableController;
use Illuminate\Support\Uri;

// Generate a URI instance from the given string...
$uri = Uri::of('https://example.com/path');

// Generate URI instances to paths, named routes, or controller actions...
$uri = Uri::to('/dashboard');
$uri = Uri::route('users.show', ['user' => 1]);
$uri = Uri::signedRoute('users.show', ['user' => 1]);
$uri = Uri::temporarySignedRoute('user.index', now()->plus(minutes: 5));
$uri = Uri::action([UserController::class, 'index']);
$uri = Uri::action(InvokableController::class);

// Generate a URI instance from the current request URL...
$uri = $request->uri();
```

--------------------------------

### Render the First Available Laravel View from a List

Source: https://laravel.com/docs/12.x/views

This PHP example uses the `View` facade's `first` method to render the first view that exists from a given array of view names. This is useful for providing customizable or fallback views.

```php
use Illuminate\Support\Facades\View;

return View::first(['custom.admin', 'admin'], $data);
```

--------------------------------

### Implement UUID Primary Keys in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Use the HasUuids trait to automatically generate UUID primary keys for Eloquent models instead of auto-incrementing integers. UUIDs are 36-character universally unique identifiers that are lexicographically sortable for efficient database indexing.

```php
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasUuids;

    // ...
}

$article = Article::create(['title' => 'Traveling to Europe']);

$article->id; // "8f8e8478-9035-4d23-b9a7-62f4d2612ce5"
```

--------------------------------

### Example Laravel MCP Server Class Definition

Source: https://laravel.com/docs/12.x/mcp

This PHP code defines an example `WeatherServer` class, extending `Laravel\Mcp\Server`. It illustrates how to use attributes like `#[Name]`, `#[Version]`, and `#[Instructions]` for server configuration, and how to declare arrays to register associated tools, resources, and prompts.

```php
<?php

namespace App\Mcp\Servers;

use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;
use Laravel\Mcp\Server;

#[Name('Weather Server')]
#[Version('1.0.0')]
#[Instructions('This server provides weather information and forecasts.')]
class WeatherServer extends Server
{
    /**
     * The tools registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Tool>>
     */
    protected array $tools = [
        // GetCurrentWeatherTool::class,
    ];

    /**
     * The resources registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Resource>>
     */
    protected array $resources = [
        // WeatherGuidelinesResource::class,
    ];

    /**
     * The prompts registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>
     */
    protected array $prompts = [
        // DescribeWeatherPrompt::class,
    ];
}
```

--------------------------------

### Customizing Laravel Prompts Suggest with Placeholder, Default, and Hint (PHP)

Source: https://laravel.com/docs/12.x/prompts

This snippet illustrates how to enhance the `suggest` input with additional UI elements for better user guidance. It demonstrates setting a `placeholder` text, providing a `default` pre-filled value, and displaying an informational `hint`. These options improve clarity and usability for the end-user.

```php
$name = suggest(
    label: 'What is your name?',
    options: ['Taylor', 'Dayle'],
    placeholder: 'E.g. Taylor',
    default: $user?->name,
    hint: 'This will be displayed on your profile.'
);
```

--------------------------------

### Check Subscription to Specific Price ID (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This example demonstrates how to verify if a user's subscription is tied to a particular Paddle price ID using the `subscribedToPrice` method. It allows checking if a specific subscription type is active for a given price.

```php
if ($user->subscribedToPrice($monthly = 'pri_123', 'default')) {
    // ...
}
```

--------------------------------

### List All Configured Valet Proxies

Source: https://laravel.com/docs/12.x/valet

This snippet demonstrates the `valet proxies` command, which provides a list of all currently configured site proxy settings within Laravel Valet. It helps in reviewing and managing active proxy configurations.

```shell
valet proxies
```

--------------------------------

### Chunk results by ID with chunkById method

Source: https://laravel.com/docs/12.x/eloquent

Process large result sets while updating records by chunking based on ID column. The chunkById method prevents inconsistent results when filtering and updating simultaneously by retrieving models with ID greater than the last model in the previous chunk.

```php
Flight::where('departed', true)
    ->chunkById(200, function (Collection $flights) {
        $flights->each->update(['departed' => false]);
    }, column: 'id');
```

--------------------------------

### Configure Multiple Applications in Reverb

Source: https://laravel.com/docs/12.x/reverb

Set up multiple applications to be served by a single Reverb installation. Define multiple app configurations in the config/reverb.php file to provide WebSocket connectivity for different applications.

```php
'apps' => [
    [
        'app_id' => 'my-app-one',
        // ...
    ],
    [
        'app_id' => 'my-app-two',
        // ...
    ],
],
```

--------------------------------

### Fake Specific Laravel Processes with Custom Results

Source: https://laravel.com/docs/12.x/processes

This PHP example shows how to fake different process commands with distinct results by passing an array to `Process::fake()`. It uses command patterns with wildcards and `Process::result()` to define specific output for commands like 'cat' and 'ls', while other unfaked commands would still execute, allowing fine-grained control over process mocking.

```php
Process::fake([
    'cat *' => Process::result(
        output: 'Test "cat" output',
    ),
    'ls *' => Process::result(
        output: 'Test "ls" output',
    ),
]);
```

--------------------------------

### Create Paddle Subscription Checkout Session (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This snippet demonstrates how to initiate a Paddle subscription checkout session for a billable model. It uses the `subscribe` method to specify the Paddle price ID, an internal subscription type, and a return URL after checkout completion.

```php
use Illuminate\Http\Request;

Route::get('/user/subscribe', function (Request $request) {
    $checkout = $request->user()->subscribe($premium = 'pri_123', 'default')
        ->returnTo(route('home'));

    return view('billing', ['checkout' => $checkout]);
});
```

--------------------------------

### Enable Minio in Homestead Configuration

Source: https://laravel.com/docs/12.x/homestead

Install and configure Minio object storage server with Amazon S3 compatible API. Add minio: true to the features section of Homestead.yaml. Minio runs on port 9600 with default credentials homestead/secretkey.

```yaml
minio: true
```

--------------------------------

### Configure Axios for Laravel Precognition Client (JavaScript)

Source: https://laravel.com/docs/12.x/precognition

These examples demonstrate how to customize the Axios HTTP client used by Laravel Precognition. The first shows how to add common headers to the client's default Axios instance. The second illustrates how to instruct Precognition to use an existing, pre-configured Axios instance from your application.

```js
import { client } from 'laravel-precognition-vue';

client.axios().defaults.headers.common['Authorization'] = authToken;
```

```js
import Axios from 'axios';
import { client } from 'laravel-precognition-vue';

window.axios = Axios.create()
window.axios.defaults.headers.common['Authorization'] = authToken;

client.use(window.axios)
```

--------------------------------

### Add Custom Routes with `then` Closure in Laravel (PHP)

Source: https://laravel.com/docs/12.x/routing

This example demonstrates how to extend Laravel's default routing by adding additional route files or custom route groups. The `then` closure within the `withRouting` method allows for registering routes, such as webhooks, without completely overriding the framework's default setup.

```php
use Illuminate\Support\Facades\Route;

->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
    then: function () {
        Route::middleware('api')
            ->prefix('webhooks')
            ->name('webhooks.')
            ->group(base_path('routes/webhooks.php'));
    },
)
```

--------------------------------

### Install Flysystem Read-Only Package with Composer

Source: https://laravel.com/docs/12.x/filesystem

This Composer command installs the `league/flysystem-read-only` package, which is required to enable the `read-only` configuration option for filesystem disks in Laravel. This allows restricting write operations on specific storage disks.

```shell
composer require league/flysystem-read-only "^3.0"
```

--------------------------------

### Create Subscription for User on Generic Trial

Source: https://laravel.com/docs/12.x/billing

Converts a user from a generic trial to an active subscription by calling newSubscription with payment method information. This transitions the user from a trial-only state to an actual billable subscription.

```php
$user = User::find(1);

$user->newSubscription('default', 'price_monthly')->create($paymentMethod);
```

--------------------------------

### Install Laravel Precognition Vue Package

Source: https://laravel.com/docs/12.x/precognition

Install the Laravel Precognition frontend helpers for Vue via NPM. This package provides the useForm composable and validation utilities for Vue applications.

```shell
npm install laravel-precognition-vue
```

--------------------------------

### Install Laravel Precognition React Package

Source: https://laravel.com/docs/12.x/precognition

Install the laravel-precognition-react NPM package to access frontend helpers for React applications. This provides the useForm hook and validation utilities.

```shell
npm install laravel-precognition-react
```

--------------------------------

### Remove multiple or all Eloquent Global Scopes

Source: https://laravel.com/docs/12.x/eloquent

This PHP code provides various methods for removing multiple global scopes from an Eloquent query. You can remove all scopes, a specific array of scopes, or all scopes except for a given list, offering flexible control over query constraints.

```php
// Remove all of the global scopes...
User::withoutGlobalScopes()->get();

// Remove some of the global scopes...
User::withoutGlobalScopes([
    FirstScope::class, SecondScope::class
])->get();

// Remove all global scopes except the given ones...
User::withoutGlobalScopesExcept([
    SecondScope::class,
])->get();
```

--------------------------------

### Display Application Configuration Overview with Artisan

Source: https://laravel.com/docs/12.x/configuration

Use the `about` Artisan command to display an overview of your Laravel application's configuration, drivers, and environment. You can filter output to specific sections using the `--only` option to focus on particular configuration areas.

```shell
php artisan about
```

```shell
php artisan about --only=environment
```

--------------------------------

### Install AWS S3 Flysystem Package with Composer

Source: https://laravel.com/docs/12.x/filesystem

This command installs the necessary Flysystem S3 package for integrating Amazon S3 storage into a Laravel application. It uses Composer to pull the `league/flysystem-aws-s3-v3` dependency along with all its required sub-dependencies.

```shell
composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies
```

--------------------------------

### Implement `MassPrunable` Trait for Efficient Model Pruning in PHP

Source: https://laravel.com/docs/12.x/eloquent

For highly efficient model deletion, use the `Illuminate\Database\Eloquent\MassPrunable` trait. This trait performs mass-deletion queries, bypassing model retrieval and events, making it faster for large datasets. Implement the `prunable()` method similarly to the `Prunable` trait.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassPrunable;

class Flight extends Model
{
    use MassPrunable;

    /**
     * Get the prunable model query.
     */
    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->minus(months: 1));
    }
}
```

--------------------------------

### Install Laravel Cashier for Stripe via Composer

Source: https://laravel.com/docs/12.x/billing

This command installs the Laravel Cashier package, which provides an expressive interface for Stripe's subscription billing services, into your Laravel application using Composer.

```shell
composer require laravel/cashier
```

--------------------------------

### Iterating Eloquent Models with `cursor` in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `cursor` method allows iterating through large numbers of Eloquent models with reduced memory consumption. It executes a single database query but hydrates models one by one using PHP generators, keeping only one model in memory at a time. It does not support eager loading relationships.

```php
use App\Models\Flight;

foreach (Flight::where('destination', 'Zurich')->cursor() as $flight) {
    // ...
}
```

--------------------------------

### Install Laravel Scout via Composer

Source: https://laravel.com/docs/12.x/scout

Install the Laravel Scout package using Composer package manager. This is the first step to add full-text search capabilities to your Laravel application.

```shell
composer require laravel/scout
```

--------------------------------

### Define Custom Table Name in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Specify a custom database table name for an Eloquent model by defining the protected $table property. By default, Eloquent uses the snake_case plural form of the model class name, but this property allows you to override that convention.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'my_flights';
}
```

--------------------------------

### Ordering Eloquent Results by Subquery in PHP

Source: https://laravel.com/docs/12.x/eloquent

The `orderBy` function in Eloquent also supports subqueries, enabling complex sorting logic based on related data. This snippet demonstrates sorting destinations by the arrival time of their last flight using a subquery, all within a single database query.

```php
return Destination::orderByDesc(
    Flight::select('arrived_at')
        ->whereColumn('destination_id', 'destinations.id')
        ->orderByDesc('arrived_at')
        ->limit(1)
)->get();
```

--------------------------------

### Define Custom Keyboard Macros in Dusk Service Provider

Source: https://laravel.com/docs/12.x/dusk

Create reusable keyboard interactions by defining macros in a service provider's boot method. The example demonstrates copy and paste macros that handle platform-specific key combinations (Meta for Mac, Control for others). Macros are executed when called as methods on a Keyboard instance.

```php
<?php

namespace App\Providers;

use Facebook\WebDriver\WebDriverKeys;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\Keyboard;
use Laravel\Dusk\OperatingSystem;

class DuskServiceProvider extends ServiceProvider
{
    /**
     * Register Dusk's browser macros.
     */
    public function boot(): void
    {
        Keyboard::macro('copy', function (string $element = null) {
            $this->type([
                OperatingSystem::onMac() ? WebDriverKeys::META : WebDriverKeys::CONTROL, 'c',
            ]);

            return $this;
        });

        Keyboard::macro('paste', function (string $element = null) {
            $this->type([
                OperatingSystem::onMac() ? WebDriverKeys::META : WebDriverKeys::CONTROL, 'v',
            ]);

            return $this;
        });
    }
}
```

--------------------------------

### Process large result sets with chunk method

Source: https://laravel.com/docs/12.x/eloquent

Retrieve and process large numbers of Eloquent models in manageable chunks to reduce memory usage. The chunk method executes database queries for each subset of records, passing them to a closure for processing. First argument specifies chunk size, second argument is the callback function.

```php
use App\Models\Flight;
use Illuminate\Database\Eloquent\Collection;

Flight::chunk(200, function (Collection $flights) {
    foreach ($flights as $flight) {
        // ...
    }
});
```

--------------------------------

### Manually Manage Laravel's Default Global Middleware Stack

Source: https://laravel.com/docs/12.x/middleware

This example shows how to manually define Laravel's default global middleware stack using the `use` method within the `withMiddleware` closure. This allows for fine-grained control, enabling developers to add, remove, or reorder default middleware components as needed for their application.

```php
->withMiddleware(function (Middleware $middleware): void {
    $middleware->use([
        \Illuminate\Foundation\Http\Middleware\InvokeDeferredCallbacks::class,
        // \Illuminate\Http\Middleware\TrustHosts::class,
        \Illuminate\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Http\Middleware\ValidatePostSize::class,
        \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ]);
})
```

--------------------------------

### Maximize the browser window using Dusk's maximize method

Source: https://laravel.com/docs/12.x/dusk

Illustrates how to maximize the browser window to fill the entire screen using the `maximize` method. This is a convenient way to ensure the browser uses all available screen real estate.

```php
$browser->maximize();
```

--------------------------------

### Exclude Specific Models from Pruning with Artisan Command in Laravel

Source: https://laravel.com/docs/12.x/eloquent

To prevent certain models from being pruned while still pruning all other detected models, use the `--except` option with the `model:prune` Artisan command. Pass an array of model class names to exclude them from the pruning process.

```php
Schedule::command('model:prune', [
    '--except' => [Address::class, Flight::class],
])->daily();
```

--------------------------------

### Prepend and Append Content to Files using Laravel Storage (PHP)

Source: https://laravel.com/docs/12.x/filesystem

These examples illustrate how to add content to the beginning or end of an existing file using the `prepend` and `append` methods provided by Laravel's Storage facade. This is useful for logging or modifying text-based files.

```php
Storage::prepend('file.log', 'Prepended Text');

Storage::append('file.log', 'Appended Text');
```

--------------------------------

### Publishing All Files from a Specific Laravel Package Provider via CLI

Source: https://laravel.com/docs/12.x/packages

This shell command shows how to publish all publishable files defined by a specific package's service provider. By using the `--provider` flag with the fully qualified class name of the service provider, users can publish all assets (regardless of their individual tags) associated with that package.

```shell
php artisan vendor:publish --provider="Your\Package\ServiceProvider"
```

--------------------------------

### Handle Laravel `DatabaseBusy` event for connection monitoring notifications

Source: https://laravel.com/docs/12.x/database

This PHP code snippet demonstrates how to listen for the `DatabaseBusy` event, which is dispatched by the `db:monitor` command. By implementing an event listener in your `AppServiceProvider`, you can send notifications to alert administrators when database connections approach their maximum limit, ensuring timely intervention.

```php
use App\Notifications\DatabaseApproachingMaxConnections;
use Illuminate\Database\Events\DatabaseBusy;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Event::listen(function (DatabaseBusy $event) {
        Notification::route('mail', 'dev@example.com')
            ->notify(new DatabaseApproachingMaxConnections(
                $event->connectionName,
                $event->connections
            ));
    });
}
```

--------------------------------

### Manage ChromeDriver Installations via Artisan

Source: https://laravel.com/docs/12.x/dusk

Use the dusk:chrome-driver command to install or update ChromeDriver versions independently. Supports installing specific versions for your OS or all supported operating systems.

```shell
# Install the latest version of ChromeDriver for your OS...
php artisan dusk:chrome-driver

# Install a given version of ChromeDriver for your OS...
php artisan dusk:chrome-driver 86

# Install a given version of ChromeDriver for all supported OSs...
php artisan dusk:chrome-driver --all
```

--------------------------------

### Install spatie/fork package for Laravel Concurrency

Source: https://laravel.com/docs/12.x/concurrency

Before utilizing the 'fork' driver for enhanced concurrency performance, the `spatie/fork` package must be installed. This command adds the necessary dependency to your Laravel project, enabling the use of process forking for concurrent task execution.

```shell
composer require spatie/fork
```

--------------------------------

### Making a Basic GET Request with Laravel HTTP Client

Source: https://laravel.com/docs/12.x/http-client

This snippet demonstrates how to perform a simple GET request to a specified URL using Laravel's `Http` facade. It imports the `Http` facade and then calls the static `get` method with the target URL, returning a response object.

```php
use Illuminate\Support\Facades\Http;

$response = Http::get('http://example.com');
```

--------------------------------

### Define Custom Primary Key Column in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Override the default primary key column name by defining the protected $primaryKey property on your model. By default, Eloquent assumes the primary key column is named 'id', but this property allows you to specify a different column.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'flight_id';
}
```

--------------------------------

### Verify Card and Retrieve Payment Method Identifier

Source: https://laravel.com/docs/12.x/billing

Confirms card setup with Stripe using the Setup Intent client secret and card element. Handles the asynchronous response to retrieve the payment method identifier or error message. The resulting setupIntent.payment_method can be used to create subscriptions or update default payment methods in Laravel.

```javascript
const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;

cardButton.addEventListener('click', async (e) => {
    const { setupIntent, error } = await stripe.confirmCardSetup(
        clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        // Display "error.message" to the user...
    } else {
        // The card has been verified successfully...
    }
});
```

--------------------------------

### Install Resend PHP SDK via Composer

Source: https://laravel.com/docs/12.x/mail

Install Resend's official PHP SDK package required for Resend mail driver integration in Laravel.

```shell
composer require resend/resend-php
```

--------------------------------

### Install Postmark Mailer Transport via Composer

Source: https://laravel.com/docs/12.x/mail

Install Symfony's Postmark Mailer transport and HTTP client packages required for Postmark driver integration in Laravel.

```shell
composer require symfony/postmark-mailer symfony/http-client
```

--------------------------------

### Install ChromeDriver for Laravel Dusk

Source: https://laravel.com/docs/12.x/dusk

This Artisan command detects the installed Chrome/Chromium version and installs the compatible ChromeDriver binary for Laravel Dusk. It ensures the necessary browser automation driver is available for running browser tests.

```shell
php artisan dusk:chrome-driver --detect
```

--------------------------------

### Install Open Swoole PHP Extension

Source: https://laravel.com/docs/12.x/octane

PECL command to install the Open Swoole PHP extension as an alternative to Swoole for Laravel Octane. Open Swoole provides the same functionality as Swoole including concurrent tasks, ticks, and intervals.

```shell
pecl install openswoole
```

--------------------------------

### Set Working Directory for Laravel Process

Source: https://laravel.com/docs/12.x/processes

This example demonstrates how to specify the working directory for an external process using the `path` method. The process will execute relative to the specified directory instead of inheriting the currently executing PHP script's working directory.

```php
$result = Process::path(__DIR__)->run('ls -la');
```

--------------------------------

### Install Laravel Dusk Package via Composer

Source: https://laravel.com/docs/12.x/dusk

Add the laravel/dusk package as a development dependency to your Laravel project using Composer. This installs the browser automation testing framework and its dependencies.

```shell
composer require laravel/dusk --dev
```

--------------------------------

### Configure Similarity Search Tool with Threshold and Query Customization (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This example shows how to enhance the `SimilaritySearch` tool by adding a minimum similarity threshold (between 0.0 and 1.0) and a limit to the number of results. Additionally, it illustrates how to provide a closure to customize the underlying Eloquent query, allowing for more specific filtering of documents before similarity comparison.

```php
SimilaritySearch::usingModel(
    model: Document::class,
    column: 'embedding',
    minSimilarity: 0.7,
    limit: 10,
    query: fn ($query) => $query->where('published', true),
),
```

--------------------------------

### Create and manage multiple browser instances in Dusk

Source: https://laravel.com/docs/12.x/dusk

Shows how to create and interact with multiple browser instances concurrently within a single Dusk test. This is useful for scenarios like testing chat applications where multiple users interact. It logs in two different users, navigates them to a page, and simulates a chat interaction.

```php
$this->browse(function (Browser $first, Browser $second) {
    $first->loginAs(User::find(1))
        ->visit('/home')
        ->waitForText('Message');

    $second->loginAs(User::find(2))
        ->visit('/home')
        ->waitForText('Message')
        ->type('message', 'Hey Taylor')
        ->press('Send');

    $first->waitForText('Hey Taylor')
        ->assertSee('Jeffrey Way');
});
```

--------------------------------

### Provide Initial Input to Stream with useStream Hook (React/Vue)

Source: https://laravel.com/docs/12.x/responses

This example shows how to send an initial payload to the stream upon its initialization using the `initialInput` option of the `useStream` hook. This allows the stream to receive data immediately, which can be useful for pre-populating stream content or initiating a conversation without requiring a separate `send` call.

```tsx
import { useStream } from "@laravel/stream-react";

function App() {
    const { data } = useStream("chat", {
        initialInput: {
            message: "Introduce yourself.",
        },
    });

    return <div>{data}</div>;
}
```

```vue
<script setup lang="ts">
import { useStream } from "@laravel/stream-vue";

const { data } = useStream("chat", {
    initialInput: {
        message: "Introduce yourself.",
    },
});
</script>

<template>
    <div>{{ data }}</div>
</template>
```

--------------------------------

### Remove a specific class-based Eloquent Global Scope

Source: https://laravel.com/docs/12.x/eloquent

This PHP code shows how to temporarily remove a previously applied class-based global scope from an Eloquent query. By calling `withoutGlobalScope` with the scope's class name, you can retrieve model instances without the constraints imposed by that particular scope.

```php
User::withoutGlobalScope(AncientScope::class)->get();
```

--------------------------------

### Navigate back and forward in browser history with Dusk

Source: https://laravel.com/docs/12.x/dusk

Shows how to use the `back` and `forward` methods to simulate browser history navigation. These methods allow the browser to move to the previous or next page in its history stack.

```php
$browser->back();

$browser->forward();
```

--------------------------------

### Install Slack Notification Channel via Composer

Source: https://laravel.com/docs/12.x/notifications

Install the Laravel Slack notification channel package using Composer. This is a prerequisite for sending Slack notifications from your Laravel application.

```shell
composer require laravel/slack-notification-channel
```

--------------------------------

### Dispatching Laravel Jobs to Default and Specific Queues (PHP)

Source: https://laravel.com/docs/12.x/queues

This PHP example demonstrates how to dispatch a job to the default queue of the default connection and how to explicitly dispatch a job to a specific queue named 'emails' within the same connection using the `onQueue()` method.

```php
use App\Jobs\ProcessPodcast;

// This job is sent to the default connection's default queue...
ProcessPodcast::dispatch();

// This job is sent to the default connection's "emails" queue...
ProcessPodcast::dispatch()->onQueue('emails');
```

--------------------------------

### Define Local Scopes with Scope Attribute in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent

Demonstrates how to define local scopes using the #[Scope] attribute on Eloquent model methods. Scopes must return the same query builder instance or void and are used to encapsulate common query constraints like filtering popular or active users.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Scope a query to only include popular users.
     */
    #[Scope]
    protected function popular(Builder $query): void
    {
        $query->where('votes', '>', 100);
    }

    /**
     * Scope a query to only include active users.
     */
    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('active', 1);
    }
}
```

--------------------------------

### Install Laravel Boost as Development Dependency

Source: https://laravel.com/docs/12.x/index

This command installs Laravel Boost as a development dependency within a Laravel application. Boost is compatible with Laravel versions 10, 11, and 12, and requires PHP 8.1 or higher. It provides AI agents with Laravel-specific context and tools.

```bash
composer require laravel/boost --dev
```

--------------------------------

### Install Laravel Valet globally via Composer

Source: https://laravel.com/docs/12.x/valet

This command installs Laravel Valet as a global Composer package. Composer is a dependency manager for PHP, and this step makes the `valet` command-line tool available system-wide for managing your local development environment.

```shell
composer global require laravel/valet
```

--------------------------------

### Add or Drop 'deleted_at' Column in Laravel Migration

Source: https://laravel.com/docs/12.x/eloquent

Use Laravel's schema builder within a migration to add the `deleted_at` timestamp column to your database table, which is required for soft deletes. You can also use `dropSoftDeletes()` to remove this column if soft deletes are no longer needed for a table.

```php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('flights', function (Blueprint $table) {
    $table->softDeletes();
});

Schema::table('flights', function (Blueprint $table) {
    $table->dropSoftDeletes();
});
```

--------------------------------

### Customize Missing Argument Prompts with promptForMissingArgumentsUsing Method

Source: https://laravel.com/docs/12.x/artisan

Shows how to implement the promptForMissingArgumentsUsing method to customize the questions asked when gathering required arguments from users. Returns an array of questions keyed by argument names.

```php
/**
 * Prompt for missing input arguments using the returned questions.
 *
 * @return array<string, string>
 */
protected function promptForMissingArgumentsUsing(): array
{
    return [
        'user' => 'Which user ID should receive the mail?',
    ];
}
```

--------------------------------

### Example Output URLs Before and After transformOnServe

Source: https://laravel.com/docs/12.x/vite

Shows the transformation of image tool URLs from relative paths to absolute dev server URLs. The before state shows a relative URL that Vite cannot properly intercept, while the after state shows the corrected absolute URL pointing to the dev server running on localhost:5173.

```html
<!-- Before -->
<img src="/@imagetools/f0b2f404b13f052c604e632f2fb60381bf61a520">

<!-- After -->
<img src="http://[::1]:5173/@imagetools/f0b2f404b13f052c604e632f2fb60381bf61a520">
```

--------------------------------

### Install Laravel Boost Composer Package

Source: https://laravel.com/docs/12.x/boost

This Composer command installs the Laravel Boost package as a development dependency. It's the initial step to integrate Boost into your Laravel project, providing the core files for AI-assisted development.

```shell
composer require laravel/boost --dev
```

--------------------------------

### Initiate Basic Subscription Checkout with Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

This PHP code demonstrates how to set up a basic Stripe subscription checkout using Laravel Cashier. It defines a GET route that, when accessed, redirects the authenticated user to Stripe's Checkout page to subscribe to a 'default' plan with a 'price_monthly' price ID. This functionality requires the `customer.subscription.created` webhook to be enabled in your Stripe dashboard for proper subscription record creation.

```php
use Illuminate\Http\Request;

Route::get('/subscription-checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('default', 'price_monthly')
        ->checkout();
});
```

--------------------------------

### Fake Laravel Process Sequences for Multiple Invocations

Source: https://laravel.com/docs/12.x/processes

This PHP example demonstrates how to fake a sequence of results for a single command that is invoked multiple times. Using `Process::sequence()` and `push()` allows defining different `ProcessResult` objects for each subsequent call to the same command pattern, enabling robust testing of iterative or stateful process interactions.

```php
Process::fake([
    'ls *' => Process::sequence()
        ->push(Process::result('First invocation'))
        ->push(Process::result('Second invocation')),
]);
```

--------------------------------

### Perform Atomic Upsert Operations in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent

Use the upsert method to insert or update records atomically in a single operation. Specify unique identifying columns in the second argument and columns to update in the third argument. The method automatically manages created_at and updated_at timestamps if enabled.

```php
Flight::upsert([
    ['departure' => 'Oakland', 'destination' => 'San Diego', 'price' => 99],
    ['departure' => 'Chicago', 'destination' => 'New York', 'price' => 150]
], uniqueBy: ['departure', 'destination'], update: ['price']);
```

--------------------------------

### Initialize Stripe.js and Create Card Element

Source: https://laravel.com/docs/12.x/billing

Initializes Stripe.js library with public key and creates a card element for secure payment method collection. The card element is mounted to the DOM placeholder, providing a secure input field that handles PCI compliance automatically.

```javascript
<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('stripe-public-key');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');
</script>
```

--------------------------------

### Switch React Layout from Sidebar to Header

Source: https://laravel.com/docs/12.x/starter-kits

Changes the primary application layout in React starter kit from the default sidebar layout to header layout by modifying the import statement in app-layout.tsx file.

```javascript
import AppLayoutTemplate from '@/layouts/app/app-sidebar-layout'; // [tl! remove]
import AppLayoutTemplate from '@/layouts/app/app-header-layout'; // [tl! add]
```

--------------------------------

### Install Octane and RoadRunner via Laravel Sail

Source: https://laravel.com/docs/12.x/octane

Shell commands to install Laravel Octane and RoadRunner dependencies within a Laravel Sail environment. Requires Sail to be running and uses Composer to install the necessary packages.

```shell
./vendor/bin/sail up

./vendor/bin/sail composer require laravel/octane spiral/roadrunner-cli spiral/roadrunner-http
```

--------------------------------

### Install Swoole PHP Extension

Source: https://laravel.com/docs/12.x/octane

PECL command to install the Swoole PHP extension required for using Swoole as the application server with Laravel Octane. Swoole provides concurrent task processing, ticks, and interval functionality.

```shell
pecl install swoole
```

--------------------------------

### Retrieve Scalar Values from Database Query in Laravel

Source: https://laravel.com/docs/12.x/database

Demonstrates using the scalar method to retrieve a single scalar value directly from a query result without needing to access it from a record object. Useful for aggregate functions like COUNT that return a single value.

```php
$burgers = DB::scalar(
    "select count(case when food = 'burger' then 1 end) as burgers from menu"
);
```

--------------------------------

### Create Subscription with Trial Days and Payment Method

Source: https://laravel.com/docs/12.x/billing

Creates a new subscription with a specified trial period while collecting payment method information upfront. The trialDays method sets the trial ending date in the database and instructs Stripe to defer billing until after the trial expires. This method overrides any default trial period configured in Stripe.

```php
use Illuminate\Http\Request;

Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription('default', 'price_monthly')
        ->trialDays(10)
        ->create($request->paymentMethodId);

    // ...
});
```

--------------------------------

### Get the ordinal representation of a number in Laravel PHP

Source: https://laravel.com/docs/12.x/helpers

The `Number::ordinal` method returns the ordinal representation of a given number, appending the correct suffix (e.g., 'st', 'nd', 'rd', 'th'). This is useful for displaying numbers in a grammatically correct sequence. For example, 1 becomes '1st', 2 becomes '2nd', and so on.

```php
use Illuminate\Support\Number;

$number = Number::ordinal(1);

// 1st

$number = Number::ordinal(2);

// 2nd

$number = Number::ordinal(21);

// 21st
```

--------------------------------

### Configure Password Confirmation View in FortifyServiceProvider

Source: https://laravel.com/docs/12.x/fortify

Customizes the password confirmation view by registering a callback in the FortifyServiceProvider's boot method. This method tells Fortify which view to display when password confirmation is required. The callback returns a view instance that will be rendered at the `/user/confirm-password` endpoint.

```php
use Laravel\Fortify\Fortify;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Fortify::confirmPasswordView(function () {
        return view('auth.confirm-password');
    });

    // ...
}
```

--------------------------------

### Fill Existing Eloquent Model with Attributes (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet demonstrates using the `fill` method on an existing Laravel Eloquent model instance. The `fill` method allows you to populate an existing model with an array of attributes, respecting the `$fillable` or `$guarded` properties. This is useful for updating multiple attributes on a model without immediately persisting them to the database.

```php
$flight->fill(['name' => 'Amsterdam to Frankfurt']);
```

--------------------------------

### Configure Nginx Site Mapping in Homestead.yaml

Source: https://laravel.com/docs/12.x/homestead

This YAML snippet demonstrates how to map a domain to a project folder within your Homestead environment. The `map` property defines the domain, and `to` specifies the absolute path to the project's public directory on the virtual machine.

```yaml
sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
```

--------------------------------

### Dynamic Autocompletion Options in Laravel Prompts Suggest (PHP)

Source: https://laravel.com/docs/12.x/prompts

This example shows how to provide dynamic auto-completion options to the `suggest` function by passing a closure as the `options` argument. The closure is executed each time the user types a character, receiving the current input value. It should return an array of filtered suggestions, enabling real-time, context-aware autocompletion.

```php
$name = suggest(
    label: 'What is your name?',
    options: fn ($value) => collect(['Taylor', 'Dayle'])
        ->filter(fn ($name) => Str::contains($name, $value, ignoreCase: true))
);
```

--------------------------------

### Create User with Generic Trial Period

Source: https://laravel.com/docs/12.x/billing

Creates a new user with a generic trial period by setting the trial_ends_at column without collecting payment method information. This approach is typically used during user registration and requires a date cast on the billable model.

```php
use App\Models\User;

$user = User::create([
    // ...
    'trial_ends_at' => now()->plus(days: 10),
]);
```

--------------------------------

### Initial Laravel Query Builder Examples with Repeated Logic

Source: https://laravel.com/docs/12.x/queries

These examples illustrate two distinct Laravel query builder calls that share common filtering logic for a 'destination' field. The repeated `when` clause indicates an opportunity for refactoring to improve code reusability.

```php
use IlluminateDatabaseQueryBuilder;
use IlluminateSupportFacadesDB;

$destination = $request->query('destination');

DB::table('flights')
    ->when($destination, function (Builder $query, string $destination) {
        $query->where('destination', $destination);
    })
    ->orderByDesc('price')
    ->get();

// ...

$destination = $request->query('destination');

DB::table('flights')
    ->when($destination, function (Builder $query, string $destination) {
        $query->where('destination', $destination);
    })
    ->where('user', $request->user()->id)
    ->orderBy('destination')
    ->get();
```

--------------------------------

### Resetting Laravel Valet Installation

Source: https://laravel.com/docs/12.x/valet

To resolve issues, you can reset your Valet installation. The primary method involves re-requiring Valet globally via Composer and then running `valet install`. For more persistent problems, a 'hard reset' can be performed by uninstalling with `--force` before reinstalling.

```shell
composer global require laravel/valet
valet install
```

--------------------------------

### Use withAttributes Method for Pending Attributes in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent

Demonstrates using the withAttributes method within scopes to set model attributes that match scope constraints. The method adds where conditions to the query and sets attributes on created models. The asConditions parameter controls whether where conditions are added.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Scope the query to only include drafts.
     */
    #[Scope]
    protected function draft(Builder $query): void
    {
        $query->withAttributes([
            'hidden' => true,
        ]);
    }
}
```

```php
$draft = Post::draft()->create(['title' => 'In Progress']);

$draft->hidden; // true
```

```php
$query->withAttributes([
    'hidden' => true,
], asConditions: false);
```

--------------------------------

### Disabling Automatic ChromeDriver Start in Laravel Dusk

Source: https://laravel.com/docs/12.x/dusk

Shows how to comment out the `static::startChromeDriver()` call in your `tests/DuskTestCase.php` file. This is necessary if you prefer to manually manage and start your ChromeDriver instance.

```php
/**
 * Prepare for Dusk test execution.
 *
 * @beforeClass
 */
public static function prepare(): void
{
    // static::startChromeDriver();
}

```

--------------------------------

### Share a Valet Site Publicly

Source: https://laravel.com/docs/12.x/valet

Navigate to your site's directory and run `valet share` to generate a publicly accessible URL for your local site. This URL is automatically copied to your clipboard, facilitating testing on mobile devices or sharing with others.

```shell
cd ~/Sites/laravel

valet share
```

--------------------------------

### Perform a mass update on Eloquent models in Laravel

Source: https://laravel.com/docs/12.x/eloquent

This code shows how to perform a mass update on multiple Eloquent models that match specific query conditions. It uses `where` clauses to filter records and then applies an array of column-value pairs to update the matching records. Note that model events (`saving`, `updated`, etc.) are not fired during mass updates.

```php
Flight::where('active', 1)
    ->where('destination', 'San Diego')
    ->update(['delayed' => 1]);
```

--------------------------------

### Delete Models by Primary Key Using destroy Method in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Use the destroy method to delete models by their primary key without explicitly retrieving them first. The method accepts single or multiple primary keys, arrays, or collections of primary keys and dispatches delete events for each model.

```php
Flight::destroy(1);

Flight::destroy(1, 2, 3);

Flight::destroy([1, 2, 3]);

Flight::destroy(collect([1, 2, 3]));
```

--------------------------------

### Configuring Redis Queue with Key Hash Tag for Cluster (PHP)

Source: https://laravel.com/docs/12.x/queues

This PHP configuration snippet for the `config/queue.php` file demonstrates how to set up a Redis queue connection for use with a Redis Cluster. It includes a key hash tag `{default}` in the queue name to ensure all keys for that queue are placed in the same hash slot.

```php
'redis' => [
    'driver' => 'redis',
    'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
    'queue' => env('REDIS_QUEUE', '{default}'),
    'retry_after' => env('REDIS_QUEUE_RETRY_AFTER', 90),
    'block_for' => null,
    'after_commit' => false,
],
```

--------------------------------

### chopStart - Remove prefix from string start

Source: https://laravel.com/docs/12.x/strings

Removes the first occurrence of a given value only if it appears at the start of the string. Supports both single string values and arrays of values to match against.

```php
use Illuminate\Support\Str;

$url = Str::of('https://laravel.com')->chopStart('https://');

// 'laravel.com'
```

```php
use Illuminate\Support\Str;

$url = Str::of('http://laravel.com')->chopStart(['https://', 'http://']);

// 'laravel.com'
```

--------------------------------

### Install Algolia PHP SDK

Source: https://laravel.com/docs/12.x/scout

Install the Algolia PHP SDK via Composer when using the Algolia search driver. This dependency is required to integrate Algolia search functionality with your Laravel Scout configuration.

```shell
composer require algolia/algoliasearch-client-php
```

--------------------------------

### Install Laravel MCP via Composer

Source: https://laravel.com/docs/12.x/mcp

This command installs the `laravel/mcp` package into your Laravel project using Composer. It's the first step to integrate the Model Context Protocol, enabling AI clients to interact with your application.

```shell
composer require laravel/mcp
```

--------------------------------

### Prevent Lazy Loading in Laravel Eloquent based on Environment

Source: https://laravel.com/docs/12.x/eloquent

This PHP code snippet shows how to configure Eloquent to prevent lazy loading of relationships. It uses the `Model::preventLazyLoading` method, typically called in `AppServiceProvider::boot`, to conditionally disable lazy loading in non-production environments, helping to identify N+1 query issues during development.

```php
use Illuminate
















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































```

--------------------------------

### Configure Mass Assignable JSON Column Keys in Laravel

Source: https://laravel.com/docs/12.x/eloquent

Define specific JSON column keys as mass assignable in the model's $fillable array for security. Laravel does not support updating nested JSON attributes when using the guarded property, so explicit key specification in $fillable is required.

```php
/**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */
protected $fillable = [
    'options->enabled',
];
```

--------------------------------

### Define Non-Integer Primary Key Type in Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

Specify the data type of the primary key by defining the protected $keyType property. Set this to 'string' when using non-numeric primary keys like UUIDs or ULIDs. This ensures Eloquent properly handles the key type during queries and operations.

```php
<?php

class Flight extends Model
{
    /**
     * The data type of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
```

--------------------------------

### Generate Basic Audio with Laravel AI

Source: https://laravel.com/docs/12.x/ai-sdk

Demonstrates the fundamental usage of the `Laravel\Ai\Audio` class to generate audio from a given text prompt. It shows how to initiate audio generation using the `of()` and `generate()` methods and retrieve the raw content of the generated audio.

```php
use Laravel\Ai\Audio;

$audio = Audio::of('I love coding with Laravel.')->generate();

$rawContent = (string) $audio;
```

--------------------------------

### Example Broadcast Event Payload JSON

Source: https://laravel.com/docs/12.x/broadcasting

When an event is broadcast, all public properties are automatically serialized into the payload. This example shows how an event with a public $user property containing an Eloquent model is serialized for transmission to clients.

```json
{
    "user": {
        "id": 1,
        "name": "Patrick Stewart"
    }
}
```

--------------------------------

### Send GET Request with Query Parameters in PHP Laravel

Source: https://laravel.com/docs/12.x/http-client

Demonstrates two methods to pass query parameters in GET requests: directly as an array argument or using the withQueryParameters method. The first approach appends parameters directly to the request, while the second chains the method before calling get().

```php
$response = Http::get('http://example.com/users', [
    'name' => 'Taylor',
    'page' => 1,
]);
```

```php
Http::retry(3, 100)->withQueryParameters([
    'name' => 'Taylor',
    'page' => 1,
])->get('http://example.com/users');
```

--------------------------------

### Attach Documents to Laravel AI Agent Prompts

Source: https://laravel.com/docs/12.x/ai-sdk

This example illustrates how to attach various types of documents to a Laravel AI agent's prompt. Documents can be sourced from filesystem storage, local file paths, or directly from uploaded files, allowing the model to process and analyze their content.

```php
use AppAiAgentsSalesCoach;
use LaravelAiFiles;

$response = (new SalesCoach)->prompt(
    'Analyze the attached sales transcript...', 
    attachments: [
        Files\Document::fromStorage('transcript.pdf'), // Attach a document from a filesystem disk...
        Files\Document::fromPath('/home/laravel/transcript.md'), // Attach a document from a local path...
        $request->file('transcript') // Attach an uploaded file...
    ]
);
```

--------------------------------

### Switching PHP Versions for Laravel Valet Sites

Source: https://laravel.com/docs/12.x/valet

This command allows you to switch the PHP version used by Valet. If the specified PHP version is not installed, Valet will attempt to install it via Homebrew. Running `valet use php` without a version will apply the PHP version specified in a `.valetrc` file if present.

```shell
valet use php@8.2

valet use php
```

--------------------------------

### Attaching Stored AI Files to Agent Prompts in Laravel AI

Source: https://laravel.com/docs/12.x/ai-sdk

Once a file is stored with an AI provider, this example shows how to reference it by its ID and attach it to an AI agent's prompt. This is crucial for providing context to agents without re-uploading large files for every conversation.

```php
use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Files;

$response = (new SalesCoach)->prompt(
    'Analyze the attached sales transcript...'
    attachments: [
        Files\Document::fromId('file-id') // Attach a stored document...
    ]
);
```

--------------------------------

### Listening to Laravel Container Rebinding Event (PHP)

Source: https://laravel.com/docs/12.x/container

Demonstrates how to use `$this->app->rebinding` to listen for when a service is re-bound in the container. This example shows binding `PodcastPublisher` to `SpotifyPublisher`, setting up a re-binding listener, and then re-binding it to `TransistorPublisher` to trigger the listener.

```php
use App\Contracts\PodcastPublisher;
use App\Services\SpotifyPublisher;
use App\Services\TransistorPublisher;
use Illuminate\Contracts\Foundation\Application;

$this->app->bind(PodcastPublisher::class, SpotifyPublisher::class);

$this->app->rebinding(
    PodcastPublisher::class,
    function (Application $app, PodcastPublisher $newInstance) {
        //
    },
);

// New binding will trigger rebinding closure...
$this->app->bind(PodcastPublisher::class, TransistorPublisher::class);
```

--------------------------------

### Start Laravel Reverb Server with Custom Host and Port

Source: https://laravel.com/docs/12.x/reverb

This command allows you to specify a custom host and port for the Reverb server to bind to, overriding the default '0.0.0.0:8080'. It's useful for controlling network accessibility or avoiding port conflicts. The `--host` and `--port` options define where the server listens for incoming connections.

```shell
php artisan reverb:start --host=127.0.0.1 --port=9000
```

--------------------------------

### Check if an Eloquent model was recently created in Laravel

Source: https://laravel.com/docs/12.x/eloquent

This snippet demonstrates how to use the `wasRecentlyCreated` property on an Eloquent model after an `updateOrCreate` (or `firstOrCreate`) operation. This boolean property indicates whether the model instance was newly created during the current request lifecycle, allowing for conditional logic based on the operation's outcome.

```php
$flight = Flight::updateOrCreate(
    // ...
);

if ($flight->wasRecentlyCreated) {
    // New flight record was inserted...
}
```

--------------------------------

### Configure Laravel Echo instance in JavaScript

Source: https://laravel.com/docs/12.x/broadcasting

Create a fresh Echo instance in the resources/js/bootstrap.js file with Reverb broadcaster configuration. This sets up WebSocket connections using environment variables for host, port, and TLS settings, supporting both ws and wss transports.

```javascript
import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
```

--------------------------------

### Install Predis Redis Client Package

Source: https://laravel.com/docs/12.x/redis

Install the Predis package via Composer as an alternative to the PhpRedis extension. Predis is a pure PHP Redis client that does not require additional system extensions, making it easier to install but potentially less performant for high-volume Redis usage.

```shell
composer require predis/predis
```

--------------------------------

### Swap Subscription Price and Immediately Invoice Customer

Source: https://laravel.com/docs/12.x/billing

This PHP code illustrates how to change a subscription's price and immediately generate an invoice for the customer. The `swapAndInvoice` method ensures that the customer is billed without waiting for their next billing cycle.

```php
$user = User::find(1);

$user->subscription('default')->swapAndInvoice('price_yearly');
```

--------------------------------

### Navigate to a specific URI using Dusk's visit method

Source: https://laravel.com/docs/12.x/dusk

Illustrates how to use the `visit` method on a Dusk `Browser` instance to navigate to a specified URI within the application. This is the primary method for directing the browser to a particular page.

```php
$browser->visit('/login');
```

--------------------------------

### Dispatching Background Jobs in Laravel

Source: https://laravel.com/docs/12.x/queues

This example dispatches a job to be processed in a separately spawned PHP process after the HTTP response. The 'background' connection frees up the application worker to handle other incoming requests immediately.

```php
RecordDelivery::dispatch($order)->onConnection('background');
```

--------------------------------

### Get Context Values with context() Helper

Source: https://laravel.com/docs/12.x/helpers

The context() function retrieves values from the current context with optional default values. It also supports setting context values by passing an array of key-value pairs.

```php
$value = context('trace_id');

$value = context('trace_id', $default);

use Illuminate\Support\Str;

context(['trace_id' => Str::uuid()->toString()]);
```

--------------------------------

### GET /subscription/{subscriptionName}/preview-invoice - Preview Subscription Invoice with Multiple Prices

Source: https://laravel.com/docs/12.x/billing

Previews an invoice with multiple new prices before applying changes to a subscription. Shows the combined effect of multiple price changes.

```APIDOC
## GET /subscription/{subscriptionName}/preview-invoice

### Description
Previews an invoice for a subscription with multiple new prices before applying changes. Allows determining the combined effect of multiple price modifications.

### Method
GET

### Endpoint
/subscription/{subscriptionName}/preview-invoice

### Parameters
#### Path Parameters
- **subscriptionName** (string) - Required - The subscription name (e.g., 'default')

#### Query Parameters
- **prices** (array) - Required - Array of price IDs to preview (e.g., ['price_yearly', 'price_metered'])

### Request Example
```php
$invoice = $user->subscription('default')->previewInvoice(['price_yearly', 'price_metered']);
```

### Response
#### Success Response (200)
- **id** (string) - Preview invoice ID
- **date** (datetime) - Invoice date
- **total** (string) - Invoice total with all new prices
- **items** (array) - Line items for each price

#### Response Example
```json
{
  "id": "in_preview_1234567890",
  "date": "2024-02-15",
  "total": "$299.99",
  "items": [
    {
      "description": "Yearly subscription",
      "amount": "$199.99"
    },
    {
      "description": "Metered usage",
      "amount": "$100.00"
    }
  ]
}
```

### Notes
- Accepts array of multiple price IDs
- Shows combined total of all price changes
- Useful for complex subscription modifications
```

--------------------------------

### Freeze Current Time in Laravel Tests using `freezeTime` and `freezeSecond`

Source: https://laravel.com/docs/12.x/mocking

These examples show how to freeze the current time using `freezeTime` or `freezeSecond` methods, optionally providing a closure. The closure executes with time frozen at the moment the method was called (or at the start of the current second for `freezeSecond`). This is useful for testing scenarios where the exact time needs to remain constant during a specific operation.

```php
use Illuminate\Support\Carbon;

// Freeze time and resume normal time after executing closure...
$this->freezeTime(function (Carbon $time) {
    // ...
});

// Freeze time at the current second and resume normal time after executing closure...
$this->freezeSecond(function (Carbon $time) {
    // ...
})
```

--------------------------------

### Search with Custom Scroll Configuration

Source: https://laravel.com/docs/12.x/prompts

Customizes the number of visible options before scrolling begins. Default is five options; this example sets it to ten to display more results without scrolling.

```php
$id = search(
    label: 'Search for the user that should receive the mail',
    options: fn (string $value) => strlen($value) > 0
        ? User::whereLike('name', "%{$value}%")->pluck('name', 'id')->all()
        : [],
    scroll: 10
);
```

--------------------------------

### Example Laravel Model Broadcast Event Payload (JSON)

Source: https://laravel.com/docs/12.x/broadcasting

This JSON example demonstrates the default structure of a payload for a Laravel model broadcast event, such as `PostUpdated`. It typically includes the `model` data with its attributes and a `socket` identifier.

```json
{
    "model": {
        "id": 1,
        "title": "My first post"
        ...
    },
    ...
    "socket": "someSocketId"
}
```

--------------------------------

### Dispatch Initial Laravel Batch with Loader Jobs

Source: https://laravel.com/docs/12.x/queues

Explains a pattern for handling large numbers of jobs by initially dispatching a batch of 'loader' jobs. This prevents long web request times by deferring the hydration of the main batch with thousands of jobs until the loader jobs execute.

```php
$batch = Bus::batch([
    new LoadImportBatch,
    new LoadImportBatch,
    new LoadImportBatch,
])->then(function (Batch $batch) {
    // All jobs completed successfully...
})->name('Import Contacts')->dispatch();
```

--------------------------------

### Define Default Attribute Values for Laravel Eloquent Model

Source: https://laravel.com/docs/12.x/eloquent

This PHP code demonstrates how to set default values for a Laravel Eloquent model's attributes by defining the `$attributes` protected property. These values are used when a new model instance is created and represent the raw, storable format of the attributes, as if they were just read from the database.

```php
<?php

namespace AppModels;

use IlluminateDatabaseEloquentModel;

class Flight extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];
}
```

--------------------------------

### Define Custom Bash Aliases in Homestead

Source: https://laravel.com/docs/12.x/homestead

This shell snippet shows examples of defining custom Bash aliases within the Homestead environment. Aliases like 'c' for clear and '..' for changing directories can be added to the `aliases` file. After modification, the virtual machine must be re-provisioned for changes to take effect.

```shell
alias c='clear'
alias ..='cd ..'
```

--------------------------------

### Initiate Paddle Checkout for a Product (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP route definition demonstrates how to use Laravel Cashier's `checkout` method to create a Paddle Checkout Overlay session for a specific product price identifier. It automatically handles customer creation in Paddle if needed and redirects the user to a specified success URL (`dashboard` in this case) after the purchase is complete.

```php
use Illuminate\Http\Request;

Route::get('/buy', function (Request $request) {
    $checkout = $request->user()->checkout('pri_deluxe_album')
        ->returnTo(route('dashboard'));

    return view('buy', ['checkout' => $checkout]);
})->name('checkout');
```

--------------------------------

### Register a simple service binding using Laravel App facade

Source: https://laravel.com/docs/12.x/container

This example shows how to register a transient service binding using the `App` facade, which is suitable for interacting with the container outside of a service provider. Similar to the service provider method, it uses the `bind` method with a closure to resolve the service and its dependencies.

```php
use App\Services\Transistor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\App;

App::bind(Transistor::class, function (Application $app) {
    // ...
});
```

--------------------------------

### Install Vonage SMS Notification Channel in Laravel

Source: https://laravel.com/docs/12.x/notifications

Install required packages for sending SMS notifications via Vonage (formerly Nexmo) in Laravel. This command installs the laravel/vonage-notification-channel and guzzlehttp/guzzle packages needed for SMS functionality.

```shell
composer require laravel/vonage-notification-channel guzzlehttp/guzzle
```

--------------------------------

### Integrate Basic Web Fetch Provider Tool (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This snippet illustrates how to integrate the `WebFetch` provider tool, which enables AI agents to retrieve and read the content of specific web pages. This is useful for detailed analysis of known URLs and is supported by providers like Anthropic and Gemini.

```php
use Laravel\Ai\Providers\Tools\WebFetch;

public function tools(): iterable
{
    return [
        new WebFetch,
    ];
}
```

--------------------------------

### Define Podcast Model with Injected Publisher (PHP)

Source: https://laravel.com/docs/12.x/facades

This PHP code defines a `Podcast` Eloquent model with a `publish` method that requires an injected `Publisher` instance. This approach ensures testability by allowing the `Publisher` to be mocked, but necessitates passing the instance on every call.

```php
<?php

namespace App\Models;

use App\Contracts\Publisher;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * Publish the podcast.
     */
    public function publish(Publisher $publisher): void
    {
        $this->update(['publishing' => now()]);

        $publisher->publish($this);
    }
}
```

--------------------------------

### Resolve Container Dependencies with Default Property Values in Laravel

Source: https://laravel.com/docs/12.x/upgrade

This example illustrates how Laravel's dependency injection container now respects default values of class properties when resolving an instance. Previously, the container might have resolved a class instance without considering these defaults, potentially leading to different object states in Laravel 12.x compared to 11.x.

```php
class Example
{
    public function __construct(public ?Carbon $date = null) {}
}

$example = resolve(Example::class);

// <= 11.x
$example->date instanceof Carbon;

// >= 12.x
$example->date === null;
```

--------------------------------

### Integrating Laravel Lottery with Database Query Monitoring

Source: https://laravel.com/docs/12.x/helpers

This example shows how to combine the `Lottery` class with `DB::whenQueryingForLongerThan` to probabilistically report slow queries. By passing a lottery instance as a callable, you can selectively log or act on a small percentage of long-running queries.

```php
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Lottery;

DB::whenQueryingForLongerThan(
    CarbonInterval::seconds(2),
    Lottery::odds(1, 100)->winner(fn () => report('Querying > 2 seconds.')),
);
```

--------------------------------

### Install Laravel Pulse via Composer

Source: https://laravel.com/docs/12.x/pulse

Installs the Laravel Pulse package using Composer. This command adds the `laravel/pulse` dependency to your project, making its features available for use.

```shell
composer require laravel/pulse
```

--------------------------------

### Pass Data to Laravel View using the `with` Method

Source: https://laravel.com/docs/12.x/views

As an alternative to passing a complete array, this example shows how to use the `with` method to add individual pieces of data to the view. The `with` method returns the view instance, allowing for method chaining.

```php
return view('greeting')
    ->with('name', 'Victoria')
    ->with('occupation', 'Astronaut');
```

--------------------------------

### GET /photos/{photo}

Source: https://laravel.com/docs/12.x/controllers

Display a specific photo resource. This is the show action that retrieves and displays a single photo by ID.

```APIDOC
## GET /photos/{photo}

### Description
Display a specific photo resource.

### Method
GET

### Endpoint
/photos/{photo}

### Route Name
photos.show

### Controller Action
PhotoController@show

### Path Parameters
- **photo** (integer) - Required - Photo resource ID

### Response
#### Success Response (200)
- **id** (integer) - Photo resource ID
- **title** (string) - Photo title
- **url** (string) - Photo URL

#### Response Example
{
  "id": 1,
  "title": "My Photo",
  "url": "https://example.com/photo.jpg"
}

#### Error Response (404)
- **message** (string) - Resource not found
```

--------------------------------

### Install Laravel Horizon via Composer

Source: https://laravel.com/docs/12.x/horizon

This command installs the Laravel Horizon package into your project using Composer. Horizon provides a dashboard and code-driven configuration for Laravel's Redis queues, requiring Redis as the queue driver.

```shell
composer require laravel/horizon
```

--------------------------------

### Start Laravel Tinker REPL (Shell)

Source: https://laravel.com/docs/12.x/artisan

This Artisan command launches the Tinker interactive console, allowing you to interact with your Laravel application's components, such as Eloquent models, jobs, and events, directly from the command line in a live environment.

```shell
php artisan tinker
```

--------------------------------

### Implement Custom Value Object Cast Class

Source: https://laravel.com/docs/12.x/eloquent-mutators

Create a custom cast class implementing CastsAttributes to cast multiple database columns into a single value object. The get() method retrieves and instantiates the value object from model attributes, while set() validates and returns an array of key-value pairs for storage. This example demonstrates casting address_line_one and address_line_two columns into an Address value object.

```php
<?php

namespace App\Casts;

use App\ValueObjects\Address;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class AsAddress implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): Address {
        return new Address(
            $attributes['address_line_one'],
            $attributes['address_line_two']
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     * @return array<string, string>
     */
    public function set(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): array {
        if (! $value instanceof Address) {
            throw new InvalidArgumentException('The given value is not an Address instance.');
        }

        return [
            'address_line_one' => $value->lineOne,
            'address_line_two' => $value->lineTwo,
        ];
    }
}
```

--------------------------------

### Display Specific Configuration File Values with Artisan

Source: https://laravel.com/docs/12.x/configuration

Use the `config:show` Artisan command to explore and display detailed values from a specific configuration file. This is useful for debugging and verifying configuration settings in your Laravel application.

```shell
php artisan config:show database
```

--------------------------------

### Install Brevo Symfony Mailer via Composer

Source: https://laravel.com/docs/12.x/mail

Installs the Brevo (formerly Sendinblue) Symfony mailer package and its HTTP client dependency using Composer. This enables Laravel to support the Brevo mail transport.

```shell
composer require symfony/brevo-mailer symfony/http-client
```

--------------------------------

### Check User Subscription Status in Blade Templates

Source: https://laravel.com/docs/12.x/billing

These Blade template snippets demonstrate how to check a user's subscription status using Cashier's methods. The first example verifies if a user has any active subscription, while the subsequent examples show how to check for subscriptions to a specific product or price. This enables conditional rendering of content based on the user's subscription details.

```blade
@if ($user->subscribed())
    <p>You are subscribed.</p>
@endif
```

```blade
@if ($user->subscribedToProduct('pro_basic'))
    <p>You are subscribed to our Basic product.</p>
@endif

@if ($user->subscribedToPrice('price_basic_monthly'))
    <p>You are subscribed to our monthly Basic plan.</p>
@endif
```

--------------------------------

### Start Queue Worker - Laravel Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue worker process that continuously processes jobs pushed onto the queue. The worker runs indefinitely until manually stopped. Use a process monitor like Supervisor to keep it running permanently in production.

```shell
php artisan queue:work
```

--------------------------------

### Fluently modify Laravel Uri components

Source: https://laravel.com/docs/12.x/helpers

This example illustrates how to chain various methods to fluently modify different components of a `Uri` instance. You can change the scheme, host, port, path, query parameters, and fragment identifier.

```php
$uri = Uri::of('https://example.com')
    ->withScheme('http')
    ->withHost('test.com')
    ->withPort(8000)
    ->withPath('/users')
    ->withQuery(['page' => 2])
    ->withFragment('section-1');
```

--------------------------------

### Blade Component Usage Example with Merged Attributes

Source: https://laravel.com/docs/12.x/blade

Demonstrates how to use a Blade component with custom attributes that will be merged with the component's default attributes. Shows both the component invocation and the resulting rendered HTML output.

```blade
<x-alert type="error" :message="$message" class="mb-4"/>
```

```blade
<div class="alert alert-error mb-4">
    <!-- Contents of the $message variable -->
</div>
```

--------------------------------

### Create Current Time Carbon Instance - now()

Source: https://laravel.com/docs/12.x/helpers

The now() function creates a new Illuminate\Support\Carbon instance representing the current time. This provides a convenient way to get the current timestamp with all Carbon's date manipulation capabilities.

```php
$now = now();
```

--------------------------------

### Configure Meilisearch Environment Variables

Source: https://laravel.com/docs/12.x/scout

Sets up Meilisearch connection credentials in the .env file. Requires SCOUT_DRIVER set to 'meilisearch', the Meilisearch host URL, and API key for authentication.

```ini
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://127.0.0.1:7700
MEILISEARCH_KEY=masterKey
```

--------------------------------

### Cache Event-to-Listener Mappings with Artisan

Source: https://laravel.com/docs/12.x/deployment

Caches the application's auto-discovered event to listener mappings during deployment to improve performance by reducing runtime discovery overhead.

```shell
php artisan event:cache
```

--------------------------------

### Update or create an Eloquent model using `updateOrCreate` in Laravel

Source: https://laravel.com/docs/12.x/eloquent

This code illustrates the `updateOrCreate` method, which attempts to find a model matching the first array of attributes. If found, it updates the model with the attributes from the second array. If no matching model exists, a new one is created by merging both attribute arrays. The method automatically persists changes without needing an explicit `save` call.

```php
$flight = Flight::updateOrCreate(
    ['departure' => 'Oakland', 'destination' => 'San Diego'],
    ['price' => 99, 'discounted' => 1]
);
```

--------------------------------

### GET /subscription/{subscriptionName}/preview-invoice - Preview Subscription Invoice

Source: https://laravel.com/docs/12.x/billing

Previews an invoice before making price changes to a subscription. Shows what the customer's invoice will look like with the new price.

```APIDOC
## GET /subscription/{subscriptionName}/preview-invoice

### Description
Previews an invoice for a subscription with a new price before applying the change. Allows determining what the customer's invoice will look like after a price change.

### Method
GET

### Endpoint
/subscription/{subscriptionName}/preview-invoice

### Parameters
#### Path Parameters
- **subscriptionName** (string) - Required - The subscription name (e.g., 'default')

#### Query Parameters
- **price** (string) - Required - The new price ID to preview (e.g., 'price_yearly')

### Request Example
```php
$invoice = $user->subscription('default')->previewInvoice('price_yearly');
```

### Response
#### Success Response (200)
- **id** (string) - Preview invoice ID
- **date** (datetime) - Invoice date
- **total** (string) - Invoice total with new price
- **items** (array) - Line items with new pricing

#### Response Example
```json
{
  "id": "in_preview_1234567890",
  "date": "2024-02-15",
  "total": "$199.99",
  "items": [
    {
      "description": "Yearly subscription",
      "amount": "$199.99"
    }
  ]
}
```

### Notes
- Does not apply the price change, only previews it
- Useful for showing customers impact of price changes before confirmation
```

--------------------------------

### today() - Get Current Date as Carbon Instance

Source: https://laravel.com/docs/12.x/helpers

The today function creates a new Illuminate\Support\Carbon instance representing the current date. It provides a convenient way to get today's date in a Carbon object format.

```php
$today = today();
```

--------------------------------

### Specify Queue Connection - Laravel Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue worker for a specific connection defined in config/queue.php. The connection name must correspond to one of the configured queue connections.

```shell
php artisan queue:work redis
```

--------------------------------

### Initialize Paddle Checkout Session in Laravel Route

Source: https://laravel.com/docs/12.x/cashier-paddle

Creates a checkout session for a specific price using the Cashier `checkout` method. The method chains `returnTo` to specify the redirect URL after successful checkout. Returns a checkout object passed to the view for rendering the Paddle Checkout Overlay.

```php
use Illuminate\Http\Request;

Route::get('/subscribe', function (Request $request) {
    $checkout = $request->user()->checkout('price_basic_monthly')
        ->returnTo(route('dashboard'));

    return view('subscribe', ['checkout' => $checkout]);
})->name('subscribe');
```

--------------------------------

### Injecting Dependencies into Laravel Service Provider's Boot Method (PHP)

Source: https://laravel.com/docs/12.x/providers

This example illustrates how to use dependency injection within the `boot` method of a Laravel service provider. The service container automatically resolves and injects type-hinted dependencies, such as `ResponseFactory`, allowing the provider to extend framework functionalities like adding a macro to the response factory.

```php
use Illuminate\Contracts\Routing\ResponseFactory;

/**
 * Bootstrap any application services.
 */
public function boot(ResponseFactory $response): void
{
    $response->macro('serialized', function (mixed $value) {
        // ...
    });
}
```

--------------------------------

### Perform Basic Search on a Model with Laravel Scout (PHP)

Source: https://laravel.com/docs/12.x/search

This example illustrates how to execute a basic search query on an Eloquent model that has the `Searchable` trait applied. Using Scout's `search` method, you can easily query your model, and the database engine will automatically order the results by relevance.

```php
$articles = Article::search('Laravel')->get();
```

--------------------------------

### Configure Watcher Options in config/telescope.php

Source: https://laravel.com/docs/12.x/telescope

Customize individual watchers with additional configuration options by passing an array instead of a boolean. This example shows the QueryWatcher with enabled status and slow query threshold settings.

```php
'watchers' => [
    Watchers\QueryWatcher::class => [
        'enabled' => env('TELESCOPE_QUERY_WATCHER', true),
        'slow' => 100,
    ],
    // ...
],
```

--------------------------------

### Example JSON Output from Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

This JSON example illustrates the structure of the output when a Laravel Paginator instance is converted to JSON. It includes pagination metadata such as 'total', 'per_page', 'current_page', and 'last_page', along with the paginated records in the 'data' array.

```json
{
   "total": 50,
   "per_page": 15,
   "current_page": 1,
   "last_page": 4,
   "current_page_url": "http://laravel.app?page=1",
   "first_page_url": "http://laravel.app?page=1",
   "last_page_url": "http://laravel.app?page=4",
   "next_page_url": "http://laravel.app?page=2",
   "prev_page_url": null,
   "path": "http://laravel.app",
   "from": 1,
   "to": 15,
   "data":[
        {
            // Record...
        },
        {
            // Record...
        }
   ]
}
```

--------------------------------

### Configure Laravel Echo Instance for Pusher in JavaScript Frameworks

Source: https://laravel.com/docs/12.x/broadcasting

These code blocks demonstrate how to initialize and configure a Laravel Echo instance for Pusher broadcasting in different JavaScript environments (vanilla JS, React, Vue). The configuration typically involves specifying the broadcaster, API key, cluster, and TLS settings, often pulling values from environment variables. This setup enables the frontend to connect to the Pusher service and listen for real-time events.

```js
import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});
```

```js
import { configureEcho } from "@laravel/echo-react";

configureEcho({
    broadcaster: "pusher",
    // key: import.meta.env.VITE_PUSHER_APP_KEY,
    // cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    // forceTLS: true,
    // wsHost: import.meta.env.VITE_PUSHER_HOST,
    // wsPort: import.meta.env.VITE_PUSHER_PORT,
    // wssPort: import.meta.env.VITE_PUSHER_PORT,
    // enabledTransports: ["ws", "wss"],
});
```

```js
import { configureEcho } from "@laravel/echo-vue";

configureEcho({
    broadcaster: "pusher",
    // key: import.meta.env.VITE_PUSHER_APP_KEY,
    // cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    // forceTLS: true,
    // wsHost: import.meta.env.VITE_PUSHER_HOST,
    // wsPort: import.meta.env.VITE_PUSHER_PORT,
    // wssPort: import.meta.env.VITE_PUSHER_PORT,
    // enabledTransports: ["ws", "wss"],
});
```

--------------------------------

### Dispatching Laravel Job Before Database Commit Inline

Source: https://laravel.com/docs/12.x/queues

This example shows how to dispatch a specific job immediately, even if the 'after_commit' configuration option is set to true for the queue connection. The 'beforeCommit' method ensures the job runs without waiting for any open database transactions to commit.

```php
ProcessPodcast::dispatch($podcast)->beforeCommit();
```

--------------------------------

### Combine Time Units with Laravel Sleep's 'and' Method

Source: https://laravel.com/docs/12.x/helpers

This example demonstrates how to combine different units of time using the `and()` method of Laravel's `Sleep` class. This allows for precise and readable specification of pause durations, such as one second and ten milliseconds.

```php
Sleep::for(1)->second()->and(10)->milliseconds();
```

--------------------------------

### Define `$fillable` Property for Eloquent Mass Assignment (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet illustrates how to define the `$fillable` property on a Laravel Eloquent model. The `$fillable` array specifies which attributes are safe for mass assignment, protecting against unexpected data changes. This is a crucial security measure to prevent mass assignment vulnerabilities when using methods like `create` or `fill`.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];
}
```

--------------------------------

### GET Request with Query Parameters

Source: https://laravel.com/docs/12.x/http-client

Learn how to append query parameters to GET requests using Laravel's HTTP client. You can pass parameters directly as an array or use the withQueryParameters method for more control.

```APIDOC
## GET Request with Query Parameters

### Description
Append query parameters to GET requests using Laravel's HTTP client. Parameters can be passed as an array to the get method or configured using the withQueryParameters method.

### Method
GET

### Endpoint
http://example.com/users

### Query Parameters
- **name** (string) - Optional - Filter by user name
- **page** (integer) - Optional - Pagination page number

### Request Example (Method 1 - Direct Array)
```php
$response = Http::get('http://example.com/users', [
    'name' => 'Taylor',
    'page' => 1,
]);
```

### Request Example (Method 2 - withQueryParameters)
```php
Http::retry(3, 100)->withQueryParameters([
    'name' => 'Taylor',
    'page' => 1,
])->get('http://example.com/users');
```

### Response
#### Success Response (200)
- **data** (array) - Array of user objects matching the query parameters
```

--------------------------------

### Prompt Agent with Constructor Arguments

Source: https://laravel.com/docs/12.x/ai-sdk

Pass arguments to the agent's constructor using the make method to enable automatic dependency injection with custom parameters.

```php
$agent = SalesCoach::make(user: $user);
```

--------------------------------

### Manually Control Echo Channel Listeners in Vue

Source: https://laravel.com/docs/12.x/broadcasting

Shows how to use the returned functions from useEcho hook to manually control channel subscription state in Vue. Allows programmatic stopping, starting, and leaving of channels independent of component lifecycle.

```vue
<script setup lang="ts">
import { useEcho } from "@laravel/echo-vue";

const { leaveChannel, leave, stopListening, listen } = useEcho(
    `orders.${orderId}`,
    "OrderShipmentStatusUpdated",
    (e) => {
        console.log(e.order);
    },
);

// Stop listening without leaving channel...
stopListening();

// Start listening again...
listen();

// Leave channel...
leaveChannel();

// Leave a channel and also its associated private and presence channels...
leave();
</script>
```

--------------------------------

### Apply Middleware with Multiple Parameters to Route in Laravel

Source: https://laravel.com/docs/12.x/middleware

Demonstrates passing multiple parameters to middleware by delimiting them with commas. This example applies the EnsureUserHasRole middleware with both 'editor' and 'publisher' role parameters to verify the user has one of these roles.

```php
Route::put('/post/{id}', function (string $id) {
    // ...
})->middleware(EnsureUserHasRole::class.':editor,publisher');
```

--------------------------------

### Install AWS SDK for DynamoDB Cache Driver

Source: https://laravel.com/docs/12.x/cache

Install the AWS SDK PHP package required for Laravel to communicate with DynamoDB cache storage. This is a prerequisite for using the DynamoDB cache driver in Laravel applications.

```shell
composer require aws/aws-sdk-php
```

--------------------------------

### Check if String Starts with Value or Array of Values (PHP)

Source: https://laravel.com/docs/12.x/strings

The `startsWith` method determines if a string begins with a specified value. It can also accept an array of values to check if the string starts with any of them, returning `true` or `false`.

```php
use Illuminate\Support\Str;

$result = Str::of('This is my name')->startsWith('This');

// true
```

```php
use Illuminate\Support\Str;

$result = Str::of('This is my name')->startsWith(['This', 'That']);

// true
```

--------------------------------

### Check Eloquent Model Attribute Dirtiness and Cleanliness (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet demonstrates how to use `isDirty()` and `isClean()` methods on a Laravel Eloquent model to check if attributes have changed since retrieval or the last save. It shows checking all attributes, specific attributes, and arrays of attributes before and after saving the model. These methods are useful for conditional logic based on model state.

```php
use App\Models\User;

$user = User::create([
    'first_name' => 'Taylor',
    'last_name' => 'Otwell',
    'title' => 'Developer',
]);

$user->title = 'Painter';

$user->isDirty(); // true
$user->isDirty('title'); // true
$user->isDirty('first_name'); // false
$user->isDirty(['first_name', 'title']); // true

$user->isClean(); // false
$user->isClean('title'); // false
$user->isClean('first_name'); // true
$user->isClean(['first_name', 'title']); // false

$user->save();

$user->isDirty(); // false
$user->isClean(); // true
```

--------------------------------

### Fake All Laravel Processes and Assert Invocation

Source: https://laravel.com/docs/12.x/processes

These examples demonstrate how to fake all external processes using `Process::fake()` and then assert that a specific command was run. It shows both a simple string assertion and a more detailed assertion using a callback to inspect the `PendingProcess` configuration, applicable for both Pest and PHPUnit testing frameworks.

```php
<?php

use Illuminate\Contracts\Process\ProcessResult;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Process;

test('process is invoked', function () {
    Process::fake();

    $response = $this->get('/import');

    // Simple process assertion...
    Process::assertRan('bash import.sh');

    // Or, inspecting the process configuration...
    Process::assertRan(function (PendingProcess $process, ProcessResult $result) {
        return $process->command === 'bash import.sh' &&
               $process->timeout === 60;
    });
});
```

```php
<?php

namespace Tests\Feature;

use Illuminate\Contracts\Process\ProcessResult;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Process;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_process_is_invoked(): void
    {
        Process::fake();

        $response = $this->get('/import');

        // Simple process assertion...
        Process::assertRan('bash import.sh');

        // Or, inspecting the process configuration...
        Process::assertRan(function (PendingProcess $process, ProcessResult $result) {
            return $process->command === 'bash import.sh' &&
                   $process->timeout === 60;
        });
    }
}
```

--------------------------------

### Retrieve all context values using Laravel Context::all

Source: https://laravel.com/docs/12.x/context

This example demonstrates how to fetch all currently stored information from the application's context. The `all` method returns an associative array containing all key-value pairs present in the context.

```php
$data = Context::all();
```

--------------------------------

### Reset keys to consecutive integers in Laravel Collection using `values()`

Source: https://laravel.com/docs/12.x/collections

The `values()` method returns a new collection where all keys have been reset to consecutively numbered integers, starting from 0. This is particularly useful when the original collection has non-sequential or associative keys, and a simple, zero-indexed array representation is desired. The example demonstrates re-indexing a collection with arbitrary integer keys.

```php
$collection = collect([
    10 => ['product' => 'Desk', 'price' => 200],
    11 => ['product' => 'Speaker', 'price' => 400],
]);

$values = $collection->values();

$values->all();

/*
    [
        0 => ['product' => 'Desk', 'price' => 200],
        1 => ['product' => 'Speaker', 'price' => 400],
    ]
*/
```

--------------------------------

### Refactor Podcast Model to Use Real-Time Facade (PHP)

Source: https://laravel.com/docs/12.x/facades

This PHP code refactors the `Podcast` model to utilize a real-time facade for the `Publisher` contract. By prefixing the import with `Facades\`, the `Publisher` is resolved from the service container, simplifying the method signature while maintaining testability.

```php
<?php

namespace App\Models;

use Facades\App\Contracts\Publisher; // [tl! add]
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * Publish the podcast.
     */
    public function publish(): void // [tl! add]
    {
        $this->update(['publishing' => now()]);

        Publisher::publish($this); // [tl! add]
    }
}
```

--------------------------------

### Download RoadRunner Binary in Sail Shell

Source: https://laravel.com/docs/12.x/octane

Commands to access the Sail shell environment and download the latest Linux-based RoadRunner binary. The rr executable is used to retrieve and manage the RoadRunner binary installation.

```shell
./vendor/bin/sail shell

# Within the Sail shell...
./vendor/bin/rr get-binary
```

--------------------------------

### Using URI Templates with Laravel HTTP Client

Source: https://laravel.com/docs/12.x/http-client

This example demonstrates how to construct request URLs using URI templates as specified by RFC 6570. The `withUrlParameters` method is used to define key-value pairs that will be expanded into the URI template before the request is sent.

```php
Http::withUrlParameters([
    'endpoint' => 'https://laravel.com',
    'page' => 'docs',
    'version' => '12.x',
    'topic' => 'validation',
])->get('{+endpoint}/{page}/{version}/{topic}');
```

--------------------------------

### Update Homebrew on macOS

Source: https://laravel.com/docs/12.x/valet

This command updates Homebrew, the package manager for macOS, ensuring all installed packages and Homebrew itself are up to date. It's a crucial first step before installing new software to prevent dependency issues.

```shell
brew update
```

--------------------------------

### Get or Set Session Values in PHP (session)

Source: https://laravel.com/docs/12.x/helpers

The `session` function provides a convenient way to interact with the application's session. It can retrieve a session value by key, set multiple session values using an array, or return the session store instance for more advanced operations like `get` and `put`.

```php
$value = session('key');

session(['chairs' => 7, 'instruments' => 3]);

$value = session()->get('key');

session()->put('key', $value);
```

--------------------------------

### GET /two-factor-challenge

Source: https://laravel.com/docs/12.x/fortify

Display the two-factor authentication challenge form. This endpoint returns the two-factor challenge view configured in the FortifyServiceProvider.

```APIDOC
## GET /two-factor-challenge

### Description
Display the two-factor authentication challenge form for users who have two-factor authentication enabled.

### Method
GET

### Endpoint
/two-factor-challenge

### Response
#### Success Response (200)
Returns the two-factor challenge view as configured in FortifyServiceProvider via `Fortify::twoFactorChallengeView()`.

### Configuration
Customize the two-factor challenge view by calling in `App\Providers\FortifyServiceProvider`:

```php
use Laravel\Fortify\Fortify;

public function boot(): void
{
    Fortify::twoFactorChallengeView(function () {
        return view('auth.two-factor-challenge');
    });
}
```
```

--------------------------------

### Install MongoDB PHP Extension via PECL

Source: https://laravel.com/docs/12.x/mongodb

Install the required mongodb PHP extension using PECL package manager. This extension is necessary to connect to MongoDB databases from PHP applications.

```shell
pecl install mongodb
```

--------------------------------

### List All Isolated Valet Sites

Source: https://laravel.com/docs/12.x/valet

Execute the `isolated` command to display a list of all sites that have been configured with specific PHP versions. This helps in tracking which sites are using non-global PHP installations.

```shell
valet isolated
```

--------------------------------

### Sync Default Payment Method from Stripe (Laravel Cashier)

Source: https://laravel.com/docs/12.x/billing

This PHP example demonstrates how to synchronize the billable model's default payment method information with the customer's default payment method as recorded in Stripe. The `updateDefaultPaymentMethodFromStripe()` method ensures consistency between your application and Stripe.

```php
$user->updateDefaultPaymentMethodFromStripe();
```

--------------------------------

### Check Node and NPM via Laravel Sail

Source: https://laravel.com/docs/12.x/vite

If using Laravel Sail, invoke Node and NPM commands through the Sail container to check their versions without requiring local installation.

```shell
./vendor/bin/sail node -v
./vendor/bin/sail npm -v
```

--------------------------------

### Remove prefix from string start using Str::chopStart()

Source: https://laravel.com/docs/12.x/strings

The `Str::chopStart()` method removes the first occurrence of a given value only if it appears at the start of the string. Accepts string or array of values to remove.

```php
use Illuminate\Support\Str;

$url = Str::chopStart('https://laravel.com', 'https://');

// 'laravel.com'

$url = Str::chopStart('http://laravel.com', ['https://', 'http://']);

// 'laravel.com'
```

--------------------------------

### Check Eloquent Model Attributes Changed After Save (PHP)

Source: https://laravel.com/docs/12.x/eloquent

This snippet illustrates the `wasChanged()` method in Laravel Eloquent, which determines if any attributes were modified during the last save operation within the current request cycle. It shows how to check for general changes or specific attribute changes, accepting single attribute names or arrays of names. This is useful for post-save actions that depend on what was updated.

```php
$user = User::create([
    'first_name' => 'Taylor',
    'last_name' => 'Otwell',
    'title' => 'Developer',
]);

$user->title = 'Painter';

$user->save();

$user->wasChanged(); // true
$user->wasChanged('title'); // true
$user->wasChanged(['title', 'slug']); // true
$user->wasChanged('first_name'); // false
$user->wasChanged(['first_name', 'title']); // true
```

--------------------------------

### Create FrankenPHP Dockerfile for Laravel

Source: https://laravel.com/docs/12.x/octane

Dockerfile configuration for containerizing a Laravel application with FrankenPHP. Installs PHP extensions like pcntl and sets up the Octane entry point. This image is suitable for both local development and production environments.

```dockerfile
FROM dunglas/frankenphp

RUN install-php-extensions \
    pcntl
    # Add other PHP extensions here...

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
```

--------------------------------

### Install Mailgun Mailer Transport via Composer

Source: https://laravel.com/docs/12.x/mail

Install Symfony's Mailgun Mailer transport and HTTP client dependencies required to use the Mailgun driver for sending emails through Mailgun's API.

```shell
composer require symfony/mailgun-mailer symfony/http-client
```

--------------------------------

### Install Laravel Socialite Package

Source: https://laravel.com/docs/12.x/socialite

This command uses Composer to add the `laravel/socialite` package to your project's dependencies. It's the first step to enable OAuth authentication with various providers in your Laravel application.

```shell
composer require laravel/socialite
```

--------------------------------

### Example: Testing Time-Sensitive Application Behavior (Forum Thread Locking)

Source: https://laravel.com/docs/12.x/mocking

This practical example demonstrates how to use time manipulation helpers to test a time-sensitive feature, specifically the automatic locking of forum threads after a period of inactivity. By traveling forward in time, the test can verify that the `isLockedByInactivity()` method correctly returns `true` after one week, ensuring the application's logic functions as expected under different time conditions.

```php
use App\Models\Thread;

test('forum threads lock after one week of inactivity', function () {
    $thread = Thread::factory()->create();

    $this->travel(1)->week();

    expect($thread->isLockedByInactivity())->toBeTrue();
});
```

```php
use App\Models\Thread;

public function test_forum_threads_lock_after_one_week_of_inactivity()
{
    $thread = Thread::factory()->create();

    $this->travel(1)->week();

    $this->assertTrue($thread->isLockedByInactivity());
}
```

--------------------------------

### Replace Value at String Start (PHP)

Source: https://laravel.com/docs/12.x/strings

The `replaceStart` method replaces the first occurrence of a value only if it appears at the beginning of the string. If the string does not start with the specified value, no replacement occurs, and the original string is returned.

```php
use Illuminate\Support\Str;

$replaced = Str::of('Hello World')->replaceStart('Hello', 'Laravel');

// Laravel World

$replaced = Str::of('Hello World')->replaceStart('World', 'Laravel');

// Hello World
```

--------------------------------

### Create Valet Proxies for Local Services

Source: https://laravel.com/docs/12.x/valet

This snippet illustrates how to use the `valet proxy` command to forward traffic from a Valet domain to another local service, such as a Docker container. It includes examples for both standard HTTP proxying and secure proxying with TLS/HTTP2. This is useful when Valet and another service need to use the same port.

```shell
# Proxy over HTTP...
valet proxy elasticsearch http://127.0.0.1:9200
```

```shell
# Proxy over TLS + HTTP/2...
valet proxy elasticsearch http://127.0.0.1:9200 --secure
```

--------------------------------

### Register Singleton Service with Request Injection - Laravel

Source: https://laravel.com/docs/12.x/octane

Demonstrates how to register a service as a singleton with the HTTP request instance injected. This example shows the problematic pattern where the request is captured at boot time and reused across requests, causing stale request data. The binding uses the Application container to resolve the request instance during registration.

```php
use App\Service;
use Illuminate\Contracts\Foundation\Application;

/**
 * Register any application services.
 */
public function register(): void
{
    $this->app->singleton(Service::class, function (Application $app) {
        return new Service($app['request']);
    });
}
```

--------------------------------

### Get Session Data with Default Values

Source: https://laravel.com/docs/12.x/session

Retrieve session values with fallback defaults using the get() method. Supports both static default values and dynamic closures that execute only when the key is missing.

```php
$value = $request->session()->get('key', 'default');

$value = $request->session()->get('key', function () {
    return 'default';
});
```

--------------------------------

### Enabling and Disabling Features

Source: https://laravel.com/docs/12.x/starter-kits

Control which Fortify features are enabled or disabled in your application's `config/fortify.php` configuration file.

```APIDOC
## Enabling and Disabling Features

Control which Fortify features are enabled in your application's `config/fortify.php` configuration file:

```php
use Laravel\Fortify\Features;

'features' => [
    Features::registration(),
    Features::resetPasswords(),
    Features::emailVerification(),
    Features::twoFactorAuthentication([
        'confirm' => true,
        'confirmPassword' => true,
    ]),
],
```

To disable a feature, comment out or remove that feature entry from the `features` array. For example, remove `Features::registration()` to disable public registration.

When using the [React](#react) or [Vue](#vue) starter kits, you will also need to remove any references to the disabled feature's routes in your frontend code. For example, if you disable email verification, you should remove the imports and references to the `verification` routes in your Vue or React components. This is necessary because these starter kits use Wayfinder for type-safe routing, which generates route definitions at build time. If you reference routes that no longer exist, your application will fail to build.
```

--------------------------------

### Install Vite React Plugin for Laravel

Source: https://laravel.com/docs/12.x/vite

Installs the `@vitejs/plugin-react` package as a development dependency. This plugin is necessary to enable React.js support within a Laravel project using Vite, allowing for the compilation of React components.

```shell
npm install --save-dev @vitejs/plugin-react
```

--------------------------------

### Render the first matching attribute (Blade)

Source: https://laravel.com/docs/12.x/blade

Explains how to retrieve and render only the first attribute that matches a specific condition, such as starting with a given string, by chaining `whereStartsWith` with `first()`.

```blade
{{ $attributes->whereStartsWith('wire:model')->first() }}
```

--------------------------------

### Configure Broadcasting Routes in Bootstrap Application

Source: https://laravel.com/docs/12.x/broadcasting

Register broadcasting routes in the application's bootstrap configuration file to handle authorization requests for private channels. The withRouting() method accepts a channels parameter pointing to the routes/channels.php file where channel authorization callbacks are defined.

```php
->withRouting(
    web: __DIR__.'/../routes/web.php',
    channels: __DIR__.'/../routes/channels.php',
    health: '/up',
)
```

--------------------------------

### Basic Facade Usage in Laravel PHP

Source: https://laravel.com/docs/12.x/facades

This code snippet illustrates how to use Laravel facades, specifically `Route` and `Cache`, to define a web route and interact with the caching system. It shows importing facades from `Illuminate\Support\Facades` and then calling static methods on them. The `Route::get` method defines a GET endpoint, and `Cache::get` retrieves a value from the cache.

```php
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/cache', function () {
    return Cache::get('key');
});
```

--------------------------------

### whenDoesntStartWith - Conditional String Transformation

Source: https://laravel.com/docs/12.x/strings

Invokes a closure if the string doesn't start with a given sub-string. The closure receives the fluent string instance and can transform it. Useful for conditional string manipulation based on prefix absence.

```php
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

$string = Str::of('disney world')->whenDoesntStartWith('sea', function (Stringable $string) {
    return $string->title();
});

// 'Disney World'
```

--------------------------------

### Octane-Friendly Service Registration with Container Resolver

Source: https://laravel.com/docs/12.x/octane

Provides two Octane-friendly alternatives for service registration: using bind() instead of singleton(), or injecting a container resolver closure that always returns the current container instance. This prevents stale container references across requests in long-running Octane applications.

```php
use App\Service;
use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;

$this->app->bind(Service::class, function (Application $app) {
    return new Service($app);
});

$this->app->singleton(Service::class, function () {
    return new Service(fn () => Container::getInstance());
});
```

--------------------------------

### Install Chokidar for Laravel Horizon automatic restarts

Source: https://laravel.com/docs/12.x/horizon

This command installs the Chokidar file-watching library as a development dependency. Chokidar is required for Laravel Horizon's `horizon:listen` command to automatically detect and reload code changes during local development, preventing manual restarts.

```shell
npm install --save-dev chokidar
```

--------------------------------

### Extend Subscription Trial Period (Laravel Cashier)

Source: https://laravel.com/docs/12.x/cashier-paddle

Provides an example of extending an existing trial period for a subscription. The 'extendTrial' method is called on the subscription instance, specifying the new desired end date for the trial.

```php
$user->subscription()->extendTrial(now()->plus(days: 5));
```

--------------------------------

### SQL Generated from whereExists - Query Builder Output

Source: https://laravel.com/docs/12.x/queries

Example SQL output generated by the whereExists method. Demonstrates the WHERE EXISTS clause structure with a subquery checking for related orders.

```sql
select * from users
where exists (
    select 1
    from orders
    where orders.user_id = users.id
)
```

--------------------------------

### Create Cookie Instance with cookie() Helper

Source: https://laravel.com/docs/12.x/helpers

The cookie() function creates a new cookie instance with the specified name, value, and expiration time in minutes.

```php
$cookie = cookie('name', 'value', $minutes);
```

--------------------------------

### List Broadcast Authorization Callbacks with Artisan

Source: https://laravel.com/docs/12.x/broadcasting

Execute the channel:list Artisan command to display all registered broadcast authorization callbacks in the application. This helps developers review and audit channel authorization configurations.

```shell
php artisan channel:list
```

--------------------------------

### Access Package Translation Lines in Laravel

Source: https://laravel.com/docs/12.x/packages

Retrieves translation strings from a package using the trans() helper with the package::file.line syntax. Example shows loading the welcome line from the messages file of the courier package.

```php
echo trans('courier::messages.welcome');
```

--------------------------------

### Display Paddle Checkout Button (Blade/HTML)

Source: https://laravel.com/docs/12.x/cashier-paddle

This Blade component example shows how to render a button that triggers the Paddle Checkout Overlay. The `x-paddle-button` component, provided by Cashier Paddle, takes the `$checkout` object (created in the backend) as a prop and displays a customizable button for initiating the purchase.

```html
<x-paddle-button :checkout="$checkout" class="px-8 py-4">
    Buy Product
</x-paddle-button>
```

--------------------------------

### Retrieve All Payment Methods for a Billable Model (Laravel Cashier)

Source: https://laravel.com/docs/12.x/billing

This PHP example shows how to fetch a collection of all payment methods associated with a billable model using Laravel Cashier's `paymentMethods()` method. It returns `Laravel\Cashier\PaymentMethod` instances.

```php
$paymentMethods = $user->paymentMethods();
```

--------------------------------

### Running All Laravel Dusk Browser Tests

Source: https://laravel.com/docs/12.x/dusk

Command to execute all configured Laravel Dusk browser tests. This is the primary way to initiate your Dusk test suite from the command line.

```shell
php artisan dusk
```

--------------------------------

### Start Laravel Horizon with polling for Docker/Vagrant

Source: https://laravel.com/docs/12.x/horizon

This command starts the Laravel Horizon queue worker in listen mode with the `--poll` option. The polling mechanism is necessary when running Horizon within virtualized environments like Docker or Vagrant, where file system events might not be reliably detected by default.

```shell
php artisan horizon:listen --poll
```

--------------------------------

### Install Vite Plugin for Subresource Integrity (Shell)

Source: https://laravel.com/docs/12.x/vite

This shell command installs the `vite-plugin-manifest-sri` NPM package as a development dependency. This plugin is required to enable Subresource Integrity (SRI) hash generation in your Vite manifest.

```shell
npm install --save-dev vite-plugin-manifest-sri
```

--------------------------------

### Parking a Directory for Automatic Site Serving with Laravel Valet

Source: https://laravel.com/docs/12.x/valet

The `valet park` command registers a directory, making all subdirectories within it automatically accessible as local websites (e.g., `http://<directory-name>.test`). This simplifies local development by eliminating the need to configure each site individually.

```shell
cd ~/Sites

valet park
```

--------------------------------

### Retrieve Current Discount for Laravel Cashier Billable or Subscription

Source: https://laravel.com/docs/12.x/billing

These examples show how to retrieve the currently applied discount for a billable model (e.g., a user) or a specific subscription. The returned object is an instance of `Laravel\Cashier\Discount`.

```php
$discount = $billable->discount();

$discount = $subscription->discount();
```

--------------------------------

### Install Laravel MongoDB Package via Composer

Source: https://laravel.com/docs/12.x/mongodb

Install the officially maintained mongodb/laravel-mongodb package using Composer. This package provides rich integration with Eloquent and other Laravel features for MongoDB database operations.

```shell
composer require mongodb/laravel-mongodb
```

--------------------------------

### Perform Basic HTTP Redirect in Laravel Route

Source: https://laravel.com/docs/12.x/responses

Demonstrates a fundamental HTTP redirect in Laravel, sending the user to a new URL. This example uses the global `redirect` helper within a route definition to return a `RedirectResponse`.

```php
Route::get('/dashboard', function () {
    return redirect('/home/dashboard');
});
```

--------------------------------

### Manually Control Echo Channel Listeners in React

Source: https://laravel.com/docs/12.x/broadcasting

Shows how to use the returned functions from useEcho hook to manually control channel subscription state in React. Allows programmatic stopping, starting, and leaving of channels independent of component lifecycle.

```javascript
import { useEcho } from "@laravel/echo-react";

const { leaveChannel, leave, stopListening, listen } = useEcho(
    `orders.${orderId}`,
    "OrderShipmentStatusUpdated",
    (e) => {
        console.log(e.order);
    },
);

// Stop listening without leaving channel...
stopListening();

// Start listening again...
listen();

// Leave channel...
leaveChannel();

// Leave a channel and also its associated private and presence channels...
leave();
```

--------------------------------

### Configure GitHub Actions for Laravel Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Set up GitHub Actions workflow to run Dusk tests with MySQL database, environment configuration, and Chrome driver management. The workflow includes artifact uploads for screenshots and console logs on test failure, providing comprehensive debugging information.

```yaml
name: CI
on: [push]
jobs:

  dusk-php:
    runs-on: ubuntu-latest
    env:
      APP_URL: "http://127.0.0.1:8000"
      DB_USERNAME: root
      DB_PASSWORD: root
      MAIL_MAILER: log
    steps:
      - uses: actions/checkout@v5
      - name: Prepare The Environment
        run: cp .env.example .env
      - name: Create Database
        run: |
          sudo systemctl start mysql
          mysql --user="root" --password="root" -e "CREATE DATABASE \`my-database\` character set UTF8mb4 collate utf8mb4_bin;"
      - name: Install Composer Dependencies
        run: composer install --no-progress --prefer-dist --optimize-autoloader
      - name: Generate Application Key
        run: php artisan key:generate
      - name: Upgrade Chrome Driver
        run: php artisan dusk:chrome-driver --detect
      - name: Start Chrome Driver
        run: ./vendor/laravel/dusk/bin/chromedriver-linux --port=9515 &
      - name: Run Laravel Server
        run: php artisan serve --no-reload &
      - name: Run Dusk Tests
        run: php artisan dusk
      - name: Upload Screenshots
        if: failure()
        uses: actions/upload-artifact@v4
        with:
          name: screenshots
          path: tests/Browser/screenshots
      - name: Upload Console Logs
        if: failure()
        uses: actions/upload-artifact@v4
        with:
          name: console
          path: tests/Browser/console
```

--------------------------------

### Unisolate a Valet Site

Source: https://laravel.com/docs/12.x/valet

To revert a site back to using Valet's globally installed PHP version, run the `unisolate` command from the site's root directory. This removes any per-site PHP version configuration.

```shell
valet unisolate
```

--------------------------------

### Get All Defined Scopes as Objects in Laravel Passport

Source: https://laravel.com/docs/12.x/passport

Returns an array of all defined scopes as Laravel\Passport\Scope instances. Provides detailed scope information including names, descriptions, and other metadata.

```php
Passport::scopes();
```

--------------------------------

### Set Execution Timeout for Laravel Process

Source: https://laravel.com/docs/12.x/processes

This example shows how to configure a maximum execution time for a process using the `timeout` method. If the process exceeds the specified duration (e.g., 120 seconds), an `Illuminate\Process\Exceptions\ProcessTimedOutException` will be thrown.

```php
$result = Process::timeout(120)->run('bash import.sh');
```

--------------------------------

### Multi-search with Custom Scroll Configuration

Source: https://laravel.com/docs/12.x/prompts

Customizes the number of visible options before scrolling in multi-selection mode. Default is five options; this example increases it to ten for better visibility of available choices.

```php
$ids = multisearch(
    label: 'Search for the users that should receive the mail',
    options: fn (string $value) => strlen($value) > 0
        ? User::whereLike('name', "%{$value}%")->pluck('name', 'id')->all()
        : [],
    scroll: 10
);
```

--------------------------------

### Install Laravel Pint via Composer

Source: https://laravel.com/docs/12.x/pint

Install Laravel Pint as a development dependency using Composer. This is typically unnecessary for new Laravel applications as Pint is included by default, but required for older applications.

```shell
composer require laravel/pint --dev
```

--------------------------------

### Create and Chain Collection Methods in PHP

Source: https://laravel.com/docs/12.x/collections

Demonstrates creating a collection from an array using the collect helper, then chaining map and reject methods to transform and filter data. The example converts names to uppercase and removes empty values, showcasing Laravel's fluent interface pattern.

```php
$collection = collect(['Taylor', 'Abigail', null])->map(function (?string $name) {
    return strtoupper($name);
})->reject(function (string $name) {
    return empty($name);
});
```

--------------------------------

### Check if string doesn't start with value using doesntStartWith

Source: https://laravel.com/docs/12.x/strings

The doesntStartWith method determines if a string doesn't begin with a given value. Accepts a single string or array of values to check against. Returns boolean true if the string doesn't start with any of the provided values.

```php
use Illuminate\Support\Str;

$result = Str::of('This is my name')->doesntStartWith('That');
// true

$result = Str::of('This is my name')->doesntStartWith(['What', 'That', 'There']);
// true
```

--------------------------------

### Autoloading Blade Components by Namespace for Packages

Source: https://laravel.com/docs/12.x/blade

This example demonstrates how to use `Blade::componentNamespace()` to automatically discover and load Blade component classes from a specified PHP namespace within a package. This allows components to be referenced using a vendor namespace prefix (e.g., `x-package-name::component-name`) in Blade templates, simplifying component usage for package developers.

```php
use Illuminate\Support\Facades\Blade;

/**
 * Bootstrap your package's services.
 */
public function boot(): void
{
    Blade::componentNamespace('Nightshade\\Views\\Components', 'nightshade');
}
```

```blade
<x-nightshade::calendar />
<x-nightshade::color-picker />
```

--------------------------------

### Injecting Service Dependencies into a Laravel Controller Constructor

Source: https://laravel.com/docs/12.x/container

This PHP example demonstrates how to inject a service dependency, `AppleMusic`, into a Laravel controller's constructor. This approach allows the controller to utilize the service's methods for data retrieval, such as `findPodcast`, while also facilitating easy mocking of the service for application testing.

```php
<?php

namespace App\Http\Controllers;

use App\Services\AppleMusic;
use Illuminate\View\View;

class PodcastController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected AppleMusic $apple,
    ) {}

    /**
     * Show information about the given podcast.
     */
    public function show(string $id): View
    {
        return view('podcasts.show', [
            'podcast' => $this->apple->findPodcast($id)
        ]);
    }
}
```

--------------------------------

### SQL Generated from Logical Grouping - Query Builder Output

Source: https://laravel.com/docs/12.x/queries

Example SQL output generated by the logical grouping closure pattern. Demonstrates how the query builder converts PHP method calls into SQL with proper parentheses grouping.

```sql
select * from users where name = 'John' and (votes > 100 or title = 'Admin')
```

--------------------------------

### Generate Passport Encryption Keys for Deployment

Source: https://laravel.com/docs/12.x/passport

When deploying Passport to your application's servers for the first time, run this Artisan command. It generates the encryption keys Passport needs to generate access tokens, which are typically not kept in source control.

```shell
php artisan passport:keys
```

--------------------------------

### Import and Use shadcn-vue Switch Component in Vue

Source: https://laravel.com/docs/12.x/starter-kits

Demonstrates importing the Switch component from shadcn-vue and using it within a Vue 3 Composition API component with script setup syntax. The component is rendered inside a template div element.

```vue
<script setup lang="ts">
import { Switch } from '@/components/ui/switch'
</script>

<template>
    <div>
        <Switch />
    </div>
</template>
```

--------------------------------

### Retrieve Environment Variable in Laravel PHP Configuration

Source: https://laravel.com/docs/12.x/configuration

This example shows how to use the `env()` helper function within Laravel's PHP configuration files to retrieve environment variables. It also illustrates providing a default value (e.g., `false`) that will be used if the specified environment variable is not found in the `.env` file.

```php
'debug' => (bool) env('APP_DEBUG', false),
```

--------------------------------

### Execute Asynchronous Processes in Laravel

Source: https://laravel.com/docs/12.x/processes

Invokes processes asynchronously using the start() method, allowing the application to continue while the process runs in the background. Uses running() to check status and wait() to retrieve results.

```php
$process = Process::timeout(120)->start('bash import.sh');

while ($process->running()) {
    // ...
}

$result = $process->wait();
```

--------------------------------

### take - Extract specified number of characters

Source: https://laravel.com/docs/12.x/strings

Returns a specified number of characters from the beginning of the string. Useful for truncating strings to a maximum length from the start.

```php
use Illuminate\Support\Str;

$taken = Str::of('Build something amazing!')->take(5);
// Build
```

--------------------------------

### Run Laravel Dusk Browser Tests

Source: https://laravel.com/docs/12.x/sail

Execute browser automation tests using Laravel Dusk with Sail. This command runs the Dusk test suite against the configured Selenium service without requiring local Selenium installation.

```shell
sail dusk
```

--------------------------------

### Publish Passport Configuration File

Source: https://laravel.com/docs/12.x/passport

To customize Passport's settings or load keys from environment variables, publish its configuration file. Use the `vendor:publish` Artisan command with the `passport-config` tag.

```shell
php artisan vendor:publish --tag=passport-config
```

--------------------------------

### Call Cache Methods Using Global cache Helper

Source: https://laravel.com/docs/12.x/cache

Invokes the global cache function without arguments to get a Cache Factory instance, allowing access to other caching methods like remember, put, and get.

```php
cache()->remember('users', $seconds, function () {
    return DB::table('users')->get();
});
```

--------------------------------

### Use Custom Keyboard Macros in Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Execute previously defined keyboard macros within test chains using the withKeyboard method. The example shows copying from one textarea and pasting into another using the custom macros defined in the service provider.

```php
$browser->click('@textarea')
    ->withKeyboard(fn (Keyboard $keyboard) => $keyboard->copy())
    ->click('@another-textarea')
    ->withKeyboard(fn (Keyboard $keyboard) => $keyboard->paste());
```

--------------------------------

### Capture DB queries in context stack in PHP

Source: https://laravel.com/docs/12.x/context

Provides an example of using a database event listener in Laravel to capture query details (time, SQL) and push them onto a context stack. This demonstrates how stacks can be used for historical tracking of application events, such as database interactions.

```php
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\DB;

// In AppServiceProvider.php...
DB::listen(function ($event) {
    Context::push('queries', [$event->time, $event->sql]);
});
```

--------------------------------

### Apply Bind and Singleton Attributes to Laravel Interface (PHP)

Source: https://laravel.com/docs/12.x/container

This example combines the `#[Bind]` attribute with the `#[Singleton]` attribute on an interface. The `Bind` attribute specifies the concrete implementation, while `Singleton` ensures that the container resolves the implementation only once per application lifecycle. This guarantees that the same instance is always returned for `EventPusher`.

```php
use App\Services\RedisEventPusher;
use Illuminate\Container\Attributes\Bind;
use Illuminate\Container\Attributes\Singleton;

#[Bind(RedisEventPusher::class)]
#[Singleton]
interface EventPusher
{
    // ...
}
```

--------------------------------

### Textarea Prompt - With Options

Source: https://laravel.com/docs/12.x/prompts

Create a textarea prompt with placeholder text, default value, and informational hint. Enhances user experience for multi-line input with visual guidance.

```php
$story = textarea(
    label: 'Tell me a story.',
    placeholder: 'This is a story about...',
    hint: 'This will be displayed on your profile.'
);
```

--------------------------------

### Setup Laravel Pint with GitHub Actions CI/CD

Source: https://laravel.com/docs/12.x/pint

Configure GitHub Actions workflow to automatically run Laravel Pint on every push to fix code style issues. Creates a .github/workflows/lint.yml file that checks out code, sets up PHP 8.4, runs Pint, and auto-commits linted files.

```yaml
name: Fix Code Style

on: [push]

jobs:
  lint:
    runs-on: ubuntu-latest
    strategy:
      fail-fast: true
      matrix:
        php: [8.4]

    steps:
      - name: Checkout code
        uses: actions/checkout@v5

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: ${{ matrix.php }}
          tools: pint

      - name: Run Pint
        run: pint

      - name: Commit linted files
        uses: stefanzweifel/git-auto-commit-action@v6
```

--------------------------------

### Define Job Class with Handle Method

Source: https://laravel.com/docs/12.x/queues

Creates a basic job class that implements ShouldQueue and uses the Queueable trait. The constructor accepts an Eloquent model (Podcast) which is automatically serialized/unserialized by the queue system. The handle method contains the job logic and supports dependency injection for services like AudioProcessor.

```php
<?php

namespace App\Jobs;

use App\Models\Podcast;
use App\Services\AudioProcessor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessPodcast implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Podcast $podcast,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(AudioProcessor $processor): void
    {
        // Process uploaded podcast...
    }
}
```

--------------------------------

### GET /photos

Source: https://laravel.com/docs/12.x/controllers

Retrieve a list of all photo resources. This is the index action of a resource controller that returns a collection of photos.

```APIDOC
## GET /photos

### Description
Retrieve a list of all photo resources.

### Method
GET

### Endpoint
/photos

### Route Name
photos.index

### Controller Action
PhotoController@index

### Response
#### Success Response (200)
- **photos** (array) - Collection of photo resources

#### Response Example
[
  {
    "id": 1,
    "title": "Photo Title",
    "url": "https://example.com/photo.jpg"
  }
]
```

--------------------------------

### Add Prefix to String in PHP Laravel

Source: https://laravel.com/docs/12.x/strings

The Str::start method adds a single instance of a given value to the beginning of a string if it does not already start with that value. Prevents duplicate prefixes.

```php
use Illuminate\Support\Str;

$adjusted = Str::start('this/string', '/');

// /this/string

$adjusted = Str::start('/this/string', '/');

// /this/string
```

--------------------------------

### Create Paddle Customer Without Subscription in Laravel (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP code shows how to create a customer record in Paddle without immediately starting a subscription. It returns an instance of `Laravel\Paddle\Customer`, allowing for later subscription initiation or other customer-related operations.

```php
$customer = $user->createAsCustomer();
```

--------------------------------

### Process Multiple Queues by Priority - Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue worker that processes jobs from multiple queues in specified priority order. The comma-delimited queue names ensure high priority jobs are processed before lower priority ones.

```shell
php artisan queue:work --queue=high,low
```

--------------------------------

### Storing AI Files from Paths, Storage, and URLs in Laravel AI

Source: https://laravel.com/docs/12.x/ai-sdk

This set of examples illustrates various ways to store files (documents and images) with your AI provider using the `Laravel\Ai\Files` classes. It covers storing files from local file paths, from Laravel's filesystem disks, and directly from remote URLs.

```php
use Laravel\Ai\Files\Document;
use Laravel\Ai\Files\Image;

// Store a file from a local path...
$response = Document::fromPath('/home/laravel/document.pdf')->put();
$response = Image::fromPath('/home/laravel/photo.jpg')->put();

// Store a file that is stored on a filesystem disk...
$response = Document::fromStorage('document.pdf', disk: 'local')->put();
$response = Image::fromStorage('photo.jpg', disk: 'local')->put();

// Store a file that is stored on a remote URL...
$response = Document::fromUrl('https://example.com/document.pdf')->put();
$response = Image::fromUrl('https://example.com/photo.jpg')->put();

return $response->id;
```

--------------------------------

### Set Laravel Job Connection in Constructor

Source: https://laravel.com/docs/12.x/queues

This example shows how to configure a Laravel job's queue connection directly within its constructor. By calling `$this->onConnection('sqs')`, the job will always be dispatched to the 'sqs' connection by default, centralizing connection configuration for the job.

```php
<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessPodcast implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->onConnection('sqs');
    }
}
```

--------------------------------

### Handle Laravel Precognition Form Submissions (HTML)

Source: https://laravel.com/docs/12.x/precognition

This snippet demonstrates two ways to handle form submissions with Laravel Precognition. The first example shows a traditional server-side submission with old input repopulation and error display. The second example illustrates an XHR submission using the form's `submit()` function, including success and error handling.

```html
<form x-data="{
    form: $form('post', '/register', {
        name: '{{ old('name') }}',
        email: '{{ old('email') }}',
    }).setErrors({{ Js::from($errors->messages()) }}),
}">
```

```html
<form
    x-data="{
        form: $form('post', '/register', {
            name: '',
            email: '',
        }),
        submit() {
            this.form.submit()
                .then(response => {
                    this.form.reset();

                    alert('User created.')
                })
                .catch(error => {
                    alert('An error occurred.');
                });
        },
    }"
    @submit.prevent="submit"
>
```

--------------------------------

### Handle File Uploads with Laravel Precognition (PHP/JavaScript)

Source: https://laravel.com/docs/12.x/precognition

This snippet demonstrates how to manage file uploads with Laravel Precognition. The PHP example shows how to conditionally make a file field `required` only for full form submissions, avoiding unnecessary uploads during precognitive validation. The JavaScript example illustrates how to explicitly include files in a precognitive validation request using `form.validateFiles()`.

```php
/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
protected function rules()
{
    return [
        'avatar' => [
            ...$this->isPrecognitive() ? [] : ['required'],
            'image',
            'mimes:jpg,png',
            'dimensions:ratio=3/2',
        ],
        // ...
    ];
}
```

```js
form.validateFiles();
```

--------------------------------

### Reference Package View in Laravel Route

Source: https://laravel.com/docs/12.x/packages

This PHP example shows how to load a view from a registered package within a Laravel route closure. Once the package views are registered, they can be accessed using the `package::view-name` convention, such as `courier::dashboard`.

```php
Route::get('/dashboard', function () {
    return view('courier::dashboard');
});
```

--------------------------------

### Clear Jobs from Laravel Queues using Artisan Command

Source: https://laravel.com/docs/12.x/queues

This Artisan command allows you to delete all jobs from a queue. The first example clears jobs from the default queue of the default connection. The second example shows how to specify a `connection` and `queue` to clear jobs from a particular queue.

```shell
php artisan queue:clear
```

```shell
php artisan queue:clear redis --queue=emails
```

--------------------------------

### GET /invoices - Retrieve User Invoices

Source: https://laravel.com/docs/12.x/billing

Retrieves an array of all invoices for a billable model. Returns a collection of Laravel\Cashier\Invoice instances.

```APIDOC
## GET /invoices

### Description
Retrieves all invoices for a billable user. Returns a collection of Laravel\Cashier\Invoice instances with invoice details and methods.

### Method
GET

### Endpoint
/invoices

### Request Example
```php
$invoices = $user->invoices();
```

### Response
#### Success Response (200)
- **invoices** (array) - Collection of Invoice objects
  - **id** (string) - Invoice ID
  - **date** (datetime) - Invoice date
  - **total** (string) - Invoice total amount

#### Response Example
```json
{
  "invoices": [
    {
      "id": "in_1234567890",
      "date": "2024-01-15",
      "total": "$99.99"
    }
  ]
}
```

### Notes
- Does not include pending invoices by default
- Use invoicesIncludingPending() to include pending invoices
- Each invoice has methods like date(), total(), and download()
```

--------------------------------

### Assign String Keys to Concurrent Pool Processes in Laravel (PHP)

Source: https://laravel.com/docs/12.x/processes

This snippet shows how to assign descriptive string keys to individual processes within a concurrent pool using the `as` method. This improves readability when accessing results and allows the `start` method's callback to identify which process generated specific output.

```php
$pool = Process::pool(function (Pool $pool) {
    $pool->as('first')->command('bash import-1.sh');
    $pool->as('second')->command('bash import-2.sh');
    $pool->as('third')->command('bash import-3.sh');
})->start(function (string $type, string $output, string $key) {
    // ...
});

$results = $pool->wait();

return $results['first']->output();
```

--------------------------------

### Register a Custom Laravel Scout Engine with Engine Manager

Source: https://laravel.com/docs/12.x/scout

This PHP example illustrates how to register a custom Laravel Scout search engine using the `extend` method of the `EngineManager`. This registration typically occurs within the `boot` method of a service provider, such as `App\Providers\AppServiceProvider`, making the custom engine available for use throughout the application. The `extend` method takes a driver name and a closure that returns an instance of your custom engine.

```php
use App\ScoutExtensions\MySqlSearchEngine;
use Laravel\Scout\EngineManager;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    resolve(EngineManager::class)->extend('mysql', function () {
        return new MySqlSearchEngine;
    });
}
```

--------------------------------

### Implement ShouldBroadcast Interface on Event Class

Source: https://laravel.com/docs/12.x/broadcasting

Create a Laravel event class that implements the ShouldBroadcast interface to enable broadcasting. This marks the event for real-time distribution to connected clients. The example shows an OrderShipmentStatusUpdated event with an order property that will be broadcast to listeners.

```php
<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class OrderShipmentStatusUpdated implements ShouldBroadcast
{
    /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    public $order;
}
```

--------------------------------

### Broadcast Anonymous Event Immediately (Without Queue) in Laravel PHP

Source: https://laravel.com/docs/12.x/broadcasting

This example demonstrates how to broadcast an anonymous event immediately, bypassing the queue system. The `sendNow` method is used instead of `send` to dispatch the event synchronously.

```php
Broadcast::on('orders.'.$order->id)->sendNow();
```

--------------------------------

### Load Page Context with On Method

Source: https://laravel.com/docs/12.x/dusk

Use the `on` method to load a page's selectors and methods into the current test context without explicit navigation. This is useful when a button press redirects to a page, and you need to verify the new page state.

```php
use Tests\Browser\Pages\CreatePlaylist;

$browser->visit('/dashboard')
    ->clickLink('Create Playlist')
    ->on(new CreatePlaylist)
    ->assertSee('@create');
```

--------------------------------

### Install Vite Vue Plugin for Laravel

Source: https://laravel.com/docs/12.x/vite

Installs the `@vitejs/plugin-vue` package as a development dependency. This plugin is required to enable Vue.js support within a Laravel project using Vite, allowing you to compile Vue components.

```shell
npm install --save-dev @vitejs/plugin-vue
```

--------------------------------

### Customize User Creation in Laravel Fortify

Source: https://laravel.com/docs/12.x/starter-kits

Customize the user registration logic by modifying the CreateNewUser action class in app/Actions/Fortify/CreateNewUser.php. This example demonstrates adding a phone field to the user creation validation and database insertion. The create method validates input data and returns a newly created User instance with hashed password.

```php
public function create(array $input): User
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:20'],
        'password' => $this->passwordRules(),
    ])->validate();

    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'phone' => $input['phone'],
        'password' => Hash::make($input['password']),
    ]);
}
```

--------------------------------

### Get Authenticator Instance with auth() Helper

Source: https://laravel.com/docs/12.x/helpers

The auth() function returns an authenticator instance as an alternative to the Auth facade. It allows retrieving the current user or accessing specific guard instances by passing a guard name parameter.

```php
$user = auth()->user();

$user = auth('admin')->user();
```

--------------------------------

### Get Paginator Options - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Retrieves all configuration options associated with the paginator instance. Returns an array containing paginator settings and metadata.

```php
$paginator->getOptions()
```

--------------------------------

### Example of Readable Encrypted Laravel .env File Format

Source: https://laravel.com/docs/12.x/configuration

This snippet shows the format of an `.env.encrypted` file when the `--readable` option is used during encryption. Variable names remain visible, while their corresponding values are replaced with encrypted strings, enhancing security without sacrificing clarity.

```ini
APP_NAME=eyJpdiI6...
APP_ENV=eyJpdiI6...
APP_KEY=eyJpdiI6...
APP_DEBUG=eyJpdiI6...
APP_URL=eyJpdiI6...
```

--------------------------------

### Check if string does not start with substring with Str::doesntStartWith() in PHP

Source: https://laravel.com/docs/12.x/strings

The `Str::doesntStartWith` method verifies if a string does not begin with a particular value. It can also accept an array of values, returning true if the string does not start with any of the elements in the array. This is useful for filtering or routing based on string prefixes.

```php
use Illuminate\Support\Str;

$result = Str::doesntStartWith('This is my name', 'That');

// true
```

```php
use Illuminate\Support\Str;

$result = Str::doesntStartWith('This is my name', ['What', 'That', 'There']);

// true
```

--------------------------------

### Channel Authorization with Model Binding

Source: https://laravel.com/docs/12.x/broadcasting

Leverage implicit route model binding in channel authorization callbacks to receive actual model instances instead of raw IDs. This example shows binding an Order model to the {order} wildcard parameter, allowing direct access to the Order instance for authorization logic. The callback receives the authenticated User and Order model instances.

```php
use App\Models\Order;
use App\Models\User;

Broadcast::channel('orders.{order}', function (User $user, Order $order) {
    return $user->id === $order->user_id;
});
```

--------------------------------

### Switch Vue Layout from Sidebar to Header

Source: https://laravel.com/docs/12.x/starter-kits

Changes the primary application layout in Vue starter kit from the default sidebar layout to header layout by modifying the import statement in AppLayout.vue file.

```javascript
import AppLayout from '@/layouts/app/AppSidebarLayout.vue'; // [tl! remove]
import AppLayout from '@/layouts/app/AppHeaderLayout.vue'; // [tl! add]
```

--------------------------------

### Cache Routes for Performance Optimization

Source: https://laravel.com/docs/12.x/deployment

Reduces all route registrations into a single method call within a cached file, significantly improving route registration performance for applications with hundreds of routes.

```shell
php artisan route:cache
```

--------------------------------

### Customize Temporary URL Generation for Laravel Storage Disks (PHP)

Source: https://laravel.com/docs/12.x/filesystem

This example demonstrates how to customize the generation of temporary URLs for a specific storage disk using the `buildTemporaryUrlsUsing` method. This is useful for disks that don't natively support temporary URLs or when custom logic, like signed routes, is required. It should typically be called from a service provider's `boot` method.

```php
<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Storage::disk('local')->buildTemporaryUrlsUsing(
            function (string $path, DateTime $expiration, array $options) {
                return URL::temporarySignedRoute(
                    'files.download',
                    $expiration,
                    array_merge($options, ['path' => $path])
                );
            }
        );
    }
}
```

--------------------------------

### Prune Batches with Custom Retention Hours

Source: https://laravel.com/docs/12.x/queues

Configure the queue:prune-batches command with the hours option to specify custom retention periods. This example deletes all batches that finished over 48 hours ago.

```php
use Illuminate\Support\Facades\Schedule;

Schedule::command('queue:prune-batches --hours=48')->daily();
```

--------------------------------

### Get Vector Store

Source: https://laravel.com/docs/12.x/ai-sdk

Retrieves the details of an existing vector store using its unique identifier.

```APIDOC
## GET /api/ai/vector-stores/{store_id}

### Description
Retrieves the details of an existing vector store using its unique identifier.

### Method
GET

### Endpoint
/api/ai/vector-stores/{store_id}

### Parameters
#### Path Parameters
- **store_id** (string) - Required - The unique identifier of the vector store to retrieve.

#### Query Parameters
- No Query Parameters

#### Request Body
- No Request Body

### Request Example
No Request Body

### Response
#### Success Response (200 OK)
- **id** (string) - The unique identifier of the vector store.
- **name** (string) - The name of the vector store.
- **fileCounts** (object) - An object containing counts of files within the store (e.g., total, indexed).
- **ready** (boolean) - Indicates whether the vector store is ready for use.

#### Response Example
{
  "id": "store_abc123",
  "name": "Knowledge Base",
  "fileCounts": {
    "total": 5,
    "indexed": 5
  },
  "ready": true
}
```

--------------------------------

### Using Stored Documents in Laravel AI Agent Conversations

Source: https://laravel.com/docs/12.x/ai-sdk

This comprehensive example demonstrates the full workflow of storing a document and then attaching it to an AI agent's prompt for analysis. It highlights how `fromId` is used to reference the stored document within the `attachments` array.

```php
use App\Ai\Agents\DocumentAnalyzer;
use Laravel\Ai\Files;
use Laravel\Ai\Files\Document;

$stored = Document::fromPath('/path/to/report.pdf')->put();

$response = (new DocumentAnalyzer)->prompt(
    'Summarize this document.',
    attachments: [
        Document::fromId($stored->id),
    ],
);
```

--------------------------------

### Build application assets with npm

Source: https://laravel.com/docs/12.x/broadcasting

Compile the application's JavaScript assets after configuring Laravel Echo. This command processes and bundles the frontend code for production use.

```shell
npm run build
```

--------------------------------

### Cache Configuration Files with Artisan

Source: https://laravel.com/docs/12.x/deployment

Combines all Laravel configuration files into a single cached file to reduce filesystem trips during configuration loading. Must ensure the env() function is only called within configuration files, as the .env file will not be loaded after caching.

```shell
php artisan config:cache
```

--------------------------------

### Examining Mailable Attachments in Laravel Assertions

Source: https://laravel.com/docs/12.x/mail

This collection of examples illustrates how to assert the presence and details of attachments on a mailable instance within a test. It covers checking attachments from a file path, from a storage disk, and from raw data, demonstrating the flexibility of Laravel's attachment assertion capabilities.

```php
use IlluminateMailMailablesAttachment;

Mail::assertSent(OrderShipped::class, function (OrderShipped $mail) {
    return $mail->hasAttachment(
        Attachment::fromPath('/path/to/file')
            ->as('name.pdf')
            ->withMime('application/pdf')
    );
});
```

```php
Mail::assertSent(OrderShipped::class, function (OrderShipped $mail) {
    return $mail->hasAttachment(
        Attachment::fromStorageDisk('s3', '/path/to/file')
    );
});
```

```php
Mail::assertSent(OrderShipped::class, function (OrderShipped $mail) use ($pdfData) {
    return $mail->hasAttachment(
        Attachment::fromData(fn () => $pdfData, 'name.pdf')
    );
});
```

--------------------------------

### Inspect Laravel HTTP Batch Instance Properties

Source: https://laravel.com/docs/12.x/http-client

Provides examples of various properties and methods available on the `Illuminate\Http\Client\Batch` instance. These can be used within callbacks to inspect the current state of the batch, such as total, pending, failed, or processed requests, and to check if the batch has finished or encountered failures.

```php
// The number of requests assigned to the batch...
$batch->totalRequests;
 
// The number of requests that have not been processed yet...
$batch->pendingRequests;
 
// The number of requests that have failed...
$batch->failedRequests;

// The number of requests that have been processed thus far...
$batch->processedRequests();

// Indicates if the batch has finished executing...
$batch->finished();

// Indicates if the batch has request failures...
$batch->hasFailures();
```

--------------------------------

### Define Agent Class with Tools and Structured Output

Source: https://laravel.com/docs/12.x/ai-sdk

Create a complete agent class implementing Agent, Conversational, HasTools, and HasStructuredOutput interfaces. Includes system instructions, conversation history retrieval, available tools, and output schema definition.

```php
<?php

namespace App\Ai\Agents;

use App\Ai\Tools\RetrievePreviousTranscripts;
use App\Models\History;
use App\Models\User;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Contracts\HasStructuredOutput;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;
use Stringable;

class SalesCoach implements Agent, Conversational, HasTools, HasStructuredOutput
{
    use Promptable;

    public function __construct(public User $user) {}

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): Stringable|string
    {
        return 'You are a sales coach, analyzing transcripts and providing feedback and an overall sales strength score.';
    }

    /**
     * Get the list of messages comprising the conversation so far.
     */
    public function messages(): iterable
    {
        return History::where('user_id', $this->user->id)
            ->latest()
            ->limit(50)
            ->get()
            ->reverse()
            ->map(function ($message) {
                return new Message($message->role, $message->content);
            })->all();
    }

    /**
     * Get the tools available to the agent.
     *
     * @return Tool[]
     */
    public function tools(): iterable
    {
        return [
            new RetrievePreviousTranscripts,
        ];
    }

    /**
     * Get the agent's structured output schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'feedback' => $schema->string()->required(),
            'score' => $schema->integer()->min(1)->max(10)->required(),
        ];
    }
}
```

--------------------------------

### Install PSR-7 Support Libraries in Laravel

Source: https://laravel.com/docs/12.x/requests

Install the required Composer packages to enable PSR-7 request support in Laravel. The Symfony HTTP Message Bridge component converts Laravel requests to PSR-7 compatible implementations, and Nyholm PSR-7 provides the PSR-7 implementation.

```shell
composer require symfony/psr-http-message-bridge
composer require nyholm/psr7
```

--------------------------------

### Replace String Start Occurrence in PHP Laravel

Source: https://laravel.com/docs/12.x/strings

The Str::replaceStart method replaces the first occurrence of a given value only if it appears at the beginning of the string. Returns the original string unchanged if the search value is not found at the start.

```php
use Illuminate\Support\Str;

$replaced = Str::replaceStart('Hello', 'Laravel', 'Hello World');

// Laravel World

$replaced = Str::replaceStart('World', 'Laravel', 'Hello World');

// Hello World
```

--------------------------------

### Get the first element of an array in PHP

Source: https://laravel.com/docs/12.x/helpers

The `head` function retrieves the first element from a given array. If the array is empty, it will return `false`. This is a convenient helper for quickly accessing the initial item.

```php
$array = [100, 200, 300];

$first = head($array);

// 100
```

--------------------------------

### Retrieve Request Host in Laravel

Source: https://laravel.com/docs/12.x/requests

Illustrates how to get different representations of the request's host using `host`, `httpHost`, and `schemeAndHttpHost` methods on the `Request` object.

```php
$request->host();
$request->httpHost();
$request->schemeAndHttpHost();
```

--------------------------------

### Configure Heroku CI for Laravel Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Set up Heroku CI to run Dusk tests by adding the Chrome buildpack and configuring test scripts in the app.json file. The configuration includes environment setup, chromedriver initialization, and Laravel server startup before executing Dusk tests.

```json
{
  "environments": {
    "test": {
      "buildpacks": [
        { "url": "heroku/php" },
        { "url": "https://github.com/heroku/heroku-buildpack-chrome-for-testing" }
      ],
      "scripts": {
        "test-setup": "cp .env.testing .env",
        "test": "nohup bash -c './vendor/laravel/dusk/bin/chromedriver-linux --port=9515 > /dev/null 2>&1 &' && nohup bash -c 'php artisan serve --no-reload > /dev/null 2>&1 &' && php artisan dusk"
      }
    }
  }
}
```

--------------------------------

### Seed Database with Fresh Migrations using migrate:fresh

Source: https://laravel.com/docs/12.x/seeding

Combine the migrate:fresh command with the --seed option to drop all tables and re-run migrations while seeding the database. Use the --seeder option to specify a particular seeder class to execute during the migration process.

```shell
php artisan migrate:fresh --seed

php artisan migrate:fresh --seed --seeder=UserSeeder
```

--------------------------------

### Configure Server-Side Rendering (SSR) with Vite in Laravel

Source: https://laravel.com/docs/12.x/vite

Set up Server-Side Rendering (SSR) with Vite in Laravel by creating an SSR entry point and configuring the Laravel Vite plugin to use it. Augment your `package.json` build script to include the SSR build, then execute the build and start the SSR server using `node` or, for Inertia applications, the `php artisan inertia:start-ssr` command.

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
        }),
    ],
});
```

```json
"scripts": {
     "dev": "vite",
     "build": "vite build && vite build --ssr"
}
```

```shell
npm run build
node bootstrap/ssr/ssr.js
```

```shell
php artisan inertia:start-ssr
```

--------------------------------

### Configure Laravel Boost in Junie AI Agent

Source: https://laravel.com/docs/12.x/boost

These steps outline how to enable the `laravel-boost` MCP server within the Junie AI agent's settings. Following these instructions allows Junie to utilize Boost's capabilities for AI-assisted development.

```text
1. Press `shift` twice to open the command palette
2. Search "MCP Settings" and press `enter`
3. Check the box next to `laravel-boost`
4. Click "Apply" at the bottom right
```

--------------------------------

### Define a Custom Job Rate Limiter in Laravel PHP

Source: https://laravel.com/docs/12.x/queues

This PHP example demonstrates defining a custom rate limiter named 'backups' using Laravel's `RateLimiter` facade. It allows VIP customers unlimited access while limiting others to one backup per hour, segmented by user ID. This definition typically resides in the `boot` method of `AppServiceProvider`.

```php
use IlluminateCacheRateLimitingLimit;
use IlluminateSupportFacadesRateLimiter;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    RateLimiter::for('backups', function (object $job) {
        return $job->user->vipCustomer()
            ? Limit::none()
            : Limit::perHour(1)->by($job->user->id);
    });
}
```

--------------------------------

### Customize User Authentication with Fortify::authenticateUsing

Source: https://laravel.com/docs/12.x/fortify

Implements custom authentication logic by providing a closure to Fortify::authenticateUsing that validates login credentials and returns the authenticated user. The closure receives the HTTP request and should return the user instance on success or null/false on failure. This allows full control over credential validation and user retrieval.

```php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Fortify::authenticateUsing(function (Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user &&
            Hash::check($request->password, $user->password)) {
            return $user;
        }
    });

    // ...
}
```

--------------------------------

### Redirecting with Flashed Session Data in Laravel PHP

Source: https://laravel.com/docs/12.x/responses

This PHP example illustrates how to redirect to a new URL and flash data to the session in a single, fluent chain using the `with()` method. This is commonly used after form submissions to provide temporary status messages that are available for the next request.

```php
Route::post('/user/profile', function () {
    // ...

    return redirect('/dashboard')->with('status', 'Profile updated!');
});
```

--------------------------------

### Add New Subscription to Existing Laravel Cashier Customer

Source: https://laravel.com/docs/12.x/billing

This example shows how to add a new subscription to a customer who already has a default payment method configured. The `add()` method on the subscription builder finalizes the subscription creation.

```php
use App\Models\User;

$user = User::find(1);

$user->newSubscription('default', 'price_monthly')->add();
```

--------------------------------

### Define Laravel AI Agent Middleware Handle Method

Source: https://laravel.com/docs/12.x/ai-sdk

This example illustrates how to define a middleware class for Laravel AI agents. Each middleware class must include a `handle` method that receives the `AgentPrompt` and a `Closure` to pass the prompt to the next middleware in the chain, allowing for custom logic like logging before or after prompt processing.

```php
<?php

namespace AppAiMiddleware;

use Closure;
use LaravelAiPromptsAgentPrompt;

class LogPrompts
{
    /**
     * Handle the incoming prompt.
     */
    public function handle(AgentPrompt $prompt, Closure $next)
    {
        Log::info('Prompting agent', ['prompt' => $prompt->prompt]);

        return $next($prompt);
    }
}
```

--------------------------------

### Str::length() - Get String Length

Source: https://laravel.com/docs/12.x/strings

Returns the length of the given string.

```APIDOC
## Str::length()

### Description
Returns the length of the given string.

### Method
Static Method

### Signature
```php
Str::length(string $value): int
```

### Parameters
- **$value** (string) - Required - The string to measure

### Usage Examples
```php
use Illuminate\Support\Str;

$length = Str::length('Laravel');
// 7
```

### Returns
- **int** - The length of the string
```

--------------------------------

### Apply Coupon to New Laravel Cashier Subscription

Source: https://laravel.com/docs/12.x/billing

This code snippet demonstrates how to apply a coupon when creating a new subscription for a user in Laravel Cashier. The `withCoupon` method takes the coupon code as an argument.

```php
$user->newSubscription('default', 'price_monthly')
    ->withCoupon('code')
    ->create($paymentMethod);
```

--------------------------------

### Update Homestead Source Code via Git

Source: https://laravel.com/docs/12.x/homestead

These Git commands are used to fetch the latest changes from the Homestead repository and pull the most recent stable release. This ensures your local Homestead installation is up-to-date with the latest features and bug fixes.

```shell
git fetch

git pull origin release
```

--------------------------------

### Test Laravel Console Command with Search Input using `expectsSearch`

Source: https://laravel.com/docs/12.x/console-tests

This example shows how to test console commands that utilize Laravel Prompts' `search` or `multisearch` functions. The `expectsSearch` method allows mocking the user's search input, providing a list of potential answers, and specifying the final selected answer.

```Pest
test('console command', function () {
    $this->artisan('example')
        ->expectsSearch('What is your name?', search: 'Tay', answers: [
            'Taylor Otwell',
            'Taylor Swift',
            'Darian Taylor'
        ], answer: 'Taylor Otwell')
        ->assertExitCode(0);
});
```

```PHPUnit
/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('example')
        ->expectsSearch('What is your name?', search: 'Tay', answers: [
            'Taylor Otwell',
            'Taylor Swift',
            'Darian Taylor'
        ], answer: 'Taylor Otwell')
        ->assertExitCode(0);
}
```

--------------------------------

### Precompile Blade Views with Artisan

Source: https://laravel.com/docs/12.x/deployment

Precompiles all Blade views so they are not compiled on demand, improving the performance of each request that returns a view by eliminating runtime compilation overhead.

```shell
php artisan view:cache
```

--------------------------------

### Insert Data in DatabaseSeeder with Query Builder

Source: https://laravel.com/docs/12.x/seeding

Demonstrates inserting data into the database using the query builder within the run method of a seeder class. Uses DB facade to insert user records with random names, emails, and hashed passwords.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
```

--------------------------------

### Display Price Previews in Blade Template (Blade)

Source: https://laravel.com/docs/12.x/cashier-paddle

These Blade snippets demonstrate various ways to display retrieved price previews. They iterate through a collection of price objects to render product names along with either the total price or a detailed breakdown showing subtotal and tax.

```blade
<ul>
    @foreach ($prices as $price)
        <li>{{ $price->product['name'] }} - {{ $price->total() }}</li>
    @endforeach
</ul>
```

```blade
<ul>
    @foreach ($prices as $price)
        <li>{{ $price->product['name'] }} - {{ $price->subtotal() }} (+ {{ $price->tax() }} tax)</li>
    @endforeach
</ul>
```

--------------------------------

### GET /invoices/pending - Retrieve Invoices Including Pending

Source: https://laravel.com/docs/12.x/billing

Retrieves all invoices for a billable model including pending invoices. Returns a collection of Laravel\Cashier\Invoice instances.

```APIDOC
## GET /invoices/pending

### Description
Retrieves all invoices for a billable user including pending invoices. Returns a collection of Laravel\Cashier\Invoice instances.

### Method
GET

### Endpoint
/invoices/pending

### Request Example
```php
$invoices = $user->invoicesIncludingPending();
```

### Response
#### Success Response (200)
- **invoices** (array) - Collection of Invoice objects including pending
  - **id** (string) - Invoice ID
  - **date** (datetime) - Invoice date
  - **total** (string) - Invoice total amount
  - **status** (string) - Invoice status (draft, pending, paid, etc.)

#### Response Example
```json
{
  "invoices": [
    {
      "id": "in_1234567890",
      "date": "2024-01-15",
      "total": "$99.99",
      "status": "pending"
    }
  ]
}
```

### Notes
- Includes both finalized and pending invoices
- Useful for displaying all outstanding invoices to customer
```

--------------------------------

### Fake HTTP request exceptions in Laravel

Source: https://laravel.com/docs/12.x/http-client

Demonstrates how to simulate an `Illuminate\Http\Client\RequestException` being thrown, typically when an HTTP request returns an error status code. This example shows mocking a service to throw a specific `failedRequest` response.

```php
$this->mock(GithubService::class)
    ->shouldReceive('getUser')
    ->andThrow(
        Http::failedRequest(['code' => 'not_found'], 404)
    );
```

--------------------------------

### Install Laravel Tinker via Composer (Shell)

Source: https://laravel.com/docs/12.x/artisan

If Laravel Tinker was previously removed from your application, this Composer command reinstalls the package. This makes the interactive REPL available again for direct interaction with your Laravel application.

```shell
composer require laravel/tinker
```

--------------------------------

### Create Paddle Customer with Additional Options in Laravel (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP snippet demonstrates creating a Paddle customer while passing an optional array of additional parameters. These options can be used to customize the customer creation process according to the Paddle API specifications, such as setting metadata.

```php
$customer = $user->createAsCustomer($options);
```

--------------------------------

### Define broadcastOn Method for Single Channel

Source: https://laravel.com/docs/12.x/broadcasting

Implement the required broadcastOn method to specify which channel the event should broadcast on. This example returns a private channel tied to a specific order ID, ensuring only authorized users receive the broadcast.

```php
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

/**
 * Get the channel the event should broadcast on.
 */
public function broadcastOn(): Channel
{
    return new PrivateChannel('orders.'.$this->order->id);
}
```

--------------------------------

### Illustrate Laravel MCP URI Template Syntax

Source: https://laravel.com/docs/12.x/mcp

This snippet provides examples of URI template syntax used within Laravel MCP. It demonstrates how to define variable segments in URIs using placeholders enclosed in curly braces, enabling flexible and dynamic resource matching based on patterns.

```php
new UriTemplate('file://users/{userId}');
new UriTemplate('file://users/{userId}/files/{fileId}');
new UriTemplate('https://api.example.com/{version}/{resource}/{id}');
```

--------------------------------

### Example Log Output with Laravel Context Metadata

Source: https://laravel.com/docs/12.x/context

This `text` snippet illustrates the format of a log entry when Laravel's context is active. It shows how specific log data (e.g., `auth_id`) is combined with automatically appended context metadata (e.g., `url`, `trace_id`) in the final log output, enhancing traceability and debugging capabilities.

```text
User authenticated. {"auth_id":27} {"url":"https://example.com/login","trace_id":"e04e1a11-e75c-4db3-b5b5-cfef4ef56697"}
```

--------------------------------

### Creating Database Indexes with Laravel Schema Builder

Source: https://laravel.com/docs/12.x/migrations

These examples illustrate various ways to create indexes on database tables using Laravel's schema builder. It covers creating unique indexes on new or existing columns, defining compound indexes with multiple columns, and specifying custom index names for better organization.

```php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('users', function (Blueprint $table) {
    $table->string('email')->unique();
});
```

```php
$table->unique('email');
```

```php
$table->index(['account_id', 'created_at']);
```

```php
$table->unique('email', 'unique_email');
```

--------------------------------

### Implement Switch Statements in Blade Templates

Source: https://laravel.com/docs/12.x/blade

Provides an example of constructing switch statements in Blade using `@switch`, `@case`, `@break`, `@default`, and `@endswitch` directives, mirroring PHP's native switch functionality.

```blade
@switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch
```

--------------------------------

### Set Vagrant Provider in Homestead Configuration

Source: https://laravel.com/docs/12.x/homestead

This YAML snippet demonstrates how to specify the Vagrant provider within your 'Homestead.yaml' file. The 'provider' key determines whether 'virtualbox' or 'parallels' will be used to run the virtual machine, with Parallels being a requirement for Apple Silicon users.

```yaml
provider: virtualbox
```

--------------------------------

### Initiate Stripe Checkout with Order Metadata (PHP, Laravel)

Source: https://laravel.com/docs/12.x/billing

This code snippet demonstrates how to create a pending order in your application, then redirect the user to Stripe Checkout. It passes the application's internal order ID as metadata to the Stripe session, allowing for later reconciliation. The `success_url` is configured to include a `CHECKOUT_SESSION_ID` template variable for easy retrieval after payment.

```php
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

Route::get('/cart/{cart}/checkout', function (Request $request, Cart $cart) {
    $order = Order::create([
        'cart_id' => $cart->id,
        'price_ids' => $cart->price_ids,
        'status' => 'incomplete',
    ]);

    return $request->user()->checkout($order->price_ids, [
        'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('checkout-cancel'),
        'metadata' => ['order_id' => $order->id],
    ]);
})->name('checkout');
```

--------------------------------

### Implement Custom Invoice Renderer in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

Create a custom invoice renderer by implementing the Laravel\Cashier\Contracts\InvoiceRenderer interface. This example demonstrates using a third-party PDF rendering API service instead of the default Dompdf renderer to generate invoice PDFs.

```php
use Illuminate\Support\Facades\Http;
use Laravel\Cashier\Contracts\InvoiceRenderer;
use Laravel\Cashier\Invoice;

class ApiInvoiceRenderer implements InvoiceRenderer
{
    /**
     * Render the given invoice and return the raw PDF bytes.
     */
    public function render(Invoice $invoice, array $data = [], array $options = []): string
    {
        $html = $invoice->view($data)->render();

        return Http::get('https://example.com/html-to-pdf', ['html' => $html])->get()->body();
    }
}
```

--------------------------------

### Add Hostname Entry to Local Hosts File

Source: https://laravel.com/docs/12.x/homestead

This entry, added to your local machine's `hosts` file, maps a custom domain to the Homestead virtual machine's IP address, allowing you to access your development sites via a friendly URL.

```text
192.168.56.56  homestead.test
```

--------------------------------

### Register Global Request and Response Middleware

Source: https://laravel.com/docs/12.x/http-client

Shows how to register middleware that applies to every outgoing request and incoming response globally. These methods should typically be invoked in the boot() method of AppServiceProvider.

```php
use Illuminate\Support\Facades\Http;

Http::globalRequestMiddleware(fn ($request) => $request->withHeader(
    'User-Agent', 'Example Application/1.0'
));

Http::globalResponseMiddleware(fn ($response) => $response->withHeader(
    'X-Finished-At', now()->toDateTimeString()
));
```

--------------------------------

### Provide Input to Laravel Process

Source: https://laravel.com/docs/12.x/processes

This snippet illustrates how to pass input to the standard input (stdin) of an external process using the `input` method. The provided string will be fed to the command, as shown with the `cat` command which echoes its input.

```php
$result = Process::input('Hello World')->run('cat');
```

--------------------------------

### GET /upcoming-invoice - Retrieve Upcoming Invoice

Source: https://laravel.com/docs/12.x/billing

Retrieves the upcoming invoice for a customer. Returns a Laravel\Cashier\Invoice instance for the next billing cycle.

```APIDOC
## GET /upcoming-invoice

### Description
Retrieves the upcoming invoice for a billable user. Shows what the customer will be charged in the next billing cycle.

### Method
GET

### Endpoint
/upcoming-invoice

### Request Example
```php
$invoice = $user->upcomingInvoice();
```

### Response
#### Success Response (200)
- **id** (string) - Invoice ID
- **date** (datetime) - Upcoming invoice date
- **total** (string) - Upcoming invoice total
- **items** (array) - Line items for upcoming invoice

#### Response Example
```json
{
  "id": "in_upcoming_1234567890",
  "date": "2024-02-15",
  "total": "$99.99",
  "items": []
}
```

### Notes
- Returns null if no upcoming invoice
- For specific subscription, use subscription('name')->upcomingInvoice()
```

--------------------------------

### Configure a Default Valet Site

Source: https://laravel.com/docs/12.x/valet

To serve a specific 'default' site instead of a 404 error for unknown `.test` domains, add a `default` option to your `~/.config/valet/config.json` file. The value should be the absolute path to the desired default site.

```json
"default": "/Users/Sally/Sites/example-site"
```

--------------------------------

### Initiate Metered Subscription with Stripe Checkout in Laravel

Source: https://laravel.com/docs/12.x/billing

This code shows how to initiate a metered subscription using Stripe Checkout. It builds a new subscription, applies a metered price, and then generates a Checkout session. The resulting `checkout` object can be passed to a view to redirect the user to the Stripe Checkout page.

```php
$checkout = Auth::user()
    ->newSubscription('default', [])
    ->meteredPrice('price_metered')
    ->checkout();

return view('your-checkout-view', [
    'checkout' => $checkout,
]);
```

--------------------------------

### Retrieve Upcoming Invoice for Default Subscription (PHP)

Source: https://laravel.com/docs/12.x/billing

To get details about the next upcoming invoice for a customer's default subscription, use the `upcomingInvoice` method. This is useful for displaying future billing information to the user.

```php
$invoice = $user->upcomingInvoice();
```

--------------------------------

### with() - Return Value or Execute Closure with Value

Source: https://laravel.com/docs/12.x/helpers

The with function returns the value it is given. If a closure is passed as the second argument, the closure is executed with the value as a parameter and its return value is returned. If the second argument is null, the original value is returned.

```php
$callback = function (mixed $value) {
    return is_numeric($value) ? $value * 2 : 0;
};

$result = with(5, $callback);

// 10

$result = with(null, $callback);

// 0

$result = with(5, null);

// 5
```

--------------------------------

### Add Custom Data to Paddle Subscription Checkout (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This example illustrates how to attach custom metadata to a Paddle subscription checkout session. The `customData` method allows passing an associative array of key-value pairs that will be associated with the subscription.

```php
$checkout = $request->user()->subscribe($premium = 'pri_123', 'default')
    ->customData(['key' => 'value'])
    ->returnTo(route('home'));
```

--------------------------------

### Utilize the Octane Cache Driver for High-Performance Caching (PHP)

Source: https://laravel.com/docs/12.x/octane

This code demonstrates how to interact with the `octane` cache driver, which provides extremely fast read and write speeds by leveraging Swoole tables. Data stored in this cache is accessible across all workers but is ephemeral, being flushed upon server restart.

```php
Cache::store('octane')->put('framework', 'Laravel', 30);
```

--------------------------------

### Using Laravel Validator Rules for Prompts Suggest Validation (PHP)

Source: https://laravel.com/docs/12.x/prompts

This example demonstrates an alternative method for validating `suggest` inputs by leveraging Laravel's powerful validation system. Instead of a closure, an array containing the attribute name and standard Laravel validation rules can be passed to the `validate` argument. This integrates seamlessly with existing Laravel validation practices.

```php
$name = suggest(
    label: 'What is your name?',
    options: ['Taylor', 'Dayle'],
    validate: ['name' => 'required|min:3|max:255']
);
```

--------------------------------

### Configure Laravel Boost in Cursor AI Agent

Source: https://laravel.com/docs/12.x/boost

These instructions detail how to enable the `laravel-boost` MCP server within the Cursor AI agent's settings. Following these steps allows Cursor to utilize Boost's capabilities for enhanced AI-assisted development.

```text
1. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)
2. Press `enter` on "/open MCP Settings"
3. Turn the toggle on for `laravel-boost`
```

--------------------------------

### Interact with Custom Swoole Tables using Octane (PHP)

Source: https://laravel.com/docs/12.x/octane

This code demonstrates how to access and manipulate data in custom Swoole tables defined in your Octane configuration. Using `Octane::table()->set()` and `Octane::table()->get()`, you can store and retrieve data that is shared across all workers, offering extreme performance for inter-process communication.

```php
use Laravel\Octane\Facades\Octane;

Octane::table('example')->set('uuid', [
    'name' => 'Nuno Maduro',
    'votes' => 1000,
]);

return Octane::table('example')->get('uuid');
```

--------------------------------

### Conditionally Throttle Exceptions with when Method

Source: https://laravel.com/docs/12.x/queues

Shows how to use the when method to conditionally throttle exceptions based on exception type. The closure receives the Throwable and should return true to throttle the exception. In this example, only HttpClientException instances will be throttled, while other exceptions are handled normally.

```php
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Queue\Middleware\ThrottlesExceptions;

/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new ThrottlesExceptions(10, 10 * 60))->when(
        fn (Throwable $throwable) => $throwable instanceof HttpClientException
    )];
}
```

--------------------------------

### Store Browser Console Output to Disk

Source: https://laravel.com/docs/12.x/dusk

Write the current browser's console output to disk using the `storeConsoleLog` method. Console logs are stored in `tests/Browser/console` directory with the specified filename.

```php
$browser->storeConsoleLog('filename');
```

--------------------------------

### Blade: Using parent and child components with attributes

Source: https://laravel.com/docs/12.x/blade

Demonstrates how to use a parent Blade component (`<x-menu>`) with attributes and its child components (`<x-menu.item>`). This setup highlights the challenge of passing parent data to children without explicit mechanisms.

```blade
<x-menu color="purple">
    <x-menu.item>...</x-menu.item>
    <x-menu.item>...</x-menu.item>
</x-menu>
```

--------------------------------

### Navigate to Page Using Visit Method

Source: https://laravel.com/docs/12.x/dusk

Use the `visit` method to navigate to a defined page object. This method instantiates the page class and navigates the browser to the URL specified in the page's `url` method.

```php
use Tests\Browser\Pages\Login;

$browser->visit(new Login);
```

--------------------------------

### Define Laravel Pipeline with Invokable Classes

Source: https://laravel.com/docs/12.x/helpers

This example illustrates using invokable classes within a Laravel Pipeline. When a class name is provided, Laravel's service container instantiates it, allowing for dependency injection. The 'thenReturn' method is a convenience for simply returning the processed input after the pipeline completes.

```php
$user = Pipeline::send($user)
    ->through([
        GenerateProfilePhoto::class,
        ActivateSubscription::class,
        SendWelcomeEmail::class,
    ])
    ->thenReturn();
```

--------------------------------

### Dispatch Jobs in Laravel

Source: https://laravel.com/docs/12.x/queues

Dispatch job classes using the dispatch method on the job itself. Arguments passed to dispatch are given to the job's constructor. This example shows dispatching a ProcessPodcast job from a controller after creating a podcast model.

```php
<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Models\Podcast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Store a new podcast.
     */
    public function store(Request $request): RedirectResponse
    {
        $podcast = Podcast::create(/* ... */);

        // ...

        ProcessPodcast::dispatch($podcast);

        return redirect('/podcasts');
    }
}
```

--------------------------------

### GET /user/two-factor-qr-code

Source: https://laravel.com/docs/12.x/fortify

Retrieves the two-factor authentication QR code for the authenticated user. Returns a JSON object containing an SVG representation of the QR code that can be scanned into authenticator applications.

```APIDOC
## GET /user/two-factor-qr-code

### Description
Retrieves the two-factor authentication QR code as an SVG for the authenticated user. This QR code should be scanned into a TOTP-compatible authenticator application such as Google Authenticator.

### Method
GET

### Endpoint
/user/two-factor-qr-code

### Parameters
None

### Response
#### Success Response (200)
- **svg** (string) - SVG representation of the two-factor authentication QR code

#### Response Example
```json
{
  "svg": "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 200 200\">...</svg>"
}
```

### Notes
- Returns JSON object for XHR/JavaScript frontend requests
- SVG can be embedded directly in HTML for display
```

--------------------------------

### Generate and Run Database Cache Migration (Artisan)

Source: https://laravel.com/docs/12.x/cache

These Artisan commands are used to set up the database cache driver. The first command generates a migration file to create the necessary table for storing cached data, and the second command executes all pending migrations, applying the cache table to your database.

```shell
php artisan make:cache-table

php artisan migrate
```

--------------------------------

### Create Slack Notification with Action Blocks in PHP

Source: https://laravel.com/docs/12.x/notifications

Demonstrates how to build a Slack notification using Block Kit with action buttons. The example creates a notification for an invoice payment with multiple block types (header, context, section, and actions). Slack sends POST requests to your configured Request URL when users interact with buttons.

```php
use Illuminate\Notifications\Slack\BlockKit\Blocks\ActionsBlock;
use Illuminate\Notifications\Slack\BlockKit\Blocks\ContextBlock;
use Illuminate\Notifications\Slack\BlockKit\Blocks\SectionBlock;
use Illuminate\Notifications\Slack\SlackMessage;

/**
 * Get the Slack representation of the notification.
 */
public function toSlack(object $notifiable): SlackMessage
{
    return (new SlackMessage)
        ->text('One of your invoices has been paid!')
        ->headerBlock('Invoice Paid')
        ->contextBlock(function (ContextBlock $block) {
            $block->text('Customer #1234');
        })
        ->sectionBlock(function (SectionBlock $block) {
            $block->text('An invoice has been paid.');
        })
        ->actionsBlock(function (ActionsBlock $block) {
             // ID defaults to "button_acknowledge_invoice"...
            $block->button('Acknowledge Invoice')->primary();

            // Manually configure the ID...
            $block->button('Deny')->danger()->id('deny_invoice');
        });
}
```

--------------------------------

### Assert On-Demand Notifications

Source: https://laravel.com/docs/12.x/notifications

Demonstrates testing on-demand notifications using the assertSentOnDemand method. Includes basic assertion and an example with a closure to verify the notification was sent to the correct route address.

```php
Notification::assertSentOnDemand(OrderShipped::class);
```

```php
Notification::assertSentOnDemand(
    OrderShipped::class,
    function (OrderShipped $notification, array $channels, object $notifiable) use ($user) {
        return $notifiable->routes['mail'] === $user->email;
    }
);
```

--------------------------------

### Define a Class-Based Laravel View Composer

Source: https://laravel.com/docs/12.x/views

This snippet provides an example of a class-based view composer. It shows how to define a constructor for dependency injection and implement the `compose` method to bind data to the view when it is rendered.

```php
<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ProfileComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(
        protected UserRepository $users,
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('count', $this->users->count());
    }
}
```

--------------------------------

### Assign Multiple Middleware to a Specific Laravel Route

Source: https://laravel.com/docs/12.x/middleware

This example demonstrates how to apply multiple middleware to a single Laravel route. An array of middleware class names is passed to the `middleware` method, ensuring all listed middleware are executed for requests to that route.

```php
Route::get('/', function () {
    // ...
})->middleware([First::class, Second::class]);
```

--------------------------------

### Invoke Synchronous Process and Get Output in Laravel

Source: https://laravel.com/docs/12.x/processes

This snippet demonstrates how to run a synchronous external command using Laravel's `Process` facade and retrieve its standard output. The `run` method executes the command and waits for its completion, returning a `ProcessResult` instance.

```php
use Illuminate\Support\Facades\Process;

$result = Process::run('ls -la');

return $result->output();
```

--------------------------------

### Arr::first() - Get First Element Matching Condition

Source: https://laravel.com/docs/12.x/helpers

Returns the first element of an array that passes a given truth test callback. Accepts optional default value returned if no element passes the test.

```php
use Illuminate\Support\Arr;

$array = [100, 200, 300];

$first = Arr::first($array, function (int $value, int $key) {
    return $value >= 150;
});

// 200

$first = Arr::first($array, $callback, $default);
```

--------------------------------

### Retrieve Coupon Instance from Laravel Cashier Discount

Source: https://laravel.com/docs/12.x/billing

This snippet illustrates how to access the underlying `Laravel\Cashier\Coupon` instance from a `Laravel\Cashier\Discount` object. This is useful for getting detailed information about the coupon that is part of the applied discount.

```php
$coupon = $subscription->discount()->coupon();
```

--------------------------------

### Connect to Presence Channels using useEchoPresence (React/Vue)

Source: https://laravel.com/docs/12.x/broadcasting

This snippet demonstrates how to connect to a presence channel using the `useEchoPresence` hook in both React and Vue applications. It subscribes to a specific event, 'PostPublished', on the 'posts' channel and logs the event data when received. This allows real-time updates based on user presence and events.

```js
import { useEchoPresence } from "@laravel/echo-react";

useEchoPresence("posts", "PostPublished", (e) => {
    console.log(e.post);
});
```

```vue
<script setup lang="ts">
import { useEchoPresence } from "@laravel/echo-vue";

useEchoPresence("posts", "PostPublished", (e) => {
    console.log(e.post);
});
</script>
```

--------------------------------

### Process Specific Queue on Connection - Laravel Artisan

Source: https://laravel.com/docs/12.x/queues

Starts a queue worker that only processes jobs from a specific queue on a given connection. Useful for routing different job types to dedicated workers.

```shell
php artisan queue:work redis --queue=emails
```

--------------------------------

### GET /subscription/{subscriptionName}/upcoming-invoice - Retrieve Subscription Upcoming Invoice

Source: https://laravel.com/docs/12.x/billing

Retrieves the upcoming invoice for a specific subscription. Returns a Laravel\Cashier\Invoice instance for the subscription's next billing cycle.

```APIDOC
## GET /subscription/{subscriptionName}/upcoming-invoice

### Description
Retrieves the upcoming invoice for a specific subscription. Shows what will be charged for that subscription in the next billing cycle.

### Method
GET

### Endpoint
/subscription/{subscriptionName}/upcoming-invoice

### Parameters
#### Path Parameters
- **subscriptionName** (string) - Required - The subscription name (e.g., 'default')

### Request Example
```php
$invoice = $user->subscription('default')->upcomingInvoice();
```

### Response
#### Success Response (200)
- **id** (string) - Invoice ID
- **date** (datetime) - Upcoming invoice date
- **total** (string) - Upcoming invoice total
- **subscriptionName** (string) - Associated subscription name
- **items** (array) - Line items for subscription

#### Response Example
```json
{
  "id": "in_upcoming_1234567890",
  "date": "2024-02-15",
  "total": "$99.99",
  "subscriptionName": "default",
  "items": []
}
```

### Notes
- Useful for customers with multiple subscriptions
- Returns null if no upcoming invoice for subscription
```

--------------------------------

### Rerank an Array of Strings using Laravel Reranking Class

Source: https://laravel.com/docs/12.x/search

This PHP example demonstrates how to use the `Laravel\Ai\Reranking` class to reorder an array of strings based on their semantic relevance to a given query. It takes raw content and a query as input, returning items sorted by relevance.

```php
use Laravel\Ai\Reranking;

$response = Reranking::of([
    'Django is a Python web framework.',
    'Laravel is a PHP web application framework.',
    'React is a JavaScript library for building user interfaces.',
])->rerank('PHP frameworks');

$response->first()->document; // "Laravel is a PHP web application framework."
```

--------------------------------

### Configure Web Search Tool with Max Searches and Allowed Domains (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This example demonstrates configuring the `WebSearch` tool to control its behavior. You can limit the maximum number of searches an agent can perform using `max()` and restrict search results to specific domains using `allow()`, ensuring the agent focuses on relevant and trusted sources.

```php
(new WebSearch)->max(5)->allow(['laravel.com', 'php.net']),
```

--------------------------------

### GET /photos/{photo}/edit

Source: https://laravel.com/docs/12.x/controllers

Display the form for editing a specific photo resource. This is the edit action that returns the edit form view with current photo data.

```APIDOC
## GET /photos/{photo}/edit

### Description
Display the form for editing a specific photo resource.

### Method
GET

### Endpoint
/photos/{photo}/edit

### Route Name
photos.edit

### Controller Action
PhotoController@edit

### Path Parameters
- **photo** (integer) - Required - Photo resource ID

### Response
#### Success Response (200)
- **view** (html) - Edit form view with photo data

#### Error Response (404)
- **message** (string) - Resource not found
```

--------------------------------

### Preview Subscription Invoice with Multiple Price Changes (PHP)

Source: https://laravel.com/docs/12.x/billing

To preview an invoice with multiple price changes simultaneously, pass an array of new price IDs to the `previewInvoice` method. This is useful for complex subscription modifications involving several price adjustments.

```php
$invoice = $user->subscription('default')->previewInvoice(['price_yearly', 'price_metered']);
```

--------------------------------

### GET /user/two-factor-recovery-codes

Source: https://laravel.com/docs/12.x/fortify

Retrieves the two-factor recovery codes for the authenticated user. Returns a JSON array of recovery codes that allow authentication if the user loses access to their mobile device.

```APIDOC
## GET /user/two-factor-recovery-codes

### Description
Retrieves the two-factor authentication recovery codes for the authenticated user. These codes allow the user to authenticate if they lose access to their mobile device running the authenticator application.

### Method
GET

### Endpoint
/user/two-factor-recovery-codes

### Parameters
None

### Response
#### Success Response (200)
- **codes** (array) - Array of recovery code strings

#### Response Example
```json
[
  "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
  "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
  "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
]
```

### Notes
- Returns JSON array for XHR/JavaScript frontend requests
- Recovery codes should be securely stored by the user
- Each recovery code can typically be used once
```

--------------------------------

### Enable Debugging for Laravel Reverb Server

Source: https://laravel.com/docs/12.x/reverb

This command starts the Reverb server with the `--debug` option, enabling the output of detailed debug information. By default, Reverb suppresses debug output for performance, so this option is essential for troubleshooting data streams and connection issues. It provides visibility into the real-time flow of data through your WebSocket server.

```shell
php artisan reverb:start --debug
```

--------------------------------

### Navigate to a named route using Dusk's visitRoute method

Source: https://laravel.com/docs/12.x/dusk

Demonstrates using the `visitRoute` method to navigate to a named route defined in the Laravel application's routing configuration. It accepts the route name and an optional array of parameters.

```php
$browser->visitRoute($routeName, $parameters);
```

--------------------------------

### Prepend or Append Jobs to an Existing Laravel Chain

Source: https://laravel.com/docs/12.x/queues

This example shows how to dynamically modify an active job chain from within a job itself. The `prependToChain` method adds a job to run immediately after the current job, while `appendToChain` adds a job to the end of the chain, allowing for flexible workflow adjustments.

```php
/**
 * Execute the job.
 */
public function handle(): void
{
    // ...

    // Prepend to the current chain, run job immediately after current job...
    $this->prependToChain(new TranscribePodcast);

    // Append to the current chain, run job at end of chain...
    $this->appendToChain(new TranscribePodcast);
}
```

--------------------------------

### Example of `Sleep` class usage in PHP

Source: https://laravel.com/docs/12.x/helpers

This snippet demonstrates a typical scenario where the `Sleep` class is used to introduce pauses in execution. When testing such code, these pauses can significantly slow down the test suite, highlighting the need for faking mechanisms.

```php
$waiting = /* ... */;

$seconds = 1;

while ($waiting) {
    Sleep::for($seconds++)->seconds();

    $waiting = /* ... */;
}
```

--------------------------------

### Limiting Reranking Results in Laravel AI

Source: https://laravel.com/docs/12.x/ai-sdk

This example illustrates how to restrict the number of reranked results returned by using the `limit` method. This is useful for controlling the output size when only a subset of the most relevant documents is needed.

```php
$response = Reranking::of($documents)
    ->limit(5)
    ->rerank('search query');
```

--------------------------------

### Configure Fortify Login View in FortifyServiceProvider

Source: https://laravel.com/docs/12.x/fortify

Registers a custom login view with Fortify by calling the loginView method in the boot method of FortifyServiceProvider. This method accepts a closure that returns the login view, allowing Fortify to handle the /login route automatically.

```php
use Laravel\Fortify\Fortify;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Fortify::loginView(function () {
        return view('auth.login');
    });

    // ...
}
```

--------------------------------

### Creating a Laravel MCP Tool via Artisan Command

Source: https://laravel.com/docs/12.x/mcp

Command-line instruction to generate a new MCP tool class. This `make:mcp-tool` Artisan command streamlines the initial setup for creating new tools.

```shell
php artisan make:mcp-tool CurrentWeatherTool
```

--------------------------------

### Basic HTTP GET Request with Status Assertion - Pest

Source: https://laravel.com/docs/12.x/http-tests

Tests a basic GET request to the application root and asserts the response status code is 200. This demonstrates the fundamental pattern for HTTP testing in Laravel using Pest syntax.

```php
<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
```

--------------------------------

### Injecting Dependencies in Laravel Controller Constructor (PHP)

Source: https://laravel.com/docs/12.x/container

Demonstrates how Laravel's service container automatically injects dependencies by type-hinting them in a controller's constructor. This example shows injecting an `AppleMusic` service into `PodcastController`.

```php
<?php

namespace App\Http\Controllers;

use App\Services\AppleMusic;

class PodcastController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected AppleMusic $apple,
    ) {}

    /**
     * Show information about the given podcast.
     */
    public function show(string $id): Podcast
    {
        return $this->apple->findPodcast($id);
    }
}
```

--------------------------------

### Retrieve Scoped Browser Instance for Laravel Dusk Component

Source: https://laravel.com/docs/12.x/dusk

This example shows an alternative way to interact with a Dusk component by using the `$browser->component()` method. This method returns a browser instance that is scoped directly to the given component, allowing for more direct method calls on the component object and subsequent assertions.

```php
$datePicker = $browser->component(new DatePickerComponent);

$datePicker->selectDate(2019, 1, 30);

$datePicker->assertSee('January');
```

--------------------------------

### Authenticate User with Additional Conditions in Laravel

Source: https://laravel.com/docs/12.x/authentication

This example shows how to extend the basic authentication by adding extra conditions to the `Auth::attempt` method. Beyond email and password, you can include other key-value pairs, such as an 'active' status, to ensure only specific users can log in.

```php
if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
    // Authentication was successful...
}
```

--------------------------------

### Register Singleton Service with Configuration Repository Injection - Laravel

Source: https://laravel.com/docs/12.x/octane

Demonstrates injecting the configuration repository into a singleton service binding. This pattern is problematic because configuration changes between requests won't be reflected in the service instance. The binding captures the config repository at boot time, causing the service to use stale configuration values.

```php
use App\Service;
use Illuminate\Contracts\Foundation\Application;

/**
 * Register any application services.
 */
public function register(): void
{
    $this->app->singleton(Service::class, function (Application $app) {
        return new Service($app->make('config'));
    });
}
```

--------------------------------

### Swap Subscription Price Without Prorating Charges in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

This PHP example demonstrates how to swap a subscription to a new price without applying proration to the charges. The `noProrate` method is chained before the `swap` method to prevent prorated billing adjustments.

```php
$user->subscription('default')->noProrate()->swap('price_yearly');
```

--------------------------------

### Authenticate User Instance with Auth Facade

Source: https://laravel.com/docs/12.x/authentication

Set an existing user instance as the currently authenticated user by passing it to the Auth facade's login method. The user instance must implement the Illuminate\Contracts\Auth\Authenticatable contract. This is useful after user registration or when you already have a valid user instance.

```php
use IlluminateSupportFacadesAuth;

Auth::login($user);
```

--------------------------------

### Retrieve and Store Cache Values with cache() Helper

Source: https://laravel.com/docs/12.x/helpers

The cache() function retrieves values from the cache or stores new values. It supports getting values with optional defaults, storing key-value pairs with expiration times specified in seconds or as duration objects.

```php
$value = cache('key');

$value = cache('key', 'default');

cache(['key' => 'value'], 300);

cache(['key' => 'value'], now()->plus(seconds: 10));
```

--------------------------------

### Configure Laravel Echo with an Existing Pusher Client Instance

Source: https://laravel.com/docs/12.x/broadcasting

This JavaScript code demonstrates how to configure Laravel Echo to use an already instantiated Pusher client. Instead of Echo creating its own Pusher client, it accepts an existing one via the `client` configuration option. This is useful when you need more control over the Pusher client's initialization or if it's already being used elsewhere in your application.

```js
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const options = {
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY
}

window.Echo = new Echo({
    ...options,
    client: new Pusher(options.key, options)
});
```

--------------------------------

### Add Selenium Dependency to Laravel Test Service

Source: https://laravel.com/docs/12.x/sail

Configure the laravel.test service to depend on the Selenium service, ensuring Selenium starts before running Dusk tests. This guarantees the browser automation service is available during test execution.

```yaml
depends_on:
    - mysql
    - redis
    - selenium
```

--------------------------------

### Get Specific Scopes by IDs in Laravel Passport

Source: https://laravel.com/docs/12.x/passport

Returns an array of Laravel\Passport\Scope instances matching the provided scope IDs or names. Allows filtering scopes by specific identifiers.

```php
Passport::scopesFor(['user:read', 'orders:create']);
```

--------------------------------

### Start Laravel Tinker Session in Sail

Source: https://laravel.com/docs/12.x/sail

This command initiates a new Laravel Tinker session within your application's Sail container. Tinker provides an interactive shell for experimenting with your Laravel application's code, database, and models directly from the command line.

```shell
sail tinker
```

--------------------------------

### Listen for Multiple Private Channel Events with Laravel Echo in JavaScript

Source: https://laravel.com/docs/12.x/broadcasting

This example demonstrates how to listen for multiple events on a private channel using Laravel Echo. The `private` method is used to access the private channel, and multiple `listen` calls can be chained to subscribe to different events.

```javascript
Echo.private(`orders.${this.order.id}`)
    .listen(/* ... */)
    .listen(/* ... */)
    .listen(/* ... */);
```

--------------------------------

### Defining a Basic Laravel MCP Tool Class

Source: https://laravel.com/docs/12.x/mcp

Provides an example of a `Tool` class, `CurrentWeatherTool`, demonstrating the `handle` method for processing requests and the `schema` method for defining basic input requirements. Tools expose functionality that AI clients can call.

```php
<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tool;

#[Description('Fetches the current weather forecast for a specified location.')]
class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request): Response
    {
        $location = $request->get('location');

        // Get weather...

        return Response::text('The weather is...');
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, \Illuminate\JsonSchema\Types\Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'location' => $schema->string()
                ->description('The location to get the weather for.')
                ->required(),
        ];
    }
}
```

--------------------------------

### Render Anonymous Blade Component from Package

Source: https://laravel.com/docs/12.x/packages

This Blade example shows how to render an anonymous Blade component from a package. Anonymous components must be placed in a `components` directory within the package's registered views and are rendered by prefixing the component name with the package's view namespace.

```blade
<x-courier::alert />
```

--------------------------------

### Get All Defined Scope IDs in Laravel Passport

Source: https://laravel.com/docs/12.x/passport

Returns an array of all defined scope identifiers and names registered in the Passport configuration. Useful for listing available permissions in the application.

```php
use Laravel\Passport\Passport;

Passport::scopeIds();
```

--------------------------------

### Retrieve Request Method in Laravel

Source: https://laravel.com/docs/12.x/requests

Shows how to get the HTTP verb of the request using the `method` method and how to check if the request matches a specific HTTP verb using `isMethod`.

```php
$method = $request->method();

if ($request->isMethod('post')) {
    // ...
}
```

--------------------------------

### Configure Typesense Environment Variables

Source: https://laravel.com/docs/12.x/scout

Sets up Typesense connection credentials in the .env file. Requires SCOUT_DRIVER set to 'typesense', API key, and host configuration. Optional port, path, and protocol settings are available.

```ini
SCOUT_DRIVER=typesense
TYPESENSE_API_KEY=masterKey
TYPESENSE_HOST=localhost
TYPESENSE_PORT=8108
TYPESENSE_PATH=
TYPESENSE_PROTOCOL=http
```

--------------------------------

### Link a Laravel Application to Valet

Source: https://laravel.com/docs/12.x/valet

This command links the current directory to Valet, making the application accessible via its directory name (e.g., `http://laravel.test`) and supporting wildcard subdomains. It's useful for serving a single site within a directory.

```shell
cd ~/Sites/laravel

valet link
```

--------------------------------

### Configure Laravel Reverb Server Host and Port via Environment Variables

Source: https://laravel.com/docs/12.x/reverb

This configuration snippet shows how to define the Reverb server's binding host and port using environment variables in your `.env` file. `REVERB_SERVER_HOST` and `REVERB_SERVER_PORT` control where the server itself runs, distinct from `REVERB_HOST` and `REVERB_PORT` which instruct Laravel where to send broadcast messages. This separation is crucial for production setups where the public facing address might differ from the internal binding address.

```ini
REVERB_SERVER_HOST=0.0.0.0
REVERB_SERVER_PORT=8080

REVERB_HOST=ws.laravel.com
REVERB_PORT=443
```

--------------------------------

### Optimize Laravel AI Agent Model Selection with Cheapest/Smartest Attributes

Source: https://laravel.com/docs/12.x/ai-sdk

This code demonstrates using `UseCheapestModel` and `UseSmartestModel` attributes to automatically select an AI provider's most cost-effective or most capable model. These attributes simplify model selection by abstracting away specific model names, allowing agents to optimize for cost or capability across different providers.

```php
use LaravelAiAttributesUseCheapestModel;
use LaravelAiAttributesUseSmartestModel;
use LaravelAiContractsAgent;
use LaravelAiPromptable;

#[UseCheapestModel]
class SimpleSummarizer implements Agent
{
    use Promptable;

    // Will use the cheapest model (e.g., Haiku)...
}

#[UseSmartestModel]
class ComplexReasoner implements Agent
{
    use Promptable;

    // Will use the most capable model (e.g., Opus)...
}
```

--------------------------------

### Report Throttled Exceptions with report Method

Source: https://laravel.com/docs/12.x/queues

Shows how to use the report method to send throttled exceptions to the application's exception handler. An optional closure can be provided to conditionally report only specific exceptions. In this example, only HttpClientException instances will be reported to the exception handler.

```php
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Queue\Middleware\ThrottlesExceptions;

/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new ThrottlesExceptions(10, 10 * 60))->report(
        fn (Throwable $throwable) => $throwable instanceof HttpClientException
    )];
}
```

--------------------------------

### GET /oauth/authorize - Authorization Request

Source: https://laravel.com/docs/12.x/passport

Initiates the OAuth 2.0 authorization code flow by redirecting the user to the authorization endpoint. The consuming application redirects users to this endpoint to request permission to access their resources.

```APIDOC
## GET /oauth/authorize

### Description
Initiates the OAuth 2.0 authorization code grant flow. The consuming application redirects users to this endpoint to request authorization. Passport handles the authorization prompt and user consent based on the prompt parameter.

### Method
GET

### Endpoint
/oauth/authorize

### Query Parameters
- **client_id** (string) - Required - The OAuth client ID
- **redirect_uri** (string) - Required - The URI to redirect to after authorization (must match registered redirect URIs)
- **response_type** (string) - Required - Must be 'code' for authorization code grant
- **scope** (string) - Required - Space-separated list of requested scopes (e.g., 'user:read orders:create')
- **state** (string) - Required - Random string for CSRF protection
- **prompt** (string) - Optional - Controls authentication behavior: 'none', 'consent', or 'login'

### Request Example
```php
use Illuminate\Http\Request;
use Illuminate\Support\Str;

Route::get('/redirect', function (Request $request) {
    $request->session()->put('state', $state = Str::random(40));

    $query = http_build_query([
        'client_id' => 'your-client-id',
        'redirect_uri' => 'https://third-party-app.com/callback',
        'response_type' => 'code',
        'scope' => 'user:read orders:create',
        'state' => $state,
        // 'prompt' => '', // "none", "consent", or "login"
    ]);

    return redirect('https://passport-app.test/oauth/authorize?'.$query);
});
```

### Prompt Parameter Behavior
- **none** - Throws authentication error if user is not authenticated
- **consent** - Always displays authorization approval screen
- **login** - Always prompts user to re-login
- **not provided** - Prompts only if scopes were not previously authorized

### Response
#### Success Response (302 Redirect)
User is redirected to the authorization approval screen or directly to redirect_uri if authorization is skipped.

#### Response Headers
```
Location: https://third-party-app.com/callback?code=AUTH_CODE&state=STATE_VALUE
```

### Notes
- This route is automatically defined by Passport
- The state parameter must be validated by the consuming application
- The authorization code is single-use and expires quickly
```

--------------------------------

### Configure Handle Method Dependency Injection with bindMethod

Source: https://laravel.com/docs/12.x/queues

Uses the service container's bindMethod to take total control over how dependencies are injected into the handle method. This approach is typically called from the boot method of AppServiceProvider and allows custom resolution logic for job dependencies.

```php
use App\Jobs\ProcessPodcast;
use App\Services\AudioProcessor;
use Illuminate\Contracts\Foundation\Application;

$this->app->bindMethod([ProcessPodcast::class, 'handle'], function (ProcessPodcast $job, Application $app) {
    return $job->handle($app->make(AudioProcessor::class));
});
```

--------------------------------

### Create Custom Skill File Structure

Source: https://laravel.com/docs/12.x/boost

Create custom skills by adding a SKILL.md file to the .ai/skills/{skill-name}/ directory in your application. Custom skills are installed alongside Boost's built-in skills when you run boost:update. This allows you to define targeted knowledge modules for your application's domain logic.

```text
.ai/skills/creating-invoices/SKILL.md
```

--------------------------------

### Dispatch Laravel Job to Specific Connection from Controller

Source: https://laravel.com/docs/12.x/queues

This example illustrates dispatching a Laravel job to a specific queue connection from a controller. The `onConnection('sqs')` method directs the job to the 'sqs' queue connection, useful when an application interacts with multiple queue backends like Redis and SQS.

```php
<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Models\Podcast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Store a new podcast.
     */
    public function store(Request $request): RedirectResponse
    {
        $podcast = Podcast::create(/* ... */);

        // Create podcast...

        ProcessPodcast::dispatch($podcast)->onConnection('sqs');

        return redirect('/podcasts');
    }
}
```

--------------------------------

### Publish Laravel Horizon Assets

Source: https://laravel.com/docs/12.x/horizon

After installing the Horizon package, execute this Artisan command to publish its configuration file and other necessary assets. The primary configuration file, `config/horizon.php`, allows for detailed customization of queue worker options.

```shell
php artisan horizon:install
```

--------------------------------

### Connect to Homestead VM via SSH

Source: https://laravel.com/docs/12.x/homestead

This command allows you to establish an SSH connection to your running Homestead virtual machine. It provides terminal access to the guest operating system for management and debugging.

```shell
vagrant ssh
```

--------------------------------

### Basic HTTP GET Request with Status Assertion - PHPUnit

Source: https://laravel.com/docs/12.x/http-tests

Tests a basic GET request to the application root and asserts the response status code is 200. This demonstrates the fundamental pattern for HTTP testing in Laravel using PHPUnit syntax with class-based test structure.

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

--------------------------------

### Register Custom Cashier Models in AppServiceProvider

Source: https://laravel.com/docs/12.x/cashier-paddle

Instruct Cashier to use your custom models by registering them in the 'boot' method of your 'App\Providers\AppServiceProvider'. This ensures Cashier utilizes your extended 'Subscription' and 'Transaction' models throughout the application.

```php
use App\Models\Cashier\Subscription;
use App\Models\Cashier\Transaction;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Cashier::useSubscriptionModel(Subscription::class);
    Cashier::useTransactionModel(Transaction::class);
}
```

--------------------------------

### Configure Package Discovery in composer.json

Source: https://laravel.com/docs/12.x/packages

Define service providers and facades in the composer.json extra section to enable automatic package discovery by Laravel. This eliminates the need for manual service provider registration and allows automatic facade alias registration when the package is installed.

```json
"extra": {
    "laravel": {
        "providers": [
            "Barryvdh\\Debugbar\\ServiceProvider"
        ],
        "aliases": {
            "Debugbar": "Barryvdh\\Debugbar\\Facade"
        }
    }
}
```

--------------------------------

### Integrate Basic Web Search Provider Tool (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This snippet shows how to integrate the `WebSearch` provider tool, allowing AI agents to perform real-time web searches for current events or dynamic information. This tool is natively supported by various AI providers like Anthropic, OpenAI, and Gemini, enhancing the agent's ability to access up-to-date external data.

```php
use Laravel\Ai\Providers\Tools\WebSearch;

public function tools(): iterable
{
    return [
        new WebSearch,
    ];
}
```

--------------------------------

### Define Collection Macro with Arguments in PHP

Source: https://laravel.com/docs/12.x/collections

Shows how to create a collection macro that accepts additional parameters. The example implements a toLocale macro that translates collection values to a specified language locale using Laravel's Lang facade.

```php
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

Collection::macro('toLocale', function (string $locale) {
    return $this->map(function (string $value) use ($locale) {
        return Lang::get($value, [], $locale);
    });
});

$collection = collect(['first', 'second']);

$translated = $collection->toLocale('es');

// ['primero', 'segundo'];
```

--------------------------------

### Listen to presence channel events with Echo

Source: https://laravel.com/docs/12.x/broadcasting

Uses Laravel Echo's join method to subscribe to a presence channel and listen for specific events. Includes lifecycle callbacks (here, joining, leaving) for tracking user presence and a listen method to handle incoming events like NewMessage.

```javascript
Echo.join(`chat.${roomId}`)
    .here(/* ... */)
    .joining(/* ... */)
    .leaving(/* ... */)
    .listen('NewMessage', (e) => {
        // ...
    });
```

--------------------------------

### Specify Additional Guzzle Request Options

Source: https://laravel.com/docs/12.x/http-client

Demonstrates how to pass additional Guzzle request options using the withOptions() method, which accepts an array of key/value pairs for configuring request behavior.

```php
$response = Http::withOptions([
    'debug' => true,
])->get('http://example.com/users');
```

--------------------------------

### Implement serves Method in Custom Valet Driver

Source: https://laravel.com/docs/12.x/valet

The serves method determines if the driver should handle an incoming request by checking if the site path contains the expected project structure. Returns true if the driver should serve the request, false otherwise. This example checks for WordPress by verifying the existence of a wp-admin directory.

```php
/**
 * Determine if the driver serves the request.
 */
public function serves(string $sitePath, string $siteName, string $uri): bool
{
    return is_dir($sitePath.'/wp-admin');
}
```

--------------------------------

### Inspect Payment Status and Conditions

Source: https://laravel.com/docs/12.x/billing

Demonstrates how to access the payment property on the IncompletePayment exception to check the payment intent status and verify specific conditions like requiresPaymentMethod or requiresConfirmation. This allows for granular handling of different payment states.

```php
use Laravel\Cashier\Exceptions\IncompletePayment;

try {
    $user->charge(1000, 'pm_card_threeDSecure2Required');
} catch (IncompletePayment $exception) {
    // Get the payment intent status...
    $exception->payment->status;

    // Check specific conditions...
    if ($exception->payment->requiresPaymentMethod()) {
        // ...
    } elseif ($exception->payment->requiresConfirmation()) {
        // ...
    }
}
```

--------------------------------

### Malicious CSRF Attack Example with Auto-Submitting Form

Source: https://laravel.com/docs/12.x/csrf

Demonstrates how a malicious website can exploit CSRF vulnerabilities by creating a hidden form that automatically submits to a target application's endpoint. This example shows why CSRF tokens are necessary to prevent unauthorized actions.

```blade
<form action="https://your-application.com/user/email" method="POST">
    <input type="email" value="malicious-email@example.com">
</form>

<script>
    document.forms[0].submit();
</script>
```

--------------------------------

### Assert Partial Output from Laravel Console Command using `expectsOutputToContain`

Source: https://laravel.com/docs/12.x/console-tests

This example illustrates how to make assertions against a portion of a console command's output. The `expectsOutputToContain` method checks if the command's output includes a specific substring, while `doesntExpectOutputToContain` can be used to assert its absence.

```Pest
test('console command', function () {
    $this->artisan('example')
        ->expectsOutputToContain('Taylor')
        ->assertExitCode(0);
});
```

```PHPUnit
/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('example')
        ->expectsOutputToContain('Taylor')
        ->assertExitCode(0);
}
```

--------------------------------

### Dispatch a Laravel Horizon Job with Eloquent Model (PHP)

Source: https://laravel.com/docs/12.x/horizon

This PHP example demonstrates how to dispatch the `RenderVideo` job, passing an `App\Models\Video` instance. Horizon will automatically tag this job using the model's class name and primary key (e.g., `App\Models\Video:1`) by inspecting the job's properties for Eloquent models.

```php
use App\Jobs\RenderVideo;
use App\Models\Video;

$video = Video::find(1);

RenderVideo::dispatch($video);
```

--------------------------------

### Implement Constructor Dependency Injection in Laravel MCP Tools

Source: https://laravel.com/docs/12.x/mcp

Use Laravel's service container to resolve and inject dependencies into tool constructors. This example injects a WeatherRepository dependency that will be automatically resolved by the container.

```php
<?php

namespace App\Mcp\Tools;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Create a new tool instance.
     */
    public function __construct(
        protected WeatherRepository $weather,
    ) {}

    // ...
}
```

--------------------------------

### Get Current Application Environment in Laravel PHP

Source: https://laravel.com/docs/12.x/configuration

This code demonstrates how to retrieve the current application environment using the `App::environment()` method from the `Illuminate\Support\Facades\App` facade. The environment is typically determined by the `APP_ENV` variable in your `.env` file.

```php
use Illuminate\Support\Facades\App;

$environment = App::environment();
```

--------------------------------

### Configure Minio Environment Variables

Source: https://laravel.com/docs/12.x/homestead

Set up .env file with Minio S3 endpoint configuration including access credentials and region settings. Enables Laravel application to communicate with Minio object storage using S3-compatible API.

```ini
AWS_USE_PATH_STYLE_ENDPOINT=true
AWS_ENDPOINT=http://localhost:9600
AWS_ACCESS_KEY_ID=homestead
AWS_SECRET_ACCESS_KEY=secretkey
AWS_DEFAULT_REGION=us-east-1
```

--------------------------------

### Fake Specific Jobs with Queue::fake() in Laravel

Source: https://laravel.com/docs/12.x/queues

Demonstrates how to fake only specific jobs while allowing other jobs to execute normally using the Queue facade's fake method. Includes examples for both Pest and PHPUnit testing frameworks. Accepts an array of job class names to fake and provides assertion methods to verify job dispatch counts.

```php
test('orders can be shipped', function () {
    Queue::fake([
        ShipOrder::class,
    ]);

    // Perform order shipping...

    // Assert a job was pushed twice...
    Queue::assertPushedTimes(ShipOrder::class, 2);
});
```

```php
public function test_orders_can_be_shipped(): void
{
    Queue::fake([
        ShipOrder::class,
    ]);

    // Perform order shipping...

    // Assert a job was pushed twice...
    Queue::assertPushedTimes(ShipOrder::class, 2);
}
```

--------------------------------

### Run Scout Queue Worker

Source: https://laravel.com/docs/12.x/scout

Start a queue worker to process Scout jobs on a specific connection and queue. This command processes indexing operations queued by Scout for the specified Redis connection and scout queue.

```shell
php artisan queue:work redis --queue=scout
```

--------------------------------

### Create Customized Guest Checkout with Promotion Code in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

Creates a guest checkout session with additional customization using the CheckoutBuilder instance. Demonstrates chaining the withPromotionCode method to apply a promotion code to the guest checkout before creating the session.

```php
use Illuminate\Http\Request;
use Laravel\Cashier\Checkout;

Route::get('/product-checkout', function (Request $request) {
    return Checkout::guest()
        ->withPromotionCode('promo-code')
        ->create('price_tshirt', [
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
});
```

--------------------------------

### Listen for Event Broadcasts with Laravel Echo in Vue

Source: https://laravel.com/docs/12.x/broadcasting

Use the useEcho composable from @laravel/echo-vue in Vue 3 setup scripts to listen for broadcast events. The hook provides a simple interface to subscribe to channels and handle incoming broadcast data.

```vue
<script setup lang="ts">
import { useEcho } from "@laravel/echo-vue";

useEcho(
    `orders.${orderId}`,
    "OrderShipmentStatusUpdated",
    (e) => {
        console.log(e.order);
    },
);
</script>
```

--------------------------------

### Mock Cache Facade in Laravel Controller

Source: https://laravel.com/docs/12.x/mocking

Demonstrates a Laravel controller that uses the Cache facade to retrieve a cached value. This is the base example showing typical facade usage that would be mocked in tests.

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * Retrieve a list of all users of the application.
     */
    public function index(): array
    {
        $value = Cache::get('key');

        return [
            // ...
        ];
    }
}
```

--------------------------------

### Generate Overlay Checkout Session - Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

Creates a GET route that generates a checkout session for a specific product price using Cashier. The checkout session is passed to a view where it can be used with the paddle-button component. The returnTo() method specifies where users should be redirected after completing the checkout.

```php
use Illuminate\Http\Request;

Route::get('/buy', function (Request $request) {
    $checkout = $user->checkout('pri_34567')
        ->returnTo(route('dashboard'));

    return view('billing', ['checkout' => $checkout]);
});
```

--------------------------------

### Use the Table component for Markdown tables in Laravel Mailables

Source: https://laravel.com/docs/12.x/mail

This Blade example illustrates how to use the 'x-mail::table' component to convert a standard Markdown table into an HTML table. It supports Markdown's default alignment syntax for columns.

```blade
<x-mail::table>
| Laravel       | Table         | Example       |
| ------------- | :-----------: | ------------: |
| Col 2 is      | Centered      | $10           |
| Col 3 is      | Right-Aligned | $20           |
</x-mail::table>
```

--------------------------------

### Return Structured Content with Custom Text from Laravel MCP Tool in PHP

Source: https://laravel.com/docs/12.x/mcp

This example demonstrates how to combine structured content with custom text using `Response::make()->withStructuredContent()`. This approach allows tools to provide both human-readable text and machine-parseable data in a single response, enhancing flexibility for AI clients.

```php
return Response::make(
    Response::text('Weather is 22.5°C and sunny')
)->withStructuredContent([
    'temperature' => 22.5,
    'conditions' => 'Sunny',
]);
```

--------------------------------

### Register Job Event Callbacks with Queue Facade

Source: https://laravel.com/docs/12.x/queues

Registers before and after callbacks on the Queue facade to execute code before or after queued jobs are processed. These callbacks are typically registered in a service provider's boot method and provide access to job details and connection information for logging or statistics.

```php
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Queue::before(function (JobProcessing $event) {
            // $event->connectionName
            // $event->job
            // $event->job->payload()
        });

        Queue::after(function (JobProcessed $event) {
            // $event->connectionName
            // $event->job
            // $event->job->payload()
        });
    }
}
```

--------------------------------

### Control Class-Based Feature Flag Values in Laravel Pennant Tests

Source: https://laravel.com/docs/12.x/pennant

This example demonstrates how to control the values of class-based feature flags during testing. Similar to string-based features, you can redefine the class-based feature's return value within your test to ensure consistent and predictable behavior. Both Pest and PHPUnit examples are included.

```php
use Laravel\Pennant\Feature;

test('it can control feature values', function () {
    Feature::define(NewApi::class, true);

    expect(Feature::value(NewApi::class))->toBeTrue();
});
```

```php
use App\Features\NewApi;
use Laravel\Pennant\Feature;

public function test_it_can_control_feature_values()
{
    Feature::define(NewApi::class, true);

    $this->assertTrue(Feature::value(NewApi::class));
}
```

--------------------------------

### Isolate a Valet Site to a Specific PHP Version

Source: https://laravel.com/docs/12.x/valet

This command configures a Valet site to use a specific PHP version, overriding the global PHP installation. Run it from the site's root directory, specifying the desired PHP version (e.g., `php@8.0`).

```shell
cd ~/Sites/example-site

valet isolate php@8.0
```

--------------------------------

### Generate a Basic Image with Laravel AI

Source: https://laravel.com/docs/12.x/ai-sdk

Demonstrates the fundamental usage of the `Laravel\Ai\Image` class to generate an image from a text prompt. It shows how to initiate image generation using the `of()` and `generate()` methods and retrieve the raw content of the generated image.

```php
use Laravel\Ai\Image;

$image = Image::of('A donut sitting on the kitchen counter')->generate();

$rawContent = (string) $image;
```

--------------------------------

### Apply DestinationFilter using Laravel's `tap` method

Source: https://laravel.com/docs/12.x/queries

This example demonstrates how to refactor the previous queries by applying the `DestinationFilter` class using the query builder's `tap` method. The `tap` method allows applying custom logic encapsulated in an invokable object while still returning the query builder instance for further chaining.

```php
use AppScopesDestinationFilter;
use IlluminateDatabaseQueryBuilder;
use IlluminateSupportFacadesDB;

DB::table('flights')
    ->when($destination, function (Builder $query, string $destination) { // [tl! remove]
        $query->where('destination', $destination); // [tl! remove]
    }) // [tl! remove]
    ->tap(new DestinationFilter($destination)) // [tl! add]
    ->orderByDesc('price')
    ->get();

// ...

DB::table('flights')
    ->when($destination, function (Builder $query, string $destination) { // [tl! remove]
        $query->where('destination', $destination); // [tl! remove]
    }) // [tl! remove]
    ->tap(new DestinationFilter($destination)) // [tl! add]
    ->where('user', $request->user()->id)
    ->orderBy('destination')
    ->get();
```

--------------------------------

### Perform Streamed Downloads in Laravel

Source: https://laravel.com/docs/12.x/responses

This PHP example demonstrates how to use Laravel's `response()->streamDownload()` method to generate a downloadable response directly from a string or callback, without first writing the content to disk. It accepts a callback to produce the content, a filename, and an optional array of headers.

```php
use App\Services\GitHub;

return response()->streamDownload(function () {
    echo GitHub::api('repo')
        ->contents()
        ->readme('laravel', 'laravel')['contents'];
}, 'laravel-readme.md');
```

--------------------------------

### Create Stripe Checkout Session for New Subscription in Laravel

Source: https://laravel.com/docs/12.x/billing

This PHP code defines a Laravel route that initiates a Stripe Checkout session, allowing a user to subscribe to a plan. It uses Cashier's `newSubscription` method to specify the plan, optional trial days, and promotion code allowance, redirecting the user to Stripe. Success and cancel URLs are provided for post-checkout redirection, requiring webhook handling for actual subscription activation.

```php
use Illuminate\Http\Request;

Route::get('/subscription-checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('default', 'price_basic_monthly')
        ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('your-success-route'),
            'cancel_url' => route('your-cancel-route'),
        ]);
});
```

--------------------------------

### Publish Laravel Pennant configuration and migration files

Source: https://laravel.com/docs/12.x/pennant

After installation, this Artisan command publishes Pennant's configuration file (`config/pennant.php`) and database migration files. This allows customization of Pennant's behavior and prepares the database for feature flag storage.

```shell
php artisan vendor:publish --provider="Laravel\Pennant\PennantServiceProvider"
```

--------------------------------

### Enable and Disable Fortify Features in Laravel

Source: https://laravel.com/docs/12.x/starter-kits

Configure which authentication features are enabled in your Laravel application using the config/fortify.php file. This example shows how to enable registration, password reset, email verification, and two-factor authentication with specific options. Features can be disabled by removing or commenting out their entries from the features array.

```php
use Laravel\Fortify\Features;

'features' => [
    Features::registration(),
    Features::resetPasswords(),
    Features::emailVerification(),
    Features::twoFactorAuthentication([
        'confirm' => true,
        'confirmPassword' => true,
    ]),
],
```

--------------------------------

### Configure Travis CI for Laravel Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Set up Travis CI to run Dusk tests by specifying PHP version, adding Chrome addon, and configuring scripts to launch headless Chrome and PHP's built-in server. This configuration handles the non-graphical environment by using headless Chrome with remote debugging.

```yaml
language: php

php:
  - 8.2

addons:
  chrome: stable

install:
  - cp .env.testing .env
  - travis_retry composer install --no-interaction --prefer-dist
  - php artisan key:generate
  - php artisan dusk:chrome-driver

before_script:
  - google-chrome-stable --headless --disable-gpu --remote-debugging-port=9222 http://localhost &
  - php artisan serve --no-reload &

script:
  - php artisan dusk
```

--------------------------------

### Set Idle Timeout for Laravel Process

Source: https://laravel.com/docs/12.x/processes

This example illustrates how to set an idle timeout for a process, which specifies the maximum time a process can run without producing any output. If the process remains idle for too long, it will be terminated to prevent indefinite hangs.

```php
$result = Process::timeout(60)->idleTimeout(30)->run('bash import.sh');
```

--------------------------------

### Configure Markdown Mailable content definition in Laravel

Source: https://laravel.com/docs/12.x/mail

This PHP example illustrates how to define the content for a Markdown Mailable. Instead of using the 'view' parameter, the 'markdown' parameter points to the Markdown template, and 'with' passes data to the template.

```php
use Illuminate\Mail\Mailables\Content;

/**
 * Get the message content definition.
 */
public function content(): Content
{
    return new Content(
        markdown: 'mail.orders.shipped',
        with: [
            'url' => $this->orderUrl,
        ],
    );
}
```

--------------------------------

### Define GET route for password reset request form (Laravel)

Source: https://laravel.com/docs/12.x/passwords

This Laravel route defines a GET endpoint for displaying the 'forgot password' form. It returns the 'auth.forgot-password' view, is protected by the 'guest' middleware to ensure only unauthenticated users can access it, and is named 'password.request'. The view should contain an 'email' field for users to submit their email address.

```php
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
```

--------------------------------

### Set Specific Subscription Quantity in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

This example shows how to directly set a subscription's quantity to a specific value using the `updateQuantity` method. This is useful for overriding the current quantity with a new, absolute value.

```php
$user->subscription('default')->updateQuantity(10);
```

--------------------------------

### Define Global Rate Limiter in Laravel

Source: https://laravel.com/docs/12.x/routing

This example illustrates how to set up a simple global rate limiter that applies a fixed limit of 1000 requests per minute to all requests associated with this limiter, without any specific segmentation.

```php
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    RateLimiter::for('global', function (Request $request) {
        return Limit::perMinute(1000);
    });
}
```

--------------------------------

### Click and Hold Mouse Button in Dusk

Source: https://laravel.com/docs/12.x/dusk

Simulate pressing and holding a mouse button on an element, then release it with a subsequent call to releaseMouse. Useful for testing drag operations or long-press interactions. The example demonstrates holding for 1000 milliseconds before releasing.

```php
$browser->clickAndHold('.selector');

$browser->clickAndHold()
    ->pause(1000)
    ->releaseMouse();
```

--------------------------------

### Run Tests with Artisan

Source: https://laravel.com/docs/12.x/structure

Executes automated tests using the Artisan test command, providing a detailed and beautiful representation of test results. Alternative commands include /vendor/bin/pest or /vendor/bin/phpunit for direct test runner execution.

```bash
php artisan test
```

--------------------------------

### GET /invoices/{invoiceId} - Retrieve Specific Invoice

Source: https://laravel.com/docs/12.x/billing

Retrieves a specific invoice by its ID. Returns a single Laravel\Cashier\Invoice instance.

```APIDOC
## GET /invoices/{invoiceId}

### Description
Retrieves a specific invoice by its ID. Returns a single Laravel\Cashier\Invoice instance with full invoice details.

### Method
GET

### Endpoint
/invoices/{invoiceId}

### Parameters
#### Path Parameters
- **invoiceId** (string) - Required - The Stripe invoice ID

### Request Example
```php
$invoice = $user->findInvoice($invoiceId);
```

### Response
#### Success Response (200)
- **id** (string) - Invoice ID
- **date** (datetime) - Invoice date
- **total** (string) - Invoice total amount
- **status** (string) - Invoice status
- **items** (array) - Line items on invoice

#### Response Example
```json
{
  "id": "in_1234567890",
  "date": "2024-01-15",
  "total": "$99.99",
  "status": "paid",
  "items": []
}
```

### Notes
- Returns null if invoice not found
- Invoice object provides methods for date formatting and total retrieval
```

--------------------------------

### Check for Any Payment Method Presence (Laravel Cashier)

Source: https://laravel.com/docs/12.x/billing

This PHP example shows how to check if a billable model has at least one payment method attached to their account, regardless of its type. The `hasPaymentMethod()` method returns true if any payment method exists.

```php
if ($user->hasPaymentMethod()) {
    // ...
}
```

--------------------------------

### Mock Cache Facade with Pest Test Framework

Source: https://laravel.com/docs/12.x/mocking

Shows how to mock a Cache facade call using the `expects` method in a Pest test. The mock verifies that the `get` method is called with 'key' and returns 'value'.

```php
<?php

use Illuminate\Support\Facades\Cache;

test('get index', function () {
    Cache::expects('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/users');

    // ...
});
```

--------------------------------

### Include external PHP files in Envoy setup (Blade)

Source: https://laravel.com/docs/12.x/envoy

Shows how to use the `@include` directive within `Envoy.blade.php` to load external PHP files, such as an autoloader, before tasks are executed. This allows access to classes and functions defined in those files.

```blade
@include('vendor/autoload.php')

@task('restart-queues')
    # ...
@endtask
```

--------------------------------

### Arr::prependKeysWith()

Source: https://laravel.com/docs/12.x/helpers

The `Arr::prependKeysWith` method prepends a given prefix to all keys of an associative array.

```APIDOC
## Arr::prependKeysWith()

### Description
The `Arr::prependKeysWith` method prepends a given prefix to all keys of an associative array.

### Method
Arr::prependKeysWith

### Endpoint
/Arr::prependKeysWith

### Parameters
#### Request Body
- **array** (array) - Required - The associative array whose keys will be prefixed.
- **prefix** (string) - Required - The string prefix to add to each key.

### Request Example
```php
use Illuminate\\Support\\Arr;

$array = [
    'name' => 'Desk',
    'price' => 100,
];

$keyed = Arr::prependKeysWith($array, 'product.');
```

### Response
#### Success Response (200)
- **result** (array) - The array with all keys prefixed.

#### Response Example
```php
/*
    [
        'product.name' => 'Desk',
        'product.price' => 100,
    ]
*/
```
```

--------------------------------

### Blade Button Component with Custom Type

Source: https://laravel.com/docs/12.x/blade

Example of consuming a button component with a custom type attribute. Demonstrates how non-class attributes are overwritten rather than merged when using the merge method.

```blade
<x-button type="submit">
    Submit
</x-button>
```

```blade
<button type="submit">
    Submit
</button>
```

--------------------------------

### Specify Redis Connection for RateLimitedWithRedis Middleware in PHP

Source: https://laravel.com/docs/12.x/queues

This PHP snippet demonstrates how to specify a particular Redis connection for the `RateLimitedWithRedis` middleware using the `connection` method. This allows the rate limiter to use a dedicated Redis instance or database. For example, it can use one named 'limiter'.

```php
return [(new RateLimitedWithRedis('backups'))->connection('limiter')];
```

--------------------------------

### Get Raw Rendered View Contents

Source: https://laravel.com/docs/12.x/http-tests

Retrieves the raw HTML output of a rendered view by casting the TestView instance to a string. Useful for custom assertions or debugging view rendering.

```php
$contents = (string) $this->view('welcome');
```

--------------------------------

### Return Resource Collection with Preserved Keys in Laravel

Source: https://laravel.com/docs/12.x/eloquent-resources

This PHP example demonstrates how to return a collection of `UserResource` instances while preserving their original keys. It uses `User::all()->keyBy->id` to ensure the collection has meaningful keys before being passed to the resource collection, maintaining data integrity.

```php
use App\Http\Resources\UserResource;
use App\Models\User;

Route::get('/users', function () {
    return UserResource::collection(User::all()->keyBy->id);
});
```

--------------------------------

### Configure Two-Factor Authentication Challenge View in Laravel Fortify

Source: https://laravel.com/docs/12.x/fortify

Sets up the two-factor authentication challenge view by registering a callback with Fortify's twoFactorChallengeView method. This callback returns the view that will be displayed when users need to verify their TOTP token or recovery code. The method should be called from the boot method of FortifyServiceProvider.

```php
use Laravel\Fortify\Fortify;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Fortify::twoFactorChallengeView(function () {
        return view('auth.two-factor-challenge');
    });

    // ...
}
```

--------------------------------

### Extend Laravel Cashier Subscription Model

Source: https://laravel.com/docs/12.x/cashier-paddle

Customize Cashier's internal models by extending them with your own definitions. This example shows how to create a custom 'Subscription' model that inherits from 'Laravel\Paddle\Subscription', allowing you to add custom properties or methods.

```php
use Laravel\Paddle\Subscription as CashierSubscription;

class Subscription extends CashierSubscription
{
    // ...
}
```

--------------------------------

### Implement ShouldBroadcastNow for Synchronous Broadcasting

Source: https://laravel.com/docs/12.x/broadcasting

Use the ShouldBroadcastNow interface instead of ShouldBroadcast to broadcast events synchronously using the sync queue driver instead of the default queue driver. This broadcasts the event immediately without queuing.

```php
<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class OrderShipmentStatusUpdated implements ShouldBroadcastNow
{
    // ...
}
```

--------------------------------

### Making HTTP Requests with Multiple Methods - Pest

Source: https://laravel.com/docs/12.x/http-tests

Demonstrates making a basic GET request and asserting the response status. Test request methods return TestResponse instances which provide various assertion methods for inspecting application responses.

```php
<?php

test('basic request', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
```

--------------------------------

### Configure Laravel Horizon Wait Time Thresholds (PHP)

Source: https://laravel.com/docs/12.x/horizon

This PHP configuration example shows how to customize the 'long wait' time thresholds for different queue connections and queues within your `config/horizon.php` file. The `waits` array allows you to set specific thresholds (in seconds) for combinations like `redis:critical` or `redis:default`, with `0` disabling notifications for a queue.

```php
'waits' => [
    'redis:critical' => 30,
    'redis:default' => 60,
    'redis:batch' => 120,
],
```

--------------------------------

### Recursively Save Eloquent Model and Relationships Quietly in Laravel

Source: https://laravel.com/docs/12.x/eloquent-relationships

This example shows how to use the `pushQuietly` method, which functions similarly to `push` but saves the model and its relationships without dispatching any Eloquent events. This can be useful in scenarios where event triggering is not desired.

```php
$post->pushQuietly();
```

--------------------------------

### Instantiate Collection with collect Helper in PHP

Source: https://laravel.com/docs/12.x/collections

Shows the simplest way to create a new Collection instance using the collect helper function with an array of values. This is the primary method for initializing collections in Laravel applications.

```php
$collection = collect([1, 2, 3]);
```

--------------------------------

### Define Table Storage Engine in Laravel Schema PHP

Source: https://laravel.com/docs/12.x/migrations

This example illustrates how to specify the storage engine for a database table during its creation using Laravel's Schema builder. The `engine` method on the `Blueprint` instance allows setting engines like 'InnoDB', which is particularly relevant for MariaDB or MySQL databases to control transaction support and locking mechanisms.

```php
Schema::create('users', function (Blueprint $table) {
    $table->engine('InnoDB');

    // ...
});
```

--------------------------------

### Define Interval-Based Cache Refreshers in Laravel Octane (PHP)

Source: https://laravel.com/docs/12.x/octane

This example shows how to create interval-based caches using the Octane cache driver's `interval` method. These caches automatically refresh their values at a specified frequency (e.g., every five seconds) and should be registered within a service provider's `boot` method.

```php
use Illuminate\Support\Str;

Cache::store('octane')->interval('random', function () {
    return Str::random(10);
}, seconds: 5);
```

--------------------------------

### Define GET route for password reset form with token (Laravel)

Source: https://laravel.com/docs/12.x/passwords

This Laravel route defines a GET endpoint for displaying the actual password reset form. It expects a `token` parameter in the URL, which is passed to the 'auth.reset-password' view. This route is protected by the 'guest' middleware and is named 'password.reset'. The view should include fields for email, new password, password confirmation, and a hidden field for the received token.

```php
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
```

--------------------------------

### Integrate Basic File Search Provider Tool with Vector Stores (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

This snippet shows how to integrate the `FileSearch` provider tool, allowing AI agents to search through files stored in specified vector stores. This capability is essential for retrieval-augmented generation (RAG) by enabling agents to access and retrieve information from your uploaded documents.

```php
use Laravel\Ai\Providers\Tools\FileSearch;

public function tools(): iterable
{
    return [
        new FileSearch(stores: ['store_id']),
    ];
}
```

--------------------------------

### Configure MongoDB Connection with Authentication in .env

Source: https://laravel.com/docs/12.x/sail

Set up MongoDB connection string with username and password authentication in Laravel's .env file. This configuration enables secure access to MongoDB Atlas Local container with credentials before starting the mongodb service. The connection string format includes host, port, and authentication parameters.

```ini
MONGODB_USERNAME=user
MONGODB_PASSWORD=laravel
MONGODB_URI=mongodb://${MONGODB_USERNAME}:${MONGODB_PASSWORD}@mongodb:27017
```

--------------------------------

### Implement Castable with Anonymous Class in Laravel

Source: https://laravel.com/docs/12.x/eloquent-mutators

Creates an Address value object implementing the Castable interface with an anonymous class that implements CastsAttributes. The castUsing method returns an anonymous class defining get and set methods for casting database attributes to/from the Address value object. The get method reconstructs an Address instance from database attributes, while the set method converts an Address object back to database array format.

```php
<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Address implements Castable
{
    // ...

    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array<string, mixed>  $arguments
     */
    public static function castUsing(array $arguments): CastsAttributes
    {
        return new class implements CastsAttributes
        {
            public function get(
                Model $model,
                string $key,
                mixed $value,
                array $attributes,
            ): Address {
                return new Address(
                    $attributes['address_line_one'],
                    $attributes['address_line_two']
                );
            }

            public function set(
                Model $model,
                string $key,
                mixed $value,
                array $attributes,
            ): array {
                return [
                    'address_line_one' => $value->lineOne,
                    'address_line_two' => $value->lineTwo,
                ];
            }
        };
    }
}
```

--------------------------------

### Add Price and Invoice Immediately to Multi-Product Subscription (Laravel Cashier)

Source: https://laravel.com/docs/12.x/billing

To add a new price to an existing multi-product subscription and immediately bill the customer for it, use the `addPriceAndInvoice` method. This triggers an immediate invoice for the newly added price.

```php
$user->subscription('default')->addPriceAndInvoice('price_chat');
```

--------------------------------

### splice

Source: https://laravel.com/docs/12.x/collections

The `splice` method removes and returns a slice of items from the collection starting at the specified index, with optional length and replacement items.

```APIDOC
## splice

### Description
The `splice` method removes and returns a slice of items starting at the specified index. It can also limit the size of the resulting collection and replace the removed items with new ones.

### Method Type
Collection Method

### Parameters
#### Arguments
- **offset** (int) - Required - The starting index from which to remove items.
- **length** (int) - Optional - The number of items to remove. If omitted, all items from the offset to the end of the collection are removed.
- **replacement** (array) - Optional - An array of items to replace the items removed from the collection.

### Example Usage
```php
$collection = collect([1, 2, 3, 4, 5]);

$chunk = $collection->splice(2, 1, [10, 11]);

// $chunk->all() will be [3]
// $collection->all() will be [1, 2, 10, 11, 4, 5]
```

### Return Value
#### Success Response
- **collection** (Collection) - A new collection containing the items that were removed.

#### Return Example
```
// After $chunk = $collection->splice(2, 1, [10, 11]);
// $chunk->all()
[3]

// $collection->all()
[1, 2, 10, 11, 4, 5]
```
```

--------------------------------

### Str::doesntStartWith() - Check if String Doesn't Start With Value

Source: https://laravel.com/docs/12.x/strings

The Str::doesntStartWith method determines if the given string doesn't begin with the given value, supporting both single string and array of values.

```APIDOC
## Str::doesntStartWith()

### Description
Determines if the given string doesn't begin with the given value.

### Method
Static Method

### Signature
```php
Str::doesntStartWith(string $haystack, string|array $needles): bool
```

### Parameters
- **$haystack** (string) - Required - The string to check
- **$needles** (string|array) - Required - The value(s) to check against

### Usage Examples

#### Single String Value
```php
use Illuminate\Support\Str;

$result = Str::doesntStartWith('This is my name', 'That');
// Result: true
```

#### Array of Values
```php
use Illuminate\Support\Str;

$result = Str::doesntStartWith('This is my name', ['What', 'That', 'There']);
// Result: true
```

### Returns
- (bool) - True if the string doesn't start with any of the given values, false otherwise
```

--------------------------------

### Broadcast Anonymous Event with Custom Name and Data in Laravel PHP

Source: https://laravel.com/docs/12.x/broadcasting

This example demonstrates how to customize the event's name and include specific data when broadcasting an anonymous event. The `as` method sets the event name, and `with` provides the data payload.

```php
Broadcast::on('orders.'.$order->id)
    ->as('OrderPlaced')
    ->with($order)
    ->send();
```

--------------------------------

### Apply Middleware with Single Parameter to Route in Laravel

Source: https://laravel.com/docs/12.x/middleware

Shows how to attach middleware with parameters to a route using the middleware() method. Parameters are separated from the middleware class name using a colon. This example applies the EnsureUserHasRole middleware with the 'editor' role parameter.

```php
use App\Http\Middleware\EnsureUserHasRole;

Route::put('/post/{id}', function (string $id) {
    // ...
})->middleware(EnsureUserHasRole::class.':editor');
```

--------------------------------

### Passport Token Purge Command

Source: https://laravel.com/docs/12.x/passport

Purge expired tokens, authorization codes, and device codes from your Laravel Passport installation. Can be run manually or scheduled as a recurring job.

```APIDOC
## COMMAND passport:purge

### Description
Purges only expired tokens, authorization codes, and device codes from the Passport database.

### Usage
```bash
php artisan passport:purge --expired
```

### Options
- **--expired** - Only purge expired tokens, codes, and device codes

### Scheduling
You can configure this command to run automatically on a schedule in your application's `routes/console.php` file:

```php
use Illuminate\Support\Facades\Schedule;

Schedule::command('passport:purge')->hourly();
```

### Notes
- This command helps maintain database performance by removing expired OAuth tokens
- Can be scheduled to run at regular intervals (hourly, daily, etc.)
- Recommended for production environments to keep the database clean
```

--------------------------------

### Configure Chipper CI for Laravel Dusk Tests

Source: https://laravel.com/docs/12.x/dusk

Set up Chipper CI to run Dusk tests with PHP 8.2, Node.js, and built-in Dusk service for Chrome. The configuration includes environment setup, asset compilation, and browser testing pipeline with dynamic APP_URL configuration using BUILD_HOST variable.

```yaml
# file .chipperci.yml
version: 1

environment:
  php: 8.2
  node: 16

# Include Chrome in the build environment
services:
  - dusk

# Build all commits
on:
   push:
      branches: .*

pipeline:
  - name: Setup
    cmd: |
      cp -v .env.example .env
      composer install --no-interaction --prefer-dist --optimize-autoloader
      php artisan key:generate

      # Create a dusk env file, ensuring APP_URL uses BUILD_HOST
      cp -v .env .env.dusk.ci
      sed -i "s@APP_URL=.*@APP_URL=http://$BUILD_HOST:8000@g" .env.dusk.ci

  - name: Compile Assets
    cmd: |
      npm ci --no-audit
      npm run build

  - name: Browser Tests
    cmd: |
      php -S [::0]:8000 -t public 2>server.log &
      sleep 2
      php artisan dusk:chrome-driver $CHROME_DRIVER
      php artisan dusk --env=ci
```

--------------------------------

### Perform Fluent Keyboard Interactions with Laravel Dusk (PHP)

Source: https://laravel.com/docs/12.x/dusk

Dusk's `withKeyboard` method provides a fluent API for intricate keyboard interactions using the `Laravel\Dusk\Keyboard` class. This allows chaining methods like `press`, `release`, `type`, and `pause` for precise control over keyboard events.

```php
use Laravel\Dusk\Keyboard;

$browser->withKeyboard(function (Keyboard $keyboard) {
    $keyboard->press('c')
        ->pause(1000)
        ->release('c')
        ->type(['c', 'e', 'o']);
});
```

--------------------------------

### Define Tool Output Schema in Laravel MCP

Source: https://laravel.com/docs/12.x/mcp

Create a structured output schema for a tool using the outputSchema method. This example defines a weather tool that returns temperature, conditions, and humidity as required fields with descriptions.

```php
<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Get the tool's output schema.
     *
     * @return array<string, \Illuminate\JsonSchema\Types\Type>
     */
    public function outputSchema(JsonSchema $schema): array
    {
        return [
            'temperature' => $schema->number()
                ->description('Temperature in Celsius')
                ->required(),

            'conditions' => $schema->string()
                ->description('Weather conditions')
                ->required(),

            'humidity' => $schema->integer()
                ->description('Humidity percentage')
                ->required(),
        ];
    }
}
```

--------------------------------

### Apply Middleware Alias to a Route in Laravel

Source: https://laravel.com/docs/12.x/middleware

This PHP example shows how to apply a previously defined middleware alias to a specific route in Laravel. By using the alias, route definitions become cleaner and more readable. The `middleware()` method is chained to the route definition.

```php
Route::get('/profile', function () {
    // ...
})->middleware('subscribed');
```

--------------------------------

### DELETE /user/two-factor-authentication

Source: https://laravel.com/docs/12.x/fortify

Disable two-factor authentication for the authenticated user. This endpoint requires password confirmation prior to being called and removes the user's two-factor authentication setup.

```APIDOC
## DELETE /user/two-factor-authentication

### Description
Disable two-factor authentication for the authenticated user. Requires password confirmation before execution.

### Method
DELETE

### Endpoint
/user/two-factor-authentication

### Authentication
Requires password confirmation via the password confirmation flow.

### Response
#### Success Response (204)
Two-factor authentication has been successfully disabled.

#### Error Response (422)
- **errors** (object) - Validation or confirmation errors

#### Error Response Example
{
  "errors": {
    "password": ["The password confirmation failed."]
  }
}
```

--------------------------------

### Call another Artisan command silently from within a PHP command

Source: https://laravel.com/docs/12.x/artisan

This example illustrates how to call another Artisan command from within a PHP console command while suppressing all of its output. The `callSilently` method accepts the same arguments as the `call` method.

```php
$this->callSilently('mail:send', [
    'user' => 1, '--queue' => 'default'
]);
```

--------------------------------

### Inspect Laravel Job Batch Properties and Methods

Source: https://laravel.com/docs/12.x/queues

Provides an overview of the key properties and methods available on the `Illuminate\Bus\Batch` instance. These tools allow developers to monitor the progress, status, and control the execution of a job batch, including checking completion percentage, pending jobs, and cancelling the batch.

```php
// The UUID of the batch...
$batch->id;

// The name of the batch (if applicable)...
$batch->name;

// The number of jobs assigned to the batch...
$batch->totalJobs;

// The number of jobs that have not been processed by the queue...
$batch->pendingJobs;

// The number of jobs that have failed...
$batch->failedJobs;

// The number of jobs that have been processed thus far...
$batch->processedJobs();

// The completion percentage of the batch (0-100)...
$batch->progress();

// Indicates if the batch has finished executing...
$batch->finished();

// Cancel the execution of the batch...
$batch->cancel();

// Indicates if the batch has been cancelled...
$batch->cancelled();
```

--------------------------------

### Implement a Queued Event Listener in Laravel PHP

Source: https://laravel.com/docs/12.x/events

This example shows how to make an event listener queued, which is beneficial for slow tasks like sending emails or making HTTP requests. By implementing the `Illuminate\Contracts\Queue\ShouldQueue` interface, the listener will automatically be processed by Laravel's queue system, improving application responsiveness.

```php
<?php

namespace AppListeners;

use AppEventsOrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    // ...
}
```

--------------------------------

### Clone Laravel Homestead Repository

Source: https://laravel.com/docs/12.x/homestead

This command clones the Laravel Homestead repository from GitHub into a 'Homestead' directory within the user's home directory. This directory will serve as the central location for your Homestead virtual machine and all associated Laravel applications.

```shell
git clone https://github.com/laravel/homestead.git ~/Homestead
```

--------------------------------

### GET /users/{id}/tokens - Retrieve User Tokens

Source: https://laravel.com/docs/12.x/passport

Retrieve all authorized tokens for a specific user. This endpoint allows you to fetch valid, non-revoked tokens and their associated OAuth client connections for displaying in user dashboards.

```APIDOC
## GET /users/{id}/tokens

### Description
Retrieves all authorized tokens for a user, including valid tokens and their connections to third-party OAuth applications.

### Method
GET

### Endpoint
/users/{id}/tokens

### Path Parameters
- **id** (integer) - Required - The user ID

### Response
#### Success Response (200)
- **tokens** (array) - Array of token objects
  - **id** (string) - The token ID
  - **client_id** (integer) - The OAuth client ID
  - **revoked** (boolean) - Whether the token has been revoked
  - **expires_at** (string) - ISO 8601 timestamp of token expiration
  - **scopes** (array) - Array of scopes granted to the token

#### Response Example
```php
// Retrieving all valid tokens for the user
$user = User::find($userId);

$tokens = $user->tokens()
    ->where('revoked', false)
    ->where('expires_at', '>', Date::now())
    ->get();

// Retrieving user's connections to third-party OAuth app clients
$connections = $tokens->load('client')
    ->reject(fn (Token $token) => $token->client->firstParty())
    ->groupBy('client_id')
    ->map(fn (Collection $tokens) => [
        'client' => $tokens->first()->client,
        'scopes' => $tokens->pluck('scopes')->flatten()->unique()->values()->all(),
        'tokens_count' => $tokens->count(),
    ])
    ->values();
```

### Notes
- Use the `tokens()` method from the `HasApiTokens` trait
- Filter by `revoked` and `expires_at` to get valid tokens only
- Load the `client` relationship to access OAuth client information
```

--------------------------------

### Test Laravel Console Command Table Output using `expectsTable`

Source: https://laravel.com/docs/12.x/console-tests

This example shows how to test console commands that display tabular data using Artisan's `table` method. The `expectsTable` method simplifies assertions by accepting the expected table headers and data rows as arguments, making it easier to verify complex table outputs.

```php
$this->artisan('users:all')
    ->expectsTable([
        'ID',
        'Email',
    ], [
        [1, 'taylor@example.com'],
        [2, 'abigail@example.com'],
    ]);
```

--------------------------------

### Check if String Starts With Value in PHP Laravel

Source: https://laravel.com/docs/12.x/strings

The Str::startsWith method determines if a given string begins with a specified value. Supports checking against a single value or an array of possible values.

```php
use Illuminate\Support\Str;

$result = Str::startsWith('This is my name', 'This');

// true

$result = Str::startsWith('This is my name', ['This', 'That', 'There']);

// true
```

--------------------------------

### Assert HTTP Redirect to URI in Laravel

Source: https://laravel.com/docs/12.x/http-tests

Assert that the response is a redirect to the given URI. The URI can be optionally specified to verify the redirect target, ensuring users are guided to the correct destination after an action.

```php
$response->assertRedirect($uri = null);
```

--------------------------------

### Exclude attributes whose keys start with a string (Blade)

Source: https://laravel.com/docs/12.x/blade

Illustrates using the `whereDoesntStartWith` method to exclude attributes whose keys begin with a given string from the attribute bag, providing a way to remove specific prefixes.

```blade
{{ $attributes->whereDoesntStartWith('wire:model') }}
```

--------------------------------

### Customizing Required Message for Laravel Prompts Suggest (PHP)

Source: https://laravel.com/docs/12.x/prompts

This example shows how to provide a custom validation message when a `suggest` input is required but left empty. Instead of a generic error, a specific string passed to the `required` argument will be displayed to the user. This allows for more precise and helpful feedback.

```php
$name = suggest(
    label: 'What is your name?',
    options: ['Taylor', 'Dayle'],
    required: 'Your name is required.'
);
```

--------------------------------

### Add a price and bill immediately to an existing subscription in Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

This code demonstrates how to add a new price to an existing subscription and trigger an immediate invoice for the change. It utilizes the `swapAndInvoice` method, which functions similarly to `swap` but ensures the customer is billed without waiting for the next billing cycle.

```php
$user->subscription()->swapAndInvoice(['price_chat', 'price_original' => 2]);
```

--------------------------------

### Render a Nested Anonymous Blade Component

Source: https://laravel.com/docs/12.x/blade

This example illustrates how to render an anonymous component that is nested within subdirectories inside `resources/views/components`. The dot character (`.`) is used in the component tag to indicate the directory path.

```blade
<x-inputs.button/>
```

--------------------------------

### Add Backoff Delay to ThrottlesExceptions Middleware

Source: https://laravel.com/docs/12.x/queues

Shows how to add a backoff delay to the ThrottlesExceptions middleware using the backoff method. This specifies the number of minutes a job should be delayed before retry when an exception occurs but the threshold has not been reached. In this example, the job will be delayed 5 minutes before each retry attempt.

```php
use Illuminate\Queue\Middleware\ThrottlesExceptions;

/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new ThrottlesExceptions(10, 5 * 60))->backoff(5)];
}
```

--------------------------------

### Get Current Page Items - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Retrieves all items displayed on the current page. Returns an array or collection of items for the active pagination page.

```php
$paginator->items()
```

--------------------------------

### Link a Laravel Application with a Custom Hostname

Source: https://laravel.com/docs/12.x/valet

Use this command to link a Valet site and assign it a specific hostname, allowing access through a custom URL like `http://application.test`. This is beneficial when the desired hostname differs from the directory name.

```shell
cd ~/Sites/laravel

valet link application
```

--------------------------------

### Dynamically Customize Queued Listener Properties with Methods in Laravel PHP

Source: https://laravel.com/docs/12.x/events

This example demonstrates how to dynamically set the queue connection, name, or delay for a queued event listener at runtime. By defining `viaConnection`, `viaQueue`, or `withDelay` methods, you can use event data or other runtime conditions to determine these queue parameters.

```php
/**
 * Get the name of the listener's queue connection.
 */
public function viaConnection(): string
{
    return 'sqs';
}

/**
 * Get the name of the listener's queue.
 */
public function viaQueue(): string
{
    return 'listeners';
}

/**
 * Get the number of seconds before the job should be processed.
 */
public function withDelay(OrderShipped $event): int
{
    return $event->highPriority ? 0 : 60;
}
```

--------------------------------

### Listen for Laravel Broadcast Notifications with Echo in JavaScript

Source: https://laravel.com/docs/12.x/notifications

Provides an example of how to listen for broadcast notifications on a private channel using Laravel Echo in a JavaScript frontend. The `notification` method is used to define a callback for handling incoming notifications.

```js
Echo.private('App.Models.User.' + userId)
    .notification((notification) => {
        console.log(notification.type);
    });
```

--------------------------------

### Create Collection Instance with collect() Helper

Source: https://laravel.com/docs/12.x/helpers

The collect() function creates a collection instance from the given value. Collections provide a fluent interface for working with arrays of data.

```php
$collection = collect(['Taylor', 'Abigail']);
```

--------------------------------

### Redirecting to Controller Action with Parameters in Laravel PHP

Source: https://laravel.com/docs/12.x/responses

This PHP example demonstrates redirecting to a controller action while passing route parameters. The second argument to `action()` is an associative array where keys are parameter names and values are their corresponding data, allowing the target action to receive specific inputs.

```php
return redirect()->action(
    [UserController::class, 'profile'], ['id' => 1]
);
```

--------------------------------

### Implement ShouldBroadcast Interface with broadcastOn Method

Source: https://laravel.com/docs/12.x/broadcasting

Create a broadcast event class by implementing the ShouldBroadcast interface and defining the broadcastOn method that returns an array of Channel, PrivateChannel, or PresenceChannel instances. This tells Laravel which channels the event should broadcast to and automatically queues the event for broadcasting when fired.

```php
<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class ServerCreated implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public User $user,
    ) {}

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('user.'.$this->user->id),
        ];
    }
}
```

--------------------------------

### Delayed Job Dispatching

Source: https://laravel.com/docs/12.x/queues

Dispatch jobs with a delay using the delay method, specifying when the job should become available for processing. This example delays a job by 10 minutes. Use withoutDelay to bypass any default delay configuration. Note: Amazon SQS has a maximum delay of 15 minutes.

```php
<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Models\Podcast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Store a new podcast.
     */
    public function store(Request $request): RedirectResponse
    {
        $podcast = Podcast::create(/* ... */);

        // ...

        ProcessPodcast::dispatch($podcast)
            ->delay(now()->plus(minutes: 10));

        return redirect('/podcasts');
    }
}
```

```php
ProcessPodcast::dispatch($podcast)->withoutDelay();
```

--------------------------------

### Immediately Charge Subscription in Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

Use the `chargeAndInvoice()` method to charge a subscriber immediately instead of waiting for the next billing interval. This method accepts one or multiple price IDs.

```php
$response = $user->subscription()->chargeAndInvoice('pri_123');
```

--------------------------------

### Retrieve All Error Messages for All Fields

Source: https://laravel.com/docs/12.x/validation

Gets an array containing all error messages across all validated fields using the all() method on the MessageBag instance. Useful for displaying all validation errors at once.

```php
foreach ($errors->all() as $message) {
    // ...
}
```

--------------------------------

### Get URL For Page Number - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Generates the URL for a specific page number. Accepts page number as parameter and returns the corresponding pagination URL.

```php
$paginator->url($page)
```

--------------------------------

### Get Items Per Page - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Returns the number of items configured to display per page. Represents the pagination limit or page size setting.

```php
$paginator->perPage()
```

--------------------------------

### Remove Price from Multi-Product Subscription in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

This example illustrates how to remove a specific price from an existing multi-product subscription using the `removePrice` method. Note that you cannot remove the last price; instead, the entire subscription should be canceled.

```php
$user->subscription('default')->removePrice('price_chat');
```

--------------------------------

### Execute Full-Text Query on Multiple Columns in Laravel

Source: https://laravel.com/docs/12.x/search

This PHP example illustrates how to perform a full-text search across multiple columns using Laravel's `whereFullText` method. By passing an array of column names, it searches for the phrase 'web developer' in both 'title' and 'body' fields, utilizing a composite full-text index for broader search coverage.

```php
$articles = Article::whereFullText(
    ['title', 'body'], 'web developer'
)->get();
```

--------------------------------

### Initialize CSRF Protection with Axios

Source: https://laravel.com/docs/12.x/sanctum

Makes a GET request to the `/sanctum/csrf-cookie` endpoint to initialize CSRF protection and set the `XSRF-TOKEN` cookie. The response initializes the CSRF token which is automatically handled by Axios for subsequent requests.

```javascript
axios.get('/sanctum/csrf-cookie').then(response => {
    // Login...
});
```

--------------------------------

### PHPDoc with Native Type Hints in PHP

Source: https://laravel.com/docs/12.x/contributions

Simplified PHPDoc format for methods using native PHP type hints. The @param and @return attributes are omitted when types are explicitly declared in the method signature, reducing redundancy.

```php
/**
 * Execute the job.
 */
public function handle(AudioProcessor $processor): void
{
    // ...
}
```

--------------------------------

### Get Current Page Number - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Retrieves the current page number from the paginator instance. Returns an integer representing which page the user is currently viewing.

```php
$paginator->currentPage()
```

--------------------------------

### Install Laravel Pennant package via Composer

Source: https://laravel.com/docs/12.x/pennant

This command adds the Laravel Pennant package to your project's `composer.json` file and downloads its dependencies. It's the first step to integrate feature flagging capabilities into your Laravel application.

```shell
composer require laravel/pennant
```

--------------------------------

### Configure Additional Swoole Options in Octane

Source: https://laravel.com/docs/12.x/octane

This PHP array demonstrates how to add advanced configuration options for Swoole within your application's `octane` configuration file. It includes settings for `log_file` to specify the Swoole HTTP log path and `package_max_length` to define the maximum package size for requests.

```php
'swoole' => [
    'options' => [
        'log_file' => storage_path('logs/swoole_http.log'),
        'package_max_length' => 10 * 1024 * 1024,
    ],
],
```

--------------------------------

### Mock Cache Facade with PHPUnit Test Framework

Source: https://laravel.com/docs/12.x/mocking

Demonstrates mocking a Cache facade call using the `expects` method in a PHPUnit test class. The mock verifies the `get` method is called with 'key' and returns 'value'.

```php
<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function test_get_index(): void
    {
        Cache::expects('get')
            ->with('key')
            ->andReturn('value');

        $response = $this->get('/users');

        // ...
    }
}
```

--------------------------------

### Arr::float() - Get Float Value with Validation

Source: https://laravel.com/docs/12.x/helpers

Retrieves a value from a deeply nested array using dot notation and validates it is a float. Throws InvalidArgumentException if value is not a float type.

```php
use Illuminate\Support\Arr;

$array = ['name' => 'Joe', 'balance' => 123.45];

$value = Arr::float($array, 'balance');

// 123.45

$value = Arr::float($array, 'name');

// throws InvalidArgumentException
```

--------------------------------

### Immediately Deleting Overlapping Jobs in Laravel

Source: https://laravel.com/docs/12.x/queues

This example shows how to use the `dontRelease` method with the `WithoutOverlapping` middleware to prevent overlapping jobs from being retried. Instead of being released back to the queue, any overlapping job will be immediately deleted, ensuring it does not execute again.

```php
/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new WithoutOverlapping($this->order->id))->dontRelease()];
}
```

--------------------------------

### Retrieve a single user record or throw exception in Laravel

Source: https://laravel.com/docs/12.x/queries

This PHP example demonstrates how to retrieve a single user record using `firstOrFail()`. If no matching record is found for the given 'name', an `Illuminate\Database\RecordNotFoundException` is thrown, which automatically results in a 404 HTTP response if unhandled.

```php
$user = DB::table('users')->where('name', 'John')->firstOrFail();
```

--------------------------------

### Retrieve a specific attribute's value (Blade)

Source: https://laravel.com/docs/12.x/blade

Shows how to use the `get` method to retrieve the value of a specific attribute by its name from the component's attribute bag.

```blade
{{ $attributes->get('class') }}
```

--------------------------------

### Attach file from default disk with custom name and MIME type in Laravel Mail

Source: https://laravel.com/docs/12.x/mail

This example shows how to attach a file from the default filesystem disk while also specifying a custom filename and MIME type. The `as()` method sets the name the recipient will see, and `withMime()` explicitly defines the attachment's MIME type for proper handling.

```php
/**
 * Get the attachments for the message.
 *
 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
 */
public function attachments(): array
{
    return [
        Attachment::fromStorage('/path/to/file')
            ->as('name.pdf')
            ->withMime('application/pdf'),
    ];
}
```

--------------------------------

### Implement Method Dependency Injection in Laravel MCP Tools

Source: https://laravel.com/docs/12.x/mcp

Type-hint dependencies directly in the tool's handle method for automatic resolution by the service container. This example demonstrates injecting a WeatherRepository into the handle method alongside the Request object.

```php
<?php

namespace App\Mcp\Tools;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request, WeatherRepository $weather): Response
    {
        $location = $request->get('location');

        $forecast = $weather->getForecastFor($location);

        // ...
    }
}
```

--------------------------------

### Database Grammar Constructor with Connection Instance

Source: https://laravel.com/docs/12.x/upgrade

The Illuminate\Database\Grammar class constructor now requires a Connection instance as the first argument, replacing the previous setConnection() method pattern. This change applies to all grammar implementations and affects custom database drivers.

```php
// Laravel <= 11.x
$grammar = new MySqlGrammar;
$grammar->setConnection($connection);

// Laravel >= 12.x
$grammar = new MySqlGrammar($connection);
```

--------------------------------

### Generate Laravel Dusk Component using Artisan Command

Source: https://laravel.com/docs/12.x/dusk

This Artisan command is used to scaffold a new Laravel Dusk component. It creates a PHP class file within the `tests/Browser/Components` directory, providing a starting point for defining reusable browser automation logic.

```shell
php artisan dusk:component DatePicker
```

--------------------------------

### Basic Singleton Resource: /profile

Source: https://laravel.com/docs/12.x/controllers

Registers routes for a single instance resource like a user's profile, allowing for viewing and updating without creation or deletion. Defined using `Route::singleton('profile', ProfileController::class)`.

```APIDOC
## Basic Singleton Resource: /profile

### Description
This section describes the routes generated for a basic singleton resource, such as a user profile. These routes allow for viewing and updating a single instance of a resource, without creation or deletion.

### Routes

## GET /profile
### Description
Display the specified singleton resource.
### Method
GET
### Endpoint
/profile
### Route Name
profile.show

## GET /profile/edit
### Description
Show the form for editing the specified singleton resource.
### Method
GET
### Endpoint
/profile/edit
### Route Name
profile.edit

## PUT/PATCH /profile
### Description
Update the specified singleton resource in storage.
### Method
PUT/PATCH
### Endpoint
/profile
### Route Name
profile.update
```

--------------------------------

### Query Subscriptions by Status Using Laravel Cashier Scopes

Source: https://laravel.com/docs/12.x/billing

This PHP code illustrates how to use various query scopes provided by Laravel Cashier to filter subscriptions based on their status. Examples include retrieving active, canceled, or other specific states of subscriptions from the database.

```php
// Get all active subscriptions...
$subscriptions = Subscription::query()->active()->get();

// Get all of the canceled subscriptions for a user...
$subscriptions = $user->subscriptions()->canceled()->get();
```

--------------------------------

### Generate URL with Array Query Parameters in Laravel

Source: https://laravel.com/docs/12.x/urls

This snippet shows how to pass arrays as query parameters using `url()->query()`. Laravel automatically keys and encodes these values, and the example demonstrates how to decode them for clarity.

```php
echo $url = url()->query('/posts', ['columns' => ['title', 'body']]);

// http://example.com/posts?columns%5B0%5D=title&columns%5B1%5D=body

echo urldecode($url);

// http://example.com/posts?columns[0]=title&columns[1]=body
```

--------------------------------

### Get Distinct Results with distinct() in Laravel

Source: https://laravel.com/docs/12.x/queries

The distinct() method forces the query builder to return only unique/distinct results from the database, eliminating duplicate rows from the result set.

```php
$users = DB::table('users')->distinct()->get();
```

--------------------------------

### Configure Selenium Service for Laravel Dusk

Source: https://laravel.com/docs/12.x/sail

Define a Selenium service in Docker Compose for browser automation testing with Laravel Dusk. This configuration sets up Chrome browser automation with shared memory volume and network connectivity.

```yaml
selenium:
    image: 'selenium/standalone-chrome'
    extra_hosts:
      - 'host.docker.internal:host-gateway'
    volumes:
        - '/dev/shm:/dev/shm'
    networks:
        - sail
```

--------------------------------

### Scout Paginate with Custom Page Size

Source: https://laravel.com/docs/12.x/scout

Specifies a custom number of models to retrieve per page by passing an integer argument to the paginate method. This example retrieves 15 models per page.

```php
$orders = Order::search('Star Trek')->paginate(15);
```

--------------------------------

### Define a Before Hook for Laravel Gate Checks

Source: https://laravel.com/docs/12.x/authorization

This example illustrates how to use `Gate::before()` to define a closure that executes before any other authorization checks. If this closure returns a non-null value, that value is used as the result of the authorization check, effectively short-circuiting further checks.

```php
use App\Models\User;
use Illuminate\Support\Facades\Gate;

Gate::before(function (User $user, string $ability) {
    if ($user->isAdministrator()) {
        return true;
    }
});
```

--------------------------------

### trait_uses_recursive() - Get All Traits Used by a Trait

Source: https://laravel.com/docs/12.x/helpers

The trait_uses_recursive function returns all traits used by a specified trait, including nested trait dependencies. It accepts a trait class name as a string parameter.

```php
$traits = trait_uses_recursive(\Illuminate\Notifications\Notifiable::class);
```

--------------------------------

### Apply Paginate class using Laravel's `pipe` method

Source: https://laravel.com/docs/12.x/queries

This example demonstrates how to use the `Paginate` class with the query builder's `pipe` method. The `pipe` method is used when the invokable object is expected to execute the query and return a different value (e.g., a paginator or a collection) instead of the query builder itself.

```php
$flights = DB::table('flights')
    ->tap(new DestinationFilter($destination))
    ->pipe(new Paginate);
```

--------------------------------

### Get Total Matching Items - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Determines the total number of matching items in the data store. Not available when using simplePaginate. Returns integer total count.

```php
$paginator->total()
```

--------------------------------

### Configure Laravel Echo with Ably for JavaScript, React, and Vue

Source: https://laravel.com/docs/12.x/broadcasting

Initializes a new Laravel Echo instance to connect to Ably for real-time event broadcasting. This configuration sets the broadcaster to 'pusher' (for Ably's Pusher protocol compatibility) and specifies connection details like `wsHost` and `wsPort`. It demonstrates configurations for plain JavaScript, React, and Vue applications.

```javascript
import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_ABLY_PUBLIC_KEY,
    wsHost: 'realtime-pusher.ably.io',
    wsPort: 443,
    disableStats: true,
    encrypted: true,
});
```

```javascript
import { configureEcho } from "@laravel/echo-react";

configureEcho({
    broadcaster: "ably",
    // key: import.meta.env.VITE_ABLY_PUBLIC_KEY,
    // wsHost: "realtime-pusher.ably.io",
    // wsPort: 443,
    // disableStats: true,
    // encrypted: true,
});
```

```javascript
import { configureEcho } from "@laravel/echo-vue";

configureEcho({
    broadcaster: "ably",
    // key: import.meta.env.VITE_ABLY_PUBLIC_KEY,
    // wsHost: "realtime-pusher.ably.io",
    // wsPort: 443,
    // disableStats: true,
    // encrypted: true,
});
```

--------------------------------

### Fake Specific Laravel Processes with Simple String Output

Source: https://laravel.com/docs/12.x/processes

This PHP code provides a simplified way to fake specific process commands by directly mapping command patterns to string outputs within the `Process::fake()` array. This is useful when only the standard output needs to be customized, without needing to specify exit codes or error output, streamlining test setup for simple cases.

```php
Process::fake([
    'cat *' => 'Test "cat" output',
    'ls *' => 'Test "ls" output',
]);
```

--------------------------------

### Fake and Assert Notifications with Pest and PHPUnit

Source: https://laravel.com/docs/12.x/notifications

Demonstrates how to use the Notification facade's fake method to prevent notifications from being sent during testing, then assert various notification behaviors such as notifications being sent to specific users, not sent, sent multiple times, or a specific count. Includes examples for both Pest and PHPUnit testing frameworks.

```php
<?php

use App\Notifications\OrderShipped;
use Illuminate\Support\Facades\Notification;

test('orders can be shipped', function () {
    Notification::fake();

    // Perform order shipping...

    // Assert that no notifications were sent...
    Notification::assertNothingSent();

    // Assert a notification was sent to the given users...
    Notification::assertSentTo(
        [$user], OrderShipped::class
    );

    // Assert a notification was not sent...
    Notification::assertNotSentTo(
        [$user], AnotherNotification::class
    );

    // Assert a notification was sent twice...
    Notification::assertSentTimes(WeeklyReminder::class, 2);

    // Assert that a given number of notifications were sent...
    Notification::assertCount(3);
});
```

```php
<?php

namespace Tests\Feature;

use App\Notifications\OrderShipped;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_orders_can_be_shipped(): void
    {
        Notification::fake();

        // Perform order shipping...

        // Assert that no notifications were sent...
        Notification::assertNothingSent();

        // Assert a notification was sent to the given users...
        Notification::assertSentTo(
            [$user], OrderShipped::class
        );

        // Assert a notification was not sent...
        Notification::assertNotSentTo(
            [$user], AnotherNotification::class
        );

        // Assert a notification was sent twice...
        Notification::assertSentTimes(WeeklyReminder::class, 2);

        // Assert that a given number of notifications were sent...
        Notification::assertCount(3);
    }
}
```

--------------------------------

### GET /oauth/authorize (Authorization Code Request)

Source: https://laravel.com/docs/12.x/passport

This endpoint is used by client applications to initiate the OAuth 2.0 Authorization Code grant flow. The client redirects the user's browser to this URL with specified parameters to request an authorization code.

```APIDOC
## GET /oauth/authorize

### Description
This endpoint is used by client applications to initiate the OAuth 2.0 Authorization Code grant flow. The client redirects the user's browser to this URL with specified parameters to request an authorization code.

### Method
GET

### Endpoint
/oauth/authorize

### Parameters
#### Query Parameters
- **client_id** (string) - Required - The client ID of the application requesting authorization.
- **redirect_uri** (string) - Required - The URI
```

--------------------------------

### Define a basic Envoy task with server configuration (Blade)

Source: https://laravel.com/docs/12.x/envoy

Demonstrates how to define servers and a simple task in `Envoy.blade.php`. It shows how to specify target servers for a task and execute shell commands like `cd` and `php artisan queue:restart`.

```blade
@servers(['web' => ['user@192.168.1.1'], 'workers' => ['user@192.168.1.2']])

@task('restart-queues', ['on' => 'workers'])
    cd /home/user/example.com
    php artisan queue:restart
@endtask
```

--------------------------------

### Get Last Page Number - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Retrieves the page number of the last available page. Not available when using simplePaginate method. Returns integer page number.

```php
$paginator->lastPage()
```

--------------------------------

### Get Last Item Result Number - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Returns the result number of the last item in the current page results. Complements firstItem() for displaying result ranges.

```php
$paginator->lastItem()
```

--------------------------------

### Chaining Map/Reduce Operations on Eloquent Collections in PHP

Source: https://laravel.com/docs/12.x/eloquent-collections

This example illustrates the power of chaining collection methods to perform complex data transformations. It first uses `reject` to filter out inactive users and then `map` to extract the name of each remaining user, showcasing a fluent interface for data manipulation.

```php
$names = User::all()->reject(function (User $user) {
    return $user->active === false;
})->map(function (User $user) {
    return $user->name;
});
```

--------------------------------

### Querying Relationship Existence with `whereRelation` in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent-relationships

Demonstrates how to query for the existence of a relationship with a simple `where` condition using the `whereRelation` method. This example retrieves posts that have unapproved comments.

```php
use App\Models\Post;

$posts = Post::whereRelation('comments', 'is_approved', false)->get();
```

--------------------------------

### Create Basic Guest Checkout Session in Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

Initiates a basic guest checkout session using the Checkout::guest method. Requires a price ID and success/cancel route URLs. Returns a checkout session that can be used to redirect users to the Stripe payment page.

```php
use Illuminate\Http\Request;
use Laravel\Cashier\Checkout;

Route::get('/product-checkout', function (Request $request) {
    return Checkout::guest()->create('price_tshirt', [
        'success_url' => route('your-success-route'),
        'cancel_url' => route('your-cancel-route'),
    ]);
});
```

--------------------------------

### Define Laravel Command Signature with Boolean Option

Source: https://laravel.com/docs/12.x/artisan

Options are defined in the `signature` property, prefixed by two hyphens (`--`). This example demonstrates a boolean option, `--queue`, which acts as a switch. If present when the command is called, its value will be `true`; otherwise, `false`.

```php
/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = 'mail:send {user} {--queue}';
```

--------------------------------

### Implement Basic Sleep with Laravel's Sleep Class

Source: https://laravel.com/docs/12.x/helpers

Laravel's `Sleep` class provides a testable and developer-friendly wrapper around PHP's native sleep functions. This example demonstrates pausing execution for a specified duration within a loop using `Sleep::for()->second()`.

```php
use Illuminate
\Support\Sleep;

$waiting = true;

while ($waiting) {
    Sleep::for(1)->second();

    $waiting = /* ... */;
}
```

--------------------------------

### Delete Job on Specific Exception with deleteWhen Method

Source: https://laravel.com/docs/12.x/queues

Demonstrates how to use the deleteWhen method to permanently delete a job when a specific exception occurs. Unlike the when method which releases the job back onto the queue, deleteWhen removes the job entirely. In this example, the job is deleted if a CustomerDeletedException is thrown.

```php
use App\Exceptions\CustomerDeletedException;
use Illuminate\Queue\Middleware\ThrottlesExceptions;

/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new ThrottlesExceptions(2, 10 * 60))->deleteWhen(CustomerDeletedException::class)];
}
```

--------------------------------

### Assert Laravel AI Audio Prompts in PHP

Source: https://laravel.com/docs/12.x/ai-sdk

This snippet illustrates how to assert that specific prompts were received by a faked Laravel AI Audio generator. It includes examples for asserting specific prompt content using a closure for complex conditional checks on the AudioPrompt object, and asserting that certain prompts were not generated or that nothing was generated at all.

```php
Audio::assertGenerated(function (AudioPrompt $prompt) {
    return $prompt->contains('Hello') && $prompt->isFemale();
});

Audio::assertNotGenerated('Missing prompt');

Audio::assertNothingGenerated();
```

--------------------------------

### Implement Stale-While-Revalidate with Laravel's flexible Cache Method

Source: https://laravel.com/docs/12.x/cache

This example demonstrates `Cache::flexible`, a method for implementing the stale-while-revalidate pattern. It allows serving partially stale data while a fresh value is recalculated in the background, improving user experience. The method accepts an array defining 'fresh' and 'stale' periods in seconds, controlling when data is served immediately, served stale with background revalidation, or revalidated immediately.

```php
$value = Cache::flexible('users', [5, 10], function () {
    return DB::table('users')->get();
});
```

--------------------------------

### Configure a Log Stack with Syslog and Slack Channels in Laravel PHP

Source: https://laravel.com/docs/12.x/logging

This configuration snippet illustrates how to create a `stack` log driver in `config/logging.php` that aggregates messages to multiple underlying channels, such as `syslog` and `slack`. It includes the full definition for the `stack` channel, as well as the individual `syslog` and `slack` channel configurations, demonstrating how messages can be routed to both.

```php
'channels' => [
    'stack' => [
        'driver' => 'stack',
        'channels' => ['syslog', 'slack'],
        'ignore_exceptions' => false,
    ],

    'syslog' => [
        'driver' => 'syslog',
        'level' => env('LOG_LEVEL', 'debug'),
        'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
        'replace_placeholders' => true,
    ],

    'slack' => [
        'driver' => 'slack',
        'url' => env('LOG_SLACK_WEBHOOK_URL'),
        'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
        'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
        'level' => env('LOG_LEVEL', 'critical'),
        'replace_placeholders' => true,
    ],
]
```

--------------------------------

### Pass Eloquent Model to Channel Constructor in Laravel (PHP)

Source: https://laravel.com/docs/12.x/broadcasting

This PHP example shows how to pass an Eloquent model instance directly to a `Channel` constructor. Laravel will then automatically convert the model into a channel name string based on its internal model broadcasting conventions (e.g., `App.Models.User.1`).

```php
return [new Channel($this->user)];
```

--------------------------------

### Attach Reference Images for AI Image Generation in Laravel

Source: https://laravel.com/docs/12.x/ai-sdk

Shows how to provide reference images to the AI model using the `attachments()` method. It supports various sources for attachments, including files from storage, local paths, URLs, or uploaded files, to guide the image generation process.

```php
use Laravel\Ai\Files;
use Laravel\Ai\Image;

$image = Image::of('Update this photo of me to be in the style of an impressionist painting.')
    ->attachments([
        Files\Image::fromStorage('photo.jpg'),
        // Files\Image::fromPath('/home/laravel/photo.jpg'),
        // Files\Image::fromUrl('https://example.com/photo.jpg'),
        // $request->file('photo'),
    ])
    ->landscape()
    ->generate();
```

--------------------------------

### Reload Long-Running Services with Artisan

Source: https://laravel.com/docs/12.x/deployment

Terminates long-running services such as queue workers, Laravel Reverb, and Laravel Octane to use new application code after deployment. Not required when deploying to Laravel Cloud.

```shell
php artisan reload
```

--------------------------------

### Configure Paddle Sandbox Environment Variable

Source: https://laravel.com/docs/12.x/cashier-paddle

To enable Paddle's sandbox environment for local and staging development, set the PADDLE_SANDBOX environment variable to 'true' in your application's .env file. This allows testing payment flows without processing actual transactions.

```ini
PADDLE_SANDBOX=true
```

--------------------------------

### Create Pagination URL Range - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Generates a range of pagination URLs between specified start and end page numbers. Useful for creating custom pagination link displays.

```php
$paginator->getUrlRange($start, $end)
```

--------------------------------

### Get All Items as Array - PHP Laravel Collection

Source: https://laravel.com/docs/12.x/collections

The all() method returns the underlying array represented by the collection. This is useful when you need to access the raw array data from a collection instance.

```php
collect([1, 2, 3])->all();
// [1, 2, 3]
```

--------------------------------

### Get String Length with Str::length() in PHP

Source: https://laravel.com/docs/12.x/strings

Returns the length of the given string as an integer. Provides a convenient wrapper for string length calculation.

```php
use Illuminate\Support\Str;

$length = Str::length('Laravel');
// 7
```

--------------------------------

### Redirect to Stripe Billing Portal with custom return URL in Laravel

Source: https://laravel.com/docs/12.x/billing

This example illustrates how to specify a custom return URL for the Stripe Billing Portal. By passing a URL as an argument to `redirectToBillingPortal()`, users will be redirected to your chosen application route after managing their billing information.

```php
use Illuminate\Http\Request;

Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal(route('billing'));
});
```

--------------------------------

### Paginated Resource Collection JSON Response with Meta and Links

Source: https://laravel.com/docs/12.x/eloquent-resources

Example of a paginated resource collection response structure that includes data, links (with first, last, prev, next URLs), and meta (with pagination state information like current_page, total, per_page).

```json
{
    "data": [
        {
            "id": 1,
            "name": "Eladio Schroeder Sr.",
            "email": "therese28@example.com"
        },
        {
            "id": 2,
            "name": "Liliana Mayert",
            "email": "evandervort@example.com"
        }
    ],
    "links": {
        "first": "http://example.com/users?page=1",
        "last": "http://example.com/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http://example.com/users",
        "per_page": 15,
        "to": 10,
        "total": 10
    }
}
```

--------------------------------

### Get Traits with class_uses_recursive() Helper

Source: https://laravel.com/docs/12.x/helpers

The class_uses_recursive() function returns all traits used by a class, including traits used by all of its parent classes. This provides a comprehensive view of trait usage across the inheritance hierarchy.

```php
$traits = class_uses_recursive(App\Models\User::class);
```

--------------------------------

### Get Previous Page URL - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Generates the URL for the previous page in the pagination sequence. Returns null if on the first page, otherwise returns the previous page URL.

```php
$paginator->previousPageUrl()
```

--------------------------------

### Generate a new Laravel Service Provider using Artisan CLI

Source: https://laravel.com/docs/12.x/providers

This command utilizes Laravel's Artisan CLI to create a new service provider file. The generated provider will automatically be registered in the application's `bootstrap/providers.php` file, providing a structured starting point for defining and configuring application services.

```shell
php artisan make:provider RiakServiceProvider
```

--------------------------------

### Get Next Page URL - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Generates the URL for the next page in the pagination sequence. Returns null if on the last page, otherwise returns the next page URL.

```php
$paginator->nextPageUrl()
```

--------------------------------

### Get Current Page Item Count - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Returns the number of items displayed on the current page. Useful for determining how many results are shown in the current pagination view.

```php
$paginator->count()
```

--------------------------------

### Filter File Search Results by Complex Metadata with Closure (Laravel AI)

Source: https://laravel.com/docs/12.x/ai-sdk

For more advanced filtering of `FileSearch` results, this example shows how to use a closure with a `FileSearchQuery` instance. This allows for complex conditions like `where`, `whereNot`, and `whereIn`, providing granular control over which files are considered in the search.

```php
use Laravel\Ai\Providers\Tools\FileSearchQuery;

new FileSearch(stores: ['store_id'], where: fn (FileSearchQuery $query) =>
    $query->where('author', 'Taylor Otwell')
        ->whereNot('status', 'draft')
        ->whereIn('category', ['news', 'updates'])
);
```

--------------------------------

### Create On-Demand Disks at Runtime in Laravel

Source: https://laravel.com/docs/12.x/filesystem

Create a disk configuration at runtime without defining it in the filesystems configuration file by passing a configuration array to the Storage facade's build method. This allows dynamic disk creation with custom driver and root path settings.

```php
use Illuminate\Support\Facades\Storage;

$disk = Storage::build([
    'driver' => 'local',
    'root' => '/path/to/root',
]);

$disk->put('image.jpg', $content);
```

--------------------------------

### Retrieve all attributes except specified ones (Blade)

Source: https://laravel.com/docs/12.x/blade

Explains how to use the `except` method to get all attributes from the bag, excluding those with the given keys. This is useful for removing internal or unwanted attributes.

```blade
{{ $attributes->except(['class']) }}
```

--------------------------------

### Automate syncing customer data to Stripe on model update in Laravel

Source: https://laravel.com/docs/12.x/billing

This example shows how to automatically synchronize customer details with Stripe whenever the billable model is updated. By defining an event listener on the model's `updated` event, the `syncStripeCustomerDetails()` method ensures data consistency between your application and Stripe.

```php
use App\Models\User;
use function Illuminate\Events\queueable;

/**
 * The "booted" method of the model.
 */
protected static function booted(): void
{
    static::updated(queueable(function (User $customer) {
        if ($customer->hasStripeId()) {
            $customer->syncStripeCustomerDetails();
        }
    }));
}
```

--------------------------------

### Get File Path using Laravel Storage (PHP)

Source: https://laravel.com/docs/12.x/filesystem

The `path` method retrieves the file path. For the `local` driver, it returns the absolute path to the file, while for the `s3` driver, it provides the relative path within the S3 bucket.

```php
use Illuminate\Support\Facades\Storage;

$path = Storage::path('file.jpg');
```

--------------------------------

### Generate URL with Query String Parameters in Laravel

Source: https://laravel.com/docs/12.x/urls

This snippet illustrates how to add query string parameters to a URL using the `url()->query()` method. It shows examples of adding new parameters and appending to existing ones.

```php
echo url()->query('/posts', ['search' => 'Laravel']);

// https://example.com/posts?search=Laravel
```

```php
echo url()->query('/posts?sort=latest', ['search' => 'Laravel']);

// http://example.com/posts?sort=latest&search=Laravel
```

--------------------------------

### Querying Relationship Absence with `doesntHave` in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent-relationships

Shows how to retrieve models that do not have any related records for a specified relationship using the `doesntHave` method. This example fetches posts without any comments.

```php
use App\Models\Post;

$posts = Post::doesntHave('comments')->get();
```

--------------------------------

### Get Collection Keys with keys() Method

Source: https://laravel.com/docs/12.x/collections

The keys() method returns all keys from a collection as a new collection. Useful for extracting identifiers or keys from associative arrays. Returns a collection containing only the keys in the same order as the original collection.

```php
$collection = collect([
    'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
    'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
]);

$keys = $collection->keys();

$keys->all();

// ['prod-100', 'prod-200']
```

--------------------------------

### Subquery Where Clause - Compare Column to Subquery Results

Source: https://laravel.com/docs/12.x/queries

Constructs a where clause that compares a column value to subquery results using an operator and closure. This example retrieves all income records where the amount is less than the average amount across all records.

```php
use App\Models\Income;
use Illuminate\Database\Query\Builder;

$incomes = Income::where('amount', '<', function (Builder $query) {
    $query->selectRaw('avg(i.amount)')->from('incomes as i');
})->get();
```

--------------------------------

### Display Laravel Fortify 2FA Confirmed Session Status Message (Blade)

Source: https://laravel.com/docs/12.x/fortify

This Blade snippet illustrates how to display a confirmation message once two-factor authentication has been successfully enabled and confirmed by the user. It checks for the `two-factor-authentication-confirmed` status in the session, providing feedback that the 2FA setup is complete.

```html
@if (session('status') == 'two-factor-authentication-confirmed')
    <div class="mb-4 font-medium text-sm">
        Two-factor authentication confirmed and enabled successfully.
    </div>
@endif
```

--------------------------------

### Create or Get Stripe Customer - Laravel Cashier

Source: https://laravel.com/docs/12.x/billing

Uses the `createOrGetStripeCustomer` method to retrieve a Stripe customer object, automatically creating a new customer in Stripe if one does not already exist for the billable model. Useful for ensuring a customer exists without manual existence checks.

```php
$stripeCustomer = $user->createOrGetStripeCustomer();
```

--------------------------------

### Display Old Input in Blade Templates using Laravel's old helper

Source: https://laravel.com/docs/12.x/requests

This example shows how to use the global `old` helper within a Blade template to conveniently repopulate form fields with old input. If no old input exists for the given field, `null` will be returned, preventing errors.

```blade
<input type="text" name="username" value="{{ old('username') }}">
```

--------------------------------

### Hash Password Using Hash Facade in Laravel

Source: https://laravel.com/docs/12.x/hashing

Demonstrates how to hash a password using the Hash facade's make method within a controller. The example shows updating a user's password by hashing the new password value before saving to the database.

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Update the password for the user.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate the new password length...

        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();

        return redirect('/profile');
    }
}
```

--------------------------------

### Register Laravel View Composers in a Service Provider

Source: https://laravel.com/docs/12.x/views

This example demonstrates how to register both class-based and closure-based view composers within a Laravel service provider's `boot` method. View composers are callbacks executed when a specific view is rendered, allowing data to be bound consistently.

```php
<?php

namespace App\Providers;

use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Using class-based composers...
        Facades\View::composer('profile', ProfileComposer::class);

        // Using closure-based composers...
        Facades\View::composer('welcome', function (View $view) {
            // ...
        });

        Facades\View::composer('dashboard', function (View $view) {
            // ...
        });
    }
}
```

--------------------------------

### Payment Method Form HTML with Stripe Elements

Source: https://laravel.com/docs/12.x/billing

HTML form structure for collecting payment method details. Includes input field for cardholder name, Stripe Elements placeholder for secure card input, and button with data attribute containing the Setup Intent client secret for verification.

```html
<input id="card-holder-name" type="text">

<!-- Stripe Elements Placeholder -->
<div id="card-element"></div>

<button id="card-button" data-secret="{{ $intent->client_secret }}">
    Update Payment Method
</button>
```

--------------------------------

### Limit and Offset Query Results in Laravel

Source: https://laravel.com/docs/12.x/queries

The `limit` and `offset` methods are used to control the number of results returned and to skip a certain number of initial results. This example skips the first 10 users and then retrieves the next 5 users from the database.

```php
$users = DB::table('users')
    ->offset(10)
    ->limit(5)
    ->get();
```

--------------------------------

### Attach a File to an Input Element with Laravel Dusk (PHP)

Source: https://laravel.com/docs/12.x/dusk

The `attach` method allows you to upload a file to a `file` input element. It can locate the input either by a CSS selector or by its `name` attribute. This functionality requires the `Zip` PHP extension to be installed.

```php
$browser->attach('photo', __DIR__.'/photos/mountains.png');
```

--------------------------------

### Group by Multiple Columns with `groupBy` in Laravel

Source: https://laravel.com/docs/12.x/queries

The `groupBy` method can accept multiple arguments to group results by several columns simultaneously. This example groups users by both `first_name` and `status`, then applies a `having` condition to the aggregated groups.

```php
$users = DB::table('users')
    ->groupBy('first_name', 'status')
    ->having('account_id', '>', 100)
    ->get();
```

--------------------------------

### Subquery Where Clause - Compare Subquery Results to Value

Source: https://laravel.com/docs/12.x/queries

Constructs a where clause that compares subquery results to a given value using a closure. This example retrieves all users with a recent membership of a specific type. The closure receives a Builder instance for constructing the subquery.

```php
use App\Models\User;
use Illuminate\Database\Query\Builder;

$users = User::where(function (Builder $query) {
    $query->select('type')
        ->from('membership')
        ->whereColumn('membership.user_id', 'users.id')
        ->orderByDesc('membership.start_date')
        ->limit(1);
}, 'Pro')->get();
```

--------------------------------

### Retrieve Items From Cache with Default Values

Source: https://laravel.com/docs/12.x/cache

Retrieve cached items using the get method with optional default values. Supports passing a closure as default value to defer retrieval from database or external services until needed.

```php
$value = Cache::get('key');

$value = Cache::get('key', 'default');

$value = Cache::get('key', function () {
    return DB::table(/* ... */)->get();
});
```

--------------------------------

### Create Device Authorization Grant Client

Source: https://laravel.com/docs/12.x/passport

Create a device flow enabled OAuth2 client using either the Artisan command or the ClientRepository class. Supports both first-party and third-party client creation.

```APIDOC
## Device Authorization Grant Client Creation

### Description
Create a device flow enabled OAuth2 client for your application. Supports both first-party clients via Artisan command and third-party clients via ClientRepository.

### Method 1: Artisan Command

#### Command
```shell
php artisan passport:client --device
```

#### Output
Provides client ID and secret for device flow enabled first-party client

### Method 2: ClientRepository Class

#### Method
ClientRepository::createDeviceAuthorizationGrantClient()

#### Parameters
- **user** (User) - Required - The user who owns the client
- **name** (string) - Required - Human-readable client name
- **confidential** (boolean) - Required - Whether client is confidential (true) or public (false)

#### Example
```php
use App\Models\User;
use Laravel\Passport\ClientRepository;

$user = User::find($userId);

$client = app(ClientRepository::class)->createDeviceAuthorizationGrantClient(
    user: $user,
    name: 'Example Device',
    confidential: false,
);
```

#### Response
Returns client object containing:
- **id** (string) - Client ID for device code requests
- **secret** (string) - Client secret (if confidential)
- **name** (string) - Client name
- **user_id** (integer) - Owner user ID

### Use Cases
- **First-party**: Native device applications
- **Third-party**: Third-party device applications with user ownership
```

--------------------------------

### Add Passport Traits and Interfaces to Laravel User Model

Source: https://laravel.com/docs/12.x/passport

After installation, integrate the `Laravel\Passport\HasApiTokens` trait and `Laravel\Passport\Contracts\OAuthenticatable` interface into your `App\Models\User` model. This provides helper methods for inspecting the authenticated user's token and scopes.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\Contracts\OAuthenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements OAuthenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}
```

--------------------------------

### Persist multiple Laravel Eloquent models to the database (PHP)

Source: https://laravel.com/docs/12.x/eloquent-factories

This example shows how to create a collection of multiple model instances (e.g., 3 `User` models) and persist them to the database. The `count()` method specifies the number of models, and `create()` saves them all efficiently, useful for populating test data or initial application states.

```php
$users = User::factory()->count(3)->create();
```

--------------------------------

### Return Multiple Blade Fragments with `fragments` and `fragmentsIf`

Source: https://laravel.com/docs/12.x/blade

These PHP examples illustrate how to return multiple Blade fragments, which will be concatenated in the response. The `fragments` method returns a list of fragments unconditionally, while `fragmentsIf` allows for conditional rendering of multiple fragments based on a given condition.

```php
view('dashboard', ['users' => $users])
    ->fragments(['user-list', 'comment-list']);

view('dashboard', ['users' => $users])
    ->fragmentsIf(
        $request->hasHeader('HX-Request'),
        ['user-list', 'comment-list']
    );
```

--------------------------------

### Retrieve All Arguments as Array in Laravel Console Command

Source: https://laravel.com/docs/12.x/artisan

Demonstrates how to retrieve all arguments passed to a console command as an array using the arguments method.

```php
$arguments = $this->arguments();
```

--------------------------------

### Remove a price from an existing subscription in Laravel

Source: https://laravel.com/docs/12.x/cashier-paddle

This example shows how to remove a specific product price from an existing subscription. By calling the `swap` method and simply omitting the price you wish to remove from the array, the subscription will be updated to no longer include that particular product.

```php
$user->subscription()->swap(['price_original' => 2]);
```

--------------------------------

### Create Custom Contextual Attribute

Source: https://laravel.com/docs/12.x/container

Implements a custom contextual attribute by extending the ContextualAttribute contract. The resolve method is called by the container to resolve the injected value. This example re-implements Laravel's built-in Config attribute.

```php
<?php

namespace App\Attributes;

use Attribute;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Container\ContextualAttribute;

#[Attribute(Attribute::TARGET_PARAMETER)]
class Config implements ContextualAttribute
{
    /**
     * Create a new attribute instance.
     */
    public function __construct(public string $key, public mixed $default = null)
    {
    }

    /**
     * Resolve the configuration value.
     *
     * @param  self  $attribute
     * @param  \Illuminate\Contracts\Container\Container  $container
     * @return mixed
     */
    public static function resolve(self $attribute, Container $container)
    {
        return $container->make('config')->get($attribute->key, $attribute->default);
    }
}
```

--------------------------------

### Retrieve All Error Messages for a Field

Source: https://laravel.com/docs/12.x/validation

Returns an array of all error messages for a specific field using the get() method. Supports wildcard character (*) for array form fields to retrieve messages for all array elements.

```php
foreach ($errors->get('email') as $message) {
    // ...
}

foreach ($errors->get('attachments.*') as $message) {
    // ...
}
```

--------------------------------

### Return Batch from Route using Bus Facade

Source: https://laravel.com/docs/12.x/queues

Retrieve a batch instance by its ID using the Bus facade's findBatch method and return it directly from a route. The Batch instance is JSON serializable, allowing convenient display of batch completion progress in the application UI.

```php
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;

Route::get('/batch/{batchId}', function (string $batchId) {
    return Bus::findBatch($batchId);
});
```

--------------------------------

### Retrieve First Error Message for a Field

Source: https://laravel.com/docs/12.x/validation

Gets the first error message for a specific field using the first() method on the MessageBag instance. Returns a single error string for the given field name.

```php
$errors = $validator->errors();

echo $errors->first('email');
```

--------------------------------

### Build On-Demand Channel with Runtime Configuration

Source: https://laravel.com/docs/12.x/logging

Create a logging channel dynamically at runtime by passing a configuration array to the Log facade's build method, without requiring the channel to be defined in the logging configuration file. Supports custom drivers and paths for temporary or dynamic logging needs.

```php
use Illuminate\Support\Facades\Log;

Log::build([
  'driver' => 'single',
  'path' => storage_path('logs/custom.log'),
])->info('Something happened!');
```

--------------------------------

### Specify Broadcast Connection in Event Constructor with 'broadcastVia' in Laravel PHP

Source: https://laravel.com/docs/12.x/broadcasting

This example shows how to set the broadcast connection directly within an event's constructor using the `broadcastVia` method. The event class must utilize the `InteractsWithBroadcasting` trait for this functionality to work correctly.

```php
<?php

namespace AppEvents;

use IlluminateBroadcastingChannel;
use IlluminateBroadcastingInteractsWithBroadcasting;
use IlluminateBroadcastingInteractsWithSockets;
use IlluminateBroadcastingPresenceChannel;
use IlluminateBroadcastingPrivateChannel;
use IlluminateContractsBroadcastingShouldBroadcast;
use IlluminateQueueSerializesModels;

class OrderShipmentStatusUpdated implements ShouldBroadcast
{
    use InteractsWithBroadcasting;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        $this->broadcastVia('pusher');
    }
}
```

--------------------------------

### Get the last element of an array in PHP

Source: https://laravel.com/docs/12.x/helpers

The `last` function retrieves the last element from a given array. Similar to `head`, it will return `false` if the array provided is empty. This is useful for accessing the final item in a sequence.

```php
$array = [100, 200, 300];

$last = last($array);

// 300
```

--------------------------------

### Add Placeholder Text to Argument Prompts in Laravel Console

Source: https://laravel.com/docs/12.x/artisan

Demonstrates how to provide placeholder text alongside prompt questions using a tuple format containing both the question and placeholder text for better user guidance.

```php
return [
    'user' => ['Which user ID should receive the mail?', 'E.g. 123'],
];
```

--------------------------------

### Store File Using Local Driver in Laravel

Source: https://laravel.com/docs/12.x/filesystem

Stores a file to the local disk using the Storage facade. The file is written to the root directory defined in the filesystems configuration, defaulting to storage/app/private. This example demonstrates basic file storage with the local driver.

```php
use Illuminate\Support\Facades\Storage;

Storage::disk('local')->put('example.txt', 'Contents');
```

--------------------------------

### Querying Morph To Relationship Absence with `whereDoesntHaveMorph` in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent-relationships

Demonstrates querying for the absence of 'morph to' relationships using `whereDoesntHaveMorph`. This example retrieves comments not associated with posts that have a title like 'code%'.

```php
use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Builder;

// Retrieve comments associated to posts with a title not like code%...
$comments = Comment::whereDoesntHaveMorph(
    'commentable',
    Post::class,
    function (Builder $query) {
        $query->where('title', 'like', 'code%');
    }
)->get();
```

--------------------------------

### Proxy PHP CLI Commands for Isolated Valet Sites

Source: https://laravel.com/docs/12.x/valet

Valet provides proxy commands (`valet php`, `valet composer`, `valet which-php`) that automatically direct calls to the appropriate PHP CLI or tool based on the site's configured PHP version. This simplifies managing different PHP environments.

```shell
valet php
valet composer
valet which-php
```

--------------------------------

### Prevent Retrying Rate-Limited Laravel Jobs in PHP

Source: https://laravel.com/docs/12.x/queues

This PHP example demonstrates using the `dontRelease` method with the `RateLimited` middleware. When `dontRelease` is called, a job that is rate-limited will not be released back to the queue for retries. This effectively causes the job to fail if the limit is hit.

```php
/**
 * Get the middleware the job should pass through.
 *
 * @return array<int, object>
 */
public function middleware(): array
{
    return [(new RateLimited('backups'))->dontRelease()];
}
```

--------------------------------

### Customize required validation message for `password` prompt

Source: https://laravel.com/docs/12.x/prompts

This example illustrates how to provide a custom error message for a `password` prompt when the `required` validation fails. By passing a string to the `required` argument, developers can offer more specific guidance to the user.

```php
$password = password(
    label: 'What is your password?',
    required: 'The password is required.'
);
```

--------------------------------

### Retrieve Single Column Values with Custom Keys using Laravel DB pluck method

Source: https://laravel.com/docs/12.x/queries

This example shows how to use the `pluck` method to retrieve a collection of column values, while also specifying another column to be used as the keys for the resulting collection. This allows for more structured data access.

```php
$titles = DB::table('users')->pluck('title', 'name');

foreach ($titles as $name => $title) {
    echo $title;
}
```

--------------------------------

### Querying Nested Relationship Absence with `whereDoesntHave` in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent-relationships

Explains how to query for the absence of a nested relationship using 'dot' notation with `whereDoesntHave`. This example retrieves posts where comments do not have banned authors.

```php
use Illuminate\Database\Eloquent\Builder;

$posts = Post::whereDoesntHave('comments.author', function (Builder $query) {
    $query->where('banned', 1);
})->get();
```

--------------------------------

### Default Resource Collection JSON Response Structure

Source: https://laravel.com/docs/12.x/eloquent-resources

Example of the default JSON response structure for a resource collection, where resources are wrapped in a data key containing an array of resource objects with id, name, and email properties.

```json
{
    "data": [
        {
            "id": 1,
            "name": "Eladio Schroeder Sr.",
            "email": "therese28@example.com"
        },
        {
            "id": 2,
            "name": "Liliana Mayert",
            "email": "evandervort@example.com"
        }
    ]
}
```

--------------------------------

### Configure Laravel Route for Precognition with Middleware

Source: https://laravel.com/docs/12.x/precognition

This PHP snippet demonstrates how to define a Laravel route that utilizes a form request for validation and enables Laravel Precognition by attaching the `HandlePrecognitiveRequests` middleware. This setup allows the backend to handle precognitive validation requests.

```php
use App\Http\Requests\CreateUserRequest;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;

Route::post('/users', function (CreateUserRequest $request) {
    // ...
})->middleware([HandlePrecognitiveRequests::class]);
```

--------------------------------

### Implement Laravel Policy `before` Method for Global Authorization Checks

Source: https://laravel.com/docs/12.x/authorization

This example shows how to define a `before` method within a policy to perform pre-authorization checks before any other policy methods are called. This is useful for granting global access to certain users, like administrators, by returning `true` early. Returning `null` allows the check to proceed to the specific policy method.

```php
use App\Models\User;

/**
 * Perform pre-authorization checks.
 */
public function before(User $user, string $ability): bool|null
{
    if ($user->isAdministrator()) {
        return true;
    }

    return null;
}
```

--------------------------------

### Text Prompt - Basic Usage

Source: https://laravel.com/docs/12.x/prompts

Create a basic text input prompt that accepts user input and returns the entered value. The text function prompts the user with a question and returns their response.

```php
use function Laravel\Prompts\text;

$name = text('What is your name?');
```

--------------------------------

### Stop Further Chunk Processing in Laravel DB chunk method

Source: https://laravel.com/docs/12.x/queries

This example demonstrates how to stop the `chunk` method from processing further chunks by returning `false` from within the closure. This is useful for conditional termination of large data processing tasks.

```php
DB::table('users')->orderBy('id')->chunk(100, function (Collection $users) {
    // Process the records...

    return false;
});
```

--------------------------------

### Build Sail Images with RoadRunner

Source: https://laravel.com/docs/12.x/octane

Commands to make the RoadRunner binary executable and rebuild Sail Docker images. Ensures proper permissions on the rr binary and rebuilds images without using cache to apply configuration changes.

```shell
chmod +x ./rr

./vendor/bin/sail build --no-cache
```

--------------------------------

### Store Page Source to Disk in Dusk

Source: https://laravel.com/docs/12.x/dusk

Write the current page's HTML source code to disk using the `storeSource` method. Page source files are stored in `tests/Browser/source` directory with the specified filename.

```php
$browser->storeSource('filename');
```

--------------------------------

### Create and Register MCP Prompt in Laravel Server

Source: https://laravel.com/docs/12.x/mcp

Register a prompt class in the MCP server's $prompts property after creating it with the make:mcp-prompt Artisan command. The example shows registering DescribeWeatherPrompt in the WeatherServer class. Prompts provide standardized prompt templates that AI clients can use to interact with language models.

```php
<?php

namespace App\Mcp\Servers;

use App\Mcp\Prompts\DescribeWeatherPrompt;
use Laravel\Mcp\Server;

class WeatherServer extends Server
{
    /**
     * The prompts registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>
     */
    protected array $prompts = [
        DescribeWeatherPrompt::class,
    ];
}
```

--------------------------------

### Configure Supervisor for Laravel Queue Workers

Source: https://laravel.com/docs/12.x/queues

Creates a Supervisor configuration file to monitor and manage multiple queue:work processes. The configuration specifies the command to run, number of processes, restart behavior, logging, and timeout settings. The numprocs directive controls how many concurrent queue:work processes run, and stopwaitsecs should exceed the longest job duration.

```ini
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /home/forge/app.com/artisan queue:work sqs --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=forge
numprocs=8
redirect_stderr=true
stdout_logfile=/home/forge/app.com/worker.log
stopwaitsecs=3600
```

--------------------------------

### Access Relationship Tags from Post Model in Laravel

Source: https://laravel.com/docs/12.x/eloquent-relationships

Demonstrates retrieving related models through a dynamic relationship property. This example shows accessing all tags associated with a post by iterating through the `tags` relationship property after fetching a post by ID.

```php
use App\Models\Post;

$post = Post::find(1);

foreach ($post->tags as $tag) {
    // ...
}
```

--------------------------------

### Define Trial Period for Stripe Subscription Checkout in Laravel

Source: https://laravel.com/docs/12.x/billing

This PHP example demonstrates how to include a trial period when initiating a Stripe subscription checkout with Laravel Cashier. The `trialDays(3)` method sets a 3-day trial, but it's important to note that Stripe Checkout requires a minimum trial period of 48 hours, and some subscription billing options are not supported during checkout sessions.

```php
$checkout = Auth::user()->newSubscription('default', 'price_monthly')
    ->trialDays(3)
    ->checkout();
```

--------------------------------

### Handle Laravel MCP Resource Text Responses (PHP)

Source: https://laravel.com/docs/12.x/mcp

This example shows how to return simple text content from a Laravel MCP resource's `handle` method. Resources must return an instance of `Laravel\Mcp\Response`, and the `Response::text()` method is used for straightforward string outputs. The `$weatherData` variable would contain the text to be returned.

```php
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the resource request.
 */
public function handle(Request $request): Response
{
    // ...

    return Response::text($weatherData);
}
```

--------------------------------

### Define a Laravel Console Command with User Interaction

Source: https://laravel.com/docs/12.x/console-tests

This code defines a basic Laravel console command using `Artisan::command`. It demonstrates how to interact with the user by asking a question using `$this->ask()` and presenting a choice using `$this->choice()`, then outputs a summary of the user's input.

```php
Artisan::command('question', function () {
    $name = $this->ask('What is your name?');

    $language = $this->choice('Which language do you prefer?', [
        'PHP',
        'Ruby',
        'Python',
    ]);

    $this->line('Your name is '.$name.' and you prefer '.$language.'.');
});
```

--------------------------------

### Get and Set File Visibility After Storage in Laravel

Source: https://laravel.com/docs/12.x/filesystem

This snippet illustrates how to retrieve the current visibility of an already stored file using `Storage::getVisibility()` and how to change its visibility using `Storage::setVisibility()`. This allows dynamic control over file access permissions.

```php
$visibility = Storage::getVisibility('file.jpg');

Storage::setVisibility('file.jpg', 'public');
```

--------------------------------

### Obtaining Laravel Service Container Instance via PSR-11 Interface (PHP)

Source: https://laravel.com/docs/12.x/container

Shows how to type-hint the `Psr\Container\ContainerInterface` to obtain an instance of Laravel's service container. This allows interaction with the container using the standard PSR-11 `get` method to resolve services.

```php
use App\Services\Transistor;
use Psr\Container\ContainerInterface;

Route::get('/', function (ContainerInterface $container) {
    $service = $container->get(Transistor::class);

    // ...
});
```

--------------------------------

### Register Service with Container Injection in Octane

Source: https://laravel.com/docs/12.x/octane

Demonstrates how to register a service as a singleton with container injection in a Laravel service provider. This pattern can cause issues in Octane applications because the injected container instance may become stale across requests since the application boots only once.

```php
use App\Service;
use Illuminate\Contracts\Foundation\Application;

/**
 * Register any application services.
 */
public function register(): void
{
    $this->app->singleton(Service::class, function (Application $app) {
        return new Service($app);
    });
}
```

--------------------------------

### Generate URL for Controller Action with Parameters in Laravel PHP

Source: https://laravel.com/docs/12.x/urls

This example demonstrates how to generate a URL for a controller action that expects route parameters. An associative array of parameters is passed as the second argument to the `action` helper function, which then constructs the URL with the provided values.

```php
$url = action([UserController::class, 'profile'], ['id' => 1]);
```

--------------------------------

### Log Message in Laravel Controller

Source: https://laravel.com/docs/12.x/logging

Example of logging an informational message within a controller method. Demonstrates using the Log facade to record user profile view actions with contextual data, writing to the default configured log channel.

```php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    public function show(string $id): View
    {
        Log::info('Showing the user profile for user: {id}', ['id' => $id]);

        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
```

--------------------------------

### PHPDoc Documentation Block with Parameters and Return Type

Source: https://laravel.com/docs/12.x/contributions

Standard Laravel PHPDoc format for documenting methods with parameters and return types. Includes proper spacing between @param attributes (two spaces before type, two spaces after type) and exception documentation. Used for methods without native type hints.

```php
/**
 * Register a binding with the container.
 *
 * @param  string|array  $abstract
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 *
 * @throws \Exception
 */
public function bind($abstract, $concrete = null, $shared = false)
{
    // ...
}
```

--------------------------------

### Querying Relationship Absence with `whereDoesntHave` and Constraints in Laravel Eloquent

Source: https://laravel.com/docs/12.x/eloquent-relationships

Demonstrates adding additional query constraints to `doesntHave` queries using the `whereDoesntHave` method. This retrieves posts that do not have comments with content starting with 'code'.

```php
use Illuminate\Database\Eloquent\Builder;

$posts = Post::whereDoesntHave('comments', function (Builder $query) {
    $query->where('content', 'like', 'code%');
})->get();
```

--------------------------------

### Retrieve Array of Enum Input Values in Laravel

Source: https://laravel.com/docs/12.x/requests

This example illustrates using the `enums` method to retrieve an array of PHP enum instances when the input value itself is an array of values corresponding to a PHP enum. This simplifies processing multiple enum-backed inputs.

```php
use App\Enums\Product;

$products = $request->enums('products', Product::class);
```

--------------------------------

### Start Laravel Horizon with automatic code reloading

Source: https://laravel.com/docs/12.x/horizon

This command initiates the Laravel Horizon queue worker in listen mode, enabling automatic detection and reloading of code changes. This is ideal for local development, eliminating the need to manually restart Horizon after code modifications.

```shell
php artisan horizon:listen
```

--------------------------------

### Get character at index using Str::charAt()

Source: https://laravel.com/docs/12.x/strings

The `Str::charAt()` method returns the character at a specified index position in a string. Returns `false` if the index is out of bounds.

```php
use Illuminate\Support\Str;

$character = Str::charAt('This is my name.', 6);

// 's'
```

--------------------------------

### Generating View Response with Custom Headers in Laravel PHP

Source: https://laravel.com/docs/12.x/responses

This PHP example shows how to create a view response using the `response()->view()` helper, allowing fine-grained control over the HTTP status code and headers. It returns the 'hello' view with provided data, a 200 status, and a custom `Content-Type` header.

```php
return response()
    ->view('hello', $data, 200)
    ->header('Content-Type', $type);
```

--------------------------------

### Get class basename using class_basename() helper

Source: https://laravel.com/docs/12.x/strings

The `class_basename()` function extracts and returns only the class name from a fully qualified class name, removing the namespace portion.

```php
$class = class_basename('Foo\Bar\Baz');

// Baz
```

--------------------------------

### Access Configuration Values with Config Facade and Function

Source: https://laravel.com/docs/12.x/configuration

Retrieve configuration values using the `Config` facade or global `config` function with dot notation syntax. Supports default values and typed retrieval methods for static analysis. Configuration values are accessed from the application's config files.

```php
use Illuminate\Support\Facades\Config;

$value = Config::get('app.timezone');

$value = config('app.timezone');

// Retrieve a default value if the configuration value does not exist...
$value = config('app.timezone', 'Asia/Seoul');
```

```php
Config::set('app.timezone', 'America/Chicago');

config(['app.timezone' => 'America/Chicago']);
```

```php
Config::string('config-key');
Config::integer('config-key');
Config::float('config-key');
Config::boolean('config-key');
Config::array('config-key');
Config::collection('config-key');
```

--------------------------------

### Inspect Laravel Gate Authorization Response for Details

Source: https://laravel.com/docs/12.x/authorization

This example shows how to use `Gate::inspect` to retrieve the full `Illuminate\Auth\Access\Response` object returned by a policy. This allows checking if the action was `allowed()` and retrieving the specific `message()` provided by the policy when access is denied.

```php
use Illuminate\Support\Facades\Gate;

$response = Gate::inspect('update', $post);

if ($response->allowed()) {
    // The action is authorized...
} else {
    echo $response->message();
}
```

--------------------------------

### Generating JSONP Response in Laravel PHP

Source: https://laravel.com/docs/12.x/responses

This PHP example shows how to create a JSONP response by chaining `withCallback()` after `response()->json()`. It takes the callback function name from the request input, wrapping the JSON data in that function call, which is useful for cross-domain requests.

```php
return response()
    ->json(['name' => 'Abigail', 'state' => 'CA'])
    ->withCallback($request->input('callback'));
```

--------------------------------

### Get Configuration Path in Laravel PHP

Source: https://laravel.com/docs/12.x/helpers

The `config_path` function provides the fully qualified path to the application's `config` directory. It can also generate a path to a specific configuration file within this directory. This helper simplifies access to application configuration files, such as `app.php`.

```php
$path = config_path();

$path = config_path('app.php');
```

--------------------------------

### Retrieve Array Input Values in Laravel

Source: https://laravel.com/docs/12.x/requests

This example illustrates using the `array` method to retrieve input values that are expected to be arrays. The method ensures the returned value is always an array, providing an empty array if the specified input name is not present in the request.

```php
$versions = $request->array('versions');
```

--------------------------------

### Retrieve Price Previews by Price IDs with Laravel Cashier Paddle (PHP)

Source: https://laravel.com/docs/12.x/cashier-paddle

This PHP snippet demonstrates how to retrieve a list of price previews for specified price IDs using Laravel Cashier's `previewPrices` method. The currency is determined by the request's IP address by default.

```php
use Laravel\Paddle\Cashier;

$prices = Cashier::previewPrices(['pri_123', 'pri_456']);
```

--------------------------------

### Display Laravel Fortify 2FA Enabled Session Status Message (Blade)

Source: https://laravel.com/docs/12.x/fortify

This Blade snippet shows how to display a success message to the user after they have initiated the two-factor authentication setup process. It checks for the `two-factor-authentication-enabled` status in the session, indicating that 2FA has been enabled but still requires confirmation by providing a valid code.

```html
@if (session('status') == 'two-factor-authentication-enabled')
    <div class="mb-4 font-medium text-sm">
        Please finish configuring two-factor authentication below.
    </div>
@endif
```

--------------------------------

### Get Query String Page Variable Name - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Retrieves the query string variable name used to store the current page number. Returns the page parameter name string.

```php
$paginator->getPageName()
```

--------------------------------

### Define Pusher and Vite Environment Variables in .env

Source: https://laravel.com/docs/12.x/broadcasting

This snippet shows the required environment variables for configuring Pusher broadcasting in a Laravel application, including `PUSHER_APP_ID`, `PUSHER_APP_KEY`, and `PUSHER_APP_CLUSTER`. It also defines corresponding `VITE_` prefixed variables, which are exposed to the frontend build process. These variables are crucial for both the backend broadcasting driver and the frontend Echo instance to connect to the Pusher service.

```ini
PUSHER_APP_ID="your-pusher-app-id"
PUSHER_APP_KEY="your-pusher-key"
PUSHER_APP_SECRET="your-pusher-secret"
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME="https"
PUSHER_APP_CLUSTER="mt1"

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

--------------------------------

### Memoized Cache Behavior Within Single Request

Source: https://laravel.com/docs/12.x/cache

Demonstrates how memoized cache works within a single request. First get call retrieves from cache store, subsequent calls return memoized value from memory without hitting the cache.

```php
// Hits the cache...
$value = Cache::memo()->get('key');

// Does not hit the cache, returns memoized value...
$value = Cache::memo()->get('key');
```

--------------------------------

### Get First Item Result Number - Laravel Paginator

Source: https://laravel.com/docs/12.x/pagination

Returns the result number of the first item in the current page results. Useful for displaying item numbering like 'Showing 1-15 of 100'.

```php
$paginator->firstItem()
```

--------------------------------

### Create Basic Folio Page with Blade Template

Source: https://laravel.com/docs/12.x/folio

Create a simple Blade template in the resources/views/pages directory to automatically generate a route. The file name becomes the URL path, so greeting.blade.php creates a /greeting route.

```php
<div>
    Hello World
</div>
```

--------------------------------

### Get Raw Search Results from Scout

Source: https://laravel.com/docs/12.x/scout

Use the raw method on a search query to retrieve raw search results before they are converted to Eloquent models. This is useful when you need the original search engine response data.

```php
$orders = Order::search('Star Trek')->raw();
```

--------------------------------

### Get Random Value from Array - Arr::random()

Source: https://laravel.com/docs/12.x/helpers

Returns a random value from an array. Accepts optional second argument to specify number of items to return, which always returns an array even for single item requests.

```php
use Illuminate\Support\Arr;

$array = [1, 2, 3, 4, 5];

$random = Arr::random($array);
// 4 - (retrieved randomly)

$items = Arr::random($array, 2);
// [2, 5] - (retrieved randomly)
```