  1 <!DOCTYPE html>
  2 <html>
  3 <head>
  4  <title>Membuat CRUD dengan W2UI dan MySQLi</title>
  5 
  6     <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.5.rc1.min.css" />
  7     
  8     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  9     <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.5.rc1.min.js"></script>
 10 </head>

  <body>



<div class="content">
<h4>
Registrasi Pelanggan Baru
</h4>
<hr/>


<div id="form" style="height: 480px">
	<div class="w2ui-page page-0">
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Text:</label>
			<div>
				<input name="field_text" type="text" maxlength="100" style="width: 250px !important;">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Text (alpha-numeric):</label>
			<div>
				<input name="field_alpha" type="text" maxlength="100" style="width: 250px !important;">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Number (int):</label>
			<div>
				<input name="field_int" type="text" maxlength="100" style="width: 150px">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Number (float):</label>
			<div>
				<input name="field_float" type="text" maxlength="100" style="width: 150px">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Date:</label>
			<div>
				<input name="field_date" type="text" maxlength="100" style="width: 90px">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>List:</label>
			<div>
				<input name="field_list" type="text" maxlength="100" style="width: 300px !important">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Multi Select:</label>
			<div>
				<input name="field_enum" type="text" maxlength="100"  style="width: 300px !important;">
			</div>
		</div>
		<div class="w2ui-field w2ui-span8" style="clear: both">
			<label>Text Area:</label>
			<div>
				<textarea name="field_textarea" type="text" style="width: 450px; height: 80px; resize: none"/></textarea>
			</div>
		</div>
	</div>

	<div class="w2ui-buttons">
		<button class="btn" name="reset">Reset</button>
		<button class="btn" name="save">Save</button>
	</div>
</div>
<?php

if(isset($_GET['p']) && $_GET['p']!=''){
	switch($_GET['p']){
		case 'reg-pelanggan':
			require_once('view/reg-pelanggan.html');
			break;
		case 'info-pelanggan':
			require_once('view/info-pelanggan.html');
			//echo "halaman info pelanggan";
			break;
		case 'cetak-pelanggan':
			require_once('view/cetak-pelanggan.html');
			break;
		default:
			echo"Welcome.";
	}
}

?>
</div><!--content-->

  <div id="footer"></div>
  </body>
</html>
