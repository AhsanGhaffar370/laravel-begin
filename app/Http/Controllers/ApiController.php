<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    function get_api(){

        return json_encode(['name'=>'ahsan','email'=>'ahsan@gmail.com','phone'=>'12341111']);
    }
}
