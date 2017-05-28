<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add a Record</title>
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
			<li class="active"><a href="Rates">Records</a></li>
			<li><a href="itinerary.php">Itinerary</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<!-- baba -->
<div class="container-fluid">
	<div class="row" >
		<div class="col-sm-2">
			<ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
				<li><a href="./Ucode" class="active">Go Back To Ucode</a></li>
			</ul>
		</div>
			<div class="col-sm-5">
					<!-- CONTENT -->


				<form METHOD="POST">

				<div class="form-group">
					<label for="upcatPreAss">id</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="upcatPreAss">UCODE</label>
					<input type="text" class="form-control" id="UCODE" name="UCODE">
				</div>

				<div class="form-group">
					<label for="lastName">SYS_DIL</label>
					<input type="text" class="form-control" id="SYS_DIL" name="SYS_DIL">
				</div>

				<div class="form-group">
					<label for="firstName">UNIT</label>
					<input type="text" class="form-control" id="UNIT" name="UNIT">
				</div>
				<div class="form-group">
					<label for="middleName">COLL</label>
					<input type="text" class="form-control" id="COLL" name="COLL">
				</div>
				<div class="form-group">
					<label for="middleName">COLLUNIT</label>
					<input type="text" class="form-control" id="COLLUNIT" name="COLLUNIT">
				</div>
				<div class="form-group">
					<label for="middleName">wingside</label>
					<input type="text" class="form-control" id="wingside" name="wingside">
				</div>
				<div class="form-group">
					<label for="middleName">Location</label>
					<input type="text" class="form-control" id="Location" name="Location">
				</div>
				<div class="form-group">
					<label for="middleName">ADDR1</label>
					<input type="text" class="form-control" id="ADDR1" name="ADDR1">
				</div>
				<div class="form-group">
					<label for="middleName">ADDR2</label>
					<input type="text" class="form-control" id="ADDR2" name="ADDR2">
				</div>
				<div class="form-group">
					<label for="middleName">ADDR3</label>
					<input type="text" class="form-control" id="ADDR3" name="ADDR3">
				</div>
				<div class="form-group">
					<label for="middleName">thru</label>
					<input type="text" class="form-control" id="thru" name="thru">
				</div>
				<br>
				<input type = "submit" class="btn btn-primary" name = "submit" value = "Submit">
				</form>
				</div>

							</div>
						</div>
				</div>

</body>
</html>


<?php

$bool = NULL;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $id = mysql_real_escape_string($_POST['id']);  
  $UCODE = mysql_real_escape_string($_POST['UCODE']);
  $SYS_DIL = mysql_real_escape_string($_POST['SYS_DIL']);
  $UNIT = mysql_real_escape_string($_POST['UNIT']);
  $COLL = mysql_real_escape_string($_POST['COLL']);
  $COLLUNIT = mysql_real_escape_string($_POST['COLLUNIT']);
  $wingside = mysql_real_escape_string($_POST['wingside']);
  $Location = mysql_real_escape_string($_POST['Location']);
  $ADDR1 = mysql_real_escape_string($_POST['ADDR1']);
  $ADDR2 = mysql_real_escape_string($_POST['ADDR2']);
  $ADDR3 = mysql_real_escape_string($_POST['ADDR3']);
  $thru = mysql_real_escape_string($_POST['thru']);


  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = mysql_query("Select * from user");

}

if($bool){
  $insert = mysql_query("INSERT INTO `UCODE T` (`id`, `UCODE`, `SYS_DIL`, `UNIT`, `COLL`, `COLLUNIT`, `wingside`, `Location`, `ADDR1`, `ADDR2`, `ADDR3`, `thru`) 
  									VALUES ('$id', '$UCODE', '$SYS_DIL', '$UNIT', '$COLL', '$COLLUNIT', '$wingside', '$Location', '$ADDR1', '$ADDR2', '$ADDR3', '$thru');");
  
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user

  if (!$insert) echo mysql_error();
}
?>