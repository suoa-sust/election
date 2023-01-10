<?php

namespace App\Http\Controllers;

use App\Models\ElectionCommission;
use Illuminate\Http\Request;

class ElectionCommissionController extends Controller
{
    public function index()
    {
        $ecs = ElectionCommission::orderBy('year_id', 'desc')->get();
        return view('admin.ec.index')
            ->with('ecs', $ecs);
    }
}
