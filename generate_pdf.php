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

$sql = "SELECT * FROM `DIRINFO`  LIMIT 10, 20" ;
$result = $conn->query($sql);

$myfile = fopen("abc.txt", "w") or die("Unable to open file!");

$txt = "Jane Do2e\n";


if ($result->num_rows > 0) {
		// output data of each row


		while($row = $result->fetch_assoc()) {
		
		fwrite($myfile, $row["ID"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["STATUS"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["NAME"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["YEAR"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["TCTRCODE"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["testcenter"]);
		fwrite($myfile, ";");
		fwrite($myfile, $row["ASSG"]);
		fwrite($myfile, "\n");

}
}

echo('generated');

$conn->close();
fclose($myfile);


?>


