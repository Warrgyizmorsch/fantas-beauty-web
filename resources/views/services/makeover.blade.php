@extends('layouts.app')
@section('content')

<style>
/* =========================
   SCROLLER FIXED / SMOOTH
========================= */
.marquee-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    cursor: grab;
    user-select: none;
    -webkit-user-select: none;
    -ms-overflow-style: none;
    scrollbar-width: none;
    touch-action: pan-y;
    padding: 4px 0 2px;
}

.marquee-container::-webkit-scrollbar {
    display: none;
}

.marquee-container.is-dragging {
    cursor: grabbing;
}

.marquee-track {
    display: flex;
    align-items: stretch;
    gap: 15px;
    width: max-content;
    will-change: transform;
}

.service-slide-item {
    width: 280px;
    min-width: 280px;
    max-width: 280px;
    height: 340px;
    position: relative;
    flex: 0 0 280px;
    border-radius: 12px;
    overflow: hidden;
    background: #000;
}

.service-slide-item img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.service-card-overlay {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    padding: 15px;
    background: linear-gradient(to top, rgba(0,0,0,0.78), rgba(0,0,0,0.18), transparent);
    text-align: center;
    color: #fff;
    z-index: 2;
}

.service-card-overlay h6 {
    color: #fff;
    margin-bottom: 10px;
    font-size: 16px;
    line-height: 1.3;
}

.service-main-img {
    height: 100%;
    min-height: 380px;
    object-fit: cover;
}

.services-tab-nav::-webkit-scrollbar {
    height: 4px;
}
.services-tab-nav::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 10px;
}

.service-slider-wrap {
    margin-top: 18px;
}

