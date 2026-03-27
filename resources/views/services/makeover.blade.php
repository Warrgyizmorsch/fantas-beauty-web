@extends('layouts.app')
@section('content')

<style>
    /* Optimized Scroller */
    .category-slider-wrapper {
        display: flex;
        gap: 20px;
        overflow-x: hidden;
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
        display: none; /* Chrome/Safari */
    }

    .category-card-ui {
        flex: 0 0 calc(33.333% - 14px); 
        height: 380px;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        background: #111;
        border: 2px solid transparent; /* Normal border width */
        transition: border-color 0.4s ease, transform 0.4s ease, opacity 0.4s ease, box-shadow 0.4s ease;
        user-select: none; 
        opacity: 0.75; /* Much softer dimming instead of heavy black filters */
    }

    .category-card-ui:hover {
        opacity: 0.9;
        transform: translateY(-5px);
    }

    /* Active Tab Highlight */
    .category-card-ui.active-tab {
        border-color: #d4a373; /* Gold border for active */
        opacity: 1; /* Full vibrancy */
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
        pointer-events: none; /* Image drag ghost roko */
    }
    .category-card-ui:hover img, .category-card-ui.active-tab img {
        transform: scale(1.05);
        opacity: 1;
    }

    .category-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 40%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 25px 20px;
        pointer-events: none; /* Let clicks pass to the card */
    }



    /* Explore Link / Button */
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
        pointer-events: auto; /* Make it clickable */
        padding: 10px 0;
    }
    .explore-link:hover { color: #fff; }

    @media (max-width: 991px) { .category-card-ui { flex: 0 0 calc(50% - 10px); height: 350px; } }
    @media (max-width: 768px) { .category-card-ui { flex: 0 0 85%; height: 320px; } }

    /* ==========================================
    2. MARQUEE SLIDER DISPLAY AREA
    ============================================= */
    .marquee-display-section {
        display: none; 
        animation: fadeSlideUp 0.4s ease forwards;
    }
    .marquee-display-section.active-section { display: block; }
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .marquee-wrapper { overflow: hidden; width: 100%; position: relative; padding: 10px 0 30px; cursor: grab; touch-action: pan-y; }
    .marquee-wrapper.is-dragging { cursor: grabbing; }
    .marquee-track { display: flex; width: max-content; will-change: transform; gap: 2px; }

    .service-slide-item { width: 320px; height: 420px; position: relative; flex-shrink: 0; background: #000;}
    .service-slide-item img { width: 100%; height: 100%; object-fit: cover; display: block; pointer-events: none; }
    .service-card-overlay { position: absolute; inset: auto 0 0 0; padding: 25px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); color: #fff; text-align: center; }
    .service-card-overlay h6 { color: #fff; margin-bottom: 15px; font-size: 18px; font-weight: 600;}

    .new-btn {
        height: 40px;
        border-radius: 50px; 
        border:none; 
        font-size: 13px;
    }
    @media (max-width: 768px) { .service-slide-item { width: 260px; height: 360px; } }
</style>

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
                <div class="banner__slide-area-image" style="background-image: url('{{ asset('assets/img/bg/Eyelashes.png')}}'); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important; filter: brightness(0.7) !important; 
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
            ['image' => 'assets/img/gallery/chain.webp', 'title' => 'Upper Lip'],
            ['image' => 'assets/img/gallery/facial-beauty-treatment-spa-salon-body-skin-care.webp', 'title' => 'Chin'],
            ['image' => 'assets/img/gallery/female-master-checks-contour-eyebrows-with-thread.webp', 'title' => 'Sides'],
            ['image' => 'assets/img/gallery/woman-going-through-microblading-procedure.webp', 'title' => 'Cheeks'],
            ['image' => 'assets/img/gallery/threding.webp', 'title' => 'Full Face'],
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
            ['image' => 'assets/img/gallery/19.webp', 'title' => 'Full Face'],
            ['image' => 'assets/img/gallery/23.webp', 'title' => 'Full Arm'],
            ['image' => 'assets/img/gallery/24.webp', 'title' => 'Underarm'],
            ['image' => 'assets/img/gallery/wax.webp', 'title' => 'Full Leg'],
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
            ['image' => 'assets/img/gallery/20.webp', 'title' => 'Thread & Tint'],
            ['image' => 'assets/img/gallery/jose-castillo-Nr9ZASY4Uz8-unsplash.webp', 'title' => 'Wax & Tint'],
            ['image' => 'assets/img/gallery/27.webp', 'title' => 'Lash Removal'],
            ['image' => 'assets/img/gallery/eye.webp', 'title' => 'Semi-Permanent Eyelashes'],
            ['image' => 'assets/img/gallery/beauty.webp', 'title' => 'Eyelashes Extensions'],
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
            ['image' => 'assets/img/gallery/bermix-studio-CqEGy4zAmbI-unsplash.webp', 'title' => 'Full Body Swedish'],
            ['image' => 'assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.webp', 'title' => 'Deep Tissue'],
            ['image' => 'assets/img/gallery/victor-sirbu-kA74I2XMiSQ-unsplash.webp', 'title' => 'Aromatherapy Reflexology'],
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
            ['image' => 'assets/img/gallery/31.webp', 'title' => 'Hydrating Glow Facial'],
            ['image' => 'assets/img/gallery/36.webp', 'title' => 'Anti-Aging Therapy'],
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
            ['image' => 'assets/img/gallery/images.webp', 'title' => 'Eyeliner'],
            ['image' => 'assets/img/gallery/Liner1.webp', 'title' => 'Top & Bottom Eyeliner'],
            ['image' => 'assets/img/gallery/images (1).webp', 'title' => 'Lip Liner'],
            ['image' => 'assets/img/gallery/semi.webp', 'title' => 'Full Lip Color'],
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
            ['image' => 'assets/img/gallery/hair treatment.webp', 'title' => 'Hair Treatment'],
            ['image' => 'assets/img/gallery/frontals.webp', 'title' => 'Curly Perm'],
            ['image' => 'assets/img/gallery/hair.webp', 'title' => 'Front Lace Closure'],
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
            ['image' => 'assets/img/gallery/studio-shoot-girl-gray-dress-with-dreads-white-background.webp', 'title' => 'Knotless Braids'],
            ['image' => 'assets/img/gallery/single.webp', 'title' => 'Butterfly Locks'],
            ['image' => 'assets/img/gallery/11.webp', 'title' => 'Single Braids'],
            ['image' => 'assets/img/gallery/12.webp', 'title' => 'Boho Braids'],
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
            ['image' => 'assets/img/gallery/42.webp', 'title' => 'Small Gem'],
            ['image' => 'assets/img/gallery/43.webp', 'title' => 'Big Gem'],
            ['image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.webp', 'title' => 'Custom Layout'],
            ['image' => 'assets/img/gallery/33258.webp', 'title' => 'Butterfly Design'],
            ['image' => 'assets/img/gallery/16706.webp', 'title' => 'Crystal Star'],
            ['image' => 'assets/img/gallery/5.webp', 'title' => 'Gold Charm'],
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
            ['image' => 'assets/img/gallery/8.webp', 'title' => 'Full Set Acrylic'],
            ['image' => 'assets/img/gallery/9.webp', 'title' => 'Take off & New Set'],
            ['image' => 'assets/img/gallery/10.webp', 'title' => 'Normal Polish Toe'],
            ['image' => 'assets/img/gallery/2.webp', 'title' => 'Gel Polish Nail'],
            ['image' => 'assets/img/gallery/3.webp', 'title' => 'Manicure Luxury'],
            ['image' => 'assets/img/gallery/4.webp', 'title' => 'Pedicure Care'],
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
            ['image' => 'assets/img/gallery/14.webp', 'title' => 'Bridal Henna'],
            ['image' => 'assets/img/gallery/13.webp', 'title' => 'Minimalist Henna'],
            ['image' => 'assets/img/gallery/closeup-hands-pretty-hindu-bride-with-henna-tattoo.webp', 'title' => 'Hand Mandalas'],
            ['image' => 'assets/img/gallery/24588.webp', 'title' => 'Foot Henna Design'],
            ['image' => 'assets/img/gallery/20316.webp', 'title' => 'Modern Geometric'],
            ['image' => 'assets/img/gallery/46924.webp', 'title' => 'Classic Indian'],
        ],
    ],
];
@endphp

