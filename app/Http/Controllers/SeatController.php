<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeatRequest;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
        $seats = Seat::all();
        return view('admin.seat.index')
            ->with('seats', $seats);
    }

    public function create()
    {
                return view('admin.seat.create');
    }

    public function store(SeatRequest $seatRequest)
    {
        try {
            $data = $seatRequest->only('name', 'priority', 'status');
            Seat::create($data);
            return redirect()->route('seat.index')->with('success', 'Candidate Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('seat.index')->with('error', 'Something went wrong');
        }

    }


}

