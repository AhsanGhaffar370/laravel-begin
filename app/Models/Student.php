<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;
    // protected $table='emps'; //if your table name is different, then you can provide name of table in this way

    // function getFirstNameAttribute($value) {
    //     return $value;
    // }
    // function setFirstNameAttribute($value) {
    //     return $this->attributes['firstName'] = "Mr.". $value;
    // }  
}
