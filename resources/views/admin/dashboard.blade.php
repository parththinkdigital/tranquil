@extends('layouts.admin')

@section('page-title', 'System Overview')

@section('content')
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
    <!-- Stat Card 1 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-teal-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Total Properties</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ $stats['total_properties'] ?? 0 }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-teal-50 flex items-center justify-center text-teal-600 group-hover:bg-teal-500 group-hover:text-white transition-all">
            <i data-lucide="building-2" class="w-7 h-7"></i>
        </div>
    </div>
    
    <!-- Stat Card 2 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-blue-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Live Listings</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ $stats['published_properties'] ?? 0 }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-500 group-hover:text-white transition-all">
            <i data-lucide="check-circle" class="w-7 h-7"></i>
        </div>
    </div>
    
    <!-- Stat Card 3 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-indigo-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Property Types</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ $stats['total_property_types'] ?? 0 }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-500 group-hover:text-white transition-all">
            <i data-lucide="layout-grid" class="w-7 h-7"></i>
        </div>
    </div>
    
    <!-- Stat Card 4 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-purple-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Total Blogs</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ $stats['total_blogs'] ?? 0 }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600 group-hover:bg-purple-500 group-hover:text-white transition-all">
            <i data-lucide="file-text" class="w-7 h-7"></i>
        </div>
    </div>

    <!-- Stat Card 5 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-orange-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Testimonials</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ $stats['total_testimonials'] ?? 0 }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-600 group-hover:bg-orange-500 group-hover:text-white transition-all">
            <i data-lucide="star" class="w-7 h-7"></i>
        </div>
    </div>

    <!-- Stat Card 6 -->
    <div class="bg-white p-6 rounded-[24px] shadow-sm border border-slate-100 flex items-center justify-between group hover:shadow-md hover:border-pink-100 transition-all">
        <div>
            <p class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-1">Contacts & Leads</p>
            <h4 class="text-3xl font-heading font-bold text-slate-800">{{ ($stats['total_contacts'] ?? 0) + ($stats['total_leads'] ?? 0) }}</h4>
        </div>
        <div class="w-14 h-14 rounded-2xl bg-pink-50 flex items-center justify-center text-pink-600 group-hover:bg-pink-500 group-hover:text-white transition-all">
            <i data-lucide="users" class="w-7 h-7"></i>
        </div>
    </div>
</div>

<!-- Content Grid -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Recent Listings -->
    <div class="bg-white rounded-[32px] p-8 shadow-sm border border-slate-100">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-xl font-heading font-bold text-slate-800">Recent <span class="text-teal-600">Listings</span></h3>
            <a href="{{ route('admin.property.index') }}" class="text-xs font-bold uppercase tracking-widest text-teal-600 hover:text-teal-700 transition-colors">View All</a>
        </div>
        <div class="space-y-4">
            @forelse($recent_properties ?? [] as $property)
            <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                <div class="w-16 h-16 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-[10px] uppercase tracking-widest font-bold text-teal-600 mb-1 truncate">{{ $property->category?->name ?? 'Uncategorized' }} &bull; {{ $property->location?->name ?? 'Unknown Location' }}</p>
                    <h5 class="text-base font-heading font-bold text-slate-800 leading-tight mb-1 truncate">{{ $property->title ?? $property->name ?? 'Untitled' }}</h5>
                    @if(isset($property->price))
                    <p class="text-sm font-bold text-slate-400">₹{{ number_format((float)$property->price / 10000000, 2) }} Cr</p>
                    @endif
                </div>
                <div class="text-right flex-shrink-0">
                    <div class="bg-{{ ($property->status ?? '') == 'published' ? 'green' : 'amber' }}-50 text-{{ ($property->status ?? '') == 'published' ? 'green' : 'amber' }}-600 border border-{{ ($property->status ?? '') == 'published' ? 'green' : 'amber' }}-100 text-[10px] px-3 py-1 rounded-full font-bold uppercase tracking-widest mb-2 inline-block">
                        {{ $property->status ?? 'Draft' }}
                    </div>
                    @if($property->created_at)
                    <p class="text-[10px] text-slate-400 font-bold uppercase block">{{ $property->created_at->diffForHumans() }}</p>
                    @endif
                </div>
            </div>
            @empty
            <div class="text-center py-8 text-slate-400 font-bold text-sm">No recent listings found.</div>
            @endforelse
        </div>
    </div>

    <div class="space-y-8">
        <!-- Recent Contacts -->
        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-slate-100">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-heading font-bold text-slate-800">Recent <span class="text-pink-600">Contacts</span></h3>
                <a href="{{ route('admin.contacts.index') }}" class="text-xs font-bold uppercase tracking-widest text-pink-600 hover:text-pink-700 transition-colors">View All</a>
            </div>
            <div class="space-y-4">
                @forelse($recent_contacts ?? [] as $contact)
                <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                    <div class="w-12 h-12 rounded-xl bg-pink-50 text-pink-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="user" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h5 class="text-sm font-heading font-bold text-slate-800 truncate">{{ $contact->name }}</h5>
                        <p class="text-xs text-slate-500 truncate">{{ $contact->email }}</p>
                    </div>
                    <div class="text-right flex-shrink-0">
                        @if($contact->created_at)
                        <p class="text-[10px] text-slate-400 font-bold uppercase">{{ $contact->created_at->diffForHumans() }}</p>
                        @endif
                    </div>
                </div>
                @empty
                <div class="text-center py-6 text-slate-400 font-bold text-sm">No recent contacts found.</div>
                @endforelse
            </div>
        </div>

        <!-- Recent Blogs -->
        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-slate-100">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-heading font-bold text-slate-800">Recent <span class="text-purple-600">Blogs</span></h3>
                <a href="{{ route('admin.blogs.index') }}" class="text-xs font-bold uppercase tracking-widest text-purple-600 hover:text-purple-700 transition-colors">View All</a>
            </div>
            <div class="space-y-4">
                @forelse($recent_blogs ?? [] as $blog)
                <div class="flex items-center gap-4 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                    <div class="w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-slate-100">
                        @if($blog->image)
                            <img src="{{ Storage::url($blog->image) }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-purple-50 flex items-center justify-center text-purple-600">
                                <i data-lucide="image" class="w-5 h-5"></i>
                            </div>
                        @endif
                    </div>
                    <div class="flex-1 min-w-0">
                        <h5 class="text-sm font-heading font-bold text-slate-800 truncate">{{ $blog->title }}</h5>
                        <p class="text-xs text-slate-500 truncate">{{ Str::limit($blog->short_desc ?? strip_tags($blog->content ?? ''), 40) }}</p>
                    </div>
                    <div class="text-right flex-shrink-0">
                        @if($blog->created_at)
                        <p class="text-[10px] text-slate-400 font-bold uppercase block">{{ $blog->created_at->diffForHumans() }}</p>
                        @endif
                    </div>
                </div>
                @empty
                <div class="text-center py-6 text-slate-400 font-bold text-sm">No recent blogs found.</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection