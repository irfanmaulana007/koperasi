@extends('layouts.app')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','angsur') <!-- ID Current Nav -->
@section('title','Daftar Angsuran')


@section('content') 
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-left">
                <a href="{{ URL::to('/angsur/' . $id . '/angsur') }}" class="btn btn-primary m-r-5"><i class="fa fa-plus"></i> Add New</a>
            </div>=
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Angsuran Ke</th>
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
           <tfoot>
               <tr>
                   <th colspan="2">Total Angsuran</th>
                   <th colspan="2">Rp {{ number_format($total_angsuran,0,",",".") }}</th>
               </tr>
           </tfoot>
        </table>
    </div>
    <div class="row">
        <div class="col-xs-6">
            Total Pinjaman = <b>Rp {{ number_format($jumlah_pinjaman->jumlah_pinjaman,0,",",".") }}</b>
        </div>
        <div class="col-xs-6">
            <a href="{{ URL::to('/angsur/') }}" class="btn btn-default pull-right">Back</a>
        </div>
    </div>
@stop