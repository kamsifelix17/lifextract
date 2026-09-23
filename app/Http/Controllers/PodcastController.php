<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display all podcast episodes with search
     */
    public function index(Request $request)
    {
        $query = Episode::where('is_published', true);

        // Optional search by title or guest name
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('guest_name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $episodes = $query->orderBy('air_date', 'desc')->paginate(9);

        return view('pages.podcast.index', compact('episodes'));
    }

    /**
     * Display a single episode with video player & show notes
     */
    public function show(string $slug)
    {
        $episode = Episode::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedEpisodes = Episode::where('id', '!=', $episode->id)->where('is_published', true)->take(3)->get();

        return view('pages.podcast.show', compact('episode', 'relatedEpisodes'));
    }

    /**
     * "Be A Guest / Share Your Story" Pitch Form
     */
    public function beAGuest()
    {
        return view('pages.podcast.be-a-guest');
    }
}