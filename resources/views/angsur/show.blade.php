@extends('layouts.app')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','angsur') <!-- ID Current Nav -->
@section('title','Daftar Angsuran')


@section('content') 
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-left">
                <a href="{{ URL::to('/angsur/' . $id . '/angsur') }}" class="btn btn-primary m-r-5"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="pull-right">
                <button type="button" id="btn-print" class="btn btn-success m-r-5 m-b-5"><i class="fa fa-print"></i> Print</button>
                <button type="button" id="btn-savepdf" class="btn btn-success m-r-5 m-b-5"><i class="fa fa-save"></i> Save to PDF</button>
            </div>
        </div>            
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Cicilan Ke</th>
                    <th>Tanggal</th>
                    <th>Jumlah Angsuran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $key => $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                        <td>Rp {{ number_format($value->jumlah_angsuran,0,",",".") }}</td>
                        <td>{{ $value->status_name }}</td>
                    </tr> 
                @endforeach
           </tbody>
        </table>
        <br><br>
    </div>
@stop