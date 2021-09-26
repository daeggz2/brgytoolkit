<div class="header">
			
				<img class="emblem" src="img/dasmalogo.png">
				<a class="hometitle" href="index.php"><h1>Barangay San Jose</h1></a>

			<button class="hamburger" id="hamburger"><i class="fas fa-bars"></i></button>		
</div>
<nav class="nav">	
			<div class="sidebar">	
				<h2>Navigation</h2>						
					<ul class="nav-ul" id="nav-ul">
						<?php if (isset($_SESSION['currentuser'])) { ?>			
							<li class="nav-item"><a class="nav-link" href="announcements.php">Announcements</a></li>
							<li class="nav-item"><a class="nav-link" href="residents.php">Residents</a></li>
							<li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
							<li class="nav-item"><a class="nav-link" href="blotters.php">Blotters</a></li>
							<li class="nav-item"><a class="nav-link" href="reports.php">Information Reports</a></li>
							<li class="nav-item"><a class="nav-link" href="prints.php">Printable Forms</a></li>
							<li class="nav-item"><a class="nav-link" href="backup.php">Backup and Import Data</a></li>
							<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
						<?php } ?>
					</ul>		
			</div>		
			<div class="overlay"></div>	
</nav>