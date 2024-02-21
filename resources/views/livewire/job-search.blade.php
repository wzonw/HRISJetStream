<div>
    {{-- Success is as dangerous as failure. --}}
    <form action="{{ url('/search') }}" method="GET">
    <div class="w-[392px] h-[450px] bg-stone-50 border border-black border-opacity-10">
        <div class="w-[392px] h-20 bg-white shadow border border-black border-opacity-10 justify-center">
            <!--svg class=" h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path d="https://pics.freeicons.io/uploads/icons/png/13416400251535694869-512.png" />
            </svg-->
            <p class="mt-6 text-black text-xl text-center font-semibold font-inter">Search for Available Positions</p>
        </div>
            <div class="mx-6 my-6 space-y-5">
                <div>
                    <label class="w-22 text-lg font-medium font-inter" for="job_name">Position</label>
                    <x-input class="block mt-1 w-full" type="search" name="job_name" id="job_name" placeholder="Positions" autofocus />
                </div>
                <div>
                    <label class="w-22 text-lg font-medium font-inter" for="placement">Placement of Assignment</label>
                    <x-input class="block mt-1 w-full" type="search" name="college" id="college" placeholder="Placement of Assignment" autofocus />
                </div>
                <div>
                    <label class="w-22 text-lg font-medium font-inter" for="status">Status</label>
                    <x-input class="block mt-1 w-full" type="search" name="status" placeholder="Status" autofocus />
                </div>
            </div>
            <div class="flex justify-center">
                <button class="w-28 h-9 inline-flex justify-center py-2 bg-white border border-gray-300 rounded-md font-medium text-sm text-black font-inter tracking-widest hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Search
                </button>
            </div>
    </div>
    </form>
</div>
