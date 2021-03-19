<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ShowDataController extends Controller
{
    function show(){
        // $data= Student::all();
        $data= Student::paginate(5);

        return view('showdata',['data'=>$data]);
    }
}
