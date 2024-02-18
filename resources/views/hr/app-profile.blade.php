<!--Profile-->
<div class="w-[1100px] inline-flex">
    <div class="relative opacity-30">
        <img class="relative h-36 w-screen object-cover object-top" src="https://plm.edu.ph/images/banners/hero-banner-facade.jpg" />
    </div>
    <div class="absolute mx-8 my-14">
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
                        {{ Auth::user()->name. " ". Auth::user()->surname }}
                    </p>
                    <p class="w-20 h-5 text-neutral-950 text-opacity-50 text-base font-normal font-inter">
                        Applicant
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="absolute end-24 pt-24">
        <p class="w-32 h-9 inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-400 rounded-md font-medium text-sm 
                text-gray-400 font-inter">
            Status
        </p>
    </div>
</div>