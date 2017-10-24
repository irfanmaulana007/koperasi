@extends('layout.app')

@section('content')
	@section('custom-css')
		<link href="plugins/DataTables/css/data-table.css" rel="stylesheet" />
	@stop

	@section('content')
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
	                <div id="body-content" class="panel-body">
				        <div id="table-loading" style="position: absolute; background-color: rgba(255, 255, 255, .5); display: none; z-index: 1;">
				            <span class="spinner" style="top: 50%"></span>
				        </div>
			            <ul class="nav nav-tabs">
			                @yield('table-tab')
			            </ul>
			            <br>
			            <div id="btn-action" class="row">
			            	<div class="col-md-12">
								<div class="pull-left">
									<button type="button" id="btn-add" class="btn btn-primary m-r-5 m-b-5 @yield('btn-add-display')" data-toggle="modal" data-target="#modal-dialog"><i class="fa fa-plus"></i> Add</button>
								</div>
								<div class="pull-right">
									<button type="button" id="btn-print" class="btn btn-success m-r-5 m-b-5"><i class="fa fa-print"></i> Print</button>
									<button type="button" class="btn btn-success m-r-5 m-b-5"><i class="fa fa-print"></i> Save to PDF</button>
								</div>
			            	</div>
			            </div>
			            <div class="tab-content">
			                <div class="tab-pane fade active in" id="default-tab-1">
			                    <div class="table-responsive">
			                        @yield('table-content')

			                    </div>
			                </div>
			            </div>
	                </div>
	            </div>
	            <!-- end panel -->
	        </div>
	        <!-- end col-12 -->
	    </div>
	    <!-- end row -->

	    <!-- #modal -->
        <div class="modal fade" id="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">@yield('modal-title')</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        	@yield('modal-form')
	                    </form>
                    </div>
                </div>
            </div>
        </div>
	    <!-- end modal -->
		
	@stop

	@section('custom-js')
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
		<script src="plugins/DataTables/js/jquery.dataTables.js"></script>
		<script src="js/table-manage-default.demo.js"></script>
        <script src="plugins/parsley/dist/parsley.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>
			$(document).ready(function(){
				TableManageDefault.init();

				$("#btn-print").click(function(){
					window.print();
				});
			});
		</script>
	@stop
@stop