<?php

namespace App\Http\Controllers;

use App\Models\FooterShortDesc;
use App\Models\Hometop;
use App\Models\OurBanner;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $shortDesc = FooterShortDesc::first();
        $homeTop = Hometop::first();
        $footerBanner = OurBanner::first();
        return view('contact', compact('homeTop', 'footerBanner','shortDesc'));
    }


    // Store user contact information
    public function UserContactPageStore(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'con_fname' => 'required|string|max:255',
            'con_lname' => 'required|string|max:255',
            'con_email' => 'required|email|max:255',
            'con_message' => 'required|string|max:1000',
        ]);

        // Create new contact
        $contact = new UserContact();
        $contact->firstName = $request->input('con_fname');
        $contact->lastName = $request->input('con_lname');
        $contact->email = $request->input('con_email');
        $contact->comment = $request->input('con_message');
        // Save the contact to the database
        $contact->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
