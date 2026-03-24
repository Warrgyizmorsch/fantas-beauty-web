@extends('layouts.app')
@section('content')

    <style>
        /* Theme color override for active and hover states */
        #makeover-tabs .btn-outline-dark.active,
        #makeover-tabs .btn-outline-dark:hover {
            background-color: #b48e40 !important;
            border-color: #b48e40 !important;
            color: #ffffff !important;
        }

        .services-tab-nav {
            scrollbar-width: thin;
            scrollbar-color: #999 transparent;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            scrollbar-width: none;
            scroll-behavior: smooth;
        }

        .services-tab-nav::-webkit-scrollbar {
            height: 6px;
            display: none;
        }

        .services-tab-nav::-webkit-scrollbar-thumb {
            background: #999;
            border-radius: 20px;
        }

        .service-main-img {
            height: 350px;
            object-fit: cover;
        }

        .service-slide-img {
            height: 400px;
            object-fit: cover;
        }

        .service-card-overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.75), rgba(0,0,0,0.25), transparent);
        }

        .service-carousel-control {
            width: 48px;
            height: 48px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
        }

        .service-carousel-control .carousel-control-prev-icon,
        .service-carousel-control .carousel-control-next-icon {
            background-size: 18px 18px;
            border-radius: 50%;
            padding: 16px;
            background-color: rgba(0, 0, 0, 0.75);
        }

        @media (max-width: 991.98px) {
            .service-main-img {
                height: 260px;
                border-radius: 1rem 1rem 0 0 !important;
            }

            .service-slide-img {
                height: 280px;
            }
        }

        @media (max-width: 767.98px) {
            .service-slide-item:not(:last-child) {
                border-bottom: 2px solid #fff;
            }

            .service-carousel-control {
                width: 38px;
                height: 38px;
            }

            .service-carousel-control .carousel-control-prev-icon,
            .service-carousel-control .carousel-control-next-icon {
                padding: 12px;
            }
        }
    </style>

    <!-- Page Banner Start -->
    <div class="home__banner">
        <div class="banner__slide swiper banner-slide">
            <div class="swiper-wrapper">

                <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                    style="height: 500px; min-height: 500px; position: relative;">
                    <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/NailExtensions.png')}}'); 
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
                                        Premium Nail Care
                                    </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"
                                        style="color: #fff; margin-bottom: -10px;">
                                        Luxury Nail Art
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s"
                                        style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                                        From gel polish to detailed nail art — flawless finishing, long-lasting shine, and
                                        premium products.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                    style="height: 500px; min-height: 500px; position: relative;">
                    <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/hair.png')}}'); 
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
                                        Premium Hair Care
                                    </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"
                                        style="color: #fff; margin-bottom: -10px;">
                                        Luxury Hair Styling
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s"
                                        style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                                        From precision fades to luxury hair treatments — flawless styling, long-lasting
                                        texture, and premium grooming products.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000"
                    style="height: 500px; min-height: 500px; position: relative;">
                    <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/Eyelashes.png')}}'); 
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
                                        Eyelash Specialists
                                    </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"
                                        style="color: #fff; margin-bottom: -10px;">
                                        Luxury Eyelash
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s"
                                        style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                                        Natural to volume lashes — lightweight, comfortable, and styled to match your eye
                                        shape perfectly.
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
                            <img src="{{ asset('assets/img/Gemini_Generated_Image_xi7szfxi7szfxi7s.png') }}"
                                alt="Fantas Tattoo & Piercing Studio" class="img-fluid rounded shadow-lg">
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="col-xl-6 col-lg-6">
                    <div class="history__area-right">

                        <div class="history__area-right-title">
                            <!-- <span class="subtitle__two">Our Journey</span> -->
                            <span class="subtitle__one">Fantas Lash Studio</span>
                            <h2>Crafting Beauty, Volume & Confidence</h2>

                            <p class="mb-25">
                                Fantas Studio is your premium destination for comprehensive luxury makeovers, specializing
                                in expert hair grooming, flawless nail artistry, and professional eyelash extensions and
                                care. Our studio seamlessly blends artistry, strict hygiene, and precision to deliver
                                stunning, tailored transformations that elevate your natural beauty and boost your
                                confidence.
                            </p>

                            <p>
                                Every service at Fantas is performed by our team of highly skilled technicians and stylists.
                                We prioritize comfort, safety, and perfection, utilizing only ultra-lightweight premium lash
                                fibers, medical-grade hypoallergenic adhesives, top-tier nail products, and the latest
                                modern hair and beauty techniques.
                            </p>
                        </div>

                        {{-- Founder / Signature --}}
                        <div class="history__area-right-author mt-4">
                            <div class="d-flex align-items-center">
                                <div class="history__area-right-author-image mr-3">
                                    <img src="{{ asset('assets/logo/fantas-logo.png') }}" alt="Fantas Founder"
                                        class="img-fluid" style="max-width: 60px;">
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

   @php
    $serviceCategories = [
        [
            'id' => 'threading-content',
            'tab' => 'Threading',
            'title' => 'Precision Threading',
            'description' => 'Clean and precise facial grooming for a neat and polished everyday look.',
            'highlights' => [
                'Eyebrows & Upper Lip',
                'Full Face Threading',
            ],
            'main_image' => 'assets/img/gallery/15.png',
            'main_alt' => 'Threading',
            'carousel_id' => 'carouselThreading',
            'collapse_id' => 'slider-threading',
            'items' => [
                ['image' => 'assets/img/gallery/16.png', 'title' => 'Eyebrows'],
                ['image' => 'assets/img/gallery/25.png', 'title' => 'Upper Lip'],
                ['image' => 'assets/img/gallery/facial-beauty-treatment-spa-salon-body-skin-care.jpg', 'title' => 'Chin'],
                ['image' => 'assets/img/gallery/female-master-checks-contour-eyebrows-with-thread.jpg', 'title' => 'Sides'],
                ['image' => 'assets/img/gallery/woman-going-through-microblading-procedure.jpg', 'title' => 'Cheeks'],
                ['image' => 'assets/img/gallery/chain.jpg', 'title' => 'Chin'],
            ],
        ],
        [
            'id' => 'waxing-content',
            'tab' => 'Waxing',
            'title' => 'Luxury Waxing',
            'description' => 'Smooth skin care services for face and body with clean and comfortable finishing.',
            'highlights' => [
                'Full/Half Arm & Leg',
                'Full Body Wax',
            ],
            'main_image' => 'assets/img/gallery/17.png',
            'main_alt' => 'Waxing',
            'carousel_id' => 'carouselWaxing',
            'collapse_id' => 'slider-waxing',
            'items' => [
                ['image' => 'assets/img/gallery/22.png', 'title' => 'Eyebrows'],
                ['image' => 'assets/img/gallery/34.png', 'title' => 'Upper Lip'],
                ['image' => 'assets/img/gallery/30.png', 'title' => 'Full Face'],
                ['image' => 'assets/img/gallery/23.png', 'title' => 'Full Arm'],
                ['image' => 'assets/img/gallery/24.png', 'title' => 'Underarm'],
                ['image' => 'assets/img/gallery/19.png', 'title' => 'Full Leg'],
            ],
        ],
        [
            'id' => 'eye-content',
            'tab' => 'Eye Treatments',
            'title' => 'Lash & Brow Artistry',
            'description' => 'Lash and brow enhancement services to define and elevate your overall look.',
            'highlights' => [
                'Eyelash Extensions',
                'Brow & Lash Tinting',
            ],
            'main_image' => 'assets/img/gallery/eye.jpg',
            'main_alt' => 'Eye Treatments',
            'carousel_id' => 'carouselEye',
            'collapse_id' => 'slider-eye',
            'items' => [
                ['image' => 'assets/img/gallery/26.png', 'title' => 'Eyebrow Tinting'],
                ['image' => 'assets/img/gallery/semi permanent makeup.png', 'title' => 'Thread & Tint'],
                ['image' => 'assets/img/gallery/20.png', 'title' => 'Wax & Tint'],
                ['image' => 'assets/img/gallery/jose-castillo-Nr9ZASY4Uz8-unsplash.jpg', 'title' => 'Lash Removal'],
                ['image' => 'assets/img/gallery/27.png', 'title' => 'Semi-Permanent Eyelashes'],
                ['image' => 'assets/img/gallery/17.png', 'title' => 'Eyelashes Extensions'],
            ],
        ],
        [
            'id' => 'massage-content',
            'tab' => 'Massage',
            'title' => 'Relaxation Massage',
            'description' => 'Relax and unwind with soothing massage services designed to ease tension and refresh your body.',
            'highlights' => [
                'Neck & Shoulders',
                'Full Body Massage',
            ],
            'main_image' => 'assets/img/gallery/28.png',
            'main_alt' => 'Massage',
            'carousel_id' => 'carouselMassage',
            'collapse_id' => 'slider-massage',
            'items' => [
                ['image' => 'assets/img/gallery/massage.png', 'title' => 'Neck Massage'],
                ['image' => 'assets/img/gallery/29.png', 'title' => 'Back Massage'],
                ['image' => 'assets/img/gallery/28.png', 'title' => 'Shoulders Massage'],
                // ['image' => 'assets/img/gallery/34.png', 'title' => 'Chin & Neck'],
                // ['image' => 'assets/img/gallery/21.png', 'title' => 'Sides & Cheeks'],
                // ['image' => 'assets/img/gallery/19.png', 'title' => 'Forehead'],
            ],
        ],
        [
            'id' => 'facials-content',
            'tab' => 'Facials',
            'title' => 'Rejuvenating Facials',
            'description' => 'Glow-enhancing facial treatments that deeply cleanse, nourish, and revive tired skin.',
            'highlights' => [
                'Deep Cleanse Facial',
                'Luxury Gold Facial',
            ],
            'main_image' => 'assets/img/gallery/32.png',
            'main_alt' => 'Facials',
            'carousel_id' => 'carouselFacials',
            'collapse_id' => 'slider-facials',
            'items' => [
                ['image' => 'assets/img/gallery/32.png', 'title' => 'Mini Facial'],
                ['image' => 'assets/img/gallery/facial.png', 'title' => 'Deep Cleanse Facial'],
                ['image' => 'assets/img/gallery/80369459.png', 'title' => 'Gold Facial'],
                ['image' => 'assets/img/gallery/herbal.png', 'title' => 'Herbal Facial'],
                ['image' => 'assets/img/gallery/facial.png', 'title' => 'Deep Cleanse Facial'],
                ['image' => 'assets/img/gallery/80369459.png', 'title' => 'Gold Facial'],
            ],
        ],
        [
            'id' => 'spm-content',
            'tab' => 'Semi Permanent',
            'title' => 'Semi-Permanent Make-up',
            'description' => 'Long-lasting beauty enhancements for brows, lips, and eyeliner with precise artistry.',
            'highlights' => [
                'Ombre Brows',
                'Lip & Eyeliner',
            ],
            'main_image' => 'assets/img/gallery/30.png',
            'main_alt' => 'SPM',
            'carousel_id' => 'carouselSpm',
            'collapse_id' => 'slider-spm',
            'items' => [
                ['image' => 'assets/img/gallery/semi permanent makeup.png', 'title' => 'Eyebrows'],
                ['image' => 'assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.jpg', 'title' => 'Ombre'],
                ['image' => 'assets/img/gallery/semi permanent makeup.png', 'title' => 'Eyebrows Refill'],
                ['image' => 'assets/img/gallery/images.jpeg', 'title' => 'Eyeliner'],
                ['image' => 'assets/img/gallery/Liner1.jpg', 'title' => 'Top & Bottom Eyeliner'],
                ['image' => 'assets/img/gallery/images (1).jpeg', 'title' => 'Lip Liner'],
                ['image' => 'assets/img/gallery/34.png', 'title' => 'Full Lip Collor'],
                ['image' => 'assets/img/gallery/beauty.png', 'title' => 'Beauty Spot'],
                ['image' => 'assets/img/gallery/25.png', 'title' => 'Microblading'],
            ],
        ],
        [
            'id' => 'hair-content',
            'tab' => 'Hair',
            'title' => 'Premium Hair Care',
            'description' => 'Professional styling, treatments, and hair transformations tailored to your look.',
            'highlights' => [
                'Wash, Cut & Style',
                'Highlights & Treatments',
            ],
            'main_image' => 'assets/img/gallery/37.png',
            'main_alt' => 'Hair',
            'carousel_id' => 'carouselHair',
            'collapse_id' => 'slider-hair',
            'items' => [
                ['image' => 'assets/img/gallery/39.png', 'title' => 'Lace Weave'],
                ['image' => 'assets/img/gallery/wash.png', 'title' => 'Wash & Set'],
                ['image' => 'assets/img/gallery/image.png', 'title' => 'Wash & Blow-Dry'],
                ['image' => 'assets/img/gallery/36.png', 'title' => 'Stear'],
                ['image' => 'assets/img/gallery/hair treatment.png', 'title' => 'Hair Treatment'],
                ['image' => 'assets/img/gallery/frontals.png', 'title' => 'Curly Perm'],
                ['image' => 'assets/img/gallery/41.png', 'title' => 'Weave-on'],
                ['image' => 'assets/img/gallery/40.png', 'title' => 'Front Lace Closure'],
                ['image' => 'assets/img/gallery/37.png', 'title' => 'Curly Hair'],
            ],
        ],
        [
            'id' => 'braids-content',
            'tab' => 'Braids',
            'title' => 'Custom Braiding',
            'description' => 'Stylish and protective braid options designed for beauty, comfort, and personality.',
            'highlights' => [
                'Box & Knotless Braids',
                'Goddess Braids',
            ],
            'main_image' => 'assets/img/gallery/hair braids.png',
            'main_alt' => 'Braids',
            'carousel_id' => 'carouselBraids',
            'collapse_id' => 'slider-braids',
            'items' => [
                ['image' => 'assets/img/gallery/41.png', 'title' => 'Box Braids'],
                ['image' => 'assets/img/gallery/hair braids.png', 'title' => 'Goddess Braids'],
                ['image' => 'assets/img/gallery/39.png', 'title' => 'Knotless Braids'],
                ['image' => 'assets/img/gallery/studio-shoot-girl-gray-dress-with-dreads-white-background.jpg', 'title' => 'Butterfly Locks'],
                ['image' => 'assets/img/gallery/single.jpg', 'title' => 'Single Braids'],
                ['image' => 'assets/img/gallery/hair braids.png', 'title' => 'Goddess Braids'],
            ],
        ],
        [
            'id' => 'tooth-content',
            'tab' => 'Tooth Gems',
            'title' => 'Tooth Gems',
            'description' => 'Add a sparkling touch to your smile with stylish and customized tooth gem placements.',
            'highlights' => [
                'Small & Big Gems',
                'Custom Placement',
            ],
            'main_image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.jpg',
            'main_alt' => 'Tooth Gems',
            'carousel_id' => 'carouselTooth',
            'collapse_id' => 'slider-tooth',
            'items' => [
                ['image' => 'assets/img/gallery/42.png', 'title' => 'Small Gen'],
                ['image' => 'assets/img/gallery/43.png', 'title' => 'Big Gen'],
                ['image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.jpg', 'title' => 'Small Gen'],
                // ['image' => 'assets/img/gallery/34.png', 'title' => 'Chin & Neck'],
                // ['image' => 'assets/img/gallery/21.png', 'title' => 'Sides & Cheeks'],
                // ['image' => 'assets/img/gallery/19.png', 'title' => 'Forehead'],
            ],
        ],
        [
            'id' => 'nails-content',
            'tab' => 'Nails',
            'title' => 'Luxury Nail Artistry',
            'description' => 'Modern nail extensions, polish, manicure, and pedicure services for every occasion.',
            'highlights' => [
                'Acrylic & Gel Extensions',
                'Custom 3D Nail Art',
            ],
            'main_image' => 'assets/img/bg/NailExtensions.png',
            'main_alt' => 'Nails',
            'carousel_id' => 'carouselNails',
            'collapse_id' => 'slider-nails',
            'items' => [
                ['image' => 'assets/img/gallery/8.png', 'title' => 'Full Set'],
                ['image' => 'assets/img/gallery/11.png', 'title' => 'Take off & New Set'],
                ['image' => 'assets/img/gallery/9.png', 'title' => 'Normal Polish Toe'],
                ['image' => 'assets/img/gallery/10.png', 'title' => 'Normal Polish Nail'],
                ['image' => 'assets/img/gallery/Gemini_Generated_Image_hzi3ehhzi3ehhzi3 (1).png', 'title' => 'Manicure Normal Polish'],
                ['image' => 'assets/img/gallery/12.png', 'title' => 'Pedicure'],
            ],
        ],
        [
            'id' => 'henna-content',
            'tab' => 'Henna',
            'title' => 'Traditional Henna Art',
            'description' => 'Elegant henna styles from classic bridal patterns to simple modern hand designs.',
            'highlights' => [
                'Bridal Henna',
                'Minimalist Designs',
            ],
            'main_image' => 'assets/img/gallery/13.png',
            'main_alt' => 'Henna',
            'carousel_id' => 'carouselHenna',
            'collapse_id' => 'slider-henna',
            'items' => [
                ['image' => 'assets/img/gallery/14.png', 'title' => 'Henna'],
                ['image' => 'assets/img/gallery/13.png', 'title' => 'Henna'],
                ['image' => 'assets/img/gallery/closeup-hands-pretty-hindu-bride-with-henna-tattoo.jpg', 'title' => 'Henna'],
                // ['image' => 'assets/img/gallery/34.png', 'title' => 'Chin & Neck'],
                // ['image' => 'assets/img/gallery/21.png', 'title' => 'Sides & Cheeks'],
                // ['image' => 'assets/img/gallery/19.png', 'title' => 'Forehead'],
            ],
        ],
    ];
