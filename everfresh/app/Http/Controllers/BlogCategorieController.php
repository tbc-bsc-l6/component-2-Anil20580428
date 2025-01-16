<?php

namespace App\Http\Controllers;

use App\Models\BlogCategorie;
use Illuminate\Http\Request;

class BlogCategorieController extends Controller
{

    public function index()
    {
        $categories = BlogCategorie::all();
        return view('admin.blogCategories', compact('categories'));
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'cname' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $category = new BlogCategorie();
        $category->cname = $request->cname;
        $category->total = $request->total;
        $category->save();

        return redirect()->back()->with('success', 'Category added successfully.');
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $category = BlogCategorie::findOrFail($id);

        $request->validate([
            'cname' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $category->cname = $request->cname;
        $category->total = $request->total;
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    // Toggle category status (active/deactive)
    public function toggleStatus($id)
    {
        $category = BlogCategorie::findOrFail($id);
        $category->status = !$category->status; // Toggle status
        $category->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = BlogCategorie::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
