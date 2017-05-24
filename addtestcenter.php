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
					<label for="upcatPreAss">id</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="upcatPreAss">TctrCode</label>
					<input type="text" class="form-control" id="TctrCode" name="TctrCode">
				</div>

				<div class="form-group">
					<label for="lastName">tctr_tag</label>
					<input type="text" class="form-control" id="tctr_tag" name="tctr_tag">
				</div>

				<div class="form-group">
					<label for="firstName">LVM_tag</label>
					<input type="text" class="form-control" id="LVM_tag" name="LVM_tag">
				</div>
				<div class="form-group">
					<label for="middleName">cluster</label>
					<input type="text" class="form-control" id="cluster" name="cluster">
				</div>
				<div class="form-group">
					<label for="middleName">Reg_tag</label>
					<input type="text" class="form-control" id="Reg_tag" name="Reg_tag">
				</div>
				<div class="form-group">
					<label for="middleName">BLDG</label>
					<input type="text" class="form-control" id="BLDG" name="BLDG">
				</div>
				<div class="form-group">
					<label for="middleName">Bldg_desc</label>
					<input type="text" class="form-control" id="Bldg_desc" name="Bldg_desc">
				</div>
				<div class="form-group">
					<label for="middleName">Room</label>
					<input type="text" class="form-control" id="Room" name="Room">
				</div>
				<div class="form-group">
					<label for="middleName">Cap</label>
					<input type="text" class="form-control" id="Cap" name="Cap">
				</div>
				<div class="form-group">
					<label for="middleName">active</label>
					<input type="text" class="form-control" id="active" name="active">
				</div>
				<div class="form-group">
					<label for="middleName">Remarks</label>
					<input type="text" class="form-control" id="Remarks" name="Remarks">
				</div>
				<div class="form-group">
					<label for="middleName">N_E</label>
					<input type="text" class="form-control" id="N_E" name="N_E">
				</div>
				<div class="form-group">
					<label for="middleName">Min_P</label>
					<input type="text" class="form-control" id="Min_P" name="Min_P">
				</div>
				<div class="form-group">
					<label for="middleName">Max_P</label>
					<input type="text" class="form-control" id="Max_P" name="Max_P">
				</div>
				<div class="form-group">
					<label for="middleName">Total_N</label>
					<input type="text" class="form-control" id="Total_N" name="Total_N">
				</div>

				<div class="form-group">
					<label for="middleName">tag</label>
					<input type="text" class="form-control" id="tag" name="tag">
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
  $TctrCode = mysql_real_escape_string($_POST['TctrCode']);
  $tctr_tag = mysql_real_escape_string($_POST['tctr_tag']);
  $LVM_tag = mysql_real_escape_string($_POST['LVM_tag']);
  $cluster = mysql_real_escape_string($_POST['cluster']);
  $Reg_tag = mysql_real_escape_string($_POST['Reg_tag']);
  $BLDG = mysql_real_escape_string($_POST['BLDG']);
  $Bldg_desc = mysql_real_escape_string($_POST['Bldg_desc']);
  $Room = mysql_real_escape_string($_POST['Room']);
  $Cap = mysql_real_escape_string($_POST['Cap']);
  $active = mysql_real_escape_string($_POST['active']);
  $Remarks = mysql_real_escape_string($_POST['Remarks']);
  $N_E = mysql_real_escape_string($_POST['N_E']);
  $Min_P = mysql_real_escape_string($_POST['Min_P']);
  $Max_P = mysql_real_escape_string($_POST['Max_P']);
  $Total_N = mysql_real_escape_string($_POST['Total_N']);
  $tag = mysql_real_escape_string($_POST['tag']);


  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = mysql_query("Select * from user");

}

if($bool){
  $insert = mysql_query("INSERT INTO `TestCenters` (`id`)
  									VALUES ('$id');");
  
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user

  if (!$insert) echo mysql_error();
}
?>