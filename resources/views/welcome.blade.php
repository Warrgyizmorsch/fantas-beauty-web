@extends('layouts.app')
@section('content')


<style>
    .services__page-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .services__page-item:hover {
        transform: translateY(-10px);
    }

    .banner__slide-area-image {
        /* Ensures the image covers the entire container area */
        background-size: cover !important;
        /* Centers the image within the container */
        background-position: center center !important;
        /* Prevents the image from repeating */
        background-repeat: no-repeat !important;
        /* Optional: Helps with scaling on some devices */
        image-rendering: -webkit-optimize-contrast; 
    }
</style>
<!-- Banner Area Start -->
<div class="home__banner">
  <div class="banner__slide swiper banner-slide">
    <div class="swiper-wrapper">

      <!-- Slide 1: Tattoo & Piercing -->
      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000">
        <div class="banner__slide-area-image" 
         data-background="assets/img/bg/Tatto4.png"
         style="background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important; filter: brightness(2) !important;">
    </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-8 order-last order-lg-first">
              <div class="banner__slide-content">
                <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                  Welcome to Fantas Beauty
                </span>

                <h1 data-animation="fadeInLeft" data-delay=".6s">
                  Luxury Tattoo & Piercing Studio
                </h1>

                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  Clean, precise, and artistic — custom tattoos and safe piercing services with premium hygiene standards.
                </p>

                <div class="banner__slide-content-button" data-animation="fadeInLeft" data-delay=".9s">
                  <a href="{{ url('/about-us') }}" class="theme-banner-btn">
                    Read More<i class="far fa-angle-double-right"></i>
                  </a>
                  <a href="{{url ('/services.tattoos')}}" class="theme-border-btn">
                    Tattoo & Piercing<i class="far fa-angle-double-right"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        {{-- <div class="banner__slide-right" data-animation="fadeInRight" data-delay="1.3s">
          <img src="assets/img/bg/piercing fantas beauty small banner.png" alt="Tattoo & Piercing">
        </div> --}}
      </div>

      <!-- Slide 2: Nails -->
      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000">
        <div class="banner__slide-area-image" data-background="assets/img/bg/NailExtensions.png"></div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-8 order-last order-lg-first">
              <div class="banner__slide-content">
                <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                  Premium Nail Care
                </span>

                <h1 data-animation="fadeInLeft" data-delay=".6s">
                  Nail Extensions & Luxury Nail Art
                </h1>

                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                 From gel polish to detailed nail art — flawless finishing, long-lasting shine, and premium products.
                </p>

                <div class="banner__slide-content-button" data-animation="fadeInLeft" data-delay=".9s">
                  <a href="{{ url('/about-us') }}" class="theme-banner-btn">
                    Read More<i class="far fa-angle-double-right"></i>
                  </a>
                  <a href="{{url ('/services.nails')}}" class="theme-border-btn">
                    View Nail Services<i class="far fa-angle-double-right"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        {{-- <div class="banner__slide-right" data-animation="fadeInRight" data-delay="1.3s">
          <img src="assets/img/bg/Nail Extensions small banner fantas beauty.png" alt="Eyelash Extensions">
        </div> --}}
      </div>

      <!-- Slide 3: Eyelashes -->
      <div class="banner__slide-area swiper-slide" data-swiper-autoplay="6000">
        <div class="banner__slide-area-image" data-background="assets/img/bg/Eyelashes.png"></div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-8 order-last order-lg-first">
              <div class="banner__slide-content">
                <span class="subtitle__one" data-animation="fadeInLeft" data-delay=".4s">
                  Eyelash Specialists
                </span>

                <h1 data-animation="fadeInLeft" data-delay=".6s">
                  Eyelash Extensions for a Stunning Look
                </h1>

                <p data-animation="fadeInLeft" data-delay=".75s" style="color: rgba(255,255,255,.85); margin: 14px 0 0; max-width: 620px;">
                  Natural to volume lashes — lightweight, comfortable, and styled to match your eye shape perfectly.
                </p>

                <div class="banner__slide-content-button" data-animation="fadeInLeft" data-delay=".9s">
                  <a href="about.html" class="theme-banner-btn">
                    Read More<i class="far fa-angle-double-right"></i>
                  </a>
                  <a href="{{url ('/services.eyelashes')}}" class="theme-border-btn">
                    View Eyelash Services<i class="far fa-angle-double-right"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        {{-- <div class="banner__slide-right" data-animation="fadeInRight" data-delay="1.3s">
          <img src="assets/img/bg/Eyelashes small banner fantas beauty.png" alt="Eyelash Extensions">
        </div> --}}
      </div>

    </div>

    <!-- Navigation Buttons -->
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
<!-- Banner Area End -->
<!-- <div class="banner__two" data-background="{{ asset('assets/img/bg/banner.jpg') }}">
		<div class="container custom__container">
			<div class="row align-items-center">

				<div class="col-xl-7 col-lg-7 lg-mb-30">
					<div class="banner__two-title">
						<span class="subtitle__one">Welcome to Fantas Beauty</span>

						<h1>Luxury Tattoo, Lashes & Nail Studio</h1>

						<p>
							Premium tattoo & beauty studio — luxury ink, flawless hygiene, and artist-led transformations.
							From stunning lash sets to perfect nails, we create a look that feels confident, clean, and
							unforgettable.
						</p>

						<a href="{{ url('/book-appointment') }}" class="theme-btn">
							Book Appointment <i class="far fa-angle-double-right"></i>
						</a>
					</div>
				</div>

				<div class="col-xl-5 col-lg-5">
					<div class="banner__two-right">
						<img class="img__full" src="{{ asset('assets/img/hero-banner.png') }}" alt="Fantas Beauty Studio">
					</div>
				</div>

			</div>
		</div>
