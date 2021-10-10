<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data',[APIController::class,'getdata']);
Route::get('list',[APIController::class,'list']);
Route::get('two-table-data',[APIController::class,'dualTable']);
Route::post('add',[APIController::class, 'addSalary']);

Route::put('update',[APIController::class,'updateSalary']);
