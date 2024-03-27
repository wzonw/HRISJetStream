<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\JobApplication;
use App\Models\JobsAvailable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $applicant = Application::where('id', Auth::user()->application_id)->first();
        $applicant->file = json_decode($applicant->file);
        return view('applicant-dashboard', ['applicant'=>$applicant]);
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
        
    }

    public function application()
    {
        $application = Application::where('id', Auth::user()->application_id)->first();
        $job = JobsAvailable::where('id', $application->job_id)->first();
        return view('livewire.application-section', [
            'application'=>$application,
            'job'=>$job,
        ]);
    }

    public function guest_application(Request $request){
        $job = JobsAvailable::findOrFail($request->input('job_id'));
        
        return view('livewire.app-profile', [
            'job' =>$job
        ]);

    }

    public function g($id){
        $job = JobsAvailable::findOrFail($id);
        
        return view('livewire.app-profile', [
            'job' =>$job
        ]);

    }

    public function apply(Request $request){
        
        $request->validate([
            'job_id'=> ['required', 'numeric'], //only numbers
            'name'=> ['required', 'min:5', 'max:50', 'regex:/^[a-zA-Z \-\.]*$/'], //alpha, space, -, .
            'email'=> ['required', 'regex:/^.+@.+\.com$/'], //must have @ and .com
            'number'=> ['required', 'regex:/^(09\d{9}|\+639\d{9})+$/', 'min:11', 'max:13'], //"09,9digits", "+63,9digits"
            'file.*'=> ['required', 'mimes:pdf', 'max:1024'], //only accept pdf w/ max size 1mb
        ]);

        //checks if there's an ongoing application via email/number
        $application = Application::orderBy('created_at', 'desc')
                                    ->where('email', $request->email)
                                    ->orWhere('contact_number', $request->number)
                                    ->where('remarks', null)->first();
        
        $files = [];
        if($application == null){
            if( $request -> has('file')){
                foreach($request->file('file') as $f)
                {
                    $filename = Str::of($request->input('name'))->remove(' ');
                    $filename = $filename . '_' . $f->getClientOriginalName();
                    $path = ('uploads/file');
                    $f->move($path, $filename);
                    $files[] = $filename;
                }
                
                $upload = json_encode($files); //encodes array, must be decoded when displayed
            };
            Application::create([
                'job_id' => $request->input('job_id'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'contact_number' => $request->input('number'),
                'file'=> $upload,
            ]);

            $message = 'Successfully Applied!';
        }
        else{
            $message = 'You have an ongoing application with id: '.''.$application->id;
        }

        return redirect()->route('guest-application-get', ['id'=>$request->job_id])->with('message', $message);
    }

    public function add_file(Request $request){
        $request->validate([
            'file.*'=> ['required', 'mimes:pdf', 'max:1024'], //only accept pdf w/ max size 1mb
        ]);

        $applicant = Application::where('id', Auth::user()->application_id)->first();
        $applicant->file = json_decode($applicant->file); // convert string to array

        $files = [];
        if( $request -> has('file')){
            foreach($applicant->file as $value)
                {
                    $files[] = $value; // insert old files in array files[]
                }
            foreach($request->file('file') as $f)
                {
                    $filename = Str::of($applicant->name)->remove(' ');
                    $filename = $filename . '_' . $f->getClientOriginalName();
                    $path = ('uploads/file');
                    $f->move($path, $filename);
                    $files[] = $filename; // insert new upload file in array files[]
                }
            
            $upload = json_encode($files); // convert array to string
            $applicant->file = $upload; // update table, column file...
            $applicant->save();

            $message = "Successfully added file(s)";
        }
        else{
            $message = 'Error in uploading file.';
        }

        return redirect()->route('applicant.dashboard.index')->with('message', $message);
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
