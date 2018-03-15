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
			$where="(DATE(tgl_input) between '".$_GET['t1']."' AND '".$_GET['t2']."')";
		}elseif(isset($_GET['upp'])){
			$where="upp='".$_GET['upp']."'";
		}elseif(isset($_GET['t1']) && isset($_GET['t2']) && isset($_GET['upp']) ){
			$where="upp='".$_GET['upp']."' AND (DATE(tgl_input) BETWEEN '".$_GET['t1']."' AND '".$_GET['t2']."')";
		}
		$sql="SELECT ID,no_ktp,nama_2,alamat_2,tgl_input,pos_lat,pos_lon FROM pelanggan_reg WHERE $where;";
		$rs=$con->query($sql);
		if($rs){
			$i=0;
		//	echo"<tr><td colspan=\"5\">$sql</td></tr>";
			while($row=$rs->fetch_row()){
				$i++;
				echo "
				<tr>
					<td class=\"tengah\">$i</td>
					<td class=\"tengah\">$row[1]</td>
					<td><a id=\"$row[0]\" href=\"#\" pos_lat=\"$row[5]\" pos_lon=\"$row[6]\" style=\"text-decoration:none;color:#000;\">$row[2]</a></td>
					<td>
						$row[3]<!--hr/>
						<small>Lat: $row[5], Lon: $row[6]</small-->
					</td>
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
