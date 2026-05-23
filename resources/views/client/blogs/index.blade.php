@extends('layouts.client')

@section('content')
<section class="relative pt-32 pb-20 bg-background overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute top-[-10%] right-[-5%] w-[40%] h-[60%] rounded-full bg-secondary/10 blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center relative">
        <p class="text-[11px] uppercase tracking-[.4em] font-bold text-secondary mb-4 block">Insights & News</p>
        <h1 class="font-heading text-primary mb-6" style="font-size: clamp(2.5rem, 5vw, 4rem); letter-spacing: -0.04em; line-height: 1;">
            Our Latest <em class="text-secondary italic font-light not-italic" style="font-style: italic;">Stories</em>
        </h1>
        <p class="text-base text-text-main/50 max-w-xl mx-auto leading-relaxed mb-12">
            Discover the latest trends in luxury real estate, expert advice on property investment, and guides to the most prestigious neighborhoods.
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
            <a href="{{ route('blogs.show', $blog->slug) }}" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 block">
                <div class="relative h-64 overflow-hidden">
                    @if($blog->image)
                        <img src="{{ Storage::url($blog->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $blog->title }}">
                    @else
                        <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $blog->title }}">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-white/90 backdrop-blur text-primary px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest shadow-sm">
                        {{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}
                    </span>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 text-[11px] font-bold text-secondary uppercase tracking-widest mb-3">
                        <i data-lucide="user" class="w-3 h-3"></i> {{ $blog->user->name ?? 'Admin' }}
                    </div>
                    <h3 class="font-heading font-bold text-primary text-xl mb-4 group-hover:text-secondary transition-colors duration-200 leading-snug">{{ $blog->title }}</h3>
                    <p class="text-sm text-text-main/60 line-clamp-3 leading-relaxed mb-6">
                        {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 120) }}
                    </p>
                    <div class="flex items-center text-primary font-bold text-sm gap-2 group-hover:gap-3 transition-all duration-300">
                        Read Full Story <i data-lucide="arrow-right" class="w-4 h-4 text-secondary"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        @if($blogs->isEmpty())
        <div class="text-center py-20 bg-white rounded-3xl border border-gray-100 shadow-sm">
            <div class="w-16 h-16 bg-primary/5 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                <i data-lucide="file-text" class="w-8 h-8"></i>
            </div>
            <h3 class="text-2xl font-heading font-bold text-primary mb-2">No Stories Yet</h3>
            <p class="text-text-main/50">Check back later for exciting insights and news.</p>
        </div>
        @endif

        @if($blogs->hasPages())
        <div class="mt-16 flex justify-center">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</section>
@endsection
