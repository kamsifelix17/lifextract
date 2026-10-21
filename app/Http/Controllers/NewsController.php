<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Fetches both News and Events for the main hub page
    public function index()
    {
        $news = News::where('is_published', true)
                    ->orderBy('published_at', 'desc')
                    ->get();
                    
        $events = Event::where('is_published', true)
                       ->orderBy('event_date', 'asc')
                       ->get();

        // Matches resources/views/pages/news/index.blade.php
        return view('pages.news.index', compact('news', 'events'));
    }

    // Fetches a single news article when clicked
    public function show($slug)
    {
        $article = News::where('slug', $slug)
                       ->where('is_published', true)
                       ->firstOrFail();

        // We will need to create a 'show.blade.php' inside the news folder for this
        return view('pages.news.show', compact('article'));
    }
}