@extends('layouts.client')

@php
$article = [
    'title' => 'The Future of Luxury Living: 2026 Design Trends Redefining Mumbai\'s Skyline',
    'excerpt' => 'From biophilic facades to AI-integrated homes — how India\'s top architects are reimagining what it means to live luxuriously in the world\'s most dynamic city.',
    'category' => 'Architecture',
    'date' => 'May 25, 2026',
    'read_time' => '8 min read',
    'author' => [
        'name' => 'Aarav Mehta',
        'initials' => 'AM',
        'role' => 'Senior Editor, Tranquil Journal',
        'bio' => 'Aarav has spent over a decade covering luxury real estate and architecture across India and the Middle East. His work has appeared in Architectural Digest, The Economic Times, and Luxe Interiors.',
        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
    ],
    'img' => 'https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80',
    'slug' => 'future-of-luxury-living-2026',
];

$related = [
    [
        'title' => 'Why Bandra West Remains Mumbai\'s Most Coveted Address',
        'category' => 'Market Report',
        'img' => 'https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'bandra-west-mumbai-coveted-address',
    ],
    [
        'title' => 'Interior Design Trends for Luxury Indian Homes in 2026',
        'category' => 'Lifestyle',
        'img' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'interior-design-trends-luxury-indian-homes-2026',
    ],
    [
        'title' => 'The Rise of Eco-Luxury: Sustainable Real Estate in India',
        'category' => 'Architecture',
        'img' => 'https://images.unsplash.com/photo-1600573472588-1f8e0a5e9c9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'rise-of-eco-luxury-sustainable-real-estate-india',
    ],
];
@endphp

@section('meta_title', $article['title'] . ' - Tranquil Journal')
@section('meta_description', $article['excerpt'])
@section('og_type', 'article')

@section('content')

{{-- Hero --}}
<section class="relative h-[80vh] min-h-[600px] overflow-hidden bg-primary">
    <div class="absolute inset-0 pointer-events-none select-none flex items-center justify-center overflow-hidden opacity-[0.04]">
        <span class="font-heading font-black text-white leading-none tracking-[-0.06em] whitespace-nowrap"
              style="font-size: clamp(10rem, 18vw, 19rem);">
            Tranquil
        </span>
    </div>
    <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 via-40% to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-16 lg:p-20">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-[10px] font-bold uppercase tracking-[.25em] text-white bg-white/15 backdrop-blur-sm px-3.5 py-1.5 rounded-full">{{ $article['category'] }}</span>
                <span class="text-[11px] text-white/50 font-medium tracking-wide">{{ $article['date'] }}</span>
                <span class="w-1 h-1 rounded-full bg-white/30"></span>
                <span class="text-[11px] text-white/50 font-medium">{{ $article['read_time'] }}</span>
            </div>
            <h1 class="font-heading font-black text-white leading-tight"
                style="font-size: clamp(2rem, 5vw, 4.5rem); letter-spacing: -0.04em;">
                {{ $article['title'] }}
            </h1>
        </div>
    </div>
</section>

