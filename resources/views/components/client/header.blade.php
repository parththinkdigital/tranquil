<nav id="navbar" class="fixed top-6 left-6 right-6 z-50 transition-transform duration-500 ease-out">
    <div class="max-w-7xl mx-auto px-6 py-4 bg-white/80 backdrop-blur-md rounded-2xl shadow-lg border border-teal-50 flex justify-between items-center">
        <a href="/" class="text-2xl font-heading font-bold text-primary tracking-tighter">TRANQUILSTEAD</a>
        
        <div class="hidden md:flex gap-8 items-center font-medium">
            <a href="{{ route('properties.index') }}" class="hover:text-primary transition-colors">Listings</a>
            <a href="{{ route('blogs.index') }}" class="hover:text-primary transition-colors">Blog</a>
            <a href="{{ route('pages.about') }}" class="hover:text-primary transition-colors">About</a>
            <a href="{{ route('pages.contact') }}" class="hover:text-primary transition-colors">Contact</a>
        </div>

    </div>
</nav>

<script>
(function() {
    const nav = document.getElementById('navbar');
    let lastScroll = 0;
    let ticking = false;

    const handleScroll = () => {
        const currentScroll = window.scrollY;

        if (currentScroll <= 0) {
            nav.classList.remove('-translate-y-[150%]');
            ticking = false;
            return;
        }

        if (currentScroll > lastScroll && currentScroll > 50) {
            nav.classList.add('-translate-y-[150%]');
        } else {
            nav.classList.remove('-translate-y-[150%]');
        }

        lastScroll = currentScroll;
        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(handleScroll);
            ticking = true;
        }
    }, { passive: true });
})();
</script>