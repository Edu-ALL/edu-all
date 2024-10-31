<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubNavbar extends Component
{
    public $active;
    public $menu;
    public $title;
    public $stringLimit;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active = null, $menu = [], $title = "", $stringLimit = 20)
    {
        $this->active = $active;
        $this->menu = $menu;
        $this->title = $title;
        $this->stringLimit = $stringLimit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-navbar');
    }
}

