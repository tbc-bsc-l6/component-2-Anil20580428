<?php

namespace App\Http\Controllers;

use App\Models\SliderLeft;
use App\Models\SliderRight;
use Illuminate\Http\Request;

class SliderButtonController extends Controller
{
    public function index()
    {
        $sliderRight = SliderRight::first();
        $sliderLeft = SliderLeft::first();
        return view('admin.sliderbutton', compact('sliderRight', 'sliderLeft'));
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
