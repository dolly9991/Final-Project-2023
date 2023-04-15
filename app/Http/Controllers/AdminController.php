<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class AdminController extends Controller
{
    public function addview()
    {
    	return view('admin/addUsers');
    }

    public function upload(Request $request)
    {
        $employees = new Employees;

        //get the images of employees
        $image =$request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $image->move('employeesimage',$imagename);
        $employees->image =$imagename;

        // employe name
        $employees->name =$request->name;
        $employees->email =$request->email;
        $employees->password =$request->password;
        $employees->phone =$request->phone;
        $employees->address =$request->address;
        $employees->roomNo =$request->roomNo;
        $employees->role =$request->role;

        $employees->save();

        return redirect()->back()->with('message', 'User added successfully');

    }
    public function upload1(){

        $employees = employees::all();
        return view('admin.home',compact('employees'));
        }
    }
?>