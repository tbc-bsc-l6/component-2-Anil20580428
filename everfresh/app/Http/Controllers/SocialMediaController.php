<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMediaLinks = SocialMedia::latest()->get();
        return view('admin.socialMedia', compact('socialMediaLinks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        SocialMedia::create([
            'platform' => $request->input('platform'),
            'link' => $request->input('link'),
        ]);

        return redirect()->back()->with('success', 'Social media link added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->update([
            'platform' => $request->input('platform'),
            'link' => $request->input('link'),
        ]);

        return redirect()->route('social.media.index')->with('success', 'Social media link updated successfully!');
    }

    public function destroy($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        $socialMedia->delete();

        return redirect()->route('social.media.index')->with('success', 'Social media link deleted successfully!');
    }
}
