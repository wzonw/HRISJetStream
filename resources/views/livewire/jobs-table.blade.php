<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
    <table class="w-[729px] table-fixed bg-red-200 shadow border-black border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-700">
        <tbody>
            @foreach ($jobs as $job)
            <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-slate-100 dark:border-black border">
                <th scope="row" class="px-6 py-3 w-44 font-medium font-inter whitespace-nowrap">
                     @if ($job->dept == '')
                        @if ($job->status == 'COS/JO')
                        
                            <span class="font-bold"> {{$job->college}} </span>
                            <span>- Part Time {{$job->job_name}} </span>
                        
                        @else
                        
                            <span class="font-bold"> {{$job->college}} </span>
                            <span>&nbsp- Full Time {{$job->job_name}} </span>
                        
                        @endif
                     @else
                        @if ($job->status == 'COS/JO')
                        
                            <span class="font-bold"> {{$job->dept}} </span>
                            <span>- Part Time {{$job->job_name}} </span>
                        
                        @else
                        
                            <span class="font-bold"> {{$job->dept}} </span>
                            <span>&nbsp-  {{$job->job_name}} </span>
                        
                        @endif
                     @endif
                     <div class="ml-5">
                        <p> {{$job->status}} </p>
                        <p> {{$job->college}} </p>
                     </div> 
                     <p class="ml-5">
                        Php {{$job->salary}}
                     </p>
                </th>       
                <td class="w-10 border-l border-black">
                    <form action="{{ route('guest-application', $job->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <x-button-gold class="mx-2 w-28" >
                            Apply
                        </x-button-gold>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$jobs->links()}}
</div>