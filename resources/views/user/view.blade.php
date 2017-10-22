@extends('layout.crud')
@section('nav','user')
@section('subnav','user')
@section('title','User')
@section('subtitle','404 Users')

<!-- Section Table -->
@section('table-content')
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
            <!-- begin foreach -->
            <tr class="odd gradeX">
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>4</td>
                <td>X</td>
            </tr>
            <!-- begin foreach -->
        </tbody>
    </table>
@stop
<!-- End Section Table -->

<!-- Section Modal -->
@section('btn-add-display', 'show')
@section('modal-title', 'Add New User')

@section('modal-form')
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
            <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
        </div>
    </div>
@stop
<!-- End Section Modal -->