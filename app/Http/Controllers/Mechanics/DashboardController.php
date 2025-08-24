<?php

namespace App\Http\Controllers\Mechanics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $mechanic = Auth::guard('mechanic')->user();
        
        // Get repair requests statistics
        $totalRequests = $mechanic->repairRequests()->count();
        $completedRequests = $mechanic->repairRequests()->where('status', 'completed')->count();
        $pendingRequests = $mechanic->repairRequests()->whereIn('status', ['pending', 'accepted', 'in_progress'])->count();
        
        // Calculate total revenue from paid invoices
        $totalRevenue = $mechanic->invoices()->where('status', 'paid')->sum('amount');
        
        // Get unique customers count
        $totalCustomers = $mechanic->repairRequests()->distinct('user_id')->count();
        
        // Get active services count
        $activeServices = $mechanic->services()->count();
        
        // Get active maintenance plans count
        $activeSubscriptions = $mechanic->maintenancePlans()->where('is_active', true)->count();
        
        // Calculate average rating from reviews
        $averageRating = $mechanic->reviews()->avg('rating') ?? 0;
        $totalReviews = $mechanic->reviews()->count();
        
        // Get recent repair requests
        $recentRequests = $mechanic->repairRequests()
            ->with(['user', 'vehicle'])
            ->latest()
            ->take(5)
            ->get();
        
        // Get recent reviews
        $recentReviews = $mechanic->reviews()
            ->with('user')
            ->latest()
            ->take(3)
            ->get();
        
        // Get recent invoices
        $recentInvoices = $mechanic->invoices()
            ->with('user')
            ->latest()
            ->take(3)
            ->get();
        
        return view('mechanic.dashboard', compact(
            'totalRequests',
            'completedRequests',
            'pendingRequests',
            'totalRevenue',
            'totalCustomers',
            'activeServices',
            'activeSubscriptions',
            'averageRating',
            'totalReviews',
            'recentRequests',
            'recentReviews',
            'recentInvoices'
        ));
    }
} 