@extends('layouts.admin')

@section('page-title', 'Add Property Type')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Add New <span class="text-secondary">Type</span></h3>
        <a href="{{ route('admin.property-type.index') }}" class="text-primary hover:text-secondary transition-colors flex items-center gap-2 text-sm font-bold uppercase tracking-widest">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back
        </a>
    </div>

    @if($errors->any())
    <div class="bg-red-50 text-red-600 border border-red-100 px-4 py-3 rounded-2xl mb-6 text-sm">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.property-type.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-primary/60 mb-2">Select Property</label>
            <select name="property_id" required class="w-full bg-teal-50/30 border border-teal-100 rounded-2xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all">
                <option value="">-- Choose Property --</option>
                @foreach($properties as $property)
                    <option value="{{ $property->id }}" {{ old('property_id') == $property->id ? 'selected' : '' }}>
                        {{ $property->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-primary/60 mb-2">Type Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. 2BHK, Villa, Office Space" required class="w-full bg-teal-50/30 border border-teal-100 rounded-2xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-full transition-colors flex items-center gap-2">
                <i data-lucide="save" class="w-4 h-4"></i> Save Type
            </button>
        </div>
    </form>
</div>
@endsection
