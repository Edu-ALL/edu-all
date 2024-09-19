<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CollaborateCard extends Component
{
    public $title;
    public $image;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image, $description)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.collaborate-card');
    }
}
