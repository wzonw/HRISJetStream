<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class ViewEmployeeProfile extends Component
{
    public function render()
    {
        $employees=Employee::paginate(3);
        return view('livewire.view-employee-profile', [
            'employees'=> $employees
        ]);
    }
}
