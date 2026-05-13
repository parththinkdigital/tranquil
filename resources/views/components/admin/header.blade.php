<header class="bg-white/80 backdrop-blur-md border-b border-teal-50 px-12 py-6 flex justify-between items-center">
    <h2 class="text-xl font-heading font-bold text-primary">@yield('page-title', 'Dashboard Overview')</h2>
    <div class="flex items-center gap-6">
        <button class="relative text-primary/40 hover:text-primary transition-colors">
            <i data-lucide="bell" class="w-6 h-6"></i>
            <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-[10px] flex items-center justify-center text-white border-2 border-white">3</span>
        </button>
        <a href="/" target="_blank" class="flex items-center gap-2 text-sm font-bold text-secondary hover:text-primary transition-colors">
            <span>View Website</span>
            <i data-lucide="external-link" class="w-4 h-4"></i>
        </a>
    </div>
</header>
