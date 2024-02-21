<?php

namespace App\Http\Controllers;

use App\Livewire\JobsTable;
use App\Models\JobsAvailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobsAvailableController extends Controller
{
    public function index()
    {
        if(Gate::denies('for-applicants')){
            abort(403);
        }
        
        return view('jobs-available');
    }

       public function search(Request $request)
     {
        $status = $request->input('status');
        $job_name = $request -> input('job_name');
        $college = $request -> input('college');

        $jobs = JobsAvailable::where('status', 'LIKE', '%'.$status.'%')
        ->where('job_name','LIKE','%' .$job_name.'%')
        ->where('college','LIKE','%' .$college.'%')
        ->paginate(50);  
     
        return view('livewire.jobs-table', compact('jobs'));
     }

}
