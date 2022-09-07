@extends('welcome')

@section('container')


<!-- Main Content -->

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Users</h4>
            </div>
            <div class="card-body">
              {{ $totalusers }}
              <small> Orang</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Inventaris</h4>
            </div>
            <div class="card-body">
              {{ $totalinven }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Laporan Request </h4>
            </div>
            <div class="card-body">
              {{ $totallaporan }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Unit</h4>
          </div>
          <div class="card-body">
            <canvas id="myChart" height="182"></canvas>
            <div class="statistic-details mt-sm-4">
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary">
                <div class="detail-value">{{ $totalinven }}</div>
                <div class="detail-name">Total Inventaris</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-danger">
                <div class="detail-value">{{ $totalpc }}</div>
                <div class="detail-name">Total PC</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-danger">
                <div class="detail-value">{{ $totallaptop }}</div>
                <div class="detail-name">Total Laptop</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary">
                <div class="detail-value">80</div>
                <div class="detail-name">Total License AMP</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary">
                <div class="detail-value">76 </div>
                <div class="detail-name">Total License Umbrella</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{--  <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card">
              <div class="card-header">
                <h4>Data Users Terakhir</h4>
                <div class="card-header-action">
                  <a href="#" class="btn btn-primary">View All</a>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th>Pengguna</th>
                        <th>Author</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{}</td>
                        <td>
                          <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                          <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                          <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Laravel 5 Tutorial - Installation
                          <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                          <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                          <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Laravel 5 Tutorial - MVC
                          <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                          </div>
                        </td>
                        <td>
                          <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                          <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                          <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      </div>  --}}
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Request Users</h4>
                <div class="card-header-action">
                  <a href="datareq" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                    <tr>
                      <th>No    </th>
                      <th>Pengguna</th>
                      <th>Laporan Users</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $key => $row)
                        <tr>
                        <th scope="row">{{ $data->firstItem() + $key }} </th>
                        <td>{{ $row->users->nama }}</td>
                        <td>{{ $row->laporan }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example" class="float-left">
                                <a href="/editusers/ {{ $row->idu }}"  class="btn btn-primary"><i class="fa-solid fa-clock-rotate-left"></i></a>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                 <a href="/proses/ {{ $row->id }}"  class="btn btn-primary"><i class="fa-regular fa-circle-check"></i></a>
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
        </div>
    </div>
  </section>
</div>

@endsection
