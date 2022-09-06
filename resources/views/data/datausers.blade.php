


<script src="https://code.jquery.com/jquery-3.6.0.slim.js"integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="crossorigin="anonymous"></script>

@extends('welcome')


@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Form Data Users</h1>
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
                <a href="/formusers"  class="btn btn-primary mb-2 mt-2 "><i class="fa-solid fa-plus"></i> Tambah Data</a>

            <thead>
            @if ( $message = Session::get('success' ))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <th scope="col" class="position col-sm-1 ">No</th>
                <th scope="col">Pengguna</th>
                <th scope="col">Action</th>

            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $key => $row)
                <tr>
                <th scope="row">{{ $data->firstItem() + $key }} </th>
                <td>{{ $row->nama }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/editusers/{{ $row->idu }}"  class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                         <a href="/deleteusers/ {{ $row->idu }}"  class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                         {{--  <a href="#"  class="btn btn-primary delete" data-id="{{ $row->id }}">Delete</a>
                         <a href="#" class="btn btn-succes btn-lg delete" data-id="{{ $data }}" </a> Submit</a>  --}}
                    </div>
                </td
            </tr>
            @endforeach
            </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        @include('sweetalert::alert')
        <div>

        </div>
    </section>
@endsection
{{--  <script>
    $('.delete').click( function(){
        swal("Good job!", "You clicked the button!", "success");

    });
</script>  --}}
