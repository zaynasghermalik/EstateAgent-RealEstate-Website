<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\File;

class AdminController extends Controller
{
    //
    function login(){
        return view('admin.login');
    }
    function register(){
        return view('admin.register');
    }
    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:4|max:12'
        ]);

         //Insert data into database
         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password = Hash::make($request->password);
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:4|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedAdmin', $userInfo->id);
                return redirect('/');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/');
        }
    }

    function dashboard(){
        $data = ['LoggedAdminInfo'=>Admin::where('id','=', session('LoggedAdmin'))->first()];
        return view('frontend.index', $data);
    }
}
