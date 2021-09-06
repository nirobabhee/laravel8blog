<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class JoinController extends Controller
{
    function showJoin(){
        return DB::table('students')
        ->join('cities','students.city_id' ,"=", 'cities.id')
        ->get();
    }
}
