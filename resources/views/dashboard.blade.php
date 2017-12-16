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
	                    <p>Rp {{ number_format($pinjaman,0,",",".")}}</p>   
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
	                    <p>Rp {{ number_format($simpanan - $tarikdana,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('simpanan-list') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	    </div>
	    <!-- end row -->
	@else
	 <!-- begin row -->
	    <div class="row">
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-green">
	                <div class="stats-icon"><i class="fa fa-users"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL SIMPANAN</h4>
	                    <p>Rp {{ number_format($simpananuser - $tarikdanauser,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('simpan') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-blue">
	                <div class="stats-icon"><i class="fa fa-reply-all"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL TARIK DANA</h4>
	                    <p>Rp {{ number_format($tarikdanauser,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('tarikdana') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-purple">
	                <div class="stats-icon"><i class="fa fa-level-up"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL PINJAMAN</h4>
	                    <p>Rp {{ ($pinjamanuser - $angsuranuser >= 0) ? number_format($pinjamanuser - $angsuranuser,0,",",".") : 0 }}</p>
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('pinjaman') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <!-- end col-3 -->
	        <!-- begin col-3 -->
	        <div class="col-md-3 col-sm-6">
	            <div class="widget widget-stats bg-red">
	                <div class="stats-icon"><i class="fa fa-folder-open-o"></i></div>
	                <div class="stats-info">
	                    <h4>TOTAL ANGSURAN</h4>
	                    <p>Rp {{ number_format($angsuranuser,0,",",".") }}</p>   
	                </div>
	                <div class="stats-link">
	                    <a href="{{ URL::to('angsuran') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
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
		
	@endif

	<div class="row">
		<div class="col-sm-6 p-t-10 p-b-10">
			<h5 class="text-center m-b-20"><b>Perhitungan Cicilan per Bulan</b></h5>
			<h6 class="text-center">Harga barang + (harga barang x bunga x jangka waktu)</h6>
			<hr class="m-t-5 m-b-5" style="border-top-color: #ddd;">
			<h6 class="text-center">Jangka Waktu</h6>
		</div>
		<div class="col-sm-6 p-t-10 p-b-10">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Jangka Waktu</th>
						<th>Bunga</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sukubunga as $key => $value)
						<tr>
							<td>{{ $value->jangka_waktu }}</td>
							<td>{{ $value->suku_bunga }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

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