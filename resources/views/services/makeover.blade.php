@extends('layouts.app')
@section('content')
	
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
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <h2>Our Beauty & Makeover Services</h2>
                <p class="text-muted">
                    Discover our complete range of beauty, hair and makeover services designed for everyday care and special occasion looks.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">

            {{-- Threading --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="\assets\img\services\threding.jpg" alt="Threading">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Threading</a></h4>
                        <p class="service-short-desc">
                            Clean and precise facial grooming for a neat and polished everyday look.
                        </p>

                        <ul class="service-sublist">
                            <li>Eyebrows</li>
                            <li>Upper Lip</li>
                            <li>Chin</li>
                            <li>Sides</li>
                            <li>Cheeks</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Neck</li>
                                <li>Forehead</li>
                                <li>Full Face</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Threading"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Waxing --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/wax.jpg" alt="Waxing">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Waxing</a></h4>
                        <p class="service-short-desc">
                            Smooth skin care services for face and body with clean and comfortable finishing.
                        </p>

                        <ul class="service-sublist">
                            <li>Eyebrows</li>
                            <li>Upper Lip</li>
                            <li>Chin</li>
                            <li>Sides</li>
                            <li>Cheeks</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Neck</li>
                                <li>Full Face</li>
                                <li>Full Arm / Half Arm</li>
                                <li>Underarm</li>
                                <li>Full Leg / Half Leg</li>
                                <li>Back / Chest</li>
                                <li>Bikini / Hollywood / Brazilian</li>
                                <li>Full Body Wax</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Waxing"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Eye Treatments --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/eye.jpg" alt="Eye Treatments">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Eye Treatments</a></h4>
                        <p class="service-short-desc">
                            Lash and brow enhancement services to define and elevate your overall look.
                        </p>

                        <ul class="service-sublist">
                            <li>Eyebrow Tinting</li>
                            <li>Eyelash Tinting</li>
                            <li>Thread & Tint</li>
                            <li>Wax & Tint</li>
                            <li>Eyelash Extensions</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Semi-Permanent Eyelashes</li>
                                <li>Lash Removal</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Eye Treatments"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Massage --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/massage.png" alt="Massage">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Massage</a></h4>
                        <p class="service-short-desc">
                            Relaxing massage treatments designed to ease stress and reduce body tension.
                        </p>

                        <ul class="service-sublist">
                            <li>Neck Massage</li>
                            <li>Back Massage</li>
                            <li>Shoulder Massage</li>
                            <li>Neck, Back & Shoulders</li>
                            <li>Full Body Massage</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Personalized Relaxation Sessions</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Massage"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Facials --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/facial.png" alt="Facials">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Facials</a></h4>
                        <p class="service-short-desc">
                            Skin care treatments for cleansing, glow and a refreshed appearance.
                        </p>

                        <ul class="service-sublist">
                            <li>Mini Facial</li>
                            <li>Deep Cleanse Facial</li>
                            <li>Herbal Facial</li>
                            <li>Gold Facial</li>
                            <li>Glow Care Finish</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Skin Refresh Sessions</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Facials"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Semi Permanent Make-up --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/semi.png" alt="Semi Permanent Make-up">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Semi Permanent Make-up</a></h4>
                        <p class="service-short-desc">
                            Long-lasting beauty definition with expertly shaped brows, eyes and lips.
                        </p>

                        <ul class="service-sublist">
                            <li>Eyebrows</li>
                            <li>Ombre Brows</li>
                            <li>Eyebrow Refill</li>
                            <li>Eyeliner</li>
                            <li>Top & Bottom Eyeliner</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Lip Liner</li>
                                <li>Full Lip Colour</li>
                                <li>Microblading</li>
                                <li>Beauty Spot</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Semi Permanent Make-up"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Hair Treatments --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="/assets/img/services/hair.jpg" alt="Hair Treatments">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Hair Treatments</a></h4>
                        <p class="service-short-desc">
                            Styling, treatment and finishing services for complete professional hair care.
                        </p>

                        <ul class="service-sublist">
                            <li>Lace Weave</li>
                            <li>Wash & Set</li>
                            <li>Wash & Blow-Dry</li>
                            <li>Steam Treatment</li>
                            <li>Hair Treatment</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Curly Perm</li>
                                <li>Weave-on</li>
                                <li>Curly Hair</li>
                                <li>Ponytail</li>
                                <li>Afro Twist</li>
                                <li>Highlights</li>
                                <li>Straight Bonding</li>
                                <li>Trim</li>
                                <li>Cornrows</li>
                                <li>Micro-bonding</li>
                                <li>Relaxer</li>
                                <li>Gel Twist</li>
                                <li>Front Lace Closure</li>
                                <li>Front Lace Wig</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Hair Treatments"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Braids --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="{{ asset('assets/img/services/braids.jpg') }}" alt="Braids">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Braids</a></h4>
                        <p class="service-short-desc">
                            Stylish braid options for protective looks and statement hair styling.
                        </p>

                        <ul class="service-sublist">
                            <li>Box Braids</li>
                            <li>Goddess Braids</li>
                            <li>Knotless Braids</li>
                            <li>Butterfly Locks</li>
                            <li>Single Braids</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Custom Styling Finish</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Braids"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tooth Gems --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="services__page-item service-card-item">
                    <div class="service-card-image">
                        <img src="{{ asset('assets/img/services/tooth-gems.jpg') }}" alt="Tooth Gems">
                    </div>
                    <div class="services__page-item-content">
                        <h4><a href="javascript:void(0)">Tooth Gems</a></h4>
                        <p class="service-short-desc">
                            Add a stylish sparkle to your smile with gem and temporary design options.
                        </p>

                        <ul class="service-sublist">
                            <li>Small Gem</li>
                            <li>Big Gem</li>
                            <li>Extra Big Gem</li>
                            <li>Temporary Tattoo</li>
                            <li>Beauty Accent Styling</li>
                        </ul>

                        <div class="service-more-content">
                            <ul class="service-sublist pt-0">
                                <li>Custom Gem Placement</li>
                            </ul>
                        </div>

                        <div class="service-btn-group">
                            <a href="javascript:void(0)" class="simple-btn service-toggle-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                            <a href="javascript:void(0)"
                               class="theme-btn-sm get-price-btn"
                               data-service="Tooth Gems"
                               data-bs-toggle="modal"
                               data-bs-target="#getPriceModal">
                                Get Price
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Get Price Modal Start -->
<div class="modal fade" id="getPriceModal" tabindex="-1" aria-labelledby="getPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content get-price-modal-content border-0">
            <div class="modal-header border-0 pb-0">
                <div>
                    <h4 class="modal-title mb-1" id="getPriceModalLabel">Get Price</h4>
                    <p class="text-muted mb-0">Fill in your details and our team will contact you.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body pt-3">
                <form action="{{ url('/service-price-enquiry') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Selected Service</label>
                        <input type="text" class="form-control" id="selectedServiceInput" name="service" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" name="message" rows="4" placeholder="Write your requirement or preferred service details"></textarea>
                    </div>

                    <button type="submit" class="theme-btn w-100">
                        Submit Enquiry <i class="far fa-angle-double-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Get Price Modal End -->

<style>
    .service-card-item {
        height: 100%;
        transition: all 0.35s ease;
        overflow: hidden;
    }

    .service-card-item:hover {
        transform: translateY(-6px);
    }

    .service-card-image {
        width: 100%;
        height: 230px;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
    }

    .service-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
        display: block;
    }

    .service-card-item:hover .service-card-image img {
        transform: scale(1.06);
    }

    .services__page-item-content {
        padding: 25px;
    }

    .service-short-desc {
        margin-bottom: 14px;
    }

    .service-sublist {
        list-style: none;
        padding: 0;
        margin: 0 0 18px 0;
    }

    .service-sublist li {
        position: relative;
        padding-left: 18px;
        margin-bottom: 8px;
        color: #666;
        font-size: 15px;
        line-height: 1.7;
    }

    .service-sublist li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 11px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #c98a52;
    }

    .service-more-content {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.45s ease, opacity 0.35s ease, margin-top 0.35s ease;
    }

    .service-card-item.active .service-more-content {
        max-height: 500px;
        opacity: 1;
        margin-top: 8px;
    }

    .service-toggle-btn {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .service-card-item.active .service-toggle-btn i {
        transform: rotate(90deg);
        transition: 0.3s ease;
    }

    .services__page-item-content h4 a {
        pointer-events: none;
    }

    .service-btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        margin-top: 15px;
    }

    .theme-btn-sm {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #c98a52;
        color: #fff;
        padding: 9px 18px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 6px;
        transition: 0.3s ease;
        text-decoration: none;
        border: 1px solid #c98a52;
    }

    .theme-btn-sm:hover {
        background: #b87943;
        color: #fff;
    }

    .get-price-modal-content {
        border-radius: 16px;
        padding: 8px;
    }

    .get-price-modal-content .form-control {
        min-height: 48px;
        border-radius: 8px;
        box-shadow: none;
    }

    .get-price-modal-content textarea.form-control {
        min-height: 120px;
    }

    .get-price-modal-content .form-label {
        font-weight: 600;
        margin-bottom: 8px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButtons = document.querySelectorAll('.service-toggle-btn');
        const priceButtons = document.querySelectorAll('.get-price-btn');
        const selectedServiceInput = document.getElementById('selectedServiceInput');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const card = this.closest('.service-card-item');
                const isActive = card.classList.contains('active');

                if (isActive) {
                    card.classList.remove('active');
                    this.innerHTML = 'Read More <i class="far fa-angle-double-right"></i>';
                } else {
                    card.classList.add('active');
                    this.innerHTML = 'Show Less <i class="far fa-angle-double-right"></i>';
                }
            });
        });

        priceButtons.forEach(button => {
            button.addEventListener('click', function () {
                const serviceName = this.getAttribute('data-service');
                selectedServiceInput.value = serviceName;
            });
        });
    });
</script>
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
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_hur36ohur36ohur3.png') }}" alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg" style="margin-bottom: 160px;width: 77%;margin-left: 69px;">
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