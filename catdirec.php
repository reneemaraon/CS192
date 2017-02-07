<!DOCTYPE html>
<html>
<head>
<title>The Garage Manila International</title>
<link rel="stylesheet" type="text/css" href="style.css?<?php echo time(); ?>" title="style" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>-->

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
</head>

<div class="nav">
	<a class=mainlogo href="#"><img src="images/logo/logo.jpg"></a>
	<div style="padding: 15px 20px; float:left;">
		
		
	</div>
	<div style="clear:left"></div>

	<ul>
		<li><a href="#">Dirinfo</a></li>
		<li><a href="#">Catdirec</a></li>
		<li><a href="#">Ucode</a></li>
		<li><a href="#">Payroll</a></li>
	</ul>
	<div style="clear:left"></div>  
</div>

<input placeholder="Search..." required style="height:30px; width:500px; float:left;">
<button>Search</button>

<div style="clear:left"></div>  


<?php
$servername = "localhost";	
$username = "root";
$password = "";
$dbname = "Catdirec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `upcat payroll`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
		// output data of each row
		echo '<table border="1">';

		while($row = $result->fetch_assoc()) {

				echo '<tr>';
				echo '<td>' .$row["COL 1"] . '</td>';
				
				echo '<td>' .$row["COL 2"] . '</td>';
				echo '<td>' .$row["COL 3"] . '</td>';
				echo '<td>' .$row["COL 4"] . '</td>';
				echo '<td>' .$row["COL 5"] . '</td>';
				echo '<td>' .$row["COL 6"] . '</td>';
				echo '<td>' .$row["COL 7"] . '</td>';
				echo '<td>' .$row["COL 8"] . '</td>';
				echo '<td>' .$row["COL 9"] . '</td>';
				echo '<td>' .$row["COL 10"] . '</td>';
				echo '<td>' .$row["COL 11"] . '</td>';
				echo '<td>' .$row["COL 12"] . '</td>';
				echo '<td>' .$row["COL 13"] . '</td>';
				echo '<td>' .$row["COL 14"] . '</td>';

				
				echo '</tr>';
		}
		echo '</table>';
} else {
		echo "0 results";
}



$conn->close();
?>




</body>
</html>
