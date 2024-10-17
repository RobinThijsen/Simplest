<?php

namespace Simplify\Facades\Features;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void open(string $name)
 * @method static void close(string $name)
 *
 * @see \Simplify\Features\ModalFeature
 */
class Modal extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'modal-feature';
    }
}
