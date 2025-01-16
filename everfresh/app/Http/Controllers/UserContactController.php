<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\UserContact;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();
        $userContactInforamtion = UserContact::all();
        return view('admin.userContact', compact('contactInfo', 'userContactInforamtion'));
    }

    public function contactInfoUpdate(Request $request)
    {
        // Validate the form data
        $request->validate([
            'description' => 'required|string|max:600',
        ]);

        $project = ContactInfo::find(1); // Replace '1' with the appropriate ID or dynamic logic

        if ($project) {
            $project->description = $request->input('description');
            $project->save();

            // Redirect back with success message
            return redirect()->back()->with('success', 'Contact info descreiption updated successfully.');
        }

        // If the project is not found
        return redirect()->back()->with('error', 'Project not found.');
    }

    public function delete($id)
    {
        $userMessage = UserContact::findOrFail($id);

        // Delete the user message
        $userMessage->delete();

        return redirect()->back()->with('success', 'Message deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $userMessage = UserContact::findOrFail($id);

        // Toggle the `is_active` status
        $userMessage->status = !$userMessage->status;
        $userMessage->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
