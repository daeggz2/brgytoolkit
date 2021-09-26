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

    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = $_SESSION["name"];
		$sql = "INSERT INTO `posts` (`title`,`content`,`author`)
		VALUES ('$title','$content','$author')";
		$con->query($sql) or die ($con->error);

		header("Location: index.php?info=added"); //check for missing fields l8r
    }

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
        <form action="" method="POST">
            <label for="title">Announcement Title</label>
            <input type="text" name="title" id="title">
            <br/>
            <label for="content">Write content here</label>
            <textarea name="content" id="content" placeholder="Max 3000 letters"></textarea>
            <button name="submit">Publish</button>
        </form>

		<script src="js/nav.js"></script>
	</body>
</html>