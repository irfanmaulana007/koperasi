@extends('layout.app')
@section('nav','feature')
@section('subnav','content')
@section('title','Content')
@section('subtitle','List of Content')

@section('content')
	@section('custom-css')
		<link href="plugins/DataTables/css/data-table.css" rel="stylesheet" />
	@stop

    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL VISITORS</h4>
                    <p>3,291,922</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>BOUNCE RATE</h4>
                    <p>20.44%</p>   
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>UNIQUE VISITORS</h4>
                    <p>1,291,922</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>AVG TIME ON SITE</h4>
                    <p>00:12:23</p> 
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-md-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Data Table - Default</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                </tr>
                                <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">DatePicker</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Default Datepicker</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="datepicker-default" placeholder="Select Date" value="04/1/2014" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Auto Close Datepicker</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="datepicker-autoClose" placeholder="Auto Close Datepicker" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Disabled Past Date</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="datepicker-disabled-past" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                    <input type="text" class="form-control" placeholder="Select Date" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Range Datepicker</label>
                            <div class="col-md-8">
                                <div class="input-group input-daterange">
                                    <input type="text" class="form-control" name="start" placeholder="Date Start" />
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end" placeholder="Date End" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6" style="margin-bottom: 20px;">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Basic Form Validation</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="fullname">Full Name * :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="email">Email * :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="website">Website :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="url" id="website" name="website" data-parsley-type="url" placeholder="url" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4"></label>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Default Style</h4>
                </div>
                <div class="panel-body">
                    <form action="/" method="POST">
                        <fieldset>
                            <legend>Legend</legend>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" /> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                            <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6" style="margin-bottom: 50px;">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="ui-general-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Alerts</h4>
                </div>
                <div class="panel-body">
                    <div class="alert alert-success fade in m-b-15">
                        <strong>Success!</strong>
                        Vivamus vestibulum posuere est eu tincidunt.
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                    <div class="alert alert-info fade in m-b-15">
                        <strong>Info!</strong>
                        Morbi sed nibh ac tortor laoreet blandit sed eu ligula.
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                    <div class="alert alert-warning fade in m-b-15">
                        <strong>Warning!</strong>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                    <div class="alert alert-danger fade in m-b-15">
                        <strong>Error!</strong>
                        Morbi vitae arcu in neque luctus elementum.
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="ui-general-3">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Labels & Badges</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Labels</th>
                                <th>Badges</th>
                                <th>Square Badges</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Default</td>
                                <td><span class="label label-default">Default</span></td>
                                <td><span class="badge badge-default">6</span></td>
                                <td><span class="badge badge-default badge-square">6</span></td>
                            </tr>
                            <tr>
                                <td>Danger</td>
                                <td><span class="label label-danger">Danger</span></td>
                                <td><span class="badge badge-danger">4</span></td>
                                <td><span class="badge badge-danger badge-square">4</span></td>
                            </tr>
                            <tr>
                                <td>Warning</td>
                                <td><span class="label label-warning">Warning</span></td>
                                <td><span class="badge badge-warning">7</span></td>
                                <td><span class="badge badge-warning badge-square">7</span></td>
                            </tr>
                            <tr>
                                <td>Success</td>
                                <td><span class="label label-success">Success</span></td>
                                <td><span class="badge badge-success">8</span></td>
                                <td><span class="badge badge-success badge-square">8</span></td>
                            </tr>
                            <tr>
                                <td>Info</td>
                                <td><span class="label label-info">Info</span></td>
                                <td><span class="badge badge-info">2</span></td>
                                <td><span class="badge badge-info badge-square">2</span></td>
                            </tr>
                            <tr>
                                <td>Primary</td>
                                <td><span class="label label-primary">Primary</span></td>
                                <td><span class="badge badge-primary">5</span></td>
                                <td><span class="badge badge-primary badge-square">5</span></td>
                            </tr>
                            <tr>
                                <td>Inverse</td>
                                <td><span class="label label-inverse">Inverse</span></td>
                                <td><span class="badge badge-inverse">12</span></td>
                                <td><span class="badge badge-inverse badge-square">12</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6">
            <div class="panel panel-inverse" data-sortable-id="ui-modal-notification-2">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Modal</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Demo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Default Modal Dialog Box.</td>
                                <td><a href="#modal-dialog" class="btn btn-sm btn-success" data-toggle="modal">Demo</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- #modal-dialog -->
                    <div class="modal fade" id="modal-dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Modal Dialog</h4>
                                </div>
                                <div class="modal-body">
                                    Modal body content here...
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                    <a href="javascript:;" class="btn btn-sm btn-success">Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-md-6">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#default-tab-1" data-toggle="tab">Default Tab 1</a></li>
                <li class=""><a href="#default-tab-2" data-toggle="tab">Default Tab 2</a></li>
                <li class=""><a href="#default-tab-3" data-toggle="tab">Default Tab 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="default-tab-1">
                    <h3 class="m-t-10"><i class="fa fa-cog"></i> Lorem ipsum dolor sit amet</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
                        est diam sagittis orci, a ornare nisi quam elementum tortor. Proin interdum ante porta est convallis 
                        dapibus dictum in nibh. Aenean quis massa congue metus mollis fermentum eget et tellus. 
                        Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, nec eleifend orci eros id lectus.
                    </p>
                    <p class="text-right m-b-0">
                        <a href="javascript:;" class="btn btn-white m-r-5">Default</a>
                        <a href="javascript:;" class="btn btn-primary">Primary</a>
                    </p>
                </div>
                <div class="tab-pane fade" id="default-tab-2">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <p>
                        Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula. 
                        In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis, 
                        sit amet scelerisque lectus adipiscing.
                    </p>
                </div>
                <div class="tab-pane fade" id="default-tab-3">
                    <p>
                        <span class="fa-stack fa-4x pull-left m-r-10">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                        </span>
                        Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque. 
                        Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam. 
                        Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat. 
                        Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue. 
                        Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
                        Quisque adipiscing dui nec orci fermentum blandit.
                        Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
                        Quisque adipiscing dui nec orci fermentum blandit.
                    </p>
                </div>
            </div>
        </div>
        <!-- end col-6 -->
    </div>
    <!-- end row -->
	
	@section('custom-js')
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="js/table-manage-default.demo.js"></script>
        <script src="plugins/parsley/dist/parsley.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="plugins/DataTables/js/jquery.dataTables.js"></script>
        <script src="plugins/select2/dist/js/select2.min.js"></script>
        <script src="js/form-plugins.demo.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>
			TableManageDefault.init();
            FormPlugins.init();
		</script>
	@stop
@stop
