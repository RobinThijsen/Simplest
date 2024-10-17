<?php

namespace Simplify\Features;

use Simplify\Simplify;

class ModalFeature extends Simplify
{
    public static function open(string $name): void
    {
        parent::dispatch('open.modal', $name);
    }

    public static function close(string $name): void
    {
        parent::dispatch('close.modal', $name);
    }
}
