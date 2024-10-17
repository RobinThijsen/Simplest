<?php

namespace Simplest;

use Livewire\Component;

class Simplest extends Component
{
    public function dispatchEvent($event, $name)
    {
        $this->dispatch($event, name: $name);
    }
}
