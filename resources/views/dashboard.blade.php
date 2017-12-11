@extends('layouts.app')
@section('nav','dashboard')
@section('title','Dashboard')

@section('before-content')
	@if(Auth::user()->id_role == 2) <!-- 2 = Role -> Admin -->
	    <!-- begin row -->
	    <div class="row">
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-green">
	                <div class="stats-icon"><i class="fa fa-users"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL USER</h4>
	                    <p>{{ count($user) }}</p>    
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('user') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-blue">
	                <div class="stats-icon"><i class="fa fa-reply-all"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL PINJAMAN</h4>
	                    <p>Rp {{ number_format($pinjaman,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('pinjaman-list') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-purple">
	                <div class="stats-icon"><i class="fa fa-level-up"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL ANGSURAN</h4>
	                    <p>Rp {{ number_format($angsuran,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('angsuran-list') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-red">
	                <div class="stats-icon"><i class="fa fa-folder-open-o"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL SIMPANAN</h4>
	                    <p>Rp {{ number_format($simpanan,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('simpanan-list') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	    </div>
	    <!-- end row -->
	@endif
@stop

@section('content')
	@if(Auth::user()->id_role == 3) <!-- 3 = Role -> User -->
		<h4 class="pantel-title">User</h4>
	@endif

@stop

@section('custom-js')
	<script>
		@if(count($log) == 1 && $firstlogin == true)
			swal({
				title: "Welcome {{ Auth::user()->name }}!",
				text: "Selamat datang di Koperasi Simpan Pinjam",
				icon: "success",
				button: "Getting Started",
			});
		@endif
	</script>
@stop