<x-admin-layout>
    <div class=" ml-10">
        <div class="w-[560px] h-14 mt-5 bg-indigo-800 flex items-center">
            <p class="ml-5 text-white text-3xl font-bold font-inter">Applicant List</p>
        </div>

        <div class="mt-10 w-[1014px] inline-flex items-center">
            <p class="mx-2 text-indigo-800 text-sm font-semibold font-inter">ID</p>
            <p class="ml-8 text-indigo-800 text-sm font-semibold font-inter">Name</p>
            <p class="ml-[170px]  text-indigo-800 text-sm font-semibold font-inter">Position</p>
            <p class="ml-[230px] text-indigo-800 text-sm font-semibold font-inter">Place of Assignment</p>
            <p class="ml-[130px] text-indigo-800 text-sm font-semibold font-inter">Status</p>
                

           
        </div>

        <!-- Employee Table -->
        <table class="w-[1014px] bg-white shadow border-black border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
            <tbody>
                @foreach ($data as $applicant)
                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                    <th scope="row" class="w-5 pl-2">
                        {{$applicant->id}}
                    </th>
                    <td class="w-56 pl-10  py-3 font-medium  whitespace-nowrap">
                        <a href="{{ route('view-applicant-profile', $applicant->id) }}">{{$applicant->name}}</a>
                    </td>
                    <td class="w-64 pl-6 py-3">
                        {{$applicant->job_name}}
                    </td>
                    <td class="w-80 pl-[54px] py-3">
                        {{$applicant->college}}
                    </td>
                    <td class="pl-1 py-3">
                        {{$applicant->status}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>