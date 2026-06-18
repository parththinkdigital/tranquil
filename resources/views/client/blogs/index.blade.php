@extends('layouts.client')

@section('meta_title', 'The Journal - Luxury Real Estate Stories & Insights | Tranquilstead')
@section('meta_description', 'Explore the Tranquilstead Journal — stories, insights, and trends shaping luxury real estate, architecture, design, and fine living.')
@section('canonical_url', route('blogs.index'))
@php $lastPage = 12; @endphp
@if(request()->page > 1)@section('prev_url', route('blogs.index', ['page' => request()->page - 1]))@endif
@if((request()->page ?? 1) < $lastPage)@section('next_url', route('blogs.index', ['page'=> (request()->page ?? 1) + 1]))@endif

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
            $featured = $blogs->onFirstPage() ? $blogs->first() : null;
            @endphp

            {{-- Featured Post --}}
            @if($featured)
            <div class="mb-20">
                <span class="text-[10px] uppercase tracking-[.3em] font-bold text-primary/30 mb-6 block">Featured Story</span>
                <a href="{{ route('blogs.show', $featured->slug) }}" class="group grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 bg-white rounded-[40px] overflow-hidden shadow-lg border border-teal-50 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="lg:col-span-3 h-80 lg:h-[500px] overflow-hidden">
                        <img src="{{ asset('storage/' . $featured->image) }}" alt="{{ $featured->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="lg:col-span-2 p-8 lg:p-12 lg:pl-0 flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-5">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-3 py-1.5 rounded-full">{{ $featured->category->name ?? 'Uncategorized' }}</span>
                            <span class="text-[11px] text-primary/30 font-medium">5 min read</span>
                        </div>
                        <h2 class="font-heading font-bold text-primary leading-tight mb-5" style="font-size: clamp(1.5rem, 2.5vw, 2.2rem); letter-spacing: -0.03em;">
                            {{ $featured->title }}
                        </h2>
                        <p class="text-text-main/50 text-sm md:text-base font-light leading-relaxed mb-8 line-clamp-3">
                            {{ $featured->short_desc }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-secondary text-white flex items-center justify-center text-xs font-bold">AD</div>
                                <div>
                                    <p class="text-sm font-semibold text-primary">Admin</p>
                                    <p class="text-[11px] text-primary/30">{{ $featured->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                            <span class="text-primary/40 group-hover:text-secondary transition-colors font-semibold text-sm flex items-center gap-1.5 group-hover:gap-3 transition-all">
                                Read <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            {{-- Posts Grid --}}
            <div class="mb-16">
                <div class="flex items-baseline justify-between mb-10">
                    <h3 class="font-heading font-bold text-primary tracking-tight" style="font-size: clamp(1.5rem, 2.5vw, 2rem);">All <span class="font-light italic text-secondary">Articles</span></h3>
                    <span class="text-xs text-primary/30 font-medium">{{ $blogs->total() }} stories</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($blogs as $post)
                    @if($featured && $post->id === $featured->id)
                        @continue
                    @endif
                    <a href="{{ route('blogs.show', $post->slug) }}" class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-xl transition-all duration-300 cursor-pointer flex flex-col block">
                        <div class="h-52 overflow-hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <div class="p-6 md:p-7 flex flex-col flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-1 rounded-full">{{ $post->category->name ?? 'Uncategorized' }}</span>
                                <span class="text-[10px] text-primary/20 font-medium">5 min read</span>
                            </div>
                            <h3 class="font-heading font-bold text-primary text-lg mb-3 group-hover:text-secondary transition-colors duration-200 leading-snug">{{ $post->title }}</h3>
                            <p class="text-[13px] text-text-main/40 leading-relaxed mb-6 flex-1 line-clamp-3">{{ $post->short_desc }}</p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-[10px] font-bold">AD</div>
                                    <span class="text-xs font-medium text-primary/50">Admin</span>
                                </div>
                                <span class="text-primary/40 group-hover:text-secondary transition-colors">
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center mt-16">
                {{ $blogs->links('pagination::tailwind') }}
            </div>
        </div>
    </section>


    @endsection

    @section('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof gsap === 'undefined') return;

            const tl = gsap.timeline({
                defaults: {
                    ease: 'power3.out'
                }
            });

            tl.from('[data-hero="badge"]', {
                    y: 20,
                    opacity: 0,
                    duration: 0.6
                })
                .from('[data-hero="heading-1"]', {
                    y: 60,
                    opacity: 0,
                    duration: 0.8
                }, '-=0.3')
                .from('[data-hero="heading-2"]', {
                    y: 80,
                    opacity: 0,
                    duration: 0.8
                }, '-=0.5')
                .from('[data-hero="divider"]', {
                    scaleX: 0,
                    transformOrigin: 'left center',
                    duration: 0.6
                }, '-=0.4')
                .from('[data-hero="tagline"]', {
                    y: 30,
                    opacity: 0,
                    duration: 0.6
                }, '-=0.2')
                .from('[data-hero="proof"]', {
                    y: 20,
                    opacity: 0,
                    duration: 0.5
                }, '-=0.3')
                .from('[data-hero="search"]', {
                    y: 30,
                    opacity: 0,
                    duration: 0.6
                }, '-=0.2');
        });
    </script>
    @endsection