<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('post');
    }
    public function index2()
    {
        $user = array('Nirob', 'Urmi', 'Jannah', 'Nahid', 'Raad', 'Anabia', 'Sourav');
        // return view('post',compact('user'));
        return view('post', ["data" => $user]);
    }

    public function getdata(Request $request)
    {
        // echo 'ok done';

            $one = $request->input('name');
            $two = $request->input('host');
            $three = $request->input('amount');
            $four = $request->input('details');
            echo $one;

        return $request;
    }
}
