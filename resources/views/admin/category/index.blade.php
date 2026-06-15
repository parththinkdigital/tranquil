@extends('layouts.admin')

@section('page-title', 'Blog Categories')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Manage <span class="text-secondary">Categories</span></h3>
        <a href="{{ route('admin.category.create') }}" class="bg-primary hover:bg-secondary text-white text-xs font-bold uppercase tracking-widest px-6 py-3 rounded-full transition-colors flex items-center gap-2">
            <i data-lucide="plus" class="w-4 h-4"></i> Add New
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 text-green-600 border border-green-100 px-4 py-3 rounded-2xl mb-6 text-sm flex items-center gap-3">
        <i data-lucide="check-circle" class="w-4 h-4"></i>
        {{ session('success') }}
    </div>
    @endif
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-teal-50">
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40">Title</th>
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-teal-50">
                @forelse($categories as $category)
                <tr class="hover:bg-teal-50/20 transition-colors">
                    <td class="py-4 px-6">
                        <p class="font-bold text-primary">{{ $category->title }}</p>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('admin.category.edit', $category) }}" class="text-secondary hover:text-primary transition-colors">
                                <i data-lucide="edit-2" class="w-4 h-4"></i>
                            </a>
                            <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-600 transition-colors">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="py-8 text-center text-primary/40 italic text-sm">
                        No categories found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-8">
        {{ $categories->links() }}
    </div>
</div>
@endsection
