<?php

namespace App\View\Components;

use Illuminate\View\Component;

class companyModalWindow extends Component
{
    public $id;
    public $name;
    public $email;
    public $website;
    public $logo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$email,$website,$logo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->website = $website;
        $this->logo = $logo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.companyModalWindow');
    }
}