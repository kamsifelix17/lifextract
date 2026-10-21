<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Fetches a single event when clicked
    public function show($slug)
    {
        $event = Event::where('slug', $slug)
                      ->where('is_published', true)
                      ->firstOrFail();

        // Updated to match resources/views/pages/events/show.blade.php
        return view('pages.events.show', compact('event'));
    }
}