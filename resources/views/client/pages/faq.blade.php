@extends('layouts.client')

@section('meta_title', 'FAQ - Frequently Asked Questions | Tranquil')
@section('meta_description', 'Find answers to common questions about buying, selling, and renting luxury properties with Tranquil.')
@section('canonical_url', route('pages.faq'))

@section('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How do I start the property search?",
            "acceptedAnswer": { "@type": "Answer", "text": "Browse our curated listings, filter by location or type, and connect with our agents for personalized guidance." }
        },
        {
            "@type": "Question",
            "name": "Is there a fee to list my property?",
            "acceptedAnswer": { "@type": "Answer", "text": "We offer flexible listing options. Contact our team for a consultation and detailed pricing." }
        },
        {
            "@type": "Question",
            "name": "Can I schedule a virtual tour?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer both virtual and in-person tours for all listed properties." }
        },
        {
            "@type": "Question",
            "name": "What areas do you serve?",
            "acceptedAnswer": { "@type": "Answer", "text": "We specialize in premium properties across Nashik, Mumbai, and emerging luxury markets in India." }
        }
    ]
}
</script>
@endsection

@section('content')
<section class="py-24 md:py-32 bg-background">
    <div class="max-w-3xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Got Questions?</p>
            <h1 class="font-heading font-light text-primary" style="font-size: clamp(2rem, 4vw, 3.2rem); letter-spacing: -0.03em;">
                Frequently Asked <strong class="font-bold">Questions</strong>
            </h1>
        </div>

        <div class="space-y-4">
            @php $faqs = [
                ['q' => 'How do I start my property search?', 'a' => 'Browse our curated listings, filter by location, type, or budget, and save your favorites. Our agents are available for personalized guidance at every step.'],
                ['q' => 'Is there a fee to list my property?', 'a' => 'We offer flexible listing options tailored to your needs. Contact our team for a free consultation and detailed pricing.'],
                ['q' => 'Can I schedule a virtual tour?', 'a' => 'Absolutely. We offer immersive virtual tours and in-person site visits for all listed properties.'],
                ['q' => 'What areas do you serve?', 'a' => 'We specialize in premium properties across Nashik, Mumbai, and emerging luxury markets throughout India.'],
                ['q' => 'How does the consultation process work?', 'a' => 'Schedule a call with our team. We\'ll understand your requirements, curate a shortlist of properties, and arrange viewings — all at no obligation.'],
                ['q' => 'What makes Tranquil different?', 'a' => 'Every property in our portfolio is hand-selected. We focus on architectural integrity, premium locations, and a seamless client experience from first tour to final closing.'],
            ]; @endphp
            @foreach($faqs as $i => $faq)
            <div x-data="{ open: false }" class="bg-white rounded-2xl border border-primary/5 shadow-sm hover:shadow-md transition-shadow duration-200">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left cursor-pointer">
                    <span class="font-heading font-bold text-primary text-sm pr-4">{{ $faq['q'] }}</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-secondary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" class="px-6 pb-6">
                    <p class="text-sm text-text-main/50 leading-relaxed">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
