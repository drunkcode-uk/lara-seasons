<?php

namespace Drunkcode\LaraSeasons;

use Carbon\Carbon;
use Drunkcode\LaraSeasons\LaraSeasons;
use Illuminate\Support\ServiceProvider;

class LaraSeasonsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Load package assets
         */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-seasons');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('lara-seasons.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'lara-seasons');

        // Register the main class to use with the facade
        $this->app->singleton(LaraSeasons::class, function ($app) {
            return new LaraSeasons($app['config']->get('lara-seasons.seasons'), now());
        });
    }
}
