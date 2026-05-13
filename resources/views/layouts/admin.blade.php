<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Dashboard - Tranquil</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/lucide@latest"></script>
    </head>
    <body class="bg-teal-50/30 flex h-screen overflow-hidden font-body">
        @include('components.admin.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('components.admin.header')

            <main class="flex-1 overflow-y-auto p-12 bg-teal-50/20">
                @yield('content')
            </main>
        </div>

        <script>
            lucide.createIcons();
        </script>
    </body>
</html>
