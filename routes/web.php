<?php

use App\Http\Controllers\FileupController;
use App\Http\Controllers\HttpclientapiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/first', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('hello');
});
// Route::get("users",UserController@show); //This the route system for >-< laravel 7.//
// Route::get("user",[UserController::class,'show']);
Route::get("user/{id}", [UserController::class, 'index']);
Route::get("load/{nirob}", [UserController::class, 'loadUser']);


Route::get('post', [PostController::class, 'index'])->middleware('ageProtected'); //Single Route middleware//
// Route::get('post', [PostController::class, 'index'])->middleware(['1stMiddleRoute','2ndMiddleRoute']); //Multiple Route middleware//
// Route::view('post','post');
// Route::view('post','post');


Route::view('login', 'login');
Route::post('get_data', [LoginController::class, 'loadForm']);
// Route::view('about','about'); //using for global middleware
// Route::view('home','home');
Route::view('no', 'noaccess');
Route::middleware(['protectedAge'])->group(function () {
    Route::view('about', 'about');
    Route::view('home', 'home');
});




//Http client//
Route::get('students', [StudentController::class, 'index']);

Route::get('http-api', [HttpclientapiController::class, 'index']);





//session //
// Route::view('ssLogin', 'sessionLogin');
Route::post('session', [SessionController::class, 'load']);
Route::view('profile', 'profile');

//if user has login it return redirect to profile page//
//other wise get view to login //
Route::get('ssLogin', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('sessionLogin');
});

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('ssLogin');
});
///flash session///




///file upload///
Route::view('file-upload', 'fileUpload');
Route::post('file-upload',[FileupController::class, 'index'] );





