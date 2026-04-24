@extends('layouts.app')
@section('content')

<style>
    /* ==========================================
    1. UNIVERSAL SLIDER CSS
    ============================================= */
    .slider-container-wrapper {
        position: relative;
        width: 100%;
    }
    .slider-container-wrapper.has-nav-buttons {
        padding: 0 45px; 
    }
    .slider-wrapper {
        display: flex;
        gap: 2px; 
        overflow-x: auto;
        width: 100%;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 20px; 
        padding-top: 10px;
    }
    .slider-wrapper::-webkit-scrollbar { display: none; }

    .slider-control-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        color: #d4a373; 
        border: none;
        font-size: 38px; 
        z-index: 10;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .slider-control-btn:hover { color: #111; transform: translateY(-50%) scale(1.1); }
    .slider-prev-btn { left: -5px; }
    .slider-next-btn { right: -5px; }

    /* ==========================================
    2. CATEGORY UI (AS PER YOUR RECENT CODE)
    ============================================= */
    .category-card-ui {
        flex: 0 0 calc((100% - 40px) / 3); 
        height: 380px;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        background: #000;
        border: 2px solid transparent; 
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        opacity: 0.55; 
        transform: scale(0.92);
        filter: grayscale(40%);
        scroll-snap-align: center;
    }

    .category-card-ui.active-tab {
        border-color: #d4a373 !important; 
        opacity: 1; 
        transform: scale(1.05);
        z-index: 2;
        filter: grayscale(0%);
        box-shadow: 0 15px 35px rgba(212, 163, 115, 0.3);
    }

    .category-card-ui img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .category-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 40%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 25px 20px;
        pointer-events: none; 
    }

    .explore-link {
        color: #d4a373;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        pointer-events: auto; 
        padding: 10px 0;
        transition: all 0.3s ease;
    }

    .category-card-ui.active-tab .explore-link {
        background: #d4a373;
        color: #111 !important;
        padding: 8px 16px; /* Padding kam kar di */
        border-radius: 30px;
        margin-top: 10px;
        width: max-content;
        font-size: 11px; /* Font size thoda chota kiya */
        box-shadow: 0 4px 10px rgba(212, 163, 115, 0.3);
    }

    .new-btn {
        height: 38px; /* Height thodi kam ki for better look */
        border-radius: 30px !important; /* Perfect roundness */
        border: none; 
        font-size: 12px;
        padding: 0 20px; /* Side padding for better button shape */
        font-weight: 700;
        transition: all 0.3s ease;
    }

    /* Button hover effect (Optional but recommended) */
    .new-btn:hover {
        background-color: #fff !important;
        color: #111 !important;
        transform: translateY(-2px);
    }

    /* ==========================================
    3. SERVICE ITEMS & SECTIONS
    ============================================= */
    .service-slide-item { 
        flex: 0 0 calc((100% - 40px) / 3);
        height: 420px; 
        position: relative; 
        background: #000;
        overflow: hidden;
        scroll-snap-align: start;
    }
    .service-slide-item img { width: 100%; height: 100%; object-fit: cover; }
    .service-card-overlay { position: absolute; inset: auto 0 0 0; padding: 25px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); color: #fff; text-align: center; }

    .marquee-display-section { display: none; animation: fadeSlideUp 0.4s ease forwards; }
    .marquee-display-section.active-section { display: block; }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 991px) { 
        .category-card-ui, .service-slide-item { flex: 0 0 calc((100% - 20px) / 2); } 
    }
    @media (max-width: 768px) { 
        .category-card-ui, .service-slide-item { flex: 0 0 100%; } 
    }
</style>

