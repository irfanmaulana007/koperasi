function general_script(){
	// Auto hide alert on 5 second
	$(function() {
	    setTimeout(function() {
	        $(".alert").fadeOut(500)
	    }, 5000);
	});

	// Action for Print content
	$("#btn-print").click(function(){
		window.print();
	});

	// Action for save table into pdf
	$("#btn-savepdf").click(function(){
		var doc = new jsPDF();

		var tbl = $('table').clone();
		tbl.find('tr th.hidden-pdf, tr td.hidden-pdf').remove();
		
	    var res = doc.autoTableHtmlToJson(tbl.get(0));
	    doc.autoTable(res.columns, res.data, {
    		theme: 'grid',
	        styles: {fontSize: 9},
	        margin: {top: 55},
	    });

	    doc.save('sample.pdf');
	});

	// Valiadtion for submit form
	$("form").submit(function(){
		$("button").attr("type","button");
	});
}

// Overlay for component eye-catching
function overlay(id){
    $("#overlay").show();
    $("#"+id).addClass("overlay-active");
    $("html").click(function(){
        $("#overlay").hide();
        $("#"+id).removeClass("overlay-active");
    })
}