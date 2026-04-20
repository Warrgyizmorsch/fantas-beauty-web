@extends('layouts.app')
@section('content')

    <style>
        .new-btn {
            height: 45px;
            width: 210px;
            text-align: center;
            border-radius: 20px;
        }
        
        /* Optimized Slider Wrapper */
        .slider-container-wrapper {
            position: relative;
            width: 100%;
        }
        
        /* Padding tabhi aayegi jab buttons honge */
        .slider-container-wrapper.has-nav-buttons {
            padding: 0 45px; 
        }
        
        .slider-container-wrapper.no-nav-buttons {
            padding: 0; 
            display: flex;
            justify-content: center; /* Center align if 3 or less items */
        }

        /* Slider Wrapper directly acting as flex container for perfect math */
        .slider-wrapper {
            display: flex;
            gap: 2px; /* Exact gap between items */
            overflow-x: auto;
            width: 100%;
            background: #fff;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE 10+ */
            padding: 10px 0; /* Slight padding for hover shadow */
        }
        
        .slider-wrapper::-webkit-scrollbar {
            display: none; /* Chrome/Safari */
        }

        .service-slide-item {
            /* Exactly 3 items visible: 100% width minus 2 gaps of 20px (40px) divided by 3 */
            flex: 0 0 calc((100% - 40px) / 3); 
            height: 450px;
            position: relative;
            background: #000;
            /* border-radius: 12px; */
            overflow: hidden;
            scroll-snap-align: start; 
        }

        .service-slide-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            pointer-events: none; 
        }

        /* Overlay & Typography */
        .service-card-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.3) 40%, transparent 70%);
        }

        .service-card-overlay h6 {
            color: #fff;
            margin-bottom: 15px;
            font-size: 24px;
            /* font-family: 'Playfair Display', serif; */
            font-weight: 600;
        }

        /* Minimalist Arrow Buttons (< >) */
        .slider-control-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            color: #d4a373; /* Elegant Gold */
            border: none;
            font-size: 38px; /* Clean large arrows */
            font-weight: 300;
            cursor: pointer;
            z-index: 10;
            padding: 10px 0;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .slider-control-btn:hover {
            color: #111; /* Dark on hover */
            transform: translateY(-50%) scale(1.1); /* Slight pop */
        }
        .slider-prev-btn { left: -5px; }
        .slider-next-btn { right: -5px; }

        /* Responsive Breakpoints */
        @media (max-width: 991px) {
            /* 2 items exactly visible on Tablet */
            .service-slide-item { 
                flex: 0 0 calc((100% - 20px) / 2); 
                height: 400px; 
            }
            .service-card-overlay h6 { font-size: 20px; }
            .slider-container-wrapper.has-nav-buttons { padding: 0 40px; }
            .slider-control-btn { font-size: 32px; }
        }

        @media (max-width: 768px) {
            /* 1 item exactly visible on Mobile */
            .service-slide-item { 
                flex: 0 0 100%; 
                height: 350px; 
            }
            .service-card-overlay { padding: 20px; }
            .service-card-overlay h6 { font-size: 18px; margin-bottom: 10px; }
            .enquiry-btn-gold { padding: 8px 16px !important; font-size: 11px !important; }
            .slider-control-btn { font-size: 28px; }
            .slider-container-wrapper.has-nav-buttons { padding: 0 30px; }
        }

        .banner__slide-area-image {
            will-change: transform;
        }

        /* ACTIVE CATEGORY CENTERING & SCALING CSS */
        #categories-row {
            display: flex;
            justify-content: center;
        }
        
        .category-col {
            transition: order 0.3s ease;
        }

        .piercing-card {
            border: 2px solid transparent !important;
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            opacity: 0.6;
            transform: scale(0.9); /* Make inactive smaller */
        }
        .piercing-card:hover {
            opacity: 0.85;
        }
        .piercing-card[aria-expanded="true"] {
            border-color: #d4a373 !important;
            opacity: 1;
            transform: scale(1.1); /* Make active larger */
            box-shadow: 0 12px 30px rgba(212, 163, 115, 0.25) !important;
            z-index: 10;
        }
        .piercing-card[aria-expanded="true"] .explore-link {
            color: #fff !important;
        }
        
        /* Font styling updated here to match services */
        .piercing-card h3 {
            /* font-family: 'Playfair Display', serif; */
            font-weight: 600;
        }
        
        .piercing-card[aria-expanded="true"] h3 {
            color: #d4a373 !important;
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
            transition: color 0.3s ease;
        }
        .explore-link:hover {
            color: #fff;
        }
    </style>
    
    <div class="home__banner">
      <div class="banner__slide swiper banner-slide">
        <div class="swiper-wrapper">

          <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
            <div class="banner__slide-area-image" 
                 style="background-image: url('{{ asset('assets/img/bg/ChatGPT Image Mar 6, 2026, 11_42_04 AM.png')}}'); 
                        background-size: cover !important; 
                        background-position: center !important; 
                        background-repeat: no-repeat !important; 
                        filter: brightness(0.9) !important; 
                        position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: -1;">
            </div>

            <div class="container" style="height: 100%; display: flex; align-items: center;">
              <div class="row align-items-center">
                <div class="col-xl-8 order-last order-lg-first">
                  <div class="banner__slide-content">
                    <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                      Premium Piercing
                    </span>
                    <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                      Luxury Piercing
                    </h1>
                    <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                      Clean, Precise & Safe Piercing with Premium Hygiene
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
            <div class="banner__slide-area-image" 
                 style="background-image: url('{{ asset('assets/img/bg/piercing banner 2.png')}}'); 
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
                      Premium Piercing
                    </span>
                    <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                      Clean, Precise & Artistic
                    </h1>
                    <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                      Professional Body Piercing with Premium Hygiene Standards
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

                {{-- Image --}}
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="history__area-left">
                        <div class="history__area-left-image">
                            <img 
                                src="{{ asset('assets/img/2220-W-2.webp') }}" 
                                alt="Fantas Tattoo & Piercing Studio"
                                class="img-fluid rounded shadow-lg" loading="lazy" decoding="async"
                            >
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-xl-6 col-lg-6">
                    <div class="history__area-right">

                        <div class="history__area-right-title">
                            <span class="subtitle__one">Fantas Nail Studio</span>
                            <h2>Crafting Elegance, Art & Confidence</h2>

                            <p class="mb-25">
                                Fantas Studio is your premium destination for luxury body piercing artistry and professional piercing care services. Our studio blends creativity, strict hygiene, and precision to deliver stunning piercing designs tailored to every client's unique style.
                            </p>

                            <p>
                               From curated ear stacks and delicate facial piercings to precise body artistry, every service at Fantas is performed by skilled, certified piercing technicians. We use only high-quality, hypoallergenic jewelry (including 14k gold, implant-grade titanium, and precious stones) and modern, safe techniques. We focus on comfort, safety, and perfection throughout the piercing process and aftercare.
                            </p>
                        </div>

                        {{-- Founder / Signature --}}
                        <div class="history__area-right-author mt-4">
                            <div class="d-flex align-items-center">
                                <div class="history__area-right-author-image mr-3">
                                    <img 
                                        src="{{ asset('assets/logo/fantas-logo.png') }}" 
                                        alt="Fantas Founder"
                                        class="img-fluid"
                                        style="max-width: 60px;" loading="lazy" decoding="async"
                                    >
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
    
    <div class="services__area bg-white">
        <div class="container">
            {{-- Section Header --}}
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-7">
                    <span class="text-uppercase text-warning fw-bold" style="letter-spacing: 2px;">Portfolio</span>
                    <h2 class="display-6 fw-bold mb-3 mt-2">Premium Specialties</h2>
                    <p class="text-muted lead fs-6">Select a category below to explore our luxury piercing artistry, executed with absolute precision.</p>
                </div>
            </div>

            {{-- Category Image Cards with Custom Flex Ordering --}}
            <div class="row g-4 mb-2" id="categories-row">
                
                {{-- Category 1: Basic Piercings --}}
                <div class="col-lg-4 col-md-6 category-col">
                    <div role="button" data-bs-toggle="collapse" data-bs-target="#basic-collapse" aria-expanded="true" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark piercing-card">
                        <img src="{{ asset('assets/img/gallery/Ear lobe piercing.webp') }}" class="card-img" alt="Basic Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                            <h3 class="fs-4 text-white mb-1">Basic Piercings</h3>
                            <p class="text-white-50 small mb-3">Standard Lobe, Helix & More</p>
                            <span class="explore-link">
                                EXPLORE More <i class="far fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Category 2: Wellness Piercings --}}
                <div class="col-lg-4 col-md-6 category-col">
                    <div role="button" data-bs-toggle="collapse" data-bs-target="#wellness-collapse" aria-expanded="false" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark piercing-card">
                        <img src="{{ asset('assets/img/gallery/2.webp') }}" class="card-img" alt="Wellness Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                            <h3 class="fs-4 text-white mb-1">Wellness Piercings</h3>
                            <p class="text-white-50 small mb-3">Daith, Shen Men & Curative</p>
                            <span class="explore-link">
                                EXPLORE More <i class="far fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Category 3: Needle Piercings --}}
                <div class="col-lg-4 col-md-6 category-col">
                    <div role="button" data-bs-toggle="collapse" data-bs-target="#needle-collapse" aria-expanded="false" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark piercing-card">
                        <img src="{{ asset('assets/img/gallery/16706.webp') }}" class="card-img" alt="Needle Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                            <h3 class="fs-4 text-white mb-1">Needle Piercings</h3>
                            <p class="text-white-50 small mb-3">Septum, Nostril & Facial Art</p>
                            <span class="explore-link">
                                EXPLORE More <i class="far fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Accordion Container for Sliders --}}
            <div class="accordion border-0" id="portfolioAccordion">

        @php
            // Categories Data Array
            $portfolioCategories = [
                'basic-collapse' => [
                    'name' => 'Basic Piercings',
                    'items' => [
                        ['img' => 'assets/img/gallery/ear1.jpg', 'title' => 'Ear Lobe Piercing'],
                        ['img' => 'assets/img/gallery/ear2b.jpg', 'title' => 'Both Ears'],
                        ['img' => 'assets/img/gallery/baby1.jpg', 'title' => 'Baby Ear Piercing'],
                    ]
                ],
                'wellness-collapse' => [
                    'name' => 'Piercing',
                    'items' => [
                        ['img' => 'assets/img/gallery/ear1.jpg', 'title' => 'Ear Lobe Piercing'],
                        ['img' => 'assets/img/gallery/ear2b.jpg', 'title' => 'Both Ears'],
                        ['img' => 'assets/img/gallery/baby1.jpg', 'title' => 'Baby Ears Piercing'],
                        ['img' => 'assets/img/gallery/2.webp', 'title' => 'Nose Piercing'],
                    ]
                ],
                'needle-collapse' => [
                    'name' => 'Needle Piercings',
                    'items' => [
                        ['img' => 'assets/img/gallery/needlenosepiercing.webp', 'title' => 'Nose'],
                        ['img' => 'assets/img/gallery/t1.jpg', 'title' => 'Tragus'],
                        ['img' => 'assets/img/gallery/4.webp', 'title' => 'Toungue'],
                        ['img' => 'assets/img/gallery/Gemini_Generated_Image_cno5d7cno5d7cno5.webp', 'title' => 'Eye Brow'],
                        ['img' => 'assets/img/gallery/lip.webp', 'title' => 'Lip'],
                        ['img' => 'assets/img/gallery/rook1.jpg', 'title' => 'Rook'],
                        ['img' => 'assets/img/gallery/neck.webp', 'title' => 'Neck'],
                        ['img' => 'assets/img/gallery/saffold1.jpg', 'title' => 'Scaffold / Industrial'],
                        ['img' => 'assets/img/gallery/septum1.jpg', 'title' => 'Septum'],
                        ['img' => 'assets/img/gallery/helx1.jpg', 'title' => 'Helix / Cartilage'],
                        ['img' => 'assets/img/gallery/fh1.jpg', 'title' => 'Forward Helix'],
                        ['img' => 'assets/img/gallery/bel1.jpg', 'title' => 'Belly'],
                        ['img' => 'assets/img/gallery/neck1.jpg', 'title' => 'Microdermal'],
                        ['img' => 'assets/img/gallery/sn1.jpg', 'title' => 'Snake Bite'],
                        ['img' => 'assets/img/gallery/daith1.jpg', 'title' => 'Daith'],
                        ['img' => 'assets/img/gallery/sm1.jpg', 'title' => 'Smiley Piercing'],
                        ['img' => 'assets/img/gallery/web1.jpg', 'title' => 'Frenulum / Web'],
                        ['img' => 'assets/img/gallery/fl1.webp', 'title' => 'Frowny / Lower Frendulum'],
                        ['img' => 'assets/img/gallery/snug.jpg', 'title' => 'Snug'],
                        ['img' => 'assets/img/gallery/con1.webp', 'title' => 'Conch'],
                    ]
                ]
            ];
        @endphp

        @foreach($portfolioCategories as $id => $category)
            @php 
                $items = $category['items'];
                $itemCount = count($items);
            @endphp
            
            <div id="{{ $id }}" class="collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#portfolioAccordion">
                <div class="services__area bg-white pt-4 pb-5">
                    <div class="text-center mb-2 mt-3">
                        <h3 class="fw-bold text-dark">{{ $category['name'] }} Collection</h3>
                    </div>
                    
                    <div class="container-fluid p-0"> 
                        {{-- Conditionally add class based on item count --}}
                        <div class="slider-container-wrapper {{ $itemCount > 3 ? 'has-nav-buttons' : 'no-nav-buttons' }}">
                            
                            {{-- Check if items are greater than 3, then show Left Button --}}
                            @if($itemCount > 3)
                            <button class="slider-control-btn slider-prev-btn" onclick="scrollSlider('slider-{{ $id }}', -1)">
                                <i class="far fa-chevron-left"></i>
                            </button>
                            @endif

                            <div class="slider-wrapper" id="slider-{{ $id }}">
                                @foreach ($items as $item)
                                    <div class="service-slide-item">
                                        <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}" loading="lazy" decoding="async">
                                        <div class="service-card-overlay">
                                            <h6>{{ $item['title'] }}</h6>
                                            <button class="theme-banner-btn openInquiryModal new-btn" 
                                                    data-bs-toggle="modal" data-bs-target="#inquiryModal" 
                                                    data-service="{{ $item['title'] }}">
                                                ENQUIRY NOW <i class="far fa-chevron-double-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Check if items are greater than 3, then show Right Button --}}
                            @if($itemCount > 3)
                            <button class="slider-control-btn slider-next-btn" onclick="scrollSlider('slider-{{ $id }}', 1)">
                                <i class="far fa-chevron-right"></i>
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            </div>
        </div>
    </div>

     @php
        $gallery = [
            ['img' => 'assets/img/gallery/16706.webp', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
            ['img' => 'assets/img/gallery/20316.webp', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
            ['img' => 'assets/img/gallery/24680.webp', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
            ['img' => 'assets/img/gallery/46924.webp', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
            ['img' => 'assets/img/gallery/24588.webp', 'title' => 'Nose Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
            ['img' => 'assets/img/gallery/33258.webp', 'title' => 'Luxury Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ];
    @endphp
    @include('component.gallery')
    
    <div style="background-color: #fdfbf7;" class="banner__two" data-background="assets/img/bg/banner.jpg" style="background-image: url(&quot;assets/img/bg/banner.jpg&quot;);">
            <div class="container custom__container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 lg-mb-30">
                        <div class="banner__two-title">
                            {{-- <span class="subtitle__one">Welcome to Our Barbex</span> --}}
                            <h2 class="text-dark mb-4 ">Artistry With Precision & Safety</h2>
                            <p class="mb-25 text-muted">
                                At Fantas Studio, our mission is to deliver luxury body piercing artistry and premium piercing care services with uncompromising hygiene, safety, and professional excellence. We believe every client deserves a transformation that feels confident, clean, and truly personal. <br>
                                From the moment of initial consultation to dedicated aftercare, our focus is meticulously on every detail, your absolute comfort, and a tailored experience that reflects your unique style. Our expert, certified piercing technicians utilize modern techniques and only high-quality, hypoallergenic professional products (including 14k gold, implant-grade titanium, and precious stones) to ensure every service meets the highest standards.
                            </p>
                            <a href="{{ url('/book-appointment') }}" class="theme-btn">Booking Appointment<i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="banner__two-right">
                            <img class="img__full" src="{{ asset('assets/img/piercing.webp') }}" alt="" loading="lazy" decoding="async">
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
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1); opacity: 1;"></button>
                </div>
                <div class="modal-body text-center pt-0">
                    <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Preview" style="max-height: 85vh; object-fit: contain;" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>

    {{-- INQUIRY FORM --}}
    <x-inquiry-modal />

    <script>
        // Image Modal Function
        function openImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
            myModal.show();
        }

        // Optimized Slider Navigation Logic
        function scrollSlider(sliderId, direction) {
            const slider = document.getElementById(sliderId);
            if (!slider) return;
            
            const item = slider.querySelector('.service-slide-item');
            if (!item) return;

            // Calculating exact width of 1 item + 20px CSS gap
            const scrollAmount = (item.offsetWidth + 20) * direction;
            
            slider.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Logic to automatically bring the active category to the middle
            const catRow = document.getElementById('categories-row');
            if(catRow) {
                const cols = Array.from(catRow.querySelectorAll('.category-col'));
                
                const centerActiveCategory = () => {
                    let activeIndex = cols.findIndex(col => col.querySelector('.piercing-card').getAttribute('aria-expanded') === 'true');
                    if (activeIndex === -1) activeIndex = 0; // fallback
                    
                    let currentOrder = 1;
                    cols.forEach((col, idx) => {
                        if (idx === activeIndex) {
                            col.style.order = 2; // Middle position
                        } else {
                            col.style.order = currentOrder;
                            currentOrder += 2; 
                        }
                    });
                };

                // Run on load
                centerActiveCategory();

                // Run when any category is clicked
                cols.forEach(col => {
                    col.addEventListener('click', () => {
                        // Small timeout to allow bootstrap aria-expanded attribute to update
                        setTimeout(centerActiveCategory, 50); 
                    });
                });
            }
        });
    </script>

@endsection