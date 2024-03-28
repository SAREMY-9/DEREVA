<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    //
    public function doneTest(Request $request)
    {

        $validateInfo= $request->validate([

            'candidateId'=>'required|exists:sellers,id',
            'officerId'=>'required|exists:admins,id',  
            'theoryTest'=>'required|in:Passed,Failed',                                       

        ]);

     //store the test in db

        Test::create($validateInfo);

        return redirect()->route('admin.home');

    }
}
