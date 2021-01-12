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



}
