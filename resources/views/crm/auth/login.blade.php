@extends('crm.layouts.auth')
@section('content')
<div class="card shadow-sm" style="width: 100%; max-width: 420px;">
    <div class="card-body p-4 p-md-5">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/logo/fantas-logo.png') }}" alt="Fantas Beauty" style="height: 60px; width: 60px;">
            <h4 class="mt-3 mb-1">Welcome Back</h4>
            <p class="text-muted">Login to CRM Dashboard</p>
        </div>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
@endsection

