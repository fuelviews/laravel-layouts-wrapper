<?php

namespace Fuelviews\LayoutWrapper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fuelviews\LayoutWrapper\LayoutWrapper
 */
class LayoutWrapper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fuelviews\LayoutWrapper\LayoutWrapper::class;
    }
}
