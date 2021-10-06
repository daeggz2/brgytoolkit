<?php
	if(!isset($_SESSION)){
   		session_start();    //maybe add into connections.php later???? 
    }
	// if(isset($_SESSION['currentuser'])) {
	// 	echo "Welcome ".$_SESSION['name'];
	// }
	// else{
	// 	echo "Welcome citizen!";
	// }
	//include_once("connections/connection.php");
	//$con = connection();
	include_once("connections/conn.php");


?>
	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BRGY</title>
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a13d5dfb35.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style2.css">
	</head>
	<body>	

	<?php include_once("nav.php") ?>	

		<div class="hero-section">
			<img src=img/hero.png>
			<div class="announcement">
				<h1>ANNOUNCEMENT: I have covid</h1>
			</div>
		</div>

		<div class="container">
			<div class="bb">
				<h2>Bulletin Board</h2>
				<div class="bb-grid">
					<div class="bb-post">
						<img src="img/01.jpg">
						<h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tempore ipsam ullam cupiditate, pariatur laudantium suscipit officiis aperiam aliquid veritatis veniam laborum id magni repellat.</p>
					</div>
					<div class="bb-post">
						<img src="img/01.jpg">
						<h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tempore ipsam ullam cupiditate, pariatur laudantium suscipit officiis aperiam aliquid veritatis veniam laborum id magni repellat.</p>
					</div>
					<div class="bb-post">
						<img src="img/01.jpg">
						<h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tempore ipsam ullam cupiditate, pariatur laudantium suscipit officiis aperiam aliquid veritatis veniam laborum id magni repellat.</p>
					</div>
					<div class="bb-post">
						<img src="img/01.jpg">
						<h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint tempore ipsam ullam cupiditate, pariatur laudantium suscipit officiis aperiam aliquid veritatis veniam laborum id magni repellat.</p>
					</div>
				</div>			
			<div>
		</div>

		


	<script src="js/nav.js"></script>
	</body>
</html>