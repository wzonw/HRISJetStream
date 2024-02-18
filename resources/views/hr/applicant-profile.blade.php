<x-admin-layout>
    <div class="ml-10">
        <div class="w-[1100px] h-14 mt-5 bg-indigo-800 flex items-center">
            <p class="ml-5 text-white text-3xl font-bold font-inter">Applicant List</p>
        </div>
        <div class="">
            <livewire:app-profile />
        </div>
        <div class="mt-36 ml-10">
            <div class="flex space-x-1">
                <div>
                    <div class="w-80 h-10 bg-yellow-600 rounded shadow">
                        <p class="text-center text-white text-3xl font-semibold font-">
                            About
                        </p>
                    </div>
                    <div class="w-80 h-56 border-l border-r border-b border-black">
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Full Name:
                            </p>
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p> 
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Gender:
                            </p>
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p>                   
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Date of Birth:
                            </p>
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p>
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Age:
                            </p> 
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p> 
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Place of Birth:
                            </p> 
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p> 
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Nationality:
                            </p> 
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p> 
                        </div>
                        <div class="flex space-x-3">
                            <p class="w-32 text-indigo-800 text-base text-right font-medium font-inter leading-loose">
                                Civil Status:
                            </p> 
                            <p class="w-32 min-h-max text-black text-base font-medium font-inter leading-loose">
                                
                            </p> 
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-80 h-10 bg-indigo-900 rounded shadow">
                        <p class="text-center text-white text-3xl font-semibold font-">
                            Documents
                        </p>
                    </div>
                    <div class="w-80 h-56 border-l border-r border-b border-black">
                        <table class="ml-4 w-72 bg-white shadow border-black border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
                            <thead class="bg-white h-2"></thead>
                            <tbody>
                                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                                    <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                                        PhineaseFlynn-Resume.pdf
                                    </th>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                                    <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                                        text
                                    </th>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 border-b dark:border-black">
                                    <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                                        text
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="w-80 h-10 bg-yellow-600 rounded shadow">
                        <p class="text-center text-white text-3xl font-semibold font-">
                            {{ 'Career(s) Applied' }}
                        </p>
                    </div>
                    <div class="w-80 h-56 border-l border-r border-b border-black flex justify-center space-x-2">

                    </div>
                </div>
            </div>
        </div>  
    </div>
</x-admin-layout>