@media (max-width: 768px) {
    .service-slide-item {
        width: 220px;
        min-width: 220px;
        max-width: 220px;
        height: 280px;
        flex: 0 0 220px;
    }

    .service-card-overlay {
        padding: 12px;
    }

    .service-card-overlay h6 {
        font-size: 14px;
        margin-bottom: 8px;
    }

    .service-main-img {
        min-height: 260px;
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
            <div class="col-xl-6 col-lg-6 lg-mb-30">
                <div class="history__area-left">
                    <div class="history__area-left-image">
                        <img src="{{ asset('assets/img/Gemini_Generated_Image_xi7szfxi7szfxi7s.png') }}"
                            alt="Fantas Tattoo & Piercing Studio" class="img-fluid rounded shadow-lg" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="history__area-right">
                    <div class="history__area-right-title">
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

@php
$serviceCategories = [
    [
        'id' => 'threading-content',
        'tab' => 'Threading',
        'title' => 'Precision Threading',
        'description' => 'Clean and precise facial grooming for a neat and polished everyday look.',
        'highlights' => ['Eyebrows & Upper Lip','Full Face Threading'],
        'main_image' => 'assets/img/gallery/15.webp',
        'main_alt' => 'Threading',
        'items' => [
            ['image' => 'assets/img/gallery/16.webp', 'title' => 'Eyebrows'],
            ['image' => 'assets/img/gallery/25.webp', 'title' => 'Upper Lip'],
            ['image' => 'assets/img/gallery/facial-beauty-treatment-spa-salon-body-skin-care.webp', 'title' => 'Chin'],
            ['image' => 'assets/img/gallery/female-master-checks-contour-eyebrows-with-thread.webp', 'title' => 'Sides'],
            ['image' => 'assets/img/gallery/woman-going-through-microblading-procedure.webp', 'title' => 'Cheeks'],
            ['image' => 'assets/img/gallery/chain.webp', 'title' => 'Chin'],
        ],
    ],
    [
        'id' => 'waxing-content',
        'tab' => 'Waxing',
        'title' => 'Luxury Waxing',
        'description' => 'Smooth skin care services for face and body with clean and comfortable finishing.',
        'highlights' => ['Full/Half Arm & Leg','Full Body Wax'],
        'main_image' => 'assets/img/gallery/17.webp',
        'main_alt' => 'Waxing',
        'items' => [
            ['image' => 'assets/img/gallery/22.webp', 'title' => 'Eyebrows'],
            ['image' => 'assets/img/gallery/34.webp', 'title' => 'Upper Lip'],
            ['image' => 'assets/img/gallery/30.webp', 'title' => 'Full Face'],
            ['image' => 'assets/img/gallery/23.webp', 'title' => 'Full Arm'],
            ['image' => 'assets/img/gallery/24.webp', 'title' => 'Underarm'],
            ['image' => 'assets/img/gallery/19.webp', 'title' => 'Full Leg'],
        ],
    ],
    [
        'id' => 'eye-content',
        'tab' => 'Eye Treatments',
        'title' => 'Lash & Brow Artistry',
        'description' => 'Lash and brow enhancement services to define and elevate your overall look.',
        'highlights' => ['Eyelash Extensions','Brow & Lash Tinting'],
        'main_image' => 'assets/img/gallery/eye.webp',
        'main_alt' => 'Eye Treatments',
        'items' => [
            ['image' => 'assets/img/gallery/26.webp', 'title' => 'Eyebrow Tinting'],
            ['image' => 'assets/img/gallery/semi permanent makeup.webp', 'title' => 'Thread & Tint'],
            ['image' => 'assets/img/gallery/20.webp', 'title' => 'Wax & Tint'],
            ['image' => 'assets/img/gallery/jose-castillo-Nr9ZASY4Uz8-unsplash.webp', 'title' => 'Lash Removal'],
            ['image' => 'assets/img/gallery/27.webp', 'title' => 'Semi-Permanent Eyelashes'],
            ['image' => 'assets/img/gallery/17.webp', 'title' => 'Eyelashes Extensions'],
        ],
    ],
    [
        'id' => 'massage-content',
        'tab' => 'Massage',
        'title' => 'Relaxation Massage',
        'description' => 'Relax and unwind with soothing massage services designed to ease tension and refresh your body.',
        'highlights' => ['Neck & Shoulders','Full Body Massage'],
        'main_image' => 'assets/img/gallery/28.webp',
        'main_alt' => 'Massage',
        'items' => [
            ['image' => 'assets/img/gallery/massage.webp', 'title' => 'Neck Massage'],
            ['image' => 'assets/img/gallery/29.webp', 'title' => 'Back Massage'],
            ['image' => 'assets/img/gallery/28.webp', 'title' => 'Shoulders Massage'],
        ],
    ],
    [
        'id' => 'facials-content',
        'tab' => 'Facials',
        'title' => 'Rejuvenating Facials',
        'description' => 'Glow-enhancing facial treatments that deeply cleanse, nourish, and revive tired skin.',
        'highlights' => ['Deep Cleanse Facial','Luxury Gold Facial'],
        'main_image' => 'assets/img/gallery/32.webp',
        'main_alt' => 'Facials',
        'items' => [
            ['image' => 'assets/img/gallery/32.webp', 'title' => 'Mini Facial'],
            ['image' => 'assets/img/gallery/facial.webp', 'title' => 'Deep Cleanse Facial'],
            ['image' => 'assets/img/gallery/80369459.webp', 'title' => 'Gold Facial'],
            ['image' => 'assets/img/gallery/herbal.webp', 'title' => 'Herbal Facial'],
            ['image' => 'assets/img/gallery/facial.webp', 'title' => 'Deep Cleanse Facial'],
            ['image' => 'assets/img/gallery/80369459.webp', 'title' => 'Gold Facial'],
        ],
    ],
    [
        'id' => 'spm-content',
        'tab' => 'Semi Permanent',
        'title' => 'Semi-Permanent Make-up',
        'description' => 'Long-lasting beauty enhancements for brows, lips, and eyeliner with precise artistry.',
        'highlights' => ['Ombre Brows','Lip & Eyeliner'],
        'main_image' => 'assets/img/gallery/30.webp',
        'main_alt' => 'SPM',
        'items' => [
            ['image' => 'assets/img/gallery/semi permanent makeup.webp', 'title' => 'Eyebrows'],
            ['image' => 'assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.webp', 'title' => 'Ombre'],
            ['image' => 'assets/img/gallery/semi permanent makeup.webp', 'title' => 'Eyebrows Refill'],
            ['image' => 'assets/img/gallery/images.webp', 'title' => 'Eyeliner'],
            ['image' => 'assets/img/gallery/Liner1.webp', 'title' => 'Top & Bottom Eyeliner'],
            ['image' => 'assets/img/gallery/images (1).webp', 'title' => 'Lip Liner'],
            ['image' => 'assets/img/gallery/34.webp', 'title' => 'Full Lip Collor'],
            ['image' => 'assets/img/gallery/beauty.webp', 'title' => 'Beauty Spot'],
            ['image' => 'assets/img/gallery/25.webp', 'title' => 'Microblading'],
        ],
    ],
    [
        'id' => 'hair-content',
        'tab' => 'Hair',
        'title' => 'Premium Hair Care',
        'description' => 'Professional styling, treatments, and hair transformations tailored to your look.',
        'highlights' => ['Wash, Cut & Style','Highlights & Treatments'],
        'main_image' => 'assets/img/gallery/37.webp',
        'main_alt' => 'Hair',
        'items' => [
            ['image' => 'assets/img/gallery/39.webp', 'title' => 'Lace Weave'],
            ['image' => 'assets/img/gallery/wash.webp', 'title' => 'Wash & Set'],
            ['image' => 'assets/img/gallery/image.webp', 'title' => 'Wash & Blow-Dry'],
            ['image' => 'assets/img/gallery/36.webp', 'title' => 'Stear'],
            ['image' => 'assets/img/gallery/hair treatment.webp', 'title' => 'Hair Treatment'],
            ['image' => 'assets/img/gallery/frontals.webp', 'title' => 'Curly Perm'],
            ['image' => 'assets/img/gallery/41.webp', 'title' => 'Weave-on'],
            ['image' => 'assets/img/gallery/40.webp', 'title' => 'Front Lace Closure'],
            ['image' => 'assets/img/gallery/37.webp', 'title' => 'Curly Hair'],
        ],
    ],
    [
        'id' => 'braids-content',
        'tab' => 'Braids',
        'title' => 'Custom Braiding',
        'description' => 'Stylish and protective braid options designed for beauty, comfort, and personality.',
        'highlights' => ['Box & Knotless Braids','Goddess Braids'],
        'main_image' => 'assets/img/gallery/hair braids.webp',
        'main_alt' => 'Braids',
        'items' => [
            ['image' => 'assets/img/gallery/41.webp', 'title' => 'Box Braids'],
            ['image' => 'assets/img/gallery/hair braids.webp', 'title' => 'Goddess Braids'],
            ['image' => 'assets/img/gallery/39.webp', 'title' => 'Knotless Braids'],
            ['image' => 'assets/img/gallery/studio-shoot-girl-gray-dress-with-dreads-white-background.webp', 'title' => 'Butterfly Locks'],
            ['image' => 'assets/img/gallery/single.webp', 'title' => 'Single Braids'],
            ['image' => 'assets/img/gallery/hair braids.webp', 'title' => 'Goddess Braids'],
        ],
    ],
    [
        'id' => 'tooth-content',
        'tab' => 'Tooth Gems',
        'title' => 'Tooth Gems',
        'description' => 'Add a sparkling touch to your smile with stylish and customized tooth gem placements.',
        'highlights' => ['Small & Big Gems','Custom Placement'],
        'main_image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.webp',
        'main_alt' => 'Tooth Gems',
        'items' => [
            ['image' => 'assets/img/gallery/42.webp', 'title' => 'Small Gen'],
            ['image' => 'assets/img/gallery/43.webp', 'title' => 'Big Gen'],
            ['image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.webp', 'title' => 'Small Gen'],
        ],
    ],
    [
        'id' => 'nails-content',
        'tab' => 'Nails',
        'title' => 'Luxury Nail Artistry',
        'description' => 'Modern nail extensions, polish, manicure, and pedicure services for every occasion.',
        'highlights' => ['Acrylic & Gel Extensions','Custom 3D Nail Art'],
        'main_image' => 'assets/img/bg/NailExtensions.png',
        'main_alt' => 'Nails',
        'items' => [
            ['image' => 'assets/img/gallery/8.webp', 'title' => 'Full Set'],
            ['image' => 'assets/img/gallery/11.webp', 'title' => 'Take off & New Set'],
            ['image' => 'assets/img/gallery/9.webp', 'title' => 'Normal Polish Toe'],
            ['image' => 'assets/img/gallery/10.webp', 'title' => 'Normal Polish Nail'],
            ['image' => 'assets/img/gallery/Gemini_Generated_Image_hzi3ehhzi3ehhzi3 (1).webp', 'title' => 'Manicure Normal Polish'],
            ['image' => 'assets/img/gallery/12.webp', 'title' => 'Pedicure'],
        ],
    ],
    [
        'id' => 'henna-content',
        'tab' => 'Henna',
        'title' => 'Traditional Henna Art',
        'description' => 'Elegant henna styles from classic bridal patterns to simple modern hand designs.',
        'highlights' => ['Bridal Henna','Minimalist Designs'],
        'main_image' => 'assets/img/gallery/13.webp',
        'main_alt' => 'Henna',
        'items' => [
            ['image' => 'assets/img/gallery/14.webp', 'title' => 'Henna'],
            ['image' => 'assets/img/gallery/13.webp', 'title' => 'Henna'],
            ['image' => 'assets/img/gallery/closeup-hands-pretty-hindu-bride-with-henna-tattoo.webp', 'title' => 'Henna'],
        ],
    ],
];
@endphp

<div class="services__area section-padding bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <span class="text-uppercase fw-bold text-secondary" style="letter-spacing: 2px;">Our Services</span>
                <h2 class="display-6 fw-bold mb-3 mt-2 text-dark">Beauty & Makeover</h2>
                <p class="text-muted lead fs-6">
                    Discover our complete range of expert beauty, hair, and makeover services. Select a category below to explore our luxury offerings.
                </p>
            </div>
        </div>

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

        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="makeover-tabsContent">
                    @foreach ($serviceCategories as $index => $category)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $category['id'] }}" role="tabpanel" aria-labelledby="{{ $category['id'] }}-tab">
                            <div class="card border-0 rounded-4 shadow-sm overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-5">
                                        <img
                                            src="{{ asset($category['main_image']) }}"
                                            class="img-fluid w-100 service-main-img"
                                            alt="{{ $category['main_alt'] }}"
                                            loading="lazy"
                                            decoding="async">
                                    </div>

                                    <div class="col-lg-7 p-4 p-md-5">
                                        <h3 class="fw-bold mb-3">{{ $category['title'] }}</h3>
                                        <p class="text-muted mb-4">{{ $category['description'] }}</p>

                                        <ul class="list-unstyled text-muted mb-0 row">
                                            @foreach ($category['highlights'] as $highlight)
                                                <li class="col-md-6 mb-2">
                                                    <i class="fas fa-check text-secondary me-2"></i>{{ $highlight }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="service-slider-wrap">
                                @php
                                    $loopItems = array_merge($category['items'], $category['items'], $category['items']);
                                @endphp

                                <div class="marquee-container service-marquee" data-speed="0.45" data-pause-on-hover="true">
                                    <div class="marquee-track">
                                        @foreach ($loopItems as $item)
                                            <div class="service-slide-item">
                                                <img
                                                    src="{{ asset($item['image']) }}"
                                                    alt="{{ $item['title'] }}"
                                                    loading="lazy"
                                                    decoding="async">

                                                <div class="service-card-overlay">
                                                    <h6>{{ $item['title'] }}</h6>
                                                    <button
                                                        class="theme-banner-btn btn-sm rounded-pill openInquiryModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#inquiryModal"
                                                        data-service="{{ $item['title'] }}">
                                                        Enquiry Now
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
                        <h2 class="text-dark mb-4">Artistry With Precision, Hygiene & Personalized Care</h2>

                        <p class="mb-25 text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                            At Fantas Studio, our mission is to deliver exceptional luxury makeover services—spanning
                            expert hair grooming, flawless nail artistry, and premium eyelash extensions—with
                            uncompromising hygiene, safety, and professional care. We are dedicated to providing a
                            personalized experience from consultation to aftercare, focusing on every detail to ensure
                            comfort and perfection. Our expert team utilizes modern techniques and high-quality products
                            to create confident, flawless transformations tailored to your unique beauty.
                        </p>

                        <a href="{{ url('/book-appointment') }}" class="theme-btn">
                            Book Appointment <i class="far fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0 text-center">
                <div class="mission__area-right">
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_hur36ohur36ohur3.png') }}"
                        alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg"
                        style="margin-bottom: 160px;width: 50%;margin-left: 46%;" loading="lazy" decoding="async">
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
function openImageModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
    myModal.show();
}

