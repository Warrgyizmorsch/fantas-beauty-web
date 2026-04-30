@extends('crm.layouts.app')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">All Leads & Clients</h5>
            </div>
            <ul class="breadcrumb">
<a href="{{ url('crm-dashboard/dashboard') }}">Home</a>
                <li class="breadcrumb-item">Leads & Services</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <a href="{{ route('crm.leads.consent-form-filled') }}" class="btn btn-success">
                    <i class="feather-check-circle me-2"></i>
                    <span>Filled Forms</span>
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Create Lead</span>
                </a>

            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="leadList">
                                <thead>
                                    <tr>
                                        <th class="wd-30">
                                            <div class="custom-control custom-checkbox ms-1">
                                                <input type="checkbox" class="custom-control-input" id="checkAllLead">
                                                <label class="custom-control-label" for="checkAllLead"></label>
                                            </div>
                                        </th>
                                        <th>Lead / Client</th>
                                        <th>Contact Details</th>

                                        <th>Main Category</th>
                                        <th>Token</th>
                                        <th>Selected Service</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse($inquiries as $inquiry)
                                    <tr class="single-item">
                                        <td>
                                            <div class="custom-control custom-checkbox ms-1">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_{{ $inquiry->id }}" value="{{ $inquiry->id }}">
                                                <label class="custom-control-label" for="checkBox_{{ $inquiry->id }}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="hstack gap-3">
                                                <div class="avatar-image avatar-md">
                                                    <img src="{{ asset('crm-assets/images/avatar/' . ($loop->index % 6 + 1) . '.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <span class="text-truncate-1-line fw-bold">{{ $inquiry->name }}</span>
                                                    <small class="text-muted">ID: #LD-{{ $inquiry->id }}</small>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <a href="mailto:{{ $inquiry->email }}" class="text-dark"><i class="feather-mail fs-10 me-1"></i> {{ $inquiry->email ?? 'N/A' }}</a>
                                                <a href="tel:{{ $inquiry->phone }}" class="text-muted"><i class="feather-phone fs-10 me-1"></i> {{ $inquiry->phone }}</a>
                                            </div>
                                        </td>
                                        <td>
                                            @if(str_contains(strtolower($inquiry->service_name), 'tattoo') || str_contains(strtolower($inquiry->service_name), 'piercing'))
                                                <span class="badge bg-soft-primary text-primary">Tattoo/Piercing</span>
                                            @elseif(str_contains(strtolower($inquiry->service_name), 'hair'))
                                                <span class="badge bg-soft-success text-success">Beauty & Hair</span>
                                            @elseif(str_contains(strtolower($inquiry->service_name), 'nail'))
                                                <span class="badge bg-soft-info text-info">Nails</span>
                                            @else
                                                <span class="badge bg-soft-warning text-warning">Other</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($inquiry->consentForm)
                                                {{ Str::limit($inquiry->consentForm->consent_token, 25) }}
                                            @else
                                                —
                                            @endif
                                        </td>
                                        <td>
                                            {{ $inquiry->service_name }}
@php
                                                $isBookAppointment = strpos($inquiry->referer ?? '', 'book-appointment') !== false;
                                            @endphp
                                            @if($isBookAppointment)
                                            <div class="tattoo-details small mt-1 ps-2" style="font-size: 0.75rem; line-height: 1.2; color: #6c757d;">
                                                <div>size- {{ $inquiry->tattoo_size ?? '—' }}</div>
                                                <div>placement- {{ $inquiry->tattoo_placement ?? '—' }}</div>
                                                <div>style- {{ $inquiry->tattoo_style ?? $inquiry->sub_category ?? '—' }}</div>
                                                <div>type- {{ $inquiry->tattoo_type ?? '—' }}</div>
                                                <div>preference- {{ $inquiry->ink_preference ?? '—' }}</div>
                                            </div>
                                            @endif
                                        </td>
                                        <td>

                                            @if($inquiry->consentForm)
                                                @if($inquiry->consentForm->is_signed)
                                                    <a href="{{ route('crm.leads.consent-form-filled') }}" class="badge bg-soft-success text-success">Consent Filled</a>
                                                @else
                                                    <span class="badge bg-soft-warning text-warning">Consent Pending</span>
                                                @endif
                                            @else
                                                <span class="badge bg-soft-secondary text-secondary">No Consent</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="hstack gap-2 justify-content-end">
                                                <a href="#" class="avatar-text avatar-md" title="View">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="#" class="avatar-text avatar-md" title="Edit">
                                                    <i class="feather-edit-3"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">No inquiries found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
