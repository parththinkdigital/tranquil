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
                        <option value="1" class="text-primary">Apartment</option>
                        <option value="2" class="text-primary">Villa</option>
                        <option value="3" class="text-primary">Commercial</option>
                        <option value="4" class="text-primary">Plot</option>
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

            {{-- Avatar stack + Stats --}}
            <div>
                <div class="flex -space-x-3 mb-6">
                    <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden"><img src="https://i.pravatar.cc/80?img=10" alt="Happy buyer" class="w-full h-full object-cover"></div>
                    <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden"><img src="https://i.pravatar.cc/80?img=11" alt="Happy buyer" class="w-full h-full object-cover"></div>
                    <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden"><img src="https://i.pravatar.cc/80?img=12" alt="Happy buyer" class="w-full h-full object-cover"></div>
                    <div class="w-10 h-10 rounded-full border-2 border-white shadow-sm overflow-hidden"><img src="https://i.pravatar.cc/80?img=13" alt="Happy buyer" class="w-full h-full object-cover"></div>
                </div>

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
            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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

            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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

            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
            <a href="#" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1570168007204-dfb528c6958f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Juhu">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Juhu</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 12+ Properties</p>
                </div>
            </a>
            <a href="#" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1567157577867-05ccb1388e13?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Worli">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Worli</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 28+ Properties</p>
                </div>
            </a>
            <a href="#" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1524813686514-a57563d77965?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Andheri">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Andheri</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 19+ Properties</p>
                </div>
            </a>
            <a href="#" class="group relative h-60 md:h-72 rounded-3xl overflow-hidden shadow-sm cursor-pointer block">
                <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Powai">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/10 to-transparent"></div>
                <div class="absolute bottom-5 left-5">
                    <h3 class="text-lg md:text-xl font-heading font-bold text-white">Powai</h3>
                    <p class="text-[11px] text-white/50 mt-1 flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> 35+ Properties</p>
                </div>
            </a>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════
     SECTION 6 — WHY CHOOSE US (GSAP Animated - Premium Layout)
     ═══════════════════════════════════════════════════════════════ --}}
