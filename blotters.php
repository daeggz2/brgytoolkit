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

$sql = "SELECT * FROM blotters ORDER BY id DESC";
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
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Incident Date</th>
            <th>Description</th>
            <th>Location</th>
            <th>Status</th>
            <th>Action</th>
            <th>Complainant</th>
            <th>Complainant Contact</th>
            <th>Date Added</th>

        </tr>
        </thead>
    
        <tbody>
    <?php do{ ?>   
        <tr>
            <td><?php echo $row['suspect_f_name'];?></td>
            <td><?php echo $row['suspect_m_name'];?></td>
            <td><?php echo $row['suspect_l_name'];?></td>
            <td><?php echo $row['suspect_age'];?></td>
            <td><?php echo $row['suspect_contact'];?></td>
            <td><?php echo $row['incident_date'];?></td>
            <td><?php echo $row['incident_desc'];?></td>
            <td><?php echo $row['incident_loc'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['action'];?></td>
            <td><?php echo $row['complainant'];?></td>
            <td><?php echo $row['complainant_contact'];?></td>
            <td><?php echo $row['added_at'];?></td>
        </tr>
    <?php }while($row = $blotters->fetch_assoc()); ?>
        </tbody>

    </table>

    

</body>

    </html>

