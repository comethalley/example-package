<?php

namespace Examplepackage\ExamplePackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Examplepackage\ExamplePackage\Commands\ExamplePackageCommand;

class ExamplePackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('example-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_example-package_table')
            ->hasCommand(ExamplePackageCommand::class);
    }
}
