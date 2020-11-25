<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = UserModel::latest();
            return datatables()->of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                   // return datatables()->of($data)->make(true);
        }      
        return view('users');
    }
}
