<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Pages\Page;
use App\Models\Content\Event;
use App\Models\Content\Video;
use App\Models\Content\Article;
use App\Models\Content\Resource;
use App\Models\Content\Appliance;

class Search extends Component
{
    public $search = '';
    public $loading = false;
    public $results = [];

    public function updatedSearch()
    {
        $this->results = [];
    }

    public function render()
    {
        return view('livewire.sections.search', [
            'search' => $this->search,
            'loading' => $this->loading,
            'results' => $this->results,
        ]);
    }

    public function searchsite()
    {
        $this->updatedSearch();

        $articles = [];
        $pages = [];
        $events = [];
        $appliances = [];
        $resources = [];
        $videos = [];

        $this->validate([
            'search' => 'required|min:3',
        ]);

        $this->loading = true;

        $search = $this->search;

        $pages = Page::where('description', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->get();

        $articles = Article::where('title', 'like', '%' . $this->search . '%')->get();

        $events = Event::where('title', 'like', '%' . $this->search . '%')->get();

        $appliances = Appliance::where('title', 'like', '%' . $this->search . '%')->get();

        $resources = Resource::where('title', 'like', '%' . $this->search . '%')->get();

        $videos = Video::where('title', 'like', '%' . $this->search . '%')->get();

        $this->loading = false;

        $this->results = [
            'pages' => $pages,
            'articles' => $articles,
            'events' => $events,
            'appliances' => $appliances,
            'resources' => $resources,
            'videos' => $videos,
        ];
    }
}
