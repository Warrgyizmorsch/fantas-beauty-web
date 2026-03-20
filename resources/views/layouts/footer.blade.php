{{-- =========================
        FOOTER START
========================= --}}

<style>
    /* Footer Logo Default */
.footer-logo {
    height: 70px;
    width: auto;
    max-width: 100%;
    transition: all 0.3s ease;
}

/* Tablet */
@media (max-width: 991px) {
    .footer-logo {
        height: 55px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .footer-logo {
        height: 45px;
    }
}
</style>
<div class="footer__two">

    <div class="footer__area-shape">
        <img src="{{ asset('assets/img/shape/foorer.png') }}" alt="">
    </div>

    <div class="container">
        <div class="row">

            {{-- Logo + About --}}
            <div class="col-xl-4 col-lg-4 col-md-8 md-mb-30">
                <div class="footer__two-widget">

                   <div class="footer__two-widget-logo">
                        <a href="{{ url('/') }}" class="footer-logo-wrapper">
                            <img 
                                src="{{ asset('assets/logo/fantas-logo.png') }}" 
                                alt="Fantas Beauty"
                                class="footer-logo img-fluid">
                        </a>
                    </div>

                    <p>
                        Premium tattoo & beauty studio — luxury ink, flawless hygiene, and 
                        artist-led transformations. Experience precision, creativity, and 
                        elegance with every service at Fantas Beauty.
                    </p>

                </div>
            </div>



            {{-- Contact --}}
            <div class="col-xl-4 col-lg-4 col-md-4 lg-mb-30">
                <div class="footer__two-widget border1">
                    <h5>Contact Us</h5>

                    <div class="footer__two-widget-contact">

                        <div class="footer__two-widget-contact-item">
                            <div class="footer__two-widget-contact-item-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__two-widget-contact-item-content">
                                <h6>
                                    <a href="#">
                                        Walworth Road, London, United Kingdom
                                    </a>
                                </h6>
                            </div>
                        </div>

                        <div class="footer__two-widget-contact-item">
                            <div class="footer__two-widget-contact-item-icon">
                                <i class="fal fa-phone-alt"></i>
                            </div>
                            <div class="footer__two-widget-contact-item-content">
                                <h6>
                                    <a href="tel:+447957317266">
                                        +44 07957 317266
                                    </a>
                                </h6>
                            </div>
                        </div>

                        <div class="footer__two-widget-contact-item">
                            <div class="footer__two-widget-contact-item-icon">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="footer__two-widget-contact-item-content">
                                <h6>
                                    <a href="mailto:info@fantasbeauty.co.uk">
                                        info@fantasbeauty.co.uk
                                    </a>
                                </h6>
                            </div>
                        </div>

                        <div class="footer__two-widget-contact-item">
                            <div class="footer__two-widget-contact-item-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="footer__two-widget-contact-item-content">
                                <h6>All Days, 10:00 AM – 08:00 PM</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            {{-- Newsletter + Social --}}
            <div class="col-xl-4 col-lg-4 col-md-7">
                <div class="footer__two-widget border1">
                    <h5>Newsletter</h5>

                    <div class="footer__two-widget-newsletter">
                        <form method="POST" action="#">
                            @csrf
                            <input type="email" name="email" placeholder="Enter Your Email" required>
                            <button type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                    <div class="footer__two-widget-social">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/fantas_walworthroad/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                             <li>
                                <a href="https://www.youtube.com/channel/UCl814PIbTHK7T8v-xGjPJTQ" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                               <li>
                                <a href="https://api.whatsapp.com/send/?phone=447957317266&text&type=phone_number&app_absent=0" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>



    {{-- Copyright --}}
    <div class="copyright__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="copyright__two-center">
                        <p>
                            © {{ date('Y') }} Fantas Beauty. All Rights Reserved.  
                            Developed by <strong>Warrgyizmorsch</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- =========================
        FOOTER END
========================= --}}