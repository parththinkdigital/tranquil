@extends('layouts.client')

@section('meta_title', 'Tranquilstead - Luxury Real Estate in Mumbai & Beyond')
@section('meta_description', 'Discover premium luxury real estate with Tranquilstead. Explore exclusive properties, architecture stories, and market insights across Mumbai and India.')
@section('canonical_url', route('home'))

{{-- JSON-LD AggregateRating + BreadcrumbList --}}
@section('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
    ],
]) !!}
</script>
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => 'Tranquilstead Real Estate Services',
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.6',
        'reviewCount' => '40000000',
        'bestRating' => '5',
    ],
    'offers' => [
        '@type' => 'AggregateOffer',
        'offerCount' => '500',
        'availability' => 'https://schema.org/InStock',
    ],
]) !!}
</script>
@endsection

@section('content')

{{-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO
     Full-screen cinematic hero · Swiss-Industrial typographic treatment
     ═══════════════════════════════════════════════════════════════ --}}
<section id="hero" class="relative h-screen min-h-[680px] overflow-hidden bg-primary">
    <div data-hero="image" class="absolute inset-0 will-change-transform">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=90"
             class="w-full h-full object-cover"
             alt="Luxury estate">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/85 via-primary/60 to-primary/30"></div>
    </div>

    <div class="relative z-10 h-full max-w-7xl mx-auto px-6 md:px-12 flex flex-col items-center justify-center text-center">
        <h1 class="font-heading text-white" data-hero="heading" style="font-size:clamp(4rem,10vw,8rem);letter-spacing:-0.04em;line-height:1;font-weight:700;">
            TranquilStead
        </h1>

        <div data-hero="divider" class="w-16 md:w-24 h-0.5 bg-secondary my-6 md:my-8"></div>

        <p data-hero="label" class="text-[10px] md:text-[11px] uppercase tracking-[.4em] font-semibold text-white/50">Luxury Real Estate</p>

        <div data-hero="bottombar" class="flex flex-wrap gap-3 md:gap-4 mt-8 md:mt-10">
            <a href="{{ route('properties.index') }}" class="bg-secondary text-white px-6 md:px-8 py-3.5 md:py-4 rounded-xl md:rounded-2xl font-semibold hover:bg-white hover:text-primary transition-all duration-200 text-sm md:text-base shadow-lg cursor-pointer">
                Explore Listings
            </a>
            <a href="{{ route('pages.contact') }}" class="border border-white/20 text-white px-6 md:px-8 py-3.5 md:py-4 rounded-xl md:rounded-2xl font-semibold hover:bg-white hover:text-primary transition-all duration-200 text-sm md:text-base cursor-pointer">
                Book Consultation
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — TRUSTED BY / FEATURES
     Stayli layout: left = heading + stats, right = 3 feature cards
     with icon, title, description, arrow; vertical connector line
     ═══════════════════════════════════════════════════════════════ --}}
