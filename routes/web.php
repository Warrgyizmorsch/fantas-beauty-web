<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/book-appointment', function () {
    return view('book-appointment');
});

Route::get('/services/tattoos', function () {
    return view('services.tattos');
});

Route::get('/services/Piercing', function () {
    return view('services.Piercing');
});

Route::get('/services/makeover', function () {
    return view('services.makeover');
});

Route::post('/contact-submit', [BookingController::class, 'store']);

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::post('/inquiry-store', [InquiryController::class, 'store'])->name('inquiry.store');


