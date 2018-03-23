<?php
if(isset($_GET['berkas'])){
?>

		<a href="?berkas=reg-pelanggan" title="Registrasi pelanggan baru" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/registrasi.png"/>
			<br/>
			<small>Registrasi</small>
		</div>
		</a>


		<a href="?berkas=data-blok" title="Data Blok" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-blok.png"/>
			<br/>
			<small>Data Blok</small>
		</div>
		</a>
<?php
}elseif(isset($_GET['proses'])){
?>


		<a href="?proses=data-verify" title="Verifikasi Registrasi" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/verify.png"/>
			<br/>
			<small>Verifikasi</small>
		</div>
		</a>

		<a href="?proses=data-survey" title="Data Survey" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/data-registrasi.png"/>
			<br/>
			<small>Survey</small>
		</div>
		</a>

		<a href="?proses=invoice" title="Tagihan" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/invoice.png"/>
			<br/>
			<small>Tagihan</small>
		</div>
		</a>

<?php
}elseif(isset($_GET['laporan'])){
?>

		<a href="?laporan=progress" title="Progress Pekerjaan" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/progress.png"/>
			<br/>
			<small>Progress</small>
		</div>
		</a>
<?php
}elseif(isset($_GET['setting'])){
?>

		<a href="?setting=users" title="Progress Pekerjaan" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/users.png"/>
			<br/>
			<small>User</small>
		</div>
		</a>
<?php
}else{
?>

		<a href="?p=info" title="Informasi Aplikasi" class="sub-side-menu">
		<div class="menu-md">

			<img class="icon-md" id="ic-reg" src="static/icon/info.png"/>
			<br/>
			<small>Info</small>
		</div>
		</a>
<?php
}
?>
