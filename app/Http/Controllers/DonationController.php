<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program; // Import the Program model

class DonationController extends Controller
{
    public function index()
    {
        // Fetch all programs from the database
        $programs = Program::all();

        // Pass the $programs variable to the donate view
        return view('pages.donate', compact('programs'));
    }
}