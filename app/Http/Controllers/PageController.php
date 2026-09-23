<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Episode;
use App\Models\ImpactStory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Homepage: Combines Foundation Programs & TalksWithMrDee Teasers
     */
    public function home()
    {
        $featuredPrograms = Program::where('is_featured', true)->take(3)->get();
        $latestEpisodes = Episode::where('is_published', true)->orderBy('air_date', 'desc')->take(3)->get();
        $impactStories = ImpactStory::where('is_featured', true)->take(2)->get();

        // Calculate total community impact stats
        $totalRaised = Program::sum('raised_amount');
        $programsCount = Program::count();

        return view('pages.home', compact(
            'featuredPrograms', 
            'latestEpisodes', 
            'impactStories',
            'totalRaised',
            'programsCount'
        ));
    }

    /**
     * About Us Page: Vision, Mission, Leadership, Values
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Impact & Testimonials Page
     */
    public function impact()
    {
        $stories = ImpactStory::latest()->paginate(6);
        $programs = Program::all();
        return view('pages.impact', compact('stories', 'programs'));
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Donation & Bank Details Page
     */
    public function donate()
    {
        $programs = Program::all();
        return view('pages.donate', compact('programs'));
    }
}