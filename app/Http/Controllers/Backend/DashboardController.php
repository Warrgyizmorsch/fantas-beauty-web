<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\ConsentForm;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index() {
        $totalLeads = Inquiry::count();
        
        // Tattoo only (exclude piercing per feedback)
        $formsFilled = ConsentForm::whereHas('inquiry', function($q) {
            $q->whereRaw('LOWER(service_name) LIKE "%tattoo%" OR LOWER(category) LIKE "%tattoo%" OR LOWER(sub_category) LIKE "%tattoo%"');
        })->where('is_signed', true)->count();
        
        $formsPending = ConsentForm::whereHas('inquiry', function($q) {
            $q->whereRaw('LOWER(service_name) LIKE "%tattoo%" OR LOWER(category) LIKE "%tattoo%" OR LOWER(sub_category) LIKE "%tattoo%"');
        })->where('is_signed', false)->count();
        
        $totalPending = $formsPending;
        $totalForms = $formsFilled + $totalPending;
        $filledPercentage = $totalForms > 0 ? round(($formsFilled / $totalForms) * 100) : 0;
        $pendingPercentage = $totalForms > 0 ? round(($totalPending / $totalForms) * 100) : 0;

$latestLeads = Inquiry::with('consentForm')->latest()->take(10)->get();

        // Chart data: tattoo consent forms filled over last 30 days
        $startDate = Carbon::now()->subDays(29)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        $leadsByDate = Inquiry::whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        // Fill in missing dates with 0
        $chartDates = [];
        $chartCounts = [];
        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $chartDates[] = Carbon::parse($date)->format('M d');
        $chartCounts[] = $leadsByDate->has($date) ? $leadsByDate[$date]->count : 0;
        }

        return view('crm.dashboard', compact(
            'totalLeads',
            'formsFilled',
            'formsPending',
            'totalPending',
            'filledPercentage',
            'pendingPercentage',
            'latestLeads',
            'chartDates',
            'chartCounts'
        ));
    }
}
