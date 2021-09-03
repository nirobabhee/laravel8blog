<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpclientapiController extends Controller
{
    public function index()
    {
        // $posts = Http::get("https://jsonplaceholder.typicode.com/posts/1");
        // return view('httpapi-post',['posts'=> $posts]);

        $response = Http::get('http://example.com');
        return  $response;

        // return  $posts;
    }
}
