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
                  <span class="right badge badge-danger"> {{ $permissions->where('lecture_id',$lecture->id)->count() }} </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Replyed Permisions</p>
                  <span class="right badge badge-danger"> {{ $lecture->permission->where('status', 'replied')->count()}} </span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unreplyed Permisions</p>
                  <span class="right badge badge-danger"> {{$lecture->permission->where('status','unreplied')->count()}} </span>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="viewstudentlist" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Students
                <span class="right badge badge-danger"> {{$students->where('courseid', $lecture->module->course->id)->count() }} </span>
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
            <h1 class="m-0">{{ $lecture->lastname }} | View Student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lectdashboard">Home</a></li>
              <li class="breadcrumb-item">View Student</li>
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
            <div class="col-md-8">
                <div class="card p-3">
                    <div class="head pt-3 d-flex" style="display: flex; flex-direction:row; align-items:center; justify-content:space-between;">
                        <h3 class="fw-semibold">LIST OF STUDENTS</h3>
                        <div>
                          <input type="search" id="form-search" class="form-control mb-2" name="search" placeholder="Search here...">
                        </div>
                        <button type="button" data-bs-target="#Addstudents" data-bs-toggle="modal" class="btn btn-primary btn-sm"  >Add student</button>
                    </div>
                    
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <th>#</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>RegistNo</th>
                            <th>CurrentYear</th>
                            <th>Actions</th>
                        </thead>
                        <tbody id="htmlData">
                            @php
                                $id = 0;
                            @endphp
                            @if ($students->count() > 0)
                              @foreach ($students as $student)
                                  <tr>
                                      <td rowspan="1">{{++$id}}</td>
                                      <td>{{$student->firstname}}</td>
                                      <td>{{$student->lastname}}</td>
                                      <td>{{$student->regno}}</td>
                                      <td>{{$student->currentyear}}</td>
                                      <td>
                                          <button type="button" class="btn btn-primary btn-sm" data-bs-target="#viewStudent{{$student->id}}" data-bs-toggle="modal"> <i class="bi bi-eye"></i> </button>
                                          <button type="button" class="btn btn-success btn-sm" data-bs-target="#updateStudent{{$student->id}}" data-bs-toggle="modal"> <i class="bi bi-pencil"></i> </button>
                                          <button type="button" class="btn btn-danger btn-sm" data-bs-target="#deleteStudent{{$student->id}}" data-bs-toggle="modal"> <i class="bi bi-trash"></i> </button>
                                      </td>
                                  </tr>
                              @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-danger fw-semibold text-center"> <i class="bi bi-trash"></i> Empty Students </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="countdata pb-4">
                        <div class="d-flex float-right text-muted">
                            All Students: <span id="datacount"> {{$students->count() }} </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper modal-dialog-scrollable-->





  @foreach ($students as $student)
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
@endforeach




<div class="modal fade" id="Addstudents" tabindex="-1"
  aria-labelledby="AddstudentsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header" style="display:flex; align-items:center;">
              <div class="left" style="display: flex; flex-direction: column;">
                  <h1 class="modal-title fs-5" id="AddstudentsLabel">
                      Lecture | Add Student</h1>
                  
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="lectAddStudent" method="POST">
                @csrf
                
                
                <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="firstname" class="form-label">Firstname</label>
                          <input type="firstname" class="form-control" name="firstname"  placeholder="firstname" id="firstname">
                          <div class="text-danger">@error('firstname'){{ $message }}@enderror</div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="lastname" class="form-label">Lastname</label>
                          <input type="lastname" class="form-control" name="lastname"  placeholder="lastname" id="lastname" >
                          <div class="text-danger">@error('lastname'){{ $message }}@enderror</div>
                      </div>
                  </div>
              </div>   

              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email"  placeholder="email@gmail.com" id="email" >
                  <div class="text-danger">@error('email'){{ $message }} @enderror</div>
              </div>


              <div class="row">
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone"  placeholder="+255712590351" id="phone" >
                    <div class="text-danger">@error('phone'){{ $message }} @enderror</div>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="regno" class="form-label">RegNumber</label>
                    <input type="text" class="form-control" name="regno" id="regno" >
                    <div class="text-danger">@error('regno'){{ $message }} @enderror</div>
                </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="cyear" class="form-label">currentyear</label>
                    <input type="month" class="form-control" name="currentyear"   id="currentyear" >
                    <div class="text-danger">@error('currentyear'){{ $message }} @enderror</div>
                </div>
                </div>
              </div>

        

              <div class="mb-3">
                  <label for="courseid" class="form-label">Course</label>
                  <select name="courseid" class="form-control" id="courseid">
                      <option value="" selected>--choose course--</option>
                      @foreach($courses as $course)
                      <option value="{{$course->id}}">{{$course->cname}}</option>
                      @endforeach
                  </select>
                  <div class="text-danger">@error('courseid'){{ $message }}@enderror</div>
              </div>
              <input type="hidden" name="password" value="12345678" hidden>

              <div class="text-center d-block pb-3">
                <button type="submit" class="btn btn-success text-center w-50"> Add Student </button>
              </div>
              </form>
          </div>
      </div>
  </div>
