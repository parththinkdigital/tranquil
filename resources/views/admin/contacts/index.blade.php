@extends('layouts.admin')

@section('page-title', 'Inquiries')

@section('content')
<div class="bg-white rounded-[40px] p-10 shadow-sm border border-teal-50">
    <div class="flex justify-between items-center mb-10">
        <h3 class="text-2xl font-heading font-bold text-primary italic">Manage <span class="text-secondary">Inquiries</span></h3>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-teal-50">
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40">Name</th>
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40">Contact Info</th>
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40">Message</th>
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40">Date</th>
                    <th class="py-4 px-6 text-xs font-bold uppercase tracking-widest text-primary/40 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-teal-50">
                @forelse($contacts as $contact)
                    <tr class="hover:bg-teal-50/20 transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-bold text-primary">{{ $contact->name }}</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-sm text-primary/60">{{ $contact->email }}</p>
                            @if($contact->phone)
                            <p class="text-sm text-primary/60">{{ $contact->phone }}</p>
                            @endif
                        </td>
                        <td class="py-4 px-6 max-w-md">
                            <p class="text-sm text-primary/80 break-words">{{ $contact->message }}</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-sm text-primary/60">{{ $contact->created_at->format('M d, Y') }}</p>
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline-block" data-confirm="Delete this inquiry?">
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
                        <td colspan="5" class="py-8 text-center text-primary/40 italic text-sm">
                            No inquiries found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        {{ $contacts->links() }}
    </div>
</div>
@endsection
