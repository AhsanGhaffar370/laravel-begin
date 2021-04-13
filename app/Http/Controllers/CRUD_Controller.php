<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// use Illuminate\Support\Facades\DB;

class CRUD_Controller extends Controller
{
    function show(){

        // $data= Student::all();
        $data= Student::paginate(15);

        $msg='read';
        return view('crud',['data'=>$data]);
    }

    function delete($id){
        $data= Student::find($id);
        $data->delete();
        return redirect('read-data');
    }

    function viewdata($id){
        $data= Student::find($id);
        return view('crud_update',['data'=>$data]);
        // return Student::find($id);
    }

    function update(Request $req){
        $data= Student::find($req->id);
        $data->firstName=$req->firstName;
        $data->lastName=$req->lastName;
        $data->address=$req->address;
        $data->save();
        return redirect('read-data');
        // return Student::find($id);
    }

    function showUsingDB(){
        // $data=DB::table('students')->get();
        // $data=DB::table('students')->where('id',21)->get();
        // $data=DB::table('students')->where('id',20)->delete();
        // $data=(array)DB::table('students')->find(20);//find id
        // $data=DB::table('students')->
        // insert([
        //     'firstName'=>'ahsan',
        //     'lastName'=>'rao',
        //     'address'=>'korangi',
        // ]);
        // $data=DB::table('students')
        // ->where('id',20)
        // ->update([
        //     'firstName'=>'ahsan11',
        //     'lastName'=>'rao11',
        //     'address'=>'korangi2122',
        // ]);
        // $data=DB::table('students')
        // ->where('id',20)
        // ->updateOrInsert([
        //     'firstName'=>'ahsan11',
        //     'lastName'=>'rao11',
        //     'address'=>'korangi2122',
        // ]);
        // $data=DB::table('students')->get();
    }

}
