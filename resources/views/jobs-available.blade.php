<x-app-layout>
    <div class="inline-flex items-center space-x-16">
        <div class="w-[729px] h-[400px] ml-16 my-14">
            <div class="">
                <p class="w-56 h-8 text-indigo-800 text-2xl text-left font-bold font-inter">
                    Careers Available
                </p>
                <livewire:jobs-table />
            </div>
        </div>
        <div class="w-[392px] h-[450px] bg-red-50">
            <div class="">
                <livewire:job-search />
            </div>
        </div>
    </div>
</x-app-layout>