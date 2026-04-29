@extends('layouts.app')

@section('title', 'Tattoo Consent Form - Fantas Beauty')

@section('content')

    <div class="consent-form-container"
        style="max-width: 900px; margin: 60px auto; padding: 40px; background: #FDFBF7; border-radius: 12px;">

        {{-- Display Success Message --}}
        @if(session('success'))
            <div class="alert alert-success mb-30"
                style="background: #E8F5E9; border: 1px solid #4CAF50; color: #2E7D32; padding: 15px; border-radius: 8px;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Show Form if Not Signed --}}
        @if(!$consentForm->is_signed)
            <div class="consent-form-header" style="text-align: center; margin-bottom: 40px;">
                <h1 style="color: #332B27; font-size: 28px; margin-bottom: 10px;">TATTOO CONSENT FORM</h1>
                <p style="color: #7A6F69; font-size: 14px;">Fantas Beauty Studio - London</p>
            </div>

            <form method="POST" action="{{ route('consent-form.store', $consentForm->consent_token) }}" class="consent-form">
                @csrf

                <div class="form-section"
                    style="margin-bottom: 30px; background: white; padding: 25px; border-radius: 8px; border: 1px solid #F0EAE1;">
                    <h3
                        style="color: #332B27; font-size: 16px; margin-bottom: 20px; border-bottom: 2px solid #B48E40; padding-bottom: 10px;">
                        PERSONAL INFORMATION</h3>

                    <div class="form-row"
                        style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">Name *</label>
                            <input type="text" name="name" value="{{ old('name', $consentForm->name) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('name')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- CHANGED: Date of Birth Validation Added Here --}}
                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">Date of Birth *</label>
                            <input type="date" name="date_of_birth"
                                value="{{ old('date_of_birth', $consentForm->date_of_birth) }}" 
                                required
                                max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}"
                                oninvalid="this.setCustomValidity('You must be at least 18 years old to sign this consent form.')"
                                oninput="this.setCustomValidity('')"
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('date_of_birth')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row"
                        style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">Email *</label>
                            <input type="email" name="email" value="{{ old('email', $consentForm->email) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('email')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">Phone *</label>
                            <input type="tel" name="phone" value="{{ old('phone', $consentForm->phone) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('phone')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">Address *</label>
                        <input type="text" name="address" value="{{ old('address', $consentForm->address) }}" required
                            style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                        @error('address')
                            <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">City *</label>
                            <input type="text" name="city" value="{{ old('city', $consentForm->city) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('city')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">State *</label>
                            <input type="text" name="state" value="{{ old('state', $consentForm->state) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('state')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="display: block; color: #5A4A42; font-weight: 600; margin-bottom: 8px;">ZIP Code *</label>
                            <input type="text" name="zip" value="{{ old('zip', $consentForm->zip) }}" required
                                style="width: 100%; padding: 10px; border: 1px solid #E5E0D8; border-radius: 6px; font-size: 14px;">
                            @error('zip')
                                <span class="error" style="color: #C62828; font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Terms and Conditions --}}
                <div class="form-section"
                    style="margin-bottom: 30px; background: white; padding: 25px; border-radius: 8px; border: 1px solid #F0EAE1;">
                    <h3
                        style="color: #332B27; font-size: 16px; margin-bottom: 20px; border-bottom: 2px solid #B48E40; padding-bottom: 10px;">
                        CONSENT & ACKNOWLEDGMENT</h3>

                    <p style="color: #5A4A42; font-size: 13px; line-height: 1.8; margin-bottom: 20px;">
                        I acknowledge by signing this agreement that I have been given the full opportunity to ask any and all
                        questions which I might have about the obtaining of a tattoo and that all my questions have been
                        answered to my full satisfaction. I specifically acknowledge that I have been advised of the facts and
                        matters set forth below and I agree as follows:
                    </p>

                    <div class="terms-group"
                        style="background: #FDFBF7; padding: 20px; border-radius: 8px; margin-bottom: 20px;">

                        {{-- Term 1 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="communicable_disease" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Communicable Disease Acknowledgment:</strong> If I have diabetes, epilepsy,
                                    hepatitis, hemophilia, HIV-AIDS or any other communicable disease, heart condition or take
                                    medicine which thins the blood I have advised my tattooer. I am not pregnant or nursing. I
                                    am not under the influence of alcohol or drugs.
                                </span>
                            </label>
                        </div>

                        {{-- Term 2 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="skin_conditions" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Skin Conditions:</strong> I do not have medical or skin conditions such as but not
                                    limited to: acne, scarring (Keloid) eczema, psoriasis, freckles, moles or sunburn in the
                                    area to be tattooed that may interfere with said tattoo.
                                </span>
                            </label>
                        </div>

                        {{-- Term 3 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="allergic_reaction" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Allergic Reaction Risk:</strong> I acknowledge that infection is always possible as
                                    a result of the obtaining of a tattoo, particularly in the event that I do not take proper
                                    care of my tattoo. I have received aftercare instructions and I agree to follow them while
                                    my tattoo is healing. I agree that any touch up work needed, due to my own experience, will
                                    be done at my own expense.
                                </span>
                            </label>
                        </div>

                        {{-- Term 4 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="color_variation" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Color and Design Variation:</strong> I realize that variations in color and design
                                    may exist between any tattoo as selected by me and as ultimately applied to my body. I
                                    understand that if my skin color is dark, the colors will not appear as bright as they do on
                                    light skin.
                                </span>
                            </label>
                        </div>

                        {{-- Term 5 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="future_procedures" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Future Procedures Impact:</strong> I understand that if I have any skin treatments,
                                    laser hair removal, plastic surgery or other skin altering procedures, it may result in
                                    adverse changes on my tattoo.
                                </span>
                            </label>
                        </div>

                        {{-- Term 6 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="permanent_change" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Permanent Change:</strong> I understand that a tattoo is a permanent change to my
                                    appearance and that no representations have been made to me as to the ability to later
                                    change or remove my tattoo. To my knowledge, I do not have a physical, mental or medical
                                    impediment or disability which might affect my well being as a direct or indirect result of
                                    my decision to have a tattoo.
                                </span>
                            </label>
                        </div>

                        {{-- Term 7 --}}
                        <div class="term-item"
                            style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #E5E0D8;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="age_acknowledgment" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Age Acknowledgment:</strong> I acknowledge I am over the age of eighteen and that I
                                    have truthfully represented to my tattooer that the obtaining of a tattoo is by my choice
                                    alone. I consent to the application of the tattoo and to any actions or conduct of the
                                    representatives and employees of the tattoo shop reasonably necessary to perform the tattoo
                                    procedure.
                                </span>
                            </label>
                        </div>

                        {{-- Term 8 --}}
                        <div class="term-item" style="margin-bottom: 0;">
                            <label style="display: flex; align-items: flex-start; cursor: pointer; color: #5A4A42;">
                                <input type="checkbox" name="agreed_terms[]" value="professional_disclaimer" required
                                    style="width: 20px; height: 20px; margin-right: 12px; margin-top: 3px; cursor: pointer;">
                                <span style="font-size: 13px; line-height: 1.6;">
                                    <strong>Professional Disclaimer:</strong> I fully understand THE TATTOO ARTIST DOES NOT ACT
                                    AS A MEDICAL PROFESSIONAL. Any suggestions made to me are NOT to be construed as or
                                    substituted for advice from a medical professional.
                                </span>
                            </label>
                        </div>

                    </div>

                    @error('agreed_terms')
                        <div class="error" style="color: #C62828; font-size: 12px; margin-top: 10px;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Digital Signature --}}
                <div class="signature-section"
                    style="background: white; padding: 25px; border-radius: 8px; border: 1px solid #F0EAE1; margin: 30px 0;">
                    <h3
                        style="color: #332B27; font-size: 16px; margin-bottom: 20px; border-bottom: 2px solid #B48E40; padding-bottom: 10px;">
                        DIGITAL SIGNATURE</h3>
                    <div
                        style="border: 2px dashed #E5E0D8; border-radius: 8px; padding: 20px; text-align: center; background: #FDFBF7; margin-bottom: 20px;">
                        <div class="signature-wrapper" style="position: relative; width: 100%; max-width: 600px; margin: 0 auto; border: 2px solid #E5E0D8; border-radius: 6px; background: white; overflow: hidden;">
                            <canvas id="signature-pad" style="display: block; width: 100%; height: auto; touch-action: none;"></canvas>
                        </div>
                        <div style="margin-top: 15px;">
                            <button type="button" id="clear-signature"
                                style="padding: 8px 16px; background: #FF6B6B; color: white; border: none; border-radius: 6px; cursor: pointer; margin-right: 10px;">Clear</button>
                            <small style="color: #9D938A;">Draw your signature using mouse or touch</small>
                        </div>
                        <input type="hidden" name="signature" id="signature-input" required>
                        @error('signature')
                            <div style="color: #C62828; font-size: 12px; margin-top: 10px;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Submit Button --}}
                <div style="text-align: center; margin-top: 30px;">
                    <button type="submit" class="theme-banner-btn"
                        style="padding: 14px 40px; font-size: 16px; cursor: pointer;">
                        <i class="far fa-signature"></i> Submit Signed Consent Form <i class="far fa-angle-double-right"></i>
                    </button>
                </div>

            </form>
        @else
            {{-- Show Signed Form --}}
            <div class="signed-form-message" style="text-align: center; margin-bottom: 40px;">
                <h2 style="color: #27B131; font-size: 24px; margin-bottom: 10px;">✓ Consent Form Signed Successfully!</h2>
                <p style="color: #7A6F69; font-size: 15px;">Your consent form has been signed on
                    {{ $consentForm->signed_at->format('F d, Y h:i A') }}</p>
            </div>

            <div class="signed-form-info"
                style="background: white; padding: 30px; border-radius: 8px; border: 2px solid #27B131; margin-bottom: 30px;">
                <h3 style="color: #332B27; margin-bottom: 20px;">Signed Information</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <p style="color: #9D938A; font-size: 12px; margin-bottom: 4px;">Name</p>
                        <p style="color: #332B27; font-weight: 600;">{{ $consentForm->name }}</p>
                    </div>
                    <div>
                        <p style="color: #9D938A; font-size: 12px; margin-bottom: 4px;">Email</p>
                        <p style="color: #332B27; font-weight: 600;">{{ $consentForm->email }}</p>
                    </div>
                    <div>
                        <p style="color: #9D938A; font-size: 12px; margin-bottom: 4px;">Phone</p>
                        <p style="color: #332B27; font-weight: 600;">{{ $consentForm->phone }}</p>
                    </div>
                    <div>
                        <p style="color: #9D938A; font-size: 12px; margin-bottom: 4px;">Date of Birth</p>
                        <p style="color: #332B27; font-weight: 600;">{{ $consentForm->date_of_birth?->format('F d, Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="download-section" style="text-align: center;">
                <a href="{{ route('consent-form.download', $consentForm->consent_token) }}" class="theme-banner-btn"
                    style="display: inline-block; padding: 14px 40px; text-decoration: none; margin-right: 15px;">
                    📥 Download Consent Form <i class="far fa-angle-double-right"></i>
                </a>
                
            </div>
        @endif

    </div>

    <style>
        .error {
            display: block;
            color: #C62828;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.2.0/dist/signature_pad.umd.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const canvas = document.getElementById('signature-pad');
                const wrapper = canvas.closest('.signature-wrapper');
                const signatureInput = document.getElementById('signature-input');

                function resizeCanvas() {
                    const ratio = Math.max(window.devicePixelRatio || 1, 1);
                    const rect = wrapper.getBoundingClientRect();
                    const displayWidth = rect.width;
                    const displayHeight = 150; // fixed height in CSS pixels


                    canvas.width = displayWidth * ratio;
                    canvas.height = displayHeight * ratio;

                    // Scale context so drawing coordinates match CSS pixels
                    const ctx = canvas.getContext('2d');
                    ctx.scale(ratio, ratio);

                    // Set CSS display size
                    canvas.style.width = displayWidth + 'px';
                    canvas.style.height = displayHeight + 'px';
                }

                // Initial resize
                resizeCanvas();

                const signaturePad = new SignaturePad(canvas, {
                    backgroundColor: 'rgb(255, 255, 255)',
                    penColor: 'rgb(0, 0, 0)',
                    minWidth: 0.5,
                    maxWidth: 2.5
                });

                // Re-resize on window resize (debounced)
                let resizeTimeout;
                window.addEventListener('resize', function () {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(function () {
                        const data = signaturePad.toData();
                        resizeCanvas();
                        signaturePad.clear();
                        if (data && data.length > 0) {
                            signaturePad.fromData(data);
                        }
                    }, 100);
                });

                const clearButton = document.getElementById('clear-signature');

                clearButton.addEventListener('click', function () {
                    signaturePad.clear();
                    signatureInput.value = '';
                });

                // Submit handler: export signature to hidden input before submitting
                document.querySelector('.consent-form').addEventListener('submit', function (e) {
                    if (signaturePad.isEmpty()) {
                        e.preventDefault();
                        alert('Please provide your digital signature before submitting.');
                        return false;
                    }
                    signatureInput.value = signaturePad.toDataURL('image/png');
                });
            });
        </script>
    @endpush
@endsection