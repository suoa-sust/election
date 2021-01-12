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

    public function edit($id)
    {
        $seat = Seat::findOrFail($id);
        return view('admin.seat.edit')
            ->with('seat', $seat);
    }


    public function update(SeatRequest $seatRequest, $id)
    {
        try {
            $data = $seatRequest->only('name', 'priority', 'status');
            $seat = Seat::findOrFail($id);
            $seat->name = $data['name'];
            $seat->priority = $data['priority'];
            $seat->status = $data['status'];
            $seat->save();
            return redirect()->route('seat.index')->with('success', 'Candidate Updated Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('seat.index')->with('error', 'Something went wrong. '.$exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            Seat::delete($id);
            return redirect()->route('seat.index')->with('success', 'Candidate Deleted Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('seat.index')->with('error', 'Something went wrong');
        }
    }
}



