<footer id="footer" class="relative overflow-hidden text-white">
    {{-- Layer 1: Base gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-[#0a6b63] to-[#08554e]"></div>

    {{-- Layer 2: Grid pattern texture --}}
    <div class="absolute inset-0 opacity-[0.04]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>

    {{-- Layer 3: Radial depth gradient --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-black/10"></div>

    {{-- Layer 4: Decorative blur orbs --}}
    <div class="absolute -top-40 -right-40 w-[700px] h-[700px] bg-secondary/8 rounded-full blur-3xl pointer-events-none mix-blend-overlay"></div>
    <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-secondary/8 rounded-full blur-3xl pointer-events-none mix-blend-overlay"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-secondary/5 to-transparent rounded-full blur-3xl pointer-events-none"></div>

    {{-- Top accent glow --}}
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-secondary/60 via-secondary/20 to-transparent"></div>

    {{-- Content --}}
    <div class="relative z-10">
        {{-- Watermark letters --}}
        <div class="absolute inset-0 flex items-start justify-center pt-20 md:pt-24 overflow-hidden pointer-events-none z-30" aria-hidden="true">
            <div class="flex gap-1 sm:gap-2 md:gap-4 lg:gap-7">
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">T</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">R</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">A</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">N</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">Q</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">U</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">I</span>
                <span class="text-[90px] sm:text-[130px] md:text-[170px] lg:text-[240px] font-heading font-bold text-white/[0.03] transition-all duration-500 ease-out hover:text-white/[0.12] hover:scale-[1.5] cursor-default inline-block pointer-events-auto select-none leading-none">L</span>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">

                {{-- COL 1: Brand (spans 4 cols) --}}
                <div class="lg:col-span-4" data-gsap="footer-col">
                    <div class="rounded-2xl transition-all duration-700 relative group overflow-hidden hover:ring-[1.5px] hover:ring-secondary/40 hover:shadow-[0_0_50px_-12px_rgba(20,184,166,0.3)]">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none rounded-2xl shine-overlay"></div>
                        <div class="relative bg-gradient-to-br from-primary via-[#0a6b63] to-[#08554e] rounded-2xl p-6 lg:p-8 z-10 overflow-hidden">
                            <div class="relative z-10">
                                <h3 class="text-2xl font-heading mb-4 tracking-tight">TRANQUIL</h3>
                                <p class="text-teal-100/60 font-light leading-relaxed max-w-xs mb-6">
                                    Redefining the real estate experience with architectural integrity and digital elegance.
                                </p>
                                <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs text-teal-100/40">
                                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-secondary/60"></span> Trusted</span>
                                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-secondary/60"></span> Verified</span>
                                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-secondary/60"></span> Premium</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- COL 2: Quick Links (spans 2 cols) --}}
                <div class="lg:col-span-2 border-b border-white/10 md:border-b-0 pb-4 md:pb-0" x-data="{ open: false }" data-gsap="footer-col">
                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 md:py-0 md:cursor-default">
                        <h4 class="font-bold text-sm uppercase tracking-widest text-secondary/80">Quick Links</h4>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-secondary/60 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-3 pt-2 md:pt-0 md:!block md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:block': true }" data-gsap-ignore>
                        <li><a href="{{ route('properties.index') }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Listings</a></li>
                        <li><a href="{{ route('pages.about') }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">About Us</a></li>
                        <li><a href="{{ route('pages.contact') }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Contact</a></li>
                        <li><a href="#" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">FAQ</a></li>
                    </ul>
                </div>

                {{-- COL 3: Services (spans 2 cols) --}}
                <div class="lg:col-span-2 border-b border-white/10 md:border-b-0 pb-4 md:pb-0" x-data="{ open: false }" data-gsap="footer-col">
                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 md:py-0 md:cursor-default">
                        <h4 class="font-bold text-sm uppercase tracking-widest text-secondary/80">Services</h4>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-secondary/60 transition-transform duration-300 md:hidden" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-3 pt-2 md:pt-0 md:!block md:!opacity-100 md:!transform-none" :class="{ 'hidden': !open, 'md:block': true }" data-gsap-ignore>
                        <li><a href="{{ route('properties.index', ['type' => 'buy']) }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Buy</a></li>
                        <li><a href="#" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Sell</a></li>
                        <li><a href="{{ route('properties.index', ['type' => 'rent']) }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Rent</a></li>
                        <li><a href="{{ route('pages.contact') }}" class="text-teal-100/70 hover:text-white hover:translate-x-1 transition-all duration-200 inline-block cursor-pointer">Consultation</a></li>
                    </ul>
                </div>

                {{-- COL 4: Connect (spans 4 cols) --}}
                <div class="lg:col-span-4" data-gsap="footer-col">
                    <h4 class="font-bold mb-6 text-sm uppercase tracking-widest text-secondary/80">Connect</h4>

                    <div class="flex gap-3 mb-6">
                        <a href="#" class="w-11 h-11 rounded-full border border-white/20 flex items-center justify-center text-teal-100/70 hover:text-secondary hover:border-secondary hover:bg-white/5 hover:scale-110 transition-all duration-300 cursor-pointer" data-gsap="footer-social" aria-label="Instagram">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-full border border-white/20 flex items-center justify-center text-teal-100/70 hover:text-secondary hover:border-secondary hover:bg-white/5 hover:scale-110 transition-all duration-300 cursor-pointer" data-gsap="footer-social" aria-label="Twitter">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-full border border-white/20 flex items-center justify-center text-teal-100/70 hover:text-secondary hover:border-secondary hover:bg-white/5 hover:scale-110 transition-all duration-300 cursor-pointer" data-gsap="footer-social" aria-label="LinkedIn">
                            <i data-lucide="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-full border border-white/20 flex items-center justify-center text-teal-100/70 hover:text-secondary hover:border-secondary hover:bg-white/5 hover:scale-110 transition-all duration-300 cursor-pointer" data-gsap="footer-social" aria-label="YouTube">
                            <i data-lucide="youtube" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <div class="space-y-3">
                        <a href="mailto:hello@tranquil.in" class="flex items-center gap-3 text-teal-100/60 hover:text-white transition-colors text-sm" data-gsap="footer-contact">
                            <i data-lucide="mail" class="w-4 h-4 text-secondary shrink-0"></i> hello@tranquil.in
                        </a>
                        <a href="tel:+912212345678" class="flex items-center gap-3 text-teal-100/60 hover:text-white transition-colors text-sm" data-gsap="footer-contact">
                            <i data-lucide="phone" class="w-4 h-4 text-secondary shrink-0"></i> +91 22 1234 5678
                        </a>
                        <div class="flex items-start gap-3 text-teal-100/60 text-sm" data-gsap="footer-contact">
                            <i data-lucide="map-pin" class="w-4 h-4 text-secondary shrink-0 mt-0.5"></i>
                            <span>Bandra Kurla Complex, Mumbai — 400051</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10" data-gsap="footer-bottom">
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-teal-100/40 text-sm">&copy; {{ date('Y') }} Tranquil Real Estate. All rights reserved.</p>
            <div class="flex flex-wrap justify-center gap-5 text-teal-100/40 text-xs">
                <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-secondary/60"></span> Verified Listings</span>
            </div>
        </div>
    </div>
</footer>

<style>
@keyframes border-shine {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.shine-overlay {
    background: linear-gradient(105deg,
        transparent 35%,
        rgba(20, 184, 166, 0.1) 45%,
        rgba(20, 184, 166, 0.18) 50%,
        rgba(20, 184, 166, 0.1) 55%,
        transparent 65%
    );
    background-size: 300% 100%;
}
.group:hover .shine-overlay {
    animation: border-shine 2.5s ease-in-out infinite;
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
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', stagger: 0.15 },
            0
        )
        .fromTo('[data-gsap="footer-social"]',
            { scale: 0, rotate: -15, opacity: 0 },
            { scale: 1, rotate: 0, opacity: 1, duration: 0.5, ease: 'back.out(1.7)', stagger: 0.08 },
            0.5
        )
        .fromTo('[data-gsap="footer-contact"]',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out', stagger: 0.1 },
            0.7
        )
        .fromTo('[data-gsap="footer-bottom"]',
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out' },
            0.9
        );
    });
})();
</script>