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
        try {
            $data = $candidateRequest->only('name', 'designation', 'seat_id', 'year_id');
            Candidate::create($data);
            return redirect()->route('candidate.index')->with('success', 'Candidate Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('candidate.index')->with('error', 'Something went wrong');
        }

    }

    public function edit($id)
    {
        $seats = Seat::orderBy('priority', 'ASC')->pluck('name', 'id');
        $years = Year::pluck('name', 'id');
        $statuses = ['VOTE_FREEZE', 'COMPLETED', 'VOTE_RUNNING', 'INACTIVE', 'ACTIVE'];
        $candidate = Candidate::findOrFail($id);
        return view('admin.candidate.edit')
            ->with('seats', $seats)
            ->with('years', $years)
            ->with('statuses', $statuses)
            ->with('candidate', $candidate);
    }

    public function update(CandidateRequest $candidateRequest, $id)
    {
        try {
            $data = $candidateRequest->only('name', 'designation', 'seat_id', 'year_id', 'status');
            $candidate = Candidate::findOrFail($id);
            $candidate->name = $data['name'];
            $candidate->designation = $data['designation'];
            $candidate->seat_id = $data['seat_id'];
            $candidate->year_id = $data['year_id'];
            $candidate->status = $data['status'];
            $candidate->save();
            return redirect()->route('candidate.index')->with('success', 'Candidate Updated Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('candidate.index')->with('error', 'Something went wrong. '.$exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Candidate::destroy($id);
            return redirect()->route('candidate.index')->with('success', 'Candidate Deleted Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('candidate.index')->with('error', 'Something went wrong');
        }
    }
}
