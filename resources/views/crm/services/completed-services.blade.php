@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Completed Services</h5>
                    </div>
                    <ul class="breadcrumb">
<a href="{{ url('crm-dashboard/dashboard') }}">Home</a>
                        <li class="breadcrumb-item"><a href="{{ url('crm/services') }}">Services / Clients</a></li>
                        <li class="breadcrumb-item">Completed Services</li>
                    </ul>
                </div>
            </div>
            <!-- [ page-header ] end -->
            
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Completed Services</h6>
                            </div>
                            <div class="card-body">
                                <p>Completed Services content goes here...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
@endsection
