<x-app-layout>

    {{--  @foreach($page->sections->sortBy('pivot.order') as $section)
        <livewire:pages.sections :section="$section"/>
    @endforeach  --}}

    @if($page && $page->sections)
        @foreach($page->sections->sortBy('pivot.order') as $section)
            <livewire:pages.sections :section="$section"/>
        @endforeach
    @else
        <p>No sections found</p>
    @endif

</x-app-layout>
