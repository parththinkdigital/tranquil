<footer id="footer" class="relative overflow-hidden text-white min-h-screen flex flex-col">
    {{-- Layer 1: Deep luxury gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-[#0a6b63] to-[#063a35]"></div>

    {{-- Layer 2: Marble grain texture overlay --}}
    <div class="absolute inset-0 opacity-[0.03]" data-footer-grain style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E&quot;); background-size: 400px 400px;"></div>

    {{-- Layer 3: Grid architecture lines --}}
    <div class="absolute inset-0 opacity-[0.04]" data-footer-grid style="background-image: linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px); background-size: 60px 60px;"></div>

    {{-- Layer 4: Deep radial vignette --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-black/10"></div>

    {{-- Layer 5: Decorative blur orbs --}}
    <div class="absolute -top-48 -right-48 w-[800px] h-[800px] bg-teal-400/5 rounded-full blur-3xl pointer-events-none mix-blend-overlay footer-orb footer-orb-1"></div>
    <div class="absolute -bottom-48 -left-48 w-[700px] h-[700px] bg-secondary/6 rounded-full blur-3xl pointer-events-none mix-blend-overlay footer-orb footer-orb-2"></div>
    <div class="absolute top-1/3 left-1/4 w-[500px] h-[500px] bg-teal-300/4 rounded-full blur-3xl pointer-events-none footer-orb footer-orb-3"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[400px] h-[400px] bg-white/3 rounded-full blur-3xl pointer-events-none footer-orb footer-orb-4"></div>

    {{-- Top architectural accent line --}}
    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-teal-400/30 to-transparent"></div>

    {{-- ============================================================ --}}
    {{-- CONTENT --}}
    {{-- ============================================================ --}}
    <div class="relative z-10 flex-1 flex flex-col">
        <div class="flex-1 flex flex-col justify-between max-w-7xl mx-auto px-6 md:px-12 w-full py-16 md:py-24">

            {{-- ============================================================ --}}
            {{-- TOP GRID: 4 columns on desktop — container-free --}}
            {{-- ============================================================ --}}
            <div class="grid md:grid-cols-4 gap-x-10 gap-y-12 md:gap-y-0" data-gsap="footer-grid">

                {{-- COL 1: Brand --}}
                <div data-gsap="footer-col" data-gsap-col="0">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400/20 to-teal-600/10 border border-teal-400/20 flex items-center justify-center">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5 text-teal-300/80">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading text-lg tracking-[0.15em] text-white/90">TRANQUILSTEAD</h3>
                            <p class="text-[10px] tracking-[0.2em] uppercase text-teal-300/50">Real Estate</p>
                        </div>
                    </div>
                    <p class="text-teal-100/50 text-sm leading-relaxed font-body font-light max-w-xs">
                        Crafting extraordinary living spaces where architectural integrity meets timeless elegance. 
                        Curating India's finest luxury properties with uncompromising dedication.
                    </p>
                </div>

                {{-- COL 2: Quick Links --}}
                <div data-gsap="footer-col" data-gsap-col="1" x-data="{ open: false }">
                    <div class="w-8 h-[2px] bg-teal-400/40 mb-4"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center md:cursor-default active:scale-[0.98] transition-transform duration-150">
                        <h4 class="font-heading text-xs uppercase tracking-[0.25em] text-white/60 font-normal">Navigate</h4>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-white/30 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div class="h-px bg-white/[0.06] mt-3 mb-5"></div>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-0.5 md:!block md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:block': true }">
                        @php $quickLinks = [
                            ['route' => route('properties.index'), 'label' => 'Luxury Listings'],
                            ['route' => route('pages.about'), 'label' => 'Our Legacy'],
                            ['route' => route('pages.contact'), 'label' => 'Concierge'],
                            ['route' => route('pages.faq'), 'label' => 'Guidance'],
                        ]; @endphp
                        @foreach($quickLinks as $i => $link)
                        <li>
                            <a href="{{ $link['route'] }}" class="group/link flex items-center gap-3 py-2 text-teal-100/50 hover:text-white transition-all duration-300 cursor-pointer text-sm active:scale-[0.97] origin-left" data-gsap="footer-link">
                                <span class="w-1 h-1 rounded-full bg-teal-400/40 group-hover/link:bg-teal-300 group-hover/link:w-2 group-hover/link:h-2 transition-all duration-300"></span>
                                <span class="font-body font-light tracking-wide group-hover/link:translate-x-1.5 transition-transform duration-300">{{ $link['label'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- COL 3: Services --}}
                <div data-gsap="footer-col" data-gsap-col="2" x-data="{ open: false }">
                    <div class="w-8 h-[2px] bg-teal-400/40 mb-4"></div>
                    <button @click="open = !open" class="w-full flex justify-between items-center md:cursor-default active:scale-[0.98] transition-transform duration-150">
                        <h4 class="font-heading text-xs uppercase tracking-[0.25em] text-white/60 font-normal">Services</h4>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-white/30 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div class="h-px bg-white/[0.06] mt-3 mb-5"></div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-2.5 md:!block md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:block': true }">
                        @php $services = [
                            ['route' => route('properties.index', ['type' => 'buy']), 'label' => 'Acquire', 'icon' => 'gem', 'desc' => 'Curated luxury estates'],
                            ['route' => route('pages.sell'), 'label' => 'Entrust', 'icon' => 'crown', 'desc' => 'Concierge valuation'],
                            ['route' => route('properties.index', ['type' => 'rent']), 'label' => 'Lease', 'icon' => 'key', 'desc' => 'Premium rentals'],
                            ['route' => route('pages.contact'), 'label' => 'Consult', 'icon' => 'handshake', 'desc' => 'Bespoke advisory'],
                        ]; @endphp
                        @foreach($services as $svc)
                        <a href="{{ $svc['route'] }}" class="group/svc flex items-center gap-3 py-1.5 text-teal-100/50 hover:text-white transition-all duration-300 cursor-pointer active:scale-[0.97] origin-left" data-gsap="footer-service">
                            <i data-lucide="{{ $svc['icon'] }}" class="w-4 h-4 text-teal-400/30 group-hover/svc:text-teal-300 transition-colors duration-300"></i>
                            <div>
                                <span class="text-sm font-body tracking-wide">{{ $svc['label'] }}</span>
                                <p class="text-[11px] text-teal-100/25 group-hover/svc:text-teal-100/45 transition-colors duration-300 font-light">{{ $svc['desc'] }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- COL 4: Connect --}}
                <div data-gsap="footer-col" data-gsap-col="3">
                    <div class="w-8 h-[2px] bg-teal-400/40 mb-4"></div>
                    <h4 class="font-heading text-xs uppercase tracking-[0.25em] text-white/60 mb-3 font-normal">Connect</h4>
                    <div class="h-px bg-white/[0.06] mb-6"></div>

                    <div class="flex flex-wrap gap-2.5 mb-8" data-gsap="footer-social-wrap">
                        <a href="#" class="w-11 h-11 rounded-2xl border border-white/15 flex items-center justify-center text-teal-100/50 hover:text-teal-300 hover:border-teal-400/30 hover:bg-teal-400/5 hover:scale-110 hover:-translate-y-1 transition-all duration-400 cursor-pointer active:scale-95" data-gsap="footer-social" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[17px] h-[17px]"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-2xl border border-white/15 flex items-center justify-center text-teal-100/50 hover:text-teal-300 hover:border-teal-400/30 hover:bg-teal-400/5 hover:scale-110 hover:-translate-y-1 transition-all duration-400 cursor-pointer active:scale-95" data-gsap="footer-social" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[17px] h-[17px]"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-2xl border border-white/15 flex items-center justify-center text-teal-100/50 hover:text-teal-300 hover:border-teal-400/30 hover:bg-teal-400/5 hover:scale-110 hover:-translate-y-1 transition-all duration-400 cursor-pointer active:scale-95" data-gsap="footer-social" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[17px] h-[17px]"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-2xl border border-white/15 flex items-center justify-center text-teal-100/50 hover:text-teal-300 hover:border-teal-400/30 hover:bg-teal-400/5 hover:scale-110 hover:-translate-y-1 transition-all duration-400 cursor-pointer active:scale-95" data-gsap="footer-social" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[17px] h-[17px]"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-2xl border border-white/15 flex items-center justify-center text-teal-100/50 hover:text-teal-300 hover:border-teal-400/30 hover:bg-teal-400/5 hover:scale-110 hover:-translate-y-1 transition-all duration-400 cursor-pointer active:scale-95" data-gsap="footer-social" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[17px] h-[17px]"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>

                    <div class="space-y-3">
                        <a href="mailto:hello@tranquilstead.in" class="flex items-center gap-3 text-teal-100/50 hover:text-white transition-all duration-300 text-sm group active:scale-[0.97] origin-left" data-gsap="footer-contact">
                            <i data-lucide="mail" class="w-4 h-4 text-teal-400/40 group-hover:text-teal-300 transition-colors duration-300"></i>
                            <span class="font-body font-light tracking-wide">hello@tranquilstead.in</span>
                        </a>
                        <a href="tel:+912212345678" class="flex items-center gap-3 text-teal-100/50 hover:text-white transition-all duration-300 text-sm group active:scale-[0.97] origin-left" data-gsap="footer-contact">
                            <i data-lucide="phone" class="w-4 h-4 text-teal-400/40 group-hover:text-teal-300 transition-colors duration-300"></i>
                            <span class="font-body font-light tracking-wide">+91 22 1234 5678</span>
                        </a>
                        <div class="flex items-start gap-3 text-teal-100/50 text-sm" data-gsap="footer-contact">
                            <i data-lucide="map-pin" class="w-4 h-4 text-teal-400/40 mt-0.5"></i>
                            <span class="font-body font-light tracking-wide">Nashik, Maharashtra</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ============================================================ --}}
            {{-- NEWSLETTER / CTA SECTION --}}
            {{-- ============================================================ --}}
            <div class="relative mt-12 md:mt-16 overflow-hidden" data-gsap="footer-newsletter">
                <div class="w-12 h-[2px] bg-teal-400/50 mb-4"></div>
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="font-heading text-xl md:text-2xl tracking-wide text-white/90 mb-2">The TranquilStead Chronicle</h3>
                        <p class="text-teal-100/45 text-sm font-body font-light max-w-lg">Exclusive market insights, architectural narratives, and off-market previews — curated for the discerning.</p>
                    </div>
                    <div class="flex-shrink-0 w-full md:w-auto">
                        <form class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Your email address" class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 text-white placeholder-teal-100/30 text-sm font-body focus:outline-none focus:border-teal-400/30 focus:bg-white/[0.06] transition-all duration-300 w-full sm:w-64 backdrop-blur-sm">
                            <button type="submit" class="group/btn px-6 py-3 rounded-2xl bg-white/5 border border-white/10 text-teal-300/70 text-sm font-body tracking-wide hover:bg-teal-400/10 hover:border-teal-400/30 hover:text-teal-200 transition-all duration-300 cursor-pointer active:scale-[0.97] whitespace-nowrap flex items-center gap-2 justify-center">
                                <span>Subscribe</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- ============================================================ --}}
            {{-- DIVIDER --}}
            {{-- ============================================================ --}}
            <div class="my-12 md:my-16 relative" data-gsap="footer-divider">
                <div class="h-px bg-gradient-to-r from-transparent via-teal-400/20 to-transparent"></div>
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 rotate-45 border border-teal-400/20 bg-primary"></div>
            </div>

            {{-- ============================================================ --}}
            {{-- BRAND DISPLAY --}}
            {{-- ============================================================ --}}
            <div class="text-center" data-gsap="footer-brand">
                <h2 class="tranquilstead-brand font-heading text-5xl md:text-7xl lg:text-8xl font-bold tracking-[0.18em] text-white/80 relative inline-block">TRANQUILSTEAD</h2>
                <p class="text-teal-100/30 text-xs md:text-sm mt-4 tracking-[0.25em] uppercase font-body font-light">Redefining real estate with architectural integrity.</p>
            </div>
        </div>

        {{-- ============================================================ --}}
        {{-- BOTTOM BAR --}}
        {{-- ============================================================ --}}
        <div class="border-t border-white/[0.06]" data-gsap="footer-bottom">
            <div class="max-w-7xl mx-auto px-6 md:px-12 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4 text-teal-100/30 text-xs font-body font-light">
                    <span>&copy; {{ date('Y') }} TranquilStead Real Estate. All rights reserved.</span>
                    <span class="hidden md:inline w-1 h-1 rounded-full bg-teal-400/30"></span>
                    <a href="#" class="hover:text-teal-300/60 transition-colors duration-300">Privacy</a>
                    <span class="w-1 h-1 rounded-full bg-teal-400/30"></span>
                    <a href="#" class="hover:text-teal-300/60 transition-colors duration-300">Terms</a>
                    <span class="w-1 h-1 rounded-full bg-teal-400/30"></span>
                    <a href="#" class="hover:text-teal-300/60 transition-colors duration-300">Sitemap</a>
                </div>
                <div class="flex items-center gap-4">
                    <p class="text-teal-100/20 text-[10px] font-body font-light tracking-wider">Crafted by <a href="https://thinkdigitalindia.in" target="_blank" rel="noopener noreferrer" class="text-teal-300/40 hover:text-teal-300/70 transition-colors duration-300">Think Digital</a></p>
                    <button data-gsap="footer-top" aria-label="Back to top" class="w-9 h-9 rounded-2xl border border-white/10 flex items-center justify-center text-teal-100/30 hover:text-teal-300/70 hover:border-teal-400/30 hover:bg-teal-400/5 hover:-translate-y-1 transition-all duration-300 cursor-pointer active:scale-95">
                        <i data-lucide="arrow-up" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- ============================================================ --}}
{{-- FOOTER CSS --}}
{{-- ============================================================ --}}
<style>
    .footer-orb {
        animation: orb-float 14s ease-in-out infinite;
        will-change: transform;
    }
    .footer-orb-1 { animation-duration: 16s; animation-delay: -2s; }
    .footer-orb-2 { animation-duration: 20s; animation-delay: -5s; }
    .footer-orb-3 { animation-duration: 18s; animation-delay: -8s; }
    .footer-orb-4 { animation-duration: 12s; animation-delay: -3s; }

    @keyframes orb-float {
        0%, 100% { transform: translate(0, 0) scale(1); }
        25% { transform: translate(12px, -18px) scale(1.04); }
        50% { transform: translate(-8px, -28px) scale(0.96); }
        75% { transform: translate(18px, -12px) scale(1.02); }
    }

    .tranquilstead-brand {
        background: linear-gradient(
            135deg,
            rgba(255,255,255,0.5) 0%,
            rgba(15,118,110,0.4) 20%,
            rgba(255,255,255,0.8) 40%,
            rgba(15,118,110,0.3) 60%,
            rgba(255,255,255,0.6) 80%,
            rgba(255,255,255,0.5) 100%
        );
        background-size: 250% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: brand-shimmer 8s ease-in-out infinite;
    }

    @keyframes brand-shimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @media (prefers-reduced-motion: reduce) {
        .footer-orb { animation: none; }
        .tranquilstead-brand {
            background: rgba(255,255,255,0.85);
            -webkit-background-clip: unset;
            background-clip: unset;
            color: rgba(255,255,255,0.85);
            animation: none;
        }
    }
