@extends('layouts.admin')

@section('page-title', 'Add Category')

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Add <span class="text-secondary">Category</span></h3>
        <a href="{{ route('admin.category.index') }}" class="text-xs font-bold uppercase tracking-widest text-primary/40 hover:text-primary transition-colors flex items-center gap-2">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back
        </a>
    </div>
    <form action="{{ route('admin.category.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="title" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Category Title <span class="text-red-400">*</span></label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm text-primary @error('title') border-red-300 ring-2 ring-red-100 @enderror">
            @error('title')
            <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i> {{ $message }}</p>
            @enderror
        </div>

        <div class="pt-4 text-right">
            <button type="submit" class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-8 py-3 rounded-full transition-colors inline-flex items-center gap-2">
                Save Category <i data-lucide="check" class="w-4 h-4"></i>
            </button>
        </div>
    </form>
</div>
@endsection
