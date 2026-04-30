@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('crm-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Leads</li>
                    </ul>
                </div>
            </div>
            
<div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>All Leads ({{ $inquiries->total() }})</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
<thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Details</th>
                                                <th>Service</th>
                                                <th>Combined</th>
                                                <th>From Page</th>
                                                <th>Message</th>
                                                <th>Created</th>
                                                <th>Consent</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
<tbody>
                                            @forelse($inquiries as $inquiry)
<tr>
@php
                                                    $isBookAppointment = strpos($inquiry->referer ?? '', 'book-appointment') !== false;
                                                @endphp
                                                <td>
                                                    <div class="fw-bold">#{{ $inquiry->id }}</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="fw-bold">{{ $inquiry->name }}</div>
                                                        <div class="text-muted small">{{ $inquiry->email ?? 'N/A' }}</div>
                                                        <div class="text-muted small">Phone: {{ $inquiry->phone }}</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge text-black">{{ $inquiry->service_name }}</span>
                                                    @if($isBookAppointment)
                                                    <div class="tattoo-details small mt-1 ps-2" style="font-size: 0.75rem; line-height: 1.4; color: #6c757d;">
                                                        <div>size- {{ $inquiry->tattoo_size ?? '—' }}</div>
                                                        <div>placement- {{ $inquiry->tattoo_placement ?? '—' }}</div>
                                                        <div>style- {{ $inquiry->tattoo_style ?? $inquiry->sub_category ?? '—' }}</div>
                                                        <div>type- {{ $inquiry->tattoo_type ?? '—' }}</div>
                                                        <div>preference- {{ $inquiry->ink_preference ?? '—' }}</div>
                                                        @if($inquiry->reference_link)
                                                        <div style="margin-top: 4px; padding-top: 4px; border-top: 1px solid #e9ecef;"><strong>ref:</strong> <a href="{{ $inquiry->reference_link }}" target="_blank" style="color: #0066cc; text-decoration: underline;">{{ Str::limit($inquiry->reference_link, 30) }}</a></div>
                                                        @else
                                                        <div style="margin-top: 4px; padding-top: 4px; border-top: 1px solid #e9ecef;"><strong>ref:</strong> —</div>
                                                        @endif
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">
                                                        {{ $inquiry->category ?? '—' }} - {{ $inquiry->sub_category ?? '—' }} - {{ $inquiry->service_name }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span title="{{ $inquiry->referer ?: 'Direct' }}">{{ Str::limit($inquiry->referer ?: 'Direct', 50) }}</span>
                                                </td>
                                                <td>
                                                       <div style="max-width: 280px; height: 80px; overflow: auto; border: 1px solid #e9ecef; border-radius: 6px; padding: 8px;  font-size: 13px; line-height: 1.4; white-space: pre-wrap; word-wrap: break-word;">{{ $inquiry->message ?? '—' }}</div> 
                                                </td>
<td>{{ $inquiry->created_at->format('M d, Y h:i A') }}</td>
                                                <td>
@php
    $serviceName = strtolower($inquiry->service_name ?: '');
    $category = strtolower($inquiry->category ?: '');
    $subCategory = strtolower($inquiry->sub_category ?: '');
    $isTattoo = false;
    
    $categoryKeywords = ['tattoo'];
    foreach ($categoryKeywords as $keyword) {
        if (strpos($category, $keyword) !== false || strpos($subCategory, $keyword) !== false) {
            $isTattoo = true;
            break;
        }
    }
    
    if (!$isTattoo) {
        $tattooKeywords = [
            'tattoo', 'ink', 'design', 'art', 'leaf', 'maple', 
            'line art', 'overlapping', 'sleeve', 'custom', 'portrait', 
            'pattern', 'tribal', 'geometric', 'floral', 'botanical', 
            'fruit', 'branch', 'script', 'lettering', 'color', 
            'black & gray', 'realism', 'anime', 'manga', 'traditional', 
            'placement', 'session'
        ];
        foreach ($tattooKeywords as $keyword) {
            if (strpos($serviceName, $keyword) !== false) {
                $isTattoo = true;
                break;
            }
        }
    }
@endphp
@if($isTattoo)
    @if($inquiry->consentForm && $inquiry->consentForm->is_signed)
        <span class="badge bg-success">
            <a href="{{ url('crm/consent-forms/' . $inquiry->consentForm->consent_token . '/preview') }}" target="_blank" class="text-decoration-none text-white">Preview</a>
        </span>
    @else
        <span class="badge bg-warning">Not Filled</span>
    @endif
@else
    <span class="badge bg-secondary">NA</span>
@endif
                                                </td>
                                                <td class="text-end">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <form action="{{ route('crm.leads.destroy', $inquiry->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this lead? This will also delete the consent form and all related data.');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                                <i class="feather-trash-2"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
<td colspan="9" class="text-center">No leads found.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $inquiries->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
@endsection
