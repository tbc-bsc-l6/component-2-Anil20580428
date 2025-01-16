<?php

namespace App\Http\Controllers;

use App\Models\BlogAuthor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogAuthorController extends Controller
{
    public function index()
    {
        $byAuthor = BlogAuthor::first();

        return view('admin.blogAuthor', compact('byAuthor'));
    }

    public function update(Request $request)
    {
        // Validation
        $request->validate([
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate image
            'title1' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $author = BlogAuthor::first();
        if ($request->hasFile('profile')) {
            if ($author->profile && Storage::exists($author->profile)) {
                Storage::delete($author->profile);
            }

            $imagePath = $request->file('profile')->store('profiles', 'public');
            $author->profile = $imagePath;
        }
        $author->title1 = $request->input('title1');
        $author->title2 = $request->input('title2');
        $author->description = $request->input('description');
        $author->save();

        return redirect()->back()->with('success', 'Author updated successfully!');
    }
}
