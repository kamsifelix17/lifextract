<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function create()
    {
        return view('pages.partner'); // Ensure you have a partner-with-us.blade.php or partner.blade.php file in resources/views
    }

    public function store(Request $request)
    {
        // Logic to handle the partnership request submission will go here later
    }
}