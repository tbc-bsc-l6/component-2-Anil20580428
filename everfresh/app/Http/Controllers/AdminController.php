<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->route('admin.login')->withErrors(['error' => 'Invalid email or password']);
        }
    }

    public function logout(Request $request)
    {
        // Log out the user and invalidate session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}
