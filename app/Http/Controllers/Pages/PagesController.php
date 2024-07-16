<?php

namespace App\Http\Controllers\Pages;

use App\Models\Pages\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Pages\PagesResource;

class PagesController extends Controller
{
    public function show($id)
    {
        $page = Page::find($id);

        if (!$page) {
            return abort(404, 'Page not found');
        }

        return view('pages.show', compact('page'));
    }




    public function __invoke(Page $page)
    {
        if ($page != null) {
            $page->load('sections');
            return view('pages.home', [
                'page' => new PagesResource($page),
            ]);
        } else {
            $page = Page::with('sections')->where('slug', 'home')->first();
            return view('pages.home', [
                'page' => new PagesResource($page),
            ]);
        }
    }
}
