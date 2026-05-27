<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::latest()->paginate(10);
        return view('admin.property.index', compact('properties'));
    }

    public function create()
    {
        return view('admin.property.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Property::create($request->all());

        return redirect()->route('admin.property.index')->with('success', 'Property created successfully.');
    }

    public function show(string $id)
    {
        // View single property logic if needed
    }

    public function edit(Property $property)
    {
        return view('admin.property.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $property->update($request->all());

        return redirect()->route('admin.property.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.property.index')->with('success', 'Property deleted successfully.');
    }
}
