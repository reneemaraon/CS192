
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

$sql = "SELECT * FROM `Invites` WHERE invite in (1,-1) LIMIT 500";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {


				echo $row["job_1"]; 
				echo ',' .$row["job_2"];
				$total = 0;
				if ($row["job_1"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_1"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_1"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_1"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_1"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_1"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_1"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_1"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_1"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_1"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_1"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_1"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_1"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_1"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_1"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_1"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_1"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_1"] == 18)
				{
					$total=$total+450;
				}



				if ($row["job_2"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_2"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_2"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_2"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_2"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_2"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_2"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_2"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_2"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_2"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_2"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_2"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_2"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_2"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_2"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_2"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_2"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_2"] == 18)
				{
					$total=$total+450;
				}
				if ($row["job_3"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_3"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_3"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_3"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_3"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_3"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_3"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_3"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_3"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_3"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_3"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_3"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_3"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_3"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_3"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_3"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_3"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_3"] == 18)
				{
					$total=$total+450;
				}
				if ($row["job_4"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_4"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_4"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_4"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_4"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_4"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_4"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_4"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_4"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_4"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_4"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_4"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_4"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_4"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_4"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_4"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_4"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_4"] == 18)
				{
					$total=$total+450;
				}
				if ($row["job_5"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_5"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_5"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_5"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_5"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_5"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_5"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_5"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_5"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_5"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_5"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_5"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_5"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_5"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_5"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_5"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_5"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_5"] == 18)
				{
					$total=$total+450;
				}
				if ($row["job_6"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_6"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_6"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_6"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_6"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_6"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_6"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_6"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_6"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_6"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_6"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_6"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_6"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_6"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_6"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_6"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_6"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_6"] == 18)
				{
					$total=$total+450;
				}

				if ($row["job_7"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_7"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_7"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_7"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_7"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_7"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_7"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_7"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_7"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_7"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_7"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_7"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_7"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_7"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_7"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_7"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_7"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_7"] == 18)
				{
					$total=$total+450;
				}
				if ($row["job_8"] == 1)
				{
					$total=$total+350;
				}
				if ($row["job_8"] == 2)
				{
					$total=$total+450;
				}
				if ($row["job_8"] == 3)
				{
					$total=$total+450;
				}
				if ($row["job_8"] == 4)
				{
					$total=$total+500;
				}
				if ($row["job_8"] == 5)
				{
					$total=$total+500;
				}
				if ($row["job_8"] == 6)
				{
					$total=$total+650;
				}
				if ($row["job_8"] == 7)
				{
					$total=$total+650;
				}
				if ($row["job_8"] == 8)
				{
					$total=$total+750;
				}
				if ($row["job_8"] == 9)
				{
					$total=$total+850;
				}
				if ($row["job_8"] == 10)
				{
					$total=$total+900;
				}
				if ($row["job_8"] == 11)
				{
					$total=$total+950;
				}
				if ($row["job_8"] == 12)
				{
					$total=$total+950;
				}
				if ($row["job_8"] == 13)
				{
					$total=$total+950;
				}
				if ($row["job_8"] == 14)
				{
					$total=$total+450;
				}
				if ($row["job_8"] == 15)
				{
					$total=$total+950;
				}
				if ($row["job_8"] == 16)
				{
					$total=$total+850;
				}
				if ($row["job_8"] == 17)
				{
					$total=$total+450;
				}
				if ($row["job_8"] == 18)
				{
					$total=$total+450;
				}

				$myid = $row["id"];

				$sql = "UPDATE `Invites` SET payment=$total WHERE id=$myid";

				if ($conn->query($sql) === TRUE) {
				   
				} else {
				    
				}

				$row["payment"] = $total;
				echo ',' . $row["payment"] . '<br>';
		}
} 


$conn->close();
?>