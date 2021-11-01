<?php
	include_once("connections/connection.php");
	$con = connection();
    $id = $_GET['bID'];

    $sql = "SELECT * FROM blotters WHERE blotterId = '$id'";
    $blotters = $con->query($sql) or die ($con->error);
    $row = $blotters->fetch_assoc();
    
	if(isset($_POST['submit'])){
		$suer = $_POST['suer'];
		$ttarget = $_POST['ttarget'];
		$addressId = $_POST['addressId'];
		$blotterType = $_POST['blotterType'];
		$finishDate = $_POST['finishDate'];
        $eventDescription = $_POST['eventDescription'];
        $eventLocation = $_POST['eventLocation'];
        $judgement = $_POST['judgement'];
        $statuss = $_POST['statuss'];
        $added_at = $_POST['added_at'];


			foreach ($suer as $key => $value) {
				$sql = "UPDATE blotters SET `suer`, `ttarget`, `addressId`, `blotterType`, `finishDate`, `eventDescription`, `eventLocation`, `judgement`, 
                `statuss`, `added_at` WHERE blotterId = '$id'
				VALUES ('$suer[$key]', '$ttarget[$key]', '$addressId[$key]', '$blotterType[$key]', '$finishDate[$key]', '$eventDescription[$key]', '$eventLocation[$key]', 
                '$judgement[$key]', '$statuss[$key]', '$added_at[$key]')"; 
				$con->query($sql) or die ($con->error);
				header("Location: detailsBlotter.php?bID=".$id);  //NEEDS ERROR HANDLING AND GATEKEEPING


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
				var html = '<tr><td><input type="text" name="suer[]" id="suer required"></td><td><input type="text" name="ttarget[]" id="ttarget"></td><td><input type="text" name="addressId[]" id="addressId" required></td><td><input type="text" name="blotterType[]" id="blotterType required"></td><td><input type="date" name="finishDate[]" id="finishDate" required></td><td><input type="text" name="eventDescription[]" id="eventDescription required"></td><td><input type="text" name="eventLocation[]" id="eventLocation required"></td><td><input type="text" name="judgement[]" id="judgement required"></td><td><input type="text" name="statuss[]" id="statuss required"></td><td><input type="date" name="added_at[]" id="added_at" required></td><td><button type="button" name="remove" id="remove">Remove</button></td></tr>'; 
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
						<td><input type="text" name="suer[]" id="suer" required value="<?php echo $row['suer'];?>"></td>
						<td><input type="text" name="ttarget[]" id="ttarget" value="<?php echo $row['ttarget'];?>"></td>
						<td><input type="text" name="addressId[]" id="addressId" required value="<?php echo $row['addressId'];?>"></td>
                        <td><input type="text" name="blotterType[]" id="blotterType" required value="<?php echo $row['blotterType'];?>"></td>
                        <td><input type="date" name="finishDate[]" id="finishDate" required value="<?php echo $row['finishDate'];?>"></td>
                        <td><input type="text" name="eventDescription[]" id="eventDescription" required value="<?php echo $row['eventDescription'];?>"></td>
                        <td><input type="text" name="eventLocation[]" id="eventLocation" required value="<?php echo $row['eventLocation'];?>"></td>
                        <td><input type="text" name="judgement[]" id="judgement" required value="<?php echo $row['judgement'];?>"></td>
                        <td><input type="text" name="statuss[]" id="statuss" required value="<?php echo $row['statuss'];?>"></td>
                        <td><input type="date" name="added_at[]" id="added_at" required value="<?php echo $row['added_at'];?>"></td>
     
						<td><button type="button" name="addmore" id="addmore">Add More</button></td>
					</tr>
				</table>
				<button type ="submit" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>