<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loadForm(Request $req)
    {
        // $req->validate([
        //     'name' => 'required |max:20 |min:3',
        //     'password' => 'required |max:50 |min:5',
        // ]);

        // //custom message
        $customMessage = [
            "name.required" => "The name field cannot be empty !",
            "password.required" => "The password field cannot be empty !"
        ];

        $rule = [
            'name' => 'required | max:5',
            'password' => 'required | max:3'
        ];

        $this->validate($req, $rule, $customMessage);

        return $req->input();
    }
}
