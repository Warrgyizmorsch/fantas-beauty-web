{{-- =========================
        TESTIMONIAL SECTION (Luxury Video UI)
========================= --}}
<div class="lux-testimonials">
     {{-- Title --}}
    <div class="row mb-65">
            <div class="col-xl-12">
                <div class="gallery__area-title">
                    <span class="subtitle__two text-black" style="z-index: 0;">Testimonials</span>
                    <span class="subtitle__one">Our Clients</span>
                    <h2 class="text-black">What Our Clients Say</h2>
                </div>
            </div>
        </div>
    <div class="container">
        
        @php
            $testimonials = [
                [
                    'img' => 'assets/testimonials/3.jpg',
                    'video_url' => 'https://www.youtube.com/shorts/LiOuySipQR4',
                    'title' => 'Excellent Service',
                    'text' => 'The nail art at Fantas Beauty is done with great precision and a clean finish. The design looked exactly how I wanted it. Highly recommended!',
                    'name' => 'Sophie Williams',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/4.jpg',
                    'video_url' => 'https://www.youtube.com/shorts/RJYhCptk30M',
                    'title' => 'Amazing Experience',
                    'text' => 'I walked in with frizzy hair and walked out feeling brand new. The team handled my curls with so much care and skill — loved the look.',
                    'name' => 'Hayley Matthews',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/5.jpg',
                    'video_url' => 'https://www.youtube.com/shorts/flpr6xJQ0Nk',
                    'title' => 'Highly Recommended',
                    'text' => 'The nail service at Fantas Beauty is truly impressive. The detailing is neat and the final look matched my style perfectly.',
                    'name' => 'Emily Harris',
                    'role' => 'Customer',
                    'stars' => 5
                ],
                [
                    'img' => 'assets/testimonials/1.jpg',
                    'video_url' => 'https://www.youtube.com/shorts/HlfTObdXQG4',
                    'title' => 'Loved the Results',
                    'text' => 'Fantas Beauty never disappoints. The styling was smooth, modern, and exactly what I wanted. I got compliments all day!',
                    'name' => 'Amelia Thompson',
                    'role' => 'Customer',
                    'stars' => 5
                ],
            ];
        @endphp

        <div class="row">
            <div class="col-xl-12">
                <div class="swiper lux-swiper" id="luxTestimonialSwiper">
                    <div class="swiper-wrapper">

                        @foreach($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="lux-slide" data-video-url="{{ $t['video_url'] }}">
                                    
                                    {{-- Media Side: Pura click karne par video chalega --}}
                                    <div class="lux-media js-play-trigger">
                                        <div class="lux-poster-wrap">
                                            <img class="img__full" src="{{ asset($t['img']) }}" alt="{{ $t['name'] }}">
                                            
                                            {{-- Play Button --}}
                                            <div class="lux-play-btn">
                                                <span class="lux-wave"></span>
                                                <span class="lux-wave w2"></span>
                                                <span class="lux-wave w3"></span>
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>

                                        {{-- Inline Video Container --}}
                                        <div class="lux-video-container"></div>

                                        {{-- Arrows Over Media --}}
                                        <div class="lux-arrows">
                                            <div class="lux-nav-btn prev"><i class="far fa-angle-left"></i></div>
                                            <div class="lux-nav-btn next"><i class="far fa-angle-right"></i></div>
                                        </div>
                                    </div>

                                    {{-- Content Side --}}
                                    <div class="lux-content">
                                        <div class="lux-review-top">
                                            <h4 class="lux-title">{{ $t['title'] }}</h4>
                                            <ul class="lux-stars">
                                                @for($i = 0; $i < $t['stars']; $i++)
                                                    <li><i class="fas fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>

                                        <div class="lux-quote-wrap">
                                            <span class="lux-quote-mark open">“</span>
                                            <p class="lux-quote">{{ $t['text'] }}</p>
                                            <span class="lux-quote-mark close">”</span>
                                        </div>

                                        <div class="lux-client-row">
                                            <div class="lux-client-left">
                                                <div class="lux-avatar">
                                                    <img src="{{ asset($t['img']) }}" alt="{{ $t['name'] }}">
                                                </div>
                                                <div class="lux-client-meta">
                                                    <div class="lux-name">{{ $t['name'] }}</div>
                                                    <div class="lux-role">{{ $t['role'] }}</div>
                                                </div>
                                            </div>
                                            <div class="lux-client-right">
                                                <div class="lux-service">Verified User</div>
                                                <div class="lux-rating-text">{{ $t['stars'] }}/5 Rating</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="lux-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.lux-testimonials { background: var(--color-5); padding: 80px 0; overflow: hidden; }
.lux-swiper { border-radius: 16px; background: #0b0b0b; position: relative; }

.lux-slide {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    min-height: 500px;
}

/* Media Side Styling */
.lux-media { 
    position: relative; 
    height: 500px; 
    background: #000; 
    overflow: hidden; 
    cursor: pointer; 
}
.lux-poster-wrap { width: 100%; height: 100%; position: relative; z-index: 2; transition: 0.4s; }
.lux-poster-wrap img { width: 100%; height: 100%; object-fit: cover; }

/* Video Container */
.lux-video-container {
    position: absolute;
    inset: 0;
    z-index: 1;
    display: none;
    background: #000;
}
.lux-video-container iframe { width: 100%; height: 100%; border: 0; }

/* Jab video play ho toh poster hide kar do */
.lux-slide.is-playing .lux-poster-wrap { display: none; }
.lux-slide.is-playing .lux-video-container { display: block; z-index: 5; }

/* Play Button */
.lux-play-btn {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 75px; height: 75px;
    background: #B48E40;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    pointer-events: none; /* Click pura div handle karega */
}
.lux-play-btn i { font-size: 24px; margin-left: 4px; }

/* Waves */
.lux-wave {
    position: absolute;
    width: 100%; height: 100%;
    border: 2px solid #B48E40;
    border-radius: 50%;
    animation: luxWave 2s infinite linear;
    opacity: 0;
}
.lux-wave.w2 { animation-delay: 0.6s; }
.lux-wave.w3 { animation-delay: 1.2s; }

@keyframes luxWave {
    0% { transform: scale(1); opacity: 0.8; }
    100% { transform: scale(2.2); opacity: 0; }
}

/* Navigation */
.lux-arrows { position: absolute; right: 20px; bottom: 20px; display: flex; gap: 10px; z-index: 10; }
.lux-nav-btn {
    width: 45px; height: 45px;
    background: rgba(255,255,255,0.9);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; color: #000; transition: 0.3s;
}
.lux-nav-btn:hover { background: #B48E40; color: #fff; }

/* Content Styling */
.lux-content { padding: 45px; display: flex; flex-direction: column; justify-content: space-between; }
.lux-title { color: #fff; font-size: 24px; font-weight: 700; margin: 0; }
.lux-stars { list-style: none; display: flex; gap: 5px; color: #B48E40; padding: 0; }
.lux-quote { color: #ccc; font-size: 18px; font-style: italic; position: relative; }
.lux-client-row { background: #fff; padding: 20px; border-radius: 14px; display: flex; justify-content: space-between; align-items: center; }
.lux-avatar { width: 50px; height: 50px; border-radius: 50%; overflow: hidden; }

@media (max-width: 991px) {
    .lux-slide { grid-template-columns: 1fr; }
    .lux-media { height: 400px; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper("#luxTestimonialSwiper", {
        slidesPerView: 1,
        loop: true,
        speed: 800,
        autoplay: { delay: 6000, disableOnInteraction: true },
        navigation: {
            nextEl: ".lux-nav-btn.next",
            prevEl: ".lux-nav-btn.prev",
        },
        pagination: {
            el: ".lux-pagination",
            clickable: true,
        },
        on: {
            slideChange: function () {
                // Jab slide badle, saare videos reset kar do
                document.querySelectorAll('.lux-slide').forEach(s => {
                    s.classList.remove('is-playing');
                    const videoContainer = s.querySelector('.lux-video-container');
                    if(videoContainer) videoContainer.innerHTML = '';
                });
                this.autoplay.start();
            }
        }
    });

    // Pura Media Side Click Karne Par Video Chalega
    document.querySelectorAll('.js-play-trigger').forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            // Agar navigation buttons pe click hua hai toh video mat chalao
            if (e.target.closest('.lux-nav-btn')) return;

            const slide = this.closest('.lux-slide');
            const videoUrl = slide.dataset.videoUrl;
            const container = slide.querySelector('.lux-video-container');

            // Extract YouTube ID
            let videoId = '';
            if(videoUrl.includes('shorts/')) {
                videoId = videoUrl.split('shorts/')[1].split('?')[0];
            } else if(videoUrl.includes('v=')) {
                videoId = videoUrl.split('v=')[1].split('&')[0];
            } else {
                // handle simple youtube.be links
                videoId = videoUrl.split('/').pop();
            }

            if(videoId && !slide.classList.contains('is-playing')) {
                swiper.autoplay.stop();
                slide.classList.add('is-playing');
                container.innerHTML = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
            }
        });
    });
});
</script>