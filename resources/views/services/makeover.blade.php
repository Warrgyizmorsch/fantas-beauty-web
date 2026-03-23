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
</style>
	
<!-- Page Banner Start -->
<div class="home__banner">
  <div class="banner__slide swiper banner-slide">
    <div class="swiper-wrapper">

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/NailExtensions.png')}}'); 
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
                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                  Luxury Nail Art
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  From gel polish to detailed nail art — flawless finishing, long-lasting shine, and premium products.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/hair.png')}}'); 
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
                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                  Luxury Hair Styling
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  From precision fades to luxury hair treatments — flawless styling, long-lasting texture, and premium grooming products.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/Eyelashes.png')}}'); 
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
                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                  Luxury Eyelash
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  Natural to volume lashes — lightweight, comfortable, and styled to match your eye shape perfectly.
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
                            src="{{ asset('assets/img/Gemini_Generated_Image_xi7szfxi7szfxi7s.png') }}" 
                            alt="Fantas Tattoo & Piercing Studio"
                            class="img-fluid rounded shadow-lg"
                        >
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
                            Fantas Studio is your premium destination for comprehensive luxury makeovers, specializing in expert hair grooming, flawless nail artistry, and professional eyelash extensions and care. Our studio seamlessly blends artistry, strict hygiene, and precision to deliver stunning, tailored transformations that elevate your natural beauty and boost your confidence.                        
                        </p>

                        <p>
                            Every service at Fantas is performed by our team of highly skilled technicians and stylists. We prioritize comfort, safety, and perfection, utilizing only ultra-lightweight premium lash fibers, medical-grade hypoallergenic adhesives, top-tier nail products, and the latest modern hair and beauty techniques.                        
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
                                    style="max-width: 60px;"
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

        {{-- Horizontal Swipeable Menu (Pure Bootstrap, No CSS) --}}
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav flex-nowrap overflow-x-auto gap-2 pb-2" id="makeover-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap active" data-bs-toggle="pill" data-bs-target="#threading-content" type="button" role="tab">Threading</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#waxing-content" type="button" role="tab">Waxing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#eye-content" type="button" role="tab">Eye Treatments</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#massage-content" type="button" role="tab">Massage</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#facials-content" type="button" role="tab">Facials</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#spm-content" type="button" role="tab">Semi Permanent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#hair-content" type="button" role="tab">Hair</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#braids-content" type="button" role="tab">Braids</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#tooth-content" type="button" role="tab">Tooth Gems</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#nails-content" type="button" role="tab">Nails</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="pill" data-bs-target="#henna-content" type="button" role="tab">Henna</button>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Dynamic Content Area --}}
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="makeover-tabsContent">
                    
                    {{-- 1. THREADING --}}
                    <div class="tab-pane fade show active" id="threading-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/15.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Threading"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Precision Threading</h3>
                                    <p class="text-muted mb-4">Clean and precise facial grooming for a neat and polished everyday look.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Eyebrows & Upper Lip</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Full Face Threading</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-threading" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-threading">
                            <div id="carouselThreading" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/16.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrows</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/25.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Upper Lip</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/27.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Face</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Chin & Neck</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/21.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Sides & Cheeks</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Forehead</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Arrows --}}
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselThreading" data-bs-slide="prev" style="width: 5%;">
                                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselThreading" data-bs-slide="next" style="width: 5%;">
                                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- 2. WAXING --}}
                    <div class="tab-pane fade" id="waxing-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/17.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Waxing"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Luxury Waxing</h3>
                                    <p class="text-muted mb-4">Smooth skin care services for face and body with clean and comfortable finishing.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Full/Half Arm & Leg</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Full Body Wax</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-waxing" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-waxing">
                            <div id="carouselWaxing" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/22.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrows</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Upper Lip</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/30.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Face</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/23.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Arm</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/24.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Underarm</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/19.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Leg</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselWaxing" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselWaxing" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 3. EYE TREATMENTS --}}
                    <div class="tab-pane fade" id="eye-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/eye.jpg') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Eye Treatments"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Lash & Brow Artistry</h3>
                                    <p class="text-muted mb-4">Lash and brow enhancement services to define and elevate your overall look.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Eyelash Extensions</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Brow & Lash Tinting</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-eye" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-eye">
                            <div id="carouselEye" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/26.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrow Tinting</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/semi permanent makeup.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Thread & Tint</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/20.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Wax & Tint</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/jose-castillo-Nr9ZASY4Uz8-unsplash.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Lash Removal</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/27.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Semi-Permanent Eyelashes</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/bermix-studio-CqEGy4zAmbI-unsplash.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyelashes Extensions</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselEye" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselEye" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 4. MASSAGE --}}
                    <div class="tab-pane fade" id="massage-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/28.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Massage"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Relaxation Massage</h3>
                                    <p class="text-muted mb-4">Relaxing massage treatments designed to ease stress and reduce body tension.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Neck & Shoulders</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Full Body Massage</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-massage" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-massage">
                            <div id="carouselMassage" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/massage.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Neck Massage</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/29.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Back Massage</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/28.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Shoulders Massage</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    {{-- <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Chin & Neck</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/21.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Sides & Cheeks</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Forehead</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselMassage" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button> --}}
                                {{-- <button class="carousel-control-next" type="button" data-bs-target="#carouselMassage" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button> --}}
                            </div>
                        </div>
                    </div>

                    {{-- 5. FACIALS --}}
                    <div class="tab-pane fade" id="facials-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/32.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Facials"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Rejuvenating Facials</h3>
                                    <p class="text-muted mb-4">Deep skin care treatments designed for cleansing, restoring natural glow, and a refreshed appearance.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Deep Cleanse Facial</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Luxury Gold Facial</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-facials" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-facials">
                            <div id="carouselFacials" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/32.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Mini Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/facial.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Deep Cleanse Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/80369459.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Gold Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/herbal.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Herbal Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/facial.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Deep Cleanse Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/80369459.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Gold Facial</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFacials" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselFacials" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 6. SEMI PERMANENT MAKEUP --}}
                    <div class="tab-pane fade" id="spm-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/30.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="SPM"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Semi-Permanent Make-up</h3>
                                    <p class="text-muted mb-4">Wake up flawless. Long-lasting beauty definition with expertly shaped brows, eyeliner, and lip tinting.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Ombre Brows</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Lip & Eyeliner</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-spm" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-spm">
                            <div id="carouselSPM" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/semi permanent makeup.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrows</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Ombre</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi permanent makeup.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrows Refill</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/images.jpeg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyeliner</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/Liner1.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Top & Bottom Eyeliner</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/images (1).jpeg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Lip Liner</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Lip Collor</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/beauty.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Beauty Spot</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/25.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Microblading</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSPM" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselSPM" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 7. HAIR TREATMENTS --}}
                    <div class="tab-pane fade" id="hair-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/37.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Hair"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Premium Hair Care</h3>
                                    <p class="text-muted mb-4">Professional hair styling, coloring, deep treatments, and finishing services.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Wash, Cut & Style</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Highlights & Treatments</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-hair" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-hair">
                            <div id="carouselHair" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/39.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Lace Weave</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/wash.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Wash & Set</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/image.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Wash & Blow-Dry</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/36.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Stear</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/hair treatment.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Hair Treatment</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/hair braids.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Curly Perm</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/40.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Weave-on</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/frontals.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Front Lace Closure</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/41.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Curly Hair</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHair" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselHair" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 8. BRAIDS --}}
                    <div class="tab-pane fade" id="braids-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/hair braids.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Braids"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Custom Braiding</h3>
                                    <p class="text-muted mb-4">Stylish and protective braid options expertly crafted for long-lasting statement hair styling.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Box & Knotless Braids</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Goddess Braids</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-braids" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-braids">
                            <div id="carouselBraids" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/41.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Box Braids</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/hair braids.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Goddess Braids</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/39.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Knotless Braids</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/studio-shoot-girl-gray-dress-with-dreads-white-background.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Butterfly Locks</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/single.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Single Braids</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/gold.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Goddess Braids</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBraids" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselBraids" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 9. TOOTH GEMS --}}
                    <div class="tab-pane fade" id="tooth-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/front-view-woman-posing-with-dental-gems.jpg') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Tooth Gems"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Tooth Gems</h3>
                                    <p class="text-muted mb-4">Add a stylish sparkle to your smile with premium dental-grade gems and designs.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Small & Big Gems</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Custom Placement</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-tooth" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-tooth">
                            <div id="carouselTooth" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/42.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Small Gen</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/43.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Big Gen</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/front-view-woman-posing-with-dental-gems.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Small Gen</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    {{-- <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Chin & Neck</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/21.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Sides & Cheeks</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Forehead</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselTooth" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button> --}}
                                {{-- <button class="carousel-control-next" type="button" data-bs-target="#carouselTooth" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button> --}}
                            </div>
                        </div>
                    </div>

                    {{-- 10. NAILS --}}
                    <div class="tab-pane fade" id="nails-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/bg/NailExtensions.png') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Nails"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Luxury Nail Artistry</h3>
                                    <p class="text-muted mb-4">Immaculate manicures, pedicures, and intricate nail art using premium, long-lasting polishes.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Acrylic & Gel Extensions</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Custom 3D Nail Art</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-nails" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-nails">
                            <div id="carouselNails" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/8.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Set</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/11.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Take off & New Set</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/9.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Normal Polish Toe</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/12.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Normal Polish Nail</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/21.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Manicure Normal Polish</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Pedicure</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNails" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselNails" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    {{-- 11. HENNA --}}
                    <div class="tab-pane fade" id="henna-content" role="tabpanel">
                        <div class="card border-0 rounded-4 shadow-sm mb-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5"><img src="{{ asset('assets/img/gallery/16706.jpg.jpeg') }}" class="img-fluid w-100 rounded-start" style="height: 350px; object-fit: cover;" alt="Henna"></div>
                                <div class="col-lg-7 p-4 p-md-5">
                                    <h3 class="fw-bold mb-3">Traditional Henna Art</h3>
                                    <p class="text-muted mb-4">Intricate and beautiful organic Henna designs perfect for weddings, festivals, and personal expression.</p>
                                    <ul class="list-unstyled text-muted mb-4 row">
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Bridal Henna</li>
                                        <li class="col-md-6 mb-2"><i class="fas fa-check text-secondary me-2"></i> Minimalist Designs</li>
                                    </ul>
                                    <button class="theme-btn rounded-pill px-4 py-2 fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#slider-henna" aria-expanded="false">Explore More <i class="fas fa-chevron-down ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="slider-henna">
                            <div id="carouselHenna" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner rounded-4 shadow-sm bg-white">
                                    {{-- SLIDE 1 (Images 1, 2, 3) --}}
                                    <div class="carousel-item active">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/16.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Eyebrows">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Eyebrows</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/25.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Upper Lip">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Upper Lip</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/27.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Full Face">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Full Face</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- SLIDE 2 (Images 4, 5, 6) --}}
                                    <div class="carousel-item">
                                        <div class="row g-0"> 
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/34.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Chin & Neck">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Chin & Neck</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative border-end border-white border-2">
                                                <img src="{{ asset('assets/img/gallery/21.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Sides & Cheeks">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Sides & Cheeks</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 position-relative">
                                                <img src="{{ asset('assets/img/gallery/semi.png') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Forehead">
                                                <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-center">
                                                    <h6 class="text-white fw-bold mb-2">Forehead</h6>
                                                    <button class="theme-banner-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enquiry Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHenna" data-bs-slide="prev" style="width: 5%;"><span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselHenna" data-bs-slide="next" style="width: 5%;"><span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="inquiryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow rounded-4">
            <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                <h5 class="modal-title fw-bold text-dark">Book an Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Enter your mobile number">
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted small fw-bold">Service Details (Optional)</label>
                        <textarea class="form-control" rows="3" placeholder="Any specific requirements?"></textarea>
                    </div>
                    <button type="button" class="btn btn-dark w-100 rounded-pill py-2 fw-bold text-uppercase">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
                            At Fantas Studio, our mission is to deliver exceptional luxury makeover services—spanning expert hair grooming, flawless nail artistry, and premium eyelash extensions—with uncompromising hygiene, safety, and professional care. We are dedicated to providing a personalized experience from consultation to aftercare, focusing on every detail to ensure comfort and perfection. Our expert team utilizes modern techniques and high-quality products to create confident, flawless transformations tailored to your unique beauty.                        
                        </p>
                        <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                            {{-- From the moment of initial consultation to dedicated aftercare, our unwavering focus is on meticulously perfected details, absolute client comfort, and a tailored experience that reflects your unique style and vision. Our entire team of expert stylists, nail artists, and lash technicians utilizes modern techniques and only the highest-quality, professional products to ensure every service meets and exceeds the highest standards.                         --}}
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
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_hur36ohur36ohur3.png') }}" alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg" style="margin-bottom: 160px;width: 50%;margin-left: 46%;">
                </div>
            </div>
        </div>
    </div>
</div>
	
	<!-- Instagram Area Start -->	
	@include('component.instagram')
	<!-- Instagram Area End -->	
    
    <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 pb-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1); opacity: 1;"></button>
            </div>
            <div class="modal-body text-center pt-0">
                <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Preview" style="max-height: 85vh; object-fit: contain;">
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