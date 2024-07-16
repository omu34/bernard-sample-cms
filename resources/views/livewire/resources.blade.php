<section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]">
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="flex flex-wrap justify-center items-center -mx-4">
            <!-- Video Column -->
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <h2  class="text-3xl dark:text-white   text-black lg:text-4xl my-6 font-medium lg:py-0">
                    Resources
                </h2>
            </div>
            
            <!-- Text Column -->
            <div class="w-full md:w-1/2 px-4">
                <p class=" text-black dark:text-white text-base">Laborum occaecat aliquip ad labore irure do exercitation aliqua aliquip enim laboris adipisicing. Occaecat fugiat cupidatat nulla. Ad aliqua enim magna irure incididunt aliqua nulla do duis.</p>
                
            </div>
        </div>
        <div class="grid mt-8 grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            @for ($i = 0; $i < 8; $i++)
            <a href="#" class="border-2 rounded-lg dark:border-gray-400 border-blue-400 bg-gray-50 dark:bg-slate-950 py-6 px-16 text-center transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="rounded-full h-20 w-20 flex items-center justify-center">
                        <img src="/images/testt.svg" alt="Placeholder Image" class="rounded-full p-2">
                    </div>
                </div>
                <h2 class="text-blue-900 dark:text-white text-lg font-bold mb-4">Cooking Episodes on YouTube</h2>
                <div class="text-gray-600 dark:text-gray-200 inline-flex items-center">
                    View
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </a>
            
            @endfor
        </div>
    </div>
    
</section>