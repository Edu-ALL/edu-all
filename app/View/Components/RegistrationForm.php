<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RegistrationForm extends Component
{
    public $isButton;
    public $programId;
    public $leadId;
    public $isHome;
    public $isPartner;
    public $buttonTitle;

    public $isAbsoluteStyle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isButton = false, $programId = 'AAUP', $leadId = 'LS001', $isHome = false, $isPartner=false, $isAbsoluteStyle = true, $buttonTitle = 'Submit')
    {
        $this->isButton = $isButton;
        $this->programId = $programId;
        $this->leadId = $leadId;
        $this->isHome = $isHome;
        $this->isPartner = $isPartner;
        $this->isAbsoluteStyle = $isAbsoluteStyle;
        $this->buttonTitle = $buttonTitle;
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
