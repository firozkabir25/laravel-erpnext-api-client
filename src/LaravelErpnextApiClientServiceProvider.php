<?php

namespace Firoz\LaravelErpnextApiClient;

use Illuminate\Support\ServiceProvider;
use Firoz\LaravelErpnextApiClient\Configuration\ConfigurationInterface;
use Firoz\LaravelErpnextApiClient\Configuration\LaravelConfiguration;

class LaravelErpnextApiClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-erpnext-api-client');
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-erpnext-api-client.php'),
        ], 'config'); 
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind(ConfigurationInterface::class, function () {
            return new LaravelConfiguration();
        });
        $this->app->bind(LaravelErpnextApiClient::class, function () {
            return new LaravelErpnextApiClient($this->app->make(ConfigurationInterface::class));
        });
        $this->app->alias(LaravelErpnextApiClient::class, 'laravel-erpnext-api-client');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-erpnext-api-client', function () {
            return new LaravelErpnextApiClient;
        });
    }
}
