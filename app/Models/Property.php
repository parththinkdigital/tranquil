<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory, \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = [
        'user_id', 'category_id', 'location_id', 'title', 'slug', 'description', 
        'price', 'type', 'status', 'bedrooms', 'bathrooms', 'area', 
        'furnished_status', 'sub_type', 'build_year', 'lat', 'lng', 'address', 
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
            if (\Illuminate\Support\Facades\DB::getDriverName() === 'sqlite') {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'like', "%{$keyword}%")
                      ->orWhere('description', 'like', "%{$keyword}%");
                });
            } else {
                $query->whereFullText(['title', 'description'], $keyword);
            }
        });

        $query->when($filters['category_id'] ?? null, fn($q, $v) => $q->where('category_id', $v));
        $query->when($filters['location_id'] ?? null, fn($q, $v) => $q->where('location_id', $v));
        $query->when($filters['type'] ?? null, fn($q, $v) => $q->where('type', $v));
        $query->when($filters['min_price'] ?? null, fn($q, $v) => $q->where('price', '>=', $v));
        $query->when($filters['max_price'] ?? null, fn($q, $v) => $q->where('price', '<=', $v));
        $query->when($filters['bedrooms'] ?? null, fn($q, $v) => $q->where('bedrooms', '>=', $v));
        $query->when($filters['bathrooms'] ?? null, fn($q, $v) => $q->where('bathrooms', '>=', $v));

        $query->when($filters['sub_types'] ?? null, function ($q, $v) {
            $v = is_array($v) ? $v : explode(',', $v);
            $q->whereIn('sub_type', $v);
        });

        $query->when($filters['bhk'] ?? null, function ($q, $bhk) {
            $map = [
                'RK' => 'Rk',
                'rk' => 'Rk',
                'Rk' => 'Rk',
                '1 BHK' => '1bhk',
                '1 bhk' => '1bhk',
                '1BHK' => '1bhk',
                '1bhk' => '1bhk',
                '2 BHK' => '2bhk',
                '2 bhk' => '2bhk',
                '2BHK' => '2bhk',
                '2bhk' => '2bhk',
                '3 BHK' => '3bhk',
                '3 bhk' => '3bhk',
                '3BHK' => '3bhk',
                '3bhk' => '3bhk',
                '4 BHK' => '4bhk',
                '4 bhk' => '4bhk',
                '4BHK' => '4bhk',
                '4bhk' => '4bhk',
            ];
            $subType = $map[$bhk] ?? strtolower(str_replace(' ', '', $bhk));
            $q->where('sub_type', $subType);
        });
    }
}
