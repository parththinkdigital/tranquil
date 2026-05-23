<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Category;
use App\Models\Location;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Roles
        $adminRole = Role::create(['name' => 'admin']);

        // 2. Users (Admin Only)
        $admin = User::factory()->create([
            'name' => 'Tranquil Admin',
            'email' => 'admin@tranquil.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->assignRole($adminRole);

        // 3. Categories
        $categories = ['Residential', 'Commercial'];
        foreach ($categories as $cat) {
            Category::create(['name' => $cat, 'slug' => \Illuminate\Support\Str::slug($cat)]);
        }

        // 4. Locations
        $mumbai = Location::create(['name' => 'Mumbai', 'slug' => 'mumbai', 'type' => 'city']);
        $bandra = Location::create(['parent_id' => $mumbai->id, 'name' => 'Bandra', 'slug' => 'bandra', 'type' => 'district']);
        $bandraWest = Location::create(['parent_id' => $bandra->id, 'name' => 'Bandra West', 'slug' => 'bandra-west', 'type' => 'locality']);

        $nashik = Location::create(['name' => 'Nashik', 'slug' => 'nashik', 'type' => 'city']);
        $gangapurRoad = Location::create(['parent_id' => $nashik->id, 'name' => 'Gangapur Road', 'slug' => 'gangapur-road', 'type' => 'locality']);

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

        // 6. Properties (Residential - Category ID 1)
        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => $bandraWest->id,
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
            'sub_type' => '3bhk',
            'address' => 'Carter Road, Bandra West',
            'lat' => 19.0653,
            'lng' => 72.8196
        ])->amenities()->sync([1, 2, 3]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => $bandraWest->id,
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
            'sub_type' => 'villa',
            'address' => 'South Mumbai',
            'lat' => 18.9220,
            'lng' => 72.8347
        ])->amenities()->sync([1, 4, 5]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => $gangapurRoad->id,
            'title' => 'Cozy 1 BHK Modern Apartment',
            'slug' => 'cozy-1-bhk-modern-apartment',
            'description' => 'Perfect cozy home for professionals or young couples, situated in the prime area of Nashik.',
            'price' => 4500000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 1,
            'bathrooms' => 1,
            'area' => 650,
            'furnished_status' => 'furnished',
            'sub_type' => '1bhk',
            'address' => 'Gangapur Road, Nashik',
            'lat' => 20.0125,
            'lng' => 73.7682
        ])->amenities()->sync([3, 4]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => $gangapurRoad->id,
            'title' => 'Elegant 2 BHK Garden View Residence',
            'slug' => 'elegant-2-bhk-garden-view-residence',
            'description' => 'Beautiful premium 2 BHK apartment featuring a lovely garden view balcony, spacious rooms, and lift facility.',
            'price' => 8500000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 2,
            'bathrooms' => 2,
            'area' => 1100,
            'furnished_status' => 'semi-furnished',
            'sub_type' => '2bhk',
            'address' => 'Gangapur Road, Nashik',
            'lat' => 20.0118,
            'lng' => 73.7675
        ])->amenities()->sync([2, 3, 5]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 1,
            'location_id' => $bandraWest->id,
            'title' => 'Compact Studio RK Apartment',
            'slug' => 'compact-studio-rk-apartment',
            'description' => 'Well-maintained studio 1 RK apartment in a quiet, safe block in Bandra West.',
            'price' => 6500000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 0,
            'bathrooms' => 1,
            'area' => 350,
            'furnished_status' => 'unfurnished',
            'sub_type' => 'Rk',
            'address' => 'Bandra West, Mumbai',
            'lat' => 19.0596,
            'lng' => 72.8258
        ])->amenities()->sync([3]);

        // Properties (Commercial - Category ID 2)
        Property::create([
            'user_id' => $admin->id,
            'category_id' => 2,
            'location_id' => $bandraWest->id,
            'title' => 'Premium Corporate Office Space',
            'slug' => 'premium-corporate-office-space',
            'description' => 'A ready-to-move-in luxury commercial office space in a state-of-the-art business tower.',
            'price' => 45000000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 0,
            'bathrooms' => 2,
            'area' => 2400,
            'furnished_status' => 'furnished',
            'sub_type' => 'office',
            'address' => 'BKC, Bandra East, Mumbai',
            'lat' => 19.0607,
            'lng' => 72.8634
        ])->amenities()->sync([3, 4]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 2,
            'location_id' => $gangapurRoad->id,
            'title' => 'Sleek High-Street Retail Shop',
            'slug' => 'sleek-high-street-retail-shop',
            'description' => 'High-visibility corner retail shop with excellent footfall. Perfect for premium brands.',
            'price' => 15000000.00,
            'type' => 'sale',
            'status' => 'published',
            'bedrooms' => 0,
            'bathrooms' => 1,
            'area' => 850,
            'furnished_status' => 'unfurnished',
            'sub_type' => 'shop',
            'address' => 'Gangapur Road, Nashik',
            'lat' => 20.0135,
            'lng' => 73.7690
        ])->amenities()->sync([3, 4]);

        Property::create([
            'user_id' => $admin->id,
            'category_id' => 2,
            'location_id' => $mumbai->id,
            'title' => 'Spacious Commercial Warehouse',
            'slug' => 'spacious-commercial-warehouse',
            'description' => 'Industrial grade warehouse with 24ft high ceiling, heavy load floor, and round the clock security access.',
            'price' => 120000.00,
            'type' => 'rent',
            'status' => 'published',
            'bedrooms' => 0,
            'bathrooms' => 4,
            'area' => 8000,
            'furnished_status' => 'unfurnished',
            'sub_type' => 'warehouse',
            'address' => 'Dharavi Link Road, Mumbai',
            'lat' => 19.0380,
            'lng' => 72.8538
        ])->amenities()->sync([3, 4]);
    }
}
