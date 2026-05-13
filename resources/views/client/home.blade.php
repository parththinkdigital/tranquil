@extends('layouts.client')

@section('content')

{{-- ═══════════════════════════════════════════════════════════════
     SECTION 1 — HERO (Premium Text-Cutout Style)
     Giant "TRANQUIL" behind property image, subtitle overlay,
     glass search bar at bottom. Cinzel heading, Josefin Sans body.
     ═══════════════════════════════════════════════════════════════ --}}
<style>
    .hero-section {
        background:
            linear-gradient(180deg,
                rgba(15,118,110,0.10) 0%,
                rgba(0,0,0,0.0) 25%,
                rgba(0,0,0,0.0) 40%,
                rgba(0,0,0,0.40) 68%,
                rgba(0,0,0,0.75) 100%
            ),
            url('https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=85') center/cover no-repeat,
            linear-gradient(135deg, #0F766E 0%, #5eead4 40%, #a7f3d0 70%, #67e8f9 100%);
    }
    .hero-brand-text {
        font-size: clamp(6rem, 18vw, 16rem);
        font-family: 'Cinzel', serif;
        font-weight: 900;
        letter-spacing: -0.04em;
        line-height: 0.85;
        color: rgba(255,255,255,0.95);
        text-shadow:
            0 2px 80px rgba(255,255,255,0.15),
            0 0px 120px rgba(255,255,255,0.08);
        user-select: none;
        -webkit-user-select: none;
    }
    .hero-search-glass {
        background: rgba(255,255,255,0.12);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255,255,255,0.18);
    }
    @media (max-width: 768px) {
        .hero-brand-text { font-size: clamp(3.5rem, 20vw, 7rem); }
    }
</style>

<section id="hero" class="hero-section relative w-full h-screen min-h-[700px] max-h-[1000px] overflow-hidden">

    {{-- Giant brand text — centered, slightly behind content --}}
    <div class="absolute inset-0 z-[5] flex items-center justify-center pointer-events-none" style="margin-top: -3%;">
        <h1 class="hero-brand-text text-center" aria-label="Tranquil Real Estate">
            Tranquil
        </h1>
    </div>

    {{-- Top-right tagline --}}
    <div class="absolute top-32 right-8 md:right-16 z-20 text-right hidden md:block">
        <p class="text-white/60 text-xs leading-relaxed tracking-wide">
            Turning Dreams Into Reality,<br>One Property at a Time
        </p>
    </div>

    {{-- Bottom content overlay --}}
    <div class="absolute bottom-0 left-0 right-0 z-20 px-6 md:px-12 pb-8 md:pb-12">
        <div class="max-w-7xl mx-auto">

            {{-- Subtitle --}}
            <div class="text-center mb-8 md:mb-10">
                <h2 class="font-heading text-white font-bold text-xl sm:text-2xl md:text-3xl leading-snug tracking-tight mb-2"
                    style="text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Buy, Rent, or Sell – Simplifying Your
                </h2>
                <h2 class="font-heading text-white font-bold text-xl sm:text-2xl md:text-3xl leading-snug tracking-tight"
                    style="text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Real Estate Journey
                </h2>
            </div>

            {{-- Glass search bar --}}
            <form action="{{ route('properties.index') }}" method="GET"
                  class="hero-search-glass rounded-2xl p-2.5 flex flex-col md:flex-row items-stretch gap-0 max-w-4xl mx-auto">

                {{-- Location --}}
                <div class="flex-1 px-5 py-3 border-b md:border-b-0 md:border-r border-white/10">
                    <label class="text-[10px] uppercase tracking-widest text-white/40 font-semibold block mb-1">Location</label>
                    <div class="flex items-center gap-2">
                        <input type="text" name="keyword" placeholder="Select Your City"
                               class="w-full border-none focus:ring-0 text-sm font-medium bg-transparent text-white placeholder:text-white/40 p-0">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-white/30 flex-shrink-0"></i>
                    </div>
                </div>

                {{-- Property Type --}}
                <div class="flex-1 px-5 py-3 border-b md:border-b-0 md:border-r border-white/10">
                    <label class="text-[10px] uppercase tracking-widest text-white/40 font-semibold block mb-1">Property Type</label>
                    <select name="category_id" class="w-full border-none focus:ring-0 text-sm font-medium bg-transparent text-white/80 p-0 cursor-pointer">
                        <option value="" class="text-primary">Choose Property Type</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" class="text-primary">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Price Range --}}
                <div class="flex-1 px-5 py-3 border-b md:border-b-0 md:border-r border-white/10">
                    <label class="text-[10px] uppercase tracking-widest text-white/40 font-semibold block mb-1">Price Range</label>
                    <select name="max_price" class="w-full border-none focus:ring-0 text-sm font-medium bg-transparent text-white/80 p-0 cursor-pointer">
                        <option value="" class="text-primary">Choose Price Range</option>
                        <option value="5000000" class="text-primary">Up to ₹50 Lakhs</option>
                        <option value="10000000" class="text-primary">Up to ₹1 Crore</option>
                        <option value="50000000" class="text-primary">Up to ₹5 Crore</option>
                        <option value="100000000" class="text-primary">Up to ₹10 Crore</option>
                    </select>
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="bg-white text-primary px-8 py-3.5 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-secondary hover:text-white transition-all duration-300 cursor-pointer whitespace-nowrap shadow-lg">
                    <i data-lucide="search" class="w-4 h-4"></i>
                    Browse Properties
                </button>
            </form>

        </div>
    </div>

