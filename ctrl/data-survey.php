<?php
require_once('Connection.php');
$connection=new Connection();
$con=$connection->con;

if(isset($_GET['gif']) && $_GET['gif']!=''){
	switch ($_GET['gif']){
		case 'tabel':
		$sql="SELECT ID,no_ktp,nama_2,alamat_2,tgl_input FROM pelanggan_reg";
		$rs=$con->query($sql);
		if($rs){
			$i=0;
			while($row=$rs->fetch_row()){
				$i++;
				echo "
				<tr>
					<td>$i</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
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
