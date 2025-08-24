<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MechanicAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['activeTab' => 'mechanic']);
    }

    public function showRegisterForm()
    {
        return view('auth.register', ['activeTab' => 'mechanic']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('mechanic')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/mechanic/dashboard');
        }
        return back()->withErrors(['mechanic_email' => 'Invalid credentials'])->withInput(['mechanic_email' => $request->email])->with('activeTab', 'mechanic');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:mechanics,email',
            'phone' => 'required|string|max:255',
            'password' => 'required|min:6|confirmed',
            // 'business_name' => 'required|string|max:255',
            // 'location' => 'required|string|max:255',
        ]);
        $mechanic = Mechanic::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'business_name' => $request->business_name ?? 'Malkayne Devs',
            'location' => $request->location ?? 'Malkayne Devs HQ',
        ]);
        Auth::guard('mechanic')->login($mechanic);
        return redirect('/mechanic/dashboard');
    }
} 