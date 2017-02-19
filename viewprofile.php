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
			<div class="col-sm-2">
				<h2> HELLO THERAAKNA LKFJGLAKJSCNL AJSDNCAGR ASKDJASKJKDLA SAJDANS </h2>
					<!-- CONTENT -->


			    <?php
			        if(!empty($_GET['id'])){
			          $pid=$_GET['id'];
			          $_SESSION['chosenPID'] = $pid;
			          $id_exists=true;
			          mysql_connect("localhost", "root", "") or die(mysql_error());
			          mysql_select_db("upcatdb") or die("Cannot connect to database");
			          $eventName=mysql_fetch_array(mysql_query("SELECT eventName FROM event WHERE eventID = '$eid'"))[0];
			          $query = mysql_query("SELECT theaterName,showDate,startTime,endTime,COUNT(isReserved) as avSeats FROM shows,theater,tickets WHERE shows.showID=tickets.showID AND shows.theaterID=theater.theaterID AND eventID='$eid' AND isReserved=0 GROUP BY tickets.showID ");
			          while($row = mysql_fetch_array($query)){
			            print "<tr>";
			              print '<td align="center">'. $row['theaterName']."</td>";
			              print '<td align="center">'. $row['showDate']."</td>";
			              print '<td align="center">'. $row['startTime']."</td>";
			              print '<td align="center">'. $row['endTime']."</td>";
			              print '<td align="center">'. $row['avSeats']."</td>";


			            print "</tr>";
			          }

			        }
			    ?>


			</div>
		</div>
</div>
</body>
</html>
