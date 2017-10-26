@extends('layout.crud')
@section('nav','courier')
@section('subnav','courier_list')
@section('title','Courier List')
@section('subtitle','8 Couriers')

<!-- Section Table -->
@section('table-content')
    <table id="data-table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Courier Name</th>
                <th>On-Going</th>
                <th>Completed</th>
                <th>Contact Person</th>
                <th>Phone Number</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- begin foreach -->
            <tr class="odd gradeX">
                <td>Vendor 1 REG</td>
                <td>10</td>
                <td>1</td>
                <td>PT. JNE Tomang</td>
                <td>087880987453</td>
                <td>Discount Ended!</td>
                <td>Online</td>
                <td>
                    <span style="margin-right: 5px;"><a href="edit-order" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a></span>
                    <span style="margin-right: 5px;"><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></span>
                </td>
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