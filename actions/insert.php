<?php
	session_start();
	include("../db.php");

	$name = $_POST['nameK'];
	$phone = $_POST['phoneK'];

	$in = $conn->query("INSERT INTO `contact`(`name`, `phone`) VALUES ('$name', '$phone')");

	if($in){
		echo 1;
	}else{
		echo 0;
	}