document.addEventListener('DOMContentLoaded', function () {
    function initMarquee(container) {
        if (!container || container.dataset.marqueeReady === 'true') return;

        const track = container.querySelector('.marquee-track');
        if (!track) return;

        const pauseOnHover = container.dataset.pauseOnHover === 'true';
        let speed = parseFloat(container.dataset.speed || '0.45');

        let isHovered = false;
        let isDragging = false;
        let startX = 0;
        let startScrollLeft = 0;
        let rafId = null;

        function getSetWidth() {
            const children = track.children;
            if (!children.length) return 0;

            const totalItems = children.length;
            const oneSetCount = Math.floor(totalItems / 3);
            if (oneSetCount <= 0) return 0;

            let width = 0;
            for (let i = 0; i < oneSetCount; i++) {
                width += children[i].offsetWidth;
            }

            const styles = window.getComputedStyle(track);
            const gap = parseFloat(styles.columnGap || styles.gap || 15);
            width += gap * (oneSetCount - 1);

            return width;
        }

        function setInitialScroll() {
            const oneSetWidth = getSetWidth();
            if (oneSetWidth > 0) {
                container.scrollLeft = oneSetWidth;
            }
        }

        function normalizeLoop() {
            const oneSetWidth = getSetWidth();
            if (!oneSetWidth) return;

            if (container.scrollLeft >= oneSetWidth * 2) {
                container.scrollLeft -= oneSetWidth;
            } else if (container.scrollLeft <= 0) {
                container.scrollLeft += oneSetWidth;
            }
        }

        function animate() {
            if (!(pauseOnHover && isHovered) && !isDragging) {
                container.scrollLeft += speed;
                normalizeLoop();
            }
            rafId = requestAnimationFrame(animate);
        }

        function stopAnimation() {
            if (rafId) {
                cancelAnimationFrame(rafId);
                rafId = null;
            }
        }

        function startAnimation() {
            stopAnimation();
            animate();
        }

        if (pauseOnHover) {
            container.addEventListener('mouseenter', function () {
                isHovered = true;
            });

            container.addEventListener('mouseleave', function () {
                isHovered = false;
            });
        }

        container.addEventListener('wheel', function (e) {
            const delta = Math.abs(e.deltaX) > Math.abs(e.deltaY) ? e.deltaX : e.deltaY;
            if (!delta) return;

            e.preventDefault();
            container.scrollLeft += delta;
            normalizeLoop();
        }, { passive: false });

        container.addEventListener('mousedown', function (e) {
            isDragging = true;
            container.classList.add('is-dragging');
            startX = e.pageX;
            startScrollLeft = container.scrollLeft;
        });

        window.addEventListener('mousemove', function (e) {
            if (!isDragging) return;
            e.preventDefault();

            const walk = e.pageX - startX;
            container.scrollLeft = startScrollLeft - (walk * 1.2);
            normalizeLoop();
        });

        window.addEventListener('mouseup', function () {
            isDragging = false;
            container.classList.remove('is-dragging');
        });

        container.addEventListener('dragstart', function (e) {
            e.preventDefault();
        });

        let touchStartX = 0;
        let touchStartScrollLeft = 0;

        container.addEventListener('touchstart', function (e) {
            isDragging = true;
            touchStartX = e.touches[0].pageX;
            touchStartScrollLeft = container.scrollLeft;
        }, { passive: true });

        container.addEventListener('touchmove', function (e) {
            if (!isDragging) return;
            const walk = e.touches[0].pageX - touchStartX;
            container.scrollLeft = touchStartScrollLeft - (walk * 1.1);
            normalizeLoop();
        }, { passive: true });

        container.addEventListener('touchend', function () {
            isDragging = false;
        });

        function refreshMarquee() {
            setInitialScroll();
        }

        window.addEventListener('load', refreshMarquee);
        window.addEventListener('resize', refreshMarquee);

        setInitialScroll();
        startAnimation();
        container.dataset.marqueeReady = 'true';
    }

    document.querySelectorAll('.service-marquee').forEach(initMarquee);

    document.querySelectorAll('[data-bs-toggle="pill"], [data-bs-toggle="tab"]').forEach(function (tabBtn) {
        tabBtn.addEventListener('shown.bs.tab', function () {
            setTimeout(function () {
                document.querySelectorAll('.service-marquee').forEach(function (container) {
                    if (container.dataset.marqueeReady !== 'true') {
                        initMarquee(container);
                    } else {
                        const track = container.querySelector('.marquee-track');
                        if (!track) return;

                        const children = track.children;
                        const oneSetCount = Math.floor(children.length / 3);
                        if (oneSetCount <= 0) return;

                        let width = 0;
                        for (let i = 0; i < oneSetCount; i++) {
                            width += children[i].offsetWidth;
                        }

                        const styles = window.getComputedStyle(track);
                        const gap = parseFloat(styles.columnGap || styles.gap || 15);
                        width += gap * (oneSetCount - 1);

                        if (width > 0) {
                            container.scrollLeft = width;
                        }
                    }
                });
            }, 100);
        });
    });
});
</script>

@endsection