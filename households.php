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
	include_once("connections/db.inc.php");

	$sql = "SELECT * FROM households ORDER BY addedAt DESC";
	$stmt = $db->prepare($sql);
	$stmt->execute();
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
	
		<table class="table table-bordered table-dark">
			<thead class="table-light">
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Suffix</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th>Civil Status</th>
					<th>Employed</th>
					<th>Self Employed in Business</th>
					<th>Self Employed in Informal Sector</th>
					<th>Solo Parent</th>
					<th>Senior Citizen</th>
					<th>PWD</th>
					<th>Relation to Head of Family</th>
					<th>Date Added</th>
				</tr>
			</thead>
			<tbody>
			<?php 	while ($row = $stmt->fetch()) {?>
			<tr>
				<td> <?php echo $row['householdName']; ?> </td>
				<td> <?php echo $row['addressId']; ?> </td>
				<td> <?php echo $row['mName']; ?> </td>
				<td> <?php echo $row['suffixName']; ?> </td>
				<td> <?php echo $row['gender']; ?> </td>
				<?php } ?>
			</tr>	
			</tbody>
		</table>
	<script src="js/nav.js"></script>
	</body>
</html>