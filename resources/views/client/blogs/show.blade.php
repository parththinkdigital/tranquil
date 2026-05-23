@extends('layouts.client')

@section('content')
<section class="relative pt-32 pb-24 bg-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 md:px-12 relative">
        <div class="mb-10 text-center">
            <a href="{{ route('blogs.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-primary/40 hover:text-secondary transition-colors mb-8 uppercase tracking-widest">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to all stories
            </a>
            
            <h1 class="font-heading text-primary leading-tight mb-8" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.03em;">
                {{ $blog->title }}
            </h1>
            
            <div class="flex items-center justify-center gap-6 text-sm">
                <div class="flex items-center gap-2 text-primary font-bold">
                    <div class="w-10 h-10 rounded-full bg-primary/5 flex items-center justify-center">
                        <i data-lucide="user" class="w-4 h-4 text-primary"></i>
                    </div>
                    {{ $blog->user->name ?? 'Admin' }}
                </div>
                <div class="w-1 h-1 rounded-full bg-primary/20"></div>
                <div class="text-primary/50 font-medium flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    {{ $blog->published_at ? $blog->published_at->format('F d, Y') : $blog->created_at->format('F d, Y') }}
                </div>
            </div>
        </div>

        <div class="rounded-[2rem] overflow-hidden shadow-2xl shadow-primary/10 mb-16 relative">
            @if($blog->image)
                <img src="{{ Storage::url($blog->image) }}" class="w-full h-auto max-h-[600px] object-cover" alt="{{ $blog->title }}">
            @else
                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="w-full h-auto max-h-[600px] object-cover" alt="{{ $blog->title }}">
            @endif
        </div>

        <div class="prose prose-lg md:prose-xl prose-teal max-w-none prose-headings:font-heading prose-headings:text-primary prose-p:text-text-main/80 prose-a:text-secondary hover:prose-a:text-primary prose-img:rounded-3xl prose-img:shadow-lg">
            {!! nl2br(e($blog->content)) !!}
        </div>

        <div class="mt-20 pt-10 border-t border-gray-100 text-center">
            <h4 class="font-heading font-bold text-primary text-2xl mb-6">Share this story</h4>
            <div class="flex items-center justify-center gap-4">
                <button class="w-12 h-12 rounded-full bg-gray-50 text-primary hover:bg-secondary hover:text-white flex items-center justify-center transition-all shadow-sm">
                    <i data-lucide="facebook" class="w-5 h-5"></i>
                </button>
                <button class="w-12 h-12 rounded-full bg-gray-50 text-primary hover:bg-secondary hover:text-white flex items-center justify-center transition-all shadow-sm">
                    <i data-lucide="twitter" class="w-5 h-5"></i>
                </button>
                <button class="w-12 h-12 rounded-full bg-gray-50 text-primary hover:bg-secondary hover:text-white flex items-center justify-center transition-all shadow-sm">
                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                </button>
                <button class="w-12 h-12 rounded-full bg-gray-50 text-primary hover:bg-secondary hover:text-white flex items-center justify-center transition-all shadow-sm">
                    <i data-lucide="link-2" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
