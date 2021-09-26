<?php
	if(!isset($_SESSION)){
   		session_start();    
    }
	if(isset($_SESSION['position']) && $_SESSION['position'] == "admin") {
		echo "Welcome ".$_SESSION['currentuser'];
	}
	else{
		echo header("Location: index.php");
	}
	include_once("connections/connection.php");
	$con = connection();
	$sql = "SELECT * FROM persons ORDER BY added_at DESC";
	$persons = $con->query($sql) or die($con->error);
	$row = $persons->fetch_assoc();
?>
	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>BRGY</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

	</body>
</html>