<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Year;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function voteCountingPublicDisplay()
    {
//        $year = Year::whereDate('election_date', '<', now()->toDate())->orderBy('election_date', 'DESC')->first();
        $candidates = Candidate::where('year_id', 5)
            ->orderBy('seat_id', 'ASC')
            ->orderBy('number_of_votes', 'DESC')
            ->get();
        return view('live_election')
            ->with('candidates', $candidates);
    }

    public function live()
    {
        $year = Year::where('status', '=', 'VOTE_RUNNING')->first();
        if(isset($year) ) {
            return view('live');
        }
        return view('nolive');

    }

    public function voteResults(Request $request)
    {
        $yearName = $request->year ?? null;
        if(isset($yearName)) {
            $year = Year::where('name', $yearName)->first();
        } else {
            $year = Year::whereDate('election_date', '<', now()->toDate())->orderBy('election_date', 'DESC')->first();
        }
        $candidates = isset($year) ? Candidate::where('year_id', $year->id)
            ->orderBy('seat_id', 'ASC')
//            ->orderBy('number_of_votes', 'DESC')
            ->get() : [];
        return view('front.result')
            ->with('candidates', $candidates)
            ->with('year', $year)
            ->with('yearName', $yearName);
    }

    public function voteResults2(Request $request)
    {
        $yearName = $request->year ?? null;
        if(isset($yearName)) {
            $year = Year::where('name', $yearName)->first();
        } else {
            $year = Year::whereDate('election_date', '<', now()->toDate())->orderBy('election_date', 'DESC')->first();
        }
        $candidates = isset($year) ? Candidate::where('year_id', $year->id)
            ->orderBy('seat_id', 'ASC')
            ->orderBy('number_of_votes', 'DESC')
            ->get() : [];
         $candidates = collect($candidates)->groupBy('seat_id');
        return view('result.result2')
            ->with('seatIds', $candidates);
    }
}
