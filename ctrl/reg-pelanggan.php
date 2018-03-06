<?php
require_once('default.php');

if( isset($_GET['gif']) && $_GET['gif']=='pel-baru'  ){
	$sql="SELECT DISTINCT no_ktp,nama,alamat,rt,rw,no_hp,no_spl,cabang,tgl_input FROM pelanggan_daftar WHERE YEAR(tgl_input)=YEAR(now()) AND MONTH(tgl_input)=MONTH(now());";
	$tabel="

	<table>
	<thead>
	<tr>
	<th>#</th>
	<th>ID</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>RT</th>
	<th>RW</th>
	<th>No. HP</th>
	<th>No. SPL</th>
	<th>Cabang</th>
	<th>Tgl</th>
	</tr>
	</thead>

	<tbody>
	";
	$rs=$con->query($sql);
	while($row=$rs->fetch_row()){
		$tabel.="
		<tr>
			<td>#</td>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[6]</td>
			<td>$row[7]</td>
			<td>$row[8]</td>
		</tr>
		";
	}
	$tabel.="
	</tbody>

	</table>
	";
	echo $tabel;
}


if(isset($_POST['tx-id'])){
	$id=$_POST['tx-id'];
	$nama=$_POST['tx-nama'];
	$alamat=$_POST['tx-alamat'];
	$rt=$_POST['tx-rt'];
	$rw=$_POST['tx-rw'];
	$hp=$_POST['tx-hp'];
	$spl=$_POST['tx-spl'];
	$upp=$_POST['opt-upp'];

	//	echo"menympan data pelanggan baru.....".$nama;

	$sql="
	INSERT INTO pelanggan_daftar(
		no_ktp,
		nama,
		alamat,
		rt,
		rw,
		no_hp,
		no_spl,
		cabang
	)VALUES(
		'$id',
		'$nama',
		'$alamat',
		'$rt',
		'$rw',
		'$no_hp',
		'$no_spl',
		'$upp'
	);";

	$rs=$con->query($sql);
	if(!$rs){
		echo "Gagal menambahkan calon pelanggan.";
	}else{
		echo "Berhasil menambahkan calong pelanggan baru..";
	}
}


$con->close();
