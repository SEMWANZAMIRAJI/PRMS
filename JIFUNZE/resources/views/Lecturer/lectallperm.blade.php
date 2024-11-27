@include('include.header')
@include('notification')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Lecture | Dashboard</title>

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
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p  class="d-block text-light">{{ $lecture->lastname }}</p>
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
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRMS Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectdashboard" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="lectallpermis" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Permisions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectallpermis" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Permisions</p>
                  <span class="right badge badge-danger">{{$permissions->where('lecture_id', $lecture->id)->count() }} </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="lectallrepliedperm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Replyed Permisions</p>
                  <span class="right badge badge-danger">  </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unreplyed Permisions</p>
                  <span class="right badge badge-danger">  </span>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="viewstudentlist" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Students
                <span class="right badge badge-danger"> {{$students->where('courseid', $lecture->module->course->id)->count() }} </span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lectreplypermission" class="nav-link">
              <i class="nav-icon fas fa-pencil"></i>
              <p>
                Reply Permission 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lectprofile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lectlogout" class="nav-link">
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
            <h1 class="m-0">{{ $lecture->lastname }} | All Permisions</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lectdashboard">Home</a></li>
              <li class="breadcrumb-item"> All-Permissions </li>
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
                    <div class="h3">Lecture | All Permisions</div>
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
                        <th>Student</th>
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
                      @if ($permissions->where('lecture_id', $lecture->id)->count() > 0)
                        @foreach ($permissions->where('lecture_id', $lecture->id) as $permission)
                            <tr>
                              <th rowspan="1">{{ ++$id }}</th>
                              <td> {{ $permission->student->firstname ." ". $permission->student->lastname }} </td>
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
                                @if ($permission->status == "unreplied")
                                    <button class="btn btn-success btn-sm" data-bs-target="#replyPermission{{ $permission->id }}" data-bs-toggle="modal"> <i class="bi bi-send"></i> </button>
                                @elseif($permission->status == "replied")
                                    <button class="btn btn-success btn-sm disabled"> <i class="bi bi-send"></i> </button>
                                @endif
                                <button class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> </button>
                              </td>
                            </tr>
                        @endforeach
                      @else
                          <td colspan="7" class="text-danger py-3"> <i class="bi bi-trash"></i> Empty Permissions </td>
                      @endif
                    </tbody>
                  </table>
                  <div class="text-count pt-3 pb-5">
                      <div class="float-right fw-bold" style="color: #a5a4a4;">
                        All Permissions: {{ $lecture->permission->count() }}
                      </div>
                  </div>
                </div>
            </div>
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
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


@foreach ($permissions->where('lecture_id', $lecture->id) as $permission)
<div class="modal fade" id="replyPermission{{$permission->id}}" tabindex="-1"
  aria-labelledby="replyPermission{{$permission->id}}Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header" style="display:flex; align-items:center;">
              <div class="left" style="display: flex; flex-direction: column;">
                  <h1 class="modal-title fs-5" id="replyPermission{{$permission->id}}Label">
                      Lecture | Reply Permission</h1>
                  <div>
                      <div class="badge badge-info">{{ $permission->created_at  }}</div>
                  </div>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="lectureReplyPermission" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="fullname" class="form-label">Sender (you)</label>
                          <input type="text" class="form-control"  value="{{$lecture->firstname ." ". $lecture->lastname}}" id="fullname" readonly>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="text-center" style="height: 100%; display: flex; align-items:center; justify-content:center;">
                        <i class="fas fa-arrow-right text-success"></i>
                      </div>
                  </div>
    
                  <div class="col-md-5">  
                    <div class="mb-3">
                      <label for="lecture_id" class="form-label">Receiver (Student)</label>
                      <input type="text" class="form-control"  value="{{$permission->student->firstname ." ". $permission->student->lastname}}" id="fullname" readonly>
                    </div>
                  </div>
                </div>   
    
                <div class="text p-3" style="width: auto; background-color: #e9e9e9;">
                    <div class="title pb-2"> TITLE:  {{ $permission->title }} </div>
                    <div class="decription">
                        {{ $permission->description }}
                    </div>
                </div>

                {{-- <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="{{ @old('title') }}" placeholder="title"  id="title" >
                  <div class="text-danger">@error('title'){{ $message }} @enderror</div>
                </div>
    --}}

                <div class="mb-3">
                  <label for="reply" class="form-label">Reply</label>
                  <textarea class="form-control" name="reply" value="{{ @old('reply') }}" placeholder="Explain here" id="reply" style="height: 70px; max-height:110px;"></textarea>
                  <div class="text-danger">@error('reply'){{ $message }} @enderror</div>
                </div> 
    
                <div class="mb-3">
                  <label for="attach" class="form-label">Attach (optional)</label>
                  <input type="file" class="form-control" name="attach"   id="attach" >
                  <div class="text-danger">@error('attach'){{ $message }} @enderror</div>
                </div>
              
                <input type="hidden" name="permission_id" value="{{ $permission->id }}" hidden>
    
                <div class="text-center d-block pb-3">
                  <button type="submit" class="btn btn-success text-center w-50"> Submit Reply </button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endforeach

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