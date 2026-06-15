<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'tag',
        'image',
        'short_desc',
        'short_para',
        'long_desc1',
        'banner_img',
        'long_desc2',
        'event_date',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}