</div> -->
{{-- Banner / Hero Section End --}}

{{-- =========================
HOW IT WORKS (4 STEPS)
========================= --}}
<div class="services__three section-padding">
    <div class="container">

        {{-- Title --}}
        <div class="row mb-65">
            <div class="col-xl-12">
                {{-- Title par Fade-down animation --}}
                <div class="services__three-title" data-aos="fade-down" data-aos-duration="1000">
                    <span class="subtitle__two text-black" style="position: initial;">Process</span>
                    <span class="subtitle__one">Process</span>
                    <h2 class="text-black">How It Works</h2>
                </div>
            </div>
        </div>

        <div class="row">

            {{-- Step 01 --}}
            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30" data-aos="fade-up" data-aos-delay="100">
                <div class="services__page-item">
                    <div class="services__page-item-icon">
                        <img src="{{ asset('assets/img/icon/services-1.png') }}" alt="Consultation">
                    </div>
                    <div class="services__page-item-content">
                        <h4 class="text-black">01. Best Consultation </h4>
                        <p>
                            Share your tattoo idea, placement, and references with our artists.
                            Our team reviews and responds within 24–48 hours with guidance.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 02 --}}
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30" data-aos="fade-up" data-aos-delay="300">
                <div class="services__page-item">
                    <div class="services__page-item-icon">
                        <img src="{{ asset('assets/img/icon/services-2.png') }}" alt="Design">
                    </div>
                    <div class="services__page-item-content">
                        <h4 class="text-black">02. Design & Deposit</h4>
                        <p>
                            We prepare a custom sketch based on your concept and take approval.
                            A small deposit confirms your booking slot securely.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 03 --}}
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30" data-aos="fade-up" data-aos-delay="500">
                <div class="services__page-item">
                    <div class="services__page-item-icon">
                        <img src="{{ asset('assets/img/icon/services-3.png') }}" alt="Appointment">
                    </div>
                    <div class="services__page-item-content">
                        <h4 class="text-black">03. Appointment</h4>
                        <p>
                            Visit the studio well-rested and hydrated for your session.
                            Depending on design, tattoo sessions usually last 3–8 hours.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 04 --}}
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="services__page-item">
                    <div class="services__page-item-icon">
                        <img src="{{ asset('assets/img/icon/services-4.png') }}" alt="Aftercare">
                    </div>
                    <div class="services__page-item-content">
                        <h4 class="text-black">04. Aftercare</h4>
                        <p>
                            Follow our professional aftercare instructions carefully for proper healing.
                            We provide complete support until your tattoo heals perfectly.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- =========================
