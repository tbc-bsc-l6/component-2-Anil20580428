<?php

namespace App\Http\Controllers;

use App\Models\AwesomeService;
use App\Models\AwesomeServiceTitle;
use Illuminate\Http\Request;

class OurAwesomeServiceController extends Controller
{
    public function index()
    {
        $awesomeServiceTitle = AwesomeServiceTitle::first();
        $services = AwesomeService::all();
        return view('admin.awesomeService', compact('services','awesomeServiceTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        AwesomeService::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 1, // Default status is Active
        ]);

        return redirect()->back()->with('success', 'Service added successfully');
    }


    public function titleupdate(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = AwesomeServiceTitle::firstOrFail();
        $service->update([
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Service updated successfully');
    }


    public function toggleStatus($id)
    {
        $service = AwesomeService::findOrFail($id);
        $service->status = !$service->status;
        $service->save();

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = AwesomeService::findOrFail($id);
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = AwesomeService::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully');
    }
}
