@extends('layouts.client')

@section('meta_title', 'The Journal - Luxury Real Estate Stories & Insights | Tranquilstead')
@section('meta_description', 'Explore the Tranquilstead Journal — stories, insights, and trends shaping luxury real estate, architecture, design, and fine living.')
@section('canonical_url', route('blogs.index'))
@if(request()->page > 1)@section('prev_url', route('blogs.index', ['page' => request()->page - 1]))@endif
@if(request()->page < $lastPage ?? 1)@section('next_url', route('blogs.index', ['page' => (request()->page ?? 1) + 1]))@endif

@section('content')
<section class="relative pt-40 pb-20 bg-teal-50/30 overflow-hidden">
    {{-- Ghost watermark brand --}}
    <div class="absolute inset-0 pointer-events-none select-none flex justify-center pt-32 md:pt-28 overflow-hidden">
        <span class="font-heading font-black text-primary/[0.03] leading-none tracking-[-0.06em] whitespace-nowrap"
              style="font-size: clamp(10rem, 25vw, 22rem);">
            TRANQUILSTEAD
        </span>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        {{-- Hero --}}
        <div class="mb-12 md:mb-16">
            {{-- Established badge --}}
            <div class="flex items-center gap-4 mb-8 md:mb-11">
                <span data-hero="badge" class="text-[10px] uppercase tracking-[.3em] font-bold text-secondary bg-secondary/10 px-4 py-2 rounded-full">Since 2026</span>
                <span class="h-px flex-1 bg-gradient-to-r from-primary/10 to-transparent max-w-[120px]"></span>
            </div>

            {{-- Main headline — Exaggerated Minimalism --}}
            <h1 data-hero="heading-1" class="font-heading font-black text-primary leading-none tracking-[-0.05em]"
                style="font-size: clamp(2.5rem, 6vw, 5rem);">
                THE
            </h1>
            <h1 data-hero="heading-2" class="font-heading font-black text-primary leading-none tracking-[-0.05em] -mt-1 md:-mt-2"
                style="font-size: clamp(4rem, 14vw, 11rem);">
                JOURNAL
            </h1>

            {{-- Accent divider --}}
            <div data-hero="divider" class="w-24 h-[2px] bg-secondary mt-8 mb-8"></div>

            {{-- Value prop + social proof --}}
            <div class="flex flex-col md:flex-row md:items-end gap-6 md:gap-16">
                <p data-hero="tagline" class="text-text-main/50 text-lg md:text-xl font-light max-w-xl leading-relaxed">
                    Stories, insights, and trends shaping the world of luxury real estate and fine living.
                </p>
                <div data-hero="proof" class="flex items-center gap-4 shrink-0">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-secondary to-primary ring-2 ring-white"></div>
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-cta to-secondary ring-2 ring-white"></div>
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-cta ring-2 ring-white"></div>
                    </div>
                    <div>
                        <span class="font-bold text-primary">5,000+</span>
                        <span class="text-primary/30 font-medium ml-1">Readers</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Search + Categories --}}
        <div data-hero="search" class="bg-white/80 backdrop-blur-sm rounded-2xl p-5 md:p-6 shadow-sm border border-primary/5 mb-16">
            <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
                <div class="relative w-full md:max-w-xs">
                    <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-primary/30"></i>
                    <input type="text" placeholder="Search articles..." class="w-full pl-10 pr-4 py-2.5 bg-primary/[0.04] rounded-xl border border-primary/10 text-sm focus:outline-none focus:border-primary/30 focus:bg-white transition-all placeholder:text-primary/20">
                </div>
                <div class="flex gap-1.5 flex-wrap">
                    <button class="px-4 py-2 text-xs font-semibold text-white bg-primary rounded-xl hover:bg-primary/90 transition-all duration-200 cursor-pointer shadow-sm">All</button>
                    <button class="px-4 py-2 text-xs font-semibold text-primary/60 hover:text-primary hover:bg-primary/10 rounded-xl transition-all duration-200 cursor-pointer">Market Report</button>
                    <button class="px-4 py-2 text-xs font-semibold text-primary/60 hover:text-primary hover:bg-primary/10 rounded-xl transition-all duration-200 cursor-pointer">Buying Guide</button>
                    <button class="px-4 py-2 text-xs font-semibold text-primary/60 hover:text-primary hover:bg-primary/10 rounded-xl transition-all duration-200 cursor-pointer">Lifestyle</button>
                    <button class="px-4 py-2 text-xs font-semibold text-primary/60 hover:text-primary hover:bg-primary/10 rounded-xl transition-all duration-200 cursor-pointer">Architecture</button>
                </div>
            </div>
        </div>

        @php
            $featured = [
                'title' => 'The Future of Luxury Living: 2026 Design Trends Redefining Mumbai\'s Skyline',
                'excerpt' => 'From biophilic facades to AI-integrated homes — how India\'s top architects are reimagining what it means to live luxuriously in the world\'s most dynamic city.',
                'category' => 'Architecture',
                'date' => 'May 25, 2026',
                'read_time' => '8 min read',
                'author' => 'Aarav Mehta',
                'author_avatar' => 'AM',
                'img' => 'https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80',
                'slug' => 'future-of-luxury-living-2026',
            ];

            $posts = [
                [
                    'title' => '10 Things to Check Before Buying a Flat in Mumbai',
                    'excerpt' => 'From RERA registration to structural audits — a comprehensive checklist for first-time buyers in India\'s most competitive real estate market.',
                    'category' => 'Buying Guide',
                    'date' => 'May 20, 2026',
                    'read_time' => '6 min read',
                    'author' => 'Priya Sharma',
                    'img' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'things-to-check-before-buying-flat-mumbai',
                ],
                [
                    'title' => 'Why Bandra West Remains Mumbai\'s Most Coveted Address',
                    'excerpt' => 'Exploring the timeless appeal of Bandra\'s tree-lined streets, heritage bungalows, and the seamless blend of old-world charm with modern luxury.',
                    'category' => 'Market Report',
                    'date' => 'May 15, 2026',
                    'read_time' => '5 min read',
                    'author' => 'Rohan Desai',
                    'img' => 'https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'bandra-west-mumbai-coveted-address',
                ],
                [
                    'title' => 'Interior Design Trends for Luxury Indian Homes in 2026',
                    'excerpt' => 'How top architects are blending tradition with modernity — from handwoven textiles to smart lighting systems that adapt to your mood.',
                    'category' => 'Lifestyle',
                    'date' => 'May 10, 2026',
                    'read_time' => '7 min read',
                    'author' => 'Ananya Kapoor',
                    'img' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'interior-design-trends-luxury-indian-homes-2026',
                ],
                [
                    'title' => 'A Comprehensive Guide to RERA Registration for Homebuyers',
                    'excerpt' => 'Everything you need to know about RERA — from verifying your developer to understanding project timelines and legal recourse.',
                    'category' => 'Buying Guide',
                    'date' => 'May 5, 2026',
                    'read_time' => '10 min read',
                    'author' => 'Vikram Joshi',
                    'img' => 'https://images.unsplash.com/photo-1560520031-6001575e7ee3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'rera-registration-guide-homebuyers',
                ],
                [
                    'title' => 'Palm Jumeirah vs. Bandra: A Cross-Continent Luxury Comparison',
                    'excerpt' => 'Two of the world\'s most exclusive addresses, separated by 2,500 kilometres — which offers better value for the ultra-wealthy investor?',
                    'category' => 'Market Report',
                    'date' => 'Apr 28, 2026',
                    'read_time' => '9 min read',
                    'author' => 'Aarav Mehta',
                    'img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'palm-jumeirah-vs-bandra-luxury-comparison',
                ],
                [
                    'title' => 'Smart Home Technology: What\'s Worth the Investment in 2026',
                    'excerpt' => 'From voice-controlled ambient lighting to AI security systems — separating the gimmicks from the genuinely transformative smart home innovations.',
                    'category' => 'Lifestyle',
                    'date' => 'Apr 22, 2026',
                    'read_time' => '6 min read',
                    'author' => 'Priya Sharma',
                    'img' => 'https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'smart-home-technology-investment-2026',
                ],
                [
                    'title' => 'The Rise of Eco-Luxury: Sustainable Real Estate in India',
                    'excerpt' => 'Green-certified buildings, net-zero homes, and the growing demand for environmentally conscious luxury living spaces across metropolitan India.',
                    'category' => 'Architecture',
                    'date' => 'Apr 15, 2026',
                    'read_time' => '7 min read',
                    'author' => 'Rohan Desai',
                    'img' => 'https://images.unsplash.com/photo-1600573472588-1f8e0a5e9c9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'rise-of-eco-luxury-sustainable-real-estate-india',
                ],
                [
                    'title' => 'Navigating Home Loans: Interest Rates, Tax Benefits & Strategies',
                    'excerpt' => 'A deep dive into the current lending landscape — fixed vs. floating rates, prepayment strategies, and how to maximise tax deductions under the new regime.',
                    'category' => 'Buying Guide',
                    'date' => 'Apr 8, 2026',
                    'read_time' => '11 min read',
                    'author' => 'Vikram Joshi',
                    'img' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'navigating-home-loans-interest-rates-strategies',
                ],
                [
                    'title' => 'Art Collecting for the Modern Home: A Curator\'s Guide',
                    'excerpt' => 'How to build a meaningful art collection that complements your space — from emerging Indian artists to investment-grade international pieces.',
                    'category' => 'Lifestyle',
                    'date' => 'Apr 1, 2026',
                    'read_time' => '8 min read',
                    'author' => 'Ananya Kapoor',
                    'img' => 'https://images.unsplash.com/photo-1536924940846-227afb31e968?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'slug' => 'art-collecting-modern-home-curator-guide',
                ],
            ];
        @endphp

        {{-- Featured Post --}}
        <div class="mb-20">
            <span class="text-[10px] uppercase tracking-[.3em] font-bold text-primary/30 mb-6 block">Featured Story</span>
            <a href="#" class="group grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 bg-white rounded-[40px] overflow-hidden shadow-lg border border-teal-50 hover:shadow-xl transition-all duration-300 cursor-pointer">
                <div class="lg:col-span-3 h-80 lg:h-[500px] overflow-hidden">
                    <img src="{{ $featured['img'] }}" alt="{{ $featured['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="lg:col-span-2 p-8 lg:p-12 lg:pl-0 flex flex-col justify-center">
                    <div class="flex items-center gap-4 mb-5">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-3 py-1.5 rounded-full">{{ $featured['category'] }}</span>
                        <span class="text-[11px] text-primary/30 font-medium">{{ $featured['read_time'] }}</span>
                    </div>
                    <h2 class="font-heading font-bold text-primary leading-tight mb-5" style="font-size: clamp(1.5rem, 2.5vw, 2.2rem); letter-spacing: -0.03em;">
                        {{ $featured['title'] }}
                    </h2>
                    <p class="text-text-main/50 text-sm md:text-base font-light leading-relaxed mb-8 line-clamp-3">
                        {{ $featured['excerpt'] }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary text-white flex items-center justify-center text-xs font-bold">{{ $featured['author_avatar'] }}</div>
                            <div>
                                <p class="text-sm font-semibold text-primary">{{ $featured['author'] }}</p>
                                <p class="text-[11px] text-primary/30">{{ $featured['date'] }}</p>
                            </div>
                        </div>
                        <span class="text-primary/40 group-hover:text-secondary transition-colors font-semibold text-sm flex items-center gap-1.5 group-hover:gap-3 transition-all">
                            Read <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        {{-- Posts Grid --}}
        <div class="mb-16">
            <div class="flex items-baseline justify-between mb-10">
                <h3 class="font-heading font-bold text-primary tracking-tight" style="font-size: clamp(1.5rem, 2.5vw, 2rem);">All <span class="font-light italic text-secondary">Articles</span></h3>
                <span class="text-xs text-primary/30 font-medium">{{ count($posts) }} stories</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $i => $post)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-xl transition-all duration-300 cursor-pointer flex flex-col">
                    <div class="h-52 overflow-hidden">
                        <img src="{{ $post['img'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6 md:p-7 flex flex-col flex-1">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-1 rounded-full">{{ $post['category'] }}</span>
                            <span class="text-[10px] text-primary/20 font-medium">{{ $post['read_time'] }}</span>
                        </div>
                        <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200 leading-snug">{{ $post['title'] }}</h3>
                        <p class="text-[13px] text-text-main/40 leading-relaxed mb-6 flex-1 line-clamp-3">{{ $post['excerpt'] }}</p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-[10px] font-bold">{{ implode('', array_map(fn($w) => substr($w, 0, 1), explode(' ', $post['author']))) }}</div>
                                <span class="text-xs font-medium text-primary/50">{{ $post['author'] }}</span>
                            </div>
                            <span class="text-primary/40 group-hover:text-secondary transition-colors">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-16">
            <nav class="inline-flex items-center gap-2">
                <a href="#" class="px-4 py-2.5 border border-teal-100 bg-white rounded-xl text-sm font-medium text-primary hover:bg-teal-50 transition-all cursor-pointer">Previous</a>
                <a href="#" class="px-4 py-2.5 border border-primary bg-primary rounded-xl text-sm font-bold text-white cursor-pointer">1</a>
                <a href="#" class="px-4 py-2.5 border border-teal-100 bg-white rounded-xl text-sm font-medium text-primary hover:bg-teal-50 transition-all cursor-pointer">2</a>
                <a href="#" class="px-4 py-2.5 border border-teal-100 bg-white rounded-xl text-sm font-medium text-primary hover:bg-teal-50 transition-all cursor-pointer">3</a>
                <span class="px-2 text-primary/20">...</span>
                <a href="#" class="px-4 py-2.5 border border-teal-100 bg-white rounded-xl text-sm font-medium text-primary hover:bg-teal-50 transition-all cursor-pointer">12</a>
                <a href="#" class="px-4 py-2.5 border border-teal-100 bg-white rounded-xl text-sm font-medium text-primary hover:bg-teal-50 transition-all cursor-pointer">Next</a>
            </nav>
        </div>
    </div>
</section>


@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    tl.from('[data-hero="badge"]', { y: 20, opacity: 0, duration: 0.6 })
      .from('[data-hero="heading-1"]', { y: 60, opacity: 0, duration: 0.8 }, '-=0.3')
      .from('[data-hero="heading-2"]', { y: 80, opacity: 0, duration: 0.8 }, '-=0.5')
      .from('[data-hero="divider"]', { scaleX: 0, transformOrigin: 'left center', duration: 0.6 }, '-=0.4')
      .from('[data-hero="tagline"]', { y: 30, opacity: 0, duration: 0.6 }, '-=0.2')
      .from('[data-hero="proof"]', { y: 20, opacity: 0, duration: 0.5 }, '-=0.3')
      .from('[data-hero="search"]', { y: 30, opacity: 0, duration: 0.6 }, '-=0.2');
});
</script>
@endsection
