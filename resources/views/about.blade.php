@extends('layouts.app')
@section('content')
	
<!-- Page Banner Start -->
<div class="page__banner" data-background="assets/img/bg/common-banner.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>About Us</h1>
                        <div class="page__banner-title-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>_</span>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Page Banner End -->
   <!-- History Area Start -->
<div class="history__area section-padding">
    <div class="container">
        <div class="row align-items-center">

            {{-- Image --}}
            <div class="col-xl-6 col-lg-6 lg-mb-30">
                <div class="history__area-left">
                    <div class="history__area-left-image">
                        <img 
                            src="{{ asset('assets/img/about-studio.png') }}" 
                            alt="Fantas Beauty Studio"
                            class="img-fluid"
                        >
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="col-xl-6 col-lg-6">
                <div class="history__area-right">

                    <div class="history__area-right-title">
                        <span class="subtitle__two">Our Journey</span>
                        <span class="subtitle__one">Fantas Beauty Studio</span>
                        <h2>Crafting Beauty, Ink & Confidence</h2>

                        <p class="mb-25">
                            Fantas Beauty Studio is a premium destination for tattoo artistry, luxury eyelash extensions, 
                            nail design, and professional beauty services. Our studio blends creativity, hygiene, and 
                            precision to deliver stunning transformations tailored to every client.
                        </p>

                        <p>
                            From custom tattoos to flawless lashes and elegant nails, every service at Fantas is performed 
                            by skilled artists using high-quality products and modern techniques. We focus on comfort, 
                            safety, and perfection — ensuring every visit leaves you confident and satisfied.
                        </p>
                    </div>

                    {{-- Founder / Signature --}}
                    <div class="history__area-right-author">

                        <div class="history__area-right-author-image">
                            <img 
                                src="{{ asset('assets/logo/fantas-logo.png') }}" 
                                alt="Fantas Founder"
                                class="img-fluid"
                            >
                        </div>

                        <div class="history__area-right-author-content">
                            <h4>Fantas Beauty Studio</h4>
                            <span>Premium Tattoo & Beauty Experts</span>

                            <img 
                                src="{{ asset('assets/img/avatar/signature.png') }}" 
                                alt="Signature"
                            >
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- History Area End -->
   
{{-- =========================
        MISSION SECTION
========================= --}}
<div class="mission__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="mission__area-left">
                    <div class="mission__area-left-title">

                        <span class="subtitle__two">Mission</span>
                        <span class="subtitle__one">Our Mission</span>
                        <h2>Beauty With Precision, Safety & Art</h2>

                        <p class="mb-25">
                            At Fantas Beauty Studio, our mission is to deliver luxury tattoo artistry, flawless lash
                            extensions, and premium nail services with uncompromising hygiene and professional care.
                            We believe every client deserves a transformation that feels confident, clean, and timeless.
                        </p>

                        <p>
                            From consultation to aftercare, we focus on detail, comfort, and personalized styling.
                            Our expert artists use modern techniques and high-quality products to ensure every service
                            meets the highest standards — every single time.
                        </p>

                        <a href="{{ url('/book-appointment') }}" class="theme-btn mt-30">
                            Book Appointment <i class="far fa-angle-double-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Right Image --}}
    <div class="mission__area-right">
        <img src="{{ asset('assets/img/new.png') }}" alt="Fantas Beauty Mission">
    </div>
</div>
{{-- =========================
        MISSION END
========================= --}}
	
	<!-- Instagram Area Start -->	
	@include('component.instagram')
	<!-- Instagram Area End -->	 

@endsection