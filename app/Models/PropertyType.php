<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    //
    protected $fillable = ['property_id', 'name'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function propertyDetails()
    {
        return $this->hasMany(PropertyDetail::class);
    }
}
