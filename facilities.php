<?php
	if(!isset($_SESSION)){
   		session_start();    //maybe add into connections.php later???? 
    }
	// include_once("connections/connection.php");
	// $con = connection();

    include_once("connections/conn.php");
    $query = "SELECT * FROM facilities";
    $result = $conn->prepare($query);
    $result->execute();
   // $result = mysqli_query($conn, $query);

    
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BRGY</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a13d5dfb35.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">

        <script>
            function activate(element) {
                $element.classList()
            }
            function updateValue(element,column,id) {
                var value = element.innerText;     
                $.ajax({
                    url:'update.php',
                    type: 'post',
                    data:{
                        value: value,
                        column: column,
                        id: id
                    },
                    success: function(php_result) {
                        console.log(php_result);
                    }
                })
            }
        </script>

	</head>
	<body>	
        <?php include_once("nav.php") ?>	

        <table class="table table-bordered table-dark">
            <thead class="table-light">
                <th>Name</th>
                <th>Type</th>
                <th>Address</th>
                <th>Owner</th>
                <th>Date Added</th>           
            </thead>
            <tbody>
                <?php 
                    while($row = $result->fetch()) { 
                        $id = md5($row['id']);
                        $name = $row['name'];
                        $type = $row['type'];
                        $address = $row['address'];
                        $owner = $row['owner'];
                        $added_at = $row['added_at']
                ?>
                <tr>
                    <td><div contenteditable="true" onBlur="updateValue(this, 'name', '<?php echo $id;?>')" onClick="activate(this)"> <?php echo $name; ?> </div></td>
                    <td><div contenteditable="true" onBlur="updateValue(this, 'type', '<?php echo $id;?>')" onClick="activate(this)"> <?php echo $type; ?> </div></td>
                    <td><div contenteditable="true" onBlur="updateValue(this, 'address', '<?php echo $id;?>')" onClick="activate(this)"> <?php echo $address; ?> </div></td>
                    <td><div contenteditable="true" onBlur="updateValue(this, 'owner', '<?php echo $id;?>')" onClick="activate(this)"> <?php echo $owner; ?> </div></td>
                    <td><div><?php echo $added_at; }?></div></td>
             
                </tr>
            </tbody>
        </table>

		<script src="js/nav.js"></script>
	</body>
</html>