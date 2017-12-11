@extends('layouts.app')

@section('nav','master') <!-- ID Current Nav -->
@section('subnav','master-status') <!-- ID Current Subnav -->

@section('content') 
    {{-- {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'route' => ['angsur.doAngsur', $content->id]]) }} --}}
    {{ Form::open(array('url' => 'angsur/' . $content->id . '/angsur', 'class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Tanggal Pembayaran</label>
                <div class="col-md-6">
                    <input type="text" name="tanggal" class="form-control" id="datepicker-autoClose" placeholder="Tanggal Pembayaran" required />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Jumlah Pinjaman</label>
                <div class="col-md-6">
                     <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input type="text" name="jumlah" class="form-control" value="{{ $content->jumlah_angsuran }}" readonly />
                    </div>
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">Submit</button>
                <a href="{{ URL::to('angsur/' . $content->id) }}"><button type="button" class="btn btn-sm btn-default btn-wide">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop

@section('custom-js')
    <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/form-plugins.demo.js')}}"></script>

    <script>
        FormPlugins.init();
    </script>
@stop