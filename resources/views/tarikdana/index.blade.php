@extends('layouts.index')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','tarikdana') <!-- ID Current Nav -->
@section('title','Daftar Tarik Dana')

@section('display-btn-add','hide')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jumlah Simpanan</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
        <?php
            $tarikan = DB::table('trs_tarikdana')->where('id_simpanan', $value->id)->where('id_status', 4)->sum('jumlah_tarikdana');
            $sisasimpanan = $value->jumlah_simpanan - $tarikan;
        ?>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>Rp {{ number_format($sisasimpanan,0,",",".") }}</td>
                <td>{{ $value->keterangan }}</td>
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="{{ URL::to('tarikdana/'.$value->id) }}" class="btn btn-success btn-sm">Tarik Dana</a>
                    </div>
                </td>
            </tr> 
        @endforeach
   </tbody>
@stop