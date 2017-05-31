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
						<li><a href="home.php" >View List of Personnel</a></li>
						<li><a href="addrecord.php">Add Record</a></li>
						<li><a href="invitation.php">Invitation</a></li>
						<li><a href="Response">Response</a></li>
						<li><a href="attendanceregional.php">Assignment (Regional)</a></li>
						<li><a href="attendancediliman.php" class="active">Assignment (Diliman)</a></li>
						<li><a href="Attendance">UPCAT Attendance</a></li>

				</ul>
			</div>
			<div class="col-sm-9">
						<!-- CONTENT -->
						<h3> User </h3>
						<br>
						<!-- <form class="form-inline" action="filterpersonnel.php" method="POST">
						
							 <br> -->
							<!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->

							<table class="table">
								<thead>
									<tr>
										<th style="text-align:center">ID</th>
										<th style="text-align:center">Username</th>
										<!-- <th style="text-align:center">ASSG</th> -->
										<th style="text-align:center">Name</th>
										<th style="text-align:center">Password</th>
										<th style="text-align:center">Email</th>

										<th style="text-align:center">Phone</th>
										<th style="text-align:center">Rights</th>
									</tr>
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

								$sql = "SELECT * FROM `user`";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {

												echo '<tr>';
												echo '<td align="center">' .$row["userID"] . '</td>'; 
												echo '<td align="center">' .$row["username"] . '</td>'; 
												echo '<td align="center">' .$row["name"] . '</td>'; 
												echo '<td align="center">' .$row["password"] . '</td>'; 
												echo '<td align="center">' .$row["email"] . '</td>'; 
												echo '<td align="center">' .$row["phone"] . '</td>'; 
												echo '<td align="center">' .$row["rights"] . '</td>'; 
												echo '<td align="center"><a href="userchange.php?id='.$row["userID"].'">Change</a></td>';	
											
												
												echo '</tr>';
										}
								} else {
										echo "0 results";
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
