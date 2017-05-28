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
	if($_SESSION['user'])
	{

	}
	else
	{
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
<form METHOD="POST">
	<div class="row" >
		<div class="col-sm-2">
			<ul id="sidebar" class="nav nav-stacked nav-pills" style="color: #660000">
				<li><a href="./Rates" class="active">Go Back To Rates</a></li>
			</ul>
		</div>
		<div class="col-sm-10">
			<div class="form-group">
				<label for="upcatPreAss">ID</label>
				<input type="text" class="form-control" id="id" name="id">
			</div>
			<div class="form-group">
				<label for="lastName">Designation</label>
				<input type="text" class="form-control" id="designation" name="designation">
			</div>

			<div class="form-group">
				<label for="firstName">Des Code</label>
				<input type="text" class="form-control" id="des_code" name="des_code">
			</div>
			<div class="form-group">
				<label for="middleName">Rate</label>
				<input type="text" class="form-control" id="rate" name="rate">
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
	$designation = mysql_real_escape_string($_POST['designation']);
	$des_code = mysql_real_escape_string($_POST['des_code']);
	$rate = mysql_real_escape_string($_POST['rate']);
	$bool = true;
	mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
	mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
	$query = mysql_query("Select * from user");
}
if($bool){
  $insert = mysql_query("INSERT INTO `Rates` (`id`, `Designation`, `Des_Code`, `Rate`) 
  VALUES ('$id', '$designation', '$des_code', '$rate');");
  Print '<script>alert("Successfully Added!");</script>'; // Prompts the user
  if (!$insert) echo mysql_error();
}
?>