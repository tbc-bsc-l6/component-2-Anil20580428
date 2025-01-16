<?php

namespace App\Http\Controllers;

use App\Models\BlogLatestPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogLatestPostController extends Controller
{
    public function index()
    {
        $posts = BlogLatestPost::all();
        return view('admin.blogLatestPost', compact('posts'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validate image
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('posts/images', 'public');

        // Create the blog post
        $post = new BlogLatestPost();
        $post->image = $imagePath;
        $post->description = $request->input('description');
        $post->date = $request->input('date');
        $post->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Blog post added successfully!');
    }

    public function update(Request $request, $id)
    {
        $post = BlogLatestPost::findOrFail($id);

        // Validate input
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete old image
            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            $post->image = $request->file('image')->store('posts/images', 'public');
        }

        $post->description = $request->input('description');
        $post->date = $request->input('date');
        $post->save();

        return redirect()->back()->with('success', 'Blog post updated successfully!');
    }

    public function toggleStatus($id)
    {
        $post = BlogLatestPost::findOrFail($id);
        $post->status = !$post->status; // Toggle the status
        $post->save();

        return redirect()->back()->with('success', 'Post status updated successfully!');
    }

    public function destroy($id)
    {
        $post = BlogLatestPost::findOrFail($id);

        // Delete the image file if it exists
        if ($post->image && Storage::exists($post->image)) {
            Storage::delete($post->image);
        }

        // Delete the post
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
