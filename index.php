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
	include_once("connections/db.inc.php");


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
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>	

	<?php include_once("nav.php") ?>	

		<?php 
			$query = "SELECT * FROM posts";
			$result = $conn->prepare($query);
   			$result->execute();

			//$posts = $con->query($sql) or die($con->error);
			
			
		?>

		<?php if(isset($_REQUEST["info"])) { ?>
			<?php if($_REQUEST["info"] == "added") { ?>		
				<div class="alert alert-success" role="alert">
					Post has been published.
				</div>	
			<?php } ?>
		<?php } ?>	

		<div class="container">		
			<div class="row">   <!-- GOAL: ADD IMAGE SUPPORT ON POSTS, FIX CONTENT VIEW  -->
				<?php while($row = $result->fetch()) { ?>
					<div class="counter col-md-4 d-flex justify-content-center align-items-center">
						<div class="card bg-primary">
							<div class="card-body">
								<h5 class="card-title text-center"><?php echo $row["title"]; ?></h5>
								<h6 class="card-title text-center"><?php echo date("F d, Y", strtotime($row["date"]))." by ". $row['author'] ?></h6>
								<p class="card-text justify-content-center"> <?php echo $row["content"]; ?></p>
							</div>
						</div>
					</div>
				<?php }  ?>
			</div>
		</div>			
		
		<section class="hero py-4">   <!-- HERO SECTION START -- BUGS: AUTHOR PIC OVERFLOWS ON SMALL RESIZE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-8"> <!-- SPOTLIGHT POST STARTS HERE -->
						<div class="hero-post shadow">
							<img class="img-fluid max-width" alt="" src="img/02.jpg">
							<div class="hero-post-badges">
								<i class="fas fa-clock"></i>
								<span>DayMonthYear</span>
							</div>
							<div class="hero-post-content">
								<div class="row">
									<div class="authorpic col-3">
										<img class="img-fluid rounded-circle" alt="Author" src="img/author.jpg">
									</div>
									<div class="headline col-9 align-text-bottom shadow">
										<h2>Randy orton</h2>
									</div>
								</div>
							</div>
						</div>	
					</div>	 <!-- SPOTLIGHT POST ENDS HERE -->

					<div class="col-lg-4"> <!-- SIDE POSTS START -->
						<div class="hero-post shadow">
							<img class="img-fluid max-width" alt="" src="img/02.jpg">
							<div class="hero-post-badges">
								<i class="fas fa-clock"></i>
								<span>DayMonthYear</span>
							</div>
							<div class="hero-post-content">
								<div class="row">
									<div class="col-3">
										<img class="img-fluid rounded-circle" alt="Author" src="img/author.jpg">
									</div>
									<div class="col-9">
										<h3>Randy orton</h3>
									</div>
								</div>
							</div>
						</div>	
						<div class="hero-post shadow">
							<img class="img-fluid max-width" alt="" src="img/02.jpg">
							<div class="hero-post-badges">
								<i class="fas fa-clock"></i>
								<span>DayMonthYear</span>
							</div>
							<div class="hero-post-content">
								<div class="row">
									<div class="col-3">
									<img class="img-fluid rounded-circle" alt="Author" src="img/author.jpg">
									</div>
									<div class="col-9">
										<h3>Randy orton</h3>
									</div>						
								</div>
							</div>
						</div>  <!-- SIDE POSTS END -->	
					</div>
	
				</div>	
			</div>	
		</section>	 <!-- HERO SECTION END-->

		<section class="blog-posts py-4">   <!-- BLOG SECTION START-->
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<article class="blog-post">
							<div class="col-sm-3">
								<img class="img-fluid" alt="" src="img/01.jpg">
							</div>
							<div class="col-sm-9">
								<h3>POSTPSTDO</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae nobis corrupti mollitia nam fugit?</p>
							</div>
							<div class="blog-post-badge">
								<p><i class="fas fa-clock"></i>DayMonthYear</p>
							</div>
						</article>
						<article class="blog-post">
							<div class="col-sm-3">
								<img class="img-fluid" alt="" src="img/01.jpg">
							</div>
							<div class="col-sm-9">
								<h3>POSTPSTDO</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae nobis corrupti mollitia nam fugit?</p>
							</div>
							<div class="blog-post-badge">
								<p><i class="fas fa-clock"></i>DayMonthYear</p>
							</div>
						</article>
						<article class="blog-post">
							<div class="col-sm-3">
								<img class="img-fluid" alt="" src="img/01.jpg">
							</div>
							<div class="col-sm-9">
								<h3>POSTPSTDO</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae nobis corrupti mollitia nam fugit?</p>
							</div>
							<div class="blog-post-badge">
								<p><i class="fas fa-clock"></i>DayMonthYear</p>
							</div>
						</article>
					</div>

					<aside class="col-md-4">  <!-- SIDE SECTION START-->
						<div class="row text-center">
							<div class="col-sm-4">
								<a class="links py-4 w-100"> 
									<i class="fas fa-globe-asia"></i>
								</a>	
							</div>
							<div class="col-sm-4">
								<a class="links py-4 w-100">
									<i class="fab fa-facebook"></i>
								</a>	
							</div>
							<div class="col-sm-4">
								<a class="links py-4 w-100">
									<i class="fab fa-youtube"></i>
								</a>	
							</div>
						</div>	
							<h4 class="aside-heading mt-4">Barangay Officers</h4>  <!-- NEED TO IMPLEMENT BARANGAY OFFICER SYSTEM FOR USER FRIENDLY DISPLAYING OF OFFICERS -->
							<article class="row officers mb-3">
								<div class="col-sm-4">
									<img class="img-fluid rounded-circle" alt="" src="img/author.jpg">
								</div>
								<div class="col-sm-8">
									<h5>Randy Orton</h5>
									<p>The Viper. The Legend Killer. He comes out of nowhere.</p>
								</div>
							</article>	
							<article class="row officers mb-3">
								<div class="col-sm-4">
									<img class="img-fluid rounded-circle" alt="" src="img/author2.jpg">
								</div>
								<div class="col-sm-8">
									<h5>John Cena</h5>
									<p>Zhong Xi Na is now a part timer wrestler and full time Chinese.</p>
								</div>
							</article>	
							<article class="row officers mb-3">
								<div class="col-sm-4">
									<img class="img-fluid rounded-circle" alt="" src="img/author3.jpg">
								</div>
								<div class="col-sm-8">
									<h5>Paul Heyman</h5>
									<p>The reigning defending WWE Undisputed Heavyweight Champion of the world.</p>
								</div>
							</article>	
						</div>
					</aside><!-- SIDE SECTION END-->
				</div>
			</div>	
		</section>	 <!-- BLOG SECTION END-->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h4>Infoscope - Barangay San Jose</h4>
						<p>This is a website for the officers and residents of Barangay San Jose, Dasmarinas City.</p>
					</div>
					<div class="col-md-4 text-center">
						
					</div>
					<div class="col-md-4">
						<h4>Links</h4>
						<ul>
							<li>Home</li>
							<li>Government</li>
							<li>Captain Facebook</li>
						</ul>
					</div> 	
				</div>
				<div class="w-100 text-center copyright">
					<p>&copy; 2021. CREATED BY SANTIAGOLD. ALL RIGHTS RESERVED.</p>
				</div>
			</div>	
		</footer>		

		<script src="js/nav.js"></script>
	</body>
</html>