<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($id)
    {
        return $id;
    }
    function show()
    {
        return 'Hello test Function';
    }
    function loadUser($nirob)
    {
        if (view()->exists('user')) {
            return view('user', ['parameter' => $nirob]);
        } else {
            echo "Not Found";
        }
    }
}
