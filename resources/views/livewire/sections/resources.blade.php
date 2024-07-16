@if ($sectiondata != null)
    <section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]" >
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <h2  class="text-3xl dark:text-white  text-black lg:text-4xl my-6 font-bold lg:py-0">
                        {{$sectiondata->title}}
                    </h2>
                </div>
                
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    <div class=" text-black dark:text-white text-base">{!!$sectiondata->description!!}</div>
                </div>
            </div>
            <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                @foreach ($resources as $resource)
                    <a href={{$resource->url}} target="_blank" rel="noreferrer" class="border-2 rounded-lg dark:border-gray-100 border-blue-400  bg-gray-50 dark:bg-slate-900 py-6 px-16 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="flex justify-center mb-4">
                            <div class="rounded-full h-20 w-20 flex items-center justify-center">
                                <img src="/images/testt.svg" alt="Placeholder Image" class="rounded-full p-2">
                            </div>
                        </div>
                        <h2 class="text-blue-900 dark:text-white text-lg font-medium mb-4">{{$resource->title}}</h2>
                        <div class="text-gray-600 dark:text-white inline-flex items-center">
                            View
                            <svg class="w-4 h-4 ml-1 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
