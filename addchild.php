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
				<li><a href="./childdependent" class="active">Go Back</a></li>
			</ul>
		</div>
			<div class="col-sm-5">
					<!-- CONTENT -->
				<h2>Create Record</h2>


				<form METHOD="POST">
				<h3>Personal Details</h3>
				
				<!-- <div class="form-group">
					<label for="IDno">ID No</label>
					<select class="form-control" id="IDno" name="IDno">
						<option>12345</option>
						<option>12346</option>
					</select>
				</div>
				</br>
				 -->

				

<!--ID	Designation	Des_Code	Rate-->

				<div class="form-group">
					<label for="upcatPreAss">ID</label>
					<input type="text" class="form-control" id="ID" name="ID">
				</div>

				<div class="form-group">
					<label for="lastName">emp_idno</label>
					<input type="text" class="form-control" id="emp_idno" name="emp_idno">
				</div>

				<div class="form-group">
					<label for="firstName">anak_name</label>
					<input type="text" class="form-control" id="anak_name" name="anak_name">
				</div>
				<div class="form-group">
					<label for="middleName">bdate</label>
					<input type="text" class="form-control" id="bdate" name="bdate">
				</div>
				<div class="form-group">
					<label for="middleName">lookup_id</label>
					<input type="text" class="form-control" id="lookup_id" name="lookup_id">
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
  
  $ID = mysql_real_escape_string($_POST['ID']);  
  $emp_idno = mysql_real_escape_string($_POST['emp_idno']);
  $anak_name = mysql_real_escape_string($_POST['anak_name']);
  $bdate = mysql_real_escape_string($_POST['bdate']);
  $lookup_id = mysql_real_escape_string($_POST['lookup_id']);
  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = mysql_query("Select * from user");

}

if($bool){
  $insert = mysql_query("INSERT INTO `childdependent` (`ID`, `emp_idno`, `anak_name`, `bdate`, `lookup_id`)
  									VALUES ('$ID', '$emp_idno', '$anak_name', '$bdate', '$lookup_id');");
  
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user

  if (!$insert) echo mysql_error();
}
?>