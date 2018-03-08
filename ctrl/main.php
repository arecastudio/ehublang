<?php
require_once('default.php');

if(isset($_GET['gif'])){
	switch($_GET['gif']){
		case 'upp':
			$rs=$con->query("SELECT cabang,nama,ip FROM upp WHERE cabang<>'00' ORDER BY cabang ASC;");
			while($row=$rs->fetch_row()){
				echo"<option value=\"$row[0]\"> $row[0] - $row[1]</option>";
			}
			$rs->close();
			break;
		case 'kecamatan':
			$rs=$con->query("SELECT IDKecamatan,Nama FROM kecamatan WHERE 1 ORDER BY Nama ASC;");
			while($row=$rs->fetch_row()){
				echo"<option value=\"$row[0]\"> $row[1]</option>";
			}
			$rs->close();
			break;
		case 'kelurahan':
			$rs=$con->query("SELECT IDKelurahan,Nama FROM kelurahan WHERE 1 ORDER BY Nama ASC;");
			while($row=$rs->fetch_row()){
				echo"<option value=\"$row[0]\"> $row[1]</option>";
			}
			$rs->close();
			break;
		case 'statrmh':
			echo "<option value=\"1\">Milik Sendiri</option>";
			echo "<option value=\"2\">Milik Keluarga</option>";
			echo "<option value=\"3\">Milik Negara/Perusahaan</option>";
			echo "<option value=\"4\">Sewa/Kontrak</option>";
			break;
		case 'jnsbgn':
			echo "<option value=\"1\">Bersertifikat</option>";
			echo "<option value=\"2\">Tidak Berseftifikat</option>";
			break;
		case 'perun':
			echo "<option value=\"1\">Rumah Tinggal</option>";
			echo "<option value=\"2\">RUKO (Rumah Toko)</option>";
			echo "<option value=\"3\">Pertokoan / Indistri</option>";
			echo "<option value=\"4\">Kantor Pemerintah / Swasta</option>";
			echo "<option value=\"5\">Kantor / Perumahan Militer</option>";
			echo "<option value=\"6\">Bangunan Sosial</option>";
			echo "<option value=\"0\">Lainnya</option>";
			break;
		case 'airalt':
			echo "<option value=\"1\">Sumur</option>";
			echo "<option value=\"2\">Mata air</option>";
			echo "<option value=\"3\">Sungai</option>";
			echo "<option value=\"0\">Lainnya</option>";
			break;
		default:
			//
			echo"Test test test test....";
	}
}



$con->close();
