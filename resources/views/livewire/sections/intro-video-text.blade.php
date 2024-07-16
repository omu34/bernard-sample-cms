<div x-data="{ openVideoModal: false }" class="py-20">
    <div class="mx-auto max-w-7xl lg:px-0 px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            <!-- Video Column -->
            <div class="relative overflow-hidden aspect-w-16 aspect-h-9 rounded-xl">
                <img src="/images/banner.jpeg" alt="Video Thumbnail" class="absolute inset-0 w-full rounded-lg h-full object-cover cursor-pointer">
                <button @click="openVideoModal = true" class="absolute inset-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 cursor-pointer z-10">
                    <svg width="48" height="38" viewBox="0 0 48 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5692 0.333374C25.8152 0.340374 28.9325 0.370707 32.2458 0.503707L33.4218 0.55504C36.7562 0.711374 40.0882 0.98204 41.7425 1.44171C43.9475 2.06237 45.6788 3.86837 46.2645 6.15971C47.1978 9.79971 47.3145 16.8977 47.3285 18.6174L47.3308 18.972V19.378C47.3145 21.0977 47.1978 28.198 46.2645 31.8357C45.6718 34.134 43.9382 35.9424 41.7425 36.5537C40.0882 37.0134 36.7562 37.284 33.4218 37.4404L32.2458 37.494C28.9325 37.6247 25.8152 37.6574 24.5692 37.662L24.0208 37.6644H23.4258C20.7892 37.648 9.76184 37.529 6.2525 36.5537C4.04984 35.933 2.31617 34.127 1.7305 31.8357C0.797171 28.1957 0.680504 21.0977 0.666504 19.378V18.6174C0.680504 16.8977 0.797171 9.79737 1.7305 6.15971C2.32317 3.86137 4.05684 2.05304 6.25484 1.44404C9.76184 0.466374 20.7915 0.347374 23.4282 0.333374H24.5692ZM19.3308 10.8334V27.1667L33.3308 19L19.3308 10.8334Z" fill="#FAFAFA"/>
                    </svg>
                </button>
            </div>
            
            <!-- Text Column -->
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-medium mb-4 dark:text-white text-[#163466]">{{$sectiondata->title}}</h2>
                <div class="mb-4 dark:text-white text-base text-black">{!!$sectiondata->description!!}</div>
                {{-- <p class="dark:text-white text-base text-black">Research has shown that compared to traditional cooking methods using solid fuels, eCooking offers numerous advantages, including efficiency, improved indoor air quality, enhanced safety, and reduced greenhouse gas emissions.</p> --}}
                
                <a href="{{$sectiondata->button_url}}" wire:navigate class="text-white w-40 bg-[#163466] mt-4 focus:ring-4 focus:outline-none focus:ring-gray-100 font-normal rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center">
                    <span class="mr-2"> {{$sectiondata->button_text}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Video Popup Modal -->
    <div x-show="openVideoModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div @click.away="openVideoModal = false" class="relative max-w-3xl mx-auto rounded-lg overflow-hidden shadow-lg bg-white">
            <img src="/images/banner.jpeg" alt="Video Placeholder" class="w-full h-full object-cover">
            <button @click="openVideoModal = false" class="absolute top-4 right-4 p-2 bg-gray-200 rounded-full text-black">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293a1 1 0 0 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
</div>