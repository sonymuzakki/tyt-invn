<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Tinves</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">TS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header"></li>
              <li class="nav-item dropdown active">
                <a href="/dahsboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Administrator</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Form</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="forminventaris">Form Input Inventaris</a></li>
                  <li><a class="nav-link" href="formusers">Form Input User</a></li>
                  {{--  <li><a class="nav-link" href="formprosesreq">Form Proses Request</a></li>  --}}
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Database</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="datainven">Data Inventaris</a></li>
                  <li><a class="nav-link" href="datausers">Data User</a></li>
                  {{--  <li><a class="nav-link" href="">Data login</a></li>  --}}
                  <li><a class="nav-link" href="datareq">Data Request Users</a></li>
                </ul>
              </li>
              <li class="menu-header">Users</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="requsers">Laporan Request Support</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Module</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">Komputer</a></li>
                  <li><a class="nav-link" href="">Printer</a></li>
                </ul>
              </li>
              {{--  <li class="menu-header">Stock</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Stock Barang</span></a>
                <ul class="dropdown-menu">
                  <li><a class  ="nav-link" href="">503</a></li>
                  <li><a class="nav-link" href="">403</a></li>
                </ul>
              </li>  --}}

              <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>About   </span></a></li>
            </ul>

            {{--  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>  --}}
        </aside>
      </div>

      {{--  Footer  --}}
      {{--  <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="">ITSD</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>  --}}
      {{--  End footer  --}}
    </div>
  </div>
