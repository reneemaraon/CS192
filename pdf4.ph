<?php
require('fpdf/fpdf.php');

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

$sql = "SELECT * FROM `Invites` INNER JOIN `DIRINFO` ON Invites.id=DIRINFO.id WHERE invite IN (1,-1) LIMIT 1000;" ;
$result = $conn->query($sql);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);	


			$pdf->Cell(10,10,"ID");
			$pdf->Cell(20,10,"Name");
			$pdf->Cell(20,10,"FAR");
			$pdf->Cell(20,10,"UPCAT YEAR");
			$pdf->Cell(20,10,"Ucode");
			$pdf->Cell(20,10,"RE");
			$pdf->Cell(20,10,"RA");
			$pdf->Cell(20,10,"S");
			$pdf->Cell(20,10,"E");
			$pdf->Cell(20,10,"EP");
			$pdf->Cell(20,10,"P");
			$pdf->Cell(20,10,"Designation");
			$pdf->Cell(20,10,"Prev Test Center");
			$pdf->Cell(20,10,"No. of years");
			$pdf->Ln();

if ($result->num_rows > 0 ) {
		// output data of each row

		while($row = $result->fetch_assoc()) {
		
		if($row["invite"] != 0)
		{

			
			$pdf->Cell(10,10,$row["id"]);
			$pdf->Cell(20,10,$row["tblName"]);
			$pdf->Cell(20,10,$row["FAR"]);
			$pdf->Cell(20,10,$row["upcatyr"]);
			$pdf->Cell(20,10,$row["UCODE"]);
			$pdf->Cell(20,10,$row["RE"]);
			$pdf->Cell(20,10,$row["RA"]);
			$pdf->Cell(20,10,$row["S"]);
			$pdf->Cell(20,10,$row["E"]);
			$pdf->Cell(20,10,$row["EP"]);
			$pdf->Cell(20,10,$row["P"]);
			$pdf->Cell(20,10,$row["testcenter"]);
			$pdf->Cell(20,10,$row["numyears"]);
			$pdf->Ln();


		}

}
}
$pdf->Output('Invitation.pdf','D');
$conn->close();


?>