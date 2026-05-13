<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_properties' => \App\Models\Property::count(),
            'published_properties' => \App\Models\Property::published()->count(),
            'total_inquiries' => \App\Models\Inquiry::count(),
            'total_leads' => \App\Models\Lead::count(),
        ];

        $recent_properties = \App\Models\Property::with(['category', 'location'])
            ->latest()
            ->take(5)
            ->get();

        $recent_inquiries = \App\Models\Inquiry::with('property')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_properties', 'recent_inquiries'));
    }
}
