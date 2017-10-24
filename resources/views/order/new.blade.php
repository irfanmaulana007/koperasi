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