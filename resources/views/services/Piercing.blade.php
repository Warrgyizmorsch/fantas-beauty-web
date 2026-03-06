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
<div class="services__area section-padding bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8">
                <!-- <span class="subtitle__two text-primary">What We Do</span> -->
                <h2>Our Premium Specialties</h2>
                <p class="text-muted">Explore our wide range of luxury body piercing artistry and expert care services, executed with uncompromising hygiene and absolute precision.</p>
            </div>
        </div>

        <div class="row">
            {{-- Service Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/round-earrings.png') }}" alt="Custom Tattoos" width="50">
                    </div>
                    <h4>Curated Ear Stacks</h4>
                    <p class="text-muted mb-0">From elegant minimalism to intricate, unique combinations of studs, hoops, and chains, we help you define your personal ear aesthetic with premium, personalized styling.</p>
                </div>
            </div>
            
            {{-- Service Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/piercing.png') }}" alt="Body Piercing" width="50">
                    </div>
                    <h4>Delicate Facial Piercings</h4>
                    <p class="text-muted mb-0">Precisely applied septum, nostril, eyebrow, and labret piercings designed to enhance your natural beauty.</p>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/septum.png') }}" alt="Cover Ups" width="50">
                    </div>
                    <h4>Luxury Body Piercing & Repair   </h4>
                    <p class="text-muted mb-0">Turn tired or imperfect piercings into beautiful new masterpieces with our expert jewelry upgrades, precision stretching, and dedicated healing aftercare.</p>
                </div>
            </div>
        </div>
    </div>
</div>

 @php
    $gallery = [
        ['img' => 'assets/img/gallery/16706.jpg.jpeg', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/20316.jpg.jpeg', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/24680.jpg.jpeg', 'title' => 'Custom Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/46924.jpg.jpeg', 'title' => 'Ear Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],

        ['img' => 'assets/img/gallery/24588.jpg.jpeg', 'title' => 'Nose Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/33258.jpg.jpeg', 'title' => 'Luxury Piercing', 'tag' => 'Piercing', 'cat' => 'tattoo'],
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
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_qrb1slqrb1slqrb1.png') }}" alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg" style="margin-bottom: 160px;width: 77%;margin-left: 69px;">
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