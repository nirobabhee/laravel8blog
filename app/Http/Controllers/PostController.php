<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        // return view('post', ['users' => 'Apu']); //count and if else ........
        $user = array('Nirob', 'Apu', 'Nahid', 'sam');
        return view('post',['users'=> $user]);

    }

    // public function getdata(Request $request)
    // {
    //     // echo 'ok done';

    //         $one = $request->input('name');
    //         $two = $request->input('host');
    //         $three = $request->input('amount');
    //         $four = $request->input('details');
    //         echo $one;

    //     return $request;
    // }
}
