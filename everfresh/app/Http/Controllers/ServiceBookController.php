<?php

namespace App\Http\Controllers;

use App\Models\ServiceBook;
use Illuminate\Http\Request;

class ServiceBookController extends Controller
{
 

    public function index()
    {

        $serviceBook = ServiceBook::orderBy('created_at', 'desc')->get();

        return view('admin.servicebook', compact('serviceBook'));
    }

    public function toggleStatus($id)
    {
        $serviceBooking = ServiceBook::findOrFail($id);

        // Toggle the status between 1 and 0
        $serviceBooking->status = !$serviceBooking->status;
        $serviceBooking->save();

        return redirect()->back()->with('success', 'Booking status updated successfully!');
    }

    public function delete($id)
    {
        $serviceBooking = ServiceBook::findOrFail($id);

        // Delete the booking
        $serviceBooking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully!');
    }
}