HOW IT WORKS END
========================= --}}

	{{-- =========================
	ABOUT SECTION
	========================= --}}
	<div class="about__two section-padding">
		<div class="about__two-shape">
			<img src="{{ asset('assets/img/shape/about-1.png') }}" alt="Shape">
		</div>

		<div class="container">
			<div class="row align-items-center">

				{{-- Left Images --}}
				<div class="col-xl-7 col-lg-6 lg-mb-30">
					<div class="about__two-left">
						<div class="about__two-left-image">
							<img src="{{ asset('assets/img/Untitled design (23).png') }}" alt="Fantas Beauty Studio">

							<div class="about__two-left-image-two">
								<img class="img__full" src="{{ asset('assets/img/Untitled design (24).png') }}"
									alt="Fantas Beauty Services">
							</div>

						</div>
					</div>
				</div>


				{{-- Right Content --}}
				<div class="col-xl-5 col-lg-6">
					<div class="about__two-right">

						<div class="about__two-right-title">
							<span class="subtitle__two">About</span>
							<span class="subtitle__one">About Fantas Beauty</span>

							<h2>Luxury Tattoo, Lashes & Nail Studio</h2>

							<p>
								Fantas Beauty is a premium tattoo and beauty studio known for luxury artistry,
								flawless hygiene, and precision-crafted transformations. From custom tattoos to
								stunning lash extensions and elegant nail designs — we create beauty that feels
								confident, clean, and timeless.
							</p>
						</div>


						<div class="about__two-right-list">
							<span><i class="far fa-check"></i> Certified & professional tattoo and beauty artists</span>
							<span><i class="far fa-check"></i> Premium hygiene standards and modern equipment</span>
							<span><i class="far fa-check"></i> Personalized styling with customer satisfaction
								priority</span>
						</div>


						<a href="{{ url('/about-us') }}" class="theme-btn mt-50">
							Read More <i class="far fa-angle-double-right"></i>
						</a>

					</div>
				</div>

			</div>
		</div>
	</div>
	{{-- =========================
	ABOUT END
	========================= --}}

{{-- =========================
        GALLERY SECTION
========================= --}}
@php
    $gallery = [
        ['img' => 'assets/testimonials/original-grid-image-26816-1487672786-1.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art'],
        ['img' => 'assets/testimonials/2.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails'],
        ['img' => 'assets/testimonials/original-grid-image-26400-1487673173-6.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art'],
        // ['img' => 'assets/testimonials/1.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art'],
        ['img' => 'assets/testimonials/deeb222d-64b9-4c37-84b8-2b6064cd5d10.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art'],
        ['img' => 'assets/testimonials/3.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails'],
        ['img' => 'assets/testimonials/12.jpg', 'title' => 'Nail Extensions & Fine Line', 'tag' => 'Nails & Tattoo Art'],
        ['img' => 'assets/testimonials/4.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair'],
        ['img' => 'assets/testimonials/7.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair'],
        // ['img' => 'assets/testimonials/5.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair'],
        ['img' => 'assets/testimonials/6.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair'],
        // ['img' => 'assets/testimonials/8.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails'],
    ];
@endphp
@include('component.gallery', ['gallery' => $gallery])
{{-- =========================
        GALLERY END
========================= --}}

	{{-- =========================
	SERVICES SECTION
	========================= --}}
