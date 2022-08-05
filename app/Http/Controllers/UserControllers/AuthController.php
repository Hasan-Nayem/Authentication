<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class AuthController extends Controller
{
    //
    public function index(){
        return view('user.login');
    }
    public function dashboard(){
        return view('user.dashboard');
    }
    public function login(Request $request){
        $check = $request->all();
        // dd($check);
        if(Auth::guard('customer_guard')->attempt([
            'email' => $check['email'],
            'password' => $check['password'],
        ])){
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->back()->with('info','Login Credentials Dosen\'t Matched!!!');
        }
    }
    public function logout(){
        Auth::guard('customer_guard')->logout();
        return redirect()->route('user.login.form')->with('info','Successfully Logged Out!!!');
    }

    public function user_signup(Request $request){
        $validation = [
            'name' => 'required|max:25|min:5',
            'email' => 'required',
            'password' => 'required|max:32|min:8',
        ];
        $custom_messages = [
            'name.required' => 'Please Enter Your Name',
            'name.max' => 'Your Name Is Too Long',
            'name.min' => 'Your Name Is Too SHort',
            'email.required' => 'Please Enter Your Email',
            'password.min' => 'Password Can\'t Be Less Than 8 charrecter',
            'password.max' => 'Password Can\'t Be More Than 32 charrecter',

        ];
        $this -> validate($request,$validation,$custom_messages);
       
        $info = new Customer();
        $info->name = $request->name;
        $info->email = $request->email;
        $hashedpassword = Hash::make($request->password);
        $info->password =  $hashedpassword;
        $info->phone = '+8801521394776';
        $info->address = '+8801521394776';
        $info->image = '+8801521394776';
        // dd($info);
        $info->save();
        return redirect()->route('user.login.form')->with('info',"Account Created Successfully!!! Now Log In Into Your Newly Created Account!");
    }

}
