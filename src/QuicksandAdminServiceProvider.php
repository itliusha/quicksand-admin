<?php
/**
 * @Author: itliusha
 * @Date: 2023/10/25
 * @E-mail: itliusha@qq.com
 */

namespace Itliusha\QuicksandAdmin;

use Illuminate\Support\ServiceProvider;

class QuicksandAdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'itliusha');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'itliusha');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) $this->bootForConsole();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/quicksandadmin.php', 'quicksandadmin');

        // Register the service the package provides.
        $this->app->singleton('quicksandadmin', function ($app) {
            return new QuicksandAdmin;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['quicksandadmin'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/quicksandadmin.php' => config_path('quicksandadmin.php'),
        ], 'quicksandadmin.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/itliusha'),
        ], 'quicksandadmin.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/itliusha'),
        ], 'quicksandadmin.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/itliusha'),
        ], 'quicksandadmin.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
