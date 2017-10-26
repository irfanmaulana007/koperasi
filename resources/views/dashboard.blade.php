@extends('layout.app')
@section('nav','dashboard')
@section('title','Dashboard')

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
                        <h4 class="panel-title">News and Promo</h4>
                    </div>
                    <div id="body-content" class="panel-body">
                        <section id="news">
                            <h3>News</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section id="promo">
                            <h3>Promo</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="promo-box">
                                        <img src="{{ asset('img/picker.png') }}">
                                    </div>
                                    <h4 class="text-center">Title Promo</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="promo-box">
                                        <img src="{{ asset('img/picker.png') }}">
                                    </div>
                                    <h4 class="text-center">Title Promo</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="promo-box">
                                        <img src="{{ asset('img/picker.png') }}">
                                    </div>
                                    <h4 class="text-center">Title Promo</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="promo-box">
                                        <img src="{{ asset('img/picker.png') }}">
                                    </div>
                                    <h4 class="text-center">Title Promo</h4>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    @stop
	
@stop