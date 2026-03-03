@extends('layouts.app')

@section('title', 'Contact - Fantas Beauty')

@section('content')

<style>
    /* =========================
       CONTACT PAGE (LUXURY LIGHT THEME - NO BLACK)
    ========================= */

    .contact__area {
        margin: 40px 0;
        position: relative;
        background-color: #FDFBF7; /* Soft cream background for the section */
        padding: 60px 0;
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
        background: #e6e1d5; /* White instead of black */
        border: 1px solid #F0EAE1;
        border-radius: 12px;
        padding: 40px 34px;
        color: #5A4A42; /* Warm dark brown text */
        position: relative;
        overflow: hidden;
        box-shadow: 0 12px 30px rgba(180,142,64,.05); /* Gold tinted shadow */
        animation: fadeUp .7s ease both;
    }

    .contact__info:before {
        content: "";
        position: absolute;
        inset: -60px;
        background: radial-gradient(circle at 20% 10%, rgba(180,142,64,.1), transparent 45%),
                    radial-gradient(circle at 80% 60%, rgba(180,142,64,.05), transparent 45%);
        filter: blur(2px);
        pointer-events: none;
    }

    .contact__info > * { position: relative; }

    .contact__info .subtitle__two,
    .contact__info .subtitle__one { 
        display: inline-block; 
        color: #9c6c0b; /* Gold */
        font-weight: 600;
        letter-spacing: 1px;
    }

    .contact__info h2 {
        margin: 10px 0 10px;
        font-size: 30px;
        line-height: 1.2;
        color: #332B27; /* Deep rich brown heading */
    }

    .contact__info p {
        margin: 0 0 18px;
        color: #7A6F69; /* Soft taupe */
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
        color: #5A4A42;
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
        border: 1px solid rgba(180,142,64,.3);
        color: #8C7B6D;
        background: #FDFBF7;
        font-size: 13px;
        transition: .25s ease;
    }

    .contact__chip:hover {
        transform: translateY(-2px);
        background: #F4EFE6;
        color: #B48E40;
    }

    /* Form card */
    .contact__area-bottom-form.page {
        width: 100%;
        background: #FFFFFF;
        padding: 44px;
        position: static;
        border-radius: 12px;
        border: 1px solid #F0EAE1;
        box-shadow: 0 12px 30px rgba(180,142,64,.08); /* Gold tinted shadow instead of black */
        animation: fadeUp .7s ease .1s both;
    }

    .contact__area-bottom-form form input,
    .contact__area-bottom-form form textarea,
    .contact__area-bottom-form form select {
        width: 100%;
        background: #FDFDFD;
        border: 1px solid #E5E0D8;
        color: #5A4A42; /* Text color */
        height: 44px;
        border-radius: 8px;
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

    .contact__area-bottom-form form input::placeholder,
    .contact__area-bottom-form form textarea::placeholder {
        color: #AFA69D; /* Light warm grey */
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
        color: #B48E40; /* Gold arrow */
        pointer-events: none;
        font-size: 16px;
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
        color: #9D938A; /* Soft taupe hint */
    }

    /* Success / Error messages */
    .form-alert {
        border-radius: 8px;
        padding: 12px 14px;
        margin-bottom: 18px;
        font-size: 14px;
    }
    .form-alert.success {
        background: #E8F5E9;
        border: 1px solid #C8E6C9;
        color: #2E7D32;
    }
    .form-alert.error {
        background: #FFEBEE;
        border: 1px solid #FFCDD2;
        color: #C62828;
    }

    /* Submit button subtle animation */
    .theme-banner-btn {
        background: #B48E40; /* Gold background */
        color: #FFFFFF;
        border: none;
        padding: 14px 28px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: transform .2s ease, background .3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        width: 100%;
        justify-content: center;
    }
    .theme-banner-btn:hover { 
        transform: translateY(-2px); 
        background: #A07D38; /* Slightly darker gold */
        box-shadow: 0 8px 20px rgba(180,142,64,.2);
    }
    .theme-banner-btn:before {
        content: "";
        position: absolute;
        top: 0;
        left: -140%;
        width: 120%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,.3), transparent);
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
<div class="page__banner" data-background="{{ asset('assets/img/bg/common-banner.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Book appointment</h1>
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
                <span class="subtitle__two">Book appointment</span><br>
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
                    @if(session('error'))
                        <div class="form-alert error">{{ session('error') }}</div>
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
                                    <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                    @error('name') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                    @error('email') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="text" name="phone" placeholder="Phone (Optional)" value="{{ old('phone') }}">
                                    @error('phone') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Size Dropdown --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="size" required>
                                            <option value="" disabled {{ old('size') ? '' : 'selected' }}>Select Size</option>
                                            <option value="Small" {{ old('size') === 'Small' ? 'selected' : '' }}>Small (0-2 inch)</option>
                                            <option value="Medium" {{ old('size') === 'Medium' ? 'selected' : '' }}>Medium (2-4 inch)</option>
                                            <option value="Large" {{ old('size') === 'Large' ? 'selected' : '' }}>Large (4+ inch)</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the size you want to book.</div>
                                    @error('size') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Placement Dropdown --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="placement" required>
                                            <option value="" disabled {{ old('placement') ? '' : 'selected' }}>Select Placement</option>
                                            <option value="Forearm" {{ old('placement') === 'Forearm' ? 'selected' : '' }}>Forearm</option>
                                            <option value="Wrist" {{ old('placement') === 'Wrist' ? 'selected' : '' }}>Wrist</option>
                                            <option value="Upper Arm" {{ old('placement') === 'Upper Arm' ? 'selected' : '' }}>Upper Arm / Bicep</option>
                                            <option value="Shoulder" {{ old('placement') === 'Shoulder' ? 'selected' : '' }}>Shoulder</option>
                                            <option value="Chest" {{ old('placement') === 'Chest' ? 'selected' : '' }}>Chest</option>
                                            <option value="Back" {{ old('placement') === 'Back' ? 'selected' : '' }}>Back</option>
                                            <option value="Spine" {{ old('placement') === 'Spine' ? 'selected' : '' }}>Spine</option>
                                            <option value="Ribs" {{ old('placement') === 'Ribs' ? 'selected' : '' }}>Ribs</option>
                                            <option value="Thigh" {{ old('placement') === 'Thigh' ? 'selected' : '' }}>Thigh</option>
                                            <option value="Calf" {{ old('placement') === 'Calf' ? 'selected' : '' }}>Calf</option>
                                            <option value="Ankle" {{ old('placement') === 'Ankle' ? 'selected' : '' }}>Ankle</option>
                                            <option value="Hand" {{ old('placement') === 'Hand' ? 'selected' : '' }}>Hand</option>
                                            <option value="Finger" {{ old('placement') === 'Finger' ? 'selected' : '' }}>Finger</option>
                                            <option value="Neck" {{ old('placement') === 'Neck' ? 'selected' : '' }}>Neck</option>
                                            <option value="Behind Ear" {{ old('placement') === 'Behind Ear' ? 'selected' : '' }}>Behind Ear</option>
                                            <option value="Hip / Side" {{ old('placement') === 'Hip / Side' ? 'selected' : '' }}>Hip / Side</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the Tattoo Placement you want to book.</div>
                                    @error('placement') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Style Dropdown --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="style" required>
                                            <option value="" disabled {{ old('style') ? '' : 'selected' }}>Select Style</option>
                                            <option value="Fine Line" {{ old('style') === 'Fine Line' ? 'selected' : '' }}>Fine Line</option>
                                            <option value="Minimal" {{ old('style') === 'Minimal' ? 'selected' : '' }}>Minimal</option>
                                            <option value="Blackwork" {{ old('style') === 'Blackwork' ? 'selected' : '' }}>Blackwork</option>
                                            <option value="Realism" {{ old('style') === 'Realism' ? 'selected' : '' }}>Realism</option>
                                            <option value="Geometric" {{ old('style') === 'Geometric' ? 'selected' : '' }}>Geometric</option>
                                            <option value="Ornamental" {{ old('style') === 'Ornamental' ? 'selected' : '' }}>Ornamental</option>
                                            <option value="Mandala" {{ old('style') === 'Mandala' ? 'selected' : '' }}>Mandala</option>
                                            <option value="Traditional" {{ old('style') === 'Traditional' ? 'selected' : '' }}>Traditional</option>
                                            <option value="Neo-Traditional" {{ old('style') === 'Neo-Traditional' ? 'selected' : '' }}>Neo-Traditional</option>
                                            <option value="Script" {{ old('style') === 'Script' ? 'selected' : '' }}>Script / Lettering</option>
                                            <option value="Portrait" {{ old('style') === 'Portrait' ? 'selected' : '' }}>Portrait</option>
                                            <option value="Watercolor" {{ old('style') === 'Watercolor' ? 'selected' : '' }}>Watercolor</option>
                                            <option value="Japanese" {{ old('style') === 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                            <option value="Tribal" {{ old('style') === 'Tribal' ? 'selected' : '' }}>Tribal</option>
                                            <option value="Dotwork" {{ old('style') === 'Dotwork' ? 'selected' : '' }}>Dotwork</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the Tattoo Style you want to book.</div>
                                    @error('style') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Type Dropdown --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="tattoo_type" required>
                                            <option value="" disabled {{ old('tattoo_type') ? '' : 'selected' }}>Select Type</option>
                                            <option value="New Tattoo" {{ old('tattoo_type') === 'New Tattoo' ? 'selected' : '' }}>New Tattoo</option>
                                            <option value="Cover-up" {{ old('tattoo_type') === 'Cover-up' ? 'selected' : '' }}>Cover-up</option>
                                            <option value="Touch-up" {{ old('tattoo_type') === 'Touch-up' ? 'selected' : '' }}>Touch-up</option>
                                            <option value="Rework" {{ old('tattoo_type') === 'Rework' ? 'selected' : '' }}>Rework / Redesign</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the Tattoo Type you want to book.</div>
                                    @error('tattoo_type') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Ink Dropdown --}}
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <div class="select-wrap">
                                        <select name="ink_preference" required>
                                            <option value="" disabled {{ old('ink_preference') ? '' : 'selected' }}>Select Ink</option>
                                            <option value="Black & Grey" {{ old('ink_preference') === 'Black & Grey' ? 'selected' : '' }}>Black & Grey</option>
                                            <option value="Color" {{ old('ink_preference') === 'Color' ? 'selected' : '' }}>Color</option>
                                            <option value="Not Sure" {{ old('ink_preference') === 'Not Sure' ? 'selected' : '' }}>Not Sure</option>
                                        </select>
                                    </div>
                                    <div class="field-hint">Choose the Ink Preference you want to book.</div>
                                    @error('ink_preference') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <textarea name="message" rows="5" placeholder="Write your message..." required>{{ old('message') }}</textarea>
                                    @error('message') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 mb-30">
                                <div class="contact__area-bottom-form-item">
                                    <input type="url" name="reference_link" placeholder="Paste Pinterest/Instagram/Drive link (optional)" value="{{ old('reference_link') }}">
                                    <div class="field-hint">Reference Link (optional)</div>       
                                    @error('reference_link') <div class="field-hint" style="color:#C62828;">{{ $message }}</div> @enderror
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