<aside class="w-72 bg-primary text-white flex flex-col shadow-2xl relative z-50">
    <div class="p-8">
        <h1 class="text-2xl font-heading font-bold tracking-tighter">TRANQUIL <span class="text-secondary text-sm block tracking-widest uppercase opacity-60">Control</span></h1>
    </div>

    <nav class="flex-1 px-4 space-y-2">
        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.dashboard')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }}  transition-all font-medium">
            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
            <span>Dashboard</span>
        </a>
        {{-- Properties --}}
        <a href="{{ route('admin.property.index') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.property.*')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }} transition-all font-medium">
            <i data-lucide="building-2" class="w-5 h-5"></i>
            <span>Properties</span>
        </a>
        {{-- Property Type --}}
        <a href="{{ route('admin.property-type.index') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.property-type.*')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }}   transition-all font-medium">
            <i data-lucide="home" class="w-5 h-5"></i>
            <span>Property Types</span>
        </a>
        {{-- Property Details --}}
        <a href="{{ route('admin.property-details.index') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.property-details.*')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }}   transition-all font-medium">
            <i data-lucide="info" class="w-5 h-5"></i>
            <span>Property Details</span>
        </a>
        {{-- Inquiries --}}
        <a href="{{ route('admin.contacts.index') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.contacts.*')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }}
        transition-all font-medium">
            <i data-lucide="message-square" class="w-5 h-5"></i>
            <span>Inquiries</span>
        </a>
        {{-- Testimonials --}}
        <a href="{{ route('admin.testimonials.index') }}"
            class="flex items-center gap-4 px-4 py-3 rounded-xl
        {{ request()->routeIs('admin.testimonials.*')
            ? 'bg-white/10 text-white'
            : 'text-teal-100/70 hover:text-white hover:bg-white/10'
        }}   transition-all font-medium">
            <i data-lucide="message-circle" class="w-5 h-5"></i>
            <span>Testimonials</span>
        </a>
        <a href="#" class="flex items-center gap-4 px-4 py-3 rounded-xl text-teal-100/70 hover:text-white hover:bg-white transition-all font-medium">
            <i data-lucide="users" class="w-5 h-5"></i>
            <span>Agents</span>
        </a>

        <a href="#" class="flex items-center gap-4 px-4 py-3 rounded-xl text-teal-100/70 hover:text-white hover:bg-white/10 transition-all font-medium">
            <i data-lucide="target" class="w-5 h-5"></i>
            <span>Leads</span>
        </a>
        <div class="pt-4 border-t border-white/10 mt-4">
            <a href="#" class="flex items-center gap-4 px-4 py-3 rounded-xl text-teal-100/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <i data-lucide="settings" class="w-5 h-5"></i>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <div class="p-4 bg-teal-900/50 m-4 rounded-2xl">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-white font-bold">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div>
                <p class="text-sm font-bold truncate max-w-[120px]">{{ auth()->user()->name ?? 'Admin' }}</p>
                <p class="text-[10px] uppercase tracking-widest text-teal-400">Administrator</p>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="w-full text-left text-xs text-teal-100/40 hover:text-white transition-colors flex items-center gap-2">
                <i data-lucide="log-out" class="w-3 h-3"></i> Log out
            </button>
        </form>
    </div>
</aside>