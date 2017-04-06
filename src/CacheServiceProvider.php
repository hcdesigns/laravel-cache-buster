<?php

namespace Hcdesigns\LaravelCacheBuster;

use Route;
use Illuminate\Support\ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('cache', 'App\Services\CacheService');

        $config = __DIR__ . '/../config/cache-buster.php';
        $this->mergeConfigFrom($config, 'cache-buster');

        $this->publishes([__DIR__ . '/../config/cache-buster.php' => config_path('cache-buster.php')], 'config');
    }
}
