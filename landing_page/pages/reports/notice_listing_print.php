<?php
include('../../assets/fpdf/mc_table.php');

$number = 1;

class OrdinarioHeader extends PDF_MC_Table {
    function Header()
    {
        $this->Image('../../assets/img/Logo Only.png',33,5,12);
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        
        // Move to the right
        // $this->Cell(80);
        // Title
        // $this->Cell(30,10,'ORDINARIO PAWNSHOP AND JEWELRY',0,0,'C');
        $this->setX(45);
        $this->Write(10,'ORDINARIO PAWNSHOP AND JEWELRY');
        $this->SetFont('Arial','B',10);
        $this->setXY(80,15);
        $this->Write(10,'Daet, Camarines Norte 4600 ');
        $this->setXY(87,20);
        $this->Write(10,'Tel No: 0544403834');

        // $this->Cell(-36);
        // $this->SetLeftMargin(-20);
        // $this->Cell(30,23,'Daet, Camarines Norte 4600 ');
        // $this->Cell(-111);
        // $this->Cell(30,32,'Tel No: 0544403834');

        // Line break
        $this->Ln(23);
    }
}
$fpdf = new OrdinarioHeader;
$fpdf->AddPage();
// Set font
$fpdf->SetFont('Arial','B',11);
// Move to 8 cm to the right
$fpdf->SetXY(20, 35);

$fpdf->Cell(20,20,'NOTICE LISTING');

$fpdf->SetFont('Arial','',12);
$fpdf->SetXY(20, 45);
$fpdf->Cell(20,20,'Auction Date (Jewelry)');
$fpdf->SetXY(20, 50);
$fpdf->Cell(20,20,'Auction Date (Non-Jewelry)');


// table

/*
$fpdf->Cell(20,10,'No', 1,0,'C');

$fpdf->Cell(60,10,'Customer', 1,0,'C');
$fpdf->Cell(80,10,'Address', 1,0,'C');
$fpdf->Cell(25,10,'PT #', 1,0,'C');
$fpdf->Ln();
*/
$fpdf->SetY(70);
$fpdf->SetLeftMargin(15);
$fpdf->SetFont('Arial','B',11);

$fpdf->SetWidths(array(20,60,70,30));
$fpdf->SetAligns(array('C','C','C','C'));

$fpdf->Row(array('No','Customer','Address','PT #'));

// $fpdf->SetXY(50, 65);

// $fpdf->SetXY(110, 65);

// $fpdf->SetXY(175, 65);
while($number <= 30){
    $fpdf->SetX(15);
    $fpdf->SetFont('Arial','',11);
    $customer = 'The quick brown fox jumps over the lazy dog near the riverbanks';
    $fpdf->SetAligns(array('C','L','L','C'));

    $fpdf->Row(array($number,$customer,$customer,str_pad($number, 6, '0', STR_PAD_LEFT)));

    // $fpdf->MultiCell( 20, 10, $customer, 1);
    // $fpdf->MultiCell( 60, 10, "Hello", 1);
    // $fpdf->Cell(60,10,$customer, 1,0,'C');
    // $fpdf->Cell(80,10,'Address', 1,0,'C');
    // $fpdf->Cell(25,10,'PT #', 1,0,'C');
    // $fpdf->Ln();


    $number++;
}
$fpdf->Output();
?>