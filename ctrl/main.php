<?php
require_once('default.php');

if(isset($_GET['gif'])){
	switch($_GET['gif']){
		case 'upp':
			$rs=$con->query("SELECT cabang,nama,ip FROM upp WHERE cabang<>'00';");
			while($row=$rs->fetch_row()){
				echo"<option value=\"$row[0]\"> $row[0] - $row[1]</option>";
			}
			$rs->close();
			break;
		default:
			//
	}
}




$con->close();
