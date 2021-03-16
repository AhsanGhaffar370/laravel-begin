<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function abc($id){
    //     return $id;
    // }

    function loadUsersView($name){
        return view('users',['username'=>$name]);

    }

    
}
