<?php

namespace Simplest\Views\Components;

use Illuminate\View\Component;

class ModalTrigger extends Component
{
    public string $name;
    public string $title;
    public string $class;

    public function __construct(string $name, string $title, string $class = '')
    {
        $this->name = $name;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('simplest::components.modal-trigger');
    }
}
