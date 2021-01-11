<?php

namespace App\Http\Controllers;

use App\Http\Requests\YearRequest;
use App\Models\Year;
use Illuminate\Http\Request;

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
//        dd($yearRequest->only('name', 'start', 'end'));

        try {
            $data = $yearRequest->only('name', 'start', 'end');
            Year::create($data);
            return redirect()->route('year.create')->with('success', 'Year Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('year.create')->with('error', 'Something went wrong');
        }

    }

    public function edit($id)
    {
        $year = Year::findOrFail($id);
        return view('admin.year.edit')
            ->with('year', $year);
    }

    public function update(YearRequest $yearRequest, $id)
    {
        try {
            $data = $yearRequest->only('name', 'start', 'end');
            $year = Year::findOrFail($id);
            $year->name = $data['name'];
            $year->start = $data['start'];
            $year->end = $data['end'];
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
}
