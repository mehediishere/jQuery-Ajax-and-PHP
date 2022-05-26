<?php
	session_start();
	include("../config/db.php");

	if(isset($_POST['btn1'])){		
		$name = $_POST['nameK'];
		$phone = $_POST['phoneK'];

		$in = $conn->query("INSERT INTO `contact`(`name`, `phone`) VALUES ('$name', '$phone')");

		if($in){
			echo 1;
		}else{
			echo 0;
		}
	}

	if(isset($_POST['btn2'])){		
		$phone = $_POST['phoneK'];

		$in = $conn->query("INSERT INTO `contact`(`phone`) VALUES ('$phone')");

		if($in){
			echo 1;
		}else{
			echo 0;
		}
	}