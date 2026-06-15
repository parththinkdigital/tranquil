@extends('layouts.client')

@section('meta_title', ($property->title ?? 'Property Details') . ' - Tranquilstead')
@section('meta_description', 'Explore ' . ($property->title ?? 'this luxury property') . ' — ' . ($property->excerpt ?? 'premium real estate listing by Tranquilstead.'))
@section('og_type', 'article')
@section('og_image', $property->cover_image ?? asset('images/og-default.jpg'))

{{-- JSON-LD BreadcrumbList + RealEstateListing --}}
@section('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Listings', 'item' => route('properties.index')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $property->title ?? 'Property', 'item' => url()->current()],
    ],
]) !!}
</script>
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $property->title ?? 'Luxury Property',
    'description' => $property->excerpt ?? ($property->description ?? 'Premium luxury property listing'),
    'image' => $property->cover_image ?? asset('images/og-default.jpg'),
    'url' => url()->current(),
    'offers' => [
        '@type' => 'Offer',
        'price' => $property->price ?? '0',
        'priceCurrency' => 'INR',
        'availability' => 'https://schema.org/InStock',
    ],
]) !!}
</script>
@endsection

@section('content')
<section class="pt-40 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Breadcrumb -->
        <nav class="flex text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-12 gap-2" aria-label="Breadcrumb">
            <a href="/" class="hover:text-secondary">Home</a>
            <span>/</span>
            <a href="{{ route('properties.index') }}" class="hover:text-secondary">Listings</a>
            <span>/</span>
            <span class="text-primary" aria-current="page">{{ $property->title }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-20">
            <!-- Left Side: Content -->
            <div class="lg:col-span-2">
                <div class="mb-12">
                    <span class="text-sm font-bold uppercase tracking-widest text-secondary mb-4 block">{{ $property->category->name }} &bull; {{ $property->location->name }}</span>
                    <h1 class="text-6xl font-heading font-black tracking-tighter text-primary leading-none mb-6 italic uppercase">{{ $property->title }}</h1>
                    <p class="text-2xl font-light text-primary/60 flex items-center gap-3">
                        <i data-lucide="map-pin" class="w-6 h-6"></i>
                        {{ $property->address }}
                    </p>
                </div>

                <!-- Gallery -->
                <div class="grid grid-cols-2 gap-4 mb-20">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                         class="col-span-2 w-full h-[500px] object-cover rounded-3xl shadow-xl" alt="Primary">
                    <img src="https://images.unsplash.com/photo-1600566753190-17f0bb2a6c3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-64 object-cover rounded-3xl" alt="Room 1">
                    <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-64 object-cover rounded-3xl" alt="Room 2">
                </div>

                <!-- Details Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-20 bg-white p-10 rounded-[40px] shadow-sm border border-teal-50">
                    <div>
                        <p class="text-[10px] uppercase font-bold text-primary/40 mb-2">Price</p>
                        <p class="text-2xl font-heading font-bold text-primary">₹{{ number_format($property->price / 10000000, 2) }} Cr</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-primary/40 mb-2">Bedrooms</p>
                        <p class="text-2xl font-heading font-bold text-primary">{{ $property->bedrooms }} Beds</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-primary/40 mb-2">Bathrooms</p>
                        <p class="text-2xl font-heading font-bold text-primary">{{ $property->bathrooms }} Baths</p>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold text-primary/40 mb-2">Area</p>
                        <p class="text-2xl font-heading font-bold text-primary">{{ number_format($property->area) }} <span class="text-sm">sqft</span></p>
                    </div>
                </div>

                <div class="prose prose-teal max-w-none mb-20">
                    <h3 class="text-3xl font-heading font-bold text-primary mb-6">THE <span class="text-secondary">VISION</span></h3>
                    <p class="text-lg text-text-main/70 leading-relaxed font-light">
                        {{ $property->description }}
                    </p>
                </div>

                <div class="mb-20">
                    <h3 class="text-3xl font-heading font-bold text-primary mb-10">AMENITIES</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach($property->amenities as $amenity)
                            <div class="flex items-center gap-4 bg-teal-50/50 p-6 rounded-2xl border border-teal-50 group hover:border-secondary transition-all">
                                <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center text-primary shadow-sm group-hover:bg-secondary group-hover:text-white transition-all">
                                    <i data-lucide="{{ $amenity->icon ?: 'check' }}" class="w-5 h-5"></i>
                                </div>
                                <span class="font-bold text-primary">{{ $amenity->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Card -->
            <div class="lg:col-span-1">
                <div class="sticky top-40 space-y-8">
                    <div class="bg-primary rounded-[48px] p-10 text-white shadow-2xl relative overflow-hidden">
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-secondary/10 rounded-full blur-2xl"></div>
                        
                        <h3 class="text-2xl font-heading font-bold mb-8">INQUIRE <span class="text-secondary italic text-sm">(Premium)</span></h3>
                        
                        <form class="space-y-6">
                            <div>
                                <label class="text-[10px] uppercase font-bold text-teal-200/40 mb-2 block">Your Name</label>
                                <input type="text" class="w-full bg-teal-900/50 border-none rounded-xl focus:ring-secondary text-white">
                            </div>
                            <div>
                                <label class="text-[10px] uppercase font-bold text-teal-200/40 mb-2 block">Email Address</label>
                                <input type="email" class="w-full bg-teal-900/50 border-none rounded-xl focus:ring-secondary text-white">
                            </div>
                            <div>
                                <label class="text-[10px] uppercase font-bold text-teal-200/40 mb-2 block">Message</label>
                                <textarea rows="4" class="w-full bg-teal-900/50 border-none rounded-xl focus:ring-secondary text-white text-sm" placeholder="I am interested in this architectural masterpiece..."></textarea>
                            </div>
                            <button class="bg-secondary text-white w-full py-4 rounded-2xl font-bold hover:bg-white hover:text-primary transition-all active:scale-95 shadow-lg">
                                Send Inquiry
                            </button>
                        </form>

                        <div class="mt-12 flex items-center gap-4 border-t border-teal-800 pt-8">
                            <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center font-bold text-lg">
                                {{ strtoupper(substr($property->agent->name ?? 'A', 0, 1)) }}
                            </div>
                            <div>
                                <p class="text-xs uppercase tracking-tighter text-teal-300">Managed by</p>
                                <p class="font-bold text-lg">{{ $property->agent->name ?? 'Agent' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[40px] p-10 border border-teal-50 shadow-sm text-center">
                        <h4 class="font-heading font-bold text-primary mb-4">Request a Viewing</h4>
                        <p class="text-xs text-primary/40 mb-8 lowercase">Experience the tranquility in person.</p>
                        <button class="btn-secondary w-full">Schedule Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