</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 2 — TRUSTED BY / FEATURES
     Stayli layout: left = heading + stats, right = 3 feature cards
     with icon, title, description, arrow; vertical connector line
     ═══════════════════════════════════════════════════════════════ --}}
<section id="trusted" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">

        {{-- Left column --}}
        <div class="flex flex-col justify-between min-h-full">
            <div class="mb-16">
                <h2 class="font-heading font-light text-primary leading-[1.15] mb-6"
                    style="font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.03em;">
                    Trusted by<br>
                    <strong class="font-bold">100 Million</strong> <em class="italic text-secondary font-bold">buyers</em>
                </h2>
                <p class="text-sm text-text-main/40 leading-relaxed max-w-sm">
                    Only we connect you directly to the person that knows the most about a property for sale, the listing agent.
                </p>
            </div>

            {{-- Avatar stack --}}
            <div>
                <div class="flex -space-x-3 mb-6">
                    @for($i = 0; $i < 4; $i++)
                    <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden">
                        <img src="https://i.pravatar.cc/80?img={{ $i + 10 }}" alt="Happy buyer" class="w-full h-full object-cover">
                    </div>
                    @endfor
                </div>

                <div class="flex gap-10">
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary leading-none">100M</h4>
                        <p class="text-[11px] text-text-main/35 mt-1">Happy buyers</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary leading-none">40M</h4>
                        <p class="text-[11px] text-text-main/35 mt-1">Client review</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary leading-none">4.6</h4>
                        <p class="text-[11px] text-text-main/35 mt-1">Positive Rating</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right column — 3 feature cards with vertical line --}}
        <div class="space-y-5 relative">
            {{-- Vertical connector --}}
            <div class="absolute left-[27px] top-16 bottom-16 w-px bg-gray-100 hidden lg:block"></div>

            {{-- Card 1: Explore neighborhoods --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-200 relative z-10">
                    <i data-lucide="compass" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-gray-50/80 rounded-2xl p-5 border border-gray-100 group-hover:border-secondary/20 transition-all duration-200">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Explore<br>great neighborhoods</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Explore neighborhoods">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <p class="text-[13px] text-text-main/40 leading-relaxed">Explore video tours, in-depth research, and articles on 20,000 neighborhoods.</p>
                </div>
            </div>

            {{-- Card 2: Highly rated property --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-200 relative z-10">
                    <i data-lucide="star" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-gray-50/80 rounded-2xl p-5 border border-gray-100 group-hover:border-secondary/20 transition-all duration-200">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Find highly<br>rated best property</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Find properties">
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <p class="text-[13px] text-text-main/40 leading-relaxed">Find the very best properties with in-depth reviews and ratings from multiple experts.</p>
                </div>
            </div>

            {{-- Card 3: Condo quality --}}
            <div class="flex gap-5 items-start group">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0 text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-200 relative z-10">
                    <i data-lucide="building" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 bg-gray-50/80 rounded-2xl p-5 border border-gray-100 group-hover:border-secondary/20 transition-all duration-200">
                    <div class="flex justify-between items-start mb-2.5">
                        <h4 class="font-heading font-bold text-primary leading-snug" style="font-size: clamp(1rem, 1.5vw, 1.2rem);">Discover<br>condo quality buildings</h4>
                        <a href="{{ route('properties.index') }}" class="w-9 h-9 rounded-full border border-gray-200 flex items-center justify-center text-primary/25 hover:border-secondary hover:text-secondary transition-all duration-200 cursor-pointer flex-shrink-0 ml-3" aria-label="Discover buildings">
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
     SECTION 3 — FIND YOUR DREAM HOME (Search Filter Bar)
     Stayli layout: centered heading, subtitle, multi-dropdown row
     ═══════════════════════════════════════════════════════════════ --}}
<section id="dream-search" class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
        <h2 class="font-heading text-primary mb-4"
            style="font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.03em; line-height: 1.1;">
            Find your <em class="text-secondary italic font-light not-italic" style="font-style: italic;">dream home</em>
        </h2>
        <p class="text-sm text-text-main/40 max-w-md mx-auto mb-12">
            Connecting you with the perfect property for your loved ones
        </p>

        <form action="{{ route('properties.index') }}" method="GET"
              class="bg-white rounded-2xl shadow-lg border border-gray-100 p-2.5 flex flex-col md:flex-row items-stretch max-w-4xl mx-auto">

            <div class="flex items-center gap-2.5 flex-1 px-4 py-2.5 border-b md:border-b-0 md:border-r border-gray-100">
                <i data-lucide="building-2" class="w-4 h-4 text-primary/25 flex-shrink-0"></i>
                <select name="category_id" class="w-full border-none focus:ring-0 text-sm bg-transparent text-primary/60 cursor-pointer">
                    <option value="">Property</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center gap-2.5 flex-1 px-4 py-2.5 border-b md:border-b-0 md:border-r border-gray-100">
                <i data-lucide="map-pin" class="w-4 h-4 text-primary/25 flex-shrink-0"></i>
                <select name="location_id" class="w-full border-none focus:ring-0 text-sm bg-transparent text-primary/60 cursor-pointer">
                    <option value="">Location</option>
                    @foreach($locations as $loc)
                        <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center gap-2.5 flex-1 px-4 py-2.5 border-b md:border-b-0 md:border-r border-gray-100">
                <i data-lucide="calendar" class="w-4 h-4 text-primary/25 flex-shrink-0"></i>
                <select class="w-full border-none focus:ring-0 text-sm bg-transparent text-primary/60 cursor-pointer">
                    <option value="">Date</option>
                    <option>This Week</option>
                    <option>This Month</option>
                    <option>This Year</option>
                </select>
            </div>

            <div class="flex items-center gap-2.5 flex-1 px-4 py-2.5 border-b md:border-b-0 md:border-r border-gray-100">
                <i data-lucide="banknote" class="w-4 h-4 text-primary/25 flex-shrink-0"></i>
                <select name="max_price" class="w-full border-none focus:ring-0 text-sm bg-transparent text-primary/60 cursor-pointer">
                    <option value="">Price</option>
                    <option value="5000000">Up to ₹50L</option>
                    <option value="10000000">Up to ₹1Cr</option>
                    <option value="50000000">Up to ₹5Cr</option>
                    <option value="100000000">Up to ₹10Cr</option>
                </select>
            </div>

            <button type="submit"
                    class="bg-primary text-white px-7 py-3 rounded-xl text-sm font-semibold flex items-center justify-center gap-2 hover:opacity-90 transition-all duration-200 cursor-pointer whitespace-nowrap">
                <i data-lucide="search" class="w-4 h-4"></i>
                Search
            </button>
        </form>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 4 — FEATURED LISTINGS
     ═══════════════════════════════════════════════════════════════ --}}
