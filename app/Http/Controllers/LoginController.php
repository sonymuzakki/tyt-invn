<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function loginadmin(){
    //     return view('login.loginadmin');
    // }
    // public function login(){
    //     return view('login.login');
    // }

    // public function loginproses(Request $request){
    //     // dd($request->all());
    //         if(Auth::attempt($request->only('email','password'))){
    //             return redirect('/');
    //         }
    //         return redirect('login');
    // }

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

}