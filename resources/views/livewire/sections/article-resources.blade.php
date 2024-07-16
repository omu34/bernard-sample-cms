<div>
    @if ($sectiondata != null)
        <div class="bg-white dark:bg-gray-950 pb-16">
            <div class="py-6">
                <form class="mx-auto max-w-lg px-4" wire:submit.prevent="searchArticle">
                    <div class="flex items-center border border-blue-100 dark:border-white rounded-lg overflow-hidden">
                        <div class="flex items-center px-3 py-2">
                            <svg class="h-6 w-6 text-gray-500 dark:text-white mr-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m1.8-5.15a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                            </svg>
                        </div>
                        <input type="text" wire:model="search" class="w-full text-lg py-2 px-1 text-gray-700 dark:text-white dark:bg-gray-950 focus:outline-none" placeholder="Search...">
                    </div>
                </form>
            </div>
            <div class="mx-auto lg:px-0 px-4 max-w-7xl">
                <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    @foreach ($articles as $article)
                        <div class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-32 sm:pt-40 lg:pt-64">
                            <img src={{ url('storage/'.$article->thumbnail) }} alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black  via-gray-900/50"></div>
                            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            <img src="/images/video.svg" class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white cursor-pointer">
                        
                            <!-- Metadata Section -->
                            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                                <time datetime="{{$article->date->format('Y-m-d')}}" class="text-white mr-6">{{$article->date->format('Y-m-d')}}</time>
                            </div>
                        
                            <!-- Article Title -->
                            <h3 class="mt-1 text-lg font-normal leading-6 text-white">
                                <a href="{{$article->url}}" target="_blank" rel="noreferrer">
                                    <span class="absolute inset-0"></span>
                                    {{$article->title}}
                                </a>
                            </h3>
                        </div>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    @endif
</div>
