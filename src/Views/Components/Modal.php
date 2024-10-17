<?php

namespace Simplest\Views\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $name;

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('simplest::components.modal');
    }
}
