@extends('layout.app')
@section('nav','user')
@section('subnav','create_user')
@section('title','Create User')

@section('content')
	@section('custom-css')

	@stop

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                        <h4 class="panel-title">Create User</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="profile-photo" style="max-width: 195px; margin: 15px 0 0 15px;">
                                    <div class="img-panel" style="border: 2px solid #ddd; border-radius: 4px; margin-bottom: 10px; min-height: 175px;">
                                        <i id="img-loading" class="fa fa-spin fa-spinner" style="font-size: 20px; display: none;"></i>
                                        <img src="" alt="">
                                    </div>
                                    <button id="btn-changepicture" class="btn btn-primary btn-block btn-sm" type="file">Change Picture</button>
                                    <input type="file" id="btn-file" class="hide">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <form data-parsley-validate="true">
                                    <div id="wizard">
                                        <!-- Main Information -->
                                        <h4 style="margin-bottom: 10px;">Main Information</h4>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Role <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <select name="entity_type" id="" class="form-control" data-parsley-required="true">
                                                        <option value="0" disabled selected>- Select -</option>
                                                        <option value="1">User</option>
                                                        <option value="2">Admin</option>
                                                        <option value="3">Super Admin</option>
                                                        <option value="4">Staff Operational</option>
                                                        <option value="5">Staff Finance</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Fullname <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="text" class="form-control" data-parsley-required="true" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Email <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="email" class="form-control" data-parsley-required="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Phone Number <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="text" class="form-control" data-parsley-required="true" data-parsley-type="digits">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Secondary Information -->
                                        <br>
                                        <!-- Secondary Information -->
                                        <h4 style="margin-bottom: 10px;">Secondary Information</h4>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Phone Number</label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Email</label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-4 text-right">
                                                    <label class="text-grey f-w-600">Phone Number</label>
                                                </div>
                                                <div class="col-md-9 col-xs-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Secondary Information -->
                                        <br>
                                        <!-- User Access -->
                                        <h4 style="margin-bottom: 10px;">User Access</h4>
                                        <table id="user-access" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Auth</th>
                                                    <th>Order</th>
                                                    <th>User</th>
                                                    <th>History</th>
                                                    <th>Summary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label><input type="checkbox" disabled> Register</label></td>
                                                    <td><label><input type="checkbox" disabled> Create Order</label></td>
                                                    <td><label><input type="checkbox" disabled> User List</label></td>
                                                    <td><label><input type="checkbox" disabled> Order History</label></td>
                                                    <td><label><input type="checkbox" disabled> Summary</label></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><label><input type="checkbox" disabled> Shipment History</label></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="row">
                                            <center>
                                                <button class="btn btn-primary btn-wide" style="margin: 0 10px;">Submit</button>
                                                <button class="btn btn-default btn-wide" style="margin: 0 10px;">Cancel</button>
                                            </center>
                                        </div>
                                        <!-- End User Access -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
	
	@section('custom-js')
        <script src="plugins/parsley/dist/parsley.js"></script>
        <script>
            $("#btn-changepicture").click(function(){
                $("#btn-file").click();
            });

            $("#btn-file").change(function(){
                $("#img-loading").show();
            });
        </script>
	@stop
@stop