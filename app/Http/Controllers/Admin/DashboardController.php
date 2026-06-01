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
            'total_property_types' => \App\Models\PropertyType::count(),
            'total_blogs' => \App\Models\Blog::count(),
            'total_testimonials' => \App\Models\Testimonial::count(),
            'total_contacts' => \App\Models\Contact::count(),
            'total_leads' => \App\Models\Lead::count(),
        ];

        $recent_properties = \App\Models\Property::with(['category', 'location'])
            ->latest()
            ->take(5)
            ->get();

        $recent_contacts = \App\Models\Contact::latest()->take(5)->get();
        $recent_blogs = \App\Models\Blog::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_properties', 'recent_contacts', 'recent_blogs'));
    }
}
