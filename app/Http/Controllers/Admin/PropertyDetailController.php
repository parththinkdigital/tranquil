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
            $file = $request->file('cover_image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/coverimg'), $filename);
            $validated['cover_image'] = 'uploads/coverimg/' . $filename;
        }

        if ($request->hasFile('property_images')) {
            $images = [];
            foreach ($request->file('property_images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/propertyimgs'), $filename);
                $images[] = 'uploads/propertyimgs/' . $filename;
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
            if ($propertyDetail->cover_image && file_exists(public_path($propertyDetail->cover_image))) {
                unlink(public_path($propertyDetail->cover_image));
            }
            $file = $request->file('cover_image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/coverimg'), $filename);
            $validated['cover_image'] = 'uploads/coverimg/' . $filename;
        }

        // --- Property Images: handle reorder + delete + new uploads ---

        // 1. Delete physically removed images
        if ($request->filled('deleted_images')) {
            $toDelete = json_decode($request->input('deleted_images'), true) ?? [];
            foreach ($toDelete as $deletedPath) {
                $fullPath = public_path($deletedPath);
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }
            }
        }

        // 2. Start with the existing images in their (possibly reordered) sequence
        $finalImages = $request->input('existing_images', []);

        // 3. Append any new file uploads
        if ($request->hasFile('property_images')) {
            foreach ($request->file('property_images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/propertyimgs'), $filename);
                $finalImages[] = 'uploads/propertyimgs/' . $filename;
            }
        }

        // 4. Persist the merged, reordered list (null if empty to clear the column)
        $validated['property_images'] = !empty($finalImages) ? $finalImages : null;

        $propertyDetail->update($validated);

        return redirect()->route('admin.property-details.index')->with('success', 'Property Details updated successfully.');
    }

    public function destroy(PropertyDetail $propertyDetail)
    {
        if ($propertyDetail->cover_image && file_exists(public_path($propertyDetail->cover_image))) {
            unlink(public_path($propertyDetail->cover_image));
        }
        if ($propertyDetail->property_images) {
            foreach ($propertyDetail->property_images as $oldImage) {
                if (file_exists(public_path($oldImage))) {
                    unlink(public_path($oldImage));
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
