<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\DB_conn;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\API_getdata;

use App\Http\Controllers\LoginFormController;
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

Route::post("userform",[FormController::class, 'getdata']);
Route::view('userlogin', 'form');


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



Route::get('db_connect',[DB_conn::class,'get']);

Route::get('emps',[EmpController::class,'getdata']);

Route::get('api_call',[API_getdata::class,'get_api']);




Route::POST('loginreq',[LoginFormController::class,'userlogin']);

// Route::view('loginform','login_form');

Route::view("userprofile",'userLoggedin');


Route::get('logout',function(){
    if((session()->has('email'))){
        session()->pull("email",null);
    }
    return redirect('loginform');
});

Route::get('loginform',function(){
    if((session()->has('email'))){
        return redirect('userprofile');
    }
    return view('login_form');
});
