<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        {{-- navigation here --}}
        @livewire('sections.header-navigation')
    </header>
    <div class="relative isolate overflow-hidden pt-14 lg:px-0 px-10">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="/logo.jpg" alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Content Container -->
        <div class="relative mx-auto max-w-7xl py-16 sm:py-28 lg:pt-48">

            <h1 data-aos="fade-down" data-aos-duration="2000" class="text-5xl my-6 font-medium text-white lg:py-0 py-5">Information House</h1>
        </div>
    </div>
</div>
