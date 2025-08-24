<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['activeTab' => 'user']);
    }

    public function showRegisterForm()
    {
        return view('auth.register', ['activeTab' => 'user']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/user/dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput(['email' => $request->email])->with('activeTab', 'user');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:255',
            // 'license_plate' => 'required|string|max:255',
            // 'make' => 'required|string|max:255',
            // 'model' => 'required|string|max:255',
            // 'year' => 'required|integer|min:1900|max:' . date('Y'),
            // 'vin' => 'required|string|max:17',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        // $vehicle = $user->vehicles()->create([
        //     'license_plate' => $request->license_plate,
        //     'make' => $request->make,
        //     'model' => $request->model,
        //     'year' => $request->year,
        //     'vin' => $request->vin,
        // ]);
        Auth::guard('web')->login($user);
        return redirect('/user/dashboard');
    }
} 