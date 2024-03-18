<?php

namespace App\Http\Controllers\Recruitment;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Applications;
use App\Models\JobsAvailable;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class RecruitmentController extends Controller
{
    public function index()
    {
        if(Gate::denies('for-recruitment')){
            abort(403);
        }

        $NumOfApplicants = Applications::all();
        $NumOfApplicants = $NumOfApplicants->count();

        $PTJobs = JobsAvailable::where('status', 'COS/JO')->get();
        $FTJobs = JobsAvailable::where('status', 'Plantilla')->get();
        return view('hr.dashboard.index', [
            "num_applicants" => $NumOfApplicants,
            "part_time" => $PTJobs,
            "full_time" => $FTJobs,
        ]);
    }

    public function applicant_profile($id)
    {
        $applicant = Applications::where('id', $id)->first();

        return view('hr.view-applicant-profile', [
            'applicant' => $applicant,
        ]);
    }

    public function view_file($id)
    {   
        $data = Applications::find($id);

        return view('livewire.view-file', compact('data'));
    }

    public function join_data(){
        $data = Applications::join('jobs_availables', 'jobs_availables.id', '=', 'applications.job_id')
                            ->get([
                                'applications.id',
                                'applications.name',
                                'applications.contact_number',
                                'jobs_availables.job_name', 
                                'jobs_availables.college', 
                                'jobs_availables.status'
                            ]);
        
        return view('hr.applicant-list', compact('data'));

    }

    public function job_posting(){
        
        $jobs_even = DB::table('jobs_availables')
                     ->select(DB::raw('*'))
                     ->whereRaw('MOD(id, 2) = 0')
                     ->get();

        $jobs_odd = DB::table('jobs_availables')
                     ->select(DB::raw('*'))
                     ->whereRaw('MOD(id, 2) = 1')
                     ->get();
        return view('hr.job-posting', [
            "jobs_e" => $jobs_even,
            "jobs_o" => $jobs_odd,
        ]);
    }

    public function job_post(){
        JobsAvailable::create([
            'job_name' => request('position'),
            'job_desc' => request('description'),
            'status' => request('status'),
            'college' => request('college'),
            'dept' => request('dept'),
            'salary' => request('salary'),
            'deadline' => request('deadline'),
        ]);

        
        $message = 'Successfully added a Job!';

        return redirect()->route('job-posting')->with('message', $message);
    }
}