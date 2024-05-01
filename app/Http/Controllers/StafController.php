<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    public function index()
    {
        return view("staf.staf");

    }

    public function store(Request $request){
        request()->validate([
            'name'=>'required',
            'role'=>'required'
        ]);

        Staf::create([
            'name'=>$request->name,
            'role'=>$request->role,
        ]);

        return  back();
    }
}
