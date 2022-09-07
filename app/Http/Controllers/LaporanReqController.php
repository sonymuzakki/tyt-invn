<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\users;
use App\Models\proses;
use App\Models\inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\laporan_request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;

class LaporanReqController extends Controller
{
    // Request
    public function formreq(){
        $data = laporan_request::all();
        $users = users::all();

        return view('administrator.formreq',compact('data','users'));
    }

    public function requsers(){
        // $data = laporan_request::all();
        $data = laporan_request::all();
        $inventory = inventory::all();
        $users = users::all();
        return view('administrator.formrequsers',compact('data','inventory','users'));
    }

    public function datareq(){
        $data = laporan_request::paginate(10000);
        return view('data.datareq',compact('data'));
    }

    public function datareqsuc(){
        $data = laporan_request::paginate(10000);
        return view('data.datareqsuc',compact('data'));
    }

    public function tambahreq(Request $request){
        // dd($request->all());
        laporan_request::create($request->all());
        // return view('data.datarequest');
        Session::flash('tes','Data berhasil diproses, silahkan menunggu respons team IT');
        return redirect()->route('users');
    }

    public function prosesreq($idr){
       $data = laporan_request::find($idr);
       $users = users::all();
       $proses = proses::all();
       return view('function.prosesreq',compact('data','users','proses'));
    }

    public function update(Request $request, $idr){
        $data = laporan_request::find($idr);
        $users = users::all();
        $data->update($request->all());
        return redirect()->route('datareqsuc',compact('data','users'));
    }

    // public function updateproses(Request $request, $idr){

    //     $validated= $request->validate([
    //         'idu' => 'required|exists:App\Models\users,idu']);

    //         $data = inventory::find($idr);
    //         $data->kendala = $request->kendala;
    //         $data->handling = $request->handling;
    //         $data->status = $request->status;
    //         $data->save();

    //         $users = users::where('idu',$request->idu);
    //         $user = users::all();

    //         return redirect()->route('datareqsuc','data','users','user');

    // }
}
