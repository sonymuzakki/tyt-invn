<?php

use App\Models\users;
use App\Models\inventory;
use App\Models\LaporanUsers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LaporanReqController;
use App\Http\Controllers\LoginController;
use App\Models\laporan_request;
use App\Models\login as ModelsLogin;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dahsboard', function () {
    $totalusers = users::count();
    $totalinven = inventory::count();
    $totallaporan = laporan_request::count();
    $totallaptop = inventory::where('jenis','laptop')->count();
    $totalpc = inventory::where('jenis','pc')->count();
    // $data = laporan_request::paginate(5);
    $data = laporan_request::where('created_at', now())->get();
    // $usersterakhir = users::where('created_at');
    return view('dashboard',compact('totalusers','totalinven','totallaporan','totallaptop','totalpc','data'));
});
// users
Route::get('/formusers',[UsersController::class,'formusers'])->name('formusers');
Route::post('/insertusers',[UsersController::class,'insertusers'])->name('insertusers');
Route::get('/datausers',[UsersController::class,'datausers'])->name('datausers');
Route::get('/editusers/{idu}',[UsersController::class,'editusers'])->name('editusers');
Route::post('/updateusers/{idu}',[UsersController::class,'updateusers'])->name('updateusers');
Route::get('/deleteusers/{idu}',[UsersController::class,'deleteusers'])->name('deleteusers');

// Laporan req
Route::get('/datareq',[LaporanReqController::class,'datareq'])->name('reqdata');
Route::get('/datareqsuc',[LaporanReqController::class,'datareqsuc'])->name('datareqsuc');
Route::get('/requsers',[LaporanReqController::class,'requsers'])->name('requsers');
Route::post('/tambahreq',[LaporanReqController::class,'tambahreq'])->name('tambahreq');

// inventory
Route::get('/forminventaris',[InventoryController::class,'forminventaris'])->name('forminventaris');
Route::post('/insertinven',[InventoryController::class,'insertinven'])->name('insertinven');
Route::get('/editinven/{id}',[InventoryController::class,'editinven'])->name('editinven');
Route::post('/updateinven/{id}',[InventoryController::class,'updateinven'])->name('updateinven');
Route::get('/detailsinven/{id}',[InventoryController::class,'detailsinven'])->name('detailsinven');
Route::get('/datainven',[InventoryController::class,'datainven'])->name('datainven');

// Proses Request
Route::get('/prosesreq/{idr}',[LaporanReqController::class,'prosesreq'])->name('prosesreq');
Route::post('/updateproses/{idr}',[LaporanReqController::class,'update'])->name('update');

//Login users
Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/users',[LoginController::class,'users'])->name('users');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');

//admin login
Route::get('/adminlogin',[LoginController::class,'adminlogin'])->name('adminlogin');
Route::post('/adminproses',[LoginController::class,'adminproses'])->name('adminproses');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/regisproses',[LoginController::class,'regisproses'])->name('regisproses');

// error
Route::get('/404',[InventoryController::class,'error'])->name('404');