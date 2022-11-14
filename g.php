<?php
require('fpdf184\fpdf.php');
function receipt($car, $by,$date){
    $pdf = new FPDF();
    $pdf-> AddPage(0,array(100,100));
    $pdf->SetFont('Arial', 'B',15);

    $pdf->Image('Untitled.png',5,8,33);
    $pdf->Image('Untitled.png',5,20,33);
    $pdf->Image('Untitled.png',5,30,33);
    $pdf->Image('Untitled.png',5,40,33);
    $pdf->Image('Untitled.png',5,50,33);
    $pdf->Image('Untitled.png',5,60,33);
    $pdf->Image('Untitled.png',40,8,33);
    $pdf->Image('Untitled.png',40,20,33);
    $pdf->Image('Untitled.png',40,30,33);
    $pdf->Image('Untitled.png',40,40,33);
    $pdf->Image('Untitled.png',40,50,33);
    $pdf->Image('Untitled.png',40,60,33);
    $pdf->Image('Untitled.png',70,8,33);
    $pdf->Image('Untitled.png',70,20,33);
    $pdf->Image('Untitled.png',70,30,33);
    $pdf->Image('Untitled.png',70,40,33);
    $pdf->Image('Untitled.png',70,50,33);
    $pdf->Image('Untitled.png',70,60,33);

    $pdf->Cell(50, 20, 'PAYED BY :'.$by,0,1);

    $pdf->Cell(50, 20, 'PAYED FOR :'.$car,0,4,);

    $pdf->Cell(50, 20, 'PAYED ON :'.$date,0,7);


    $pdf->Output();
}



?>
    
    

