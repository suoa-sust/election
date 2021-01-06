<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardMain()
    {
        return view('dashboard');
    }
}
