<?php

namespace Gregorycoleman\Souporm\Tests ;

use Gregorycoleman\Souporm\SoupormServiceProvider ;
use Illuminate\Database\Eloquent\Factories\Factory ;
use Orchestra\Testbench\TestCase as Orchestra ;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp() ;

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Gregorycoleman\\Souporm\\Database\\Factories\\'.class_basename($modelName).'Factory'
        ) ;
    }

    protected function getPackageProviders($app)
    {
        return [
            SoupormServiceProvider::class,
        ] ;
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing') ;

        /*
        include_once __DIR__.'/../database/migrations/create_souporm_table.php.stub' ;
        (new \CreatePackageTable())->up() ;
        */
    }
}