<section id="trusted" class="py-24 md:py-32 bg-white relative overflow-hidden">
    <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-background rounded-full blur-3xl pointer-events-none opacity-60"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-16 lg:gap-24 items-start relative z-10">

        {{-- Left column --}}
        <div class="flex flex-col justify-between min-h-full">
            <div class="mb-16">
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-4">Trust & Credibility</p>
                <h2 class="font-heading font-light text-primary leading-[1.08] mb-6"
                    style="font-size: clamp(2.5rem, 5vw, 3.5rem); letter-spacing: -0.04em;">
                    Trusted by<br>
                    <strong class="font-bold">100 Million</strong> <em class="italic text-secondary font-bold">buyers</em>
                </h2>
                <p class="text-sm text-text-main/40 leading-relaxed max-w-sm">
                    Only we connect you directly to the person that knows the most about a property for sale, the listing agent.
                </p>
            </div>

            {{-- Stats --}}
            <div class="flex gap-12">
                <div>
                    <h4 class="text-3xl font-heading font-bold text-primary leading-none">100M</h4>
                    <p class="text-[11px] text-text-main/40 mt-1.5">Happy buyers</p>
                </div>
                <div>
                    <h4 class="text-3xl font-heading font-bold text-primary leading-none">40M</h4>
                    <p class="text-[11px] text-text-main/40 mt-1.5">Client reviews</p>
                </div>
                <div>
                    <h4 class="text-3xl font-heading font-bold text-primary leading-none">4.6</h4>
                    <p class="text-[11px] text-text-main/40 mt-1.5">Positive rating</p>
                </div>
            </div>
        </div>

        {{-- Right column — 3 feature cards with vertical line --}}
        <div class="space-y-6 relative">
            {{-- Vertical connector --}}
            <div class="absolute left-[29px] top-16 bottom-16 w-px bg-gradient-to-b from-secondary/40 via-secondary/20 to-transparent hidden lg:block"></div>

            {{-- Card 1: Explore neighborhoods --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-background flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-300 relative z-10 shadow-sm">
                    <i data-lucide="compass" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-white rounded-2xl p-5 border border-gray-100 shadow-sm group-hover:shadow-md group-hover:border-secondary/20 transition-all duration-300">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Explore<br>great neighborhoods</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary hover:bg-secondary/5 transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Explore neighborhoods">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <p class="text-[13px] text-text-main/40 leading-relaxed">Explore video tours, in-depth research, and articles on 20,000 neighborhoods.</p>
                </div>
            </div>

            {{-- Card 2: Highly rated property --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-background flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-300 relative z-10 shadow-sm">
                    <i data-lucide="star" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-white rounded-2xl p-5 border border-gray-100 shadow-sm group-hover:shadow-md group-hover:border-secondary/20 transition-all duration-300">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Find highly<br>rated best property</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary hover:bg-secondary/5 transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Find properties">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <p class="text-[13px] text-text-main/40 leading-relaxed">Find the very best properties with in-depth reviews and ratings from multiple experts.</p>
                </div>
            </div>

            {{-- Card 3: Condo quality --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-background flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-300 relative z-10 shadow-sm">
                    <i data-lucide="building" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-white rounded-2xl p-5 border border-gray-100 shadow-sm group-hover:shadow-md group-hover:border-secondary/20 transition-all duration-300">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Discover<br>condo quality buildings</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary hover:bg-secondary/5 transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Discover buildings">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <p class="text-[13px] text-text-main/40 leading-relaxed">Explore video tours, in-depth research, and articles on 20,000 neighborhoods.</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 3 — FIND YOUR DREAM HOME (FEATURED PROPERTIES)
     ═══════════════════════════════════════════════════════════════ --}}
<section id="featured-homes" class="py-24 md:py-32 bg-white relative overflow-hidden z-1">
    <div class="max-w-7xl mx-auto px-6 md:px-12">

        {{-- Header Row --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-20 relative z-10">
            <div class="flex-shrink-0">
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-4">Handpicked Estates</p>
                <h2 class="font-heading font-light text-primary" style="font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.04em; line-height: 1.05;">
                    Find Your <strong class="font-bold"><em class="italic text-secondary">Dream Home</em></strong>
                </h2>
            </div>
            <div class="md:max-w-xs lg:max-w-md pb-2">
                <p class="text-sm md:text-base text-text-main/50 leading-relaxed mb-6">
                    Explore our latest listings in the most sought-after locations. Seamlessly connecting you with prestigious properties tailored to your luxury lifestyle.
                </p>
                <a href="{{ route('properties.index') }}" class="text-primary font-bold flex items-center gap-2 hover:gap-4 hover:text-secondary transition-all duration-300 cursor-pointer text-sm group uppercase tracking-widest">
                    View All Collection
                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <a href="{{ route('properties.index', ['keyword' => 'Garden Terrace']) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560185127-6f5fd2a02e67?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="Garden Terrace Residence">
                    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary">
                        For Sale
                    </span>
                </div>
                <div class="p-6">
                    <span class="text-[11px] text-text-main/35 flex items-center gap-1 mb-2"><i data-lucide="map-pin" class="w-3 h-3"></i> Bandra West &bull; Villa</span>
                    <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200">Garden Terrace Residence</h3>
                    <div class="flex gap-4 text-[11px] text-text-main/35 mb-4">
                        <span class="flex items-center gap-1"><i data-lucide="bed" class="w-3 h-3"></i> 5</span>
                        <span class="flex items-center gap-1"><i data-lucide="bath" class="w-3 h-3"></i> 5</span>
                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-3 h-3"></i> 5,400 sqft</span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="font-heading font-bold text-primary">₹23.50 Cr</span>
                        <span class="text-secondary text-sm font-semibold flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            View <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>
            </a>

            <a href="{{ route('properties.index', ['keyword' => 'Oceanview Penthouse']) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="Oceanview Penthouse">
                    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary">
                        For Sale
                    </span>
                </div>
                <div class="p-6">
                    <span class="text-[11px] text-text-main/35 flex items-center gap-1 mb-2"><i data-lucide="map-pin" class="w-3 h-3"></i> Juhu &bull; Penthouse</span>
                    <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200">Oceanview Penthouse</h3>
                    <div class="flex gap-4 text-[11px] text-text-main/35 mb-4">
                        <span class="flex items-center gap-1"><i data-lucide="bed" class="w-3 h-3"></i> 4</span>
                        <span class="flex items-center gap-1"><i data-lucide="bath" class="w-3 h-3"></i> 4</span>
                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-3 h-3"></i> 3,700 sqft</span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="font-heading font-bold text-primary">₹15.75 Cr</span>
                        <span class="text-secondary text-sm font-semibold flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            View <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>
            </a>

            <a href="{{ route('properties.index', ['keyword' => 'Skyline Residence']) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1494527145368-48b2450bace5?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="Skyline Residence">
                    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary">
                        For Rent
                    </span>
                </div>
                <div class="p-6">
                    <span class="text-[11px] text-text-main/35 flex items-center gap-1 mb-2"><i data-lucide="map-pin" class="w-3 h-3"></i> Bandra Kurla Complex &bull; Apartment</span>
                    <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200">Skyline Residence</h3>
                    <div class="flex gap-4 text-[11px] text-text-main/35 mb-4">
                        <span class="flex items-center gap-1"><i data-lucide="bed" class="w-3 h-3"></i> 3</span>
                        <span class="flex items-center gap-1"><i data-lucide="bath" class="w-3 h-3"></i> 3</span>
                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-3 h-3"></i> 2,800 sqft</span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="font-heading font-bold text-primary">₹6.90 Cr</span>
                        <span class="text-secondary text-sm font-semibold flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            View <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — POPULAR LOCATIONS (Nashik)
     ═══════════════════════════════════════════════════════════════ --}}
<section id="locations" class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Prime Areas</p>
            <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                Explore <strong class="font-bold">Nashik</strong>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
            <a href="{{ route('properties.index', ['keyword' => 'Gangapur Road']) }}" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Gangapur Road">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Gangapur Road</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 18+ Properties</p>
                </div>
            </a>
            <a href="{{ route('properties.index', ['keyword' => 'Trimbakeshwar Road']) }}" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1600566753190-17f0bb2a6c3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Trimbakeshwar Road">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Trimbakeshwar Rd</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 12+ Properties</p>
                </div>
            </a>
            <a href="{{ route('properties.index', ['keyword' => 'Panchavati']) }}" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Panchavati">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Panchavati</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 15+ Properties</p>
                </div>
            </a>
            <a href="{{ route('properties.index', ['keyword' => 'College Road']) }}" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="College Road">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">College Road</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 22+ Properties</p>
                </div>
            </a>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — WHY CHOOSE US
     ═══════════════════════════════════════════════════════════════ --}}
<section id="why-us" class="py-20 md:py-28 bg-[#F9F8F3] relative overflow-hidden">
    <div class="absolute top-1/3 -right-48 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 left-1/4 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">

        <div class="mb-12 md:mb-14 text-center lg:text-left" data-gsap="headline">
            <p class="text-[10px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Why Tranquilstead</p>
            <h2 class="font-heading font-bold text-primary leading-tight"
                style="font-size: clamp(2rem, 4vw, 3.2rem); letter-spacing: -0.04em;">
                Where <span class="italic text-secondary">Your</span> Dream Home Awaits
            </h2>
        </div>

        <div class="grid lg:grid-cols-[1fr_1.2fr] gap-8 lg:gap-12 items-stretch">

            {{-- STATS GRID --}}
            <div data-gsap="left-col">
                <div class="grid grid-cols-2 gap-4 h-full">
                    @php $statItems = [
                        ['count' => '500', 'suffix' => '+', 'label' => 'Properties Sold', 'icon' => 'building', 'desc' => 'Across premium locations in Mumbai & Nashik'],
                        ['count' => '98', 'suffix' => '%', 'label' => 'Client Satisfaction', 'icon' => 'star', 'desc' => 'From first consultation to final handover'],
                        ['count' => '24', 'suffix' => '/7', 'label' => 'Dedicated Support', 'icon' => 'headphones', 'desc' => 'Your agent is always a call away'],
                        ['count' => '0', 'suffix' => '%', 'label' => 'Hidden Fees', 'icon' => 'shield-check', 'desc' => 'Complete transparency in every transaction'],
                    ]; @endphp
                    @foreach($statItems as $i => $s)
                    <div data-gsap="stat"
                         class="bg-white rounded-2xl p-5 md:p-6 border border-primary/5 hover:border-secondary/20 hover:shadow-lg transition-all duration-300 cursor-default group {{ $i === 0 ? 'row-span-2 flex flex-col justify-center' : '' }}">
                        <div class="w-9 h-9 rounded-xl bg-secondary/10 flex items-center justify-center mb-3 group-hover:bg-secondary/15 transition-colors duration-300">
                            <i data-lucide="{{ $s['icon'] }}" class="w-4 h-4 text-secondary"></i>
                        </div>
                        <h4 class="text-2xl md:text-3xl font-heading font-bold text-secondary leading-none mb-1">
                            <span data-count="{{ $s['count'] }}" data-suffix="{{ $s['suffix'] }}">0</span>
                        </h4>
                        <p class="text-[10px] uppercase tracking-widest text-primary/40 font-semibold mb-1">{{ $s['label'] }}</p>
                        @if($i === 0)
                        <p class="text-xs text-primary/30 leading-relaxed mt-1 max-w-xs">{{ $s['desc'] }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- RIGHT — CINEMATIC CARD --}}
            <div class="relative flex flex-col gap-4" data-gsap="slider">
                <div class="relative overflow-hidden rounded-[24px] shadow-xl bg-black flex-1 min-h-[280px]">
                    <video autoplay muted loop playsinline preload="auto"
                           class="absolute inset-0 w-full h-full object-cover">
                        <source src="{{ asset('nashik-cinematic.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-black/10 pointer-events-none"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="bg-white/90 backdrop-blur-md rounded-xl px-4 py-3 shadow-lg inline-block">
                            <p class="font-heading font-bold text-primary text-xs">Discover Nashik</p>
                            <p class="text-[9px] text-primary/40 mt-0.5">Premium vineyard estates</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — TESTIMONIALS
     ═══════════════════════════════════════════════════════════════ --}}
