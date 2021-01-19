<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function seats()
    {
         $seats = Seat::where('status', 'ACTIVE')->get();
        return view('front.seats')
            ->with('seats', $seats);
    }
}
