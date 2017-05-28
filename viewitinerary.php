<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
  	  <?php
    session_start();
    if($_SESSION['user']){
    }
    else{
      header('location: login.php');
    }
    $user = $_SESSION['user'];
  ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
		</div>
		<a href="#" class="navbar-left"><img src="pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
		<a class="navbar-brand" href="#">UP Office of Admissions</a>
		<ul class="nav navbar-nav">
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="Rates">Records</a></li>
			<li class = "active"><a href="itinerary.php">Itinerary</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<!-- baba -->
	<div class="container">
		<center>
			<h2 class="specialcolor">UPCAT Flight Schedule and Itinerary</h2>
		<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("upcatdb") or die("Cannot connect to database");
			      
			$query = mysql_query("SELECT * FROM `itinerary details t` WHERE tcc=".$_GET["id"]);
			$row = mysql_fetch_array($query);
			$save = $row;

			$query = mysql_query("SELECT date FROM `upcat_schedule` WHERE id=1");
			$day1 = mysql_fetch_array($query);
			$query = mysql_query("SELECT date FROM `upcat_schedule` WHERE id=2");
			$day2 = mysql_fetch_array($query);


			$date1 = date_create($day1["date"]);
			$date2 = date_create($day2["date"]);
			echo "<h4>";
			echo date_format($date1, 'F d');
			echo " - ";
			echo date_format($date2, 'd, Y');
			// echo date_format(date_sub($date,date_interval_create_from_date_string('2 days')),'F d, Y');
			echo "</h4>";
			echo "</center>";
			echo '<div class="container">';
		 ?>
		 	<br>
		 	<h3><b>Test Center:</b> <?php echo $save['tcc']; echo " - "; echo $save['TEST CENTER']?> </h3>
			
		 	<div class="col-sm-8">
		 			<center><h4 class="specialcolor"><b>Departure from Manila</b></h4>
		 			<div class="col-sm-5">
						<div class="form-group">
							<label for="nametag">Name Tag</label>
							<select class="form-control" id="nametag" name="nametag">
								<option>Dr.</option>
							</select>
				</div>
		 			</div>
		 	</div>

		 	
		 	<div class="col-sm-6">
		 	</div>





		 	<!-- container -->
			</div>
	</div>
</div>
</body>
</html>