<div class="services__area  bg-white">
    <div class="container-fluid px-md-5">
        
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <span class="text-uppercase fw-bold" style="letter-spacing: 2px; color: #d4a373;">Portfolio</span>
                <h2 class="display-6 fw-bold mb-3 mt-2 text-dark">Beauty & Makeover Galleries</h2>
                <p class="text-muted lead fs-6">Select a category below to explore our luxury beauty and styling artistry.</p>
            </div>
        </div>

        <div class="category-slider-wrapper mb-5" id="categorySliderDrag">
            @php
                $loopCategories = array_merge(
                    $serviceCategories, $serviceCategories, $serviceCategories, $serviceCategories
                );
            @endphp
            @foreach ($loopCategories as $index => $category)
                <div class="category-card-ui {{ $category['id'] === $serviceCategories[0]['id'] ? 'active-tab' : '' }}" data-card-id="{{ $category['id'] }}" data-img="{{ asset($category['main_image']) }}">
                    <img src="{{ asset($category['main_image']) }}" alt="{{ $category['title'] }}" loading="lazy" decoding="async">
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
            @foreach ($serviceCategories as $index => $category)
                <div id="{{ $category['id'] }}-marquee" class="marquee-display-section {{ $index === 0 ? 'active-section' : '' }}">
                    <div class="text-center mb-4 mt-2">
                        <h3 class="fw-bold text-dark">{{ $category['title'] }} Collection</h3>
                    </div>

                    <div class="marquee-wrapper service-marquee" data-speed="0.8">
                        <div class="marquee-track">
                            @php
                                $mItems = $category['items'];
                                $loopItems = array_merge(
                                    $mItems, $mItems, $mItems, $mItems,
                                    $mItems, $mItems, $mItems, $mItems,
                                    $mItems, $mItems, $mItems, $mItems
                                );
                            @endphp
                            
                            @foreach ($loopItems as $item)
                                <div class="service-slide-item">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" decoding="async">
                                    <div class="service-card-overlay">
                                        <h6>{{ $item['title'] }}</h6>
                                        <button class="theme-banner-btn openInquiryModal new-btn" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="{{ $item['title'] }}">
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

