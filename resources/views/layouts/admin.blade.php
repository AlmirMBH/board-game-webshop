<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Gewerbe-Spiel - Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/16db9408b8.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Fancybox css -->
    <link rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <!-- Dropzone css -->
    <link rel="stylesheet" href="{{asset('css/admin/dropzone.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('css/admin/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('css/admin/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('css/admin/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/admin/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('css/admin/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('css/admin/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('css/admin/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

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
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fas fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <span class="brand-text font-weight-light pl-2">Visit website</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <p class="d-block"
                       style="color: rgba(255,255,255,.8); margin-bottom: 0;">{{ auth()->user()->name }}</p>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                           class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-outlets') }}"
                           class="nav-link {{ Request::segment(2) === 'outlets' ? 'active' : null }}">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Outlets
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-cities') }}"
                           class="nav-link {{ Request::segment(2) === 'cities' ? 'active' : null }}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Cities
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-providers') }}"
                           class="nav-link {{ Request::segment(2) === 'providers' ? 'active' : null }}">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Providers
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-partcompanies') }}"
                           class="nav-link {{ Request::segment(2) === 'participating-companies' ? 'active' : null }}">
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                Participatingcompanies
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-products') }}"
                           class="nav-link {{ Request::segment(2) === 'products' ? 'active' : null }}">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('index-orders') }}"
                           class="nav-link {{ Request::segment(2) === 'orders' ? 'active' : null }}">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Orders
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('slider-all') }}"
                           class="nav-link {{ Request::segment(2) === 'slider' ? 'active' : null }}">
                            <i class="nav-icon fab fa-slideshare"></i>
                            <p>
                                Slider Images
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')


    <footer class="main-footer">
        <strong>Board Game</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('js/admin/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/admin/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/admin/bootstrap.bundle.min.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('js/admin/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/admin/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/admin/adminlte.js')}}"></script>

@yield('script')

</body>
</html>
