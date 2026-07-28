<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'location_id',
        'name',
        'title',
        'slug',
        'description',
        'price',
        'type',
        'status',
        'bedrooms',
        'bathrooms',
        'area',
        'furnished_status',
        'address',
        'lat',
        'lng',
    ];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class)->withTimestamps();
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function types()
    {
        return $this->hasMany(PropertyType::class);
    }

    public function scopePublished($query)
    {
        return $query; // Placeholder for actual published logic if column is added later
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function propertyDetails()
    {
        return $this->hasMany(PropertyDetail::class);
    }
}
