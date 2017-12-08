@extends('layouts.app')

@section('nav','user') <!-- ID Current Nav -->
@section('subnav','user-list') <!-- ID Current Subnav -->

@section('content') 
    @if(isset($content->id))
        {{ Form::open(['method' => 'PUT','class' => 'form-horizontal', 'data-parsley-validate' => 'true' , 'route' => ['user.update', $content->id]]) }}
        <input type="hidden" id="id" name="id" value="{{ $content->id }}" required />
    @else
        {{ Form::open(array('url' => 'user','class' => 'form-horizontal', 'data-parsley-validate' => 'true')) }}
    @endif

        {{ csrf_field() }}
        <div id="form-content">
            <div class="form-group">
                <label class="col-md-3 control-label">Role</label>
                <div class="col-md-6">
                    <select name="role" class="form-control" required autofocus>
                        <option value="0" disabled selected>- Select Role -</option>
                        @foreach($role as $key => $value)
                            <option value="{{ $value->id }}" {{ ($value->id == $content->id_role) ? 'selected' : ''}}>{{ $value->role_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Status</label>
                <div class="col-md-6">
                    <select name="status" class="form-control" required>
                        <option value="0" disabled selected>- Select Status -</option>
                        @foreach($status as $key => $value)
                            <option value="{{ $value->id }}" {{ ($value->id == $content->id_status) ? 'selected' : ''}}>{{ $value->status_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Full Name</label>
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" value="{{ $content->name }}" placeholder="ex: John" required autocomplete="off" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" value="{{ $content->email }}" placeholder="ex: john@email.com" required autocomplete="off" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Phone Number</label>
                <div class="col-md-6">
                    <input type="text" name="phone" class="form-control" value="{{ $content->phone }}" placeholder="ex: 081234567891" required autocomplete="off" data-parsley-type="digits" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Simpanan</label>
                <div class="col-md-6">
                    <input type="text" name="simpanan" class="form-control" value="{{ $content->simpanan }}" placeholder="ex: 10000" required autocomplete="off" data-parsley-type="digits" />
                </div>
            </div>
        </div>
            
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success btn-wide">{{ (isset($content->id)) ? 'Update' : 'Add' }}</button>
                <a href="{{ URL::to('user') }}"><button type="button" class="btn btn-sm btn-default btn-wide" href="{{ URL::to('user') }}">Cancel</button></a>
            </div>
        </div>
   {{ Form::close() }}

@stop