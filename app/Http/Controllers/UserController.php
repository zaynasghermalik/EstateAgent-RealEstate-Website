<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\File;

class UserController extends Controller
{
    //
    function userlogin(){
        return view('user/login');
    }
    function userregister(){
        return view('user/register');
    }

    function usersave(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:4|max:12'
        ]);

         //Insert data into database
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $save = $user->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function usercheck(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:4|max:12'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('user/view');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function userlogout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('user/login');
        }
    }

    function userview(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user/view', $data);
    }

    function userhomepage(){
        return view('user/homepage');
    }
    
}
