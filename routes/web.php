<?php

use Illuminate\Support\Facades\Route; // This fixes the red lines in VS Code
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PodcastController;

// 1. Home
Route::get('/', [PageController::class, 'home'])->name('home');

// 2. About Us
Route::get('/about', [PageController::class, 'about'])->name('about');

// 3. Our Programmes
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show'); // This fixes the browser crash

// 4. Our Impact
Route::get('/impact', [PageController::class, 'impact'])->name('impact');

// 5. Volunteer With Us 
Route::get('/volunteer', [VolunteerController::class, 'create'])->name('volunteer.create');
Route::post('/volunteer', [VolunteerController::class, 'store'])->name('volunteer.store');

// 6. Partnerships and Sponsorships
Route::get('/partner-with-us', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/partner-with-us', [PartnerController::class, 'store'])->name('partner.store');

// 7. Donate / Support Us
Route::get('/donate', [DonationController::class, 'index'])->name('donate');

// 8. --- NEWS & EVENTS HUB ---
Route::get('/news-and-events', [NewsController::class, 'index'])->name('news.index');

// --- SINGLE POST PAGES ---
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

// --- GALLERY ---
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// 9. Contact Us
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 10. Privacy Policy & Terms
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-use', [PageController::class, 'terms'])->name('terms');


/* =========================================================
   TALKS WITH MR DEE (PODCAST ROUTES)
   ========================================================= */
Route::get('/talks-with-mr-dee', [PodcastController::class, 'index'])->name('podcast.index');
Route::get('/talks-with-mr-dee/matchmaking', [PodcastController::class, 'matchmaking'])->name('podcast.matchmaking');

Route::prefix('podcast')->name('podcast.')->group(function () {
    Route::post('/matchmaking', [PodcastController::class, 'storeMatchmaking'])->name('matchmaking.store');
    Route::post('/story', [PodcastController::class, 'storeStory'])->name('story.store');
    Route::post('/guest', [PodcastController::class, 'storeGuest'])->name('guest.store');
    Route::post('/newsletter', [PodcastController::class, 'storeNewsletter'])->name('newsletter.store');
    Route::post('/contact', [PodcastController::class, 'storeContact'])->name('contact.store');
    Route::post('/partner', [PodcastController::class, 'storePartner'])->name('partner.store');
});