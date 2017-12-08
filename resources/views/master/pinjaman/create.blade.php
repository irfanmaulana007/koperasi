@extends('layouts.app')

@section('nav','master') <!-- ID Current Nav -->
@section('subnav','master-pinjaman') <!-- ID Current Subnav -->

@section('content') 
    @if(isset($content->id))
        {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'route' => ['pinjaman.update', $content->id]]) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />
    @else
        {{ Form::open(array('url' => 'master/pinjaman','class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
    @endif

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Pinjaman Name</label>
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" value="{{ $content->pinjaman_name }}" placeholder="ex:" required autocomplete="off" autofocus />
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">{{ (isset($content->id)) ? 'Update' : 'Add' }}</button>
                <a href="{{ URL::to('master/pinjaman') }}"><button type="button" class="btn btn-sm btn-default btn-wide" href="{{ URL::to('master/pinjaman') }}">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop