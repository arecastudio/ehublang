$(document).ready(function(){
	$( ".tanggal" ).datepicker({ altFormat: 'yy-mm-dd' });
	$( ".tanggal" ).change(function() {
		$( ".tanggal" ).datepicker( "option", "dateFormat","yy-mm-dd" );
	});
});
