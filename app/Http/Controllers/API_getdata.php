<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class API_getdata extends Controller
{
    //
    function get_api(){

        $data=Http::get("https://reqres.in/api/users?page=1");
        return view('view_api_data', ['collection'=>$data['data']]);
    }
}
