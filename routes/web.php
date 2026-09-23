<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\InquiryController;

// 1. Core Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/impact', [PageController::class, 'impact'])->name('impact');
Route::get('/donate', [PageController::class, 'donate'])->name('donate');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// 2. Foundation Programs (Our Work)
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show');

// 3. TalksWithMrDee Podcast
Route::get('/podcast', [PodcastController::class, 'index'])->name('podcast.index');
Route::get('/podcast/be-a-guest', [PodcastController::class, 'beAGuest'])->name('podcast.be-a-guest');
Route::get('/podcast/{slug}', [PodcastController::class, 'show'])->name('podcast.show');

// 4. Relationship & Community Support Pathways
Route::get('/support', [SupportController::class, 'index'])->name('support.index');

// 5. Intake & Inquiry Forms
Route::get('/volunteer', [InquiryController::class, 'createVolunteer'])->name('volunteer.create');
Route::post('/volunteer', [InquiryController::class, 'storeVolunteer'])->name('volunteer.store');

Route::get('/partner', [InquiryController::class, 'createPartner'])->name('partner.create');
Route::post('/partner', [InquiryController::class, 'storePartner'])->name('partner.store');

Route::post('/support/request', [InquiryController::class, 'storeSupport'])->name('support.store');
Route::post('/podcast/guest', [InquiryController::class, 'storeGuest'])->name('podcast.guest.store');
Route::post('/contact/send', [InquiryController::class, 'storeContact'])->name('contact.store');
Route::post('/newsletter/subscribe', [InquiryController::class, 'storeNewsletter'])->name('newsletter.subscribe');