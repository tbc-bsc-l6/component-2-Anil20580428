<?php

namespace App\Http\Controllers;

use App\Models\OurBanner;
use App\Models\OurBannerFooter;
use App\Models\OurBannerImageCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurBannerController extends Controller
{
    public function index()
    {
        $banner = OurBanner::first();
        $bannerFooter = OurBannerFooter::first();
        $banners = OurBannerImageCenter::all();
        return view('admin.ourbanner', compact('banner', 'bannerFooter', 'banners'));
    }

  

    //image banner and also slider the banner in homepage
    public function imageBannerStore(Request $request)
    { {
            $request->validate([
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'description' => 'required|string',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
            ]);

            $logoPath = $request->file('logo')->store('logo', 'public');

            OurBannerImageCenter::create([
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'logo' => $logoPath,
                'status' => 1, // Default to active when adding a new banner
            ]);

            return redirect()->back()->with('success', 'Banner added successfully!');
        }
    }

    /**
     * Update an existing banner in the database.
     */
    public function imageBannerUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
        ]);

        $banner = OurBannerImageCenter::findOrFail($id);

        // Update fields
        $banner->name = $request->name;
        $banner->position = $request->position;
        $banner->description = $request->description;

        // Handle file upload (optional)
        if ($request->hasFile('logo')) {
            // Delete old file if exists
            if ($banner->logo && Storage::exists('public/' . $banner->logo)) {
                Storage::delete('public/' . $banner->logo);
            }

            // Store new file
            $banner->logo = $request->file('logo')->store('banners', 'public');
        }

        $banner->save();

        return redirect()->back()->with('success', 'Banner updated successfully!');
    }

    public function imageBannerToggle($id)
    {
        $banner = OurBannerImageCenter::findOrFail($id);

        // Toggle the status
        $banner->status = $banner->status ? 0 : 1;
        $banner->save();

        $status = $banner->status ? 'activated' : 'deactivated';
        return redirect()->back()->with('success', "Banner has been {$status}!");
    }
}
