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

		<section class="hero-post-section">
			<div class="hero-container">
				<div class="hero-post">
					<img src=img/01.jpg>
					<h2 class="title">Rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble</h2>
					<span>1/1/2021</span>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, exercitationem! Quae iusto, maiores eum obcaecati labore quos hic corporis adipisci id modi temporibus, saepe dolor minus dolorum dolorem magni officiis!</p>
				</div>
				<div class="hero-post">
					<img src=img/01.jpg>
					<h2 class="title">Rabble rabble rabble rabble rabble</h2>
					<span>1/1/2021</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit modi autem similique. Itaque ea perspiciatis voluptatibus dolores a molestiae iure?</p>
				</div>
			</div>
		</section>


	<script src="js/nav.js"></script>
	</body>
</html>