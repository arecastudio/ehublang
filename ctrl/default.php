<?php

//require_once('config.php');



$con=new mysqli('127.0.0.1','rail','','db_pdamsys');

if($con->connect_errno){
	printf("Koneksi gagal: %s\n",$con->connect_error);
	exit();
}
