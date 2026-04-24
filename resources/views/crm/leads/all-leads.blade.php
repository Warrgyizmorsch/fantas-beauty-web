@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">All Leads</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('crm-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('crm/leads') }}">Leads</a></li>
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
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Service</th>
                                                <th>Combined</th>
                                                <th>From Page</th>
                                                <th>Message</th>
                                                <th>Created</th>
                                                <th>Consent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($inquiries as $inquiry)
                                            <tr>
                                                <td>{{ $inquiry->name }}</td>
                                                <td>{{ $inquiry->phone }}</td>
                                                <td>{{ $inquiry->email ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">{{ $inquiry->category ?? '—' }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-info text-info">{{ $inquiry->sub_category ?? '—' }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge text-black">{{ $inquiry->service_name }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">
                                                        {{ $inquiry->category ?? '—' }} - {{ $inquiry->sub_category ?? '—' }} - {{ $inquiry->service_name }}
                                                    </span>
                                                </td>
                                                <td>
                                                    {{ $inquiry->referer ?: 'Direct' }}
                                                </td>
                                                <td>
                                                    <div style="max-width: 280px; max-height: 100px; overflow: auto; border: 1px solid #e9ecef; border-radius: 6px; padding: 8px 10px; background: #f8f9fa; font-size: 13px; line-height: 1.4; white-space: pre-wrap; word-wrap: break-word;">
                                                        {{ $inquiry->message ?? '—' }}
                                                    </div>
                                                </td>
                                                <td>{{ $inquiry->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    @if($inquiry->consentForm)
                                                        <span class="badge text-black">Yes</span>
                                                    @else
                                                        <span class="badge text-black">No</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="11" class="text-center">No leads found.</td>
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