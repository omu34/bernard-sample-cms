<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\EventController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\InvokePagesController;
use App\Http\Controllers\Sections\FeaturedItemsController;
use App\Http\Controllers\Sections\ShowFeaturedItemController;
use App\Http\Controllers\Sections\ShowGalleryItemController;
use App\Http\Controllers\Sections\ShowNewsItemController;
use App\Http\Controllers\Sections\ShowVideosItemController;
use App\Models\Sections\FeaturedItems;
use App\Models\Sections\LatestGallery;
use App\Models\Sections\LatestNews;
use App\Models\Sections\LatestVideo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





    Route::get('/', function () {
        return view('pages.home');
    });



Route::get('/single-blog', function () {
    return view('pages.single-blog');
});

Route::get('/single-gallery', function () {
    return view('pages.single-gallery');
});
Route::get('/single-video', function () {
    return view('pages.single-video');
});
Route::get('/single-media', function () {
    return view('pages.single-media');
});
Route::get('/featured-items', function () {
    return view('pages.featured-items');
});

Route::get('/category', function () {
    return view('pages.category');
});







//show single-items livewire routes
Route::get('/featured-item/{id}', function () {
    return view('sections.show-item.show-featured-item', ['featured' => FeaturedItems::latest()->take(1)->get()]);
});
Route::get('/gallery-item/{id}', function () {
    return view('sections.show-item.show-gallery-item', ['gallery' => LatestGallery::latest()->take(1)->get()]);
});

Route::get('/news-item/{id}', function () {
    return view('sections.show-item.show-news-item', ['news' => LatestNews::latest()->take(1)->get()]);
});

Route::get('/video-item/{id}', function () {
    return view('sections.show-item.show-videos-item', ['videos' => LatestVideo::latest()->take(1)->get()]);
});

// toggle single-items feature or unfeatured livewire routes
Route::get('/gallery/{id}', function () {
    return view('sections.toggle.single-gallery-toggle', ['gallery' => LatestGallery::latest()->take(1)->get()]);
});

Route::get('/news/{id}', function () {
    return view('sections.toggle.single-news-toggle', ['news' => LatestNews::latest()->take(1)->get()]);
});

Route::get('/videos/{id}', function () {
    return view('sections.toggle.single-videos-toggle', ['videos' => LatestVideo::latest()->take(1)->get()]);
});

// logic player routes
Route::get('/featured', [FeaturedItemsController::class, 'index'])->name('featured.index');
Route::get('/featured/{id}', [FeaturedItemsController::class, 'show'])->name('featured.show');

Route::get('/videos/{id}', [ShowVideosItemController::class, 'show'])->name('videos.show');
Route::get('/gallery/{id}', [ShowGalleryItemController::class, 'show'])->name('gallery.show');
Route::get('/news/{id}', [ShowNewsItemController::class, 'show'])->name('news.show');
Route::get('/featured/{id}', [ShowFeaturedItemController::class, 'show'])->name('featured.show');










Route::get('/', InvokePagesController::class)->name('index');

Route::get('/events/{slug}', EventController::class)->name('events.show');

Route::get('/{page:slug}', PagesController::class)->name('page.show');

