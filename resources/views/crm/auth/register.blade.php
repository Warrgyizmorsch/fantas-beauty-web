@extends('crm.layouts.admin')
@section('title', 'Register Admin')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="card shadow-lg p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Admin Register</h2>
                <p class="text-muted">Create your CRM access</p>
            </div>

            <form action="{{ route('crm.register.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Min. 6 characters" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
                </div>
                <button type="submit" class="btn btn-dark w-100 fw-bold py-2 mt-2">CREATE ACCOUNT</button>
            </form>
            
            <div class="text-center mt-3">
                <a href="{{ route('crm.login') }}" class="text-muted small text-decoration-none"><i class="fas fa-arrow-left"></i> Back to Login</a>
            </div>
        </div>
    </div>
</div>
@endsection