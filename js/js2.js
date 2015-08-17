// JavaScript Document
$(document).ready(function( ) {


	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			defaultDate: d

		});

});

	$(function() {
		$( "#datepicker1" ).datepicker({
			changeMonth: true,
			changeYear: true,
			//defaultDate: d

		});

});


$("#newTime").hide();



$('#timeChange').click(function() {
    if( $(this).is(':checked')) {
        $("#newTime").show();
		//$(".existingH").hide();

    } else {
        $("#newTime").hide();
		//$(".existingH").show();

    }
}); 

 
}); // end of ready()