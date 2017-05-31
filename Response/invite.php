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
						<li><a href="addrecord.php">Add Record</a></li>
						<li><a href="Invitation" class="active">Invitation</a></li>
						<li><a href="Response">Response</a></li>
						<li><a href="Assignment">Assignment (Regional)</a></li>
						<li><a href="Assignment_Dil" >Assignment (Diliman)</a></li>
						<li><a href="Attendance">UPCAT Attendance</a></li>

				</ul>
			</div>
			<div class="col-sm-9">
						<!-- CONTENT -->
						<h3 class="specialcolor"> Inviting <?php echo $_GET["id"];$pid=$_GET["id"]; $_SESSION["assignp"]= $pid;?>  </h3>
						<br>
						<form class="form-inline" action="filterassign.php" method="POST">
							
		

					
							
							 </form>
							 <br>
							 <br>
							<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->

							<table class="table">
								<thead>

								<tbody>

								<!--Table. Calls mysql to show the data-->
								<?php
								$servername = "localhost";  
								$username = "root";
								$password = "";
								$dbname = "upcatdb";
								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
								} 

								$sql = "SELECT * FROM `Invites` WHERE id=$pid";
								$result = $conn->query($sql);
								$employee = [];
								while(($row =  $result->fetch_assoc())) {
								    
								    $employee[] = $row["invite"];

								    $row["invite"] = 0;
								    

								}			

								$sql2 = "SELECT * FROM childdependent WHERE emp_idno=$pid";
								$result2 = $conn->query($sql2);
								$types = array();
								echo "Current Year: ", date('Y');
								echo "<br>";
								echo "Birthdays of Children";
								echo "<br>";
								$warning = 0;
								while(($row2 =  $result2->fetch_assoc())) {
								    
								    $types[] = $row2["bdate"];

								    echo $row2["bdate"];

								    echo " ";
								    

								    if (date('Y')-$row2["bdate"] == 33)
								    {
								    	echo "Warning! May be taking UPCAT";
								    	$warning = 1;
								    }
								    if (date('Y')-$row2["bdate"] == 16)
								    {
								    	echo "Warning! May be taking UPCAT";
								    	$warning = 1;
								    }
								    if (date('Y')-$row2["bdate"] == 17)
								    {
								    	echo "Warning! May be taking UPCAT";
								    	$warning = 1;
								    }
								    echo "<br>";
								}

								if($warning == 0)
								{
								header("location:javascript://history.go(-1)");
								}

		
								$conn->close();
								?>
								</tbody>
							</table>
			</div>
		</div>
</div>
</body>
</html>