<section id="testimonials" class="py-24 md:py-32 bg-primary relative overflow-hidden">
    <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-16">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Client Voices</p>
            <h2 class="font-heading font-light text-white" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                What they <strong class="font-bold"><em class="italic text-secondary">say</em></strong>
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @php $testimonials = [
                ['n'=>'Advik Sharma','r'=>'Homeowner, Bandra','q'=>'Tranquilstead made what seemed impossible feel effortless. Every step was handled with pure elegance.'],
                ['n'=>'Priya Mehta','r'=>'Investor, Juhu','q'=>'The quality of listings is unmatched. I found my dream investment property within a week.'],
                ['n'=>'Rohan Kapoor','r'=>'First-time Buyer','q'=>'As a first-time buyer, I was nervous. Tranquilstead\'s agents guided me patiently through every step.'],
            ]; @endphp
            @foreach($testimonials as $t)
            <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:border-secondary/30 transition-all duration-200">
                <div class="flex gap-0.5 mb-6">@for($s=0;$s<5;$s++)<i data-lucide="star" class="w-4 h-4 text-secondary fill-secondary"></i>@endfor</div>
                <p class="text-white/70 leading-relaxed mb-8 italic text-sm">"{{ $t['q'] }}"</p>
                <div class="flex items-center gap-3 border-t border-white/10 pt-5">
                    <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center font-bold text-secondary text-sm">{{ strtoupper(substr($t['n'],0,1)) }}</div>
                    <div>
                        <p class="text-white font-semibold text-sm">{{ $t['n'] }}</p>
                        <p class="text-[10px] uppercase tracking-widest text-teal-300/40 font-semibold">{{ $t['r'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — CTA BANNER
     ═══════════════════════════════════════════════════════════════ --}}
<section id="cta" class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="relative bg-primary rounded-[40px] p-12 md:p-20 overflow-hidden">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-secondary/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10 grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="font-heading font-light text-white leading-tight mb-5"
                        style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em;">
                        Ready to find<br><strong class="font-bold"><em class="italic text-secondary">your home?</em></strong>
                    </h2>
                    <p class="text-sm text-teal-100/40 leading-relaxed max-w-md">
                        Whether you're buying, selling, or renting — our certified agents make your journey absolutely tranquil.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-end">
                    <a href="{{ route('properties.index') }}" class="bg-secondary text-white px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:text-primary transition-all duration-200 text-center cursor-pointer shadow-lg text-sm">Browse Listings</a>
                    <a href="{{ route('pages.contact') }}" class="bg-white/10 text-white border border-white/15 px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:text-primary transition-all duration-200 text-center cursor-pointer text-sm">Contact Agent</a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 9 — BLOG
     ═══════════════════════════════════════════════════════════════ --}}
