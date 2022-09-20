@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Details Inventaris</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Details Inventaris</div>
        </div>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      <section class="Form">
        <div class="card">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <form action="/updateinven/ {{ $data->id }}" method="POST" enctype="multipart/form-data"disabled>
                        @csrf
                        <div class="row">
                            <div class="col-6  mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Pengguna</label>
                                    <select class="form-control" name="idu" aria-label="Default Select example "disabled>
                                        <option></option>
                                        @foreach ($users as $user )
                                            <option value="{{ $user->idu }}" {{ $user->idu == $user->idu? 'selected="selected"' : ' ' }}>{{ $user->nama}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Is Legal OS</label>
                                <select class="form-control" name="isLegalOs" aria-label="Default Select example"disabled>
                                  <option>{{ $data->isLegalos }}</option>
                                  <option value="1">YES</option>
                                  <option value="2">NO</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                                    <select class="form-control" name="idd" aria-label="Default Select examples " aria-valuemax="disabled"disabled>
                                        <option>{{ $data->divisi->divisi }}</option>
                                        @foreach ($divisi as $datas )
                                            {{--  <option value="{{ $datas->divisi }}">{{ $datas->divisi }}</option>  --}}
                                            <option value="{{ $datas->idd }}" {{ $data->idd == $datas->idd? 'selected="selected"' : ' ' }}>{{ $datas->divisi}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Office</label>
                                <select class="form-control" name="office" aria-label="Default Select example"disabled>
                                  <option>{{ $data->office }}</option>
                                  <option value="1">WPS 365</option>
                                  <option value="2">OHM 2019</option>
                                  <option value="3">Open Office</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                                    <select class="form-control" name="idl" aria-label="Default Select examples"disabled>
                                        <option>{{ $data->lokasi->lokasi }}</option>
                                        @foreach ($lokasi as $datas )
                                            {{--  <option value="{{ $datas->lokasi }}">{{ $datas->lokasi }}</option>  --}}
                                            <option value="{{ $datas->idl }}" {{ $data->idl == $datas->idl? 'selected="selected"' : ' ' }}>{{ $datas->lokasi}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Internet</label>
                                <select class="form-control" name="internet" aria-label="Default Select example"disabled>
                                  <option>{{ $data->internet }}</option>
                                  <option value="1">YES</option>
                                  <option value="2">NO</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Hostname</label>
                                <input type="text" class="form-control" name="hostname" id="exampleFormControlInput1" placeholder="" value="{{ $data->hostname }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Ip Address</label>
                                <input type="text" class="form-control" name="ipAddress" id="exampleFormControlInput1" placeholder="" value="{{ $data->ipAddress }}"disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Jenis</label>
                                <select class="form-control" name="jenis" aria-label="Default Select example"disabled>
                                  <option>{{ $data->jenis }}"</option>
                                  <option value="1" {{($data->jenis == '1') ? 'Selected' : ''}}>PC</option>
                                  <option value="2" {{($data->jenis == '2') ? 'Selected' : ''}}>Laptop</option>
                                </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">IAMS</label>
                                <select class="form-control" name="iams" aria-label="Default Select example"disabled>
                                  <option>{{ $data->iams}}</option>
                                  <option value="1">YES</option>
                                  <option value="2">NO</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="" value="{{ $data->merk }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Company Email</label>
                                <input type="text" class="form-control" name="companyemail" id="exampleFormControlInput1" placeholder="" value="{{ $data->companyemail }}"disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Processor</label>
                                <input type="text" class="form-control" name="processor" id="exampleFormControlInput1" placeholder="" value="{{ $data->processor }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">User Account</label>
                                <input type="text" class="form-control" name="useraccount" id="exampleFormControlInput1" placeholder="" value="{{ $data->useraccount }}"disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Hardisk</label>
                                <input type="text" class="form-control" name="hardisk" id="exampleFormControlInput1" placeholder="" value="{{ $data->hardisk }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">SSD</label>
                                <input type="text" class="form-control" name="ssd" id="exampleFormControlInput1" placeholder="" value="{{ $data->ssd }}"disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Ram</label>
                                <input type="text" class="form-control" name="ram" id="exampleFormControlInput1" placeholder="" value="{{ $data->ram }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Anydesk ID</label>
                                <input type="text" class="form-control" name="anydeskId" id="exampleFormControlInput1" placeholder="" value="{{ $data->anydeskId }}"disabled>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">OS</label>
                                <select class="form-control" name="os" aria-label="Default Select example"disabled>
                                  <option>{{ $data->os }}</option>
                                  <option value="1">WIN 11</option>
                                  <option value="2">WIN 10</option>
                                  <option value="2">Windows Server 2016</option>
                                  <option value="2">WIN 7</option>
                                </select>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Graphic</label>
                                <input type="text" class="form-control" name="graphic" id="exampleFormControlInput1" placeholder="" value="{{ $data->graphic }}" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Account Office</label>
                                <input type="text" class="form-control" name="akunOffice" id="exampleFormControlInput1" placeholder="" value="{{ $data->akunOffice }}"disabled>
                            </div>
                            <div class="col-6 mb-2">
                                <label  for="ExampleInputEmail" class="form-label">Status</label>
                                <select class="form-control" name="os" aria-label="Default Select example" disabled>
                                  <option>{{ $data->status }}</option>
                                  <option value="1" {{($data->status == '1') ? 'Selected' : ''}}>Baik</option>
                                  <option value="2" {{($data->status == '2') ? 'Selected' : ''}}>Rusak</option>
                                </select>
                            </div>
                        </div>



                        <a href="/datainven"  type="submit" class="btn btn-primary btn-lg mb-2 mt-3"</a>Back</a>
                        <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
