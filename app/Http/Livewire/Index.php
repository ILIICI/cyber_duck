<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class Index extends Component
{
    public $search;
    use WithPagination;

    public function render()
    {
        return view('livewire.index',['rows' => $this->searchFilter($this->search)]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function searchFilter($word)
    {
        return Employee::where('first_name', 'LIKE', "%$word%")->orWhere('last_name',  'LIKE', "%$word%")->simplePaginate(10);
    }
}
