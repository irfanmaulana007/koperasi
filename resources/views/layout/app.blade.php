<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/style-responsive.css" rel="stylesheet" />
        <!-- ================== END BASE CSS STYLE ================== -->

        @yield('custom-css')

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->

    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->
        
        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="/" class="navbar-brand"><span class="navbar-logo"><img src="{{ asset('img/logo.png') }}"></span></a>
                        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->
                    
                    <!-- begin header navigation right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form full-width">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter keyword" />
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                                <i class="fa fa-bell-o"></i>
                                <span class="label">5</span>
                            </a>
                            <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                                <li class="dropdown-header">Notifications (5)</li>
                                <li class="media">
                                    <a href="javascript:;">
                                        <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Server Error Reports</h6>
                                            <div class="text-muted f-s-11">3 minutes ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="javascript:;">
                                        <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">John Smith</h6>
                                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                            <div class="text-muted f-s-11">25 minutes ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="javascript:;">
                                        <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Olivia</h6>
                                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                            <div class="text-muted f-s-11">35 minutes ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="javascript:;">
                                        <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"> New User Registered</h6>
                                            <div class="text-muted f-s-11">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="javascript:;">
                                        <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"> New Email From John</h6>
                                            <div class="text-muted f-s-11">2 hour ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer text-center">
                                    <a href="javascript:;">View more</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown navbar-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/img/user-13.jpg" alt="" /> 
                                <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInLeft">
                                <li class="arrow"></li>
                                <li><a href="profile">Edit Profile</a></li>
                                <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end header navigation right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end #header -->
            
            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar user -->
                    <ul class="nav">
                        <li class="nav-profile">
                            <div class="image">
                                <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
                            </div>
                            <div class="info">
                                Sean Ngu
                                <small>Front end developer</small>
                            </div>
                        </li>
                    </ul>
                    <!-- end sidebar user -->
                    <!-- begin sidebar nav -->
                    <ul class="sidenav nav">
                        <li class="nav-header">Navigation</li>
                        <li id="nav-dashboard" class="has-sub active">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-laptop"></i>
                                <span>Dashboard</span>
                            </a>
                            <ul class="sub-menu">
                                <li id="subnav-content"><a href="content">Content</a></li>
                                <li id="subnav-invoice"><a href="invoice">Invoice</a></li>
                                <li id="subnav-profile"><a href="profile">Profile</a></li>
                            </ul>
                        </li>
                        <li id="nav-order" class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-file-text-o"></i>
                                <span>Order</span>
                            </a>
                            <ul class="sub-menu">
                                <li id="subnav-order"><a href="order">Create Order</a></li>
                            </ul>
                        </li>
                        <li id="nav-user" class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-user"></i>
                                <span>User</span>
                            </a>
                            <ul class="sub-menu">
                                <li id="subnav-user"><a href="user">User</a></li>
                            </ul>
                        </li>
                        <li id="nav-history" class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-history"></i>
                                <span>History</span>
                            </a>
                            <ul class="sub-menu">
                                <li id="subnav-history_order"><a href="history-order">Order</a></li>
                                <li id="subnav-history_shipment"><a href="history-shipment">Shipment</a></li>
                            </ul>
                        </li>
                        <li id="nav-summary" class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-bar-chart"></i>
                                <span>Summary</span>
                            </a>
                            <ul class="sub-menu">
                                <li id="subnav-summary_report"><a href="summary-report">Summary Report</a></li>
                            </ul>
                        </li>
                        <!-- begin sidebar minify button -->
                        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                        <!-- end sidebar minify button -->
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin body content -->
            <div id="content" class="content">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;" class="text-capitalize">@yield('nav')</a></li>
                    <li class="active text-capitalize">@yield('title')</li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">@yield('title') <small>@yield('subtitle')</small></h1>
                @yield('content')
            </div>
            <!-- end body content -->
        </div>

        <!-- begin #footer -->
        <div id="footer" class="footer">
            &copy; 2014 Color Admin Responsive Admin Template - Sean Ngu All Rights Reserved
        </div>
        <!-- end #footer -->

        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
            <script src="crossbrowserjs/html5shiv.js"></script>
            <script src="crossbrowserjs/respond.min.js"></script>
            <script src="crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        @yield('custom-js')
        
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  {{--       <script src="plugins/gritter/js/jquery.gritter.js"></script>
        <script src="plugins/flot/jquery.flot.min.js"></script>
        <script src="plugins/flot/jquery.flot.time.min.js"></script>
        <script src="plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="plugins/sparkline/jquery.sparkline.js"></script>
        <script src="plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> --}}
        <script src="js/dashboard.js"></script>
        <script src="js/apps.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        
        <script>
            $(document).ready(function() {
                App.init();
                
                // Set Sidenav active
                $('.sidenav>li').removeClass('active');
                $('.sidenav').find("#nav-@yield('nav')").addClass('active');
                $('.sub-menu>li').removeClass('active');
                $('.sub-menu').find("#subnav-@yield('subnav')").addClass('active');
            });
        </script>
    </body>
</html>
