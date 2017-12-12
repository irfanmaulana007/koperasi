@extends('layouts.app')

@section('nav','pinjam') <!-- ID Current Nav -->

@section('content') 
    @if(isset($content->id))
        {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'route' => ['pinjam.update', $content->id]]) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />
    @else
        {{ Form::open(array('url' => 'pinjam','class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
    @endif

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Jumlah Pinjaman</label>
                <div class="col-md-6">
                     <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input type="text" name="jumlah" class="form-control" value="{{ $content->jumlah_pinjaman }}" placeholder="Ex: 250000" required autocomplete="off" autofocus data-parsley-type="digits"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Keterangan</label>
                <div class="col-md-6">
                    <input type="text" name="keterangan" class="form-control" value="{{ $content->keterangan }}" placeholder="Ex: pinjaman modal" required autocomplete="off"/>
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">Submit</button>
                <a href="{{ URL::to('pinjam') }}"><button type="button" class="btn btn-sm btn-default btn-wide">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop