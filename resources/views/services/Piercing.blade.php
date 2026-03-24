@extends('layouts.app')
@section('content')
	
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
<div class="services__area section-padding bg-white">
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
                    <img src="{{ asset('assets/img/gallery/Ear lobe piercing.png') }}" class="card-img" alt="Basic Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;">
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
                    <img src="{{ asset('assets/img/gallery/2.png') }}" class="card-img" alt="Wellness Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;">
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
                    <img src="{{ asset('assets/img/gallery/16706.jpg.jpeg') }}" class="card-img" alt="Needle Piercings" style="height: 420px; object-fit: cover; opacity: 0.85;">
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
            
    {{-- Basic Piercings Slider --}}
    <div id="basic-collapse" class="collapse" data-bs-parent="#portfolioAccordion">
        <div class="mb-5 mt-2">
            <div id="carouselBasic" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-lg rounded-5 overflow-hidden bg-white">
                    
                    {{-- Slide 1 (3 Images) --}}
                    <div class="carousel-item active">
                        <div class="row g-0"> 
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/Ear lobe piercing.png') }}" class="d-block w-100" alt="Ear Lobe" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Ear Lobe Piercing</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Ear Lobe Piercing" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/20316.jpg.jpeg') }}" class="d-block w-100" alt="Upper Lobe" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Upper Lobe</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Upper Lobe" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/24680.jpg.jpeg') }}" class="d-block w-100" alt="Helix" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Helix Alignment</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Helix Alignment" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 (3 Images) --}}
                    <div class="carousel-item">
                        <div class="row g-0">
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/16706.jpg.jpeg') }}" class="d-block w-100" alt="Tragus" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Tragus Placement</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Tragus Placement" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/Ear lobe piercing.png') }}" class="d-block w-100" alt="Conch" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Conch Piercing</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Conch Piercing" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/20316.jpg.jpeg') }}" class="d-block w-100" alt="Industrial" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Industrial Art</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Industrial Art" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasic" data-bs-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBasic" data-bs-slide="next" style="width: 5%;">
                    <span class="carousel-control-next-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Wellness Piercings Slider --}}
    <div id="wellness-collapse" class="collapse" data-bs-parent="#portfolioAccordion">
        <div class="mb-5 mt-2">
            <div id="carouselWellness" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-lg rounded-5 overflow-hidden bg-white">
                    
                    {{-- Slide 1 (3 Images) --}}
                    <div class="carousel-item active">
                        <div class="row g-0">
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/2.png') }}" class="d-block w-100" alt="Daith Piercing" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Daith Piercing</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Daith Piercing" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/24588.jpg.jpeg') }}" class="d-block w-100" alt="Shen Men" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Shen Men</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Shen Men" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/3.png') }}" class="d-block w-100" alt="Acupuncture Point" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Acupuncture Point</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Acupuncture Point" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 (3 Images) --}}
                    <div class="carousel-item">
                        <div class="row g-0">
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/46924.jpg.jpeg') }}" class="d-block w-100" alt="Wellness Curative" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Wellness Curative</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Wellness Curative" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/2.png') }}" class="d-block w-100" alt="Holistic Placement" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Holistic Placement</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Holistic Placement" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/24588.jpg.jpeg') }}" class="d-block w-100" alt="Healing Art" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Healing Art</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Healing Art" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselWellness" data-bs-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselWellness" data-bs-slide="next" style="width: 5%;">
                    <span class="carousel-control-next-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    {{-- Needle Piercings Slider --}}
    <div id="needle-collapse" class="collapse" data-bs-parent="#portfolioAccordion">
        <div class="mb-5 mt-2">
            <div id="carouselNeedle" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-lg rounded-5 overflow-hidden bg-white">
                    
                    {{-- Slide 1 (3 Images) --}}
                    <div class="carousel-item active">
                        <div class="row g-0">
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/6.png') }}" class="d-block w-100" alt="Septum" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Septum Art</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Septum Art" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/5.png') }}" class="d-block w-100" alt="Nostril" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Nostril Precision</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Nostril Precision" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/4.png') }}" class="d-block w-100" alt="Tragus" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Tragus Care</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Tragus Care" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 (3 Images) --}}
                    <div class="carousel-item">
                        <div class="row g-0">
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/16706.jpg.jpeg') }}" class="d-block w-100" alt="Custom Placement" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Custom Placement</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Custom Placement" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative border-end border-5 border-white">
                                <img src="{{ asset('assets/img/gallery/3.png') }}" class="d-block w-100" alt="Bridge Piercing" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Bridge Piercing</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Bridge Piercing" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                            <div class="col-4 position-relative">
                                <img src="{{ asset('assets/img/gallery/24680.jpg.jpeg') }}" class="d-block w-100" alt="Eyebrow Art" style="height: 500px; object-fit: cover;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); height: 50%;">
                                    <h5 class="text-white fw-bold mb-2">Eyebrow Art</h5>
                                    <div><button class="theme-btn btn-sm rounded-pill px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-service="Eyebrow Art" style="font-size: 0.8rem; padding-top: 8px !important; padding-bottom: 8px !important;">Enquiry Now <i class="far fa-angle-double-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNeedle" data-bs-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselNeedle" data-bs-slide="next" style="width: 5%;">
                    <span class="carousel-control-next-icon bg-dark bg-opacity-75 rounded-circle p-3 shadow-lg" aria-hidden="true" style="width: 2.5rem; height: 2.5rem;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

 {{-- @php
    $gallery = [
        ['img' => 'assets/img/gallery/16706.jpg.jpeg', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/20316.jpg.jpeg', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/24680.jpg.jpeg', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/46924.jpg.jpeg', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],

        ['img' => 'assets/img/gallery/24588.jpg.jpeg', 'title' => 'Nose Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/33258.jpg.jpeg', 'title' => 'Luxury Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
    ];
@endphp
@include('component.gallery') --}}

<div class="mission__area section-padding" style="background-color: #fdfbf7;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="mission__area-left">
                    <div class="mission__area-left-title">

                        {{-- Subtitle color adjusted --}}
                        <span class="subtitle__two" style="color: #d4a373;">Mission</span>
                        
                        {{-- Heading dark color --}}
                        <h2 class="text-dark mb-4">Artistry With Precision & Safety</h2>

                        {{-- Paragraphs with muted text for a softer look --}}
                        <p class="mb-25 text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                           At Fantas Studio, our mission is to deliver luxury body piercing artistry and premium piercing care services with uncompromising hygiene, safety, and professional excellence. We believe every client deserves a transformation that feels confident, clean, and truly personal.
                        </p>

                        <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                            From the moment of initial consultation to dedicated aftercare, our focus is meticulously on every detail, your absolute comfort, and a tailored experience that reflects your unique style. Our expert, certified piercing technicians utilize modern techniques and only high-quality, hypoallergenic professional products (including 14k gold, implant-grade titanium, and precious stones) to ensure every service meets the highest standards.
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
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_qrb1slqrb1slqrb1.png') }}" alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg" style="margin-bottom: 160px;width: 50%;margin-left: 46%;">
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
                <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Preview" style="max-height: 85vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

{{-- INQUIRY FORM --}}
<x-inquiry-modal />

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