<nav class="fixed top-6 left-6 right-6 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 bg-white/80 backdrop-blur-md rounded-2xl shadow-lg border border-teal-50 flex justify-between items-center">
        <a href="/" class="text-2xl font-heading font-bold text-primary tracking-tighter">TRANQUIL</a>
        
        <div class="hidden md:flex gap-8 items-center font-medium">
            <a href="{{ route('properties.index') }}" class="hover:text-primary transition-colors">Buy</a>
            <a href="{{ route('properties.index', ['type' => 'rent']) }}" class="hover:text-primary transition-colors">Rent</a>
            <a href="#" class="hover:text-primary transition-colors">Agents</a>
            <a href="#" class="hover:text-primary transition-colors">Blog</a>
            <a href="{{ route('pages.about') }}" class="hover:text-primary transition-colors">About</a>
            <a href="{{ route('pages.contact') }}" class="hover:text-primary transition-colors">Contact</a>
        </div>

        <div class="flex items-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}" class="btn-primary py-2 px-4 text-sm">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-medium hover:text-primary">Login</a>
                <a href="{{ route('register') }}" class="btn-primary py-2 px-4 text-sm">Register</a>
            @endauth
        </div>
    </div>
</nav>
