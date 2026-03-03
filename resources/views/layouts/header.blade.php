

{{-- =========================
        HEADER START
========================= --}}
<style>
    .logo-img {
        height: 50px; 
        width: auto;
        transition: all 0.3s ease;
    }

    .header__sticky .logo-img {
        height: 60px;
    }

    /* Tablet */
    @media (max-width: 991px) {
        .logo-img {
            height: 40px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .logo-img {
            height: 35px;
        }
    }

    .header__area {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .header__area-menubar-right-menu ul li a {
        padding-top: 20px !important; 
        padding-bottom: 20px !important;
    }

    .header__area-menubar-right-menu ul li .primary-btn {
        padding: 10px 25px !important;
    }
</style>
<div class="header__sticky">
    <div class="top__bar">
    <div class="container custom__container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="top__bar-left">
                    <ul class="d-flex align-items-center justify-content-around w-100" style="margin: 0; padding: 0; list-style: none;">
                        <li>
                            <a href="{{ url('/services.tattoos') }}" style="font-weight: 500; font-size: 14px;">
                                Tattoos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services.nails') }}" style="font-weight: 500; font-size: 14px;">
                                Makeup
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services.eyelashes') }}" style="font-weight: 500; font-size: 14px;">
                                Lashes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="header__area two">
        <div class="container custom__container">
            <div class="header__area-menubar">

                {{-- LOGO --}}
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">

                        <a href="{{ url('/') }}" class="logo-wrapper">
                            <img 
                                src="{{ asset('assets/logo/fantas-logo.png') }}" 
                                alt="Fantas Beauty"
                                class="logo-img img-fluid">
                        </a>

                        <div class="responsive-menu"></div>
                    </div>
                </div>

                {{-- MENU --}}
                <div class="header__area-menubar-right two">
                    <div class="header__area-menubar-right-menu menu-responsive">
                        <ul id="mobilemenu">

                            <li><a href="{{ url('/') }}">Home</a></li>

                                <li class="menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ url('services.tattoos') }}">
                                                Tattoos & Piercing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services.nails') }}">
                                                Nail Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services.eyelashes') }}">
                                                Eyelash Extensions
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                
                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>

                            <li>
                                <a href="{{ url('/book-appointment') }}" class="primary-btn">
                                    Book Appointment
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                {{-- RIGHT SIDE ICONS --}}
                <div class="header__area-menubar-right-box">

                    <div class="header__area-menubar-right-call">
                        <a href="tel:+447514836169">
                            <i class="fal fa-phone-alt"></i>
                            +44 7514 836169
                        </a>                       
                    </div>

                    {{-- SEARCH --}}
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">
                            <span class="header__area-menubar-right-box-search-icon two open">
                                <i class="fal fa-search"></i>
                            </span>
                        </div>

                        <div class="header__area-menubar-right-box-search-box">
                            <form action="{{ url('/search') }}" method="GET">
                                <input type="search" name="query" placeholder="Search Here...">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                            <span class="header__area-menubar-right-box-search-box-icon">
                                <i class="fal fa-times"></i>
                            </span>
                        </div>
                    </div>

                    {{-- SIDEBAR TOGGLE --}}
                    <div class="header__area-menubar-right-box-sidebar">
                        <div class="header__area-menubar-right-box-sidebar-popup-icon">
                            <i class="fal fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- =========================
        HEADER END
========================= --}}



{{-- =========================
        SIDEBAR START
========================= --}}
<div class="header__area-menubar-right-box-sidebar-popup">
    <div class="sidebar-close-btn">
        <i class="fal fa-times"></i>
    </div>

    <div class="header__area-menubar-right-box-sidebar-popup-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo/fantas-logo.png') }}" alt="Fantas Beauty" class="logo-img img-fluid">
        </a>
    </div>

    <p>
        Fantas Beauty provides premium tattoo and nail extension services with 
        professional care and a luxury experience.
    </p>

    <div class="header__area-menubar-right-box-sidebar-popup-contact">
        <h4 class="mb-30">Contact Info</h4>

        <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                <i class="fal fa-phone-alt"></i>
            </div>
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                <span>Call Now</span>
                <h6><a href="tel:+447514836169">+44 7514 836169</a></h6>
            </div>
        </div>

        <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                <i class="fal fa-envelope"></i>
            </div>
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                <span>Email</span>
                <h6>
                    <a href="mailto:info@fantasbeauty.co.uk">
                        info@fantasbeauty.co.uk
                    </a>
                </h6>
            </div>
        </div>

        <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                <i class="fal fa-clock"></i>
            </div>
            <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                <span>Opening Hours</span>
                <h6>All Days, 10:00 AM - 08:00 PM</h6>
            </div>
        </div>
    </div>

    {{-- SOCIAL --}}
    <div class="header__area-menubar-right-box-sidebar-popup-social">
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
                <a href="https://api.whatsapp.com/send/?phone=447514836169&text&type=phone_number&app_absent=0" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="sidebar-overlay"></div>
{{-- =========================
        SIDEBAR END
========================= --}}