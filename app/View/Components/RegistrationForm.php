<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RegistrationForm extends Component
{
    public $isButton;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isButton = false)
    {
        $this->isButton = $isButton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.registration-form');
    }
}
