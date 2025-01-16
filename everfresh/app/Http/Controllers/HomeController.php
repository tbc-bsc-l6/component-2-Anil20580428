<?php

namespace App\Http\Controllers;

use App\Models\Homeslider;
use App\Models\Hometop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {

        $homeslider = Homeslider::all();
        return view('admin.homepage', compact('homeslider'));
    }


    // home page slider items add method
    public function store(Request $request)
    {
        $request->validate([
            'sliderimage' => 'required|mimes:jpeg,png,jpg|max:2048',
            'heading1' => 'required|string|max:50',
            'heading2' => 'required|string|max:50',
            'description' => 'required|string',
        ]);
        if ($request->hasFile('sliderimage')) {
            $file = $request->file('sliderimage');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('sliderimage', $filename, 'public');
            $fileURL = Storage::url($filePath);
        }
        Homeslider::create([
            'heading1' => $request->heading1,
            'heading2' => $request->heading2,
            'description' => $request->description,
            'sliderimage' => $fileURL,
        ]);
        return redirect()->back()->with('success', 'Slider successfully uploded');
    }

    public function sliderEdit(Request $request, $id)
    {
        $homeslider = Homeslider::findOrFail($id);
    
        $request->validate([
            'heading1' => 'required|string|max:50',
            'heading2' => 'required|string|max:50',
            'description' => 'required|string',
        ]);
    
        // Update fields
        $homeslider->heading1 = $request->heading1;
        $homeslider->heading2 = $request->heading2;
        $homeslider->description = $request->description;
    
    
        $homeslider->save();
    
        return redirect()->back()->with('success', 'Slider updated successfully');
    }
    public function sliderDelete($id)
{
    $slider = Homeslider::findOrFail($id);

    // Delete the slider image from storage
    if ($slider->sliderimage && Storage::exists($slider->sliderimage)) {
        Storage::delete($slider->sliderimage);
    }

    // Delete the record from the database
    $slider->delete();

    return redirect()->back()->with('success', 'Slider successfully deleted');
}

    
}
