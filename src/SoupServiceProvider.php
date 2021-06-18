<?php namespace gregorycoleman/Soup;

use Illuminate\Support\ServiceProvider;

class SoupServiceProvider extends ServiceProvider
{

    public function boot()
    {
        
    }

    
    public function register()
    {
        $this->app->make('gregorycoleman\Soup\Soup');
    }

} 
