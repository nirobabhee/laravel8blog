<?php

namespace App\Http\Controllers;

use App\Models\Salaries;
use App\Models\Student;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function get()
    {
        return ['name'=>'Nirob', 'age'=>29, 'mobile'=> '01683130030'];
    }
    public function list()
    {
        return  Salaries::all(); //its single table all data.
    }
    public function dualTable()
    {
        $tableOne =  Salaries::all();
        $tableTwo =  Student::all();
        return [$tableOne,$tableTwo ];
    }
    public function addSalary(Request $req)
    {
        $salary = new Salaries();
        $salary->student_id = $req->student_id;
        $salary->salary = $req->salary;
        $result = $salary->save();
        if ($result) {
            return '"Salary:" Has been added';
        } else {
            return '"Salary:"failed';
        }
    }
    public function updateSalary(Request $req)
    {
        $salary = Salaries::find($req->id);
        $salary->student_id = $req->student_id;
        $salary->salary = $req->salary;
        $rr = $salary->save();
        if (($rr)) {
            return '"Salary:" Has been updated!';
        }else{
            return '"Salary:"Failed!';
        }
    }

    public function delete($id){
        $salary = Salaries::find($id);
        $rr= $salary->delete();


        if (($rr)) {
            return $id.'"Data"=>  Has been Deleted';
        }else{
            return '"Deleted:"Failed!';
        }
    }

    function search($salary)
    {
        return Salaries::where("salary", $salary)->get(); //search any data
    }

}
