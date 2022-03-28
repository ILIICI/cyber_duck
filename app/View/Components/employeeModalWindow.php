<?php

namespace App\View\Components;

use Illuminate\View\Component;

class employeeModalWindow extends Component
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$firstname,$lastname,$email,$phone)
    {
        $this->id= $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.employeeModalWindow');
    }
}