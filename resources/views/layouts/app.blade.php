<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#d4a373">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo/fantas-logo-192.png') }}">
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
    <script>
    // 1. Register Service Worker
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register("{{ asset('sw.js') }}")
                .then(reg => console.log('Service Worker Registered!', reg))
                .catch(err => console.error('Service Worker Registration Failed', err));
        });
    }

    // 2. Install Button Logic
    let deferredPrompt;
    const installBtn = document.getElementById('installAppBtn');

    window.addEventListener('beforeinstallprompt', (e) => {
        // Browser ka default install popup rokein
        e.preventDefault();
        // Event ko save karein taaki baad mein trigger kar sakein
        deferredPrompt = e;
        // Apna custom button show karein
        installBtn.style.display = 'inline-block';
    });

    installBtn.addEventListener('click', async () => {
        if (deferredPrompt !== null) {
            // Install popup show karein
            deferredPrompt.prompt();
            // User ka response check karein
            const { outcome } = await deferredPrompt.userChoice;
            if (outcome === 'accepted') {
                console.log('User ne App install kar li');
            } else {
                console.log('User ne App install cancel kar di');
            }
            deferredPrompt = null;
            // Button wapas hide kar dein
            installBtn.style.display = 'none';
        }
    });

    window.addEventListener('appinstalled', () => {
        // Agar pehle se install ho gayi toh button chupa dein
        installBtn.style.display = 'none';
        console.log('PWA is already installed');
    });
</script>
</body>
</html>