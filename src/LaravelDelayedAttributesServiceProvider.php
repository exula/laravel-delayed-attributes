<?php

namespace Exula\LaravelDelayedAttributes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Exula\LaravelDelayedAttributes\Commands\LaravelDelayedAttributesCommand;

class LaravelDelayedAttributesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-delayed-attributes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-delayed-attributes_table')
            ->hasCommand(LaravelDelayedAttributesCommand::class);
    }
}
