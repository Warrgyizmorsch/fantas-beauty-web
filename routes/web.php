<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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

Route::get('/services/nails', function () {
    return view('services.nail');
});

Route::get('/services/eyelashes', function () {
    return view('services.eyelash');
});

Route::post('/contact-submit', [BookingController::class, 'store']);

