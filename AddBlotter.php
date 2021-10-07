<?php
	include_once("connections/connection.php");
	$con = connection();
	if(isset($_POST['submit'])){
		$suspect_f_name = $_POST['suspect_f_name'];
		$suspect_m_name = $_POST['suspect_m_name'];
		$suspect_l_name = $_POST['suspect_l_name'];
		$suspect_age = $_POST['suspect_age'];
		$suspect_contact = $_POST['suspect_contact'];
        $incident_date = $_POST['incident_date'];
        $incident_desc = $_POST['incident_desc'];
        $incident_loc = $_POST['incident_loc'];
        $status = $_POST['status'];
        $action = $_POST['action'];
        $complainant = $_POST['complainant'];
        $complainant_contact = $_POST['complainant_contact'];
        $added_at = $_POST['added_at'];

			foreach ($suspect_f_name as $key => $value) {
				$sql = "INSERT INTO `blotters`(`suspect_f_name`, `suspect_m_name`, `suspect_l_name`, `suspect_age`, `suspect_contact`, `incident_date`, `incident_desc`, `incident_loc`, 
                `status`, `action`, `complainant`, `complainant_contact`, `added_at`) 
				VALUES ('$suspect_f_name[$key]', '$suspect_m_name[$key]', '$suspect_l_name[$key]', '$suspect_age[$key]', '$suspect_contact[$key]', '$incident_date[$key]', '$incident_desc[$key]', 
                '$incident_loc[$key]', '$status[$key]', '$action[$key]', '$complainant[$key]', '$complainant_contact[$key]', '$added_at[$key]')"; 
				$con->query($sql) or die ($con->error);
				header("Location: index.php");  //NEEDS ERROR HANDLING AND GATEKEEPING
			}
	}
?> 
	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>BRGY</title>
		<link rel="stylesheet" href="css/style.css">		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<script>
			$(function() { 
				var html = '<tr><td><input type="text" name="suspect_f_name[]" id="suspect_f_name required"></td><td><input type="text" name="suspect_m_name[]" id="suspect_m_name"></td><td><input type="text" name="suspect_l_name[]" id="suspect_l_name" required></td><td><input type="text" name="suspect_age[]" id="suspect_age required"></td><td><input type="text" name="suspect_contact[]" id="suspect_contact required"></td><td><input type="date" name="incident_date[]" id="incident_date" required></td><td><input type="text" name="incident_desc[]" id="incident_desc required"></td><td><input type="text" name="incident_loc[]" id="incident_loc required"></td><td><input type="text" name="status[]" id="status required"></td><td><input type="text" name="action[]" id="action required"></td><td><input type="text" name="complainant[]" id="complainant required"></td><td><input type="text" name="complainant_contact[]" id="complainant_contact required"></td><td><input type="date" name="added_at[]" id="added_at" required></td><td><button type="button" name="remove" id="remove">Remove</button></td></tr>'; 
				var x = 1;
				$("#addmore").click(function(){
					$("#table_input").append(html);
				});
				
				$("#table_input").on('click','#remove',function(){
					$(this).closest('tr').remove();
				});
			});
		</script>
		
	</head>
	<body>		
		<div>
			<form action="" method="post">
				<table class="table table-bordered" id="table_input">
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
					<tr>
						<td><input type="text" name="suspect_f_name[]" id="suspect_f_name" required></td>
						<td><input type="text" name="suspect_m_name[]" id="suspect_m_name"></td>
						<td><input type="text" name="suspect_l_name[]" id="suspect_l_name" required></td>
                        <td><input type="text" name="suspect_age[]" id="suspect_age" required></td>
                        <td><input type="text" name="suspect_contact[]" id="suspect_contact" required></td>
                        <td><input type="date" name="incident_date[]" id="incident_date" required></td>
                        <td><input type="text" name="incident_desc[]" id="incident_desc" required></td>
                        <td><input type="text" name="incident_loc[]" id="incident_loc" required></td>
                        <td><input type="text" name="status[]" id="status" required></td>
                        <td><input type="text" name="action[]" id="action" required></td>
                        <td><input type="text" name="complainant[]" id="complainant" required></td>
                        <td><input type="text" name="complainant_contact[]" id="complainant_contact" required></td>
                        <td><input type="date" name="added_at[]" id="added_at" required></td>
     
						<td><button type="button" name="addmore" id="addmore">Add More</button></td>
					</tr>
				</table>
				<button type ="submit" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>