

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
    @media only screen and (max-width: 767px) {
    /* Container ko align karne ke liye */
    .header__area-menubar-right-box {
        display: flex !important;
        align-items: center;
        justify-content: flex-end;
    }

    .header__area-menubar-right-box-download {
        margin-right: 31px; /* Three lines se gap */
        margin-top: -66px;      /* Negative margin ki zaroorat nahi padegi */
        display: inline-block;
    }

    /* Button ka size mobile ke hisaab se perfect karne ke liye */
    #installAppBtn {
        padding: 6px 10px;
        font-size: 12px;
    }
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
                            <a href="{{ url('/services/tattoos') }}" style="font-weight: 500; font-size: 14px;">
                                Tattoos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services/Piercing') }}" style="font-weight: 500; font-size: 14px;">
                                Piercing
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services/makeover') }}" style="font-weight: 500; font-size: 14px;">
                                Makeover
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
                                            <a href="{{ url('services/tattoos') }}">
                                                Tattoos 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/Piercing') }}">
                                                Piercing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/makeover') }}">
                                                Makeover
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
                <div class="header__area-menubar-right-box d-flex align-items-center justify-content-end">
                    <div class="header__area-menubar-right-call header-call-desktop">
                        <a class="call-pill" href="tel:+447514836169" aria-label="Call us">
                            <span class="call-ico"><i class="fal fa-phone-alt"></i></span>
                            <span class="call-text">
                                <small>Call Us</small>
                                <strong>+44 7514 836169</strong>
                            </span>
                        </a>
                    </div>

                    <div class="header__area-menubar-right-box-search">
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

                    <div class="header__area-menubar-right-box-download">
                        <button id="installAppBtn" class="btn" style="padding: 8px 12px; font-size: 20px; border-radius: 5px;">
                            <i class="fas fa-download"></i>
                        </button>
                    </div>

                    <div class="header__area-menubar-right-box-sidebar">
                        <div class="header__area-menubar-right-box-sidebar-popup-icon" style="cursor: pointer; font-size: 20px;">
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

<style>
  .header-call-desktop{display:none;}
  @media (min-width: 992px){ .header-call-desktop{display:block;} }

  .call-pill{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:10px 14px;
    border-radius:999px;
    text-decoration:none;
    border:1px solid rgba(0,0,0,.12);
    background: rgba(255,255,255,.9);
    transition: .2s;
  }
  .call-pill:hover{
    transform: translateY(-1px);
    box-shadow: 0 10px 24px rgba(0,0,0,.10);
  }
  .call-ico{
    width:38px;height:38px;border-radius:50%;
    display:grid;place-items:center;
    border:1px solid rgba(0,0,0,.12);
  }
  .call-text small{
    display:block;
    font-size:12px;
    opacity:.7;
    line-height:1;
  }
  .call-text strong{
    display:block;
    font-size:14px;
    line-height:1.1;
    letter-spacing:.2px;
  }
</style>
{{-- =========================
        SIDEBAR END
========================= --}}