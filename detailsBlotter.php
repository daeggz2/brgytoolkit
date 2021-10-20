<?php

if(!isset($_SESSION)){
       session_start();    
}
if(isset($_SESSION['position']) && $_SESSION['position'] == "admin") {
    echo "Welcome ".$_SESSION['currentuser'];
}
else{
    echo header("Location: blotters.php");
}
include_once("connections/connection.php");
$con = connection();

$id = $_GET['bID'];

$sql = "SELECT * FROM blotters WHERE blotterId = '$id'";
$blotters = $con->query($sql) or die ($con->error);
$row = $blotters->fetch_assoc();


?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BRGY</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a13d5dfb35.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">


	</head>
    <body>

    <br/>

    <a href="updateBlotter.php?bID=<?php echo $row['blotterId'];?>">Update</a>
    <a href="deleteBlotter.php">Delete</a>

    <br/>

    <h2><?php echo $row['suer'];?> <?php echo $row['ttarget'];?> <?php echo $row['addressId'];?> </br> <?php echo $row['blotterType'];?> <?php echo $row['finishDate'];?> <?php echo $row['eventDescription'];?> </br> <?php echo $row['eventLocation'];?>
    <?php echo $row['judgement'];?> <?php echo $row['statuss'];?> <?php echo $row['added_at'];?></h2>



    

</body>

    </html>

