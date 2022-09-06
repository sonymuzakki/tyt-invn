<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\divisi;
use App\Models\lokasi;
use App\Models\inventory;
use App\Models\laporan_request;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function forminventaris(){
        $data = inventory::all();
        $users = users::all();
        $lokasi = lokasi::all();
        $divisi = divisi::all();

        return view('administrator.forminventaris',compact('data','users','lokasi','divisi'));
    }

    public function insertinven(Request $request){
        inventory::create($request->all());
        return redirect()->route('datainven')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    public function editinven($id)
        {
            $data = inventory::findorFail($id);
            $posts = inventory::orderBy('id', 'DESC')->get();
            $divisi = divisi::all();
            $lokasi = lokasi::all();
            $users = users::all();           // dd($data);
            return view('function.editinven',compact('data','divisi','lokasi','users'));
        }


    public function datainven(){
        $data = inventory::paginate(10);
        return view('data.datainven',compact('data'));
    }

    public function updateinven(Request $request, $id){

        $validated = $request->validate([
            'idu' => 'required|exists:App\Models\users,idu',
            'idd' => 'required|exists:App\Models\divisi,idd',
            'idl' => 'required|exists:App\Models\lokasi,idl',
            // 'jenis' => 'required|in:1,2',
        ]);

        $data = inventory::find($id);
        $data->idu = $request->idu;
        $data->idd = $request->idd;
        $data->idl = $request->idl;
        $data->merk = $request->merk;
        $data->hostname = $request->hostname;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->graphic = $request->graphic;
        $data->hardisk = $request->hardisk;
        $data->ssd = $request->ssd;
        $data->os = $request->os;
        $data->isLegalos = $request->isLegalOs;
        $data->office = $request->office;
        $data->akunOffice = $request->akunOffice;
        $data->internet = $request->internet;
        $data->ipAddress = $request->ipAddress;
        $data->iams = $request->iams;
        $data->companyemail = $request->companyemail;
        $data->useraccount = $request->useraccount;
        $data->anydeskId = $request->anydeskId;
        // $data->status = $request->status;
        $data->save();

        $user = users::where('idu', $request->idu);
        $users = users::all();
        $lokasi = lokasi::all();
        $divisi = divisi::all();
        // return view('data.datainven',compact('data','users','user','lokasi','divisi'));

        return redirect()->route('datainven',compact('user','users','lokasi','divisi'))->with('success','Data berhasil Ditambahkan')->with('success','Data Berhasil Di Update');
    }

    public function detailsinven($id)
    {
        $data = inventory::find($id);
        $divisi = divisi::all();
        $lokasi = lokasi::all();
        $users = users::all();
        return view('function.detailsinven', compact('data','divisi','lokasi','users'));
    }

}