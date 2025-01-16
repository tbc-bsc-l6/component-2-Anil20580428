<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;

class TextWidgetController extends Controller
{
    public function index()
    {
        $textWidget = TextWidget::first();

        return view('admin.textWidget', compact('textWidget'));
    }

    // Update data
    public function update(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $textWidget = TextWidget::first();
        $textWidget->title = $request->input('title');
        $textWidget->description = $request->input('description');
        $textWidget->save();

        return redirect()->back()->with('success', 'Text widget updated successfully!');
    }
}
