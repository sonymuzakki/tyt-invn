@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Input Users</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Form Users</div>
        </div>
      </div>
      <section class="Form">
        <div class="card">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <form action="/updateusers/{{ $data->idu }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pengguna</label>
                                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="" value="{{ $data->nama }}">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-2 mt-3"</button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
