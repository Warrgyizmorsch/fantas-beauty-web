@extends('crm.layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="bg-white p-5 rounded shadow-sm text-center">
            <h1 class="display-5 fw-bold text-dark">Welcome to Fantas CRM</h1>
            <p class="lead text-muted">Aapka backend setup successfully poora ho gaya hai.</p>
            <hr class="my-4" style="width: 100px; margin: 0 auto; border-top: 3px solid #ffc107;">
            
            <div class="row mt-5 text-start">
                <div class="col-md-4 mb-3">
                    <div class="card p-3 border-start border-warning border-4">
                        <h5 class="fw-bold"><i class="fas fa-calendar-check text-warning me-2"></i> Appointments</h5>
                        <p class="mb-0 text-muted">Manage all tattoo bookings here.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 border-start border-primary border-4">
                        <h5 class="fw-bold"><i class="fas fa-envelope text-primary me-2"></i> Inquiries</h5>
                        <p class="mb-0 text-muted">Check customer questions and leads.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 border-start border-success border-4">
                        <h5 class="fw-bold"><i class="fas fa-images text-success me-2"></i> Gallery</h5>
                        <p class="mb-0 text-muted">Update your studio portfolio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection