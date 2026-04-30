<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Inquiry;
use App\Models\ConsentForm;
use App\Mail\InquiryConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class BookingController extends Controller
{
   public function store(Request $request)
{
    // 1. Validation (Fail hone par Laravel khud wapas form par bhej dega errors ke sath)
    $validated = $request->validate([
        'name'           => 'required|string|max:255',
        'email'          => 'required|email|max:255',
        'phone'          => 'required|string|max:20',
        'size'           => 'required|string',
        'placement'      => 'required|string',
        'style'          => 'required|string',
        'tattoo_type'    => 'required|string',
        'ink_preference' => 'required|string',
        'message'        => 'required|string',
        'reference_link' => 'nullable|url'
    ]);

    try {
        // Save to bookings table (existing functionality)
        Booking::create($validated);

        // Also create an inquiry record with tattoo-specific fields
        $inquiry = Inquiry::create([
            'name'               => $request->name,
            'phone'              => $request->phone,
            'email'              => $request->email,
            'referer'            => $request->server('HTTP_REFERER') ?: $request->fullUrl() ?: 'Direct',
            'category'           => 'Tattoo',
            'sub_category'       => $request->style,
            'service_name'       => 'Tattoo Booking',
            'message'            => $request->message,
            'tattoo_size'        => $request->size,
            'tattoo_placement'   => $request->placement,
            'tattoo_style'       => $request->style,
            'tattoo_type'        => $request->tattoo_type,
            'ink_preference'     => $request->ink_preference,
            'reference_link'     => $request->reference_link,
        ]);

        // Create consent form for tattoo booking
        $consentForm = ConsentForm::create([
            'inquiry_id'    => $inquiry->id,
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'consent_token' => Str::random(32),
            'agreed_terms'  => json_encode([]),
        ]);

        // Send confirmation email with consent form link
        Mail::to($request->email)->send(new InquiryConfirmation($inquiry, $consentForm));

        return back()->with('success', 'Thank you! Your booking request has been submitted successfully. We will contact you soon.');
        
    } catch (\Exception $e) {   
        \Log::error('Booking submission error: ' . $e->getMessage(), ['exception' => $e]);
        return back()->with('error', 'Error: ' . $e->getMessage());
    }
}
}
