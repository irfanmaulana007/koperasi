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
	            <div id="table-panel" class="panel panel-inverse">
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
									<button type="button" id="btn-add" class="btn btn-primary m-r-5 m-b-5 add-btn pull-left @yield('btn-add-display')"><i class="fa fa-plus"></i> Add</button>
									@yield('btn-addition')
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
        <div class="modal fade" id="modal-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-capitalize"></h4>
                    </div>
                    <div class="modal-body">
					        <div id="modal-loading" style="display: none;">
					            <span class="spinner" style="margin-left: -20px;"></span>
					        </div>
                    	<div id="modal-component" style="min-height: 100px;"></div>
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
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>
			$(document).ready(function(){
				TableManageDefault.init();

				$("#btn-print").click(function(){
					window.print();
				});

			});

			var action ="";

	        // Ajax load modal
		        // Add
		        $(".add-btn").click(function(){
		        	var modul = "@yield('subnav')";
		        	$(".modal-title").html("Add " + modul);
		            var url = modul + "-add/";

		        	$("#modal-form").modal('show');

		            $.ajax({
		                url: url,
		                beforeSend: function () {
		                    $("#modal-component").empty();
		                    $("#modal-loading").show();
		                },
		                success: function (message) {
		                    $("#modal-loading").hide();
		                    $("#modal-component").html(message);
		                }
		            });
		        });

		        // Edit
		        $(".edit-btn").click(function(){
		        	var modul = "@yield('subnav')";
		        	$(".modal-title").html("Edit " + modul);
		            var url = modul + "-edit/" + $(this).data("id");

		        	$("#modal-form").modal('show');

		            $.ajax({
		                url: url,
		                beforeSend: function () {
		                    $("#modal-component").empty();
		                    $("#modal-loading").show();
		                },
		                success: function (message) {
		                    $("#modal-loading").hide();
		                    $("#modal-component").html(message);
		                }
		            });
		        });

		        // Delete
		        $(".delete-btn").click(function(){
		        	var modul = "@yield('subnav')";
		        	$(".modal-title").html("Delete " + modul);
		            var url = modul + "-delete/" + $(this).data("id");

		        	$("#modal-form").modal('show');

		            $.ajax({
		                url: url,
		                beforeSend: function () {
		                    $("#modal-component").empty();
		                    $("#modal-loading").show();
		                },
		                success: function (message) {
		                    $("#modal-loading").hide();
		                    $("#modal-component").html(message);
		                }
		            });
		        });
	        // end ajax load modal
		</script>
	@stop
@stop