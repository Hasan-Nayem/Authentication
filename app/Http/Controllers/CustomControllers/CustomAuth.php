<?php

namespace App\Http\Controllers\CustomControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class CustomAuth extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function AdminLogin(Request $request){
        $check = $request->all();
        // dd($check)->exit();
        if(Auth::guard('admin_guard')->attempt( 
            [ 
            'email' => $check['email'], 
            'password' => $check['password'],
            // 'status' => 1,
            ])){
            return redirect()->route('admin.dashboard');
            // return redirect()->back()->with('info',"Login Credentials Matched!");

        }

        // Account Is Active Or Not Checking Condition

        // else if(Auth::guard('admin_guard')->attempt( 
        //     [ 
        //     'email' => $check['email'], 
        //     'password' => $check['password'],
        //     'status' => 0,
        //     ])){
        //     return back()->with('info', 'Account Is Not Active Yet!!!');   
        // }


        else{
            return back()->with('info', 'Invalid Login Credintials!!!');
        }

    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function Logout(){ 
        Auth::guard('admin_guard')->logout();
        return redirect()->route('login.form')->with('info', 'Succesfully Logged Out');
    }
}
