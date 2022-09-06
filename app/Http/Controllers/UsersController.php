<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\inventory;
use Illuminate\Http\Request;
use App\Models\laporan_request;

class UsersController extends Controller
{
    public function formusers(){
        $data = users::all();
        return view('administrator.formusers',compact('data'));
    }

    public function insertusers(Request $request)
    {
        // dd($request->all());
        $data = users::create($request->all());
        return redirect()->route('datausers')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    public function datausers(){
        $data = users::paginate(25000);
        return view('data.datausers',compact('data'));
    }

    public function editusers($idu){
        $data = users::find($idu);
        // dd($data);
        return view('function.editusers',compact('data'));
    }

    public function updateusers(Request $request,$idu){
        $data = users::find($idu);
        $data->update($request->all());
        return redirect()->route('datausers')->with('success','data berhasil diedit');
    }

    public function deleteusers($idu){
        $data = users::find($idu);
        $data->delete();
        return redirect()->route('datausers')->with('toast_success', 'Data Berhasil Dihapus');
    }

}
