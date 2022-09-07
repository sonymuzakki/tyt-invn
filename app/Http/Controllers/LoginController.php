<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\login;
use App\Models\users;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // !!----   LOGIN USERS  ----- !!

    public function login(){
        $data = users::all();
        return view('users.login',compact('data'));
    }

    public function loginproses(Request $request){
        return redirect()->route('users');
    }

    public function users(){
        $data = users::all();
        return view('users.tes',compact('data'));
    }
    // !!----- End Login Users ----!!

    // !! ----  Login Admin --- !!
    public function adminlogin(){
        return view('login.loginadmin');
    }

    // public function adminproses(Request $request){
    //     dd($request->all());
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('adminlogin');
    //     }
    //     return redirect('dahsboard')->with('success','Data Berhasil di ditambahkan');
    // }

    public function adminproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('dahsboard');
        }
        return redirect('adminlogin');
    }

    public function register(){
        return view('login.register');
    }

    public function regisproses(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token'=> Str::random(60),

        ]);
        return redirect('/');
    }
}