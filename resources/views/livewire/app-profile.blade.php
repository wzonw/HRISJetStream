<x-guest-layout>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <livewire:job-applicant-header />
    <div class="flex justify-center space-x-10 my-5">
        <div>
            <div class="w-[670px]">
                @if ($job->status == 'COS/JO')
                <p class="min-w-max h-8 text-indigo-800 text-2xl text-left font-bold font-inter">
                    Part-Time {{ $job->job_name}}
                </p>
                @else
                <p class="min-w-max h-8 text-indigo-800 text-2xl text-left font-bold font-inter">
                    Full-Time {{ $job->job_name}}
                </p>
                @endif
                
                <p class="min-w-max h-8 text-indigo-800 text-lg text-left font-normal font-inter">
                    {{ $job->college}}
                </p>
                <p class="min-w-max h-8 text-black text-base text-left font-normal font-inter">
                    Department: {{ $job->dept}}
                </p>
            </div>

            <div class="w-[670px] min-h-max text-black text-base text-left font-normal font-inter">
                <p class="ml-5">
                    Php {{$job->salary}}
                 </p>

                <p class="text-wrap mt-5 font-bold">Job Details</p>
                <p class="text-justify">{!! nl2br($job->job_desc) !!}</p>

                <br>
                <p>Deadline: {{ $job->deadline }}</p>
            </div>
        </div>
        <div class="w-[500px] h-full bg-slate-100 rounded-xl py-3 items-center">
            <p class="w-26 h-9 text-indigo-800 text-[28px] text-center font-bold font-inter">Submit Application</p>
            <form action="{{route('guest-application-success', $job->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-3 mx-12 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="job_id" value="{{ __('Job ID') }}" />
                    <x-input id="job_id" class="block mt-1 w-72 " type="text" name="job_id" value="{{$job->id}}"/>
                </div>

                <div class="mt-4 mx-12 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="name" value="{{ __('Full Name') }}" />
                    <x-input id="name" class="block mt-1 w-72 " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4 mx-12 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-72" type="email" name="email" :value="old('email')" required  />
                </div>

                <div class="mt-4 mx-12 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="number" value="{{ __('Contact Number') }}" />
                    <x-input id="number" class="block mt-1 w-72" type="tel" name="number" :value="old('number')" required />
                </div>

                <div class="mt-4 mx-12 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="file" value="{{ __('Upload File(s)') }}" />
                    <x-input id="file" class="block mt-1 w-72" type="file" name="file" required />
                </div>
                
                <div class="w-[500px] mt-4 flex justify-center min-h-max text-black text-base text-left font-normal font-inter">
                    <x-button-gold class="w-28">
                        Apply
                    </x-button-gold>
                   <!-- <a href="guess jobs route" class="ms-4 px-4 inline-flex items-center justify-center py-2 bg-blue-900 border border-transparent rounded-md font-semibold text-xs text-white text-center font-inter uppercase">
                        back
                    </a>-->
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>