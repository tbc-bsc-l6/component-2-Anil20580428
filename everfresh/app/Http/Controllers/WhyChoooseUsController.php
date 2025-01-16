<?php

namespace App\Http\Controllers;

use App\Models\ClintServiceUpdate;
use App\Models\WhyChoooseUs;
use Illuminate\Http\Request;

class WhyChoooseUsController extends Controller
{
    public function index()
    {
        $whyDescription = WhyChoooseUs::first();
        $clintServiceUpdate = ClintServiceUpdate::first();
        return view('admin.whychoose', compact('whyDescription', 'clintServiceUpdate'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:1000', // Adjust validation rules as needed
        ]);

        $whyDescription = WhyChoooseUs::first();

        $whyDescription->description = $request->input('description');

        $whyDescription->save();

        return redirect()->back()->with('success', 'Description updated successfully!');
    }
    public function serviceUpdate(Request $request)
    {
        $request->validate([
            'shine' => 'required|integer',
            'happy' => 'required|integer',
            'employee' => 'required|integer',
            'branch' => 'required|integer',
        ]);

        $clintServiceUpdate = ClintServiceUpdate::first();
        $clintServiceUpdate->update($request->all());

        return redirect()->back()->with('success', 'Data updated successfully!');
    }
}
