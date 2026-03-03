<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO Meta (Editable) --}}
    <meta name="description" content="@yield('meta_description', 'Premium tattoo & beauty studio - luxury ink, flawless hygiene, and artist-led transformations.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Fantas Beauty, Tattoo Studio, Nail Extensions, Beauty Services, London')">
    <meta name="author" content="Fantas Beauty">

    {{-- Title --}}
    <title>@yield('title', 'Fantas Beauty')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/fantas-logo.png') }}">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">

    {{-- Extra Page CSS --}}
    @stack('styles')
   
</head>

<body>

    {{-- Preloader Start --}}
    <div class="theme-loader" id="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    {{-- Preloader End --}}

    {{-- Top Bar + Header --}}
    @include('layouts.topbar')
    @include('layouts.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Scroll To Top --}}
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    {{-- JS --}}
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- Extra Page JS --}}
    @stack('scripts')
    <a href="https://wa.me/447514836169?text=Hi%20Fantas%20Beauty,%20I%20would%20like%20to%20book%20an%20appointment!" 
        class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>
</body>
</html>