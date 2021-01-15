<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function voteCountPage()
    {
        $candidates = Candidate::all();
        return view('admin.vote_count')
            ->with('candidates', $candidates);
    }

    public function voteUpdate(Request $request,$id)
    {
        $vote = $request->vote;
        $candidate = Candidate::findOrFail($id);
        if($candidate->year->status == 'COMPLETED') {
            return redirect()->back()->with('warning', 'Cannot modify vote of Completed election');
        }
        $candidate->number_of_votes = $candidate->number_of_votes + $vote;
        $candidate->save();
        $msg = $vote . " added to ".$candidate->name. " Successfully";
        return redirect()->route('vote.count')->with('success', $msg);
    }



}
