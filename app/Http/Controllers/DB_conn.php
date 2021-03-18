<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_conn extends Controller
{
    //

    function get(){
        return DB::select('select * from emps');
    }
}
