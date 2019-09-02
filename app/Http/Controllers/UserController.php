<?php

namespace App\Http\Controllers;


use App\Employee;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AddUser (Request $request)
    {
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=$request->password;
        $user->save();
    }

    public function GetUser()
    {
        return User::get();
    }
    public function GetUserByCondition(Request $request)
    {
        return User::where('name','=',$request->name)->get();
    }
}
