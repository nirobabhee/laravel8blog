<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;

class InsertController extends Controller
{

    function readCities()
    {
        // $data = Pagination::all();// ::all() is for all data rendering in view //
        $data = Insert::paginate(5); // ::paginate(5) ; is for how much data we can display!
        return view('readCities', ['cities' => $data]);
    }
    public function insertCity(Request $req)
    {
        $insert = new Insert();
        $insert->city_name = $req->CityName;
        $insert->city_zip_code = $req->CityZipCode;
        $successfullyInsert = $insert->save();
        $req->session()->flash('formInserted', $successfullyInsert);
        return  redirect('city');
    }

    function delete($id)
    {
        $data = Insert::find($id);
        $data->delete();
        return redirect('show-cities');
    }
    function editView($id)
    {
       $data = Insert::find($id);

        return view('editView',['cityData'=>$data]);
    }

    function update(Request $req){
        $update = Insert::find($req->id);
        $update->city_name =$req->CityName;
        $update->city_zip_code =$req->CityZipCode;

       $flashData = $update->save();
        $req->session()->flash('updateData', $flashData);

        return redirect('city-edit/'.$req->id);




    }

}