<div class="services__two section-padding pb-0">
    <div class="container">
        <div class="row align-items-center">

            {{-- Left Image with Animation --}}
            <div class="col-xl-6 xl-mb-30" data-aos="fade-right" data-aos-duration="1000">
                <div class="services__two-left">
                    <img class="img__full" src="{{ asset('assets/img/ChatGPT Image Feb 26, 2026, 02_02_29 PM.png') }}"
                        alt="Fantas Beauty Services">
                </div>
            </div>

            {{-- Right Content --}}
            <div class="col-xl-6">
                <div class="services__two-right">

                    <div class="services__two-right-title" data-aos="fade-left" data-aos-duration="1000">
                        <span class="subtitle__two">Services</span>
                        <span class="subtitle__one">Our Expertise</span>
                        <h2>Luxury Tattoo & Beauty Services</h2>
                    </div>

                    <div class="row">

                        {{-- 1. Tattoo --}}
                        <div class="col-sm-6 mb-30" data-aos="fade-up" data-aos-delay="100">
                            <div class="services__two-right-item">
                                <div class="services__two-right-item-icon">
                                    <img src="{{ asset('assets/img/icon/services-1.png') }}" alt="Tattoo">
                                </div>
                                <div class="services__two-right-item-content">
                                    <h4>
                                        <a href="{{ url('/services/tattoo') }}">Custom Tattoo Art</a>
                                    </h4>
                                    <p>
                                        Precision-crafted tattoos designed by professional artists, ensuring
                                        hygiene, detail, and long-lasting perfection.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- 2. Piercing (Updated Content) --}}
                        <div class="col-sm-6 mb-30" data-aos="fade-up" data-aos-delay="200">
                            <div class="services__two-right-item">
                                <div class="services__two-right-item-icon">
                                    <img src="{{ asset('assets/img/icon/services-2.png') }}" alt="Piercing">
                                </div>
                                <div class="services__two-right-item-content">
                                    <h4>
                                        <a href="{{ url('/services/piercing') }}">Professional Piercing</a>
                                    </h4>
                                    <p>
                                        Safe and hygienic piercing services using high-quality jewelry.
                                        Expertly done for comfort and quick healing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- 3. Nails (Updated Content) --}}
                        <div class="col-sm-6 mb-30" data-aos="fade-up" data-aos-delay="300">
                            <div class="services__two-right-item">
                                <div class="services__two-right-item-icon">
                                    <img src="{{ asset('assets/img/icon/services-3.png') }}" alt="Nails">
                                </div>
                                <div class="services__two-right-item-content">
                                    <h4>
                                        <a href="{{ url('/services/nails') }}">Nail Extensions & Art</a>
                                    </h4>
                                    <p>
                                        Premium nail extensions, gel polish, and creative nail art crafted
                                        with precision and luxury finishing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- 4. Eyelashes (Updated Content) --}}
                        <div class="col-sm-6 mb-30" data-aos="fade-up" data-aos-delay="400">
                            <div class="services__two-right-item">
                                <div class="services__two-right-item-icon">
                                    <img src="{{ asset('assets/img/icon/services-4.png') }}" alt="Lashes">
                                </div>
                                <div class="services__two-right-item-content">
                                    <h4>
                                        <a href="{{ url('/services/eyelashes') }}">Eyelash Extensions</a>
                                    </h4>
                                    <p>
                                        From natural to volume lashes, achieve fuller, longer, and perfectly
                                        styled lashes for a confident look.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Chhota sa UI touch: Hover par card thoda upar uthega */
    .services__two-right-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .services__two-right-item:hover {
        transform: translateY(-5px);
    }
