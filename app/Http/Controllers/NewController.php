<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class NewController extends Controller
{
    function login(){
        return view('welcome');
    }
    function logout(){
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo' => Admin::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard', $data);
    }
    function signup(){
        return view('signup');
    }
    function save(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'confirmpw'=>'required'
        ]);
        $userInfo = Admin::where('username', '=', $request->username)->first();
        if ($userInfo){
            return back()->with('fail', 'Username already been taken');
        }
        if (!$userInfo) {
            $admin = new Admin;
            $admin->username = $request->username;
            $admin->password = $request->password;
            $admin->confirmpw = $request->confirmpw;
            if ($request->password != $request->confirmpw) {
                return back()->with('fail', 'Please confirm password');
            }
            $save = $admin->save();
        }

        if ($save){
            return redirect('/')->with('success','data successfully inserted');
        }
        else{
            return back()->with('fail','failed to insert data');
        }

    }
    function check(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:3|max:35'
        ]);
        $userInfo = Admin::where('username', '=', $request->username)->first();

        if (!$userInfo) {
            return back()->with('fail', 'No User found on database');
        } else {

        if ($request->password == $userInfo->confirmpw) {
            $request->session()->put('LoggedUser', $userInfo->id);

            return redirect('/dashboard');
        } else {
            return back()->with('fail', 'Incorrect Password');
        }
             }
        }



}
