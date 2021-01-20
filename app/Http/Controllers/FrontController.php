<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home')->with('title', 'Home');
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
        return view('front.commission');
    }
    public function developers()
    {
        return view('front.developers');
    }
}