<section id="why-us" class="py-24 md:py-32 bg-[#F9F8F3] relative overflow-hidden">
    <div class="absolute -top-60 -right-60 w-[700px] h-[700px] bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">

        {{-- HEADLINE BLOCK — Mixed typography + inline images --}}
        <div class="flex flex-wrap items-center gap-3 md:gap-4 mb-16 md:mb-20" data-gsap="headline">
            <span class="font-heading font-bold text-primary" style="font-size: clamp(2.5rem, 5vw, 4rem); letter-spacing: -0.03em; line-height: 1;">Where</span>
            <span class="font-heading italic text-secondary" style="font-size: clamp(2.8rem, 5.5vw, 4.5rem); letter-spacing: -0.02em; line-height: 1; transform: translateY(-4px);" data-gsap="script-text">Your</span>
            <span class="inline-block w-28 md:w-40 h-12 md:h-14 lg:h-16 rounded-full overflow-hidden flex-shrink-0 shadow-lg border-2 border-white/60" data-gsap="pill-img">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" class="w-full h-full object-cover" alt="Luxury villa at dusk">
            </span>
            <span class="inline-block w-12 md:w-14 lg:w-16 h-12 md:h-14 lg:h-16 rounded-full overflow-hidden flex-shrink-0 shadow-lg border-2 border-white/60" data-gsap="circle-img">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003d96a00?w=300&q=80" class="w-full h-full object-cover" alt="Modern high-rise">
            </span>
            <div class="w-full font-heading font-bold text-primary mt-2" style="font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.03em; line-height: 1.1;">
                dream home <span class="italic text-secondary font-bold">awaits</span>
            </div>
        </div>

        {{-- BOTTOM GRID — Two columns --}}
        <div class="grid lg:grid-cols-[1fr_2.5fr] gap-10 lg:gap-16">

            {{-- LEFT COLUMN — Avatars, content, stats, CTA --}}
            <div data-gsap="left-col">
                {{-- Avatar stack --}}
                <div class="flex -space-x-3 mb-6" data-gsap="avatars">
                    <div class="w-12 h-12 rounded-full border-2 border-[#F9F8F3] shadow-md overflow-hidden">
                        <img src="https://i.pravatar.cc/80?img=10" alt="Happy client" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full border-2 border-[#F9F8F3] shadow-md overflow-hidden">
                        <img src="https://i.pravatar.cc/80?img=11" alt="Happy client" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full border-2 border-[#F9F8F3] shadow-md overflow-hidden">
                        <img src="https://i.pravatar.cc/80?img=12" alt="Happy client" class="w-full h-full object-cover">
                    </div>
                    <div class="w-12 h-12 rounded-full border-2 border-[#F9F8F3] shadow-md overflow-hidden">
                        <img src="https://i.pravatar.cc/80?img=13" alt="Happy client" class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- Section label --}}
                <p data-gsap="label" class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Why Tranquil</p>
                
                {{-- Heading --}}
                <h2 data-gsap="heading" class="font-heading font-light text-primary mb-4"
                    style="font-size: clamp(1.8rem, 3.5vw, 2.5rem); letter-spacing: -0.04em; line-height: 1.1;">
                    Expertise that<br><strong class="font-bold"><em class="italic text-secondary">tranquillizes.</em></strong>
                </h2>
                
                {{-- Description --}}
                <p data-gsap="desc" class="text-sm text-text-main/50 leading-relaxed mb-8 max-w-sm">
                    We believe finding a home should be as serene as living in one. Our curated portfolio and dedicated agent support ensure a seamless transition to your architectural sanctuary.
                </p>

                {{-- Stats grid (2×2) --}}
                <div data-gsap="stats" class="grid grid-cols-2 gap-x-6 gap-y-7 mb-8">
                    <div data-gsap="stat" class="relative">
                        <h4 class="text-3xl md:text-4xl font-heading font-bold text-secondary leading-none mb-1">
                            <span data-count="500" data-suffix="+">0</span>
                        </h4>
                        <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Properties Sold</p>
                        <div class="absolute -bottom-2 left-0 h-0.5 bg-secondary/20 rounded-full w-0" data-gsap="stat-bar"></div>
                    </div>
                    <div data-gsap="stat" class="relative">
                        <h4 class="text-3xl md:text-4xl font-heading font-bold text-secondary leading-none mb-1">
                            <span data-count="98" data-suffix="%">0</span>
                        </h4>
                        <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Satisfaction</p>
                        <div class="absolute -bottom-2 left-0 h-0.5 bg-secondary/20 rounded-full w-0" data-gsap="stat-bar"></div>
                    </div>
                    <div data-gsap="stat" class="relative">
                        <h4 class="text-3xl md:text-4xl font-heading font-bold text-secondary leading-none mb-1">
                            <span data-count="24" data-suffix="/7">0</span>
                        </h4>
                        <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Agent Support</p>
                        <div class="absolute -bottom-2 left-0 h-0.5 bg-secondary/20 rounded-full w-0" data-gsap="stat-bar"></div>
                    </div>
                    <div data-gsap="stat" class="relative">
                        <h4 class="text-3xl md:text-4xl font-heading font-bold text-secondary leading-none mb-1">
                            <span data-count="0" data-suffix="%">0</span>
                        </h4>
                        <p class="text-[10px] uppercase tracking-widest text-primary/30 font-semibold">Hidden Fees</p>
                        <div class="absolute -bottom-2 left-0 h-0.5 bg-secondary/20 rounded-full w-0" data-gsap="stat-bar"></div>
                    </div>
                </div>

                {{-- CTA Button --}}
                <a href="{{ route('pages.contact') }}" data-gsap="cta"
                   class="inline-block bg-[#0C1E17] text-white px-8 py-4 rounded-full font-bold text-xs tracking-widest uppercase hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl cursor-pointer">
                    Contact Us Now
                </a>
            </div>

            {{-- RIGHT COLUMN — Property Slider --}}
            <div class="relative" data-gsap="slider">
                {{-- Navigation arrows --}}
                <div class="flex justify-end gap-3 mb-5">
                    <button id="slider-prev" class="w-11 h-11 rounded-full border-2 border-primary/30 flex items-center justify-center text-primary hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 cursor-pointer flex-shrink-0" aria-label="Previous property">
                        <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    </button>
                    <button id="slider-next" class="w-11 h-11 rounded-full border-2 border-primary/30 flex items-center justify-center text-primary hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 cursor-pointer flex-shrink-0" aria-label="Next property">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </button>
                </div>

                {{-- Slider track --}}
                <div class="overflow-hidden rounded-[24px] relative bg-white shadow-xl">
                    <div class="flex" id="slider-track">
                        {{-- Slide 1 --}}
                        <div class="flex-shrink-0 w-full">
                            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&q=80" 
                                 class="w-full h-72 md:h-96 object-cover" 
                                 alt="Mountain luxury villa">
                            <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md rounded-2xl px-5 py-3 shadow-lg">
                                <p class="font-heading font-bold text-primary text-sm">Mountain Retreat</p>
                                <p class="text-[10px] text-primary/40">Bandra West • 5BHK Villa</p>
                            </div>
                        </div>
                        {{-- Slide 2 --}}
                        <div class="flex-shrink-0 w-[85%]">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0bb2a6c3e?w=900&q=80" 
                                 class="w-full h-72 md:h-96 object-cover" 
                                 alt="Cliffside ocean villa">
                            <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md rounded-2xl px-5 py-3 shadow-lg">
                                <p class="font-heading font-bold text-primary text-sm">Oceanview Estate</p>
                                <p class="text-[10px] text-primary/40">Juhu • 4BHK Penthouse</p>
                            </div>
                        </div>
                        {{-- Slide 3 --}}
                        <div class="flex-shrink-0 w-[85%]">
                            <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?w=900&q=80" 
                                 class="w-full h-72 md:h-96 object-cover" 
                                 alt="Modern architectural home">
                            <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md rounded-2xl px-5 py-3 shadow-lg">
                                <p class="font-heading font-bold text-primary text-sm">Skyline Residence</p>
                                <p class="text-[10px] text-primary/40">BKC • 3BHK Apartment</p>
                            </div>
                        </div>
                    </div>

                    {{-- Slide indicators --}}
                    <div class="absolute bottom-6 right-6 flex gap-2" id="slider-indicators">
                        <span class="w-3 h-3 rounded-full bg-white/90 border border-white/60"></span>
                        <span class="w-3 h-3 rounded-full bg-white/40 border border-white/60"></span>
                        <span class="w-3 h-3 rounded-full bg-white/40 border border-white/60"></span>
                    </div>
                </div>

                {{-- Peek effect hint --}}
                <div class="absolute -right-4 top-20 bottom-20 w-20 bg-gradient-to-l from-white/20 to-transparent rounded-r-[24px] pointer-events-none hidden lg:block"></div>
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
            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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

            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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

            <a href="{{ route('properties.index') }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-lg transition-all duration-200 cursor-pointer block">
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


