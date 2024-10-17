<?php

namespace Simplest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Simplest
 */
class Simplest extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Simplest\Simplest::class;
    }
}
