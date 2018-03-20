<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;


/* JANGAN LUPA LENGKAPI DENGAN STRING ESCAPE UNTUK MENGHINDARI SQL INJECTION */

if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch($_GET['gif']){
		case 'tabel':
$sql="
SELECT ID, no_ktp, nama_1, alamat_1, rt_1, rw_1, kecamatan_1, kelurahan_1, nama_2, alamat_2, rt_2, rw_2, kecamatan_2, kelurahan_2, no_spl, upp, no_hp, pekerjaan, pos_lat, pos_lon, luas, jns_bangunan, jml_penghuni, stat_rmh, peruntukan, sumber_air, tgl_input, status
FROM pelanggan_reg
WHERE 1
ORDER BY ID ASC
;";
			$rs=$con->query($sql);
			if($rs){
				$i=0;
				while($row=$rs->fetch_row()){
				$i++;
				echo "
				<tr>
					<td>$i</td>
					<td><span id=\"nama-$row[0]\">$row[8]</span></td>
					<td><span id=\"alamat-$row[0]\">$row[9]</span></td>
					<td><span id=\"rt-$row[0]\">$row[10]</span></td>
					<td><span id=\"rw-$row[0]\">$row[11]</span></td>
					<td><span id=\"rw-$row[0]\">".getKecamatan($con,$row[12])."</span></td>
					<td><span id=\"rw-$row[0]\">".getKelurahan($con,$row[13])."</span></td>
					<td colspan=\"10\">$i</td>
				</tr>
				";
				}
			}
			break;
		default:
	}
}












$con->close();
