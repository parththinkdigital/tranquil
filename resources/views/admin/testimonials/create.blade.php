@extends('layouts.admin')

@section('page-title', 'Add Testimonial')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50 max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Add <span class="text-secondary">Testimonial</span></h3>
        <a href="{{ route('admin.testimonials.index') }}" class="text-xs font-bold uppercase tracking-widest text-primary/40 hover:text-primary transition-colors flex items-center gap-2">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Back
        </a>
    </div>

    <form action="{{ route('admin.testimonials.store') }}" method="POST">
        @csrf

        <div class="space-y-6">
            <div>
                <label for="name" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm @error('name') border-red-300 ring-red-100 @enderror">
                @error('name')
                    <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="designation" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Designation</label>
                <input type="text" name="designation" id="designation" value="{{ old('designation') }}" required
                    class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm @error('designation') border-red-300 ring-red-100 @enderror">
                @error('designation')
                    <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="review" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Review</label>
                <textarea name="review" id="review" rows="5" required
                    class="w-full px-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm @error('review') border-red-300 ring-red-100 @enderror">{{ old('review') }}</textarea>
                @error('review')
                    <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-10 flex justify-end">
            <button type="submit" class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-xl transition-all shadow-md hover:shadow-lg flex items-center gap-2 group">
                Save Testimonial <i data-lucide="check" class="w-4 h-4 group-hover:scale-110 transition-transform"></i>
            </button>
        </div>
    </form>
</div>
@endsection
