<?php
	session_start();
	include("config/db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<table border = "1">
	  <tr>
	    <th>id</th>
	    <th>name</th>
	    <th>phone</th>
	  </tr>
	  <tr>
	  	<?php 
	  	$row = mysqli_fetch_assoc($conn->query("SELECT * FROM `contact` WHERE `id` = 6"));
	  	?>
	    <td><?php echo $row['id']; ?></td>
	    <td><?php echo $row['name']; ?></td>
	    <td><?php echo $row['phone']; ?></td>
	  </tr>
	</table>
</body>
</html>