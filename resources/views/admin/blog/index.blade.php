@extends('layouts.admin')

@section('page-title', 'Blog Posts')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-10">
        <div>
            <h3 class="text-2xl font-heading font-bold text-primary italic">Manage <span class="text-secondary">Blog Posts</span></h3>
            <p class="text-xs text-primary/40 font-bold uppercase tracking-widest mt-1">{{ $blogs->total() }} total posts</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}"
           class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-6 py-3 rounded-full transition-colors flex items-center gap-2 shadow-md hover:shadow-lg">
            <i data-lucide="plus" class="w-4 h-4"></i> New Post
        </a>
    </div>

    {{-- Success Alert --}}
    @if(session('success'))
    <div class="bg-green-50 text-green-600 border border-green-100 px-4 py-3 rounded-2xl mb-6 text-sm flex items-center gap-3">
        <i data-lucide="check-circle" class="w-4 h-4 shrink-0"></i>
        {{ session('success') }}
    </div>
    @endif

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-teal-50">
                    <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-primary/40">Thumbnail</th>
                    <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-primary/40">Title & Tag</th>
                    <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-primary/40">Short Desc</th>
                    <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-primary/40">Event Date</th>
                    <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-primary/40 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-teal-50">
                @forelse($blogs as $blog)
                <tr class="hover:bg-teal-50/20 transition-colors group">

                    {{-- Thumbnail --}}
                    <td class="py-4 px-4">
                        <div class="w-16 h-16 rounded-xl overflow-hidden border border-teal-100 shrink-0">
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 alt="{{ $blog->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                    </td>

                    {{-- Title & Tag --}}
                    <td class="py-4 px-4">
                        <p class="font-bold text-primary text-sm leading-snug">{{ Str::limit($blog->title, 40) }}</p>
                        <span class="mt-1 inline-block bg-secondary/10 text-secondary text-[10px] font-bold uppercase tracking-widest px-2 py-0.5 rounded-full">
                            {{ $blog->tag }}
                        </span>
                    </td>

                    {{-- Short Desc --}}
                    <td class="py-4 px-4 max-w-xs">
                        <p class="text-sm text-primary/60 leading-relaxed line-clamp-2">{{ Str::limit($blog->short_desc, 80) }}</p>
                    </td>

                    {{-- Event Date --}}
                    <td class="py-4 px-4">
                        @if($blog->event_date)
                            <div class="flex items-center gap-2 text-sm text-primary/60">
                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-secondary shrink-0"></i>
                                {{ $blog->event_date->format('d M Y') }}
                            </div>
                        @else
                            <span class="text-primary/30 text-xs italic">—</span>
                        @endif
                    </td>

                    {{-- Actions --}}
                    <td class="py-4 px-4 text-right">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('admin.blogs.edit', $blog) }}"
                               title="Edit"
                               class="w-8 h-8 flex items-center justify-center rounded-lg bg-teal-50 text-primary hover:bg-secondary hover:text-white transition-all">
                                <i data-lucide="edit-2" class="w-3.5 h-3.5"></i>
                            </a>
                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this blog post? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Delete"
                                        class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-400 hover:bg-red-500 hover:text-white transition-all">
                                    <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-16 text-center">
                        <div class="flex flex-col items-center gap-3 text-primary/30">
                            <i data-lucide="newspaper" class="w-12 h-12"></i>
                            <p class="text-sm font-bold uppercase tracking-widest">No blog posts yet</p>
                            <a href="{{ route('admin.blogs.create') }}"
                               class="mt-2 text-secondary text-xs font-bold uppercase tracking-widest hover:underline flex items-center gap-1">
                                <i data-lucide="plus" class="w-3 h-3"></i> Create your first post
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if($blogs->hasPages())
    <div class="mt-8 pt-6 border-t border-teal-50">
        {{ $blogs->links() }}
    </div>
    @endif

</div>
@endsection
