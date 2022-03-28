<?php

namespace App\View\Components;

use App\Models\Company;
use Illuminate\View\Component;

class employee_companyModalWindow extends Component
{
    public $id;
    public $firstname;
    public $lastname;
    public $currentCompany;
    public $companies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$firstname,$lastname,$currentCompany,$companies)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->currentCompany = $currentCompany;
        $this->companies = $companies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.employee_companyModalWindow');
    }
}