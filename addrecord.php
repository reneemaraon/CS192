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
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Records</a></li>
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
						<li><a href="invitation.php">Invitation</a></li>
						<li><a href="response.php">Response</a></li>
						<li><a href="assignment.php">Assignment</a></li>
						<li><a href="attendance.php">UPCAT Attendance</a></li>

				</ul>
			</div>
			<div class="col-sm-5">
					<!-- CONTENT -->
				<h2>Create Record</h2>
				<form METHOD="POST">
				<h3>Personal Details</h3>
				<div class="form-group">
					<label for="IDno">ID No</label>
					<select class="form-control" id="IDno" name="IDno">
						<option>12345</option>
						<option>12346</option>
					</select>
				</div>
				</br>
				

				<b>Image </b></br><input type = "file"; name = "image"><br>
				<div class="form-group">
					<label for="nametag">Name Tag</label>
					<select class="form-control" id="nametag">
						<option>Dr.</option>
						<option>Prof.</option>
						<option>Mr.</option>
						<option>Ms.</option>

					</select>
				</div>

				<div class="form-group">
					<label for="upcatPreAss">UPCAT Pre-Assignment</label>
					<input type="text" class="form-control" id="upcatPreAss" name="upcatPreAss">
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
		   			<input data-format="dd/MM/yyyy hh:mm:ss" class="form-control" type="date" id="bday">
				</div>
				
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address">
				</div>
								
				<div class="form-group">
					<label for="tel">Telephone Number</label>
					<input type="text" class="form-control" id="tel">
				</div>
				
				Tel. No. (Home) <input type = "text"; name = "tel no"; size = "30"><br>
				Mobile No. <input type = "text"; name = "mobile no"; size = "30"><br>
				Email Address <input type = "text"; name = "email add"; size = "30"><br>
				<h3>Educational Attainment</h3>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDUCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SCHOOL<br>
				1. <input type = "text"; name = "educ 1"; size = "20"><input type = "text"; name = "year 1"; size = "11"><input type = "text"; name = "school 1"; size = "20"><br>
				2. <input type = "text"; name = "educ 2"; size = "20"><input type = "text"; name = "year 2"; size = "11"><input type = "text"; name = "school 2"; size = "20"><br>
				3. <input type = "text"; name = "educ 3"; size = "20"><input type = "text"; name = "year 3"; size = "11"><input type = "text"; name = "school 3"; size = "20"><br>
				<h3>Employment</h3>
				Faculty Rank/Designation <input type = "text"; name = "faculty rank"; size = "30"><br>
				Faculty/Admin/Research <input type = "text"; name = "faculty admin research"; size = "30"><br>
				Salary Grade <input type = "text"; name = "salary grade"; size = "5"><br>
				Tenure <select name = "Tenure"><option>Permanent<option>Temporary<option>Contractual<option>Casual<option>Others</select><br>
				Employee No. <input type = "text"; name = "faculty admin research"; size = "30"><br>
				Unit Code <select name = "unit code"><option></select><input type = "text"; name = "unit code"; size = "30"><br>
				Unit ID <select name = "unit code"><option></select><input type = "text"; name = "unit code"; size = "30"><br>
				Tel No. (Ofc) <input type = "text"; name = "tel no ofc"; size = "30"><br>
				Tin No. <input type = "text"; name = "tin no"; size = "30"><br>
				Bank <input type = "text"; name = "bank"; size = "30"><br>
				ATM No. <input type = "text"; name = "atm no"; size = "30"><br>
				<h3>Health/Medical Info</h3>
				1.<br><input type="checkbox"; name="allergic rhinitis">Allergic Rhinitis<br>
				<input type="checkbox"; name="allergies">Allergies<input type = "text"; name = "allergies"; size = "10"><br>
				2.<br><input type="checkbox"; name="asthma">Asthma<br>
				<input type="checkbox"; name="tuberculosis">Tuberculosis<br>
				<input type="checkbox"; name="primary complex">Primary Complex<br>
				<input type="checkbox"; name="urti">URTI<br>
				3. <br><input type="checkbox"; name="hypertension">Hypertension<br>
				<input type="checkbox"; name="coronary problems">Coronary Problems<br>
				4. <br><input type="checkbox"; name="migraines">Migraines<br>
				<input type="checkbox"; name="vertigo">Vertigo<br>
				5. <br><input type="checkbox"; name="diabetes">Diabetes<br>
				<input type="checkbox"; name="renal failure">Renal Failure<br>
				<input type="checkbox"; name="jaundice">Jaundice/Kidney Disorder<br>
				6. <br><input type="checkbox"; name="dysthemia">Dysthemia<br>
				<input type="checkbox"; name="bipolar disorder">Bipolar Disorder<br>
				<input type="checkbox"; name="phobias">Phobias<input type = "text"; name = "phobias"; size = "10"><br>
				<h3>Vital Signs</h3>
				Height <input type = "text"; name = "height"; size = "5"><br>
				Weight <input type = "text"; name = "weight"; size = "5"><br>
				BP <input type = "text"; name = "bp"; size = "5"><br>
				<input type = "submit"; name = "submit"; value = "Submit">
				</form>

							</div>
						</div>
				</div>
</body>
</html>


<?php

$bool = NULL;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $IDno = mysql_real_escape_string($_POST['IDno']);
  $lastName = mysql_real_escape_string($_POST['lastName']);
  $firstName = mysql_real_escape_string($_POST['firstName']);
  $middleName = mysql_real_escape_string($_POST['middleName']);
  $suffix = mysql_real_escape_string($_POST['suffix']);
  $sex = mysql_real_escape_string($_POST['sex']);

  echo($IDno);
  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
  $query = mysql_query("Select * from user");

}

if($bool){
  $insert = mysql_query("INSERT INTO `DIRINFO` (`ID`, `LASTNAME`, `FIRSTNAME`, `MIDDLENAME`) VALUES ('$IDno', '$lastName', '$firstName', '$middleName');");
  Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user

  if (!$insert) echo mysql_error();
}
?>