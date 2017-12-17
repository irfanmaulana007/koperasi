@extends('layouts.index')

@section('link-add','simpan/create') <!-- URL Create -->
@section('nav','simpan') <!-- ID Current Nav -->
@section('title','Daftar Simpanan')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jumlah Simpanan Awal</th>
            <th>Jumlah Sisa Simpanan</th>
            <th>Keterangan</th>
            <th>Status</th>
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
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>Rp {{ number_format($value->jumlah_simpanan,0,",",".") }}</td>
                <td>Rp {{ number_format($sisasimpanan,0,",",".") }}</td>
                <td>{{ $value->keterangan }}</td>
                <td>{{ $value->status_name }}</td>                
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="{{ URL::to('tarikdana/'.$value->id) }}" class="btn btn-success btn-sm">
                            Tarik Dana
                        </a>
                    </div>
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle {{ ($value->id_status == 4) ? 'disabled' : '' }}">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a class="text-center" href="{{ URL::to('simpan/'.$value->id.'/edit') }}">Edit</a>
                            </li>
                            <li>
                                <a>
                                    {{ Form::open(array('url' => 'simpan/' . $value->id, 'class' => 'delete')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['style'=>'padding: 0;border: none; background: none; width: 100%;']) }}
                                    {{ Form::close() }} 
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr> 
        @endforeach
   </tbody>
@stop