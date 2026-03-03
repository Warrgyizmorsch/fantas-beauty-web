@extends('layouts.app')
@section('content')
	
<!-- Page Banner Start -->
<div class="page__banner" data-background="{{ asset('assets/img/bg/Gemini_Generated_Image_auf42mauf42mauf4.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-title">
                        <h1>Eyelash Extensions</h1>
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
   <div class="history__area section-padding">
    <div class="container">
        <div class="row align-items-center">

            {{-- Image --}}
            <div class="col-xl-6 col-lg-6 lg-mb-30">
                <div class="history__area-left">
                    <div class="history__area-left-image">
                        <img 
                            src="{{ asset('assets/img/Gemini_Generated_Image_jk5d8wjk5d8wjk5d.png') }}" 
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
                            Fantas Studio is a premium destination for luxury eyelash extensions and professional lash care. Our studio blends artistry, strict hygiene, and precision to deliver stunning lash transformations tailored to every client.
                        </p>

                        <p>
                            From soft classic sets to flawless volume lashes, every service at Fantas is performed by skilled lash technicians using ultra-lightweight premium fibers, medical-grade hypoallergenic adhesives, and modern application techniques. We focus on comfort, safety, and perfection.
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
                <p class="text-muted">Explore our wide range of luxury eyelash extensions and lash care services, executed with top-tier hygiene and precision.</p>
            </div>
        </div>

        <div class="row">
            {{-- Service Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/eyeliner.png') }}" alt="Custom Tattoos" width="50">
                    </div>
                    <h4>Custom Lash Sets</h4>
                    <p class="text-muted mb-0">From natural classic enhancements to dramatic mega-volume, we bring your unique vision to life using ultra-lightweight, premium fibers.</p>
                </div>
            </div>
            
            {{-- Service Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/eyelashes.png') }}" alt="Body Piercing" width="50">
                    </div>
                    <h4>Professional Lash Lifts & Tints</h4>
                    <p class="text-muted mb-0">Elevate and curl your natural lashes safely using high-quality, gentle lifting solutions and rich, long-lasting tints.</p>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-icon mb-3">
                        <img src="{{ asset('assets/img/icon/eyebrow.png') }}" alt="Cover Ups" width="50">
                    </div>
                    <h4>Expert Lash Fills & Removals</h4>
                    <p class="text-muted mb-0">Keep your lashes looking flawless with regular infills or safely remove old extensions with our damage-free, gentle techniques.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gallery__area section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center">
                <span class="subtitle__two">Portfolio</span>
                <h2>Flawless Lash Transformations</h2>
            </div>
        </div>

        {{-- Bootstrap Grid Gallery --}}
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/Gemini_Generated_Image_8qex358qex358qex.png') }}')">
                    <img src="{{ asset('assets/img/gallery/Gemini_Generated_Image_8qex358qex358qex.png') }}" alt="Tattoo Work 1" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/Gemini_Generated_Image_auf42mauf42mauf4.png') }}')">
                    <img src="{{ asset('assets/img/gallery/Gemini_Generated_Image_auf42mauf42mauf4.png') }}" alt="Piercing Work 1" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.jpg') }}')">
                    <img src="{{ asset('assets/img/gallery/ali-shoaee-SdStLjkoWXM-unsplash.jpg') }}" alt="Tattoo Work 2" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/ovinuchi-ejiohuo-vaOosG1lgGE-unsplash.jpg') }}')">
                    <img src="{{ asset('assets/img/gallery/ovinuchi-ejiohuo-vaOosG1lgGE-unsplash.jpg') }}" alt="Piercing Work 2" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/victor-sirbu-kA74I2XMiSQ-unsplash.jpg') }}')">
                    <img src="{{ asset('assets/img/gallery/victor-sirbu-kA74I2XMiSQ-unsplash.jpg') }}" alt="Tattoo Work 3" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item overflow-hidden rounded shadow-sm" style="cursor: pointer;" onclick="openImageModal('{{ asset('assets/img/gallery/bermix-studio-CqEGy4zAmbI-unsplash.jpg') }}')">
                    <img src="{{ asset('assets/img/gallery/bermix-studio-CqEGy4zAmbI-unsplash.jpg') }}" alt="Tattoo Work 4" class="img-fluid w-100 hover-zoom">
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="{{ url('/gallery') }}" class="theme-btn">View Full Gallery <i class="far fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</div>
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
                            At Fantas Studio, our mission is to deliver luxury eyelash extensions and premium lash care services with uncompromising hygiene and professional care. We believe every client deserves a transformation that feels confident, clean, and flawless.
                        </p>

                        <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                            From consultation to aftercare, we focus on detail, comfort, and personalized styling. Our expert lash technicians use modern techniques and high-quality products to ensure every service meets the highest standards.
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