<?php
session_start();

class Connection{
	private $host="127.0.0.1";
	private $usr="rail";
	private $pass="";
	private $db="db_pdamsys";

	public $con;

	public function __construct(){

		$this->con=new mysqli($this->host,$this->usr,$this->pass,$this->db);

		if($this->con->connect_errno){
			printf('Koneksi gagal: %s\n',$this->con->connect_error);
			exit();
		}

		return $this->con;
	}
/*
	public function getCon(){
		return $this>con;
	};*/

	private function Konek(){
		$this->con=new mysqli($this->host,$this->usr,$this->pass,$this->db);

		if($this->con->connect_errno){
			printf('Koneksi gagal: %s\n',$this->con->connect_error);
			exit();
		}
	}

	public function disconnect(){
		$this->con->close();
	}

}
