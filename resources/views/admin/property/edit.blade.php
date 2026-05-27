@extends('layouts.admin')

@section('page-title', 'Edit Property')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Edit <span class="text-secondary">Property</span></h3>
        <a href="{{ route('admin.property.index') }}" class="text-primary hover:text-secondary transition-colors flex items-center gap-2 text-sm font-bold uppercase tracking-widest">
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

    <form action="{{ route('admin.property.update', $property) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-primary/60 mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $property->name) }}" required class="w-full bg-teal-50/30 border border-teal-100 rounded-2xl px-4 py-3 text-sm text-primary focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-full transition-colors flex items-center gap-2">
                <i data-lucide="save" class="w-4 h-4"></i> Update Property
            </button>
        </div>
    </form>
</div>
@endsection
