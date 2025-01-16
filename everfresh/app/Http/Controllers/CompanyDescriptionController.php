<?php

namespace App\Http\Controllers;

use App\Models\Hometop;
use App\Models\SliderLeft;
use App\Models\SliderRight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyDescriptionController extends Controller
{
    public function index()
    {
        $hometop = Hometop::first();
        $sliderRight = SliderRight::first();
        $sliderLeft = SliderLeft::first();
        return view('admin.companyDesc', compact('sliderRight', 'sliderLeft','hometop'));
    }

    public function update(Request $request)
    {
        $hometopupdate = Hometop::firstOrFail();

        $request->validate([
            'logo' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Allow empty logo if no new file is uploaded
            'number' => 'required|numeric', // Use between to define valid range
            'location' => 'required|string|max:50',
        ]);

        // Update fields
        $hometopupdate->number = $request->number;
        $hometopupdate->location = $request->location;

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($hometopupdate->logo && Storage::exists('public/' . $hometopupdate->logo)) {
                Storage::delete('public/' . $hometopupdate->logo);
            }
            // Store new logo
            $hometopupdate->logo = $request->file('logo')->store('logo', 'public');
        }

        $hometopupdate->save();

        return redirect()->back()->with('success', 'Brand logo successfully updated');
    }

    public function leftUpdate(Request $request)
    {
        // Fetch the first SliderLeft record, or fail if not found
        $sliderLeftUpdate = SliderLeft::firstOrFail();

        // Validate the incoming request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'day1' => 'required|string|max:255',
            'day2' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'phone' => 'required|string|max:15',  // Adjust validation rule for phone number format if needed
        ]);

        // Update the fields of the retrieved record
        $sliderLeftUpdate->heading = $request->heading;
        $sliderLeftUpdate->day1 = $request->day1;
        $sliderLeftUpdate->day2 = $request->day2;
        $sliderLeftUpdate->title = $request->title;
        $sliderLeftUpdate->phone = $request->phone;

        // Save the updated record
        $sliderLeftUpdate->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Slider Left updated successfully.');
    }

    public function rightUpdate(Request $request)
    {
        // Fetch the first SliderLeft record, or fail if not found
        $sliderRightUpdate = SliderRight::firstOrFail();

        // Validate the incoming request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',  // Adjust validation rule for phone number format if needed
        ]);

        // Update the fields of the retrieved record
        $sliderRightUpdate->heading = $request->heading;
        $sliderRightUpdate->description = $request->description;


        // Save the updated record
        $sliderRightUpdate->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Slider Right updated successfully.');
    }
}
