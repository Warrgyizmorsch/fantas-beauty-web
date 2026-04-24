<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #1a1a2e;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 22px;
        }

        .body {
            padding: 30px;
            color: #2d2d2d;
            line-height: 1.7;
        }

        .body p {
            margin: 0 0 16px;
        }

        .highlight {
            background: #f0f4ff;
            border-left: 4px solid #1a1a2e;
            padding: 12px 16px;
            border-radius: 4px;
            margin: 20px 0;
        }

        .consent-section {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }

        .consent-section h3 {
            margin-top: 0;
            color: #856404;
        }

        .btn {
            display: inline-block;
            background: #1a1a2e;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 10px 0;
            font-weight: bold;
        }

        .btn:hover {
            background: #0d0d1a;
        }

        .footer {
            background: #f4f4f4;
            padding: 20px 30px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1>Enquiry Received!</h1>
        </div>
        <div class="body">
            <p>Dear <strong>{{ $inquiry->name }}</strong>,</p>
            <p>Thank you for filling out the form for <strong>{{ $inquiry->service_name }}</strong>.</p>
            <p>We have successfully received your details, and our team will review your submission shortly. We
                appreciate your interest and the time you took to provide the information.</p>

            <div class="highlight">
                <p style="margin:0;">👉 <strong>Next Step:</strong> Our team will contact you on
                    <strong>{{ $inquiry->phone }}</strong> or reply to this email shortly.</p>
            </div>

            {{-- Consent Form Section for Tattoo Services --}}
            @if($consentForm)
                <div class="consent-section">
                    <h3>📋 Tattoo Consent Form Required</h3>
                    <p>Before we proceed with your tattoo appointment, we require you to fill out and sign our <strong>Tattoo Consent Form</strong>. This is an important document that ensures your safety and confirms your understanding of the tattoo process.</p>
                    
                    <p><strong>Please complete the consent form using the link below:</strong></p>
                    
                    <center>
                        <a href="{{ route('consent-form.show', $consentForm->consent_token) }}" class="btn">
                            📝 Complete Consent Form
                        </a>
                    </center>

                    <p><small style="color: #666;">Your information has been pre-filled for your convenience. You'll need to agree to all terms and conditions and provide your signature to complete the process.</small></p>
                </div>
            @endif

            <p>If you have any questions or need assistance, feel free to reply to this email.</p>
            <p>Best regards,<br><strong>Fantas Beauty</strong><br>nikhil.warrgyizmorsch@gmail.com</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Fantas Beauty. All rights reserved.
        </div>
    </div>
</body>

</html>