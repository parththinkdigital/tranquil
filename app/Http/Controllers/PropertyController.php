<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function home()
    {
        $featured = \App\Models\Property::with(['category', 'location', 'primaryImage'])
            ->published()
            ->latest()
            ->take(3)
            ->get();

        $latest = \App\Models\Property::with(['category', 'location', 'primaryImage'])
            ->published()
            ->latest()
            ->take(6)
            ->get();

        $categories = \App\Models\Category::where('is_active', true)->get();
        $locations = \App\Models\Location::where('is_active', true)->whereNull('parent_id')->get();

        return view('client.home', compact('featured', 'latest', 'categories', 'locations'));
    }

    public function index(Request $request)
    {
        $properties = \App\Models\Property::with(['category', 'location', 'primaryImage'])
            ->published()
            ->filter($request->all())
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $categories = \App\Models\Category::where('is_active', true)->get();
        $locations = \App\Models\Location::where('is_active', true)->get();

        return view('client.properties.index', compact('properties', 'categories', 'locations'));
    }

    public function show($slug)
    {
        $property = \App\Models\Property::with(['category', 'location', 'images', 'amenities', 'agent'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('client.properties.show', compact('property'));
    }
}
