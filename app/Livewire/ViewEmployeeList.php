<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\JobsAvailable;
use Livewire\Component;

class ViewEmployeeList extends Component
{
    public $employees;
    public function render()
    {
        $this->employees=JobsAvailable::all();
        return view('livewire.view-employee-list');
    }
}
