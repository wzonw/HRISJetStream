<?php

namespace App\Livewire;

use App\Models\JobsAvailable;
use Livewire\Component;
use Livewire\WithPagination;

class JobPosting extends Component
{
    use WithPagination;
    public function render()
    {
        $jobs=JobsAvailable::paginate(3);
        return view('hr.job-posting', [
            'jobs'=> $jobs
        ]);
    }
}
