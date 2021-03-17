<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// name is required
// Route::get('myuser/{name}', function($name){
//     return view("users",["user"=>$name]);
// });

// name is optional
// Route::get('myuser/{name?}', function($name=null){
//     return view("users",["user"=>$name]);
// });


// Route::get("user/{id}", [UserController::class, 'loadUsersView']);
// Route::get("myuser/{name}", [UserController::class, 'loadUsersView']);


Route::get('myuser', function () {
    return view('users');
});
// OR
// Route::view('myuser1', 'users');

Route::get('aboutus',function(){
    return view('about');
});
// OR
// Route::view('aboutus1', 'about');

Route::get("myuser2",[UserController2::class, 'loadView']);

Route::post('userform',[FormController::class, 'getdata']);
Route::view('userlogin','form');
