<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'name'
    ];

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
