<?php

//require_once('config.php');

class DBHelper{
	public $link;

	public function __construct(){
		//
	}

	public function connect(){
		$this->link=mysqli_connect('127.0.0.1','rail','','billing');
		if(!$this->link){
			echo mysqli_connect_errno();
			exit();
		}else{
			return $this->link;
		}
	}

	public function disconnect(){
		mysql_close($this->link);
	}

}



$con=new mysqli('127.0.0.1','rail','','billing');

if($con->connect_errno){
	printf("Koneksi gagal: %s\n",$con->connect_error);
	exit();
}
