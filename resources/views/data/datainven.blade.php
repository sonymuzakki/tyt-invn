@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Data Inventaris</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Data Inventaris</div>
        </div>
      </div>



    <section class="Form">
        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="table-responsive">
                <table id="myTable" class="table table-hover table-bordered">
                <a href="/forminventaris"  class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i> Tambah Data</a>

            <thead>
            {{--  @if ( $message = Session::get('success' ))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif  --}}
            <th scope="col" class="position col-sm-1 ">No</th>
                <th scope="col">Pengguna</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Divisi</th>
                <th scope="col">Hostname</th>
                <th scope="col">Status</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>

            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $key => $row)
                <tr>
                <th scope="row">{{ $data->firstItem() + $key }} </th>
                <td>{{ $row->users->nama }}</td>
                <td>{{$row->divisi->divisi}}</td>
                <td>{{ $row->lokasi->lokasi }}</td>
                <td>{{ $row->hostname }}</td>
                <td>{{ $row->status }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        {{--  <a href="/details/{{ $row->id_users}}" type="button" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>  --}}
                        <a href="/detailsinven/{{ $row->id }}" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>
                    </div>
                </td>

                <td>
                    <a href="/editinven/{{ $row->id }}" class="btn btn-info">Edit</a>
                </td>

            </tr>
            @endforeach
            </tbody>
                    </table>

                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    </section>
@endsection
