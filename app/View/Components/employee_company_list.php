<?php

namespace App\View\Components;

use Illuminate\View\Component;

class employee_company_list extends Component
{
    public $list;
    public $companies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($list,$companies)
    {
        $this->list = $list;
        $this->companies = $companies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.employee_company_list');
    }
}
