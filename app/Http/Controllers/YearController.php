<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearController extends Controller
{
    public function index()
    {
        return view('year');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'integer|digits:4'
        ]);
//        $year = $request->all();
//        dd($year);
//        Year::create($request->all());

//        $year = new Year();
//        $year->year = $request['year'];
//        $year->save();

        Year::create([
            'year' => $request['year']
        ]);

        return redirect('year')->with('status',"Year inserted successfully");
    }

    public function show()
    {
//        $years = DB::table('years')
//                ->select('id', 'year')
//                ->get();
        $years = DB::table('years')->get();
//        dd($years);
        return view('view-year', ['years'=>$years]);
    }
}
