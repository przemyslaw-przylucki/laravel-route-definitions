<?php

namespace SaasLaravel\LaravelRouteDefinitions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SaasLaravel\LaravelRouteDefinitions\LaravelRouteDefinitions
 */
class LaravelRouteDefinitions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SaasLaravel\LaravelRouteDefinitions\LaravelRouteDefinitions::class;
    }
}
