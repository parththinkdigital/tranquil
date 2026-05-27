<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyDetail;
use App\Models\Property;
use App\Models\PropertyType;

class PropertyDetailController extends Controller
{
    public function index()
    {
        $propertyDetails = PropertyDetail::with(['property', 'propertyType'])->latest()->get();
        return view('admin.property_details.index', compact('propertyDetails'));
    }

    public function create()
    {
        $properties = Property::all();
        return view('admin.property_details.create', compact('properties'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'property_type_id' => 'required|exists:property_types,id',
            'project_name' => 'nullable|string|max:255',
            'bhk_type' => 'nullable|string|max:255',
            'property_status' => 'nullable|string|max:255',
            'total_price' => 'nullable|numeric',
            'price_per_sq_ft' => 'nullable|numeric',
            'carpet_area' => 'nullable|string|max:255',
            'builtup_area' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'locality' => 'nullable|string|max:255',
            'floor_number' => 'nullable|string|max:255',
            'total_floors' => 'nullable|string|max:255',
            'facing' => 'nullable|string|max:255',
            'furnishing_status' => 'nullable|string|max:255',
            'bathrooms' => 'nullable|string|max:255',
            'balconies' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|max:2048',
            'property_images.*' => 'nullable|image|max:2048',
            'videos' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'amenities' => 'nullable|array',
        ]);

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('properties/covers', 'public');
        }

        if ($request->hasFile('property_images')) {
            $images = [];
            foreach ($request->file('property_images') as $file) {
                $images[] = $file->store('properties/images', 'public');
            }
            $validated['property_images'] = $images;
        }

        PropertyDetail::create($validated);

        return redirect()->route('admin.property-details.index')->with('success', 'Property Details created successfully.');
    }

    public function edit(PropertyDetail $propertyDetail)
    {
        $properties = Property::all();
        $propertyTypes = PropertyType::where('property_id', $propertyDetail->property_id)->get();
        return view('admin.property_details.edit', compact('propertyDetail', 'properties', 'propertyTypes'));
    }

    public function update(Request $request, PropertyDetail $propertyDetail)
    {
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'property_type_id' => 'required|exists:property_types,id',
            'project_name' => 'nullable|string|max:255',
            'bhk_type' => 'nullable|string|max:255',
            'property_status' => 'nullable|string|max:255',
            'total_price' => 'nullable|numeric',
            'price_per_sq_ft' => 'nullable|numeric',
            'carpet_area' => 'nullable|string|max:255',
            'builtup_area' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'locality' => 'nullable|string|max:255',
            'floor_number' => 'nullable|string|max:255',
            'total_floors' => 'nullable|string|max:255',
            'facing' => 'nullable|string|max:255',
            'furnishing_status' => 'nullable|string|max:255',
            'bathrooms' => 'nullable|string|max:255',
            'balconies' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|max:2048',
            'property_images.*' => 'nullable|image|max:2048',
            'videos' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'amenities' => 'nullable|array',
        ]);

        if ($request->hasFile('cover_image')) {
            if ($propertyDetail->cover_image && \Storage::disk('public')->exists($propertyDetail->cover_image)) {
                \Storage::disk('public')->delete($propertyDetail->cover_image);
            }
            $validated['cover_image'] = $request->file('cover_image')->store('properties/covers', 'public');
        }

        if ($request->hasFile('property_images')) {
            if ($propertyDetail->property_images) {
                foreach ($propertyDetail->property_images as $oldImage) {
                    if (\Storage::disk('public')->exists($oldImage)) {
                        \Storage::disk('public')->delete($oldImage);
                    }
                }
            }
            $images = [];
            foreach ($request->file('property_images') as $file) {
                $images[] = $file->store('properties/images', 'public');
            }
            $validated['property_images'] = $images;
        }

        $propertyDetail->update($validated);

        return redirect()->route('admin.property-details.index')->with('success', 'Property Details updated successfully.');
    }

    public function destroy(PropertyDetail $propertyDetail)
    {
        if ($propertyDetail->cover_image && \Storage::disk('public')->exists($propertyDetail->cover_image)) {
            \Storage::disk('public')->delete($propertyDetail->cover_image);
        }
        if ($propertyDetail->property_images) {
            foreach ($propertyDetail->property_images as $oldImage) {
                if (\Storage::disk('public')->exists($oldImage)) {
                    \Storage::disk('public')->delete($oldImage);
                }
            }
        }
        
        $propertyDetail->delete();

        return redirect()->route('admin.property-details.index')->with('success', 'Property Details deleted successfully.');
    }

    public function getPropertyTypes(Property $property)
    {
        return response()->json($property->types);
    }
}
