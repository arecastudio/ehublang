<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="static/favicon.ico">

    <title>E-Hublang - PDAM Jayapura</title>
    <script type="text/javascript" src="static/jquery.js"></script>

    <!-- Custom styles for this template -->
    <link href="static/style.css" rel="stylesheet">
  </head>
<body>
    	<div id="head">
		<ul id="navbar">
			<li><a href="?">Home</a></li>
			<li><a href="#">Berkas</a></li>
			<li><a href="#">Proses</a></li>
			<li><a href="#">Laporan</a></li>
			<li><a href="#">Pengaturan</a></li>
			<li><a href="#">Manual</a></li>
			<li style="float:right;"><a href="#">Logout</a></li>
		</ul>
	</div>

	<div id="sidebar">
<ul>
<li>1</li>
<li>1</li>
<li>1</li>
<li>1</li>
<li>1</li>
</ul>	
	</div>

    	<div id="content">
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






<script>
$(document).ready(function(){

});
</script>


</html>
