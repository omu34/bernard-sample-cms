<x-app-layout>
<div>
    @livewire('banner')
    <livewire:featured-items />
    <livewire:latest-videos />
    <livewire:latest-news />
    <livewire:latest-gallery />
    @livewire('tags')
</div>
</x-app-layout>
