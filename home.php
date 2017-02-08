<!DOCTYPE html>
<html>
<head>
<title>Hompepage</title>
<link rel="stylesheet" type="text/css" href="css/style2.css?<?php echo time(); ?>" title="style" />
<link rel="stylesheet" href="styles.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
</head>


  <?php
    session_start();
    if($_SESSION['user']){
    }
    else{
      header('location: login.php');
    }
    $user = $_SESSION['user'];
  ?>
<div class="nav">
  <a href="addrecord.php">Add Record</a>
	<a href="database/assignment.php">Assignment</a>
	<a href="database/Attendance.php">Attendance</a>
	<a href="database/Catdirec.php">Catdirec</a>
	<a href="database/Cattable.php">Cat Table</a>
	<a href="database/DilimanRooms.php">Diliman Rooms</a>
	<a href="database/Driver.php">Driver</a>
	<a href="database/Itinerary.php">Itinerary</a>
	<a href="database/RegionalDirectory.php">Regional Directory</a>
	<a href="database/TravelSchedule.php">Travel Schedule</a>
	<a href="database/UPCAT-IS.php">UPCAT-IS</a>
  <a href="logout.php">Logout</a>

</div>



<div style="margin:auto; width:630px; height: 110px;">

	<div style= "background-color:grey; width:200px; height:100px;float:left; margin-right:5px;">
		<a href="#" style="">Placeholder</a>
	</div>
	<div style= "background-color:grey; width:200px; height:100px;float:left;margin-right:5px;">
		<a href="#">View List of Personnel</a>

	</div>
	<div style= "background-color:grey; width:200px; height:100px;float:left;margin-right:5px;">
		<a href="#">Add/Modify record</a>
	</div>

</div>



<div style="margin:auto; width:630px;">

	<div style= "background-color:grey; width:200px; height:100px;float:left; margin-right:5px;">
		<a href="#">Invitation</a>
	</div>
	<div style= "background-color:grey; width:200px; height:100px;float:left;margin-right:5px;">
		<a href="#">Response</a>
	</div>
	<div style= "background-color:grey; width:200px; height:100px;float:left;margin-right:5px;">
		<a href="#">Assignment</a>
	</div>
</div>

<div style="clear:left"></div>
<div style="float:left">
<ul>


</ul>

</div>

</body>


<body>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

</body>
</html>
