<?php

namespace App\Http\Controllers;

use App\Models\BogAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BogAddController extends Controller
{
    public function index()
    {
        $blogs = BogAdd::orderBy('created_at', 'desc')->get();

        return view('admin.blogAdd', compact('blogs'));
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'image' => 'required|image|max:2048',
            'date' => 'required|date',
            'profile' => 'required|image|max:2048',
            'heading' => 'required|string|max:255',
            'description1' => 'required',
            'description2' => 'required|string|max:255',
            'description3' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '_image_' . $image->getClientOriginalName();
            $image_path = $image->storeAs('blog_images', $image_name, 'public'); // Stores file in storage/app/public/blog_images
            $image_url = 'storage/' . $image_path; // Correct URL for accessing via public folder
        }

        // Handle file upload for 'profile'
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $profile_name = time() . '_profile_' . $profile->getClientOriginalName();
            $profile_path = $profile->storeAs('blog_images', $profile_name, 'public');
            $Pimage_url = 'storage/' . $profile_path;
        }

        // Store data in the database
        BogAdd::create([
            'image' => $image_url,
            'date' => $request->date,
            'profile' => $Pimage_url,
            'heading' => $request->heading,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description3' => $request->description3,
            'status' => 1,
        ]);

        return redirect()->route('blog.add')->with('success', 'Blog added successfully!');
    }

    public function update(Request $request, $id)
    {
        $blog = BogAdd::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|max:2048',
            'date' => 'required|date',
            'profile' => 'nullable|image|max:2048',
            'heading' => 'required|string|max:255',
            'description1' => 'required|string|max:255',
            'description2' => 'nullable|string|max:255',
            'description3' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($blog->image);
            $image_url = $request->file('image')->store('blog_images', 'public');
            $blog->image = 'storage/' . $image_url;
        }

        if ($request->hasFile('profile')) {
            Storage::delete($blog->profile);
            $profile_url = $request->file('profile')->store('blog_images', 'public');
            $blog->profile = 'storage/' . $profile_url;
        }

        $blog->update([
            'date' => $request->date,
            'heading' => $request->heading,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description3' => $request->description3,
        ]);

        return redirect()->back()->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = BogAdd::findOrFail($id);
        Storage::delete($blog->image);
        Storage::delete($blog->profile);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
}
