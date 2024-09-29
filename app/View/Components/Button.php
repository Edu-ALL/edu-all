<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $title;
    public $type;
    public $href;
    public $bgColor;
    public $target;
    public $paddingX;
    public $paddingY;
    public $marginTop;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = "primary", $href = "#", $bgColor = null, $target = null, $paddingX = null, $paddingY = null, $marginTop = null)
    {
        //
        $this->title = $title;
        $this->type = $type;
        $this->href = $href;
        $this->bgColor = $bgColor;
        $this->target = $target;
        $this->paddingX = $paddingX;
        $this->paddingY = $paddingY;
        $this->marginTop = $marginTop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}

