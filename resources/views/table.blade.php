@extends('layout.app')
@section('nav','table')
@section('subnav','table')

@section('content')
	@section('custom-css')
		<link href="plugins/DataTables/css/data-table.css" rel="stylesheet" />
	@stop

	@section('content')
		<h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
		<!-- end page-header -->
		
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
	@stop
	
	@section('custom-js')
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
		<script src="plugins/DataTables/js/jquery.dataTables.js"></script>
		<script src="js/table-manage-default.demo.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>			
			TableManageDefault.init();
		</script>
	@stop
@stop