<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\DB_conn;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\API_getdata;

use App\Http\Controllers\FormController;

use App\Http\Controllers\LoginFormController;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\CRUD_Controller;

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

// Available Route Methods
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::get('/', function () { 
    return view('welcome'); 
}); 

// Route::prefix('admin')->group(function () {
//     Route::get('myuser1/{name}', function($name){ 
//         return view("users",["user"=>$name]); 
//     }); 
// });

Route::get('myuser1/{name}', function($name){ 
    return view("users",["user"=>$name]); 
}); 
 
// name is required 
// Route::get('myuser1/{name}', function($name){ 
//     return view("users",["user"=>$name]); 
// }); 
 
// name is optional 
// Route::get('myuser/{name?}', function($name=null){ 
//     return view("users",["user"=>$name]); 
// }); 
 
  
// Route::get("user/{id}", [UserController::class, 'loadUsersView']); 
// Route::get("myuser/{name}", [UserController::class, 'loadUsersView']); 


// Route::get('myuser', function () { 
//     return view('users'); 
// }); 
// OR 
// Route::view('myuser1', 'users',['name'=>'taylor']); 
 
Route::get('aboutus',function(){ 
    return view('about'); 
}); 
// OR 
// Route::view('aboutus1', 'about');

Route::get("myuser2",[UserController2::class, 'loadView']);

Route::post("disp-form-data",[FormController::class, 'getdata']);
Route::view('submit-req', 'form');



////////////////
// Global, Group, Route Middleware
//////////////// 
Route::view('noaccess1','noaccess');

// Route::group(['middleware'=>['AgeCheckMiddleware']],function(){

//     Route::view('home', 'home');
//     Route::view('access', 'access');
// });

Route::group(['middleware'=>['AgeCheckMiddleware','height']],function(){

    Route::view('home', 'home');
    Route::view('access', 'access');
});

// Route::view('home', 'home')->middleware('AgeCheckMiddleware');
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     //
// });
////////////////
// End of Global, Group, Route Middleware
//////////////// 



Route::get('api_call',[API_getdata::class,'get_api']);


////////////////
// Login System using Session
//////////////// 
// after form submission of loginform, in form action we provide loginreq link to send data to LoginFormController which create a session.
Route::get('loginform',[LoginFormController::class,'check_session']);

Route::post('userprofile',[LoginFormController::class,'set_session']);

Route::get('logout',[LoginFormController::class,'remove_session']);




Route::group(['middleware'=>['loginAuthen']],function(){

    Route::get('profile',[LoginFormController::class,'userprofile']);
    Route::get('profile2',[LoginFormController::class,'userprofile2']);
    Route::get('profile3',[LoginFormController::class,'userprofile3']);
});



// Route::get('user_login',[LoginFormController::class,'check_session2']);

// Route::view('user_login','login_form');
// Route::view('profile','userLoggedin');

// Route::post('loginreq',[LoginFormController::class,'userlogin']);

// Route::post('loginreq',[LoginFormController::class,'userlogin']);


////////////////
// End of Login System using Session
//////////////// 


////////////////
// Simple Database Connectivity 
//////////////// 
Route::get('db_connect',[DB_conn::class,'get']);
Route::get('emps',[EmpController::class,'getdata']);
////////////////
// End of Simple Database Connectivity 
//////////////// 


////////////////
// Complete CRUD System 
//////////////// 
Route::view('addstu','addStudent');

Route::post('addstu',[StudentController::class,'addstudent']);

Route::get('read-data',[CRUD_Controller::class, 'show']);
Route::get('delete-data/{id}',[CRUD_Controller::class, 'delete']);
Route::get('update-data/{id}',[CRUD_Controller::class, 'viewdata']);
Route::post('update-data',[CRUD_Controller::class, 'update']);
////////////////
// End of Complete CRUD System 
//////////////// 


////////////////
// Simple Layout of application
//////////////// 
Route::view('layout','layout');
Route::view('page1','page1');
Route::view('page2','page2');
////////////////
// End of Simple Layout of application
//////////////// 


