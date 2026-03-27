@extends('layouts.app')
@section('content')

    <style>
        .banner__slide-area-image {
            will-change: transform;
        }
    </style>
    <!-- Page Banner Start -->
    <div class="home__banner">
        <div class="banner__slide swiper banner-slide">
            <div class="swiper-wrapper">

                <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                    style="height: 500px; min-height: 500px; position: relative;">
                    <div class="banner__slide-area-image"
                        style="background-image: url('{{ asset('assets/img/bg/Tatto1.png')}}'); 
                                                                                                                                                        background-size: cover !important; 
                                                                                                                                                        background-position: center !important; 
                                                                                                                                                        background-repeat: no-repeat !important; 
                                                                                                                                                        filter: brightness(0.7) !important; 
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
                    <div class="banner__slide-area-image"
                        style="background-image: url('{{ asset('assets/img/bg/Tatto4.png')}}'); 
                                                                                                                                                        background-size: cover !important; 
                                                                                                                                                        background-position: center !important; 
                                                                                                                                                        background-repeat: no-repeat !important; 
                                                                                                                                                        filter: brightness(0.7) !important; 
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
    <!-- Page Banner End -->
    <div class="history__area section-padding">
        <div class="container">
            <div class="row align-items-center">

                {{-- Image --}}
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="history__area-left">
                        <div class="history__area-left-image">
                            <img src="{{ asset('assets/img/collins-lesulie-PWK6CeCJtJw-unsplash.jpg') }}"
                                alt="Fantas Tattoo & Piercing Studio" class="img-fluid rounded shadow-lg" loading="lazy"
                                decoding="async">
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-xl-6 col-lg-6">
                    <div class="history__area-right">

                        <div class="history__area-right-title">
                            <!-- <span class="subtitle__two">Our Journey</span> -->
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

                        {{-- Founder / Signature --}}
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
                    <!-- <span class="subtitle__two text-primary">What We Do</span> -->
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

    <style>
        /* Optimized Scroller */
        .category-slider-wrapper {
            display: flex;
            gap: 20px;
            overflow-x: hidden;
            /* Changed to hidden to prevent manual scrollbar interfering with smooth infinite touch bounds */
            padding-bottom: 20px;
            scrollbar-width: none;
            -ms-overflow-style: none;
            cursor: grab;
            touch-action: pan-y;
        }

        .category-slider-wrapper:active {
            cursor: grabbing;
        }

        .category-slider-wrapper::-webkit-scrollbar {
            display: none;
        }

        .category-card-ui {
            flex: 0 0 calc(33.333% - 14px);
            height: 380px;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            background: #111;
            border: 2px solid transparent;
            transition: border-color 0.4s ease, transform 0.4s ease, opacity 0.4s ease, box-shadow 0.4s ease;
            user-select: none;
            opacity: 0.75;
        }

        .category-card-ui:hover {
            opacity: 0.9;
            transform: translateY(-5px);
        }

        .category-card-ui.active-tab {
            border-color: #d4a373;
            opacity: 1;
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(212, 163, 115, 0.15);
            z-index: 2;
        }

        .category-card-ui.active-tab .explore-link {
            color: #fff !important;
        }

        .category-card-ui img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: transform 0.6s ease, opacity 0.3s ease;
            pointer-events: none;
        }

        .category-card-ui:hover img,
        .category-card-ui.active-tab img {
            transform: scale(1.05);
            opacity: 1;
        }

        .category-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.5) 40%, transparent 100%);
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
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            pointer-events: auto;
            padding: 10px 0;
        }

        .explore-link:hover {
            color: #fff;
        }

        @media (max-width: 991px) {
            .category-card-ui {
                flex: 0 0 calc(50% - 10px);
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            .category-card-ui {
                flex: 0 0 85%;
                height: 320px;
            }
        }

        /* MARQUEE DISPLAY AREA */
        .marquee-display-section {
            display: none;
            animation: fadeSlideUp 0.4s ease forwards;
        }

        .marquee-display-section.active-section {
            display: block;
        }

        @keyframes fadeSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .marquee-wrapper {
            overflow: hidden;
            width: 100%;
            position: relative;
            padding: 10px 0 30px;
            cursor: grab;
            touch-action: pan-y;
        }

        .marquee-wrapper.is-dragging {
            cursor: grabbing;
        }

        .marquee-track {
            display: flex;
            width: max-content;
            will-change: transform;
            gap: 2px;
        }

        .service-slide-item {
            width: 320px;
            height: 420px;
            position: relative;
            flex-shrink: 0;
            background: #000;
        }

        .service-slide-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            pointer-events: none;
        }

        .service-card-overlay {
            position: absolute;
            inset: auto 0 0 0;
            padding: 25px 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: #fff;
            text-align: center;
        }

        .service-card-overlay h6 {
            color: #fff;
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: 600;
        }

        .new-btn {
            height: 40px;
            border-radius: 50px;
            border: none;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .service-slide-item {
                width: 260px;
                height: 360px;
            }
        }
    </style>

    <div class="services__area section-padding bg-white">
        <div class="container-fluid px-md-5">

            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="text-uppercase fw-bold" style="letter-spacing: 2px; color: #d4a373;">Portfolio</span>
                    <h2 class="display-6 fw-bold mb-3 mt-2 text-dark">Premium Tattoo Artistry</h2>
                    <p class="text-muted lead fs-6">Select a category below to explore our luxury tattooing, where creative
                        vision meets flawless execution and uncompromising hygiene.</p>
                </div>
            </div>

            <div class="category-slider-wrapper mb-5" id="categorySliderDrag">
                @php
                    // 4x duplication for seamless infinite upper slider
                    $loopCategories = array_merge(
                        $tattooCategories,
                        $tattooCategories,
                        $tattooCategories,
                        $tattooCategories
                    );
                @endphp
                @foreach ($loopCategories as $index => $category)
                    <div class="category-card-ui {{ $category['id'] === $tattooCategories[0]['id'] ? 'active-tab' : '' }}"
                        data-card-id="{{ $category['id'] }}" data-img="{{ asset($category['main_image']) }}">
                        <img src="{{ asset($category['main_image']) }}" alt="{{ $category['title'] }}" loading="lazy"
                            decoding="async">
                        <div class="category-card-overlay">
                            <h3 class="fs-4 fw-bold text-white mb-1">{{ $category['title'] }}</h3>
                            <p class="text-white-50 small mb-3">{{ implode(', ', $category['highlights']) }}</p>
                            <span class="explore-link" onclick="switchCategory('{{ $category['id'] }}')">
                                EXPLORE More <i class="far fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="marquee-master-container">
                @foreach ($tattooCategories as $index => $category)
                    <div id="{{ $category['id'] }}-marquee"
                        class="marquee-display-section {{ $index === 0 ? 'active-section' : '' }}">
                        <div class="text-center mb-4 mt-2">
                            <h3 class="fw-bold text-dark">{{ $category['title'] }} Collection</h3>
                        </div>

                        <div class="marquee-wrapper service-marquee" data-speed="0.8">
                            <div class="marquee-track">
                                @php
                                    $mItems = $category['items'];
                                    $loopItems = array_merge(
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems,
                                        $mItems
                                    );
                                @endphp

                                @foreach ($loopItems as $item)
                                    <div class="service-slide-item">
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy"
                                            decoding="async">
                                        <div class="service-card-overlay">
                                            <h6>{{ $item['title'] }}</h6>
                                            <button class="theme-banner-btn openInquiryModal new-btn" data-bs-toggle="modal"
                                                data-bs-target="#inquiryModal" data-service="{{ $item['title'] }}">
                                                ENQUIRY NOW <i class="far fa-chevron-double-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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
                        {{-- <span class="subtitle__one">Welcome to Our Barbex</span> --}}
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
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Area Start -->
    @include('component.instagram')
    <!-- Instagram Area End -->

    {{-- INQUIRY FORM --}}
    <x-inquiry-modal />

    <script>
        function openImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
            myModal.show();
        }

        document.addEventListener('DOMContentLoaded', () => {
            // 1. DRAG & SEAMLESS AUTO-SCROLL FOR CATEGORY SLIDER
            const catSlider = document.getElementById('categorySliderDrag');
            let isCatDown = false, isCatHovered = false, isCatDragging = false, catStartX, catScrollLeft, catRafId;
            let catAutoScrollSpeed = 0.5;
            let catCachedWidth = 0;

            if (catSlider) {
                // Calculate width of one SET of categories (4x duplicated = length / 4)
                const updateCatWidth = () => {
                    const items = catSlider.children;
                    const setLength = Math.floor(items.length / 4);
                    if (setLength === 0) return 0;
                    let w = 0;
                    for (let i = 0; i < setLength; i++) {
                        w += items[i].offsetWidth + 20; // 20px is flex gap from CSS
                    }
                    return w;
                };

                catCachedWidth = updateCatWidth();
                catSlider.scrollLeft = catCachedWidth; // Start in middle

                // Mouse Events
                catSlider.addEventListener('mouseenter', () => { isCatHovered = true; });
                catSlider.addEventListener('mouseleave', () => { isCatHovered = false; isCatDown = false; });
                catSlider.addEventListener('mousedown', (e) => {
                    isCatDown = true;
                    isCatDragging = false;
                    catStartX = e.pageX - catSlider.offsetLeft;
                    catScrollLeft = catSlider.scrollLeft;
                });
                catSlider.addEventListener('mouseup', () => { isCatDown = false; });
                catSlider.addEventListener('mousemove', (e) => {
                    if (!isCatDown) return;
                    e.preventDefault();
                    const currentX = e.pageX - catSlider.offsetLeft;
                    if (Math.abs(currentX - catStartX) > 5) isCatDragging = true;
                    const walk = (currentX - catStartX) * 1.5;
                    catSlider.scrollLeft = catScrollLeft - walk;
                });

                // Touch Events
                catSlider.addEventListener('touchstart', (e) => {
                    isCatDown = true; isCatHovered = true; isCatDragging = false;
                    catStartX = e.touches[0].pageX - catSlider.offsetLeft;
                    catScrollLeft = catSlider.scrollLeft;
                }, { passive: true });
                catSlider.addEventListener('touchend', () => { isCatDown = false; isCatHovered = false; });
                catSlider.addEventListener('touchmove', (e) => {
                    if (!isCatDown) return;
                    const currentX = e.touches[0].pageX - catSlider.offsetLeft;
                    if (Math.abs(currentX - catStartX) > 5) isCatDragging = true;
                    const walk = (currentX - catStartX) * 1.5;
                    catSlider.scrollLeft = catScrollLeft - walk;
                }, { passive: true });

                // Click to Open Modal Handling & Switch Category
                catSlider.addEventListener('click', (e) => {
                    if (isCatDragging) return;

                    const card = e.target.closest('.category-card-ui');
                    if (!card) return;

                    const catId = card.dataset.cardId;

                    // If clicking the "Explore More" link or the card itself, switch the category
                    if (e.target.closest('.explore-link') || card) {
                        switchCategory(catId);
                    }

                    // Also open the main image modal if they clicked the image part specifically 
                    // (but only if they didn't click the link)
                    if (!e.target.closest('.explore-link') && e.target.tagName === 'IMG') {
                        // Optional: trigger modal if requested, but user wants to see the "collection"
                        // openImageModal(card.dataset.img); 
                    }
                });

                // Seamless Auto Scroll Function
                function autoScrollCategory() {
                    if (!isCatDown && !isCatHovered && catCachedWidth > 0) {
                        catSlider.scrollLeft += catAutoScrollSpeed;

                        if (catSlider.scrollLeft >= catCachedWidth * 2) {
                            catSlider.scrollLeft -= catCachedWidth;
                        } else if (catSlider.scrollLeft <= 0) {
                            catSlider.scrollLeft += catCachedWidth;
                        }
                    }
                    catRafId = requestAnimationFrame(autoScrollCategory);
                }
                catRafId = requestAnimationFrame(autoScrollCategory);

                window.addEventListener('resize', () => {
                    setTimeout(() => { catCachedWidth = updateCatWidth(); }, 150);
                });
            }

            // 2. SWITCH CATEGORY LOGIC
            window.switchCategory = function (targetId) {
                document.querySelectorAll('.category-card-ui.active-tab').forEach(el => el.classList.remove('active-tab'));

                // Add active-tab to all duplicated cards safely
                document.querySelectorAll('.category-card-ui[data-card-id="' + targetId + '"]').forEach(el => el.classList.add('active-tab'));

                const currentActiveSection = document.querySelector('.marquee-display-section.active-section');
                if (currentActiveSection) {
                    currentActiveSection.classList.remove('active-section');
                    const marqueeInner = currentActiveSection.querySelector('.service-marquee');
                    if (marqueeInner && marqueeInner.rafId) {
                        cancelAnimationFrame(marqueeInner.rafId);
                    }
                }

                const targetSection = document.getElementById(targetId + '-marquee');
                if (targetSection) {
                    targetSection.classList.add('active-section');
                    const marquee = targetSection.querySelector('.service-marquee');
                    if (marquee) {
                        marquee.dataset.init = 'false';
                        setTimeout(() => { initMarqueeInstance(marquee); }, 50);
                    }
                }
            };

            // 3. MARQUEE ENGINE
            function initMarqueeInstance(container) {
                const track = container.querySelector('.marquee-track');
                if (!track || container.dataset.init === 'true') return;

                let speed = parseFloat(container.dataset.speed || '0.8');
                let state = { isHovered: false, isDragging: false, startX: 0, scrollLeft: 0, cachedWidth: 0 };

                const updateWidth = () => {
                    const items = track.children;
                    const setLength = Math.floor(items.length / 12);
                    if (setLength === 0) return 0;
                    let w = 0;
                    for (let i = 0; i < setLength; i++) w += items[i].offsetWidth + 15;
                    return w;
                };

                const loop = () => {
                    if (!state.isHovered && !state.isDragging && state.cachedWidth > 0) {
                        container.scrollLeft += speed;
                        if (container.scrollLeft >= state.cachedWidth * 2) container.scrollLeft -= state.cachedWidth;
                        else if (container.scrollLeft <= 0) container.scrollLeft += state.cachedWidth;
                    }
                    container.rafId = requestAnimationFrame(loop);
                };

                const startDrag = (x) => { state.isDragging = true; container.classList.add('is-dragging'); state.startX = x - container.offsetLeft; state.scrollLeft = container.scrollLeft; };
                const onDrag = (x) => { if (!state.isDragging) return; container.scrollLeft = state.scrollLeft - ((x - container.offsetLeft - state.startX) * 1.5); };
                const stopDrag = () => { state.isDragging = false; container.classList.remove('is-dragging'); };

                container.onmouseenter = () => state.isHovered = true;
                container.onmouseleave = () => { state.isHovered = false; stopDrag(); };
                container.onmousedown = (e) => startDrag(e.pageX);
                container.onmousemove = (e) => { if (state.isDragging) e.preventDefault(); onDrag(e.pageX); };
                window.addEventListener('mouseup', stopDrag);

                container.addEventListener('touchstart', (e) => { state.isHovered = true; startDrag(e.touches[0].pageX); }, { passive: true });
                container.addEventListener('touchmove', (e) => onDrag(e.touches[0].pageX), { passive: true });
                container.addEventListener('touchend', () => { state.isHovered = false; stopDrag(); });

                state.cachedWidth = updateWidth();
                container.scrollLeft = state.cachedWidth;

                if (container.rafId) cancelAnimationFrame(container.rafId);
                container.rafId = requestAnimationFrame(loop);
                container.dataset.init = 'true';
            }

            // Initialize First Tab Marquee on Load
            const activeMarquee = document.querySelector('.marquee-display-section.active-section .service-marquee');
            if (activeMarquee) { setTimeout(() => { initMarqueeInstance(activeMarquee); }, 100); }
        });
    </script>

@endsection