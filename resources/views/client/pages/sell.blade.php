@extends('layouts.client')

@section('meta_title', 'Sell Your Property with Tranquil | Premium Real Estate')
@section('meta_description', 'List your premium property with Tranquil. Submit an enquiry and our experts will guide you through the selling process.')
@section('canonical_url', route('pages.sell'))

@section('content')
{{-- Steps Section --}}
<section class="py-24 md:py-32 bg-background">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16">
            <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Sell With Us</p>
            <h1 class="font-heading font-light text-primary" style="font-size: clamp(2rem, 4vw, 3.2rem); letter-spacing: -0.03em;">
                Sell Your <strong class="font-bold">Property</strong>
            </h1>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-16">
            @php $steps = [
                ['step' => '01', 'title' => 'Consultation', 'desc' => 'We meet, assess your property, and create a custom marketing strategy.'],
                ['step' => '02', 'title' => 'Premium Listing', 'desc' => 'Professional photography, cinematic tours, and prime placement on our platform.'],
                ['step' => '03', 'title' => 'Close & Handover', 'desc' => 'We handle negotiations, paperwork, and ensure a seamless closing.'],
            ]; @endphp
            @foreach($steps as $s)
            <div class="relative text-center p-8">
                <span class="text-6xl md:text-7xl font-heading font-bold text-secondary/10 absolute top-0 left-1/2 -translate-x-1/2 leading-none">{{ $s['step'] }}</span>
                <div class="relative pt-8">
                    <h3 class="font-heading font-bold text-primary text-lg mb-3">{{ $s['title'] }}</h3>
                    <p class="text-sm text-text-main/50 leading-relaxed">{{ $s['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Enquiry Form Section --}}
<section class="pb-24 md:pb-32 bg-background">
    <div class="max-w-2xl mx-auto px-6 md:px-12">
        <div class="bg-white rounded-[32px] p-8 md:p-12 shadow-sm border border-primary/5">
            <div class="text-center mb-10">
                <p class="text-[11px] uppercase tracking-[.3em] font-semibold text-secondary mb-3">Get in Touch</p>
                <h2 class="font-heading font-light text-primary" style="font-size: clamp(1.5rem, 3vw, 2rem); letter-spacing: -0.03em;">
                    Tell us about <strong class="font-bold">your property</strong>
                </h2>
            </div>

            <form method="POST" action="{{ route('pages.contact.submit') }}" class="space-y-5">
                @csrf
                <input type="hidden" name="subject" value="Sell Enquiry">

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="text-[11px] uppercase tracking-widest font-semibold text-primary/40 block mb-2">Full Name</label>
                        <input type="text" name="name" id="name" required
                               class="w-full px-4 py-3.5 rounded-xl border border-primary/10 bg-background text-sm text-primary placeholder:text-primary/20 focus:outline-none focus:border-secondary/40 focus:ring-1 focus:ring-secondary/20 transition-all duration-200"
                               placeholder="Your name">
                    </div>
                    <div>
                        <label for="email" class="text-[11px] uppercase tracking-widest font-semibold text-primary/40 block mb-2">Email Address</label>
                        <input type="email" name="email" id="email" required
                               class="w-full px-4 py-3.5 rounded-xl border border-primary/10 bg-background text-sm text-primary placeholder:text-primary/20 focus:outline-none focus:border-secondary/40 focus:ring-1 focus:ring-secondary/20 transition-all duration-200"
                               placeholder="your@email.com">
                    </div>
                </div>

                <div>
                    <label for="phone" class="text-[11px] uppercase tracking-widest font-semibold text-primary/40 block mb-2">Phone Number</label>
                    <input type="tel" name="phone" id="phone"
                           class="w-full px-4 py-3.5 rounded-xl border border-primary/10 bg-background text-sm text-primary placeholder:text-primary/20 focus:outline-none focus:border-secondary/40 focus:ring-1 focus:ring-secondary/20 transition-all duration-200"
                           placeholder="+91 1234567890">
                </div>

                <div>
                    <label for="message" class="text-[11px] uppercase tracking-widest font-semibold text-primary/40 block mb-2">Property Details</label>
                    <textarea name="message" id="message" rows="4" required
                              class="w-full px-4 py-3.5 rounded-xl border border-primary/10 bg-background text-sm text-primary placeholder:text-primary/20 focus:outline-none focus:border-secondary/40 focus:ring-1 focus:ring-secondary/20 transition-all duration-200 resize-none"
                              placeholder="Tell us about your property — location, type, size, and any other details..."></textarea>
                </div>

                <div>
                    <label for="captcha" class="text-[11px] uppercase tracking-widest font-semibold text-primary/40 block mb-2">CAPTCHA</label>
                    <div class="flex items-center gap-4">
                        <span class="font-heading font-bold text-secondary text-xl tracking-widest select-none bg-background px-4 py-2.5 rounded-xl border border-primary/10">{{ $captcha }}</span>
                        <input type="text" name="captcha" id="captcha" required maxlength="6"
                               class="flex-1 px-4 py-3.5 rounded-xl border border-primary/10 bg-background text-sm text-primary placeholder:text-primary/20 focus:outline-none focus:border-secondary/40 focus:ring-1 focus:ring-secondary/20 transition-all duration-200 uppercase tracking-widest"
                               placeholder="Enter code">
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-primary text-white py-4 rounded-full font-bold text-xs tracking-widest uppercase hover:bg-primary/90 active:scale-[0.97] transition-all duration-200 shadow-lg hover:shadow-xl cursor-pointer">
                    Submit Enquiry
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
