<?php

namespace App\Http\Controllers;

use App\Models\MeetOurTeam;
use App\Models\TeamMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MeetOurTeamController extends Controller
{
    public function index()
    {
        $meetourteam = MeetOurTeam::first();
        $members = TeamMembers::all();

        return view('admin.meetourteams', compact('meetourteam', 'members'));
    }
    // meet our team banner update 
    public function headingUpdate(Request $request)
    {
        $headinUpdates =  MeetOurTeam::firstOrFail();
        $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',

        ]);
        $headinUpdates->heading = $request->input('heading');
        $headinUpdates->description = $request->input('description');
        $headinUpdates->save();
        return redirect()->back()->with('success', 'Meet Our Teams heading or description successfully update');
    }
    //add member function
    public function memberStore(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalName();
            $file_path = $file->storeAs('image', $imageName, 'public');
            $file_Url = Storage::url($file_path);
        }

        TeamMembers::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $file_Url,
        ]);

        return redirect()->back()->with('success', 'Member added successfully!');
    }

    public function memberDestroy($id)
    {
        $member = TeamMembers::findOrFail($id);

        if ($member->image) {
            $imagePath = public_path('image/' . $member->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $member->delete();
        return redirect()->back()->with('success', 'Member deleted successfully!');
    }

    public function memberUpdate(Request $request, $id)
    {
        $member = TeamMembers::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $member->image = $imageName;
        }

        $member->name = $request->name;
        $member->position = $request->position;
        $member->save();

        return redirect()->back()->with('success', 'Member updated successfully!');
    }



    public function toggleStatus($id)
    {
        $member = TeamMembers::findOrFail($id);
        $member->status = !$member->status; // Toggle status
        $member->save();

        return redirect()->back()->with('success', 'Member status updated successfully!');
    }
}
