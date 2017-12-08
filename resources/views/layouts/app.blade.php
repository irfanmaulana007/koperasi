<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="{{asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <link href="{{asset('plugins/DataTables/css/data-table.css')}}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        @yield('custom-css')

    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->
        
        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            @include('partials.header')
            <!-- end #header -->

            <!-- begin #sidebar -->
            @include('partials.sidebar')
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
                
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12">
                        <!-- begin panel -->
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                                <h4 class="panel-title">{{ (isset($panelTitle)) ? $panelTitle : 'Panel' }}</h4>
                            </div>
                            <div class="panel-body">

                                @include('handler.flash-message')

                                @yield('content')
                                
                            </div>
                        </div>
                        <!-- end panel -->
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->


            </div>
            <!-- end body content -->
        </div>

        <!-- begin #footer -->
        @include('partials.footer')
        <!-- end #footer -->

        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('js/general.js')}}"></script>
        <script src="{{asset('plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/parsley/dist/parsley.js')}}"></script>

        <!--[if lt IE 9]>
            <script src="crossbrowserjs/html5shiv.js"></script>
            <script src="crossbrowserjs/respond.min.js"></script>
            <script src="crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        
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
        <script src="{{asset('plugins/DataTables/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('plugins/DataTables/js/dataTables.fixedHeader.js')}}"></script>
        <script src="{{asset('plugins/jsPDF-master/dist/jspdf.min.js')}}"></script>
        <script src="{{asset('plugins/jsPDF-AutoTable-master/dist/jspdf.plugin.autotable.min.js')}}"></script>
        <script src="{{asset('js/table-manage-default.demo.js')}}"></script>
        <script src="{{asset('js/apps.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        
        <script>
            $(document).ready(function() {
                App.init();
                TableManageDefault.init();
                
                // Set Sidenav active
                $('.sidenav>li').removeClass('active');
                $('.sidenav').find("#nav-@yield('nav')").addClass('active');
                $('.sub-menu>li').removeClass('active');
                $('.sub-menu').find("#subnav-@yield('subnav')").addClass('active');
            });
        </script>
        
        @yield('custom-js')
    </body>
</html>
