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
            <th>Simpanan</th>
            <th>Status</th>
            <th>Member Since</th>
            <th class="no-sort hidden-print hidden-pdf">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td>Rp {{ number_format($value->simpanan,0,',','.') }}</td>
                <td>{{ $value->id_status }}</td>
                <td>{{ date('d M Y', strtotime($value->created_at)) }}</td>
                <td class="hidden-print">
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