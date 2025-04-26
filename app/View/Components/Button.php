<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $title;
    public $type;
    public $href;
    public $bgColor;
    public $color;
    public $fontSize;
    public $target;
    public $paddingX;
    public $paddingY;
    public $marginTop;

    public $isRounded;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = "primary", $href = "#", $bgColor = null, $color = null, $fontSize = null, $target = null, $paddingX = null, $paddingY = null, $marginTop = null, $isRounded = false)
    {
        //
        $this->title = $title;
        $this->type = $type;
        $this->href = $href;
        $this->bgColor = $bgColor;
        $this->color = $color;
        $this->fontSize = $fontSize;
        $this->target = $target;
        $this->paddingX = $paddingX;
        $this->paddingY = $paddingY;
        $this->marginTop = $marginTop;
        $this->isRounded = $isRounded;
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

