@extends('layouts.app')
@section('content')


	{{-- Banner / Hero Section Start --}}
	<div class="banner__two" data-background="{{ asset('assets/img/bg/banner.jpg') }}">
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
	</div>
	{{-- Banner / Hero Section End --}}

	{{-- =========================
	HOW IT WORKS (4 STEPS)
	========================= --}}
	<div class="services__three section-padding">
		<div class="container">

			{{-- Title --}}
			<div class="row mb-65">
				<div class="col-xl-12">
					<div class="services__three-title">
						<span class="subtitle__one">Process</span>
						<h2>How It Works</h2>
					</div>
				</div>
			</div>

			<div class="row">

				{{-- Step 01 --}}
				<div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
					<div class="services__three-item">
						<div class="services__three-item-icon">
							<img src="{{ asset('assets/img/icon/services-1.png') }}" alt="Consultation">
						</div>
						<div class="services__three-item-content">
							<h4 class="text-white">01. Best Consultation </h4>
							<p>
								Share your tattoo idea, placement, and references with our artists.
								Our team reviews and responds within 24–48 hours with guidance.
							</p>
							<a href="{{ url('/book-appointment') }}" class="simple-btn">
								Book Now <i class="far fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>

				{{-- Step 02 --}}
				<div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="services__three-item">
						<div class="services__three-item-icon">
							<img src="{{ asset('assets/img/icon/services-2.png') }}" alt="Design">
						</div>
						<div class="services__three-item-content">
							<h4 class="text-white">02. Design & Deposit</h4>
							<p>
								We prepare a custom sketch based on your concept and take approval.
								A small deposit confirms your booking slot securely.
							</p>
							<a href="{{ url('/contact-us') }}" class="simple-btn">
								Ask Details <i class="far fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>

				{{-- Step 03 --}}
				<div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="services__three-item">
						<div class="services__three-item-icon">
							<img src="{{ asset('assets/img/icon/services-3.png') }}" alt="Appointment">
						</div>
						<div class="services__three-item-content">
							<h4 class="text-white">03. Appointment</h4>
							<p>
								Visit the studio well-rested and hydrated for your session.
								Depending on design, tattoo sessions usually last 3–8 hours.
							</p>
							<a href="{{ url('/book-appointment') }}" class="simple-btn">
								Get Slot <i class="far fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>

				{{-- Step 04 --}}
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="services__three-item">
						<div class="services__three-item-icon">
							<img src="{{ asset('assets/img/icon/services-4.png') }}" alt="Aftercare">
						</div>
						<div class="services__three-item-content">
							<h4 class="text-white">04. Aftercare</h4>
							<p>
								Follow our professional aftercare instructions carefully for proper healing.
								We provide complete support until your tattoo heals perfectly.
							</p>
							<a href="{{ url('/contact-us') }}" class="simple-btn">
								Aftercare Help <i class="far fa-angle-double-right"></i>
							</a>
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
<div class="gallery__area section-padding">
    <div class="container">

        {{-- Title --}}
        <div class="row mb-65">
            <div class="col-xl-12">
                <div class="gallery__area-title">
                    <span class="subtitle__two">Gallery</span>
                    <span class="subtitle__one">Our Work</span>
                    <h2>Explore Our Latest Tattoo, Lashes & Nail Transformations</h2>
                </div>
            </div>
        </div>

        @php
            $gallery = [
                ['img' => 'assets/testimonials/original-grid-image-26816-1487672786-1.webp',  'title' => 'Custom Tattoo',        'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/original-grid-image-26400-1487673173-6.webp',  'title' => 'Custom Tattoo',        'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/1.jpg',  'title' => 'Custom Tattoo',        'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/deeb222d-64b9-4c37-84b8-2b6064cd5d10.webp',  'title' => 'Custom Tattoo',        'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/2.jpg',  'title' => 'Eyelash Extensions',   'tag' => 'Lashes'],
                ['img' => 'assets/testimonials/12.jpg',  'title' => 'Eyelash Extensions',   'tag' => 'Lashes'],
                ['img' => 'assets/testimonials/3.jpg',  'title' => 'Nail Extensions',      'tag' => 'Nails'],
                ['img' => 'assets/testimonials/4.jpg',  'title' => 'Fine Line Tattoo',     'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/5.jpg',  'title' => 'Volume Lashes',        'tag' => 'Lashes'],
                ['img' => 'assets/testimonials/6.jpg',  'title' => 'Gel Nail Art',         'tag' => 'Nails'],
                ['img' => 'assets/testimonials/7.jpg',  'title' => 'Minimal Tattoo',       'tag' => 'Tattoo Art'],
                ['img' => 'assets/testimonials/8.jpg',  'title' => 'Classic Lash Set',     'tag' => 'Lashes'],
            ];
        @endphp

        {{-- Grid --}}
        <div class="row g-4 mb-65">
            @foreach($gallery as $g)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery__area-item h-100">
                        <div class="gallery__area-item-image">

                            <img class="img__full gallery-img"
                                 src="{{ asset($g['img']) }}"
                                 alt="{{ $g['title'] }}">

                            <div class="gallery__area-item-image-content">
                                <h4>{{ $g['title'] }}</h4>
                                <span>{{ $g['tag'] }}</span>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Button --}}
        <div class="row t-center">
            <div class="col-xl-12">
                <a href="{{ url('/gallery') }}" class="theme-banner-btn">
                    View Full Gallery <i class="far fa-angle-double-right"></i>
                </a>
            </div>
        </div>

    </div>
