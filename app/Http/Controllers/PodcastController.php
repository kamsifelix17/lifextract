<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display the SINGLE podcast page with episodes and guests
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

        // Fetch episodes for the single-page grid
        $episodes = $query->orderBy('air_date', 'desc')->paginate(8);

        return view('pages.podcast.index', compact('episodes'));
    }

    /* =========================================================
       FORM SUBMISSION HANDLERS
       ========================================================= */
    /**
     * Display the dedicated Matchmaking / Tell Us Your Type page
     */
    public function matchmaking()
    {
        return view('pages.podcast.matchmaking');
    }

    public function storeStory(Request $request)
    {
        // Validation & DB logic goes here
        return back()->with('success', 'Your story has been submitted successfully.');
    }

    public function storeGuest(Request $request)
    {
        // Validation & DB logic goes here
        return back()->with('success', 'Your guest application has been received.');
    }

    public function storeNewsletter(Request $request)
    {
        // Validation & DB logic goes here
        return back()->with('success', 'Thank you for subscribing to TalksWithMrDee!');
    }

    public function storeContact(Request $request)
    {
        // Validation & DB logic goes here
        return back()->with('success', 'Your message has been sent to our team.');
    }

    public function storePartner(Request $request)
    {
        // Validation & DB logic goes here
        return back()->with('success', 'Your partnership proposal has been submitted for executive review.');
    }
}