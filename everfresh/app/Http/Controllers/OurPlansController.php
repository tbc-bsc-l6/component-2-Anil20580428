<?php

namespace App\Http\Controllers;

use App\Models\OurBestPlan;
use App\Models\OurPlanToure;
use Illuminate\Http\Request;

class OurPlansController extends Controller
{
    public function index()
    {
        $plans = OurBestPlan::first();
        $toureplan = OurPlanToure::all();
        return view('admin.plans', compact('plans', 'toureplan'));
    }
    public function ourPlanEdit(Request $request)
    {
        $bestplan =  OurBestPlan::firstOrFail();
        $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',

        ]);
        $bestplan->heading = $request->input('heading');
        $bestplan->description = $request->input('description');
        $bestplan->save();
        return redirect()->back()->with('success', 'Meet Our Teams heading or description successfully update');
    }

    // our plan new items add

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'planType' => 'required|string',
            'cleaning' => 'required|string',
            'moving' => 'required|string',
            'calling' => 'required|string',
            'work' => 'required|string',
            'suggestion' => 'required|string',
            'enhancedsecurity' => 'required|string',
        ]);

        // Save the plan
        OurPlanToure::create([
            'price' => $request->price,
            'planType' => $request->planType,
            'cleaning' => $request->cleaning,
            'moving' => $request->moving,
            'calling' => $request->calling,
            'work' => $request->work,
            'suggestion' => $request->suggestion,
            'enhancedsecurity' => $request->enhancedsecurity,
        ]);

        return redirect()->back()->with('success', 'Plan added successfully!');
    }


    // Update the plan in the database
    public function tourePlanUpdate(Request $request, $id)
    {
        // Validate the form inputs
        $request->validate([
            'price' => 'required|numeric',
            'planType' => 'required|string|max:255',
            'cleaning' => 'required|string|max:255',
            'moving' => 'required|string|max:255',
            'calling' => 'required|string|max:255',
            'work' => 'required|string|max:255',
            'suggestion' => 'required|string|max:255',
            'enhancedsecurity' => 'required|string|max:255',
        ]);

        // Find the plan and update its details
        $plan = OurPlanToure::findOrFail($id);

        $plan->update([
            'price' => $request->price,
            'planType' => $request->planType,
            'cleaning' => $request->cleaning,
            'moving' => $request->moving,
            'calling' => $request->calling,
            'work' => $request->work,
            'suggestion' => $request->suggestion,
            'enhancedsecurity' => $request->enhancedsecurity,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Plan updated successfully!');
    }

    public function planDestroy($id)
    {
        // Find the plan by ID
        $plan = OurPlanToure::findOrFail($id);

        // Delete the plan
        $plan->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Plan deleted successfully!');
    }
}
