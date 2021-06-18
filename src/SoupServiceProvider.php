<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SoupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Do I need to do this
        $this->app->make('gregorycoleman\Soup\Soup');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }
}