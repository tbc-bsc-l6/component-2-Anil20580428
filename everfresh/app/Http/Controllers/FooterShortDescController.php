<?php

namespace App\Http\Controllers;

use App\Models\FooterShortDesc;
use Illuminate\Http\Request;

class FooterShortDescController extends Controller
{
    public function index()
    {
        $shortDesc = FooterShortDesc::first();
        return view('admin.footerShortDesc', compact('shortDesc'));
    }

    public function update(Request $request)
    {
        // Validate the input
        $request->validate([
            'description' => 'required|string|max:500', // Adjust max length as needed
        ]);
        $shortDesc = FooterShortDesc::first();
        $shortDesc->update([
            'description' => $request->input('description'),
        ]);
        return redirect()->back()->with('success', 'Description updated successfully!');
    }
}
