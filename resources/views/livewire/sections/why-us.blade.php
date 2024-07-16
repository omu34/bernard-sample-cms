@if ($sectiondata != null)
<section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')] " >
    <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl text-[#163466] dark:text-white leading-8 lg:text-5xl my-6 font-medium lg:py-0 max-w-2xl">
                    {{$sectiondata->title}}
                </h2>               
                
                <div class="mb-4  text-base dark:text-gray-200 text-black">{!!$sectiondata->description!!}</div>
                
            </div>
            <div class="flex justify-center">
                <div class="relative pb-9/16">
                    <img src={{ url('storage/'.$sectiondata->image) }} class="w-full h-64 md:h-80 lg:h-96 object-cover rounded-lg" alt="">
                </div>
            </div>
        </div>
    </div>
    <livewire:pika-table/> 
</section>
@endif