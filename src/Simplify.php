<?php

namespace Simplify;

use Livewire\Component;

class Simplify extends Component
{
    public function dispatchEvent($event, $name)
    {
        $this->dispatch($event, name: $name);
    }
}
