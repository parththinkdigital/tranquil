<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        $propertyTypes = PropertyType::with('property')->latest()->paginate(10);
        return view('admin.property_type.index', compact('propertyTypes'));
    }

    public function create()
    {
        $properties = Property::all();
        return view('admin.property_type.create', compact('properties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
        ]);

        PropertyType::create($request->all());

        return redirect()->route('admin.property-type.index')->with('success', 'Property Type created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(PropertyType $propertyType)
    {
        $properties = Property::all();
        return view('admin.property_type.edit', compact('propertyType', 'properties'));
    }

    public function update(Request $request, PropertyType $propertyType)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
        ]);

        $propertyType->update($request->all());

        return redirect()->route('admin.property-type.index')->with('success', 'Property Type updated successfully.');
    }

    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();
        return redirect()->route('admin.property-type.index')->with('success', 'Property Type deleted successfully.');
    }
}
