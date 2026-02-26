<div class="instagram__area one">
    <div class="container-fluid">

        @php
            $instaImages = [
                'assets/testimonials/insta-1.png',
                'assets/testimonials/insta-2.png',
                'assets/testimonials/insta-3.png',
                'assets/testimonials/12.jpg',
                'assets/testimonials/6.jpg',
                'assets/testimonials/2.jpg',
            ];
        @endphp

        <div class="row g-3">

            @foreach($instaImages as $img)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="instagram__area-item">

                        <img 
                            src="{{ asset($img) }}" 
                            alt="Fantas Beauty Instagram"
                            class="img-fluid">

                        <div class="instagram__area-item-icon">
                            <a href="https://www.instagram.com/fantas_walworthroad/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>