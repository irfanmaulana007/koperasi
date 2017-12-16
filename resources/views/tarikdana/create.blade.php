@extends('layouts.app')

@section('nav','tarikdana') <!-- ID Current Nav -->

@section('content') 
    {{ Form::open(array('url' => 'tarikdana/' . $content->id . '/tarik', 'class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Jumlah Tarik Dana</label>
                <div class="col-md-6">
                     <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input type="text" name="jumlah" class="form-control" value="{{ $content->jumlah_tarikdana }}" autofocus placeholder="Jumlah Dana" max="{{ $simpanan->jumlah_simpanan }}" required />
                    </div>
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">Submit</button>
                <a href="{{ URL::to('tarikdana/' . $content->id) }}"><button type="button" class="btn btn-sm btn-default btn-wide">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop