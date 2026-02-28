@extends('layouts.app')

@section('title', 'Contact - Fantas Beauty')

@section('content')

<style>
    /* =========================
       CONTACT PAGE (UPGRADED UI)
    ========================= */

    .contact__area {
        margin: 40px 0;
        position: relative;
    }

    /* Layout wrapper */
    .contact__wrap {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 30px;
        align-items: start;
    }

    /* Left info card */
    .contact__info {
        background: #0b0b0b;
        border-radius: 12px;
        padding: 34px 34px;
        color: #fff;
        position: relative;
        overflow: hidden;
        animation: fadeUp .7s ease both;
    }

    .contact__info:before {
        content: "";
        position: absolute;
        inset: -60px;
        background: radial-gradient(circle at 20% 10%, rgba(180,142,64,.25), transparent 45%),
                    radial-gradient(circle at 80% 60%, rgba(255,255,255,.08), transparent 45%);
        filter: blur(2px);
        pointer-events: none;
    }

    .contact__info > * { position: relative; }

    .contact__info .subtitle__two,
    .contact__info .subtitle__one { display: inline-block; }

    .contact__info h2 {
        margin: 10px 0 10px;
        font-size: 30px;
        line-height: 1.2;
        color: #fff;
    }

    .contact__info p {
        margin: 0 0 18px;
        color: rgba(255,255,255,.82);
        line-height: 1.7;
    }

    .contact__bullets {
        display: grid;
        gap: 10px;
        margin: 18px 0 0;
    }

    .contact__bullet {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        color: rgba(255,255,255,.88);
        font-size: 14px;
        line-height: 1.6;
    }

    .contact__bullet i {
        color: #B48E40;
        margin-top: 2px;
    }

    .contact__chips {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 18px;
    }

    .contact__chip {
        padding: 8px 12px;
        border-radius: 999px;
        border: 1px solid rgba(180,142,64,.45);
        color: rgba(255,255,255,.9);
        background: rgba(180,142,64,.10);
        font-size: 13px;
        transition: .25s ease;
    }

    .contact__chip:hover {
        transform: translateY(-2px);
        background: rgba(180,142,64,.18);
    }

    /* Form card */
    .contact__area-bottom-form.page {
        width: 100%;
        background: var(--color-5);
        padding: 44px;
        position: static;
        border-radius: 12px;
        box-shadow: 0 12px 30px rgba(0,0,0,.08);
        animation: fadeUp .7s ease .1s both;
    }

    .contact__area-bottom-form form input,
    .contact__area-bottom-form form textarea,
    .contact__area-bottom-form form select {
        width: 100%;
        background: transparent;
        border: 1px solid var(--color-11);
        color: var(--color-2);
        height: 44px;
        border-radius: 10px;
        padding: 0 14px;
        outline: none;
        transition: .2s ease;
    }

    .contact__area-bottom-form form textarea {
        height: auto;
        padding: 12px 14px;
        resize: vertical;
        min-height: 120px;
    }

    .contact__area-bottom-form form input:focus,
    .contact__area-bottom-form form textarea:focus,
    .contact__area-bottom-form form select:focus {
        border-color: #B48E40;
        box-shadow: 0 0 0 4px rgba(180,142,64,.14);
    }

    /* Pretty select wrapper */
    .select-wrap {
        position: relative;
    }

    .select-wrap:after {
        content: "▾";
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(17,17,17,.6);
        pointer-events: none;
        font-size: 14px;
    }

    .contact__area-bottom-form select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding-right: 40px;
        cursor: pointer;
    }

    /* Helper text */
    .field-hint {
        margin-top: 6px;
        font-size: 12px;
        color: rgba(17,17,17,.55);
    }

    /* Success / Error messages */
    .form-alert {
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 18px;
        font-size: 14px;
    }
    .form-alert.success {
        background: rgba(16,185,129,.12);
        border: 1px solid rgba(16,185,129,.35);
        color: #065f46;
    }
    .form-alert.error {
        background: rgba(239,68,68,.10);
        border: 1px solid rgba(239,68,68,.35);
        color: #7f1d1d;
    }

    /* Submit button subtle animation */
    .theme-banner-btn {
        position: relative;
        overflow: hidden;
        transition: transform .2s ease;
    }
    .theme-banner-btn:hover { transform: translateY(-1px); }
    .theme-banner-btn:before {
        content: "";
        position: absolute;
        top: 0;
        left: -140%;
        width: 120%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,.22), transparent);
        transform: skewX(-12deg);
        transition: .6s ease;
    }
    .theme-banner-btn:hover:before { left: 140%; }

    /* Responsive */
    @media (max-width: 992px) {
        .contact__wrap { grid-template-columns: 1fr; }
        .contact__area-bottom-form.page { padding: 32px; }
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(14px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

{{-- =========================
        PAGE BANNER
========================= --}}
<div class="page__banner" data-background="{{ asset('assets/img/bg/page.jpg') }}">
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
<div class="contact__area">
    <div class="container">

        <div class="contact__wrap">

            {{-- LEFT: Content / Info --}}
            <div class="contact__info">
                <span class="subtitle__two">Get in Touch</span>
                <span class="subtitle__one">Fantas Beauty</span>
                <h2>Book Your Next Luxury Service</h2>
                <p>
                    Tell us what you’re looking for and our team will get back to you with the best options,
                    pricing guidance, and the next available slots.
                </p>

                <div class="contact__bullets">
                    <div class="contact__bullet"><i class="far fa-check"></i> Hygiene-first setup & professional experts</div>
                    <div class="contact__bullet"><i class="far fa-check"></i> Premium products and clean finishing</div>
                    <div class="contact__bullet"><i class="far fa-check"></i> Quick response & easy appointment booking</div>
                </div>

                <div class="contact__chips">
                    <span class="contact__chip">Tattoos</span>
                    <span class="contact__chip">Piercing</span>
                    <span class="contact__chip">Eyelashes</span>
                    <span class="contact__chip">Nails</span>
                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div class="contact__area-bottom">
                <div class="contact__area-bottom-form page">

                    {{-- Flash message --}}
                    @if(session('success'))
                        <div class="form-alert success">{{ session('success') }}</div>
                    @endif

                    {{-- Validation errors --}}
                    @if($errors->any())
                        <div class="form-alert error">
                            Please check the form fields and try again.
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/contact-submit') }}">
                        @csrf

                        <div class="row">

                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="text"
                                           name="name"
                                           placeholder="Your Name"
                                           value="{{ old('name') }}"
                                           required>
                                    @error('name') <div class="field-hint">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="email"
                                           name="email"
                                           placeholder="Email Address"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email') <div class="field-hint">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="text"
                                           name="phone"
                                           placeholder="Phone (Optional)"
                                           value="{{ old('phone') }}">
                                    @error('phone') <div class="field-hint">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- ✅ Service Dropdown (replacing Size) --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="service" required>
                                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select Service</option>
                                            <option value="Tattoos" {{ old('service') === 'Tattoos' ? 'selected' : '' }}>Tattoos</option>
                                            <option value="Piercing" {{ old('service') === 'Piercing' ? 'selected' : '' }}>Piercing</option>
                                            <option value="Eyelashes" {{ old('service') === 'Eyelashes' ? 'selected' : '' }}>Eyelash Extensions</option>
                                            <option value="Nails" {{ old('service') === 'Nails' ? 'selected' : '' }}>Nails (Extensions / Art)</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the service you want to book.</div>
                                    @error('service') <div class="field-hint">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <textarea name="message"
                                              rows="5"
                                              placeholder="Write your message..."
                                              required>{{ old('message') }}</textarea>
                                    @error('message') <div class="field-hint">{{ $message }}</div> @enderror
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

@endsection