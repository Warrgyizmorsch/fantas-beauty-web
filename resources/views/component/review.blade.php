{{-- =========================
        TESTIMONIAL SECTION
========================= --}}
<div class="testimonial__two section-padding pt-0">
    <div class="container">

        {{-- Top Banner Image --}}
        <div class="row mb-100">
            <div class="col-xl-12">
                <div class="testimonial__two-image">
                    <img class="img__full" src="{{ asset('assets/img/review.png') }}" alt="Testimonials">
                    
                    <div class="testimonial__two-button">
                        <div class="testimonial__two-button-prev swiper-button-prev">
                            <i class="far fa-angle-double-left"></i>
                        </div>
                        <div class="testimonial__two-button-next swiper-button-next">
                            <i class="far fa-angle-double-right"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @php
            $testimonials = [
                [
                    'img' => 'assets/testimonials/3.jpg',
                    'title' => 'Excellent Service',
                    'text' => 'The nail art at Fantas Beauty is done with great precision and a clean finish. The design looked exactly how I wanted it. Highly recommended for nail art lovers.',
                    'name' => 'Sophie Williams',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/4.jpg',
                    'title' => 'Amazing Experience',
                    'text' => 'I walked in with frizzy, curly hair and walked out feeling brand new. The team handled my curls with so much care and skill — I loved the final look.',
                    'name' => 'Hayley Matthews',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/5.jpg',
                    'title' => 'Highly Recommended',
                    'text' => 'The nail service at Fantas Beauty is truly impressive. The detailing is neat and the final look matched my style perfectly. A must-visit for quality nail work.',
                    'name' => 'Emily Harris',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/1.jpg',
                    'title' => 'Loved the Results',
                    'text' => 'Fantas Beauty never disappoints. The styling was smooth, modern, and exactly what I wanted. I got compliments all day — super happy with the service.',
                    'name' => 'Amelia Thompson',
                    'role' => 'Customer',
                    'stars' => 5
                ],
            ];
        @endphp

        {{-- Slider --}}
        <div class="row">
            <div class="col-xl-12 testimonial__two-item-dot">

                <div class="swiper testimonial__slider">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="testimonial__two-item">

                                    <div class="testimonial__two-item-image">
                                        <img class="img__full" src="{{ asset($t['img']) }}" alt="{{ $t['name'] }}">
                                    </div>

                                    <div class="testimonial__two-item-content">
                                        <div class="testimonial__two-item-content-review">
                                            <h4>{{ $t['title'] }}</h4>

                                            <ul>
                                                @for($i = 0; $i < $t['stars']; $i++)
                                                    <li><i class="fas fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>

                                        <p>{{ $t['text'] }}</p>
                                        <h6>{{ $t['name'] }}</h6>
                                        <span>{{ $t['role'] }}</span>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="testimonial__two-item-dots">
                    <div class="pagination"></div>
                </div>

            </div>
        </div>

    </div>
</div>
{{-- =========================
        TESTIMONIAL END
========================= --}}