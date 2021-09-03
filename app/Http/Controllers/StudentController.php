<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //db connections here the controller//
use App\Models\Student;

class StudentController extends Controller
{
    function index()
    {
        // return DB::select('select * from students');//use db then get write query//
        return Student::all();
        //Note:-> laravel 8 - provide Model Name to direct connct to db table if DB table name and Model name same as model-plural and table name can be singular"//
    }
}
