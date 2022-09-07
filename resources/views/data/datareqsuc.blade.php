<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Request Support</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item active">Data Users</div>
        </div>
      </div>
      <section class="Form">
        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
            <div class="table-responsive">
            <table id="myTable" class="table table-hover table-bordered">
                <a href="/requsers"  class="btn btn-primary mb-2 mt-2 "><i class="fa-solid fa-plus"></i> Tambah Data</a>

            <thead>
            @if ( $message = Session::get('success' ))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <th scope="col" class="position col-sm-1 ">No</th>
                <th scope="col">Pengguna</th>
                <th scope="col">Laporan Users</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>

            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $key => $row)
                <tr>
                <th scope="row">{{ $data->firstItem() + $key }} </th>
                <td>{{ $row->users->nama}}</td>
                <td>{{ $row->laporan }}</td>
                <td>{{ $row->created_at->format('l\,d-m-Y h:i')}}</td>
                <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                </td>
                <td>
                    <input type= "checkbox" class="toggle-class" data-id="{{ $row->idr }}" data-toggle="toggle" data-style="slow"
                    data-on="Enabled" data-off="Disabled" {{ $row->status == true ? 'checked' : '' }}
                </td>
                {{--  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                         <a href="/prosesreq/ {{ $row->idr }}"class="btn btn-success"><i class="fa-regular fa-circle-check"></i></a>
                    </div>
                </td>  --}}
            </tr>
            @endforeach
            </tbody>
            </table>
                </div>
            </div>
        </div>
        </div>
    </section>

    @push('scripts')

    <script>
        $(function() {
          $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
          });
        })
      </script>

    @endpush

@endsection
