<?php
	session_start();
	include("../db.php");
	
	
	//update for all table value
	if(isset($_GET['ahksd'])){
		$ser=$_GET["ser"];
		$val=$_GET["val"];
		$table=$_GET["table"];
		$col=$_GET["col"];

		// $yyy=$mysqli->query("SELECT * FROM $table where `id`='".$ser."' ");
		// $count=mysqli_num_rows($yyy);
		// $fatch=mysqli_fetch_assoc($yyy);
		
		
		// if($mysqli->query("UPDATE $table SET $col='".$val."' where `id`='".$ser."'")){
		// 	// $update=$mysqli->query("UPDATE $table SET $col='".$val."' where `id`='".$ser."'");
		// 	echo $val;
		// }else{
		// 	echo "5";
		// }
		
	}