### Start Laravel Development Server (Shell)

Source: https://livewire.laravel.com/docs/4.x/quickstart

This command starts the built-in PHP development server for a Laravel application. It's used to test the Livewire component locally. This command requires PHP to be installed and accessible in the system's PATH.

```shell
php artisan serve
```

--------------------------------

### Setup Livewire Local Environment

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Steps to fork, clone, install composer dependencies, and configure Dusk for the Livewire repository. This sets up the local environment for contributing to Livewire.

```shell
# Fork and clone Livewire
gh repo fork livewire/livewire --default-branch-only --clone=true --remote=false -- livewire

# Switch the working directory to livewire
cd livewire

# Install all composer dependencies
composer install

# Ensure Dusk is correctly configured
vendor/bin/dusk-updater detect --no-interaction
```

--------------------------------

### Setup Alpine.js Local Environment and Link Packages

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Instructions for setting up the Alpine.js repository locally, including installing NPM dependencies, building packages, and linking them. This is necessary for integrating with Livewire.

```shell
# Fork and clone Alpine
gh repo fork alpinejs/alpine --default-branch-only --clone=true --remote=false -- alpine

# Switch the working directory to alpine
cd alpine

# Install all npm dependencies
npm install

# Build all Alpine packages
npm run build

# Link all Alpine packages locally
cd packages/alpinejs && npm link && cd ../../
cd packages/anchor && npm link && cd ../../
cd packages/collapse && npm link && cd ../../
cd packages/csp && npm link && cd ../../
cd packages/docs && npm link && cd ../../
cd packages/focus && npm link && cd ../../
cd packages/history && npm link && cd ../../
cd packages/intersect && npm link && cd ../../
cd packages/mask && npm link && cd ../../
cd packages/morph && npm link && cd ../../
cd packages/navigate && npm link && cd ../../
cd packages/persist && npm link && cd ../../
cd packages/sort && npm link && cd ../../
cd packages/ui && npm link && cd ../../

# Switch the working directory back to livewire
cd ../livewire

# Link all packages
npm link alpinejs @alpinejs/anchor @alpinejs/collapse @alpinejs/csp @alpinejs/docs @alpinejs/focus @alpinejs/history @alpinejs/intersect @alpinejs/mask @alpinejs/morph @alpinejs/navigate @alpinejs/persist @alpinejs/sort @alpinejs/ui

# Build Livewire
npm run build
```

--------------------------------

### Livewire Core Directory Structure Example

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

An example of the directory structure within the Livewire core, showcasing feature-specific folders. This helps contributors understand where to locate and add tests for specific functionalities.

```shell
src/Features/SupportAccessingParent
src/Features/SupportAttributes
src/Features/SupportAutoInjectedAssets
src/Features/SupportBladeAttributes
src/Features/SupportChecksumErrorDebugging
src/Features/SupportComputed
src/Features/SupportConsoleCommands
src/Features/SupportDataBinding
#...
```

--------------------------------

### Update Post Record (PHP - Production Example)

Source: https://livewire.laravel.com/docs/4.x/quickstart

This is an example of a production-ready save method for the Livewire component. It replaces the `dd()` function with database interaction (assuming a 'Post' model) and a redirect. This snippet requires a 'Post' Eloquent model and a corresponding database table.

```php
public function save()
{
    $validated = $this->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    Post::create($validated); // Assumes you have a Post model and database table

    return $this->redirect('/posts');
}
```

--------------------------------

### Pull Request Template Example (Markdown)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

An example of the template used when submitting a pull request to the Livewire repository. It includes questions about the contribution's necessity, branching, scope, and testing.

```markdown
Review the contribution guide first at: https://livewire.laravel.com/docs/contribution-guide

1️⃣ Is this something that is wanted/needed? Did you create a discussion about it first?
Yes, you can find the discussion here: https://github.com/livewire/livewire/discussions/999999

2️⃣ Did you create a branch for your fix/feature? (Main branch PR's will be closed)
Yes, the branch is named `my-feature`

3️⃣ Does it contain multiple, unrelated changes? Please separate the PRs out.
No, the changes are only related to my feature.

4️⃣ Does it include tests? (Required)
Yes

5️⃣ Please include a thorough description (including small code snippets if possible) of the improvement and reasons why it's useful.

These changes will improve memory usage. You can see the benchmark results here:

// ...
```

--------------------------------

### Install and Setup Livewire Browser Testing with Pest

Source: https://livewire.laravel.com/docs/4.x/testing

Instructions for setting up browser testing for Livewire components using Pest and Playwright. This involves installing the Pest browser plugin and Playwright, and then downloading Playwright browsers.

```shell
composer require pestphp/pest-plugin-browser --dev
npm install playwright@latest
npx playwright install
```

--------------------------------

### Example Class-Based Component Structure

Source: https://livewire.laravel.com/docs/4.x/components

Provides the basic structure of a class-based Livewire component, showing the PHP class definition and its associated Blade view file.

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
	public function render()
	{
		return view('livewire.create-post');
	}
}
```

```html
<div>
	{{-- ... --}}
</div>
```

--------------------------------

### Create Livewire Post Component (Blade/PHP)

Source: https://livewire.laravel.com/docs/4.x/quickstart

This snippet defines a Livewire component for creating a blog post. It includes properties for title and content, a save method with validation, and a basic HTML form with Livewire directives for data binding and submission. It requires Livewire to be installed in a Laravel project.

```blade
<?php

use Livewire\Component;

new class extends Component {
    public string $title = '';

    public string $content = '';

    public function save()
    {
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        dd($this->title, $this->content);
    }
};
?>

<form wire:submit="save">
    <label>
        Title
        <input type="text" wire:model="title">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </label>

    <label>
        Content
        <textarea wire:model="content" rows="5"></textarea>
        @error('content') <span style="color: red;">{{ $message }}</span> @enderror
    </label>

    <button type="submit">Save Post</button>
</form>
```

--------------------------------

### Install Volt (Bash)

Source: https://livewire.laravel.com/docs/4.x/volt

Commands to install the Volt package using Composer and register its service provider using an Artisan command. This sets up Volt in your Livewire project.

```bash
composer require livewire/volt
php artisan volt:install
```

--------------------------------

### Configure Custom Component Namespaces in Livewire

Source: https://livewire.laravel.com/docs/4.x/components

Provides an example of how to define custom component namespaces in the `config/livewire.php` file. This allows for better organization of components into specific directories with a clear reference syntax.

```php
'component_namespaces' => [
    'layouts' => resource_path('views/layouts'),
    'pages' => resource_path('views/pages'),
    'admin' => resource_path('views/admin'),    // Custom namespace
    'widgets' => resource_path('views/widgets'), // Another custom namespace
],

```

--------------------------------

### Island Component Example (Blade)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Demonstrates the usage of the `@island` directive in Livewire v4 to create isolated regions within a component that update independently for performance gains.

```blade
@island(name: 'stats', lazy: true)
    <div>{{ $this->expensiveStats }}</div>
@endisland
```

--------------------------------

### Install Livewire using Composer

Source: https://livewire.laravel.com/docs/4.x/installation

This command installs the Livewire package into your Laravel project. It requires Composer to be installed and your project directory to be accessible via the terminal. Livewire utilizes Laravel's package auto-discovery, simplifying the setup process.

```shell
composer require livewire/livewire
```

--------------------------------

### Enable Data Binding with Synthesizer get() and set()

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This enhanced PHP code for the 'AddressSynth' includes `get()` and `set()` methods. These methods allow `wire:model` to directly bind to properties of the 'Address' object by providing accessors and mutators for the DTO's properties.

```php
use App\Dtos\Address;

class AddressSynth extends Synth
{
    public static $key = 'address';

    public static function match($target)
    {
        return $target instanceof Address;
    }

    public function dehydrate($target)
    {
        return [[
            'street' => $target->street,
            'city' => $target->city,
            'state' => $target->state,
            'zip' => $target->zip,
        ], []];
    }

    public function hydrate($value)
    {
        $instance = new Address;

        $instance->street = $value['street'];
        $instance->city = $value['city'];
        $instance->state = $value['state'];
        $instance->zip = $value['zip'];

        return $instance;
    }

    public function get(&$target, $key) 
    {
        return $target->{$key};
    }

    public function set(&$target, $key, $value)
    {
        $target->{$key} = $value;
    }
}
```

--------------------------------

### Basic Livewire Pagination Setup with `WithPagination` Trait

Source: https://livewire.laravel.com/docs/4.x/pagination

This snippet demonstrates the fundamental setup for pagination in a Livewire component. It utilizes the `WithPagination` trait and the `#[Computed]` attribute to fetch paginated posts. The `Post::paginate(10)` method fetches ten posts per page, and `$this->posts->links()` renders the pagination navigation UI.

```php
<?php // resources/views/components/⚡show-posts.blade.php

use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    use WithPagination;

    #[Computed]
    public function posts()
    {
        return Post::paginate(10);
    }
};
```
```

```blade
<div>
    <div>
        @foreach ($this->posts as $post) 
            <!-- ... -->
        @endforeach
    </div>

    {{ $this->posts->links() }}
</div>
```

--------------------------------

### Configure Additional Component Locations in Livewire

Source: https://livewire.laravel.com/docs/4.x/components

Example of configuring additional directories for Livewire component discovery in `config/livewire.php`. This allows Livewire to find components located outside the default `resources/views/components/` directory.

```php
'component_locations' => [
    resource_path('views/components'),
    resource_path('views/admin/components'),
    resource_path('views/widgets'),
],

```

--------------------------------

### Install Pest Testing Framework

Source: https://livewire.laravel.com/docs/4.x/testing

Instructions to install the Pest testing framework in a Laravel project, including removing PHPUnit and requiring Pest with all dependencies. This sets up the project for using Pest for testing.

```shell
composer remove phpunit/phpunit
composer require pestphp/pest --dev --with-all-dependencies
./vendor/bin/pest --init
```

--------------------------------

### Class-based Volt Component Example (Blade/PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

An example of a class-based Volt component that leverages single-file component capabilities while using traditional Livewire syntax. It extends `LivewireVoltComponent` and defines public properties and methods.

```php
<?php

use LivewireVoltComponent;

new class extends Component {
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
} ?>

<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
```

--------------------------------

### Pass Route Parameter as Prop to Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates how to define a route that accepts a parameter and how this parameter is automatically passed to the `mount()` method of the specified Livewire component.

```php
Route::livewire('/posts/{id}', 'pages::post.show');

```

```php
<?php // resources/views/pages/post/show.blade.php

use Livewire\Component;

new class extends Component {
    public $postId;

    public function mount($id)
    {
        $this->postId = $id;
    }
};

```

--------------------------------

### Commit and Push Changes to Git (Shell)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Shows how to stage all changes, commit them with a descriptive message, and push the new branch to your forked Livewire repository.

```shell
git add .
git commit -m "Add my feature"
git push origin my-feature
```

--------------------------------

### Write Livewire Unit Test (PHP)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Demonstrates how to write a basic unit test for Livewire components using PHPUnit. This focuses on the PHP implementation of Livewire.

```php
use Tests\TestCase;

class UnitTest extends TestCase
{
    public function test_livewire_can_run_action(): void
    {
       // ...
    }
}
```

--------------------------------

### Configure Headless Browser Testing (Environment)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Explains how to configure browser tests to run in headless mode by setting the `DUSK_HEADLESS_DISABLED` environment variable to `false` in a `.env` file.

```env
DUSK_HEADLESS_DISABLED=false
```

--------------------------------

### Create Livewire Components (Bash)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Artisan commands for creating Livewire components in v4. Supports single-file (default), multi-file components, and conversion between formats.

```bash
php artisan make:livewire create-post        # Single-file (default)php artisan make:livewire create-post --mfc  # Multi-filephp artisan livewire:convert create-post     # Convert between formats
```

--------------------------------

### Sample Livewire Simple Pagination View Structure

Source: https://livewire.laravel.com/docs/4.x/pagination

Provides an unstyled example of a simple Livewire pagination view. It illustrates how to use Livewire's page navigation helpers like '$this->nextPage()' and '$this->previousPage()' with 'wire:click' for interactive buttons.

```blade
<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <span>
                @if ($paginator->onFirstPage())
                    <span>Previous</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev">Previous</button>
                @endif
            </span>

            <span>
                @if ($paginator->onLastPage())
                    <span>Next</span>
                @else
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next">Next</button>
                @endif
            </span>
        </nav>
    @endif
</div>
```

--------------------------------

### Generate and Write Basic Livewire Component Test

Source: https://livewire.laravel.com/docs/4.x/testing

Demonstrates how to generate a test file for a Livewire component using the `make:livewire` command with the `--test` flag, and provides an example of a basic test asserting successful rendering.

```shell
php artisan make:livewire post.create --test
```

```php
<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('post.create')
        ->assertStatus(200);
});
```

--------------------------------

### Global Livewire Initialization and Initialization Events (HTML)

Source: https://livewire.laravel.com/docs/4.x/javascript

These examples show how to listen for global Livewire browser events. `livewire:init` fires after Livewire is loaded but before initialization, useful for setup. `livewire:initialized` fires immediately after Livewire finishes initializing on the page. These events are crucial for integrating custom directives or lifecycle hooks.

```html
<script>
    document.addEventListener('livewire:init', () => {
        // Runs after Livewire is loaded but before it's initialized
        // on the page...
    })

    document.addEventListener('livewire:initialized', () => {
        // Runs immediately after Livewire has finished initializing
        // on the page...
    })
</script>
```

--------------------------------

### Test Livewire Volt Components

Source: https://livewire.laravel.com/docs/4.x/volt

This example shows how to test a Volt component using `Volt::test()`, which leverages Livewire's testing API. It covers basic assertions like checking for visible text and invoking component actions.

```php
use Livewire\Volt\Volt;

it('increments the counter', function () {
    Volt::test('counter')
        ->assertSee('0')
        ->call('increment')
        ->assertSee('1');
});
```

```php
Volt::test('users.stats')
```

```php
$this->get('/users')
    ->assertSeeVolt('stats');
```

--------------------------------

### Reset Livewire Pagination Page with `$this->resetPage()` on Search Submit

Source: https://livewire.laravel.com/docs/4.x/pagination

This example demonstrates how to reset the pagination page to the first page when a search query is submitted. The `resetPage()` method is called within the `search()` method, ensuring that any filtering or sorting applied via the search input starts from the beginning of the results. This improves user experience by preventing them from getting stuck on later pages when refining their search.

```php
<?php // resources/views/components/⚡search-posts.blade.php

use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    use WithPagination;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    #[Computed]
    public function posts()
    {
        return Post::where('title', 'like', '%'.$this->query.'%')->paginate(10);
    }
};
```
```

```blade
<div>
    <form wire:submit="search">
        <input type="text" wire:model="query">

        <button type="submit">Search posts</button>
    </form>

    <div>
        @foreach ($this->posts as $post)
            <!-- ... -->
        @endforeach
    </div>

    {{ $this->posts->links() }}
</div>
```

--------------------------------

### Example Dynamic Child Component in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

This snippet provides an example of a dynamically rendered child component in Livewire, specifically 'step-one'. When the parent component's `$current` property is set to 'step-one', this component's view will be rendered. This demonstrates the basic structure of a component that can be chosen at runtime.

```php
<?php // resources/views/components/⚡step-one.blade.php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    Step One Content
</div>
```

--------------------------------

### Parent Livewire Component Setup (PHP)

Source: https://livewire.laravel.com/docs/4.x/nesting

Sets up a parent Livewire component ('todos') responsible for displaying and managing a list of todo items. It includes computed properties for fetching todos and a method to handle todo deletion.

```php
<?php // resources/views/components/⚡todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    public function remove($todoId)
    {
        $todo = Todo::find($todoId);

        $this->authorize('delete', $todo);

        $todo->delete();
    }

    #[Computed]
    public function todos()
    {
        return Auth::user()->todos,
    }
};
?>
```

--------------------------------

### Define Livewire Component as a Full Page Route

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates how to use `Route::livewire()` to map a URL to a Livewire component, effectively turning the component into a full page without the need for traditional controllers.

```php
Route::livewire('/posts/create', 'pages::post.create');

```

--------------------------------

### Configuring Default Component Type for Artisan Command

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to configure Livewire to use class-based components as the default when generating components with the Artisan `make:livewire` command.

```php
'make_command' => [
    'type' => 'class',
],
```

--------------------------------

### Livewire Stringable Synthesizer Example

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This PHP code demonstrates the internal Stringable synthesizer used by Livewire. It defines how Stringable objects are dehydrated into a JSON-compatible tuple and rehydrated back into Stringable objects.

```php
use Illuminate\Support\Stringable;

class StringableSynth extends Synth
{
    public static $key = 'str';

    public static function match($target)
    {
        return $target instanceof Stringable;
    }

    public function dehydrate($target)
    {
        return [$target->__toString(), []];
    }

    public function hydrate($value)
    {
        return str($value);
    }
}
```

--------------------------------

### Install Livewire v4 and Clear Cache

Source: https://livewire.laravel.com/docs/4.x/upgrading

Update your project to use Livewire version 4.0 by modifying your composer.json file and then clear the application's cache using Artisan. This ensures the new version is properly installed and configured.

```bash
composer require livewire/livewire:^4.0

php artisan optimize:clear
```

--------------------------------

### Create Livewire Page Component (Shell)

Source: https://livewire.laravel.com/docs/4.x/components

This command generates a Livewire component intended to be used as a full page. By using the `pages::` namespace, the component is organized in the `resources/views/pages/` directory, clearly distinguishing it from reusable UI components.

```shell
php artisan make:livewire pages::post.create
```

--------------------------------

### Livewire Single-File Component (Blade)

Source: https://livewire.laravel.com/docs/4.x/components

A basic example of a single-file Livewire component. It includes a PHP class definition extending `Livewire\Component` and a Blade template with input and button elements. The `wire:model` directive binds the input to the `$title` property, and `wire:click` calls the `save` method.

```blade
<?php

use Livewire\Component;

new class extends Component {
    public $title = '';

    public function save()
    {
        // Save logic here...
    }
};
?>

<div>
    <input wire:model="title" type="text">
    <button wire:click="save">Save Post</button>
</div>
```

--------------------------------

### Livewire Blade Layout File Structure

Source: https://livewire.laravel.com/docs/4.x/installation

This is an example of a Blade layout file generated by Livewire. It includes the necessary directives (`@livewireStyles`, `@livewireScripts`) to render Livewire components and integrate Alpine.js. It also uses Vite for asset management.

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>
```

--------------------------------

### Example: CRUD Page Titles in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-title

Provides a set of examples demonstrating appropriate page titles for CRUD operations (index, create, edit, show) using both the #[Title] attribute and the title() method in Livewire.

```php
<?php // resources/views/pages/posts/⚡index.blade.php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('All Posts')] class extends Component { };
```

```php
<?php // resources/views/pages/posts/⚡create.blade.php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Create Post')] class extends Component { };
```

```php
<?php // resources/views/pages/posts/⚡edit.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function render()
    {
        return $this->view()->title("Edit: {$this->post->title}");
    }
};
```

```php
<?php // resources/views/pages/posts/⚡show.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function render()
    {
        return $this->view()->title($this->post->title);
    }
};
```

--------------------------------

### Bundled Loading (Livewire Component)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Illustrates how to bundle multiple lazy or deferred Livewire components to load in parallel rather than sequentially, improving initial load performance.

```html
<livewire:revenue lazy.bundle />
<livewire:expenses defer.bundle />
```

```php
#[Lazy(bundle: true)]
class Revenue extends Component { ... }
```

--------------------------------

### Programmatically Register Individual Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates how to programmatically register an individual Livewire component using `Livewire::addComponent()` within a service provider's boot method. This is useful for dynamic registration or package development.

```php
use Livewire\Livewire;

// In a service provider's boot() method (e.g., App\Providers\AppServiceProvider)
Livewire::addComponent(
    name: 'custom-button',
    viewPath: resource_path('views/ui/button.blade.php')
);

```

--------------------------------

### Livewire wire:bind:style Example

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Shows how to dynamically bind CSS styles to an HTML element using wire:bind:style. It allows for reactive updates to inline styles based on component properties.

```blade
<div wire:bind:style="{ 'color': textColor, 'font-size': fontSize + 'px' }">
    Styled text
</div>
```

--------------------------------

### PHP: Authorize Livewire Action Parameter (Secure Example)

Source: https://livewire.laravel.com/docs/4.x/security

Demonstrates a secure way to handle Livewire action parameters by using the `$this->authorize()` method. This ensures that the user is permitted to perform the action before any database modifications occur, preventing unauthorized deletions.

```php
public function delete($id)
{
    $post = Post::find($id);

    // If the user doesn't own the post,
    // an AuthorizationException will be thrown...
    $this->authorize('delete', $post); // [tl! highlight]

    $post->delete();
}

```

--------------------------------

### Write a Livewire Browser Test

Source: https://livewire.laravel.com/docs/4.x/testing

An example of a browser test for a Livewire component, using `Livewire::visit()` to interact with the component in a real browser. It demonstrates typing into fields, clicking buttons, and asserting visible output.

```php
it('can create a new post', function () {
    Livewire::visit('post.create')
        ->type('[wire\:model="title"]', 'My first post')
        ->type('[wire\:model="content"]', 'This is the content')
        ->press('Save')
        ->assertSee('Post created successfully');
});
```

--------------------------------

### Register Livewire Route (PHP)

Source: https://livewire.laravel.com/docs/4.x/quickstart

This snippet registers a new web route in Laravel that maps the URL '/post/create' to a Livewire component named 'pages::post.create'. This makes the component accessible via a browser. This code should be placed in the `routes/web.php` file.

```php
Route::livewire('/post/create', 'pages::post.create');
```

--------------------------------

### Create Git Branch for Contribution (Shell)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Demonstrates the Git command to create a new branch for your feature or bug fix. It's recommended to use a descriptive branch name.

```shell
git checkout -b my-feature
```

--------------------------------

### Programmatically Register Livewire Component Directory

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to register an entire directory for Livewire component discovery using `Livewire::addLocation()` in a service provider. This method expands the locations where Livewire automatically searches for components.

```php
Livewire::addLocation(
    viewPath: resource_path('views/admin/components')
);

```

--------------------------------

### Route to Livewire Component Using Custom Namespace

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates how to define a route that points to a Livewire component located in a custom namespace. This integrates the component seamlessly into the application's routing.

```php
Route::livewire('/admin/users', 'admin::users-table');

```

--------------------------------

### Styling Active Links with Plain CSS and data-current

Source: https://livewire.laravel.com/docs/4.x/navigate

Provides an example of using plain CSS selectors to style elements with the `data-current` attribute, offering an alternative to utility-first CSS frameworks like Tailwind.

```css
[data-current] {
    font-weight: bold;
    color: #18181b;
}
```

--------------------------------

### Initialize Component with Route Model Binding using mount() in Livewire

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

Demonstrates using the `mount()` method in Livewire to initialize component properties by accepting a model instance directly, leveraging Laravel's route model binding. This example initializes 'title' and 'content' from a `Post` model.

```php
<?php // resources/views/components/post/edit.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $title;

    public $content;

    public function mount(Post $post)
    {
        $this->title = $post->title;

        $this->content = $post->content;
    }

    // ...
};

```

--------------------------------

### Livewire Component Rendering Example (PHP)

Source: https://livewire.laravel.com/docs/4.x/hydration

Demonstrates a simple Livewire counter component in PHP, including its public properties, methods, and the render method that returns Blade template content as an HTML string.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            Count: {{ $count }}

            <button wire:click="increment">+</button>
        </div>
        HTML;
    };
};

```

--------------------------------

### Render Livewire Component from Subdirectory in Blade

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to render a Livewire component located in a subdirectory by using dot notation in the component name. This allows for better organization of components.

```blade
<livewire:post.create />
```

--------------------------------

### Define Route with Parameter (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Example of defining a route with an 'id' parameter in Laravel's `routes/web.php` file, intended for use with Livewire components.

```php
<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/posts/{id}', 'pages::show-post');
```

--------------------------------

### Prefetch Links with `wire:navigate.hover`

Source: https://livewire.laravel.com/docs/4.x/navigate

This HTML example shows how to use the `.hover` modifier with `wire:navigate`. This instructs Livewire to prefetch the linked page after a short hover delay (60 milliseconds), further improving perceived performance by having the content ready before the user fully commits to clicking.

```html
<a href="/posts" wire:navigate.hover>Posts</a>
```

--------------------------------

### Alternative Layout Specification using render() method

Source: https://livewire.laravel.com/docs/4.x/attribute-layout

This example demonstrates an alternative way to specify a layout for a Livewire component by using the `layout()` method within the `render()` method. This approach is useful when a `render()` method is already defined and more complex rendering logic is involved.

```php
<?php // resources/views/pages/posts/⚡index.blade.php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return view('livewire.posts.index')
            ->layout('layouts::dashboard', ['title' => 'Posts']);
    }
};

```

--------------------------------

### JavaScript in View-Based Components (Blade/JavaScript)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Example of including JavaScript directly within view-based Livewire components. The `<script>` tags are handled without the `@script` wrapper and are served as cached files with automatic `$wire` binding.

```blade
<div>
    <!-- Your component template -->
</div>

<script>
    // $wire is automatically bound as 'this'
    this.count++  // Same as $wire.count++

    // $wire is still available if preferred
    $wire.save()
</script>
```

--------------------------------

### Run Livewire Tests with PHPUnit (Shell)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Provides commands to execute Livewire tests using PHPUnit. You can run a specific test using a filter or run all tests in the suite.

```shell
vendor/bin/phpunit --filter "test_can_make_method_a_computed" # To run a specific test
vendor/bin/phpunit # To run all tests
```

--------------------------------

### Create Livewire Component with Custom Namespace

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates the Artisan command to create a Livewire component within a custom namespace. This command follows the configured namespace structure for organization.

```shell
php artisan make:livewire admin::users-table

```

--------------------------------

### Styling with CSS data-loading attribute

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Provides examples of how to style elements using standard CSS when the `data-loading` attribute is present. This is useful for projects not using Tailwind CSS or for more complex styling scenarios.

```css
[data-loading] {
    opacity: 0.5;
    pointer-events: none;
}

button[data-loading] {
    background-color: #ccc;
    cursor: wait;
}
```

--------------------------------

### Migrate Livewire 'commit' Hook to 'interceptMessage' (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Provides a migration guide from the deprecated `commit` hook in Livewire v3 to the new `interceptMessage` interceptor in v4. It maps the functionalities of `respond`, `succeed`, and `fail` to their equivalents within the new interceptor callbacks.

```javascript
// OLD - Deprecated
Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
    respond(() => {
        // Runs after response received but before processing
    })

    succeed(({ snapshot, effects }) => {
        // Runs after successful response
    })

    fail(() => {
        // Runs if request failed
    })
})

// NEW - Recommended
Livewire.interceptMessage(({ component, message, onFinish, onSuccess, onError, onFailure }) => {
    onFinish(() => {
        // Equivalent to respond()
    })

    onSuccess(({ payload }) => {
        // Equivalent to succeed()
        // Access snapshot via payload.snapshot
        // Access effects via payload.effects
    })

    onError(() => {
        // Equivalent to fail() for server errors
    })

    onFailure(() => {
        // Equivalent to fail() for network errors
    })
})
```

--------------------------------

### Write Livewire Browser Test (PHP)

Source: https://livewire.laravel.com/docs/4.x/contribution-guide

Shows how to write a browser test for Livewire components using PHPUnit and Dusk. These tests interact with Livewire through a real browser, focusing on the Javascript implementation.

```php
use Tests\BrowserTestCase;

class BrowserTest extends BrowserTestCase
{
    public function test_livewire_can_run_action()
    {
        // ...
    }
}
```

--------------------------------

### Declare Public Property in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates how to declare a public property within a Livewire component. Public properties are automatically accessible in the Blade template. This example initializes a 'title' property with a string value.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $title = 'My Post';
};

```

--------------------------------

### Registering Class-Based Components in Livewire

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates how to register class-based Livewire components within a Laravel service provider. This includes registering individual components by name and class, defining locations for component classes, and creating custom namespaces for components.

```php
use Livewire\Livewire;

// In a service provider's boot() method (e.g., App\Providers\AppServiceProvider)

// Register an individual class-based component
Livewire::addComponent(
    name: 'todos',
    class: \App\Livewire\Todos::class
);

// Register a location for class-based components
Livewire::addLocation(
    classNamespace: 'App\\Admin\\Livewire'
);

// Create a namespace for class-based components
Livewire::addNamespace(
    namespace: 'admin',
    classNamespace: 'App\\Admin\\Livewire',
    classPath: app_path('Admin/Livewire'),
    classViewPath: resource_path('views/admin/livewire')
);
```

--------------------------------

### Async Actions (Livewire)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Demonstrates how to execute Livewire actions asynchronously using the `.async` modifier in the template or the `#[Async]` attribute in the component class, allowing parallel execution without blocking requests.

```html
<button wire:click.async="logActivity">Track</button>
```

```php
#[Async]
public function logActivity() { ... }
```

--------------------------------

### Livewire Loading State with Tailwind CSS

Source: https://livewire.laravel.com/docs/4.x/pagination

Illustrates how to use Livewire's 'data-loading' attribute in conjunction with Tailwind CSS classes for visual feedback during page transitions. This example applies an opacity change to a 'Next' button when a page load is in progress.

```blade
<button wire:click="nextPage" class="data-loading:opacity-50" rel="next">
    Next
</button>
```

--------------------------------

### Update Livewire Placeholder Configuration

Source: https://livewire.laravel.com/docs/4.x/upgrading

The placeholder configuration key has been renamed from 'lazy_placeholder' in v3 to 'component_placeholder' in v4. Ensure your configuration reflects this change for placeholder rendering.

```php
// Before (v3)
'lazy_placeholder' => 'livewire.placeholder',

// After (v4)
'component_placeholder' => 'livewire.placeholder'
```

--------------------------------

### Livewire Component Rendering Hooks Example

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

Shows how to use the rendering() and rendered() hooks in a Livewire component to interact with the component's view lifecycle. The rendering hook runs before the view is processed, and the rendered hook runs after.

```php
<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public function render()
    {
        return $this->view([
            'post' => Post::all(),
        ]);
    }

    public function rendering($view, $data)
    {
        // Runs BEFORE the provided view is rendered...
        //
        // $view: The view about to be rendered
        // $data: The data provided to the view
    }

    public function rendered($view, $html)
    {
        // Runs AFTER the provided view is rendered...
        //
        // $view: The rendered view
        // $html: The final, rendered HTML
    }

    // ...
};

```

--------------------------------

### Nested Livewire Islands Example

Source: https://livewire.laravel.com/docs/4.x/islands

Illustrates how Livewire islands can be nested within each other. By default, when an outer island re-renders, inner islands are skipped, allowing for granular control over updates.

```blade
<div>
    @island(name: 'revenue')
        <div>
            Total revenue: {{ $this->revenue }}

            @island(name: 'breakdown')
                <div>
                    Monthly breakdown: {{ $this->monthlyBreakdown }}

                    <button type="button" wire:click="$refresh">
                        Refresh breakdown
                    </button>
                </div>
            @endisland

            <button type="button" wire:click="$refresh">
                Refresh revenue
            </button>
        </div>
    @endisland
</div>
```

--------------------------------

### Render Livewire Component in Blade

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates how to include a Livewire component within a Blade template using the standard tag syntax. This is the fundamental method for embedding components.

```blade
<livewire:component-name />
```

--------------------------------

### Reconstructing Collection from Snapshot - PHP

Source: https://livewire.laravel.com/docs/4.x/hydration

Provides a simplified PHP code example showing how Livewire might use the state and metadata from a snapshot to reconstruct a Laravel collection object.

```php
[ $state, $metadata ] = request('snapshot.state.todos');

$collection = new $metadata['class']($state);
```

--------------------------------

### Programmatically Register Livewire Component Namespace

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates how to register a custom namespace for Livewire components using `Livewire::addNamespace()` in a service provider. This allows components to be referenced using the defined namespace.

```php
Livewire::addNamespace(
    namespace: 'ui',
    viewPath: resource_path('views/ui')
);

```

--------------------------------

### Accessing Livewire Components from JavaScript

Source: https://livewire.laravel.com/docs/4.x/javascript

This JavaScript code demonstrates various methods for accessing Livewire component instances from external scripts using the global `Livewire` object. It includes functions to get the first component, find a component by ID, retrieve components by name, and get all components on the page.

```javascript
// Retrieve the $wire object for the first component on the page...
let component = Livewire.first()

// Retrieve a given component's `$wire` object by its ID...
let component = Livewire.find(id)

// Retrieve an array of component `$wire` objects by name...
let components = Livewire.getByName(name)

// Retrieve $wire objects for every component on the page...
let components = Livewire.all()
```

--------------------------------

### Livewire Parent Update Request Payload Example

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

An example of a JavaScript request payload sent to the server when a parent Livewire component's property is updated. It shows the 'updates' object containing the changed value and the 'snapshot' object with the component's memo and previous state.

```javascript
{
    updates: { postLimit: 1 },

    snapshot: {
        memo: { name: 'posts', id: '123' },

        state: { postLimit: 2, ... },
    },
}
```

--------------------------------

### Uninstall Volt Package (Bash)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Command to uninstall the `livewire/volt` package using Composer as part of the Livewire v4 upgrade process.

```bash
composer remove livewire/volt
```

--------------------------------

### Complex Modelable Example: Custom Rich Text Editor

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Provides an example of a more complex #[Modelable] component, a custom rich-text editor. It uses JavaScript initialization and an event listener to update the 'content' property when the editor's content changes.

```php
<?php // resources/views/components/⚡rich-editor.blade.php

use LivewireAttributesModelable;
use LivewireComponent;

new class extends Component {
    #[Modelable]
    public $content = '';
};
?>

<div>
    <div
        x-init="
            // Initialize your rich text editor library here
            editor.on('change', () => {
                $wire.content = editor.getContent()
            })
        "
    >
        <!-- Rich text editor UI -->
    </div>
</div>
```

--------------------------------

### Livewire Initializing Property from URL (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Demonstrates how a Livewire component property, when annotated with `#[Url]`, can be initialized from existing query string values in the URL upon page load. This example shows the `$search` property being set based on the `?search=` parameter.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url]
    public $search = ''; // Will be set to "bob"...

    // ...
}

```

--------------------------------

### Basic Lazy Loading Component in PHP (Livewire)

Source: https://livewire.laravel.com/docs/4.x/lazy

Demonstrates a basic Livewire component with a slow database query in its mount method. This example illustrates the scenario where lazy loading can prevent performance issues. It shows the PHP code for a component that calculates revenue.

```php
<?php // resources/views/components/⚡revenue.blade.php

use Livewire\Component;
use App\Models\Transaction;

new class extends Component {
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }
};
?>

<div>
    Revenue this month: {{ $amount }}
</div>
```

--------------------------------

### Implementing Simple Performance Isolation with Livewire Islands

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates the basic usage of Livewire Islands for performance optimization. It shows how to isolate expensive computations and provide a refresh button without creating a separate component file.

```blade
{{-- Island: Simple performance isolation --}}
@island
    <div>
        Revenue: {{ $this->expensiveRevenue }}
        <button wire:click="$refresh">Refresh</button>
    </div>
@endisland
```

--------------------------------

### Testing File Uploads with Livewire

Source: https://livewire.laravel.com/docs/4.x/uploads

Laravel's built-in file upload testing helpers can be used to test Livewire components. This example demonstrates testing an `UploadPhoto` component.

```php
<?php

namespace Tests\Feature\Livewire;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Livewire\UploadPhoto;
use Livewire\Livewire;
use Tests\TestCase;

class UploadPhotoTest extends TestCase
{
    public function test_can_upload_photo()
    {
        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.png');

        Livewire::test(UploadPhoto::class)
            ->set('photo', $file)
            ->call('upload', 'uploaded-avatar.png');

        Storage::disk('avatars')->assertExists('uploaded-avatar.png');
    }
}

```

--------------------------------

### Define Route with Model Parameter (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Example of defining a route with a model parameter (e.g., '{post}') in Laravel's `routes/web.php` file, enabling route model binding for Livewire components.

```php
<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/posts/{post}', 'pages::show-post');
```

--------------------------------

### Update Component Imports (PHP)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Demonstrates how to update component imports when migrating from Volt to Livewire v4. This involves changing the namespace from `LivewireVoltComponent` to `LivewireComponent`.

```php
// Before (Volt)
use Livewire\Volt\Component;

new class extends Component { ... }

// After (Livewire v4)
use Livewire\Component;

new class extends Component { ... }
```

--------------------------------

### Render Namespaced Livewire Component in Blade

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates rendering a Livewire component that uses a namespace prefix, indicated by a colon. This is useful for organizing components within larger applications.

```blade
<livewire:pages::post.create />
```

--------------------------------

### Deferred Loading (Livewire Component)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Shows how to configure deferred loading for Livewire components, ensuring they load immediately after the initial page load, either via template or component attribute.

```html
<livewire:revenue defer />
```

```php
#[Defer]
class Revenue extends Component { ... }
```

--------------------------------

### Creating Class-Based Livewire Components

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates the Artisan command to generate a new class-based Livewire component. This process creates both the PHP class file and its corresponding Blade view file in their conventional locations.

```shell
php artisan make:livewire CreatePost --class
```

--------------------------------

### Redirect to Controller Action

Source: https://livewire.laravel.com/docs/4.x/redirecting

This example demonstrates redirecting to a route handled by a specific controller action using `redirectAction()`. You can pass parameters to the controller action as the second argument.

```php
// Redirect to the index method of UserController
$this->redirectAction([UserController::class, 'index']);

// Redirect to the show method of UserController with parameters
$this->redirectAction([UserController::class, 'show'], ['id' => 1]);
```

--------------------------------

### Initialize Component Properties with `boot()` in Livewire

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

The `boot()` method in Livewire runs at the beginning of every request to the server for a component. It's useful for initializing protected properties, like setting up an Eloquent model before it's used. Ensure sensitive properties like `$postId` are locked using `#[Locked]` to prevent client-side tampering.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Attributes\Locked;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Locked]
    public $postId = 1;

    protected Post $post;

    public function boot() // [tl! highlight:3]
    {
        $this->post = Post::find($this->postId);
    }

    // ...
};
```

--------------------------------

### CSP Headers for Livewire CSP-Safe Build (HTTP Header)

Source: https://livewire.laravel.com/docs/4.x/csp

Example Content Security Policy (CSP) headers configured for Livewire's CSP-safe build. This configuration avoids 'unsafe-eval' and utilizes nonce-based script loading for enhanced security.

```http
Content-Security-Policy: default-src 'self';
                        script-src 'nonce-[random]' 'strict-dynamic';
                        style-src 'self' 'unsafe-inline';
```

--------------------------------

### Use Route::livewire for Full-Page Components

Source: https://livewire.laravel.com/docs/4.x/upgrading

In Livewire v4, the recommended routing method for full-page components is `Route::livewire()`. This method is now the preferred approach for all component types, including single-file and view-based components.

```php
// Before (v3) - still works but not recommended
// Route::get('/dashboard', Dashboard::class);

// After (v4) - recommended for all component types
Route::livewire('/dashboard', Dashboard::class);

// For view-based components, you can use the component name
Route::livewire('/dashboard', 'pages::dashboard');
```

--------------------------------

### Initialize Component Properties with mount() in Livewire

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

The `mount()` method is used in Livewire components to initialize component properties when the component is first created. It replaces the traditional PHP `__construct()` for this purpose. This example shows initializing 'name' and 'email' properties using the authenticated user's data.

```php
<?php // resources/views/components/profile/edit.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component {
    public $name;

    public $email;

    public function mount()
    {
        $this->name = Auth::user()->name;

        $this->email = Auth::user()->email;
    }

    // ...
};

```

--------------------------------

### Receive Props in Livewire Component's mount() Method

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to receive props passed from a Blade view within the `mount()` method of a Livewire component. The `mount()` method acts like a constructor for the component.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $title;

    public function mount($title = null)
    {
        $this->title = $title;
    }

    // ...
};

```

--------------------------------

### Livewire Component for Transition Types (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This PHP Livewire component demonstrates setting transition types ('forward' or 'backward') using the $this->transition() method. This is useful for step-by-step interfaces where animations should differ based on the direction of navigation.

```php
class Wizard extends Component
{
    public $step = 1;

    public function goToStep($step)
    {
        $this->transition(type: $step > $this->step ? 'forward' : 'backward');

        $this->step = $step;
    }
}
```

--------------------------------

### Prefixing Livewire Trait Hooks

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

This example demonstrates how to use Livewire lifecycle hooks within a trait by prefixing them with the trait's name. This prevents method name collisions when multiple traits are used in a component.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    use HasPostForm;

    // ...
};

```

```php
trait HasPostForm
{
    public $title = '';

    public $content = '';

    public function mountHasPostForm()
    {
        // ...
    }

    public function hydrateHasPostForm()
    {
        // ...
    }

    public function bootHasPostForm()
    {
        // ...
    }

    public function updatingHasPostForm()
    {
        // ...
    }

    public function updatedHasPostForm()
    {
        // ...
    }

    public function renderingHasPostForm()
    {
        // ...
    }

    public function renderedHasPostForm()
    {
        // ...
    }

    public function dehydrateHasPostForm()
    {
        // ...
    }

    // ...
}

```

--------------------------------

### Create Livewire Component (Shell)

Source: https://livewire.laravel.com/docs/4.x/components

This command generates a new single-file Livewire component. It utilizes the `make:livewire` Artisan command and specifies the component's name. The output is a PHP class and a Blade template, typically located in `resources/views/components/`.

```shell
php artisan make:livewire post.create
```

--------------------------------

### Implement `wire:navigate` for Links

Source: https://livewire.laravel.com/docs/4.x/navigate

This example shows how to apply the `wire:navigate` attribute to anchor tags in a Blade template. When a user clicks these links, Livewire intercepts the request, fetches the new page's content asynchronously, and updates the DOM without a full page reload.

```html
<nav>
    <a href="/" wire:navigate>Dashboard</a>
    <a href="/posts" wire:navigate>Posts</a>
    <a href="/users" wire:navigate>Users</a>
</nav>
```

--------------------------------

### Implement Lifecycle Hooks in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This section demonstrates using Livewire Volt's functions to hook into a component's lifecycle. It includes examples for `boot`, `booted`, `mount`, `hydrate`, and `dehydrate` hooks, allowing code execution at specific stages of a component's life.

```php
use function Livewire\Volt\{boot, booted, mount, hydrate, dehydrate, updating, updated};

boot(fn () => /* ... */);
booted(fn () => /* ... */);
mount(fn () => /* ... */);
hydrate(fn () => /* ... */);
hydrate(['count' => fn () => /* ... */]);
dehydrate(fn () => /* ... */);
dehydrate(['count' => fn () => /* ... */]);
updating(['count' => fn () => /* ... */]);
updated(['count' => fn () => /* ... */]);
```

--------------------------------

### Manually Bundle Livewire and Alpine.js Assets

Source: https://livewire.laravel.com/docs/4.x/installation

This demonstrates how to manually bundle Livewire and Alpine.js assets in your `resources/js/app.js` file. It requires adding the `@livewireScriptConfig` directive to your layout and importing/starting Livewire and Alpine, allowing for custom Alpine.js plugins and initialization control.

```javascript
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'

Alpine.plugin(Clipboard)

Livewire.start()
```

--------------------------------

### Basic #[Url] Usage in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Demonstrates the basic application of the #[Url] attribute to a component property. This property (`$search`) will be automatically synced with the URL's query string. When the input value changes, the URL updates, and on page reload, the URL's query parameter initializes the property. This example requires Livewire and a User model with a `search` method.

```php
<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    #[Url]
    public $search = '';

    #[Computed]
    public function users()
    {
        return User::search($this->search)->get();
    }
};
?>
```

--------------------------------

### Displaying Loading Indicator for File Uploads with Blade

Source: https://livewire.laravel.com/docs/4.x/uploads

This example demonstrates how to show a 'Uploading...' message while a file is being uploaded using Livewire's `wire:loading` directive. The indicator is specifically targeted to appear only when the 'photo' file upload is in progress.

```blade
<input type="file" wire:model="photo">

<div wire:loading wire:target="photo">Uploading...</div>
```

--------------------------------

### Render Livewire Component Using Custom Namespace

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to render a Livewire component that resides in a custom namespace within a Blade view. The namespace is used as a prefix before the component name.

```blade
<livewire:admin::users-table />

```

--------------------------------

### Livewire Component for File Upload Testing

Source: https://livewire.laravel.com/docs/4.x/uploads

This is a basic Livewire component structure required for the file upload testing example. It includes a method to store the uploaded file to a specified disk.

```php
<?php

use Livewire\WithFileUploads;
use Livewire\Component;

new class extends Component {
    use WithFileUploads;

    public $photo;

    public function upload($name)
    {
        $this->photo->storeAs('/', $name, disk: 'avatars');
    }

    // ...
};

```

--------------------------------

### Common @persist Use Cases in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Illustrates common scenarios for the @persist directive, including audio/video players, chat widgets, and third-party widgets. Each example uses a unique key to ensure proper state preservation for its respective component.

```blade
@persist('podcast-player')
    <audio src="{{ $episode->audio_url }}" controls></audio>
@endpersist

@persist('support-chat')
    <div id="chat-widget">
        <!-- Chat interface... -->
    </div>
@endpersist

@persist('analytics-widget')
    <div id="analytics-dashboard">
        <!-- Complex widget that's expensive to initialize... -->
    </div>
@endpersist
```

--------------------------------

### Livewire Polling Interval Control (Seconds)

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Illustrates how to manually control the polling interval by specifying the duration in seconds. This example sets the polling interval to 15 seconds.

```blade
<div wire:poll.15s>
</div>
```

--------------------------------

### Livewire `wire:loading` directive syntax

Source: https://livewire.laravel.com/docs/4.x/wire-loading

This section outlines the basic syntax for the `wire:loading` directive in Livewire, which is an alternative to using `data-loading` attributes for managing loading states. It includes examples for targeting specific actions or properties.

```blade
wire:loading
wire:target="action"
wire:target="property"
wire:target.except="action"
```

--------------------------------

### Dynamic wire:ref in Loops (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-ref

Illustrates how to use 'wire:ref' dynamically within loops to assign unique references to multiple instances of the same component. This example uses user IDs to create distinct refs for modal components.

```html
@foreach($users as $index => $user)
    <livewire:modal
        wire:key="{{ $user->id }}"
        wire:ref="{{ 'user-modal-' . $user->id }}"
    >
        <!-- ... -->
    </livewire:modal>
@endforeach
```

--------------------------------

### Include Livewire Scripts for Alpine.js

Source: https://livewire.laravel.com/docs/4.x/installation

Ensure Alpine.js is available on pages without Livewire components by including `@livewireScripts`. This is necessary because Alpine.js is bundled with Livewire. Manually bundling Livewire and Alpine is an alternative.

```blade
<!DOCTYPE html>
<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <!-- No Livewire components, but we want Alpine -->
        <div x-data="{ open: false }">
            <button @click="open = !open">Toggle</button>
        </div>

        @livewireScripts
    </body>
</html>
```

--------------------------------

### Toggling Attributes with wire:loading (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Explains how to toggle HTML attributes on an element during a server request using `wire:loading.attr`. This example disables a button while an action is being processed, useful for non-form elements.

```blade
<button
    type="button"
    wire:click="remove"
    wire:loading.attr="disabled">
    Remove
</button>
```

--------------------------------

### Livewire Polling Interval Control (Milliseconds)

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Demonstrates how to set the polling interval using milliseconds. This example configures the component to poll every 15000 milliseconds (15 seconds).

```blade
<div wire:poll.15000ms>
</div>
```

--------------------------------

### Toggling Classes with wire:loading (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Shows how to dynamically add or remove CSS classes to an element during a server request using `wire:loading.class`. This example uses Tailwind CSS to apply an `opacity-50` class while a button is active.

```blade
<button wire:loading.class="opacity-50">Save</button>
```

```blade
<button class="bg-blue-500" wire:loading.class.remove="bg-blue-500">
    Save
</button>
```

--------------------------------

### Configure Component Namespaces in Livewire v4

Source: https://livewire.laravel.com/docs/4.x/upgrading

The 'component_namespaces' configuration option in Livewire v4 enables the creation of custom namespaces for view-based components, facilitating organization like 'pages::dashboard'.

```php
'component_namespaces' => [
    'layouts' => resource_path('views/layouts'),
    'pages' => resource_path('views/pages'),
]
```

--------------------------------

### Update Livewire Layout Configuration

Source: https://livewire.laravel.com/docs/4.x/upgrading

The layout configuration key has changed from 'layout' in v3 to 'component_layout' in v4. The default namespace for layouts has also been updated to 'layouts::', pointing to resources/views/layouts/app.blade.php.

```php
// Before (v3)
'layout' => 'components.layouts.app',

// After (v4)
'component_layout' => 'layouts::app'
```

--------------------------------

### Using an Alias for #[Url] Properties

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Shows how to use the `as` parameter within the #[Url] attribute to specify a custom name for the query parameter in the URL. This is useful for shortening or obfuscating the property name. For example, setting `as: 'q'` will make the URL use `?q=value` instead of `?propertyName=value`.

```php
<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    #[Url(as: 'q')]
    public $search = '';
};
?>
```

--------------------------------

### Update Livewire Streaming Method Signature (PHP)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Demonstrates the change in parameter order and naming for the `stream()` method in Livewire v4.x compared to v3.x. The `to` parameter is now `el` and positional/named parameter usage has been updated.

```php
// Before (v3)
$this->stream(to: '#container', content: 'Hello', replace: true);

// After (v4)
$this->stream(content: 'Hello', replace: true, el: '#container');

// Before (v3) - positional parameters
$this->stream('#container', 'Hello');

// After (v4) - positional/named parameters
$this->stream('Hello', el: '#container');
```

--------------------------------

### Livewire Component Initialization Hook (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Shows how to use the `component.init` hook provided by Livewire. This hook is triggered every time a new Livewire component is initialized, allowing for custom setup or interception logic for the component.

```javascript
Livewire.hook('component.init', ({ component, cleanup }) => {
    //
})
```

--------------------------------

### Handling Nullable Properties with #[Url]

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Explains how to use nullable type hints (e.g., `?string`) with #[Url] properties. When a property is declared as nullable, empty query parameters in the URL will be interpreted as `null` instead of an empty string, providing more precise state management.

```php
<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    #[Url]
    public ?string $search;
};
?>
```

--------------------------------

### Convert Livewire Component Format (Shell)

Source: https://livewire.laravel.com/docs/4.x/components

The `livewire:convert` Artisan command facilitates switching between single-file and multi-file component formats. Running it without flags auto-detects the current format and converts to the other. Explicit flags `--mfc` (to multi-file) and `--sfc` (to single-file) can be used for direct conversion.

```shell
php artisan livewire:convert post.create
```

```shell
php artisan livewire:convert post.create --mfc
```

```shell
php artisan livewire:convert post.create --sfc
```

--------------------------------

### Publishing and Customizing Livewire Component Stubs

Source: https://livewire.laravel.com/docs/4.x/components

Details the Artisan command to publish Livewire's component stubs, allowing for customization of generated files. It lists the different stub files available for single-file, multi-file, and class-based components, as well as additional stubs.

```shell
php artisan livewire:stubs
```

--------------------------------

### Trigger Basic File Download with Storage Facade (PHP)

Source: https://livewire.laravel.com/docs/4.x/downloads

Illustrates initiating a file download using Laravel's `Storage` facade within a Livewire component. This method is useful when files are managed by Laravel's storage system. The `download` method of the storage disk is called with the file's key and an optional filename.

```php
public function download()
{
    return Storage::disk('invoices')->download('invoice.csv');
}

```

--------------------------------

### Test Component Existence on a Page

Source: https://livewire.laravel.com/docs/4.x/testing

An example of a 'smoke test' that verifies if a Livewire component is included and rendered successfully on a specific page endpoint. This helps ensure basic page functionality.

```php
it('component exists on the page', function () {
    $this->get('/posts/create')
        ->assertSeeLivewire('post.create');
});
```

--------------------------------

### Define Validation Rules in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This example shows how to define validation rules for Livewire components using Volt's `rules` function. It includes static rules, dynamic rules using closures, and how to chain `messages` and `attributes` for custom error handling.

```php
<?php

use function Livewire\Volt\{rules};

rules(['name' => 'required|min:6', 'email' => 'required|email']);

$submit = function () {
    $this->validate();

    // ...
};

?>

<form wire:submit.prevent="submit">
    //
</form>

rules(fn () => [
    'name' => ['required', 'min:6'],
    'email' => ['required', 'email', 'not_in:'.Auth::user()->email]
]);

rules(['name' => 'required|min:6', 'email' => 'required|email'])
    ->messages([
        'email.required' => 'The :attribute may not be empty.',
        'email.email' => 'The :attribute format is invalid.',
    ])->attributes([
        'email' => 'email address',
    ]);
```

--------------------------------

### Using Session Flash Data with Redirect

Source: https://livewire.laravel.com/docs/4.x/redirecting

This example shows how to use Laravel's session flash data utilities in conjunction with Livewire redirects. A message is flashed to the session before redirecting, which can then be displayed on the target page.

```php
<?php

use Livewire\Component;

new class extends Component {
    // ...

    public function update()
    {
        // ...

        session()->flash('status', 'Post successfully updated.');

        $this->redirect('/posts');
    }
};
?>
```

```blade
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
```

--------------------------------

### Livewire wire:bind:data-* Example

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Shows the usage of wire:bind:data-* to dynamically bind data attributes to an HTML element. This is useful for attaching custom data reactively.

```blade
<div wire:bind:data-count="count">...</div>
```

--------------------------------

### Implement Confirmation Prompt with Input Matching in Livewire Blade

Source: https://livewire.laravel.com/docs/4.x/wire-confirm

This example shows how to use the `.prompt` modifier with `wire:confirm` to ask the user for specific input before executing an action. The action will only be performed if the user types the exact, case-sensitive string specified after the pipe character.

```blade
<button
    type="button"
    wire:click="delete"
    wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE"
>
    Delete account
</button>
```

--------------------------------

### Configure Component Locations in Livewire v4

Source: https://livewire.laravel.com/docs/4.x/upgrading

Livewire v4 introduces the 'component_locations' configuration option to specify directories for single-file and view-based components. This allows for better organization of your component views.

```php
'component_locations' => [
    resource_path('views/components'),
    resource_path('views/livewire'),
]
```

--------------------------------

### PHP Livewire Component: Todos Example

Source: https://livewire.laravel.com/docs/4.x/morphing

A simple Livewire component demonstrating state management for a todo list. It defines properties for the current todo input and an array of existing todos, along with a method to add new todos to the list.

```php
class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'first',
        'second',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;
    }
}
```

--------------------------------

### Define a basic Customer class

Source: https://livewire.laravel.com/docs/4.x/properties

This snippet shows a simple PHP class representing a customer with name and age properties. It serves as a foundational example for demonstrating Livewire's Wireable interface.

```php
class Customer
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
```

--------------------------------

### Registering Custom Alpine Directive in Livewire Build

Source: https://livewire.laravel.com/docs/4.x/alpine

Shows an example of registering a custom Alpine.js directive ('x-clipboard') within the manual JavaScript bundling process for Livewire applications. This makes the custom directive available globally across all Alpine components.

```javascript
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.directive('clipboard', (el) => {
    let text = el.textContent

    el.addEventListener('click', () => {
        navigator.clipboard.writeText(text)
    })
})

Livewire.start()
```

--------------------------------

### Placeholder HTML with placeholder() Method (Livewire)

Source: https://livewire.laravel.com/docs/4.x/lazy

Demonstrates how to define a `placeholder()` method within a Livewire component's class to programmatically return HTML for the loading state. This method can return simple HTML strings or even a view for more complex placeholders.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaction;

class Revenue extends Component
{
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.revenue');
    }
}

```

```php
public function placeholder(array $params = [])
{
    return view('livewire.placeholders.skeleton', $params);
}
```

--------------------------------

### Accessing Livewire Properties with $wire in Alpine.js

Source: https://livewire.laravel.com/docs/4.x/alpine

Demonstrates how to use the $wire magic object within Alpine.js to access and display Livewire component properties in real-time. This example shows a character counter for a post content input, updating instantly as the user types.

```html
<form wire:submit="save">
    <!-- ... -->

    <input wire:model="content" type="text">

    <small>
        Character count: <span x-text="$wire.content.length"></span>
    </small>

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Livewire Polling with Custom Action

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Shows how to specify a custom action to be triggered on each polling interval using `wire:poll`. In this example, the `refreshSubscribers` method on the component is called every 2.5 seconds.

```blade
<div wire:poll="refreshSubscribers">
    Subscribers: {{ $count }}
</div>
```

--------------------------------

### Livewire wire:bind:href Example

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Illustrates binding the href attribute of an anchor tag dynamically using wire:bind:href. This allows the link's destination to be updated reactively.

```blade
<a wire:bind:href="url">Dynamic link</a>
```

--------------------------------

### Livewire Component Exception Hook Example

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

Illustrates the use of the exception() hook in a Livewire component to intercept and handle errors. This hook allows for custom error messages and can prevent further execution using $stopPropagation.

```php
<?php

use Livewire\Component;

new class extends Component {
    public function mount() 
    {
        $this->post = Post::find($this->postId);
    }

    public function exception($e, $stopPropagation) {
        if ($e instanceof NotFoundException) {
            $this->notify('Post is not found');
            $stopPropagation();
        }
    }

    // ...
};

```

--------------------------------

### Pass Data from render() Method in Livewire

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to pass data from the `render()` method to the component's view in Livewire. This is similar to how controllers pass data to views, allowing direct injection of variables.

```php
public function render()
{
    return $this->view([
        'author' => Auth::user(),
        'currentTime' => now(),
    ]);
}

```

--------------------------------

### Importing Livewire and Alpine in Custom JavaScript Build

Source: https://livewire.laravel.com/docs/4.x/alpine

Provides the JavaScript code required to import and start Livewire and Alpine when manually bundling them into your application's JavaScript build. This allows for custom Alpine directives, components, and plugins.

```javascript
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

// Register any Alpine directives, components, or plugins here...

Livewire.start()
```

--------------------------------

### Automatic Prop Assignment in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates how Livewire can automatically assign props to public component properties if the property name matches the prop name, reducing the need for an explicit `mount()` method for simple assignments.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $title; // Automatically set from prop

    // ...
};

```

--------------------------------

### Create Multi-File Livewire Component (Shell)

Source: https://livewire.laravel.com/docs/4.x/components

This command generates a Livewire component using the multi-file format. The `--mfc` flag instructs Livewire to create a dedicated directory for the component, separating its PHP, Blade, JavaScript, CSS, and test files for better organization and IDE support.

```shell
php artisan make:livewire post.create --mfc
```

--------------------------------

### Storing Uploaded Files in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/uploads

Examples of various methods to store uploaded files within a Livewire component. This includes storing to the default disk, a specified disk (like S3), with custom filenames, and publicly.

```php
public function save()
{
    // Store the file in the "photos" directory of the default filesystem disk
    $this->photo->store(path: 'photos');

    // Store the file in the "photos" directory in a configured "s3" disk
    $this->photo->store(path: 'photos', options: 's3');

    // Store the file in the "photos" directory with the filename "avatar.png"
    $this->photo->storeAs(path: 'photos', name: 'avatar');

    // Store the file in the "photos" directory in a configured "s3" disk with the filename "avatar.png"
    $this->photo->storeAs(path: 'photos', name: 'avatar', options: 's3');

    // Store the file in the "photos" directory, with "public" visibility in a configured "s3" disk
    $this->photo->storePublicly(path: 'photos', options: 's3');

    // Store the file in the "photos" directory, with the name "avatar.png", with "public" visibility in a configured "s3" disk
    $this->photo->storePubliclyAs(path: 'photos', name: 'avatar', options: 's3');
}
```

--------------------------------

### Access Public Property in Blade Template

Source: https://livewire.laravel.com/docs/4.x/components

Shows how to display a public component property within a Livewire Blade template. The property is directly accessible using double curly braces for interpolation.

```blade
<div>
    <h1>{{ $title }}</h1>
</div>

```

--------------------------------

### Real-time Validation with #[Validate] and rules() Method

Source: https://livewire.laravel.com/docs/4.x/validation

This example shows how to implement real-time validation in a Livewire component when using a `rules()` method to define validation logic. The presence of an empty `#[Validate]` attribute on a property instructs Livewire to apply the validation rules defined in the `rules()` method whenever that property's value is updated.

```php
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    #[Validate] // [tl! highlight]
	public $title = '';

    public $content = '';

    protected function rules()
    {
        return [
            'title' => 'required|min:5',
            'content' => 'required|min:5',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

		Post::create($validated);

		return redirect()->to('/posts');
    }
}
```

--------------------------------

### Declare Protected Property in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Illustrates declaring a protected property within a Livewire component. Protected properties require the '$this->' prefix for access within the component and are not sent to the client.

```php
public $title = 'My Post';           // Available as {{ $title }}
protected $apiKey = 'secret-key';    // Available as {{ $this->apiKey }}

```

--------------------------------

### Unsupported Middleware Arguments in Livewire

Source: https://livewire.laravel.com/docs/4.x/security

Illustrates the limitation in Livewire regarding middleware arguments for persistent middleware definitions, showing the incorrect way to pass arguments and the correct way to define middleware without them.

```php
// Bad...
Livewire::addPersistentMiddleware(AuthorizeResource::class.':admin');

// Good...
Livewire::addPersistentMiddleware(AuthorizeResource::class);
```

--------------------------------

### Pass Dynamic Prop to Livewire Component in Blade

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates passing a dynamic value, typically from a Blade variable, as a prop to a Livewire component using a colon prefix. This allows for reactive data passing.

```blade
<livewire:post.create :title="$initialTitle" />
```

--------------------------------

### Initialize Livewire Component Properties with mount()

Source: https://livewire.laravel.com/docs/4.x/properties

Demonstrates how to set initial values for Livewire component properties within the mount() method. This is useful for populating lists or setting default states when a component first renders.

```php
<?php // resources/views/components/⚡todos.blade.php

use Livewire\Component;

new class extends Component {
    public $todos = [];

    public $todo = '';

    public function mount()
    {
        $this->todos = ['Buy groceries', 'Walk the dog', 'Write code']; // [tl! highlight]
    }

    // ...
};

```

--------------------------------

### Alpine.js for Toggling Content Visibility in Livewire

Source: https://livewire.laravel.com/docs/4.x/alpine

An example of using Alpine.js within a Livewire component to control the visibility of post content. It uses an 'expanded' state to toggle between showing and hiding content, offering interactivity without server-roundtrips.

```html
<div>
    <h1>{{ $post->title }}</h1>

    <div x-data="{ expanded: false }">
        <button type="button" x-on:click="expanded = ! expanded">
            <span x-show="! expanded">Show post content...</span>
            <span x-show="expanded">Hide post content...</span>
        </button>

        <div x-show="expanded">
            {{ $post->content }}
        </div>
    </div>
</div>
```

--------------------------------

### Basic Alpine.js Counter Component

Source: https://livewire.laravel.com/docs/4.x/alpine

A simple Alpine.js component demonstrating a counter. It initializes a 'count' state and provides a button to increment it. This component can be directly embedded within Livewire applications without separate installation.

```html
<div x-data="{ count: 0 }">
    <h2 x-text="count"></h2>
    <button x-on:click="count++">+</button>
</div>
```

--------------------------------

### Livewire Component Hydrate and Dehydrate Example

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

Demonstrates using hydrate() and dehydrate() hooks in a Livewire component to manage a custom Data Transfer Object (DTO) for post data. This method is an alternative to using Wireables or Synthesizers.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $post;

    public function mount($title, $content)
    {
        // Runs at the beginning of the first initial request...

        $this->post = new PostDto([
            'title' => $title,
            'content' => $content,
        ]);
    }

    public function hydrate()
    {
        // Runs at the beginning of every "subsequent" request...
        // This doesn't run on the initial request ("mount" does)...

        $this->post = new PostDto($this->post);
    }

    public function dehydrate()
    {
        // Runs at the end of every single request...

        $this->post = $this->post->toArray();
    }

    // ...
};

```

--------------------------------

### Remove Volt Service Provider (Bash)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Instructions for removing the Volt service provider from a Laravel application during the Livewire v4 upgrade. This involves deleting the provider file and removing its entry from `bootstrap/providers.php`.

```bash
rm app/Providers/VoltServiceProvider.php
```

```php
// Before
return [
    App\Providers\AppServiceProvider::class,
    App\Providers\VoltServiceProvider::class,
];

// After
return [
    App\Providers\AppServiceProvider::class,
];
```

--------------------------------

### Composer Script for Publishing Assets

Source: https://livewire.laravel.com/docs/4.x/installation

Automate the publishing of Livewire assets upon running `composer update`. This ensures that your `public` directory contains the latest Livewire JavaScript files, useful for CDN distribution or specific caching strategies.

```json
{
    "scripts": {
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=livewire:assets --ansi --force"
        ]
    }
}
```

--------------------------------

### Create Volt Component with Artisan (Bash)

Source: https://livewire.laravel.com/docs/4.x/volt

Artisan commands to generate new Volt components. The `--test` and `--pest` flags can be used to automatically generate corresponding test files, with `--pest` specifically for Pest testing framework.

```bash
php artisan make:volt counter
php artisan make:volt counter --test --pest
php artisan make:volt counter --class
```

--------------------------------

### Livewire wire:bind:class Example

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Demonstrates using wire:bind:class to reactively apply CSS classes based on a component property's value. This updates the class on the client without a full component re-render.

```blade
<input wire:model="message" wire:bind:class="message.length > 240 && 'text-red-500'">
```

--------------------------------

### Using Livewire Global Lifecycle Hooks (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

This JavaScript example demonstrates how to register callbacks for Livewire's global lifecycle hooks using `Livewire.hook()`. This allows you to execute custom code at specific points in Livewire's internal processes, such as when a component is initialized. This provides powerful extensibility for customizing Livewire's behavior.

```javascript
// Register a callback to execute on a given internal Livewire hook...
Livewire.hook('component.init', ({ component, cleanup }) => {
    // ...
})
```

--------------------------------

### Livewire Component with Computed Property and Action

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code demonstrates a Livewire component utilizing a computed property for Eloquent data and includes an example action method ('markAllComplete') that accesses this computed property.

```php
<?php // resources/views/components/⚡show-todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function todos()
    {
        return Auth::user()
            ->todos()
            ->select(['title', 'content'])
            ->get();
    }

    public function markAllComplete() // [tl! highlight:3]
    {
        $this->todos->each->complete();
    }
};

```

--------------------------------

### Target Action Parameters with Livewire Loading

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Shows how to scope `wire:target` to a specific action by including its parameters. This is useful when the same action is triggered with different values from multiple places, ensuring the loading indicator only appears for the matching parameter.

```blade
<div>
    @foreach ($posts as $post)
        <div wire:key="{{ $post->id }}">
            <h2>{{ $post->title }}</h2>

            <button wire:click="remove({{ $post->id }})">Remove</button>

            <div wire:loading wire:target="remove({{ $post->id }})">
                Removing post...
            </div>
        </div>
    @endforeach
</div>
```

--------------------------------

### CSS for Customizing Named Transitions

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This CSS code customizes the appearance of named transitions ('sidebar' in this example) using the View Transitions API's pseudo-elements. It defines 'slide-out' and 'slide-in' animations for the outgoing and incoming elements, respectively.

```css
/* Customize the transition for a specific element */
::view-transition-old(sidebar) {
    animation: 300ms ease-out slide-out;
}

::view-transition-new(sidebar) {
    animation: 300ms ease-in slide-in;
}

@keyframes slide-out {
    to { transform: translateX(-100%); }
}

@keyframes slide-in {
    from { transform: translateX(100%); }
}
```

--------------------------------

### Redirect to Route by Name

Source: https://livewire.laravel.com/docs/4.x/redirecting

This example shows how to redirect to a named route using the `redirectRoute()` method in Livewire. It allows redirection using the route's name, and optionally accepts an array of parameters to pass to the route.

```php
// Redirect to a route named 'profile'
$this->redirectRoute('profile');

// Redirect to a route named 'profile' with parameters
$this->redirectRoute('profile', ['id' => 1]);
```

--------------------------------

### Create Livewire Form Object using Artisan Command

Source: https://livewire.laravel.com/docs/4.x/forms

This command generates a new Livewire form object class. It requires the 'livewire' package to be installed. The command creates a PHP file in the `app/Livewire/Forms` directory.

```shell
php artisan livewire:form PostForm
```

--------------------------------

### Include @alpinejs/ui Plugin via CDN (HTML)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

This snippet demonstrates how to add the @alpinejs/ui plugin using a CDN link in your HTML layout file. This resolves errors related to missing UI components when using Alpine.js headless components with Livewire.

```html
    ...
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.7-beta.0/dist/cdn.min.js"></script> 
</head>
```

--------------------------------

### Configure Livewire Make Command Defaults

Source: https://livewire.laravel.com/docs/4.x/upgrading

Livewire v4 allows configuring the default behavior of the 'make' command, including the component type ('sfc', 'mfc', 'class') and whether to use emoji prefixes. Setting 'type' to 'class' replicates v3 behavior.

```php
'make_command' => [
    'type' => 'sfc',  // Options: 'sfc', 'mfc', or 'class'
    'emoji' => true,   // Whether to use ⚡ emoji prefix
]
```

--------------------------------

### Confirm Action Before Deleting in Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

This example shows how to implement a confirmation prompt before executing a specific Livewire action, such as 'delete'. It uses `$wire.intercept` to check for user confirmation and cancels the action if the user chooses not to proceed. This prevents accidental data loss.

```blade
<script>
    $wire.intercept('delete', ({ action }) => {
        if (!confirm('Are you sure?')) {
            action.cancel()
        }
    })
</script>
```

--------------------------------

### Listening for Key Presses with Aliases (Blade)

Source: https://livewire.laravel.com/docs/4.x/actions

Illustrates using Livewire's key press event listeners with convenient aliases in Blade. This example shows how to trigger a 'searchPosts' action only when the 'Enter' key is pressed while typing in an input field.

```blade
<input wire:model="query" wire:keydown.enter="searchPosts">
```

--------------------------------

### PHP: Authorize Livewire Action Parameter (Insecure Example)

Source: https://livewire.laravel.com/docs/4.x/security

Demonstrates an insecure way to handle Livewire action parameters. The `delete` method directly uses a passed ID without authorization, making it vulnerable to manipulation. Any user can potentially delete any post by modifying the `wire:click` directive.

```php
<?php

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    // ...

    public function delete($id)
    {
        // INSECURE!

        $post = Post::find($id);

        $post->delete();
    }
}

```

```html
<button wire:click="delete({{ $post->id }})">Delete Post</button>

```

--------------------------------

### Simulating URL Query Parameters in Livewire Tests

Source: https://livewire.laravel.com/docs/4.x/testing

Use `withQueryParams()` to simulate URL query string parameters for Livewire components that utilize the URL feature. This allows testing how your component reacts to changes in the URL, such as search filters.

```php
use App\Models\Post;

it('can search posts via url query string', function () {
    Post::factory()->create(['title' => 'Laravel testing']);
    Post::factory()->create(['title' => 'Vue components']);

    Livewire::withQueryParams(['search' => 'Laravel'])
        ->test('search-posts')
        ->assertSee('Laravel testing')
        ->assertDontSee('Vue components');
});
```

--------------------------------

### Access Computed Property in Blade Template

Source: https://livewire.laravel.com/docs/4.x/components

Demonstrates accessing a computed property within a Livewire Blade template. The computed property is called using the '$this->' prefix, triggering its execution and caching the result.

```blade
<div>
    @foreach ($this->posts as $post)
        <article wire:key="{{ $post->id }}">{{ $post->title }}</article>
    @endforeach
</div>

```

--------------------------------

### Test File Download Assertion in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/downloads

Provides an example of testing file downloads in Livewire using the `->assertFileDownloaded()` method. This assertion verifies that a file download was triggered with the specified filename after a component action. It's part of Livewire's testing utilities.

```php
use App\Models\Invoice;

public function test_can_download_invoice()
{
    $invoice = Invoice::factory();

    Livewire::test(ShowInvoice::class)
        ->call('download')
        ->assertFileDownloaded('invoice.pdf');
}

```

--------------------------------

### Pass Static Prop to Livewire Component in Blade

Source: https://livewire.laravel.com/docs/4.x/components

Explains how to pass a static string value as a prop to a Livewire component using attribute assignment on the component tag. This prop can be accessed within the component.

```blade
<livewire:post.create title="Initial Title" />
```

--------------------------------

### Livewire Nullable Property from URL (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Shows how to define a nullable Livewire property synchronized with the URL using `#[Url]` and a nullable type hint (e.g., `?string`). This ensures that URL parameters like `?search=` are correctly interpreted as `null` instead of an empty string. It also covers setting the property to `null` programmatically.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url]
    public ?string $search; // [tl! highlight]

    // ...
}

```

--------------------------------

### Blade Template with Form Object Properties

Source: https://livewire.laravel.com/docs/4.x/validation

Provides an example of how to reference properties of a Form Object within a Blade template. Input fields and error messages must be prefixed with `form.` (e.g., `form.title`, `@error('form.title')`).

```blade
<form wire:submit="save">
	<input type="text" wire:model="form.title">
    <div>@error('form.title') {{ $message }} @enderror</div>

	<textarea wire:model="form.content"></textarea>
    <div>@error('form.content') {{ $message }} @enderror</div>

	<button type="submit">Save</button>
</form>
```

--------------------------------

### Displaying File Upload Progress with Alpine.js and Blade

Source: https://livewire.laravel.com/docs/4.x/uploads

This example integrates Alpine.js with Livewire to display a visual progress bar during file uploads. It listens to Livewire's JavaScript upload events (`livewire-upload-progress`) to update the progress bar's value, providing real-time feedback to the user.

```blade
<form wire:submit="save">
    <div
        x-data="{ uploading: false, progress: 0 }"
        x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false"
        x-on:livewire-upload-cancel="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"
    >
        <!-- File Input -->
        <input type="file" wire:model="photo">

        <!-- Progress Bar -->
        <div x-show="uploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
    </div>

    <!-- ... -->
</form>
```

--------------------------------

### Create Anonymous Volt Components in Blade Views

Source: https://livewire.laravel.com/docs/4.x/volt

This example demonstrates how to embed a functional Livewire Volt component directly within a Blade view using the `@volt` directive. This is useful for creating small, self-contained components without requiring separate PHP files.

```php
<?php

use function Livewire\Volt\state;

state(['count' => 0]);

$increment = fn () => $this->count++;

?>

<x-app-layout>
    <x-slot name="header">
        Counter
    </x-slot>

    @volt('counter')
        <div>
            <h1>{{ $count }}</h1>
            <button wire:click="increment">+</button>
        </div>
    @endvolt
</x-app-layout>
```

--------------------------------

### Access DOM Elements with $refs via wire:ref (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/wire-ref

Shows how to access HTML elements with a 'wire:ref' attribute using the JavaScript `$refs` magic property. This example implements a character counter for a textarea.

```html
<div>
    <textarea wire:model="message" wire:ref="message"></textarea>

    Characters: <span wire:ref="count">0</span>

    <!-- ... -->
</div>
```

```javascript
this.$refs.message.addEventListener('input', (e) => {
    this.$refs.count.textContent = e.target.value.length
})
```

--------------------------------

### PHP: Authorize Livewire Public Property (Secure Example - Model Binding)

Source: https://livewire.laravel.com/docs/4.x/security

Presents a secure approach to handling public properties in Livewire by using model binding. Storing the entire model instance (`Post $post`) as a property prevents malicious users from tampering with the ID, as Livewire handles model integrity automatically.

```php
<?php

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public Post $post;

    public function mount($postId)
    {
        $this->post = Post::find($postId);
    }

    public function delete()
    {
        $this->post->delete();
    }
}

```

```html
<button wire:click="delete">Delete Post</button>

```

--------------------------------

### Livewire Island Skip Initial Render

Source: https://livewire.laravel.com/docs/4.x/islands

Demonstrates using the `skip: true` parameter to prevent a Livewire island from rendering initially. A placeholder is shown instead, and the island content loads on demand when a user interaction triggers it.

```blade
@island(skip: true)
    @placeholder
        <button type="button" wire:click="$refresh">
            Load revenue details
        </button>
    @endplaceholder

    <div>
        Revenue: {{ $this->revenue }}

        <button type="button" wire:click="$refresh">Refresh</button>
    </div>
@endisland
```

--------------------------------

### HTML Structure After Teleporting

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Illustrates the resulting HTML structure after a portion of the template has been teleported. This example shows how the content originally wrapped by @teleport is rendered at the end of the 'body' tag, independent of its initial placement in the component's structure.

```html
<body>
    <!-- Page content... -->

    <div x-show="open">
        Modal contents...
    </div>
</body>
```

--------------------------------

### Bundling Deferred Component Requests (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-defer

Demonstrates how to bundle multiple deferred Livewire components into a single network request using the `bundle: true` parameter within the `#[Defer]` attribute. This can reduce the number of HTTP requests when multiple deferred components are present on a page.

```php
<?php 

use Livewire\Attributes\Defer;
use Livewire\Component;

new #[Defer(bundle: true)] class extends Component {
    // ...
};
?>
```

--------------------------------

### Update Livewire Component Mount Signature (PHP)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Shows the modification to the `mount()` method signature in Livewire v4.x, which now includes an additional `$slots` parameter to support passing slots during component mounting. This change primarily affects internal LivewireManager extensions.

```php
// Before (v3)
public function mount($name, $params = [], $key = null)

// After (v4)
public function mount($name, $params = [], $key = null, $slots = [])
```

--------------------------------

### Pass Route Model Bound Parameter as Prop to Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Shows how Livewire supports Laravel's route model binding, allowing a model instance to be directly passed as a prop to the Livewire component without explicit `mount()` method handling.

```php
Route::livewire('/posts/{post}', 'pages::post.show');

```

```php
<?php // resources/views/pages/post/show.blade.php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public Post $post; // Automatically bound from route

    // No mount() needed - Livewire handles it automatically
};

```

--------------------------------

### Livewire Form Object Update Hooks

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

This example shows how to implement update hooks within a Livewire form object. These hooks allow you to react to property changes within the form, similar to component update hooks.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public PostForm $form;

    // ...
};

```

```php
namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public $title = '';

    public $tags = [];

    public function updating($property, $value)
    {
        // ...
    }

    public function updated($property, $value)
    {
        // ...
    }

    public function updatingTitle($value)
    {
        // ...
    }

    public function updatedTitle($value)
    {
        // ...
    }

    public function updatingTags($value, $key)
    {
        // ...
    }

    public function updatedTags($value, $key)
    {
        // ...
    }

    // ...
}

```

--------------------------------

### Livewire Method to Skip Transitions (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This PHP Livewire method demonstrates how to skip transitions for a specific action using $this->skipTransition(). This is useful for operations like resetting a form or wizard, where an immediate update without animation is desired.

```php
public function reset()
{
    $this->skipTransition();

    $this->step = 1;
}
```

--------------------------------

### Complex Selectors for Loading States

Source: https://livewire.laravel.com/docs/4.x/loading-states

Provides examples of using arbitrary variants in Tailwind CSS for more complex styling scenarios involving the `data-loading` attribute. This includes targeting all direct children and specific descendant elements with loading states.

```blade
<!-- Style all direct children when loading -->
<div class="[&[data-loading]>report-text]:opacity-50" wire:click="save">
    <span class="report-text">Child 1</span>
    <span class="report-text">Child 2</span>
</div>

<!-- Style specific descendant elements -->
<button class="[&[data-loading]_.icon]:animate-spin" wire:click="save">
    <svg class="icon"><!-- spinner --></svg>
    Save
</button>
```

--------------------------------

### Chaining Key Modifiers for Specific Key Combinations (Blade)

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates chaining Livewire key modifiers to listen for specific key combinations. This example shows how to trigger an action only when both the 'Shift' and 'Enter' keys are pressed simultaneously.

```blade
<input wire:keydown.shift.enter="...">
```

--------------------------------

### Define a Simple Increment Action in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Provides an example of defining a basic action named `$increment` in Livewire Volt. This action is triggered by a button click (`wire:click`) and increments a reactive state variable `$count`. It utilizes the `state` function for reactive properties.

```php
<?php

use function Livewire\Volt\state;

state(['count' => 0]);

$increment = fn () => $this->count++;

?>
```

```html
<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
```

--------------------------------

### Livewire wire:intersect Combined Modifiers

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Shows how multiple modifiers can be combined with wire:intersect to create complex triggering logic. This example combines .once, .half, and .margin.100px for precise control over when an action fires.

```blade
<!-- Load when half visible, only once, with 100px margin -->
<div wire:intersect.once.half.margin.100px="loadSection">
    <!-- ... -->
</div>
```

--------------------------------

### Custom Placeholder for Deferred Component (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-defer

Shows how to provide a custom HTML placeholder for a deferred Livewire component using the `placeholder()` method. This replaces the default empty div with custom content, such as a loading spinner, while the component data is being fetched.

```php
<?php 

use Livewire\Attributes\Defer;
use Livewire\Component;
use App\Models\Transaction;

new #[Defer] class extends Component {
    public $amount;

    public function mount()
    {
        $this->amount = Transaction::monthToDate()->sum('amount');
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <svg><!-- Loading spinner... --></svg>
        </div>
        HTML;
    }
};
?>
```

--------------------------------

### Reset Livewire Component Properties with reset()

Source: https://livewire.laravel.com/docs/4.x/properties

Explains how to use the reset() method in Livewire to revert specified properties back to their initial state. This is often used after a user action to clear input fields, for example.

```php
<?php // resources/views/components/⚡todos.blade.php

use Livewire\Component;

new class extends Component {
    public $todos = [];

    public $todo = '';

    public function addTodo()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo'); // [tl! highlight]
    }

    // ...
};

```

--------------------------------

### Render Livewire Component with Properties

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to render a Livewire component, specifically a Volt component, using Livewire's tag syntax and passing properties to it. This is a standard way to include components within Blade views.

```blade
<livewire:user-index :users="$users" />
```

--------------------------------

### Pass Parameters to Livewire Method via Alpine.js

Source: https://livewire.laravel.com/docs/4.x/alpine

Illustrates calling a Livewire method ('deletePost') with a parameter ('$postId') using Alpine.js. This example dynamically passes a post ID generated in Blade to the server-side method for targeted actions.

```php
public function deletePost($postId)
{
    $post = Post::find($postId);

    // Authorize user can delete...
    auth()->user()->can('update', $post);

    $post->delete();
}
```

```html
<button type="button" x-on:click="$wire.deletePost(1)">
    Delete "The power of walking"
</button>

<button type="button" x-on:click="$wire.deletePost(2)">
    Delete "How to record a song"
</button>

<button type="button" x-on:click="$wire.deletePost(3)">
    Delete "Teach what you learn"
</button>
```

```html
@foreach ($posts as $post)
    <button type="button" wire:key="{{ $post->id }}" x-on:click="$wire.deletePost({{ $post->id }})">
        Delete "{{ $post->title }}"
    </button>
@endforeach
```

--------------------------------

### Wire:scroll Migration to Wire:navigate:scroll

Source: https://livewire.laravel.com/docs/4.x/upgrading

For preserving scroll position in scrollable containers across `wire:navigate` requests, the `wire:scroll` directive from v3 has been replaced by `wire:navigate:scroll` in v4.

```blade
@persist('sidebar')
    <div class="overflow-y-scroll" wire:scroll> <!-- [tl! remove] -->
    <div class="overflow-y-scroll" wire:navigate:scroll> <!-- [tl! add] -->
        <!-- ... -->
    </div>
@endpersist
```

--------------------------------

### Test Livewire Components with PHPUnit

Source: https://livewire.laravel.com/docs/4.x/testing

Demonstrates how to test Livewire components using PHPUnit. It shows basic component interaction, assertions on model counts, and error handling for form validation.

```php
<?php

namespace Tests\Feature\Livewire;

use Livewire\Livewire;
use App\Models\Post;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    public function test_can_create_post()
    {
        $this->assertEquals(0, Post::count());

        Livewire::test('post.create')
            ->set('title', 'My new post')
            ->set('content', 'Post content')
            ->call('save');

        $this->assertEquals(1, Post::count());
    }

    public function test_title_is_required()
    {
        Livewire::test('post.create')
            ->set('title', '')
            ->call('save')
            ->assertHasErrors('title');
    }
}
```

--------------------------------

### Specify Layout for Full-Page Component using #[Layout]

Source: https://livewire.laravel.com/docs/4.x/attribute-layout

This example demonstrates how to use the #[Layout] attribute on a full-page Livewire component to render it with a specific Blade layout ('layouts::dashboard'). It also shows how to define computed properties and render data within the component.

```php
<?php // resources/views/pages/posts/⚡index.blade.php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new #[Layout('layouts::dashboard')] class extends Component {
    #[Computed]
    public function posts()
    {
        return Post::all();
    }
};
?>

<div>
    <h1>Posts</h1>
    @foreach ($this->posts as $post)
        <div wire:key="{{ $post->id }}">{{ $post->title }}</div>
    @endforeach
</div>

```

--------------------------------

### Define Livewire Routes in Laravel

Source: https://livewire.laravel.com/docs/4.x/navigate

This snippet demonstrates how to define routes for Livewire components in a typical Laravel application using the `Route::livewire` helper. These routes map URLs to specific Livewire components, forming the basis for navigation.

```php
use App\Livewire\Dashboard;
use App\Livewire\ShowPosts;
use App\Livewire\ShowUsers;

Route::livewire('/', 'pages::dashboard');

Route::livewire('/posts', 'pages::show-posts');

Route::livewire('/users', 'pages::show-users');
```

--------------------------------

### Livewire wire:bind:disabled Example

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Demonstrates how to bind the disabled attribute of a button or input element using wire:bind:disabled. The element's disabled state will update reactively based on the bound expression.

```blade
<button wire:bind:disabled="isArchived">Delete</button>
```

--------------------------------

### Customize Livewire JavaScript Asset URL

Source: https://livewire.laravel.com/docs/4.x/installation

Define a custom URL for serving Livewire's JavaScript assets, essential for applications using route prefixes for localization or multi-tenancy. This customization is implemented in the `boot` method of your `AppServiceProvider`.

```php
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/custom/livewire/livewire.js', $handle);
        });
    }
}
```

--------------------------------

### Passing Parameters to Livewire Actions via wire:click

Source: https://livewire.laravel.com/docs/4.x/wire-click

This example shows how to pass parameters directly within the `wire:click` directive to a Livewire component method. This allows for dynamic method calls based on data available in the Blade view. Remember to treat these parameters as untrusted input.

```blade
<button wire:click="delete({{ $post->id }})">Delete</button>
```

--------------------------------

### Generate Livewire Layout File

Source: https://livewire.laravel.com/docs/4.x/installation

This Artisan command generates a default Blade layout file for use with Livewire components, typically located at `resources/views/layouts/app.blade.php`. This layout includes essential Livewire directives like `@livewireStyles` and `@livewireScripts`.

```shell
php artisan livewire:layout
```

--------------------------------

### Cancel File Upload using Alpine.js

Source: https://livewire.laravel.com/docs/4.x/uploads

This example demonstrates how to cancel a Livewire file upload directly from Alpine.js. The button uses `x-on:click` to call the `$wire.cancelUpload('photo')` method, providing a client-side way to abort an ongoing upload.

```blade
<button type="button" x-on:click="$wire.cancelUpload('photo')">Cancel Upload</button>
```

--------------------------------

### Wire:transition API Change (v3 vs v4)

Source: https://livewire.laravel.com/docs/4.x/upgrading

In v3, `wire:transition` used Alpine's `x-transition` and supported various modifiers. In v4, it leverages the native browser View Transitions API. Basic fade-in/out functionality remains, but all modifiers have been removed.

```blade
<!-- This still works in v4 -->
<div wire:transition>...</div>

<!-- These modifiers are no longer supported -->
<div wire:transition.opacity>...</div> <!-- [tl! remove] -->
<div wire:transition.scale.origin.top>...</div> <!-- [tl! remove] -->
<div wire:transition.duration.500ms>...</div> <!-- [tl! remove] -->
```

--------------------------------

### Combining Scoped and Global Styles (Blade)

Source: https://livewire.laravel.com/docs/4.x/styles

Shows an example of using both scoped and global styles within the same Livewire component. This involves having a regular `<style>` tag for scoped styles and another `<style global>` tag for styles intended to affect the entire application.

```blade
<?php

use Livewire\Component;

new class extends Component {
    // ...
};
?>

<div class="counter">
    <h1 class="title">My Counter</h1>
</div>

<style>
.title {
    color: blue;
}
</style>

<style global>
.counter-page-layout {
    display: grid;
    place-items: center;
}
</style>
```

--------------------------------

### Prefix `wire:key` for Unique Keys in Multiple Loops (Blade)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

Demonstrates prefixing `wire:key` values to avoid collisions when using multiple `@foreach` loops with potentially overlapping IDs. This ensures each set of keys is unique, even if model IDs are the same across different types of data.

```blade
<div>
    @foreach($posts as $post)
        <div wire:key="post-{{ $post->id }}">...</div> 
    @endforeach

    @foreach($authors as $author)
        <div wire:key="author-{{ $author->id }}">...</div> 
    @endforeach
</div>
```

--------------------------------

### Migrate Livewire 'request' Hook to 'interceptRequest' (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Details the migration from the deprecated `request` hook in Livewire v3 to the `interceptRequest` interceptor in v4. It shows how to map `respond`, `succeed`, and `fail` functionalities to the new `onResponse`, `onSuccess`, and `onError`/`onFailure` callbacks.

```javascript
// OLD - Deprecated
Livewire.hook('request', ({ url, options, payload, respond, succeed, fail }) => {
    respond(({ status, response }) => {
        // Runs when response received
    })

    succeed(({ status, json }) => {
        // Runs on successful response
    })

    fail(({ status, content, preventDefault }) => {
        // Runs on failed response
    })
})

// NEW - Recommended
Livewire.interceptRequest(({ request, onResponse, onSuccess, onError, onFailure }) => {
    // Access url via request.uri
    // Access options via request.options
    // Access payload via request.payload

    onResponse(({ response }) => {
        // Equivalent to respond()
        // Access status via response.status
    })

    onSuccess(({ response, responseJson }) => {
        // Equivalent to succeed()
        // Access status via response.status
        // Access json via responseJson
    })

    onError(({ response, responseBody, preventDefault }) => {
        // Equivalent to fail() for server errors
        // Access status via response.status
        // Access content via responseBody
    })

    onFailure(({ error }) => {
        // Equivalent to fail() for network errors
    })
})
```

--------------------------------

### Trigger Basic File Download in Livewire Component (PHP)

Source: https://livewire.laravel.com/docs/4.x/downloads

Demonstrates how to trigger a file download from a Livewire component using Laravel's `response()->download()` method. This involves returning the download response from a component method, typically called by a button click. The file path and desired filename are provided as arguments.

```php
<?php

use Livewire\Component;
use App\Models\Invoice;

new class extends Component {
    public Invoice $invoice;

    public function mount(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function download()
    {
        return response()->download(
            $this->invoice->file_path, 'invoice.pdf'
        );
    }
};

```

--------------------------------

### Create a Basic Volt Component (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

A simple Volt component demonstrating the functional API with state management and a click handler. It defines a reactive 'count' state and an 'increment' function to update it. This functional syntax is compiled into a class-based Livewire component.

```php
<?php

use function LivewireVolt\state;

state(['count' => 0]);

$increment = fn () => $this->count++;

?>

<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
```

--------------------------------

### Clear Laravel Route Cache

Source: https://livewire.laravel.com/docs/4.x/installation

Resolve 404 errors for Livewire assets caused by route caching. Running `php artisan route:clear` ensures that Laravel recognizes all registered routes, including those required by Livewire.

```shell
php artisan route:clear
```

--------------------------------

### Livewire PHP Action Method for Passing Parameters

Source: https://livewire.laravel.com/docs/4.x/actions

An example of a Livewire PHP method designed to accept parameters from an Alpine.js call. The `$todo` parameter is received and used to update the component's state, demonstrating the seamless data flow between frontend and backend.

```php
public function addTodo($todo)
{
    $this->todos[] = $todo;
}
```

--------------------------------

### Publish Livewire Configuration File

Source: https://livewire.laravel.com/docs/4.x/installation

This Artisan command publishes Livewire's configuration file to your Laravel application's `config` directory. This allows for customization of Livewire's behavior and settings, although Livewire is designed to work without explicit configuration.

```shell
php artisan livewire:config
```

--------------------------------

### Initializing Livewire Component Properties with Data

Source: https://livewire.laravel.com/docs/4.x/testing

When creating a Livewire component test, you can pass initial data as the second argument to `Livewire::test()`. This is useful for populating properties from parent components or route parameters, simulating the component's initial state.

```php
use App\Models\Post;

it('title field is populated when editing', function () {
    $post = Post::factory()->create([
        'title' => 'Existing post title',
    ]);

    Livewire::test('post.edit', ['post' => $post])
        ->assertSet('title', 'Existing post title');
});
```

--------------------------------

### Set Custom Cache Key for Application-Wide Caching

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This example shows how to specify a custom cache key for an application-wide cached computed property using the `key` parameter within the `#[Computed]` attribute. This provides a predictable way to manage and manually clear the cache for shared data, ensuring consistency across different component instances.

```php
use Livewire\Attributes\Computed;
use App\Models\Post;

#[Computed(cache: true, key: 'homepage-posts')]
public function posts()
{
    return Post::all();
}
```

--------------------------------

### PHP: Authorize Livewire Public Property (Insecure Example)

Source: https://livewire.laravel.com/docs/4.x/security

Shows an insecure method of handling public properties in Livewire. The `postId` is stored as a public property and used directly in the `delete` method without validation, allowing manipulation via HTML inputs.

```php
<?php

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function delete()
    {
        // INSECURE!

        $post = Post::find($this->postId);

        $post->delete();
    }
}

```

```html
<button wire:click="delete">Delete Post</button>

```

```html
<input type="text" wire:model="postId">

```

--------------------------------

### Using `rules()` Method for Complex Validation in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Provides an example of when to use the `rules()` method instead of the #[Validate] attribute. This is necessary when complex validation logic, such as Laravel's Rule objects (e.g., `Rule::unique()`), is required, or when rules depend on dynamic values.

```php
protected function rules()
{
    return [
        'email' => ['required', 'email', Rule::unique('users')->ignore($this->userId)],
    ];
}

```

--------------------------------

### Listen for Browser Events in Livewire and Dispatch from JavaScript

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This example shows how a Livewire component can listen for browser events dispatched from JavaScript. The PHP snippet uses the #[On('user-logged-in')] attribute on the `handleUserLogin` method. The JavaScript snippet demonstrates how to dispatch a custom 'user-logged-in' event using `window.dispatchEvent` and `CustomEvent`.

```php
use Livewire\Attributes\On;

#[On('user-logged-in')]
public function handleUserLogin()
{
    // Handle login...
}

```

```javascript
// From JavaScript
window.dispatchEvent(new CustomEvent('user-logged-in'));

```

--------------------------------

### Reference Elements with wire:ref in Livewire

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `wire:ref` directive assigns a reference name to an element, allowing it to be accessed from JavaScript using `this.$refs`. This is useful for interacting with specific DOM elements, such as scrolling to a modal.

```blade
<div wire:ref="modal">
    <!-- Modal content -->
</div>

<button wire:click="$js.scrollToModal">Scroll to modal</button>

<script>
    this.$js.scrollToModal = () => {
        this.$refs.modal.scrollIntoView()
    }
</script>
```

--------------------------------

### Intercept Livewire Requests with $intercept Magic

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `$intercept` magic property allows you to hook into and modify Livewire requests from JavaScript. You can use it to add custom logic before a request is sent, such as modifying payloads or performing asynchronous operations.

```javascript
this.$intercept('save', ({ ... }) => {
    // ...
})
```

--------------------------------

### Livewire URL Query String Alias (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Illustrates how to use an alias for a Livewire component's URL query string parameter via the `as` option in the `#[Url]` attribute. This allows for shorter or more obfuscated URL parameters, like using `q` instead of `search` in `https://example.com/users?q=bob`.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url(as: 'q')] 
    public $search = '';

    // ...
}

```

--------------------------------

### Declare Computed Property in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/components

Defines a computed property using the #[Computed] attribute in a Livewire component. Computed properties are methods that cache their results for the duration of a request, ideal for expensive operations like database queries.

```php
use Livewire\Attributes\Computed;

#[Computed]
public function posts()
{
    return Post::with('author')->latest()->get();
}

```

--------------------------------

### Customizing Session Key with #[Session(key: '...')] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-session

This example shows how to customize the session key used by the #[Session] attribute. By providing a 'key' argument, you can define a specific name for the session variable, overriding Livewire's default naming convention. This is useful for avoiding naming conflicts or for more descriptive session storage.

```php
<?php 

use Livewire\Attributes\Session;
use Livewire\Component;

new class extends Component {
    #[Session(key: 'post_search')] // [tl! highlight]
    public $search = '';
};
?>
```

--------------------------------

### Publish Livewire Pagination Views

Source: https://livewire.laravel.com/docs/4.x/pagination

Command to publish Livewire's default pagination view files to the resources/views/vendor/livewire directory. This allows for customization of the standard Tailwind and Bootstrap pagination styles.

```shell
php artisan livewire:publish --pagination
```

--------------------------------

### Target Specific Properties with `updatingPropertyName()` and `updatedPropertyName()` in Livewire

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

For more focused control, Livewire allows you to create specific update hooks by naming the method after the property being updated. This applies to both `updating` and `updated` hooks. For example, `updatedUsername()` will only run when the `username` property is changed.

```php
<?php // resources/views/components/user/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public $username = '';

    public $email = '';

    public function updatedUsername()
    {
        $this->username = strtolower($this->username);
    }

    // ...
};
```

--------------------------------

### Livewire Component with Transition Attribute (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This PHP Livewire component utilizes the #[Transition] attribute to define transition types for specific methods. The 'next' method is set to transition 'forward', and the 'previous' method to 'backward', providing declarative control over animations.

```php
use Livewire\Attributes\Transition;

class Wizard extends Component
{
    public $step = 1;

    #[Transition(type: 'forward')]
    public function next()
    {
        $this->step++;
    }

    #[Transition(type: 'backward')]
    public function previous()
    {
        $this->step--;
    }
}
```

--------------------------------

### Trigger Island Renders from JavaScript with wire:island

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `wire:island.append` directive enables triggering the rendering of specific islands directly from the template via a button click or other user interaction. This allows for on-demand loading of island components.

```blade
<button wire:click="loadMore" wire:island.append="stats">
    Load more
</button>
```

--------------------------------

### Add `wire:key` to Livewire Components in `@foreach` Loops (Blade)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

Illustrates adding `wire:key` to a Livewire component rendered within a Blade `@foreach` loop. This ensures Livewire can properly identify and manage individual component instances when the loop's data changes.

```blade
@foreach($posts as $post)
    <livewire:show-post :$post :wire:key="$post->id" /> 
@endforeach
```

--------------------------------

### Register Custom Synthesizer in Service Provider

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This PHP code demonstrates how to register the custom 'AddressSynth' synthesizer globally within your Laravel application. It's done in the `boot` method of the `AppServiceProvider` using `Livewire::propertySynthesizer()`.

```php
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::propertySynthesizer(AddressSynth::class);
    }
}
```

--------------------------------

### Component Tag Closure Requirement

Source: https://livewire.laravel.com/docs/4.x/upgrading

Livewire v4 requires component tags to be properly closed, unlike v3 where unclosed tags were tolerated. This is due to the addition of slot support, where unclosed tags might be misinterpreted as slot content.

```blade
<!-- Before (v3) - unclosed tag -->
<livewire:component-name>

<!-- After (v4) - Self-closing tag -->
<livewire:component-name />
```

--------------------------------

### Real-time Validation with #[Validate] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Illustrates real-time validation for email and password fields using the #[Validate] attribute. The example uses `.blur` modifiers for validation on input blur and displays error messages. This provides immediate feedback to users as they interact with the form.

```php
<?php // resources/views/components/⚡registration.blade.php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';
};
?>

<div>
    <input type="email" wire:model.blur="email">
    @error('email') <span>{{ $message }}</span> @enderror

    <input type="password" wire:model.blur="password">
    @error('password') <span>{{ $message }}</span> @enderror
</div>

```

--------------------------------

### Basic Modelable Usage in a Child Component

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Applies the #[Modelable] attribute to a public property in a child Livewire component, making it bindable from a parent component using wire:model. This example demonstrates binding a 'value' property.

```php
<?php // resources/views/components/⚡todo-input.blade.php

use LivewireAttributesModelable;
use LivewireComponent;

new class extends Component {
    #[Modelable] // [tl! highlight]
    public $value = '';
};
?>

<div>
    <input type="text" wire:model="value">
</div>
```

--------------------------------

### Customizing Lazy Livewire Island Loading States

Source: https://livewire.laravel.com/docs/4.x/islands

Shows how to define a custom loading state for a lazy Livewire island using the `@placeholder` directive. This allows for a visual indicator (e.g., a skeleton loader) while the island's content is being fetched, improving the user experience.

```blade
@island(lazy: true)
    @placeholder
        <!-- Loading indicator -->
        <div class="animate-pulse">
            <div class="h-32 bg-gray-200 rounded"></div>
        </div>
    @endplaceholder

    <div>
        Revenue: {{ $this->revenue }}

        <button type="button" wire:click="$refresh">Refresh</button>
    </div>
@endisland
```

--------------------------------

### Enable Smart Wire:key Defaults in Livewire v4

Source: https://livewire.laravel.com/docs/4.x/upgrading

The 'smart_wire_keys' configuration option now defaults to true in Livewire v4, compared to false in v3. This change helps mitigate wire:key issues in nested components. Manual 'wire:key' usage in loops remains necessary.

```php
'smart_wire_keys' => true
```

--------------------------------

### Dependency Injection in Livewire Actions (PHP)

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates how to use Laravel's dependency injection by type-hinting parameters in a Livewire component's action signature. Livewire and Laravel automatically resolve dependencies from the service container. This example shows injecting a PostRepository to delete a post.

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use App\Repositories\PostRepository;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function delete(PostRepository $posts, $postId)
    {
        $posts->deletePost($postId);
    }
};
```

--------------------------------

### Track External Link Clicks Asynchronously with #[Async]

Source: https://livewire.laravel.com/docs/4.x/attribute-async

Demonstrates using the #[Async] attribute on a Livewire action to track external link clicks. This ensures that the tracking request does not delay the user's navigation to the external site. The tracking operation is performed in the background.

```php
<?php // resources/views/components/⚡external-link.blade.php

use Livewire\Attributes\Async;
use Livewire\Component;

new class extends Component {
    public $url;

    #[Async] // [tl! highlight]
    public function trackClick()
    {
        Analytics::track('external-link-clicked', [
            'url' => $this->url,
            'user_id' => auth()->id(),
        ]);
    }
};

```

```blade
<a href="{{ $url }}" target="_blank" wire:click="trackClick">
    Visit External Site
</a>

```

--------------------------------

### Teleporting a Dropdown Menu in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Illustrates how to use the @teleport directive for rendering a dropdown menu. The dropdown is positioned absolutely and its visibility is managed by Alpine.js. The example shows dynamic positioning using variables for 'top' and 'left', making it suitable for interactive dropdowns.

```blade
@teleport('body')
    <div class="absolute" x-show="open" style="top: {{ $top }}px; left: {{ $left }}px;">
        <!-- Dropdown items... -->
    </div>
@endteleport
```

--------------------------------

### Use Custom Validators with Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/validation

This example shows how to bypass Livewire's built-in validation and use a custom validation system, such as Laravel's `Validator::make`. Livewire will automatically catch `ValidationException` and display the errors in the view. This provides flexibility for complex validation requirements.

```php
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
	public $title = '';

    public $content = '';

    public function save()
    {
        $validated = Validator::make(
            // Data to validate...
            ['title' => $this->title, 'content' => $this->content],

            // Validation rules to apply...
            ['title' => 'required|min:3', 'content' => 'required|min:3'],

            // Custom validation messages...
            ['required' => 'The :attribute field is required']
         )->validate();

		Post::create($validated);

		return redirect()->to('/posts');
    }

    // ...
}
```

--------------------------------

### Live Search Component with Reactive Results

Source: https://livewire.laravel.com/docs/4.x/attribute-reactive

This example demonstrates a practical use case for reactive props in Livewire, specifically for live search results. The parent `search` component has an input field that updates its `$query` property. The `posts()` method fetches posts based on the query, and these posts are passed to the `search-results` child component. The `#[Reactive]` attribute on the child's `posts` property ensures that the displayed search results update instantly as the user types.

```php
<?php // resources/views/components/⚡search.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $query = '';

    public function posts()
    {
        return Post::where('title', 'like', "%{$this->query}%")->get();
    }
};
?>

<div>
    <input type="text" wire:model.live="query" placeholder="Search posts...">

    <livewire:search-results :posts="$this->posts()" /> <!-- [tl! highlight] -->
</div>
```

```php
<?php // resources/views/components/⚡search-results.blade.php

use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component {
    #[Reactive] // [tl! highlight]
    public $posts;
};
?>

<div>
    @foreach($posts as $post)
        <div wire:key="{{ $post->id }}">{{ $post->title }}</div>
    @endforeach
</div>
```

--------------------------------

### Use `@livewireScriptConfig` in Blade Layout

Source: https://livewire.laravel.com/docs/4.x/installation

When manually bundling Livewire and Alpine.js, replace the `@livewireScripts` directive with `@livewireScriptConfig` in your Blade layout. This directive injects necessary configuration and runtime globals for Livewire without including the JavaScript directly, assuming you are handling asset bundling yourself.

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScriptConfig
    </body>
</html>
```

--------------------------------

### Configure Livewire Pagination Theme

Source: https://livewire.laravel.com/docs/4.x/pagination

Sets the 'pagination_theme' in the application's config/livewire.php file to 'bootstrap' to use Bootstrap styled pagination views instead of the default Tailwind views. This requires publishing Livewire's configuration file first.

```php
'pagination_theme' => 'bootstrap',
```

--------------------------------

### Publish Livewire Assets to Public Directory

Source: https://livewire.laravel.com/docs/4.x/installation

Serve Livewire's JavaScript assets directly via your web server instead of through Laravel routing. This is achieved using the `livewire:publish --assets` Artisan command. To maintain up-to-date assets after updating Livewire, configure a `post-update-cmd` script in your `composer.json`.

```bash
php artisan livewire:publish --assets
```

--------------------------------

### Modelable with Livewire Modifiers (Live, Blur, Debounce)

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Illustrates how to use standard Livewire wire:model modifiers with a #[Modelable] component. Examples include updating on every keystroke (.live), on blur (.blur), and debouncing updates (.debounce.500ms).

```blade
{{-- Live updates on every keystroke --}}
<livewire:todo-input wire:model.live="todo" />

{{-- Update on blur --}}
<livewire:todo-input wire:model.blur="todo" />

{{-- Debounce updates --}}
<livewire:todo-input wire:model.live.debounce.500ms="todo" />
```

--------------------------------

### Customize Livewire Update Endpoint

Source: https://livewire.laravel.com/docs/4.x/installation

Register a custom route for Livewire component updates, useful for applications with route prefixes (e.g., localization, multi-tenancy). You can also apply middleware to this custom route. This is done within the `boot` method of your `AppServiceProvider`.

```php
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/custom/livewire/update', $handle);
        });
    }
}
```

```php
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/update', $handle)
        ->middleware(['web', 'auth']);
});
```

--------------------------------

### Wire:model Behavior Change (v3 vs v4)

Source: https://livewire.laravel.com/docs/4.x/upgrading

In Livewire v3, `wire:model` responded to bubbling events from child elements. In v4, it only listens to events directly on the element. The `.deep` modifier can be added to restore the v3 behavior.

```blade
<div wire:model="value">
    <input type="text">
</div>

<!-- To restore v3 behavior in v4 -->
<div wire:model.deep="value">
    <input type="text">
</div>
```

--------------------------------

### Use Route Model Binding in Livewire Mount Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Shows how to utilize Laravel's route model binding by type-hinting an Eloquent model in the `mount()` method signature. Livewire automatically resolves the model from the route parameter.

```php
<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
};
```

--------------------------------

### Array Validation with #[Validate] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Shows how to use the #[Validate] attribute to validate array properties and their individual elements. This example validates a 'tasks' array, ensuring it's required, is an array, has at least one item, and each item is a non-empty string with a minimum length.

```php
<?php // resources/views/components/⚡task-list.blade.php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate([
        'tasks' => 'required|array|min:1',
        'tasks.*' => 'required|string|min:3',
    ])]
    public $tasks = [];

    public function addTask()
    {
        $this->tasks[] = '';
    }
};
```
```

--------------------------------

### Livewire wire:bind Directive Reference

Source: https://livewire.laravel.com/docs/4.x/wire-bind

Provides the general syntax for the wire:bind directive, explaining how to bind various HTML attributes to expressions. The {attribute} placeholder can be replaced with any valid HTML attribute.

```blade
wire:bind:{attribute}="expression"
```

--------------------------------

### Periodic Component Refresh with $wire (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Demonstrates using JavaScript's setInterval with the $wire.$refresh() method to automatically refresh a Livewire component at a specified interval. While wire:poll is available, this example shows direct JavaScript control for periodic updates.

```javascript
setInterval(() => {
    $wire.$refresh()
}, 2000)
```

--------------------------------

### Updating Input Fields on Blur with `wire:model.blur`

Source: https://livewire.laravel.com/docs/4.x/forms

This example shows how to use the `.blur` modifier with `wire:model` to send network requests only when a user tabs out of or clicks away from an input field. This is an alternative to `.live` that can reduce network traffic for text-based inputs. It requires Livewire.

```blade
<input type="text" wire:model.blur="title">
```

--------------------------------

### Implement Drag-and-Drop Sorting with wire:sort

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `wire:sort` directive enables drag-and-drop functionality for lists. It requires a `wire:key` on each item and a `wire:sort:item` attribute for identification. The `updateOrder` method on the Livewire component will be called with the new order.

```blade
<ul wire:sort="updateOrder">
    @foreach ($items as $item)
        <li wire:sort:item="{{ $item->id }}" wire:key="{{ $item->id }}">{{ $item->name }}</li>
    @endforeach
</ul>
```

--------------------------------

### Test Livewire Validation Errors (PHP)

Source: https://livewire.laravel.com/docs/4.x/validation

This section provides examples of using Livewire's testing utilities to assert validation errors. The `assertHasErrors()` method is demonstrated for checking missing fields, minimum length requirements, and multiple error conditions. These tests ensure that your component's validation logic functions as expected.

```php
<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    public function test_cant_create_post_without_title()
    {
        Livewire::test(CreatePost::class)
            ->set('content', 'Sample content...')
            ->call('save')
            ->assertHasErrors('title');
    }
}

```

```php
public function test_cant_create_post_with_title_shorter_than_3_characters()
{
    Livewire::test(CreatePost::class)
        ->set('title', 'Sa')
        ->set('content', 'Sample content...')
        ->call('save')
        ->assertHasErrors(['title' => ['min:3']]);
}

```

```php
public function test_cant_create_post_without_title_and_content()
{
    Livewire::test(CreatePost::class)
        ->call('save')
        ->assertHasErrors(['title', 'content']);
}

```

--------------------------------

### Using Custom Input Counter with Alpine.js's x-model

Source: https://livewire.laravel.com/docs/4.x/forms

This example shows how the custom `<x-input-counter />` Blade component can be used in a purely Alpine.js context. By using `x-model="quantity"`, the counter's value is bound to an Alpine.js variable named `quantity`, illustrating the component's flexibility.

```blade
<x-input-counter x-model="quantity" />
```

--------------------------------

### Excluding Values from #[Url]

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Illustrates the use of the `except` parameter in the #[Url] attribute to control when a property is excluded from the URL. By default, Livewire omits query parameters if their value matches the initial mount state. This example modifies that behavior to only exclude the `$search` property when it is an empty string.

```php
<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    #[Url(except: '')]
    public $search = '';

    public function mount()
    {
        $this->search = auth()->user()->username;
    }
};
?>
```

--------------------------------

### Livewire Skeleton Placeholder - Blade

Source: https://livewire.laravel.com/docs/4.x/directive-placeholder

Provides an example of using the @placeholder directive for skeleton screen loading. This snippet defines a placeholder with a series of `div` elements styled to mimic the layout of actual content (a post title and content) using gray background colors and rounded corners. This placeholder is displayed while the real post data is being loaded.

```blade
@placeholder
    <div class="space-y-4">
        <div class="h-4 bg-gray-200 rounded w-3/4"></div>
        <div class="h-4 bg-gray-200 rounded"></div>
        <div class="h-4 bg-gray-200 rounded w-5/6"></div>
    </div>
@endplaceholder

<div>
    <!-- Actual content -->
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
</div>
```

--------------------------------

### CSP-Safe Mode Workaround for Complex Alpine.js Expressions

Source: https://livewire.laravel.com/docs/4.x/csp

For complex Alpine.js expressions that are not supported in CSP-safe mode, you can define reusable logic using `Alpine.data()` or move the logic into methods. This example demonstrates how to use `Alpine.data()` to manage computed properties like `hasActiveAdmins` and `activeUserCount`, making your Alpine.js code cleaner and CSP-compliant.

```html
<div x-data="users">
    <div x-show="hasActiveAdmins">Admin panel available</div>
    <span x-text="activeUserCount">0</span>
</div>

<script nonce="[nonce]">
    Alpine.data('users', () => ({
        users: ..., 

        get hasActiveAdmins() {
            return this.users.filter(u => u.active && u.role === 'admin').length > 0;
        },

        get activeUserCount() {
            return this.users.filter(u => u.active).length;
        }
    }));
</script>
```

--------------------------------

### Refreshing and Dispatching Events from Livewire Components

Source: https://livewire.laravel.com/docs/4.x/testing

Shows how to trigger a component re-render using `refresh` and how to dispatch events. Events can be dispatched with or without additional parameters, allowing for communication between Livewire components or with other parts of the application.

```php
$component->refresh();
$component->dispatch('post-created');
$component->dispatch('post-created', postId: $post->id);
```

--------------------------------

### Remove Duplicate Alpine.js Import from `app.js` (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

This JavaScript snippet shows how to remove the explicit import and initialization of Alpine.js from `resources/js/app.js`. Livewire v3 includes its own Alpine bundle, so manual inclusion can lead to 'Detected multiple instances of Alpine running' errors.

```javascript
import './bootstrap';

// Remove the following lines:
// import Alpine from 'alpinejs'; 
// window.Alpine = Alpine;
// Alpine.start();
```

--------------------------------

### Add `wire:key` to Nested Livewire Components in `@foreach` Loops (Blade)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

Shows how to apply `wire:key` to a Livewire component that is nested within another element inside a `@foreach` loop. This is necessary even when the outer element also has a `wire:key`, preventing mismatches between network requests.

```blade
@foreach($posts as $post)
    <div wire:key="{{ $post->id }}">
        ...
        <livewire:show-post :$post :wire:key="$post->id" /> 
        ...
    </div>
@endforeach
```

--------------------------------

### Remove Alpine.js CDN from Layout (HTML)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

This HTML snippet illustrates removing a CDN link for Alpine.js from the `<head>` section of a layout file. Livewire v3 automatically provides Alpine.js, making external CDN inclusions redundant and potentially causing conflicts.

```html
    ...
</head>
<!-- Remove the following line -->
<!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
```

--------------------------------

### Run Action on Component Render with wire:init (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-init

The wire:init directive in Blade templates executes a specified Livewire action as soon as the component is rendered. This is useful for fetching initial data without delaying the main page load. It does not have any modifiers.

```blade
<div wire:init="loadPosts">
    <!-- ... -->
</div>
```

```blade
wire:init="action"
```

--------------------------------

### Pass Post ID to Delete Action

Source: https://livewire.laravel.com/docs/4.x/actions

This example shows how to pass a post ID as a parameter to a Livewire 'delete' action, allowing frontend elements like buttons to trigger server-side deletion. It includes authorization checks before deleting the post.

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('delete', $post);

        $post->delete();
    }
};
?>
```

```blade
<div>
    @foreach ($this->posts as $post)
        <div wire:key="{{ $post->id }}">
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->content }}</span>

            <button wire:click="delete({{ $post->id }})">Delete</button> <!-- [tl! highlight] -->
        </div>
    @endforeach
</div>
```

--------------------------------

### Bind Text Input Value with wire:model (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-model

This is a basic example of binding a standard HTML text input's value to a Livewire component property named 'title' using the `wire:model` directive.

```blade
<input type="text" wire:model="title">
```

--------------------------------

### Output PHP Data to JavaScript using @js

Source: https://livewire.laravel.com/docs/4.x/javascript

The `@js` directive in Livewire allows you to safely serialize PHP data for use in your JavaScript. This example shows how to assign a PHP variable `$posts` to a JavaScript variable `posts`, making the PHP data accessible client-side.

```blade
<script>
    let posts = @js($posts)

    // "posts" will now be a JavaScript array of post data from PHP.
</script>
```

--------------------------------

### Triggering Livewire Actions with Events (Blade)

Source: https://livewire.laravel.com/docs/4.x/actions

Shows how to trigger Livewire actions from Blade templates using event listeners. The example demonstrates a button click that calls the 'delete' action, passing the post ID. It also illustrates using `wire:model` for data binding.

```blade
<div>
    @foreach ($this->posts as $post)
        <div wire:key="{{ $post->id }}">
            <h1>{{ $post->title }}</h1>
            <span>{{ $post->content }}</span>

            <button wire:click="delete({{ $post->id }})">Delete</button>
        </div>
    @endforeach
</div>
```

--------------------------------

### Using $dirty Expression for Nested Properties

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This example illustrates checking the dirty state of a nested property, such as 'user.name', using the `$dirty('nested.property')` expression. This allows for precise control over UI elements that should only be visible or active when specific, deeply nested data points have been altered.

```blade
<div wire:show="$dirty('user.name')">Name has been modified</div>
```

--------------------------------

### Using Different Layouts for Different Page Sections

Source: https://livewire.laravel.com/docs/4.x/attribute-layout

This code demonstrates a common pattern of using distinct #[Layout] attributes for different sections of an application, such as admin pages, marketing pages, and dashboard pages, promoting modularity and organization.

```php
// Admin pages
new #[Layout('layouts::admin')] class extends Component { }

// Marketing pages
new #[Layout('layouts::marketing')] class extends Component { }

// Dashboard pages
new #[Layout('layouts::dashboard')] class extends Component { }

```

--------------------------------

### Customizing Validation Error: Single Message

Source: https://livewire.laravel.com/docs/4.x/validation

This PHP example demonstrates how to override the default validation error message for a specific rule using the `message:` parameter in the `#[Validate]` attribute. This allows for tailored error messages that better suit the application's context or user interface.

```php
use Livewire\Attributes\Validate;

#[Validate('required', message: 'Please fill out your date of birth.')]
public $dob = '';
```

--------------------------------

### Define Livewire Component Mount Hook with Volt

Source: https://livewire.laravel.com/docs/4.x/volt

Explains how to define the mount lifecycle hook for a Volt component using the `mount` function. Parameters passed to the component are injected, and other dependencies are resolved by Laravel's service container.

```php
use App\Services\UserCounter;
use function Livewire\Volt\mount;

mount(function (UserCounter $counter, $users) {
    $counter->store('userCount', count($users));

    // ...
});
```

--------------------------------

### Basic Button Styling with data-loading

Source: https://livewire.laravel.com/docs/4.x/loading-states

Demonstrates how to apply a CSS class to a button when it's in a loading state using the `data-loading` attribute, making it semi-transparent. This is achieved by adding `data-loading:opacity-50` directly to the button element.

```blade
<button wire:click="save" class="data-loading:opacity-50">
    Save Changes
</button>
```

--------------------------------

### Avoid State Mutations in Async Livewire Actions

Source: https://livewire.laravel.com/docs/4.x/actions

Illustrates a dangerous pattern of performing state mutations within an asynchronous Livewire action. This can lead to race conditions and lost updates, as multiple async requests may start with the same initial state.

```php
// Warning: This snippet demonstrates what NOT to do...

<?php // resources/views/components/⚡counter.blade.php

use Livewire\Attributes\Async;
use Livewire\Component;

new class extends Component {
    public $count = 0;

    #[Async] // Don't do this!
    public function increment()
    {
        $this->count++; // State mutation in an async action
    }

    // ...
};
```

--------------------------------

### Configure Livewire to Upload Directly to S3

Source: https://livewire.laravel.com/docs/4.x/uploads

This snippet shows how to configure Livewire to bypass your application server and upload files directly to an S3 bucket. It involves setting an environment variable to specify the S3 disk for temporary uploads, ensuring files are stored remotely from the start.

```env
LIVEWIRE_TEMPORARY_FILE_UPLOAD_DISK=s3
```

--------------------------------

### Livewire DOM Morphing Hooks (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Provides examples of various DOM morphing hooks in Livewire: `morph.updating`, `morph.updated`, `morph.removing`, `morph.removed`, `morph.adding`, and `morph.added`. These hooks allow intervention during the DOM update process after a network roundtrip. Additionally, `morph` and `morphed` hooks are shown for component-level morphing events.

```javascript
Livewire.hook('morph.updating',  ({ el, component, toEl, skip, childrenOnly }) => {
	//
})

Livewire.hook('morph.updated', ({ el, component }) => {
	//
})

Livewire.hook('morph.removing', ({ el, component, skip }) => {
	//
})

Livewire.hook('morph.removed', ({ el, component }) => {
	//
})

Livewire.hook('morph.adding',  ({ el, component }) => {
	//
})

Livewire.hook('morph.added',  ({ el }) => {
	//
})

Livewire.hook('morph',  ({ el, component }) => {
	// Runs just before the child elements in `component` are morphed (exluding partial morphing)
})

Livewire.hook('morphed',  ({ el, component }) => {
    // Runs after all child elements in `component` are morphed (excluding partial morphing)
})
```

--------------------------------

### Define Query String via Trait Hook (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Configure query string parameters within a trait using a dedicated hook method like `queryStringWithSorting`. This promotes code reusability by allowing common query string configurations to be shared across multiple components.

```php
trait WithSorting
{
    // ...

    protected function queryStringWithSorting()
    {
        return [
            'sortBy' => ['as' => 'sort'],
            'sortDirection' => ['as' => 'direction'],
        ];
    }
}
```

--------------------------------

### Enable CSP-Safe Mode in Livewire v4

Source: https://livewire.laravel.com/docs/4.x/upgrading

The 'csp_safe' configuration option (defaults to false) in Livewire v4 enables Content Security Policy compliance by using Alpine's CSP build. This mode restricts complex JavaScript expressions and global references in directives.

```php
'csp_safe' => false
```

--------------------------------

### Using wire:replace to Re-render Custom Elements

Source: https://livewire.laravel.com/docs/4.x/wire-replace

This example demonstrates how to use the `wire:replace` directive to completely re-render a custom web component, such as `json-viewer`. This ensures that any internal state within the custom element is reset on each update, preventing potential conflicts with Livewire's DOM diffing. The directive is applied to a container element, instructing Livewire to replace its children with new content from the server.

```blade
<form>
    <!-- ... -->

    <div wire:replace>
        <!-- This custom element would have its own internal state -->
        <json-viewer>@json($someProperty)</json-viewer>
    </div>

    <!-- ... -->
</form>
```

--------------------------------

### Prevent Livewire DOM Updates with wire:ignore (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-ignore

This example demonstrates how to use the `wire:ignore` directive within a Blade template to prevent Livewire from updating a `div` element and its contents. This is commonly used for elements managed by third-party JavaScript libraries.

```blade
<form>
    <!-- ... -->

    <div wire:ignore>
        <!-- This element would be reference by a -->
        <!-- third-party library for initialization... -->
        <input id="id-for-date-picker-library">
    </div>

    <!-- ... -->
</form>
```

--------------------------------

### Define Volt Component as a Full-Page Route

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to register a Volt component as a full-page component by defining a Volt route in `routes/web.php`. This allows the component to be accessed directly via a URL.

```php
use Livewire\Volt\Volt;

Volt::route('/users', 'user-index');
```

--------------------------------

### Authorize Server-Side Actions in Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Illustrates how to secure Livewire actions by implementing server-side authorization. The example shows a vulnerable `deletePost` method that is exposed to all users and its secure version, which includes an explicit check for administrator privileges before proceeding with the deletion. This ensures that sensitive actions are only performed by authorized users.

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        $post->delete();
    }
};
```

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function deletePost($id)
    {
        if (! Auth::user()->isAdmin) { // [tl! highlight:2]
            abort(403);
        }

        $post = Post::find($id);

        $post->delete();
    }
};
```

--------------------------------

### Target Multiple Actions with Livewire Loading

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Demonstrates how to make a loading indicator react to multiple specific actions on a Livewire page by separating action names with a comma in the `wire:target` directive. This prevents the indicator from showing for unrelated actions.

```blade
<form wire:submit="save">
    <input type="text" wire:model.blur="title">

    <!-- ... -->

    <button type="submit">Save</button>

    <button type="button" wire:click="remove">Remove</button>

    <div wire:loading wire:target="save, remove">
        Updating post...
    </div>
</form>
```

--------------------------------

### Add `wire:key` to Elements in `@foreach` Loops (Blade)

Source: https://livewire.laravel.com/docs/4.x/troubleshooting

This snippet demonstrates how to add the `wire:key` attribute to elements within a Blade `@foreach` loop. This is crucial for Livewire to correctly track and update elements during dynamic changes, preventing 'Component already initialized' errors.

```blade
@foreach($posts as $post)
    <div wire:key="{{ $post->id }}"> 
        ...
    </div>
@endforeach
```

--------------------------------

### Define a Renderless Action in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Explains how to create a renderless action using `action()` and `renderless()` in Livewire Volt. This is useful for actions that update component state but do not require a full re-render of the Blade view, improving efficiency.

```php
<?php

use function Livewire\Volt\action;

$incrementViewCount = action(fn () => $this->viewCount++)->renderless();

?>
```

--------------------------------

### Configure Multiple Paginators with Unique Names in Livewire

Source: https://livewire.laravel.com/docs/4.x/pagination

When using multiple paginators on a single Livewire page, it's crucial to assign unique names to each to prevent URL conflicts. This is achieved by specifying the `pageName` parameter in the `paginate()` method. The example shows a 'clients' paginator with the default name and an 'invoices' paginator with the name 'invoices-page'.

```php
<?php // resources/views/components/⚡show-clients.blade.php

use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Client;

new class extends Component {
    use WithPagination;

    #[Computed]
    public function clients()
    {
        return Client::paginate(10);
    }
};

```

```php
<?php // resources/views/components/⚡show-invoices.blade.php

use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Invoice;

new class extends Component {
    use WithPagination;

    #[Computed]
    public function invoices()
    {
        return Invoice::paginate(10, pageName: 'invoices-page');
    }
};

```

--------------------------------

### Configure Action Transitions with #[Transition] Attribute (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Demonstrates how to use the #[Transition] attribute in PHP to define 'forward' and 'backward' transition types for Livewire component actions. This attribute is applied directly to methods to control view transition animations.

```php
<?php

use Livewire\Attributes\Transition;
use Livewire\Component;

class Wizard extends Component
{
    public $step = 1;

    #[Transition(type: 'forward')] // [tl! highlight]
    public function next()
    {
        $this->step++;
    }

    #[Transition(type: 'backward')] // [tl! highlight]
    public function previous()
    {
        $this->step--;
    }
}

```

--------------------------------

### Using $dirty Expression to Check Component State

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This example showcases the `$dirty` expression within a `wire:show` directive. It makes an element visible only when the entire Livewire component has unsaved changes, providing a general notification to the user about pending updates across any of its properties.

```blade
<div wire:show="$dirty">You have unsaved changes</div>
```

--------------------------------

### Teleporting a Modal Dialog in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Provides an example of using the @teleport directive to render a modal dialog. The modal is fixed to cover the entire screen with a black overlay and is controlled by Alpine.js's x-show directive. This snippet is ideal for implementing modal interfaces that need to appear above other page content.

```blade
@teleport('body')
    <div class="fixed inset-0 bg-black/50" x-show="showModal">
        <div class="modal">
            <!-- Modal content... -->
        </div>
    </div>
@endteleport
```

--------------------------------

### Targeting Specific Property Updates with wire:target

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This example shows how to use `wire:target` in conjunction with `wire:dirty` to show a "dirty" indication only when a specific property, like 'title', has been modified. This allows for more granular control over visual feedback, especially when using directives like `wire:model.blur`.

```blade
<form wire:submit="update">
    <input wire:model.blur="title">

    <div wire:dirty wire:target="title">Unsaved title...</div>

    <button type="submit">Update</button>
</form>
```

--------------------------------

### Configure Livewire Emoji Option (PHP)

Source: https://livewire.laravel.com/docs/4.x/components

This configuration snippet shows how to disable the lightning bolt emoji (⚡) in Livewire component filenames. By setting `'emoji' => false` in the `config/livewire.php` file, the `make:livewire` command will no longer prepend the emoji to generated component names.

```php
'make_command' => [
    'emoji' => false,
]
```

--------------------------------

### Refactor Livewire JavaScript $wire.$js() Method (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Illustrates the deprecation of the `$wire.$js('actionName', callback)` syntax in Livewire v3 for defining JavaScript actions. The recommended approach in v4 is to use direct property assignment like `$wire.$js.actionName = callback`.

```javascript
// Deprecated (v3)
$wire.$js('bookmark', () => {
    // Toggle bookmark...
})

// New (v4)
$wire.$js.bookmark = () => {
    // Toggle bookmark...
}
```

--------------------------------

### Livewire JavaScript Interceptors for Event Handling

Source: https://livewire.laravel.com/docs/4.x/javascript

This snippet illustrates how to use Livewire's interceptors for managing JavaScript event listeners. Component-level listeners are automatically cleaned up by Livewire, while global listeners require manual cleanup if necessary. It shows examples for intercepting message sending.

```javascript
// Component-level - automatically cleaned up ✓
$wire.intercept(({ onSend }) => {
    onSend(() => console.log('Sending...'));
});

// Global-level - lives for the entire page lifecycle
Livewire.interceptMessage(({ onSend }) => {
    onSend(() => console.log('Sending...'));
});
```

--------------------------------

### Basic Livewire Island Usage

Source: https://livewire.laravel.com/docs/4.x/islands

Demonstrates the basic implementation of a Livewire island using the @island directive in a Blade template. It shows how to wrap a section of the template, including a computed property and a refresh button, to enable isolated re-rendering.

```blade
<?php // resources/views/components/⚡dashboard.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Revenue;

new class extends Component {
    #[Computed]
    public function revenue()
    {
        // Expensive calculation or query...
        return Revenue::yearToDate();
    }
};
?>

<div>
    @island
        <div>
            Revenue: {{ $this->revenue }}

            <button type="button" wire:click="$refresh">Refresh</button>
        </div>
    @endisland

    <div>
        <!-- Other content... -->
    </div>
</div>
```

--------------------------------

### Bind Textarea Value with wire:model (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-model

This example demonstrates how to bind the content of an HTML textarea element to a Livewire component property named 'content' using the `wire:model` directive. Livewire automatically handles populating the textarea with the initial value of the property.

```blade
<textarea type="text" wire:model="content"></textarea>
```

--------------------------------

### Persisting Dashboard Filters with #[Session] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-session

This comprehensive example showcases the practical application of the #[Session] attribute for persisting multiple dashboard filter states. Properties like 'dateRange', 'category', and 'sortBy' are stored in the session, allowing users to maintain their filter preferences across different interactions and page loads. This snippet requires Livewire and Eloquent models for transactions.

```php
<?php 

use Livewire\Attributes\Session;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Transaction;

new class extends Component {
    #[Session]
    public $dateRange = '30days';

    #[Session]
    public $category = 'all';

    #[Session]
    public $sortBy = 'date';

    #[Computed]
    public function transactions()
    {
        return Transaction::query()
            ->when($this->dateRange === '30days', fn($q) => $q->where('created_at', '>=', now()->subDays(30)))
            ->when($this->category !== 'all', fn($q) => $q->where('category', $this->category))
            ->orderBy($this->sortBy)
            ->get();
    }
};
?>
```

--------------------------------

### Livewire Component Basic Search Input (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

A basic Livewire component demonstrating a search input that updates a computed property. It requires the Livewire framework and an `AppModelsUser` model with a `search` method. The output is an HTML list of users.

```php
<?php // resources/views/components/⚡show-users.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $search = '';

    #[Computed]
    public function users()
    {
        return User::search($this->search)->get();
    }
};

```

--------------------------------

### Integrating @persist in Layout File

Source: https://livewire.laravel.com/docs/4.x/navigate

Shows the practical implementation of the @persist directive within a main layout file (e.g., resources/views/layouts/app.blade.php) to ensure the persisted element is available globally.

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>

        @persist('player')
            <audio src="{{ $episode->file }}" controls></audio>
        @endpersist

        @livewireScripts
    </body>
</html>
```

--------------------------------

### Basic @persist Usage in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Demonstrates the fundamental usage of the @persist directive by wrapping an audio element with a unique key 'player'. This preserves the audio player's state across page transitions when using wire:navigate.

```blade
@persist('player')
    <audio src="{{ $episode->file }}" controls></audio>
@endpersist
```

--------------------------------

### Style Loading States with data-loading Attribute

Source: https://livewire.laravel.com/docs/4.x/upgrading

Livewire automatically adds a `data-loading` attribute to elements that trigger network requests. This attribute can be used with CSS frameworks like Tailwind CSS to style elements during loading states, such as reducing opacity or disabling pointer events.

```blade
<button wire:click="save" class="data-loading:opacity-50 data-loading:pointer-events-none">
    Save Changes
</button>
```

--------------------------------

### Lazy Loading a Livewire Island

Source: https://livewire.laravel.com/docs/4.x/islands

Illustrates how to implement lazy loading for a Livewire island using the `lazy: true` parameter. This defers the island's initial render until after the page loads, displaying a loading state until its content is fetched, which is beneficial for expensive computations or slow API calls.

```blade
<?php // resources/views/components/⚡dashboard.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Revenue;

new class extends Component {
    #[Computed]
    public function revenue()
    {
        // Expensive calculation or query...
        return Revenue::yearToDate();
    }
};
?>

<div>
    @island(lazy: true)
        <div>
            Revenue: {{ $this->revenue }}

            <button type="button" wire:click="$refresh">Refresh</button>
        </div>
    @endisland

    <div>
        <!-- Other content... -->
    </div>
</div>
```

--------------------------------

### Update Livewire JavaScript $js Prefix Usage (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/upgrading

Highlights the deprecation of using the standalone `$js('actionName', callback)` syntax in Livewire v3. Version 4.x requires prefixing with either `$wire.$js` or `this.$js` for clarity and consistency when defining JavaScript actions.

```javascript
// Deprecated (v3)
$js('bookmark', () => {
    // Toggle bookmark...
})

// New (v4)
$wire.$js.bookmark = () => {
    // Toggle bookmark...
}
// Or
this.$js.bookmark = () => {
    // Toggle bookmark...
}
```

--------------------------------

### Receive Event Parameters in Livewire PHP Class

Source: https://livewire.laravel.com/docs/4.x/events

Access parameters passed with an event within a Livewire PHP component. Use the #[On] attribute to define a method that handles a specific event, and access event data via method parameters. The example shows how to receive a 'refreshPosts' boolean.

```php
use Livewire\Attributes\On;

// ...

#[On('post-created')]
public function handleNewPost($refreshPosts = false)
{
    // Handle the event and its parameters
}
```

--------------------------------

### Define a Protected Helper Method in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to define a protected helper method using the `protect` function in Livewire Volt. Protected methods are only accessible from within other actions in the component, enhancing security and encapsulation.

```php
<?php

use App\Repositories\PostRepository;
use function Livewire\Volt\protect;
use function Livewire\Volt\state;

state(['postId']);

$delete = function (PostRepository $posts) {
    $this->ensurePostCanBeDeleted();

    $posts->delete($this->postId);

    // ...
};

$ensurePostCanBeDeleted = protect(function () {
    // ...
});

?>
```

--------------------------------

### Displaying Loading Indicators with wire:loading in Blade

Source: https://livewire.laravel.com/docs/4.x/forms

Provides examples of how to visually indicate form submission progress in Livewire using the `wire:loading` directive within a Blade template. This directive shows or hides elements based on the form's loading state, improving user experience by preventing double submissions.

```html
<button type="submit">
    Save

    <div wire:loading>
        <svg>...</svg> <!-- SVG loading spinner -->
    </div>
</button>

<!-- Alternative using Tailwind and data-loading attribute -->
<button type="submit">
    <span class="in-data-loading:hidden">Save</span>
    <span class="not-in-data-loading:hidden">
        <svg>...</svg> <!-- SVG loading spinner -->
    </span>
</button>
```

--------------------------------

### Listen for Echo Event with Dynamic Channel in Livewire (Attribute)

Source: https://livewire.laravel.com/docs/4.x/events

Shows how to listen for broadcasted events with dynamic channel names using the `#[On]` attribute in Livewire. The channel name is interpolated directly within the attribute.

```php
#[On('echo:orders.{order.id},OrderShipped')]
public function notifyNewOrder()
{
    $this->showNewOrderNotification = true;
}

```

--------------------------------

### Immediately Load Livewire Component with Defer

Source: https://livewire.laravel.com/docs/4.x/lazy

This snippet shows how to load a Livewire component immediately after the page is ready, instead of waiting for it to enter the viewport. It uses the `defer` parameter in the Blade view or the `#[Defer]` attribute in the component class.

```blade
<livewire:revenue defer />
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Defer;

#[Defer]
class Revenue extends Component
{
    // ...
}
?>
```

--------------------------------

### Skip Component Re-rendering with .renderless Modifier

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `.renderless` modifier on directives like `wire:click` prevents the Livewire component from re-rendering on the server. This is useful for actions that only perform logic or side effects without needing to update the UI, serving as an alternative to the `#[Renderless]` attribute.

```blade
<button wire:click.renderless="trackClick">Track</button>
```

--------------------------------

### Access Validation Errors in JavaScript with $errors

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `$errors` magic property provides access to the component's error bag directly from JavaScript. This allows for conditional rendering or displaying error messages based on validation status, such as showing an error only when the 'email' field has an error.

```blade
<div wire:show="$errors.has('email')">
    <span wire:text="$errors.first('email')"></span>
</div>
```

--------------------------------

### Using Custom Input Counter with Livewire's wire:model

Source: https://livewire.laravel.com/docs/4.x/forms

This example demonstrates how to integrate the custom `<x-input-counter />` Blade component into a Livewire component. By using `wire:model="quantity"`, the counter's value is directly bound to the `quantity` property of the Livewire component, allowing for two-way data binding.

```blade
<x-input-counter wire:model="quantity" />
```

--------------------------------

### Interacting with Livewire Events Globally (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

This JavaScript snippet shows how to dispatch and listen for Livewire events globally using the `Livewire` object. You can dispatch events to all components, specific components by name, or listen for events emitted by any Livewire component in your application. It also includes an example of unregistering listeners to prevent duplicates, especially with Alpine.js navigation.

```javascript
// Dispatch an event to any Livewire components listening...
Livewire.dispatch('post-created', { postId: 2 })

// Dispatch an event to a given Livewire component by name...
Livewire.dispatchTo('dashboard', 'post-created', { postId: 2 })

// Listen for events dispatched from Livewire components...
Livewire.on('post-created', ({ postId }) => {
    // ...
})

Alpine.data('MyComponent', () => ({
    listeners: [],
    init() {
        this.listeners.push(
            Livewire.on('post-created', (options) => {
                // Do something...
            })
        );
    },
    destroy() {
        this.listeners.forEach((listener) => {
            listener();
        });
    }
}));
```

--------------------------------

### Trigger Actions on Viewport Intersection with wire:intersect

Source: https://livewire.laravel.com/docs/4.x/upgrading

The `wire:intersect` directive allows actions to be triggered when an element enters or leaves the viewport, similar to Alpine.js's `x-intersect`. It supports modifiers like `.once`, `.half`, `.full`, `.threshold.X`, and `.margin.Xpx/.X%` for granular control.

```blade
<!-- Basic usage -->
<div wire:intersect="loadMore">...</div>

<!-- With modifiers -->
<div wire:intersect.once="trackView">...</div>
<div wire:intersect:leave="pauseVideo">...</div>
<div wire:intersect.half="loadMore">...</div>
<div wire:intersect.full="startAnimation">...</div>

<!-- With options -->
<div wire:intersect.margin.200px="loadMore">...</div>
<div wire:intersect.threshold.50="trackScroll">...</div>
```

--------------------------------

### Livewire Island Placeholder - Blade

Source: https://livewire.laravel.com/docs/4.x/directive-placeholder

Illustrates the use of the @placeholder directive within a lazy Livewire island. This example shows a placeholder with a skeleton loader (using Tailwind CSS classes for animation and layout) that is displayed while the island content is being fetched. Once loaded, the placeholder is replaced by the island's actual content, which includes revenue display and a refresh button.

```blade
@island(lazy: true)
    @placeholder
        <div class="animate-pulse">
            <div class="h-32 bg-gray-200 rounded"></div>
        </div>
    @endplaceholder

    <div>
        Revenue: {{ $this->revenue }}

        <button type="button" wire:click="$refresh">Refresh</button>
    </div>
@endisland
```

--------------------------------

### Styling loading states with Plain CSS

Source: https://livewire.laravel.com/docs/4.x/loading-states

Demonstrates how to style elements during loading states using standard CSS selectors targeting the 'data-loading' attribute. This method is useful for projects not using Tailwind CSS or for specific element targeting.

```css
[data-loading] {
    opacity: 0.5;
}

button[data-loading] {
    background-color: #ccc;
}
```

```css
[data-loading] .loading-text {
    display: inline;
}

[data-loading] .default-text {
    display: none;
}
```

--------------------------------

### Implement Pagination in Livewire Volt Components

Source: https://livewire.laravel.com/docs/4.x/volt

This code shows how to integrate Livewire's pagination support into a functional Volt component using the `usesPagination()` function. It allows for easy display and management of paginated data, with options to customize the pagination theme (e.g., 'bootstrap').

```php
<?php

use function Livewire\Volt\with, usesPagination;

usesPagination();

with(fn () => ['posts' => Post::paginate(10)]);

?>

<div>
    @foreach ($posts as $post)
        //
    @endforeach

    {{ $posts->links() }}
</div>
```

```php
usesPagination(theme: 'bootstrap');
```

--------------------------------

### Disable Automatic Livewire Asset Injection

Source: https://livewire.laravel.com/docs/4.x/installation

Gain full control over Livewire asset loading by disabling automatic injection in `config/livewire.php`. When disabled, you must manually include `@livewireStyles` and `@livewireScripts` in your layout files for Livewire to function correctly. Alternatively, assets can be forced on specific pages.

```php
'inject_assets' => false,
```

```php
\Livewire\Livewire::forceAssetInjection();
```

--------------------------------

### Script Loading in Head with wire:navigate

Source: https://livewire.laravel.com/docs/4.x/navigate

Scripts placed in the `<head>` of a Blade template are only executed once during the initial page visit. If subsequent pages include the same script, it will not be re-executed. However, new script tags added to the `<head>` on a different page will be evaluated.

```html
<!-- Page one -->
<head>
    <script src="/app.js"></script>
</head>

<!-- Page two -->
<head>
    <script src="/app.js"></script>
</head>
```

```html
<!-- Page one -->
<head>
    <script src="/app.js"></script>
</head>

<!-- Page two -->
<head>
    <script src="/app.js"></script>
    <script src="/third-party.js"></script>
</head>
```

--------------------------------

### Lazy Loading Content with Livewire Islands

Source: https://livewire.laravel.com/docs/4.x/nesting

Shows how to use the `lazy: true` option with Livewire Islands to defer or lazy load content. This is useful for delaying expensive operations until after the initial page load.

```blade
@island(lazy: true)
    <div>{{ $this->slowApiCall }}</div>
@endisland
```

--------------------------------

### Toggling and Calling Component Methods in Livewire

Source: https://livewire.laravel.com/docs/4.x/testing

Illustrates toggling boolean properties and calling component methods. The `toggle` method flips a boolean property, while the `call` method executes a specified action or method, optionally with parameters.

```php
$component->toggle('sortAsc');
$component->call('save');
$component->call('remove', $postId);
```

--------------------------------

### Blade Template with wire:show and Alpine.js Transitions

Source: https://livewire.laravel.com/docs/4.x/wire-show

This Blade template integrates wire:show with Alpine.js 'x-transition' directives to provide smooth animations when the element's visibility changes. The duration is set to 500ms for a noticeable effect.

```blade
<div>
    <button x-on:click="$wire.showModal = true">New Post</button>

    <div wire:show="showModal" x-transition.duration.500ms>
        <form wire:submit="save">
            <textarea wire:model="content"></textarea>
            <button type="submit">Save Post</button>
        </form>
    </div>
</div>
```

--------------------------------

### Using wire:replace.self to Re-render Element and Children

Source: https://livewire.laravel.com/docs/4.x/wire-replace

This example shows how to use the `wire:replace.self` modifier. When applied, Livewire not only replaces the children of the target element but also the element itself. This is particularly useful for resetting state managed by Alpine.js or other client-side frameworks, ensuring that the initial state is reapplied on every render. For instance, an `x-data` component's state will be fully reset.

```blade
<div x-data="{open: false}" wire:replace.self>
  <!-- Ensure that the "open" state is reset to false on each render -->
</div>
```

--------------------------------

### Persist Livewire Computed Property with `persist: true`

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This example shows how to automatically cache a computed property for the lifespan of a Livewire component instance using the `#[Computed(persist: true)]` attribute. Livewire handles the underlying Laravel cache management, simplifying the code. The default cache duration is one hour, which can be overridden.

```php
use Livewire\Attributes\Computed;
use App\Models\User;

#[Computed(persist: true)]
public function user()
{
    return User::find($this->userId);
}
```

--------------------------------

### Pulling and Resetting Form Fields with Livewire

Source: https://livewire.laravel.com/docs/4.x/forms

Explains the use of the pull() method in Livewire Forms to retrieve and simultaneously reset form properties. This method can retrieve all properties or specific ones, returning them as an array. It's a convenient way to get form data and clear it in one step.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:5')]
    public $content = '';

    // ...

    public function store()
    {
        $this->validate();

        Post::create(
            $this->pull() // Pulls and resets all fields
        );
    }
}
?>

// Pulling and resetting a specific field:
$this->pull('title');

// Pulling and resetting multiple fields into a key-value array:
$this->pull(['title', 'content']);
```

--------------------------------

### wire:cloak with Dynamic Content (wire:show)

Source: https://livewire.laravel.com/docs/4.x/wire-cloak

Illustrates how to use wire:cloak in conjunction with the wire:show directive for dynamic content. This ensures that elements conditionally shown or hidden by Livewire are not visible before initialization, preventing visual glitches.

```blade
<div>
    <div wire:show="starred" wire:cloak>
        <!-- Yellow star icon... -->
    </div>

    <div wire:show="!starred" wire:cloak>
        <!-- Gray star icon... -->
    </div>
</div>
```

--------------------------------

### Manually Trigger Page Navigation with Livewire.navigate()

Source: https://livewire.laravel.com/docs/4.x/navigate

Developers can programmatically trigger a navigation to a new page using JavaScript by calling the `Livewire.navigate()` method. This is an alternative to using the `wire:navigate` directive in HTML and allows for more dynamic control over user navigation within the application.

```javascript
Livewire.navigate('/new/url')
```

--------------------------------

### Livewire Component Placeholder - PHP Blade

Source: https://livewire.laravel.com/docs/4.x/directive-placeholder

Demonstrates how to use the @placeholder directive within a Livewire Blade view to display a loading spinner while a lazy component fetches data. This example shows a revenue component that performs a slow database query. The placeholder is a div containing an SVG spinner. The placeholder and component must share the same root element type.

```php
<?php // resources/views/components/⚡revenue.blade.php

use Livewire\Component;
use App\Models\Transaction;

new class extends Component {
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }
};
?>

@placeholder
    <div>
        <!-- Loading spinner -->
        <svg class="animate-spin h-5 w-5">...</svg>
    </div>
@endplaceholder

<div>
    Revenue this month: {{ $amount }}
</div>
```

--------------------------------

### Disable Livewire Pagination URL Query String Tracking with `WithoutUrlPagination`

Source: https://livewire.laravel.com/docs/4.x/pagination

This example shows how to disable Livewire's default behavior of tracking pagination in the URL's query string. By including the `WithoutUrlPagination` trait alongside `WithPagination`, pagination will function, but the URL will not update with the current page number. This means the current page state will not be persisted across navigation.

```php
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\Component;

class ShowPosts extends Component
{
    use WithPagination, WithoutUrlPagination; // [tl! highlight]

    // ...
}
```

--------------------------------

### Apply Global Middleware to Livewire Updates

Source: https://livewire.laravel.com/docs/4.x/security

Shows how to configure a custom route for Livewire update requests, allowing you to apply specific middleware to all AJAX/fetch requests made to the server for component updates.

```php
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle)
        ->middleware(App\Http\Middleware\LocalizeViewPaths::class);
});
```

--------------------------------

### Basic wire:dirty Usage in Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This example demonstrates the basic usage of the `wire:dirty` directive to show an "Unsaved changes..." message when a form has pending updates. The message is hidden by default and appears only when the user modifies form inputs, disappearing again upon form submission. This is a common pattern for signaling unsaved data in Livewire applications.

```blade
<form wire:submit="update">
    <input type="text" wire:model="title">

    <!-- ... -->

    <button type="submit">Update</button>

    <div wire:dirty>Unsaved changes...</div>
</form>
```

--------------------------------

### Defer Full-Page Component Loading with Route Method

Source: https://livewire.laravel.com/docs/4.x/lazy

Load a full-page Livewire component immediately after the initial page load. This is configured by using the `->defer()` method on the `Route::livewire()` definition.

```php
Route::livewire('/dashboard', 'pages::dashboard')->defer();
```

--------------------------------

### Access Livewire Validation Errors in JavaScript (Blade/Alpine.js)

Source: https://livewire.laravel.com/docs/4.x/validation

This example illustrates how to access validation errors directly within your Blade views using Livewire's `$errors` magic property, especially when combined with Alpine.js. It shows how to conditionally display error messages for specific fields. The available methods allow for robust client-side error handling.

```html
<form wire:submit="save">
    <input type="email" wire:model="email">

    <div wire:show="$errors.has('email')">
        <span wire:text="$errors.first('email')"></span>
    </div>

    <button type="submit">Save</button>
</form>

```

--------------------------------

### Enforce Strict Path Matching with wire:current.strict

Source: https://livewire.laravel.com/docs/4.x/wire-current

This example illustrates the use of the `.strict` modifier with the wire:current directive. It forces a strict path string comparison, including trailing slashes, disabling Livewire's default behavior of removing them for matching purposes.

```blade
<nav>
    <a href="/posts/" wire:current.strict="font-bold">Dashboard</a>
</nav>
```

--------------------------------

### Conditional Class Binding with $wire.$dirty() in Alpine.js

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This example demonstrates using the `$wire.$dirty('email')` expression within Alpine.js's conditional class binding. It applies the `border-yellow-500` class to an input field only when the 'email' property is dirty, providing real-time visual feedback on unsaved changes.

```blade
<input
    wire:model="email"
    :class="$wire.$dirty('email') && 'border-yellow-500'"
>
```

--------------------------------

### Initialize Volt Component Property with Folio Route Model Binding

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to initialize a Volt component property using a closure when the value is being injected via Laravel Folio's route model binding. This ensures proper handling of bound models.

```php
use App\Models\User;
use function Livewire\Volt\state;

state(['user' => fn () => $user]);
```

--------------------------------

### Testing Livewire Components with Authentication

Source: https://livewire.laravel.com/docs/4.x/testing

The `actingAs()` method allows you to simulate an authenticated user for your tests. This is crucial for testing components that rely on user permissions or display user-specific data, ensuring correct access control.

```php
use App\Models\User;
use App\Models\Post;

it('user only sees their own posts', function () {
    $user = User::factory()
        ->has(Post::factory()->count(3))
        ->create();

    $stranger = User::factory()
        ->has(Post::factory()->count(2))
        ->create();

    Livewire::actingAs($user)
        ->test('show-posts')
        ->assertViewHas('posts', function ($posts) {
            return count($posts) === 3;
        });
});
```

--------------------------------

### Creating Multiple Independent UI Regions with Named Livewire Islands

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates how to create multiple, independently updating UI regions using named Livewire Islands. This is suitable when regions update separately but don't require distinct logic.

```blade
@island(name: 'stats')
    <div>Stats: {{ $this->stats }}</div>
@endisland

@island(name: 'chart')
    <div>Chart: {{ $this->chartData }}</div>
@endisland
```

--------------------------------

### Enable `wire:navigate` on Redirects

Source: https://livewire.laravel.com/docs/4.x/navigate

This PHP snippet illustrates how to trigger Livewire's navigation for redirects within a Livewire component. By passing `navigate: true` to the `redirect()` method, the redirection will occur using Livewire's background fetching mechanism instead of a standard browser redirect.

```php
return $this->redirect('/posts', navigate: true);
```

--------------------------------

### Configure Livewire Component Layout (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Configuration option in `config/livewire.php` to set a custom default layout for all Livewire components rendered as pages. Instead of using `layouts::app`, you can specify an alternative layout, such as `layouts::dashboard`. This allows for a consistent theming across different components.

```php
<?php

// config/livewire.php

return [
    // ...

    'component_layout' => 'layouts::dashboard',

    // ...
];

```

--------------------------------

### Livewire Component with Download Method

Source: https://livewire.laravel.com/docs/4.x/wire-click

This PHP snippet defines a Livewire component with a `download` method. This method is designed to be triggered by the `wire:click` directive and handles the response for downloading a file. It assumes the existence of an `Invoice` model with a `file_path` attribute.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invoice;

class ShowInvoice extends Component
{
    public Invoice $invoice;

    public function download()
    {
        return response()->download(
            $this->invoice->file_path, 'invoice.pdf'
        );
    }
}
```

--------------------------------

### Livewire Component for Named Transitions

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This Blade snippet shows how to apply a named transition to an element using wire:transition. Providing a name like 'sidebar' allows for targeted CSS styling of the transition, enabling more complex animation effects.

```blade
<div wire:transition="sidebar">...</div>
```

--------------------------------

### Custom Loading States with @placeholder and @island

Source: https://livewire.laravel.com/docs/4.x/directive-island

Demonstrates how to define a custom loading state for a lazy-loaded @island using the @placeholder directive. This allows for a richer user experience during the island's initial load, providing visual feedback like animations or skeleton screens before the actual content is rendered.

```blade
@island(lazy: true)
    @placeholder
        <div class="animate-pulse">
            <div class="h-32 bg-gray-200 rounded"></div>
        </div>
    @endplaceholder

    <div>
        Revenue: {{ $this->revenue }}
    </div>
@endisland
```

--------------------------------

### Generate Livewire Layout File (Shell)

Source: https://livewire.laravel.com/docs/4.x/pages

Command to generate the default Livewire layout file (`app.blade.php`) in the `resources/views/layouts` directory. This file is essential for Livewire components rendered as pages, providing the basic HTML structure, including `@livewireStyles` and `@livewireScripts` directives.

```bash
php artisan livewire:layout

```

--------------------------------

### Manually Bundling Livewire and Alpine JavaScript

Source: https://livewire.laravel.com/docs/4.x/alpine

Details the process of manually bundling Livewire and Alpine.js JavaScript for integration into a custom build process using Vite. This involves including `@livewireScriptConfig` in the layout and importing necessary modules in `app.js`.

```html
<html>
<head>
    <!-- ... -->
    @livewireStyles
    @vite(['resources/js/app.js'])
</head>
<body>
    {{ $slot }}

    @livewireScriptConfig 
</body>
</html>
```

--------------------------------

### Test Component Redirects with assertRedirect()

Source: https://livewire.laravel.com/docs/4.x/testing

Verifies that a component action results in a redirect to a specified URL. Can assert redirects to a full URL, a named route, or a page component.

```php
it('redirects to posts index after creating', function () {
    Livewire::test('post.create')
        ->set('title', 'New post')
        ->set('content', 'Content here')
        ->call('save')
        ->assertRedirect('/posts');
});

// Assert redirects to named routes or page components:
->assertRedirect(route('posts.index'));
->assertRedirectToRoute('posts.index');
```

--------------------------------

### Route to Livewire Component as Page (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Defines a route that renders a Livewire component as a full page. This is achieved using the `Route::livewire()` helper method in `routes/web.php`. When the specified URL is visited, the Livewire component is rendered within the application's default layout.

```php
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/posts/create', 'pages::post.create');

```

--------------------------------

### Listen for Livewire Events Globally with JavaScript

Source: https://livewire.laravel.com/docs/4.x/events

Listen for Livewire events from any script in your application using `Livewire.on`. This is useful for global notifications or actions triggered by events from any component. The listener is initialized after the DOM is ready and Livewire has loaded.

```html
document.addEventListener('livewire:init', () => {
   Livewire.on('post-created', (event) => {
       // Global event handling logic
   });
});
```

--------------------------------

### Setting Component Properties in Livewire

Source: https://livewire.laravel.com/docs/4.x/testing

Demonstrates how to set single or multiple properties on a Livewire component. The `set` method can accept a string key and value for a single property, or an associative array to update multiple properties at once.

```php
$component->set('title', 'New Post Title');
$component->set(['title' => 'Updated Title', 'content' => 'Updated Content']);
```

--------------------------------

### Reference Syntax for @persist Directive

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Provides the reference syntax for the @persist directive, outlining its parameters and their types. It specifies that the `$key` parameter is a required string used to identify the element to be persisted.

```blade
@persist(string $key)
    <!-- Content -->
@endpersist
```

--------------------------------

### Call Livewire Method with Alpine.js

Source: https://livewire.laravel.com/docs/4.x/alpine

Shows how to trigger a Livewire method ('save') from an input's 'blur' event using Alpine.js. While `wire:model.blur` is often sufficient, this illustrates direct method invocation via $wire for custom interactions.

```html
<form wire:submit="save">
    <input wire:model="title" type="text" x-on:blur="$wire.save()">  

    <!-- ... -->

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Action with Dependency Injection in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how a Livewire Volt action can leverage Laravel's service container for dependency injection. The `$delete` action accepts an instance of `PostRepository`, enabling it to use repository methods for data operations.

```php
<?php

use App\Repositories\PostRepository;
use function Livewire\Volt\state;

state(['postId']);

$delete = function (PostRepository $posts) {
    $posts->delete($this->postId);

    // ...
};

?>
```

--------------------------------

### Livewire Component with Validation and Persistent Middleware in PHP

Source: https://livewire.laravel.com/docs/4.x/security

A Livewire component demonstrating property validation using `#[Validate]` and the integration with route-level middleware. The `mount` method initializes component properties from a bound model, and the `update` method handles the data persistence. Persistent middleware ensures authorization is checked on every request.

```php
<?php

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Validate;

class UpdatePost extends Component
{
    public Post $post;

    #[Validate('required|min:5')]
    public $title = '';

    public $content = '';

    public function mount()
    {
        $this->title = $this->post->title;
        $this->content = $this->post->content;
    }

    public function update()
    {
        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
```

--------------------------------

### Sync URL Query Parameters with Component State in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This snippet demonstrates how to use the `state()->url()` method in Livewire Volt to synchronize component state with URL query parameters. It allows for automatic updates to the browser's URL when state changes and supports options like aliasing and history management.

```php
<?php

use App\Models\Post;
use function Livewire\Volt\computed, state;

state(['search'])->url();

$posts = computed(function () {
    return Post::where('title', 'like', '%'.$this->search.'%')->get();
});

?>

<div>
    <input wire:model.live="search" type="search" placeholder="Search posts by title...">

    <h1>Search Results:</h1>

    <ul>
        @foreach($this->posts as $post)
            <li wire:key="{{ $post->id }}">{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
```

```php
use App\Models\Post;
use function Livewire\Volt\state;

state(['page' => 1])->url(as: 'p', history: true, keep: true);

// ...
```

--------------------------------

### Render Posts Component with Nested ShowPost

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This PHP class defines a Livewire component for displaying a list of posts. It fetches posts for the authenticated user and limits the number displayed based on the 'postLimit' property. It renders a Livewire component 'livewire.posts'.

```php
<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Posts extends Component
{
    public $postLimit = 2;

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Auth::user()->posts()
                ->limit($this->postLimit)->get(),
        ]);
    }
}
```

--------------------------------

### Add Persistent Livewire Middleware

Source: https://livewire.laravel.com/docs/4.x/security

Demonstrates how to add custom application middleware to the list of persistent middleware that Livewire automatically re-applies to future network requests. This is typically done within a Service Provider.

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::addPersistentMiddleware([
            App\Http\Middleware\EnsureUserHasRole::class,
        ]);
    }
}
```

--------------------------------

### Livewire Interceptor Overview (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Demonstrates how to use action, message, and request interceptors in Livewire. It shows the basic syntax for applying interceptors globally and to specific actions or messages, and how to unsubscribe.

```javascript
// Action interceptors - fire for each action call
$wire.intercept(callback)                     // All actions on this component
$wire.intercept('save', callback)             // Only 'save' action
Livewire.interceptAction(callback)            // Global (all components)

// Message interceptors - fire for each component message
$wire.interceptMessage(callback)              // Messages from this component
$wire.interceptMessage('save', callback)      // Only when message contains 'save'
Livewire.interceptMessage(callback)           // Global (all components)

// Request interceptors - fire for each HTTP request
$wire.interceptRequest(callback)              // Requests involving this component
$wire.interceptRequest('save', callback)      // Only when request contains 'save'
Livewire.interceptRequest(callback)           // Global (all requests)

// All interceptors return an unsubscribe function:
let unsubscribe = $wire.intercept(callback)
unsubscribe() // Remove the interceptor
```

--------------------------------

### Applying Authorization Middleware to Livewire Routes in PHP

Source: https://livewire.laravel.com/docs/4.x/security

Shows how to apply route-level authorization middleware, such as `can:update,post`, to Livewire components. This ensures that users must have the necessary permissions to access the Livewire component's page. Livewire automatically re-applies this middleware to subsequent AJAX requests for persistent protection.

```php
Route::livewire('/post/{post}', App\Livewire\UpdatePost::class)
    ->middleware('can:update,post'); // [tl! highlight]
```

--------------------------------

### Livewire Component with Conditional Rendering

Source: https://livewire.laravel.com/docs/4.x/wire-transition

This Livewire component demonstrates basic usage of wire:transition. It controls the visibility of a comments section based on the 'showComments' property. Elements marked with wire:transition will animate smoothly when added or removed.

```blade
<div>
    <button wire:click="$toggle('showComments')">Toggle comments</button>

    @if ($showComments)
        <div wire:transition> 
            @foreach ($post->comments as $comment)
                <div>{{ $comment->body }}</div>
            @endforeach
        </div>
    @endif
</div>
```

--------------------------------

### Basic #[Defer] Component Loading (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-defer

Applies the #[Defer] attribute to a Livewire component to make it load immediately after the initial page load. The component initially renders as an empty div and then fetches its data asynchronously.

```php
<?php 

use Livewire\Attributes\Defer;
use Livewire\Component;
use App\Models\Transaction;

new #[Defer] class extends Component {
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }
};
?>
```

--------------------------------

### Access Route Parameters in Livewire Mount Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Demonstrates how to define a route with a parameter in `routes/web.php` and access it within the `mount()` method of a Livewire component. Livewire automatically passes route parameter values to the `mount()` method if parameter names match.

```php
<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public Post $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }
};
```

--------------------------------

### Dynamically Set Transition Type with transition() (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Demonstrates using the `transition()` method within a Livewire component action to dynamically set the transition type based on runtime logic. This allows for conditional transitions, such as 'forward' or 'backward', based on user actions.

```php
<?php

// ... inside a Livewire component class

public function goToStep($step)
{
    $this->transition(type: $step > $this->step ? 'forward' : 'backward');

    $this->step = $step;
}

```

--------------------------------

### Stream Content to Element using wire:ref (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-ref

Demonstrates streaming content, such as generated text from an LLM, directly to a specific HTML element identified by 'wire:ref'. The `$this->stream($chunk)->to(ref: 'answer')` method is used for this purpose.

```php
<?php

use Livewire\Component;

class AiComponent extends Component {
    public $question = '';

    public function ask()
    {
        // Assuming Ai::ask is a placeholder for an LLM interaction
        Ai::ask($this->question, function ($chunk) {
            $this->stream($chunk)->to(ref: 'answer');
        });

        $this->reset('question');
    }
};
?>
```

```html
<div>
    <input type="text" wire:model="question">

    <button wire:click="ask"></button>

    <h2>Answer:</h2>

    <p wire:ref="answer"></p>
</div>
```

--------------------------------

### Define Custom Pagination Views in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/pagination

Shows how to define 'paginationView()' or 'paginationSimpleView()' methods within a Livewire component to specify custom Blade views for pagination. This approach allows for component-level control over pagination view selection.

```php
public function paginationView()
{
    return 'custom-pagination-links-view';
}

public function paginationSimpleView()
{
    return 'custom-simple-pagination-links-view';
}
```

--------------------------------

### Define Query String via Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Configure query string parameters dynamically using a `queryString` method within a Livewire component. This method allows for advanced configurations, such as aliasing parameter names, which can be useful for SEO or cleaner URLs.

```php
use Livewire\Component;

class ShowUsers extends Component
{
    // ...

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 'q',
            ],
        ];
    }
}
```

--------------------------------

### Implement Cursor Pagination in Livewire with Laravel

Source: https://livewire.laravel.com/docs/4.x/pagination

Livewire supports Laravel's `cursorPaginate()` method for faster pagination on very large datasets. When using this method, the URL will contain an encoded cursor instead of a traditional page number, enabling efficient retrieval of the next set of records.

```php
public function render()
{
    return view('show-posts', [
        'posts' => Post::cursorPaginate(10),
    ]);
}

```

--------------------------------

### Configure Fathom Analytics for SPA Navigation

Source: https://livewire.laravel.com/docs/4.x/navigate

When using `wire:navigate`, traditional analytics scripts may not re-evaluate on page changes. To ensure analytics software like Fathom Analytics correctly tracks Single Page Application (SPA) navigations, add the `data-spa="auto"` attribute to the Fathom script tag in the `<head>` section of your HTML.

```html
<head>
    <!-- ... -->

    <!-- Fathom Analytics -->
    @if (! config('app.debug'))
        <script src="https://cdn.usefathom.com/script.js" data-site="ABCDEFG" data-spa="auto" defer></script> 
    @endif
</head>
```

--------------------------------

### HTML Output: Initial Render of Todos Component

Source: https://livewire.laravel.com/docs/4.x/morphing

The initial HTML structure generated by the Livewire Todos component. It displays a form containing an unordered list of existing todos and an input field for adding new ones.

```html
<form wire:submit="add">
    <ul>
        <li>first</li>

        <li>second</li>
    </ul>

    <input wire:model="todo">
</form>
```

--------------------------------

### Enable Livewire CSP-Safe Mode Configuration

Source: https://livewire.laravel.com/docs/4.x/csp

To enable Livewire's CSP-safe mode, modify the `csp_safe` option in your `config/livewire.php` file to `true`. This ensures Livewire applications can run in environments with strict Content Security Policy (CSP) headers that prohibit `'unsafe-eval'`.

```php
'csp_safe' => true,
```

--------------------------------

### Listen for Echo Event with Dynamic Channel in Livewire (getListeners)

Source: https://livewire.laravel.com/docs/4.x/events

Demonstrates listening for a broadcasted `OrderShipped` event on a dynamic channel (e.g., `orders.123`) within a Livewire component using the `getListeners()` method. This is useful when the channel name includes variables like an Order ID.

```php
<?php // resources/views/components/⚡order-tracker.blade.php

use Livewire\Attributes\On; // [tl! highlight]
use Livewire\Component;
use App\Models\Order;

new class extends Component {
    public Order $order;

    public $showOrderShippedNotification = false;

    public function getListeners()
    {
        return [
            "echo:orders.{$this->order->id},OrderShipped" => 'notifyShipped',
        ];
    }

    public function notifyShipped()
    {
        $this->showOrderShippedNotification = true;
    }

    // ...
};

```

--------------------------------

### Define Volt Component Property with Initial Value

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to define a property for a Volt component using the `state` function with an initial value. This property can be accessed in the component's view and persists between Livewire updates.

```php
<?php

use function Livewire\Volt\state;

state(['count' => 0]);

?>

<div>
    {{ $count }}
</div>
```

--------------------------------

### Bundle Lazy Components with `bundle: true`

Source: https://livewire.laravel.com/docs/4.x/attribute-lazy

Enables bundling of multiple lazy-loaded components into a single network request using the `bundle: true` parameter in the `#[Lazy]` attribute. This reduces the number of parallel HTTP requests, optimizing performance when many lazy components are present on a page.

```php
<?php

use Livewire\Attributes\Lazy;
use Livewire\Component;

new #[Lazy(bundle: true)] class extends Component {
    // ...
};
?>
```

--------------------------------

### Lazy vs Deferred Loading with @island

Source: https://livewire.laravel.com/docs/4.x/directive-island

Illustrates the difference between `lazy: true` and `defer: true` parameters for the @island directive. `lazy: true` waits for the island to be scrolled into view, while `defer: true` loads the island's content immediately after the main page has loaded, offering distinct strategies for optimizing content delivery.

```blade
{{-- Loads when scrolled into view --}}
@island(lazy: true)
    <!-- ... -->
@endisland

{{-- Loads immediately after page load --}}
@island(defer: true)
    <!-- ... -->
@endisland
```

--------------------------------

### Styling with Tailwind's data-loading variant

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Demonstrates how to use Tailwind CSS's `data-loading` attribute variant to apply styles like opacity and pointer-events during network requests. This method allows for declarative styling directly within your HTML templates.

```blade
<button
    wire:click="save"
    class="data-loading:opacity-50 data-loading:pointer-events-none"
>
    Save Changes
</button>
```

--------------------------------

### Configure Default Placeholder View

Source: https://livewire.laravel.com/docs/4.x/lazy

Set a default Blade view to be used as a placeholder for all lazy-loaded Livewire components that do not have a specific `placeholder()` defined. This configuration is done in the `config/livewire.php` file.

```php
'component_placeholder' => 'livewire.placeholder',
```

--------------------------------

### Livewire Component for File Uploads (PHP)

Source: https://livewire.laravel.com/docs/4.x/uploads

A Livewire component demonstrating how to handle file uploads using the WithFileUploads trait and attribute-based validation. It shows how to define a public property for the uploaded file and a method to save it.

```php
<?php 
use LivewireAttributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

new class extends Component {
    use WithFileUploads;

    #[Validate('image|max:1024')] // 1MB Max
    public $photo;

    public function save()
    {
        $this->photo->store(path: 'photos');
    }
};
```

--------------------------------

### Lazy Initialize Volt Component Property with Closure

Source: https://livewire.laravel.com/docs/4.x/volt

Explains how to use a closure to lazily initialize a Volt component property. This is recommended when the initial value depends on external services, database queries, or models, ensuring the value is resolved only when needed.

```php
use App\Models\User;
use function Livewire\Volt\state;

state(['count' => fn () => User::count()]);
```

--------------------------------

### Nesting a Livewire Component

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates how to embed a Livewire component (e.g., 'todos') within a parent component's Blade view. The nested component is rendered in place during the initial page load.

```php
<?php // resources/views/components/⚡dashboard.blade.php

use LivewireComponent;

new class extends Component {
    //
};
?>

<div>
    <h1>Dashboard</h1>

    <livewire:todos /> 
</div>
```

--------------------------------

### Disable Lazy/Defer Loading for Full-Page Components

Source: https://livewire.laravel.com/docs/4.x/lazy

Opt-out of lazy or deferred loading for full-page Livewire components, even if they are marked with attributes like `#[Lazy]` or `#[Defer]`. This is done by setting `enabled: false` within the `->lazy()` or `->defer()` methods.

```php
Route::livewire('/dashboard', 'pages::dashboard')->lazy(enabled: false);
Route::livewire('/dashboard', 'pages::dashboard')->defer(enabled: false);
```

--------------------------------

### Setting and Asserting Livewire Component Properties

Source: https://livewire.laravel.com/docs/4.x/testing

Manage component state in tests using `set()` to update property values and `assertSet()` to verify them. This allows you to simulate user interactions or initial states and confirm their effects on the component.

```php
it('can set the title property', function () {
    Livewire::test('post.create')
        ->set('title', 'My amazing post')
        ->assertSet('title', 'My amazing post');
});
```

--------------------------------

### Test Event Listeners (PHP)

Source: https://livewire.laravel.com/docs/4.x/events

Test event listeners by dispatching events from the test environment and asserting that the component reacts as expected. This involves dispatching an event and then checking for changes in the component's rendered output.

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Livewire\Dashboard;
use Livewire\Livewire;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_updates_post_count_when_a_post_is_created()
    {
        Livewire::test(Dashboard::class)
            ->assertSee('Posts created: 0')
            ->dispatch('post-created')
            ->assertSee('Posts created: 1');
    }
}

```

--------------------------------

### Configure Pest for View-Based Components

Source: https://livewire.laravel.com/docs/4.x/testing

Steps to configure Pest to recognize and run tests located alongside view-based Livewire components. This involves updating the `tests/Pest.php` file and the `phpunit.xml` configuration.

```php
pest()->extend(Tests\TestCase::class)
    // ...
    ->in('Feature', '../resources/views');
```

```xml
<testsuite name="Components">
    <directory suffix=".test.php">resources/views</directory>
</testsuite>
```

--------------------------------

### Livewire Component for Product Filtering with URL Parameters (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-url

This Livewire component dynamically filters products based on search queries, category, price range, and sorting, persisting these filters in the URL using the #[Url] attribute. It uses computed properties to fetch and display filtered products. Dependencies include the Product model and Livewire framework.

```php
<?php // resources/views/pages/⚡products.blade.php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Product;

new class extends Component {
    #[Url(as: 'q')]
    public $search = '';

    #[Url]
    public $category = 'all';

    #[Url]
    public $minPrice = 0;

    #[Url]
    public $maxPrice = 1000;

    #[Url]
    public $sort = 'name';

    #[Computed]
    public function products()
    {
        return Product::query()
            ->when($this->search, fn($q) => $q->search($this->search))
            ->when($this->category !== 'all', fn($q) => $q->where('category', $this->category))
            ->whereBetween('price', [$this->minPrice, $this->maxPrice])
            ->orderBy($this->sort)
            ->paginate(20);
    }
};
?>
```

--------------------------------

### JavaScript File Uploads with Livewire API

Source: https://livewire.laravel.com/docs/4.x/uploads

Demonstrates how to use Livewire's JavaScript API to upload single files, multiple files, remove uploaded files, and cancel uploads. It requires access to the Livewire `$wire` object and a file input element within the component's template. Callbacks are provided for success, error, progress, and cancellation events.

```blade
<script>
    let file = $wire.el.querySelector('input[type="file"]').files[0]

    // Upload a file...
    $wire.upload('photo', file, (uploadedFilename) => {
        // Success callback...
    }, () => {
        // Error callback...
    }, (event) => {
        // Progress callback...
        // event.detail.progress contains a number between 1 and 100 as the upload progresses
    }, () => {
        // Cancelled callback...
    })

    // Upload multiple files...
    $wire.uploadMultiple('photos', [file], successCallback, errorCallback, progressCallback, cancelledCallback)

    // Remove single file from multiple uploaded files...
    $wire.removeUpload('photos', uploadedFilename, successCallback)

    // Cancel an upload...
    $wire.cancelUpload('photos')
</script>
```

--------------------------------

### Initialize Google Maps with Component Scripts

Source: https://livewire.laravel.com/docs/4.x/javascript

This snippet demonstrates how to initialize a Google Maps instance within a Livewire component. It includes loading the Google Maps API script and creating a new map instance tied to a specific DOM element. Ensure you replace 'YOUR_KEY' with your actual Google Maps API key.

```blade
<div>
    <div id="map" style="height: 400px;"></div>
</div>

@assets
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY"></script>
@endassets

<script>
    new google.maps.Map($wire.$el.querySelector('#map'), {
        center: { lat: {{ $latitude }}, lng: {{ $longitude }} },
        zoom: 12
    });
</script>
```

--------------------------------

### Lazy Load Component with Custom Placeholder

Source: https://livewire.laravel.com/docs/4.x/attribute-lazy

Configures a lazy-loaded Livewire component to display a custom HTML placeholder until it loads. This provides a better user experience by showing a skeleton UI instead of an empty div. The placeholder is defined within the `placeholder()` method.

```php
<?php

use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\Transaction;

new #[Lazy] class extends Component {
    public $amount;

    public function mount()
    {
        $this->amount = Transaction::monthToDate()->sum('amount');
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <div class="animate-pulse bg-gray-200 h-20 rounded"></div>
        </div>
        HTML;
    }
};
?>
```

--------------------------------

### Naming and Triggering Livewire Islands

Source: https://livewire.laravel.com/docs/4.x/islands

Demonstrates how to name a Livewire island using `name: 'island-name'` and trigger it from elsewhere in the component using `wire:island="island-name"`. This enables targeted updates to specific islands, enhancing control over component interactions.

```blade
<div>
    @island(name: 'revenue')
        <div>
            Revenue: {{ $this->revenue }}
        </div>
    @endisland

    <button type="button" wire:click="$refresh" wire:island="revenue">
        Refresh revenue
    </button>
</div>
```

--------------------------------

### Blade Template with wire:show for Basic Visibility Toggle

Source: https://livewire.laravel.com/docs/4.x/wire-show

This Blade template demonstrates the basic usage of the wire:show directive to conditionally display a form based on the 'showModal' property. It uses Alpine.js for the initial click event to trigger the state change.

```blade
<div>
    <button x-on:click="$wire.showModal = true">New Post</button>

    <div wire:show="showModal">
        <form wire:submit="save">
            <textarea wire:model="content"></textarea>

            <button type="submit">Save Post</button>
        </form>
    </div>
</div>
```

--------------------------------

### Livewire Activity Feed with Append Mode

Source: https://livewire.laravel.com/docs/4.x/islands

Demonstrates using 'wire:island.append' to add new activities to an existing feed without replacing the entire content. This is useful for implementing features like infinite scrolling or real-time updates.

```blade
<?php // resources/views/components/⚡activity-feed.blade.php

use LivewireAttributesComputed;
use LivewireComponent;
use AppModelsActivity;

new class extends Component {
    public $page = 1;

    public function loadMore()
    {
        $this->page++;
    }

    #[Computed]
    public function activities()
    {
        return Activity::latest()
            ->forPage($this->page, 10)
            ->get();
    }
};
?>

<div>
    @island(name: 'feed')
        @foreach ($this->activities as $activity)
            <x-activity-item wire:key="{{ $activity->id }}" :activity="$activity" />
        @endforeach
    @endisland

    <button type="button" wire:click="loadMore" wire:island.append="feed">
        Load more
    </button>
</div>
```

--------------------------------

### Highlighting Active Links with data-current Attribute

Source: https://livewire.laravel.com/docs/4.x/navigate

Illustrates how to style active navigation links using the `data-current` attribute automatically added by Livewire to `wire:navigate` links matching the current page. This allows for CSS or Tailwind styling without extra directives.

```blade
<nav>
    <a href="/dashboard" wire:navigate class="data-current:font-bold data-current:text-zinc-800">Dashboard</a>
    <a href="/posts" wire:navigate class="data-current:font-bold data-current:text-zinc-800">Posts</a>
    <a href="/users" wire:navigate class="data-current:font-bold data-current:text-zinc-800">Users</a>
</nav>
```

--------------------------------

### Dispatch Laravel Event

Source: https://livewire.laravel.com/docs/4.x/events

Demonstrates how to dispatch a Laravel event that is configured to be broadcast. This typically occurs after a specific action, like an order being shipped.

```php
use App\Events\OrderShipped;

OrderShipped::dispatch();

```

--------------------------------

### Placing @persist in Layouts (Blade)

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Shows how to integrate the @persist directive within a main application layout file (e.g., `app.blade.php`). This allows persistent elements like an audio player to be present across all pages rendered by the layout.

```blade
<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>

        @persist('player')
            <audio src="{{ $episode->file }}" controls></audio>
        @endpersist

        @livewireScripts
    </body>
</html>
```

--------------------------------

### Bulk Assign Livewire Properties with fill()

Source: https://livewire.laravel.com/docs/4.x/properties

Shows how to use the fill() method in Livewire to assign multiple properties at once from an associative array. This reduces verbosity compared to assigning each property individually in the mount() method.

```php
<?php // resources/views/components/post/⚡edit.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $post;

    public $title;

    public $description;

    public function mount(Post $post)
    {
        $this->post = $post;

        $this->fill( // [tl! highlight]
            $post->only('title', 'description'), // [tl! highlight]
        ); // [tl! highlight]
    }

    // ...
};

```

--------------------------------

### Reusing Nested Livewire Components (Blade)

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates how to reuse a 'todo-item' component across the application using Blade syntax. This highlights the reusability aspect of nested components, where the component is self-contained with its own logic and state.

```blade
{{-- This todo-item can be reused across the application --}}
<livewire:todo-item :$todo :wire:key="$todo->id" />
```

--------------------------------

### Rendering Dynamic Child Components in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

This snippet illustrates how to render a Livewire component dynamically at runtime using the `<livewire:dynamic-component>` tag. The `:is` prop determines which component to render based on a variable, enabling flexible UI construction. This is particularly useful for multi-step forms or content that changes based on application state.

```php
<?php // resources/views/components/⚡steps.blade.php

use Livewire\Component;

new class extends Component {
    public $current = 'step-one';

    protected $steps = [
        'step-one',
        'step-two',
        'step-three',
    ];

    public function next()
    {
        $currentIndex = array_search($this->current, $this->steps);

        $this->current = $this->steps[$currentIndex + 1];
    }
};
?>

<div>
    <livewire:dynamic-component :is="$current" :wire:key="$current" />

    <button wire:click="next">Next</button>
</div>
```

```blade
<livewire:dynamic-component :is="$current" />
```

```blade
<livewire:is :component="$current" :wire:key="$current" />
```

--------------------------------

### Use Custom Pagination View via Blade Links Method

Source: https://livewire.laravel.com/docs/4.x/pagination

Demonstrates how to specify a custom Blade view for rendering pagination links directly within a Blade template using the 'links()' method. Livewire will then look for the specified view (e.g., 'custom-pagination-links.blade.php').

```blade
{{ $posts->links('custom-pagination-links') }}
```

--------------------------------

### Posts Component Blade Template

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This Blade template renders a 'Posts' Livewire component. It includes an input field to control the 'postLimit' property and iterates through the fetched posts, rendering a nested 'show-post' component for each. A wire:key is used for efficient updates.

```blade
<div>
    Post Limit: <input type="number" wire:model.live="postLimit">

    @foreach ($posts as $post)
        <livewire:show-post :$post :wire:key="$post->id">
    @endforeach
</div>
```

--------------------------------

### Implement Streaming File Download in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/downloads

Shows how to implement streaming file downloads in Livewire using `response()->streamDownload()`. While not a true stream on the backend, this method allows echoing file contents directly to be downloaded by the browser. The download is initiated once the file content is fully collected.

```php
public function download()
{
    return response()->streamDownload(function () {
        echo '...'; // Echo download contents directly...
    }, 'invoice.pdf');
}

```

--------------------------------

### Placeholder HTML with @placeholder Directive (Livewire)

Source: https://livewire.laravel.com/docs/4.x/lazy

Illustrates how to use the `@placeholder` directive within a Livewire component's view to render custom HTML content while the component is loading. This provides visual feedback to the user, such as loading spinners or skeleton screens.

```php
<?php // resources/views/components/⚡revenue.blade.php

use Livewire\Component;
use App\Models\Transaction;

new class extends Component {
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }
};
?>

@placeholder
    <div>
        <!-- Loading spinner... -->
        <svg>...</svg>
    </div>
@endplaceholder

<div>
    Revenue this month: {{ $amount }}
</div>
```

--------------------------------

### Conditional Rendering Skip with skipRender() in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-renderless

Shows an alternative to the Renderless attribute where the skipRender() method is called directly within the Livewire component action. This provides flexibility for conditionally skipping renders.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function incrementViewCount()
    {
        $this->post->incrementViewCount();

        $this->skipRender(); // [tl! highlight]
    }
};
```
```

--------------------------------

### Implement Wireable interface for custom class

Source: https://livewire.laravel.com/docs/4.x/properties

Demonstrates how to make a PHP class (Customer) compatible with Livewire by implementing the Wireable interface. It includes `toLivewire()` for serialization and `fromLivewire()` for deserialization, enabling seamless data transfer.

```php
use Livewire\Wireable;

class Customer implements Wireable
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function toLivewire()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
        ];
    }

    public static function fromLivewire($value)
    {
        $name = $value['name'];
        $age = $value['age'];

        return new static($name, $age);
    }
}
```

--------------------------------

### Manually Authorizing Actions in Livewire Components with PHP

Source: https://livewire.laravel.com/docs/4.x/security

Illustrates manual authorization within a Livewire component's action method using Laravel's `authorize` method. This approach is useful when model properties are not directly bound or when more complex authorization logic is needed. It relies on Laravel's authorization features (Gates/Policies) and Livewire.

```php
<?php

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function delete()
    {
        $post = Post::find($this->postId);

        $this->authorize('delete', $post); // [tl! highlight]

        $post->delete();
    }
}
```

```html
<button wire:click="delete">Delete Post</button>
```

--------------------------------

### Imperatively Skip Transitions with skipTransition() (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Shows how to programmatically skip view transitions for a Livewire action by calling the `skipTransition()` method. This provides an imperative way to disable animations for specific component updates.

```php
<?php

// ... inside a Livewire component class

public function reset()
{
    $this->skipTransition();

    $this->step = 1;
}

```

--------------------------------

### Automatic Route Model Binding with Property Declaration (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Illustrates how Livewire can automatically resolve and bind a route model to a public component property if the property name matches the route model parameter and has a matching type-hint.

```php
<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;
};
```

--------------------------------

### Define Livewire Component Validation Rules with methods()

Source: https://livewire.laravel.com/docs/4.x/validation

Demonstrates how to define validation rules, custom messages, and attribute names using dedicated methods within a Livewire component. This approach is useful for runtime validation logic not supported by attributes.

```php
use Livewire\Component;
use App\Models\Post;
use Illuminate\Validation\Rule;

class CreatePost extends Component
{
	public $title = '';

    public $content = '';

    protected function rules()
    {
        return [
            'title' => Rule::exists('posts', 'title'),
            'content' => 'required|min:3',
        ];
    }

    protected function messages()
    {
        return [
            'content.required' => 'The :attribute are missing.',
            'content.min' => 'The :attribute is too short.',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'content' => 'description',
        ];
    }

    public function save()
    {
        $this->validate();

		Post::create([
            'title' => $this->title,
            'content' => $this->content,
		]);

		return redirect()->to('/posts');
    }

    // ...
}
```

--------------------------------

### Deferring Component Instance via Blade Parameter

Source: https://livewire.laravel.com/docs/4.x/attribute-defer

Illustrates deferring a specific instance of a Livewire component directly within a Blade template using the `defer` parameter. This offers an alternative to using the #[Defer] attribute when only certain component instances need to be deferred.

```blade
<livewire:revenue defer />
```

--------------------------------

### Define Livewire Component with Custom DTO

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This PHP code defines a Livewire component that uses a custom DTO, 'Address'. The component initializes the 'Address' object in its mount method, demonstrating how to integrate custom data structures.

```php
class UpdateProperty extends Component
{
    public Address $address;

    public function mount()
    {
        $this->address = new Address();
    }
}
```

--------------------------------

### Providing Additional View Data (Blade/PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to pass extra data to the view in class-based Volt components using the `with` method. This method returns an array of data that will be merged with the component's public properties.

```php
<?php

use LivewireWithPagination;
use LivewireVoltComponent;
use App\Models\Post;

new class extends Component {
    use WithPagination;

    public function with(): array
    {
        return [
            'posts' => Post::paginate(10),
        ];
    }
} ?>

<div>
    <!-- ... -->
</div>
```

--------------------------------

### Nested Livewire Component Lifecycle Hooks (PHP)

Source: https://livewire.laravel.com/docs/4.x/nesting

Illustrates the use of separate lifecycle hooks like `mount()` and `updated()` within a child Livewire component. This is useful when the child component requires its own specific logic during different stages of its lifecycle, independent of the parent.

```php
public function mount($todo)
{
    $this->authorize('view', $todo);
}

public function updated($property)
{
    // Child-specific update logic
}
```

--------------------------------

### Test Component Authorization with assertForbidden()

Source: https://livewire.laravel.com/docs/4.x/testing

Ensures that unauthorized users cannot perform actions on components. Uses `Livewire::actingAs()` to set the user and `assertForbidden()` to verify the authorization failure.

```php
use App\Models\User;
use App\Models\Post;

it('cannot update another users post', function () {
    $user = User::factory()->create();
    $stranger = User::factory()->create();
    $post = Post::factory()->for($stranger)->create();

    Livewire::actingAs($user)
        ->test('post.edit', ['post' => $post])
        ->set('title', 'Hacked!')
        ->call('save')
        ->assertForbidden();
});
```

--------------------------------

### Implement Simple Pagination in Livewire with Laravel

Source: https://livewire.laravel.com/docs/4.x/pagination

To use Laravel's `simplePaginate()` method within a Livewire component, you can return the paginated results directly from the `render` method. This method is more performant for large datasets as it only displays 'next' and 'previous' navigation links.

```php
public function render()
{
    return view('show-posts', [
        'posts' => Post::simplePaginate(10),
    ]);
}

```

--------------------------------

### Default Livewire Blade Layout Structure (Blade)

Source: https://livewire.laravel.com/docs/4.x/pages

The default Blade layout file (`app.blade.php`) used by Livewire when components are rendered as pages. It includes essential elements like the document title, CSS/JS assets via Vite, and placeholders for Livewire's JavaScript and CSS assets using `@livewireStyles` and `@livewireScripts`. The `$slot` variable is crucial for rendering the content of the Livewire component.

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>

```

--------------------------------

### Livewire wire:confirm Directive Syntax Reference

Source: https://livewire.laravel.com/docs/4.x/wire-confirm

This is a reference for the basic syntax of the `wire:confirm` directive in Livewire. It shows the structure for setting a confirmation message for an action.

```blade
wire:confirm="message"
```

--------------------------------

### Dispatch Event to Specific Component using wire:ref (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-ref

Demonstrates how to dispatch a 'close' event to a specific Livewire component named 'modal' using the wire:ref attribute. This allows for targeted communication between components.

```php
<?php

use Livewire\Component;
use Livewire\Attributes\On;

class MyComponent extends Component {
    public bool $isOpen = false;

    #[On('close')]
    public function close()
    {
        $this->isOpen = false;
    }

    public function save()
    {
        // ...

        $this->dispatch('close')->to(ref: 'modal');
    }
};
?>
```

```html
<div wire:show="isOpen">
    {{ $slot }}
</div>

<livewire:modal wire:ref="modal">
    <!-- ... -->

    <button wire:click="save">Save</button>
</livewire:modal>
```

--------------------------------

### Script Execution in Body with wire:navigate

Source: https://livewire.laravel.com/docs/4.x/navigate

All `<script>` tags within the `<body>` of a Blade template are re-evaluated on every page visit due to Livewire replacing the entire body content. To execute a script only once on the initial page load, add the `data-navigate-once` attribute to the `<script>` tag.

```html
<!-- Page one -->
<body>
    <script>
        console.log('Runs on page one')
    </script>
</body>

<!-- Page two -->
<body>
    <script>
        console.log('Runs on page two')
    </script>
</body>
```

```html
<script data-navigate-once>
    console.log('Runs only on page one')
</script>
```

--------------------------------

### Enable Modelable Property for Wire:Model Binding in Volt

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to enable the modelable feature for a Volt component property by chaining the `modelable` method. This allows for direct `wire:model` binding to a child component's state, simplifying two-way data binding.

```php
state(['form'])->modelable();
```

--------------------------------

### Execute JavaScript After Server Actions with js() (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-js

Shows how to use the $this->js() method within a PHP method to queue JavaScript code for execution after a server action completes. This is useful for providing user feedback, such as confirmation messages after a save operation.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $title = '';

    public function save()
    {
        Post::create(['title' => $this->title]);

        $this->js("alert('Post saved successfully!')"); // [tl! highlight]
    }
};

```

--------------------------------

### Bidirectional State Synchronization with $wire.entangle()

Source: https://livewire.laravel.com/docs/4.x/alpine

Explains how to use $wire.entangle() for bidirectional state synchronization between Alpine.js and Livewire, emphasizing its use only in rare cases due to potential predictability and performance issues. The `.live` modifier ensures immediate synchronization.

```blade
<div x-data="{ open: $wire.entangle('showDropdown') }">
    <button x-on:click="open = true">Show More...</button>

    <ul x-show="open">
        <li><button wire:click="archive">Archive</button></li>
    </ul>
</div>
```

```blade
<div x-data="{ open: $wire.entangle('showDropdown').live }">

```

--------------------------------

### Dynamic Session Keys with #[Session(key: '...') using Properties]

Source: https://livewire.laravel.com/docs/4.x/attribute-session

This snippet illustrates creating dynamic session keys using string interpolation with other component properties. The session key is generated based on the value of `$author->id`, allowing for unique session persistence per author. This is powerful for multi-tenant applications or scenarios where state needs to be specific to related data.

```php
<?php 

use Livewire\Attributes\Session;
use Livewire\Component;
use App\Models\Author;

new class extends Component {
    public Author $author;

    #[Session(key: 'search-{author.id}')] // [tl! highlight]
    public $search = '';
};
?>
```

--------------------------------

### Basic wire:cloak Usage in Blade

Source: https://livewire.laravel.com/docs/4.x/wire-cloak

Demonstrates the basic application of the wire:cloak directive within a Blade template. This directive hides the enclosed content until Livewire has finished initializing, thus preventing a 'flash of unstyled content'.

```blade
<div wire:cloak>
    This content will be hidden until Livewire is fully loaded
</div>
```

--------------------------------

### Fetch Data for JavaScript with Async Livewire Action

Source: https://livewire.laravel.com/docs/4.x/actions

Shows how to fetch data asynchronously from the server for consumption by JavaScript, without affecting the component's rendered state. The data is returned and can be used by Alpine.js.

```php
<?php

use Livewire\Attributes\Async;
use Livewire\Component;

new class extends Component {
    #[Async]
    public function fetchSuggestions($query)
    {
        return Post::where('title', 'like', "%{$query}%")
            ->limit(5)
            ->pluck('title');
    }

    // ...
};
```

```blade
<div x-data="{ suggestions: [] }">
    <input
        type="text"
        x-on:input.debounce="suggestions = await $wire.fetchSuggestions($event.target.value)"
    >

    <template x-for="suggestion in suggestions">
        <div x-text="suggestion"></div>
    </template>
</div>
```

--------------------------------

### Listening for Livewire Events with #[On]

Source: https://livewire.laravel.com/docs/4.x/events

Listen for dispatched Livewire events in a component by using the `#[On]` attribute above a method. This method will be invoked when the specified event is triggered, and it can receive data passed along with the event.

```php
<?php // resources/views/components/⚡dashboard.blade.php

use LivewireComponent;
use LivewireAttributesOn;

new class extends Component {
	#[On('post-created')]
    public function updatePostList($title)
    {
		// ...
    }
};

```

--------------------------------

### Pass Content to Child Components using Slots

Source: https://livewire.laravel.com/docs/4.x/nesting

Illustrates how to use slots to inject content from a parent component into a child component. This is useful for rendering dynamic or contextual elements within a child's template that are controlled by the parent. The child component renders the injected content using the `$slot` variable. Importantly, content within the slot is evaluated in the context of the parent component.

```php
<?php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    #[Computed]
    public function comments()
    {
        return $this->post->comments;
    }

    public function removeComment($id)
    {
        $this->post->comments()->find($id)->delete();
    }
};
?>

<div>
    @foreach ($this->comments as $comment)
        <livewire:comment :$comment :wire:key="$comment->id">
            <button wire:click="removeComment({{ $comment->id }})">
                Remove
            </button>
        </livewire:comment>
    @endforeach
</div>

```

```php
<?php

use Livewire\Component;
use App\Models\Comment;

new class extends Component {
    public Comment $comment;
};
?>

<div>
    <p>{{ $comment->author }}</p>
    <p>{{ $comment->body }}</p>

    {{ $slot }}
</div>

```

--------------------------------

### Basic wire:loading for Loading Messages (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Demonstrates the basic usage of `wire:loading` to display a message while a form is being submitted. The message is hidden by default and shown only during the server request.

```blade
<form wire:submit="save">
    <!-- ... -->

    <button type="submit">Save</button>

    <div wire:loading>
        Saving post...
    </div>
</form>
```

--------------------------------

### Targeting Specific Actions with wire:target (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Demonstrates how to scope `wire:loading` indicators to specific component actions using the `wire:target` directive. This prevents loading messages from appearing for unrelated requests, as shown with a 'Remove' button.

```blade
<form wire:submit="save">
    <!-- ... -->

    <button type="submit">Save</button>

    <button type="button" wire:click="remove">Remove</button>

    <div wire:loading wire:target="remove"> 
        Removing post...
    </div>
</form>
```

--------------------------------

### Lazy Load Component with Blade Parameter

Source: https://livewire.laravel.com/docs/4.x/attribute-lazy

Demonstrates an alternative way to lazy-load a specific Livewire component instance directly in Blade views using the `lazy` parameter. This is useful for selectively applying lazy loading to certain component instances without modifying the component's class.

```blade
<livewire:revenue lazy />
```

--------------------------------

### Using Form Object in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/validation

Demonstrates how to integrate a Form Object (`PostForm`) into a Livewire component (`CreatePost`). It shows how to define the form as a property, access its values using `->all()`, and handle form submissions.

```php
<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
		Post::create(
    		$this->form->all()
    	);

		return redirect()->to('/posts');
    }

    // ...
}
```

--------------------------------

### Enabling Browser History with #[Url]

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Shows how to use the `history: true` option with the #[Url] attribute. By default, Livewire uses `history.replaceState()`, which doesn't add entries to the browser's history. Setting `history: true` uses `history.pushState()`, allowing the browser's back and forward buttons to navigate through the component's states.

```php
#[Url(history: true)]
public $search = '';
```

--------------------------------

### Livewire Islands with Multiple Named Instances

Source: https://livewire.laravel.com/docs/4.x/islands

Explains that when multiple Livewire islands share the same name, they are linked and will update together. This is useful for scenarios where the same named island appears in different parts of the UI and needs to be synchronized.

```blade
@island(name: 'revenue')
    <div class="sidebar">
        Revenue: {{ $this->revenue }}
    </div>
@endisland

@island(name: 'revenue')
    <div class="header">
        Revenue: {{ $this->revenue }}
    </div>
@endisland

<button type="button" wire:click="$refresh" wire:island="revenue">
    Refresh revenue
</button>
```

--------------------------------

### Customize Layout for Volt Full-Page Component

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to customize the Blade layout used for a Volt full-page component by using the `layout` function. This allows for consistent theming across different full-page components.

```php
use function Livewire\Volt\{layout, state};

state('users');

layout('components.layouts.admin');
```

--------------------------------

### Target Property Updates with Livewire Loading

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Explains how to target specific component property updates using `wire:target` with the property's name. This allows a loading indicator to show when a property is being updated in real-time, such as during form input with `wire:model.live`.

```blade
<form wire:submit="save">
    <input type="text" wire:model.live="username">
    @error('username') <span>{{ $message }}</span> @enderror

    <div wire:loading wire:target="username">
        Checking availability of username...
    </div>

    <!-- ... -->
</form>
```

--------------------------------

### Global Styles in Multi-File Component (Global CSS)

Source: https://livewire.laravel.com/docs/4.x/styles

Explains how to define global styles for a multi-file Livewire component by creating a `.global.css` file. Styles in this file will be applied application-wide, similar to using the `global` attribute in a single-file component's `<style>` tag.

```css
/* Example content for counter.global.css */
body {
    font-family: system-ui, sans-serif;
}

.prose {
    max-width: 65ch;
    line-height: 1.6;
}
```

--------------------------------

### Livewire Action Interceptor Details (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Provides a detailed look at action interceptors, which are the most granular. It outlines the available parameters and callback functions for `onSend`, `onCancel`, `onSuccess`, `onError`, `onFailure`, and `onFinish`.

```javascript
$wire.intercept(({ action, onSend, onCancel, onSuccess, onError, onFailure, onFinish }) => {
    // action.name        - Method name ('save', '$refresh', etc.)
    // action.params      - Method parameters
    // action.component   - Component instance
    // action.cancel()    - Cancel this action

    onSend(({ call }) => {
        // call: { method, params, metadata }
    })

    onCancel(() => {})

    onSuccess((result) => {
        // result: Return value from PHP method
    })

    onError(({ response, body, preventDefault }) => {
        preventDefault() // Prevent error modal
    })

    onFailure(({ error }) => {
        // error: Network error
    })

    onFinish(() => {
        // Always runs (success, error, failure, or cancel)
    })
})
```

--------------------------------

### Lazy Load Full-Page Component with Route Method

Source: https://livewire.laravel.com/docs/4.x/lazy

Load a full-page Livewire component only when it enters the viewport. This is achieved by chaining the `->lazy()` method to the `Route::livewire()` definition.

```php
Route::livewire('/dashboard', 'pages::dashboard')->lazy();
```

--------------------------------

### Handling JSON Responses in JavaScript (Promises)

Source: https://livewire.laravel.com/docs/4.x/attribute-json

Illustrates how to handle responses from Livewire #[Json] actions in JavaScript using promises. It shows how to retrieve data on success and how to catch validation errors, accessing the structured error object.

```js
// On success:
let data = await $wire.search('query')
// data = [ { id: 1, title: '...' }, ...]

// On validation failure:
try {
    let data = await $wire.save()
} catch (e) {
    // e.status = 422
    // e.errors = { name: ['The name field is required.'] }
}

// Or using .catch():
$wire.save()
    .then(data => {
        // Handle success
        console.log(data)
    })
    .catch(e => {
        if (e.status === 422) {
            // Handle validation errors
            console.log(e.errors)
        }
    })

```

--------------------------------

### Parallel Action Execution with wire:click.async

Source: https://livewire.laravel.com/docs/4.x/wire-click

By default, Livewire queues actions within the same component. The `.async` modifier allows actions to run in parallel, which can improve responsiveness for long-running operations. Use this when multiple independent actions need to be triggered simultaneously.

```blade
<button wire:click.async="process">Process</button>
```

--------------------------------

### Passing Named Slots to Child Components in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates how to pass both a default slot and a named 'actions' slot to a child Livewire component. This allows for more organized content distribution to different areas within the child component.

```blade
<div>
    @foreach ($this->comments as $comment)
        <livewire:comment :$comment :wire:key="$comment->id">
            <livewire:slot name="actions">
                <button wire:click="removeComment({{ $comment->id }})">
                    Remove
                </button>
            </livewire:slot>

            <span>Posted on {{ $comment->created_at }}</span>
        </livewire:comment>
    @endforeach
</div>
```

--------------------------------

### Encapsulated State and Logic in Nested Livewire Components (PHP)

Source: https://livewire.laravel.com/docs/4.x/nesting

Shows how a nested Livewire component can manage its own complex state and logic, such as edit mode and draft content, in an encapsulated manner. This isolation prevents interference with the parent component's state.

```php
// Child component with its own encapsulated state
public $editMode = false;
public $draft = '';

public function startEdit() { /* ... */ }
public function saveEdit() { /* ... */ }
public function cancelEdit() { /* ... */ }
```

--------------------------------

### Livewire Component with URL Sync (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

A Livewire component that synchronizes its `search` property with the URL's query string using the `#[Url]` attribute. This allows search terms to persist across page reloads and be shared via URLs. It depends on Livewire and an `AppModelsUser` model.

```php
<?php // resources/views/components/⚡show-users.blade.php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    #[Url] // [tl! highlight]
    public $search = '';

    #[Computed]
    public function users()
    {
        return User::search($this->search)->get();
    }
};

```

--------------------------------

### Class-based Volt Component with Attributes (Blade/PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates defining class attributes like Layout and Title for anonymous class-based Volt components. Attributes are placed directly after the `new` keyword.

```php
<?php

use LivewireAttributes\{Layout, Title};
use LivewireVoltComponent;

new
#[Layout('layouts.guest')]
#[Title('Login')]
class extends Component {
    public string $name = '';

    // ...
}
```

--------------------------------

### Passing Dynamic Props to Child Component

Source: https://livewire.laravel.com/docs/4.x/nesting

Illustrates how to pass dynamic data (e.g., a collection of todos) from a parent component ('todos') to a child component ('todo-count') using Livewire's prop syntax. The data is received and assigned in the child component's mount method.

```php
<?php // resources/views/components/⚡todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function todos()
    {
        return Auth::user()->todos;
    }
};
?>

<div>
    <livewire:todo-count :todos="$this->todos" />

    <!-- ... -->
</div>
```

```php
<?php // resources/views/components/⚡todo-count.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    public $todos;

    public function mount($todos)
    {
        $this->todos = $todos;
    }

    #[Computed]
    public function count()
    {
        return $this->todos->count();
    }
};
?>

<div>
    Count: {{ $this->count }}
</div>
```

--------------------------------

### Bundle Multiple Lazy Components into One Request

Source: https://livewire.laravel.com/docs/4.x/lazy

This section explains how to bundle multiple lazy-loaded Livewire components into a single network request to reduce server overhead. This can be achieved using the `bundle: true` attribute in the component class or the `.bundle` modifier in the Blade view.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy(bundle: true)]
class Revenue extends Component
{
    // ...
}
?>
```

```blade
<livewire:revenue lazy.bundle />
```

```blade
<livewire:revenue defer.bundle />
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Defer;

#[Defer(bundle: true)]
class Revenue extends Component
{
    // ...
}
?>
```

--------------------------------

### wire:loading.remove for Inverse Visibility (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Illustrates how to use `wire:loading.remove` to hide an element by default and show it only when a server request is in progress. This is the inverse of the standard `wire:loading` behavior.

```blade
<div wire:loading.remove>...
</div>
```

--------------------------------

### Livewire Component Hydration Pseudo-code (PHP)

Source: https://livewire.laravel.com/docs/4.x/hydration

Provides PHP pseudo-code demonstrating the hydration process where a Livewire component instance is created and its state is seeded from a snapshot received in the request.

```php
$state = request('snapshot.state');
$memo = request('snapshot.memo');

$instance = Livewire::new($memo['name'], $memo['id']);

foreach ($state as $property => $value) {
    $instance[$property] = $value;
}

```

--------------------------------

### Layout Configuration for Page Titles

Source: https://livewire.laravel.com/docs/4.x/attribute-title

Demonstrates the necessary layout configuration to display the page title set by the #[Title] attribute or title() method. The layout file must include a '$title' variable, optionally with a fallback value.

```blade
<!-- resources/views/components/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'My App' }}</title> 
</head>
<body>
    {{ $slot }}
</body>
</html>
```

--------------------------------

### Livewire Navigation JavaScript Hooks

Source: https://livewire.laravel.com/docs/4.x/navigate

Livewire triggers three lifecycle hooks during page navigation: `livewire:navigate` (when navigation is triggered), `livewire:navigating` (when new HTML is about to be swapped), and `livewire:navigated` (as the final step). These hooks allow developers to inject custom JavaScript logic at various stages of the navigation process. Event listeners attached to the document will persist across pages, so using `{once: true}` is recommended for single-execution listeners.

```javascript
document.addEventListener('livewire:navigate', (event) => {
    // Triggers when a navigation is triggered.

    // Can be "cancelled" (prevent the navigate from actually being performed):
    event.preventDefault()

    // Contains helpful context about the navigation trigger:
    let context = event.detail

    // A URL object of the intended destination of the navigation...
    context.url

    // A boolean [true/false] indicating whether or not this navigation
    // was triggered by a back/forward (history state) navigation...
    context.history

    // A boolean [true/false] indicating whether or not there is
    // cached version of this page to be used instead of
    // fetching a new one via a network round-trip...
    context.cached
})

document.addEventListener('livewire:navigating', (e) => {
    // Triggered when new HTML is about to be swapped onto the page...

    // This is a good place to mutate any HTML before the page
    // is navigated away from...

    // You can register an onSwap callback to run code after the
    // new HTML is swapped onto the page but before scripts are loaded.
    // This is a good place to apply critical styles such as dark mode
    // to prevent flickering...
    e.detail.onSwap(() => {
        // ...
    })
})

document.addEventListener('livewire:navigated', () => {
    // Triggered as the final step of any page navigation...

    // Also triggered on page-load instead of "DOMContentLoaded"...
}, { once: true })
```

--------------------------------

### Debugging Livewire Components in Browser Console

Source: https://livewire.laravel.com/docs/4.x/javascript

Provides JavaScript code snippets for interacting with Livewire components directly from the browser's developer console. It shows how to access the first component instance, inspect its state, call its methods, monitor requests, and view component snapshots.

```javascript
// Get first component on page
let $wire = Livewire.first()

// Inspect component state
console.log($wire.count)

// Call methods
$wire.increment()

// Monitor all requests:
Livewire.interceptRequest(({ onSend }) => {
    onSend(() => {
        console.log('Request sent:', Date.now());
    });
});

// View component snapshots:
let component = Livewire.first().__instance()
console.log(component.snapshot)
```

--------------------------------

### Use Named Slot in Layout and Component (Blade)

Source: https://livewire.laravel.com/docs/4.x/pages

Demonstrates how to define and use named slots in Livewire Blade layouts and components. The layout (`app.blade.php`) includes a dynamic slot (`$lang`) within the HTML tag. The component then uses `<x-slot:lang>` to provide content for that specific slot, allowing for per-component customization of layout elements like language.

```blade
<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $lang ?? app()->getLocale()) }}"> <!-- [tl! highlight] -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>

<!-- Inside a Livewire component view -->
<x-slot:lang>fr</x-slot> <!-- [tl! highlight] -->

<div>
    // French content goes here...
</div>

```

--------------------------------

### Shortened Attribute Syntax for Livewire Components

Source: https://livewire.laravel.com/docs/4.x/nesting

Livewire allows a shorthand for passing variables to components when the variable name and prop name are the same. This reduces verbosity by allowing you to prefix the variable with a colon, instead of writing both the prop name and the variable.

```blade
<livewire:todo-count :$todos />
```

--------------------------------

### Execute JavaScript Directly with #[Js] Attribute (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-js

Demonstrates how to use the #[Js] attribute on a PHP method to return JavaScript code. This code is executed directly on the client-side when called from a template, avoiding server round-trips. It's useful for tasks like resetting form fields.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Attributes\Js;
use Livewire\Component;

new class extends Component {
    public $title = '';
    public $content = '';

    #[Js] // [tl! highlight:start]
    public function resetForm()
    {
        return <<<'JS'
            $wire.title = ''
            $wire.content = ''
        JS;
    } // [tl! highlight:end]
};

```

--------------------------------

### Livewire wire:submit Directive Reference

Source: https://livewire.laravel.com/docs/4.x/wire-submit

This snippet provides a reference for the `wire:submit` directive in Livewire, showing its basic syntax and how to pass parameters to the method. It also lists available modifiers that can be appended to the directive for controlling event behavior.

```blade
wire:submit="methodName"
wire:submit="methodName(param1, param2)"

Modifiers:
.prevent (automatic for wire:submit)
.stop
.self
.once
.debounce
.throttle
.window
.document
.passive
.capture
.renderless
.preserve-scroll
.async

```

--------------------------------

### Create Livewire Address Synthesizer

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This PHP code defines a custom Livewire property synthesizer for the 'Address' DTO. It includes methods to match the target type, dehydrate the object into an array, and hydrate an array back into an 'Address' object, enabling Livewire to serialize and deserialize the custom DTO.

```php
use App\Dtos\Address;

class AddressSynth extends Synth
{
    public static $key = 'address';

    public static function match($target)
    {
        return $target instanceof Address;
    }

    public function dehydrate($target)
    {
        return [[
            'street' => $target->street,
            'city' => $target->city,
            'state' => $target->state,
            'zip' => $target->zip,
        ], []];
    }

    public function hydrate($value)
    {
        $instance = new Address;

        $instance->street = $value['street'];
        $instance->city = $value['city'];
        $instance->state = $value['state'];
        $instance->zip = $value['zip'];

        return $instance;
    }
}
```

--------------------------------

### Set Component-Specific Layout with Render Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Dynamically sets the layout for a Livewire component within its `render()` method using the `->layout()` fluent method. This provides flexibility to change layouts based on component state or other logic. The layout view name is passed as a string argument to the `layout()` method.

```php
<?php

use Livewire\Component;

new class extends Component {
    // ...

    public function render()
    {
        return $this->view()
            ->layout('layouts::dashboard');
    }
};

```

--------------------------------

### Distinguishing #[Js] Methods (PHP) from JavaScript Actions (JS)

Source: https://livewire.laravel.com/docs/4.x/attribute-js

Compares and contrasts #[Js] methods defined in PHP with JavaScript actions defined directly in JavaScript using @script blocks. Both execute client-side JavaScript without server round-trips, but differ in where the code is defined.

```php
<?php // resources/views/components/⚡example.blade.php

use Livewire\Attributes\Js;
use Livewire\Component;

new class extends Component {
    public $count = 0;

    // JavaScript defined in PHP
    #[Js]
    public function showCount()
    {
        return "alert('Count is: {$this->count}')";
    }
};

```

```html
<div>
    <button @click="$wire.showCount()">Show Count (from PHP)</button>
    <button @click="$js.incrementLocal()">Increment Local (from JS)</button>
</div>

@script
<script>
    // JavaScript defined in JavaScript
    $js('incrementLocal', () => {
        console.log('No server request made')
    })
</script>
@endscript

```

--------------------------------

### Customize Lazy Loading Placeholders in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This code snippet illustrates how to customize the placeholder HTML that appears while a lazily loaded Livewire component is being fetched. The `placeholder` function allows developers to define custom loading indicators.

```php
use function Livewire\Volt\{placeholder};

placeholder('<div>Loading...</div>');
```

--------------------------------

### Exclude Specific Loading Targets in Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Illustrates how to use the `.except` modifier with `wire:target` to display a loading indicator for all Livewire requests except for a specific action or property. This provides granular control over when loading indicators are shown.

```blade
<div wire:loading wire:target.except="download">...</div>
```

--------------------------------

### Store Query String Changes in History (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Modify how Livewire updates the browser's history state. By default, `history.replaceState()` is used. Setting `history: true` in `#[Url]` uses `history.pushState()`, allowing the browser's back button to navigate through previous query string states.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url(history: true)]
    public $search = '';

    // ...
}
```

--------------------------------

### Livewire @island Directive Reference

Source: https://livewire.laravel.com/docs/4.x/directive-island

Provides a reference for the @island directive parameters in Livewire, including `name`, `lazy`, and `defer`. This documentation outlines the purpose, type, and default values for each parameter, aiding developers in correctly configuring islands for specific use cases.

```blade
@island(
    ?string $name = null,
    bool $lazy = false,
    bool $defer = false,
)
    <!-- Content -->
@endisland
```

--------------------------------

### Enable File Uploads in Livewire Volt Components

Source: https://livewire.laravel.com/docs/4.x/volt

This snippet demonstrates how to enable file uploads within a Livewire Volt component. By using the `usesFileUploads` function, developers can easily integrate Livewire's file upload capabilities, including validation and storage.

```php
use function Livewire\Volt\{state, usesFileUploads};

usesFileUploads();

state(['photo']);

$save = function () {
    $this->validate([
        'photo' => 'image|max:1024',
    ]);

    $this->photo->store('photos');
};
```

--------------------------------

### Stream Chat-Bot Responses with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-stream

This PHP Livewire component demonstrates streaming chat-bot responses using the `wire:stream` directive. It handles user prompts, interacts with an external API (simulated by OpenAI::ask), and progressively displays the response in the browser. Dependencies include Livewire and an OpenAI SDK.

```php
use Livewire\Component;

class ChatBot extends Component
{
    public $prompt = '';

    public $question = '';

    public $answer = '';

    function submitPrompt()
    {
        $this->question = $this->prompt;

        $this->prompt = '';

        $this->js('$wire.ask()');
    }

    function ask()
    {
        $this->answer = OpenAI::ask($this->question, function ($partial) {
            $this->stream(to: 'answer', content: $partial); // [tl! highlight]
        });
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <section>
                <div>ChatBot</div>

                @if ($question)
                    <article>
                        <hgroup>
                            <h3>User</h3>
                            <p>{{ $question }}</p>
                        </hgroup>

                        <hgroup>
                            <h3>ChatBot</h3>
                            <p wire:stream="answer">{{ $answer }}</p> <!-- [tl! highlight] -->
                        </hgroup>
                    </article>
                @endif
            </section>

            <form wire:submit="submitPrompt">
                <input wire:model="prompt" type="text" placeholder="Send a message" autofocus>
            </form>
        </div>
        HTML;
    }
}

```

--------------------------------

### Listen to Private & Presence Channels in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/events

This snippet demonstrates how to configure a Livewire component to listen for events broadcast on public, private, and presence channels. It requires defining event listeners within the getListeners method and ensures authentication callbacks are set up for broadcast channels.

```php
<?php // resources/views/components/⚡order-tracker.blade.php

use Livewire\Component;

new class extends Component {
    public $showNewOrderNotification = false;

    public function getListeners()
    {
        return [
            // Public Channel
            "echo:orders,OrderShipped" => 'notifyNewOrder',

            // Private Channel
            "echo-private:orders,OrderShipped" => 'notifyNewOrder',

            // Presence Channel
            "echo-presence:orders,OrderShipped" => 'notifyNewOrder',
            "echo-presence:orders,here" => 'notifyNewOrder',
            "echo-presence:orders,joining" => 'notifyNewOrder',
            "echo-presence:orders,leaving" => 'notifyNewOrder',
        ];
    }

    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
    }
};

```

--------------------------------

### Dispatching a Livewire Event

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch a Livewire event from a component using the `dispatch()` method. This method can optionally accept additional data to be sent with the event. This is useful for notifying other components about state changes or actions performed.

```php
<?php // resources/views/components/post/⚡create.blade.php

use LivewireComponent;

new class extends Component {
    public function save()
    {
		// ...

		$this->dispatch('post-created');
    }
};

```

```php
$this->dispatch('post-created', title: $post->title);

```

--------------------------------

### Configure Stream Append/Replace with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-stream

Demonstrates how to control whether streamed content replaces or appends to the target element using Livewire. This is crucial for scenarios like chat bots (append) versus countdowns (replace). It shows configuration both in PHP and Blade.

```php
// Append contents...
$this->stream(to: 'target', content: '...');

// Replace contents...
$this->stream(to: 'target', content: '...', replace: true);
```

```blade
// Append contents...
<div wire:stream="target">

// Replace contents...
<div wire:stream.replace="target">
```

--------------------------------

### ShowPost Component PHP Class

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This PHP class defines a Livewire component for displaying a single post. It accepts a 'Post' model instance as a public property. The component renders a Livewire view 'livewire.show-post'.

```php
<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Post;

class ShowPost extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.show-post');
    }
}
```

--------------------------------

### Bind Child Component Data with wire:model and #[Modelable]

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates how to bind a parent component's property to a child component's property using `wire:model` and the `#[Modelable]` attribute. This allows parent components to manage state within child components, typically for input elements extracted into their own Livewire components. The `#[Modelable]` attribute must be applied to the property in the child component that should receive the bound value.

```php
<?php // resources/views/components/⚡todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    public $todo = '';

    public function add()
    {
        Todo::create([
            'content' => $this->pull('todo'),
        ]);
    }

    #[Computed]
    public function todos()
    {
        return Auth::user()->todos;
    }
};

```

```blade
<div>
    <h1>Todos</h1>

    <livewire:todo-input wire:model="todo" /> <!-- [tl! highlight] -->

    <button wire:click="add">Add Todo</button>

    <div>
        @foreach ($this->todos as $todo)
            <livewire:todo-item :$todo :wire:key="$todo->id" />
        @endforeach
    </div>
</div>

```

```php
<?php // resources/views/components/⚡todo-input.blade.php

use Livewire\Attributes\Modelable;
use Livewire\Component;

new class extends Component {
    #[Modelable] // [tl! highlight]
    public $value = '';
};
?>

<div>
    <input type="text" wire:model="value" >
</div>

```

--------------------------------

### Log Activity Asynchronously with #[Async] Attribute

Source: https://livewire.laravel.com/docs/4.x/attribute-async

Applies the #[Async] attribute to a Livewire component action to execute it in parallel. This is useful for operations like logging analytics data without blocking the user interface. The action runs immediately and is not affected by other in-flight requests.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Attributes\Async;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    #[Async] // [tl! highlight]
    public function logActivity()
    {
        Activity::log('post-viewed', $this->post);
    }
};

```

```blade
<div wire:intersect="logActivity">
    <!-- Logs activity asynchronously when element enters viewport -->
</div>

```

--------------------------------

### Listen for Custom Broadcast Name with Dynamic Channel in Livewire

Source: https://livewire.laravel.com/docs/4.x/events

Demonstrates listening for an event with a custom broadcast name on a dynamic channel within a Livewire component. Both the custom broadcast name (prefixed with a dot) and the dynamic channel are specified.

```php
#[On('echo:scores.{game.id},.score.submitted')]
public function handleScoreSubmitted($event)
{
    $this->scores[] = $event['score'];
}

```

--------------------------------

### Declare Component State with Volt's `state` Function

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to declare accepted properties for a Volt component using the `state` function. This function registers properties that the component expects to receive.

```php
use function Livewire\Volt\state;

state('users');
```

--------------------------------

### Applying Middleware to Specific Actions (PHP)

Source: https://livewire.laravel.com/docs/4.x/actions

Illustrates how to apply middleware to a specific Livewire action using the `#[Middleware]` attribute. This allows for granular control over which middleware are executed for particular component actions, such as logging post creation.

```php
<?php

namespace App\Livewire;

use App\Http\Middleware\LogPostCreation;
use Livewire\Component;

class CreatePost extends Component
{
    public $title;

    public $content;

    #[Middleware(LogPostCreation::class)]
    public function save()
    {
        // Create the post...
    }

    // ...
}

```

--------------------------------

### Livewire Component for Optimistic UI Updates

Source: https://livewire.laravel.com/docs/4.x/wire-text

This PHP class demonstrates a Livewire component that manages a 'likes' property for optimistic UI updates. It fetches initial data in mount and updates the count on 'like' action.

```php
use Livewire\Component;
use App\Models\Post;

class ShowPost extends Component
{
    public Post $post;

    public $likes;

    public function mount()
    {
        $this->likes = $this->post->like_count;
    }

    public function like()
    {
        $this->post->like();

        $this->likes = $this->post->fresh()->like_count;
    }
}
```

--------------------------------

### Access Livewire Component Instance via $wire.$refs (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/wire-ref

Illustrates how to access the Livewire component instance associated with an element that has a 'wire:ref' attribute. This is done through the `$refs.<ref_name>.$wire` property in JavaScript.

```html
<div>
    <!-- ... -->

    <livewire:modal wire:ref="modal">
        <!-- ... -->

        <button wire:click="save()">Save</button>
    </livewire:modal>
</div>
```

```javascript
this.$intercept('save', ({ onFinish }) => {
    onFinish(() => {
        this.$refs.modal.$wire.close()
    })
})
```

--------------------------------

### Basic #[Validate] Usage in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Demonstrates the basic application of the #[Validate] attribute to component properties for required fields with minimum length. It shows how to bind input fields and display error messages. Validation occurs automatically on property updates.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Validate('required|min:3')] // [tl! highlight]
    public $title = '';

    #[Validate('required|min:3')] // [tl! highlight]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect('/posts');
    }
};
?>

<div>
    <input type="text" wire:model="title">
    @error('title') <span class="error">{{ $message }}</span> @enderror

    <textarea wire:model="content"></textarea>
    @error('content') <span class="error">{{ $message }}</span> @enderror

    <button wire:click="save">Save Post</button>
</div>

```

--------------------------------

### Livewire wire:show Directive Syntax Reference

Source: https://livewire.laravel.com/docs/4.x/wire-show

This is the basic syntax for the wire:show directive. It takes a boolean expression to determine the visibility of the element. This directive does not support any modifiers.

```blade
wire:show="expression"
```

--------------------------------

### Real-time Validation with `wire:model.live` or `.blur`

Source: https://livewire.laravel.com/docs/4.x/forms

This code illustrates how Livewire automatically handles real-time validation. By using `.live` or `.blur` on `wire:model`, validation rules are applied before the property is updated. If validation fails, an error message is displayed. It requires Livewire, Blade, and PHP with validation attributes.

```blade
<input type="text" wire:model.blur="title">

<div>
    @error('title') <span class="error">{{ $message }}</span> @enderror
</div>
```

```php
#[Validate('required|min:5')]
public $title = '';
```

--------------------------------

### Temporary Preview URLs for Image Uploads in Livewire

Source: https://livewire.laravel.com/docs/4.x/uploads

Livewire provides the `temporaryUrl()` method for uploaded files to generate secure, temporary URLs for image previews. This feature is restricted to images for security reasons.

```php
<?php

use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

new class extends Component {
    use WithFileUploads;

    #[Validate('image|max:1024')]
    public $photo;

    // ...
};

```

```blade
<form wire:submit="save">
    @if ($photo)
        <img src="{{ $photo->temporaryUrl() }}">
    @endif

    <input type="file" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save photo</button>
</form>

```

--------------------------------

### Integrate Livewire Form with Volt Component (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to integrate a Livewire form class into a Volt component using the `form` function. The `PostForm` is bound to the `$this->form` property, allowing access to its properties (like `title`) and methods (like `store`) within the component.

```php
<?php

use App\Livewire\Forms\PostForm;
use function Livewire\Volt\form;

form(PostForm::class);

$save = function () {
    $this->form->store();

    // ...
};

?>
```

```html
<form wire:submit="save">
    <input type="text" wire:model="form.title">
    @error('form.title') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Basic Sortable List Implementation in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-sort

This PHP snippet demonstrates the server-side logic for handling item sorting in a Livewire component. It defines a method that receives the item's ID and its new position, intended for database updates.

```php
<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    public Todo $todo;

    public function sortItem($item, $position)
    {
        $item = $this->todo->items()->findOrFail($item);

        // Update the item's position in the database and re-order other items...
    }
};

```

--------------------------------

### Livewire DOM Element Initialization Hook (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Illustrates the usage of the `element.init` hook in Livewire. This hook is fired for each DOM element within a Livewire component, enabling custom interactions or attribute handling for individual elements.

```javascript
Livewire.hook('element.init', ({ component, el }) => {
    //
})
```

--------------------------------

### Configure Livewire Temporary Upload Directory

Source: https://livewire.laravel.com/docs/4.x/uploads

Specify a custom directory for temporary file uploads in Livewire by setting the 'directory' option within the 'temporary_file_upload' configuration in `config/livewire.php`. By default, uploads go to the 'livewire-tmp/' directory on the specified disk.

```php
'temporary_file_upload' => [
    // ...
    'directory' => 'tmp',
]
```

--------------------------------

### Basic wire:model Usage

Source: https://livewire.laravel.com/docs/4.x/wire-model

Shows the fundamental syntax for using the wire:model directive to bind an HTML element's value to a Livewire component's property.

```blade
wire:model="propertyName"
```

--------------------------------

### Replace DOMContentLoaded with livewire:navigated Event

Source: https://livewire.laravel.com/docs/4.x/navigate

To ensure JavaScript code runs on every page visit with Livewire, replace `DOMContentLoaded` event listeners with `livewire:navigated`. This is crucial because `DOMContentLoaded` only fires on the initial page load. The `livewire:navigated` event is triggered after Livewire finishes navigating to a new page, making it suitable for initializing libraries or running code on every view.

```javascript
document.addEventListener('DOMContentLoaded', () => { // [tl! remove]
document.addEventListener('livewire:navigated', () => { // [tl! add]
    // ...
})
```

--------------------------------

### Combine #[Layout] and #[Title] Attributes

Source: https://livewire.laravel.com/docs/4.x/attribute-title

Illustrates how to use both the #[Layout] and #[Title] attributes on a full-page Livewire component. This allows specifying both a custom layout and a static page title declaratively.

```php
<?php // resources/views/pages/posts/⚡create.blade.php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new
#[Layout('layouts.admin')]
#[Title('Create Post')]
class extends Component {
    // ...
};
```

--------------------------------

### Recursive Livewire Survey Question Component (PHP/Blade)

Source: https://livewire.laravel.com/docs/4.x/nesting

Demonstrates a Livewire component that can render itself recursively to display hierarchical data, like survey questions with sub-questions. It utilizes the `#[Computed]` attribute for sub-questions and a `@foreach` loop to render child components, ensuring each child has a unique `wire:key`.

```php
<?php // resources/views/components/⚡survey-question.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Question;

new class extends Component {
    public Question $question;

    #[Computed]
    public function subQuestions()
    {
        return $this->question->subQuestions,
    }
};
?>

<div>
    Question: {{ $question->content }}

    @foreach ($this->subQuestions as $subQuestion)
        <livewire:survey-question :question="$subQuestion" :wire:key="$subQuestion->id" />
    @endforeach
</div>
```

--------------------------------

### Listen for Broadcast Event with Laravel Echo (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/events

Shows how to listen for a broadcasted Laravel event (`OrderShipped` on the `orders` channel) using Laravel Echo in JavaScript. It logs the order details to the console when the event is received.

```javascript
Echo.channel('orders')
    .listen('OrderShipped', e => {
        console.log(e.order)
    })

```

--------------------------------

### Skip Transitions with #[Transition(skip: true)] (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Illustrates how to disable view transitions for a specific Livewire action by using the `skip: true` parameter within the #[Transition] attribute in PHP. This is useful for actions that should update instantly without animation.

```php
<?php

use Livewire\Attributes\Transition;

// ... inside a Livewire component class

#[Transition(skip: true)]
public function reset()
{
    $this->step = 1;
}

```

--------------------------------

### Asserting Rendered Text in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/testing

Use the `assertSee()` method to verify that specific text content is present in the rendered HTML output of a Livewire component. This is useful for confirming that data is being displayed as expected.

```php
use App\Models\Post;

it('displays posts', function () {
    Post::factory()->create(['title' => 'My first post']);
    Post::factory()->create(['title' => 'My second post']);

    Livewire::test('show-posts')
        ->assertSee('My first post')
        ->assertSee('My second post');
});
```

--------------------------------

### Basic Redirect in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/redirecting

This snippet demonstrates how to use the `$this->redirect()` helper method within a Livewire component to redirect the user to a specified URL after an action, such as form submission. It's crucial for handling redirects in Livewire as standard HTTP redirects do not work due to its AJAX-based requests.

```php
<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
	public $title = '';

    public $content = '';

    public function save()
    {
		Post::create([
			'title' => $this->title,
			'content' => $this->content,
		]);

		$this->redirect('/posts'); // Redirects to the /posts URL
    }
};
?>
```

--------------------------------

### Listen for Custom Broadcast Name in Livewire

Source: https://livewire.laravel.com/docs/4.x/events

Shows how to listen for an event with a custom broadcast name (defined by `broadcastAs()`) in a Livewire component. The custom name must be prefixed with a dot (`.`) to indicate it's not a namespaced class name.

```php
<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ScoreBoard extends Component
{
    public $scores = [];

    #[On('echo:scores,.score.submitted')]
    public function handleScoreSubmitted($event)
    {
        $this->scores[] = $event['score'];
    }
}

```

--------------------------------

### Rendering Child Components in a Loop with Keys

Source: https://livewire.laravel.com/docs/4.x/nesting

When rendering child components within a loop, a unique `key` prop must be provided for each iteration. This key is crucial for Livewire to track component instances during re-renders, especially when components are re-ordered or updated. Without unique keys, Livewire may behave incorrectly.

```blade
<div>
    <h1>Todos</h1>

    @foreach ($todos as $todo)
        <livewire:todo-item :$todo :wire:key="$todo->id" />
    @endforeach
</div>
```

--------------------------------

### Conditional Post Access with Computed Property (PHP)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Demonstrates using a #[Computed] property to defer database queries until posts are actually needed in the template, improving performance by avoiding unnecessary computations when a user cannot see posts.

```php
use Livewire\Attributes\Computed;
use App\Models\Post;

#[Computed]
public function posts()
{
    return Post::all();
}

public function render()
{
    return view('livewire.show-posts');
}
```

--------------------------------

### Highlighting Active Links with wire:current Directive

Source: https://livewire.laravel.com/docs/4.x/navigate

Explains how to use the `wire:current` directive in Blade to conditionally apply CSS classes to navigation links that match the current page, providing an alternative to the `data-current` attribute.

```blade
<nav>
    <a href="/dashboard" ... wire:current="font-bold text-zinc-800">Dashboard</a>
    <a href="/posts" ... wire:current="font-bold text-zinc-800">Posts</a>
    <a href="/users" ... wire:current="font-bold text-zinc-800">Users</a>
</nav>
```

--------------------------------

### Performance Advantage with Multiple Accesses

Source: https://livewire.laravel.com/docs/4.x/attribute-computed

Illustrates how computed properties cache their results, preventing redundant database queries when accessed multiple times within a request. The 'posts()' method only queries the database once, even if accessed multiple times in the template or component logic.

```php
<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts; // Only queries database once
    }
};

```

--------------------------------

### Enforce Lazy or Defer Loading by Default

Source: https://livewire.laravel.com/docs/4.x/lazy

This snippet shows how to enforce lazy or deferred loading for all instances of a specific Livewire component by using the `#[Lazy]` or `#[Defer]` attributes on the component class. These defaults can be overridden when rendering the component.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Revenue extends Component
{
    // ...
}
?>
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Defer;

#[Defer]
class Revenue extends Component
{
    // ...
}
?>
```

```blade
{{-- Disable lazy loading --}}
<livewire:revenue :lazy="false" />

{{-- Disable deferred loading --}}
<livewire:revenue :defer="false" />
```

--------------------------------

### Livewire Component Basic Search View (Blade)

Source: https://livewire.laravel.com/docs/4.x/url

The Blade view for the Livewire search component. It includes a text input bound to the `search` property using `wire:model.live` and displays a list of users. This snippet assumes the existence of a Livewire component that provides a `users` computed property.

```blade
<div>
    <input type="text" wire:model.live="search">

    <ul>
        @foreach ($this->users as $user)
            <li wire:key="{{ $user->id }}">{{ $user->name }}</li>
        @endforeach
    </ul>
</div>

```

--------------------------------

### Caching Computed Property Across All Components

Source: https://livewire.laravel.com/docs/4.x/attribute-computed

Explains how to use the `cache: true` parameter to share a computed property's cached value across all component instances in the application. A custom cache key can be provided using the `key` parameter for more specific caching.

```php
<?php

use Livewire\Attributes\Computed;
use App\Models\Post;

#[Computed(cache: true)]
public function allPosts()
{
    return Post::all();
}

#[Computed(cache: true, key: 'homepage-posts')]
public function homepagePosts()
{
    return Post::all();
}

```

--------------------------------

### Dispatching Events with data-loading

Source: https://livewire.laravel.com/docs/4.x/loading-states

Illustrates that the `data-loading` attribute is applied to the element dispatching an event, even if the event is handled by a different Livewire component. This ensures visual feedback is provided to the user who initiated the action.

```blade
<button wire:click="$dispatch('refresh-stats')">
    Refresh
</button>
```

--------------------------------

### Configure Livewire Temporary File Upload Middleware

Source: https://livewire.laravel.com/docs/4.x/uploads

Adjust the middleware applied to the temporary file upload endpoint in Livewire. This is configured via the 'middleware' key within the 'temporary_file_upload' array in `config/livewire.php`, enabling control over request throttling.

```php
'temporary_file_upload' => [
    // ...
    'middleware' => 'throttle:5,1', // Only allow 5 uploads per user per minute
]
```

--------------------------------

### Debounce Live Input Updates with wire:model.live.debounce.Xms (HTML)

Source: https://livewire.laravel.com/docs/4.x/wire-model

This snippet demonstrates how to customize the debounce timing for live input updates. By adding `.debounce.Xms` to `wire:model.live`, you can control the delay (in milliseconds) before a server request is sent after the user stops typing.

```html
<input type="text" wire:model.live.debounce.250ms="title">
```

--------------------------------

### Dynamic Select Dropdown Binding with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Creates a select dropdown with options dynamically generated from a database query or loop within a Livewire component. Livewire manages the selected option binding.

```blade
<select wire:model="state">
    @foreach (App\Models\State::all() as $state)
        <option value="{{ $state->id }}">{{ $state->label }}</option>
    @endforeach
</select>
```

--------------------------------

### Basic Teleport Usage in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Demonstrates the basic usage of the @teleport directive in a Blade template. It shows how to wrap content that should be rendered elsewhere and specifies 'body' as the target for rendering. This is useful for elements like modals that need to break out of the component's DOM hierarchy.

```blade
<div>
    <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle Modal</button>

        @teleport('body')
            <div x-show="open">
                Modal contents...
            </div>
        @endteleport
    </div>
</div>
```

--------------------------------

### CSS for Livewire View Transition Types

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Provides CSS rules to define animations for different view transition types ('forward' and 'backward') used with Livewire. It leverages the `:active-view-transition-type()` selector to apply specific animations to old and new content during transitions.

```css
html:active-view-transition-type(forward) {
    &::view-transition-old(content) {
        animation: 300ms ease-out slide-out-left;
    }
    &::view-transition-new(content) {
        animation: 300ms ease-in slide-in-right;
    }
}

html:active-view-transition-type(backward) {
    &::view-transition-old(content) {
        animation: 300ms ease-out slide-out-right;
    }
    &::view-transition-new(content) {
        animation: 300ms ease-in slide-in-left;
    }
}

@keyframes slide-out-left {
    from { transform: translateX(0); opacity: 1; }
    to { transform: translateX(-100%); opacity: 0; }
}

@keyframes slide-in-right {
    from { transform: translateX(100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slide-out-right {
    from { transform: translateX(0); opacity: 1; }
    to { transform: translateX(100%); opacity: 0; }
}

@keyframes slide-in-left {
    from { transform: translateX(-100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

```

--------------------------------

### Styling Children Based on Parent Loading State

Source: https://livewire.laravel.com/docs/4.x/loading-states

Explains how to conditionally style child elements within a parent that has the `data-loading` attribute. It demonstrates hiding the default text and showing loading text using `in-data-loading:` and `not-in-data-loading:` variants.

```blade
<button wire:click="save">
    <span class="in-data-loading:hidden">Save</span>
    <span class="not-in-data-loading:hidden">Saving...</span>
</button>
```

--------------------------------

### Basic #[Json] Attribute Usage in PHP

Source: https://livewire.laravel.com/docs/4.x/attribute-json

This snippet demonstrates how to apply the #[Json] attribute to a Livewire component action to make it return JSON data. It shows the PHP code for a Livewire component with a search method that queries posts and returns them as JSON. This is useful for dynamic front-end interactions.

```php
<?php // resources/views/components/⚡search.blade.php

use Livewire\Attributes\Json;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Json] // [tl! highlight]
    public function search($query)
    {
        return Post::where('title', 'like', "%{$query}%")
            ->limit(10)
            ->get();
    }
};

```

--------------------------------

### Prefetch Pages on Hover with .hover Modifier (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-navigate

By appending the '.hover' modifier to the wire:navigate directive, Livewire will prefetch the linked page when a user hovers over it. This optimizes performance by ensuring the page content is ready when the user eventually clicks the link.

```blade
<a href="/" wire:navigate.hover>Dashboard</a>
```

--------------------------------

### Test No File Download Assertion in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/downloads

Demonstrates how to test that a file download was *not* triggered using Livewire's `->assertNoFileDownloaded()` method. This is useful for scenarios where a download should be prevented, such as due to authorization checks. The assertion confirms no file download occurred after a component action.

```php
use App\Models\Invoice;

public function test_does_not_download_invoice_if_unauthorised()
{
    $invoice = Invoice::factory();

    Livewire::test(ShowInvoice::class)
        ->call('download')
        ->assertNoFileDownloaded();
}

```

--------------------------------

### Pass Data with Livewire Events

Source: https://livewire.laravel.com/docs/4.x/attribute-on

These PHP snippets illustrate how to pass data between Livewire components using events. The first shows dispatching an event 'post-updated' with named parameters 'id' and 'title'. The second shows a listener method 'handlePostUpdate' that accepts these named parameters to process the data.

```php
// Dispatching with multiple parameters
$this->dispatch('post-updated', id: $post->id, title: $post->title);

```

```php
// Listening and receiving parameters
#[On('post-updated')]
public function handlePostUpdate($id, $title)
{
    // Use $id and $title...
}

```

--------------------------------

### Fixing Blade Parameter Quotes for UUIDs in Livewire/Alpine

Source: https://livewire.laravel.com/docs/4.x/alpine

Demonstrates how to correctly pass string parameters, such as UUIDs, from Blade to Alpine.js within Livewire. Incorrect quoting leads to JavaScript errors, while proper quoting ensures correct rendering and functionality. This is crucial for dynamic data handling.

```html
<button
    type="button"
    x-on:click="$wire.deletePost('{{ $post->uuid }}')"
>
```

--------------------------------

### ShowPost Component Blade Template

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This Blade template renders the details of a single post, including its title and content. It also includes a button to refresh the post data using Livewire's '$refresh' action.

```blade
<div>
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <button wire:click="$refresh">Refresh post</button>
</div>
```

--------------------------------

### Define Event Listeners in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This snippet shows how to define global event listeners in Livewire using the `on` function within Volt components. It covers static, dynamic, and dot-notation based event names. Listeners are crucial for inter-component communication.

```php
use function Livewire\Volt\{on};

on(['eventName' => function () {
    //
}]);

on(fn ($post) => [
    'event-'.$post->id => function () {
        //
    }),
]);

on(['event-{post.id}' => function () {
    //
}]);
```

--------------------------------

### Styling child elements with `in-data-loading` variant

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Shows how to conditionally display child elements based on the `data-loading` state of a parent element using the `in-data-loading:` variant in Tailwind CSS. This is useful for showing loading indicators within a button.

```blade
<button wire:click="save">
    <span class="in-data-loading:hidden">Save</span>
    <span class="hidden in-data-loading:block">Saving...</span>
</button>
```

--------------------------------

### Scoped Styles in Multi-File Component (CSS)

Source: https://livewire.laravel.com/docs/4.x/styles

Illustrates defining scoped styles for a multi-file Livewire component by creating a `.css` file with the same name as the component. This CSS file contains styles that will be automatically scoped to the component, similar to the single-file component approach.

```css
.title {
    color: blue;
    font-size: 2rem;
}

.btn {
    background: indigo;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
}
```

--------------------------------

### Dispatch Events from Livewire Component Scripts

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch custom events like 'post-created' from a Livewire component's script. Use $dispatch to send events that can bubble up to parent components or Livewire.on listeners. Use $dispatchSelf to limit the event to the current component only. Events can carry additional data as an object.

```html
<script>
    this.$dispatch('post-created');
</script>
```

```js
this.$dispatchSelf('post-created');
```

```html
<script>
    this.$dispatch('post-created', { refreshPosts: true });
</script>
```

--------------------------------

### Storing Search Query with Session Property (PHP)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Demonstrates using the #[Session] attribute to store a user's search query, persisting the value across page refreshes without relying on URL parameters or computed property caching.

```php
use Livewire\Attributes\Session;

#[Session]
public $search = '';
```

--------------------------------

### Call JavaScript Action from Alpine.js (Blade)

Source: https://livewire.laravel.com/docs/4.x/actions

Shows how to invoke a Livewire JavaScript action named 'bookmark' directly from Alpine.js using the $wire object within an x-on:click directive.

```blade
<button x-on:click="$wire.$js.bookmark()">Bookmark</button>

```

--------------------------------

### Handle Form Submission with wire:submit in Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-submit

This snippet demonstrates how to handle a form submission using Livewire's `wire:submit` directive. It includes a Livewire component in PHP for processing the data and a Blade template for the form structure. The `save` method in the component creates a new post and redirects the user.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $title = '';

    public $content = '';

    public function save()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

```

```blade
<form wire:submit="save"> 
    <input type="text" wire:model="title">

    <textarea wire:model="content"></textarea>

    <button type="submit">Save</button>
</form>

```

--------------------------------

### Apply Livewire View Transitions in Blade

Source: https://livewire.laravel.com/docs/4.x/attribute-transition

Shows how to apply view transitions to HTML elements within a Livewire Blade view using the `wire:transition` directive. This directive targets the 'content' element for transition animations.

```html
<div>
    <div wire:transition="content">
        Step {{ $step }}
    </div>

    <button wire:click="previous">Back</button>
    <button wire:click="next">Next</button>
</div>

```

--------------------------------

### Dependent Select Dropdowns with Livewire `wire:key`

Source: https://livewire.laravel.com/docs/4.x/wire-model

Demonstrates how to create dependent select dropdowns where the options of one select menu change based on the selection in another. The `wire:key` directive is crucial on the dependent select to ensure proper refreshing when its options change.

```blade
<!-- States select menu... -->
<select wire:model.live="selectedState">
    @foreach (State::all() as $state)
        <option value="{{ $state->id }}">{{ $state->label }}</option>
    @endforeach
</select>

<!-- Cities dependent select menu... -->
<select wire:model.live="selectedCity" wire:key="{{ $selectedState }}"> 
    @foreach (City::whereStateId($selectedState->id)->get() as $city)
        <option value="{{ $city->id }}">{{ $city->label }}</option>
    @endforeach
</select>
```

--------------------------------

### Modifying View Instance (Blade/PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates how to interact directly with the view instance in class-based Volt components, such as setting the view's title using a `rendering` method. This method receives the `IlluminateViewView` instance as an argument.

```php
<?php

use Illuminate\View\View;
use Livewire\Volt\Component;

new class extends Component {
    public function rendering(View $view): void
    {
        $view->title('Create Post');

        // ...
    }

    // ...
}
```

--------------------------------

### Assert File Downloaded (Livewire Assertion)

Source: https://livewire.laravel.com/docs/4.x/testing

Asserts that a file download was triggered by the component. Can optionally check for a specific filename. This method is part of Livewire's testing utilities.

```php
assertFileDownloaded()
assertFileDownloaded($filename)
```

--------------------------------

### Artisan Command for S3 Upload Cleanup

Source: https://livewire.laravel.com/docs/4.x/uploads

This command configures S3 to automatically clean up temporary Livewire upload files that are older than 24 hours. This is crucial for managing storage space when using direct S3 uploads. It assumes S3 is already configured as the temporary upload disk.

```shell
php artisan livewire:configure-s3-upload-cleanup
```

--------------------------------

### Listen for Livewire Events in Alpine.js

Source: https://livewire.laravel.com/docs/4.x/events

Listen for Livewire events directly within Alpine.js directives in your Blade templates. Use `x-on:event-name` to listen for events dispatched by Livewire components. Add `.window` to listen globally across all components.

```blade
<div x-on:post-created="..."></div>
```

```blade
<div x-on:post-created.window="..."></div>
```

--------------------------------

### Stream CountDown Component using PHP in Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-stream

Demonstrates basic wire:stream functionality with a PHP component. It streams a countdown from 3 to 0 to an HTML element, updating the count every second.

```php
use Livewire\Component;

class CountDown extends Component
{
    public $start = 3;

    public function begin()
    {
        while ($this->start >= 0) {
            // Stream the current count to the browser...
            $this->stream(  
                to: 'count',
                content: $this->start,
                replace: true,
            );

            // Pause for 1 second between numbers...
            sleep(1);

            // Decrement the counter...
            $this->start = $this->start - 1;
        }
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <button wire:click="begin">Start count-down</button>

            <h1>Count: <span wire:stream="count">{{ $start }}</span></h1> 
        </div>
        HTML;
    }
}
```

--------------------------------

### Listen for 'post-created' Event in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet demonstrates how to use the #[On] attribute to make a Livewire component method, `updatePostList`, listen for a 'post-created' event. When the event is dispatched with a 'title' parameter, this method will execute, updating the session flash message. It requires the Livewire Component and Attributes namespaces.

```php
<?php // resources/views/components/⚡dashboard.blade.php

use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    #[On('post-created')] // [tl! highlight]
    public function updatePostList($title)
    {
        session()->flash('status', "New post created: {$title}");
    }
};

```

--------------------------------

### Use General Paginator Hooks with Page Name Argument in Livewire

Source: https://livewire.laravel.com/docs/4.x/pagination

Alternatively, you can use more generic `updatingPaginators` and `updatedPaginators` methods. These methods accept the `$pageName` as a second argument, allowing you to differentiate between paginators within a single hook implementation.

```php
public function updatingPaginators($page, $pageName)
{
    // Runs before the page is updated for this component...
}

public function updatedPaginators($page, $pageName)
{
    // Runs after the page is updated for this component...
}

```

--------------------------------

### Implement Page Update Hooks in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/pagination

Livewire provides `updatingPage` and `updatedPage` methods that allow you to execute code immediately before and after a component's pagination state changes. These hooks are useful for triggering side effects or performing cleanup operations related to page updates.

```php
<?php // resources/views/components/⚡show-posts.blade.php

use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    use WithPagination;

    public function updatingPage($page)
    {
        // Runs before the page is updated for this component...
    }

    public function updatedPage($page)
    {
        // Runs after the page is updated for this component...
    }

    #[Computed]
    public function posts()
    {
        return Post::paginate(10);
    }
};

```

--------------------------------

### HTML Form for Livewire File Uploads (Blade)

Source: https://livewire.laravel.com/docs/4.x/uploads

A Blade template snippet showing a basic HTML form structure for uploading files using Livewire. It utilizes `wire:model` for binding the file input to a component property and `wire:submit` for form submission.

```blade
<form wire:submit="save">
    <input type="file" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save photo</button>
</form>
```

--------------------------------

### Call Store Method from Livewire Component

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code shows how a Livewire component can call the `store()` method defined within its `PostForm` object. Instead of having the creation logic directly in the component's `save()` method, it delegates the task to the form object. This promotes better separation of concerns.

```php
<?php // resources/views/components/post/⚡create.blade.php

use App\Livewire\Forms\PostForm;
use Livewire\Component;

new class extends Component {
    public PostForm $form;

    public function save()
    {
        $this->form->store(); // [tl! highlight] 

        return $this->redirect('/posts');
    }

    // ...
};
```

--------------------------------

### Multi-select Dropdown with wire:model

Source: https://livewire.laravel.com/docs/4.x/wire-model

Demonstrates how to use wire:model with a multiple select dropdown. Livewire automatically manages the addition and removal of selected values to the bound array property.

```blade
<select wire:model="states" multiple>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    ...
</select>
```

--------------------------------

### Adapt Livewire Form Object for Editing Existing Post

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code snippet shows how to adapt the `PostForm` object for editing an existing post. It includes a `setPost` method to populate the form fields with data from a `Post` model and an `update` method to handle the modification of the existing post. The `mount` method in the component is used to initially set the post data.

```php
<?php // resources/views/components/post/⚡edit.blade.php

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public PostForm $form;

    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/posts');
    }
};
```

--------------------------------

### Livewire Island Always Render with Parent

Source: https://livewire.laravel.com/docs/4.x/islands

Shows how to use the `always: true` parameter on a Livewire island to force it to re-render whenever its parent component updates. This ensures critical data within the island stays synchronized.

```blade
<div>
    @island(always: true)
        <div>
            Revenue: {{ $this->revenue }}

            <button type="button" wire:click="$refresh">Refresh revenue</button>
        </div>
    @endisland

    <button type="button" wire:click="$refresh">Refresh</button>
</div>
```

--------------------------------

### Dispatch 'post-created' Event from Livewire Component

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet shows how to dispatch a 'post-created' event from a Livewire component using the `$this->dispatch()` method. It creates a new Post and then triggers the event, passing the newly created post's title as a named parameter. This event can then be caught by other components listening for 'post-created'. Requires Livewire Component and App\Models\Post namespaces.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public $title = '';

    public function save()
    {
        $post = Post::create(['title' => $this->title]);

        $this->dispatch('post-created', title: $post->title); // [tl! highlight]

        return redirect('/posts');
    }
};

```

--------------------------------

### Livewire Component Blade for Download Button

Source: https://livewire.laravel.com/docs/4.x/downloads

The Blade view for a Livewire component that includes a button to trigger a file download. The button uses `wire:click` to call the `download` method within the Livewire component. This is a standard way to initiate actions from the frontend.

```blade
<div>
    <h1>{{ $invoice->title }}</h1>

    <span>{{ $invoice->date }}</span>
    <span>{{ $invoice->amount }}</span>

    <button type="button" wire:click="download">Download</button>
</div>

```

--------------------------------

### Setting Cookies for Livewire Component Tests

Source: https://livewire.laravel.com/docs/4.x/testing

Employ `withCookie()` or `withCookies()` to set specific cookies for your Livewire component tests. This enables testing scenarios where your component relies on cookie values for its functionality or state.

```php
it('loads discount token from cookie', function () {
    Livewire::withCookies(['discountToken' => 'SUMMER2024'])
        ->test('cart')
        ->assertSet('discountToken', 'SUMMER2024');
});
```

--------------------------------

### Implement SetPost and Update Methods in Livewire Form Object

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code extends the `PostForm` class to support editing. It adds a nullable `Post` property, a `setPost` method to initialize form fields from an existing `Post` object, and an `update` method to persist changes to the existing post. This allows the form object to handle both creation and updates.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Post;

class PostForm extends Form
{
    public ?Post $post;

    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:5')]
    public $content = '';

    public function setPost(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;

        $this->content = $post->content;
    }

    public function store()
    {
        $this->validate();

        Post::create($this->only(['title', 'content']));
    }

    public function update()
    {
        $this->validate();

        $this->post->update(
            $this->only(['title', 'content'])
        );
    }
}
```

--------------------------------

### Livewire Default Persistent Middleware

Source: https://livewire.laravel.com/docs/4.x/security

Lists the default middleware that Livewire automatically persists across network requests. If these are applied during initial page load, they will be re-applied to subsequent Livewire requests.

```php
\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
\Laravel\Jetstream\Http\Middleware\AuthenticateSession::class,
\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
\Illuminate\Routing\Middleware\SubstituteBindings::class,
\App\Http\Middleware\RedirectIfAuthenticated::class,
\Illuminate\Auth\Middleware\Authenticate::class,
\Illuminate\Auth\Middleware\Authorize::class,
```

--------------------------------

### Keep Query String Entries (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Ensure specific query string parameters are always present in the URL, even when their values are empty. The `keep: true` parameter in `#[Url]` forces the parameter to be included, which is useful for SEO or to indicate an active filter state.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url(keep: true)]
    public $search = '';

    // ...
}
```

--------------------------------

### wire:text Directive Syntax Reference

Source: https://livewire.laravel.com/docs/4.x/wire-text

The reference for the wire:text directive, showing its basic syntax for binding component properties or expressions to an element's text content.

```blade
wire:text="expression"
```

--------------------------------

### Styling Siblings Based on Data Loading State

Source: https://livewire.laravel.com/docs/4.x/loading-states

Illustrates styling sibling elements using Tailwind's `peer` utility combined with the `peer-data-loading:` variant. This allows a sibling `span` to become semi-transparent when the preceding `button` is in a loading state.

```blade
<div>
    <button wire:click="save" class="peer">
        Save
    </button>

    <span class="peer-data-loading:opacity-50">
        Saving...
    </span>
</div>
```

--------------------------------

### Basic Sortable List HTML Structure with Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-sort

This Blade snippet shows how to create a basic sortable list using Livewire's `wire:sort` directive. It iterates through a collection of items, assigning a unique identifier to each list item for sorting purposes.

```blade
<ul wire:sort="sortItem">
    @foreach ($todo->items as $item)
        <li wire:sort:item="{{ $item->id }}">
            {{ $item->title }}
        </li>
    @endforeach
</ul>

```

--------------------------------

### Test Component Event Dispatching with assertDispatched()

Source: https://livewire.laravel.com/docs/4.x/testing

Checks if specific events are dispatched by a component during its lifecycle. Supports asserting the event name and optionally its parameters, including complex assertions with closures.

```php
it('dispatches event when post is created', function () {
    Livewire::test('post.create')
        ->set('title', 'New post')
        ->call('save')
        ->assertDispatched('post-created');
});

it('updates post count when event is dispatched', function () {
    $badge = Livewire::test('post-count-badge')
        ->assertSee('0');

    Livewire::test('post.create')
        ->set('title', 'New post')
        ->call('save')
        ->assertDispatched('post-created');

    $badge->dispatch('post-created')
        ->assertSee('1');
});

it('dispatches notification when deleting post', function () {
    Livewire::test('post.show')
        ->call('delete', postId: 3)
        ->assertDispatched('notify', message: 'Post deleted');
});

it('dispatches event with correct data', function () {
    Livewire::test('post.show')
        ->call('delete', postId: 3)
        ->assertDispatched('notify', function ($event, $params) {
            return ($params['message'] ?? '') === 'Post deleted';
        });
});
```

--------------------------------

### Livewire Renderless Attribute for Performance

Source: https://livewire.laravel.com/docs/4.x/attribute-renderless

Demonstrates using the #[Renderless] attribute on a Livewire component action to prevent view re-renders. This is useful for actions like incrementing view counts that only interact with the backend.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Attributes\Renderless;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    #[Renderless] // [tl! highlight]
    public function incrementViewCount()
    {
        $this->post->incrementViewCount();
    }
};
```
```

--------------------------------

### Include Custom Traits and Interfaces in Livewire Volt

Source: https://livewire.laravel.com/docs/4.x/volt

This snippet illustrates how to incorporate custom PHP traits and interfaces into a functional Volt component using the `uses()` function. This enables the component to inherit functionality and adhere to contracts defined in external classes.

```php
use function Livewire\Volt\uses;

use App\Contracts\Sorting;
use App\Concerns\WithSorting;

uses([Sorting::class, WithSorting::class]);
```

--------------------------------

### Livewire Island Usage in Loops/Conditionals (Blade)

Source: https://livewire.laravel.com/docs/4.x/islands

Illustrates the restriction of using Livewire islands directly within Blade loops or conditionals. It shows incorrect and correct patterns, emphasizing that loops and conditionals should be placed inside the island instead.

```blade
{{-- ❌ This won't work --}}
@foreach ($items as $item)
    @island
        {{ $item->name }}
    @endisland
@endforeach

{{-- ❌ This won't work either --}}
@if ($showRevenue)
    @island
        Revenue: {{ $this->revenue }}
    @endisland
@endif

{{-- ✅ Instead, put the loop/conditional inside the island --}}
@island
    @if ($this->showRevenue)
        Revenue: {{ $this->revenue }}
    @endif

    @foreach ($this->items as $item)
        {{ $item->name }}
    @endforeach
@endisland
```

--------------------------------

### Locking Component Properties with #[Locked] Attribute in Livewire/PHP

Source: https://livewire.laravel.com/docs/4.x/security

Demonstrates how to use the `#[Locked]` attribute in Livewire components to prevent frontend tampering with component properties. This ensures that properties like `postId` cannot be modified directly from the client-side, enhancing security. It requires the Livewire package and Eloquent models.

```php
<?php

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Locked;

class ShowPost extends Component
{
    #[Locked] // [tl! highlight]
    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function delete()
    {
        $post = Post::find($this->postId);

        $post->delete();
    }
}
```

--------------------------------

### Assert Authorization Exceptions (Livewire Assertion)

Source: https://livewire.laravel.com/docs/4.x/testing

Asserts that an authorization exception was thrown, typically resulting in a 401 Unauthorized status. This is useful for verifying access control logic in components.

```php
assertUnauthorized()
```

--------------------------------

### Calling Livewire Component Actions

Source: https://livewire.laravel.com/docs/4.x/testing

Trigger component methods (actions) directly within your tests using the `call()` method. This allows you to test the logic and side effects of your component's actions, such as saving data or performing operations.

```php
use App\Models\Post;

it('can create a post', function () {
    expect(Post::count())->toBe(0);

    Livewire::test('post.create')
        ->set('title', 'My new post')
        ->set('content', 'Post content here')
        ->call('save');

    expect(Post::count())->toBe(1);
});

// With parameters:
Livewire::test('post.show')
    ->call('deletePost', $postId);
```

--------------------------------

### Bind Form Inputs to Component Properties with wire:model (PHP & Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-model

This snippet demonstrates how to use `wire:model` to bind form input values to component properties in a Livewire Create Post component. It shows the PHP class definition with properties `$title` and `$content`, and the Blade template with input fields linked via `wire:model`.

```php
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $title = '';

    public $content = '';

    public function save()
    {
		$post = Post::create([
			'title' => $this->title
			'content' => $this->content
		]);

        // ...
    }
}
```

```blade
<form wire:submit="save">
    <label>
        <span>Title</span>

        <input type="text" wire:model="title"> 
    </label>

    <label>
        <span>Content</span>

        <textarea wire:model="content"></textarea> 
    </label>

	<button type="submit">Save</button>
</form>
```

--------------------------------

### Styling Parent Based on Child Loading State

Source: https://livewire.laravel.com/docs/4.x/loading-states

Demonstrates how to style a parent element based on whether it contains a child element that is in a loading state. This is achieved using Tailwind's `has-data-loading:` variant, causing the parent div to become semi-transparent when the button is clicked.

```blade
<div class="has-data-loading:opacity-50">
    <button wire:click="save">Save</button>
</div>
```

--------------------------------

### Passing Static Props to Child Component

Source: https://livewire.laravel.com/docs/4.x/nesting

Shows how to pass static string and boolean values as props to a child Livewire component. String props are passed using the 'key="value"' syntax, while boolean props can be passed by simply including the key name.

```blade
<livewire:todo-count :todos="$todos" label="Todo Count:" />
```

```blade
<livewire:todo-count :todos="$todos" inline />
```

--------------------------------

### Including External Stylesheets with @assets (Blade)

Source: https://livewire.laravel.com/docs/4.x/styles

Demonstrates how to include external stylesheets, such as those from a CDN or third-party libraries, using the `@assets` directive in Livewire. This is useful for loading CSS that is not managed directly within the component files.

```blade
@assets
<link rel="stylesheet" href="https://cdn.example.com/library.css">
@endassets
```

--------------------------------

### Pass Props to Lazy Livewire Components

Source: https://livewire.laravel.com/docs/4.x/lazy

Demonstrates how to pass data as props to a lazy-loaded Livewire component. The data is passed via the `wire:model` directive or directly as attributes in the Blade view and can be accessed in the component's `mount()` method. Note that props are serialized for lazy components.

```blade
<input type="date" wire:model="start">
<input type="date" wire:model="end">

<livewire:revenue lazy :$start :$end />
```

```php
<?php // resources/views/components/⚡revenue.blade.php

use Livewire\Component;
use App\Models\Transaction;

new class extends Component {
    public $amount;

    public function mount($start, $end)
    {
        // Expensive database query...
        $this->amount = Transactions::between($start, $end)->sum('amount');
    }
};
?>

@placeholder
    <div>
        <!-- Loading spinner... -->
        <svg>...</svg>
    </div>
@endplaceholder

<div>
    Revenue this month: {{ $amount }}
</div>
```

```blade
<livewire:revenue lazy :$user />
```

--------------------------------

### Handling Third-Party Events with Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Shows how to listen for custom events fired by third-party JavaScript libraries, such as the `trix-change` event from the Trix rich text editor. It illustrates binding a Livewire action to an external event.

```blade
<trix-editor
    wire:trix-change="setPostContent($event.target.value)"
></trix-editor>

```

--------------------------------

### Dispatch Event from Livewire Volt Action (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how a Livewire Volt action can dispatch custom events. The `$increment` action, besides its primary logic, dispatches a `count-updated` event, allowing other parts of the application or components to react to this change.

```php
<?php

use function Livewire\Volt\state;

state(['count' => 0]);

$increment = function () {
    $this->dispatch('count-updated');

    //
};

?>
```

--------------------------------

### Refreshing Livewire Component with $wire.$refresh()

Source: https://livewire.laravel.com/docs/4.x/alpine

Shows how to trigger a network roundtrip to re-render a Livewire component's Blade view using the $wire.$refresh() method. This is useful for updating component state or UI elements that require a full re-render.

```html
<button type="button" x-on:click="$wire.$refresh()">

```

--------------------------------

### Define and Trigger JavaScript Action (PHP/Blade/JavaScript)

Source: https://livewire.laravel.com/docs/4.x/actions

Defines a JavaScript action 'bookmark' triggered by a button click. It optimistically updates a boolean property '$wire.bookmarked' and then calls a PHP method 'bookmarkPost'. Useful for instant UI feedback before server persistence.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public $bookmarked = false;

    public function mount()
    {
        $this->bookmarked = $this->post->bookmarkedBy(auth()->user());
    }

    public function bookmarkPost()
    {
        $this->post->bookmark(auth()->user());

        $this->bookmarked = $this->post->bookmarkedBy(auth()->user());
    }
};

```

```blade
<div>
    <button wire:click="$js.bookmark" class="flex items-center gap-1">
        {{-- Outlined bookmark icon... --}}
        <svg wire:show="!bookmarked" wire:cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
        </svg>

        {{-- Solid bookmark icon... --}}
        <svg wire:show="bookmarked" wire:cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z" clip-rule="evenodd" />
        </svg>
    </button>
</div>

<script>
    this.$js.bookmark = () => {
        $wire.bookmarked = !$wire.bookmarked

        $wire.bookmarkPost()
    }
</script>

```

--------------------------------

### Set Page Title for Volt Full-Page Component

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to set the HTML page title for a Volt full-page component using the `title` function. This is useful for SEO and user experience.

```php
use function Livewire\Volt\{layout, state, title};

state('users');

layout('components.layouts.admin');

title('Users');
```

--------------------------------

### Lazy Loading Islands with @island

Source: https://livewire.laravel.com/docs/4.x/directive-island

Shows how to implement lazy loading for an @island directive, deferring its initial render until it becomes visible in the viewport. This improves initial page load performance by only rendering the island when necessary. The island will display a loading state until its content is fetched.

```blade
@island(lazy: true)
    <div>
        Revenue: {{ $this->revenue }}
    </div>
@endisland
```

--------------------------------

### Reference: wire:replace Directive

Source: https://livewire.laravel.com/docs/4.x/wire-replace

This snippet simply shows the basic syntax for the `wire:replace` directive as a reference. It indicates the directive's name without any modifiers, signifying its primary function of replacing child elements.

```blade
wire:replace
```

--------------------------------

### Override Lazy Loading with Blade Parameter

Source: https://livewire.laravel.com/docs/4.x/attribute-lazy

Shows how to override the `#[Lazy]` attribute on a component and force it to load immediately using the `:lazy="false"` parameter in a Blade view. This provides flexibility to control loading behavior on a per-instance basis.

```blade
<livewire:revenue :lazy="false" />
```

--------------------------------

### Dynamic Livewire Event Names

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch and listen for Livewire events with dynamic names, often by including component-specific data like an Eloquent model ID. This allows for scoped event handling.

```php
<?php // resources/views/components/post/⚡edit.blade.php

use LivewireComponent;

new class extends Component {
    public function update()
    {
        // ...

        $this->dispatch("post-updated.{$post->id}");
    }
};

```

```php
<?php // resources/views/components/post/⚡show.blade.php

use LivewireAttributesOn;
use LivewireComponent;
use AppModelsPost;

new class extends Component {
    public Post $post;

	#[On('post-updated.{post.id}')]
    public function refreshPost()
    {
		// ...
    }
};

```

--------------------------------

### Dispatching Events Client-Side in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

This snippet demonstrates how to dispatch a Livewire event directly from the client-side within a Blade component. It avoids an initial network request, improving performance by initiating the event listener directly in the browser. This is useful for actions like removing an item without a full page reload.

```php
<?php // resources/views/components/⚡todo-item.blade.php

use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    public Todo $todo;
};
?>

<div>
    <span>{{ $todo->content }}</span>

    <button wire:click="$dispatch('remove-todo', { todoId: {{ $todo->id }} })">Remove</button>
</div>
```

--------------------------------

### Track External Link Clicks Asynchronously in Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates how to use both the `#[Async]` attribute and the `.async` modifier to track external link clicks without delaying the user. The tracking action is performed in the background.

```php
<?php

use Livewire\Attributes\Async;
use Livewire\Component;

new class extends Component {
    public $url;

    #[Async]
    public function trackClick()
    {
        Analytics::track('external-link-clicked', [
            'url' => $this->url,
            'user_id' => auth()->id(),
        ]);
    }

    // ...
};
```

```blade
<a href="{{ $url }}" target="_blank" wire:click.async="trackClick">
    Visit External Site
</a>
```

--------------------------------

### Track Asset Changes for Full Page Reloads

Source: https://livewire.laravel.com/docs/4.x/navigate

To ensure users receive updated JavaScript assets after deployments when using `wire:navigate`, add the `data-navigate-track` attribute to `<script>` tags in the `<head>`. Livewire will monitor changes in the query string of these assets and trigger a full browser reload if a change is detected, preventing the use of stale cached versions. Laravel's Vite plugin automatically adds this attribute.

```html
<!-- Page one -->
<head>
    <script src="/app.js?id=123" data-navigate-track></script>
</head>

<!-- Page two -->
<head>
    <script src="/app.js?id=456" data-navigate-track></script>
</head>
```

```html
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
```

--------------------------------

### Blade Directive for View Transitions

Source: https://livewire.laravel.com/docs/4.x/wire-transition

The `wire:transition` directive in Livewire is used to specify a view-transition-name for elements. It supports either an implicit name based on the element or an explicit string name. This directive has no modifiers.

```blade
wire:transition="name"
```

--------------------------------

### Livewire wire:intersect Basic Usage

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Demonstrates the fundamental use of the wire:intersect directive to execute a Livewire component action when an element becomes visible in the viewport. No specific dependencies are required beyond Livewire itself.

```blade
<div wire:intersect="loadMore">
    <!-- Content loads when scrolled into view -->
</div>
```

--------------------------------

### Livewire Basic Polling with wire:poll

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Demonstrates the basic usage of `wire:poll` on a Livewire component's template. When applied to an element, it automatically polls the server every 2.5 seconds to update the content.

```blade
<div wire:poll>
    Subscribers: {{ $count }}
</div>
```

--------------------------------

### Active Link Highlighting with @persist and wire:current (Blade)

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Illustrates using `wire:current` within a persisted navigation block to dynamically highlight active links. This directive replaces server-side conditionals for active link styling in persisted navigation menus.

```blade
@persist('navigation')
    <nav>
        <a href="/dashboard" wire:navigate wire:current="font-bold">Dashboard</a>
        <a href="/posts" wire:navigate wire:current="font-bold">Posts</a>
        <a href="/users" wire:navigate wire:current="font-bold">Users</a>
    </nav>
@endpersist
```

--------------------------------

### Basic Computed Property in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-computed

Demonstrates applying the #[Computed] attribute to a method to create a cached property. The 'user()' method is accessed like a property, and its result is cached for the duration of the request. This is useful for expensive operations that are accessed multiple times.

```php
<?php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $userId;

    #[Computed]
    public function user()
    {
        return User::find($this->userId);
    }

    public function follow()
    {
        Auth::user()->follow($this->user);
    }
};

```

```blade
<div>
    <h1>{{ $this->user->name }}</h1>
    <span>{{ $this->user->email }}</span>

    <button wire:click="follow">Follow</button>
</div>

```

--------------------------------

### Real-time Validation with #[Validate] in Livewire

Source: https://livewire.laravel.com/docs/4.x/forms

Demonstrates how to enable real-time validation for specific fields in Livewire Forms using the `#[Validate]` attribute without providing explicit rules. This triggers validation on field updates, such as on blur events (`wire:model.blur`), allowing for immediate user feedback.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    #[Validate] // Enables real-time validation for title
    public $title = '';

    public $content = '';

    protected function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->post),
            ],
            'content' => 'required|min:5',
        ];
    }

    // ...

    public function update()
    {
        $this->validate();

        $this->post->update($this->only(['title', 'content']));

        $this->reset();
    }
}

```

--------------------------------

### Single Livewire Method Listening for Multiple Events

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet shows a single Livewire component method, `refreshStats`, that is configured to listen for multiple distinct events: 'post-created', 'post-updated', and 'post-deleted'. This is achieved by applying the #[On] attribute multiple times to the same method, allowing it to react to any of these post-related events. Requires Livewire Attributes namespace.

```php
use Livewire\Attributes\On;

#[On('post-created')]
#[On('post-updated')]
#[On('post-deleted')]
public function refreshStats()
{
    // Refresh statistics when any post changes
}

```

--------------------------------

### Redirect to Intended URL

Source: https://livewire.laravel.com/docs/4.x/redirecting

This snippet illustrates the use of `redirectIntended()` to redirect the user back to the previous page they were on. It accepts an optional default URL as a fallback if the previous page cannot be determined.

```php
$this->redirectIntended('/default/url');
```

--------------------------------

### Navigate and Reset Named Paginators in Livewire

Source: https://livewire.laravel.com/docs/4.x/pagination

When interacting with paginators that have been assigned a specific name (e.g., 'invoices-page'), you must provide this name as an additional parameter to Livewire's page navigation methods. This ensures that the correct paginator's state is manipulated.

```php
$this->setPage(2, pageName: 'invoices-page');

$this->resetPage(pageName: 'invoices-page');

$this->nextPage(pageName: 'invoices-page');

$this->previousPage(pageName: 'invoices-page');

```

--------------------------------

### Set Page Title with Render Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Dynamically sets the page title for a Livewire component within its `render()` method using the `->title()` fluent method. This allows for titles that are generated based on component data or other dynamic factors. The title string is passed as an argument to the `title()` method.

```php
<?php

use Livewire\Component;

// ... inside a component class

public function render()
{
    return $this->view()
         ->title('Create Post');
}

```

--------------------------------

### Dispatch Event Directly to Another Component (PHP)

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch an event directly to a specific component using the `dispatch()->to()` modifier. This bypasses other components that might be listening for the same event. It requires the target component class to be imported.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public function save()
    {
		// ...

		$this->dispatch('post-created')->to(component: Dashboard::class);
    }
};

```

--------------------------------

### Livewire Snapshot for Nested Stringable - JavaScript

Source: https://livewire.laravel.com/docs/4.x/hydration

Presents the JavaScript representation of a Livewire snapshot containing a collection with a nested Stringable. The structure shows the tuple format for the Stringable, indicating its type.

```javascript
todos: [
    [
        'first',
        'second',
        [ 'third', { s: 'str' } ],
    ],
    { s: 'clctn', class: 'Illuminate\Support\Collection' },
],
```

--------------------------------

### Listen for Component Events in Livewire JavaScript

Source: https://livewire.laravel.com/docs/4.x/events

Listen for custom events like 'post-created' within a Livewire component's script tag. The listener is tied to the component's lifecycle; if the component is removed, the listener stops. This is useful for reacting to events emitted by the same component.

```html
<script>
    this.$on('post-created', () => {
        // Event handling logic here
    });
</script>
```

--------------------------------

### Global Styles in Single-File Component (Blade)

Source: https://livewire.laravel.com/docs/4.x/styles

Demonstrates how to apply global styles within a single-file Livewire component by adding the `global` attribute to the `<style>` tag. Styles defined this way will affect the entire application, not just the component.

```blade
<style global>
body {
    font-family: system-ui, sans-serif;
}

.prose {
    max-width: 65ch;
    line-height: 1.6;
}
</style>
```

--------------------------------

### Intercept and Modify Component State with `state` Closure

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates how to use a closure with the `state` function to intercept and modify property values passed to a Volt component. This allows for dynamic initialization or manipulation of component state.

```php
use function Livewire\Volt\state;

state(['count' => fn ($users) => count($users)]);
```

--------------------------------

### Make Action Call Asynchronous with .async Modifier

Source: https://livewire.laravel.com/docs/4.x/attribute-async

Shows how to make a specific Livewire action call asynchronous using the `.async` modifier directly in the Blade template. This approach is useful when an action needs to be asynchronous in certain contexts but synchronous in others.

```blade
<button wire:click.async="logActivity">Track Event</button>

```

--------------------------------

### Session Attribute for Livewire State

Source: https://livewire.laravel.com/docs/4.x/attribute-session

Demonstrates the #[Session] attribute used in Livewire for managing state within a user's session. It accepts an optional string key to customize the session variable name.

```php
#[Session(
    ?string $key = null,
)]
```

--------------------------------

### Persist Computed Property with Custom Cache Duration (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates customizing the cache duration for a persistent computed property. The `persist` method accepts a `seconds` argument to define the cache lifespan, as shown here with a 10-second duration.

```php
$count = computed(function () {
    return User::count();
})->persist(seconds: 10);
```

--------------------------------

### Dynamically Set Page Title with Closure in Volt

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates how to dynamically set the page title for a Volt full-page component using a closure passed to the `title` function. This is useful when the title depends on component state or external data.

```php
use function Livewire\Volt\{layout, state, title};

state('users');

layout('components.layouts.admin');

title(fn () => 'Users: ' . $this->users->count());
```

--------------------------------

### Hydrating Laravel Collections - PHP

Source: https://livewire.laravel.com/docs/4.x/hydration

Demonstrates how Livewire hydrates a public property declared as a Laravel collection. It shows the component's mount method initializing the collection and the resulting internal representation used by Livewire.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $todos;

    public function mount() {
        $this->todos = collect([
            'first',
            'second',
            'third',
        ]);
    }
};
```

--------------------------------

### Automatic Protection for Eloquent Model Properties (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-locked

Illustrates how Livewire automatically protects Eloquent model properties from client-side tampering without the need for the #[Locked] attribute. When an Eloquent model is stored in a public property, Livewire ensures its ID is not modified by users.

```php
<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post; // Already protected

    public function mount($id)
    {
        $this->post = Post::find($id);
    }
};

```

--------------------------------

### Persisting Computed Property Cache Across Requests

Source: https://livewire.laravel.com/docs/4.x/attribute-computed

Demonstrates how to use the `persist: true` parameter on the #[Computed] attribute to cache a property's value across multiple requests for the same component instance. The cache duration can be customized using the `seconds` parameter.

```php
<?php

use App\Models\User;
use Livewire\Attributes\Computed;

// Default persistence for 1 hour (3600 seconds)
#[Computed(persist: true)]
public function userForRequest()
{
    return User::find($this->userId);
}

// Custom persistence for 2 hours (7200 seconds)
#[Computed(persist: true, seconds: 7200)]
public function userForLongerRequest()
{
    return User::find($this->userId);
}

```

--------------------------------

### Configure Livewire Temporary File Upload Rules

Source: https://livewire.laravel.com/docs/4.x/uploads

Customize the global validation rules for temporary file uploads in Livewire by modifying the 'rules' key within the 'temporary_file_upload' configuration array in `config/livewire.php`. This allows for specific file types and size limits.

```php
'temporary_file_upload' => [
    // ...
    'rules' => 'file|mimes:png,jpg,pdf|max:102400', // (100MB max, and only accept PNGs, JPEGs, and PDFs)
]
```

--------------------------------

### Execute JavaScript in Livewire Components (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

Demonstrates how to include plain JavaScript directly within a Livewire component's Blade template. These scripts execute automatically when the component loads, simplifying DOM manipulation and event handling without manual 'DOMContentLoaded' listeners. This method is suitable for single-file and multi-file components.

```blade
<div>
    ...
</div>

<script>
    // This Javascript will get executed every time this component is loaded onto the page...
</script>
```

--------------------------------

### Evaluate Server-Side JavaScript in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/javascript

Demonstrates how to use the `js()` method in Livewire's server-side PHP code to evaluate JavaScript expressions on the client. This is useful for triggering client-side actions like alerts or dispatching events after server-side operations.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public $title = '';

    public function save()
    {
        // Save post to database...

        $this->js("alert('Post saved!')");
    }
};
```

```php
$this->js('$wire.$refresh()');
```

```php
$this->js('$wire.$dispatch("post-created", { id: ' . $post->id . ' })');
```

--------------------------------

### Livewire wire:intersect Reference Directives

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Provides a reference list of the core `wire:intersect` directives, including the base directive and its variants for specifying enter and leave events.

```blade
wire:intersect="action"
wire:intersect:enter="action"
wire:intersect:leave="action"
```

--------------------------------

### Automatic Loading Indicator using Data Attributes

Source: https://livewire.laravel.com/docs/4.x/uploads

This snippet shows a more concise way to display a loading indicator for file uploads using Livewire's automatic `data-loading` attribute. The element with the `not-data-loading:hidden` class will be shown during the upload process and hidden afterwards.

```blade
<div>
    <input type="file" wire:model="photo">

    <div class="not-data-loading:hidden">Uploading...</div>
</div>
```

--------------------------------

### Livewire Lazy Loading Image with wire:intersect (PHP & Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Demonstrates lazy loading an image using Livewire. A placeholder div with `wire:intersect.once` triggers the `loadImage` method, setting `$imageLoaded` to true and rendering the actual `<img>` tag only when the element enters the viewport.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $imageLoaded = false;

    public function loadImage()
    {
        $this->imageLoaded = true;
    }
};
?>

<div>
    @if ($imageLoaded)
        <img src="/path/to/image.jpg" alt="Product" style="width: 200px; height: 200px; background-color: lightblue;">
    @else
        <div wire:intersect.once="loadImage" class="bg-gray-200 h-64" style="width: 200px; height: 200px; background-color: lightgray;">
            <!-- Placeholder -->
        </div>
    @endif
</div>

```

--------------------------------

### Dispatch Event from Blade Template (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch events directly from Blade templates using the `$dispatch` JavaScript function, typically in response to user interactions. This allows for easy event triggering from elements like buttons.

```blade
<button wire:click="$dispatch('show-post-modal', { id: {{ $post->id }} })">
    EditPost
</button>

```

--------------------------------

### Parent Livewire Component Listening for Child Events (PHP)

Source: https://livewire.laravel.com/docs/4.x/nesting

Modifies the parent 'todos' component to listen for a 'remove-todo' event dispatched from a child component using the `#[On]` attribute. This allows the parent to react to actions initiated by its children.

```php
<?php // resources/views/components/⚡todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    #[On('remove-todo')] // [tl! highlight]
    public function remove($todoId)
    {
        $todo = Todo::find($todoId);

        $this->authorize('delete', $todo);

        $todo->delete();
    }

    #[Computed]
    public function todos()
    {
        return Auth::user()->todos,
    }
};
?>
```

--------------------------------

### Add Store Method to Livewire Form Object for Data Persistence

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code enhances the `PostForm` class by adding a `store()` method. This method encapsulates the validation and creation logic for a new post, allowing the component to simply call `$this->form->store()`. It utilizes the `Post::create()` method and the form object's `only()` method to persist data.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:5')]
    public $content = '';

    public function store() // [tl! highlight:5]
    {
        $this->validate();

        Post::create($this->only(['title', 'content']));
    }
}
```

--------------------------------

### Named Islands and Targeted Updates with wire:island

Source: https://livewire.laravel.com/docs/4.x/directive-island

Explains how to assign a name to an @island using the `name` parameter and target it for updates using the `wire:island` directive. This is useful for managing multiple isolated regions within a component and triggering updates on specific islands from different interactive elements.

```blade
@island(name: 'revenue')
    <div>Revenue: {{ $this->revenue }}</div>
@endisland

<button type="button" wire:click="$refresh" wire:island="revenue">
    Refresh revenue
</button>
```

--------------------------------

### Trigger Livewire Component Method on Click

Source: https://livewire.laravel.com/docs/4.x/wire-click

This snippet demonstrates how to use the `wire:click` directive to call a Livewire component method when an HTML element is clicked. It's a fundamental way to add interactivity to your Livewire applications. No external dependencies are required beyond Livewire itself.

```html
<button type="button" wire:click="download">
    Download Invoice
</button>
```

--------------------------------

### Real-time Validation with wire:model.blur

Source: https://livewire.laravel.com/docs/4.x/validation

This snippet demonstrates how to enable real-time validation for a form input in Livewire. By using `wire:model.blur`, validation rules are triggered when the user interacts with the input and then moves away from it (e.g., by tabbing or clicking elsewhere), without requiring additional backend logic.

```blade
<form wire:submit="save">
    <input type="text" wire:model.blur="title">

    <!-- -->
</form>
```

--------------------------------

### Livewire Assertions API

Source: https://livewire.laravel.com/docs/4.x/testing

This section covers various assertion methods provided by Livewire for testing component behavior, including state checks, rendered output validation, event dispatching, error handling, redirects, and view data verification.

```APIDOC
## Livewire Assertions

### Description
Provides methods to assert various states and outcomes of Livewire components during testing.

### Method
Various assertion methods (e.g., `assertSet`, `assertSee`, `assertDispatched`, `assertHasErrors`, `assertRedirect`, `assertViewHas`)

### Endpoint
N/A (These are testing helper methods, not HTTP endpoints)

### Parameters
Parameters vary depending on the assertion method used. Examples include:

#### Path Parameters
None

#### Query Parameters
None

#### Request Body
None

### Request Example
```php
// Example of using an assertion method
$this->wire('commentable')
     ->assertSee('My Comment')
     ->assertDispatched('comment-created');
```

### Response
N/A (These methods are used within test cases and do not return HTTP responses. They throw exceptions on failure.)

#### Success Response (200)
N/A

#### Response Example
N/A

---

## Assertion Methods Details

### `assertSet(string $property, $value = null)`
Asserts that a component property equals the provided value.

### `assertNotSet(string $property, $value = null)`
Asserts that a component property does not equal the provided value.

### `assertCount(string $property, int $count)`
Asserts that a component property (typically a collection or array) contains a specific number of items.

### `assertSee(string $value)`
Asserts that the rendered HTML output of the component contains the provided string.

### `assertDontSee(string $value)`
Asserts that the rendered HTML output of the component does not contain the provided string.

### `assertSeeHtml(string $html)`
Asserts that the rendered HTML output of the component contains the provided raw HTML string.

### `assertDontSeeHtml(string $html)`
Asserts that the rendered HTML output of the component does not contain the provided raw HTML string.

### `assertSeeInOrder(array $values)`
Asserts that a sequence of strings appears in the rendered HTML output in the specified order.

### `assertDispatched(string $event)`
Asserts that a specific event was dispatched by the component.

### `assertNotDispatched(string $event)`
Asserts that a specific event was not dispatched by the component.

### `assertHasErrors(string|array $fields = [])`
Asserts that validation failed for one or more properties. Can take a single field name or an array of field names and their expected error rules.

### `assertHasNoErrors(string|array $fields = [])`
Asserts that there are no validation errors for the specified properties.

### `assertRedirect(string $url = null)`
Asserts that a redirect was triggered. If a URL is provided, it asserts a redirect to that specific URL.

### `assertRedirectToRoute(string $name, array $parameters = [])`
Asserts that a redirect to a named route was triggered.

### `assertNoRedirect()`
Asserts that no redirect was triggered.

### `assertViewHas(string $key, $value = null)`
Asserts that data was passed to the view. Can check for the presence of a key, or a specific value associated with a key, or if a closure returns true for the value.

### `assertViewIs(string $view)`
Asserts that a specific view was rendered by the component.
```

--------------------------------

### Set Component-Specific Layout with Attribute (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Assigns a specific layout to an individual Livewire component using the `#[Layout]` attribute. This attribute is placed above the component class definition, allowing for component-level layout customization that overrides the global configuration. The layout view name is passed as a string argument.

```php
<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::dashboard')] class extends Component {
    // ...
};

```

--------------------------------

### Outputting PHP Data for Alpine with @js Directive

Source: https://livewire.laravel.com/docs/4.x/alpine

Illustrates the use of the @js directive in Blade to safely output PHP data structures for direct use within Alpine.js components. This avoids manual JSON encoding and ensures correct data formatting.

```blade
<div x-data="{ posts: @js($posts) }">
    ...
</div>
```

--------------------------------

### Resetting All or Specific Form Fields in Livewire

Source: https://livewire.laravel.com/docs/4.x/forms

Demonstrates how to reset all form fields in a Livewire Form object using the reset() method. It also shows how to reset specific fields by passing their names as arguments. This is useful for clearing form data after successful submission.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:5')]
    public $content = '';

    // ...

    public function store()
    {
        $this->validate();

        Post::create($this->only(['title', 'content']));

        $this->reset(); // Resets all fields
    }
}
?>

// Resetting specific fields:
$this->reset('title');

// Or multiple at once...
$this->reset(['title', 'content']);
```

--------------------------------

### Livewire .renderless Modifier for One-Off Skips

Source: https://livewire.laravel.com/docs/4.x/attribute-renderless

Illustrates using the .renderless modifier directly on a wire:click directive in Blade. This approach is suitable for specific, one-time use cases where adding a method attribute is unnecessary.

```blade
<button type="button" wire:click.renderless="incrementViewCount">
    Track View
</button>
```

--------------------------------

### Define and Use a Basic Computed Property in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Demonstrates how to define a computed property using the `computed` function in Livewire Volt. This property, `$count`, fetches the total number of users and caches its result for the current request lifecycle. It's displayed directly in the Blade template.

```php
<?php

use App\Models\User;
use function Livewire\Volt\computed;

$count = computed(function () {
    return User::count();
});

?>
```

```html
<div>
    {{ $this->count }}
</div>
```

--------------------------------

### PHP: Generate Laravel Policy

Source: https://livewire.laravel.com/docs/4.x/security

Generates a Laravel Policy for the Post model using the Artisan command. This policy will contain methods to authorize actions related to the Post model, such as deletion.

```bash
php artisan make:policy PostPolicy --model=Post

```

--------------------------------

### Targeting Component Root Element (& Selector) (Blade)

Source: https://livewire.laravel.com/docs/4.x/styles

Shows how to use the `&` selector within a `<style>` tag in a Livewire component to target the component's root element. This allows for styling the outermost container of the component, such as adding borders or padding.

```blade
<style>
& {
    border: 2px solid gray;
    padding: 1rem;
}

.title {
    margin-top: 0;
}
</style>
```

--------------------------------

### Livewire Island Data Scope in Blade

Source: https://livewire.laravel.com/docs/4.x/islands

Demonstrates how data scope works within Livewire islands in Blade templates. It highlights that variables defined outside the island, like `@php` variables, are not accessible inside, while component properties are.

```blade
@php
    $localVariable = 'This won\'t be available in the island';
@endphp

@island
    {{-- ❌ This will error - $localVariable is not accessible --}}
    {{ $localVariable }}

    {{-- ✅ Component properties work fine --}}
    {{ $this->revenue }}
@endisland
```

--------------------------------

### Basic Livewire Validation with `validate()` method

Source: https://livewire.laravel.com/docs/4.x/validation

Demonstrates the fundamental validation process in a Livewire component. It uses the `validate()` method to check component properties against defined rules before creating a new post. The frontend uses Blade directives to display validation errors.

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
	public $title = '';

    public $content = '';

    public function save()
    {
        $validated = $this->validate([
			'title' => 'required|min:3',
			'content' => 'required|min:3',
        ]);

		Post::create($validated);

		return redirect()->to('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

```

```blade
<form wire:submit="save">
	<input type="text" wire:model="title">
    <div>@error('title') {{ $message }} @enderror</div>

	<textarea wire:model="content"></textarea>
    <div>@error('content') {{ $message }} @enderror</div>

	<button type="submit">Save</button>
</form>

```

--------------------------------

### Declare Volt Component Property Without Initial Value

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to declare a Volt component property using the `state` function without specifying an initial value. The property will be `null` by default or set based on values passed during component rendering.

```php
use function Livewire\Volt\{mount, state};

state(['count']);

mount(function ($users) {
    $this->count = count($users);

    //
});
```

--------------------------------

### Livewire Component Nesting HTML Structure

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This HTML snippet illustrates the structure of nested Livewire components on initial page load. It shows a parent component containing its own elements and the rendered HTML of multiple nested child components, each with unique 'wire:id' and 'wire:snapshot' attributes.

```html
<div wire:id="123" wire:snapshot="...">
    Post Limit: <input type="number" wire:model.live="postLimit">

    <div wire:id="456" wire:snapshot="...">
        <h1>The first post</h1>

        <p>Post content</p>

        <button wire:click="$refresh">Refresh post</button>
    </div>

    <div wire:id="789" wire:snapshot="...">
        <h1>The second post</h1>

        <p>Post content</p>

        <button wire:click="$refresh">Refresh post</button>
    </div>
</div>
```

--------------------------------

### Register Custom Livewire Directive (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Demonstrates how to register a custom Livewire directive named 'confirm' using `Livewire.directive()`. This directive prompts the user with a confirmation dialog before an action is executed. It attaches an event listener to the element and includes cleanup logic.

```javascript
Livewire.directive('confirm', ({ el, directive, component, cleanup }) => {
    let content =  directive.expression

    // The "directive" object gives you access to the parsed directive.
    // For example, here are its values for: wire:click.prevent="deletePost(1)"
    //
    // directive.raw = wire:click.prevent
    // directive.value = "click"
    // directive.modifiers = ['prevent']
    // directive.expression = "deletePost(1)"

    let onClick = e => {
        if (! confirm(content)) {
            e.preventDefault()
            e.stopImmediatePropagation()
        }
    }

    el.addEventListener('click', onClick, { capture: true })

    // Register any cleanup code inside `cleanup()` in the case
    // where a Livewire component is removed from the DOM while
    // the page is still active.
    cleanup(() => {
        el.removeEventListener('click', onClick)
    })
})
```

--------------------------------

### Forwarding HTML Attributes to Livewire Child Components

Source: https://livewire.laravel.com/docs/4.x/nesting

Illustrates how to pass HTML attributes, such as 'class', from a parent Livewire component to a child component. These attributes are then accessible via the `$attributes` variable in the child.

```blade
<livewire:comment :$comment class="border-b" />
```

```blade
<div {{ $attributes->class('bg-white rounded-md') }}>
    <p>{{ $comment->author }}</p>
    <p>{{ $comment->body }}</p>
</div>
```

--------------------------------

### Assert Forbidden Access (Livewire Assertion)

Source: https://livewire.laravel.com/docs/4.x/testing

Asserts that access to a resource or action was forbidden, typically resulting in a 403 Forbidden status. Use this to test scenarios where a user lacks the necessary permissions.

```php
assertForbidden()
```

--------------------------------

### Sorting Across Groups in Livewire (PHP)

Source: https://livewire.laravel.com/docs/4.x/wire-sort

This PHP snippet illustrates the server-side handling for sorting items across different groups in Livewire. The `sortItem` method is designed to manage items potentially moving between parent lists.

```php
<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    public User $user;

    public function sortItem($item, $position)
    {
        $item = $this->todo->items()->findOrFail($item);

        // Update the item's position in the database and re-order other items...
    }
};

```

--------------------------------

### Live-updating Input Fields with `wire:model.live`

Source: https://livewire.laravel.com/docs/4.x/forms

This code snippet demonstrates how to use the `.live` modifier with `wire:model` in Livewire to send network requests to the server as a user types into an input field. This is useful for features like real-time search results. No external dependencies are required beyond Livewire itself.

```blade
<input type="text" wire:model.live="title">
```

--------------------------------

### Omitting Render Method with Computed Property (PHP)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Shows how to use computed properties to provide data to a Blade view when the component's render method is omitted, relying on Livewire's convention for view rendering.

```php
<?php // resources/views/components/⚡show-posts.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Post::all();
    }
};

```

--------------------------------

### Busting Computed Property Cache

Source: https://livewire.laravel.com/docs/4.x/attribute-computed

Shows how to manually clear the cache of a computed property using `unset()` when the underlying data changes during a request. This ensures that subsequent accesses to the property retrieve the updated data.

```php
<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function createPost()
    {
        if ($this->posts->count() > 10) {
            throw new \Exception('Maximum post count exceeded');
        }

        Auth::user()->posts()->create(...);

        unset($this->posts); // Clear cache
    }
};

```

--------------------------------

### Force Livewire Child Re-render with Dynamic Key (Blade)

Source: https://livewire.laravel.com/docs/4.x/nesting

Illustrates how to force a nested Livewire component to re-render by dynamically setting its `wire:key` attribute based on changing data. This ensures that when the relevant data (e.g., a collection of todos) changes, the child component is destroyed and re-initialized.

```blade
<div>
    <livewire:todo-count :todos="$todos" :wire:key="$todos->pluck('id')->join('-')" />
</div>
```

--------------------------------

### Using $wire Object for Server Interaction (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Illustrates how to use the $wire object within JavaScript embedded in Livewire components to interact with the server-side component. This includes refreshing the component, calling methods, and dispatching/listening for events, providing a seamless bridge between client and server.

```javascript
// Access and modify properties
$wire.count
$wire.count = 5
$wire.$set('count', 5)

// Call component methods
$wire.save()
$wire.delete(postId)

// Refresh the component
$wire.$refresh()

// Dispatch events
$wire.$dispatch('post-created', { postId: 2 })

// Listen for events
$wire.$on('post-created', (event) => {
    console.log(event.postId)
})

// Access the root element
$wire.$el.querySelector('.modal')
```

--------------------------------

### Inline Templates with Computed Property (PHP)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Illustrates using a computed property within an inline component template to pass data, as direct data passing is not possible when returning a template string from the render method.

```php
<?php // resources/views/components/⚡show-posts.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Post::all();
    }

    public function render()
    {
        return <<<HTML
        <div>
            @foreach ($this->posts as $post)
                <div wire:key="{{ $post->id }}">
                    <!-- ... -->
                </div>
            @endforeach
        </div>
        HTML;
    }
};

```

--------------------------------

### Child Livewire Component Dispatching an Event (PHP)

Source: https://livewire.laravel.com/docs/4.x/nesting

Shows the child 'todo-item' component dispatching a 'remove-todo' event with the relevant todo ID when its 'Remove' button is clicked. This event is then intercepted by the parent component.

```php
<?php // resources/views/components/⚡todo-item.blade.php

use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    public Todo $todo;

    public function remove()
    {
        $this->dispatch('remove-todo', todoId: $this->todo->id); // [tl! highlight]
    }
};
?>
```

--------------------------------

### Listening for Window-Level Custom Events in Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates how to use the `.window` modifier to listen for custom events dispatched anywhere on the page, even outside the current Livewire component. This is achieved by listening on the global `window` object.

```blade
<div wire:custom-event.window="...">
    <!-- ... -->
</div>

<!-- Dispatched somewhere on the page outside the component: -->
<button x-on:click="$dispatch('custom-event')">...</button>

```

--------------------------------

### Showing Elements Only During Loading

Source: https://livewire.laravel.com/docs/4.x/loading-states

Shows how to hide an element by default and only display it when a Livewire component is in a loading state. This is achieved using Tailwind's `not-data-loading:hidden` variant, which is preferred over `hidden data-loading:block` for better compatibility.

```blade
<button wire:click="save">
    Save
</button>

<span class="not-data-loading:hidden">
    Saving...
</span>
```

--------------------------------

### Custom Livewire Input Counter Blade Component with Alpine.js

Source: https://livewire.laravel.com/docs/4.x/forms

This Blade component creates a reusable counter input. It uses Alpine.js's `x-data` to manage the counter state and `x-modelable` to allow external binding. The `{{ $attributes }}` directive ensures that attributes like `wire:model` passed from the parent Livewire component are correctly applied to the component's root element, enabling seamless data synchronization.

```blade
<!-- resources/view/components/input-counter.blade.php -->

<div x-data="{ count: 0 }" x-modelable="count" {{ $attributes }}>
    <button x-on:click="count--">-</button>

    <span x-text="count"></span>

    <button x-on:click="count++">+</button>
</div>
```

--------------------------------

### Style Loading States with data-loading Attribute

Source: https://livewire.laravel.com/docs/4.x/actions

Leverage Tailwind CSS and Livewire's data-loading attribute for more flexible styling of loading states. This approach is often simpler than using wire:loading.

```blade
<form wire:submit="save">
    <textarea wire:model="content"></textarea>

    <button type="submit" class="data-loading:opacity-50">Save</button>

    <span class="not-data-loading:hidden">Saving...</span>
</form>
```

--------------------------------

### Livewire Snapshot JSON Structure

Source: https://livewire.laravel.com/docs/4.x/hydration

Illustrates the structure of a JSON snapshot created by Livewire during the dehydration process. It includes 'state' for public property values and 'memo' for component identification.

```json
{
    "state": {
        "count": 1
    },

    "memo": {
        "name": "counter",

        "id": "1526456"
    }
}

```

--------------------------------

### Ignoring data-current Behavior with wire:current.ignore

Source: https://livewire.laravel.com/docs/4.x/navigate

Demonstrates how to disable the automatic `data-current` attribute assignment for specific links using the `wire:current.ignore` directive, useful when manual control over active link styling is needed.

```blade
<a href="/posts" wire:navigate wire:current.ignore>Posts</a>
```

--------------------------------

### Livewire Parent Component Rendered HTML with Child Placeholders

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This HTML snippet illustrates how a parent Livewire component is rendered after an update when nested child components are involved. Instead of the full child component, placeholders (empty divs with `wire:id`) are rendered for children whose state was not included in the update payload.

```html
<div wire:id="123">
    Post Limit: <input type="number" wire:model.live="postLimit">

    <div wire:id="456"></div>
</div>
```

--------------------------------

### Custom Validation Key with #[Validate]

Source: https://livewire.laravel.com/docs/4.x/validation

Shows how to specify a custom validation key when using the `#[Validate]` attribute, especially useful for validating array properties and their nested elements. Instead of a string rule, an array of key-value pairs is passed.

```php
use Livewire\Attributes\Validate;

#[Validate([
    'todos' => 'required',
    'todos.*' => [
        'required',
        'min:3',
        new Uppercase,
    ],
])]
public $todos = [];
```

--------------------------------

### Persist Computed Property with Default Cache Duration (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Shows how to make a computed property persistent by chaining the `persist` method. By default, the computed property's value will be cached for 3600 seconds (1 hour), improving performance for repeated accesses within that duration.

```php
$count = computed(function () {
    return User::count();
})->persist();
```

--------------------------------

### Pass Data to Layout using #[Layout]

Source: https://livewire.laravel.com/docs/4.x/attribute-layout

This snippet illustrates how to pass additional data to a Blade layout when using the #[Layout] attribute. The 'title' parameter is passed and can be accessed within the layout file.

```php
new #[Layout('layouts::dashboard', ['title' => 'Posts Dashboard'])] class extends Component {
    // ...
};

```

--------------------------------

### Handle Array Property Updates in Livewire Hooks

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

When dealing with array properties in Livewire update hooks (`updating` and `updated`), an additional `$key` argument is provided. This `$key` specifies which element of the array is changing. If the entire array is updated rather than a specific key, the `$key` argument will be `null`.

```php
<?php // resources/views/components/preferences/⚡edit.blade.php

use Livewire\Component;

new class extends Component {
    public $preferences = [];

    public function updatedPreferences($value, $key)
    {
        // $value = 'dark'
        // $key   = 'theme'
    }

    // ...
};
```

--------------------------------

### Make Volt Component Property Reactive for Nested Components

Source: https://livewire.laravel.com/docs/4.x/volt

Explains how to make a Volt component property reactive by chaining the `reactive` method. This ensures that child components automatically update when the parent component's reactive property changes, facilitating seamless data flow.

```php
state(['todos'])->reactive();
```

--------------------------------

### Listen for Echo Event in Livewire Component (Attribute)

Source: https://livewire.laravel.com/docs/4.x/events

Illustrates listening for a broadcasted `OrderShipped` event on the `orders` channel directly within a Livewire component using the `#[On]` attribute. This triggers the `notifyNewOrder` method when the event occurs.

```php
<?php // resources/views/components/⚡order-tracker.blade.php

use Livewire\Attributes\On; // [tl! highlight]
use Livewire\Component;

new class extends Component {
    public $showNewOrderNotification = false;

    #[On('echo:orders,OrderShipped')]
    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
    }

    // ...
};

```

--------------------------------

### Persist Search State with #[Session] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-session

This snippet demonstrates using the #[Session] attribute to persist a 'search' property in the user's session. The search term remains active across page refreshes and navigation, enhancing user experience by maintaining input state. It requires Livewire and Eloquent models.

```php
<?php 

use Livewire\Attributes\Session;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Session] // [tl! highlight]
    public $search = '';

    #[Computed]
    public function posts()
    {
        return $this->search === ''
            ? Post::all()
            : Post::where('title', 'like', "%{$this->search}%")->get();
    }
};
?>
```

--------------------------------

### Livewire Island with Polling

Source: https://livewire.laravel.com/docs/4.x/islands

Illustrates how to use `wire:poll` within a Livewire island to refresh its content at a specified interval. This polling is scoped to the island, preventing the entire component from re-rendering.

```blade
@island(skip: true)
    <div wire:poll.3s>
        Revenue: {{ $this->revenue }}

        <button type="button" wire:click="$refresh">Refresh</button>
    </div>
@endisland
```

--------------------------------

### Configure Livewire Navigation Progress Bar

Source: https://livewire.laravel.com/docs/4.x/navigate

Customize the navigation progress bar behavior in Livewire by modifying the `navigate` configuration array in `config/livewire.php`. You can disable the progress bar entirely by setting `show_progress_bar` to `false` or change its color using `progress_bar_color`.

```php
'navigate' => [
    'show_progress_bar' => false,
    'progress_bar_color' => '#2299dd',
],
```

--------------------------------

### Pure Alpine.js Counter Component Reference

Source: https://livewire.laravel.com/docs/4.x/forms

This is a basic, self-contained Alpine.js component that functions as a counter. It displays a number and provides buttons to increment and decrement its value. It serves as a reference for creating more complex, bindable components.

```blade
<div x-data="{ count: 0 }">
    <button x-on:click="count--">-</button>

    <span x-text="count"></span>

    <button x-on:click="count++">+</button>
</div>
```

--------------------------------

### Livewire wire:intersect Enter and Leave Events

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Shows how to specify whether the wire:intersect action should trigger upon an element entering the viewport, leaving it, or both. This allows for distinct actions based on visibility changes.

```blade
<!-- Runs when entering viewport (default) -->
<div wire:intersect="trackView">...</div>

<!-- Runs when entering viewport (explicit) -->
<div wire:intersect:enter="trackView">...</div>

<!-- Runs when leaving viewport -->
<div wire:intersect:leave="pauseVideo">...</div>
```

--------------------------------

### Lazy Load Component with #[Lazy]

Source: https://livewire.laravel.com/docs/4.x/attribute-lazy

Applies the #[Lazy] attribute to a Livewire component to make it load only when it becomes visible in the viewport. This prevents slow components from blocking the initial page render. The component initially renders as an empty div and loads upon scrolling into view.

```php
<?php

use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\Transaction;

new #[Lazy] class extends Component {
    public $amount;

    public function mount()
    {
        // Slow database query...
        $this->amount = Transaction::monthToDate()->sum('amount');
    }
};
?>
```

--------------------------------

### Exclude Values from Query String (PHP)

Source: https://livewire.laravel.com/docs/4.x/url

Control which values are excluded from the query string based on conditions. The `except` parameter in `#[Url]` ensures a property is only excluded if it meets the specified condition, preventing unintended URL changes. This is useful for maintaining a clean URL when certain states are not relevant.

```php
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowUsers extends Component
{
    #[Url(except: '')]
    public $search = '';

    public function mount() {
        $this->search = auth()->user()->username;
    }

    // ...
}
```

--------------------------------

### Livewire Snapshot Object Structure (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

The 'snapshot' object represents the serialized state of a Livewire PHP component, enabling it to be consumed and reconstructed in JavaScript. It includes component data, memoized information like ID and path, and a checksum for security against tampering.

```javascript
let snapshot = {
    // The serialized state of the component (public properties)...
    data: { count: 0 },

    // Long-standing information about the component...
    memo: {
        // The component's unique ID...
        id: '0qCY3ri9pzSSMIXPGg8F',

        // The component's name. Ex. <livewire:[name] />
        name: 'counter',

        // The URI, method, and locale of the web page that the
        // component was originally loaded on. This is used
        // to re-apply any middleware from the original request
        // to subsequent component update requests (messages)...
        path: '/',
        method: 'GET',
        locale: 'en',

        // A list of any nested "child" components. Keyed by
        // internal template ID with the component ID as the values...
        children: [],

        // Whether or not this component was "lazy loaded"...
        lazyLoaded: false,

        // A list of any validation errors thrown during the
        // last request...
        errors: [],
    },

    // A securely encrypted hash of this snapshot. This way,
    // if a malicious user tampers with the snapshot with
    // the goal of accessing un-owned resources on the server,
    // the checksum validation will fail and an error will
    // be thrown...
    checksum: '1bc274eea17a434e33d26bcaba4a247a4a7768bd286456a83ea6e9be2d18c1e7',
}
```

--------------------------------

### Hook into Named Paginator Updates in Livewire

Source: https://livewire.laravel.com/docs/4.x/pagination

For paginators that have been given a specific name, you can define dedicated hook methods by prefixing the standard hook names with the paginator's name. This allows for granular control over updates for individual paginators.

```php
public function updatingInvoicesPage($page)
{
    //
}

```

--------------------------------

### Set Default Layout in Livewire Configuration

Source: https://livewire.laravel.com/docs/4.x/attribute-layout

This PHP code snippet shows the configuration setting for the default Livewire layout, which is typically found in the `config/livewire.php` file. The `#[Layout]` attribute overrides this default on a per-component basis.

```php
'layout' => 'layouts::app',

```

--------------------------------

### Integrate and Use Form Object in Livewire Component for Creation

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code demonstrates how to integrate a `PostForm` object into a Livewire component for creating a new post. It declares a public property of type `PostForm`, validates the form data using `$this->validate()`, and then creates a new `Post` by extracting only the relevant fields from the form object. The component requires the `Post` model and `PostForm` class.

```php
<?php // resources/views/components/post/⚡create.blade.php

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public PostForm $form; // [tl! highlight] 

    public function save()
    {
        $this->validate();

        Post::create(
            $this->form->only(['title', 'content']) // [tl! highlight] 
        );

        return $this->redirect('/posts');
    }
};
```

--------------------------------

### Accessing $wire Object in #[Js] Method (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-js

Illustrates how to access the component's $wire object from within a PHP method marked with #[Js]. This allows direct manipulation of component properties and interaction with other wire methods from the client-side JavaScript.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Attributes\Js;
use Livewire\Component;

new class extends Component {
    public $title = '';
    public $content = '';

    #[Js]
    public function resetForm()
    {
        return <<<'JS'
            $wire.title = ''
            $wire.content = ''
        JS;
    }
};

```

--------------------------------

### Toggling CSS Classes with wire:dirty.class

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This code demonstrates how to use `wire:dirty.class` to dynamically apply a CSS class, such as `border-yellow-500`, to an input field when its state is "dirty". This provides immediate visual feedback to the user about unsaved changes directly on the input element itself, with the class being removed when the state is saved.

```blade
<input wire:model.blur="title" wire:dirty.class="border-yellow-500">
```

--------------------------------

### Conditionally Rendering Slots in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

Explains how to check if a named slot has been provided by the parent component using the `has()` method on the `$slots` variable. This enables conditional rendering of content.

```blade
<div>
    <p>{{ $comment->author }}</p>
    <p>{{ $comment->body }}</p>

    @if ($slots->has('actions'))
        <div class="actions">
            {{ $slots['actions'] }}
        </div>
    @endif

    {{ $slot }}
</div>
```

--------------------------------

### Dynamic Event Name based on Component Property in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet demonstrates dynamic event naming in Livewire using component properties. The #[On('post-updated.{post.id}')] attribute makes the `refreshPost` method listen specifically for events related to a particular post's ID. This allows for scoped event listening, ensuring only relevant updates trigger the method. Requires Livewire Component, Attributes, and App\Models\Post namespaces.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    #[On('post-updated.{post.id}')] // [tl! highlight]
    public function refreshPost()
    {
        $this->post->refresh();
    }
};

```

--------------------------------

### Blade Template for Livewire Form Object Input

Source: https://livewire.laravel.com/docs/4.x/forms

This Blade template shows how to bind input fields to properties of a Livewire form object using `wire:model`. It also demonstrates displaying validation errors for each field. The template assumes the component has a `form` property of a form object type.

```blade
<form wire:submit="save">
    <input type="text" wire:model="form.title">
    <div>
        @error('form.title') <span class="error">{{ $message }}</span> @enderror
    </div>

    <input type="text" wire:model="form.content">
    <div>
        @error('form.content') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Livewire Validation using `#[Validate]` Attribute

Source: https://livewire.laravel.com/docs/4.x/validation

Shows how to use the `#[Validate]` attribute to define validation rules directly on component properties. Livewire automatically runs these validations before each update. The `save` method still calls `$this->validate()` to ensure all properties are validated before data persistence.

```php
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    #[Validate('required|min:3')]
	public $title = '';

    #[Validate('required|min:3')]
    public $content = '';

    public function save()
    {
        $this->validate();

		Post::create([
            'title' => $this->title,
            'content' => $this->content,
		]);

		return redirect()->to('/posts');
    }

    // ...
}

```

--------------------------------

### Always Keeping #[Url] Properties in URL

Source: https://livewire.laravel.com/docs/4.x/attribute-url

Demonstrates the `keep: true` option for the #[Url] attribute, which ensures that the property is always present in the URL query string, even when its value is empty. This is useful for maintaining a consistent URL structure or for default states that should always be reflected.

```php
#[Url(keep: true)]
public $search = '';
```

--------------------------------

### Define Custom Address DTO

Source: https://livewire.laravel.com/docs/4.x/synthesizers

This PHP code defines the 'Address' Data Transfer Object (DTO) with properties for street, city, state, and zip. This DTO serves as the custom data structure that the Livewire synthesizer will manage.

```php
namespace App\Dtos\Address;

class Address
{
    public $street = '';
    public $city = '';
    public $state = '';
    public $zip = '';
}
```

--------------------------------

### Submit Livewire Form with Data Binding (PHP & Blade)

Source: https://livewire.laravel.com/docs/4.x/forms

This snippet demonstrates submitting a Livewire form. It binds input fields to component properties using `wire:model` and triggers a server-side `save` action on form submission using `wire:submit`. The `save` method then creates a new post in the database and redirects the user with a flash message.

```php
<?php // resources/views/components/post/⚡create.blade.php

use LivewireComponent;
use AppModelsPost;

new class extends Component {
    public $title = '';

    public $content = '';

    public function save()
    {
        Post::create(
            $this->only(['title', 'content'])
        );

        session()->flash('status', 'Post successfully updated.');

        return $this->redirect('/posts');
    }
};
?>
```

```blade
<form wire:submit="save">
    <input type="text" wire:model="title">

    <input type="text" wire:model="content">

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Clear Livewire Computed Property Memo with unset()

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This PHP code shows how to clear the memoization of a computed property using `unset()`. The `createPost()` method first creates a new post and then calls `unset($this->posts)` to invalidate the memoized `posts` computed property. This ensures that the `posts` property is re-computed with the latest data when accessed in the view.

```php
<?php // resources/views/components/⚡show-posts.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public function createPost()
    {
        if ($this->posts->count() > 10) {
            throw new \Exception('Maximum post count exceeded');
        }

        Auth::user()->posts()->create(...);

        unset($this->posts); // [tl! highlight]
    }

    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    // ...
};
```

--------------------------------

### Loading External Assets with @assets Directive (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

Shows how to use the @assets directive to load external JavaScript and CSS files, such as a date picker library, alongside a Livewire component. Livewire ensures these assets are loaded only once per page, preventing duplicates and ensuring they are available before component scripts are evaluated.

```blade
<div>
    <input type="text" data-picker>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

<script>
    new Pikaday({ field: $wire.$el.querySelector('[data-picker]') });
</script>
```

--------------------------------

### Livewire Component with Eloquent Computed Property (Solution)

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code shows the recommended approach using a Livewire computed property with the #[Computed] attribute. This ensures that Eloquent query constraints are re-applied on each request, maintaining data integrity.

```php
<?php // resources/views/components/⚡show-todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed] // [tl! highlight] 
    public function todos()
    {
        return Auth::user()
            ->todos()
            ->select(['title', 'content'])
            ->get();
    }
};

```

--------------------------------

### Add Loading State to Livewire Component (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

This snippet demonstrates how to add a visual loading state to a Livewire component using JavaScript intercepts. It adds an 'opacity-50' class when a request is sent and removes it upon completion. This enhances user experience by providing feedback during component updates.

```blade
<script>
    $wire.intercept(({ onSend, onFinish }) => {
        onSend(() => $wire.$el.classList.add('opacity-50'))
        onFinish(() => $wire.$el.classList.remove('opacity-50'))
    })
</script>
```

--------------------------------

### Livewire Component for Toggling Visibility

Source: https://livewire.laravel.com/docs/4.x/wire-show

This PHP code defines a Livewire component with a boolean property to control modal visibility and a save method to handle form submission and reset state. It's a common pattern for managing component state.

```php
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $showModal = false;

    public $content = '';

    public function save()
    {
        Post::create(['content' => $this->content]);

        $this->reset('content');

        $this->showModal = false;
    }
}
```

--------------------------------

### Assert HTTP Status Code (Livewire Assertion)

Source: https://livewire.laravel.com/docs/4.x/testing

Asserts that a specific HTTP status code was returned by the component. This is a general-purpose assertion for verifying response codes.

```php
assertStatus(500)
```

--------------------------------

### Asserting View Data in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/testing

Utilize `assertViewHas()` to test the data passed to a component's view. You can assert specific variables or use closures for more complex data validation, ensuring the correct data is available for rendering.

```php
use App\Models\Post;

it('passes all posts to the view', function () {
    Post::factory()->count(3)->create();

    Livewire::test('show-posts')
        ->assertViewHas('posts', function ($posts) {
            return count($posts) === 3;
        });
});

// For simple assertions:
Livewire::test('show-posts')
    ->assertViewHas('postCount', 3);
```

--------------------------------

### Livewire Tracking Visibility with wire:intersect (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Shows how to track element visibility using both enter and leave events with `wire:intersect`. The `trackView` action is called when the element enters the viewport, and `trackLeave` is called when it leaves.

```blade
<div wire:intersect:enter.once="trackView" wire:intersect:leave="trackLeave" style="height: 100px; background-color: lightgreen;">
    <!-- Track when users view and leave this content -->
    Observe me
</div>
```

--------------------------------

### Livewire Notification Bell Component with Event Listeners

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet defines a Livewire 'notification-bell' component that displays an unread count. It uses #[On('notification-sent')] to increment the count when a notification is sent and #[On('notifications-read')] to reset it when notifications are marked as read. The `mount` method initializes the unread count from the authenticated user's notifications. It requires Livewire Component, Attributes, and authentication.

```php
<?php // resources/views/components/⚡notification-bell.blade.php

use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    public $unreadCount = 0;

    public function mount()
    {
        $this->unreadCount = auth()->user()->unreadNotifications()->count();
    }

    #[On('notification-sent')] // [tl! highlight]
    public function incrementCount()
    {
        $this->unreadCount++;
    }

    #[On('notifications-read')] // [tl! highlight]
    public function resetCount()
    {
        $this->unreadCount = 0;
    }
};
?>

<button class="relative">
    <svg><!-- Bell icon --></svg>
    @if($unreadCount > 0)
        <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full px-2 py-1 text-xs">
            {{ $unreadCount }}
        </span>
    @endif
</button>

```

--------------------------------

### Customizing Field Names with #[Validate(as: '...')] in Livewire

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Demonstrates how to specify a custom display name for a validated field using the `as` option within the #[Validate] attribute. This allows for more user-friendly error messages, replacing the default field name with a custom one.

```php
#[Validate('required', as: 'date of birth')] // [tl! highlight]
public $dob;

```

--------------------------------

### Register JavaScript Actions in Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

Shows how to register a JavaScript action that can be called from the Livewire component's template using the $js prefix. This allows for decoupling complex JavaScript logic from the PHP component, providing a cleaner way to manage client-side interactivity.

```blade
<div>
    <button wire:click="$js.increment">+</button>
</div>

<script>
    this.$js.increment = () => {
        console.log('increment')
    }
</script>
```

--------------------------------

### Reset and Retrieve Property with pull() in Livewire

Source: https://livewire.laravel.com/docs/4.x/properties

Demonstrates using the `pull()` method to reset and retrieve a property's value in a single operation within a Livewire component. This is useful for clearing input fields after submission. It also shows how to pull multiple properties or all properties.

```php
<?php // resources/views/components/⚡todos.blade.php

use Livewire\Component;

new class extends Component {
    public $todos = [];

    public $todo = '';

    public function addTodo()
    {
        $this->todos[] = $this->pull('todo'); // [tl! highlight]
    }

    // ...
};
```

// The same as $this->all() and $this->reset();
$this->pull();

// The same as $this->only(...) and $this->reset(...);
$this->pull(['title', 'content']);
```

--------------------------------

### Supported Common PHP Types in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/properties

Shows how to utilize common PHP types like Collections, Models, DateTime, Carbon, and Stringable as Livewire component properties. Note that runtime values might not be preserved across requests due to JSON serialization, and class names might be exposed.

```php
public function mount()
{
    $this->todos = collect([]); // Collection

    $this->todos = Todos::all(); // Eloquent Collection

    $this->todo = Todos::first(); // Model

    $this->date = new DateTime('now'); // DateTime

    $this->date = new Carbon('now'); // Carbon

    $this->todo = str(''); // Stringable
}
```

--------------------------------

### Set Dynamic Page Title with title() Method

Source: https://livewire.laravel.com/docs/4.x/attribute-title

Uses the title() method within the render() method of a Livewire component to set dynamic page titles based on component properties or state. This is ideal when the title needs to be computed or change during runtime. Ensure the layout file includes a '$title' variable.

```php
<?php // resources/views/pages/posts/⚡edit.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        return $this->view()
            ->title("Edit: {$this->post->title}"); 
    }
};
?>

<div>
    <h1>Edit Post</h1>
    <!-- ... -->
</div>
```

--------------------------------

### Set Page Title with Attribute (PHP)

Source: https://livewire.laravel.com/docs/4.x/pages

Sets a static page title for a Livewire component using the `#[Title]` attribute. This attribute is placed above the component class. The string passed to the attribute will be used as the page's title, improving SEO and user experience. This assumes the layout file includes a dynamic title element.

```php
<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Create post')] class extends Component {
    // ...
};

```

--------------------------------

### Static Select Dropdown Binding with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Binds a select dropdown to a property in a Livewire component. Livewire automatically handles setting the `selected` attribute on the appropriate option. Supports custom values or direct text content.

```blade
<select wire:model="state">
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    ...
</select>
```

--------------------------------

### Sync Component State with LocalStorage

Source: https://livewire.laravel.com/docs/4.x/javascript

This code synchronizes a Livewire component's 'content' property with the browser's localStorage. It loads the content from localStorage when the component initializes and saves it whenever the 'content' property changes using the `$watch` directive.

```javascript
// Load from localStorage on init
if (localStorage.getItem('draft')) {
    $wire.content = localStorage.getItem('draft');
}

// Save to localStorage when it changes
$wire.$watch('content', (value) => {
    localStorage.setItem('draft', value);
});
```

--------------------------------

### Select Dropdown with Placeholder Option in Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Implements a select dropdown with a disabled, placeholder option in Livewire. This is achieved by adding a disabled option as the first element, as standard placeholder attributes are not supported for select elements.

```blade
<select wire:model="state">
    <option disabled value="">Select a state...</option>

    @foreach (App\Models\State::all() as $state)
        <option value="{{ $state->id }}">{{ $state->label }}</option>
    @endforeach
</select>
```

--------------------------------

### Livewire Request Interceptor Details (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Details request interceptors, which are triggered for each HTTP request that may contain messages from multiple components. It covers the `request` object and various callbacks like `onSend`, `onCancel`, `onResponse`, `onParsed`, `onSuccess`, `onError`, `onFailure`, `onStream`, `onRedirect`, `onDump`, and `onFinish`.

```javascript
$wire.interceptRequest(({ request, onSend, onCancel, onSuccess, onError, onFailure, onResponse, onParsed, onStream, onRedirect, onDump, onFinish }) => {
    // request.messages   - Set of messages in this request
    // request.cancel()   - Cancel this request

    onSend(({ responsePromise }) => {})

    onCancel(() => {})

    onResponse(({ response }) => {
        // response: Fetch Response (before body read)
    })

    onParsed(({ response, body }) => {
        // body: Response body as string
    })

    onSuccess(({ response, body, json }) => {})

    onError(({ response, body, preventDefault }) => {
        preventDefault() // Prevent error modal
    })

    onFailure(({ error }) => {})

    onStream(({ response }) => {})

    onRedirect(({ url, preventDefault }) => {
        preventDefault() // Prevent redirect
    })

    onDump(({ html, preventDefault }) => {
        preventDefault() // Prevent dump modal
    })

    onFinish(() => {})
})
```

--------------------------------

### Update on Change Event with wire:model.change (HTML)

Source: https://livewire.laravel.com/docs/4.x/wire-model

This code shows how to use the `.change` modifier with `wire:model`. This triggers a server update immediately after the value of an input element changes, such as selecting a new option in a dropdown, providing more immediate feedback than `.blur`.

```html
<select wire:model.change="title">
    <!-- ... -->
</select>
```

--------------------------------

### Scoped Styles in Single-File Component (Blade)

Source: https://livewire.laravel.com/docs/4.x/styles

Demonstrates how to define scoped styles within a single-file Livewire component using a `<style>` tag. These styles are automatically confined to the component's elements, preventing conflicts with other parts of the application. This is useful for component-specific styling needs.

```blade
<?php

use Livewire\Component;

new class extends Component {
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
};
?>

<div>
    <h1 class="title">Count: {{ $count }}</h1>
    <button class="btn" wire:click="increment">+</button>
</div>

<style>
.title {
    color: blue;
    font-size: 2rem;
}

.btn {
    background: indigo;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
}
</style>
```

--------------------------------

### Clear Livewire input using AlpineJS onClick

Source: https://livewire.laravel.com/docs/4.x/properties

Demonstrates resetting a Livewire `todo` input field to an empty string using an Alpine.js `x-on:click` event. This interaction manipulates the component's state directly in the browser.

```html
<div>
    <input type="text" wire:model="todo">

    <button x-on:click="$wire.todo = ''">Clear</button>
</div>
```

--------------------------------

### Auto-Resolve Eloquent Model in Delete Action

Source: https://livewire.laravel.com/docs/4.x/actions

This snippet illustrates automatic Eloquent model resolution by type-hinting the action parameter with a model class. Livewire retrieves the model from the database based on the provided ID, simplifying data access and enhancing security.

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function delete(Post $post) // [tl! highlight]
    {
        $this->authorize('delete', $post);

        $post->delete();
    }
};
?>
```

--------------------------------

### Customizing Validation Error: Array Syntax for Messages and Attributes

Source: https://livewire.laravel.com/docs/4.x/validation

This PHP snippet illustrates how to configure custom validation messages and attribute names using the array syntax within a single `#[Validate]` attribute. This approach is useful for managing complex validation scenarios, especially when dealing with arrays of data, and allows for defining default messages and specific overrides.

```php
use Livewire\Attributes\Validate;

#[Validate([
    'titles' => 'required',
    'titles.*' => 'required|min:5',
], message: [
    'required' => 'The :attribute is missing.',
    'titles.required' => 'The :attribute are missing.',
    'min' => 'The :attribute is too short.',
], attribute: [
    'titles.*' => 'title',
])]
public $titles = [];
```

--------------------------------

### Add Confirmation Dialog to Button Click in Livewire Blade

Source: https://livewire.laravel.com/docs/4.x/wire-confirm

This snippet demonstrates how to add a confirmation dialog to a button's wire:click action in a Livewire Blade component. When the button is clicked, a browser confirmation alert will appear. The action will only proceed if the user confirms.

```blade
<button
    type="button"
    wire:click="delete"
    wire:confirm="Are you sure you want to delete this post?"
>
    Delete post
</button>
```

--------------------------------

### Use Laravel Rule Objects with Livewire Form Objects for Advanced Validation

Source: https://livewire.laravel.com/docs/4.x/validation

Illustrates the integration of Laravel's powerful `Rule` objects within a Livewire Form object's `rules()` method for sophisticated form validation, such as checking for unique entries while ignoring a specific record.

```php
<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use App\Models\Post;
use Livewire\Form;

class UpdatePost extends Form
{
    public ?Post $post;

    public $title = '';

    public $content = '';

    protected function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->post), 
            ],
            'content' => 'required|min:5',
        ];
    }

    public function mount()
    {
        $this->title = $this->post->title;
        $this->content = $this->post->content;
    }

    public function update()
    {
        $this->validate(); 

        $this->post->update($this->all());

        $this->reset();
    }

    // ...
}
```

--------------------------------

### Livewire Message Interceptor Details (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Explains message interceptors, which trigger for each component update. It details the `message` object and the callbacks for `onSend`, `onCancel`, `onSuccess`, `onError`, `onFailure`, `onStream`, and `onFinish`.

```javascript
$wire.interceptMessage(({ message, cancel, onSend, onCancel, onSuccess, onError, onFailure, onStream, onFinish }) => {
    // message.component  - Component instance
    // message.actions    - Set of actions in this message
    // cancel()           - Cancel this message

    onSend(({ payload }) => {
        // payload: { snapshot, updates, calls }
    })

    onCancel(() => {})

    onSuccess(({ payload, onSync, onEffect, onMorph, onRender }) => {
        // payload: { snapshot, effects }

        onSync(() => {})    // After state synced
        onEffect(() => {})  // After effects processed
        onMorph(async () => {})   // After DOM morphed (must be async)
        onRender(() => {})  // After render complete
    })

    onError(({ response, body, preventDefault }) => {
        preventDefault() // Prevent error modal
    })

    onFailure(({ error }) => {})

    onStream(({ json }) => {
        // json: Parsed stream chunk
    })

    onFinish(() => {})
})
```

--------------------------------

### Show Loading Indicator with wire:loading

Source: https://livewire.laravel.com/docs/4.x/actions

Use the wire:loading directive to display a loading message or indicator while a Livewire action is being processed. This helps users understand that the submission is ongoing.

```blade
<form wire:submit="save">
    <textarea wire:model="content"></textarea>

    <button type="submit">Save</button>

    <span wire:loading>Saving...</span>
</form>
```

--------------------------------

### Livewire $wire Object Properties and Methods (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/javascript

Illustrates the structure and capabilities of the $wire JavaScript object, which mirrors server-side Livewire components. It allows access to component properties, invocation of methods, event handling, and file uploads.

```javascript
let $wire = {
    // All component public properties are directly accessible on $wire...
    count: 0,

    // All public methods are exposed and callable on $wire...
    increment() { ... },

    // Access the `$wire` object of the parent component if one exists...
    $parent,

    // Access the root DOM element of the Livewire component...
    $el,

    // Access the ID of the current Livewire component...
    $id,

    // Get the value of a property by name...
    // Usage: $wire.$get('count')
    $get(name) { ... },

    // Set a property on the component by name...
    // Usage: $wire.$set('count', 5)
    $set(name, value, live = true) { ... },

    // Toggle the value of a boolean property...
    $toggle(name, live = true) { ... },

    // Call the method...
    // Usage: $wire.$call('increment')
    $call(method, ...params) { ... },

    // Define a JavaScript action...
    // Usage: $wire.$js('increment', () => { ... })
    // Usage: $wire.$js.increment = () => { ... }
    $js(name, callback) { ... },

    // [DEPRECATED] Entangle - You probably don't need this.
    // Use $wire directly to access properties instead.
    // Usage: <div x-data="{ count: $wire.$entangle('count') }">
    $entangle(name, live = false) { ... },

    // Watch the value of a property for changes...
    // Usage: Alpine.$watch('count', (value, old) => { ... })
    $watch(name, callback) { ... },

    // Refresh a component by sending a message to the server
    // to re-render the HTML and swap it into the page...
    $refresh() { ... },

    // Identical to the above `$refresh`. Just a more technical name...
    $commit() { ... }, // Alias for $refresh()

    // Listen for a an event dispatched from this component or its children...
    // Usage: $wire.$on('post-created', () => { ... })
    $on(event, callback) { ... },

    // Listen for a lifecycle hook triggered from this component or the request...
    // Usage: $wire.$hook('message.sent', () => { ... })
    $hook(name, callback) { ... },

    // Dispatch an event from this component...
    // Usage: $wire.$dispatch('post-created', { postId: 2 })
    $dispatch(event, params = {}) { ... },

    // Dispatch an event onto another component...
    // Usage: $wire.$dispatchTo('dashboard', 'post-created', { postId: 2 })
    $dispatchTo(otherComponentName, event, params = {}) { ... },

    // Dispatch an event onto this component and no others...
    $dispatchSelf(event, params = {}) { ... },

    // A JS API to upload a file directly to component
    // rather than through `wire:model`...
    $upload(
        name, // The property name
        file, // The File JavaScript object
        finish = () => { ... }, // Runs when the upload is finished...
        error = () => { ... }, // Runs if an error is triggered mid-upload...
        progress = (event) => { // Runs as the upload progresses...
            event.detail.progress // An integer from 1-100...
        },
    ) { ... },

    // API to upload multiple files at the same time...
    $uploadMultiple(name, files, finish, error, progress) { },

    // Remove an upload after it's been temporarily uploaded but not saved...
    $removeUpload(name, tmpFilename, finish, error) { ... },

    // Register an action interceptor for this component instance
    // Usage: $wire.intercept(({ action, onSend, onCancel, onSuccess, onError, onFailure, onFinish }) => { ... })
    // Or scope to specific action: $wire.intercept('save', ({ action, onSuccess }) => { ... })
    intercept(actionOrCallback, callback) { ... },

    // Alias for intercept
    interceptAction(actionOrCallback, callback) { ... },

    // Register a message interceptor for this component instance
    // Usage: $wire.interceptMessage(({ message, cancel, onSend, onCancel, onSuccess, onError, onFailure, onFinish }) => { ... })
    // Or scope to specific action: $wire.interceptMessage('save', callback)
    interceptMessage(actionOrCallback, callback) { ... },

    // Register a request interceptor for this component instance
    // Usage: $wire.interceptRequest(({ request, onSend, onCancel, onSuccess, onError, onFailure, onFinish }) => { ... })
    // Or scope to specific action: $wire.interceptRequest('save', callback)
    interceptRequest(actionOrCallback, callback) { ... },

    // Retrieve the underlying "component" object...
    __instance() { ... },
}
```

--------------------------------

### Intercept Property Updates with `updating()` and `updated()` in Livewire

Source: https://livewire.laravel.com/docs/4.x/lifecycle-hooks

Livewire's `updating()` and `updated()` hooks allow you to intercept the process of public property modifications. `updating()` runs before a property is set, useful for validation or preventing changes (e.g., preventing `$postId` modification). `updated()` runs after a property has been set, useful for ensuring consistency (e.g., converting `$username` to lowercase).

```php
<?php // resources/views/components/post/⚡show.blade.php

use Exception;
use Livewire\Component;

new class extends Component {
    public $postId = 1;

    public function updating($property, $value)
    {
        // $property: The name of the current property being updated
        // $value: The value about to be set to the property

        if ($property === 'postId') {
            throw new Exception;
        }
    }

    // ...
};
```

```php
<?php // resources/views/components/user/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public $username = '';

    public $email = '';

    public function updated($property)
    {
        // $property: The name of the current property that was updated

        if ($property === 'username') {
            $this->username = strtolower($this->username);
        }
    }

    // ...
};
```

--------------------------------

### Livewire Form Object Definition

Source: https://livewire.laravel.com/docs/4.x/validation

Illustrates the creation of a Livewire Form Object (`PostForm`) to encapsulate properties and their validation rules, promoting code organization and reusability. This separates form logic from the main component.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:3')]
	public $title = '';

    #[Validate('required|min:3')]
    public $content = '';
}
```

--------------------------------

### Define Laravel Broadcast Event

Source: https://livewire.laravel.com/docs/4.x/events

Defines a Laravel event that can be broadcast over WebSockets. It specifies the channel to broadcast on and implements the `ShouldBroadcast` interface.

```php
<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderShipped implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Order $order;

    public function broadcastOn()
    {
        return new Channel('orders');
    }
}

```

--------------------------------

### Mutate Livewire Property with Alpine.js

Source: https://livewire.laravel.com/docs/4.x/alpine

Demonstrates clearing a Livewire input field ('title') using Alpine.js's $wire object. This interaction is instant and does not trigger a server roundtrip, as $wire directly mutates the component's state.

```html
<form wire:submit="save">
    <input wire:model="title" type="text">

    <button type="button" x-on:click="$wire.title = ''">Clear</button> 

    <!-- ... -->

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Livewire Snapshot for Laravel Collections - JavaScript

Source: https://livewire.laravel.com/docs/4.x/hydration

Illustrates the JavaScript object structure Livewire uses to represent a Laravel collection within a component's state snapshot. This includes the data array and metadata indicating the original class.

```javascript
state: {
    todos: [
        [ 'first', 'second', 'third' ],
        { s: 'clctn', class: 'Illuminate\Support\Collection' },
    ],
}
```

--------------------------------

### Custom Blade Component for Text Inputs (x-input-text)

Source: https://livewire.laravel.com/docs/4.x/forms

The source code for the reusable `<x-input-text>` Blade component, which accepts a 'name' prop and forwards all other attributes to the input element. It also includes logic to display validation errors.

```blade
<!-- resources/views/components/input-text.blade.php -->

@props(['name'])

<input type="text" name="{{ $name }}" {{ $attributes }}>

<div>
    @error($name) <span class="error">{{ $message }}</span> @enderror
</div>
```

--------------------------------

### Livewire Component for Subscriber Count

Source: https://livewire.laravel.com/docs/4.x/wire-poll

A basic Livewire component that fetches the subscriber count for the authenticated user. This component is designed to be used with `wire:poll` to keep the count updated.

```php
<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SubscriberCount extends Component
{
    public function render()
    {
        return view('livewire.subscriber-count', [
            'count' => Auth::user()->subscribers->count(),
        ]);
    }
}
```

--------------------------------

### Securing Livewire Component with Eloquent Model Property (PHP)

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code snippet demonstrates a secure way to handle Eloquent models in Livewire components. By type-hinting the component property with the Eloquent model (`Post $post`), Livewire automatically locks the property and its ID, preventing client-side manipulation and thus mitigating security risks associated with direct ID updates.

```php
<?php // resources/views/components/post/⚡edit.blade.php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post; 
    public $title;
    public $content;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function update()
    {
        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Post updated successfully!');
    }
};
```

--------------------------------

### Receive Return Values from Livewire Actions in Alpine.js

Source: https://livewire.laravel.com/docs/4.x/actions

Illustrates how to capture and utilize the return value of a Livewire action invoked from Alpine.js. Livewire actions called via `$wire` return a JavaScript Promise that resolves with the value returned by the backend PHP method. This enables displaying dynamic data fetched from the server directly in the frontend.

```blade
<span x-init="async () => { const count = await $wire.getPostCount(); $el.innerHTML = count; }"></span>
```

--------------------------------

### Call Livewire Actions from Alpine.js

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates invoking Livewire actions directly from Alpine.js event listeners. The `$wire` object in Alpine.js acts as a proxy to the Livewire component, allowing direct calls to its public methods. This is useful for triggering backend logic from frontend interactions.

```blade
<button x-on:click="$wire.save()">Save Post</button>
<div x-intersect="$wire.incrementViewCount()">...</div>
```

--------------------------------

### Livewire Child Component Re-render HTML

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This HTML snippet shows the minimal HTML returned to the client when a child component is re-rendered after an update. It contains only the updated child component's markup, demonstrating that Livewire re-renders only the affected component.

```html
<div wire:id="456">
    <h1>The first post</h1>

    <p>Post content</p>

    <button wire:click="$refresh">Refresh post</button>
</div>
```

--------------------------------

### Basic @island Usage in Livewire Blade

Source: https://livewire.laravel.com/docs/4.x/directive-island

Demonstrates the fundamental use of the @island directive to create an isolated rendering region in a Livewire component. This region updates independently when its internal trigger is activated, without re-rendering the entire component. It requires Livewire attributes and potentially computed properties for dynamic data.

```blade
<?php // resources/views/components/⚡dashboard.blade.php

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Revenue;

new class extends Component {
    #[Computed]
    public function revenue()
    {
        // Expensive calculation...
        return Revenue::yearToDate();
    }
};
?>

<div>
    @island
        <div>
            Revenue: {{ $this->revenue }}

            <button type="button" wire:click="$refresh">Refresh</button>
        </div>
    @endisland

    <div>
        <!-- Other content... -->
    </div>
</div>
```

--------------------------------

### Sorting Across Groups HTML Structure with Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-sort

This Blade snippet demonstrates how to implement sorting across multiple lists using Livewire's `wire:sort:group` directive. Assigning a common group name allows items to be dragged between the specified lists.

```blade
<div>
    @foreach ($user->todoLists as $todo)
        <ul wire:sort="sortItem" wire:sort:group="todos">
            @foreach ($todo->items as $item)
                <li wire:sort:item="{{ $item->id }}">
                    {{ $item->title }}
                </li>
            @endforeach
        </ul>
    @endforeach
</div>

```

--------------------------------

### Access Livewire property length with AlpineJS

Source: https://livewire.laravel.com/docs/4.x/properties

Shows how to use Alpine.js within a Livewire component to display the length of a `todo` property in real-time. It utilizes the `$wire` object to access component properties directly in the template without server requests.

```html
<div>
    <input type="text" wire:model="todo">

    Todo character length: <h2 x-text="$wire.todo.length"></h2>
</div>
```

--------------------------------

### Direct Parent Component Access in Livewire

Source: https://livewire.laravel.com/docs/4.x/nesting

This snippet shows how to directly call a parent component's action from a child component using the magic `$parent` variable in Livewire. This eliminates the indirection of event dispatching, allowing for more straightforward communication when the parent-child relationship is well-defined. It's an alternative to event-based communication for tighter integration.

```blade
<div>
    <span>{{ $todo->content }}</span>

    <button wire:click="$parent.remove({{ $todo->id }})">Remove</button>
</div>
```

--------------------------------

### Handle Multiple File Uploads in Livewire

Source: https://livewire.laravel.com/docs/4.x/uploads

Livewire automatically manages multiple file uploads when the 'multiple' attribute is present on the file input. It appends uploaded files to a specified array property.

```php
<?php

use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

new class extends Component {
    use WithFileUploads;

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public function save()
    {
        foreach ($this->photos as $photo) {
            $photo->store(path: 'photos');
        }
    }
};

```

```blade
<form wire:submit="save">
    <input type="file" wire:model="photos" multiple>

    @error('photos.*') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save photo</button>
</form>

```

--------------------------------

### Accessing Named Slots in Livewire Child Components

Source: https://livewire.laravel.com/docs/4.x/nesting

Shows how to access named slots within a Livewire child component using the `$slots` variable. It illustrates accessing the 'actions' slot and the default slot.

```blade
<div>
    <p>{{ $comment->author }}</p>
    <p>{{ $comment->body }}</p>

    <div class="actions">
        {{ $slots['actions'] }}
    </div>

    <div class="metadata">
        {{ $slot }}
    </div>
</div>
```

--------------------------------

### Customize Broadcast Event Name with broadcastAs()

Source: https://livewire.laravel.com/docs/4.x/events

Defines a Laravel event and customizes its broadcast name using the `broadcastAs()` method. This allows for non-standard event naming conventions.

```php
<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ScoreSubmitted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function broadcastOn()
    {
        return new Channel('scores');
    }

    public function broadcastAs(): string
    {
        return 'score.submitted';
    }
}

```

--------------------------------

### Delay Livewire Loading Indicators

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Explains the `.delay` modifier for `wire:loading`, which prevents the loading indicator from flashing briefly on fast connections. The indicator only appears if the request takes longer than a specified duration, improving user experience by reducing visual distractions.

```blade
<div wire:loading.delay>...</div>
```

```blade
<div wire:loading.delay.shortest>...</div> <!-- 50ms -->
<div wire:loading.delay.shorter>...</div>  <!-- 100ms -->
<div wire:loading.delay.short>...</div>    <!-- 150ms -->
<div wire:loading.delay>...</div>          <!-- 200ms -->
<div wire:loading.delay.long>...</div>     <!-- 300ms -->
<div wire:loading.delay.longer>...</div>   <!-- 500ms -->
<div wire:loading.delay.longest>...</div>  <!-- 1000ms -->
```

--------------------------------

### Access Event Data in Alpine.js Listeners

Source: https://livewire.laravel.com/docs/4.x/events

Access data passed with a Livewire event within an Alpine.js `x-on` directive using `$event.detail`. This allows Alpine.js to react to specific information sent with the event, such as a post title for a notification.

```blade
<div x-on:post-created="notify('New post: ' + $event.detail.title)"></div>
```

--------------------------------

### Modelable Usage for a Date Picker Component

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Shows how to create a reusable date picker component using the #[Modelable] attribute for the 'date' property. This allows parent components to easily bind and manage date values.

```php
<?php // resources/views/components/⚡date-picker.blade.php

use LivewireAttributesModelable;
use LivewireComponent;

new class extends Component {
    #[Modelable]
    public $date = '';
};
?>

<div>
    <input
        type="date"
        wire:model="date"
        class="border rounded px-3 py-2"
    >
</div>
```

--------------------------------

### Style Active Links with data-current (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-navigate

Livewire automatically adds a 'data-current' attribute to active navigation links when using wire:navigate. This allows for easy styling of active states using CSS or utility frameworks like Tailwind CSS, without additional directives.

```blade
<nav>
    <a href="/" wire:navigate class="data-current:font-bold">Dashboard</a>
    <a href="/posts" wire:navigate class="data-current:font-bold">Posts</a>
    <a href="/users" wire:navigate class="data-current:font-bold">Users</a>
</nav>
```

--------------------------------

### HTML Output: Todos Component After Update

Source: https://livewire.laravel.com/docs/4.x/morphing

The HTML structure after a new todo item ('third') has been added. Livewire's morphing algorithm intelligently adds the new list item to the DOM without replacing the entire list.

```html
<form wire:submit="add">
    <ul>
        <li>first</li>

        <li>second</li>

        <li>third</li> 
    </ul>

    <input wire:model="todo">
</form>
```

--------------------------------

### Disabling Auto-validation with #[Validate(onUpdate: false)]

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

Shows how to disable the default real-time validation for #[Validate] attributes by setting `onUpdate: false`. Validation will only occur when `$this->validate()` is explicitly called, typically before saving data. This is useful for batch validation.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Validate('required|min:3', onUpdate: false)] // [tl! highlight]
    public $title = '';

    #[Validate('required|min:3', onUpdate: false)] // [tl! highlight]
    public $content = '';

    public function save()
    {
        $validated = $this->validate();
        Post::create($validated);
        return redirect('/posts');
    }
};
?>

```

--------------------------------

### Dispatch Event Directly to Another Component (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch an event directly to a specific component from a Blade template using the `$dispatchTo()` JavaScript function. This is useful for triggering component-specific events from user interactions like button clicks, targeting a component by its name.

```blade
<button wire:click="$dispatchTo('posts', 'show-post-modal', { id: {{ $post->id }} })">
    EditPost
</button>

```

--------------------------------

### Advanced Form Validation with Rule Objects in Livewire

Source: https://livewire.laravel.com/docs/4.x/forms

Shows how to define validation rules using a `rules()` method in Livewire Forms, which is necessary when using Laravel's `Rule` objects for complex validation scenarios like unique constraints with ignored models. Validation only runs when `$this->validate()` is explicitly called.

```php
<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    public $title = '';

    public $content = '';

    protected function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->post), // Example of Rule object
            ],
            'content' => 'required|min:5',
        ];
    }

    // ...

    public function update()
    {
        $this->validate(); // Validation runs here

        $this->post->update($this->only(['title', 'content']));

        $this->reset();
    }
}

```

--------------------------------

### Skipping Livewire Re-renders with skipRender() Method

Source: https://livewire.laravel.com/docs/4.x/actions

The skipRender() method provides an alternative to the #[Renderless] attribute for conditionally skipping component re-renders. It can be called within any component action to prevent the view from updating.

```php
<?php 

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function incrementViewCount()
    {
        $this->post->incrementViewCount();

        $this->skipRender(); 
    }
};

```

--------------------------------

### Wrap Class-Based Component Scripts with @script (Blade)

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates the necessity of wrapping script tags with the @script directive when using class-based Livewire components. This ensures proper JavaScript scoping.

```blade
@@script
<script>
    this.$js.bookmark = () => { /* ... */ }
</script>
@@endscript

```

--------------------------------

### Teleporting Toast Notifications in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Shows a practical application of the @teleport directive for displaying toast notifications. The content is targeted to a specific container with the ID 'notifications-container'. This is useful for non-intrusive messages that need a dedicated area on the page.

```blade
@teleport('#notifications-container')
    <div class="toast">
        {{ $message }}
    </div>
@endteleport
```

--------------------------------

### Use $wire.set() to update Livewire property client-side

Source: https://livewire.laravel.com/docs/4.x/properties

Presents alternative methods for updating Livewire component properties from JavaScript using `$wire.set()`. It covers immediate synchronization and deferred synchronization for better control over network requests.

```html
<button x-on:click="$wire.set('todo', '')">Clear</button>
<button x-on:click="$wire.set('todo', '', false)">Clear (Deferred)</button>
```

--------------------------------

### Cache Computed Property Across All Components with `cache: true`

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This code demonstrates how to cache a computed property's value across all Livewire components in an application using the `#[Computed(cache: true)]` attribute. This is useful for data that is shared and frequently accessed by multiple components. The cache persists until it expires or is manually cleared.

```php
use Livewire\Attributes\Computed;
use App\Models\Post;

#[Computed(cache: true)]
public function posts()
{
    return Post::all();
}
```

--------------------------------

### Blade Template with wire:text for Optimistic Likes

Source: https://livewire.laravel.com/docs/4.x/wire-text

This Blade template utilizes Livewire's wire:text directive to display a 'likes' count optimistically. It combines Alpine.js for immediate UI updates with Livewire for backend persistence.

```blade
<div>
    <button x-on:click="$wire.likes++" wire:click="like">❤️ Like</button>

    Likes: <span wire:text="likes"></span>
</div>
```

--------------------------------

### Livewire Counter Component Definition (PHP)

Source: https://livewire.laravel.com/docs/4.x/javascript

Defines a basic Livewire component named 'Counter' with a public property 'count' and an 'increment' method. This server-side component is then represented by the $wire object on the client.

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
```

--------------------------------

### Customize CSS Display Property for Livewire Loading

Source: https://livewire.laravel.com/docs/4.x/wire-loading

Details how to customize the CSS `display` property used by Livewire's `wire:loading` directive. By default, Livewire uses `none` and `inline-block`, but modifiers like `.flex`, `.block`, or `.grid` can be appended to `wire:loading` to control the element's display style.

```blade
<div class="flex" wire:loading.flex>...</div>
```

```blade
<div wire:loading.inline-flex>...</div>
<div wire:loading.inline>...</div>
<div wire:loading.block>...</div>
<div wire:loading.table>...</div>
<div wire:loading.flex>...</div>
<div wire:loading.grid>...</div>
```

--------------------------------

### Real-time Form Saving with `updated()` Hook

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP and Blade code demonstrates how to automatically save form data in real-time using Livewire's `updated()` lifecycle hook. When a field is updated (after `.blur` or `.live`), the `updated()` method is called, allowing for database updates or other actions. It requires Livewire, Eloquent Models, and PHP attributes for validation.

```php
<?php // resources/views/components/post/⚡edit.blade.php

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function updated($name, $value) // [tl! highlight:5]
    {
        $this->post->update([
            $name => $value,
        ]);
    }
};
?>
```

```blade
<form wire:submit>
    <input type="text" wire:model.blur="title">
    <div>
        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>

    <input type="text" wire:model.blur="content">
    <div>
        @error('content') <span class="error">{{ $message }}</span> @enderror
    </div>
</form>
```

--------------------------------

### Supported Primitive Property Types in Livewire

Source: https://livewire.laravel.com/docs/4.x/properties

Illustrates the declaration of primitive property types supported by Livewire. These types (Array, String, Integer, Float, Boolean, Null) are easily serialized to and from JSON, ensuring reliable data transfer between the server and client.

```php
new class extends Component {
    public array $todos = [];

    public string $todo = '';

    public int $maxTodos = 10;

    public bool $showTodos = false;

    public ?string $todoFilter = null;
};
```

--------------------------------

### Manual Two-Way Communication without Modelable

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Illustrates the manual approach to achieve two-way data communication between parent and child Livewire components without using the #[Modelable] attribute. This method requires explicit event handling.

```php
// Without #[Modelable] - manual approach
<livewire:todo-input
    :value="$todo"
    @input="todo = $event.value"
/>
```

--------------------------------

### Conditional Post Access with Computed Property (Blade)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Shows how to access a computed property in a Blade template to conditionally render posts, ensuring the database query for posts is only executed if the user has permission.

```blade
<div>
    @if (Auth::user()->can_see_posts)
        @foreach ($this->posts as $post)
            <div wire:key="{{ $post->id }}">
                <!-- ... -->
            </div>
        @endforeach
    @endif
</div>
```

--------------------------------

### Livewire Parent Component DOM After Morphing

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

The final DOM structure of the parent Livewire component after the frontend 'morphing' process. This shows that the child component placeholder has been replaced with its actual rendered content, demonstrating Livewire's ability to update nested components intelligently.

```html
<div wire:id="123">
    Post Limit: <input type="number" wire:model.live="postLimit">

    <div wire:id="456">
        <h1>The first post</h1>

        <p>Post content</p>

        <button wire:click="$refresh">Refresh post</button>
    </div>
</div>
```

--------------------------------

### Pass Parameters to Livewire Actions via Alpine.js

Source: https://livewire.laravel.com/docs/4.x/actions

Shows how to pass parameters from Alpine.js variables to Livewire methods. When calling a Livewire action through the `$wire` object, any arguments provided in the Alpine.js call are forwarded to the corresponding PHP method. This allows dynamic data to be sent to the backend.

```blade
<div x-data="{ todo: '' }">
    <input type="text" x-model="todo">

    <button x-on:click="$wire.addTodo(todo)">Add Todo</button>
</div>
```

--------------------------------

### Livewire Continuous Polling (Keep Alive)

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Explains how to use the `.keep-alive` modifier with `wire:poll` to prevent Livewire from throttling requests when the page is in a background tab. This ensures continuous polling.

```blade
<div wire:poll.keep-alive>
</div>
```

--------------------------------

### Optimizing Third-Party Event Handling in Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Provides a more performant alternative for handling third-party events by directly updating Livewire component properties using Alpine.js's `$wire` and `$event` objects. This avoids unnecessary network requests on every interaction.

```blade
<trix-editor
   x-on:trix-change="$wire.content = $event.target.value"
></trix-editor>

```

--------------------------------

### PHP: Define Post Policy Authorization

Source: https://livewire.laravel.com/docs/4.x/security

Defines the authorization logic for the `delete` action within the `PostPolicy`. This method checks if the authenticated user owns the post, returning true if they do and false otherwise.

```php
<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Determine if the given post can be deleted by the user.
     */
    public function delete(?User $user, Post $post): bool
    {
        return $user?->id === $post->user_id;
    }
}

```

--------------------------------

### Livewire #[Async] Attribute for Parallel Action Execution

Source: https://livewire.laravel.com/docs/4.x/actions

The #[Async] attribute allows actions to be executed in parallel, bypassing Livewire's default sequential request queue. This is beneficial for long-running operations that should not block other component updates.

```php
<?php 

use Livewire\Attributes\Async;
use Livewire\Component;

class MyComponent extends Component {
    #[Async]
    public function processLargeData() {
        // ... long running process ...
    }
}

```

--------------------------------

### Set Static Page Title with #[Title] Attribute

Source: https://livewire.laravel.com/docs/4.x/attribute-title

Applies the #[Title] attribute to a full-page Livewire component to declaratively set the browser tab title. This is suitable for static titles that do not change based on component state. The layout file must include a '$title' variable to render the title.

```php
<?php // resources/views/pages/posts/⚡create.blade.php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Create Post')] class extends Component {
    public $title = '';
    public $content = '';

    public function save()
    {
        // Save post...
    }
};
?>

<div>
    <h1>Create a New Post</h1>

    <input type="text" wire:model="title" placeholder="Post title">
    <textarea wire:model="content" placeholder="Post content"></textarea>

    <button wire:click="save">Save Post</button>
</div>
```

--------------------------------

### Overriding #[Defer] Attribute in Blade

Source: https://livewire.laravel.com/docs/4.x/attribute-defer

Shows how to override the #[Defer] attribute for a specific component instance in a Blade template by setting the `:defer` parameter to `false`. This forces the component to load immediately, even if the component class has the #[Defer] attribute applied.

```blade
<livewire:revenue :defer="false" />
```

--------------------------------

### Deep Event Listening with .deep Modifier

Source: https://livewire.laravel.com/docs/4.x/wire-model

Illustrates how to use the .deep modifier with wire:model to listen for events bubbling up from child elements. This is useful for container elements where changes within them should update the parent model.

```blade
<div wire:model.deep="value">
    <input type="text"> <!-- Changes here will update $value -->
</div>
```

--------------------------------

### Livewire `#[Validate]` with Manual Validation Control

Source: https://livewire.laravel.com/docs/4.x/validation

Illustrates how to disable automatic validation for `#[Validate]` attributes by setting `onUpdate: false`. This requires manual invocation of `$this->validate()` within a method to trigger the validation process before data persistence.

```php
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    #[Validate('required|min:3', onUpdate: false)]
	public $title = '';

    #[Validate('required|min:3', onUpdate: false)]
    public $content = '';

    public function save()
    {
        $validated = $this->validate();

		Post::create($validated);

		return redirect()->to('/posts');
    }

    // ...
}

```

--------------------------------

### Valid Teleport with Single Root Element in Blade

Source: https://livewire.laravel.com/docs/4.x/directive-teleport

Demonstrates the correct syntax for using the @teleport directive when the content includes multiple child elements within a single root element. This adheres to the constraint that only one top-level element should be placed inside the @teleport tags.

```blade
@teleport('body')
    <div>
        <h2>Title</h2>
        <p>Content</p>
    </div>
@endteleport
```

--------------------------------

### Listening for Child Component Events in Parent

Source: https://livewire.laravel.com/docs/4.x/events

A parent Livewire component can listen for events dispatched by its child components directly in the Blade template. This allows for reacting to child component actions, optionally calling parent methods or refreshing the parent.

```html
<div>
    <livewire:edit-post @saved="$refresh">

    <!-- ... -->
</div>

```

```html
<livewire:edit-post @saved="close">

```

```html
<livewire:edit-post @saved="close($event.detail.postId)">

```

--------------------------------

### Dispatch Livewire Events from Alpine.js

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch Livewire events from Alpine.js directives in your Blade templates using the `$dispatch` magic method. This allows Alpine.js interactions to trigger actions or notifications within Livewire components. You can pass additional data as a second argument.

```blade
<button x-on:click="$dispatch('post-created')">...</button>
```

```blade
<button x-on:click="$dispatch('post-created', { title: 'Post Title' })">...</button>
```

--------------------------------

### Refactored Blade Template Using x-input-text Component

Source: https://livewire.laravel.com/docs/4.x/forms

This Blade template has been refactored to use a custom `<x-input-text>` component, reducing redundancy for the title and content input fields.

```blade
<form wire:submit="save">
    <x-input-text name="title" wire:model="title" /> 

    <x-input-text name="content" wire:model="content" /> 

    <button type="submit">Save</button>
</form>
```

--------------------------------

### Livewire Child Component Update Payload

Source: https://livewire.laravel.com/docs/4.x/understanding-nesting

This JavaScript object represents the data sent to the server when a child component ('show-post') is updated. It includes the component's name and ID, along with its state, indicating that only the child component's data is relevant for the update.

```javascript
{
    memo: { name: 'show-post', id: '456' },

    state: { ... },
}
```

--------------------------------

### Enabling Reactive Props in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/nesting

By default, Livewire props are not reactive, meaning changes in the parent component do not automatically update the child. To make a prop reactive, use the `#[Reactive]` attribute on the property in the child component. This ensures the child component updates when the parent's data for that prop changes, similar to frontend frameworks like Vue or React. Use this feature judiciously due to potential performance implications.

```php
<?php // resources/views/components/⚡todo-count.blade.php

use Livewire\Attributes\Reactive;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Todo;

new class extends Component {
    #[Reactive] // [tl! highlight]
    public $todos;

    #[Computed]
    public function count()
    {
        return $this->todos->count();
    }
};
?>

<div>
    Count: {{ $this->count }}
</div>
```

--------------------------------

### Data Binding with wire:model in Livewire

Source: https://livewire.laravel.com/docs/4.x/properties

Illustrates how to use the wire:model directive for two-way data binding between HTML input elements and Livewire component properties. This keeps the UI and component state synchronized.

```php
<?php // resources/views/components/⚡todos.blade.php

use Livewire\Component;

new class extends Component {
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }

    // ...
};

```

```html
<div>
    <input type="text" wire:model="todo" placeholder="Todo..."> <!-- [tl! highlight] -->

    <button wire:click="add">Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
            <li wire:key="{{ $loop->index }}">{{ $todo }}</li>
        @endforeach
    </ul>
</div>

```

--------------------------------

### Use Exact Matching with wire:current.exact

Source: https://livewire.laravel.com/docs/4.x/wire-current

This code snippet shows how to use the `.exact` modifier with the wire:current directive. This ensures that the specified classes are only applied when the link's href precisely matches the current URL path, preventing partial matches.

```blade
<nav>
    <a href="/" wire:current.exact="font-bold">Dashboard</a>
</nav>
```

--------------------------------

### Livewire Validation Attribute Reference (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-validate

This snippet details the `@Validate` attribute used in Livewire components for method-level validation. It outlines the parameters accepted by the attribute, including the validation rule, custom attribute name, friendly alias, custom error message, and options for updating and translating messages. This is useful for understanding how to customize validation behavior.

```php
#[Validate(
    mixed $rule = null,
    ?string $attribute = null,
    ?string $as = null,
    mixed $message = null,
    bool $onUpdate = true,
    bool $translate = true,
)]

```

--------------------------------

### Skipping Component Re-render with wire:click.renderless

Source: https://livewire.laravel.com/docs/4.x/wire-click

The `.renderless` modifier for `wire:click` is used when an action should execute without causing the component to re-render. This is ideal for side effects like analytics tracking or logging where the UI doesn't need to update immediately after the action.

```blade
<button wire:click.renderless="trackClick">Track Event</button>
```

--------------------------------

### Action-Specific Success/Error Notifications in Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

This snippet demonstrates how to display custom success or error notifications for a specific Livewire action, like 'save'. It uses `$wire.intercept` with `onSuccess` and `onError` callbacks to trigger a `showToast` function with appropriate messages and types. This provides clear feedback to the user on action outcomes.

```blade
<script>
    $wire.intercept('save', ({ onSuccess, onError }) => {
        onSuccess(() => showToast('Saved!'))
        onError(() => showToast('Failed to save', 'error'))
    })
</script>
```

--------------------------------

### Hydrating Nested Stringable Properties - PHP

Source: https://livewire.laravel.com/docs/4.x/hydration

Shows a Livewire component where a collection contains a Laravel Stringable object. This demonstrates Livewire's ability to handle deeply nested, complex data types.

```php
<?php

use Livewire\Component;

new class extends Component {
    public $todos;

    public function mount() {
        $this->todos = collect([
            'first',
            'second',
            str('third'),
        ]);
    }
};
```

--------------------------------

### Parent Component Usage of Date Picker

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Demonstrates how a parent Livewire component can utilize the custom date picker component, binding its own properties like 'startDate' and 'endDate' to the date picker's modelable 'date' property.

```blade
{{-- Usage in parent --}}
<livewire:date-picker wire:model="startDate" />
<livewire:date-picker wire:model="endDate" />
```

--------------------------------

### Laravel MorphMap Configuration to Alias Model Classes

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code snippet demonstrates how to configure Laravel's morphMap in a service provider. By mapping an alias ('post') to a model class ('App\Models\Post'), you can prevent the full class name from being exposed when Eloquent models are serialized.

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Relation::morphMap([
            'post' => 'App\Models\Post',
        ]);
    }
}
```

--------------------------------

### Authorize Action Parameters in Livewire

Source: https://livewire.laravel.com/docs/4.x/actions

Demonstrates how to protect against unauthorized data manipulation by authorizing action parameters in Livewire components. It shows a vulnerable `delete` method and its secure counterpart using `$this->authorize()`. This prevents users from deleting records they do not own by validating ownership on the server-side.

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();
    }
};
```

```php
<?php // resources/views/components/post/⚡index.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Computed]
    public function posts()
    {
        return Auth::user()->posts;
    }

    public function delete($id)
    {
        $post = Post::find($id);

        $this->authorize('delete', $post); // [tl! highlight]

        $post->delete();
    }
};
```

--------------------------------

### Livewire component with unsupported Customer property

Source: https://livewire.laravel.com/docs/4.x/properties

Illustrates an error scenario in Livewire where a component property of a custom class (Customer) without the Wireable interface causes an error. This highlights the need for the Wireable implementation.

```php
new class extends Component {
    public Customer $customer;

    public function mount()
    {
        $this->customer = new Customer('Caleb', 29);
    }
};
```

--------------------------------

### Use Custom Form Property Name in Livewire Volt (PHP)

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates how to specify a custom property name for a Livewire form within a Volt component. By passing a second argument to the `form` function, the form instance is accessible via `$this->postForm` instead of the default `$this->form`.

```php
<?php

use App\Livewire\Forms\PostForm;
use function Livewire\Volt\form;

form(PostForm::class, 'postForm');

$save = function () {
    $this->postForm->store();

    // ...
};

?>
```

--------------------------------

### Class-based Components Script Directive (Blade)

Source: https://livewire.laravel.com/docs/4.x/javascript

Explains the necessity of the @@script directive when using JavaScript within class-based Livewire components. This directive ensures that scripts are executed at the correct time during the component's lifecycle, especially when the Blade view is separate from the PHP class.

```blade
@@script
<script>
    // Your JavaScript here...
</script>
@@endscript
```

--------------------------------

### Livewire Viewport Polling (Visible Modifier)

Source: https://livewire.laravel.com/docs/4.x/wire-poll

Shows how to use the `.visible` modifier with `wire:poll`. This instructs Livewire to only poll when the component's element is visible within the user's viewport, optimizing resource usage.

```blade
<div wire:poll.visible>
</div>
```

--------------------------------

### Customizing Validation Error: Multiple Rules and Messages

Source: https://livewire.laravel.com/docs/4.x/validation

This PHP code shows how to apply custom messages to multiple validation rules for a single property by using separate `#[Validate]` attributes for each rule. This provides granular control over the error messages displayed to the user.

```php
use Livewire\Attributes\Validate;

#[Validate('required', message: 'Please enter a title.')]
#[Validate('min:5', message: 'Your title is too short.')]
public $title = '';
```

--------------------------------

### Access Event Parameters in Livewire JavaScript Listener

Source: https://livewire.laravel.com/docs/4.x/events

Retrieve data sent with a dispatched event within a JavaScript event listener attached to a Livewire component. Event parameters are available in the `event.detail` object. This allows JavaScript logic to react to specific data sent with the event.

```html
<script>
    this.$on('post-created', (event) => {
        let refreshPosts = event.detail.refreshPosts;

        // Use the received data
    });
</script>
```

--------------------------------

### Livewire Infinite Scroll with wire:intersect (PHP & Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-intersect

Implements an infinite scrolling feature using Livewire. The `wire:intersect` directive on a 'Loading more posts...' element triggers the `loadPosts` method, fetching and appending more data to the `$posts` property.

```php
<?php

use Livewire\Component;

// Assuming Post model exists and works with Eloquent
// use App\Models\Post;

new class extends Component {
    public $page = 1;
    public $posts = [];

    public function mount()
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        // Placeholder for actual data fetching
        // Replace with your actual Post::latest()->.. logic
        $newPosts = collect(); // Simulate fetching posts
        for ($i = 0; $i < 10; $i++) {
            $newPosts->push(['id' => uniqid(), 'title' => 'Post Title ' . ($this->page * 10 + $i)]);
        }

        $this->posts = array_merge($this->posts, $newPosts->toArray());
        $this->page++;
    }
};
?>

<div>
    @foreach ($posts as $post)
        <div>{{ $post['title'] }}</div>
    @endforeach

    <div wire:intersect="loadPosts" style="height: 50px; background-color: lightgray;">
        Loading more posts...
    </div>
</div>

```

--------------------------------

### Livewire $dispatch Action for Custom Event Broadcasting

Source: https://livewire.laravel.com/docs/4.x/actions

The $dispatch magic action enables broadcasting custom Livewire events directly from the browser. This allows for decoupled communication between components or with JavaScript. The event name is provided as an argument.

```blade
<button type="submit" wire:click="$dispatch('post-deleted')">Delete Post</button>
```

--------------------------------

### Test Dispatched Events (PHP)

Source: https://livewire.laravel.com/docs/4.x/events

Test if a component dispatches a specific event using the `assertDispatched()` method within Livewire tests. This method verifies that an event was emitted during the component's lifecycle, optionally checking for specific data.

```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Livewire\CreatePost;
use Livewire\Livewire;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_dispatches_post_created_event()
    {
        Livewire::test(CreatePost::class)
            ->call('save')
            ->assertDispatched('post-created');
    }
}

```

--------------------------------

### Declare Livewire Computed Property with #[Computed] Attribute

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This PHP code defines a Livewire component with a computed property named 'user'. The `#[Computed]` attribute above the `user()` method ensures its return value is memoized for the current request. It accesses a `User` Eloquent model based on the component's `userId` property and is used in a `follow` method.

```php
<?php // resources/views/components/⚡show-user.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $userId;

    #[Computed]
    public function user()
    {
        return User::find($this->userId);
    }

    public function follow()
    {
        Auth::user()->follow($this->user);
    }
};
```

--------------------------------

### Dispatching and Handling Events in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/attribute-reactive

This snippet shows an alternative to reactive props for communication between Livewire components: events. The parent component dispatches an event named `todos-updated` with the `$todos` data. The child component listens for this event using the `#[On]` attribute and updates its own `$todos` property accordingly. This approach offers more flexibility for loosely coupled components.

```php
// Parent dispatches event
$this->dispatch('todos-updated', todos: $this->todos);

// Child listens for event
#[On('todos-updated')]
public function handleTodosUpdate($todos)
{
    $this->todos = $todos;
}
```

--------------------------------

### Make Livewire Actions Async with #[Async] Attribute

Source: https://livewire.laravel.com/docs/4.x/actions

Marks a Livewire method as asynchronous using a PHP attribute. This ensures the action runs asynchronously regardless of how it's called, preventing blocking. Suitable for operations like logging user activity when an element enters the viewport.

```php
<?php // resources/views/components/post/⚡show.blade.php

use Livewire\Attributes\Async;
use Livewire\Component;

new class extends Component {
    public Post $post;

    #[Async]
    public function logActivity()
    {
        Activity::log('post-viewed', $this->post);
    }

    // ...
};
```

```blade
<div wire:intersect="logActivity">
    <!-- ... -->
</div>
```

--------------------------------

### Override Default Cache Duration for Persisted Properties

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This snippet illustrates how to customize the cache duration for a persisted computed property by providing a `seconds` parameter to the `#[Computed]` attribute. This allows you to set a specific expiration time for the cached data, exceeding the default one-hour limit.

```php
#[Computed(persist: true, seconds: 7200)]
```

--------------------------------

### Livewire PHP Action Method Returning a Value

Source: https://livewire.laravel.com/docs/4.x/actions

A Livewire PHP method that returns a value, such as a count of database records. This return value can be asynchronously received and used by the calling Alpine.js component, facilitating data display and updates on the client side.

```php
use App\Models\Post;

public function getPostCount()
{
    return Post::count();
}
```

--------------------------------

### Invoking Livewire Magic Actions from Alpine.js

Source: https://livewire.laravel.com/docs/4.x/actions

Livewire allows invoking component magic actions from Alpine.js using the $wire object. This enables seamless integration of Livewire's capabilities within Alpine directives, such as $wire.$refresh().

```blade
<button x-on:click="$wire.$refresh()">Refresh</button>
```

--------------------------------

### Conditional Save Logic with $wire.$dirty() in Alpine.js

Source: https://livewire.laravel.com/docs/4.x/wire-dirty

This code snippet shows how to use the `$wire.$dirty('title')` method within an Alpine.js `x-on:click` handler. It conditionally executes the `$wire.save()` method only if the 'title' property is dirty, preventing unnecessary saves when no changes have been made.

```blade
<button x-on:click="$wire.$dirty('title') && $wire.save()">
    Save Title
</button>
```

--------------------------------

### Single Checkbox Binding with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Binds a single checkbox to a boolean property in a Livewire component. When the property is false, the checkbox is unchecked; when true, it is checked. Useful for opt-in features.

```blade
<input type="checkbox" wire:model="receiveUpdates">
```

--------------------------------

### Multiple Checkbox Binding with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Binds multiple checkboxes to an array property in a Livewire component. Checking a checkbox adds its value to the array; unchecking removes it. Allows users to select multiple options.

```php
public $updateTypes = [];
```

```blade
<input type="checkbox" value="email" wire:model="updateTypes">
<input type="checkbox" value="sms" wire:model="updateTypes">
<input type="checkbox" value="notification" wire:model="updateTypes">
```

--------------------------------

### Livewire AJAX Payload for Component Update (JavaScript)

Source: https://livewire.laravel.com/docs/4.x/hydration

Shows the structure of the JSON payload sent to the server via AJAX when a component update is triggered in Livewire. It contains the 'calls' to be made and the 'snapshot' of the component's state.

```js
{
    calls: [
        { method: 'increment', params: [] },
    ],

    snapshot: {
        state: {
            count: 1,
        },

        memo: {
            name: 'counter',

            id: '1526456',
        },
    }
}

```

--------------------------------

### Blade Livewire Component: Todos List Rendering

Source: https://livewire.laravel.com/docs/4.x/morphing

This Blade template renders a form for adding todos. It iterates over the $todos array to display each todo item and includes an input field bound to the $todo property for new entries. It uses Livewire directives for form submission and model binding.

```blade
<form wire:submit="add">
    <ul>
        @foreach ($todos as $item)
            <li wire:key="{{ $loop->index }}">{{ $item }}</li>
        @endforeach
    </ul>

    <input wire:model="todo">
</form>
```

--------------------------------

### Preserving Scroll Position with @persist and wire:scroll (Blade)

Source: https://livewire.laravel.com/docs/4.x/directive-persist

Demonstrates how to maintain the scroll position of a persisted element. By adding the `wire:scroll` directive to a scrollable `div` wrapped in `@persist`, its scroll state is preserved across navigation.

```blade
@persist('scrollable-list')
    <div class="overflow-y-scroll" wire:scroll>
        <!-- Scrollable content... -->
    </div>
@endpersist
```

--------------------------------

### Dispatch Notification Event from Anywhere in Livewire App

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This PHP snippet demonstrates how to dispatch the 'notification-sent' event from any part of a Livewire application. By calling `$this->dispatch('notification-sent')`, you can trigger the `incrementCount` method in the notification bell component (or any other component listening for this event), updating the unread notification count in real-time.

```php
// From anywhere in your app
$this->dispatch('notification-sent');

```

--------------------------------

### Prevent Client-Side Property Modification with #[Locked] (PHP)

Source: https://livewire.laravel.com/docs/4.x/attribute-locked

Demonstrates the basic usage of the #[Locked] attribute in a Livewire component. This attribute is applied to public properties to prevent them from being modified on the client-side, protecting sensitive data like model IDs from tampering. Backend modifications are still allowed.

```php
<?php

use Livewire\Attributes\Locked;
use Livewire\Component;
use App\Models\Post;

new class extends Component {
    #[Locked]
    public $postId;

    public function mount($id)
    {
        $this->postId = $id;
    }

    public function delete()
    {
        Post::find($this->postId)->delete();

        return redirect('/posts');
    }
};

```

--------------------------------

### Livewire Component with Eloquent Property (Problem)

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code demonstrates a Livewire component that uses a public property to store an Eloquent collection with a 'select' constraint. This constraint is lost on subsequent requests due to Livewire's hydration process.

```php
<?php // resources/views/components/⚡show-todos.blade.php

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component {
    public $todos;

    public function mount()
    {
        $this->todos = Auth::user()
            ->todos()
            ->select(['title', 'content']) // [tl! highlight] 
            ->get();
    }
};

```

--------------------------------

### Parent Component Usage of Rich Editor

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Shows a parent Livewire component utilizing the custom rich editor component, binding its 'postContent' property to the rich editor's modelable 'content' property.

```blade
{{-- Usage --}}
<livewire:rich-editor wire:model="postContent" />
```

--------------------------------

### Define Livewire Form Object Properties and Validation

Source: https://livewire.laravel.com/docs/4.x/forms

This PHP code defines a Livewire Form object class named `PostForm`. It extends `LivewireForm` and uses Livewire's `#[Validate]` attribute to specify validation rules for its properties (`title` and `content`). This class serves as a blueprint for form data and its associated validation.

```php
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:5')]
    public $content = '';
}
```

--------------------------------

### Basic Reactive Prop Usage in Livewire Component

Source: https://livewire.laravel.com/docs/4.x/attribute-reactive

This snippet demonstrates the basic application of the #[Reactive] attribute to a child component's property. The `todos` property will automatically update when the parent component modifies its value, triggering a re-render of the child to display the updated count. This is useful for keeping child component data synchronized with parent state.

```php
<?php // resources/views/components/⚡todo-count.blade.php

use Livewire\Attributes\Reactive;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Reactive] // [tl! highlight]
    public $todos;

    #[Computed]
    public function count()
    {
        return $this->todos->count();
    }
};
?>

<div>
    Count: {{ $this->count }}
</div>
```

--------------------------------

### Listen for Child Component Events in Livewire Blade Template

Source: https://livewire.laravel.com/docs/4.x/attribute-on

This snippet demonstrates listening for events emitted by a child Livewire component directly within a Blade template. The `<livewire:post.edit @saved="$refresh" />` syntax listens for a 'saved' event from the 'post.edit' component and automatically refreshes the parent component. Alternatively, as shown in `<livewire:post.edit @saved="handleSave($event.id)" />`, a specific method can be called, passing event data.

```blade
<livewire:post.edit @saved="$refresh" />

```

```blade
<livewire:post.edit @saved="handleSave($event.id)" />

```

--------------------------------

### Securing Livewire Component with Authorization (PHP)

Source: https://livewire.laravel.com/docs/4.x/properties

This PHP code snippet demonstrates how to secure a Livewire component's update action by adding an authorization check using Laravel's `authorize` method. This ensures that the current user has the permission to update the targeted post before the update operation proceeds.

```php
public function update()
{
    $post = Post::findOrFail($this->id);

    $this->authorize('update', $post); 

    $post->update(...);
}
```

--------------------------------

### JavaScript Error Rejection Object Structure for #[Json]

Source: https://livewire.laravel.com/docs/4.x/attribute-json

Details the structure of the error object returned when a Livewire #[Json] action promise is rejected, specifically for validation errors (status 422) and general HTTP errors (e.g., 500). This helps in parsing and displaying error messages to the user.

```js
{
    status: 422,    // HTTP status code (422 for validation errors)
    body: null,     // Raw response body (null for validation errors)
    json: null,     // Parsed JSON (null for validation errors)
    errors: {...}   // Validation errors object
}

// For HTTP errors (500, etc.):
{
    status: 500,
    body: '<html>...</html>',
    json: null,
    errors: null
}

```

--------------------------------

### Dispatch Event to Itself (PHP)

Source: https://livewire.laravel.com/docs/4.x/events

Dispatch an event that can only be intercepted by the component it was triggered from using the `dispatch()->self()` modifier. This is useful for internal component communication.

```php
<?php // resources/views/components/post/⚡create.blade.php

use Livewire\Component;

new class extends Component {
    public function save()
    {
		// ...

		$this->dispatch('post-created')->to(self: true);
    }
};

```

--------------------------------

### Parent Component Binding to a Modelable Child

Source: https://livewire.laravel.com/docs/4.x/attribute-modelable

Demonstrates how a parent Livewire component can bind to a child component's #[Modelable] property using wire:model. The parent's '$todo' property will automatically update as the user types in the child component.

```php
<?php // resources/views/components/⚡todos.blade.php

use LivewireComponent;

new class extends Component {
    public $todo = '';

    public function addTodo()
    {
        // Use $this->todo here...
    }
};
?>

<div>
    <livewire:todo-input wire:model="todo" /> <!-- [tl! highlight] -->

    <button wire:click="addTodo">Add Todo</button>
</div>
```

--------------------------------

### Disable Lazy Loading for Livewire Tests

Source: https://livewire.laravel.com/docs/4.x/lazy

Temporarily disable lazy loading behavior for Livewire components during feature tests. This ensures that components render fully, allowing for accurate assertions on their final state, instead of their placeholders. Use the `Livewire::withoutLazyLoading()` helper.

```php
<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Dashboard;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::withoutLazyLoading() // [tl! highlight]
            ->test(Dashboard::class)
            ->assertSee(...);
    }
}

```

--------------------------------

### Access Event Payload in Livewire Listener

Source: https://livewire.laravel.com/docs/4.x/events

Explains how to access the payload of a broadcasted event within a Livewire component's event listener. The event data is passed as an argument to the listener method.

```php
#[On('echo:orders.{order.id},OrderShipped')]
public function notifyNewOrder($event)
{
    $order = Order::find($event['orderId']);

    //
}

```

--------------------------------

### Lock Volt Component Property Against Client-Side Modification

Source: https://livewire.laravel.com/docs/4.x/volt

Illustrates how to prevent client-side modifications of a Volt component property by chaining the `locked` method on the state declaration. This ensures data integrity by only allowing server-side updates.

```php
state(['id'])->locked();
```

--------------------------------

### Sort Handle Implementation with Livewire (Blade)

Source: https://livewire.laravel.com/docs/4.x/wire-sort

This Blade snippet shows how to restrict dragging to a specific element within a sortable list item using Livewire's `wire:sort:handle`. This is useful for interactive list items where accidental drags should be prevented.

```blade
<ul wire:sort="sortItem">
    @foreach ($todo->items as $item)
        <li wire:sort:item="{{ $item->id }}">
            <div wire:sort:handle>
                <!-- Drag icon... -->
            </div>

            {{ $item->title }}
        </li>
    @endforeach
</ul>

```

--------------------------------

### Intercept Livewire Validator with Custom Logic (PHP)

Source: https://livewire.laravel.com/docs/4.x/validation

This snippet demonstrates how to access Livewire's internal validator instance using the `withValidator` method. It allows you to add custom validation logic or modify existing error messages before Livewire's validation rules are evaluated. This is useful for adding domain-specific validation checks.

```php
use LivewireAttributesValidate;
use LivewireComponent;
use App\Models\Post;

class CreatePost extends Component
{
    #[Validate('required|min:3')]
	public $title = '';

    #[Validate('required|min:3')]
    public $content = '';

    public function boot()
    {
        $this->withValidator(function ($validator) {
            $validator->after(function ($validator) {
                if (str($this->title)->startsWith('"')) {
                    $validator->errors()->add('title', 'Titles cannot start with quotations');
                }
            });
        });
    }

    public function save()
    {
		Post::create($this->all());

		return redirect()->to('/posts');
    }

    // ...
}
```

--------------------------------

### Cancel File Upload with Livewire's JavaScript Function

Source: https://livewire.laravel.com/docs/4.x/uploads

This snippet shows how to add a button that allows users to cancel an ongoing file upload. It uses Livewire's `$cancelUpload()` JavaScript function, triggered by a `wire:click` event, to abort the upload process for the specified file input ('photo').

```blade
<form wire:submit="save">
    <!-- File Input -->
    <input type="file" wire:model="photo">

    <!-- Cancel upload button -->
    <button type="button" wire:click="$cancelUpload('photo')">Cancel Upload</button>

    <!-- ... -->
</form>
```

--------------------------------

### Cache Computed Property with Laravel Cache

Source: https://livewire.laravel.com/docs/4.x/computed-properties

This snippet demonstrates how to manually cache a computed property's value across requests using Laravel's `Cache::remember()` facade. It's useful when you need fine-grained control over the cache key and duration. The cache key is dynamically generated using the component's ID to ensure instance-specific caching.

```php
<?php // resources/views/components/⚡show-user.blade.php

use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\User;

new class extends Component {
    public $userId;

    #[Computed]
    public function user()
    {
        $key = 'user'.$this->getId();
        $seconds = 3600; // 1 hour...

        return Cache::remember($key, $seconds, function () {
            return User::find($this->userId);
        });
    }

    // ...
};
```

--------------------------------

### Customizing Validation Error: Attribute Name

Source: https://livewire.laravel.com/docs/4.x/validation

This PHP snippet illustrates how to customize the display name of a validated property in error messages. By using the `as:` parameter within the `#[Validate]` attribute, you can provide a more user-friendly name (e.g., 'date of birth') that will appear in validation error messages instead of the raw property name (e.g., 'dob').

```php
use Livewire\Attributes\Validate;

#[Validate('required', as: 'date of birth')]
public $dob = '';
```

--------------------------------

### Pass View Data to Anonymous Volt Components

Source: https://livewire.laravel.com/docs/4.x/volt

This snippet shows how data passed to a Blade view is automatically available to an anonymous Volt component within that view. You can declare state variables with matching names, and Volt will hydrate them with the provided view data.

```php
<?php

use function Livewire\Volt\state;

state('count');

$increment = function () {
    // Store the new count value in the database...

    $this->count++;
};

?>

<x-app-layout>
    <x-slot name="header">
        Initial value: {{ $count }}
    </x-slot>

    @volt('counter')
        <div>
            <h1>{{ $count }}</h1>
            <button wire:click="increment">+</button>
        </div>
    @endvolt
</x-app-layout>
```

--------------------------------

### Testing Validation Errors in Livewire Components

Source: https://livewire.laravel.com/docs/4.x/testing

Validate that specific fields trigger validation errors using `assertHasErrors()`. You can assert that a field has any error, or test for specific error messages associated with validation rules.

```php
it('title field is required', function () {
    Livewire::test('post.create')
        ->set('title', '')
        ->call('save')
        ->assertHasErrors('title');
});

it('title must be at least 3 characters', function () {
    Livewire::test('post.create')
        ->set('title', 'ab')
        ->call('save')
        ->assertHasErrors(['title' => ['min:3']]);
});
```

--------------------------------

### Omitting Render Method with Computed Property (Blade)

Source: https://livewire.laravel.com/docs/4.x/computed-properties

Displays the Blade template that utilizes data from a computed property when the component's render method is omitted, demonstrating data access without an explicit render method.

```blade
<div>
    @foreach ($this->posts as $post)
        <div wire:key="{{ $post->id }}">
            <!-- ... -->
        </div>
    @endforeach
</div>
```

--------------------------------

### Livewire $set Action for Property Updates

Source: https://livewire.laravel.com/docs/4.x/actions

The $set magic action allows direct property updates from the Blade template. It dispatches a network request to change a component property's value. Usage requires specifying the property name and the new value.

```blade
<button wire:click="$set('query', '')">Reset Search</button>
```

--------------------------------

### Radio Button Binding with Livewire

Source: https://livewire.laravel.com/docs/4.x/wire-model

Uses radio buttons to toggle between two or more values for a single property in a Livewire component. The `value` attribute of the selected radio button is assigned to the bound property.

```blade
<input type="radio" value="yes" wire:model="receiveUpdates">
<input type="radio" value="no" wire:model="receiveUpdates">
```