{{-- Content --}}
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Breadcrumb --}}
        <nav class="flex text-[10px] uppercase tracking-widest font-bold text-primary/30 mb-16 gap-2.5 items-center">
            <a href="/" class="hover:text-secondary transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-3 h-3 text-primary/20"></i>
            <a href="{{ route('blogs.index') }}" class="hover:text-secondary transition-colors">Journal</a>
            <i data-lucide="chevron-right" class="w-3 h-3 text-primary/20"></i>
            <span class="text-primary/50 truncate max-w-[280px]">{{ $article['title'] }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">

            {{-- Article Body --}}
            <div class="lg:col-span-8">

                {{-- Lead --}}
                <p class="text-2xl md:text-3xl font-light text-text-main/60 leading-[2] mb-14 border-l-4 border-secondary pl-6">
                    {{ $article['excerpt'] }}
                </p>

                {{-- Article prose --}}
                <div class="prose prose-teal max-w-none
                            prose-headings:font-heading prose-headings:text-primary prose-headings:font-bold
                            prose-h2:text-4xl prose-h2:tracking-tight prose-h2:mt-24 prose-h2:mb-6
                            prose-h3:text-3xl prose-h3:tracking-tight prose-h3:mt-16
                            prose-p:text-text-main/65 prose-p:leading-[2] prose-p:text-lg md:prose-p:text-xl prose-p:font-light
                            prose-blockquote:border-l-[3px] prose-blockquote:border-secondary
                            prose-blockquote:text-text-main/55 prose-blockquote:font-light prose-blockquote:text-xl md:prose-blockquote:text-2xl
                            prose-blockquote:italic prose-blockquote:pl-8 prose-blockquote:py-4 prose-blockquote:my-12
                            prose-blockquote:not-italic prose-blockquote:bg-teal-50/30 prose-blockquote:rounded-r-2xl
                            prose-strong:text-primary prose-strong:font-semibold
                            prose-a:text-secondary prose-a:no-underline hover:prose-a:underline
                            prose-img:rounded-3xl prose-img:shadow-lg prose-img:my-12
                            prose-ul:space-y-3 prose-ul:my-8 prose-li:text-text-main/65 prose-li:font-light
                            prose-ol:space-y-3 prose-ol:my-8 prose-li:marker:text-primary/30">

                    <p>Mumbai's skyline has never been static. But as we move through 2026, the city's architectural language is undergoing a transformation more profound than any renovation cycle before it. This isn't merely about taller buildings or shinier facades — it's a fundamental reimagining of what luxury living means in the context of a rapidly evolving metropolis.</p>

                    <h2>The Biophilic Revolution</h2>
                    <p>The most significant trend reshaping high-end residential architecture is biophilic design — the principle of connecting inhabitants with nature. In a city where square footage commands a premium, developers are getting creative. </p>
                    <p>Projects like the upcoming <strong>Verde Tower</strong> in Worli feature cascading terraces with native flora on every floor, creating what architects call a "vertical forest." Each residence opens to at least 400 square feet of private garden space — a radical departure from the glass-and-steel boxes that defined the last decade.</p>
                    <p>"We're moving past the era of the purely aesthetic facade," explains Priya Nair, principal architect at Mumbai-based Studio Verda. "Luxury now means oxygen. It means waking up to birdsong. Our clients aren't just buying square feet — they're buying an ecosystem."</p>

                    <blockquote>
                        <p>"Luxury now means oxygen. It means waking up to birdsong. Our clients aren't just buying square feet — they're buying an ecosystem."</p>
                    </blockquote>

                    <h2>AI-Integrated Living Spaces</h2>
                    <p>Artificial intelligence has moved beyond the novelty of voice-activated lights. In 2026's luxury segment, AI is the invisible butler — anticipating needs before they're articulated. </p>
                    <p>New developments in South Mumbai's premium corridor are being wired with <strong>ambient intelligence systems</strong> that learn residents' patterns over time. The home adjusts lighting, temperature, and even scent diffusion based on the time of day and the occupant's mood, detected through subtle biometric cues embedded in door handles and seating.</p>
                    <p>"The goal is frictionless living," says Rajesh Khanna, founder of SmartScape Technologies, whose systems are being installed in five upcoming luxury towers. "You shouldn't have to tell your house what you need. It should already know."</p>

                    <h2>The Return of Craft</h2>
                    <p>Paradoxically, as technology advances, there's a simultaneous hunger for the handcrafted. The wealthiest buyers are commissioning interiors that celebrate Indian artisanal traditions — hand-block-printed wallpapers from Bagru, marble inlay work from Agra, and teak wood carving from Saharanpur.</p>
                    <p>This isn't tokenism. Developers are employing full-time curators who work with families to commission bespoke pieces. A recent penthouse in Altamount Road features a hand-hammered brass ceiling installation by Jaipur-based artist Meera Singh that took 14 artisans eight months to complete.</p>

                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Luxury interior with traditional Indian craftsmanship">

                    <h2>The New Floor Plan</h2>
                    <p>The post-pandemic luxury home has evolved. The dedicated home office is now non-negotiable, but it's no longer a spare bedroom with a desk. The new standard includes:</p>
                    <ul>
                        <li><strong>Wellness wings</strong> — private yoga studios, cold plunges, and infrared saunas</li>
                        <li><strong>Flexible entertaining spaces</strong> — rooms that transform from intimate dining to cocktail receptions via moving walls</li>
                        <li><strong>Multi-generational suites</strong> — self-contained apartments within apartments for aging parents or adult children</li>
                        <li><strong>Pet amenities</strong> — built-in grooming stations and dedicated outdoor runs on private terraces</li>
                    </ul>

                    <h2>Location Dynamics: The Shift Westward</h2>
                    <p>While South Mumbai remains the crown jewel, the city's luxury axis is extending. The coastal road has dramatically reduced travel times, making Bandra's northern reaches and even parts of Goregaon viable for ultra-luxury development.</p>
                    <p>Goregaon's <strong>Aarey Colony</strong> — once known primarily for its milk dairy — is emerging as an unexpected hotspot. The area's dense tree cover and proximity to Sanjay Gandhi National Park offer something increasingly rare in Mumbai: silence. Luxury developers are acquiring large parcels to build low-density, high-privacy estates that would be impossible to assemble in the more built-up southern neighborhoods.</p>

                    <blockquote>
                        <p>"Mumbai is running out of land, but it's also running out of quiet. The next frontier of luxury isn't location — it's tranquility."</p>
                    </blockquote>

                    <h2>Investment Outlook</h2>
                    <p>According to <strong>Knight Frank's 2026 India Wealth Report</strong>, the ultra-luxury segment (properties valued at ₹40 crore and above) saw a 23% year-on-year increase in transactions. The primary drivers remain: </p>
                    <ol>
                        <li><strong>Generational wealth transfer</strong> — younger inheritors upgrading family properties</li>
                        <li><strong>NRI repatriation</strong> — returning professionals from the US and UK commanding dollar-denominated salaries</li>
                        <li><strong>IPO liquidity</strong> — a wave of tech and fintech founders cashing out</li>
                    </ol>
                    <p>Knight Frank's national director for residential, Shishir Baijal, notes: "The luxury market is decoupling from the broader economy. These buyers are less interest-rate sensitive and more driven by lifestyle aspirations and scarcity value. A trophy apartment in a world-class tower is increasingly viewed as an alternative asset class."</p>

                    <h2>The Verdict</h2>
                    <p>Mumbai's luxury real estate in 2026 is not about opulence for opulence's sake. The most discerning buyers are demanding <strong>intelligence, sustainability, and authenticity</strong> in equal measure. The buildings that command premiums are those that manage to feel simultaneously futuristic and timeless — a delicate balance that the city's best architects are learning to strike.</p>
                    <p>As one developer put it: "We're not building homes for people to show off. We're building sanctuaries for people to come back to themselves."</p>
                    <p>In a city that never sleeps, that might be the ultimate luxury.</p>
                </div>

                {{-- Divider --}}
                <div class="my-16 flex items-center gap-4">
                    <span class="h-px flex-1 bg-gradient-to-r from-primary/10 to-transparent"></span>
                    <span class="text-[10px] uppercase tracking-[.3em] font-bold text-primary/20">End of Article</span>
                    <span class="h-px flex-1 bg-gradient-to-l from-primary/10 to-transparent"></span>
                </div>

                {{-- Tags --}}
                <div class="flex flex-wrap items-center gap-2.5 mb-16">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-primary/20 mr-1">Topics</span>
                    <a href="#" class="px-4 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Architecture</a>
                    <a href="#" class="px-4 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Interior Design</a>
                    <a href="#" class="px-4 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Mumbai Real Estate</a>
                    <a href="#" class="px-4 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Luxury Living</a>
                    <a href="#" class="px-4 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Smart Homes</a>
                </div>

                {{-- Author Card --}}
                <div class="p-8 md:p-10 bg-primary/[0.02] rounded-3xl border border-primary/5 mb-12">
                    <div class="flex flex-col sm:flex-row gap-6 items-start">
                        <img src="{{ $article['author']['avatar'] }}" alt="{{ $article['author']['name'] }}" class="w-16 h-16 md:w-20 md:h-20 rounded-2xl object-cover shadow-md flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                <h4 class="font-heading font-bold text-primary text-lg">{{ $article['author']['name'] }}</h4>
                                <span class="text-[10px] uppercase tracking-widest font-semibold text-secondary bg-secondary/10 px-3 py-1 rounded-full">{{ $article['author']['role'] }}</span>
                            </div>
                            <p class="text-text-main/45 text-sm font-light leading-relaxed">{{ $article['author']['bio'] }}</p>
                        </div>
                    </div>
                </div>

                {{-- Share --}}
                <div class="flex items-center gap-4">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-primary/20">Share</span>
                    <span class="w-px h-4 bg-primary/10"></span>
                    <a href="#" class="w-9 h-9 rounded-xl border border-primary/10 flex items-center justify-center text-primary/30 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                        <i data-lucide="twitter" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl border border-primary/10 flex items-center justify-center text-primary/30 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                        <i data-lucide="linkedin" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl border border-primary/10 flex items-center justify-center text-primary/30 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                        <i data-lucide="facebook" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl border border-primary/10 flex items-center justify-center text-primary/30 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 cursor-pointer">
                        <i data-lucide="link" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-4">
                <div class="sticky top-40 space-y-3">

                    {{-- Browse by Category --}}    
                    <div class="bg-white rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] uppercase tracking-[.2em] font-bold text-primary/30 mb-5 flex items-center gap-2">
                            <i data-lucide="folder" class="w-3.5 h-3.5"></i>
                            Browse by Topic
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Market Report</a>
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Buying Guide</a>
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Lifestyle</a>
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Architecture</a>
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Interiors</a>
                            <a href="#" class="px-3.5 py-2 bg-primary/[0.04] text-primary/60 text-xs font-semibold rounded-xl hover:bg-primary hover:text-white transition-all duration-200 cursor-pointer">Investments</a>
                        </div>
                    </div>

                    {{-- Popular Posts --}}
                    <div class="bg-white rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] uppercase tracking-[.2em] font-bold text-primary/30 mb-5 flex items-center gap-2">
                            <i data-lucide="trending-up" class="w-3.5 h-3.5"></i>
                            Popular Reads
                        </h4>
                        <div class="space-y-4">
                            <a href="#" class="flex gap-3 group cursor-pointer">
                                <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover" alt="Thumbnail">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-semibold text-primary group-hover:text-secondary transition-colors leading-snug line-clamp-2">10 Things to Check Before Buying a Flat in Mumbai</p>
                                    <span class="text-[10px] text-primary/20 mt-0.5 block font-medium">Buying Guide</span>
                                </div>
                            </a>
                            <a href="#" class="flex gap-3 group cursor-pointer">
                                <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover" alt="Thumbnail">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-semibold text-primary group-hover:text-secondary transition-colors leading-snug line-clamp-2">Why Bandra West Remains Mumbai's Most Coveted Address</p>
                                    <span class="text-[10px] text-primary/20 mt-0.5 block font-medium">Market Report</span>
                                </div>
                            </a>
                            <a href="#" class="flex gap-3 group cursor-pointer">
                                <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover" alt="Thumbnail">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-semibold text-primary group-hover:text-secondary transition-colors leading-snug line-clamp-2">Interior Design Trends for Luxury Indian Homes in 2026</p>
                                    <span class="text-[10px] text-primary/20 mt-0.5 block font-medium">Lifestyle</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- Related Posts --}}
