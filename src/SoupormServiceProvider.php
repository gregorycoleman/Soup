<?php

namespace Gregorycoleman\Souporm;

use Gregorycoleman\Souporm\Commands\SoupormCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SoupormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('souporm')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_souporm_table')
            ->hasCommand(SoupormCommand::class);
    }
}
