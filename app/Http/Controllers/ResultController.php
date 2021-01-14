<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function voteCountingPublicDisplay()
    {
        $candidates = Candidate::orderBy('number_of_votes', 'DESC')->get();
        return view('live_election')
            ->with('candidates', $candidates);
    }

    public function voteResults()
    {
        $candidates = Candidate::all();
        return view('result')
            ->with('candidates', $candidates);
    }
}
