@extends('layout.app')
@section('nav','summary')
@section('subnav','summary_report')
@section('title','Summary Report')

@section('custom-css')    
    <link href="plugins/morris/morris.css" rel="stylesheet" />
@stop

@section('content')
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL ORDERS</h4>
                    <p>65 Orders</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>TOTAL SHIPMENTS</h4>
                    <p>168 Shipments</p>   
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>AVERAGE</h4>
                    <p>3 Shipment / Order</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        {{-- <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>AVG TIME ON SITE</h4>
                    <p>00:12:23</p> 
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div> --}}
        <!-- end col-3 -->
    </div>
    <!-- end row -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="morris-chart-2">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Data Summary</h4>
                </div>
                <div class="panel-body">
                    {{-- <div id="morris-line-chart" class="height-sm"></div>
                    <div id="morris-area-chart" class="height-sm"></div> --}}
                    <div class="col-sm-3">
                        <div id="morris-donut-chart" class="height-sm"></div>
                    </div>
                    <div class="col-sm-3">
                        <div id="morris-donut-chart1" class="height-sm"></div>
                    </div>
                    <div class="col-sm-3">
                        <div id="morris-donut-chart2" class="height-sm"></div>
                    </div>
                    <div class="col-sm-3">
                        <table class="pull-right">
                            <tr>
                                <td><i class="fa fa-circle" style="color: #2d353c; margin-right: 5px;"></i></td>
                                <td>Dark</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-circle" style="color: #f59c1a; margin-right: 5px;"></i></td>
                                <td>Orange</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-circle" style="color: #ff5b57; margin-right: 5px;"></i></td>
                                <td>Red</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-circle" style="color: #b6c2c9; margin-right: 5px;"></i></td>
                                <td>Grey</td>
                            </tr>
                        </table>
                    </div>
                    {{-- <div id="morris-bar-chart" class="height-sm"></div> --}}
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
@stop

@section('custom-js')
    <script src="plugins/morris/raphael.min.js"></script>
    <script src="plugins/morris/morris.js"></script>
    <script src="js/chart-morris.demo.js"></script>
    <script>
        $(document).ready(function() {
            MorrisChart.init();
        });
    </script>
@stop