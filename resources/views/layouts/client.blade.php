<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">

    <title>@yield('meta_title', config('app.name', 'Tranquil') . ' - Premium Real Estate')</title>
    <meta name="description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquil. Explore exclusive properties, market insights, and architecture stories.')">
    <meta name="keywords" content="@yield('meta_keywords', 'luxury real estate, premium properties, Mumbai real estate, architecture, interior design, property investment')">

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical_url', url()->current())" />

    {{-- Open Graph --}}
    <meta property="og:site_name" content="Tranquil" />
    <meta property="og:title" content="@yield('meta_title', config('app.name', 'Tranquil') . ' - Premium Real Estate')" />
    <meta property="og:description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquil.')" />
    <meta property="og:url" content="@yield('canonical_url', url()->current())" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('meta_title', config('app.name', 'Tranquil') . ' - Premium Real Estate')" />
    <meta name="twitter:description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquil.')" />
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))" />

    {{-- JSON-LD Organization --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Tranquil',
        'url' => url('/'),
        'description' => 'Premium luxury real estate platform.',
        'foundingDate' => '2026',
    ]) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body class="antialiased">
    @include('components.client.header')
    <main>
        @yield('content')
    </main>
    @include('components.client.footer')
    @yield('script')
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script>
        lucide.createIcons();

        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)

        if (typeof ScrollTrigger !== 'undefined') {
            lenis.on('scroll', ScrollTrigger.update);
        }
    </script>
</body>

</html>
