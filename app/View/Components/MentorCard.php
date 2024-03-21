<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MentorCard extends Component
{

    public $mentor;
    public $disabled_btn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mentor, $disabledBtn = false)
    {
        $this->mentor = $mentor;
        $this->disabled_btn = $disabledBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mentor-card');
    }
}
