<?php
require_once('default.php');

//$con=new DBHelper();

//$con->connect();


if(isset($_POST['get_upp'])){
//if(1>0){
	$rs=$con->query("SELECT cabang,nama,ip FROM cabang WHERE cabang<>'00';");
	while($row=$rs->fetch_row()){
		echo"<option value=\"$row[0]\"> $row[0] - $row[1]</option>";
	}
	//printf("row ke %d rows.\n",$rs->num_rows);
	$rs->close();
echo"sdfasfasfasfs";
}


//$con->disconnect();
