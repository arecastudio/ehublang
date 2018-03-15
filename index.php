<?php
require_once('ctrl/Connection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="static/icon/favicon.png">

    <title>E-Customer - PDAM Jayapura</title>

    <script type="text/javascript" src="static/jquery.js"></script>
<!-- jquery harus ditaruh paling atas sebelum file turunannya agar dapat bekerja ketika halaman diload. -->
    <script type="text/javascript" src="static/default.js"></script>
    <script type="text/javascript" src="static/jquery.table2excel.js"></script>
    

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
<?php
if(isset($_SESSION['user_session_id']) && $_SESSION['user_session_id']!=''){
?>
    	<div id="head">
		<ul id="navbar">
			<li><a href="?"><img src="static/icon/home.png" style="width:15px;"/>&nbsp;Home</a></li>
			<li><a href="#">Berkas</a></li>
			<li><a href="#">Proses</a></li>
			<li><a href="#">Laporan</a></li>
			<li><a href="#">Pengaturan</a></li>
			<li><a href="#">Manual</a></li>
			<li style="float:right;"><a href="#" id="logout">Logout&nbsp;<img style="width:15px;" src="static/icon/logout.png"/></a></li>
		</ul>
	</div>
	<?php }?>
<div id="floated-div">

<?php
if(isset($_SESSION['user_session_id']) && $_SESSION['user_session_id']!=''){
?>
	<div id="sidebar">

		<a href="?p=reg-pelanggan" title="Registrasi pelanggan baru" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/registrasi.png"/>
			<br/>
			<small>Registrasi</small>
		</div>
		</a>

		<a href="?p=data-survey" title="Data Survey" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-registrasi.png"/>
			<br/>
			<small>Data Survey</small>
		</div>
		</a>


		<a href="?p=data-blok" title="Data Blok" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-blok.png"/>
			<br/>
			<small>Data Blok</small>
		</div>
		</a>

	</div>
<?php
}
?>
    	<div id="content">
		<?php

if(isset($_SESSION['user_session_id']) && $_SESSION['user_session_id']!=''){

	if(isset($_GET['p']) && $_GET['p']!=''){
		switch($_GET['p']){
			case 'reg-pelanggan':
				require_once('view/reg-pelanggan.html');
				break;
			case 'info-pelanggan':
				require_once('view/info-pelanggan.html');
				//echo "halaman info pelanggan";
				break;
			case 'data-survey':
				require_once('view/data-survey.html');
				break;
			case 'cetak-pelanggan':
				require_once('view/cetak-pelanggan.html');
				break;
			case 'data-blok':
				require_once('view/data-blok.html');
				break;
			case 'login':
				//require_once('view/login.html');
				break;
			default:
				echo"<img src=\"static/icon/background-1.png\" />";
		}
	}else{
		echo"<img src=\"static/icon/background-1.png\" />";
	}
}else{
	require_once('view/login.html');
}
		?>
	</div><!--content-->
    </div><!-- floated-div -->	
	<div id="footer">
		<hr/>
		 <a href="https://arecastudio.github.io/" target="_blank">Areca Studio</a>&copy;2018. Hak cipta dilindungi Undang-Undang.
	</div>
</body>






<script type="text/javascript">
$(document).ready(function(){
	$('#logout').click(function(e){
		$.ajax({
			type:'POST',
			data:{'logout':1},
			url:'ctrl/auth.php',
			success:function(e){
				window.location.href='?';
			}
		});
	});
});
</script>


</html>
<script type="text/javascript" src="static/main.js"></script>
