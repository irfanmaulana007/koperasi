@extends('layouts.app')
@section('nav','dashboard')
@section('title','Dashboard')

@section('content')
    @section('content')
        <h4 class="panel-title">News and Promo</h4>

		@if(isset($newuser) && $user == true)
	        <h1>Welcome !</h1>
		@endif
    @stop
	
@stop