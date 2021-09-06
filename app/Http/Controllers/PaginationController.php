<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagination;

class PaginationController extends Controller
{
   function index()
    {
        // $data = Pagination::all();// ::all() is for all data rendering in view //
        $data = Pagination::paginate(5); // ::paginate(5) ; is for how much data we can display!
        return view('pagination',['paginations'=> $data]);
    }
}
