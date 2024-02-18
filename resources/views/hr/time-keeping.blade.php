<x-admin-layout>
    <div class="mx-4 my-4 ">
        <div class="w-[1086px] h-[57px] relative">
            <div class="w-[1086px] h-[57px] left-0 top-0 absolute bg-indigo-800"></div>
            <div class="w-[330px] h-[33px] left-[17px] top-[15px] absolute text-white text-2xl font-bold font-inter">Daily Time Record</div>
        </div>
        <div class="my-5 flex justify-center">
            <p>Date:</p>
            <input type="date" class="ml-1 h-6">
            <div class="ml-3 w-20 h-6 bg-blue-600 rounded-[5px] flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sliders-horizontal">
                    <line x1="21" x2="14" y1="4" y2="4"/>
                    <line x1="10" x2="3" y1="4" y2="4"/>
                    <line x1="21" x2="12" y1="12" y2="12"/>
                    <line x1="8" x2="3" y1="12" y2="12"/>
                    <line x1="21" x2="16" y1="20" y2="20"/>
                    <line x1="12" x2="3" y1="20" y2="20"/>
                    <line x1="14" x2="14" y1="2" y2="6"/>
                    <line x1="8" x2="8" y1="10" y2="14"/>
                    <line x1="16" x2="16" y1="18" y2="22"/>
                </svg>
                <p class="ml-1 text-center text-white text-[13px] font-semibold font-"> filter </p>
            </div>
        </div>

        <!-- Table -->
        <div class="">
            <table class="w-[1014px] bg-white shadow border-black border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
                <thead class="h-7 border border-black text-sm text-gray-700 uppercase bg-slate-200 dark:bg-slate-200 dark:text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-2 w-[227px] border border-black">
                            Employee Name
                        </th>
                        <th scope="col" class="px-6 py-2 w-[121px] border border-black">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-2 w-[105px] border border-black">
                            Time In
                        </th>
                        <th scope="col" class="px-6 py-2 w-[120px] border border-black">
                            Time Out
                        </th>
                        <th scope="col" class="px-6 py-2 w-[185px] border border-black">
                            Overtime
                        </th>
                        <th scope="col" class="px-6 py-2 w-[184px] border border-black">
                            Late Time
                        </th>
                        <th scope="col" class="px-6 py-2 w-[65px] border border-black">
                            x
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black">
                        <th scope="row" class="w-56 px-6 py-3 font-medium  whitespace-nowrap">
                            <a href="{{ route('view-employee-profile') }}">Phinease Flynn</a>
                        </th>
                        <td class="px-6 py-3">
                            COS/JO
                        </td>
                        <td class="px-6 py-3">
                            Instructor I
                        </td>
                        <td class="px-6 py-3">
                            Department
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>