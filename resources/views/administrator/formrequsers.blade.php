@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Request Support</h1>
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
                        <form action="/tambahreq" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label  for="ExampleInputEmail" class="form-label">Pengguna</label>
                                <select class="form-control" name="idu" aria-label="Default Select example">
                                    <option>Select Option ..</option>
                                @foreach ($users as $users )
                                    <option value="{{ $users->idu }}">{{ $users->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="laporan" id="exampleFormControlInput1" placeholder="" >
                            </div>

                            <button type="submit" class="btn btn-success btn-lg "</button>Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
