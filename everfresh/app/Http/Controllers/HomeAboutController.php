<?php

namespace App\Http\Controllers;

use App\Models\About_2;
use App\Models\HomeAbout;
use App\Models\HomeAboutLeftItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAboutController extends Controller
{
    public function index()
    {

        $aboutTitle = HomeAbout::first();
        $aboutTitle2 = About_2::first();
        $aboutitem= HomeAboutLeftItem::all();

        return view('admin.homeabout', compact('aboutTitle','aboutitem','aboutTitle2'));
    }

    public function aboutAddItems(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);
        $file_Url = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = time().'_'.$file->getClientOriginalName();
            $file_path = $file->storeAs('logo', $file_name, 'public');
            $file_Url = Storage::url($file_path);
        }
        HomeAboutLeftItem::create([
            'title' => $request->title,
            'description' => $request->description,
            'logo' => $file_Url,
        ]);
        return redirect()->back()->with('success', 'new Categoro add successfull!!!');
    }

    public function titleUpdate(Request $request)
    {
        $aboutTitle = HomeAbout::firstOrFail();

        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutTitle->heading = $request->heading;
        $aboutTitle->description = $request->description;

        // Save the changes
        $aboutTitle->save();
        return redirect()->back()->with('success', 'About section title or description was successfully update');
    }

    public function title2Update(Request $request)
    {
        $aboutTitle = About_2::firstOrFail();

        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutTitle->heading = $request->heading;
        $aboutTitle->description = $request->description;

        // Save the changes
        $aboutTitle->save();
        return redirect()->back()->with('success', 'About section title or description was successfully update');
    }

     // Update Method
     public function update(Request $request, $id)
     {
         $aboutItem = HomeAboutLeftItem::findOrFail($id);
 
         // Update the item
         $aboutItem->title = $request->title;
         $aboutItem->description = $request->description;
 
         // Handle logo update
         if ($request->hasFile('logo')) {
             // Delete the old logo if it exists
             if ($aboutItem->logo && Storage::exists($aboutItem->logo)) {
                 Storage::delete($aboutItem->logo);
             }
 
             // Store the new logo
             $aboutItem->logo = $request->file('logo')->store('logos');
         }
 
         $aboutItem->save();
 
         return redirect()->back()->with('success', 'Item updated successfully.');
     }
 
     // Delete Method
     public function destroy($id)
     {
         $aboutItem = HomeAboutLeftItem::findOrFail($id);
 
         // Delete the logo file if it exists
         if ($aboutItem->logo && Storage::exists($aboutItem->logo)) {
             Storage::delete($aboutItem->logo);
         }
 
         $aboutItem->delete();
 
         return redirect()->back()->with('success', 'Item deleted successfully.');
     }
}
