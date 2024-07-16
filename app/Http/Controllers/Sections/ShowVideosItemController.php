<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowVideosItemController extends Controller
{
    public function show($id)
    {
        return view('video.show', compact('id'));
    }
}
