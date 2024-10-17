<?php

namespace Simplest\Features;

use Simplest\Simplest;

class ModalFeature extends Simplest
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
