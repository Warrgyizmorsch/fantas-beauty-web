<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Mail\InquiryConfirmation;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $inquiry = Inquiry::create([
            'name'         => $request->name,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'service_name' => $request->service_name,
            'message'      => $request->message,
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new InquiryConfirmation($inquiry));

        return back()->with('success', 'Inquiry submitted successfully!');
    }
}