<?php
require_once('Connection.php');

if(isset($_POST['login'])){
	$usr=$_POST['usr'];
	$pas=$_POST['pas'];
	$_SESSION['user_session_id']=$usr;
	echo $_SESSION['user_session_id'];
}

if(isset($_POST['logout'])){
	$_SESSION['user_session_id']='';
	session_destroy();
}
