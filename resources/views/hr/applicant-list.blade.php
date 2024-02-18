<x-admin-layout>
    <div class=" ml-10">
        <div class="w-[560px] h-14 mt-5 bg-indigo-800 flex items-center">
            <p class="ml-5 text-white text-3xl font-bold font-inter">Applicant List</p>
        </div>

        <div class="mt-10 w-[1014px] inline-flex items-center">
            <p class="mx-7 text-black text-sm font-semibold font-inter">Name</p>
            <div class="ml-36">
                <p class="mx-7 text-black text-sm font-semibold font-inter">Position</p>
            </div>
            <div class="ml-36">
                <p class="mx-7 text-black text-sm font-semibold font-inter">Department</p>
            </div>
            <div class="ml-36">
                <p class="mx-7 text-black text-sm font-semibold font-inter">Status</p>
            </div>
        </div>

        <!-- Applicant Table -->
        <table class="w-[1014px] bg-white shadow border-black border-b text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                    <th scope="row" class="w-56 px-6 py-3 font-medium  whitespace-nowrap">
                        <a href="{{ route('applicant-profile') }}">Phinease Flynn</a>
                    </th>
                    <td class="px-6 py-3">
                        Position
                    </td>
                    <td class="px-6 py-3">
                        Department
                    </td>
                    <td class="px-6 py-3">
                        Status
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                    <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                        <a href="{{ route('applicant-list') }}">text</a>
                    </th>
                    <td class="px-6 py-3">
                        text
                    </td>
                    <td class="px-6 py-3">
                        text
                    </td>
                    <td class="px-6 py-3">
                        text
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 border-b dark:border-black">
                    <th scope="row" class="px-6 py-3 font-medium  whitespace-nowrap">
                        <a href="{{ route('applicant-list') }}">text</a>
                    </th>
                    <td class="px-6 py-3">
                        text
                    </td>
                    <td class="px-6 py-3">
                        text
                    </td>
                    <td class="px-6 py-3">
                        text
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</x-admin-layout>