</style>

{{-- ============================================================ --}}
{{-- GSAP ANIMATION ENGINE --}}
{{-- ============================================================ --}}
<script>
(function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    var _ = gsap.utils;

    gsap.registerPlugin(ScrollTrigger);

    gsap.defaults({ duration: 0.65, ease: 'power2.out' });

    var cdnBase = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/';

    function loadPlugin(name, fn) {
        if (typeof window[name] !== 'undefined') { fn(); return; }
        var s = document.createElement('script');
        s.src = cdnBase + name + '.min.js';
        s.onload = fn;
        document.head.appendChild(s);
    }

    loadPlugin('ScrollToPlugin', function() {
        var btn = document.querySelector('[data-gsap="footer-top"]');
        if (btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                gsap.to(window, { duration: 1.2, scrollTo: { y: 0 }, ease: 'power3.inOut' });
            });
        }
    });

    var mm = gsap.matchMedia();

    mm.add('(prefers-reduced-motion: reduce)', function() {
        gsap.set('#footer [data-gsap]', { opacity: 1, clearProps: 'transform' });
    });

    mm.add({
        isDesktop: '(min-width: 768px)',
        isMobile: '(max-width: 767px)',
        reduceMotion: '(prefers-reduced-motion: reduce)'
    }, function(ctx) {
        var d = ctx.conditions, isDesktop = d.isDesktop, reduceMotion = d.reduceMotion;
        if (reduceMotion) return;

        var q = _.selector('#footer');
        var footer = document.querySelector('#footer');

        function scrollID(id) { return { id: id }; }

        var brands = q('[data-gsap="footer-brand"] h2');

        loadPlugin('CustomEase', function() {
            if (!CustomEase._created) {
                CustomEase.create('luxury-ease', 'M0,0 C0.2,0 0.35,1.1 1,1');
                CustomEase._created = true;
            }
        });

        loadPlugin('SplitText', function() {
            if (brands.length && isDesktop) {
                var split = SplitText.create(brands[0], { type: 'chars', aria: 'hidden' });
                gsap.from(split.chars, {
                    y: function(i) { return _.random(40, 80); },
                    rotation: function() { return _.random(-20, 20); },
                    autoAlpha: 0,
                    duration: 0.9,
                    ease: 'back.out(1.2)',
                    stagger: { amount: 0.7, from: 'random' },
                    scrollTrigger: {
                        trigger: brands[0],
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                });
            }
        });

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#footer',
                start: isDesktop ? 'top 90%' : 'top 96%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse',
                id: 'footer-entrance'
            },
            defaults: { ease: 'power3.out' }
        });

        tl.addLabel('cols', 0)
            .fromTo(q('[data-gsap="footer-col"]'),
                { y: 70, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 0.9,
                  stagger: { amount: 0.6, from: 'start' } },
                'cols'
            )
            .addLabel('socials', '+=0.3')
            .fromTo(q('[data-gsap="footer-social"]'),
                { scale: 0.7, rotation: function() { return _.random(-25, -8); }, autoAlpha: 0 },
                { scale: 1, rotation: 0, autoAlpha: 1, duration: 0.55,
                  ease: 'back.out(1.5)',
                  stagger: { amount: 0.35, from: 'edges' } },
                'socials'
            )
            .addLabel('contacts', '+=0.15')
            .fromTo(q('[data-gsap="footer-contact"]'),
                { x: -15, autoAlpha: 0 },
                { x: 0, autoAlpha: 1, duration: 0.45,
                  stagger: { each: 0.08, from: 'start' } },
                'contacts'
            )
            .addLabel('links', '+=0.1')
            .fromTo(q('[data-gsap="footer-link"], [data-gsap="footer-service"]'),
                { y: 15, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 0.5,
                  stagger: { amount: 0.4, from: 'start' } },
                'links'
            )
            .addLabel('newsletter', '+=0.1')
            .fromTo(q('[data-gsap="footer-newsletter"]'),
                { y: 30, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 0.7 },
                'newsletter'
            )
            .addLabel('divider', '+=0.1')
            .fromTo(q('[data-gsap="footer-divider"]'),
                { scaleX: 0, autoAlpha: 0 },
                { scaleX: 1, autoAlpha: 1, duration: 0.6, transformOrigin: 'left center' },
                'divider'
            )
            .addLabel('brand', '+=0.05')
            .fromTo(q('[data-gsap="footer-brand"]'),
                { y: 50, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 1 },
                'brand'
            )
            .addLabel('bottom', '+=0.1')
            .fromTo(q('[data-gsap="footer-bottom"]'),
                { y: 25, autoAlpha: 0 },
                { y: 0, autoAlpha: 1, duration: 0.6 },
                'bottom'
            );

        var grid = q('[data-footer-grid]')[0];
        if (grid) {
            gsap.to(grid, {
                y: isDesktop ? -40 : -15,
                ease: 'none',
                scrollTrigger: Object.assign(scrollID('footer-grid-parallax'), {
                    trigger: footer, start: 'top bottom', end: 'bottom top', scrub: 2.5
                })
            });
        }

        var grain = q('[data-footer-grain]')[0];
        if (grain) {
            gsap.to(grain, {
                backgroundPosition: function() { return '0px ' + _.random(-200, -50) + 'px'; },
                ease: 'none',
                scrollTrigger: Object.assign(scrollID('footer-grain'), {
                    trigger: footer, start: 'top bottom', end: 'bottom top', scrub: 4
                })
            });
        }

        var orbs = _.toArray(document.querySelectorAll('.footer-orb'));
        orbs.forEach(function(orb, i) {
            var yAmt = _.random(25, 60), xAmt = _.random(-20, 20);
            gsap.to(orb, {
                y: i % 2 === 0 ? yAmt : -yAmt,
                x: xAmt,
                ease: 'none',
                scrollTrigger: Object.assign(scrollID('footer-orb-' + i), {
                    trigger: footer, start: 'top bottom', end: 'bottom top',
                    scrub: _.random(1, 3)
                })
            });
        });

        if (isDesktop) {
            var orb1 = footer.querySelector('.footer-orb-1');
            var orb2 = footer.querySelector('.footer-orb-2');
            if (orb1) {
                var xTo1 = gsap.quickTo(orb1, 'x', { duration: 0.8, ease: 'power2.out' });
                var yTo1 = gsap.quickTo(orb1, 'y', { duration: 1.2, ease: 'power2.out' });
                footer.addEventListener('mousemove', function(e) {
                    var r = footer.getBoundingClientRect();
                    xTo1(_.mapRange(0, r.width, -30, 30, e.clientX - r.left));
                    yTo1(_.mapRange(0, r.height, -30, 30, e.clientY - r.top));
                });
            }
            if (orb2) {
                var xTo2 = gsap.quickTo(orb2, 'x', { duration: 1, ease: 'power2.out' });
                var yTo2 = gsap.quickTo(orb2, 'y', { duration: 1.5, ease: 'power2.out' });
                footer.addEventListener('mousemove', function(e) {
                    var r = footer.getBoundingClientRect();
                    xTo2(_.mapRange(0, r.width, 20, -35, e.clientX - r.left));
                    yTo2(_.mapRange(0, r.height, 20, -35, e.clientY - r.top));
                });
            }
        }

        var socials = q('[data-gsap="footer-social"]');
        if (socials.length) {
            socials.forEach(function(el) {
                el.addEventListener('mouseenter', function() {
                    var siblings = _.toArray(el.parentElement.children).filter(function(s) { return s !== el; });
                    gsap.to(siblings, {
                        scale: 0.85, autoAlpha: 0.4, duration: 0.3, ease: 'power2.out',
                        stagger: { amount: 0.15, from: 'center' }
                    });
                });
                el.addEventListener('mouseleave', function() {
                    var siblings = _.toArray(el.parentElement.children);
                    gsap.to(siblings, {
                        scale: 1, autoAlpha: 1, duration: 0.3, ease: 'power2.out',
                        stagger: { amount: 0.12, from: 'edges' }
                    });
                });
            });
        }

        ScrollTrigger.batch(q('[data-gsap="footer-link"], [data-gsap="footer-service"]'), {
            onEnter: function(batch) {
                gsap.to(batch, { color: 'rgba(255,255,255,0.9)', duration: 0.3, stagger: 0.03, overwrite: true });
            },
            onLeaveBack: function(batch) {
                gsap.set(batch, { clearProps: 'color' });
            },
            start: 'top 85%',
            once: true
        });

        return function() {
            var ids = ['footer-entrance', 'footer-grid-parallax', 'footer-grain'];
            ids.forEach(function(id) { ScrollTrigger.getById(id) && ScrollTrigger.getById(id).kill(); });
            orbs.forEach(function(_, i) {
                ScrollTrigger.getById('footer-orb-' + i) && ScrollTrigger.getById('footer-orb-' + i).kill();
            });
        };
    });
})();
</script>