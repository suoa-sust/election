<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Seat;
use App\Models\Year;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $year = Year::whereIn('status', ['ACTIVE', 'VOTE_RUNNING', 'VOTE_FREEZE', 'VOTE_DONE'])->first() ?? [];
        return view('home')->with('title', 'Home')->with('year', $year);
    }

    public function seats()
    {
        $seats = Seat::where('status', 'ACTIVE')->get();
        return view('front.seats')
            ->with('seats', $seats)
            ->with('title', 'Seats');
    }

    public function commission()
    {
        return view('front.commission')->with('title', 'Election Commission');
    }

    public function developers()
    {
        return view('front.developers')->with('title', 'Developers');
    }

    public function gallery()
    {
        $gallery = Gallery::where('status', '=', '1')->orderBy('priority', 'ASC')->get();
        return view('front.previous_gallery')
            ->with('title', 'Gallery')
            ->with('galleries', $gallery);
    }
    public function notices()
    {
        return view('front.notice')->with('title', 'Notices');
    }

    public function candidates(Request $request)
    {
        $yearName = $request->year ?? null;
        $year = Year::where('name', $yearName)->first();
        if(!isset($year)) {
            $year = Year::where('status', '=', 'ACTIVE')->first();
        }
//        $seatId = $request->seat_id;
//        $yearId = $request->year_id;
//        $seats = Seat::orderBy('priority', 'ASC')->pluck('name', 'id');
        $years = Year::where('status', '!=', 'INACTIVE')->orderBy('name', 'DESC')->pluck('name', 'id');

//        if (isset($seatId) && isset($yearId)) {
//            $candidates = Candidate::where('seat_id', $seatId)->where('year_id', $yearId)->get();
//        } elseif (isset($seatId)) {
//            $candidates = Candidate::where('seat_id', $seatId)->get();
//        } elseif (isset($yearId)) {
//            $candidates = Candidate::where('year_id', $yearId)->get();
//        } else {
//            $candidates = Candidate::all();
//        }
        $candidates = isset($year) ? Candidate::where('year_id', $year->id)
            ->orderBy('seat_id', 'ASC')
            ->orderBy('priority', 'ASC')
            ->where('status', '!=', 'INACTIVE')
//            ->orderBy('number_of_votes', 'DESC')
            ->get() : [];
        return view('front.candidates')
            ->with('candidates', $candidates)
            ->with('year', $year)
            ->with('yearName', $yearName)
//            ->with('seats', $seats)
            ->with('years', $years)
            ->with('title', 'Candidates');
//            ->with('seat_id', $seatId)
//            ->with('year_id', $yearId);

    }
}
