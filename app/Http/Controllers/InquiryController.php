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
'referer'      => $request->server('HTTP_REFERER') ?: $request->fullUrl() ?: 'Direct',
            'category'     => $request->category,
            'sub_category' => $request->sub_category,
            'service_name' => $request->service_name,
            'message'      => $request->message,
        ]);

        // Create consent form if service is tattoo-related
        $consentForm = null;
$consentForm = $this->isTattooService($request) ? ConsentForm::create([
                'inquiry_id' => $inquiry->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'consent_token' => Str::random(32),
                'agreed_terms' => json_encode([]),
            ]) : null;


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
     * Detect if the service is tattoo-related
     */
    private function isTattooService(Request $request)
    {
        $referer = $request->server('HTTP_REFERER') ?: '';
        
        // Check if request came from tattoo-specific pages
        $isTattooPage = strpos($referer, '/services/tattoos') !== false || 
                       strpos($referer, '/book-appointment') !== false;
        
        return $isTattooPage;
    }
    }
