<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowGalleryItemController extends Controller
{
    public function show($id)
    {
        return view('gallery.show', compact('id'));
    }
}
