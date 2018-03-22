<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;


/* JANGAN LUPA LENGKAPI DENGAN STRING ESCAPE UNTUK MENGHINDARI SQL INJECTION */

if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch($_GET['gif']){
		case 'tabel':
$sql="
SELECT ID, no_ktp, nama_1, alamat_1, rt_1, rw_1, kecamatan_1, kelurahan_1, nama_2, alamat_2, rt_2, rw_2, kecamatan_2, kelurahan_2, no_spl, u.code, no_hp, pekerjaan, pos_lat, pos_lon, luas, jns_bangunan, jml_penghuni, stat_rmh, peruntukan, sumber_air, tgl_input, status,upp
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
nama=\"$row[8]\" 
alamat=\"$row[9]\"
rt=\"$row[10]\"
rw=\"$row[11]\"
kecamatan=\"$row[12]\"
kelurahan=\"$row[13]\"
upp=\"$row[28]\"

>$row[8]</a></td>
					<td><span id=\"alamat-$row[0]\">$row[9]</span></td>
					<td><span id=\"rt-$row[0]\">$row[10]</span></td>
					<td><span id=\"rw-$row[0]\">$row[11]</span></td>
					<td><span id=\"kec-$row[0]\">".getKecamatan($con,$row[12])."</span></td>
					<td><span id=\"kel-$row[0]\">".getKelurahan($con,$row[13])."</span></td>
					<td><span id=\"upp-$row[0]\">$row[15]</span></td>
					<td><span id=\"hp-$row[0]\">$row[16]</span></td>
					<td><span id=\"luas-$row[0]\">$row[20]</span></td>
					<td><span id=\"tgl-$row[0]\">$row[26]</span></td>
					<td><span id=\"stat-$row[0]\">$row[27]</span></td>
				</tr>
				";
				}
			}
			break;
		default:
	}
}












$con->close();
