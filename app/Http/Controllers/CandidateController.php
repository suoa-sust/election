<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\Seat;
use App\Models\Year;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('admin.candidate.index')
            ->with('candidates', $candidates);
    }

    public function create()
    {
        $seats = Seat::orderBy('priority', 'ASC')->pluck('name', 'id');
        $years = Year::pluck('name', 'id');
        return view('admin.candidate.create')
            ->with('seats', $seats)
            ->with('years', $years);
    }

    public function store(CandidateRequest $candidateRequest)
    {
         $data = $candidateRequest->only('name', 'designation', 'seat_id', 'year_id');
        $candidate = Candidate::create($data);
        return redirect()->route('candidate.index')->with('success', 'Candidate Added Successfully');
    }
}
