<?php

namespace App\Http\Controllers;

use App\Models\OurProject;
use App\Models\OurProjectFlooring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurProjectController extends Controller
{
    public function index()
    {

        $ourProjectTitle = OurProject::first();
        $floorings = OurProjectFlooring::all();

        return view('admin.ourprojects', compact('ourProjectTitle', 'floorings'));
    }

    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Assuming you're editing a single project with a specific ID
        $project = OurProject::find(1); // Replace '1' with the appropriate ID or dynamic logic

        if ($project) {
            // Update the project with new data
            $project->title = $request->input('title');
            $project->description = $request->input('description');
            $project->save();

            // Redirect back with success message
            return redirect()->back()->with('success', 'Project updated successfully.');
        }

        // If the project is not found
        return redirect()->back()->with('error', 'Project not found.');
    }

    public function storeFlooring(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'projectType' => 'required|string',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'author' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'website' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project', 'public');
        }

        // Create the new project flooring record
        OurProjectFlooring::create([
            'projectType' => $request->input('projectType'),
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'author' => $request->input('author'),
            'category' => $request->input('category'),
            'website' => $request->input('website'),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Project flooring added successfully!');
    }
    public function flooringDelete($id)
    {
        $flooring = OurProjectFlooring::findOrFail($id);
        if ($flooring->image) {
            Storage::delete('public/images/' . $flooring->image);
        }
        $flooring->delete();

        return redirect()->back()->with('success', 'Flooring deleted successfully!');
    }

    public function flooringUpdate(Request $request, $id)
    {
        $request->validate([
            'projectType' => 'required|string',
            'title' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'author' => 'nullable|string',
            'date' => 'required|date',
            'website' => 'required|string',
            'category' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $flooring = OurProjectFlooring::findOrFail($id);
        $flooring->projectType = $request->projectType;
        $flooring->title = $request->title;
        $flooring->name = $request->name;
        $flooring->description = $request->description;
        $flooring->author = $request->author;
        $flooring->date = $request->date;
        $flooring->website = $request->website;
        $flooring->category = $request->category;
        if ($request->hasFile('image')) {
            if ($flooring->image && Storage::exists('public/' . $flooring->image)) {
                Storage::delete('public/' . $flooring->image);
            }
            $imagePath = $request->file('image')->store('project', 'public');
            $flooring->image = $imagePath;
        }
        if ($flooring->save()) {
            return redirect()->back()->with('success', 'Project updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update the project');
        }
    }

    public function toggleStatus($id)
    {
        $flooring = OurProjectFlooring::findOrFail($id);

        // Toggle the status
        $flooring->status = $flooring->status == 1 ? 0 : 1;

        // Save the changes to the database
        $flooring->save();

        return redirect()->back()->with('success', 'Project status updated successfully');
    }

    public function flooringShow($id){
        $flooring = OurProjectFlooring::findOrFail($id);
        return view('admin.OurProjectShow',compact('flooring'));
    }
}
