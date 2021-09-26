<?php
	if(!isset($_SESSION)){
    session_start();    //maybe add into connections.php later???? 
   }
	  include_once("connections/connection.php");
	  $con = connection();
    $query = "SELECT gender, COUNT(*) AS 'number' FROM residents GROUP BY gender" ;
    $result = mysqli_query($con, $query);
?>

<html>
  <head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BRGY</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a13d5dfb35.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['gender', 'number'],
        <?php
            while($row = mysqli_fetch_array($result))
            {
                //echo "[ '".$row['gender']."' , ".$row['number']." ] ,";   
                echo "[ '$row[gender]', $row[number] ] ,";                
            }   
        ?>    
        ]);

        var options = {
          title: 'San Jose Residents Overview',     
          backgroundColor: { fill:'transparent' }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <?php include_once("nav.php") ?>	
    <div id="piechart" style="width: 900px; height: 500px;"></div>
   <script src="js/nav.js"></script>
  </body>

</html>
