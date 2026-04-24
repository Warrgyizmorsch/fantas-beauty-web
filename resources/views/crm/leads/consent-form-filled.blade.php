@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Leads</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('crm-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('crm/leads') }}">Leads</a></li>
                        <li class="breadcrumb-item active">Consent Form Filled Leads</li>
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
                                <h6>Consent Form Filled Leads ({{ $forms->total() }})</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Service</th>
                                        <th>Token</th>
                                        <th>From Page</th>
                                        <th>Message</th>
                                        <th>Signed</th>
                                        <th>Preview</th>
                                    </tr>
                                </thead>

                                        <tbody>
                                            @forelse($forms as $form)
                                            <tr>
                                                <td>{{ $form->inquiry->name }}</td>
                                                <td>{{ $form->inquiry->phone }}</td>
                                                <td>{{ $form->inquiry->email ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="badge bg-success">{{ $form->inquiry->service_name }}</span>
                                                </td>
                                                <td>
                                                    {{ Str::limit($form->consent_token, 25) }}
                                                </td>
                                                <td>
                                                    {{ $form->inquiry->referer ?: 'Direct' }}
                                                </td>
                                                <td>{{ Str::limit($form->inquiry->message ?? '', 50) }}</td>
                                                <td>{{ $form->signed_at?->format('M d, Y') }}</td>
                                                <td>
                                                    <div class="hstack gap-1">
                                                        <a href="{{ route('consent-form.preview', $form->consent_token) }}" class="btn btn-sm btn-outline-primary" title="Preview PDF">
                                                            Preview
                                                        </a>
                                                        <a href="{{ route('consent-form.download', $form->consent_token) }}" class="btn btn-sm btn-outline-success" title="Download">
                                                            Download
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No leads with filled consent forms.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $forms->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
@endsection
