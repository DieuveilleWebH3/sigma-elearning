<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title> @yield('title') | Sigma Elearning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url( 'my_assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ url( 'my_assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url( 'my_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url( 'my_assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


        @yield('head_css')

        @yield('head_javascript')

    </head>

    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="20">
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="uil-search"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil-search"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block language-switch">
                        <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url( 'my_assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ url( 'my_assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                        </div>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ url( 'my_assets/images/users/user-profile.png')}}"
                                 alt="username Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">username</span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                            <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                            <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="#"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="uil-cog"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu" >

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="42">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="40">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="42">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url( 'my_assets/images/logo-sm.png')}}" alt="" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">SERVICES</li>

                        <li>
                            <a href="#">
                                <i class="fas fa-fw fa-tachometer-alt"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('categories')}}">
                                <i class="fas fa-fw  fa-bookmark"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Categories Explorer</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('courses')}}">
                                <i class="fas fa-fw fa-book-open"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Courses Explorer</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-fw fa-book-reader"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Chapters Explorer</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-fw fa-level-up-alt"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Level Explorer</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-fw fa-chart-area"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Statistics</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-cog"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Configurations</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-cog"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Users Management</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-question"></i><span class="badge rounded-pill bg-primary float-start"></span>
                                <span>Help</span>
                            </a>
                        </li>

                        <li class="menu-title">ACTION </li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class="uil-calender"></i>
                                <span>Button1</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class=" waves-effect">
                                <i class="uil-comments-alt"></i>
                                <span>Button2</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Sigma Elearning  ..  .
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">D. Ell Bouss</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ url( 'my_assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{ url( 'my_assets/libs/jquery.counterup/jquery.counterup.min.js.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{ url( 'my_assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{ url( 'my_assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{ url( 'my_assets/js/app.js')}}"></script>


    <!-- Adding Swal -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @yield('javascript')

    </body>

</html>
