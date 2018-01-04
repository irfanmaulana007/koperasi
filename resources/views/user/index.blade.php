@extends('layouts.index')

@section('link-add','user/create') <!-- URL Create -->
@section('nav','user') <!-- ID Current Nav -->
@section('subnav','user-list') <!-- ID Current Subnav -->
@section('title','User List')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>No</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Total Pinjaman</th>
            <th>Simpanan</th>
            <th>Status</th>
            <th>Member Since</th>
            <th class="no-sort hidden-print hidden-pdf">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <?php 
                $total_pinjaman = DB::table('trs_pinjaman')->where('id_user', $value->id)->sum('jumlah_pinjaman');
                $total_simpanan = DB::table('trs_simpanan')->where('id_user', $value->id)->sum('jumlah_simpanan');
            ?>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>Rp {{ number_format($total_pinjaman,0,',','.') }}</td>
                <td>Rp {{ number_format($total_simpanan,0,',','.') }}</td>
                <td>{{ $value->status_name }}</td>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td class="hidden-print">
                    <div class="pull-left">
                        <a>
                            {{ Form::open(['method' => 'POSt','class' => 'form-horizontal', 'url' => ['user/activate', $value->id]]) }}
                                {{ csrf_field() }}
                                <button class="btn btn-success btn-sm m-r-5 m-b-5">
                                    Activate
                                </button>
                           {{ Form::close() }}
                        </a>
                    </div>
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a class="text-center" href="{{ URL::to('user/'.$value->id.'/edit') }}">Edit</a>
                            </li>
                            <li>
                                <a>
                                    {{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'delete')) }}
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