<div class="home__banner">
    <div class="banner__slide swiper banner-slide">
        <div class="swiper-wrapper">

            <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                style="height: 500px; min-height: 500px; position: relative;">
                <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/Tatto1.png')}}'); 
                        background-size: cover !important; 
                        background-position: center !important; 
                        background-repeat: no-repeat !important; 
                        filter: brightness(0.85) !important; 
                        position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: -1;">
                </div>

                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-last order-lg-first">
                            <div class="banner__slide-content">
                                <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                                    Welcome to Fantas Beauty
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s"
                                    style="color: #fff; margin-bottom: -10px;">
                                    Luxury Tattoo
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s"
                                    style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                                    Clean, precise, and artistic — custom tattoos and safe piercing services with
                                    premium hygiene standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                style="height: 500px; min-height: 500px; position: relative;">
                <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/Tatto4.png')}}'); 
                        background-size: cover !important; 
                        background-position: center !important; 
                        background-repeat: no-repeat !important; 
                        filter: brightness(0.85) !important; 
                        position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: -1;">
                </div>

                <div class="container" style="height: 100%; display: flex; align-items: center;">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="banner__slide-content">
                                <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                                    Welcome to Fantas Beauty
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s"
                                    style="color: #fff; margin-bottom: -10px;">
                                    Luxury Tattoo
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s"
                                    style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                                    Clean, precise, and artistic — custom tattoos and safe piercing services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="home__banner-button">
            <div class="home__banner-button-prev swiper-button-prev">
                <i class="far fa-long-arrow-left"></i>
            </div>
            <div class="home__banner-button-next swiper-button-next">
                <i class="far fa-long-arrow-right"></i>
            </div>
        </div>

    </div>
</div>

