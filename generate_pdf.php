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

$sql = "SELECT * FROM `Invites`" ;
$result = $conn->query($sql);

$myfile = fopen("abc.txt", "w") or die("Unable to open file!");

$txt = "Jane Do2e\n";


if ($result->num_rows > 0) {
		// output data of each row


		while($row = $result->fetch_assoc()) {
		

		if($row["invite"] != 0)
		{
		fwrite($myfile, $row["id"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["tblName"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["yrservice"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["numyears"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["invite"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["UCODE"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["TCTRCODE"]);
		fwrite($myfile, "\n");
		}
}
}

echo('generated');

$conn->close();
fclose($myfile);


?>


