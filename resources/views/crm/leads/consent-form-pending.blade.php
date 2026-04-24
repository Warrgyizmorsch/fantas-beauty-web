@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Consent Form Pending</h5>
                    </div>
                    <ul class="breadcrumb">
<a href="{{ url('crm-dashboard/dashboard') }}">Home</a>
                        <li class="breadcrumb-item"><a href="{{ url('crm/leads') }}">Leads</a></li>
                        <li class="breadcrumb-item">Consent Form Pending</li>
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
                                <h6>Consent Form Pending Leads ({{ $pendingForms->total() + $noConsentForms->total() }})</h6>
                            </div>
                            <div class="card-body">
                                @if($pendingForms->count() > 0)
                                <h6 class="mb-3">Forms Created but Not Signed ({{ $pendingForms->total() }})</h6>
                                <div class="table-responsive mb-4">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Service</th>
                                                <th>Token</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($pendingForms as $form)
                                            <tr>
                                                <td>{{ $form->inquiry->name }}</td>
                                                <td>{{ $form->inquiry->phone }}</td>
                                                <td>{{ $form->inquiry->email ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="badge bg-warning">{{ $form->inquiry->service_name }}</span>
                                                </td>
                                                <td>{{ Str::limit($form->consent_token, 20) }}</td>
                                                <td>{{ $form->created_at->format('M d, Y') }}</td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="6" class="text-center">No pending forms.</td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $pendingForms->links() }}
                                </div>
                                @endif

                                @if($noConsentForms->count() > 0)
                                <h6 class="mb-3">No Consent Form Created ({{ $noConsentForms->total() }})</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Service</th>
                                                <th>From Page</th>
                                                <th>Message</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($noConsentForms as $inquiry)
                                            <tr>
                                                <td>{{ $inquiry->name }}</td>
                                                <td>{{ $inquiry->phone }}</td>
                                                <td>{{ $inquiry->email ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="badge bg-secondary">{{ $inquiry->service_name }}</span>
                                                </td>
                                                <td>
                                                    {{ $inquiry->referer ?: 'Direct' }}
                                                </td>
                                                <td>{{ Str::limit($inquiry->message ?? '', 50) }}</td>
                                                <td>{{ $inquiry->created_at->format('M d, Y') }}</td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="7" class="text-center">No inquiries without consent.</td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $noConsentForms->links() }}
                                </div>
                                @endif
                                <div class="mt-4">
                                    <a href="{{ route('crm.leads.consent-form-filled') }}" class="btn btn-success">View Filled Forms</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
@endsection
