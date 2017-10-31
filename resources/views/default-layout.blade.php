@extends('layout.app')
@section('nav','nav')
@section('subnav','subnav')
@section('title','Title')

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
                        <h4 class="panel-title">Panel Name</h4>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    @stop
	
	@section('custom-js')

	@stop
@stop