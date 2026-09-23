<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display all programs with category filtering
     */
    public function index(Request $request)
    {
        $query = Program::query();

        // If visitor clicked a category tab (e.g. ?category=elderly)
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $programs = $query->latest()->paginate(9);
        $categories = ['elderly', 'youth', 'health', 'scholarship', 'community'];

        return view('pages.programs.index', compact('programs', 'categories'));
    }

    /**
     * Display a single outreach story & donation box
     */
    public function show(string $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $relatedPrograms = Program::where('id', '!=', $program->id)->take(3)->get();

        return view('pages.programs.show', compact('program', 'relatedPrograms'));
    }
}