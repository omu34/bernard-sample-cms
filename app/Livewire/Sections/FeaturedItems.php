<?php

namespace App\Livewire\Sections;

use Livewire\Component;

use App\Models\Sections\LatestGallery;
use App\Models\Sections\LatestNews;
use App\Models\Sections\LatestVideo;

class FeaturedItems extends Component
{
    public $featured;
    public $currentItems;

    public function mount()
    {
        $this->fetchFeaturedItem();
        $this->currentItems = $this->featured->take(4);
    }

    public function fetchFeaturedItem()
    {
        $latestVideos = LatestVideo::where('is_featured', true)->latest()->take(4)->get();
        $latestGalleries = LatestGallery::where('is_featured', true)->latest()->take(4)->get();
        $latestNews = LatestNews::where('is_featured', true)->latest()->take(4)->get();

        $this->featured = collect()
            ->merge($latestVideos)
            ->merge($latestGalleries)
            ->merge($latestNews)
            ->sortByDesc('created_at')
            ->take(12);
    }

    public function nextItems()
    {
        $this->currentItems = $this->featured->splice(4)->take(4)->concat($this->featured->take(4));
    }

    public function render()
    {
        return view(
            'livewire.sections.featured-items',
            [
                'currentItems' => $this->currentItems,
            ],

        );
    }
}
