@extends('layouts.index')

@section('link-add','role/create') <!-- URL Create -->
@section('nav','master') <!-- ID Current Nav -->
@section('subnav','master-role') <!-- ID Current Subnav -->
@section('title','Master Role')

@section('table-content')  <!-- Table Content - thead, tbody, tfoot -->
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Role</th>
            <th class="no-sort hidden-print hidden-pdf">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($content as $key => $value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->role_name }}</td>
                <td class="hidden-print">
                    <div class="btn-group m-r-5 m-b-5">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-success btn-sm dropdown-toggle">
                            Action <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-action pull-right">
                            <li>
                                <a class="text-center" href="{{ URL::to('master/role/'.$value->id.'/edit') }}">Edit</a>
                            </li>
                            <li>
                                <a>
                                    {{ Form::open(array('url' => 'master/role/' . $value->id, 'class' => 'delete')) }}
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