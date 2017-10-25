@extends('layout.app')
@section('nav','order')
@section('subnav','create-order')
@section('title','Create Order')
@section('subtitle','404 Users')

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
                    <h4 class="panel-title">New Order</h4>
                </div>
                <div id="body-content" class="panel-body">
                    <div id="btn-action" class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <a href="" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-upload"></i> Excel Upload</a>
                                <a href="create-order" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-edit"></i> Manual Input</a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-success m-r-5 m-b-5">Finish Order and Request Pickup</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="alert alert-info m-b-0">
                        <div class="row" style="text-align: center">
                            <div class="col-md-2 col-sm-4">
                                Total Shipment : <br>
                                <b>2 Shipment(s)</b>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                Total Shipping Cost :<br>
                                <b>Rp 5.000.000</b>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                Total Insurance Cost :<br>
                                <b>Rp 5.000.000</b>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                Total Packing Cost :<br>
                                <b>Rp 0</b>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                Do you have voucher code ?<br>
                                <input type="text" class="form-control" name="voucher" placeholder="Input kode voucher" style="margin: 5px 0;">
                                <button class="btn btn-primary m-r-5 m-b-5 btn-block">Generate</button>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                Grand Total<br>
                                <b>Rp 10.000.000</b>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">      
                        <div class="col-md-12">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Shipment ID</th>
                                        <th>Sender Name</th>
                                        <th>Item Name</th>
                                        <th>Vendor</th>
                                        <th>Attribute</th>
                                        <th>Shipping Cost</th>
                                        <th>Insurance Cost</th>
                                        <th>Packing Cost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">SHM1710250002</a></td>
                                        <td>Irfan Maulana</td>
                                        <td>Macbook pro Retina 15"</td>
                                        <td>JNE YES</td>
                                        <td></td>
                                        <td>Rp 18.500.000</td>
                                        <td>Rp 60.000</td>
                                        <td>Rp 0</td>
                                        <td>
                                            <span style="margin-right: 5px;"><a href="edit-order" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a></span>
                                            <span style="margin-right: 5px;"><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
@stop