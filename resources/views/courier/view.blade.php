@extends('layout.crud')
@section('nav','courier')
@section('subnav','courier')
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
                <th class="no-sort">Phone Number</th>
                <th>Discount</th>
                <th>Status</th>
                <th class="no-sort">Action</th>
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
                    <span style="margin-right: 5px;"><a class="btn btn-primary btn-sm edit-btn"><i class="fa fa-edit"></i> Edit</a></span>
                    <span style="margin-right: 5px;"><a class="btn btn-danger btn-sm delete-btn" data-id="test"><i class="fa fa-trash"></i> Delete</a></span>
                </td>
            </tr>
            <!-- begin foreach -->
        </tbody>
    </table>
@stop
<!-- End Section Table -->


<!-- Section Modal -->
@section('btn-add-display', 'show')