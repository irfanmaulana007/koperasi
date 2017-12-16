@extends('layouts.app')

@section('link-add','tarikdana/create') <!-- URL Create -->
@section('nav','tarikdana') <!-- ID Current Nav -->
@section('title','Daftar Tarik Dana')


@section('content') 
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-left">
                <a href="{{ URL::to('/tarikdana/' . $id . '/tarik') }}" class="btn btn-primary m-r-5"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Tarikan Ke</th>
                    <th>Tanggal</th>
                    <th>Jumlah Tarik Dana</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $key => $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                        <td>Rp {{ number_format($value->jumlah_tarikdana,0,",",".") }}</td>
                        <td>{{ $value->status_name }}</td>
                    </tr> 
                @endforeach
           </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-xs-6">
            Total Simpanan = <b>Rp {{ number_format($jumlah_simpanan->jumlah_simpanan,0,",",".") }}</b>
        </div>
        <div class="col-xs-6">
            <a href="{{ URL::to('/tarikdana/') }}" class="btn btn-default pull-right">Back</a>
        </div>
    </div>
@stop