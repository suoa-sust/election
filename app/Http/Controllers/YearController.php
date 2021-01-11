<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearController extends Controller
{
    public function showYearForm()
    {
        return view('admin.year_input');
    }
}
