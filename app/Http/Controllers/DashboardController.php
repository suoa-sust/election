<?php

namespace App\Http\Controllers;


use App\Models\Candidate;
use App\Models\Seat;

class DashboardController extends Controller
{
    public function dashboardMain()
    {
         $countSeat = Seat::count();
         $countCandidate = Candidate::groupBy('name')->count();
        return view('dashboard')
            ->with('number_of_seat', $countSeat)
            ->with('number_of_unique_candidate', $countCandidate);
    }
}
