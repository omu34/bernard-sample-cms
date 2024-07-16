@if ($sectiondata != null)
    <section class="bg-white dark:bg-slate-950 bg-top bg-no-repeat py-12" >
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
            <div class="flex flex-wrap justify-center items-center -mx-4">
                <!-- Video Column -->
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <h2  class="text-3xl dark:text-white text-[#163466] lg:text-4xl my-6 font-medium lg:py-0">
                        {{$sectiondata->title}}
                    </h2>
                </div>
                <!-- Text Column -->
                <div class="w-full md:w-1/2 px-4">
                    <div class="dark:text-white  text-black text-base">{!!$sectiondata->description!!}</div>
                </div>
            </div>
            <div class="grid mt-8 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                @foreach ($shops as $shop)
                    <a href={{$shop->url}} class="border-2 rounded-lg dark:border-black border-blue-400 text-center bg-gray-50 p-6 hover:border-blue-800">
                        <img src={{ url('storage/'.$shop->logo) }} class="h-28 mx-auto text-center object-contain" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
