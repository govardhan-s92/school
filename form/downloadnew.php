<?php


//@extract($GET);
$StudentName=$_GET['StudentName'];
$dob=$_GET['DOB'];
$Sno = $_GET['Sno'];
$StudentName = $_GET['StudentName'];
$dob = $_GET['DOB'];
$BirthPlace = $_GET['BirthPlace'];
$Religion = $_GET['Religion'];
$BaptismDate = $_GET['BaptismDate'];
$BaptismPlace = $_GET['BaptismPlace'];
$Priest = $_GET['Priest'];
$FatherName = $_GET['FatherName'];
$Foccupation = $_GET['Foccupation'];
$Fqualification = $_GET['Fqualification'];
$FIncome = $_GET['FIncome'];
$MotherName = $_GET['MotherName'];
$Moccupation = $_GET['Moccupation'];
$Mqualification = $_GET['Mqualification'];
$MotherTongue = $_GET['MotherTongue'];
$MIncome = $_GET['MIncome'];
$Siblings = $_GET['Siblings'];
$SiblingsName = $_GET['SiblingsName'];
$Address = $_GET['Address'];
$TelRes = $_GET['TelRes'];
$TelOff = $_GET['TelOff'];
$Mobile = $_GET['Mobile'];
$Email = $_GET['Email'];

$Rel=array("Rc"=>"70","Christian"=>"93","Hindu"=>"111","Muslim"=>"132","Others"=>"152");
$sib=array("yes"=>"171","no"=>"191");

require_once('fpdf.php');
require_once('fpdi.php');

$appNo=14000+$Sno;

// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the sourcefile
$pdf->setSourceFile('TestDoc1.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx,0,0);

// now write some text above the imported page
$pdf->SetXY(181, 50.5);
$pdf->Write(0, $appNo);//App No

$pdf->SetXY(52, 57);
$pdf->Write(0, $StudentName);//Name

$pdf->SetXY(52, 66);
$pdf->Write(0, $dob);//DOB

$pdf->SetXY(126, 66);
$pdf->Write(0, $BirthPlace);//birthPlace

$image2 = "arrow.png";
$pdf->Image($image2,$Rel[$Religion],71);//70,93,131,111,152//Relegion

$pdf->SetXY(68, 83);
$pdf->Write(0, $BaptismDate);//Baptism

$pdf->SetXY(128, 83);
$pdf->Write(0, $BaptismPlace);//Baptism Place

$pdf->SetXY(75, 92);
$pdf->Write(0, $Priest);//Priest

$pdf->SetXY(75, 101);
$pdf->Write(0, $FatherName);//Fathers Name

$pdf->SetXY(75, 110);
$pdf->Write(0, $Foccupation);//Occupation

$pdf->SetXY(43.5, 123);
$pdf->Write(0, $Fqualification);//Qualification

$pdf->SetXY(141, 123);
$pdf->Write(0, $FIncome);//Income

$pdf->SetXY(75, 131.5);
$pdf->Write(0, $MotherName);//Mothers Name

$pdf->SetXY(43.5, 140);
$pdf->Write(0, $Mqualification);//MQualification

$pdf->SetXY(141, 140);
$pdf->Write(0, $MIncome);//MIncome

$pdf->SetXY(75, 149);
$pdf->Write(0, $Moccupation);//Occupation

$pdf->SetXY(59, 160.5);
$pdf->Write(0, $MotherTongue);//Mother Tongue

$image1 = "arrow.png";
$pdf->Image($image1, $sib[$Siblings],165);//172,191//Siblings

$pdf->SetXY(59, 177);
$pdf->Write(0, $SiblingsName);//Sibling Name

//$pdf->SetXY(59, 185);
//$pdf->Write(0, $Address);//Address

$pdf->SetXY(59, 193);
$pdf->Write(0, $TelRes);//TelRes

$pdf->SetXY(144, 193);
$pdf->Write(0, $TelOff);//TelOFF

$pdf->SetXY(35, 202);
$pdf->Write(0, $Mobile);//Mobile

$pdf->SetXY(110, 202);
$pdf->Write(0, $Email);//Email


$pdf->Output('Application.pdf', 'D');

?>

