<?php
	include_once("connections/connection.php");
	$con = connection();
	if(isset($_POST['submit'])){
		$suer = $_POST['suer'];
		$target = $_POST['target'];
		$addressId = $_POST['addressId'];
		$blotterType = $_POST['blotterType'];
		$finishDate = $_POST['finishDate'];
        $eventDescription = $_POST['eventDescription'];
        $eventLocation = $_POST['eventLocation'];
        $judgement = $_POST['judgement'];
        $status = $_POST['status'];
        $added_at = $_POST['added_at'];

			foreach ($suer as $key => $value) {
				$sql = "INSERT INTO `blotters`(`suer`, `target`, `addressId`, `blotterType`, `finishDate`, `eventDescription`, `eventLocation`, `judgement`, 
                `status`, `added_at`) 
				VALUES ('$suer[$key]', '$target[$key]', '$addressId[$key]', '$blotterType[$key]', '$finishDate[$key]', '$eventDescription[$key]', '$eventLocation[$key]', 
                '$judgement[$key]', '$status[$key]', '$added_at[$key]')"; 
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
				var html = '<tr><td><input type="text" name="suer[]" id="suer required"></td><td><input type="text" name="target[]" id="target"></td><td><input type="text" name="addressId[]" id="addressId" required></td><td><input type="text" name="blotterType[]" id="blotterType required"></td><td><input type="date" name="finishDate[]" id="finishDate" required></td><td><input type="text" name="eventDescription[]" id="eventDescription required"></td><td><input type="text" name="eventLocation[]" id="eventLocation required"></td><td><input type="text" name="judgement[]" id="judgement required"></td><td><input type="text" name="status[]" id="status required"></td><td><input type="date" name="added_at[]" id="added_at" required></td><td><button type="button" name="remove" id="remove">Remove</button></td></tr>'; 
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
						<th>Suer</th>
						<th>Target</th>
						<th>Address ID</th>
						<th>Blotter Type</th>
                        <th>Finish Date</th>
                        <th>Event Description</th>
                        <th>Event Location</th>
                        <th>Judgement</th>
                        <th>Status</th>
                        <th>Date Added</th>
					</tr>
					<tr>
						<td><input type="text" name="suer[]" id="suer" required></td>
						<td><input type="text" name="target[]" id="target"></td>
						<td><input type="text" name="addressId[]" id="addressId" required></td>
                        <td><input type="text" name="blotterType[]" id="blotterType" required></td>
                        <td><input type="date" name="finishDate[]" id="finishDate" required></td>
                        <td><input type="text" name="eventDescription[]" id="eventDescription" required></td>
                        <td><input type="text" name="eventLocation[]" id="eventLocation" required></td>
                        <td><input type="text" name="judgement[]" id="judgement" required></td>
                        <td><input type="text" name="status[]" id="status" required></td>
                        <td><input type="date" name="added_at[]" id="added_at" required></td>
     
						<td><button type="button" name="addmore" id="addmore">Add More</button></td>
					</tr>
				</table>
				<button type ="submit" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>