<?php

define("MAJOR", '');
define("MINOR", '');
class toWords{
    var $pounds;
    var $pence;
    var $major;
    var $minor;
    var $words = '';
    var $number;
    var $magind;
    var $units = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
    var $teens = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
    var $tens = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');
    var $mag = array('', 'thousand', 'million', 'billion', 'trillion');

    function toWords($amount, $major = MAJOR, $minor = MINOR)
    {
        $this->__toWords__((int)($amount), $major);
        $whole_number_part = $this->words;
        #$right_of_decimal = (int)(($amount-(int)$amount) * 100);
        $strform = number_format($amount,2);
        $right_of_decimal = (int)substr($strform, strpos($strform,'.')+1);
        $this->__toWords__($right_of_decimal, $minor);
        $this->words = $whole_number_part . ' ' . $this->words;
    }

    function __toWords__($amount, $major)
    {
        $this->major  = $major;
        #$this->minor  = $minor;
        $this->number = number_format($amount, 2);
        list($this->pounds, $this->pence) = explode('.', $this->number);
        $this->words = " $this->major";
        if ($this->pounds == 0)
            $this->words = "PESOS $this->words";
        else {
            $groups = explode(',', $this->pounds);
            $groups = array_reverse($groups);
            for ($this->magind = 0; $this->magind < count($groups); $this->magind++) {
                if (($this->magind == 1) && (strpos($this->words, 'hundred') === false) && ($groups[0] != '000'))
                    $this->words = ' and ' . $this->words;
                $this->words = $this->_build($groups[$this->magind]) . $this->words;
            }
        }
    }

    function _build($n)
    {
        $res = '';
        $na  = str_pad("$n", 3, "0", STR_PAD_LEFT);
        if ($na == '000')
            return '';
        if ($na{0} != 0)
            $res = ' ' . $this->units[$na{0}] . ' hundred';
        if (($na{1} == '0') && ($na{2} == '0'))
            return $res . ' ' . $this->mag[$this->magind];
        $res .= $res == '' ? '' : ' and';
        $t = (int) $na{1};
        $u = (int) $na{2};
        switch ($t) {
            case 0:
                $res .= ' ' . $this->units[$u];
                break;
            case 1:
                $res .= ' ' . $this->teens[$u];
                break;
            default:
                $res .= ' ' . $this->tens[$t] . ' ' . $this->units[$u];
                break;
        }
        $res .= ' ' . $this->mag[$this->magind];
        return $res;
    }
}

include('../../assets/fpdf/fpdf.php');

$fpdf = new FPDF;
$obj = new toWords($_GET['appraised_value']);

$fpdf->AddPage();

$fpdf->SetFont('Arial','',8.5);
$fpdf->SetX(10);
$fpdf->Write(0,'Processed By: XXX');

$fpdf->SetX(75);
$fpdf->Write(0,'OPEN Monday - Sunday 08:00 AM to 05:00 PM');

$fpdf->SetX(170);
$fpdf->Write(0,date('Y-m-d H:i:s'));

$fpdf->SetFont('Arial','',13);
$fpdf->SetXY(97,20);
$fpdf->Write(0,'Sanglaan');

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(20,30);
$fpdf->Write(0,'ORIGINAL');

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(98,28);
$fpdf->Write(0,'Daet A. Branch');

$fpdf->SetXY(94,32);
$fpdf->Write(0,'Daet, Camarines Norte');

$fpdf->SetXY(90,36);
$fpdf->Write(0,'FOR INQUIRY Call/Text 1234');

$fpdf->SetXY(94,40);
$fpdf->Write(0,'TIN 11111111 Non-Vat');

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(170,30);
$fpdf->Write(0,'PT 00001');

$fpdf->SetFont('Arial','',8);
$fpdf->SetXY(5,45);
$fpdf->Write(0,'Date Loan Granted: '.date('M d, Y', strtotime($_GET['transaction_date'])));

$fpdf->SetXY(156,45);
$fpdf->Write(0,'Maturity Date: '.date('M d, Y', strtotime($_GET['maturity_date'])));
$fpdf->SetXY(135,50);
$fpdf->Write(0,'Loan Redemption Expiry Date: '.date('M d, Y', strtotime($_GET['expiration_date'])));

$fpdf->SetXY(10,55);
$fpdf->Write(5,'Pawnee '.$_GET['customer'].', residing at Brgy. VI, Daet Camarines NOrte for a loan of '.strtoupper($obj->words).' (P '.$obj->number.'), with three percent (3.00%) interest per month pledged in security for the loan as described and appraised at SIX THOUSAND PESOS (P 6,000.00), subject to the terms and conditions of the pawn.');

$fpdf->Output();
?>