<div class="history__area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 lg-mb-30">
                <div class="history__area-left">
                    <div class="history__area-left-image">
                        <img src="{{ asset('assets/img/collins-lesulie-PWK6CeCJtJw-unsplash.jpg') }}"
                            alt="Fantas Tattoo & Piercing Studio" class="img-fluid rounded shadow-lg" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="history__area-right">

                    <div class="history__area-right-title">
                        <span class="subtitle__one">Fantas Ink & Piercing</span>
                        <h2>Crafting Art, Ink & Confidence</h2>

                        <p class="mb-25">
                            Fantas Studio is a premium destination for custom tattoo artistry and professional body
                            piercing services. Our studio blends creativity, strict hygiene, and precision to deliver
                            stunning body art tailored to every client.
                        </p>

                        <p>
                            From custom tattoos to safe and flawless piercings, every service at Fantas is performed by
                            skilled artists and experienced piercers using high-quality inks, premium hypoallergenic
                            jewelry, and modern techniques. We focus on comfort, safety, and perfection.
                        </p>
                    </div>

                    <div class="history__area-right-author mt-4">
                        <div class="d-flex align-items-center">
                            <div class="history__area-right-author-image mr-3">
                                <img src="{{ asset('assets/logo/fantas-logo.png') }}" alt="Fantas Founder"
                                    class="img-fluid" style="max-width: 60px;" loading="lazy" decoding="async">
                            </div>
                            <div class="history__area-right-author-content">
                                <h4 class="mb-0">Fantas Beauty Studio</h4>
                                <span class="text-muted">Premium Tattoo & Piercing Experts</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="services__area section-padding bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <h2>Our Premium Specialties</h2>
                <p class="text-muted">Explore our wide range of professional body art and piercing services, executed
                    with top-tier hygiene and precision.</p>
            </div>
        </div>

        <div class="row">
            {{-- Service Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/tattoo-machine.png') }}" alt="Custom Tattoos" width="50"
                            loading="lazy" decoding="async">
                    </div>
                    <h4>Custom Tattoos</h4>
                    <p class="text-muted mb-0">From hyper-realism to fine-line minimalism, we bring your unique vision
                        to life with skin-safe, premium inks.</p>
                </div>
            </div>

            {{-- Service Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/tattoo.png') }}" alt="Body Piercing" width="50"
                            loading="lazy" decoding="async">
                    </div>
                    <h4>Professional Piercing</h4>
                    <p class="text-muted mb-0">Ear, facial, and body piercings done safely using single-use sterilized
                        needles and hypoallergenic jewelry.</p>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/flower.png') }}" alt="Cover Ups" width="50" loading="lazy"
                            decoding="async">
                    </div>
                    <h4>Tattoo Cover-Ups</h4>
                    <p class="text-muted mb-0">Turn unwanted or faded tattoos into beautiful new masterpieces with our
                        expert cover-up techniques.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    // 🔥 TATTOO CATEGORIES RESTORED 🔥
    $tattooCategories = [
        [
            'id' => 'small-content',
            'tab' => 'Small',
            'title' => 'Small Tattoos',
            'description' => 'Minimalist and tiny black ink designs',
            'highlights' => ['Tiny Details', 'Micro Art'],
            'main_image' => 'assets/img/gallery/Small 5.webp',
            'main_alt' => 'Small Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Small 7.webp', 'title' => 'Tiny Moon & Stars'],
                ['image' => 'assets/img/gallery/Small 1.webp', 'title' => 'Line Art Overlapping Faces'],
                ['image' => 'assets/img/gallery/Small 2.webp', 'title' => 'Black & Pink Butterfly'],
                ['image' => 'assets/img/gallery/Small 4.webp', 'title' => 'Large Maple Leaf'],
                ['image' => 'assets/img/gallery/Small 3.webp', 'title' => 'Botanical Fruit Branch'],
                ['image' => 'assets/img/gallery/Small 6.webp', 'title' => 'Delicate Script Wrist'],
            ],
        ],
        [
            'id' => 'geometric-content',
            'tab' => 'Geometric',
            'title' => 'Geometric Tattoos',
            'description' => 'Precise lines and symmetrical patterns',
            'highlights' => ['Mandala Art', 'Sacred Geometry'],
            'main_image' => 'assets/img/gallery/Geometric 4.webp',
            'main_alt' => 'Geometric Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Geometric 2.webp', 'title' => 'Snake & Geometric Mandala'],
                ['image' => 'assets/img/gallery/Geometric 1.webp', 'title' => 'Geometric Wolf Portrait'],
                ['image' => 'assets/img/gallery/Geometric 3.webp', 'title' => 'Symmetrical Elbow Mandala'],
                ['image' => 'assets/img/gallery/Geometric 6.webp', 'title' => 'Dotwork Sacred Geometry'],
                ['image' => 'assets/img/gallery/Geometric 7.webp', 'title' => 'Complex Cube Design'],
                ['image' => 'assets/img/gallery/Geometric 5.webp', 'title' => 'Linear Geometry Art'],
            ],
        ],
        [
            'id' => 'traditional-content',
            'tab' => 'Traditional',
            'title' => 'Traditional Tattoos',
            'description' => 'Bold lines and vibrant flash art classics',
            'highlights' => ['Vibrant Colors', 'Classic Flash'],
            'main_image' => 'assets/img/gallery/Traditional 3.webp',
            'main_alt' => 'Traditional Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Traditional 4.webp', 'title' => 'Old School Eagle Flash'],
                ['image' => 'assets/img/gallery/Traditional 7.webp', 'title' => 'Traditional Rose Portrait'],
                ['image' => 'assets/img/gallery/Traditional 1.webp', 'title' => 'Nordic Symbol (Vegvisir)'],
                ['image' => 'assets/img/gallery/Traditional 2.webp', 'title' => 'Eagle & Snake Backpiece'],
                ['image' => 'assets/img/gallery/Traditional 5.webp', 'title' => 'Classic Script Banner'],
                ['image' => 'assets/img/gallery/Traditional 6.webp', 'title' => 'Knight\'s Armored Hand'],
            ],
        ],
        [
            'id' => 'animal-content',
            'tab' => 'Animal',
            'title' => 'Animal Tattoos',
            'description' => 'Powerful and detailed wildlife and pet portraits',
            'highlights' => ['Lion Head', 'Wolf Portrait'],
            'main_image' => 'assets/img/gallery/Animal 7.webp',
            'main_alt' => 'Animal Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Animal 1.webp', 'title' => 'Majestic Lion Head'],
                ['image' => 'assets/img/gallery/Animal 2.webp', 'title' => 'Realistic Big Cat'],
                ['image' => 'assets/img/gallery/Animal 3.webp', 'title' => 'Alpha Wolf Portrait'],
                ['image' => 'assets/img/gallery/Animal 4.webp', 'title' => 'Soaring Majestic Eagle'],
                ['image' => 'assets/img/gallery/Animal 5.webp', 'title' => 'Traditional Koi Fish'],
                ['image' => 'assets/img/gallery/Animal 6.webp', 'title' => 'Mystical Owl Spirit'],
            ],
        ],
        [
            'id' => 'calligraphy-content',
            'tab' => 'Calligraphy',
            'title' => 'Calligraphy Tattoos',
            'description' => 'Beautiful script and lettering from our artists',
            'highlights' => ['Elegant Quotes', 'Minimal Lettering'],
            'main_image' => 'assets/img/gallery/Calligraphy 1.webp',
            'main_alt' => 'Calligraphy Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Calligraphy 3.webp', 'title' => '"PURE" Neck Lettering'],
                ['image' => 'assets/img/gallery/Calligraphy 5.webp', 'title' => 'Elite Initials Script'],
                ['image' => 'assets/img/gallery/Calligraphy 4.webp', 'title' => 'Roman Numerals Memory'],
                ['image' => 'assets/img/gallery/Calligraphy 7.webp', 'title' => 'Bold Gothic Forearm'],
                ['image' => 'assets/img/gallery/Calligraphy 2.webp', 'title' => '"RESPECT" Neck Piece'],
                ['image' => 'assets/img/gallery/Calligraphy 6.webp', 'title' => 'Handwritten Verse Ink'],
            ],
        ],
        [
            'id' => 'realistic-content',
            'tab' => 'Realistic',
            'title' => 'Realistic Tattoos',
            'description' => 'Hyper-realistic custom ink masterpieces',
            'highlights' => ['3D Designs', 'Hyper-Realism'],
            'main_image' => 'assets/img/gallery/Realistic 7.webp',
            'main_alt' => 'Realistic Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Realistic 8.webp', 'title' => '3D Hyper-Realistic Watch'],
                ['image' => 'assets/img/gallery/Realistic 2.webp', 'title' => 'Screaming Gorilla Portrait'],
                ['image' => 'assets/img/gallery/Realistic 1.webp', 'title' => 'Golden Retriever Memorial'],
                ['image' => 'assets/img/gallery/Realistic 4.webp', 'title' => 'Shaded Roman Statue'],
                ['image' => 'assets/img/gallery/Realistic 6.webp', 'title' => 'Precision Mechanical Tool'],
                ['image' => 'assets/img/gallery/Realistic 5.webp', 'title' => 'Biomechanical Concept'],
                ['image' => 'assets/img/gallery/Realistic 3.webp', 'title' => 'Musician Playing Guitar'],
            ],
        ],
        [
            'id' => 'portrait-content',
            'tab' => 'Portrait',
            'title' => 'Portrait Tattoos',
            'description' => 'Beautifully rendered human and memorial portraits',
            'highlights' => ['Face Shading', 'Memorial Ink'],
            'main_image' => 'assets/img/gallery/Portrait 1.webp',
            'main_alt' => 'Portrait Tattoos',
            'items' => [
                ['image' => 'assets/img/gallery/Portrait 3.webp', 'title' => 'Smiling Man Portrait'],
                ['image' => 'assets/img/gallery/Portrait 5.webp', 'title' => 'Classical Sculpture Face'],
                ['image' => 'assets/img/gallery/Portrait 2.webp', 'title' => 'Neymar Footballer Tribute'],
                ['image' => 'assets/img/gallery/Portrait 4.webp', 'title' => 'Native American Portrait'],
                ['image' => 'assets/img/gallery/Portrait 7.webp', 'title' => 'Thomas Shelby (Peaky Blinders)'],
                ['image' => 'assets/img/gallery/Portrait 6.webp', 'title' => 'Tyson Fury Boxing Legend'],
            ],
        ],
    ];
