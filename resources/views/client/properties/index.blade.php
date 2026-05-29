@extends('layouts.client')

@section('meta_title', 'Property Listings - Explore Premium Real Estate | Tranquil')
@section('meta_description', 'Browse our curated collection of luxury properties across Mumbai. From oceanfront villas to modern city apartments — find your dream home.')
@section('canonical_url', route('properties.index'))

@section('content')
<section class="pt-40 pb-20 bg-teal-50/30">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-6xl font-heading font-black tracking-tighter text-primary mb-12">EXPLORE <span class="text-secondary italic">COLLECTION</span></h1>
        
        <form action="#" method="GET" class="bg-white p-6 rounded-3xl shadow-xl border border-teal-50 grid grid-cols-1 md:grid-cols-5 gap-6 items-end mb-20">
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Search</label>
                <input type="text" name="keyword" value="" placeholder="Try 'Sea Facing'..." class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
            </div>
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Category</label>
                <select name="category_id" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                    <option value="">All Types</option>
                    <option value="1">Villa</option>
                    <option value="2">Apartment</option>
                    <option value="3">Mansion</option>
                </select>
            </div>
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Location</label>
                <select name="location_id" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                    <option value="">All Locations</option>
                    <option value="1">Beverly Hills</option>
                    <option value="2">Malibu</option>
                    <option value="3">Bel Air</option>
                </select>
            </div>
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Max Price</label>
                <input type="number" name="max_price" value="" placeholder="Max Budget" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
            </div>
            <button type="button" class="btn-primary w-full py-2.5">Filter Results</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Property 1 -->
            <div class="card-premium group">
                <div class="relative h-64 -mx-6 -mt-6 mb-6 overflow-hidden rounded-t-xl">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                         alt="Oceanfront Villa">
                </div>
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-heading font-bold text-primary group-hover:text-secondary transition-colors">Oceanfront Villa</h3>
                    </div>
                    <button class="text-teal-200 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </button>
                </div>
                <a href="#" class="block w-full text-center py-4 border-2 border-teal-50 rounded-xl font-bold group-hover:border-primary group-hover:bg-primary group-hover:text-white transition-all">
                    Explore Details
                </a>
            </div>

            <!-- Property 2 -->
            <div class="card-premium group">
                <div class="relative h-64 -mx-6 -mt-6 mb-6 overflow-hidden rounded-t-xl">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                         alt="Modern City Apartment">
                </div>
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-heading font-bold text-primary group-hover:text-secondary transition-colors">Modern City Apartment</h3>
                    </div>
                    <button class="text-teal-200 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </button>
                </div>
                <a href="#" class="block w-full text-center py-4 border-2 border-teal-50 rounded-xl font-bold group-hover:border-primary group-hover:bg-primary group-hover:text-white transition-all">
                    Explore Details
                </a>
            </div>

            <!-- Property 3 -->
            <div class="card-premium group">
                <div class="relative h-64 -mx-6 -mt-6 mb-6 overflow-hidden rounded-t-xl">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                         alt="Luxury Estate">
                </div>
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-heading font-bold text-primary group-hover:text-secondary transition-colors">Luxury Estate</h3>
                    </div>
                    <button class="text-teal-200 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-6 h-6"></i>
                    </button>
                </div>
                <a href="#" class="block w-full text-center py-4 border-2 border-teal-50 rounded-xl font-bold group-hover:border-primary group-hover:bg-primary group-hover:text-white transition-all">
                    Explore Details
                </a>
            </div>
        </div>
        
        <div class="mt-20 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm">
                <a href="#" class="px-4 py-2 border border-teal-100 bg-white text-sm font-medium text-primary hover:bg-teal-50 rounded-l-md">Previous</a>
                <a href="#" class="px-4 py-2 border-t border-b border-teal-100 bg-primary text-sm font-medium text-white">1</a>
                <a href="#" class="px-4 py-2 border-t border-b border-teal-100 bg-white text-sm font-medium text-primary hover:bg-teal-50">2</a>
                <a href="#" class="px-4 py-2 border-t border-b border-teal-100 bg-white text-sm font-medium text-primary hover:bg-teal-50">3</a>
                <a href="#" class="px-4 py-2 border border-teal-100 bg-white text-sm font-medium text-primary hover:bg-teal-50 rounded-r-md">Next</a>
            </nav>
        </div>
    </div>
</section>
@endsection
