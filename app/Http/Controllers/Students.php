<?php
// this is use for Query builder with direct DB Table -naming singular// Table and Controller//
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Students extends Controller
{
    function listOfStudents()
    {
        $data =   DB::table('students')->get();
        //   return  DB::table('students')->count();;
        //   return  DB::table('students')->find(4);
        //   ->where('id',4)->get();

        return view('builder.list', ['students' => $data]);
    }
    function insert(Request $req)
    {
        // return $req->input();
        DB::table('students')
            // ->insert(
            ->insertOrIgnore(
                [
                    'name' => $req->studentName,
                    'age' => $req->age,
                    'city_id' => $req->city_id,
                    'class' => $req->class,
                ]
            );
        return redirect('list');
    }
    function edit($id)
    {
        $data =  DB::table('students')->find($id);
        return view('builder.edit', ['students' => $data]);
    }

    function upd(Request $req)
    {
        // return $req->input();
        DB::table('students')
            ->where('id', $req->id)
            ->update(
                [
                    'name' => $req->studentName,
                    'age' => $req->age,
                    'city_id' => $req->city_id,
                    'class' => $req->class,
                ]
            );
        return  redirect('list');
    }

    function delete_stu($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect('list');
    }


    //     Interview Question: Yes it is possible, first we need  to keep them into the values like` min and max, and then return them in once
    // $min = DB::table('students')->min('id');
    // $max = DB::table('students')->max('id');
    //  return "min - ".$min." max - ".$max;

}
