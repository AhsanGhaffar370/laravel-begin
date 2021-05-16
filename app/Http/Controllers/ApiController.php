<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{

    function get_api($id=null){

        // return json_encode(['name'=>'ahsan','email'=>'ahsan@gmail.com','phone'=>'12341111']);
        return $id?Student::find($id) : Student::all();

    }

    function post_api(Request $req){

        $student = new Student;

        $student->firstName= $req->firstName;
        $student->lastName= $req->lastName;
        $student->address= $req->address;
        $result=$student->save();

        if($result)
            return ['result'=>"data inserted"];
        else
            return ['result'=>"data not inserted"];
    
    }

    function put_api(Request $req){

        $student = Student::find($req->id);

        $student->firstName= $req->firstName;
        $student->lastName= $req->lastName;
        $student->address= $req->address;
        $result=$student->save();

        if($result)
            return ['result'=>"data updated"];
        else
            return ['result'=>"data not updated"];
    
    }
}
