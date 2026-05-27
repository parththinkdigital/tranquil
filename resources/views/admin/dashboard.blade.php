@extends('layouts.admin')

@section('page-title', 'System Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
    <!-- Stat Card -->
    <div class="bg-white p-8 rounded-[32px] shadow-sm border border-teal-50 flex flex-col justify-between group hover:border-secondary transition-all">
        <div class="flex justify-between items-start mb-6">
            <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center text-primary group-hover:bg-secondary group-hover:text-white transition-all">
                <i data-lucide="building-2" class="w-6 h-6"></i>
            </div>
            <span class="text-[10px] font-bold uppercase tracking-widest text-green-500 bg-green-50 px-2 py-1 rounded-full">+12%</span>
        </div>
        <div>
            <h4 class="text-3xl font-heading font-bold text-primary mb-1">{{ $stats['total_properties'] }}</h4>
            <p class="text-xs uppercase tracking-widest font-bold text-primary/40">Total Properties</p>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[32px] shadow-sm border border-teal-50 flex flex-col justify-between group hover:border-secondary transition-all">
        <div class="flex justify-between items-start mb-6">
            <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center text-primary group-hover:bg-secondary group-hover:text-white transition-all">
                <i data-lucide="check-circle" class="w-6 h-6"></i>
            </div>
            <span class="text-[10px] font-bold uppercase tracking-widest text-teal-500 bg-teal-50 px-2 py-1 rounded-full">ACTIVE</span>
        </div>
        <div>
            <h4 class="text-3xl font-heading font-bold text-primary mb-1">{{ $stats['published_properties'] }}</h4>
            <p class="text-xs uppercase tracking-widest font-bold text-primary/40">Live Listings</p>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[32px] shadow-sm border border-teal-50 flex flex-col justify-between group hover:border-secondary transition-all">
        <div class="flex justify-between items-start mb-6">
            <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center text-primary group-hover:bg-secondary group-hover:text-white transition-all">
                <i data-lucide="target" class="w-6 h-6"></i>
            </div>
            <span class="text-[10px] font-bold uppercase tracking-widest text-blue-500 bg-blue-50 px-2 py-1 rounded-full">VALUE</span>
        </div>
        <div>
            <h4 class="text-3xl font-heading font-bold text-primary mb-1">{{ $stats['total_leads'] }}</h4>
            <p class="text-xs uppercase tracking-widest font-bold text-primary/40">Potential Leads</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    <!-- Recent Listings -->
    <div class="md:col-span-2 bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
        <div class="flex justify-between items-center mb-10">
            <h3 class="text-2xl font-heading font-bold text-primary italic">Recent <span class="text-secondary">Listings</span></h3>
            <a href="#" class="text-xs font-bold uppercase tracking-widest text-secondary hover:text-primary transition-colors">View All</a>
        </div>
        <div class="space-y-6">
            @foreach($recent_properties as $property)
            <div class="flex items-center gap-6 p-4 rounded-2xl hover:bg-teal-50/50 transition-all border border-transparent hover:border-teal-50 group">
                <div class="w-20 h-20 rounded-xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <p class="text-[10px] uppercase tracking-widest font-bold text-secondary mb-1">{{ $property->category?->name ?? 'Uncategorized' }} &bull; {{ $property->location?->name ?? 'Unknown Location' }}</p>
                    <h5 class="text-lg font-heading font-bold text-primary leading-none mb-2">{{ $property->title }}</h5>
                    <p class="text-sm font-bold text-primary/40 italic">₹{{ number_format($property->price / 10000000, 2) }} Cr</p>
                </div>
                <div class="text-right">
                    <div class="bg-green-50 text-green-600 border border-green-100 text-[10px] px-3 py-1 rounded-full font-bold uppercase tracking-widest mb-2">
                        {{ $property->status }}
                    </div>
                    <p class="text-[10px] text-primary/20 font-bold uppercase">{{ $property->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection