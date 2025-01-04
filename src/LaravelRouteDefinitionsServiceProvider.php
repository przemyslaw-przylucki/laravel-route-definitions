<?php

namespace SaasLaravel\LaravelRouteDefinitions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SaasLaravel\LaravelRouteDefinitions\Commands\LaravelRouteDefinitionsCommand;

class LaravelRouteDefinitionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-route-definitions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_route_definitions_table')
            ->hasCommand(LaravelRouteDefinitionsCommand::class);
    }
}
