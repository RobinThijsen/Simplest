<?php

namespace Simplify\Views\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $name;

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('simplify::components.modal');
    }
}
