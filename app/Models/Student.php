<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public $firstName;
    // public $lastName;
    // public $address;

    // function set_firstName($firstName) {
    //     $this->firstName = $firstName;
    // }
    // function set_lastName($lastName) {
    //     $this->lastName = $lastName;
    // }
    // function set_address($address) {
    //     $this->address = $address;
    // }


    use HasFactory;
    public $timestamps=false;
}
