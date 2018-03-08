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
    
    <!-- jquery-ui -->
    <script type="text/javascript" src="static/jquery-ui.js"></script>
    <link href="static/jquery-ui.css" rel="stylesheet">

    <!-- jquery-dataTables -->
    <script type="text/javascript" src="static/jquery.dataTables.min.js"></script>
    <link href="static/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/style.css" rel="stylesheet">
<!-- GOOGLE MAP API KEY
 AIzaSyDbKSZYsGryBrvYDGHN55xEOtXpWqE6WIQ
-->
  </head>
<body>
    	<div id="head">
		<ul id="navbar">
			<li><a href="?"><img src="static/icon/home.png" style="width:15px;"/>&nbsp;Home</a></li>
			<li><a href="#">Berkas</a></li>
			<li><a href="#">Proses</a></li>
			<li><a href="#">Laporan</a></li>
			<li><a href="#">Pengaturan</a></li>
			<li><a href="#">Manual</a></li>
			<li style="float:right;"><a href="#">Logout&nbsp;<img style="width:15px;" src="static/icon/logout.png"/></a></li>
		</ul>
	</div>
<div id="floated-div">
	<div id="sidebar">

		<a href="?p=reg-pelanggan" title="Registrasi pelanggan baru" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/registrasi.png"/>
			<br/>
			<small>Registrasi</small>
		</div>
		</a>

		<a href="?p=reg-pelanggan" title="Data Registasi" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-registrasi.png"/>
			<br/>
			<small>Data Registrasi</small>
		</div>
		</a>


		<a href="?p=reg-pelanggan" title="Data Blok" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-blok.png"/>
			<br/>
			<small>Data Blok</small>
		</div>
		</a>

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
			echo"<img src=\"static/icon/background-1.png\" />";
	}
}else{
	echo"<img src=\"static/icon/background-1.png\" />";
}
		?>
	</div><!--content-->
    </div><!-- floated-div -->	
	<div id="footer">
		<hr/>
		 <a href="https://arecastudio.github.io/" target="_blank">Areca Studio</a>&copy;2018. Hak cipta dilindungi Undang-Undang.
	</div>
</body>






<script>
$(document).ready(function(){

});
</script>


</html>
