<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_conn extends Controller
{
    function get(){
        // return DB::select('select * from emps');

        // $res= DB::table('emps')->get();
        // $res= DB::table('emps')->where('id',1)->get(); //where('id',1) -> id=1
        // $res= DB::table('emps')->where('id','>',1)->get();
        // $res= DB::table('emps')->where('id','>',1)->exists(); //return 1 if data exist
        // $res= DB::table('emps')->where('id','>',41)->doesntExist(); //return 1 if data doesnt exist
        // $res= DB::table('emps')->count();
        // $res= DB::table('emps')->select('email')->get();
        // $res= DB::table('emps')->select(array('id','email'))->get();
        // $res= DB::table('emps')->select(array('id','email'))->orderBy('id','desc')->get();
        // $res= DB::select(DB::raw('select id,email from emps order by id desc'));

        // $data=DB::table('emps')->
        // insert([
        //     'email'=>'osama',
        //     'password'=>'rao',
        // ]);

        // $data=DB::table('emps')
        // ->where('id',2)
        // ->update([
        //     'email'=>'hammad',
        //     'password'=>'5555',
        // ]);
        
        $data=DB::table('emps')
        ->where('id',5)
        ->delete();

        // echo '<pre>';
        // print_r($res);
        // echo '</pre>';
    }
}