</div>



  @foreach ($students as $student)
  <div class="modal fade" id="updateStudent{{$student->id}}" tabindex="-1"
    aria-labelledby="updateStudent{{$student->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
                <div class="left" style="display: flex; flex-direction: column;">
                    <h1 class="modal-title fs-5" id="updateStudent{{$student->id}}Label">
                        Lecture | Update Student</h1>
                    <div>
                        <div class="badge badge-info">{{ $student->created_at  }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="lectUpdateStudent" method="POST">
                  @csrf
                  <input type="hidden" name="studentid" value="{{ $student->id }}" hidden>
                  
                  <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="firstname" class="form-control" name="firstname" value="{{$student->firstname}}" placeholder="firstname" id="firstname">
                            <div class="text-danger">@error('firstname'){{ $message }}@enderror</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="lastname" class="form-control" name="lastname" value="{{$student->lastname}}" placeholder="lastname" id="lastname" >
                            <div class="text-danger">@error('lastname'){{ $message }}@enderror</div>
                        </div>
                    </div>
                </div>   

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$student->email}}" placeholder="email@gmail.com" id="email" >
                    <div class="text-danger">@error('email'){{ $message }} @enderror</div>
                </div>


                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" value="{{$student->phone}}" placeholder="+255712590351" id="phone" >
                      <div class="text-danger">@error('phone'){{ $message }} @enderror</div>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="regno" class="form-label">RegNumber</label>
                      <input type="text" class="form-control" name="regno" value="{{$student->regno}}" id="regno" >
                      <div class="text-danger">@error('regno'){{ $message }} @enderror</div>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="cyear" class="form-label">currentyear</label>
                      <input type="text" class="form-control" name="currentyear" value="{{$student->currentyear}}"  id="currentyear" >
                      <div class="text-danger">@error('currentyear'){{ $message }} @enderror</div>
                  </div>
                  </div>
                </div>

          

                <div class="mb-3">
                    <label for="courseid" class="form-label">Course</label>
                    <select name="courseid" class="form-control" id="courseid">
                        <option value="">--choose course--</option>
                        @foreach($courses as $course)
                            @if ($student->course->id == $course->id)
                                <option value="{{ $course->id }}" selected>{{ $course->cname }}</option>
                            @else
                                <option value="{{ $course->id }}">{{ $course->cname }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="text-danger">@error('courseid'){{ $message }}@enderror</div>
                </div>


                <div class="text-center d-block pb-3">
                  <button type="submit" class="btn btn-success text-center w-50"> Update Student </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


  @foreach ($students as $student)
  <div class="modal fade" id="viewStudent{{$student->id}}" tabindex="-1"
    aria-labelledby="viewStudent{{$student->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
                <div class="left" style="display: flex; flex-direction: column;">
                    <h1 class="modal-title fs-5" id="viewStudent{{$student->id}}Label">
                        Lecture | View Student</h1>
                    <div>
                        <div class="badge badge-info">{{ $student->created_at  }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--  --}}
                <div class="mb-3">
                    <Label class="form-label">Full Name</Label>
                    <div class="border-bottom">{{strtoupper($student->firstname) ." ". strtoupper($student->lastname) }}</div>
                </div>

                <div class="mb-3">
                  <Label class="form-label">Email</Label>
                  <div class="border-bottom"> <a href="mailto::{{ $student->email }}">{{ $student->email }}</a> </div>
                </div>

                <div class="mb-3">
                  <Label class="form-label">Phone</Label>
                  <div class="border-bottom"> {{ $student->phone }}  </div>
                </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <Label class="form-label">Registration No.</Label>
                    <div class="border-bottom"> {{ $student->regno }}  </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <Label class="form-label">Current Year</Label>
                    <div class="border-bottom"> {{ $student->currentyear }}  </div>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <Label class="form-label">Student Course</Label>
                <div class="border-bottom"> {{ strtoupper($student->course->cname) }}  </div>
              </div>

            </div>
            
            <div class="modal-footer right" style="border-top: none !important;">
                <button class="btn btn-secondary float-right" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach


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

    {{-- JQUERY --}}
    <script>
      $(document).ready(function() {
        $('#form-search').on('input', function () {
            var value = $(this).val();

            $.ajax({
              type: "GET",
              url: "{{ route('searchstudentlist') }}",
              data: {'value':value},
              success: function (response) {
                var outputs = response.outputs;
                var htmlData = '';
                var id = 0;
                // htmlData

                if(outputs.length > 0)
                {
                  for (let i = 0; i < outputs.length; i++) {
                    htmlData += '<tr>\
                                        <td rowspan="1">'+(++id)+'</td>\
                                        <td>'+outputs[i]['firstname']+'</td>\
                                        <td>'+outputs[i]['lastname']+'</td>\
                                        <td>'+outputs[i]['regno']+'</td>\
                                        <td>'+outputs[i]['currentyear']+'</td>\
                                        <td>\
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-target="#viewStudent'+outputs[i]['id']+'" data-bs-toggle="modal"> <i class="bi bi-eye"></i> </button>\
                                            <button type="button" class="btn btn-success btn-sm" data-bs-target="#updateStudent'+outputs[i]['id']+'" data-bs-toggle="modal"> <i class="bi bi-pencil"></i> </button>\
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-target="#deleteStudent'+outputs[i]['id']+'" data-bs-toggle="modal"> <i class="bi bi-trash"></i> </button>\
                                        </td>\
                                    </tr>';
                  }
              }
              else
              {
                 htmlData += '<tr>\
                                <td colspan="6" class="text-danger fw-semibold text-center"> <i class="bi bi-trash"></i> Empty Students </td>\
                            </tr>';
              }
              
              $('#htmlData').html(htmlData);
              $('#datacount').html(outputs.length);
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