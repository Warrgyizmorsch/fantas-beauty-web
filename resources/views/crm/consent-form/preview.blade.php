<!DOCTYPE html>
<html>
<head>
    <title>{{ $consentForm->inquiry->name }} - Consent Form PDF</title>
    <style>
        body { margin: 0; padding: 20px; font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .pdf-container { width: 100%; height: 80vh; border: 1px solid #ddd; }
        .controls { margin-top: 20px; text-align: center; }
        .btn { display: inline-block; padding: 10px 20px; margin: 0 10px; background: #007cba; color: white; text-decoration: none; border-radius: 4px; }
        .back-btn { background: #6c757d; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Fantas Beauty - Signed Consent Form</h2>
        <p><strong>{{ $consentForm->inquiry->name }}</strong> - {{ $consentForm->signed_at->format('M d, Y H:i') }}</p>
    </div>
    <iframe src="{{ route('crm.consent-form.serve-pdf', $consentForm->consent_token) }}" class="pdf-container"></iframe>
    <div class="controls">
        <a href="{{ route('crm.consent-form.download', $consentForm->consent_token) }}" class="btn">Download PDF</a>
        <a href="{{ route('crm.leads.consent-form-filled') }}" class="btn back-btn">Back to Filled Forms</a>
    </div>
</body>
</html>
