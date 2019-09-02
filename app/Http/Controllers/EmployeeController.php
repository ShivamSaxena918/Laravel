<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function AddEmployee(Request $request)
    {
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->age = $request->age;
     //   $emp->password = bcrypt($request->password);
       $emp->phone= $request->phone;
        $emp->phone2= $request->phone2;
       $emp->save();
        return $emp;
    }
    public function FetchEmployee(Request $request)
    {
        return Employee::where([
                ['name','=',$request->name],
            ])->get();
    }
}
