<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>@yield('title')</title>
  <meta content="Admin Dashboard" name="description" />
  <meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
  <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="fixed-left">

  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner"></div>
    </div>
  </div>

  <!-- Begin page -->
  <div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
      <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
      </button>

      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <!--<a href="index.html" class="logo">Admiry</a>-->
        <a href="{{route('dashboard')}}" class="logo"><img src="{{asset('assets/images/logo.png')}}" height="42" alt="logo"></a>
        </div>
      </div>

      <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
          <div class="text-center">
            <img src="{{asset('images/b.jpg')}}" alt="" class="rounded-circle">
          </div>
          <div class="user-info">
          <h4 class="font-16">{{Auth::user()->name}}</h4>
            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i>
              @if (Auth::user()->type=='1')
              ADMIN PANEL
              @else
              User PANEL
              @endif

             </span>
          </div>
        </div>
        <div id="sidebar-menu">
          <ul>
            <li>
            <a href="{{route('dashboard')}}" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span> Dashboard <span class="badge badge-primary pull-right">8</span></span>
              </a>
            </li> 
            @if (Auth::user()->type=='1')
            <li class="has_sub">
                <a href="" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Customer</span> </a>
                <ul class="list-unstyled">
                <li><a href="">Add Customer</a></li>
                <li><a href="">Tabel of Customer</a></li>
                </ul>
            </li>  
            @else
            <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>              <li>
              <a href="" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Management <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>  
            @endif
          </ul>
        </div>
        <div class="clearfix"></div>
      </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
      <!-- Start content -->
      <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

          <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">


              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                  role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="{{asset('images/b.jpg')}}" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  <a class="dropdown-item" href="{{route('user.logout')}}"><i
                      class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
              </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
              <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                  <i class="ion-navicon"></i>
                </button>
              </li>
              <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title">Dashboard</h3>
              </li>
            </ul>

            <div class="clearfix"></div>

          </nav>

        </div>
        <!-- Top Bar End -->

      
       
                        @yield('content')
    <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
      © 2017 - 2018 Admiry - By Themesdesign.
    </footer>

  </div>
  </div>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/tether.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
  <script src="{{asset('assets/js/detect.js')}}"></script>
  <script src="{{asset('assets/js/fastclick.js')}}"></script>
  <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
  <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

  <!--Morris Chart-->
  <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
  <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
  <script src="{{asset('assets/pages/dashborad.js')}}"></script>
  <!--Data tabel-->
  <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Buttons examples -->
  <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
  <!-- Responsive examples -->
  <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

  <!-- Datatable init js -->
  <script src="{{asset('assets/pages/datatables.init.js')}}"></script>
  <!-- App js -->
  <script src="{{asset('assets/js/app.js')}}"></script>
  <script src="{{asset('toastr/toastr.min.js')}}"></script>
  @toastr_render
  @yield('scripts')
</body>


</html>