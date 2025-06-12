<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadcrumbSchema extends Component
{
    public $breadcrumbs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($breadcrumbs = [])
    {
        $this->breadcrumbs = $breadcrumbs ?: [
            ['name' => 'Home', 'url' => url('/')],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb-schema');
    }
}
