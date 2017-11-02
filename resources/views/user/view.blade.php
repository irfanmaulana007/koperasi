@extends('layout.crud')
@section('nav','user')
@section('subnav','user')
@section('title','User')
@section('subtitle','404 Users')
@section('btn-add-display', 'hide')

@section('btn-addition')
    <a href="user-create"><button type="button" class="btn btn-primary m-r-5 m-b-5 pull-left"><i class="fa fa-plus"></i> Add</button></a>
@stop

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
                <th></th>
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
                <td>
                    <span style="margin-right: 5px;"><button class="btn btn-primary btn-sm edit-btn" data-id="user007"><i class="fa fa-edit"></i> Edit</button></span>
                    <span style="margin-right: 5px;"><button class="btn btn-danger btn-sm delete-btn" data-id="user007"><i class="fa fa-trash"></i> Delete</button></span>
                </td>
            </tr>
            <!-- begin foreach -->
        </tbody>
    </table>
@stop
<!-- End Section Table -->