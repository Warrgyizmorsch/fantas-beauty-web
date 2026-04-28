<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\ConsentForm;
use App\Mail\InquiryConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $inquiry = Inquiry::create([
            'name'         => $request->name,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'referer'      => $request->category && $request->sub_category && $request->service_name
                ? $request->category . ' - ' . $request->sub_category . ' - ' . $request->service_name
                : ($request->server('HTTP_REFERER') ?: $request->referer ?: null),
            'category'     => $request->category,
            'sub_category' => $request->sub_category,
            'service_name' => $request->service_name,
            'message'      => $request->message,
        ]);

        // Create consent form if service is tattoo-related
        $consentForm = null;
        $isTattooService = $this->isTattooService($request);
        
        if ($isTattooService) {
            $consentForm = ConsentForm::create([
                'inquiry_id' => $inquiry->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'consent_token' => Str::random(32),
                'agreed_terms' => json_encode([]),
            ]);
        }

        // Send confirmation email with consent form link if tattoo service
        Mail::to($request->email)->send(new InquiryConfirmation($inquiry, $consentForm));

        return back()->with('success', 'Inquiry submitted successfully!');
    }

    /**
     * Detect if the service is tattoo-related
     */


    public function index()
    {
        return view('crm.leads.all-leads', [
            'inquiries' => Inquiry::with('consentForm')->latest()->paginate(20)
        ]);
    }



    /**
     * Display leads with filled/signed consent forms
     */
    public function consentFormsFilled()
    {
        $forms = ConsentForm::with('inquiry')
            ->where('is_signed', true)
            ->latest()
            ->paginate(15);

        return view('crm.leads.consent-form-filled', compact('forms'));
    }

    /**
     * Display leads with pending consent forms
     */
    public function consentFormsPending()
    {
        $pendingForms = ConsentForm::with('inquiry')
            ->whereHas('inquiry')
            ->where('is_signed', false)
            ->latest()
            ->paginate(15);

        $noConsentForms = Inquiry::doesntHave('consentForm')
            ->latest()
            ->paginate(15);

        return view('crm.leads.consent-form-pending', compact('pendingForms', 'noConsentForms'));
    }



    /**
     * Detect if the service is tattoo-related
     */
    private function isTattooService(Request $request)
    {
        $serviceName = strtolower($request->service_name ?: '');
        $category = strtolower($request->category ?: '');
        $subCategory = strtolower($request->sub_category ?: '');

        // Check category/sub-category first — covers ALL tattoo page items
        $categoryKeywords = ['tattoo', 'piercing'];
        foreach ($categoryKeywords as $keyword) {
            if (strpos($category, $keyword) !== false || strpos($subCategory, $keyword) !== false) {
                return true;
            }
        }

        // Fallback: check the service name itself for tattoo-related keywords
        $tattooKeywords = [
            'tattoo',
            'ink',
            'design',
            'art',
            'piercing',
            'leaf',
            'maple',
            'line art',
            'overlapping',
            'sleeve',
            'custom',
            'portrait',
            'pattern',
            'tribal',
            'geometric',
            'floral',
            'botanical',
            'fruit',
            'branch',
            'script',
            'lettering',
            'color',
            'black & gray',
            'realism',
            'anime',
            'manga',
            'traditional',
            'placement',
            'session'
        ];

        foreach ($tattooKeywords as $keyword) {
            if (strpos($serviceName, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }
    }
