<?php

namespace App\Http\Controllers;

use App\Models\OurBannerFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterLongDesController extends Controller
{
    public function index()
    {
        $bannerFooter = OurBannerFooter::first();
        return view('admin.footerLong', compact('bannerFooter'));
    }

    //footer banner
    public function footerUpdate(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validating the logo image file if it's provided
            'description' => 'required|string',
        ]);

        $banner = OurBannerFooter::firstOrFail();

        if ($request->hasFile('logo')) {
            if ($banner->logo && Storage::exists('public/' . $banner->logo)) {
                Storage::delete('public/' . $banner->logo);
            }

            $logoPath = $request->file('logo')->store('banners', 'public');
            $banner->logo = $logoPath;
        }
        $banner->description = $request->description;

        $banner->save();
        return redirect()->back()->with('success', 'Banner footer updated successfully!');
    }
}
