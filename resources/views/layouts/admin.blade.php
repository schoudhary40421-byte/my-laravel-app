<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel Admin') }} - @yield('page_title', 'Dashboard')</title>
    <meta name="developer" content="Ravinder Choudhary, +91-8287110840">
    
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v7.1.0/css/pro.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden">

        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
            class="fixed inset-0 z-20 bg-gray-900/50 backdrop-blur-sm md:hidden" style="display: none;">
        </div>

        @include('admin.partials.sidebar')

        <div class="flex flex-col flex-1 w-full overflow-hidden">
            @include('admin.partials.navbar')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50">
                <div class="container px-4 py-8 mx-auto sm:px-6 md:px-8">
                    @include('admin.partials.breadcrumb')

                    <div class="mt-4">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
