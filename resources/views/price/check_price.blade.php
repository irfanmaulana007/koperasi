@extends('layout.app')
@section('nav','price')
@section('subnav','check_price')
@section('title','Check Price')

@section('content')
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
                        <h4 class="panel-title">Check Price</h4>
                    </div>
                    <div id="body-content" class="panel-body">
                        <div class="col-sm-5">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>Origin City</label>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" name="origin_city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>Destination City</label>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" name="destination_city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>Item Weight (Kg)</label>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="text" name="weight" class="form-control" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary btn-block">Check Price</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h5>from <b>Jakarta</b> to <b>Bandung</b>, Weight <b>1</b> Kg</h5>
                                    </div>
                                    <div class="pull-right">
                                        <form action="">
                                            <div class="pull-left">
                                                <label style="margin-right: 10px;">Sort By</label>
                                            </div>
                                            <div class="pull-left">
                                                <select class="form-control" name="sort">
                                                    <option value="">Price</option>
                                                    <option value="">Estimated Time</option>
                                                    <option value="">Rating</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Courier</th>
                                        <th>Price</th>
                                        <th>Estimated Time</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
	
@stop