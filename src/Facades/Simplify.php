<?php

namespace Simplify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Simplify
 */
class Simplify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Simplify\Simplify::class;
    }
}