@endphp

<div class="services__area section-padding bg-white">
    <div class="container-fluid px-md-5">
        
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <span class="text-uppercase fw-bold" style="letter-spacing: 2px; color: #d4a373;">Portfolio</span>
                <h2 class="display-6 fw-bold mb-3 mt-2 text-dark">Premium Tattoo Artistry</h2>
                <p class="text-muted lead fs-6">Select a category below to explore our luxury tattooing artistry.</p>
            </div>
        </div>

        @php $catCount = count($tattooCategories); @endphp

        <div class="slider-container-wrapper {{ $catCount > 3 ? 'has-nav-buttons' : 'no-nav-buttons' }} mb-5">
            @if($catCount > 3)
            <button class="slider-control-btn slider-prev-btn" onclick="scrollSlider('categorySliderDrag', -1)">
                <i class="far fa-chevron-left"></i>
            </button>
            @endif

            <div class="slider-wrapper" id="categorySliderDrag">
                @foreach ($tattooCategories as $index => $category)
                    <div class="category-card-ui {{ $index === 0 ? 'active-tab' : '' }}" data-card-id="{{ $category['id'] }}" onclick="switchCategory('{{ $category['id'] }}')">
                        <img src="{{ asset($category['main_image']) }}" alt="{{ $category['title'] }}" loading="lazy">
                        <div class="category-card-overlay">
                            <h3 class="fs-4 fw-bold text-white mb-1">{{ $category['title'] }}</h3>
                            <p class="text-white-50 small mb-3">{{ implode(', ', $category['highlights']) }}</p>
                            <span class="explore-link">
                                EXPLORE More <i class="far fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($catCount > 3)
            <button class="slider-control-btn slider-next-btn" onclick="scrollSlider('categorySliderDrag', 1)">
                <i class="far fa-chevron-right"></i>
            </button>
            @endif
        </div>

        <div id="marquee-master-container">
            @foreach ($tattooCategories as $index => $category)
                <div id="{{ $category['id'] }}-marquee" class="marquee-display-section {{ $index === 0 ? 'active-section' : '' }}">
                    <div class="text-center mb-4 mt-2">
                        <h3 class="fw-bold text-dark">{{ $category['title'] }} Collection</h3>
                    </div>

                    @php 
                        $items = $category['items'];
                        $itemCount = count($items);
                    @endphp
                    
                    <div class="slider-container-wrapper {{ $itemCount > 3 ? 'has-nav-buttons' : 'no-nav-buttons' }}">
                        @if($itemCount > 3)
                        <button class="slider-control-btn slider-prev-btn" onclick="scrollSlider('slider-{{ $category['id'] }}', -1)">
                            <i class="far fa-chevron-left"></i>
                        </button>
                        @endif

                        <div class="slider-wrapper" id="slider-{{ $category['id'] }}">
                            @foreach ($items as $item)
                                <div class="service-slide-item">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy">
                                    <div class="service-card-overlay">
                                        <h6 style="color: white;">{{ $item['title'] }}</h6>
                                        <button class="theme-banner-btn openInquiryModal new-btn" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="{{ $item['title'] }}" data-category="Tattoo" data-sub-category="{{ $category['title'] }}">
                                            ENQUIRY NOW <i class="far fa-chevron-double-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if($itemCount > 3)
                        <button class="slider-control-btn slider-next-btn" onclick="scrollSlider('slider-{{ $category['id'] }}', 1)">
                            <i class="far fa-chevron-right"></i>
                        </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<x-inquiry-modal />

