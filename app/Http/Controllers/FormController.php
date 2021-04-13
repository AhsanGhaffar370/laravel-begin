<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function getdata(Request $req){

        $req->validate([
            'name'=>'required | min:3 | max:10',
            'email'=>'required | email' ,
            'doc'=>'required | mimes:jpeg,png,PNG | max: 1024 | dimensions: min_width=100,min_height=100,max_width=500,max_height=500 '
        ]);

        echo $req->file('doc')->store('media');

        return $req->input();
    }
}
