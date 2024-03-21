<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestimonialCard extends Component
{
    public $testi;
    public $disabled_btn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($testimonial, $disabledBtn = false)
    {
        $this->testi = $testimonial;
        $this->disabled_btn = $disabledBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial-card');
    }
}
