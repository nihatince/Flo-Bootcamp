<?php 
require('fpdf/fpdf.php');

class PDF extends FPDF
{

	
	//[ Başlık ]
	function Header()
	{
		$date = date('d/m/Y');
		$this->Setfont('courier','B',20);
		$this->Image('../img/logo.fw.png',5,5,70);
		$this->Cell(130);
		$this->Cell(30,10,'BAGISCILAR TASLAK',0,1,'C');
		$this->Setfont('courier','',15);
		$this->Cell(130);
		$this->Cell(30,10,'SIRA NO : 1',0,1,'C');
		$this->Cell(18);
		$this->Cell(30,10,'SAYIN',0,0,'C');
		$this->Cell(80);
		$this->Cell(30,10,'TARIH : '.$date,0,1,'C');
		$this->Cell(20);
		$this->Cell(30,10,'NTBURS.',0,1,'C');
        $this->Ln(10);


	}
	
   function HeaderTable()
   {
   	$this->Setfont('courier','B',14);
   	$this->Cell(5,6,'ID',1,0,'C');
   	$this->Cell(40,6,'AD SOYAD',1,0,'C');
   	$this->Cell(40,6,'TELEFON',1,0,'C');
   	$this->Cell(90,6,'EMAIL',1,0,'C');
	$this->Cell(20,6,'BAGIS',1,1,'C');
   }


   function MainTable()
   {
   	$this->Setfont('courier','i',13);
	   $baglan = new PDO("mysql:host=localhost;dbname=burs","root","");
	   $baglan->query("set character set utf8");
	   $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   $baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	   $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$sorgu =$baglan->query("select * from bursveren");
	
	$idno= 0;
	$toplambagis = 0;

	function metinduzelt($metin){
		$bul 	= array("Ç","ç","İ","i","Ğ","ğ","Ö","ö","Ş","ş","Ü","ü");
		$degis  = array("C","c","I","i","G","g","O","o","S","s","U","u");
		$metin	= str_replace($bul, $degis, $metin);
		return $metin;
	}


	foreach($sorgu as $satir){
		$idno++;
		$toplambagis += $satir["bagis"];
	$this->Setfont('courier','B',10);
   	$this->Cell(5,6,"$idno",1,0,'C');
   	$this->Cell(40,6,metinduzelt("$satir[adsoyad]"),1,0,'C');
   	$this->Cell(40,6,"$satir[telefon]",1,0,'C');
   	$this->Cell(90,6,metinduzelt("$satir[email]"),1,0,'C');
	$this->Cell(20,6,"$satir[bagis] TL",1,1,'C');
	}

	$this->Setfont('courier','B',10);
   	$this->Cell(5,6,'',1,0,'C');
   	$this->Cell(40,6,'',1,0,'C');
   	$this->Cell(40,6,'',1,0,'C');
   	$this->Cell(90,6,'TOPLAM BAGIS',1,0,'C');
	$this->Cell(20,6,"$toplambagis TL",1,1,'C');
   }
  
	function Footer()
	{
		$this->SetY(-15);
		$this->Setfont('courier','i',20);
		$this->Cell(200,10,'BURS FATURA',0,0,'C');

	}

}


$pdf = new PDF();
$pdf->AddPage('P','A4');
$pdf->HeaderTable();
$pdf->MainTable();
$pdf->Output();



 ?>