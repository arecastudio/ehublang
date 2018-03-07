<?php
require_once('default.php');

if( isset($_GET['gif']) && $_GET['gif']=='pel-baru'  ){
	$sql="SELECT DISTINCT ID,no_ktp,nama,alamat,rt,rw,no_hp,no_spl,cabang,tgl_input FROM pelanggan_reg WHERE YEAR(tgl_input)=YEAR(now()) AND MONTH(tgl_input)=MONTH(now()) ORDER BY tgl_input DESC;";
	$tabel="";
	$i=0;
	$rs=$con->query($sql);
	while($row=$rs->fetch_row()){
		$i++;
		$tabel.="
		<tr>
			<td style=\"text-align:center\">$i</td>
			<td style=\"text-align:center\"><small>$row[1]</small></td>
			<td>$row[2]<hr/>
			<small>$row[3]</small>
			</td>
			<td style=\"text-align:center\">$row[4]</td>
			<td style=\"text-align:center\">$row[5]</td>
			<td style=\"text-align:center\">$row[6]</td>
			<td style=\"text-align:center\"><small>$row[7]</small></td>
			<td style=\"text-align:center\">$row[8]</td>
			<td style=\"text-align:center\">$row[9]</td>
			<td style=\"text-align:center;\">
				<button id=\"$row[0]\" class=\"btn-del\">x</button>
			</td>
		</tr>
		";
	}
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
	INSERT INTO pelanggan_reg(
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
		'$hp',
		'$spl',
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
