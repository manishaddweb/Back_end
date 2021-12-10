<?php
	error_reporting(0);
	$a=$_POST['username'];
	$b=$_POST['password'];
	session_start();
	$_SESSION["username"]=$a;
	
	header('Location:8_1.php');
	
?>

