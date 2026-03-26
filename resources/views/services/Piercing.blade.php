@extends('layouts.app')
@section('content')
	
<style>

    .new-btn
    {
    height: 45px;
    width: 210px;
    text-align: center;
    border-radius: 20px;
    }
   .marquee-wrapper {
    overflow: hidden;
    width: 100%;
    background: #fff;
    position: relative;
    padding: 20px 0;
    cursor: grab;
    user-select: none;
    -webkit-user-select: none;
    touch-action: pan-y; /* Allows vertical page scroll, captures horizontal swipe */
    scrollbar-width: none; /* Firefox */
}
.marquee-wrapper::-webkit-scrollbar {
    display: none; /* Chrome/Safari */
}
.marquee-wrapper.is-dragging {
    cursor: grabbing;
}

.marquee-track {
    display: flex;
    width: max-content;
    will-change: transform, scroll-position;
}

.service-slide-item {
    width: 350px;
    height: 450px;
    position: relative;
    flex-shrink: 0;
    margin-right: 2px; /* 2px seamless gap */
    background: #000;
}

.service-slide-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    pointer-events: none; /* Prevents image dragging ghost */
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
    font-family: 'Playfair Display', serif;
    font-weight: 600;
}

/* Responsive Breakpoints */
@media (max-width: 991px) {
    .service-slide-item { width: 300px; height: 400px; }
    .service-card-overlay h6 { font-size: 20px; }
}

@media (max-width: 768px) {
    .service-slide-item { width: 250px; height: 350px; }
    .service-card-overlay { padding: 20px; }
    .service-card-overlay h6 { font-size: 18px; margin-bottom: 10px; }
    .enquiry-btn-gold { padding: 8px 16px !important; font-size: 11px !important; }
}

    .banner__slide-area-image {
        will-change: transform;
    }
</style>
<!-- Page Banner Start -->
<div class="home__banner">
  <div class="banner__slide swiper banner-slide">
    <div class="swiper-wrapper">

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/ChatGPT Image Mar 6, 2026, 11_42_04 AM.png')}}'); 
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
             style="background-image: url('{{ asset ('assets/img/bg/piercing banner 2.png')}}'); 
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
<!-- Page Banner End -->
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
                        <!-- <span class="subtitle__two">Our Journey</span> -->
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

        {{-- Category Image Cards (Bootstrap Native) --}}
        <div class="row g-4 mb-4">
            {{-- Category 1: Basic Piercings --}}
            <div class="col-lg-4 col-md-6">
                <div role="button" data-bs-toggle="collapse" data-bs-target="#basic-collapse" aria-expanded="false" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark">
                    <img src="{{ asset('assets/img/gallery/Ear lobe piercing.webp') }}" class="card-img" alt="Basic Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                        <h3 class="fs-4 fw-bold text-white mb-1">Basic Piercings</h3>
                        <p class="text-white-50 small mb-3">Standard Lobe, Helix & More</p>
                        <div class="d-flex align-items-center text-warning text-uppercase fw-bold" style="font-size: 0.85rem; letter-spacing: 1px;">
                            Explore Gallery <i class="far fa-long-arrow-right ms-2 fs-5"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 2: Wellness Piercings --}}
            <div class="col-lg-4 col-md-6">
                <div role="button" data-bs-toggle="collapse" data-bs-target="#wellness-collapse" aria-expanded="false" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark">
                    <img src="{{ asset('assets/img/gallery/2.webp') }}" class="card-img" alt="Wellness Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                        <h3 class="fs-4 fw-bold text-white mb-1">Wellness Piercings</h3>
                        <p class="text-white-50 small mb-3">Daith, Shen Men & Curative</p>
                        <div class="d-flex align-items-center text-warning text-uppercase fw-bold" style="font-size: 0.85rem; letter-spacing: 1px;">
                            Explore Gallery <i class="far fa-long-arrow-right ms-2 fs-5"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Category 3: Needle Piercings --}}
            <div class="col-lg-4 col-md-6">
                <div role="button" data-bs-toggle="collapse" data-bs-target="#needle-collapse" aria-expanded="false" class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 text-bg-dark">
                    <img src="{{ asset('assets/img/gallery/16706.webp') }}" class="card-img" alt="Needle Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;" loading="lazy" decoding="async">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4" style="background: linear-gradient(180deg, rgba(0,0,0,0) 30%, rgba(0,0,0,0.9) 100%);">
                        <h3 class="fs-4 fw-bold text-white mb-1">Needle Piercings</h3>
                        <p class="text-white-50 small mb-3">Septum, Nostril & Facial Art</p>
                        <div class="d-flex align-items-center text-warning text-uppercase fw-bold" style="font-size: 0.85rem; letter-spacing: 1px;">
                            Explore Gallery <i class="far fa-long-arrow-right ms-2 fs-5"></i>
                        </div>
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
                ['img' => 'assets/img/gallery/Ear lobe piercing.webp', 'title' => 'Ear Lobe Piercing'],
                ['img' => 'assets/img/gallery/20316.webp', 'title' => 'Upper Lobe Piercing'],
                ['img' => 'assets/img/gallery/24680.webp', 'title' => 'Helix Alignment'],
                ['img' => 'assets/img/gallery/16706.webp', 'title' => 'Tragus Placement'],
            ],
            'wellness-collapse' => [
                ['img' => 'assets/img/gallery/2.webp', 'title' => 'Daith Wellness'],
                ['img' => 'assets/img/gallery/24588.webp', 'title' => 'Shen Men Point'],
                ['img' => 'assets/img/gallery/6.webp', 'title' => 'Septum Artistry'],
                ['img' => 'assets/img/gallery/5.webp', 'title' => 'Nostril Precision'],
            ],
            'needle-collapse' => [
                ['img' => 'assets/img/gallery/6.webp', 'title' => 'Septum Art'],
                ['img' => 'assets/img/gallery/5.webp', 'title' => 'Nostril Precision'],
                ['img' => 'assets/img/gallery/4.webp', 'title' => 'Tragus Care'],
                ['img' => 'assets/img/gallery/Ear lobe piercing.webp', 'title' => 'Lobe Mastery'],
            ]
        ];
    @endphp
