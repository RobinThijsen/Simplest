<?php

namespace VendorName\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Simplify
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VendorName\Skeleton\Simplify::class;
    }
}