<section id="featured" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-5">
            <div>
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Handpicked</p>
                <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                    Featured <strong class="font-bold">Estates</strong>
                </h2>
            </div>
            <a href="{{ route('properties.index') }}" class="text-primary/60 font-medium flex items-center gap-2 hover:gap-3 hover:text-primary transition-all duration-200 cursor-pointer text-sm group">
                View All
                <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach($featured as $property)
            <a href="{{ route('properties.show', $property->slug) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="relative h-60 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="{{ $property->title }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/15 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-secondary text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">
                        {{ $property->category->name }}
                    </span>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-1.5 text-[11px] text-text-main/35 mb-2">
                        <i data-lucide="map-pin" class="w-3 h-3"></i>
                        <span>{{ $property->location->name }}</span>
                    </div>
                    <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200">{{ $property->title }}</h3>
                    <div class="flex gap-5 text-[11px] text-text-main/35 mb-5">
                        <span class="flex items-center gap-1"><i data-lucide="bed" class="w-3 h-3"></i> {{ $property->bedrooms }} Bed</span>
                        <span class="flex items-center gap-1"><i data-lucide="bath" class="w-3 h-3"></i> {{ $property->bathrooms }} Bath</span>
                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-3 h-3"></i> {{ number_format($property->area) }} sqft</span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="font-heading font-bold text-primary text-lg">₹{{ number_format($property->price / 10000000, 2) }} Cr</span>
                        <span class="text-secondary font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            Details <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 5 — POPULAR LOCATIONS
     ═══════════════════════════════════════════════════════════════ --}}