</style>
	{{-- =========================
	SERVICES END
	========================= --}}


	{{-- =========================
	WORKING HOURS
	========================= --}}
	
	{{-- =========================
	WORKING HOURS END
	========================= --}}

	
	@include('component.review')
{{-- =========================
        BLOG SECTION
========================= --}}
<div class="blog__two section-padding">
    <div class="container">

        {{-- Title --}}
        <div class="row mb-65">
            <div class="col-xl-12">
                <div class="blog__two-title">
                    <span class="subtitle__two">Latest Updates</span>
                    <span class="subtitle__one">Blog & Articles</span>
                    <h2>Beauty Tips, Tattoo Trends & Studio News</h2>
                </div>
            </div>
        </div>

        @php
            $blogs = [
                [
                    'img' => 'assets/blog/blog-3.png',
                    'category' => 'Tattoo',
                    'title' => 'How to Prepare for Your First Tattoo Session',
                    'desc' => 'Planning your first tattoo? Learn how to prepare your skin, what to expect during the session, and how to ensure a smooth healing process.',
                    'slug' => 'first-tattoo-preparation'
                ],
                [
                    'img' => 'assets/blog/blog-4.png',
                    'category' => 'Lashes',
                    'title' => 'Choosing the Perfect Eyelash Extensions for Your Face',
                    'desc' => 'From classic to volume lashes, discover which style enhances your eye shape and complements your natural beauty.',
                    'slug' => 'perfect-eyelash-extensions'
                ],
                [
                    'img' => 'assets/blog/blog-5.png',
                    'category' => 'Nails',
                    'title' => 'Top Nail Art Trends You Should Try This Season',
                    'desc' => 'Explore trending nail designs, colors, and finishes that are making waves in the beauty industry right now.',
                    'slug' => 'nail-art-trends'
                ],
            ];
        @endphp

        <div class="row">

            {{-- Left Big Blog --}}
            <div class="col-xl-4 lg-mb-30">
                <div class="blog__two-item">
                    <div class="blog__two-item-image">
                        <a href="{{ url('/blog/'.$blogs[0]['slug']) }}">
                            <img src="{{ asset($blogs[0]['img']) }}" alt="{{ $blogs[0]['title'] }}">
                        </a>
                    </div>

                    <div class="blog__two-item-content">
                        <div class="blog__two-item-content-meta">
                            <ul>
                                <li>
                                    <a href="#"><span>{{ $blogs[0]['category'] }}</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fal fa-calendar-alt"></i>
                                        {{ now()->format('d M, Y') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <h4>
                            <a href="{{ url('/blog/'.$blogs[0]['slug']) }}">
                                {{ $blogs[0]['title'] }}
                            </a>
                        </h4>

                        <p>{{ $blogs[0]['desc'] }}</p>

                        <a href="{{ url('/blog/'.$blogs[0]['slug']) }}" class="simple-btn">
                            Read More <i class="far fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Right Side Blogs --}}
            <div class="col-xl-8">

                @foreach(array_slice($blogs,1) as $blog)
                    <div class="blog__two-item right mb-25">
                        <div class="blog__two-item-image">
                            <a href="{{ url('/blog/'.$blog['slug']) }}">
                                <img src="{{ asset($blog['img']) }}" alt="{{ $blog['title'] }}">
                            </a>
                        </div>

                        <div class="blog__two-item-content">
                            <div class="blog__two-item-content-meta">
                                <ul>
                                    <li>
                                        <a href="#"><span>{{ $blog['category'] }}</span></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-calendar-alt"></i>
                                            {{ now()->format('d M, Y') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <h4>
                                <a href="{{ url('/blog/'.$blog['slug']) }}">
                                    {{ $blog['title'] }}
                                </a>
                            </h4>

                            <p>{{ $blog['desc'] }}</p>

                            <a href="{{ url('/blog/'.$blog['slug']) }}" class="simple-btn">
                                Read More <i class="far fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
{{-- =========================
        BLOG END
========================= --}}
{{-- =========================
        INSTAGRAM SECTION
========================= --}}
@include('component.instagram')
{{-- =========================
        INSTAGRAM END
========================= --}}

@endsection