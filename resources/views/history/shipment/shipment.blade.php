@extends('layout.crud')
@section('nav','history')
@section('subnav','history_shipment')
@section('title','Shipment')
@section('subtitle','395 Shipments')

<!-- Section Table Nav-tab -->
@section('table-tab')   
    <li id="history_shipment_all" class="tab-items"><a>All</a></li>
    <li id="history_shipment_pickuponly" class="tab-items"><a>Pickup Only</a></li>
    <li id="list3" class="tab-items"><a>Send Dokumen</a></li>
    <li id="list4" class="tab-items"><a>Return Item</a></li>
@stop
<!-- End Section Table Nav-tab -->

@section('table-content')
     <table id="data-table" class="table table-striped table-bordered">
         
        <div id="table-loading" style="position: absolute; background-color: rgba(255, 255, 255, .5); display: none;">
            <span class="spinner" style="top: 50%"></span>
        </div>
     </table>
@stop

@section('custom-js')
    <script src="plugins/DataTables/js/jquery.dataTables.js"></script>
    <script src="js/table-manage-default.demo.js"></script>
    <script>
        $(document).ready(function(){
            TableManageDefault.init();
            
            var table_height = $(".table-responsive").height();
            var table_width = $(".table-responsive").width();
            $("#table-loading").css("height", table_height);
            $("#table-loading").css("width", table_width);
        });

        reload_data();
        function reload_data() {
            $("#data-table").load("{{ URL::to('history_shipment_all') }}");
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