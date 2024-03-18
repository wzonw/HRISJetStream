<x-admin-layout>
    <div class="pt-2 space-y-10">
        <!--Profile-->
        <div class="w-screen inline-flex">
            <div class="relative opacity-30">
                <img class="relative h-36 w-screen object-cover object-top" src="https://plm.edu.ph/images/banners/hero-banner-facade.jpg" />
            </div>
            <div class="absolute px-8 py-14">
                <!--Profile-->
                <div class="justify-center items-center inline-flex space-x-3">
                    <!--profile pic-->
                    <div class="inline-flex justify-center items-center">
                        <div class="relative w-40 h-40 bg-gray-100 rounded-full"></div>
                        <div class="absolute w-36 h-36 flex-col justify-center items-center inline-flex">
                            <img class="w-36 h-36" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Windows_10_Default_Profile_Picture.svg/1024px-Windows_10_Default_Profile_Picture.svg.png" />
                        </div>
                    </div>
                    <div class="inline-flex pt-16">
                        <!-- Applicant name, status button -->
                        <div class="items-baseline">
                            <p class="w-fit min-h-max  text-indigo-800 text-3xl font-bold font-inter">
                                {{ $applicant->name. " ". $applicant->surname }}
                            </p>
                            <p class="w-20 h-5 text-neutral-950 text-opacity-50 text-base font-normal font-inter">
                                Applicant
                            </p>
                        </div>

                        <!-- applicant details(number, email, loc) -->
                        <div class="ml-5 space-x-6">
                            <div class="ml-3 items-center inline-flex space-x-3">
                                <img class="w-6 h-5 relative" src="https://uxwing.com/wp-content/themes/uxwing/download/communication-chat-call/email-envelop-open-icon.png">
                                <p class="text-left text-black text-base font-semibold font-inter leading-10">
                                    {{ $applicant->email }}
                                </p>
                            </div>
                            <div class="ml-3 items-center inline-flex space-x-3">
                                <img class="w-6 h-5 relative" src="https://cdn-icons-png.flaticon.com/512/126/126523.png">
                                <p class="text-left text-black text-base font-semibold font-inter leading-10">
                                    {{ $applicant->contact_number }}
                                </p>
                            </div>
                            <div class="ml-3 items-center inline-flex space-x-3">
                                <img class="w-6 h-5 relative" src="https://cdn-icons-png.flaticon.com/512/535/535239.png">
                                <p class="text-left text-black text-base font-semibold font-inter leading-10">
                                    {{ $applicant->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="absolute end-5 pt-24">
                <p
                class="w-32 h-9 inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-400 rounded-md font-medium text-sm 
                        text-gray-400 font-inter">
                    Status
                </p>
            </div>
        </div>

        <!-- File Cabinet -->
        <div class="pt-10 px-8 inline-flex space-x-16">
            <!-- file cabinet -->
<div>
    <div class="w-[729px] h-16 bg-white shadow border-l border-r border-t border-black inline-flex">
        <p class="w-52 h-7 pt-3 pl-5 text-indigo-800 text-3xl font-bold font-inter">File Cabinet</p> 
    </div>
    <div class="absolute mt-[-48px] ml-[550px]">
        <a href="#" class="w-10 h-7 pt-4 text-black text-base font-medium font-inter underline leading-loose">Add</a>
        <a href="#" class="w-10 h-7 pt-4 pl-12 text-black text-base font-medium font-inter underline leading-loose">Delete</a>
    </div>
    <table class="w-[729px] bg-white shadow border-black border-l border-r text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
        <thead class="h-7 text-sm text-gray-700 uppercase bg-slate-200 dark:bg-slate-200 dark:text-gray-700">
            <tr>
                <th scope="col" class="px-6 py-2 w-80">
                    Description
                </th>
                <th scope="col" class="px-6 py-2">
                    File Name
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                    Resume
                </th>       
                <td class="px-6 py-3">
                    <a href="{{ route('view-file', ['id' => $applicant->id]) }}">{{ $applicant->file }} </a>
                </td>
            </tr>
            <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                    text
                </th>
                <td class="px-6 py-3">
                    text
                </td>
            </tr>
            <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 border-b dark:border-black">
                <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                    text
                </th>
                <td class="px-6 py-3">
                    text
                </td>
            </tr>
        </tbody>
    </table>
</div>
        </div>
    </div>
</x-admin-layout>