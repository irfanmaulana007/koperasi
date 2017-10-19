@extends('layout.app')
@section('nav','dashboard')
@section('subnav','content')

@section('content')
	@section('custom-css')
		<link href="plugins/DataTables/css/data-table.css" rel="stylesheet" />
	@stop

	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-md-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
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
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title"><span class="label label-success pull-left m-r-10">NEW</span> Bootstrap Date Time Picker</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="control-label col-md-4">Default Date Time</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Custom Format</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="datetimepicker2">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Linked Pickers</label>
                            <div class="col-md-8">
                                <div class="row row-space-10">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  id="datetimepicker3" placeholder="Min Date" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="datetimepicker4" placeholder="Max Date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 --><!-- begin col-6 -->
        <div class="col-md-6">
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
    </div>
    <!-- end row -->
	
	@section('custom-js')
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
		<script src="plugins/DataTables/js/jquery.dataTables.js"></script>
		<script src="js/table-manage-default.demo.js"></script>
        <script src="plugins/parsley/dist/parsley.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>			
			TableManageDefault.init();
		</script>
	@stop
@stop
