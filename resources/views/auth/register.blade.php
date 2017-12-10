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

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

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
                        <small>Koperasi Simpan Pinjam</small>                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end brand -->
                <div class="login-content">
                    <form action="{{action('AuthController@doRegister')}}" method="POST" class="margin-bottom-0" data-parsley-validate="true">
                        {{ csrf_field() }}
                        <div class="form-group m-b-20">
                            <input type="text" name="name" class="form-control input-lg" placeholder="Name" autocomplete="off" required autofocus />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Email Address" autocomplete="off" required />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="password" name="password" id="pass" class="form-control input-lg" placeholder="Password" autocomplete="off" required />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="password" name="cpassword" class="form-control input-lg" placeholder="Confirm Password" autocomplete="off" data-parsley-equalto="#pass" required />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="test" name="phone" class="form-control input-lg" placeholder="Phone Number" autocomplete="off" data-parsley-type="digits" required />
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Register now</button>
                            <br>
                            <center><a href="{{ URL::to('login') }}"><i>Click here to Login</i></a></center>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end login -->
        </div>
        <!-- end page container -->
        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('js/general.js')}}"></script>
        <script src="{{asset('plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/parsley/dist/parsley.js')}}"></script>

        <script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        
        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{asset('js/apps.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
    </body>
</html>