@php
    $gallery = [
        ['img' => 'assets/img/gallery/blog-banner.webp', 'title' => 'Dark Art Blackwork', 'tag' => 'Blackwork', 'cat' => 'tattoo'],
        ['img' => 'assets/img/collins-lesulie-PWK6CeCJtJw-unsplash.jpg', 'title' => 'Hyper-Realism Tattoo', 'tag' => 'Realism', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-1.webp', 'title' => 'Fine Line Minimalist', 'tag' => 'Fine Line', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-2.webp', 'title' => 'Custom Sleeve', 'tag' => 'Realism', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo3.webp', 'title' => 'Micro Portrait', 'tag' => 'Fine Line', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-4.webp', 'title' => 'Classic Traditional Flash', 'tag' => 'Traditional', 'cat' => 'tattoo'],
    ];
@endphp
@include('component.gallery')

<div style="background-color: #fdfbf7;" class="banner__two" data-background="assets/img/bg/banner.jpg"
    style="background-image: url(&quot;assets/img/bg/banner.jpg&quot;);">
    <div class="container custom__container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 lg-mb-30">
                <div class="banner__two-title">
                    <h2 class="text-dark mb-4 ">Artistry With Precision & Safety</h2>
                    <p class="mb-25 text-muted">
                        At Fantas Studio, our mission is to deliver luxury tattoo artistry and premium piercing services
                        with uncompromising hygiene and professional care. We believe every client deserves a
                        transformation that feels confident, clean, and timeless. <br>
                        From consultation to aftercare, we focus on detail, comfort, and personalized styling. Our
                        expert artists use modern techniques and high-quality products to ensure every service meets the
                        highest standards.
                    </p>
                    <a href="{{ url('/book-appointment') }}" class="theme-btn">Booking Appointment<i
                            class="far fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="banner__two-right">
                    <img class="img__full" src="{{ asset('assets/img/Gemini_Generated_Image_ajkmfajkmfajkmfa.png') }}"
                        alt="" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>

