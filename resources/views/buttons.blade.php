@extends('layouts.main')

@section('lss')
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                     <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            {{-- <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" /> --}}

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            {{-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> --}}
                            <h3>Mini CRM Virgo</h3>
                        </span>
                         {{-- Logo icon  --}}
                         {{-- <b class="logo-icon">  --}}
                       {{-- <!-- You can put here icon as well // --><i class="wi wi-sunset"></i> // --}}
                          <!--Dark Logo icon -->
                         {{-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />  --}}

                         </b> 
                        {{-- End Logo icon  --}}
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> 
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)" style="color-adjust:white "> 
                                Hallo {{ auth()->user()->name }}
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                       
                    
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                           <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                               
                                <p class="dropdown-item" href="" ><i class="me-1 ms-1"></i> 
                                    {{ auth()->user()->name }}
                                </p>
                                
                                <a class="dropdown-item" href="{{ route('postlogout') }}"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                            
                              
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/company" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Companies</span></a></li>

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/karyawan" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Employee</span></a></li>
                      
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/buttons" aria-expanded="false"><i
                                    class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Small Buttons</h5>
                                <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                                <button type="button" class="btn btn-success btn-sm text-white">Success</button>
                                <button type="button" class="btn btn-danger btn-sm text-white">Danger</button>
                                <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                <button type="button" class="btn btn-info btn-sm">Info</button>
                                <button type="button" class="btn btn-light btn-sm">Light</button>
                                <button type="button" class="btn btn-dark btn-sm">Dark</button>
                                <button type="button" class="btn btn-link btn-sm text-decoration-none">Link</button>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <h5 class="card-title">Medium Buttons</h5>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success text-white">Success</button>
                                    <button type="button" class="btn btn-danger text-white">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-link text-decoration-none">Link</button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <h5 class="card-title">Large Buttons</h5>
                                    <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                    <button type="button" class="btn btn-success btn-lg text-white">Success</button>
                                    <button type="button" class="btn btn-danger btn-lg text-white">Danger</button>
                                    <button type="button" class="btn btn-warning btn-lg">Warning</button>
                                    <button type="button" class="btn btn-info btn-lg">Info</button>
                                    <button type="button" class="btn btn-light btn-lg">Light</button>
                                    <button type="button" class="btn btn-dark btn-lg">Dark</button>
                                    <button type="button" class="btn btn-link btn-lg text-decoration-none">Link</button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <h5 class="card-title">Outline Buttons</h5>
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-light">Light</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- drop down -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Dropdown Buttons</h5>
                                <div class="bd-example">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Primary</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Secondary</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle text-white"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Success</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Info</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Warning</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle text-white"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Danger</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <h5 class="card-title">Split Buttons</h5>
                                <div class="bd-example">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success text-white">Success</button>
                                        <button type="button"
                                            class="btn btn-success dropdown-toggle dropdown-toggle-split text-white"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button"
                                            class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger text-white">Danger</button>
                                        <button type="button"
                                            class="btn btn-danger dropdown-toggle dropdown-toggle-split text-white"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Laravel Mini CRM. Designed and Developed by Virgo Stevanus.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
</body>
@endsection