<x-app-layout>
    <div>
        @if($event != null)
            <div class="bg-gray-900">
                <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
                    <!-- Background Image with Overlay -->
                    <div class="absolute inset-0">
                        <img src={{ url('storage/'.$event->thumbnail) }} alt="" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <!-- Content Container -->
                    <div class="relative mx-auto max-w-7xl py-16 sm:py-24 lg:pt-44">
                        <!-- Newsroom Heading -->
                        <h1 data-aos="fade-left" data-aos-duration="1500" class="text-4xl lg:text-5xl my-6 max-w-2xl font-medium text-white lg:py-0 py-5 ">
                            {{$event->title}}
                        </h1>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-gray-50 dark:bg-gray-950 border-b border-gray-300 dark:border-gray-800">
                    <div class="mx-auto max-w-7xl">
                        <nav class="flex md:justify-start justify-center py-5" aria-label="Breadcrumb">
                            <ol role="list" class="flex items-center space-x-4 text-center">
                                <li data-aos="fade-left" data-aos-duration="1000">
                                    <div>
                                        <a href="/" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">Home</a>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-duration="2000">
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-black dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                        </svg>
                                        <a href="/events" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">Events</a>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-duration="2000">
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-black dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                        </svg>
                                        <a href="/gallery/{{$event->slug}}" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">{{$event->title}}</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-950 bg-center py-12 sm:py-16">
                <div class="mx-auto lg:px-0 px-10 max-w-7xl">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        @foreach ($event->images as $image)
                        <div class="flex flex-wrap gap-4 justify-center hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                            <div class="w-full">
                                <a href="{{ url('storage/'.$image->url) }}" data-lightbox="roadtrip" class="rounded-lg w-full cursor-pointer transition-transform duration-300 ease-in-out hover:scale-105">
                                    <img src="{{ url('storage/'.$image->url) }}" alt="" class="w-full h-48 sm:h-96 object-cover object-top rounded-lg">
                                </a>
                            </div>
                        </div>


                        @endforeach
                    </div>
                </div>
                <div class="py-20 mx-auto text-center">
                    <a href="/events" wire:navigate
                    class="text-white bg-[#163466] focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                        View All Events
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
