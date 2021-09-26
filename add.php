<?php
	include_once("connections/connection.php");
	$con = connection();
	if(isset($_POST['submit'])){
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$gender = $_POST['gender'];
		$b_day = $_POST['b_day'];

			foreach ($f_name as $key => $value) {
				$sql = "INSERT INTO `residents`(`f_name`, `m_name`, `l_name`, `gender`, `b_day`) 
				VALUES ('$f_name[$key]', '$m_name[$key]', '$l_name[$key]', '$gender[$key]', '$b_day[$key]')"; 
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
				var html = '<tr><td><input type="text" name="f_name[]" id="f_name required"></td><td><input type="text" name="m_name[]" id="m_name"></td><td><input type="text" name="l_name[]" id="l_name" required></td><td><select name="gender[]" id="gender" required><option value="M">Male</option><option value="F">Female</option></select></td><td><input type="date" name="b_day[]" id="b_day" required></td><td><button type="button" name="remove" id="remove">Remove</button></td></tr>'; 
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
						<th>Gender</th>
						<th>Birthday</th>
					</tr>
					<tr>
						<td><input type="text" name="f_name[]" id="f_name" required></td>
						<td><input type="text" name="m_name[]" id="m_name"></td>
						<td><input type="text" name="l_name[]" id="l_name" required></td>
						<td>
							<select name="gender[]" id="gender" required>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							</select>
						</td>
						<td><input type="date" name="b_day[]" id="b_day" required></td>
						<td><button type="button" name="addmore" id="addmore">Add More</button></td>
					</tr>
				</table>
				<button type ="submit" name="submit">Submit</button>
			</form>
		</div>
	</body>
</html>