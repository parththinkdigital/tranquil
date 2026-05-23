<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $propertyId = $this->property ? (is_object($this->property) ? $this->property->id : $this->property) : 'NULL';
        return [
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:properties,slug,' . $propertyId . ',id',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:sale,rent',
            'status' => 'required|string|in:draft,published,archived,sold,rented',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'required|numeric|min:0',
            'furnished_status' => 'nullable|string',
            'sub_type' => 'nullable|string|max:50',
            'build_year' => 'nullable|integer|min:1800|max:' . (date('Y') + 5),
            'lat' => 'nullable|numeric|between:-90,90',
            'lng' => 'nullable|numeric|between:-180,180',
            'address' => 'required|string',
            'amenities' => 'nullable|array',
            'amenities.*' => 'exists:amenities,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ];
    }
}
