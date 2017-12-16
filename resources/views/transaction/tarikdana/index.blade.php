@extends('layouts.index')

@section('nav','transaction') <!-- ID Current Nav -->
@section('subnav','tarikdana-list') <!-- ID Current Subnav -->
@section('title','Daftar Tarik Dana')

@section('display-btn-add','hide')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama User</th>
            <th>Keterangan Simpanan</th>
            <th>Jumlah Tarikan</th>
            <th>Status</th>
            <th class="no-sort hidden-print hidden-pdf">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->keterangan }}</td>
                <td>Rp {{ number_format($value->jumlah_tarikdana,0,",",".") }}</td>
                <td>{{ $value->status_name }}</td>
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle {{ ($value->id_status == 4) ? 'disabled' : '' }}">
                            {{ ($value->id_status == 4) ? 'Approved' : 'Change Status' }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a>
                                    {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'url' => ['tarikdana/'. $value->id .'/approve']]) }}
                                        {{ csrf_field() }}
                                        {{ Form::submit('Approve', ['style'=>'padding: 0;border: none; background: none; width: 100%;']) }}
                                    {{ Form::close() }} 
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a>
                                    {{ Form::open(array('url' => 'tarikdana/' . $value->id, 'class' => 'delete')) }}
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