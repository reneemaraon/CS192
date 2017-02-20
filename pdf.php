<?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$row=file('abc.txt');
$pdf->SetFont('Arial','B',6);	
foreach($row as $rowValue) {
	$data=explode(';',$rowValue);
	foreach($data as $columnValue)
		$pdf->Cell(25,5,$columnValue,1);
		$pdf->SetFont('Arial','',6);		
		$pdf->Ln();
}
$pdf->Output();
?>