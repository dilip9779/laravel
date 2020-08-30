<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterController extends Controller
{

    function index(Request $request)
    {
        if(request()->ajax())
        {
            $data =DB::table('plan.district')
                  ->get();

            return datatables()->of($data)->make(true);
        }
        return view('master.district');
    }    
}
