<?php

namespace Simplest\Views\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('simplest::components.modal');
    }
}
