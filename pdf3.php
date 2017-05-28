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


			$pdf->Cell(20,10,"Name");
			$pdf->Cell(20,10,"Designation");
			$pdf->Cell(20,10,"UNIT");
			$pdf->Cell(20,10,"ATM NO");
			$pdf->Cell(20,10,"T.I.N.");
			$pdf->Cell(20,10,"Amount");
			$pdf->Cell(20,10,"WTax");
			$pdf->Cell(20,10,"Due");
			$pdf->Ln();

if ($result->num_rows > 0 ) {
		// output data of each row

		while($row = $result->fetch_assoc()) {
		
		if($row["invite"] != 0)
		{

			
			$pdf->Cell(20,10,$row["tblName"]);
			$pdf->Cell(20,10,$row["ASSG"]);
			$pdf->Cell(20,10,$row["UCODE"]);
			$pdf->Cell(20,10,$row["ATM NO"]);
			$pdf->Cell(20,10,$row["TIN NO"]);
			$pdf->Cell(20,10,$row["payment"]);
			$pdf->Cell(20,10,$row["payment"]*.12);
			$pdf->Cell(20,10,$row["payment"]*1.12);
			$pdf->Ln();


		}

}
}
$pdf->Output('Invitation.pdf','D');
$conn->close();


?>