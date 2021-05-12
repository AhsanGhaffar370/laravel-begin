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
}
