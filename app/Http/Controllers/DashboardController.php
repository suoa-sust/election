<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function dashboardMain()
    {
        return view('dashboard');
    }
}
