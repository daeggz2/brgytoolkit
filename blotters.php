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

$sql = "SELECT * FROM blotters ORDER BY blotterId DESC";
$blotters = $con->query($sql) or die ($con->error);
$row = $blotters->fetch_assoc();

// do{
//     echo $row['suspect_f_name']." ".$row['suspect_l_name']."<br/>";
// }while($row = $blotters->fetch_assoc());
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

    <h1>Blotter List</h1>
    <br/>
    <br/>
    <a href="AddBlotter.php">Add New</a>
    <table class="table table-bordered table-dark">
			<thead class="table-light">
        <tr>
            <th>Suer</th>
            <th>Target</th>
            <th>Address ID</th>
            <th>Blotter Type</th>
            <th>Finish Date</th>
            <th>Event Description</th>
            <th>Event Location</th>
            <th>Judgement</th>
            <th>Status</th>
            <th>Date</th>

        </tr>
        </thead>
    
        <tbody>
    <?php do{ ?>   
        <tr>
            <td><?php echo $row['suer'];?></td>
            <td><?php echo $row['target'];?></td>
            <td><?php echo $row['addressId'];?></td>
            <td><?php echo $row['blotterType'];?></td>
            <td><?php echo $row['finishDate'];?></td>
            <td><?php echo $row['eventDescription'];?></td>
            <td><?php echo $row['eventLocation'];?></td>
            <td><?php echo $row['judgement'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['added_at'];?></td>
        </tr>
    <?php }while($row = $blotters->fetch_assoc()); ?>
        </tbody>

    </table>

    

</body>

    </html>

