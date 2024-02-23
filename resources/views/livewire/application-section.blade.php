<x-app-layout>
    <div class="font-inter">
        {{-- Stop trying to control. --}}
        <h1 class="text-indigo-800 text-lg font-bold font-inter">Application Details</h1>
        @if(Auth::user()->id > 0)
        <div>
            <p>Applicant ID: {{ Auth::user()->id }}</p>
            <p>Application ID: {{$application->id}}</p> <br>
            <p class="font-bold">{{$job->job_name}} - {{$job->college}}</p>
            <p>Dept: {{$job->dept}}</p>
            <p>Status: {{$job->status}}</p>
            <p>Date applied: {{$application->applied_date}}</p>
        </div>
        @endif
    </div>
</x-app-layout>