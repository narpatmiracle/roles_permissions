<?php

namespace Miracle\RolesPermission;

use Illuminate\Support\ServiceProvider;

class RolesPermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         // Publish the migrations
         $this->publishes([
            __DIR__ . '/Database/Migrations/' => database_path('migrations')
        ], 'migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Load views if any
        $this->loadViewsFrom(__DIR__ . '/Views', 'rolespermissions');
    }
}
