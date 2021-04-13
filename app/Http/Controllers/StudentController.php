<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    function addstudent(Request $req){

        $student = new Student;

        $student->firstName= $req->firstName;
        // $student->firstName= $req->input('firstName');
        $student->lastName= $req->lastName;
        $student->address= $req->address;

        // $student->set_firstName($req->firstName);
        $student->save();

        return redirect('read-data');
        
    }
}
