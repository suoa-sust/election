<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use App\Settings\StaticData;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $voters = Voter::all();

        return view('admin.voter.index', compact('voters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $designation = StaticData::$designation;
        return view('admin.voter.create')
            ->with('designation',$designation);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'office' => 'required|max:255',
            'serial' => 'required|numeric|unique:voters',
        ]);
        $voter = Voter::create($validatedData);
        return redirect('/voter')->with('success', 'New Voter is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
        $voter = Voter::findOrFail($id);
        return view('/voter/show', compact('voter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        //
        $voter = Voter::findOrFail($id);
        return view('admin.voter.edit', compact('voter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'office' => 'required|max:255',
            'serial' => 'required|numeric|unique:voters',
        ]);

        $voter = Voter::findOrFail($id);
        $voter->update($validatedData);
        return redirect('/voter')->with('success', 'Voter is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        //
        $voter = Voter::findOrFail($id);
        $voter->delete();

        return redirect('/voter')->with('success', 'Voter is successfully deleted');
    }

    public function updatevotestatus(Request $request)
    {
        $data = $request->all();
        $id = $data['userId'];
        if($data['checkboxValue'] == 'false'){
            $votestatus = 'NO';
        }
        else {
            $votestatus = 'YES';
        }
        $voter = Voter::findOrFail($id);
        $voter->vote_status = $votestatus;
        $voter->save();
    }
}



