<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileupController extends Controller
{
    function index(Request $req)
    {
        // $data =  $req->file('file_upload')->store('docs'); //single name //
        // $req->session()->flash('file', $data);
        // return redirect('file-upload');

        ///With change by name md5 ///
        $md5Name = md5_file($req->file('file_upload')->getRealPath());
        $guessExtension = $req->file('file_upload')->guessExtension();
        $data = $req->file('file_upload')->storeAs('docs', $md5Name . '.' . $guessExtension, 'public');
        $req->session()->flash('file', $data);
        return redirect('file-upload');
    }
}
