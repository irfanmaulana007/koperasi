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
    <body class="pace-top">
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->
        
        <div class="login-cover">
            <div class="login-cover-image"><img src="img/login-bg/bg-2.jpg" data-id="login-cover-image" alt="" /></div>
            <div class="login-cover-bg"></div>
        </div>
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login login-v2" data-pageload-addclass="animated fadeIn">
                <!-- begin brand -->
                <div class="login-header">
                    <div class="brand">
                        <span style="height: auto;"><img src="{{ asset('img/logo.png') }}" style="margin-bottom: 10px;"></span><br>
                        <small>Mengirim jadi mudah</small>                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end brand -->
                <div class="login-content">
                    <form action="/" class="margin-bottom-0">
                        <div class="form-group m-b-20">
                            <input type="text" class="form-control input-lg" placeholder="Email Address" />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="text" class="form-control input-lg" placeholder="Password" />
                        </div>
                        <div class="checkbox m-b-20">
                            <label style="line-height: initial;">
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end login -->
        </div>
        <!-- end page container -->
        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="plugins/jquery/jquery-1.9.1.js"></script>
        <script src="plugins/jquery/jquery-migrate-1.1.0.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <!--[if lt IE 9]>
            <script src="assets/crossbrowserjs/html5shiv.js"></script>
            <script src="assets/crossbrowserjs/respond.min.js"></script>
            <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="plugins/slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->
        
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="js/login-v2.demo.js"></script>
        <script src="js/apps.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function() {
                App.init();
                LoginV2.init();
            });
        </script>
    </body>
</html>