<section id="blog" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-5">
            <div>
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Journal</p>
                <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                    From the <strong class="font-bold">Blog</strong>
                </h2>
            </div>
            <a href="{{ route('blogs.index') }}" class="text-primary/60 font-medium flex items-center gap-2 hover:gap-3 hover:text-primary transition-all duration-200 cursor-pointer text-sm group">
                Read All <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach($blogs as $b)
            <a href="{{ route('blogs.show', $b->slug) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $b->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $b->title }}">
                </div>
                <div class="p-6 flex flex-col h-full">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-0.5 rounded-full">{{ $b->category->title ?? 'Uncategorized' }}</span>
                        <span class="text-[10px] text-primary/20">{{ $b->created_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-heading font-bold text-primary text-base mb-2 group-hover:text-secondary transition-colors duration-200 leading-snug">{{ $b->title }}</h3>
                    <p class="text-[13px] text-text-main/40 leading-relaxed mb-5 line-clamp-2">{{ $b->short_desc }}</p>
                    <span class="text-primary/60 font-semibold text-sm flex items-center gap-1.5 group-hover:gap-2.5 group-hover:text-secondary transition-all mt-auto">
                        Read More <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var hero = document.getElementById('hero');
    if (!hero || typeof gsap === 'undefined') return;

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) { gsap.set('[data-hero]', { clearProps: 'all' }); return; }

    var tl = gsap.timeline({ defaults: { ease: 'power1.out', duration: 0.6 } });

    tl.from('[data-hero="image"]', { scale: 1.12, duration: 1.4 }, 0)
      .from('[data-hero="topbar"]', { y: -10, opacity: 0 }, 0.2);

    var heading = document.querySelector('[data-hero="heading"]');
    if (heading) {
      var text = heading.textContent.replace(/\s+/g, ' ').trim();
      heading.textContent = '';
      var chars = [];
      for (var i = 0; i < text.length; i++) {
        var span = document.createElement('span');
        span.textContent = text[i] === ' ' ? '\u00A0' : text[i];
        span.style.display = 'inline-block';
        heading.appendChild(span);
        chars.push(span);
      }
      tl.from(chars, { y: 80, rotationX: -90, opacity: 0, duration: 0.7, stagger: 0.035, ease: 'power3.out' }, 0.25);
    }

    tl.from('[data-hero="divider"]', { scaleX: 0, transformOrigin: 'center center', duration: 0.5 }, 0.55)
      .from('[data-hero="label"]', { y: 12, opacity: 0 }, 0.65)
      .from('[data-hero="bottombar"]', { y: 16, opacity: 0 }, 0.8);

    gsap.to('[data-hero="image"]', {
      scale: 1.25,
      ease: 'none',
      scrollTrigger: {
        trigger: '#hero',
        start: 'top top',
        end: 'bottom top',
        scrub: 1.2,
      }
    });
});
</script>
@endsection