<section id="locations" class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Explore Areas</p>
            <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                Popular <strong class="font-bold">Locations</strong>
            </h2>
        </div>

        @php
            $locImgs = [
                'https://images.unsplash.com/photo-1570168007204-dfb528c6958f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'https://images.unsplash.com/photo-1567157577867-05ccb1388e13?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'https://images.unsplash.com/photo-1524813686514-a57563d77965?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
            ];
            $fallback = ['Juhu','Worli','Andheri','Powai'];
        @endphp

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
            @for($i = 0; $i < 4; $i++)
            <a href="{{ isset($locations[$i]) ? route('properties.index', ['location_id' => $locations[$i]->id]) : '#' }}"
               class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="{{ $locImgs[$i] }}"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     alt="{{ isset($locations[$i]) ? $locations[$i]->name : $fallback[$i] }}">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">{{ isset($locations[$i]) ? $locations[$i]->name : $fallback[$i] }}</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1">
                        <i data-lucide="map-pin" class="w-3 h-3"></i> {{ rand(8, 35) }}+ Properties
                    </p>
                </div>
            </a>
            @endfor
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — WHY CHOOSE US
     ═══════════════════════════════════════════════════════════════ --}}
<section id="why-us" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
        <div class="grid grid-cols-2 gap-4">
            <img src="https://images.unsplash.com/photo-1600566753190-17f0bb2a6c3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                 class="w-full h-64 md:h-72 object-cover rounded-3xl mt-10 shadow-md" alt="Luxury interior design">
            <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                 class="w-full h-64 md:h-72 object-cover rounded-3xl shadow-md" alt="Modern architecture exterior">
        </div>
        <div>
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Why Tranquil</p>
            <h2 class="font-heading font-light text-primary mb-7"
                style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.15;">
                Expertise that<br><strong class="font-bold"><em class="italic text-secondary">tranquillizes.</em></strong>
            </h2>
            <p class="text-sm text-text-main/50 leading-relaxed mb-10 max-w-md">
                We believe finding a home should be as serene as living in one. Our curated portfolio and dedicated agent support ensure a seamless transition to your architectural sanctuary.
            </p>
            <div class="grid grid-cols-2 gap-x-8 gap-y-6">
                <div>
                    <h4 class="text-3xl font-heading font-bold text-secondary leading-none mb-1">500+</h4>
                    <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Properties Sold</p>
                </div>
                <div>
                    <h4 class="text-3xl font-heading font-bold text-secondary leading-none mb-1">98%</h4>
                    <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Satisfaction</p>
                </div>
                <div>
                    <h4 class="text-3xl font-heading font-bold text-secondary leading-none mb-1">24/7</h4>
                    <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Agent Support</p>
                </div>
                <div>
                    <h4 class="text-3xl font-heading font-bold text-secondary leading-none mb-1">0%</h4>
                    <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Hidden Fees</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 7 — LATEST PROPERTIES
     ═══════════════════════════════════════════════════════════════ --}}
