@extends('layouts.client')
@section('meta_title', $blog->title . ' - Tranquilstead Journal')
@section('meta_description', $blog->short_desc)
@section('og_type', 'article')
@section('og_image', asset('storage/' . $blog->image))

{{-- JSON-LD Article + BreadcrumbList --}}
@section('schema')

<script type="application/ld+json">
    {!!json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => url('/')
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Journal',
                    'item' => route('blogs.index')
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $blog -> title,
                    'item' => url() -> current()
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
    {!!json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $blog -> title,
            'description' => $blog -> short_para,
            'image' => asset('storage/'.$blog -> image),
            'datePublished' => $blog -> created_at -> toIso8601String(),
            'dateModified' => $blog -> updated_at -> toIso8601String(),
            'author' => [
                '@type' => 'Person',
                'name' => 'Admin'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Tranquilstead',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/og-default.jpg')
                ]
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => url() -> current()
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

@endsection

@section('content')
{{-- Hero --}}
<section class="relative h-[80vh] min-h-[600px] overflow-hidden bg-primary">
    <div class="absolute inset-0 pointer-events-none select-none flex items-center justify-center overflow-hidden opacity-[0.04]">
        <span class="font-heading font-black text-white leading-none tracking-[-0.06em] whitespace-nowrap"
            style="font-size: clamp(10rem, 18vw, 19rem);">
            Tranquilstead
        </span>
    </div>
    <img src="{{ asset('storage/' . ($blog->banner_img ?? $blog->image)) }}" alt="{{ $blog->title }}" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 via-40% to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-16 lg:p-20">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-[10px] font-bold uppercase tracking-[.25em] text-white bg-white/15 backdrop-blur-sm px-3.5 py-1.5 rounded-full">{{ optional($blog->category)->name ?? 'General' }}</span>
                <span class="text-[11px] text-white/50 font-medium tracking-wide">{{ $blog->created_at->format('M d, Y') }}</span>
                <span class="w-1 h-1 rounded-full bg-white/30"></span>
                <span class="text-[11px] text-white/50 font-medium">5 min read</span>
            </div>
            <h1 class="font-heading font-black text-white leading-tight"
                style="font-size: clamp(2rem, 5vw, 4.5rem); letter-spacing: -0.04em;">
                {{ $blog->title }}
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
            <span class="text-primary/50 truncate max-w-[280px]">{{ $blog->title }}</span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
            {{-- Article Body --}}
            <div class="lg:col-span-8">
                {{-- Lead --}}
                <p class="text-2xl md:text-3xl font-light text-text-main/60 leading-[2] mb-14 border-l-4 border-secondary pl-6">
                    {{ $blog->short_para }}
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

                    {!! $blog->long_desc1 !!}
                    {!! $blog->long_desc2 !!}
                </div>

                {{-- Divider --}}
                <div class="w-full h-px bg-primary/10 my-16"></div>
            </div>

            {{-- Sidebar --}}
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
                            @foreach($categories as $cat)
                            <a href="{{ route('blogs.index', ['category' => $cat->id]) }}"
                                class="px-3.5 py-2 text-xs font-semibold rounded-xl transition-all duration-200 cursor-pointer
                        {{ optional($blog->category)->id == $cat->id
                            ? 'bg-secondary text-white'
                            : 'bg-primary/[0.04] text-primary/60 hover:bg-primary hover:text-white' }}">
                                {{ $cat->title }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tags --}}
                    @if(!empty($blog->tag))
                    <div class="bg-white rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] uppercase tracking-[.2em] font-bold text-primary/30 mb-5 flex items-center gap-2">
                            <i data-lucide="tag" class="w-3.5 h-3.5"></i>
                            Tags
                        </h4>

                        <div class="flex flex-wrap gap-2">
                            @foreach(array_filter(array_map('trim', explode(',', $blog->tag))) as $tag)
                            <span class="px-3 py-1.5 bg-secondary/10 text-secondary text-xs font-semibold rounded-lg">
                                #{{ $tag }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Popular Reads / Latest Stories --}}
                    <div class="bg-white rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] uppercase tracking-[.2em] font-bold text-primary/30 mb-5 flex items-center gap-2">
                            <i data-lucide="trending-up" class="w-3.5 h-3.5"></i>
                            Popular Reads
                        </h4>

                        <div class="space-y-4">
                            @foreach($latestBlogs as $post)
                            <a href="{{ route('blogs.show', $post->slug) }}"
                                class="flex gap-3 group cursor-pointer">

                                <div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        class="w-full h-full object-cover"
                                        alt="{{ $post->title }}">
                                </div>

                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-semibold text-primary group-hover:text-secondary transition-colors leading-snug line-clamp-2">
                                        {{ $post->title }}
                                    </p>

                                    <span class="text-[10px] text-primary/20 mt-0.5 block font-medium">
                                        {{ optional($post->category)->title ?? 'General' }}
                                    </span>
                                </div>
                            </a>
                            @endforeach
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
            @foreach($relatedBlogs as $post)
            <a href="{{ route('blogs.show', $post->slug) }}"
                class="group bg-white rounded-2xl overflow-hidden border border-primary/5 hover:shadow-lg transition-all duration-300">

                <div class="h-48 md:h-52 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>

                <div class="p-6 md:p-7">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-secondary bg-secondary/10 px-2.5 py-1 rounded-full inline-block mb-3">
                        {{ optional($post->category)->name ?? 'General' }}
                    </span>

                    <h3 class="font-heading font-bold text-primary text-base md:text-lg group-hover:text-secondary transition-colors leading-snug">
                        {{ $post->title }}
                    </h3>

                    <span class="mt-4 text-primary/30 group-hover:text-secondary transition-colors font-semibold text-xs flex items-center gap-1.5">
                        Read Story
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
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