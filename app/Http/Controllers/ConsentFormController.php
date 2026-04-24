<?php

namespace App\Http\Controllers;

use App\Models\ConsentForm;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GdDriver;

class ConsentFormController extends Controller
{
    /**
     * Show the consent form for a specific inquiry
     */
    public function show($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)->firstOrFail();

        return view('consent-form.display', [
            'consentForm' => $consentForm,
            'inquiry' => $consentForm->inquiry,
        ]);
    }

    /**
     * Create a new consent form from inquiry data
     */
    public function create(Inquiry $inquiry)
    {
        // Check if consent form already exists for this inquiry
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

    /**
     * Store the signed consent form
     */
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

        // Handle signature image
        $signatureData = $request->input('signature');
        $signaturePath = null;
        \Log::info('Signature input received', ['has_data' => !empty($signatureData), 'length' => strlen($signatureData ?? '')]);
        
        if ($signatureData) {
            // Extract base64 data using regex to handle any data:*;base64, prefix
            if (preg_match('/^data:image\/\w+;base64,/', $signatureData, $matches)) {
                $signatureData = substr($signatureData, strlen($matches[0]));
            }
            $signatureData = str_replace(' ', '+', $signatureData);
            
            $signatureBinary = base64_decode($signatureData);
            \Log::info('Base64 decoded', ['binary_length' => strlen($signatureBinary ?? ''), 'valid_decode' => $signatureBinary !== false]);
            
            if ($signatureBinary !== false && strlen($signatureBinary) > 0) {
                $filename = 'signature_' . $consentForm->consent_token . '.png';
                $signaturePath = 'signatures/' . $filename;
                $fullPath = storage_path('app/' . $signaturePath);
                
                $dir = dirname($fullPath);
                if (!file_exists($dir)) {
                    $mkdirResult = mkdir($dir, 0755, true);
                    \Log::info('Signatures dir created', ['result' => $mkdirResult, 'dir' => $dir]);
                }
                
                $writeResult = file_put_contents($fullPath, $signatureBinary);
                \Log::info('Signature saved', ['path' => $fullPath, 'bytes_written' => $writeResult, 'exists' => file_exists($fullPath)]);
            } else {
                \Log::error('Signature decode failed', ['raw_data_preview' => substr($request->input('signature'), 0, 50)]);
            }
        }

        // Update the consent form
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

        // Generate PDF and PNG
        $this->generateDocuments($consentForm);

        return redirect()->route('consent-form.show', $token)
            ->with('success', 'Consent form signed successfully! Your copy is ready for download.');    
    }

    /**
     * Generate PDF and PNG documents
     */
    private function generateDocuments(ConsentForm $consentForm)
    {
        $pdfPath = $this->generatePDF($consentForm);
        $pngPath = $this->generatePNG($pdfPath);

        $consentForm->update([
            'pdf_file_path' => $pdfPath,
            'png_file_path' => $pngPath,
        ]);
    }

    /**
     * Generate PDF from the consent form
     */
    private function generatePDF(ConsentForm $consentForm)
    {
        $agreementTerms = json_decode($consentForm->agreed_terms, true) ?? [];
        $html = view('consent-form.document', [
            'consentForm' => $consentForm,
            'agreementTerms' => $agreementTerms
        ])->render();

        // Configure dompdf to allow base64 images and remote content
        $pdf = PDF::setOptions([
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true,
            'isPhpEnabled' => false,
        ])->loadHTML($html);

        $filename = 'consent_form_' . $consentForm->consent_token . '.pdf';
        $path = storage_path('app/consent-forms/' . $filename);

        // Create directory if it doesn't exist
        if (!file_exists(storage_path('app/consent-forms'))) {
            mkdir(storage_path('app/consent-forms'), 0755, true);
        }

        $pdf->save($path);

        return 'consent-forms/' . $filename;
    }

    /**
     * Generate PNG from PDF using ImageMagick
     * Note: This requires ImageMagick to be installed on the server
     */
    private function generatePNG(string $pdfPath)
    {
        $fullPdfPath = storage_path('app/' . $pdfPath);
        $filename = 'consent_form_' . pathinfo($pdfPath, PATHINFO_FILENAME) . '.png';
        $pngPath = storage_path('app/consent-forms/' . $filename);

        // Use ImageMagick to convert PDF to PNG
        // Note: This requires ImageMagick installed on your server
        $command = "convert \"{$fullPdfPath}[0]\" -density 150 -quality 90 \"{$pngPath}\"";

        try {
            exec($command, $output, $returnCode);

            if ($returnCode === 0 && file_exists($pngPath)) {
                return 'consent-forms/' . $filename;
            }
        } catch (\Exception $e) {
            // If ImageMagick fails, log the error but don't crash
            \Log::warning('PNG generation failed: ' . $e->getMessage());
        }

        // Return PDF path as fallback
        return $pdfPath;
    }

    /**
     * Ensure the PDF exists, regenerating on demand if missing
     */
    private function ensurePdfExists(ConsentForm $consentForm): string
    {
        if (empty($consentForm->pdf_file_path)) {
            $pdfPath = $this->generatePDF($consentForm);
            $pngPath = $this->generatePNG($pdfPath);
            $consentForm->update([
                'pdf_file_path' => $pdfPath,
                'png_file_path' => $pngPath,
            ]);
            return $pdfPath;
        }

        $fullPath = storage_path('app/' . $consentForm->pdf_file_path);
        if (!file_exists($fullPath)) {
            $pdfPath = $this->generatePDF($consentForm);
            $pngPath = $this->generatePNG($pdfPath);
            $consentForm->update([
                'pdf_file_path' => $pdfPath,
                'png_file_path' => $pngPath,
            ]);
            return $pdfPath;
        }

        return $consentForm->pdf_file_path;
    }

    /**
     * Download the signed consent form
     */
    public function download($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)
            ->where('is_signed', true)
            ->firstOrFail();

        $pdfPath = $this->ensurePdfExists($consentForm);
        $filename = 'Fantas_Beauty_Consent_Form_' . $consentForm->name . '.pdf';

        return response()->download(
            storage_path('app/' . $pdfPath),
            $filename
        );
    }

    /**
     * Serve the PDF file for inline preview (iframe)
     */
    public function servePdf($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)
            ->where('is_signed', true)
            ->firstOrFail();

        $pdfPath = storage_path('app/' . $this->ensurePdfExists($consentForm));

        return response()->file($pdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($pdfPath) . '"',
        ]);
    }

    /**
     * CRM PDF preview for signed consent form (embedded iframe)
     */
    public function crmPreview($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)
            ->where('is_signed', true)
            ->firstOrFail();

        $pdfPath = storage_path('app/' . $this->ensurePdfExists($consentForm));

        return view('crm.consent-form.preview', compact('consentForm', 'pdfPath'));
    }

    /**
     * View the consent form as an image (PNG preview)
     */
    public function preview($token)
    {
        $consentForm = ConsentForm::where('consent_token', $token)->firstOrFail();

        if (!$consentForm->png_file_path || !file_exists(storage_path('app/' . $consentForm->png_file_path))) {
            return view('consent-form.display', [
                'consentForm' => $consentForm,
                'inquiry' => $consentForm->inquiry,
            ]);
        }

        return response()->file(storage_path('app/' . $consentForm->png_file_path));
    }
}