<section id="latest" class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-5">
            <div>
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Just Added</p>
                <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                    Latest <strong class="font-bold">Arrivals</strong>
                </h2>
            </div>
            <div class="flex gap-2">
                <button class="px-5 py-2 rounded-full bg-primary text-white text-sm font-semibold cursor-pointer">For Sale</button>
                <button class="px-5 py-2 rounded-full border border-gray-200 text-primary/40 text-sm font-semibold hover:border-primary hover:text-primary transition-all duration-200 cursor-pointer">For Rent</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            @foreach($latest as $property)
            <a href="{{ route('properties.show', $property->slug) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="{{ $property->title }}">
                    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary">
                        {{ ucfirst($property->type) }}
                    </span>
                </div>
                <div class="p-6">
                    <span class="text-[11px] text-text-main/35 flex items-center gap-1 mb-2"><i data-lucide="map-pin" class="w-3 h-3"></i> {{ $property->location->name }} &bull; {{ $property->category->name }}</span>
                    <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200">{{ $property->title }}</h3>
                    <div class="flex gap-4 text-[11px] text-text-main/35 mb-4">
                        <span class="flex items-center gap-1"><i data-lucide="bed" class="w-3 h-3"></i> {{ $property->bedrooms }}</span>
                        <span class="flex items-center gap-1"><i data-lucide="bath" class="w-3 h-3"></i> {{ $property->bathrooms }}</span>
                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-3 h-3"></i> {{ number_format($property->area) }} sqft</span>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                        <span class="font-heading font-bold text-primary">₹{{ number_format($property->price / 10000000, 2) }} Cr</span>
                        <span class="text-secondary text-sm font-semibold flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            View <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 8 — MAP
     ═══════════════════════════════════════════════════════════════ --}}
<section id="map" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-14">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Locate</p>
            <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; line-height: 1.1;">
                Find on <strong class="font-bold">Map</strong>
            </h2>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-md border border-gray-100 h-[400px] md:h-[480px] relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783912927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy" title="Mumbai Properties Map"></iframe>
            <div class="absolute top-5 left-5 bg-white/95 backdrop-blur rounded-xl p-4 shadow-md border border-gray-100">
                <p class="font-heading font-bold text-primary text-sm mb-0.5">Mumbai Metropolitan</p>
                <p class="text-[10px] text-text-main/35">{{ \App\Models\Property::published()->count() }} active listings</p>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 9 — TESTIMONIALS
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
                ['n'=>'Advik Sharma','r'=>'Homeowner, Bandra','q'=>'Tranquil made what seemed impossible feel effortless. Every step was handled with pure elegance.'],
                ['n'=>'Priya Mehta','r'=>'Investor, Juhu','q'=>'The quality of listings is unmatched. I found my dream investment property within a week.'],
                ['n'=>'Rohan Kapoor','r'=>'First-time Buyer','q'=>'As a first-time buyer, I was nervous. Tranquil\'s agents guided me patiently through every step.'],
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
     SECTION 10 — CTA BANNER
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
     SECTION 11 — BLOG
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
            <a href="#" class="text-primary/60 font-medium flex items-center gap-2 hover:gap-3 hover:text-primary transition-all duration-200 cursor-pointer text-sm group">
                Read All <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-0.5 transition-transform"></i>
            </a>
        </div>

        @php $blogs = [
            ['t'=>'10 Things to Check Before Buying a Flat in Mumbai','x'=>'From RERA registration to structural audits — a comprehensive checklist.','c'=>'Buying Guide','d'=>'May 10, 2026','img'=>'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
            ['t'=>'Why Bandra West Remains Mumbai\'s Most Coveted Address','x'=>'Exploring the timeless appeal of Bandra\'s tree-lined streets.','c'=>'Market Report','d'=>'May 5, 2026','img'=>'https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
            ['t'=>'Interior Design Trends for Luxury Indian Homes in 2026','x'=>'How top architects are blending tradition with modernity.','c'=>'Lifestyle','d'=>'Apr 28, 2026','img'=>'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'],
        ]; @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach($blogs as $b)
            <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $b['img'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $b['t'] }}">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-0.5 rounded-full">{{ $b['c'] }}</span>
                        <span class="text-[10px] text-primary/20">{{ $b['d'] }}</span>
                    </div>
                    <h3 class="font-heading font-bold text-primary text-base mb-2 group-hover:text-secondary transition-colors duration-200 leading-snug">{{ $b['t'] }}</h3>
                    <p class="text-[13px] text-text-main/40 leading-relaxed mb-5">{{ $b['x'] }}</p>
                    <span class="text-primary/60 font-semibold text-sm flex items-center gap-1.5 group-hover:gap-2.5 group-hover:text-secondary transition-all">
                        Read More <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                    </span>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
