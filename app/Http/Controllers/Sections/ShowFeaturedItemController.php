<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowFeaturedItemController extends Controller
{
    public function show($id)
    {
        return view('featured.show', compact('id'));
    }
}
