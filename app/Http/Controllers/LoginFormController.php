<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{

    function check_session(){
        // session()->forget('noaccess');
        
        if((session()->has('email'))){
            return redirect('profile');
        }else{
            // return redirect('user_login');
            // session()->flash('noaccess', 'access denied'); //automatically unset session on page reload
            return view('login_form');
        }
    }

    function set_session(Request $req){
        // session()->forget('noaccess');
        $req->validate([
            'mail'=>'required | email',
            'pass'=>'required'
        ]);

        if($req->input('mail')=='ahsan@gmail.com' && $req->input('pass')=='12345' ){
            // $data= $req->input(); //get complete data email,password etc
            $data= $req->input('mail'); //get only email
            $req->session()->put('email',$data);
            // echo (session('email'));

            return redirect('profile');
        }else{
            $req->session()->flash('login_error', 'please enter valid login details'); //automatically unset session on page reload
            return redirect('loginform');
        }
    }

    function userprofile(){
        return view('userprofile');
    }
    function userprofile2(){
        return view('userprofile2');
    }
    function userprofile3(){
        return view('userprofile3');
    }

    function remove_session(Request $req){
            $req->session()->pull("email",null);
            return redirect('loginform');
            // $req->session()->forget('email');
    }

}
