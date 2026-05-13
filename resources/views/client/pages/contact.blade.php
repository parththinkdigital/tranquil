@extends('layouts.client')

@section('content')
<section class="pt-40 pb-20 bg-background min-h-screen">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
        <div>
            <h1 class="text-7xl font-heading font-black tracking-tighter text-primary mb-12 uppercase leading-none italic">GET IN <br> <span class="text-secondary italic">TOUCH.</span></h1>
            <p class="text-xl font-light text-primary/60 mb-12">
                Whether you're looking for your next sanctuary or seeking to list an architectural masterpiece, our team is here to assist.
            </p>
            
            <div class="space-y-8">
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm border border-teal-50">
                        <i data-lucide="mail" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-widest font-bold text-primary/40">Email Us</p>
                        <p class="text-xl font-heading font-bold text-primary">concierge@tranquil.com</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm border border-teal-50">
                        <i data-lucide="phone" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-widest font-bold text-primary/40">Call Us</p>
                        <p class="text-xl font-heading font-bold text-primary">+91 22 4567 8901</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm border border-teal-50">
                        <i data-lucide="map-pin" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-widest font-bold text-primary/40">Our Office</p>
                        <p class="text-xl font-heading font-bold text-primary">Nariman Point, Mumbai</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[64px] p-12 shadow-2xl border border-teal-50 relative overflow-hidden">
             <div class="absolute -top-20 -right-20 w-80 h-80 bg-secondary/5 rounded-full blur-3xl"></div>
             
             <h3 class="text-3xl font-heading font-bold text-primary mb-10 italic">Your Message</h3>
             
             <form class="space-y-8">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Name</label>
                        <input type="text" class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                    </div>
                     <div>
                        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Phone</label>
                        <input type="tel" class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                    </div>
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Email Address</label>
                    <input type="email" class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Message</label>
                    <textarea rows="5" class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm" placeholder="Tell us about your requirements..."></textarea>
                </div>
                <button class="btn-primary w-full py-5 text-lg shadow-xl">Send Your Vision</button>
             </form>
        </div>
    </div>
</section>
@endsection
