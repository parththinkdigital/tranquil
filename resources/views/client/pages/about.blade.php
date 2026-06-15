@extends('layouts.client')

@section('meta_title', 'About Us - The Story Behind Tranquilstead | Luxury Real Estate')
@section('meta_description', 'Discover the ethos behind Tranquilstead — a premium platform dedicated to curating the finest luxury real estate, architecture, and design stories.')
@section('canonical_url', route('pages.about'))

{{-- JSON-LD LocalBusiness --}}
@section('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'RealEstateAgent',
    'name' => 'Tranquilstead',
    'description' => 'Premium luxury real estate platform dedicated to curating the finest properties, architecture, and design stories.',
    'url' => url('/'),
    'telephone' => '+91-22-4567-8901',
    'email' => 'concierge@tranquilstead.com',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Nariman Point',
        'addressLocality' => 'Mumbai',
        'addressRegion' => 'Maharashtra',
        'postalCode' => '400021',
        'addressCountry' => 'IN',
    ],
    'openingHours' => 'Mo-Sa 09:00-18:00',
    'areaServed' => 'Mumbai, India',
    'priceRange' => '₹1Cr+',
]) !!}
</script>
@endsection

@section('content')
<section class="pt-40 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-7xl md:text-9xl font-heading font-black tracking-tighter text-primary mb-12 italic uppercase leading-none">THE <br> <span class="text-secondary italic">ETHOS.</span></h1>
        
        <div class="grid md:grid-cols-2 gap-20 items-center mb-32">
            <div>
                <p class="text-2xl font-light text-primary mb-8 leading-relaxed">
                    Tranquilstead was born from a simple observation: the process of finding a sanctuary should be as peaceful as the sanctuary itself.
                </p>
                <div class="h-1 w-20 bg-secondary mb-8"></div>
                <p class="text-lg text-text-main/70 leading-relaxed font-light">
                    We don't just list properties; we curate architectural experiences. Every villa, apartment, and penthouse in our collection undergoes a rigorous vetting process to ensure it matches our standards of tranquility, integrity, and design excellence.
                </p>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1600585154340-be6199f7a099?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                     class="w-full h-[500px] object-cover rounded-[64px] shadow-2xl skew-x-1" alt="Ethos">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 py-20 border-t border-teal-100">
            <div>
                <h4 class="text-2xl font-heading font-bold text-primary mb-4">ARCHITECTURAL INTEGRITY</h4>
                <p class="text-sm text-text-main/60 font-light leading-relaxed">
                    We prioritize structures that respect the environment and offer timeless design language.
                </p>
            </div>
            <div>
                <h4 class="text-2xl font-heading font-bold text-primary mb-4">DIGITAL ELEGANCE</h4>
                <p class="text-sm text-text-main/60 font-light leading-relaxed">
                    Our platform is designed to be a seamless extension of the premium properties we represent.
                </p>
            </div>
            <div>
                <h4 class="text-2xl font-heading font-bold text-primary mb-4">HUMAN CONNECTION</h4>
                <p class="text-sm text-text-main/60 font-light leading-relaxed">
                    Behind every listing is a dedicated professional committed to your peace of mind.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
