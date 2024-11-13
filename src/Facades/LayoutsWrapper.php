<?php

namespace Fuelviews\LayoutsWrapper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fuelviews\LayoutsWrapper\LayoutsWrapper
 */
class LayoutsWrapper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fuelviews\LayoutsWrapper\LayoutsWrapper::class;
    }
}
