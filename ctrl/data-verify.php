<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;


/* JANGAN LUPA LENGKAPI DENGAN STRING ESCAPE UNTUK MENGHINDARI SQL INJECTION */

if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch($_GET['gif']){
		case 'tabel':
$sql="
SELECT ID, no_ktp, nama_1, alamat_1, rt_1, rw_1, kecamatan_1, kelurahan_1, nama_2, alamat_2, rt_2, rw_2, kecamatan_2, kelurahan_2, no_spl, u.code, no_hp, pekerjaan, pos_lat, pos_lon, luas, jns_bangunan, jml_penghuni, stat_rmh, peruntukan, sumber_air, DATE(tgl_input), IF(status=0,'Unverified','Verified'),upp,status
FROM pelanggan_reg
LEFT OUTER JOIN (SELECT * FROM upp)AS u ON u.cabang=pelanggan_reg.upp
WHERE 1
ORDER BY ID ASC
;";
			$rs=$con->query($sql);
			if($rs){
				$i=0;
				while($row=$rs->fetch_row()){
				$i++;
				echo "
				<tr id=\"$row[0]\">
					<td>$i</td>
					<td><a href=\"#\" id=\"nama-$row[0]\" 
class=\"selected-verify-row\" 
idx=\"$row[0]\" 
nama=\"$row[8]\" 
alamat=\"$row[9]\"
rt=\"$row[10]\"
rw=\"$row[11]\"
kecamatan=\"$row[12]\"
kelurahan=\"$row[13]\"
upp=\"$row[28]\"
spl=\"$row[14]\"
hp=\"$row[16]\"
job=\"$row[17]\"
luas=\"$row[20]\"
jnsbgn=\"$row[21]\"
jmlhuni=\"$row[22]\"
statrmh=\"$row[23]\"
perun=\"$row[24]\"
airalt=\"$row[25]\"
verifystat=\"$row[29]\"

>$row[8]</a></td>
					<td><span id=\"alamat-$row[0]\">$row[9]</span></td>
					<td class=\"tengah\"><span id=\"rt-$row[0]\">$row[10]</span></td>
					<td class=\"tengah\"><span id=\"rw-$row[0]\">$row[11]</span></td>
					<td><span id=\"kec-$row[0]\"><small>".getKecamatan($con,$row[12])."</small></span></td>
					<td><span id=\"kel-$row[0]\"><small>".getKelurahan($con,$row[13])."</small></span></td>
					<td class=\"tengah\"><span id=\"upp-$row[0]\"><small>$row[15]</small></span></td>
					<td class=\"tengah\"><span id=\"hp-$row[0]\"><small>$row[16]</small></span></td>
					<td class=\"kanan\"><span id=\"luas-$row[0]\"><small>$row[20] M<sup>2</sup></small></span></td>
					<td class=\"tengah\"><span id=\"tgl-$row[0]\"><small>$row[26]</small></span></td>
					<td><span id=\"stat-$row[0]\">$row[27]</span></td>
				</tr>
				";
				}
			}
			break;
		default:
	}
}


if(isset($_POST['idx']) && $_POST['idx']!=''){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$rt=$_POST['rt'];
	$rw=$_POST['rw'];
	$kecamatan=$_POST['kecamatan'];
	$kelurahan=$_POST['kelurahan'];
	$upp=$_POST['upp'];
	$spl=$_POST['spl'];
	$hp=$_POST['hp'];
	$job=$_POST['job'];
	$luas=$_POST['luas'];
	$jnsbgn=$_POST['jnsbgn'];
	$jmlhuni=$_POST['jmlhuni'];
	$statrmh=$_POST['statrmh'];
	$perun=$_POST['perun'];
	$airalt=$_POST['airalt'];
	$verifystat=$_POST['verifystat'];

	$sql="
	UPDATE pelanggan_reg
	SET
		nama_2='$nama',
		alamat_2='$alamat',
		rt_2='$rt',
		rw_2='$rw',
		kecamatan_2='$kecamatan',
		kelurahan_2='$kelurahan',
		upp='$upp',
		no_spl='$spl',
		no_hp='$hp',
		pekerjaan='$job',
		luas=$luas,
		jns_bangunan='$jnsbgn',
		jml_penghuni=$jmlhuni,
		stat_rmh='$statrmh',
		peruntukan='$perun',
		sumber_air='$airalt',
		status='$verifystat'
	WHERE
		ID=$id
	;";

	$rs=$con->query($sql);
	if($rs){
		echo "Proses update informasi calon pelanggan Berhasil!";
	}else{
		echo "Proses update informasil calon pelanggan Gagal! ".$con->error."\n $sql";
	}
}












$con->close();
