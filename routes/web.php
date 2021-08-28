<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/first', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('hello');
});
//Route::get("users",UserController@show); //This the route system for laravel 7.//
// Route::get("user",[UserController::class,'show']);
Route::get("user/{id}",[UserController::class,'index']);
Route::get("load/{nirob}", [UserController::class, 'loadUser']);
Route::get("post",[PostController::class, "index"]);
Route::get("post2",[PostController::class,'index2']);

