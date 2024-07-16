@if ($sectiondata != null)
<div class="py-10">
    <div class="mx-auto max-w-7xl lg:px-0 px-10">
        <div class="flex flex-wrap justify-center items-center -mx-4">
            <!-- Image Column -->
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <div class="relative w-full h-full flex justify-center items-center">
                    <img src="{{ $sectiondata->image ? url('storage/'.$sectiondata->image) : '/images/class.png' }}" alt="Cooking Image" class="object-cover rounded-lg shadow-lg">
                </div>
            </div>
            
            <!-- Text Column -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl lg:text-5xl font-medium mb-4 dark:text-white text-[#163466] ">{{$sectiondata->title}}</h2>
                <div class="mt-6 dark:text-white text-base text-black">{!!$sectiondata->description!!}</div>

                <form class="mt-6">
                    <div class="mb-6">
                        <label for="name" class="block text-gray-900 dark:text-white text-base font-bold mb-2">Name (Required)</label>
                        <input type="text" id="name" name="name" required class="bg-[#DAF1FF] dark:bg-slate-900  rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-blue-200 focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-900 dark:text-white text-base font-bold mb-2">Email (Required)</label>
                        <input type="email" id="email" name="email" required class="bg-[#DAF1FF] dark:bg-slate-900  rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-blue-200 focus:border-blue-500">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="text-white bg-[#163466] mt-2 focus:ring-4 focus:outline-none focus:ring-gray-100 font-normal rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                            {{$sectiondata->button_text}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endif