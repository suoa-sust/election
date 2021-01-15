<?php

namespace App\Http\Controllers;

use App\Http\Requests\YearRequest;
use App\Models\Year;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Description;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;


class YearController extends Controller
{
    public function index()
    {
        $years = Year::all();
        return view('admin.year.index')
            ->with('years', $years);
    }


    public function create()
    {
        return view('admin.year.create');
    }

    public function store(YearRequest $yearRequest)
    {

        try {
            $data = $yearRequest->only('name', 'start', 'end');
            Year::create($data);
            return redirect()->route('year.index')->with('success', 'Year Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('year.create')->with('error', 'Something went wrong');
        }

    }

    public function edit($id)
    {
        $year = Year::findOrFail($id);
//        dd($year->status);

        $statuses = ['VOTE_FREEZE', 'COMPLETED', 'VOTE_RUNNING', 'INACTIVE', 'ACTIVE'];
        return view('admin.year.edit')
            ->with('statuses', $statuses)
            ->with('year', $year);
    }

    public function update(YearRequest $yearRequest, $id)
    {
        try {
            $data = $yearRequest->only('name', 'start', 'end', 'status');
            $year = Year::findOrFail($id);
            $year->name = $data['name'];
            $year->start = $data['start'];
            $year->end = $data['end'];
            $year->status = $data['status'];
            $year->save();
            return redirect()->route('year.index')->with('success', 'Year Updated Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('year.index')->with('error', 'Something went wrong. '.$exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Year::destroy($id);
            return redirect()->route('year.index')->with('success', 'Year Deleted Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('year.index')->with('error', 'Something went wrong');
        }
    }

    public function search()
    {
        return view('admin.year.search');
    }

    public function searchYear(YearRequest $request)
    {
//        dd($request->name);
        $inputYear = $request->name;
        $yearDetails = DB::table('years')->where('name', '=', $inputYear)->get();
        if (count( $yearDetails)>0){
//             dd($yearDetails);
            return view('admin.year.search_result')
                ->with('yearDetails', $yearDetails)
                ->with('inputYear', $inputYear);
        }
        else {
            $yearDetails = null;
            return view('admin.year.search_result')
                ->with('yearDetails', $yearDetails)
                ->with('inputYear', $inputYear);
        }
//             dd( 'No Details found. Try to search again !' );
//        return view('admin.year.search_result');
    }

    public function searchResult()
    {

    }

//    public function show(Request $request)
//    {
//        dd($request);
//    }
}
