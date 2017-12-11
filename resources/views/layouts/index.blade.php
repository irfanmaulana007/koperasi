@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-left">
                <a href="@yield('link-add')" class="btn btn-primary m-r-5 @yield('display-btn-add')"><i class="fa fa-plus"></i> Add New</a>
                @yield('btn-left')
            </div>
        </div>
    </div>
    <br/>
    <div id="pre-content">
        @yield('pre-content')
    </div>
    <div id="table-alert">
        @yield('alert-content')
    </div>
    <div class="table-responsive">
        <table id="{{ (isset($idTable) ? $idTable : 'data-table') }}" class="table table-striped table-bordered @yield('table-class')">
            @yield('table-content')
        </table>
        <br><br>
    </div>
    @yield('additional-content')

@stop

@section('custom-js')
    <script>
        $(document).ready(function(){
            general_script();
        });
    </script>
@stop