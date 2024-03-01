<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Applications;
use App\Models\JobApplication;
use App\Models\JobApplications;
use App\Models\JobsAvailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::denies('for-applicants')){
            abort(403);
        }
        return view('applicant-dashboard');
    }

    public function detail($id)
    {

        $job = JobsAvailable::where([
            'id' => $id,
            ])->first();

        return view('job-details', ['job' => $job]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = JobsAvailable::findOrFail($request->input('job_id'));

        $application = JobApplications::where('user_id', Auth::user()->id)->first();

        if($application == null){
            $application = new JobApplications;
 
            $application->job_id = $job->id;

            $application->user_id = Auth::user()->id;

            $application->applied_date = now();
    
            $application->save();

            $message = 'Successfully Applied';
        }
        else{
            $message = 'You have an existing application.';
        }

        return redirect()->route('jobs-available')->with('message', $message);
    }

    public function application()
    {
        $application = JobApplications::where('user_id', Auth::user()->id)->first();

        if($application == null){
            abort(404);
        }
        $job = JobsAvailable::where('id', $application->job_id)->first();
        return view('livewire.application-section', [
            'application'=> $application,
            'job' => $job
        ]);
    }

    public function guest_application(Request $request){
        $job = JobsAvailable::findOrFail($request->input('job_id'));
        
        return view('livewire.app-profile', [
            'job' =>$job
        ]);

    }

    public function apply(Request $request){

        /**validationns: request->validate([
         * 'file'=>'required|mimes:pdf,doc'
         * ]);
         * 
         */
        
        if( $request -> has('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = ('uploads\file');
            $file->move($path, $filename);
        };

        Applications::create([
            'job_id' => request('job_id'),
            'name' => request('name'),
            'email' => request('email'),
            'file'=> $path.$filename,
            'contact_number' => request('number'),
        ]);

        
        $message = 'Successfully Applied';

        return redirect()->route('guest-jobs')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}