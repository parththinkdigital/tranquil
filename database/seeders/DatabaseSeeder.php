<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Category;
use App\Models\Location;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // 2. Users
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@tranquilstead.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);
        $admin->assignRole($adminRole);


        // 3. Categories
        $categories = ['Apartment', 'Villa', 'Penthouse', 'Townhouse', 'Land'];
        foreach ($categories as $cat) {
            Category::create(['name' => $cat, 'slug' => \Illuminate\Support\Str::slug($cat)]);
        }

        // 4. Locations
        $city = Location::create(['name' => 'Mumbai', 'slug' => 'mumbai', 'type' => 'city']);
        $district = Location::create(['parent_id' => $city->id, 'name' => 'Bandra', 'slug' => 'bandra', 'type' => 'district']);
        Location::create(['parent_id' => $district->id, 'name' => 'Bandra West', 'slug' => 'bandra-west', 'type' => 'locality']);

        // 5. Amenities
        $amenities = [
            ['name' => 'Swimming Pool', 'icon' => 'waves'],
            ['name' => 'Gym', 'icon' => 'dumbbell'],
            ['name' => 'Parking', 'icon' => 'car'],
            ['name' => 'Security', 'icon' => 'shield-check'],
            ['name' => 'Garden', 'icon' => 'tree'],
        ];
        foreach ($amenities as $amn) {
            Amenity::create($amn);
        }

        // 6. Properties
        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => 3,
            'title' => 'Luxury Sea Facing Apartment',
            'slug' => 'luxury-sea-facing-apartment',
            'description' => 'A beautiful sea facing apartment in the heart of Bandra West with all premium amenities.',
            'price' => 25000000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 3,
            'bathrooms' => 3,
            'area' => 1800,
            'furnished_status' => 'furnished',
            'address' => 'Carter Road, Bandra West',
            'lat' => 19.0653,
            'lng' => 72.8196
        ])->amenities()->sync([1, 2, 3]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 2,
            'location_id' => 1,
            'title' => 'Modern Minimalist Villa',
            'slug' => 'modern-minimalist-villa',
            'description' => 'Elegantly designed villa with expansive glass walls and private garden.',
            'price' => 75000.00,
            'type' => 'rent',
            'status' => 'published',
            'bedrooms' => 4,
            'bathrooms' => 4,
            'area' => 3500,
            'furnished_status' => 'semi-furnished',
            'address' => 'South Mumbai',
            'lat' => 18.9220,
            'lng' => 72.8347
        ])->amenities()->sync([1, 4, 5]);
    }
}
