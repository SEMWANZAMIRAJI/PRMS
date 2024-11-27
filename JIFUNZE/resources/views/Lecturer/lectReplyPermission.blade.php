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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PRMS Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectdashboard" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="lectallpermis" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Permisions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectallpermis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Permisions</p>
                  <span class="right badge badge-danger"> </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
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
            <h1 class="m-0">{{ $lecture->lastname }} | Reply Permisions</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lectdashboard">Home</a></li>
              <li class="breadcrumb-item"> Reply-Permissions </li>
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
            <div class="col-md-12 card p-3">
                <div class="top-head">
                    <div class="h3">Unreplied Permission's</div>
                </div>
                <div class="row">
                    <div class="col-md-3 px-3" style="height: 70vh; max-height: 100vh; padding-right: 100px;">
                        @if ($permissions->where('status', 'unreplied')->count() > 0)
                            @foreach ($permissions->where('status', 'unreplied') as $permission)
                                <div id="{{ $permission->id }}" class="lectpermission p-2 mb-1 text-dark border-bottom" style="width: 350px; height: 58px; display: flex; flex-direction: row; align-items: center; border-radius: 10px;">
                                    {{-- <input type="hidden" value="{{ $permission->id }}"  id="lectid" hidden> --}}
                                    <div class="left" style="width: 118px; height: 70px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ $permission->student->avatar ? asset('storage/' . $permission->student->avatar) : 'AdminLTE-3.2.0/dist/img/user2-160x160.jpg' }}" class="d-block img-responsive" style="width: 50px; height: 50px; object-fit:cover; border-radius: 50%;">
                                    </div>
                                    <div class="middle float-left" style="width: 300px;">
                                        <div class="upperpart fw-semibold text-dark">{{ $permission->student->firstname . " ". $permission->student->lastname }}</div>
                                        <div class="lowerpart text-muted " style="font-size: 10px;">{{ Str::limit($permission->description, 12, '...') }}</div>
                                    </div>
                                    <div class="right text-dark" style="width: 90px; font-size: 10px;">
                                        {{ $permission->created_at }}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center w-100">
                                <div class="text-danger text-center py-4"> <i class="bi bi-trash"></i> Empty Permissions </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-1">
                        <span class="border" style="height: 100%;width: 1px;"></span>
                    </div>
                    <div class="col-md-8 px-3"  style="height: auto;">
                        <div class="container-display" id="htmlData">
                            {{-- data display 
                              <div class="you mb-2 px-2" style="width: 100%;">\
                                    <div class="float-right" style="display: flex; align-items:  flex-end;">\
                                        <div class="card p-3" style="width: auto; font-size: 14px;">\
                                            voluptates aliquid eaque ipsam quisquam, iusto excepturi eveniet ut assumenda.\
                                            <span class="text-muted pt-3" style="font-size: 7px;">Delivered</span>\
                                        </div>\
                                    </div>\
                                </div>\
                              --}}
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


    @include('include.footer')

    <!-- jQuery -->
    <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script>
      $(document).ready(function() {
          $('.lectpermission').click(function(e) {
              e.preventDefault();
              var id = $(this).attr('id');
              // alert(id);
              $('#htmlData').css('display', 'block');
              // $('#htmlData').html('d-none');


              $.ajax({
                url: "{{ route('lecture.reply.ajax') }}",
                type: 'GET',
                data: {'id':id},
                success: function(response)
                {
                    var outputs = response.outputs;
                    var htmlData = '';

                    if(outputs.length > 0)
                    {
                        for (var i = 0; i < outputs.length; i++) {
                          htmlData += '
                          <div class="header-part" style="display: flex; align-items: center; justify-content: space-between;">\
                                <div class="leftpart" style="display: flex; align-items: center; justify-content: space-between;">\
                                    <div class="left" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">\
                                        <img src="'+$outputs[i]['avatar']+' ? "storage/"'+$outputs[i]['avatar']+' : "AdminLTE-3.2.0/dist/img/user2-160x160.jpg"" class="d-block img-responsive" style="width: 50px; height: 50px; object-fit:cover; border-radius: 50%;">\
                                    </div>\
                                    <span class="name">'+$outputs[i]['student_id']+'</span>\
                                </div>\
                                <div class="rightpart">\
                                    <span class="badge badge-success"> '+$outputs[i]['created_at']+' </span>\
                                </div>\
                            </div>\
                            <div class="main-content py-3" style="width: 100%; height: 50vh; background: #ccc; overflow-y: scroll;">\
                                <div class="row from mb-2" style="width: 70%;">\
                                    <div class="float-left">\
                                        <div class="card p-3" style="width: auto; font-size: 14px;">\
                                          '+$outputs[i]['description']+'
                                          <span class="text-muted pt-3" style="font-size: 7px;">'+$outputs[i]['status']+'</span>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\

                            <div class="footer-part pt-2">\
                                <form action="replypost" method="POST" enctype="multipart/form-data" class="px-2" style="display: flex; align-items: center; gap: 10px; justify-content: space-between;">\
                                    csrf()\
                                    <input type="file" name="attach" class="form-control w-50">\
                                    <textarea name="reply" class="form-control" placeholder="Reply here..." style="width: 50%; height: 45px; border-radius: 10px;"></textarea>\
                                    <button type="submit" class="btn btn-primary"> <i class="bi bi-send"></i> </button>\
                                </form>\
                            </div>\
                          ';
                        }
                    }
                    else
                    {
                       htmlData += '
                        <div class="row w-100">\
                          <div class="py-4"> <i class="bi bi-trash"></i> Empty Data</div> </div>';
                    }

                    $('#htmlData').html(htmlData);
                }
              });
          });
      });
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