@include('component.instagram')
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"
                    style="filter: invert(1); opacity: 1;"></button>
            </div>
            <div class="modal-body text-center pt-0">
                <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Preview"
                    style="max-height: 85vh; object-fit: contain;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // Switch Category Logic (Copying your Nail/Hair Logic)
        window.switchCategory = function(targetId) {
            // 1. Remove active classes
            document.querySelectorAll('.category-card-ui.active-tab').forEach(el => el.classList.remove('active-tab'));
            
            // 2. Add active class to target
            const targetCard = document.querySelector('.category-card-ui[data-card-id="' + targetId + '"]');
            if (targetCard) {
                targetCard.classList.add('active-tab');
                
                // 3. Center logic using scrollTo (as per your recent code)
                const slider = document.getElementById('categorySliderDrag');
                if (slider) {
                    const scrollPos = targetCard.offsetLeft - (slider.clientWidth / 2) + (targetCard.clientWidth / 2);
                    slider.scrollTo({
                        left: scrollPos,
                        behavior: 'smooth'
                    });
                }
            }

            // 4. Toggle section display
            document.querySelectorAll('.marquee-display-section.active-section').forEach(sec => sec.classList.remove('active-section'));
            const targetSection = document.getElementById(targetId + '-marquee');
            if(targetSection) targetSection.classList.add('active-section');
        };

        // Scroll Slider Logic for both Categories and Services
        window.scrollSlider = function(sliderId, direction) {
            const slider = document.getElementById(sliderId);
            if (!slider) return;
            
            const item = slider.querySelector('.service-slide-item') || slider.querySelector('.category-card-ui');
            if (!item) return;

            const scrollAmount = (item.offsetWidth + 20) * direction;
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        };

        // Initial alignment
        setTimeout(() => {
            const firstActive = document.querySelector('.category-card-ui.active-tab');
            if (firstActive) {
                const slider = document.getElementById('categorySliderDrag');
                const scrollPos = firstActive.offsetLeft - (slider.clientWidth / 2) + (firstActive.clientWidth / 2);
                slider.scrollTo({ left: scrollPos });
            }
        }, 100);
    });
</script>

@endsection