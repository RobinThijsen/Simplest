<?php

namespace Simplest\Views\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $name;
    public string $display;

    public function __construct(string $name, string $display = 'block')
    {
        $this->name = $name;
        $this->display = $display;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('simplest::components.modal');
    }
}
