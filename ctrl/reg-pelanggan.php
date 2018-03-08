<?php
require_once('default.php');

if( isset($_GET['gif']) && $_GET['gif']=='pel-baru'  ){
	$sql="SELECT DISTINCT ID,no_ktp,nama,alamat,rt,rw,no_hp,no_spl,(SELECT u.code FROM upp AS u WHERE u.cabang=pelanggan_reg.cabang LIMIT 1)AS cbg,tgl_input,pos_lat,pos_lon FROM pelanggan_reg WHERE YEAR(tgl_input)=YEAR(now()) AND MONTH(tgl_input)=MONTH(now()) ORDER BY tgl_input DESC;";
	$tabel="";
	$i=0;
	$rs=$con->query($sql);
	while($row=$rs->fetch_row()){
		$i++;
		$tabel.="
		<tr>
			<td style=\"text-align:center\">$i</td>
			<td style=\"text-align:center\"><img class=\"icon-sm\" src=\"static/icon/person.png\" /><br/><small>$row[1]</small></td>
			<td>$row[2]
				<hr/>
				<small><img class=\"icon-xm\" src=\"static/icon/phone.png\" /> $row[6]</small>
			</td>
			<td style=\"text-align:center\">
				$row[3]
				<hr/>
				<small>Lat: $row[10], Lon: $row[11]</small>
			</td>
			<td style=\"text-align:center\">$row[4]</td>
			<td style=\"text-align:center\">$row[5]</td>
			<td style=\"text-align:center\"><small>$row[7]</small></td>
			<td style=\"text-align:center\">$row[8]</td>
			<td style=\"text-align:center\"><small>$row[9]</small></td>
			<td style=\"text-align:center;\">
				<span class=\"btn-del\" id=\"$row[0]\"><img class=\"icon-sm\" title=\"Hapus calon pelanggan ini.\" src=\"static/icon/sampah.png\" /></span>
			</td>
		</tr>
		";
	}
	echo $tabel;
}


if(isset($_POST['tx-id'])){
	$sid=$_POST['tx-id'];
	$nama=$_POST['tx-nama'];
	$alamat=$_POST['tx-alamat'];
	$rt=$_POST['tx-rt'];
	$rw=$_POST['tx-rw'];
	$hp=$_POST['tx-hp'];
	$spl=$_POST['tx-spl'];
	$upp=$_POST['opt-upp'];
	$lat=$_POST['tx-pos-lat'];
	$lon=$_POST['tx-pos-lon'];

	//	echo"menympan data pelanggan baru.....".$nama;

	$sql="
	INSERT INTO pelanggan_reg(
		no_ktp,
		nama,
		alamat,
		rt,
		rw,
		no_hp,
		no_spl,
		cabang,
		pos_lat,
		pos_lon
	)VALUES(
		'$sid',
		'$nama',
		'$alamat',
		'$rt',
		'$rw',
		'$hp',
		'$spl',
		'$upp',
		'$lat',
		'$lon'
	);";

	$rs=$con->query($sql);
	if($rs){
		echo "Berhasil menambahkan calon pelanggan baru.";
	}else{
		echo "Gagal menambahkan calon pelanggan.";
	}
}


if(isset($_POST['id_hapus']) && $_POST['id_hapus']!=''){
	$sql="DELETE FROM pelanggan_reg WHERE id=".$_POST['id_hapus'].";";
	$rs=$con->query($sql);
	if(!$rs){
		echo "Gagal menghapus data.";
	}else{
		echo "Berhasil menghapus data.";
	}
}

$con->close();
