@extends('layouts.index')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','angsur') <!-- ID Current Nav -->
@section('title','Daftar Angsuran')

@section('display-btn-add','hide')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
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
                $total_angsur = DB::table('trs_angsuran')->where('id_pinjaman', $value->id)->where('id_status',4)->sum('jumlah_angsuran');
                $sukubunga = DB::table('ms_sukubunga')->where('id', $value->id_sukubunga)->first();
                $jangka_waktu = $sukubunga->jangka_waktu;
                $bunga = $sukubunga->suku_bunga;
                $total_tagihan = $value->jumlah_pinjaman + ($value->jumlah_pinjaman * ($bunga / 100) * $jangka_waktu);
            ?>
            <tr class="{{ ($total_angsur == $total_tagihan) ? 'text-success' : '' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>{{ $value->keterangan }}</td>
                <td>Rp {{ number_format($value->jumlah_pinjaman,0,",",".") }}</td>
                <td>Rp {{ number_format($total_tagihan,0,",",".") }}</td>
                <td>Rp {{ number_format($total_angsur,0,",",".") }}</td>
                <td>{{ ($total_angsur != $total_tagihan) ? 'Belum Lunas' : 'Lunas' }}</td>
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="{{ URL::to('angsur/'.$value->id) }}"><button class="btn btn-success btn-sm" {{ ($total_angsur == $total_tagihan) ? 'disabled' : '' }} >Angsur</button></a>
                    </div>
                </td>
            </tr> 
        @endforeach
   </tbody>
@stop