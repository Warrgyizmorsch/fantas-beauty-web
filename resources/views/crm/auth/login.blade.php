@extends('crm.layouts.admin')
@section('title', 'Login')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">
        <div class="card shadow-lg p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Welcome Back</h2>
                <p class="text-muted">Login to manage your studio</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success small">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger small">{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('crm.login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="admin@fantas.com" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-warning w-100 fw-bold py-2 mt-2">SIGN IN</button>
            </form>
            
            <div class="text-center mt-4">
                <p class="small text-muted">Don't have an account? <a href="{{ route('crm.register') }}" class="text-warning text-decoration-none fw-bold">Register Admin</a></p>
            </div>
        </div>
    </div>
</div>
@endsection