<div style="background-color: #fdfbf7;" class="banner__two" data-background="assets/img/bg/banner.jpg" style="background-image: url(&quot;assets/img/bg/banner.jpg&quot;);">
    <div class="container custom__container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 lg-mb-30">
                <div class="banner__two-title">
                    {{-- <span class="subtitle__one">Welcome to Our Barbex</span> --}}
                    <h2 class="text-dark mb-4 ">Artistry With Makeover & Care</h2>
                    <p class="mb-25 text-muted">
                        At Fantas Studio, our mission is to deliver exceptional luxury makeover services—spanning
                        expert hair grooming, flawless nail artistry, and premium eyelash extensions—with
                        uncompromising hygiene, safety, and professional care. We are dedicated to providing a
                        personalized experience from consultation to aftercare, focusing on every detail to ensure
                        comfort and perfection. Our expert team utilizes modern techniques and high-quality products
                        to create confident, flawless transformations tailored to your unique beauty.
                    </p>
                    <a href="{{ url('/book-appointment') }}" class="theme-btn">Booking Appointment<i class="far fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="banner__two-right">
                    <img class="img__full" src="{{ asset('assets/img/Gemini_Generated_Image_hur36ohur36ohur3.png') }}" alt="Artistry" loading="lazy" decoding="async">
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
        
        // Modal logic
        window.openImageModal = function(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
            myModal.show();
        };

        // ==========================================
        // 1. SEAMLESS CATEGORY SLIDER SCROLL LOGIC
        // ==========================================
        const catSlider = document.getElementById('categorySliderDrag');
        let isCatDown = false, isCatHovered = false, catStartX, catScrollLeft, catRafId;
        let catAutoScrollSpeed = 0.5; // smoother speed
        let catCachedWidth = 0;

        if(catSlider) {
            let isCatDragging = false;
            
            const updateCatWidth = () => {
                const items = catSlider.children;
                const setLength = Math.floor(items.length / 4); 
                if(setLength === 0) return 0;
                let w = 0;
                for (let i = 0; i < setLength; i++) {
                    w += items[i].offsetWidth + 20; // 20px is flex gap
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
                isCatDown = true;
                isCatHovered = true; 
                isCatDragging = false;
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

            // Click to Open Modal Handling
            catSlider.addEventListener('click', (e) => {
                if (isCatDragging || e.target.closest('.explore-link')) return;
                const card = e.target.closest('.category-card-ui');
                if (card && card.dataset.img) {
                    openImageModal(card.dataset.img);
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

        // ==========================================
        // 2. SWITCH CATEGORY LOGIC (Optimized)
        // ==========================================
        window.switchCategory = function(targetId) {
            document.querySelectorAll('.category-card-ui.active-tab').forEach(el => el.classList.remove('active-tab'));
            document.querySelectorAll('.category-card-ui[data-card-id="' + targetId + '"]').forEach(el => el.classList.add('active-tab'));

            // Find current active section and stop its animation
            const currentActiveSection = document.querySelector('.marquee-display-section.active-section');
            if (currentActiveSection) {
                currentActiveSection.classList.remove('active-section');
                const marqueeInner = currentActiveSection.querySelector('.service-marquee');
                if(marqueeInner && marqueeInner.rafId) {
                    cancelAnimationFrame(marqueeInner.rafId);
                }
            }
            
            // Show new marquee and START it
            const targetSection = document.getElementById(targetId + '-marquee');
            if(targetSection) {
                targetSection.classList.add('active-section');
                const marquee = targetSection.querySelector('.service-marquee');
                if (marquee) {
                    marquee.dataset.init = 'false';
                    setTimeout(() => {
                        initMarqueeInstance(marquee);
                    }, 50); 
                }
            }
        };

        // ==========================================
        // 3. MARQUEE ENGINE
        // ==========================================
        function initMarqueeInstance(container) {
            const track = container.querySelector('.marquee-track');
            if (!track || container.dataset.init === 'true') return;

            let speed = parseFloat(container.dataset.speed || '0.8');
            let state = { isHovered: false, isDragging: false, startX: 0, scrollLeft: 0, cachedWidth: 0 };

            const updateWidth = () => {
                const items = track.children;
                const setLength = Math.floor(items.length / 12); 
                if(setLength === 0) return 0;
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

            // Clear old events
            container.onmouseenter = null; container.onmouseleave = null; container.onmousedown = null;
            container.onmousemove = null; window.onmouseup = null; container.ontouchstart = null;
            container.ontouchmove = null; container.ontouchend = null;

            // Bind Events
            container.onmouseenter = () => state.isHovered = true;
            container.onmouseleave = () => { state.isHovered = false; stopDrag(); };
            container.onmousedown = (e) => startDrag(e.pageX);
            container.onmousemove = (e) => { if(state.isDragging) e.preventDefault(); onDrag(e.pageX); };
            window.addEventListener('mouseup', stopDrag);

            container.addEventListener('touchstart', (e) => { state.isHovered = true; startDrag(e.touches[0].pageX); }, { passive: true });
            container.addEventListener('touchmove', (e) => onDrag(e.touches[0].pageX), { passive: true });
            container.addEventListener('touchend', () => { state.isHovered = false; stopDrag(); });

            // Setup & Play
            state.cachedWidth = updateWidth();
            container.scrollLeft = state.cachedWidth;
            
            if(container.rafId) cancelAnimationFrame(container.rafId);
            container.rafId = requestAnimationFrame(loop);
            container.dataset.init = 'true';
        }

        // Initialize First Tab Marquee on Load
        const activeMarquee = document.querySelector('.marquee-display-section.active-section .service-marquee');
        if(activeMarquee) {
            setTimeout(() => {
                initMarqueeInstance(activeMarquee);
            }, 100);
        }

    });
</script>

@endsection