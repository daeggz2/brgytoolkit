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
	$sql = "SELECT * FROM residents ORDER BY added_at DESC";
	$residents = $con->query($sql) or die($con->error);
	$row = $residents->fetch_assoc();
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
	<?php include_once("nav.php") ?>	
		<a href="add.php">Add</a>
		<table class="table table-bordered table-dark">
			<thead class="table-light">
				<tr>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th>Date Added</th>
				</tr>
			</thead>
			<tbody>
			<?php while($row = $residents->fetch_assoc()) {?>
			<tr>
				<td> <?php echo $row['f_name']; ?> </td>
				<td> <?php echo $row['m_name']; ?> </td>
				<td> <?php echo $row['l_name']; ?> </td>
				<td> <?php echo $row['gender']; ?> </td>
				<td> <?php echo $row['b_day']; ?> </td>
				<td> <?php echo $row['added_at']; ?> </td>
				<?php } ?>
			<tr>	
			</tbody>
		</table>

	<script src="js/nav.js"></script>
	</body>
</html>