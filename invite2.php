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
								$sql2 = "SELECT * FROM Invites WHERE id=$pid;";
								$result2 = $conn->query($sql2);

								$isinvited = 0;

								if ($result2->num_rows > 0) {
								    // output data of each row
								    while($row = $result2->fetch_assoc()) {
								        if ($row["invite"] == 1)
								        {
								        	$isinvited = 1;
								        }
								        else
								        {
								        	$isinvited = 0;
								        }
								    }
								}

								if($isinvited == 1)
								{
								$sql = "UPDATE Invites SET invite = 0 WHERE id=$pid;";	
								}
								else
								{
								$sql = "UPDATE Invites SET invite = 1 WHERE id=$pid;";
								}

								
								$result = $conn->query($sql);


								$conn->close();

								?>
								<script type="text/javascript">location.href = 'invitation.php';</script>
							</table>
			</div>
		</div>
</div>
</body>
</html>
