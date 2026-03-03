@extends('layouts.app')

@section('title', 'Contact - Fantas Beauty')

@section('content')

{{-- =========================
        PAGE BANNER
========================= --}}
<div class="page__banner" data-background="{{ asset('assets/img/bg/common-banner.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Contact Us</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span>_</span>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- =========================
        CONTACT SECTION
========================= --}}
<div class="contact__area section-padding pb-0">
    <div class="container">

        <div class="row mb-60">
            <div class="col-xl-5 col-lg-6">

                <div class="contact__area-title">
                    <span class="subtitle__one">Contact</span>
                    <h2>Let’s Talk About Your Next Look</h2>
                    <p class="mt-15">
                        For tattoos, lash extensions, nail services, or bookings — reach out anytime.
                        Our team will respond as soon as possible.
                    </p>
                </div>

                <div class="contact__area-info">

                    {{-- Phone --}}
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="far fa-phone-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Call / WhatsApp</span>
                            <h5>
                                <a href="tel:+447514836169">+44 7514 836169</a>
                            </h5>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Email</span>
                            <h5>
                                <a href="mailto:info@fantasbeauty.co.uk">info@fantasbeauty.co.uk</a>
                            </h5>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Studio Address</span>
                            <h5>
                                <a href="#">
                                    Walworth Road, London, United Kingdom
                                </a>
                            </h5>
                        </div>
                    </div>

                    {{-- Timings --}}
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Working Hours</span>
                            <h5>All Days, 10:00 AM – 08:00 PM</h5>
                        </div>
                    </div>

                    {{-- Instagram --}}
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Instagram</span>
                            <h5>
                                <a href="https://www.instagram.com/fantas_walworthroad/" target="_blank">
                                    @fantas_walworthroad
                                </a>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- FORM --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__area-bottom">
                    <div class="contact__area-bottom-form page">

                        <form method="POST" action="{{ url('/contact-submit') }}">
                            @csrf

                            <div class="row">

                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="phone" placeholder="Phone (Optional)">
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <textarea name="message" rows="5" placeholder="Write your message..." required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="contact__area-bottom-form-item">
                                        <button class="theme-banner-btn" type="submit">
                                            Submit Now <i class="far fa-angle-double-right"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>


    {{-- MAP --}}
    <div class="contact__area-bottom-map">
        {{-- Replace this iframe with your exact Walworth Road London map embed --}}
        <iframe
            src="https://www.google.com/maps?q=Walworth%20Road%20London&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</div>

@endsection