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
          <img src="{{ $lecture->avatar ? asset('storage/' . $lecture->avatar) : asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
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
                <a href="lectdashboard" class="nav-link">
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
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Permisions</p>
                  <span class="right badge badge-danger"> 8 </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Replyed Permisions</p>
                  <span class="right badge badge-danger"> 8 </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unreplyed Permisions</p>
                  <span class="right badge badge-danger"> 8 </span>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="viewstudentlist" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Students
                <span class="right badge badge-danger"> {{$students->where('courseid', $lecture->module->course->id)->count() }} </span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lectprofile" class="nav-link active">
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
            <h1 class="m-0">{{ $lecture->lastname }} | Profile </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lectdashboard">Home</a></li>
              <li class="breadcrumb-item">  <button type="button" data-bs-target="#ViewLectprofile{{$lecture->id}}" data-bs-toggle="modal" class="btn btn-primary btn-sm"  >Profile</button></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row pb-5">
            <div class="col-md-9 card p-3 shadow">
                <div class="head">
                    <i class="bi bi-circle text-success"></i> 
                    <span>
                        Lorem ipsum dolor sit, officia! Incidunt doloremque quibusdam deleniti saepe accusantium error.
                    </span>
                </div>
                <div class="content py-3">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="image" style="width: 100%; height: 30vh; display:flex; align-items:center; justify-content:center;">
                            <img src="{{ $lecture->avatar  ? asset('storage/'.$lecture->avatar) : asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}" class="d-block img-circle elevation-2" alt="User Image" style="width: 70%; height: 28vh; object-fit:cover;">
                            {{-- AdminLTE-3.2.0/dist/img/user2-160x160.jpg --}}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="lectupdateavatar" method="POST" enctype="multipart/form-data">
                          @csrf
                            <label for="avatar" class="form-label"></label>
                            <input type="file" class="form-control" name="avatar">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-dark">Update Avatar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5">
          <div class="col-md-9 card p-3 shadow">
            <div class="head py-">
              <div class="h2 pb-1">Lecture Details</div>
              <i class="bi bi-circle text-success"></i> 
              <span>
                Lorem ipsum dolor sit, officia! Incidunt doloremque quibusdam deleniti saepe accusantium error.
              </span>
            </div>
            <div class="content py-3">
              <form action="lectureUpdate" method="POST">
                @csrf
                          
                <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="firstname" class="form-label">Firstname</label>
                          <input type="firstname" class="form-control" name="firstname" value="{{$lecture->firstname}}" placeholder="firstname" id="firstname">
                          <div class="text-danger">@error('firstname'){{ $message }}@enderror</div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="lastname" class="form-label">Lastname</label>
                          <input type="lastname" class="form-control" name="lastname" value="{{$lecture->lastname}}" placeholder="lastname" id="lastname" >
                          <div class="text-danger">@error('lastname'){{ $message }}@enderror</div>
                      </div>
                  </div>
                </div>   
          
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$lecture->email}}" placeholder="email@gmail.com" id="email" >
                    <div class="text-danger">@error('email'){{ $message }} @enderror</div>
                </div>
            
                <div class="mb-3">
                    <label for="moduleid" class="form-label">module</label>
                    <select name="moduleid" class="form-control" id="moduleid">
                        <option value="">--choose module--</option>
                        @foreach($modules as $module)
                            @if ($lecture->module->id == $module->id)
                                <option value="{{ $module->id }}" selected>{{ $module->mname }}</option>
                            @else
                                <option value="{{ $module->id }}">{{ $module->mname }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="text-danger">@error('moduleid'){{ $message }}@enderror</div>
                </div>

                <div class="text-center d-block pb-3">
                  <button type="submit" class="btn btn-success text-center w-50"> Update Lecture </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row pb-5">
          <div class="col-md-9 card p-3">
            <div class="head pb-3">
              <div class="h3 pb-3">Lecture | Update Password</div>
              <span>
                <i class="bi bi-circle text-success"></i>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod praesentium recusanda.
              </span>
            </div>

            <div class="password-content">
              <form action="lectureUpdatePass" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="currentpassword" class="form-label">Current Password</label>
                  <input type="password" class="form-control" name="cpassword" id="currentpassword" placeholder="Current Password">
                  <div class="text-danger"> @error('cpassword') {{ $message }} @enderror </div>
                </div>

                <div class="mb-3">
                  <label for="newpassword" class="form-label">New Password</label>
                  <input type="password" class="form-control" name="npassword" id="newpassword" placeholder="New Password">
                  <div class="text-danger"> @error('npassword') {{ $message }} @enderror </div>
                </div>

                <div class="mb-3">
                  <label for="confirmpassword" class="form-label">Confirm (New-Password)</label>
                  <input type="text" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                  <div class="text-danger" id="confirmerror"></div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-dark w-50 text-center">Update Password</button>
                </div>
              </form> 
            </div>

          </div>
          <div class="col-md-3"></div>
        </div>


        <div class="row pb-5">
          <div class="col-md-9 card p-3">
            <div class="head pb-3">
              <div class="h3 pb-3">Lecture | Delete Account</div>
              <span>
                <i class="bi bi-circle text-success"></i>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis voluptate quasi officiis. Tenetur maiores libero porro voluptatum magni sint ullam autem a, similique est doloribus consectetur quisquam qui architecto impedit iusto hic dignissimos facere quaerat quae placeat totam assumenda ducimus!
              </span>
            </div>

            <div class="delete-content">
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger " data-bs-target="#deleteAccountlect" data-bs-toggle="modal">delete account</button>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
      </div>


      
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper modal-dialog-scrollable-->

  
  <div class="modal fade" id="deleteAccountlect" tabindex="-1"
    aria-labelledby="deleteAccountLectLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
                <div class="left" style="display: flex; flex-direction: column;">
                    <h1 class="modal-title fs-5" id="deleteAccountlectLabel">
                        Lecture | Delete Account</h1>
                    <div>
                </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fw-semibold">
                    Are you sure you want to Delete lecture with name <span class="text-info"> </span>
                </div>
            </div>
            <div class="modal-footer right">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">close</button>
                <a href="deleteLectAccount" class="btn btn-danger btn-sm"> Delete </a>
            </div>
        </div>
    </div>
  </div>




  <div class="modal fade" id="ViewLectprofile{{$lecture->id}}" tabindex="-1"
    aria-labelledby="ViewLectprofile{{$lecture->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
                <div class="left" style="display: flex; flex-direction: column;">
                    <h1 class="modal-title fs-5" id="ViewLectprofile{{$lecture->id}}Label">
                        Lecture | View Student</h1>
                    <div>
                        <div class="badge badge-info">{{ $lecture->created_at  }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--  --}}

                <div class="row">
                  <div class="col-md-4">
                    <div class="image" style="width: 100%; height: 30vh; display:flex; align-items:center; justify-content:center;">
                        <img src="{{ $lecture->avatar  ? asset('storage/'.$lecture->avatar) : asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}" class="d-block img-circle elevation-2" alt="User Image" style="width: 70%; height: 28vh; object-fit:cover;">
                        {{-- AdminLTE-3.2.0/dist/img/user2-160x160.jpg --}}
                    </div>
                </div>
               

                <div class="mb-3">
                    <Label class="form-label">Full Name</Label>
                    <div class="border-bottom">{{strtoupper($lecture->firstname) ." ". strtoupper($lecture->lastname) }}</div>
                </div>

                <div class="mb-3">
                  <Label class="form-label">Email</Label>
                  <div class="border-bottom"> <a href="mailto::{{ $lecture->email }}">{{ $lecture->email }}</a> </div>
                </div>

                <div class="mb-3">
                  <Label class="form-label">lecture Module</Label>
                  <div class="border-bottom"> {{ strtoupper($lecture->module->mname) }}  </div>
                </div>

               

            </div>
            
            <div class="modal-footer right" style="border-top: none !important;">
                <button class="btn btn-secondary float-right" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


  


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