<?php

namespace App\Http\Controllers;
use App\Models\Booking;

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
        Booking::create($validated);

        return back()->with('success', 'Thank you! Your booking request has been submitted successfully. We will contact you soon.');
        
    } catch (\Exception $e) {   
        return back()->with('error', 'Oops! Something went wrong while submitting your form. Please try again later.');
    }
}
}
