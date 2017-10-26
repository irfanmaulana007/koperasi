@extends('layout.app')
@section('nav','feature')
@section('subnav','invoice')

@section('content')
	@section('custom-css')
		<link href="plugins/DataTables/css/data-table.css" rel="stylesheet" />
	@stop

    @section('content')
    	<h1 class="page-header hidden-print">Invoice <small>header small text goes here...</small></h1>
		<!-- end page-header -->
		
		<!-- begin invoice -->
		<div class="invoice">
            <div class="invoice-company">
                <span class="pull-right hidden-print">
                <a href="javascript:;" class="btn btn-sm btn-success m-b-10"><i class="fa fa-download m-r-5"></i> Export as PDF</a>
                <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
                </span>
                Pickpack
            </div>
            <div class="invoice-header">
                <div class="invoice-from">
                    <small>from</small>
                    <address class="m-t-5 m-b-5">
                        <strong>Irfan Maulana</strong><br />
                        Jalan Dukuh pinggir 1 RT 02/05 no.15 Jakarta pusat kec.tanah abang kel.kebon melati<br />
                        DKI Jakarta, 10230<br />
                        Phone: 087880987453<br />
                    </address>
                </div>
                <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                        <strong>Aulia Annas</strong><br />
                        Jalan Dukuh pinggir 1 RT 02/05 no.15 Jakarta pusat kec.tanah abang kel.kebon melati<br />
                        Bandung, 10980<br />
                        Phone: 087880987453<br />
                    </address>
                </div>
                <div class="invoice-date">
                    <small>Invoice / July period</small>
                    <div class="date m-t-5">August 3,2012</div>
                    <div class="invoice-detail">
                        SHM1710250002<br />
                    </div>
                </div>
            </div>
            <div class="invoice-content">
                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Detail</th>
                                <th>Cost</th>
                                {{-- <th>LINE TOTAL</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Shipping<br />
                                    <small>Jakarta to Bandung 1kg.</small>
                                </td>
                                <td>Daytrans</td>
                                <td>Rp 10.000</td>
                                {{-- <td>$2,500.00</td> --}}
                            </tr>
                            <tr>
                                <td>
                                    Insurance<br />
                                    <small>Without Insurance.</small>
                                </td>
                                <td>No</td>
                                <td>Rp 0</td>
                                {{-- <td>$2,000.00</td> --}}
                            </tr>
                            <tr>
                                <td>
                                    Packing<br />
                                    <small>Buble wrap packing.</small>
                                </td>
                                <td>Large</td>
                                <td>Rp 10.000</td>
                                {{-- <td>$2,500.00</td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="invoice-price">
                    <div class="invoice-price-left">
                        <div class="invoice-price-row">
                            <div class="sub-price">
                                <small>SUBTOTAL</small>
                                Rp 20.000
                            </div>
                            <div class="sub-price">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="sub-price">
                                <small>PAYPAL FEE (5.4%)</small>
                                $108.00
                            </div>
                        </div>
                    </div>
                    <div class="invoice-price-right">
                        <small>TOTAL</small> Rp 20.000
                    </div>
                </div>
            </div>
            <div class="invoice-note">
                * Make all cheques payable to PickPack<br />
                * Payment is due within 30 days<br />
                * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
            </div>
            <div class="invoice-footer text-muted">
                <p class="text-center m-b-5">
                    THANK YOU FOR YOUR BUSINESS
                </p>
                <p class="text-center">
                    <span class="m-r-10"><a href="http://www.pickpack.id" target="_blank"><i class="fa fa-globe"></i> pickpack.id</a></span>
                    <span class="m-r-10"><i class="fa fa-phone"></i> T:016-18192302</span>
                    <span class="m-r-10"><i class="fa fa-envelope"></i> rtiemps@gmail.com</span>
                </p>
            </div>
        </div>
		<!-- end invoice -->
    @stop
	
	@section('custom-js')
		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
		<script src="plugins/DataTables/js/jquery.dataTables.js"></script>
		<script src="js/table-manage-default.demo.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->

		<script>			
			TableManageDefault.init();
		</script>
	@stop
@stop