<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Tranquilstead</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-teal-50/30 flex h-screen overflow-hidden font-body items-center justify-center">

    <div class="bg-white p-12 rounded-[40px] shadow-2xl shadow-teal-900/10 border border-teal-50 w-full max-w-md relative overflow-hidden">
        <!-- Decorative element -->
        <div class="absolute -right-8 -top-8 w-32 h-32 bg-teal-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
        <div class="absolute -left-8 -bottom-8 w-32 h-32 bg-secondary/10 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

        <div class="relative z-10 text-center mb-10">
            <h1 class="text-3xl font-heading font-bold text-primary tracking-tighter">TRANQUILSTEAD</h1>
            <span class="text-secondary text-xs block tracking-widest uppercase mt-1">Admin Control</span>
        </div>

        @if (session('error'))
            <div class="bg-red-50 text-red-500 border border-red-100 px-4 py-3 rounded-2xl mb-6 text-sm flex items-center gap-3">
                <i data-lucide="alert-circle" class="w-4 h-4"></i>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="relative z-10">
            @csrf

            <div class="mb-6">
                <label for="email" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Email Address</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-lucide="mail" class="w-4 h-4 text-primary/40"></i>
                    </div>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="w-full pl-12 pr-4 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm @error('email') border-red-300 ring-red-100 @enderror"
                        required autofocus placeholder="admin@tranquilstead.com">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-2 italic flex items-center gap-1">
                        <i data-lucide="info" class="w-3 h-3"></i> {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-8">
                <label for="password" class="block text-xs uppercase tracking-widest font-bold text-primary/60 mb-2">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-lucide="lock" class="w-4 h-4 text-primary/40"></i>
                    </div>
                    <input type="password" name="password" id="password"
                        class="w-full pl-12 pr-12 py-3 bg-teal-50/30 border border-teal-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary/50 focus:border-secondary transition-all text-sm @error('password') border-red-300 ring-red-100 @enderror"
                        required placeholder="••••••••">
                    
                    <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-primary/40 hover:text-primary transition-colors focus:outline-none">
                        <i data-lucide="eye" id="eyeOpen" class="w-4 h-4"></i>
                        <i data-lucide="eye-off" id="eyeClose" class="w-4 h-4 hidden"></i>
                    </button>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-2 italic flex items-center gap-1">
                        <i data-lucide="info" class="w-3 h-3"></i> {{ $message }}
                    </p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-primary hover:bg-secondary text-white font-bold py-4 px-4 rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all flex items-center justify-center gap-2 group">
                <span>Sign In Securely</span>
                <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
            </button>
        </form>
    </div>

    <script>
        lucide.createIcons();

        function togglePassword() {
            const password = document.getElementById('password');
            const eyeOpen = document.getElementById('eyeOpen');
            const eyeClose = document.getElementById('eyeClose');

            if (password.type === 'password') {
                password.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClose.classList.remove('hidden');
            } else {
                password.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClose.classList.add('hidden');
            }
        }
    </script>
</body>
</html>
