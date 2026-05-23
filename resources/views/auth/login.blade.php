@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Enter your credentials to access the frontend user area.
                </p>
            </div>

            <div class="bg-white py-8 px-6 shadow rounded-3xl">
                <!-- Session Status -->
                <x-auth-session-status class="mb-6 text-green-600 text-sm font-semibold text-center" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                                   class="block w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                            @endif
                        </div>
                        <div class="mt-1">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="block w-full rounded-2xl border border-gray-300 px-4 py-3 text-sm text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <button type="submit" class="flex w-full justify-center rounded-2xl bg-indigo-600 py-3 px-4 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
