<footer id="footer" class="relative overflow-hidden text-white min-h-[70vh] flex flex-col">
    {{-- Layer 1: Base gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-[#0a6b63] to-[#08554e]"></div>

    {{-- Layer 2: Grid pattern texture --}}
    <div class="absolute inset-0 opacity-[0.04]" data-footer-grid style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>

    {{-- Layer 3: Radial depth gradient --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-black/10"></div>

    {{-- Layer 4: Decorative blur orbs with breathing animation --}}
    <div class="absolute -top-40 -right-40 w-[700px] h-[700px] bg-secondary/8 rounded-full blur-3xl pointer-events-none mix-blend-overlay footer-orb footer-orb-1"></div>
    <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-secondary/8 rounded-full blur-3xl pointer-events-none mix-blend-overlay footer-orb footer-orb-2"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-secondary/5 to-transparent rounded-full blur-3xl pointer-events-none footer-orb footer-orb-3"></div>

    {{-- Top accent glow --}}
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-secondary/60 via-secondary/20 to-transparent"></div>

    {{-- Content --}}
    <div class="relative z-10 flex-1 flex flex-col">
        <div class="flex-1 flex flex-col justify-between max-w-7xl mx-auto px-6 md:px-12 w-full py-10 md:py-16">

            {{-- Top grid: Links + Services + Connect --}}
            <div class="grid md:grid-cols-3 gap-5 md:gap-8">

                {{-- COL 1: Quick Links (icon-list layout) --}}
                <div class="bg-white/[0.03] backdrop-blur-sm rounded-2xl border border-white/[0.06] hover:border-white/[0.12] hover:bg-white/[0.05] transition-all duration-300" x-data="{ open: false }" data-gsap="footer-col">
                    <div class="p-6 md:p-8">
                        <button @click="open = !open" class="w-full flex justify-between items-center mb-4 md:mb-6 md:cursor-default active:scale-[0.98] transition-transform duration-150">
                            <h4 class="font-bold text-sm uppercase tracking-widest text-secondary flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span> Quick Links
                            </h4>
                            <i data-lucide="chevron-down" class="w-4 h-4 text-secondary/60 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <div class="h-px bg-gradient-to-r from-secondary/30 via-secondary/10 to-transparent mb-5 md:mb-6"></div>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-1 md:!block md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:block': true }" data-gsap-ignore>
                            @php $quickLinks = [
                                ['route' => route('properties.index'), 'label' => 'Listings', 'icon' => 'building-2'],
                                ['route' => route('pages.about'), 'label' => 'About Us', 'icon' => 'info'],
                                ['route' => route('pages.contact'), 'label' => 'Contact', 'icon' => 'mail'],
                                ['route' => route('pages.faq'), 'label' => 'FAQ', 'icon' => 'help-circle'],
                            ]; @endphp
                            @foreach($quickLinks as $link)
                            <li>
                                <a href="{{ $link['route'] }}" class="group/link flex items-center gap-4 rounded-xl px-3 py-2.5 text-teal-100/70 hover:text-white hover:bg-white/[0.04] transition-colors duration-200 cursor-pointer text-sm active:scale-[0.97] transition-transform duration-100 origin-left">
                                    <span class="w-8 h-8 rounded-lg bg-white/[0.04] flex items-center justify-center group-hover/link:bg-secondary/15 group-hover/link:scale-110 transition-all duration-200 flex-shrink-0">
                                        <i data-lucide="{{ $link['icon'] }}" class="w-4 h-4 text-secondary/60 group-hover/link:text-secondary transition-colors duration-200"></i>
                                    </span>
                                    <span class="flex-1">{{ $link['label'] }}</span>
                                    <i data-lucide="arrow-right" class="w-3.5 h-3.5 opacity-0 -translate-x-2 group-hover/link:opacity-100 group-hover/link:translate-x-0 transition-all duration-200 text-secondary/60"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- COL 2: Services (card-pill layout) --}}
                <div class="bg-white/[0.03] backdrop-blur-sm rounded-2xl border border-white/[0.06] hover:border-white/[0.12] hover:bg-white/[0.05] transition-all duration-300" x-data="{ open: false }" data-gsap="footer-col">
                    <div class="p-6 md:p-8">
                        <button @click="open = !open" class="w-full flex justify-between items-center mb-4 md:mb-6 md:cursor-default active:scale-[0.98] transition-transform duration-150">
                            <h4 class="font-bold text-sm uppercase tracking-widest text-secondary flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span> Services
                            </h4>
                            <i data-lucide="chevron-down" class="w-4 h-4 text-secondary/60 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <div class="h-px bg-gradient-to-r from-secondary/30 via-secondary/10 to-transparent mb-5 md:mb-6"></div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-2 gap-3 md:!grid md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:grid': true }" data-gsap-ignore>
                            @php $services = [
                                ['route' => route('properties.index', ['type' => 'buy']), 'label' => 'Buy', 'icon' => 'shopping-cart', 'desc' => 'Find your dream property'],
                                ['route' => route('pages.sell'), 'label' => 'Sell', 'icon' => 'badge-dollar-sign', 'desc' => 'List with confidence'],
                                ['route' => route('pages.contact'), 'label' => 'Consultation', 'icon' => 'headset', 'desc' => 'Expert guidance'],
                            ]; @endphp
                            @foreach($services as $svc)
                            <a href="{{ $svc['route'] }}" class="group/svc rounded-xl border border-white/[0.06] bg-white/[0.02] px-4 py-3.5 hover:border-secondary/25 hover:bg-secondary/[0.04] transition-colors duration-200 cursor-pointer block active:scale-[0.97] transition-transform duration-100">
                                <div class="flex items-center gap-3 mb-1.5">
                                    <span class="w-7 h-7 rounded-lg bg-white/[0.04] flex items-center justify-center group-hover/svc:bg-secondary/15 transition-colors duration-200">
                                        <i data-lucide="{{ $svc['icon'] }}" class="w-3.5 h-3.5 text-secondary/60 group-hover/svc:text-secondary transition-colors duration-200"></i>
                                    </span>
                                    <span class="text-sm font-semibold text-teal-100/80 group-hover/svc:text-white transition-colors duration-200">{{ $svc['label'] }}</span>
                                </div>
                                <p class="text-[10px] text-teal-100/30 pl-10">{{ $svc['desc'] }}</p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- COL 3: Connect (social + contact with decorative bg) --}}
                <div class="bg-white/[0.03] backdrop-blur-sm rounded-2xl border border-white/[0.06] hover:border-white/[0.12] hover:bg-white/[0.05] transition-all duration-300 relative overflow-hidden" data-gsap="footer-col">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-secondary/5 rounded-full blur-2xl pointer-events-none footer-orb footer-orb-small"></div>
                    <div class="p-6 md:p-8 relative z-10">
                        <h4 class="font-bold text-sm uppercase tracking-widest text-secondary flex items-center gap-2.5 mb-4 md:mb-6">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span> Connect
                        </h4>
                        <div class="h-px bg-gradient-to-r from-secondary/30 via-secondary/10 to-transparent mb-5 md:mb-6"></div>

                        <div class="flex gap-2.5 mb-7">
                            <a href="#" class="w-10 h-10 rounded-xl border border-white/15 flex items-center justify-center text-teal-100/60 hover:text-[#E1306C] hover:border-[#E1306C]/40 hover:bg-[#E1306C]/5 hover:scale-110 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer active:scale-95 active:translate-y-0" data-gsap="footer-social" aria-label="Instagram">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px]"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl border border-white/15 flex items-center justify-center text-teal-100/60 hover:text-sky-400 hover:border-sky-400/40 hover:bg-sky-400/5 hover:scale-110 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer active:scale-95 active:translate-y-0" data-gsap="footer-social" aria-label="Twitter">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px]"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl border border-white/15 flex items-center justify-center text-teal-100/60 hover:text-[#1877F2] hover:border-[#1877F2]/40 hover:bg-[#1877F2]/5 hover:scale-110 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer active:scale-95 active:translate-y-0" data-gsap="footer-social" aria-label="Facebook">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px]"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl border border-white/15 flex items-center justify-center text-teal-100/60 hover:text-[#FF0000] hover:border-[#FF0000]/40 hover:bg-[#FF0000]/5 hover:scale-110 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer active:scale-95 active:translate-y-0" data-gsap="footer-social" aria-label="YouTube">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px]"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        </div>

                        <div class="space-y-3">
                            <a href="mailto:hello@tranquil.in" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-teal-100/60 hover:text-white hover:bg-white/[0.04] transition-colors duration-200 text-sm group active:scale-[0.97] transition-transform duration-100 origin-left" data-gsap="footer-contact">
                                <span class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-secondary/15 transition-colors duration-200">
                                    <i data-lucide="mail" class="w-4 h-4 text-secondary/80"></i>
                                </span>
                                <span>hello@tranquil.in</span>
                            </a>
                            <a href="tel:+912212345678" class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-teal-100/60 hover:text-white hover:bg-white/[0.04] transition-colors duration-200 text-sm group active:scale-[0.97] transition-transform duration-100 origin-left" data-gsap="footer-contact">
                                <span class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-secondary/15 transition-colors duration-200">
                                    <i data-lucide="phone" class="w-4 h-4 text-secondary/80"></i>
                                </span>
                                <span>+91 22 1234 5678</span>
                            </a>
                            <div class="flex items-start gap-3 rounded-xl px-3 py-2.5 text-teal-100/60 text-sm group hover:bg-white/[0.04] transition-colors duration-200" data-gsap="footer-contact">
                                <span class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 group-hover:bg-secondary/15 transition-colors duration-200">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-secondary/80"></i>
                                </span>
                                <span class="pt-1">Nashik, Maharashtra</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Divider --}}
            <div class="w-20 h-px bg-gradient-to-r from-secondary/60 to-transparent mx-auto my-8 md:my-10"></div>

            {{-- Bottom brand: TRANQUIL (do not remove) --}}
            <div class="text-center" data-gsap="footer-brand">
                <h2 class="tranquil-brand text-5xl md:text-7xl lg:text-8xl font-heading font-bold tracking-[0.15em] text-white/80 relative inline-block">TRANQUIL</h2>
                <p class="text-teal-100/30 text-sm mt-3 tracking-[0.2em] uppercase">Redefining real estate with architectural integrity.</p>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-white/10" data-gsap="footer-bottom">
            <div class="max-w-7xl mx-auto px-6 md:px-12 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-teal-100/40 text-sm">&copy; {{ date('Y') }} Tranquil Real Estate. All rights reserved.</p>
                <p class="text-teal-100/30 text-xs">Designed &amp; Developed by <a href="https://thinkdigitalindia.in" target="_blank" rel="noopener noreferrer" class="text-secondary/80 hover:text-secondary transition-colors">Think Digital</a></p>
            </div>
        </div>
    </div>
