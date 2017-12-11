@extends('layouts.index')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','angsur') <!-- ID Current Nav -->
@section('title','Daftar Angsuran')

@section('display-btn-add','hide')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jumlah Pinjaman</th>
            <th>Jumlah Tagihan</th>
            <th>Jumlah Angsuran</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <?php
                $total_angsur = DB::table('trs_angsuran')->where('id_pinjaman', $value->id)->sum('jumlah_angsuran');
                $total_tagihan = $value->jumlah_pinjaman * 1.1; // 1.1 = Bunga 10%
            ?>
            <tr>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>Rp {{ number_format($value->jumlah_pinjaman,0,",",".") }}</td>
                <td>Rp {{ number_format($total_tagihan,0,",",".") }}</td>
                <td>Rp {{ number_format($total_angsur,0,",",".") }}</td>
                <td>{{ ($total_angsur != $value->jumlah_pinjaman) ? 'Belum Lunas' : 'Lunas' }}</td>                
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="{{ URL::to('angsur/'.$value->id) }}" class="btn btn-success btn-sm">Angsur</a>
                    </div>
                </td>
            </tr> 
        @endforeach
   </tbody>
@stop