<!-- NEEDS FURTHER GATEKEEPING CODES -->

<?php
    if(!isset($_SESSION)){
            session_start();    
     }
	include_once("connections/connection.php");
	$con = connection();
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
        $user = $con->query($sql) or die ($con->error);
        $total = $user->num_rows;
        $row = $user->fetch_assoc();
        if ($total > 0) {
            $_SESSION['currentuser'] = $row['username'];
            $_SESSION['position'] = $row['position'];
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
        }
        else{
            echo "User does not exist";
        }
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

    <h2>Login</h2>
    <div>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br/>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br/>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <script src="js/nav.js"></script>
	</body>
</html>