@endphp

<div class="services__area section-padding bg-light">
    <div class="container">
        {{-- Main Section Header --}}
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <span class="text-uppercase fw-bold text-secondary" style="letter-spacing: 2px;">Our Services</span>
                <h2 class="display-6 fw-bold mb-3 mt-2 text-dark">Beauty & Makeover</h2>
                <p class="text-muted lead fs-6">
                    Discover our complete range of expert beauty, hair, and makeover services. Select a category below to explore our luxury offerings.
                </p>
            </div>
        </div>

        {{-- Tabs --}}
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav flex-nowrap overflow-auto gap-2 pb-2 services-tab-nav" id="makeover-tabs" role="tablist">
                    @foreach ($serviceCategories as $index => $category)
                        <li class="nav-item" role="presentation">
                            <button
                                class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap {{ $index === 0 ? 'active' : '' }}"
                                id="{{ $category['id'] }}-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#{{ $category['id'] }}"
                                type="button"
                                role="tab"
                                aria-controls="{{ $category['id'] }}"
                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                {{ $category['tab'] }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Tab Content --}}
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="makeover-tabsContent">
                    @foreach ($serviceCategories as $index => $category)
                        @php
                            $slides = array_chunk($category['items'], 3);
                        @endphp
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $category['id'] }}" role="tabpanel" aria-labelledby="{{ $category['id'] }}-tab">
                            {{-- Main Card --}}
                            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-5">
                                        <img
                                            src="{{ asset($category['main_image']) }}"
                                            class="img-fluid w-100 service-main-img"
                                            alt="{{ $category['main_alt'] }}">
                                    </div>

                                    <div class="col-lg-7 p-4 p-md-5">
                                        <h3 class="fw-bold mb-3">{{ $category['title'] }}</h3>
                                        <p class="text-muted mb-4">{{ $category['description'] }}</p>

                                        <ul class="list-unstyled text-muted mb-4 row">
                                            @foreach ($category['highlights'] as $highlight)
                                                <li class="col-md-6 mb-2">
                                                    <i class="fas fa-check text-secondary me-2"></i>{{ $highlight }}
                                                </li>
                                            @endforeach
                                        </ul>

                                        <button 
                                            class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#{{ $category['collapse_id'] }}"
                                            aria-expanded="false"
                                            aria-controls="{{ $category['collapse_id'] }}">
                                            Explore More <i class="fas fa-chevron-down ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- Collapse Slider --}}
                            <div class="collapse" id="{{ $category['collapse_id'] }}">
                                <div id="{{ $category['carousel_id'] }}" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner rounded-4 shadow-sm bg-white overflow-hidden">
                                        @foreach ($slides as $slideIndex => $slide)
                                            <div class="carousel-item {{ $slideIndex === 0 ? 'active' : '' }}">
                                                <div class="row g-0">
                                                    @foreach ($slide as $itemIndex => $item)
                                                        <div class="col-12 col-md-4 position-relative service-slide-item {{ $itemIndex < 2 ? 'border-md-end border-white border-2' : '' }}">
                                                            <img
                                                                src="{{ asset($item['image']) }}"
                                                                class="d-block w-100 service-slide-img"
                                                                alt="{{ $item['title'] }}">

                                                            <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center service-card-overlay">
                                                                <h6 class="text-white fw-bold mb-2">{{ $item['title'] }}</h6>
                                                                <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="{{ $item['title'] }}" style="height: 10px;">
                                                                    Enquiry Now
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    @if(count($slides) > 1)
                                        <button
                                            class="carousel-control-prev service-carousel-control"
                                            type="button"
                                            data-bs-target="#{{ $category['carousel_id'] }}"
                                            data-bs-slide="prev"
                                            aria-label="Previous slide">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </button>

                                        <button
                                            class="carousel-control-next service-carousel-control"
                                            type="button"
                                            data-bs-target="#{{ $category['carousel_id'] }}"
                                            data-bs-slide="next"
                                            aria-label="Next slide">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <x-inquiry-modal />
    @php
        $gallery = [
            ['img' => 'assets/testimonials/1.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'tattoo'],
            ['img' => 'assets/testimonials/insta-3.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails', 'cat' => 'tattoo'],
            ['img' => 'assets/testimonials/ovinuchi-ejiohuo-vaOosG1lgGE-unsplash.jpg', 'title' => 'Eyelash Extensions', 'tag' => 'Eyelash', 'cat' => 'tattoo'],
            ['img' => 'assets/testimonials/Gemini_Generated_Image_auf42mauf42mauf4.png', 'title' => 'Eyelash Extensions', 'tag' => 'Eyelash', 'cat' => 'tattoo'],

            ['img' => 'assets/testimonials/4.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'tattoo'],
            ['img' => 'assets/testimonials/12.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails', 'cat' => 'tattoo'],
        ];
    @endphp
    @include('component.gallery')
    <div class="mission__area section-padding" style="background-color: #fdfbf7;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="mission__area-left">
                        <div class="mission__area-left-title">

                            {{-- Subtitle color adjusted --}}
                            {{-- <span class="subtitle__two" style="color: #d4a373;">Mission</span> --}}

                            {{-- Heading dark color --}}
                            <h2 class="text-dark mb-4">Artistry With Precision, Hygiene & Personalized Care</h2>

                            {{-- Paragraphs with muted text for a softer look --}}
                            <p class="mb-25 text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                                At Fantas Studio, our mission is to deliver exceptional luxury makeover services—spanning
                                expert hair grooming, flawless nail artistry, and premium eyelash extensions—with
                                uncompromising hygiene, safety, and professional care. We are dedicated to providing a
                                personalized experience from consultation to aftercare, focusing on every detail to ensure
                                comfort and perfection. Our expert team utilizes modern techniques and high-quality products
                                to create confident, flawless transformations tailored to your unique beauty.
                            </p>
                            <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                                {{-- From the moment of initial consultation to dedicated aftercare, our unwavering focus is
                                on meticulously perfected details, absolute client comfort, and a tailored experience that
                                reflects your unique style and vision. Our entire team of expert stylists, nail artists, and
                                lash technicians utilizes modern techniques and only the highest-quality, professional
                                products to ensure every service meets and exceeds the highest standards. --}}
                            </p>

                            {{-- Button updated to a dark/bold style to pop against light background --}}
                            <a href="{{ url('/book-appointment') }}" class="theme-btn">
                                Book Appointment <i class="far fa-angle-double-right"></i>
                            </a>

                        </div>
                    </div>
                </div>

                {{-- Right Image --}}
                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0 text-center">
                    <div class="mission__area-right">
                        {{-- Added shadow-lg for better depth on light background --}}
                        <img src="{{ asset('assets/img/Gemini_Generated_Image_hur36ohur36ohur3.png') }}"
                            alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg"
                            style="margin-bottom: 160px;width: 50%;margin-left: 46%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instagram Area Start -->
    @include('component.instagram')
    <!-- Instagram Area End -->

    <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 pb-0 justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"
                        style="filter: invert(1); opacity: 1;"></button>
                </div>
                <div class="modal-body text-center pt-0">
                    <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Preview"
                        style="max-height: 85vh; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

    <script>
        function openImageModal(imageSrc) {
            // Modal ke andar wale <img> tag ka src change karna
            document.getElementById('modalImage').src = imageSrc;

            // Bootstrap modal ko trigger karna
            var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
            myModal.show();
        }
    </script>

@endsection