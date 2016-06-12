<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'webexcel@123';
$dbname = 'rossary';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

@extract($_POST);
$sql1="INSERT INTO admission (StudentName, DOB, BirthPlace, Religion, BaptismDate, BaptismPlace, Priest, FatherName, Foccupation, Fqualification, FIncome, MotherName, Moccupation, Mqualification, MotherTongue, MIncome, Siblings, SiblingsName, Address, TelRes, TelOff, Mobile, Email) VALUES('StudentName', '$dob', '$BirthPlace', '$Religion', '$BaptismDate', '$BaptismPlace', '$Priest', '$fName', '$Focupation', '$Fqualification', '$Fincome', '$Mname', '$Moccupation', '$Mqualification', '$MotherTongue', '$Mincome', '$sibblings', '$SibblingsName', '$address', '$TelRes', '$TelOff', '$phone', '$email')";
$result = mysql_query($sql1) or die(mysql_error());

require_once('fpdf.php');
require_once('fpdi.php');

$appNo="13001";

$Religion="72,50";

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

$image1 = "arrow.png";
$pdf->Image($image1, 70,71);//70,93,131,111,152//Relegion

$pdf->SetXY(68, 83);
$pdf->Write(0, $BaptismDate);//Baptism

$pdf->SetXY(128, 83);
$pdf->Write(0, $BaptismPlace);//Baptism Place

$pdf->SetXY(75, 92);
$pdf->Write(0, $Priest);//Priest

$pdf->SetXY(75, 101);
$pdf->Write(0, $fName);//Fathers Name

$pdf->SetXY(75, 110);
$pdf->Write(0, $Focupation);//Occupation

$pdf->SetXY(43.5, 123);
$pdf->Write(0, $Fqualification);//Qualification

$pdf->SetXY(141, 123);
$pdf->Write(0, $Fincome);//Income

$pdf->SetXY(75, 132);
$pdf->Write(0, $Mname);//Mothers Name

$pdf->SetXY(43.5, 140);
$pdf->Write(0, $Mqualification);//MQualification

$pdf->SetXY(141, 140);
$pdf->Write(0, $Mincome);//MIncome

$pdf->SetXY(75, 149);
$pdf->Write(0, $Moccupation);//Occupation

$pdf->SetXY(59, 161);
$pdf->Write(0, $MotherTongue);//Mother Tongue

$image1 = "arrow.png";
$pdf->Image($image1, 171,165);//172,191//Siblings

$pdf->SetXY(59, 177);
$pdf->Write(0, $SibblingsName);//Sibling Name

$pdf->SetXY(59, 185);
$pdf->Write(0, $address);//Address

$pdf->SetXY(59, 193);
$pdf->Write(0, $TelRes);//TelRes

$pdf->SetXY(145, 193);
$pdf->Write(0, $TelOff);//TelOFF

$pdf->SetXY(35, 203);
$pdf->Write(0, $phone);//Mobile

$pdf->SetXY(110, 203);
$pdf->Write(0, $email);//Email


$pdf->Output('newpdf.pdf', 'D');
?>