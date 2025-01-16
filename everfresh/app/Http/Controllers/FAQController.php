<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\FAQaddList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FAQController extends Controller
{
    public function index()
    {
        $faq = FAQ::first();
        $faqItem = FAQaddList::all();
        return view('admin.faq', compact('faq', 'faqItem'));
    }

    public function faqUpdate(Request $request)
    {
        $bestplan =  FAQ::firstOrFail();
        $request->validate([
            'description' => 'required|string',

        ]);
        $bestplan->description = $request->input('description');
        $bestplan->save();
        return redirect()->back()->with('success', 'FAQ description successfully update');
    }

    //add faq list function
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        FAQaddList::create([
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'faq list items added successfully!');
    }

    public function faqDestroy($id)
    {
        $member = FAQaddList::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'faq list  deleted successfully!');
    }

    public function faqlistUpdate(Request $request, $id)
    {
        $member = FAQaddList::findOrFail($id);

        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);


        $member->heading = $request->heading;
        $member->description = $request->description;
        $member->save();

        return redirect()->back()->with('success', 'Member updated successfully!');
    }



    public function toggleStatus($id)
    {
        $member = FAQaddList::findOrFail($id);
        $member->status = !$member->status; // Toggle status
        $member->save();

        return redirect()->back()->with('success', 'Member status updated successfully!');
    }
}
