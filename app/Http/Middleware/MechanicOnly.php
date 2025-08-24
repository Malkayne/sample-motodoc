<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MechanicOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('mechanic')->check()) {
            return $next($request);
        }
        return redirect('/mechanic/login');
    }
} 