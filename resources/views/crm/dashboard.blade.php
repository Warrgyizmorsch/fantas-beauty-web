@extends('crm.layouts.app')
@section('content')
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Leads & Consent Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('crm-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    
                    <div class="col-xxl-4 col-md-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-users text-primary"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{ $totalLeads ?? 0 }}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">All Leads</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ url('crm/leads/all-leads') }}" class="fs-12 fw-medium text-muted text-truncate-1-line">View All Leads </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-check-circle text-success"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{ $formsFilled ?? 0 }}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Consent Forms Filled</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Completed Forms</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-11 text-muted">({{ $filledPercentage ?? 0 }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $filledPercentage ?? 0 }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-clock text-warning"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{ $totalPending ?? 0 }}</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Consent Forms Pending</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Awaiting Action</a>
                                        <div class="w-100 text-end">
                                            <span class="fs-11 text-muted">({{ $pendingPercentage ?? 0 }}%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $pendingPercentage ?? 0 }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Consent Forms Filled (Over Time)</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Refresh Data">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div id="consent-forms-date-chart" style="min-height: 350px; padding: 20px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads Consent Overview</h5>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="leads-consent-donut-chart" style="min-height: 250px;"></div>
                                <div class="row g-2 mt-3">
                                    <div class="col-6">
                                        <div class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block bg-success"></span>
                                            <span>Filled<span class="fs-10 text-muted ms-1">({{ $formsFilled ?? 0 }})</span></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block bg-warning"></span>
                                            <span>Pending<span class="fs-10 text-muted ms-1">({{ $totalPending ?? 0 }})</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Latest Leads</h5>
                                <a href="{{ url('crm/leads/all-leads') }}" class="btn btn-sm btn-primary">View All</a>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Lead Info</th>
                                                <th>Service Required</th>
                                                <th>Date Submitted</th>
                                                <th>Consent Form Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($latestLeads as $lead)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block fw-bold text-dark">{{ $lead->name }}</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">{{ $lead->email ?? 'N/A' }}</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-gray-200 text-dark">{{ $lead->service_name ?? 'General' }}</span></td>
                                                <td>{{ $lead->created_at->format('M d, Y h:i A') }}</td>
                                                <td>
                                                    @if($lead->consentForm && $lead->consentForm->is_signed)
                                                        <span class="badge bg-soft-success text-success">Filled</span>
                                                    @else
                                                        <span class="badge bg-soft-warning text-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ url('crm/leads/all-leads') }}" class="btn btn-sm btn-light">View</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted py-4">No leads found</td>
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
            </div>

        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>

        @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Consent Forms Filled Over Time - Area Chart
                var dateChartEl = document.querySelector('#consent-forms-date-chart');
                if (dateChartEl && typeof ApexCharts !== 'undefined') {
                    var dateChartOptions = {
                        series: [{
                            name: 'Forms Filled',
                            data: @json($chartCounts)
                        }],
                        chart: {
                            type: 'area',
                            height: 350,
                            toolbar: { show: false }
                        },
                        colors: ['#0d519e'],
                        dataLabels: { enabled: false },
                        stroke: {
                            curve: 'smooth',
                            width: 2
                        },
                        xaxis: {
                            categories: @json($chartDates),
                            labels: {
                                style: { fontSize: '10px' },
                                rotate: -45,
                                rotateAlways: true,
                                hideOverlappingLabels: true,
                                trim: true
                            },
                            tickAmount: 10,
                            tooltip: { enabled: false }
                        },
                        yaxis: {
                            labels: { formatter: function(val) { return Math.round(val); } }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.4,
                                opacityTo: 0.05,
                                stops: [0, 90, 100]
                            }
                        },
                        tooltip: {
                            x: { show: true },
                            y: { formatter: function(val) { return val + ' forms'; } }
                        },
                        responsive: [{
                            breakpoint: 768,
                            options: {
                                chart: { height: 280 },
                                xaxis: {
                                    labels: {
                                        rotate: -60,
                                        style: { fontSize: '9px' }
                                    },
                                    tickAmount: 5
                                }
                            }
                        }]
                    };
                    new ApexCharts(dateChartEl, dateChartOptions).render();
                }

                // Leads Consent Overview - Donut Chart
                var donutChartEl = document.querySelector('#leads-consent-donut-chart');
                if (donutChartEl && typeof ApexCharts !== 'undefined') {
                    var donutChartOptions = {
                        series: [{{ $formsFilled ?? 0 }}, {{ $totalPending ?? 0 }}],
                        chart: {
                            type: 'donut',
                            height: 250
                        },
                        labels: ['Filled', 'Pending'],
                        colors: ['#198754', '#ffc107'],
                        legend: { show: false },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '70%',
                                    labels: {
                                        show: true,
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            formatter: function(w) {
                                                return w.globals.seriesTotals.reduce(function(a, b) { return a + b; }, 0);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    };
                    new ApexCharts(donutChartEl, donutChartOptions).render();
                }
            });
        </script>
        @endpush
        @endsection
