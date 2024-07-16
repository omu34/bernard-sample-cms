<div>
    @if ($sectiondata != null)
        <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0">
                <img src={{ url('storage/'.$sectiondata->image) }} alt="" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </div>
            <!-- Content Container -->
            <div class="relative mx-auto max-w-7xl pb-16 sm:py-24 lg:pt-64">
                <!-- Newsroom Heading -->
                <h1 data-aos="fade-left" data-aos-duration="300" class="text-4xl max-w-2xl lg:text-6xl my-6 font-medium text-white lg:py-0 py-5 ">
                    {{$sectiondata->title}}
                </h1>
                <div class="text-white max-w-2xl pb-5">{!!$sectiondata->description!!}</div>
            </div>
        </div>
    @endif
</div>
