@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Input Inventaris</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Inventaris</div>
        </div>
      </div>

      <section class="Form">
        <div class="card">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertinven" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6  mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Pengguna</label>
                                    <select class="form-control" name="idu" aria-label="Default Select example">
                                        <option>Select Option ..</option>
                                        @foreach ($users as $users )
                                        <option value="{{ $users->idu }}">{{ $users->nama}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Is Legal OS</label>
                                <select class="form-control" name="isLegalOs" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                                    <select class="form-control" name="idd" aria-label="Default Select examples " aria-valuemax="disable">
                                        <option>Select Option ..</option>
                                        @foreach ($divisi as $datas )
                                            <option value="1">{{ $datas->divisi }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Office</label>
                                <select class="form-control" name="office" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="WPS 365">WPS 365</option>
                                  <option value="OHM 2019">OHM 2019</option>
                                  <option value="Open Office">Open Office</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                                    <select class="form-control" name="idl" aria-label="Default Select examples">
                                        <option>Select Option ..</option>
                                        @foreach ($lokasi as $datas )
                                            <option value="1">{{ $datas->lokasi }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Internet</label>
                                <select class="form-control" name="internet" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Hostname</label>
                                <input type="text" class="form-control" name="hostname" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Ip Address</label>
                                <input type="text" class="form-control" name="ipAddress" id="exampleFormControlInput1" placeholder="">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Jenis</label>
                                <select class="form-control" name="jenis" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="PC">PC</option>
                                  <option value="Laptop">Laptop</option>
                                </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">IAMS</label>
                                <select class="form-control" name="iams" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Company Email</label>
                                <input type="text" class="form-control" name="companyemail" id="exampleFormControlInput1" placeholder="">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Processor</label>
                                <input type="text" class="form-control" name="processor" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">User Account</label>
                                <input type="text" class="form-control" name="useraccount" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Hardisk</label>
                                <input type="text" class="form-control" name="hardisk" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">SSD</label>
                                <input type="text" class="form-control" name="ssd" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Ram</label>
                                <input type="text" class="form-control" name="ram" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Anydesk ID</label>
                                <input type="text" class="form-control" name="anydeskId" id="exampleFormControlInput1" placeholder="">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">OS</label>
                                <select class="form-control" name="os" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="WIN 11">WIN 11</option>
                                  <option value="WIN 10">WIN 10</option>
                                  <option value="Windows Server 2016">Windows Server 2016</option>
                                  <option value="WIN 7">WIN 7</option>
                                </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Graphic</label>
                                <input type="text" class="form-control" name="graphic" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Account Office</label>
                                <input type="text" class="form-control" name="akunOffice" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Status</label>
                                <select class="form-control" name="status" aria-label="Default Select example">
                                  <option>Select Option ..</option>
                                  <option value="Baik">Baik</option>
                                  <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                        </div>

                            <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
