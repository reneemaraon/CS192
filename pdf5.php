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
$pdf->SetFont('Arial','',15);	

			$pdf->Cell(10,5,"UPCAT INVITATION 2018: Response");
			$pdf->Ln();
			$pdf->Cell(10,5,"_______________________________________________________________________________");
			$pdf->Ln();
			$pdf->SetFont('Arial','',8);	
			$pdf->Cell(10,5,date('l jS \of F Y h:i:s A'));
			$pdf->Ln();
			$pdf->Ln();
			$pdf->Cell(10,5,"ID");
			$pdf->Cell(30,5,"Name");
			$pdf->Cell(40,5,"Unit/College");
			$pdf->Cell(10,5,"ASSG");
			$pdf->Cell(20,5,"preferences");
			$pdf->Cell(20,5,"remarks");

			$pdf->Ln();

if ($result->num_rows > 0 ) {
		// output data of each row

		while($row = $result->fetch_assoc()) {
		
		if($row["invite"] != 0)
		{
			if($row["FAR"]==1){$d="F";}
			if($row["FAR"]==2){$d="A";}
			if($row["FAR"]==3){$d="R";}
			if($row["FAR"]==4){$d="o";}

			
			$pdf->Cell(10,5,$row["id"]);
			$pdf->Cell(30,5,$row["tblName"]);
			$pdf->Cell(40,5,$row["UCODE"]);
			$pdf->Cell(10,5,$row["ASSG"]);
			$pdf->Cell(20,5,$row["preferences"]);
			$pdf->Cell(20,5,$row["remarks"]);
			
			$pdf->Ln();


		}

}
}
$pdf->Output('Invitation.pdf','D');
$conn->close();


?>