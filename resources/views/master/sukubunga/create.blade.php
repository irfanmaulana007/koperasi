@extends('layouts.app')

@section('nav','master') <!-- ID Current Nav -->
@section('subnav','master-status') <!-- ID Current Subnav -->

@section('content') 
    @if(isset($content->id))
        {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'route' => ['suku-bunga.update', $content->id]]) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />
    @else
        {{ Form::open(array('url' => 'master/suku-bunga','class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
    @endif

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Jangka Waktu</label>
                <div class="col-md-6">
                    <select name="jangka_waktu" id="jangka_waktu" class="form-control" autofocus required> 
                        <option value="0" selected disabled>- Select Jangka Waktu -</option>
                        @for($i=1 ; $i<=24 ; $i++)
                            <option value="{{ $i }}" {{ ($content->jangka_waktu == $i) ? 'selected' : '' }}>{{ $i }} Bulan</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Suku Bunga</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="suku_bunga" class="form-control" value="{{ $content->suku_bunga }}" placeholder="Suku Bunga" required autocomplete="off" data-parsley-type="number" autofocus/>
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">{{ (isset($content->id)) ? 'Update' : 'Add' }}</button>
                <a href="{{ URL::to('master/suku-bunga') }}"><button type="button" class="btn btn-sm btn-default btn-wide">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop