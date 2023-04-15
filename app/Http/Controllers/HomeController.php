<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employees;



class HomeController extends Controller
{
    //redirect to home
    public function redirect()
    {
    	if (Auth::id()) 
    	{
    		if(Auth::user()->usertype=='0')
    		{
                $employees = employees::all();

                print "user successful";
    			return view('user.home');
    		}
    		else if (Auth::user()->usertype=='1')
    		{
                print "admin";
                $employees = employees::all();
                print "admin";

    			return view('admin.home');
                print "admin";
    		}
            else{
                print "officer";
                return view('officer.home');
            }

    	} 
    	else 
    	{
    		return redirect()->back();
    	}
    	

    }

    public function index()
    {
        if (Auth::id()) 
        { 
            return redirect('home');
        }
        else  
        {

        $employees = employees::all();

    	return view('user.home',compact('employees'));
    }
}

}
