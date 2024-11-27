@include('include.header')
@include('notification')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Student | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      
      <img src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PRMS APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p  class="d-block text-light">{{$student->lastname}}</p>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRMS Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="studentdashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Permisions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="ViewallPermission" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Permissions</p>
                      <span class="badge badge-success right">{{$permissions->where('student_id',$student->id)->count()}}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="studentRepliedPerm" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Replied Permissions</p>
                      <span class="badge badge-success right">{{$student->permission->where('status','replied')->count()}}</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="studentUnrepliedPerm" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        {{ Str::limit("Unreplied Permissions", 18, '...') }}                      
                        </p>
                      <span class="badge badge-success right">{{$student->permission->where('status','unreplied')->count()}}</span>
                    </a>
                  </li>
            </ul>
          </li>

          

          <li class="nav-item">
            <a href="studentAddPerm" class="nav-link active">
              <i class="nav-icon fas fa-plus"></i>
              <p>
               Add Permission
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="studentlogout" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$student->lastname}} | Add Permission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studentdashboard">Home</a></li>
              <li class="breadcrumb-item">Add Permission</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-md-2"></div>
         
          <div class="col-md-8 pb-3">
           
            <div class="card p-3">
              <div class="h2 text-center pb-3">Student Add Pemission</div>
              <form action="studentaddpermission" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="fullname" class="form-label">Sender (you)</label>
                          <input type="text" class="form-control"  value="{{$student->firstname ." ". $student->lastname}}" id="fullname" readonly>
                          <input type="text" class="form-control" name="student_id" value="{{$student->id}}" hidden >
                          <div class="text-danger">@error('student_id'){{ $message }}@enderror</div>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="text-center" style="height: 100%; display: flex; align-items:center; justify-content:center;">
                        <i class="fas fa-arrow-right text-success"></i>
                      </div>
                  </div>
    
                  <div class="col-md-5">  
                    <div class="mb-3">
                      <label for="lecture_id" class="form-label">Receiver (Lecture)</label>
                      <select name="lecture_id" class="form-control" id="lecture_id">
                          <option value="" selected>--choose lecture--</option>
                          @foreach($lectures as $lecture)
                          <option value="{{$lecture->id}}">{{$lecture->firstname}}</option>
                          @endforeach
                      </select>
                      <div class="text-danger">@error('lecture_id'){{ $message }}@enderror</div>
                    </div>
                  </div>
                </div>   
    
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ @old('title') }}" placeholder="title"  id="title" >
                  <div class="text-danger">@error('title'){{ $message }} @enderror</div>
                </div>
    
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" name="description" value="{{ @old('description') }}" placeholder="Explain here" id="regno" style="height: 70px; max-height:110px;"></textarea>
                  <div class="text-danger">@error('description'){{ $message }} @enderror</div>
                </div>
    
                <div class="mb-3">
                  <label for="attach" class="form-label">Attach (optional)</label>
                  <input type="file" class="form-control" name="attach"   id="attach" >
                  <div class="text-danger">@error('attach'){{ $message }} @enderror</div>
                </div>
              
                {{-- <input type="hidden" name="password" value="12345678" hidden> --}}
    
                <div class="text-center d-block pb-3">
                  <button type="submit" class="btn btn-success text-center w-50"> Add Pemissiions </button>
                </div>
              </form>
    
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">PRMS.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


    @include('include.footer')

    <!-- jQuery -->
    <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE-3.2.0/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="AdminLTE-3.2.0/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>

</body>
</html>