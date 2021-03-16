<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    //

    function loadView(){
        $data=['ahsan','faraz','noman'];
        return view('users2',["usersname"=>$data]);
    }
}
