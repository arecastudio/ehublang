<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;


/* JANGAN LUPA LENGKAPI DENGAN STRING ESCAPE UNTUK MENGHINDARI SQL INJECTION */
if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch ($_GET['gif']){
		case 'tabel':
		$where="1";
		if(isset($_GET['t1']) && isset($_GET['t2']) ){
			$where="(tgl_input between '".$_GET['t1']."' AND '".$_GET['t2']."')";
		}elseif(isset($_GET['upp'])){
			$where="upp='".$_GET['upp']."'";
		}elseif(isset($_GET['t1']) && isset($_GET['t2']) && isset($_GET['upp']) ){
			$where="upp='".$_GET['upp']."' AND (tgl_input BETWEEN '".$_GET['t1']."' AND '".$_GET['t2']."')";
		}
		$sql="SELECT ID,no_ktp,nama_2,alamat_2,tgl_input FROM pelanggan_reg WHERE $where;";
		$rs=$con->query($sql);
		if($rs){
			$i=0;
			while($row=$rs->fetch_row()){
				$i++;
				echo "
				<tr>
					<td class=\"tengah\">$i</td>
					<td class=\"tengah\">$row[1]</td>
					<td><a id=\"$row[0]\" href=\"#\" style=\"text-decoration:none;\">$row[2]</a></td>
					<td>$row[3]</td>
					<td class=\"tengah\">$row[4]</td>
				</tr>
				";
			}
		}
		
			break;
		default:
			//
	}
}




$con->close();
