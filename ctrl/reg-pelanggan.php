<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;

if( isset($_GET['gif']) && $_GET['gif']=='pel-baru'  ){
	//$sql="SELECT DISTINCT ID,no_ktp,nama_2,alamat_2,rt_2,rw_2,no_hp,no_spl,(SELECT u.code FROM upp AS u WHERE u.cabang=pelanggan_reg.upp LIMIT 1)AS cbg,tgl_input,pos_lat,pos_lon FROM pelanggan_reg WHERE YEAR(tgl_input)=YEAR(now()) AND MONTH(tgl_input)=MONTH(now()) ORDER BY tgl_input DESC;";
	$sql="
SELECT DISTINCT
	ID,
	no_ktp,
	nama_1,
	alamat_1,
	rt_1,
	rw_1,
	kecamatan_1,
	kelurahan_1,
	nama_2,
	alamat_2,
	rt_2,
	rw_2,
	kecamatan_2,
	kelurahan_2,
	no_spl,
	upp,
	no_hp,
	pekerjaan,
	pos_lat,
	pos_lon,
	luas,
	jns_bangunan,
	jml_penghuni,
	stat_rmh,
	peruntukan,
	sumber_air
FROM 
	pelanggan_reg
WHERE
	YEAR(tgl_input)=YEAR(now()) AND MONTH(tgl_input)=MONTH(now()) 
ORDER BY 
	tgl_input DESC
	;";
	$tabel="";
	$i=0;
	$rs=$con->query($sql);
	//$n=$rs->num_rows;
	if($rs){//jika ada data
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
	//$rs->close();
}


if(isset($_POST['no_ktp'])){
	/*$no_ktp=$_POST['tx-id'];

	$nama_1=$_POST['tx-nama-1'];
	$alamat_1=$_POST['tx-alamat-1'];
	$rt_1=$_POST['tx-rt-1'];
	$rw_1=$_POST['tx-rw-1'];
	$kecamatan_1=$_POST['opt-kecamatan-1'];
	$kelurahan_1=$_POST['opt-kelurahan-1'];

	$nama_2=$_POST['tx-nama'];
	$alamat_2=$_POST['tx-alamat'];
	$rt_2=$_POST['tx-rt'];
	$rw_2=$_POST['tx-rw'];
	$kecamatan_2=$_POST['opt-kecamatan'];
	$kelurahan_2=$_POST['opt-kelurahan'];

	$no_spl=$_POST['tx-spl'];
	$upp=$_POST['opt-upp'];

	$hp=$_POST['tx-hp'];
	$pekerjaan=$_POST['tx-job'];
	

	$pos_lat=$_POST['tx-pos-lat'];
	$pos_lon=$_POST['tx-pos-lon'];
	
	$luas=$_POST['tx-luas'];
	$jns_bangunan=$_POST['opt-jnsbgn'];
	$jml_penghuni=$_POST['tx-jmlhuni'];
	$stat_rmh=$_POST['opt-statrmh'];
	$peruntukan=$_POST['opt-perun'];
	$sumber_air=$_POST['opt-airalt'];*/


	//	echo"menympan data pelanggan baru.....".$nama;


	$no_ktp=$_POST['no_ktp'];

	$nama_1=$_POST['nama_1'];
	$alamat_1=$_POST['alamat_1'];
	$rt_1=$_POST['rt_1'];
	$rw_1=$_POST['rw_1'];
	$kecamatan_1=$_POST['kecamatan_1'];
	$kelurahan_1=$_POST['kelurahan_1'];

	$nama_2=$_POST['nama_2'];
	$alamat_2=$_POST['alamat_2'];
	$rt_2=$_POST['rt_2'];
	$rw_2=$_POST['rw_2'];
	$kecamatan_2=$_POST['kecamatan_2'];
	$kelurahan_2=$_POST['kelurahan_2'];

	$no_spl=$_POST['no_spl'];
	$upp=$_POST['upp'];

	$no_hp=$_POST['no_hp'];
	$pekerjaan=$_POST['pekerjaan'];


	$pos_lat=$_POST['pos_lat'];
	$pos_lon=$_POST['pos_lon'];

	$luas=$_POST['luas'];
	$jns_bangunan=$_POST['jns_bangunan'];
	$jml_penghuni=$_POST['jml_penghuni'];
	$stat_rmh=$_POST['stat_rmh'];
	$peruntukan=$_POST['peruntukan'];
	$sumber_air=$_POST['sumber_air'];


	$sql="
	INSERT INTO pelanggan_reg(
		no_ktp,
		nama_1,
		alamat_1,
		rt_1,
		rw_1,
		kecamatan_1,
		kelurahan_1,
		nama_2,
		alamat_2,
		rt_2,
		rw_2,
		kecamatan_2,
		kelurahan_2,
		no_spl,
		upp,
		no_hp,
		pekerjaan,
		pos_lat,
		pos_lon,
		luas,
		jns_bangunan,
		jml_penghuni,
		stat_rmh,
		peruntukan,
		sumber_air
	)VALUES(
		'$no_ktp',
		'$nama_1',
		'$alamat_1',
		'$rt_1',
		'$rw_1',
		'$kecamatan_1',
		'$kelurahan_1',
		'$nama_2',
		'$alamat_2',
		'$rt_2',
		'$rw_2',
		'$kecamatan_2',
		'$kelurahan_2',
		'$no_spl',
		'$upp',
		'$no_hp',
		'$pekerjaan',
		'$pos_lat',
		'$pos_lon',
		'$luas',
		'$jns_bangunan',
		'$jml_penghuni',
		'$stat_rmh',
		'$peruntukan',
		'$sumber_air'
	);";
// https://stackoverflow.com/questions/9676084/how-do-i-return-a-proper-success-error-message-for-jquery-ajax-using-php
	$rs=$con->query($sql);
	if($rs){
		echo"Berhasil menyimpan data.";
	}else{
		echo"Gagal menyimpan data.";
	}
	//$rs->close();
}


if(isset($_POST['id_hapus']) && $_POST['id_hapus']!=''){
	$sql="DELETE FROM pelanggan_reg WHERE ID=".$_POST['id_hapus'].";";
	$rs=$con->query($sql);
	if(!$rs){
		echo "Gagal menghapus data.";
	}else{
		echo "Berhasil menghapus data.";
	}
	//$rs->close();
}

$con->close();
