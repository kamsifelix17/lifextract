<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function create()
    {
        return view('pages.volunteer');
    }

    public function store(Request $request)
    {
        // Logic to handle the volunteer application submission will go here later
    }
}