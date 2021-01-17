<?php

namespace App\Http\Controllers;

use App\Events\NumberOfVotesUpdated;
use App\Models\Candidate;
use App\Models\Year;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function voteCountPage()
    {
//        $yearName = $request->year ?? '2021';
//        if(isset($yearName)) {
//            $year = Year::where('name', $yearName)->first();
//        }
//        $candidates = Candidate::where('year_id', $year->id)->get();
        return view('admin.vote_count');
//            ->with('candidates', $candidates);
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

        broadcast(new NumberOfVotesUpdated($candidate));

        $msg = $vote . " added to ".$candidate->name. " Successfully";
        return redirect()->route('vote.count')->with('success', $msg);
    }



}
