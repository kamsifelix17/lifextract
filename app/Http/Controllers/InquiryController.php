<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function createVolunteer()
    {
        return view('pages.volunteer');
    }

    public function storeVolunteer(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'skills' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        Inquiry::create([
            'type' => 'volunteer',
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'details' => "Skills: {$validated['skills']}\n\nDetails: {$validated['details']}",
            'status' => 'pending',
        ]);

        return back()->with('success', 'Thank you for volunteering! Our team will contact you shortly.');
    }

    public function createPartner()
    {
        return view('pages.partner');
    }

    public function storePartner(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'details' => 'required|string',
        ]);

        Inquiry::create([
            'type' => 'partner',
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'details' => "Organization: {$validated['organization']}\n\nProposal: {$validated['details']}",
            'status' => 'pending',
        ]);

        return back()->with('success', 'Thank you for your partnership enquiry! We will review your proposal and get in touch.');
    }

    public function storeSupport(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'details' => 'required|string',
        ]);

        Inquiry::create([
            'type' => $validated['type'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'details' => $validated['details'],
            'status' => 'pending',
        ]);

        return back()->with('success', 'Your confidential support request has been safely received. A dedicated coordinator will reach out discreetly.');
    }

    public function storeGuest(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'profession' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        Inquiry::create([
            'type' => 'podcast_guest',
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'details' => "Profession: {$validated['profession']}\nTopic: {$validated['topic']}\n\nStory: {$validated['details']}",
            'status' => 'pending',
        ]);

        return back()->with('success', 'Thank you for pitching to be on TALKSWITHMRDEE! Our media production team will review your submission.');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'details' => 'required|string',
        ]);

        Inquiry::create([
            'type' => 'contact_general',
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'details' => $validated['details'],
            'status' => 'pending',
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }

    public function storeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Inquiry::create([
            'type' => 'newsletter_subscriber',
            'full_name' => 'Newsletter Subscriber',
            'email' => $validated['email'],
            'details' => 'Subscribed to general updates and podcast announcements.',
            'status' => 'pending',
        ]);

        return back()->with('success', 'Welcome to the movement! You have successfully subscribed to our newsletter.');
    }
}