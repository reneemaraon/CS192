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

	$pid = $_GET["id"];

	$sql = "SELECT * FROM `Invites` WHERE id = '$pid'";
	$result = $conn->query($sql);
	mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
	mysql_select_db("upcatdb") or die("Cannot connect to database"); //connect to database
	$query = mysql_query("Select * from user");
	if ($result->num_rows > 0) {
			// output data of each row

			while($row = $result->fetch_assoc()) {

					$myid = $row["id"];

					echo '<tr>';
					echo '<td align="center">' .$row["id"] . '</td>'; 
					
					echo '<td align="center">' .$row["tblName"] . '</td>';
					echo '<td align="center">' .$row["numyears"] . '</td>';
					echo '<td align="center">' .$row["UCODE"] . '</td>';
					echo '<td align="center">' .$row["yrservice"] . '</td>';
					echo '<td align="center">' .$row["TCTRCODE"] . '</td>';
					echo '<br>';
					echo '<td align="center">' .$row["testcenter"] . '</td>';
					echo '<td align="center"><a href="changeassg.php?id='.$row["id"].'">'.$row["ASSG"] .'</a></td>';
					echo '<td align="center">';
					$id = $row["id"];
					$name = $row["tblName"];
					$year = date('Y');
					$tctrcode = $row["Assg_TCTRC"];
					$testcenter = $row["Assg_TestingHall"];

					$assg = $row["ASSG"];
					$insertion = mysql_query("INSERT INTO `CATDIREC` (`ID`, `NAME`, `YEAR`, `TCTRCODE`, `TESTCENTER`) VALUES ('$pid', '$name', '$year', '$tctrcode', '$testcenter')");

					if (!$insertion) echo mysql_error();
					
																

			}
	} else {
			echo "0 results";
	}
    header('location: attendanceregional.php');



?>
