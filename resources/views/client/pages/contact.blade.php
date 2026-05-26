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
            @if (session('success'))
            <div
                id="successAlert"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 transition-all duration-500"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            <form action="{{ route('pages.contact.submit') }}" method="POST" class="space-y-8">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Phone</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" maxlength="10" class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                        @error('phone') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Message</label>
                    <textarea rows="5" name="message" required class="w-full border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm" placeholder="Tell us about your requirements...">{{ old('message') }}</textarea>
                    @error('message') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-[10px] uppercase tracking-widest font-bold text-primary/40 mb-2 block">Security Check</label>
                    <div class="flex items-center gap-4">
                        <div class="bg-gray-100 border border-gray-300 rounded-2xl px-6 py-4 font-mono text-xl font-bold tracking-widest text-primary/80 select-none">
                            {{ $captcha }}
                        </div>
                        <input type="text" name="captcha" required placeholder="Enter the code" class="flex-1 border-teal-100 rounded-2xl focus:ring-secondary py-4 px-6 text-sm">
                    </div>
                    @error('captcha') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn-primary w-full py-5 text-lg shadow-xl">Send Your Vision</button>
            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    // Auto-hide success alert after 3 seconds
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('successAlert');
        if (alert) {
            setTimeout(function() {
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.remove();
                }, 500);
            }, 3000);
        }
    });
</script>
@endsection