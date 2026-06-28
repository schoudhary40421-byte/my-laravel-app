<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (View::hasSection('title'))
        <title>@yield('title') | {{ siteName() }}</title>
    @else
        <title>{{ siteName() }}</title>
    @endif

    <meta name="author" content="Ravinder Choudhary">
    <meta name="developer" content="Ravinder Choudhary, +91-8287110840, +91-8287161281">
    <meta name="description" content="@yield('description')">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v7.1.0/css/pro.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/frontend/all.css') }}" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
</head>

<body class="">
    @include('frontend.partials.header')

    <main>
        @yield('content')
        
        {{-- Floating icon --}}
        <aside aria-label="Contact options" class="font-sans">

            <div class="fixed right-4 sm:right-6 bottom-0 -translate-y-1/2 z-50 flex flex-col items-center">
                <a href="https://wa.me/91{{ setting('whatsapp') }}?text=Hi"
                    target="_blank" rel="noopener noreferrer" aria-label="Chat with our Expert on WhatsApp"
                    class="group relative flex items-center justify-center w-12 h-12 bg-[#25D366] text-white rounded-full shadow-lg hover:shadow-[0_10px_25px_rgba(37,211,102,0.4)] hover:scale-110 hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-[#25D366]/50">
                    <span
                        class="absolute right-full mr-4 px-3 py-1.5 bg-slate-900 text-white text-sm font-semibold rounded-lg opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-300 whitespace-nowrap shadow-md sm:block">
                        Chat with an Expert
                        <span
                            class="absolute top-1/2 -translate-y-1/2 left-full border-4 border-transparent border-l-slate-900"></span>
                    </span>

                    <i class="text-3xl fa-brands fa-whatsapp"></i>
                </a>
            </div>

        </aside>
    </main>

    @include('frontend.partials.footer')

    <!-- jQuery CDN (if not already added) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            closeButton: true,
            progressBar: true,
            preventDuplicates: true,
            positionClass: "toast-top-right",
            timeOut: "3000"
        }

        // Header
        function openMobileMenu() {
            document.getElementById('mobile-overlay').classList.add('menu-active');
            document.getElementById('mobile-drawer').classList.add('menu-active');
            // Prevent body scroll when menu is open for native app feel
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            document.getElementById('mobile-overlay').classList.remove('menu-active');
            document.getElementById('mobile-drawer').classList.remove('menu-active');
            // Restore body scroll
            document.body.style.overflow = '';
        }
    </script>
    @yield('scripts')
</body>

</html>
