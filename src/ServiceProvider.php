<?php namespace Taskforcedev\Faq;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->config();
        $this->views();
        $this->routes();
    }

    private function config()
    {
        $this->publishes([
            __DIR__.'/config/laravel-faq.php' => config_path('laravel-faq.php'),
        ], 'faq-config');

        $this->mergeConfigFrom(
            __DIR__.'/config/laravel-faq.php',
            'laravel-faq'
        );

        // Merge overridden Config
        $published = __DIR__.'/../../../../config/laravel-faq.php';
        if (file_exists($published)) {
            $this->mergeConfigFrom(
                $published,
                'laravel-faq'
            );
        }
    }

    private function views()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'laravel-faq');
    }

    private function routes()
    {
        require __DIR__ . '/Http/routes.php';
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        return [];
    }
}
