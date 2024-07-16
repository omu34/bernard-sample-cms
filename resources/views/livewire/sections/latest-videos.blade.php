@if ($sectiondata != null)
    <div class="bg-white dark:bg-gray-950 py-12 sm:py-16">
        <div class="mx-auto lg:px-0 px-4 max-w-7xl">
            <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between mb-8 ">

                <h2 class="text-3xl text-black dark:text-white leading-8 lg:text-5xl my-6 font-medium lg:py-0 max-w-2xl">
                    {{$sectiondata->title}}
                </h2>
                <a href="/videos" wire:navigate
                class="text-white bg-[#CD201F] focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center  me-2 mb-2">
                View on YouTube
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
            </div>
            <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                @foreach ($videos as $video)
                    <article class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-32 sm:pt-40 lg:pt-60">
                        <img src={{ url('storage/'.$video->thumbnail) }} alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black  via-gray-900/50"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <img src="/images/video.svg" class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white cursor-pointer">

                        <!-- Metadata Section -->
                        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-base leading-6 text-white">
                            <time datetime="2020-03-16" class="text-white mr-6">{{$video->date}}</time>

                        </div>

                        <!-- Article Title -->
                        <h3 class="mt-1 text-lg font-normal leading-6 text-white">
                            <a href={{$video->url}} target="_blank" rel="noreferrer">
                                <span class="absolute inset-0"></span>
                                {{$video->title}}
                            </a>
                        </h3>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endif








@extends('layouts.app')

@section('content')
<div class="bg-white bg-center py-12 sm:py-16">
    <div class="mx-auto lg:px-0 px-10 max-w-7xl">
        <div class="mx-auto flex flex-col items-center sm:flex-row sm:justify-between mb-8">
            <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-gray-900 sm:text-3xl">Latest Gallery</h2>
            <a href="{{ url('latest-gallery') }}"
                class="text-gray-900 bg-white hover:bg-[#163466] border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                View More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>

        <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-4 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @foreach ($gallery as $galla)
                <article data-aos="fade-up" data-aos-duration="1500"
                    class="relative isolate flex flex-col transition-transform transform hover:scale-105 justify-end overflow-hidden rounded-2xl bg-gray-900 px-4 pb-8 pt-44 sm:pt-60 lg:pt-48">
                    <a href="{{ $galla->link }}{{ $galla->id }}" class="absolute inset-0 z-10">
                        <span class="sr-only">
                        </span>
                    </a>
                    @php
                        $mimeType = Storage::disk('public')->mimeType($galla->file_path);
                    @endphp
                    @if (Str::startsWith($mimeType, 'video'))
                        <video autoplay muted loop class="absolute inset-0 -z-10 h-full w-full object-cover">
                            <source src="{{ Storage::url($galla->file_path) }}" type="{{ $mimeType }}">
                            Your browser does not support the video tag.
                        </video>
                    @elseif (Str::startsWith($mimeType, 'audio'))
                        <audio controls class="absolute inset-0 -z-10 w-full">
                            <source src="{{ Storage::url($galla->file_path) }}" type="{{ $mimeType }}">
                            Your browser does not support the audio element.
                        </audio>
                    @elseif (Str::startsWith($mimeType, 'image'))
                        <img src="{{ Storage::url($galla->file_path) }}" alt=""
                            class="absolute inset-0 -z-10 h-full w-full object-cover">
                    @else
                        @php
                            $fileIcon = '';
                            if (Str::startsWith($mimeType, 'application/pdf')) {
                                $fileIcon = 'pdf-file-svg-repo-com.svg';
                            } elseif (
                                Str::startsWith($mimeType, 'application/msword') ||
                                Str::startsWith(
                                    $mimeType,
                                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                )
                            ) {
                                $fileIcon = 'word.png';
                            } elseif (
                                Str::startsWith($mimeType, 'application/vnd.ms-excel') ||
                                Str::startsWith(
                                    $mimeType,
                                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                )
                            ) {
                                $fileIcon = 'excel.png';
                            } elseif (
                                Str::startsWith($mimeType, 'application/vnd.ms-powerpoint') ||
                                Str::startsWith(
                                    $mimeType,
                                    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                                )
                            ) {
                                $fileIcon = 'powerpoint.png';
                            } elseif (
                                Str::startsWith($mimeType, 'application/zip') ||
                                Str::startsWith($mimeType, 'application/x-zip-compressed')
                            ) {
                                $fileIcon = 'zip.png';
                            } elseif (Str::startsWith($mimeType, 'text/csv')) {
                                $fileIcon = 'csv.png';
                            } else {
                                $fileIcon = 'default-image.jpg';
                            }
                        @endphp
                        <img src="/{{ $fileIcon }}" alt="File Icon"
                            class="absolute inset-0 -z-10 h-full w-full object-cover">
                    @endif

                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black via-gray-900/50"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

                    <img src="{{ asset('gallery.svg') }}"
                        class="absolute text-yellow top-2/3 mb-8 left-1/2 transform -translate-x-1/2 -translate-y-28 h-12 w-12 fill-white"
                        alt="">

                    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-white">
                        <time datetime="{{ $galla->created_at->format('Y-m-d') }}"
                            class="text-white mr-6">{{ $galla->created_at->format('M d, Y') }}</time>
                        <div class="-ml-4 flex items-center gap-x-2">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex text-white">
                                Views {{ $galla->views ?? '0' }}
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-1 text-sm font-normal leading-6 text-white">
                        <a href="{{ route('gallery.show', $galla->id) }}">
                            <span class="absolute inset-0"></span>
                            {{ $galla->description }}
                        </a>
                    </h3>

                    <div
                        class="flex mt-2 flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                        <svg width="16" height="16" class="mr-6" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9843 6.03574L12.9849 6.03637C14.1009 7.1464 14.1 8.94721 12.9856 10.0497L12.9843 10.051L10.0583 12.977C10.0581 12.9772 10.0579 12.9774 10.0578 12.9775C8.94073 14.088 7.13835 14.087 6.02904 12.9777L3.00904 9.95766C2.44299 9.39161 2.14392 8.60986 2.17965 7.80879C2.17965 7.80862 2.17966 7.80845 2.17967 7.80828L2.33958 4.47676C2.33959 4.47664 2.3396 4.47652 2.3396 4.47639C2.39784 3.32107 3.32053 2.39837 4.47566 2.34027C4.47573 2.34026 4.4758 2.34023 4.47587 2.3402L7.80749 2.1801C7.80766 2.18009 7.80783 2.18008 7.808 2.18007C8.60892 2.14419 9.39091 2.44284 9.95711 3.0089L12.9843 6.03574ZM6.36768 5.62541L6.36752 5.62543C5.98191 5.67338 5.67367 5.98148 5.62568 6.36708L5.62566 6.36723C5.58521 6.7103 5.70927 7.05488 5.95124 7.29685C6.1932 7.53882 6.53778 7.66288 6.88085 7.62243L6.88102 7.62241C7.26662 7.57446 7.57486 7.26636 7.62285 6.88076L7.62287 6.88061C7.66331 6.53753 7.53926 6.19295 7.2973 5.95098C7.05534 5.70902 6.71076 5.58496 6.36768 5.62541Z"
                                fill="#fff" stroke="#fff" stroke-width="0.3"></path>
                        </svg>

                        <a href="{{ $galla->link }}" class="font-semibold">
                            {{ $galla->title }}
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection

