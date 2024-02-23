<x-guest-layout>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <livewire:job-applicant-header />
    <div class="h-[650px] flex justify-center items-center space-x-9">
        <div class="">
            <div class="w-[670px] min-h-max">
                <div class="">
                    @if ($job->status == 'Part-Time')
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
            </div>
            <div class="w-[670px]">
                <div class="min-h-max text-black text-base text-left font-normal font-inter">
                    @if ($job->salary[1] == '.')
                    <p class="">Salary: P0</p>
                    @elseif ($job->salary[5] == '.')
                    <p class="">Salary: P{{$job->salary[0]}}{{$job->salary[1]}},
                        {{$job->salary[2]}}{{$job->salary[3]}}{{$job->salary[4]}}</p>
                    @elseif ($job->salary[6] == '.')
                    <p class="">Salary: P{{$job->salary[0]}}{{$job->salary[1]}}{{$job->salary[2]}},
                            {{$job->salary[3]}}{{$job->salary[4]}}{{$job->salary[5]}}</p>
                    @endif
    
                    <p class="text-wrap mt-5">Description:</p>
                    <p class="text-justify">{{ $job->job_desc }}</p>
    
                    <br>
                    <p>Deadline: {{ $job->deadline }}</p>
                </div>
            </div>
        </div>
        <div class="w-[570px] bg-slate-100 rounded-xl py-3">
            <form class="">
                @csrf
                <p class="w-26 h-9 text-indigo-800 text-[28px] text-center font-bold font-inter">Submit Application</p>
                <div class="mt-3 mx-10 inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="name" value="{{ __('First Name') }}" />
                    <x-input id="name" class="block mt-1 w-88 " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
            
                <div class="mt-4 mx-10  inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="middle_name" value="{{ __('Middle Name') }}" />
                    <x-input id="middle_name" class="block mt-1 w-88" type="text" name="middle_name" :value="old('middle_name')" />
                </div>
    
                <div class="mt-3 mx-10  inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="surname" value="{{ __('Surname') }}" />
                    <x-input id="surname" type="text" class="block mt-1 w-88" name="surname" required />
                </div>

                <div class="mt-4 mx-10  inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="email" value="{{ __('Contact Number') }}" />
                    <x-input id="email" class="block mt-1 w-88" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
    
                <div class="mt-4 mx-10  inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-88" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
    
                <div class="mt-4 mx-10  inline-flex justify-center items-center space-x-2">
                    <x-label class="w-24" for="password" value="{{ __('Upload Resume') }}" />
                    <x-input id="password" class="block mt-1 w-88" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
    
                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
    
                <div class="flex justify-center pt-4">
                    <x-button-blue class="ms-4 w-40 h-10">
                        {{ __('Create') }}
                    </x-button-blue>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
