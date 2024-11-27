@include('include.header')
@include('notification')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> Dashboard</title>

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
      <span class="brand-text font-weight-light">PRMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p  class="d-block text-light"></p>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRMS Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="ViewallPermission" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Permisions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ViewallPermission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Permisions</p>
                  <span class="right badge badge-danger"> {{$student->permission->count()}} </span>
                </a>
              </li>

              <li class="nav-item active">
                <a href="viewrepliedperm" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Replyed Permisions</p>
                  <span class="right badge badge-danger">{{$student->permission->where('status','replied')->count()}}  </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="unrepliedpermis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unreplyed Permisions</p>
                  <span class="right badge badge-danger"> {{$student->permission->where('status','unreplied')->count()}} </span>
                </a>
              </li>
             
            </ul>
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
            <a href="" class="nav-link">
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
            <h1 class="m-0"> View Permissions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studentdashboard">Home</a></li>
              <li class="breadcrumb-item">View Permissions</li>
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
            <div class="col-md-12 card p-3">
                <div class="head py-2" style="display: flex; align-items: center; justify-content: space-between;">
                    <div class="h3">Student | View Permisions</div>
                    <div class="search">
                      <input type="search" name="search-box" class="form-control" id="search-input" placeholder="Search here..">
                    </div>
                    <div class="head-buttons">
                      <button class="btn btn-primary btn-sm"> <b>+</b> </button>
                      <button class="btn btn-danger btn-sm">Delete Multiple</button>
                    </div>
                </div>

                <div class="table-responsive">
                  <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <th>#</th>
                        <th>Lecture</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Attach</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                      @php
                        $id = 0;
                      @endphp
                      @if ($student->permission->where('status','replied')->count() > 0)
                        @foreach ($student->permission as $permission)
                            <tr>
                              <th rowspan="1">{{ ++$id }}</th>
                              <td> {{ $permission->lecture->firstname ." ". $permission->lecture->lastname }} </td>
                              <td> {{ Str::limit($permission->title, 16, '...') }} </td>
                              <td> {{ Str::limit($permission->description, 16, '...') }} </td>
                              <td> 
                                @if (!empty($permission->attach))
                                    <i class="bi bi-file-earmark-fill text-primary"></i>
                                    <a href="{{ asset('storage/' . $permission->attach) }}" class="bi bi-eye text-decoration-underline"></a>
                                @else
                                    <span class="text-muted" style="font-style: italic;">Null</span>
                                @endif
                              </td>
                              <td>
                                @if ($permission->status == "unreplied")
                                    <span class="badge badge-warning">Unreplied</span>
                                @elseif($permission->status == "replied")
                                    <span class="badge badge-success">Replied</span>
                                @endif
                              </td>
                              <td>
                                <button class="btn btn-primary btn-sm"> <i class="bi bi-eye"></i> </button>
                                <button class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> </button>
                              </td>
                            </tr>
                        @endforeach
                      @else
                          <td colspan="7" class="text-danger py-3 text-center" > <i class="bi bi-trash"></i> Empty Permissions </td>
                      @endif
                    </tbody>
                  </table>
                  <div class="text-count pt-3 pb-5">
                      <div class="float-right fw-bold" style="color: #a5a4a4;">
                        All Permissions: {{ $student->permission->where('status','replied')->count() }}
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper modal-dialog-scrollable-->





  {{-- @foreach ($students as $student)
  <div class="modal fade" id="deleteStudent{{$student->id}}" tabindex="-1"
    aria-labelledby="deleteStudent{{$student->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
                <div class="left" style="display: flex; flex-direction: column;">
                    <h1 class="modal-title fs-5" id="deleteStudent{{$student->id}}Label">
                        Lecture | Delete Student</h1>
                    <div>
                        <div class="badge badge-info">{{ $student->created_at  }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fw-semibold">
                    Are you sure you want to Delete student with name <span class="text-info"> {{ '#'.$student->firstname .' '. $student->lastname }} </span>
                </div>
            </div>
            <div class="modal-footer right">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">close</button>
                <a href="{{ route('lect.delete.Student', $student->id) }}" class="btn btn-danger btn-sm"> Delete </a>
            </div>
        </div>
    </div>
</div>
@endforeach --}}








 




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