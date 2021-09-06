<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AccessorController extends Controller
{
    function index()
    {
        return Employee::all();
    }
}
