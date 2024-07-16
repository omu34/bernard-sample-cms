<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Models\Content\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function __invoke($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if ($event != null) {
            $event->load('images');

            return view('pages.show-event', [
                'event' => $event,
            ]);
        } else {
            return view('livewire.sections.event');
        }
    }
}