@foreach($portfolioCategories as $id => $items)
    <div id="{{ $id }}" class="collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#portfolioAccordion">
        <div class="services__area bg-white">
            <div class="container-fluid p-0"> 
                <div class="marquee-wrapper service-marquee" data-speed="0.8">
                    <div class="marquee-track">
                        @php 
                            // Triple loop for seamless infinite scrolling
                            $loopItems = array_merge($items, $items, $items, $items); 
                        @endphp
                        
                        @foreach ($loopItems as $item)
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
                        <img class="img__full" src="{{ asset('assets/img/Gemini_Generated_Image_qrb1slqrb1slqrb1.png') }}" alt="">
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
    function openImageModal(imageSrc) {
        document.getElementById('modalImage').src = imageSrc;
        
        // Bootstrap modal ko trigger karna
        var myModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
        myModal.show();
    }

    document.addEventListener('DOMContentLoaded', () => {
    
    const initMarquee = (container) => {
        const track = container.querySelector('.marquee-track');
        if (!track || container.dataset.init === 'true') return;

        let speed = parseFloat(container.dataset.speed || '0.8');
        let state = {
            isHovered: false,
            isDragging: false,
            startX: 0,
            scrollLeft: 0,
            cachedWidth: 0,
            rafId: null
        };

        // Width Calculation
        const updateWidth = () => {
            const items = track.children;
            const setLength = Math.floor(items.length / 4); // Divided by 4 as we merged 4 times for safety margin
            if(setLength === 0) return 0;
            
            let w = 0;
            for (let i = 0; i < setLength; i++) {
                w += items[i].offsetWidth + 2; // +2px margin-right
            }
            return w;
        };

        // Core Animation Loop
        const loop = () => {
            if (!state.isHovered && !state.isDragging && state.cachedWidth > 0) {
                container.scrollLeft += speed;
                
                // Seamless Infinite Loop Logic
                if (container.scrollLeft >= state.cachedWidth * 2) {
                    container.scrollLeft -= state.cachedWidth;
                } else if (container.scrollLeft <= 0) {
                    container.scrollLeft += state.cachedWidth;
                }
            }
            state.rafId = requestAnimationFrame(loop);
        };

        // --- Drag & Swipe Events ---
        const startDrag = (x) => {
            state.isDragging = true;
            container.classList.add('is-dragging');
            state.startX = x - container.offsetLeft;
            state.scrollLeft = container.scrollLeft;
        };

        const onDrag = (x) => {
            if (!state.isDragging) return;
            const walk = (x - container.offsetLeft - state.startX) * 1.5; // Swipe sensitivity
            container.scrollLeft = state.scrollLeft - walk;
        };

        const stopDrag = () => {
            state.isDragging = false;
            container.classList.remove('is-dragging');
        };

        // Mouse Events
        container.addEventListener('mouseenter', () => state.isHovered = true);
        container.addEventListener('mouseleave', () => { state.isHovered = false; stopDrag(); });
        container.addEventListener('mousedown', (e) => startDrag(e.pageX));
        container.addEventListener('mousemove', (e) => { if(state.isDragging) e.preventDefault(); onDrag(e.pageX); });
        window.addEventListener('mouseup', stopDrag);

        // Touch Events (Mobile) - using passive: true for scroll performance
        container.addEventListener('touchstart', (e) => { state.isHovered = true; startDrag(e.touches[0].pageX); }, { passive: true });
        container.addEventListener('touchmove', (e) => onDrag(e.touches[0].pageX), { passive: true });
        container.addEventListener('touchend', () => { state.isHovered = false; stopDrag(); });

        // Initialize
        const setup = () => {
            state.cachedWidth = updateWidth();
            container.scrollLeft = state.cachedWidth;
        };

        setup();
        state.rafId = requestAnimationFrame(loop);
        container.dataset.init = 'true';

        // Recalculate on window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(setup, 150); // Debounce resize to save CPU
        });
    };

    // Initialize Marquees when Accordion opens (fixes width = 0 issue)
    document.querySelectorAll('.collapse').forEach(collapseEl => {
        collapseEl.addEventListener('shown.bs.collapse', () => {
            const marquee = collapseEl.querySelector('.service-marquee');
            if(marquee) {
                marquee.dataset.init = 'false'; // Force re-init
                initMarquee(marquee);
            }
        });
    });

    // Initialize marquees that are already visible on load
    document.querySelectorAll('.collapse.show .service-marquee').forEach(initMarquee);
});
</script>

@endsection