@extends('layouts.client')

@section('content')
<section class="pt-40 pb-20 bg-teal-50/30">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-6xl font-heading font-black tracking-tighter text-primary mb-12">EXPLORE <span class="text-secondary italic">COLLECTION</span></h1>
        
        <!-- Premium Category Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <button type="button" onclick="selectCategory('')" class="px-8 py-3.5 rounded-2xl font-heading font-bold text-sm tracking-wider uppercase transition-all duration-300 {{ !request('category_id') ? 'bg-primary text-white shadow-lg shadow-primary/20 scale-105 border border-primary' : 'bg-white/60 hover:bg-white text-primary/60 border border-teal-50' }}">
                All Categories
            </button>
            @foreach($categories as $cat)
                <button type="button" onclick="selectCategory('{{ $cat->id }}')" class="px-8 py-3.5 rounded-2xl font-heading font-bold text-sm tracking-wider uppercase transition-all duration-300 {{ request('category_id') == $cat->id ? 'bg-primary text-white shadow-lg shadow-primary/20 scale-105 border border-primary' : 'bg-white/60 hover:bg-white text-primary/60 border border-teal-50' }}">
                    {{ $cat->name }}
                </button>
            @endforeach
        </div>

        <form action="{{ route('properties.index') }}" method="GET" id="filter-form" class="bg-white p-6 rounded-3xl shadow-xl border border-teal-50 grid grid-cols-1 md:grid-cols-4 gap-6 items-end mb-20">
            <input type="hidden" name="category_id" id="filter_category_id" value="{{ request('category_id') }}">
            
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Search</label>
                <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Try 'Sea Facing'..." class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
            </div>
            
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Location</label>
                <select name="location_id" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
                    <option value="">All Locations</option>
                    @foreach($locations as $loc)
                        <option value="{{ $loc->id }}" {{ request('location_id') == $loc->id ? 'selected' : '' }}>{{ $loc->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-2 block">Max Price</label>
                <input type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Max Budget" class="w-full border-teal-100 rounded-xl focus:ring-primary text-sm">
            </div>
            
            <button type="submit" class="btn-primary w-full py-2.5">Filter Results</button>

            <!-- Interactive Layout / BHK Pills -->
            <div class="col-span-full mt-4 pt-4 border-t border-teal-50">
                <label class="text-[10px] uppercase tracking-widest font-bold text-primary/60 mb-3 block">Filter by Layout / Configuration</label>
                <div class="flex flex-wrap gap-2.5">
                    @foreach([
                        '1bhk' => '1 BHK',
                        '2bhk' => '2 BHK',
                        '3bhk' => '3 BHK',
                        'Rk' => 'RK',
                        'villa' => 'Villa',
                        'office' => 'Office Space',
                        'shop' => 'Shop',
                        'warehouse' => 'Warehouse'
                    ] as $val => $label)
                        @php
                            $activeSubtypes = request('sub_types', []);
                            $activeSubtypes = is_array($activeSubtypes) ? $activeSubtypes : explode(',', $activeSubtypes);
                            $isChecked = in_array($val, $activeSubtypes);
                        @endphp
                        <label class="cursor-pointer select-none">
                            <input type="checkbox" name="sub_types[]" value="{{ $val }}" {{ $isChecked ? 'checked' : '' }} onchange="this.form.submit()" class="sr-only">
                            <div class="px-5 py-2.5 rounded-xl border text-xs font-semibold tracking-wide transition-all duration-300 {{ $isChecked ? 'bg-secondary border-secondary text-white shadow-md shadow-secondary/15 scale-105' : 'bg-teal-50/40 border-teal-100 hover:border-teal-200 text-primary/70 hover:bg-teal-50' }}">
                                {{ $label }}
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
        </form>

        @if($properties->isEmpty())
            <div class="text-center py-20">
                <div class="w-20 h-20 rounded-full bg-teal-50 flex items-center justify-center text-primary/40 mx-auto mb-6">
                    <i data-lucide="search-x" class="w-10 h-10"></i>
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary">No properties found</h3>
                <p class="text-text-main/60">Try adjusting your filters or search keywords.</p>
                <a href="{{ route('properties.index') }}" class="text-secondary font-bold mt-4 inline-block">Clear all filters</a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($properties as $property)
                    <div class="card-premium group">
                        <div class="relative h-64 -mx-6 -mt-6 mb-6 overflow-hidden rounded-t-xl">
                            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                                 alt="{{ $property->title }}">
                            
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary shadow-sm flex items-center gap-1.5">
                                <span class="inline-block w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                                {{ $property->category->name }}
                                @if($property->sub_type)
                                    <span class="text-secondary/30">|</span>
                                    <span class="text-secondary font-extrabold">
                                        {{ [
                                            '1bhk' => '1 BHK',
                                            '2bhk' => '2 BHK',
                                            '3bhk' => '3 BHK',
                                            'Rk' => 'RK',
                                            'villa' => 'Villa',
                                            'office' => 'Office',
                                            'shop' => 'Shop',
                                            'warehouse' => 'Warehouse'
                                        ][$property->sub_type] ?? strtoupper($property->sub_type) }}
                                    </span>
                                @endif
                            </div>
                            
                            <div class="absolute bottom-4 left-4 bg-primary px-4 py-1.5 rounded-lg text-white font-bold shadow-lg">
                                ₹{{ number_format($property->price / 10000000, 2) }} Cr
                            </div>
                        </div>
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <span class="text-[10px] uppercase tracking-widest font-bold text-secondary mb-1 block">{{ $property->location->name }}</span>
                                <h3 class="text-xl font-heading font-bold text-primary group-hover:text-secondary transition-colors">{{ $property->title }}</h3>
                            </div>
                            <button class="text-teal-200 hover:text-red-500 transition-colors">
                                <i data-lucide="heart" class="w-6 h-6"></i>
                            </button>
                        </div>
                        <div class="flex gap-6 text-sm text-text-main/60 mb-6 font-medium">
                            <div class="flex items-center gap-2">
                                <i data-lucide="bed" class="w-4 h-4"></i>
                                <span>{{ $property->bedrooms }} Bed</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="bath" class="w-4 h-4"></i>
                                <span>{{ $property->bathrooms }} Bath</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="maximize" class="w-4 h-4"></i>
                                <span>{{ number_format($property->area) }} sqft</span>
                            </div>
                        </div>
                        <a href="{{ route('properties.show', $property->slug) }}" class="block w-full text-center py-4 border-2 border-teal-50 rounded-xl font-bold group-hover:border-primary group-hover:bg-primary group-hover:text-white transition-all">
                            Explore Details
                        </a>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-20">
                {{ $properties->links() }}
            </div>
        @endif
    </div>
</section>

<script>
    function selectCategory(id) {
        document.getElementById('filter_category_id').value = id;
        document.getElementById('filter-form').submit();
    }
</script>
@endsection
