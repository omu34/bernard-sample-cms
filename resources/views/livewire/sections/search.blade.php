<div class="flex items-center lg:ml-8">
    <div class="ml-4 flow-root lg:ml-8">
        <button @click="searchModalOpen = true" type="button" class="group -m-2 flex items-center p-2 bg-primary rounded-full">
            <span class="sr-only">Search</span>
            <svg class="h-6 w-6 text-yellow" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>

        <div x-cloak x-show="searchModalOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="searchModalOpen" @keydown.esc.window="searchModalOpen = false" @click.self="searchModalOpen = false" class="fixed inset-0 z-30 flex w-full items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="searchModalOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex w-full max-w-2xl flex-col gap-4 overflow-hidden rounded-xl border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <!-- Dialog Header -->
                <div class="flex items-center justify-between border-b border-slate-300 bg-slate-200/60 px-4 py-2 dark:border-slate-700 dark:bg-slate-900/20">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black dark:text-white font-sans">Search the site</h3>
                    <button @click="searchModalOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <!-- Dialog Body -->
                <div class="px-4 py-1"> 
                    
                    <form class="relative" wire:submit.prevent="searchsite">
                        <div class="flex rounded-lg shadow-sm ring-1 mb-2 ring-inset ring-gray-300 dark:ring-gray-700 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">
                                <svg class="h-6 w-6 text-slate-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input wire:model.defer="search" type="text" id="search" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 dark:text-slate-400" placeholder="Search ...">
                        </div>

                        @error('search')
                            <p class="text-xs text-danger font-normal text-red-500 text-center font-serif">
                                {{ $message }}
                            </p>
                        @enderror
                    </form>

                    @if(count($results) > 0)
                        <nav class="max-h-[40rem] overflow-y-auto relative" aria-label="Directory">
                            <div>
                                @foreach($results as $type => $modelSearchResults)
                                    @if( count($modelSearchResults) > 0 )
                                        <div class="sticky top-0 z-10 leading-6 text-primary dark:text-yellow pl-1 bg-slate-100 dark:bg-slate-800 mt-2">
                                            <h3 class="text-lg font-bold font-sans capitalize">{{ $type }}</h3>
                                        </div>
                                        @if($type === 'events')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col">
                                                            <a href="/events/{{ $searchResult->slug }}" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->title }}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($type === 'pages')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col">
                                                            <a href="/{{$searchResult->slug}}" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->name }}</a>
                                                            <div class=" text-gray-500 text-xs tracking-wide font-serif w-full truncate group-hover:text-secondary">{!! $searchResult->description !!}</div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($type === 'articles')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col flex-1">
                                                            <a href="{{$searchResult->url}}" target="_blank" rel="noreferrer" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->title }}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($type === 'appliances')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col flex-1">
                                                            <a href="/classes" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->title }}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($type === 'resources')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col flex-1">
                                                            <a href="{{$searchResult->url}}" target="_blank" rel="noreferrer" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->title }}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($type === 'videos')
                                            <div class="flex flex-col w-full gap-3 px-3 py-2">
                                                @foreach($modelSearchResults as $searchResult)
                                                    <div class="flex rounded-md shadow-md gap-x-4 px-3 py-3 hover:bg-quaternary group cursor-pointer">
                                                        <div class="min-w-0 flex flex-col flex-1">
                                                            <a href="{{$searchResult->url}}" target="_blank" rel="noreferrer" class="text-sm font-bold font-serif leading-6 text-gray-700 group-hover:text-secondary" id="option-1" role="option" tabindex="-1">{{ $searchResult->title }}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </nav>
                    @else
                        <p class="p-4 text-sm text-gray-500 font-serif text-center capitalize">No results yet</p>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
</div>