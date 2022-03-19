<?php

namespace Exula\LaravelDelayedAttributes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Exula\LaravelDelayedAttributes\LaravelDelayedAttributes
 */
class LaravelDelayedAttributes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-delayed-attributes';
    }
}
