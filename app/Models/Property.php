<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory, \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = [
        'user_id', 'category_id', 'location_id', 'title', 'slug', 'description', 
        'price', 'type', 'status', 'bedrooms', 'bathrooms', 'area', 
        'furnished_status', 'build_year', 'lat', 'lng', 'address', 
        'meta_title', 'meta_description'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'area' => 'decimal:2',
        'lat' => 'decimal:7',
        'lng' => 'decimal:7',
        'build_year' => 'integer',
        'bedrooms' => 'integer',
        'bathrooms' => 'integer',
    ];

    // Relationships
    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class)->orderBy('sort_order');
    }

    public function primaryImage()
    {
        return $this->hasOne(PropertyImage::class)->where('is_primary', true);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? null, function ($query, $keyword) {
            $query->whereFullText(['title', 'description'], $keyword);
        });

        $query->when($filters['category_id'] ?? null, fn($q, $v) => $q->where('category_id', $v));
        $query->when($filters['location_id'] ?? null, fn($q, $v) => $q->where('location_id', $v));
        $query->when($filters['type'] ?? null, fn($q, $v) => $q->where('type', $v));
        $query->when($filters['min_price'] ?? null, fn($q, $v) => $q->where('price', '>=', $v));
        $query->when($filters['max_price'] ?? null, fn($q, $v) => $q->where('price', '<=', $v));
        $query->when($filters['bedrooms'] ?? null, fn($q, $v) => $q->where('bedrooms', '>=', $v));
        $query->when($filters['bathrooms'] ?? null, fn($q, $v) => $q->where('bathrooms', '>=', $v));
    }
}
