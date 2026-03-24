<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
{
    Inquiry::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'service_name' => $request->service_name,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Inquiry submitted successfully!');
}
}
