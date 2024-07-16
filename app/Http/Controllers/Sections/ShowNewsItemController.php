<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowNewsItemController extends Controller
{
    public function show($id)
    {
        return view('news.show', compact('id'));
    }
}
