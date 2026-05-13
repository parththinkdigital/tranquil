<?php

namespace App\Actions\Properties;

use App\Models\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreatePropertyAction
{
    public function execute(array $data, int $userId): Property
    {
        return DB::transaction(function () use ($data, $userId) {
            $data['user_id'] = $userId;
            $data['slug'] = $this->generateUniqueSlug($data['title']);
            
            $property = Property::create($data);
            
            if (isset($data['amenities'])) {
                $property->amenities()->sync($data['amenities']);
            }
            
            return $property;
        });
    }

    protected function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $count = Property::where('slug', 'LIKE', "{$slug}%")->count();
        
        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
