{{--  @extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Proses Request Support</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Request Support</div>
        </div>
      </div>

      <section class="Form ">
        <div class="card col-8">
            <div class="">
                <div class="">
                    <div class="card-body">
                        <form action="/prosesreq/ {{ $data->idr }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Pengguna</label>
                                <select class="form-control" name="idu" aria-label="Default Select example">
                                    <option>Select Option ..</option>
                                @foreach ($users as $users )
                                    <option value="1">{{ $users->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="laporan" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlIEmail1"   class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="exampleFormControlEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-success btn-lg "</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection  --}}

@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Proses Request Support</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Proses Request Support</div>
        </div>
      </div>
      <section class="Form ">
        <div class="card col-8">
            <div class="">
                <div class="">
                    <div class="card-body">
                        <form action="/updateproses/{{ $data->idr }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Pengguna</label>
                                <select class="form-control" name="idu" aria-label="Default Select example" disabled>
                                    <option>{{ $data->users->nama }}</option>
                                @foreach ($users as $users )
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="laporan" id="exampleFormControlInput1" placeholder="" value="{{ $data->laporan }}"disabled>
                            </div>
                            {{--  <div class="mb-3">
                                <label for="exampleFormControlIEmail1"   class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="created_at" id="exampleFormControlEmail1" aria-describedby="emailHelp" placeholder="" value="{{ $data->created_at->format('l\,d-m-Y h:i') }}">
                            </div>  --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kendala</label>
                                <input type="text" class="form-control" name="kendala" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Handling</label>
                                <input type="text" class="form-control" name="handling" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">status</label>
                                <input type="text" class="form-control" name="status" id="exampleFormControlInput1" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-success btn-lg "</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
