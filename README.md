# FAQ Package
Laravel FAQ Package.

# Installation

To install the package first of all you should add the package to your projects composer.json

<code>"require": { "taskforcedev/faq": "1.*" }</code>

Then run <code>composer update</code>

Then add the service provider to your config/app.php

<code>'providers' => [
    ...
    'Taskforcedev\LaravelForum\ServiceProvider',
]</code>

Then publish the config

php artisan vendor:publish --provider="Taskforcedev\LaravelFaq\ServiceProvider" --tag="config"

Edit the config, in particular the layout to match your sites master layout.

Finally visit the installation route to run the migrations
<code>http://yoursite.com/admin/faq/install</code>

# Routes
 - GET: /faq
 - GET: /admin/faq
