<?php

	$servername = "localhost";  
	$username = "root";
	$password = "";
	$dbname = "upcatdb";

								// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
    $sql1 = "SELECT * FROM testcenters WHERE id=".$_GET["rid"];

	$result1 = $conn->query($sql1);		
    $result = $result1->fetch_assoc();
    $sql = "UPDATE Invites SET `Assg_TCTRC`=".$result["TctrCode"].", `Assg_TestingRoom`='".$result["Room"]."',`Assg_TestingHall`='".$result["BLDG"]."' WHERE id=".$_GET["id"];
	echo $sql;
	// mysqli_query
	if (mysqli_query($conn, $sql)) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . mysqli_error($conn);
	}
    header('location: attendanceregional.php');



?>
