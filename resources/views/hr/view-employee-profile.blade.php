<x-admin-layout>
    <div>
        <livewire:emp-profile :user="$user"/>
        <div class="mt-36 ml-10">
            <livewire:about :user="$user"/>
        </div>
    </div>
</x-admin-layout>