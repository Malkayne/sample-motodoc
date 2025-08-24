<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // The dashboard view will handle all the data fetching through relationships
        // This keeps the controller simple and allows the view to be self-contained
        return view('user.dashboard');
    }
} 