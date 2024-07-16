@if ($sectiondata != null)
<section class="bg-cover bg-top bg-no-repeat py-16 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]">
    <div class="mx-auto max-w-5xl lg:px-0 px-10 ">
        <div class="text-center text-lg">
            <h2  class="text-3xl dark:text-white text-[#163466] lg:text-5xl mb-6 font-medium lg:py-0">
                {{$sectiondata->title}}
            </h2>
            <div class="owl-carousel owl-carousel-1 owl-theme mt-20">
                @foreach ($testimonials as $testimonial)
                <div class="item px-20 ">
                    <div class="dark:text-white">{!!$testimonial->content!!}</div>
                    <h2 class="font-bold dark:text-white text-[#163466] text-3xl mt-8">{{$testimonial->author}}</h2>
                    <p class="mt-1 text-[#163466] dark:text-gray-400">{{$testimonial->author_location}}</p>
                </div>
                @endforeach
            </div>
        </div>
        
    </div> 
</section>
@endif        

