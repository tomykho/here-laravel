<?php

namespace TomyKho\Here;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TomyKho\Here\Commands\HereCommand;

class HereServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('here-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_here-laravel_table')
            ->hasCommand(HereCommand::class);
    }
}
