@extends('layouts.admin')

@section('content')
<div class="mb-8 flex justify-between items-end">
    <div>
        <h1 class="text-3xl font-heading font-bold text-primary mb-2">Property Details</h1>
        <p class="text-teal-800/60 text-sm">Manage detailed information for all properties.</p>
    </div>
    <a href="{{ route('admin.property-details.create') }}" class="bg-secondary text-white px-6 py-2.5 rounded-xl font-bold hover:bg-secondary/90 transition-colors flex items-center gap-2">
        <i data-lucide="plus" class="w-4 h-4"></i> Add Property Details
    </a>
</div>

@if(session('success'))
<div class="bg-teal-50 text-teal-800 p-4 rounded-xl mb-6 flex items-center gap-3">
    <i data-lucide="check-circle" class="w-5 h-5 text-teal-500"></i>
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-3xl shadow-sm border border-teal-50 overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-teal-50/50 text-teal-800/60 text-[10px] uppercase tracking-widest">
            <tr>
                <th class="px-6 py-4 font-bold">Property</th>
                <th class="px-6 py-4 font-bold">Property Type</th>
                <th class="px-6 py-4 font-bold">Project Name</th>
                <th class="px-6 py-4 font-bold">Location</th>
                <th class="px-6 py-4 font-bold text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-teal-50">
            @forelse($propertyDetails as $detail)
            <tr class="hover:bg-teal-50/30 transition-colors">
                <td class="px-6 py-4 font-bold text-primary">{{ $detail->property->name ?? 'N/A' }}</td>
                <td class="px-6 py-4 text-sm text-teal-800/70">{{ $detail->propertyType->name ?? 'N/A' }}</td>
                <td class="px-6 py-4 text-sm text-teal-800/70">{{ $detail->project_name }}</td>
                <td class="px-6 py-4 text-sm text-teal-800/70">{{ $detail->city }}, {{ $detail->locality }}</td>
                <td class="px-6 py-4 text-right space-x-2">
                    <a href="{{ route('admin.property-details.edit', $detail->id) }}" class="text-teal-600 hover:text-teal-800 transition-colors inline-block">
                        <i data-lucide="edit" class="w-4 h-4"></i>
                    </a>
                    <form action="{{ route('admin.property-details.destroy', $detail->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 transition-colors">
                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-teal-800/50">No property details found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
