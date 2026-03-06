@extends('layouts.app')
@section('content')
	
<!-- Page Banner Start -->
<div class="home__banner">
  <div class="banner__slide swiper banner-slide">
    <div class="swiper-wrapper">

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/Tatto1.png')}}'); 
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
                  Welcome to Fantas Beauty
                </span>
                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                  Luxury Tattoo
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  Clean, precise, and artistic — custom tattoos and safe piercing services with premium hygiene standards.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000" style="height: 500px; min-height: 500px; position: relative;">
        <div class="banner__slide-area-image" 
             style="background-image: url('{{ asset ('assets/img/bg/Tatto4.png')}}'); 
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
                  Welcome to Fantas Beauty
                </span>
                <h1 data-animation="fadeInLeft" data-delay=".6s" style="color: #fff; margin-bottom: -10px;">
                  Luxury Tattoo
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  Clean, precise, and artistic — custom tattoos and safe piercing services.
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
                            src="{{ asset('assets/img/collins-lesulie-PWK6CeCJtJw-unsplash.jpg') }}" 
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
                        <span class="subtitle__one">Fantas Ink & Piercing</span>
                        <h2>Crafting Art, Ink & Confidence</h2>

                        <p class="mb-25">
                            Fantas Studio is a premium destination for custom tattoo artistry and professional body piercing services. Our studio blends creativity, strict hygiene, and precision to deliver stunning body art tailored to every client.
                        </p>

                        <p>
                            From custom tattoos to safe and flawless piercings, every service at Fantas is performed by skilled artists and experienced piercers using high-quality inks, premium hypoallergenic jewelry, and modern techniques. We focus on comfort, safety, and perfection.
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
                <p class="text-muted">Explore our wide range of professional body art and piercing services, executed with top-tier hygiene and precision.</p>
            </div>
        </div>

        <div class="row">
            {{-- Service Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/tattoo-machine.png') }}" alt="Custom Tattoos" width="50">
                    </div>
                    <h4>Custom Tattoos</h4>
                    <p class="text-muted mb-0">From hyper-realism to fine-line minimalism, we bring your unique vision to life with skin-safe, premium inks.</p>
                </div>
            </div>
            
            {{-- Service Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/tattoo.png') }}" alt="Body Piercing" width="50">
                    </div>
                    <h4>Professional Piercing</h4>
                    <p class="text-muted mb-0">Ear, facial, and body piercings done safely using single-use sterilized needles and hypoallergenic jewelry.</p>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/flower.png') }}" alt="Cover Ups" width="50">
                    </div>
                    <h4>Tattoo Cover-Ups</h4>
                    <p class="text-muted mb-0">Turn unwanted or faded tattoos into beautiful new masterpieces with our expert cover-up techniques.</p>
                </div>
            </div>
        </div>
    </div>
</div>

 @php
    $gallery = [
        ['img' => 'assets/img/gallery/blog-banner.png', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/piercing-2.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-1.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-2.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],

        ['img' => 'assets/img/gallery/tattoo3.png', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
        ['img' => 'assets/img/gallery/tattoo-4.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
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
                            At Fantas Studio, our mission is to deliver luxury tattoo artistry and premium piercing services with uncompromising hygiene and professional care. We believe every client deserves a transformation that feels confident, clean, and timeless.
                        </p>

                        <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                            From consultation to aftercare, we focus on detail, comfort, and personalized styling. Our expert artists use modern techniques and high-quality products to ensure every service meets the highest standards.
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
                    <img src="{{ asset('assets/img/Gemini_Generated_Image_ajkmfajkmfajkmfa.png') }}" alt="Fantas Studio Mission" class="img-fluid rounded shadow-lg" style="margin-bottom: 160px;width: 77%;margin-left: 69px;">
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