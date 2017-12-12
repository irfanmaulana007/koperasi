@extends('layouts.index')

@section('link-add','pinjam/create') <!-- URL Create -->
@section('nav','pinjam') <!-- ID Current Nav -->
@section('title','Daftar Pinjaman')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jumlah Pinjaman</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <tr>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>Rp {{ number_format($value->jumlah_pinjaman,0,",",".") }}</td>
                <td>{{ $value->keterangan }}</td>
                <td>{{ $value->status_name }}</td>                
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle {{ ($value->id_status == 4) ? 'disabled' : '' }}">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a class="text-center" href="{{ URL::to('pinjam/'.$value->id.'/edit') }}">Edit</a>
                            </li>
                            <li>
                                <a>
                                    {{ Form::open(array('url' => 'pinjam/' . $value->id, 'class' => 'delete')) }}
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