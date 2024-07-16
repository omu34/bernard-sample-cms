@if ($sectiondata != null)
    <section class="bg-cover bg-top bg-no-repeat py-12 bg-[url('bg-light.png')] dark:bg-[url('bg-dark.png')]">
        <div class="mx-auto max-w-7xl lg:px-0 px-10 pb-10 ">
            <h2  class="text-3xl  text-[#163466] dark:text-white text-center lg:text-4xl max-w-2xl mx-auto my-6 font-medium lg:py-0">
                {{ $sectiondata->title }}
            </h2>
            <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 dark:border-black">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($contacts as $contact)
                        <div class="flex items-start justify-center text-left p-4">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-[#163466] text-white rounded-full mr-2">
                                <span class="text-yellow-400">1</span>
                            </div>
                            <div>
                                <h3 class="text-sm text-[#646971] dark:text-gray-200  font-normal mb-1">{{$contact->title}}</h3>
                                <p class="text-base font-medium	  dark:text-gray-400 text-[#163466]">{{ $contact->subtitle }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>
@endif
