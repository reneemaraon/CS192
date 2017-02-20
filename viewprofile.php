<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Profile</title>
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
    $id_exists = false;
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
						<li><a href="home.php" class="active">View List of Personnel</a></li>
						<li><a href="addrecord.php">Add Record</a></li>
						<li><a href="invitation.php">Invitation</a></li>
						<li><a href="response.php">Response</a></li>
						<li><a href="assignment.php">Assignment</a></li>
						<li><a href="attendance.php">UPCAT Attendance</a></li>

				</ul>
			</div>
			<div class="col-sm-3">
					<!-- CONTENT -->
					<!-- LEFT SIDE OF PROFILE -->


			    <?php
			        if(!empty($_GET['id'])){
			          $pid=$_GET['id'];
			          $_SESSION['chosenPID'] = $pid;
			          $id_exists=true;
			          mysql_connect("localhost", "root", "") or die(mysql_error());
			          mysql_select_db("upcatdb") or die("Cannot connect to database");
			      
			          $query = mysql_query("SELECT * FROM DIRINFO WHERE ID='$pid' ");
			          $row = mysql_fetch_array($query);


			          echo '<h5 class="specialcolor"><b> Profile ID No : '.$row['ID']."</h5><br>";
			        }
			    ?>
			    	<center>
				    <img src="pics/NoImage.JPG" width="200px">
					</center>
					<br>
					<br>
					<div class="btn-group btn-group-justified">
				    <a href="#" class="btn btn-primary">Add Image</a>
				    <a href="#" class="btn btn-primary">Delete Image</a>
					</div>
					<br>

				    <?php
				    	echo '<h5><b>Name :</b> '.$row['NAME'].'</h4>';
				    	echo '<h5><b>Birthdate:</b> '.date($row['BIRTHDATE']).'</h4>';
				    	echo '<h5><b>Sex:</b> '.$row['SEX'].'</h4>';
				    	echo '<h5><b>Home:</b> '.$row['HOMEADDR'].'</h4><br>';
				    	
				    	echo '<h5><b>Position:</b> '.$row['POSITION'].'</h4>';
				    	echo '<h5><b>Tenure:</b> '.$row['TENURE'].'</h4>';
				    	echo '<h5><b>Unit/Department:</b> '.$row['UNIT'].'</h4>';
				    	echo '<h5><b>Coll/Office:</b> '.$row['COLL'].'</h4>';
				    	echo '<h5><b>FAR:</b> '.$row['FAR'].'</h4>';
				    	echo '<h5><b>Salary Grade:</b> '.$row['SG'].'</h4><br>';

				    	echo '<h5 class="specialcolor"><b>Contact Information</b></h5>';
				    	echo '<div class="col-sm-4">
				    			
				    			<h5><b>Home: </b></h5>
				    			<h5><b>Office: </b></h5>
				    			<h5><b>Mobile: </b></h5>
				    			<h5><b>Email: </b></h5>
				    			
				    		</div>
				    		<div class="col-sm-8">
				    			<h5>'.$row['TEL2'].'</h5>
				    			<h5>'.$row['TEL1'].'</h5>
				    			<h5>'.$row['CELFONE'].'</h5>
				    			<h5>'.$row['EMAIL'].'</h5>

				    		</div>';
				    ?>
			</div>
			<div class="col-sm-7">
				<!-- RIGHT SIDE OF PROFILE -->
				<h3 class="specialcolor">UPCAT Assignment Statistics </h3>

				<div class="col-sm-2">
					<div class="table-bordered">
						<table class="table">
							<thead>
								<tr>
									<th style="text-align:center">NYR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php echo '<td align="center"><h4><b>'.$row['NYR'].'</h4></td>';?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-sm-10">
					<div class="table-bordered">
						<table class="table">
							<thead>
								<tr class="specialcolor">
									<th style="text-align:center">RE</th>
									<th style="text-align:center">RA</th>
									<th style="text-align:center">S</th>
									<th style="text-align:center">E</th>
									<th style="text-align:center">EP</th>
									<th style="text-align:center">P</th>
									<th style="text-align:center">PA</th>
									<th style="text-align:center">A</th>
									<th style="text-align:center">BA</th>
									<th style="text-align:center">C</th>
									<th style="text-align:center">CW</th>
									<th style="text-align:center">D</th>
									<th style="text-align:center">TE</th>
									<th style="text-align:center">TL</th>
									<th style="text-align:center">TR</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<?php 
									echo '<td align="center">'.$row['RE'].'</td>';
									echo '<td align="center">'.$row['RA'].'</td>';
									echo '<td align="center">'.$row['S'].'</td>';
									echo '<td align="center">'.$row['E'].'</td>';
									echo '<td align="center">'.$row['EP'].'</td>';
									echo '<td align="center">'.$row['P'].'</td>';
									echo '<td align="center">'.$row['PA'].'</td>';
									echo '<td align="center">'.$row['A'].'</td>';
									echo '<td align="center">'.$row['BA'].'</td>';
									echo '<td align="center">'.$row['C'].'</td>';
									echo '<td align="center">'.$row['CW'].'</td>';
									echo '<td align="center">'.$row['D'].'</td>';
									echo '<td align="center">'.$row['TE'].'</td>';
									echo '<td align="center">'.$row['TL'].'</td>';
									echo '<td align="center">'.$row['TR'].'</td>';

									?>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
				<br>
				<br>
				<br>
				<br>
				<br>

				<br>
				<br>
				<h3 class="specialcolor">UPCAT History </h3>

			
				<div class="table-bordered">
					<table class="table">
						<thead>
							<tr class="specialcolor">
								<th style="text-align:center">Year</th>
								<th style="text-align:center">ASSG</th>
								<th style="text-align:center">tctr</th>
								<th style="text-align:center">Test Center</th>
								<th style="text-align:center">Building</th>
								<th style="text-align:center">Room</th>
								<th style="text-align:center">Remarks</th>

							</tr>
						</thead>
						<tbody>
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

								$sql = "SELECT * FROM `CATDIREC` WHERE ID='$pid'";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {

												echo '<tr>';
												echo '<td align="center">' .$row["YEAR"] . '</td>';
												echo '<td align="center">' .$row["ASSG"] . '</td>';
												echo '<td align="center">' .$row["TCTRCODE"] . '</td>';
												echo '<td align="center">' .$row["TESTCENTER"] . '</td>';
												echo '<td align="center">' .$row["BUILDING"] . '</td>'; 
												echo '<td align="center">' .$row["ROOM"] . '</td>';
												echo '<td align="center">' .$row["Remarks"] . '</td>';
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
</div>
</body>
</html>
