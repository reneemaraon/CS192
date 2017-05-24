<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add a Record</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
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
		<a href="#" class="navbar-left"><img src="../pics/logo.png" width="40px" hspace="20px" vspace="5px"></a>
		<a class="navbar-brand" href="#">UP Office of Admissions</a>
		<ul class="nav navbar-nav">
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="Rates">Records</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<!-- baba -->
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-2">
					<ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
						<li><a href="home.php">View List of Personnel</a></li>
						<li><a href="addrecord.php" class="active">Add Record</a></li>
						<li><a href="Invitation">Invitation</a></li>
						<li><a href="Response">Response</a></li>
						<li><a href="Assignment">Assignment (Regional)</a></li>
						<li><a href="Assignment_Dil">Assignment (Diliman)</a></li>
						<li><a href="Attendance">UPCAT Attendance</a></li>

				</ul>
			</div>
			<div class="col-sm-5">
					<!-- CONTENT -->
				<h2>Create Record</h2>


				<form METHOD="POST">
				<h3>Personal Details</h3>
				
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>


				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" id="lastName" name="lastName">
				</div>

				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" id="firstName" name="firstName">
				</div>
				<div class="form-group">
					<label for="middleName">Middle Name</label>
					<input type="text" class="form-control" id="middleName" name="middleName">
				</div>

				<div class="form-group">
					<label for="suffix">Suffix</label>
					<input type="text" class="form-control" id="suffix" name="suffix">
				</div>

				<div class="form-group">
					<label for="sex">Sex</label>
					<select class="form-control" id="sex" name="sex">
						<option>M</option>
						<option>F</option>
					</select>
				</div>


				<div class="form-group">
					<label for="bday">Birthday</label>
		   			<input data-format="dd/MM/yyyy hh:mm:ss" class="form-control" type="date" id="bday" name="bday">
				</div>
				
				<div class="form-group">
					<label for="status">Status</label>
					<input type="text" class="form-control" id="status" name="status">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address">
				</div>
								
				<div class="form-group">
					<label for="tel">Telephone Number</label>
					<input type="text" class="form-control" id="tel" name="tel">
				</div>
				
				<div class="form-group">
					<label for="mobileno">Mobile Number</label>
					<input type="text" class="form-control" id="mobileno" name="mobileno">
				</div>				


				<div class="form-group">
					<label for="mobileno">Email Address</label>
					<input type="text" class="form-control" id="emailadd" name="emailadd">
				</div>				
				<br>
	
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
  
  $image = mysql_real_escape_string($_POST['image']);  
  $id = mysql_real_escape_string($_POST['id']);
  $upcatPreAss = mysql_real_escape_string($_POST['upcatPreAss']);
  $nametag = mysql_real_escape_string($_POST['nametag']);
  $lastName = mysql_real_escape_string($_POST['lastName']);
  $firstName = mysql_real_escape_string($_POST['firstName']);
  $name=mysql_real_escape_string($firstName.' '.$lastName);

  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = mysql_query("Select * from user");

}

if($bool){
  $insert = mysql_query("INSERT INTO `Rates` (`id`,`Designation`) 
  									VALUES ('$id','$lastName');");
  
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user

  if (!$insert) echo mysql_error();
}
?>