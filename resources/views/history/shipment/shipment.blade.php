@extends('layout.crud')
@section('nav','history')
@section('subnav','history_shipment')
@section('title','Shipment')
@section('subtitle','395 Shipments')

<!-- Section Table Nav-tab -->
@section('table-tab')   
    <li id="history-shipment-all" class="tab-items"><a>All</a></li>
    <li id="history-shipment-pickuponly" class="tab-items"><a>Pickup Only</a></li>
    <li id="list3" class="tab-items"><a>Send Dokumen</a></li>
    <li id="list4" class="tab-items"><a>Return Item</a></li>
@stop
<!-- End Section Table Nav-tab -->

<!-- Section Modal -->
@section('btn-add-display', 'hide')
<!-- End Section Modal -->

@section('table-content')
     <table id="data-table" class="table table-striped table-bordered"></table>
@stop

@section('custom-js')
    <script src="plugins/DataTables/js/jquery.dataTables.js"></script>
    <script src="js/table-manage-default.demo.js"></script>
    <script>
        $(document).ready(function(){
            TableManageDefault.init();

            var table_height = $("#body-content").height();
            var table_width = $("#body-content").width();
            $("#table-loading").css("height", table_height);
            $("#table-loading").css("width", table_width);
        });

        reload_data();
        function reload_data() {
            $("#data-table").load("{{ URL::to('history-shipment-all') }}");
            $("#table-loading").hide();
        }

        // Ajax load table tab
        $(".tab-items").click(function(){
            var url = $(this).attr("id");

            $.ajax({
                url: url,
                beforeSend: function () {
                    $("#table-loading").show();
                },
                success: function (message) {
                    $("#table-loading").hide();
                    $("#data-table").html(message);
                }
            });
        });
        // end ajax load table tab
    </script>
@stop