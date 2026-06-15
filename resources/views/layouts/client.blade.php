<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0F766E">
    <meta name="author" content="Tranquilstead Real Estate">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Mumbai">

    <title>@yield('meta_title', config('app.name', 'Tranquilstead') . ' - Premium Real Estate')</title>
    <meta name="description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquilstead. Explore exclusive properties, market insights, and architecture stories.')">
    <meta name="keywords" content="@yield('meta_keywords', 'luxury real estate, premium properties, Mumbai real estate, architecture, interior design, property investment')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=The+Nautigal:wght@400;700&display=swap" rel="stylesheet">

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical_url', url()->current())" />
    @hasSection('prev_url')<link rel="prev" href="@yield('prev_url')" />@endif
    @hasSection('next_url')<link rel="next" href="@yield('next_url')" />@endif

    {{-- hreflang --}}
    <link rel="alternate" href="{{ url('/') }}" hreflang="en" />
    <link rel="alternate" href="{{ url('/') }}" hreflang="x-default" />

    {{-- Open Graph --}}
    <meta property="og:site_name" content="Tranquilstead" />
    <meta property="og:title" content="@yield('meta_title', config('app.name', 'Tranquilstead') . ' - Premium Real Estate')" />
    <meta property="og:description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquilstead.')" />
    <meta property="og:url" content="@yield('canonical_url', url()->current())" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="en_IN" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@tranquilsteadrealty" />
    <meta name="twitter:title" content="@yield('meta_title', config('app.name', 'Tranquilstead') . ' - Premium Real Estate')" />
    <meta name="twitter:description" content="@yield('meta_description', 'Discover premium luxury real estate with Tranquilstead.')" />
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))" />

    {{-- Preconnect for performance --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://images.unsplash.com">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

    {{-- JSON-LD WebSite + Organization --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Tranquilstead',
        'url' => url('/'),
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => url('/listings?keyword={search_term_string}'),
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ]) !!}
    </script>
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Tranquilstead',
        'url' => url('/'),
        'logo' => asset('images/og-default.jpg'),
        'description' => 'Premium luxury real estate platform.',
        'foundingDate' => '2026',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+91-22-1234-5678',
            'contactType' => 'customer service',
            'email' => 'hello@tranquilstead.in',
            'availableLanguage' => ['en'],
        ],
        'sameAs' => [
            'https://instagram.com/tranquilsteadrealty',
            'https://twitter.com/tranquilsteadrealty',
            'https://linkedin.com/company/tranquilsteadrealty',
        ],
    ]) !!}
    </script>

    {{-- Per-page JSON-LD --}}
    @yield('schema')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
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
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

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
        });
    </script>
</body>

</html>
