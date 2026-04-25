@extends('layouts.app')
@section('content')

<style>
    /* ==========================================
    1. UNIVERSAL OPTIMIZED SLIDER CSS
    ============================================= */
    .slider-container-wrapper {
        position: relative;
        width: 100%;
    }
    .slider-container-wrapper.has-nav-buttons {
        padding: 0 45px; 
    }
    .slider-container-wrapper.no-nav-buttons {
        padding: 0; 
        display: flex;
        justify-content: center; 
    }

    .slider-wrapper {
        display: flex;
        gap: 2px; 
        overflow-x: auto;
        width: 100%;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE */
        padding-bottom: 20px; 
        padding-top: 10px;
    }
    .slider-wrapper::-webkit-scrollbar {
        display: none; /* Chrome/Safari */
    }

    /* Minimalist Arrow Buttons (< >) */
    .slider-control-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        color: #d4a373; 
        border: none;
        font-size: 38px; 
        font-weight: 300;
        cursor: pointer;
        z-index: 10;
        padding: 10px 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .slider-control-btn:hover {
        color: #111; 
        transform: translateY(-50%) scale(1.1); 
    }
    .slider-prev-btn { left: -5px; }
    .slider-next-btn { right: -5px; }

    /* ==========================================
    2. CATEGORY & SERVICE ITEMS UI (UPDATED FOR 11 ITEMS)
    ============================================= */
    .category-card-ui {
        flex: 0 0 calc((100% - 40px) / 3); /* EXACTLY 3 items */
        height: 380px;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        background: #000;
        border: 2px solid transparent; 
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        user-select: none; 
        
        /* Inactive State: Smaller & Dimmed to make active stand out */
        opacity: 0.55; 
        transform: scale(0.92);
        filter: grayscale(40%);
        scroll-snap-align: center; /* Snaps to center */
    }

    .category-card-ui:hover {
        opacity: 0.85;
        transform: scale(0.96);
        filter: grayscale(10%);
    }

    /* Active Tab Highlight - Large, Centered & Glowing */
    .category-card-ui.active-tab {
        border-color: #d4a373 !important; 
        opacity: 1; 
        transform: scale(1.05); /* Pops out */
        box-shadow: 0 15px 35px rgba(212, 163, 115, 0.3), inset 0 0 20px rgba(212, 163, 115, 0.2);
        z-index: 2;
        filter: grayscale(0%);
    }
    
    /* Make the title gold when active */
    .category-card-ui.active-tab h3 {
        color: #d4a373 !important;
        text-shadow: 0 2px 4px rgba(0,0,0,0.8);
    }

    /* Make the explore link look like a solid button when active */
    .category-card-ui.active-tab .explore-link {
        color: #111 !important;
        background: #d4a373;
        padding: 10px 20px;
        border-radius: 30px;
        margin-top: 10px;
        width: max-content;
        box-shadow: 0 4px 10px rgba(212, 163, 115, 0.3);
    }

    .category-card-ui.active-tab .explore-link:hover {
        background: #fff !important;
        color: #111 !important;
    }

    .category-card-ui img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 1;
        transition: transform 0.6s ease;
        pointer-events: none; 
    }
    .category-card-ui:hover img, .category-card-ui.active-tab img {
        transform: scale(1.05);
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
        pointer-events: auto; 
        padding: 10px 0;
        transition: all 0.3s ease;
    }
    .explore-link:hover { color: #fff; }

    /* SERVICE SLIDE ITEMS */
    .service-slide-item { 
        flex: 0 0 calc((100% - 40px) / 3); /* EXACTLY 3 items */
        height: 420px; 
        position: relative; 
        background: #000;
        /* border-radius: 12px; */
        overflow: hidden;
        scroll-snap-align: start;
    }
    .service-slide-item img { width: 100%; height: 100%; object-fit: cover; display: block; pointer-events: none; }
    .service-card-overlay { position: absolute; inset: auto 0 0 0; padding: 25px 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); color: #fff; text-align: center; }
    .service-card-overlay h6 { color: #fff; margin-bottom: 15px; font-size: 18px; font-weight: 600;}

    .new-btn {
        height: 40px;
        border-radius: 50px; 
        border:none; 
        font-size: 13px;
    }

    /* Responsive Design */
    @media (max-width: 991px) { 
        .category-card-ui, .service-slide-item { flex: 0 0 calc((100% - 20px) / 2); height: 350px; } 
        .slider-container-wrapper.has-nav-buttons { padding: 0 40px; }
        .slider-control-btn { font-size: 32px; }
    }
    @media (max-width: 768px) { 
        .category-card-ui, .service-slide-item { flex: 0 0 100%; height: 320px; } 
        .slider-container-wrapper.has-nav-buttons { padding: 0 30px; }
        .slider-control-btn { font-size: 28px; }
    }

    /* ==========================================
    3. SECTION DISPLAY & TABS UI
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

    .luxury-tabs { border-bottom: 2px solid #f0f0f0; padding-bottom: 10px; }
    .luxury-tabs .nav-link { color: #666; font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; border-radius: 30px; padding: 10px 24px; margin: 0 5px; border: 1px solid transparent; transition: all 0.3s ease; }
    .luxury-tabs .nav-link:hover { color: #d4a373; background-color: #fcf9f5; }
    .luxury-tabs .nav-link.active { background-color: #d4a373; color: #fff; box-shadow: 0 5px 15px rgba(212, 163, 115, 0.4); }
    
    .tab-content-box { background: #fff; border-radius: 20px; border: 1px solid #f0f0f0; overflow: hidden; }
    .service-hover-card { border: 1px solid #f8f9fa; background: #fafafa; transition: all 0.3s ease; }
    .service-hover-card:hover { border-color: #d4a373; background: #fff; transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.06) !important; }
    
    .enquire-btn-mini { font-size: 11px; font-weight: 700; letter-spacing: 0.5px; color: #d4a373; background: transparent; border: 1.5px solid #d4a373; border-radius: 30px; padding: 6px 14px; transition: all 0.3s ease; }
    .service-hover-card:hover .enquire-btn-mini { background: #d4a373; color: #fff; }
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
        'title' => 'Threading',
        'description' => 'Clean and precise facial grooming for a neat and polished everyday look.',
        'highlights' => ['Eyebrows & Upper Lip','Full Face Threading'],
        'main_image' => 'assets/img/gallery/15.webp',
        'main_alt' => 'Threading',
        'items' => [
            ['image' => 'assets/img/gallery/16.webp', 'title' => 'Eyebrows'],
            ['image' => 'assets/img/gallery/upper.webp', 'title' => 'Upper Lip'],
            ['image' => 'assets/img/gallery/chain.webp', 'title' => 'Chin'],
            ['image' => 'assets/img/gallery/side.webp', 'title' => 'Sides'],
            ['image' => 'assets/img/gallery/cheeks.webp', 'title' => 'Cheeks'],
            ['image' => 'assets/img/gallery/woman-going-through-microblading-procedure.webp', 'title' => 'Full Face'],
            ['image' => 'assets/img/gallery/neckt.png', 'title' => 'Neck'],
            ['image' => 'assets/img/gallery/close-up-young-woman-getting-eyebrow-treatment.webp', 'title' => 'Forehead'],
        ],
    ],
    [
        'id' => 'waxing-content',
        'tab' => 'Waxing',
        'title' => 'Waxing',
        'description' => 'Smooth skin care services for face and body with clean and comfortable finishing.',
        'highlights' => ['Full/Half Arm & Leg','Full Body Wax'],
        'main_image' => 'assets/img/gallery/17.webp',
        'main_alt' => 'Waxing',
        'items' => [
            ['image' => 'assets/img/gallery/22.webp', 'title' => 'Eyebrows'],
            ['image' => 'assets/img/gallery/cheeks.jpg', 'title' => 'Upper Lip'],
            ['image' => 'assets/img/gallery/fcb.webp', 'title' => 'Full Face'],
            ['image' => 'assets/img/gallery/23.webp', 'title' => 'Full Arm'],
            ['image' => 'assets/img/gallery/24.webp', 'title' => 'Underarm'],
            ['image' => 'assets/img/gallery/fullleg.webp', 'title' => 'Full Leg'],
            ['image' => 'assets/img/gallery/chin11.webp', 'title' => 'Chin'],
            ['image' => 'assets/img/gallery/sides.jpg', 'title' => 'Sides'],
            ['image' => 'assets/img/gallery/Chin-Hairs.webp', 'title' => 'Cheeks'],
            ['image' => 'assets/img/gallery/neck.jpg', 'title' => 'Neck'],
            ['image' => 'assets/img/gallery/half.jpg', 'title' => 'Half Arm'],
            ['image' => 'assets/img/gallery/fullarm.jpg', 'title' => 'Full Arm & Underarm'],
            ['image' => 'assets/img/gallery/halfl.jpg', 'title' => 'Half Leg'],
            ['image' => 'assets/img/gallery/back11.jpg', 'title' => 'Back'],
            ['image' => 'assets/img/gallery/fs.jpg', 'title' => 'Full Stomach'],
            ['image' => 'assets/img/gallery/Stomach-wax.webp', 'title' => 'Half Stomach'],
            ['image' => 'assets/img/gallery/hb.jpg', 'title' => 'Hollywood'],
            ['image' => 'assets/img/gallery/hw.jpg', 'title' => 'Hollywood plus back'],
            ['image' => 'assets/img/gallery/bw.jpg', 'title' => 'Brazilian'],
            ['image' => 'assets/img/gallery/bb.jpg', 'title' => 'Brazilian plus back'],
            ['image' => 'assets/img/gallery/ful.jpg', 'title' => 'Full Body Wax (inc chest, back & stomach)'],
            ['image' => 'assets/img/gallery/fuu.jpg', 'title' => 'Full Body Wax inc Hollywood / Brazilian'],
        ],
    ],
    [
        'id' => 'eye-content',
        'tab' => 'Eye Treatments',
        'title' => 'Eye Treatments',
        'description' => 'Lash and brow enhancement services to define and elevate your overall look.',
        'highlights' => ['Eyelash Extensions','Brow & Lash Tinting'],
        'main_image' => 'assets/img/gallery/bermix-studio-CqEGy4zAmbI-unsplash.webp',
        'main_alt' => 'Eye Treatments',
        'items' => [
            ['image' => 'assets/img/gallery/eyet1.webp', 'title' => 'Eyebrow Tinting'],
            ['image' => 'assets/img/gallery/Lash-Tinting.webp', 'title' => 'Eyelash Tinting'],
            ['image' => 'assets/img/gallery/tint.webp', 'title' => 'Thread & Tint'],
            ['image' => 'assets/img/gallery/waxtint.webp', 'title' => 'Wax & Tint'],
            ['image' => 'assets/img/gallery/lashrem.jpg', 'title' => 'Lash Removal'],
            ['image' => 'assets/img/gallery/semilash.webp', 'title' => 'Semi-Permanent Eyelashes'],
            ['image' => 'assets/img/gallery/Gemini_Generated_Image_auf42mauf42mauf4.webp', 'title' => 'Eyelashes Extensions'],
        ],
    ],
    [
        'id' => 'massage-content',
        'tab' => 'Massage',
        'title' => 'Massage',
        'description' => 'Relax and unwind with soothing massage services designed to ease tension and refresh your body.',
        'highlights' => ['Neck & Shoulders','Full Body Massage'],
        'main_image' => 'assets/img/gallery/28.webp',
        'main_alt' => 'Massage',
        'items' => [
            ['image' => 'assets/img/gallery/neckm.webp', 'title' => 'Neck Massage'],
            ['image' => 'assets/img/gallery/29.webp', 'title' => 'Back Massage'],
            ['image' => 'assets/img/gallery/28.webp', 'title' => 'Shoulders Massage'],
            ['image' => 'assets/img/gallery/side-view-woman-working-spa.webp', 'title' => 'Full Body'],
        ],
    ],
    [
        'id' => 'facials-content',
        'tab' => 'Facials',
        'title' => 'Facials',
        'description' => 'Glow-enhancing facial treatments that deeply cleanse, nourish, and revive tired skin.',
        'highlights' => ['Deep Cleanse Facial','Luxury Gold Facial'],
        'main_image' => 'assets/img/gallery/32.webp',
        'main_alt' => 'Facials',
        'items' => [
            ['image' => 'assets/img/gallery/32.webp', 'title' => 'Mini Facial'],
            ['image' => 'assets/img/gallery/deepc.webp', 'title' => 'Deep Cleanse Facial'],
            ['image' => 'assets/img/gallery/goldf.webp', 'title' => 'Gold Facial'],
            ['image' => 'assets/img/gallery/herball.webp', 'title' => 'Herbal Facial'],
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
            ['image' => 'assets/img/gallery/Ombre.webp', 'title' => 'Ombre'],
            ['image' => 'assets/img/gallery/25.webp', 'title' => 'Eyebrows Refill'],
            ['image' => 'assets/img/gallery/eyelinerr.jpg', 'title' => 'Eyeliner'],
            ['image' => 'assets/img/gallery/tbeye.webp', 'title' => 'Top & Bottom Eyeliner'],
            ['image' => 'assets/img/gallery/lipl.jpg', 'title' => 'Lip Liner'],
            ['image' => 'assets/img/gallery/fulllip.webp', 'title' => 'Full Lip Color'],
            ['image' => 'assets/img/gallery/Microblading.webp', 'title' => 'Microblading'],
            ['image' => 'assets/img/gallery/beauty.webp', 'title' => 'Beauty Spot'],
        ],
    ],
    [
        'id' => 'hair-content',
        'tab' => 'Hair',
        'title' => 'Hair Treatments',
        'description' => 'Professional styling, treatments, and hair transformations tailored to your look.',
        'highlights' => ['Wash, Cut & Style','Highlights & Treatments'],
        'main_image' => 'assets/img/gallery/37.webp',
        'main_alt' => 'Hair',
        'items' => [
            ['image' => 'assets/img/gallery/39.webp', 'title' => 'Lace Weave'],
            ['image' => 'assets/img/gallery/wash.webp', 'title' => 'Wash & Set'],
            ['image' => 'assets\img\washdry.webp', 'title' => 'Wash & Blow-Dry'],
            ['image' => 'assets/img/gallery/steam.jpg', 'title' => 'Steam'],
            ['image' => 'assets/img/gallery/hair treatment.webp', 'title' => 'Hair Treatment'],
            ['image' => 'assets/img/gallery/Curly1.jpg', 'title' => 'Curly Perm'],
            ['image' => 'assets/img/gallery/weaveon.jpg', 'title' => 'Weave-on'],
            ['image' => 'assets/img/gallery/curly.jpg', 'title' => 'Curly Hair'],
            ['image' => 'assets/img/gallery/pony.jpg', 'title' => 'Ponytail'],
            ['image' => 'assets/img/gallery/afro.jpg', 'title' => 'Afro Twist'],
            ['image' => 'assets/img/gallery/highh.webp', 'title' => 'Highlights'],
            ['image' => 'assets/img/gallery/straight.jpg', 'title' => 'Straight-Bonding'],
            ['image' => 'assets/img/gallery/trim.jpg', 'title' => 'Trim'],
            ['image' => 'assets/img/gallery/corn.jpg', 'title' => 'Cornrows'],
            ['image' => 'assets/img/gallery/micro.jpg', 'title' => 'Micro-Bonding'],
            ['image' => 'assets/img/gallery/relaxx.jpg', 'title' => 'Relaxer'],
            ['image' => 'assets/img/gallery/gellt.jpg', 'title' => 'Gel Twist'],
            ['image' => 'assets/img/gallery/front.jpg', 'title' => 'Front Lace Closure'],
            ['image' => 'assets/img/gallery/fl.jpg', 'title' => 'Front Lace Wig'],
        ],
    ],
    [
        'id' => 'braids-content',
        'tab' => 'Braids',
        'title' => 'Braids',
        'description' => 'Stylish and protective braid options designed for beauty, comfort, and personality.',
        'highlights' => ['Box & Knotless Braids','Goddess Braids'],
        'main_image' => 'assets/img/gallery/hair braids.webp',
        'main_alt' => 'Braids',
        'items' => [
            ['image' => 'assets/img/gallery/box1.webp', 'title' => 'Box Braids'],
            ['image' => 'assets/img/gallery/god1.webp', 'title' => 'Goddess Braids'],
            ['image' => 'assets/img/gallery/Knotless.webp', 'title' => 'Knotless Braids'],
            ['image' => 'assets/img/gallery/Butterfly.webp', 'title' => 'Butterfly Locks'],
            ['image' => 'assets/img/gallery/br12.jpg', 'title' => 'Single Braids'],
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
            ['image' => 'assets/img/gallery/front-view-woman-posing-with-dental-gems.webp', 'title' => 'Extra Big Gem'],
            ['image' => 'assets/img/gallery/front-view-man-posing-with-dental-gems.webp', 'title' => 'Temporary Tattoo'],
        ],
    ],
    [
        'id' => 'nails-content',
        'tab' => 'Nails',
        'title' => 'Nails',
        'description' => 'Modern nail extensions, polish, manicure, and pedicure services for every occasion.',
        'highlights' => ['Acrylic & Gel Extensions', 'Custom 3D Nail Art', 'Ombre & Powder Colour'],
        'main_image' => 'assets/img/bg/NailExtensions.png',
        'main_alt' => 'Nails',
        'categories' => [
            [
                'name' => 'NORMAL POLISH',
                'image' => 'assets/img/gallery/npn.jpg',
                'services' => [
                    ['name' => 'Full Set'],
                    ['name' => 'Infill'],
                    ['name' => 'Take off & New Set'],
                    ['name' => 'Normal Polish Toe'],
                    ['name' => 'Normal Polish Nail'],
                    ['name' => 'Manicure Normal Polish'],
                    ['name' => 'Pedicure'],
                    ['name' => 'Two Big Toe Normal Polish'],
                ]
            ],
            [
                'name' => 'ACRYLIC & SHELLAC',
                'image' => 'assets/img/gallery/8.webp',
                'services' => [
                    ['name' => 'Full set Shellac'],
                    ['name' => 'Full set Shellac with White Tip'],
                    ['name' => 'Infill'],
                    ['name' => 'Take off & new set'],
                    ['name' => 'Manicure with Shellac'],
                    ['name' => 'Pedicure with Shellac'],
                    ['name' => 'Shellac on nature nails'],
                    ['name' => 'Take off Shellac new one'],
                    ['name' => 'Two Big toe with Shellac'],
                    ['name' => 'Take of Shellac'],
                    ['name' => 'Take of Acrylic'],
                    ['name' => 'Take of Acrylic & new Set'],
                ]
            ],
            [
                'name' => 'OMBRE',
                'image' => 'assets/img/gallery/9.webp',
                'services' => [
                    ['name' => 'Full set'],
                    ['name' => 'Infill same colour'],
                    ['name' => 'Take off & new set'],
                ]
            ],
            [
                'name' => 'POWDER COLOUR',
                'image' => 'assets/img/gallery/10.webp',
                'services' => [
                    ['name' => 'Full set'],
                    ['name' => 'Infill Same Colour'],
                    ['name' => 'Take off & new set'],
                    ['name' => 'Full set powder colour white tip'],
                    ['name' => 'Infill White tip'],
                    ['name' => 'Fullset Toe powder'],
                    ['name' => 'Fullset Toe white tip'],
                    ['name' => 'Take off acrylic only'],
                    ['name' => 'Long Nails extra'],
                    ['name' => 'Extra cost for design'],
                ]
            ]
        ]
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
            ['image' => 'assets/img/gallery/henna1.webp', 'title' => 'Bridal Henna'],
            ['image' => 'assets/img/gallery/13.webp', 'title' => 'Minimalist Henna'],
            ['image' => 'assets/img/gallery/HandMandalas.webp', 'title' => 'Hand Mandalas'],
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

        @php
            $catCount = count($serviceCategories);
        @endphp

        <div class="slider-container-wrapper {{ $catCount > 3 ? 'has-nav-buttons' : 'no-nav-buttons' }} mb-2">
            @if($catCount > 3)
            <button class="slider-control-btn slider-prev-btn" onclick="scrollSlider('categorySliderDrag', -1)">
                <i class="far fa-chevron-left"></i>
            </button>
            @endif

            <div class="slider-wrapper" id="categorySliderDrag">
                @foreach ($serviceCategories as $index => $category)
                    <div class="category-card-ui {{ $index === 0 ? 'active-tab' : '' }}" data-card-id="{{ $category['id'] }}" data-img="{{ asset($category['main_image']) }}">
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

            @if($catCount > 3)
            <button class="slider-control-btn slider-next-btn" onclick="scrollSlider('categorySliderDrag', 1)">
                <i class="far fa-chevron-right"></i>
            </button>
            @endif
        </div>

        <div id="marquee-master-container">
            @foreach ($serviceCategories as $index => $category)
                <div id="{{ $category['id'] }}-marquee" class="marquee-display-section {{ $index === 0 ? 'active-section' : '' }}">
                    <div class="text-center mb-4 mt-2">
                        <h3 class="fw-bold text-dark">{{ $category['title'] }} Collection</h3>
                    </div>

                    @if(isset($category['categories']))
                        {{-- NAILS UI (Untouched) --}}
                        <div class="container mt-5 mb-5">
                            <ul class="nav nav-pills justify-content-center mb-4 luxury-tabs" id="nails-tab" role="tablist">
                                @foreach($category['categories'] as $catIndex => $subCat)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $catIndex == 0 ? 'active' : '' }}" id="tab-nails-{{ $catIndex }}" data-bs-toggle="pill" data-bs-target="#pane-nails-{{ $catIndex }}" type="button" role="tab" aria-selected="{{ $catIndex == 0 ? 'true' : 'false' }}">
                                            {{ $subCat['name'] }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content shadow-sm tab-content-box" id="nails-tabContent">
                                @foreach($category['categories'] as $catIndex => $subCat)
                                    <div class="tab-pane fade {{ $catIndex == 0 ? 'show active' : '' }}" id="pane-nails-{{ $catIndex }}" role="tabpanel" aria-labelledby="tab-nails-{{ $catIndex }}">
                                        
                                        <div class="row g-0 align-items-stretch">
                                            <div class="col-lg-5 d-none d-lg-block">
                                                <img src="{{ asset($subCat['image']) }}" alt="{{ $subCat['name'] }}" style="width: 100%; height: 100%; object-fit: cover; min-height: 450px;">
                                            </div>
                                            
                                            <div class="col-lg-7 p-4 p-md-5 bg-white">
                                                <h3 class="mb-4" style="color: #2b2b2b; font-weight: 700;">{{ $subCat['name'] }} <span style="color: #d4a373;">Services</span></h3>
                                                
                                                <div class="row">
                                                    @foreach($subCat['services'] as $service)
                                                        <div class="col-md-6 mb-3">
                                                            <div class="d-flex justify-content-between align-items-center p-3 rounded-3 service-hover-card">
                                                                <span class="fw-semibold text-dark" style="font-size: 14px;">{{ $service['name'] }}</span>
                                                                <button class="enquire-btn-mini openInquiryModal" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="{{ $service['name'] }} - {{ $subCat['name'] }}" data-category="Makeover" data-sub-category="{{ $subCat['name'] }}">
                                                                    ENQUIRE
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
                    @elseif(isset($category['items']))
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
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" decoding="async">
                                        <div class="service-card-overlay">
                                            <h6>{{ $item['title'] }}</h6>
                                            <button class="theme-banner-btn openInquiryModal new-btn" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="{{ $item['title'] }}" data-category="Makeover" data-sub-category="{{ $category['title'] }}">
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
                    @endif
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
                    <img class="img__full" src="{{ asset('assets/img/makeover.webp') }}" alt="Artistry" loading="lazy" decoding="async">
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

        // Switch Category (Tabs) Logic
        window.switchCategory = function(targetId) {
            // Remove active classes
            document.querySelectorAll('.category-card-ui.active-tab').forEach(el => el.classList.remove('active-tab'));
            
            // Add active class to target
            const targetCard = document.querySelector('.category-card-ui[data-card-id="' + targetId + '"]');
            if (targetCard) {
                targetCard.classList.add('active-tab');
                
                // Center the active card in the slider
                const slider = document.getElementById('categorySliderDrag');
                if (slider) {
                    const scrollPos = targetCard.offsetLeft - (slider.clientWidth / 2) + (targetCard.clientWidth / 2);
                    slider.scrollTo({
                        left: scrollPos,
                        behavior: 'smooth'
                    });
                }
            }

            // Toggle sections
            const currentActiveSection = document.querySelector('.marquee-display-section.active-section');
            if (currentActiveSection) {
                currentActiveSection.classList.remove('active-section');
            }
            
            const targetSection = document.getElementById(targetId + '-marquee');
            if(targetSection) {
                targetSection.classList.add('active-section');
            }
        };

        // Center the first active tab on load
        setTimeout(() => {
            const firstActive = document.querySelector('.category-card-ui.active-tab');
            if (firstActive) {
                const slider = document.getElementById('categorySliderDrag');
                if (slider) {
                    const scrollPos = firstActive.offsetLeft - (slider.clientWidth / 2) + (firstActive.clientWidth / 2);
                    slider.scrollTo({ left: scrollPos, behavior: 'smooth' });
                }
            }
        }, 100);

        // Optimized Slider Navigation Logic (< > Buttons)
        window.scrollSlider = function(sliderId, direction) {
            const slider = document.getElementById(sliderId);
            if (!slider) return;
            
            // Get any slide item to calculate exact scroll distance
            const item = slider.querySelector('.service-slide-item') || slider.querySelector('.category-card-ui');
            if (!item) return;

            // scroll amount = (item width + 20px gap) * direction
            const scrollAmount = (item.offsetWidth + 20) * direction;
            
            slider.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        };

        // Open Modal from Image click on Categories
        
    });
</script>

@endsection