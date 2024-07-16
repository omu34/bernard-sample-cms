<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sections\LatestVideo;
use App\Models\Sections\LatestGallery;
use App\Models\Sections\LatestNews;
use App\Models\Sections\FeaturedItems;

class FeaturedItemsController extends Controller
{

    public function index()
    {
        $latestVideos = LatestVideo::where('is_featured', true)->latest()->take(4)->get();
        $latestNews = LatestNews::where('is_featured', true)->latest()->take(4)->get();
        $latestGallery = LatestGallery::where('is_featured', true)->latest()->take(4)->get();

        $allItems = $latestVideos->merge($latestNews)->merge($latestGallery);

        $featuredItems = $allItems->sortByDesc('created_at')->take(4);

        return view('featured.index', compact('featuredItems'));
    }

    public function show($id)
    {
        $featuredItem = FeaturedItems::findOrFail($id);

        $item = null;
        if ($featuredItem->item_type === 'App\\Models\\Sections\\LatestVideo') {
            $item = LatestVideo::findOrFail($featuredItem->item_id);
        } elseif ($featuredItem->item_type === 'App\\Models\\Sections\\LatestGallery') {
            $item = LatestGallery::findOrFail($featuredItem->item_id);
        } elseif ($featuredItem->item_type === 'App\\Models\\Sections\\LatestNews') {
            $item = LatestNews::findOrFail($featuredItem->item_id);
        }

        return view('featured.show', compact('item'));
    }
}

