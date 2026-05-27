<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'property_id',
        'property_type_id',
        'project_name',
        'bhk_type',
        'property_status',
        'total_price',
        'price_per_sq_ft',
        'carpet_area',
        'builtup_area',
        'city',
        'locality',
        'floor_number',
        'total_floors',
        'facing',
        'furnishing_status',
        'bathrooms',
        'balconies',
        'cover_image',
        'property_images',
        'videos',
        'short_description',
        'full_description',
        'amenities',
    ];

    protected $casts = [
        'property_images' => 'array',
        'amenities' => 'array',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
