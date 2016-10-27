# FAQ Package
Laravel FAQ Package.

# Installation

To install the package first of all you should add the package to your projects composer.json

<code>"require": { "taskforcedev/faq": "1.*" }</code>

Then run <code>composer update</code>

Then add the following service provider(s) to your config/app.php (the laravel-support package may already be added so no need to add it twice if it is present).

<code>'providers' => [
    ...
    Taskforcedev\LaravelSupport\ServiceProvider::class,
    Taskforcedev\Faq\ServiceProvider::class,
]</code>

Then publish the laravel-support config (if you do not have this already)

<code>php artisan vendor:publish --tag="taskforce-support"</code>

Edit the config, in particular the layout to match your sites master layout.

Finally visit the installation route to run the migrations
<code>http://yoursite.com/admin/faq/install</code>

# Routes
 - GET: /faq
 - GET: /admin/faq
