<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{
    function userlogin(Request $req){
        // $data= $req->input(); //get complete data email,password etc
        $data= $req->input('email123'); //get only email
        $req->session()->put('email',$data);
        // echo (session('email'));
        return redirect('userprofile');

    }
}
