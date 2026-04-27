<?php

namespace App\Http\Controllers;

use App\Models\ConsentForm;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class ConsentFormController extends Controller
{
    public function show($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)->firstOrFail();

        return view('consent-form.display', [
            'consentForm' => $consentForm,
            'inquiry' => $consentForm->inquiry,
        ]);
    }

    public function create(Inquiry $inquiry)
    {
        $existingForm = ConsentForm::where('inquiry_id', $inquiry->id)->first();

        if ($existingForm) {
            return redirect()->route('consent-form.show', $existingForm->consent_token);
        }

        $token = Str::random(32);

        $consentForm = ConsentForm::create([
            'inquiry_id' => $inquiry->id,
            'name' => $inquiry->name,
            'email' => $inquiry->email,
            'phone' => $inquiry->phone,
            'consent_token' => $token,
            'agreed_terms' => json_encode([]),
        ]);

        return redirect()->route('consent-form.show', $token);
    }

    public function store(Request $request, $token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:20',
            'agreed_terms' => 'required|array|min:8|max:8',
            'signature' => 'required|string',
        ]);

        // ✅ Signature save (unchanged)
        $signatureData = $request->input('signature');
        $signaturePath = null;

        if ($signatureData) {
            if (preg_match('/^data:image\/\w+;base64,/', $signatureData, $matches)) {
                $signatureData = substr($signatureData, strlen($matches[0]));
            }

            $signatureData = str_replace(' ', '+', $signatureData);
            $signatureBinary = base64_decode($signatureData);

            if ($signatureBinary !== false && strlen($signatureBinary) > 0) {
                $filename = 'signature_' . $consentForm->consent_token . '.png';
                $signaturePath = 'signatures/' . $filename;
                $fullPath = storage_path('app/' . $signaturePath);

                if (!file_exists(dirname($fullPath))) {
                    mkdir(dirname($fullPath), 0755, true);
                }

                file_put_contents($fullPath, $signatureBinary);
            }
        }

        $consentForm->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'date_of_birth' => $validated['date_of_birth'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['zip'],
            'agreed_terms' => json_encode($validated['agreed_terms']),
            'signature_path' => $signaturePath,
            'is_signed' => true,
            'signed_at' => now(),
        ]);

        $this->generateDocuments($consentForm);

        return redirect()->route('consent-form.show', $token)
            ->with('success', 'Consent form signed successfully!');
    }

    private function generateDocuments(ConsentForm $consentForm)
    {
        $pdfPath = $this->generatePDF($consentForm);

        // ❌ No PNG generation
        $consentForm->update([
            'pdf_file_path' => $pdfPath,
            'png_file_path' => $pdfPath, // fallback
        ]);
    }

    private function generatePDF(ConsentForm $consentForm)
    {
        $agreementTerms = json_decode($consentForm->agreed_terms, true) ?? [];

        $html = view('consent-form.document', [
            'consentForm' => $consentForm,
            'agreementTerms' => $agreementTerms
        ])->render();

        $pdf = PDF::setOptions([
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true,
        ])->loadHTML($html);

        $filename = 'consent_form_' . $consentForm->consent_token . '.pdf';
        $path = storage_path('app/consent-forms/' . $filename);

        if (!file_exists(storage_path('app/consent-forms'))) {
            mkdir(storage_path('app/consent-forms'), 0755, true);
        }

        $pdf->save($path);

        return 'consent-forms/' . $filename;
    }

    private function ensurePdfExists(ConsentForm $consentForm): string
    {
        if (!$consentForm->pdf_file_path || !file_exists(storage_path('app/' . $consentForm->pdf_file_path))) {
            $pdfPath = $this->generatePDF($consentForm);

            $consentForm->update([
                'pdf_file_path' => $pdfPath,
                'png_file_path' => $pdfPath,
            ]);

            return $pdfPath;
        }

        return $consentForm->pdf_file_path;
    }

    public function download($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)
            ->where('is_signed', true)
            ->firstOrFail();

        $pdfPath = $this->ensurePdfExists($consentForm);

        // ✅ Generate UNIQUE filename
        $filename = 'Fantas_Beauty_Consent_Form_'
            . Str::slug($consentForm->name)
            . '_'
            . now()->format('Ymd_His')
            . '.pdf';

        return response()->download(
            storage_path('app/' . $pdfPath),
            $filename
        );
    }

    public function servePdf($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)
            ->where('is_signed', true)
            ->firstOrFail();

        $pdfPath = storage_path('app/' . $this->ensurePdfExists($consentForm));

        return response()->file($pdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline',
        ]);
    }

    public function preview($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)->firstOrFail();

        $pdfPath = storage_path('app/' . $this->ensurePdfExists($consentForm));

        return response()->file($pdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline',
        ]);
    }
}