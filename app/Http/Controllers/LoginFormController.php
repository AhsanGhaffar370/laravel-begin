<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{

    function check_session(){
        session()->forget('noaccess');
        
        if((session()->has('email'))){
            return redirect('profile');
        }else{
            return redirect('user_login');
        }
    }

    function set_session(Request $req){
        session()->forget('noaccess');

        if($req->input('email123')=='ahsan@gmail.com' && $req->input('password123')=='12345' ){
            // $data= $req->input(); //get complete data email,password etc
            $data= $req->input('email123'); //get only email
            $req->session()->put('email',$data);
            // echo (session('email'));

            return redirect('profile');
        }else{
            $req->session()->flash('login_error', 'please enter valid login details'); //automatically unset session on page reload
            return redirect('user_login');
        }
    }

    function view_session(){
        session()->forget('noaccess');

        if((session()->has('email'))){
            return view('userLoggedin');
        }else{
            return redirect('user_login');
        }
    }
    function check_session2(){
        if((session()->has('email'))){
            return redirect('profile');
        }else{
            session()->flash('noaccess', 'access denied'); //automatically unset session on page reload
            return view('login_form');
        }
    }

    function remove_session(Request $req){
        if(($req->session()->has('email'))){
            $req->session()->pull("email",null);
            // $req->session()->forget('email');
        }
        return redirect('user_login');

    }

}
