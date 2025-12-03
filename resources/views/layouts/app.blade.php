<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pedro Schier') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-dark text-slate-50 selection:bg-primary selection:text-white">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="w-full py-6 px-6 md:px-12 flex justify-between items-center max-w-7xl mx-auto">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tighter hover:text-primary transition-colors">
                bruning<span class="text-primary">.dev</span>
            </a>

            <div class="flex items-center gap-6">
                <div class="hidden md:flex gap-6 text-sm font-medium text-slate-400">
                    <a href="{{ route('projects.index') }}" class="hover:text-white transition-colors {{ request()->routeIs('projects.*') ? 'text-white' : '' }}">
                        {{ __('Projects') }}
                    </a>
                    <a href="{{ route('blog.index') }}" class="hover:text-white transition-colors {{ request()->routeIs('blog.*') ? 'text-white' : '' }}">
                        {{ __('Blog') }}
                    </a>
                    <a href="{{ route('about') }}" class="hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-white' : '' }}">
                        {{ __('About') }}
                    </a>
                </div>

                <!-- Language Switcher -->
                <div class="flex items-center gap-2 text-sm font-medium">
                    <a href="{{ route('locale', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'text-white' : 'text-slate-500 hover:text-slate-300' }}">EN</a>
                    <span class="text-slate-700">/</span>
                    <a href="{{ route('locale', 'pt-BR') }}" class="{{ app()->getLocale() === 'pt-BR' ? 'text-white' : 'text-slate-500 hover:text-slate-300' }}">PT</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow w-full max-w-7xl mx-auto px-6 md:px-12 py-12">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="py-12 text-center text-slate-500 text-sm">
            <p>&copy; {{ date('Y') }} Pedro Schier. All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-4">
                <a href="https://github.com/pedrobruning" target="_blank" class="hover:text-white transition-colors">GitHub</a>
                <a href="https://linkedin.com/in/pedro-henrique-bruning" target="_blank" class="hover:text-white transition-colors">LinkedIn</a>
            </div>
        </footer>
    </div>
</body>
</html>
