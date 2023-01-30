<?php

namespace App\Http\Controllers;

use App\Http\Requests\EcRequest;
use App\Models\ElectionCommission;
use App\Models\Year;
use Illuminate\Http\Request;

class ElectionCommissionController extends Controller
{
    public function index()
    {
        $ecs = ElectionCommission::orderBy('year_id', 'desc')->get();
        return view('admin.ec.index')
            ->with('ecs', $ecs);
    }

    public function create()
    {
        $years = Year::where('status', '!=', 'INACTIVE')->orderBy('name', 'desc')->pluck('name');
        $ec_roles = ['ELECTION_COMMISSIONER', 'CHIEF_ELECTION_COMMISSIONER'];
        return view('admin.ec.create')
            ->with(compact('years', 'ec_roles'));
    }

    public function store(EcRequest $request)
    {
        try {
            $data = $request->except('_token');

            $filePath = '';
            if($request->file()) {
                $nameWithExt = $request->photo->getClientOriginalName();
                $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
                $ext = pathinfo($nameWithExt, PATHINFO_EXTENSION);
                $fileName = $data['year'].'_'.$name.'_'.time() .'.'. $ext;
                $filePath = $request->file('photo')->storeAs('/images/ec', $fileName, 'public_uploads');
            }

            $data['year_id'] = Year::whereName($data['year'])->first()->id;
            if ($filePath){
                $data['photo'] = $filePath;
            }
            ElectionCommission::create($data);

            return redirect()->route('ec.index')->with('success', 'EC Member Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->route('ec.create')->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $ec = ElectionCommission::findOrFail($id);
        $years = Year::all()->pluck('name');
//        $ec->election_date = Carbon::parse($ec->election_date)->toDateString();
        $ec_roles = ['ELECTION_COMMISSIONER', 'CHIEF_ELECTION_COMMISSIONER'];
        $statuses = ['ACTIVE', 'INACTIVE'];
        return view('admin.ec.edit')
            ->with('ec', $ec)
            ->with('years', $years)
            ->with('ec_roles', $ec_roles)
            ->with('statuses', $statuses);
    }

    public function destroy($id)
    {
        try {
            ElectionCommission::destroy($id);
//            $ec = ElectionCommission::findOrFail($id);
//            $ec->delete();
            return redirect()->route('ec.index')->with('success', 'EC Member Deleted Successfully!');
        }catch (\Exception $exception){
            return redirect()->route('ec.index')->with('error', 'Something went wrong!');
        }

    }
}