</div>
{{-- =========================
        GALLERY END
========================= --}}

	{{-- =========================
	SERVICES SECTION
	========================= --}}
	<div class="services__two section-padding pb-0">
		<div class="container">
			<div class="row align-items-center">

				{{-- Left Image --}}
				<div class="col-xl-6 xl-mb-30">
					<div class="services__two-left">
						<img class="img__full" src="{{ asset('assets/img/ChatGPT Image Feb 26, 2026, 02_02_29 PM.png') }}"
							alt="Fantas Beauty Services">
					</div>
				</div>

				{{-- Right Content --}}
				<div class="col-xl-6">
					<div class="services__two-right">

						<div class="services__two-right-title">
							<span class="subtitle__two">Services</span>
							<span class="subtitle__one">Our Expertise</span>
							<h2>Luxury Tattoo & Beauty Services</h2>
						</div>

						<div class="row">

							{{-- Tattoo --}}
							<div class="col-sm-6 mb-30">
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

							{{-- Eyelashes --}}
							<div class="col-sm-6 mb-30">
								<div class="services__two-right-item">
									<div class="services__two-right-item-icon">
										<img src="{{ asset('assets/img/icon/services-2.png') }}" alt="Lashes">
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

							{{-- Nails --}}
							<div class="col-sm-6">
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

							{{-- Beauty --}}
							<div class="col-sm-6 mt-30">
								<div class="services__two-right-item">
									<div class="services__two-right-item-icon">
										<img src="{{ asset('assets/img/icon/services-4.png') }}" alt="Beauty">
									</div>
									<div class="services__two-right-item-content">
										<h4>
											<a href="{{ url('/services/beauty') }}">Beauty & Grooming</a>
										</h4>
										<p>
											Professional beauty care including brows, skin, and grooming —
											designed to enhance your natural elegance.
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
	{{-- =========================
	SERVICES END
	========================= --}}


	{{-- =========================
	WORKING HOURS
	========================= --}}
	<div class="working__two section-padding">

		<div class="working__two-shape">
			<img src="{{ asset('assets/img/shape/hours.png') }}" alt="Working Hours Shape">
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-7 lg-mb-30">
					<div class="working__two-left">
						<div class="working__two-left-title">
							<span class="subtitle__two">Working</span>
							<span class="subtitle__one">Opening Hours</span>
							<h2>Visit Fantas Beauty Studio</h2>
							<p>
								We welcome you to experience luxury tattoo artistry, flawless lash extensions,
								and premium nail services in a clean and professional environment.
								Our studio maintains the highest hygiene standards to ensure
								comfort, safety, and satisfaction for every client.
							</p>
						</div>
						<div class="working__two-left-hours">
							<ul>
								<li>Monday <span>10:00 AM - 08:00 PM</span></li>
								<li>Tuesday <span>10:00 AM - 08:00 PM</span></li>
								<li>Wednesday <span>10:00 AM - 08:00 PM</span></li>
								<li>Thursday <span>10:00 AM - 08:00 PM</span></li>
								<li>Friday <span>10:00 AM - 08:00 PM</span></li>
								<li>Saturday <span>10:00 AM - 08:00 PM</span></li>
								<li>Sunday <span>10:00 AM - 08:00 PM</span></li>
							</ul>
						</div>
						<a href="{{ url('/book-appointment') }}" class="theme-banner-btn">
							Book Appointment <i class="far fa-angle-double-right"></i>
						</a>

					</div>
				</div>

				{{-- Right Image --}}
				<div class="col-xl-5 col-lg-5">
					<img class="img__full" src="https://html.nextwpcook.com/barbex/assets/img/calendar.jpg"
						alt="Fantas Beauty Working Hours">
				</div>

			</div>
		</div>
	</div>
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