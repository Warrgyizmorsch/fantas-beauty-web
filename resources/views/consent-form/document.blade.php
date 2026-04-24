<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: DejaVu Sans, Arial, sans-serif;
    font-size: 10px;
    color: #333;
    line-height: 1.3;
}

.container {
    width: 100%;
    padding: 20px;
}

/* HEADER */
.header {
    text-align: center;
    margin-bottom: 10px;
    border-bottom: 1px solid #333;
    padding-bottom: 5px;
}

.header h1 {
    font-size: 14px;
    margin-bottom: 2px;
}

.header p {
    font-size: 9px;
}

/* INFO GRID */
.info-grid {
    width: 100%;
    margin-bottom: 10px;
}

.info-item {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px dotted #999;
    margin-bottom: 3px;
}

.info-label {
    font-weight: bold;
}

.info-value {
    text-align: right;
}

/* SECTIONS */
.section {
    margin-bottom: 8px;
}

.section-title {
    font-size: 10px;
    font-weight: bold;
    background: #f0f0f0;
    padding: 3px;
    margin-bottom: 4px;
}

.section-content {
    font-size: 9px;
    line-height: 1.3;
}

/* TERMS */
.terms {
    font-size: 9px;
}

.term {
    margin-bottom: 5px;
}

.checkbox {
    display: inline-block;
    width: 10px;
    height: 10px;
    border: 1px solid #333;
    margin-right: 4px;
    text-align: center;
    font-size: 8px;
}

/* SIGNATURE */
.signature-section {
    margin-top: 10px;
}

.signature-line {
    border-bottom: 1px solid #333;
    height: 40px;
    margin-bottom: 3px;
}

.signature-label {
    font-size: 9px;
    font-weight: bold;
}

/* FOOTER */
.footer {
    font-size: 8px;
    text-align: center;
    margin-top: 10px;
    border-top: 1px solid #ddd;
    padding-top: 5px;
}
</style>
</head>

<body>
<div class="container">

<!-- HEADER -->
<div class="header">
    <h1>TATTOO CONSENT FORM</h1>
    <p>Fantas Beauty Studio - London, UK</p>
</div>

<!-- INFO -->
<div class="info-grid">
    <div class="info-item">
        <span class="info-label">NAME:</span>
        <span class="info-value">{{ $consentForm->name }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">DATE:</span>
        <span class="info-value">{{ $consentForm->signed_at?->format('d/m/Y') ?? date('d/m/Y') }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">DOB:</span>
        <span class="info-value">{{ $consentForm->date_of_birth?->format('m/d/Y') }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">PHONE:</span>
        <span class="info-value">{{ $consentForm->phone }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">ADDRESS:</span>
        <span class="info-value">{{ $consentForm->address }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">EMAIL:</span>
        <span class="info-value">{{ $consentForm->email }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">CITY:</span>
        <span class="info-value">{{ $consentForm->city }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">STATE/ZIP:</span>
        <span class="info-value">{{ $consentForm->state }} {{ $consentForm->zip }}</span>
    </div>
</div>

<!-- CONSENT -->
<div class="section">
    <div class="section-title">ACKNOWLEDGEMENT & CONSENT</div>
    <div class="section-content">
        I acknowledge by signing this agreement that I have been given the full opportunity to ask any and all questions which I might have about the obtaining of a tattoo and that all my questions have been answered to my full satisfaction. I specifically acknowledge that I have been advised of the facts and matters set forth below and I agree as follows:
    </div>
</div>

<!-- TERMS -->
<div class="section">
    <div class="section-title">AGREED TERMS & CONDITIONS</div>
    <div class="terms">

        <div class="term">
            <span class="checkbox">{{ in_array('communicable_disease', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Communicable Disease:</strong> If I have diabetes, epilepsy, hepatitis, hemophilia, HIV-AIDS or any other communicable disease, I have advised my tattooer. I am not pregnant or nursing. I am not under the influence.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('skin_conditions', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Skin Conditions:</strong> I do not have medical or skin conditions that may interfere with the tattoo.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('allergic_reaction', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Allergic Reaction & Infection:</strong> I acknowledge infection is always possible. I have received aftercare instructions and agree to follow them.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('color_variation', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Color Variation:</strong> I understand variations in color and design may exist. Dark skin colors will not appear as bright.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('future_procedures', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Future Procedures:</strong> Laser, surgery, or skin treatments may result in adverse changes to my tattoo.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('permanent_change', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Permanent Change:</strong> I understand a tattoo is permanent and no representations about removal have been made.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('age_acknowledgment', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Age & Consent:</strong> I am over 18 and this is my choice. I consent to the application and procedure.
        </div>

        <div class="term">
            <span class="checkbox">{{ in_array('professional_disclaimer', $agreementTerms ?? []) ? '✔' : '' }}</span>
            <strong>Professional Disclaimer:</strong> THE TATTOO ARTIST DOES NOT ACT AS A MEDICAL PROFESSIONAL.
        </div>

    </div>
</div>

<!-- SIGNATURE -->
@php
    $signatureFullPath = storage_path('app/' . $consentForm->signature_path);
    $hasSignature = $consentForm->signature_path && file_exists($signatureFullPath);
    $signatureBase64 = $hasSignature ? base64_encode(file_get_contents($signatureFullPath)) : null;
@endphp

<div class="signature-section">
    <div class="signature-label">CLIENT SIGNATURE</div>

    @if($hasSignature && $signatureBase64)
        <img src="data:image/png;base64,{{ $signatureBase64 }}" style="max-height:50px;">
    @else
        <div class="signature-line"></div>
    @endif

    <div class="signature-label">
        DATE: {{ $consentForm->signed_at?->format('d/m/Y') ?? date('d/m/Y') }}
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <p>This is an official document from Fantas Beauty Studio. Keep this form for your records.</p>
    <p>Form ID: {{ $consentForm->consent_token }} | Generated: {{ now()->format('Y-m-d H:i') }}</p>
</div>

</div>
</body>
</html>