<section class="py-20 md:py-28 bg-primary/[0.02] border-t border-primary/5">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-[10px] uppercase tracking-[.3em] font-bold text-secondary mb-4 block">Continue Reading</span>
            <div class="flex items-baseline justify-between">
                <h2 class="font-heading font-bold text-primary tracking-tight" style="font-size: clamp(1.5rem, 3vw, 2.5rem);">
                    Related <span class="font-light italic text-secondary">Stories</span>
                </h2>
                <a href="{{ route('blogs.index') }}" class="text-xs font-semibold text-primary/30 hover:text-primary transition-colors hidden sm:block cursor-pointer">View All</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            @foreach($related as $post)
            <a href="#" class="group bg-white rounded-2xl overflow-hidden border border-primary/5 hover:shadow-lg transition-all duration-300 cursor-pointer">
                <div class="h-48 md:h-52 overflow-hidden">
                    <img src="{{ $post['img'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6 md:p-7">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-1 rounded-full inline-block mb-3">{{ $post['category'] }}</span>
                    <h3 class="font-heading font-bold text-primary text-base md:text-lg group-hover:text-secondary transition-colors leading-snug">{{ $post['title'] }}</h3>
                    <span class="mt-4 text-primary/30 group-hover:text-secondary transition-colors font-semibold text-xs flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                        Read Story <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
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
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const hero = document.querySelector('section.relative.h-\\[80vh\\]');
    const heroImg = hero?.querySelector('img');
    if (heroImg) {
        gsap.to(heroImg, {
            scale: 1.1,
            scrollTrigger: {
                trigger: hero,
                start: 'top top',
                end: 'bottom top',
                scrub: 1.5,
            }
        });
    }
});
</script>
@endsection
