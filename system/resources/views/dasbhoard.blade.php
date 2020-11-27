<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

<style type="text/css">
  .card-body-icon{
    position: absolute;
    z-index: 0;
    top: 25px;
    right: 4px;
    opacity: 0.4;
    font-size: 90px;
  }
</style>
  <title>AdminTOKO JUAL BELI SUPERMOTO BEKAS</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- SEARCH FORM -->
    <form class="form-inline ml-auto">
      <div class="input-group input-group-lg">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="{{url("register")}}"" class="mr-2">Register</a>
      <a href="{{url("login")}}"" class="mr-2">Masuk</a>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="public/img/user.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  mimi peri
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Pesanan kita sudah sampai</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 tahun yang lalu</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">1 pemberitahuan</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 0 pesan
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>0 Permintaan
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 0 laporan
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Pemberitahuan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" >ADMIN</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{url("dasbhoard")}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("produk")}}" class="nav-link">
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("kategory")}}"" class="nav-link">
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("promo")}}" class="nav-link">
                  <p>Promo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("kontak")}}" class="nav-link">
                  <p>Kontak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("about")}}" class="nav-link">
                  <p>Tentang Kita</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <!--card-->
        <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah pengguna</h5><br>
              <div class="display-4" style="font-weight: bold">10.000.000</div>
              <a href=""><p class="card-text">Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Admin</h5><br>
              <div class="display-4" style="font-weight: bold">5</div>
              <a href=""><p class="card-text">Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-cart-plus mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Produk</h5><br>
              <div class="display-4" style="font-weight: bold">500</div>
              <a href=""><p class="card-text">Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>


      </div><!-- /.container-fluid -->
    </div>
  </div>









  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
 <div class="float-right d-none d-sm-inline">
      Version 1.1.1.1
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020<a href="https://adminlte.io">AdminTOKO JUAL BELI SUPERMOTO BEKAS</a>.</strong> 
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
