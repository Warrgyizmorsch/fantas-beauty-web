<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

Route::prefix('crm-login')->middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::prefix('crm-dashboard')->name('crm-dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('crm')->name('crm.')->middleware('auth')->group(function () {
        Route::get('leads/all-leads', [\App\Http\Controllers\InquiryController::class, 'index'])->name('leads.all-leads');
        Route::get('consent-forms/{token}/preview', [\App\Http\Controllers\ConsentFormController::class, 'crmPreview'])->name('consent-form.preview');
        Route::get('consent-forms/{token}/download', [\App\Http\Controllers\ConsentFormController::class, 'download'])->name('consent-form.download');
        Route::get('consent-forms/{token}/pdf', [\App\Http\Controllers\ConsentFormController::class, 'servePdf'])->name('consent-form.serve-pdf');
    });
