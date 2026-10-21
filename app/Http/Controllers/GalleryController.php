<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Start building the database query
        $query = GalleryImage::latest();

        // If the user clicked a category filter (and it's not 'all'), filter the database
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Fetch the images and paginate them (12 images per page)
        $images = $query->paginate(12);

        // Send to your exact nested view path
        return view('pages.gallery.index', compact('images')); 
    }
}