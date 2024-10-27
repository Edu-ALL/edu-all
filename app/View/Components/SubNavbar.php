<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubNavbar extends Component
{
    public $active;
    public $menu;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active = null, $menu = [], $title = "")
    {
        $this->active = $active;
        $this->menu = $menu;
        $this->title = $title;
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

