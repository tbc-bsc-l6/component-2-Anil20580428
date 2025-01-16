<?php

namespace App\Http\Controllers;

use App\Models\OurBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CallActionController extends Controller
{
    public function index(){

        $banner = OurBanner::first();
        return view('admin.callaction',compact('banner'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validating the logo image file if it's provided
            'heading' => 'required|string',
            'description' => 'required|string',
        ]);

        $banner = OurBanner::firstOrFail();

        if ($request->hasFile('logo')) {
            if ($banner->logo && Storage::exists('public/' . $banner->logo)) {
                Storage::delete('public/' . $banner->logo);
            }

            $logoPath = $request->file('logo')->store('banners', 'public');
            $banner->logo = $logoPath;
        }

        $banner->heading = $request->heading;
        $banner->description = $request->description;

        $banner->save();
        return redirect()->back()->with('success', 'Banner updated successfully!');
    }
}
