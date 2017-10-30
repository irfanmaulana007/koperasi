@section('current-tab','history-shipment-all')
<!-- Section Table -->
<thead>
	<tr>
	    <th>Shipment All</th>
	    <th>Browser</th>
	    <th>Platform(s)</th>
	    <th>Engine version</th>
	    <th>CSS grade</th>
	</tr>
</thead>

<tbody>
	<!-- begin foreach -->
    <tr class="odd gradeX">
        <td>Trident</td>
        <td>Internet Explorer 4.0</td>
        <td>Win 95+</td>
        <td>4</td>
        <td>X</td>
    </tr>
	<!-- begin foreach -->
</tbody>
<!-- End Section Table -->

<script>
    $(".tab-items").removeClass("active");
    $("#@yield('current-tab')").addClass("active");

    loading_height();
</script>