</footer>

{{-- Footer Decorations CSS --}}
<style>
    @media (hover: hover) and (pointer: fine) {
        .newsletter-pill:hover .newsletter-sparkle {
            animation: sparkle-pulse 0.6s ease-in-out infinite;
        }
    }

    .newsletter-sparkle {
        transition: transform 0.2s ease-out;
    }

    @keyframes sparkle-pulse {
        0%, 100% { transform: scale(1) rotate(0deg); opacity: 1; }
        25% { transform: scale(1.15) rotate(-8deg); opacity: 0.8; }
        50% { transform: scale(1.2) rotate(4deg); opacity: 1; }
        75% { transform: scale(1.1) rotate(-4deg); opacity: 0.9; }
    }

    .footer-orb {
        animation: orb-float 12s ease-in-out infinite;
    }
    .footer-orb-1 {
        animation-duration: 14s;
        animation-delay: -2s;
    }
    .footer-orb-2 {
        animation-duration: 18s;
        animation-delay: -5s;
    }
    .footer-orb-3 {
        animation-duration: 16s;
        animation-delay: -8s;
    }
    .footer-orb-small {
        animation-duration: 10s;
        animation-delay: -3s;
    }

    @keyframes orb-float {
        0%, 100% { transform: translate(0, 0) scale(1); }
        25% { transform: translate(10px, -15px) scale(1.05); }
        50% { transform: translate(-5px, -25px) scale(0.95); }
        75% { transform: translate(15px, -10px) scale(1.02); }
    }

    .tranquil-brand {
        background: linear-gradient(
            135deg,
            rgba(255,255,255,0.6) 0%,
            rgba(255,255,255,0.9) 25%,
            rgba(255,255,255,0.6) 50%,
            rgba(255,255,255,0.9) 75%,
            rgba(255,255,255,0.6) 100%
        );
        background-size: 200% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: brand-shimmer 6s ease-in-out infinite;
    }

    @keyframes brand-shimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @media (prefers-reduced-motion: reduce) {
        .footer-orb { animation: none; }
        .tranquil-brand {
            background: rgba(255,255,255,0.8);
            -webkit-background-clip: unset;
            background-clip: unset;
            color: rgba(255,255,255,0.8);
            animation: none;
        }
        .newsletter-sparkle { animation: none !important; }
    }