<!-- {{-- ═══════════════════════════════════════════════════════════════
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
                <p class="text-[10px] text-text-main/35">listings</p>
            </div>
        </div>
    </div>
</section> -->


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

@section('script')
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    // Respect reduced motion
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) {
        document.querySelectorAll('[data-gsap]').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
            el.style.clipPath = 'none';
        });
        document.querySelectorAll('[data-gsap="stat-bar"]').forEach(el => el.style.width = '100%');
        document.querySelectorAll('[data-count]').forEach(el => {
            el.textContent = el.dataset.count + (el.dataset.suffix || '');
        });
        return;
    }

    // -- Helper: counter animation --
    function animateCounter(el, target, suffix) {
        const obj = { val: 0 };
        gsap.to(obj, {
            val: target,
            duration: 1.8,
            ease: 'power3.out',
            onUpdate: () => {
                const display = target % 1 === 0 ? Math.floor(obj.val) : obj.val.toFixed(1);
                el.textContent = display + suffix;
            },
        });
    }

    // -- Build master timeline with ScrollTrigger --
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '#why-us',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse',
        },
    });

    // 1. Set initial clip-path on image wrappers
    gsap.set('[data-gsap="img-wrap"]', { clipPath: 'inset(0 0 100% 0)' });

    // 2. Animate clip-path reveal + slight scale entrance
    tl.to('[data-gsap="img-wrap"]', {
        clipPath: 'inset(0 0 0% 0)',
        duration: 1.2,
        ease: 'power3.out',
        stagger: 0.2,
    }, 0);

    // 3. Floating badge slides and fades in
    tl.fromTo('[data-gsap="badge"]',
        { x: 40, opacity: 0, scale: 0.9 },
        { x: 0, opacity: 1, scale: 1, duration: 0.8, ease: 'power3.out' },
        0.4
    );

    // 4. Small accent image scales in
    tl.fromTo('[data-gsap="img-3"]',
        { scale: 0, opacity: 0, rotate: -15 },
        { scale: 1, opacity: 1, rotate: 0, duration: 0.7, ease: 'back.out(1.7)' },
        0.55
    );

    // 5. Decorative corner subtle entrance
    tl.fromTo('[data-gsap="deco-corner"]',
        { opacity: 0, scale: 0.8, rotate: -20 },
        { opacity: 1, scale: 1, rotate: 0, duration: 0.6, ease: 'power2.out' },
        0.7
    );

    // 6. Decorative ring subtle entrance
    tl.fromTo('[data-gsap="deco-ring"]',
        { opacity: 0, scale: 0.5 },
        { opacity: 1, scale: 1, duration: 0.5, ease: 'power2.out' },
        0.8
    );

    // 7. Text content stagger
    tl.fromTo('[data-gsap="label"]',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out' },
        0.3
    ).fromTo('[data-gsap="heading"]',
        { y: 40, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' },
        0.45
    ).fromTo('[data-gsap="desc"]',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out' },
        0.6
    );

    // 8. Stat cards stagger
    tl.fromTo('[data-gsap="stat"]',
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, ease: 'power2.out', stagger: 0.15 },
        0.8
    );

    // 9. Stat underline bars animate width
    tl.fromTo('[data-gsap="stat-bar"]',
        { width: '0%' },
        { width: '100%', duration: 0.8, ease: 'power2.out', stagger: 0.15 },
        0.9
    );

    // 10. Counters trigger when stats enter viewport
    const counterElements = document.querySelectorAll('[data-count]');
    counterElements.forEach(el => {
        const target = parseFloat(el.dataset.count);
        const suffix = el.dataset.suffix || '';
        ScrollTrigger.create({
            trigger: el.closest('[data-gsap="stat"]'),
            start: 'top 85%',
            onEnter: () => animateCounter(el, target, suffix),
            once: true,
        });
    });

    // -- Parallax on images --
    gsap.to('[data-gsap="img-1"]', {
        y: -30,
        ease: 'none',
        scrollTrigger: {
            trigger: '#why-us',
            start: 'top bottom',
            end: 'bottom top',
            scrub: 1.5,
        },
    });
    gsap.to('[data-gsap="img-2"]', {
        y: -20,
        ease: 'none',
        scrollTrigger: {
            trigger: '#why-us',
            start: 'top bottom',
            end: 'bottom top',
            scrub: 1.5,
        },
    });
});
</script>
@endsection
