<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clientTitle = Client::first();
        $clientBrand = ClientBrand::orderBy('created_at', 'desc')->get();
        return view('admin.clients', compact('clientTitle','clientBrand'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000', // Adjust validation rules as needed
        ]);

        $clientTitle = Client::first();
        $clientTitle->title = $request->input('title');
        $clientTitle->description = $request->input('description');

        $clientTitle->save();

        return redirect()->back()->with('success', 'Client title updated successfully!');
    }

    public function store(Request $request)
    {


        $request->validate([
            'logo' => 'required|image|max:2048',
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file_path = $file->storeAs('logo', $file_name, 'public');
            $fileUrl = Storage::url($file_path);
        }

        ClientBrand::create([
            'logo' => $fileUrl,
        ]);
        return redirect()->back()->with('success', 'company logo successfully uploded');
    }

    public function Clientupdate(Request $request, $id)
    {
        $brand = ClientBrand::findOrFail($id);

        $request->validate([
            'logo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // Delete old file
            if ($brand->logo) {
                Storage::delete(str_replace('/storage', 'public', $brand->logo));
            }

            $file = $request->file('logo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file_path = $file->storeAs('logo', $file_name, 'public');
            $brand->logo = Storage::url($file_path);
        }

        $brand->save();
        return redirect()->back()->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        $brand = ClientBrand::findOrFail($id);

        if ($brand->logo) {
            Storage::delete(str_replace('/storage', 'public', $brand->logo));
        }

        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully');
    }

    public function toggleStatus($id)
    {
        $brand = ClientBrand::findOrFail($id);
        $brand->status = !$brand->status; // Toggle status
        $brand->save();

        return redirect()->back()->with('success', 'Status updated successfully');
    }
}