</style>

{{-- GSAP Footer Animation --}}
<script>
(function() {
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReduced) {
            document.querySelectorAll('#footer [data-gsap]').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
            return;
        }

        gsap.timeline({
            scrollTrigger: {
                trigger: '#footer',
                start: 'top 95%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse',
            },
        })
        .fromTo('[data-gsap="footer-col"]',
            { y: 60, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', stagger: 0.18 },
            0
        )
        .fromTo('[data-gsap="footer-social"]',
            { scale: 0.85, rotate: -15, opacity: 0 },
            { scale: 1, rotate: 0, opacity: 1, duration: 0.5, ease: 'back.out(1.4)', stagger: 0.06 },
            0.5
        )
        .fromTo('[data-gsap="footer-contact"]',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.4, ease: 'power2.out', stagger: 0.08 },
            0.7
        )
        .fromTo('[data-gsap="footer-brand"]',
            { y: 40, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' },
            0.85
        )
        .fromTo('[data-gsap="footer-bottom"]',
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out' },
            1.0
        );

        {{-- Subtle grid parallax --}}
        const grid = document.querySelector('[data-footer-grid]');
        if (grid) {
            gsap.to(grid, {
                y: -20,
                ease: 'none',
                scrollTrigger: {
                    trigger: '#footer',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.5,
                },
            });
        }
    });
})();
</script>
