<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function load(Request $request)
    {
        $data = $request->input();
        // $request->session()->all('user',$data);
        // print_r(session('user')) ;

        $request->session()->put('user',$data['username']);
        echo  session('user');
    }
}
